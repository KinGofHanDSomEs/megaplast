<?php

namespace App\Http\Controllers;

use App\Constants\ErrorMessages as EM;
use App\Constants\ValidationMessages as VM;
use App\Models\Order;
use App\Models\ProductType;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use Ramsey\Uuid\Type\Integer;

class ManageController extends Controller
{
    public function dashboardView() {
        if (!Auth::check()) return redirect()->route('system.auth.loginView');
        $user = Auth::user();

        return view('system.manage.dashboard', compact('user'));
    }

    public function ordersView(Request $request) {
        if (!Auth::check()) return redirect()->route('system.auth.loginView');

        $user = Auth::user();

        $statusCounts = [
            'all' => Order::where('user_id', Auth::id())->count(),
            'accepted' => Order::where('user_id', Auth::id())->where('status', 'accepted')->count(),
            'refine' => Order::where('user_id', Auth::id())->where('status', 'refine')->count(),
            'review' => Order::where('user_id', Auth::id())->where('status', 'review')->count(),
            'rejected' => Order::where('user_id', Auth::id())->where('status', 'rejected')->count(),
            'completed' => Order::where('user_id', Auth::id())->where('status', 'completed')->count(),
        ];

        $query = Order::where('user_id', Auth::id());

        $status = $request->query('status');

        $params = [];

        if ($status && in_array($status, array_keys($statusCounts))) {
            $params['status'] = $status;

            $query->where('status', $status);
        }

        $orders = $query->with('product_type')->orderBy('created_at', 'desc')->paginate(10);

        if ($status) {
            $orders->appends(['status' => $status]);
        }

        $productTypes = ProductType::all();

        return view('system.manage.orders', $params, compact('user', 'statusCounts', 'orders', 'productTypes'));
    }

    public function profileView() {
        if (!Auth::check()) return redirect()->route('system.auth.loginView');
        $user = Auth::user();

        return view('system.manage.profile', compact('user'));
    }

    public function changePersonalInformation(Request $request) {
        try {
            if ($request->email === Auth::user()['email']) {
                unset($request['email']);
            }

            $validated = $request->validate([
                'name' => ['bail', 'required', 'max:255'],
                'lastname' => ['bail', 'required', 'max:255'],
                'patronymic' => ['bail', 'max:255'],
                'phone' => ['bail', 'required', 'max:255'],
                'email' => ['bail', 'nullable', 'email', 'max:255', 'unique:users'],
            ], VM::messages());

            preg_match_all('/\d+/m', $validated['phone'], $matches, PREG_SET_ORDER);

            if (count($matches) === 0) {
                return redirect()->route('system.manage.profileView')->withErrors(['phone' => VM::INVALID_PHONE])->withInput();
            }

            $phone = '';

            foreach ($matches as $match) {
                $phone .= $match[0];
            }

            $validated['phone'] = $phone;

            Auth::user()->update($validated);

            return redirect()->route('system.manage.profileView')->with('success', 'Данные изменены!');
        } catch (ValidationException $e) {
            return redirect()->route('system.manage.profileView')->withErrors($e->errors());
        } catch (Exception $e) {
            logger()->error($e);

            return redirect()->route('system.manage.profileView')->withErrors([
                'error' => EM::INTERNAL,
            ]);
        }
    }

    public function changePassword(Request $request) {
        try {
            if (!Hash::check($request->old_password, Auth::user()['password'])) {
                return redirect()->route('system.manage.profileView', ['change' => 'pass'])->withErrors(['old_password' => 'Неверный пароль!']);
            }

            unset($request['old_password']);

            $validated = $request->validate([
                'password' => ['bail', 'required', 'min:8', 'confirmed', 'max:255'],
            ], VM::messages());

            Auth::user()->update($validated);

            return redirect()->route('system.manage.profileView', ['change' => 'pass'])->with('success', 'Данные изменены!');
        } catch (ValidationException $e) {
            return redirect()->route('system.manage.profileView', ['change' => 'pass'])->withErrors($e->errors());
        } catch (Exception $e) {
            logger()->error($e);

            return redirect()->route('system.manage.profileView', ['change' => 'pass'])->withErrors([
                'error' => EM::INTERNAL,
            ]);
        }
    }


}

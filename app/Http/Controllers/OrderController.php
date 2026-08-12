<?php

namespace App\Http\Controllers;

use App\Constants\ErrorMessages as EM;
use App\Constants\ValidationMessages as VM;
use App\Models\Order;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class OrderController extends Controller
{
    public function create(Request $request) {
        try {
            $validated = $request->validate([
                'type_id' => ['bail', 'required', 'integer'],
                'message' => ['bail', 'required', 'string'],
                'montage_address' => ['bail', 'nullable', 'string'],
            ], VM::messages());

            $validated['user_id'] = Auth::id();

            if (!Order::create($validated)) {
                return redirect()->route('system.manage.ordersView')->withErrors(['error' => EM::INVALID_CREATE])->withInput();
            }

            return redirect()->route('system.manage.ordersView')->with(['success' => 'Заказ создан!'])->withInput();
        } catch (ValidationException $e) {
            return redirect()->route('system.manage.ordersView')->withErrors($e->errors())->withInput();
        } catch (Exception $e) {
            logger()->error($e);

            return redirect()->route('system.manage.ordersView')->withErrors([
                'error' => EM::INTERNAL,
            ])->withInput();
        }
    }

    public function update(string $id, Request $request) {
        try {
            $order = Order::where('user_id', Auth::id())->find($id);

            if (!$order) {
                return redirect()->back()->withErrors(['error' => EM::INVALID_UPDATE]);
            }

            $validated = $request->validate([
                'type_id' => ['required', 'integer'],
                'message' => ['required', 'string'],
                'montage_address' => ['bail', 'nullable', 'string'],
            ], VM::messages());

            $validated['status'] = 'review';
            $validated['remaining_price'] = null;
            $validated['execution_at'] = null;
            $validated['rejection_message'] = null;
            $validated['price'] = null;

            if (!$order->update($validated)) {
                return redirect()->back()->withErrors(['error' => EM::INVALID_UPDATE]);
            }

            return redirect()->back()->with(['success' => 'Заказ обновлен!']);
        } catch (ValidationException $e) {
            return redirect()->back()->withErrors($e->errors());
        } catch (Exception $e) {
            logger()->error($e);

            return redirect()->back()->withErrors([
                'error' => EM::INTERNAL,
            ])->withInput();
        }
    }

    public function delete(string $id) {
        try {
            $id = (int)$id;

            if ($id < 1) {
                return redirect()->back()->withErrors(['error' => EM::INVALID_DELETE]);
            }

            $order = Order::where('user_id', Auth::id())->find($id);

            if ($order && !in_array($order['status'], ['accepted', 'completed']) && $order['price'] === $order['remaining_price']) {
                $order->delete();
            }

            return redirect()->back()->with(['success' => 'Заказ удален!']);
        } catch (Exception $e) {
            logger()->error($e);

            return redirect()->back()->withErrors([
                'error' => EM::INTERNAL,
            ]);
        }
    }
}

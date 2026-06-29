<?php

namespace App\Http\Controllers;

use App\Constants\ErrorMessages as EM;
use App\Constants\ValidationMessages as VM;
use Carbon\Carbon;
use Exception;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    public function loginView()
    {
        if (Auth::check()) return view('system.manage.profile');

        return view('system.auth.login');
    }

    public function registerView()
    {
        if (Auth::check()) return view('system.manage.profile');

        return view('system.auth.register');
    }

    public function profileView()
    {
        if (!Auth::check()) return view('system.auth.login');

        return view('system.manage.profile');
    }

    public function login(Request $request) {
        try {
            $remember = $request->has('remember');

            $validated = $request->validate([
                'email' => ['bail', 'required', 'max:255'],
                'password' => ['bail', 'required', 'max:255'],
            ], VM::messages());

            if (Auth::attempt([
                'email' => $validated['email'],
                'password' => $validated['password']
            ], $remember)) {
                Auth::user()->update(['last_login_at' => Carbon::now()]);

                return redirect()->route('system.manage.profileView');
            }

            return redirect()->route('system.auth.loginView')->withErrors([
                'email' => VM::INVALID_LOGIN,
                'password' => VM::INVALID_LOGIN
            ])->withInput();
        } catch (ValidationException $e) {
            return redirect()->route('system.auth.loginView')->withErrors($e->errors())->withInput();
        } catch (Exception $e) {
            logger()->error($e);

            return redirect()->route('system.auth.loginView')->withErrors([
                'error' => EM::INTERNAL,
            ])->withInput();
        }
    }

    public function register(Request $request) {
        try {
            if (!$request->has('agreement')) {
                return redirect()->route('system.auth.registerView')->withErrors(['agreement' => 'Для регистрации примите условия'])->withInput();
            }

            $validated = $request->validate([
                'name' => ['bail', 'required', 'max:255'],
                'lastname' => ['bail', 'required', 'max:255'],
                'patronymic' => ['bail', 'max:255'],
                'phone' => ['bail', 'required', 'max:255'],
                'email' => ['bail', 'required', 'email', 'max:255', 'unique:users'],
                'password' => ['bail', 'required', 'min:8', 'max:255', 'confirmed'],
            ], VM::messages());

            preg_match_all('/\d+/m', $validated['phone'], $matches, PREG_SET_ORDER);

            if (count($matches) === 0) {
                return redirect()->route('system.auth.registerView')->withErrors(['phone' => VM::INVALID_PHONE])->withInput();
            }

            $phone = '';

            foreach ($matches as $match) {
                $phone .= $match[0];
            }

            $validated['phone'] = $phone;

            $user = User::create($validated);

            $user->update(['last_login_at' => Carbon::now()]);

            Auth::login($user);

            return redirect()->route('system.manage.profileView');
        } catch (ValidationException $e) {
            return redirect()->route('system.auth.registerView')->withErrors($e->errors())->withInput();
        } catch (Exception $e) {
            logger()->error($e);

            return redirect()->route('system.auth.registerView')->withErrors([
                'error' => EM::INTERNAL,
            ])->withInput();
        }
    }

    public function logout() {
        try {
            Auth::logout();

            return redirect()->route('information.index');
        } catch (Exception $e) {
            logger()->error($e);

            return redirect()->route('system.manage.profileView')->withErrors([
                'error' => EM::INTERNAL,
            ])->withInput();
        }
    }
}

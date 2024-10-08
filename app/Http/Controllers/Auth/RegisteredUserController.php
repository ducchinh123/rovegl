<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate(
            [
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . User::class],
                'password' => ['required', 'confirmed', Rules\Password::defaults()],
            ],
            [
                'name.required' => 'Tên là bắt buộc.',
                'name.string' => 'Tên phải là một chuỗi ký tự.',
                'name.max' => 'Tên không được vượt quá :max ký tự.',

                'email.required' => 'Địa chỉ email là bắt buộc.',
                'email.string' => 'Địa chỉ email phải là một chuỗi ký tự.',
                'email.lowercase' => 'Địa chỉ email phải viết thường.',
                'email.email' => 'Địa chỉ email không hợp lệ.',
                'email.max' => 'Địa chỉ email không được vượt quá :max ký tự.',
                'email.unique' => 'Địa chỉ email đã được sử dụng.',

                'password.required' => 'Mật khẩu là bắt buộc.',
                'password.confirmed' => 'Xác nhận mật khẩu không khớp.',
                'password' => 'Mật khẩu không hợp lệ.',
            ]
        );


        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}

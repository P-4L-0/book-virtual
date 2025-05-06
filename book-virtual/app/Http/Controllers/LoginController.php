<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Usuario;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use function PHPUnit\Framework\callback;

class LoginController extends Controller
{
    public function loginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {

        //validamos informacion
        $request->validate(
            [
                'email' => ['required', 'email'],
                'password' => ['required']
            ]
        );


        //comprobamos la existencia del usuario
        $user = User::where('email', $request->email)->first();

        if ($user and Hash::check($request->password, $user->password)) {
            //guardamos su session
            // session(['usuario_id => $user->id]); 
            return redirect()->intended('about');
        }

        return back()->withErrors(
            ['email' => 'Credenciales invalidas']
        )->withInput();
    }

    public function logout(Request $request)
    {
        $request->session()->forget('usuario_id');
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('login');
    }

}

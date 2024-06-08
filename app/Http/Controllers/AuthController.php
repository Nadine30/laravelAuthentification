<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    public function create()
    {
        return view('welcome');
    }

    public function store(Request $request)
    {
        $email= $request->email;
        $pwd1= $request->password1;
        $pwd2= $request->password2;

        $request->validate(
            [
                'email'=>'required|email',
                'password1'=>'required|min:5|max:10',
                'password2'=>'required|min:5|max:10'
            ]
            );

        if($pwd1!=$pwd2)
        {
            $dif=1;
            return redirect()->back()->with(compact('dif'));
        }
        $data= User::create([
            'name'=>'Nado',
            'email'=>$email,
            'password'=>$pwd1
        ]);
        return view('connexion');
    }

    public function createConnexion()
    {
        return view('connexion');
    }

    public function storeConnexion(Request $request)
    {
        $email= $request->email;
        $password= $request->password;

        $data= User::where([
            ['email',$email],
            ['password',Hash::make($password)]
        ])->first();
        dd($data);
    }
}

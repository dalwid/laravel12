<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Exception;

class UserController extends Controller
{
    public function create():mixed
    {
       // Carregar a view
       return view('users.create');
    }

    public function store(UserRequest $request)
    {

        try{

            User::create([
                'name'      => $request->name,
                'email'     => $request->email,
                'password'  => $request->password
            ]);

            return redirect()->route('user.create')->with('success', 'Usuário cadastrado com sucesso.');
        }catch(Exception $e){
            return back()->withInput()->with('error', 'Usuário não cadastrado.');
        }

    }
}

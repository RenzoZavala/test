<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
	//public function __invoke()
    public function index()
    {
    	$users = User::all();
    	//dd($users);
    	$title = "Listado de usuarios";
    	//return view("user",["numerito" => $numerito]);
    	return view('user',compact('title','users'));
    }
    public function show(User $user)
    {
    	return view('show',compact('user'));
    }
    public function new()
    {
        return view('new');
    }
    public function store()
    { 
        $data = request()->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password'=> 'required|',
            ],
            [
                'name.required' => 'Ingrese su nombre porfavor',
                'email.required' => 'Ingrese su correo porfavor',
                'password.required' => 'Ingrese una contraseña porfavor',
            ]);
        User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
        return redirect()->route('user.list');
    }
    public function edit(User $user)
    {
        return view('edit',['user' => $user]);
    }
    public function update(User $user)
    {
        $data = request()->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email,'.$user->id,
            'password'=> '',
            ],
            [
                'name.required' => 'Ingrese su nombre porfavor',
                'email.required' => 'Ingrese su correo porfavor',
                'password.required' => 'Ingrese una contraseña porfavor',
            ]);
        if($data['password']!= null){
            $data['password']= bcrypt($data['password']);
        }
        else{
            unset($data['password']);
        }
        $user->update($data);
        return redirect()->route('user.list',['user' => $user]);
    }
}

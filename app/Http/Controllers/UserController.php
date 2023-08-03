<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $user = \DB::table("users")->get();
        return view('users.index', [
            'users' => $user,
        ]);
    }

    public function create()
    {
        return view('users.create');
    }


    public function store(Request $request)
    {

        $user = new User();
        $user ->name = $request->input('name');
        $user ->email = $request->input('email');
        $user ->password = $request->input('password');
        $user->save();
        return redirect('/user');
    }

    public function show($id)
    {
        // Hiển thị thông tin chi tiết một món ăn
    }

    public function edit($id)
    {
        $user  = User::Find($id);

        return view('users.edit')->with('user', $user );
    }

    public function update(Request $request, $id)
    {
        $user = User::where('id',$id)
            ->update([
                'name' =>$request->input('name'),
                'password'=>$request->input('password'),
                'email' => $request->input('email'),
            ]);
        return redirect('/user');
    }

    public function destroy($id)
    {
        $user = User::Find($id);
        $user -> delete();
        return redirect('/user');
    }

}

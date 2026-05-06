<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\Models\User;

class UserController extends Controller
{
    public function index () {
        return view('register');
    }

    public function store(UserRequest $request) {
        $user = $request->only('name','email','password');
        User::create($user);
        return view('/admin');
    }

    public function show(Request $request) {
        $categories = Category::all();
        $contact =Contact::all();

        return view('admin',compact('categories','contact'));
    }
}

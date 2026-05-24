<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Category;
use App\Http\Requests\ContactRequest;

class AuthController extends Controller
{
    public function index(ContactRequest $request) {
        $categories = Category::all();
        $contacts = Contact::all();
        $category = $request->only(['content']);
        return view('admin', compact('categories','contacts'),['categoryContent' => $category->content,]);
    }
}

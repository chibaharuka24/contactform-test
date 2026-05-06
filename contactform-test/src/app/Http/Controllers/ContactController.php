<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Category;
use App\Http\Requests\ContactRequest;


class ContactController extends Controller
{
    public function index() {
        $categories = Category::all();
        return view ('contact', compact('categories'));
    }

    public function confirm(ContactRequest $request) {
        $tel = $request->tel1.''.$request->tel2.''.$request->tel3;
        $tels = [
            'tel' => $tel,
        ];
        $contact = $request->only('first_name','last_name','gender','email','tel1','tel2','tel3','address','building','detail');
        $validated = $request->validate([
            'category_id' => 'required|exists:categories,id',
        ]);
        $category = Category::find($validated['category_id']);
        return view('confirm', compact('contact'),['input' => $validated,
        'categoryContent' => $category->content,]);
    }

    public function create (Request $request) {
        $tel = $request->tel1.''.$request->tel2.''.$request->tel3;
        $request->merge([
            'tel' => $tel,
        ]);

        $contact = $request->only('first_name','last_name','gender','email','tel','address','building','category_id','detail');
        Contact::create($contact);
        return view('thanks');
    }
}


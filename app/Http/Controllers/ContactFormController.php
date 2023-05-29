<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactForm;

class ContactFormController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ]);

        ContactForm::create($data);

        return redirect()->back()->with('success', 'Message sent successfully!');
    }


    public function showComments()
{
    $comments = ContactForm::all();
    return view('admin.admin_comments', compact('comments'));
}

}

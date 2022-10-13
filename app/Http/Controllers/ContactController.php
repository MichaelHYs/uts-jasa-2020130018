<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
  public function create()
  {

    return view('contact');
  }

  public function store(Request $request)
  {
      $request->validate([
          'name'          => 'required',
          'email'         => 'required',
          'subject' => 'required',
          'mobile_number' => 'required',
          'message'       => 'required',
      ]);

      Contact::create([
        'name' => $request->name,
        'email' => $request->email,
        'subject' => $request->subject,
        'mobile_number' => $request->mobile_number,
        'message' => $request->message,
      ]);

      return response()->json(['success'=>'Contact form submitted successfully']);
  }
}

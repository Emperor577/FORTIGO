<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function contactForm(Request $request)
    {
        $form = new Message();
        $form->name = $request['name'];
        $form->email = $request['email'];
        $form->phone = $request['phone'];
        $form->subject = $request['subject'];
        $form->from = 'contact_form';
        $form->text = $request['message'];
        $form->save();

        return redirect()->back();
    }

    public function callBack(Request $request)
    {
        $form = new Message();
        $form->name = $request['name'];
        $form->phone = $request['phone'];
        $form->from = 'call_back_form';
        $form->save();
        
        return redirect()->back();
    }
}

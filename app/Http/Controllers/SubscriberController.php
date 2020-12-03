<?php

namespace App\Http\Controllers;
use App\Subscriber;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;

class SubscriberController extends Controller
{

    public function store(Request $request){

    $this->validate($request,[

    	'email' => 'required|email|unique:subscribers'

     ]);

    $subscriber = new Subscriber();
    $subscriber->email = $request->email;
    $subscriber->save(); 

    Toastr::success('You Successfully add your subscriber list :)','Success');
    return redirect()->back();

    }

}

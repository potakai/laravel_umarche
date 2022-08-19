<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class componentTestController extends Controller
{
    //
    public function showcomponent1 (){
        $message = 'メッセージ123';
        return view('tests.component-test1',
        compact('message'));
    }
    public function showcomponent2 (){
        return view('tests.component-test2');
    }
}

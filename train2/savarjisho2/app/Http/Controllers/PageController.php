<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function About(){
        return view("Pages.about");
    }
    public function Home(){
        return view("Pages.home");
    }

    public function Post(Request $request){
        $email = $request->input('email');
        $color = true;
        return view("Pages.email",[
            'mail' => $email,
            'condition' => $color
        ]);
    }
    
}

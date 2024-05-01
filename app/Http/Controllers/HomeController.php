<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
class HomeController extends Controller
{
    //
    public function __construct(){
        $this->middleware('auth');

    }
    public function index(){
        $data=[
            'message'=>'Welcome to our Enterprise Quiz Application'
        ];
        //Returning the view
        return view('Quiz.home',$data);
    }
}

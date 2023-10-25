<?php

namespace App\Http\Controllers;
//We need to interact with our model 
use App\Models\Crud;
use App\Models\Member;

use Illuminate\Http\Request;

class CrudController extends Controller
{
    //
    public function index()
    {
       
      
      return view('crud.index');

    }
    public function create()
    {
        return view('crud.create');
    }
    public function store(Request $request)
    {
     
      $data=new Member;
      $data->name=$request->name;
      $data->contacts=$request->contacts;
      $data->gender=$request->gender;
      $data->about=$request->about;

      echo $data->save();


    }

    public function edit(Crud $product )
    
    {
        return view('crud.index');

    }
   
}

@extends('layout.app')
@section('title','Update CRUD')
@section('content')
<div class="col-md-8-offset ">
  
    
      
<form class="form" method="POST" action="{{route('crud.update',['member'=>$bethel])}}">
    @csrf
    @method('patch')
 
    <div class="row">
        <div class="col">
    <div class="form-group">
        <label for="name"> Names</label>
        <input type="text" name="name" id="name"  class="form-control"  value="{{$bethel->name}}" required />
       
    </div>
        </div>
        <div class="col">
    <div class="form-group">
        <label for="sex"> Sex</label>
        <input type="text" name="sex" id="sex" value="{{$bethel->sex}}" class="form-control"  required />
        <small class="form-text text-muted">What's your sex ? </small>
    </div>
        </div>
</div>
    <div class="form-group">
        <label for="about"> About </label>
        <textarea name="about" id="about" class="form-control" cols="10" rows="10" required> {{$bethel->about}}</textarea>
    </div>
    <button type="submit" class="btn btn-warning btn-sm my-2"> Update Details </button>
</form>
</div>



@endsection 
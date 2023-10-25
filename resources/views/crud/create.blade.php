@extends('layout.app')
@section('title','Create CRUD')
@section('content')
<div class="col-md-5">
    CRUD App Create
</div>
<div class="col-md-8-offset ">
  
    
      
<form class="form" method="POST" action="{{route('crud.store')}}">
    @method('post')
    @csrf
    <div class="row">
        <div class="col">
    <div class="form-group">
        <label for="name"> Names</label>
        <input type="text" name="name" id="name" class="form-control" placeholder="Enter your names..." required />
       
    </div>
        </div>
        <div class="col">
    <div class="form-group">
        <label for="sex"> Sex</label>
        <input type="text" name="sex" id="sex" class="form-control" placeholder="Enter your sex" required />
        <small class="form-text text-muted">What's your sex ? </small>
    </div>
        </div>
</div>
    <div class="form-group">
        <label for="about"> About </label>
        <textarea name="about" id="about" class="form-control" cols="10" rows="10" required> Enter you bio here ...</textarea>
    </div>
    <button type="submit" class="btn btn-success btn-sm my-2"> Submit Details </button>
</form>
</div>



@endsection 
@extends('layout.app') <!-- We have extended the layout/app.blade.php here actually-->
@section('title','Home Page')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 mx-auto">
                <div class="card">
                    <div class="card-header col-md-5">
                        <h2> Laravel 10 CRUD Application </h2>
                    </div>
    
                </div>
                <div class="card-body">
                
                     <a href="{{route('crud.create')}}" class="btn btn-secondary btn-sm my-5">Add New Details</a>
    
                     <table class="table table-responsive table-hovered" border="1">
                        <tr>
                            <th>ID  </th>
                            <th> Name </th>
                            <th> Sex </th>
                            <th> About </th>
                            <th> Edit </th>
                            <th> Delete </th>
                        </tr>
                        @foreach($members as $member)
                        <tr> 
                            <td> {{ $member->id}} </td>
                            <td> {{ $member->name}} </td>
                            <td> {{ $member->sex}} </td>
                            <td> {{ $member->about}} </td>
                            <td> <a href="{{route('crud.edit',['member'=>$member->id])}}" class="btn btn-primary btn-sm">Edit </a></td>
                         
                            <td>
                                <form method="POST" action="{{route('crud.destroy',['member'=>$member])}}" style="display:inline">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger btn-sm"> Delete </button>
                                </form>

                            </td>
                     
                        </tr>
    
                        @endforeach
                    
                    </table>
                    </div>
            </div>
        </div>
    </div>
    
   @endsection

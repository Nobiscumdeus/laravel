@extends('layout.bethel')
@section('title','Bethel Tabernacle')
@section('content')

    
   
<h5 class="text-center"> <i>Our God sitteth upon the circle of the earth --Isaiah 40:22 </i> </h5>
<div class="solar-system">
  
    
    <div class="earth-circle" id="earth-circle"></div>
    <div class="sun"></div>
    <div class="earth">
        <div class="moon-circle"></div>
        <div class="moon" id="moon"></div>
    </div>
</div>

<div class="col-md-6 offset-3 my-3">
    <div class="row">
        <div class="col">
            <button id="showSundayFormButton" class="btn btn-success btn-lg" onClick="toggleForm('sunday')"> Sunday Form</button>
        </div>
        <div class="col-md-5">
            <button id="showWednesdayFormButton" class="btn btn-success btn-lg" onClick="toggleForm('wednesday')"> Wednesday Form </button>
        </div>
    </div>
    <div class="row">
        @if (Session::has('success'))
        
        <div class="alert alert-success alert-dismissible fade show my-3" role="alert">
            <strong> {{ Session::get('success')}}</strong> 
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        @endif
    </div>
</div>
<div class="container-fluid my-5">
    <div class="row">

<!-- Sunday Data -->
        <div class="col-md-5 offset-md-4 my-3 dayForm" id="sundayForm">
            <div class="card">
            <div class="card-header">
               <h2> Attendance for Sundays </h2>
              
            </div>
            <div class="card-body">
                

            <form class="form py-2"  method="POST" action="{{route('bethelattendancesunday.store')}}" id="sundayForm">
                @csrf
                @method('POST')
                <div class="form-group mb-3">
                    
                    <input type="number" class="form-control form-control-lg" name="men" id="sundaymen" placeholder="Number of men" min="0" max="500" required />
                </div>
                <div class="form-group mb-3">
                    <input type="number" class="form-control form-control-lg" name="women" id="sundaywomen" placeholder="Number of women"  min="0" max="500" required />
                </div>
                <div class="form-group mb-3">
                    <input type="number" class="form-control form-control-lg" name="children" id="sundaychildren" placeholder="Number of children"  min="0" max="500" required />
                </div>
                <div class="form-group mb-3">
                    <input type="number" class="form-control form-control-lg" name="guests" id="sundayguests" placeholder="Number of guests"  min="0" max="500" required />
                </div>
                <div class="form-group mb-3">
                    <input type="number" class="form-control form-control-lg" name="converts" id="sundayconverts" placeholder="Number of converts"  min="0" max="500" required />
                </div>
                <div class="form-group mb-3">
                    <input type="hidden" class="form-control form-control-lg" name="total" id="sundaytotal" />
                </div>

                <div class="form-group mb-3">
                    <input type="text" class="form-control form-control-lg" placeholder="Sum of Attendance" aria-label="Real time total" disabled />
                   <input type="text" class="form-control form-control-lg" id="sundaytotaldisplay" readonly/>
                </div>
                <div class="row">
                    <div class="col">
                <div class="form-group mb-3">
                    <input type="string" class="form-control form-control-lg" name="message" id="sundaymessage" placeholder="Title of Message" required />
                </div>
            </div>
            <div class="col">
                <div class="form-group mb-3">
                    <input type="string" class="form-control form-control-lg" name="minister" id="sundayminister" placeholder="Name of Minister" required />
                </div>
            </div>
            </div>
                <div class="form-group mb-3">
                    <input type="date" class="form-control form-control-lg" name="date" id="sundaydate"  required />
                </div>
                <button type="submit" class="btn btn-success btn-lg"> Upload </button>
            </form>
        </div> <!---  ends the card body -->
        <div class="card-footer bg-dark text-light">
          
            <h5>Bethel Tabernacle is the place to be ...</h5>
        </div>

        </div>

        </div>
    </div>


    <!-- Wednesday Data -->
    <div class="row">
       
        <div class="col-md-5 offset-md-4 my-3 dayForm" id="wednesdayForm">
            <div class="card">
                <div class="card-header">
                    <h2> Attendance for Wednesdays </h2>
                </div> <!-- End  of card header -->
          <div class="card-body">
                <form class="form py-2"  method="POST" action="{{route('bethelattendancewednesday.store')}}" id="wednesdayForm">
                   @csrf
                   @method('POST')
                    <div class="form-group mb-3">
                        <input type="number" class="form-control form-control-lg" name="men" id="wednesdaymen" placeholder="Number of men" min="0" max="500" required />
                    </div>
                    <div class="form-group mb-3">
                        <input type="number" class="form-control form-control-lg" name="women" id="wednesdaywomen" placeholder="Number of women"  min="0" max="500" required />
                    </div>
                    <div class="form-group mb-3">
                        <input type="number" class="form-control form-control-lg" name="children" id="wednesdaychildren" placeholder="Number of children"  min="0" max="500" required />
                    </div>
                    <div class="form-group mb-3">
                        <input type="number" class="form-control form-control-lg" name="guests" id="wednesdayguests" placeholder="Number of guests"  min="0" max="500" required />
                    </div>
                    <div class="form-group mb-3">
                        <input type="number" class="form-control form-control-lg" name="converts" id="wednesdayconverts" placeholder="Number of converts"  min="0" max="500" required />
                    </div>
                    <div class="form-group mb-3">
                        <input type="hidden" class="form-control form-control-lg" name="total" id="wednesdaytotal" />
                    </div>
                    <div class="form-group mb-3">
                       <input type="text" class="form-control form-control-lg " placeholder="Sum of Attendance" aria-label="Real time total" disabled />
                       <input type="text" class="form-control form-control-lg" id="wednesdaytotaldisplay" readonly/>
                       
                    </div>
                    <div class="row">
                        <div class="col">
                    <div class="form-group mb-3">
                        <input type="string" class="form-control form-control-lg" name="message" id="wednesdaymessage" placeholder="Title of Message" required />
                    </div>
                </div>
                <div class="col">
                    <div class="form-group mb-3">
                        <input type="string" class="form-control form-control-lg" name="minister" id="wednesdayminister" placeholder="Name of Minister" required />
                    </div>
                </div>
                </div>
                    <div class="form-group mb-3">
                        <input type="date" class="form-control form-control-lg" name="date" id="wednesdaydate"  required />
                    </div>
                    <button type="submit" class="btn btn-primary btn-lg"> Upload</button>
                </form>
          </div> <!-- End of Card body -->
          <div class="card-footer bg-dark text-light">
          
            <h5> Bethel Tabernacle is the place to be ... </h5>
          </div> <!-- End of card footer -->
            </div> <!-- End of card itself -->
       
    </div>
</div>
@endsection 

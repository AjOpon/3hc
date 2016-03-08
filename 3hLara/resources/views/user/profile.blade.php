@extends('layout.profmaster')
@section('content')
<hr class="style-one">
<div class="container-fluid">
      
        <div class="row"></div>
   
        <div class="col-sm-12 ">
          <h2 class="header aref">Hey {{ $input }}, you can edit your profile here</h2>

          <div class="row placeholders">
            <div class="col-xs-6 col-sm-3 placeholder">
              <img src="{{asset('images/albumCovers/BlankCanvaCover.jpg')}}" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
              <h4>Label</h4>
              <span class="text-muted">Something else</span>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
              <img src="{{asset('images/albumCovers/BlankCanvaCover.jpg')}}" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
              <h4>Label</h4>
              <span class="text-muted">Something else</span>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
              <img src="{{asset('images/albumCovers/BlankCanvaCover.jpg')}}" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
              <h4>Label</h4>
              <span class="text-muted">Something else</span>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
              <img src="{{asset('images/albumCovers/BlankCanvaCover.jpg')}}" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
              <h4>Label</h4>
              <span class="text-muted">Something else</span>
            </div>
          </div>

          <h2 class="sub-header">Section title</h2>
          <div class="container-fluid">
            @include('business.partnersContacts')
          </div>
        </div>
       
    </div>
    @endsection
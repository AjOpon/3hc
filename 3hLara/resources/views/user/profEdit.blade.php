@extends('layout.profmaster')

@section('content')

<div class="container-fluid profcontainer">
    {!! Form::open(['url'=>action('ProfileController@update'), 'id'=>'profileFrm'])!!}
  
  <div class="row profbox">
    <div class="col-md-3"> 
        <img src="{{asset('images/albumCovers/BlankCanvaCover.jpg')}}" width="200" height="200" class="img-circle img-responsive" alt="Generic placeholder thumbnail">

    </div>
  <div class="col-md-9">  
        <div class="form-group inputmar">
          {!! Form::label('profname', 'User name') !!}
        {!! Form::text('profname',$profU->prof_name,['class' => 'form-control', 'id'=> 'profname','placeholder' => $prof->prof_name]) !!}
   
      @if($errors->has('profname'))
        <div class="herror alert alert-danger">
          
          @foreach ($errors->get('profname') as $message) 
            <b>{{ $message }} </b>
            
          @endforeach
         
           
          
        </div>
      @endif 
    
     </div>
  </div>
  </div>
  <div class="row profbox">
    
     
     <div class="form-group inputmar">
          {!! Form::label('profbio', 'Bio') !!}
        {!! Form::textarea('profbio',$profU->bio, ['class' => 'form-control', 'id'=> 'profbio', 'placeholder' => $prof->bio]) !!}
    
      @if($errors->has('profbio'))
        <div class="herror alert alert-danger">
          
          @foreach($errors->get('profbio') as $message) 
            <b>{{ $message }} </b>
            
           @endforeach
          
        </div>
      @endif
   
     </div>
      <div class="form-group inputmar">
         <div class="form-group inputmar">
          {!! Form::label('profsite', 'Website') !!}
        {!! Form::url('profsite',$profU->website,['class' => 'form-control', 'id'=> 'profsite', 'placeholder' => $prof->website]) !!}
      
        @if($errors->has('profSite'))
            <div class="herror alert alert-danger">
          
          @foreach ($errors->get('profSite') as $message) 
            <b>{{ $message }} </b>
            
           @endforeach
          
        </div>
      @endif
     
     </div>
      </div> 
     
                          
       <div class="form-group inputmar">
          
          {!! Form::submit('Update Profile',['class' => 'btn btn-primary btn-lg ', 'id' => 'profUpdate' ]) !!}
       </div>                   
     </div>
     <div class="col-sm-7 ">                        
       
        
 {!!Form::close()!!}
         
         <div class="form-group inputmar">  
            
         </div>

</div>
 
         

         @if(isset($successMsg))
         <div class="alert alert-success">  
            <b> {{ $successMsg}} </b>
         </div>
         @endif
          
                              
 

  
@endsection
</div>

  

@section('js')
@endsection
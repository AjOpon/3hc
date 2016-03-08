@extends('layout.master')

@section('content')
<div class="row " style="background-color:#fff;">

 {!! Form::open(['url'=>'user/Create', 'id'=>'usrFrm'])!!}
 	<div class="col-sm-5">

     <div class="form-group inputmar">
          {!! Form::label('fname', 'First Name') !!}
	      {!! Form::text('fname',null,['class' => 'form-control', 'id'=> 'fname']) !!}
   
      @if($errors->has('fname'))
        <div class="herror alert alert-danger">
          
          @foreach ($errors->get('fname') as $message) 
            <b>{{ $message }} </b>
            
          @endforeach
         
           
          
        </div>
      @endif 
    
     </div>
     <div class="form-group inputmar">
          {!! Form::label('lname', 'Last Name') !!}
	      {!! Form::text('lname',null, ['class' => 'form-control', 'id'=> 'lname']) !!}
    
      @if($errors->has('lname'))
        <div class="herror alert alert-danger">
          
          @foreach($errors->get('lname') as $message) 
            <b>{{ $message }} </b>
            
           @endforeach
          
        </div>
      @endif
   
     </div>
      <div class="form-group inputmar">
         <div class="form-group inputmar">
          {!! Form::label('email', 'Email') !!}
	      {!! Form::email('email',null,['class' => 'form-control', 'id'=> 'email']) !!}
      
        @if($errors->has('email'))
            <div class="herror alert alert-danger">
          
          @foreach ($errors->get('email') as $message) 
            <b>{{ $message }} </b>
            
           @endforeach
          
        </div>
      @endif
     
     </div>
      </div>
      <div class="form-group inputmar">
	      {!! Form::label('password', 'New Password') !!}
	      {!! Form::password('password', ['class' => 'form-control', 'id'=> 'password']) !!}
      
        @if($errors->has('password'))
          <div class="herror alert alert-danger">
          
          @foreach ($errors->get('password') as $message) 
            <b>{{ $message }} </b>
            
           @endforeach
          
        </div>
      @endif
   
      </div>                    
     </div>
     <div class="col-sm-7 ">                        
       <div class="form-group inputmar">
       	{!! Form::label('phonelabel', 'Phone Number') !!}
        <!-- input( string $type, string $name, string $value = null, array $options = array()) -->
	    {!! Form::input('number','phone',null, ['class' => 'form-control',  'id'=> 'phone']) !!}
      
       @if($errors->has('phone'))
       <div class="herror alert alert-danger">
          
          @foreach ($errors->get('phone') as $message) 
            <b>{{ $message }} </b>
            
           @endforeach
          
        </div>
      @endif
    
       </div>
       <div class="form-group inputmar">
       	{!! Form::label('address', 'Residential Representation') !!}
	    {!! Form::select('address',['Kilimani'=> 'Kilimani', 'Kibera', 'Kawangware', 'Lavington', 'UpperHill', 'South B', 'South C' ], ['class' => 'form-control', 'id'=>'address']) !!}
      </div>
       @if($errors->has('address'))
       <div class="herror alert alert-danger">
          
          @foreach ($errors->get('address') as $message) 
            <b>{{ $message }} </b>
            
          @endforeach
        </div>
        @endif
      
       
         
                            
       <div class="form-group inputmar">
          
          {!! Form::submit('Join The 3HC Community',['class' => 'btn btn-primary btn-lg ', 'id' => 'ongSubmit' ]) !!}
          <a  href="/auth/login" id="test" class="btn btn-primary btn-lg btn-success loginbtn">Login</a>
       </div>
        
 {!!Form::close()!!}
         
         <div class="form-group inputmar">  
            
         </div>
         

         @if(isset($successMsg))
         <div class="alert alert-success">  
            <b> {{ $successMsg}} </b>
         </div>
         @endif
          
    </div>                          
 </div>

	
@endsection

@section('js')
@endsection
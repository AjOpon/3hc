<section id="bottom">
        <div class="container wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <h3>Company</h3>
                        <ul>
                            <li><a href="#">About us</a></li>
                            <li><a href="#">We are hiring</a></li>
                            <li><a href="#">Meet the team</a></li>
                            <li><a href="#">Copyright</a></li>
                            <li><a href="#">Terms of use</a></li>
                            <li><a href="#">Privacy policy</a></li>
                            <li><a href="#">Contact us</a></li>
                        </ul>
                    </div>    
                </div><!--/.col-md-3-->

                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <h3>Support</h3>
                        <ul>
                            <li><a href="#">Faq</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Forum</a></li>
                            <li><a href="#">Documentation</a></li>
                            <li><a href="#">Refund policy</a></li>
                            <li><a href="#">Ticket system</a></li>
                            <li><a href="#">Billing system</a></li>
                        </ul>
                    </div>    
                </div><!--/.col-md-3-->

                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <h3>Developers</h3>
                        <ul>
                            <li><a href="#">Web Development</a></li>
                            <li><a href="#">SEO Marketing</a></li>
                            <li><a href="#">Theme</a></li>
                            <li><a href="#">Development</a></li>
                            <li><a href="#">Email Marketing</a></li>
                            <li><a href="#">Plugin Development</a></li>
                            <li><a href="#">Article Writing</a></li>
                        </ul>
                    </div>    
                </div><!--/.col-md-3-->

                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <h3>Our Partners</h3>
                        <ul>
                            <li><a href="#">Adipisicing Elit</a></li>
                            <li><a href="#">Eiusmod</a></li>
                            <li><a href="#">Tempor</a></li>
                            <li><a href="#">Veniam</a></li>
                            <li><a href="#">Exercitation</a></li>
                            <li><a href="#">Ullamco</a></li>
                            <li><a href="#">Laboris</a></li>
                        </ul>
                    </div>    
                </div><!--/.col-md-3-->
            </div>
        </div>
    </section><!--/#bottom-->
    <div class="invalid-form-error-message"></div>
         
         @if($err=='fail')
        
           <div class="box danger">
            <p> {{ $Response }}</p>
           </div>
    
        @elseif($err=='checked')
        <div class="box success">
          <p> {{ $Response }}</p>
        </div>
        @else

        @endif
     </div> 

    <!-- ongeza form-->

    {!! Form::open(['url'=>'user/Create', 'id'=>'usrFrm','data-parsley-validate'=>''])!!}
    <div class="col-sm-5">

     <div class="form-group inputmar">
          {!! Form::label('fname', 'First Name') !!}
          {!! Form::text('fname',null,['class' => 'form-control', 'required'=> '', 'id'=> 'ffname', 'data-parsley-required'=>'' ]) !!}
    @if(isset($errMsgs))
      @if($errMsgs->has('fname'))
        <div class="3herror alert alert-danger">
          
          @foreach ($errMsgs->get('fname') as $message) {
            <b>{{ $message }} </b>
            }
          @endforeach

           
          
        </div>
        @endif
    @endif
     </div>
     <div class="form-group inputmar">
          {!! Form::label('lname', 'Last Name') !!}
          {!! Form::text('lname',null, ['class' => 'form-control', 'required'=> '', 'id'=> 'flname','data-parsley-required'=>'']) !!}
    @if(isset($errMsgs))
      @if($errMsgs->has('lname'))
        <div class="3herror alert alert-danger">
          
          @foreach ($errMsgs->get('lname') as $message) {
            <b>{{ $message }} </b>
            }
           @endforeach
          
        </div>
      @endif
    @endif
     </div>
      <div class="form-group inputmar">
         <div class="form-group inputmar">
          {!! Form::label('email', 'Email') !!}
          {!! Form::email('email',null,['class' => 'form-control', 'required'=> '', 'id'=> 'femail','data-parsley-required'=>'']) !!}
      @if(isset($errMsgs))
        @if($errMsgs->has('email'))
            <div class="3herror alert alert-danger">
          
          @foreach ($errMsgs->get('email') as $message) {
            <b>{{ $message }} </b>
            }
           @endforeach
          
        </div>
      @endif
      @endif
     </div>
      </div>
      <div class="form-group inputmar">
          {!! Form::label('password', 'New Password') !!}
          {!! Form::password('password', ['class' => 'form-control', 'required'=> '', 'id'=> 'fpassword','data-parsley-length'=>'[6, 14]','data-parsley-required'=>'']) !!}
      @if(isset($errMsgs))
        @if($errMsgs->has('password'))
          <div class="3herror alert alert-danger">
          
          @foreach ($errMsgs->get('password') as $message) {
            <b>{{ $message }} </b>
            }
           @endforeach
          
        </div>
      @endif
    @endif
      </div>                    
     </div>
     <div class="col-sm-7 ">                        
       <div class="form-group inputmar">
        {!! Form::label('phone', 'Phone Number') !!}
        {!! Form::text('phone',null, ['class' => 'form-control', 'required'=> '', 'id'=> 'fphone','data-parsley-length'=>'[10, 10]','data-parsley-required'=>'']) !!}
      @if(isset($errMsgs))
       @if($errMsgs->has('phone'))
       <div class="3herror alert alert-danger">
          
          @foreach ($errMsgs->get('phone') as $message) {
            <b>{{ $message }} </b>
            }
           @endforeach
          
        </div>
      @endif
    @endif
       </div>
       <div class="form-group inputmar">
        {!! Form::label('address', 'Residential Representation') !!}
        {!! Form::select('address',['Kilimani', 'Kibera', 'Kawangware', 'Lavington', 'UpperHill', 'South B', 'South C' ], ['class' => 'form-control', 'data-parsley-required'=>'', 'id'=>'faddress']) !!}
      @if(isset($errMsgs))
       @if($errMsgs->has('address'))
       <div class="3herror alert alert-danger">
          
          @foreach ($errMsgs->get('address') as $message) {
            <b>{{ $message }} </b>
            }
          @endforeach
        </div>
        @endif
      @endif
       </div>                        
       <div class="form-group inputmar">
          
          {!! Form::submit('Join The 3HC Community',['class' => 'btn btn-primary btn-lg validate', 'id' => 'ongSubmit' ]) !!}
       </div>
       
 {!!Form::close()!!}
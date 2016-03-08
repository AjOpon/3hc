<html>
    <head>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title> 3HC </title>
    
    <!-- core CSS -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/prettyPhoto.css')}}" rel="stylesheet">
    <link href="{{asset('css/main.css')}}" rel="stylesheet">
    <link href="{{asset('css/responsive.css')}}" rel="stylesheet">
    <link href="{{asset('css/parsley.css')}}" rel="stylesheet">

    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="{{asset('images/ico/favicon.ico')}}">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

    <body class="homepage">
        @section('css')
            <style type="text/css">
             @media screen and (min-width: 1068px) {
                .recent-work-wrap>.img-responsive,.media .img-responsive{
                    max-height: 221px !important;
                }
            }

            @media (min-width: 768px){
                .main {
                    padding-right: 40px;
                    padding-left: 40px;
                }
            }

                .main {
                    padding: 20px;
                }

            @media (min-width: 768px){
                .sidebar {
                    position: fixed;
                    top: 51px;
                    bottom: 0;
                    left: 0;
                    z-index: 1000;
                    display: block;
                    padding: 20px;
                    overflow-x: hidden;
                    overflow-y: auto;
                    background-color: #f5f5f5;
                    border-right: 1px solid #eee;
                }
            }
            
            .sidebar{
                display: none;
            }

            hr.style-one {
                margin: 0px;
                margin-bottom: 3px;
                height: 12px;
                border: 0;
                box-shadow: inset 0 18px 18px -18px rgba(0, 0, 0, 0.9);
            }


            body{
                background-color: #D3D3D3;
            }
            .downloads,.nav-tabs>li.active>a, .nav-tabs>li.active>a:hover, .nav-tabs>li.active>a:focus{
                background-color: #B22222;
                
            }

            .btn-group-lg>.btn {
                padding: 10px 16px;
                font-size: 18px;
                line-height: 1.33;
                border-top-width: 6px;
                border-top-color: black;
                box-shadow: inset 0 18px 18px -18px rgba(0, 0, 0, 0.9);
            }
    
            .h-article{
                background-color: rgba(178,34,34,0.8);
                border:3px solid; 
                border-color: #ffffff;
            }
            .h-para{
                color: rgba(255,255,255,1);
            }
            .dlheader{
            color: black;
            }
            .downloads{
               color: #F0FFFF;
                text-shadow: 0.9px -1px #000000; 
            }
            .news{
                background-color: rgba(178,34,34,0.8);
            }
            .tab-wrap{
                border:0px;
            }

            #partner{
                background: url("{{asset('images/Music/PianoPlayer.jpg')}}");
                background-size: 100% 150%;
                background-repeat: no-repeat;
            }

            .herror,.loginbtn{
                margin-top: 10px;
            }

            .loginbtn{
                background-color:#5cb85c ;
            }

            .inputmar{
                margin: 5px;
            }

            .loginbtn:hover{
                background-color: #47a447;
            }
            
            .profop{

                background-color: rgb(240, 20, 32);
                background-color: rgba(240, 20, 32, 0.8);

            }

            [class^="fa-user"], [class*="fa-user"] {
                color: rgba(0, 252, 0, 0.7);
            }

            .aref{
                color: #333;
            }

            .profbox{
                border-radius:1px;
                margin-top: 5px;
                margin-bottom: 10px;
                width: 100%;
                height:inherit;
                background:rgb(240, 20, 32, 0.75);
                background:rgba(240, 20, 32, 0.75);

            }

            .colordwn{
                background:inherit;
                color: inherit;
            }

            .transparent{
                background-color: transparent;
            }
            .profcontainer{
                margin-left:30px;
            }
            
            .prof-nav{
                display: flex;
                justify-content:center;
            }
            

</style>
        @show
        <header id="header">
        <div class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-xs-4">
                        <div class="top-number"><p><i class="fa fa-phone-square"></i>  +254 705093952</p></div>
                    </div>
                    <div class="col-sm-6 col-xs-8">
                       <div class="social">
                            <ul class="social-share">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li> 
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-skype"></i></a></li>
                            </ul>
                            <div class="search">
                                <form role="form">
                                    <input type="text" class="search-form" autocomplete="off" placeholder="Search">
                                    <i class="fa fa-search"></i>
                                </form>
                           </div>
                       </div>
                    </div>
                </div>
            </div><!--/.container-->
        </div><!--/.top-bar-->

        <nav class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html">HipHopHeavy</a>
                </div>
                
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="{{action('pages@home')}}">Home</a></li>
                        <li><a href="about-us.html">News</a></li>
                        <li><a href="services.html">Socia Media</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Music <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Mixtapes</a></li>
                                <li><a href="#">Singles</a></li>
                                <li><a href="#">Podcast</a></li>
                            </ul>
                        </li>
                        @if (Auth::guest())
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-user"></i> Login/Register <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="/auth/login">Login</a></li>
                                <li><a href="/user/tengeneza">Register</a></li>
                            </ul>
                        </li>
                        @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> My Membership <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="{{action('ProfileController@index')}}">Profile</a></li>
                                    <li>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"> Hey<i class="icon icon-caret-right"></i></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="{{action('ProfileController@index')}}">Profile</a></li>
                                                <li><a href="#">Messages</a></li>
                                                <li><a href="/auth/logout">Log Out</a></li>
                                            </ul>
                                        </li>
                                    </li>
                                <li><a href="/auth/logout">Log Out</a></li>
                            </ul>
                        </li>
                        @endif

                        
                        <li><a href="/blog">Blog</a></li> 
                        <li><a href="contact-us.html">Contact</a></li>                        
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
    <div class="container-fluid">
       <div class="row ">
        <div class="container">
        <div class="prof-nav">
        <div class="col-md-2 btn btn-default btn-lg profop"><b>Feed</b></div>
        <div class="col-md-2 btn btn-default btn-lg profop active"><b><a class="aref" href="/user/profile/edit/{{$usrId}}">Edit Profile</a></b></div>
        <div class="col-md-2 btn btn-default btn-lg profop"><b>Messages</b></div>
        <div class="col-md-2 btn btn-default btn-lg profop"><b>Favorites</b></div>
      </div>
    </div>
      </div>  
    </div>
       
    </header><!--/header-->
<div class="container-fluid">
      <
      
        <div class="container-fluid transparent">
        @yield('content')
        
       </div> 
      
    </div>
        
            
        
        <footer id="footer" class="midnight-blue">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    &copy; 2015 <a target="_blank" href="#" title="East of The Motherland HipHop Destination">Hip-hop Heavy Collective</a>. All Rights Reserved.
                </div>
                <div class="col-sm-6">
                    <ul class="pull-right">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Faq</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer><!--/#footer-->

            <script src="{{asset('js/jquery.js')}}"></script>
        <script src="{{asset('js/bootstrap.min.js')}}"></script>
        <script src="{{asset('js/jquery.prettyPhoto.js')}}"></script>
        <script src="{{asset('js/jquery.isotope.min.js')}}"></script>
        <script src="{{asset('js/main.js')}}"></script>
        <script src="{{asset('js/wow.min.js')}}"></script>
        <script src="{{asset('js/parsley.min.js')}}"></script>
        
        

        @section('js')

        
        
        <script type="text/javascript">
        $(document).ready(function(){
            $("#ongSubmit").click(function(){
               
            var adr=$("#address").children("option").filter(":selected").text();
            var mem = tok=$("#_token").val(),
                    fname=$("#ffname").val(),
                    lname=$("#flname").val(),
                    email=$("#femail").val(),
                    phone=$("#fphone").val(),
                    password=$("#fpassword").val(),
                    address=$("#address").children("option").filter(":selected").text();

            // Returns successful data submission message when the entered information is stored in database.
             $('#usrFrm').parsley().validate();
            $('#usrFrm').parsley().on('form:validate', function (formInstance) {
            var ok = formInstance.isValid();
            $('.invalid-form-error-message').html(ok ? '' : 'Input Not Valid!').toggleClass('filled', !ok);
            if (!ok)
              formInstance.validationResult = false;
            if(ok)
               {
                 // AJAX Code To Submit Form.
                    $.ajax({
                    type: "POST",
                    url: "user/Create",
                    dataType:"JSON"
                    data: { "tok":mem.tok, 
                            "fname":mem.fname, 
                            "lname": mem.lname,
                            "email": mem.email, 
                            "phone": mem.phone,
                            "password": mem.password, 
                            "address": adr},
                    cache: false,
                    success: function(result){
                    return result;
                    }
                    });
               } 
          });

            });
            
            });
        $(function () {
          


        });
        

        </script>
       
        <script type="text/javascript">

        $("#ongSubmit").click(function(){
                var mem = tok=$("#_token").val(),
                    fname=$("#ffname").val(),
                    lname=$("#flname").val(),
                    email=$("#femail").val(),
                    phone=$("#fphone").val(),
                    password=$("#fpassword").val(),
                    address=$("#address").children("option").filter(":selected").text();

                // AJAX Code To Submit Form.
                    $.ajax({
                    type: "POST",
                    url: "user/Create",
                    dataType:"JSON"
                    data: { "tok":mem.tok, 
                            "fname":mem.fname, 
                            "lname": mem.lname,
                            "email": mem.email, 
                            "phone": mem.phone,
                            "password": mem.password, 
                            "address": mem.address},
                    cache: false,
                    success: function(result){
                    return alert(result);
                    },
                    error: function(data)
                    {
                        var errors = '';
                        for(datos in data.responseJSON){
                            errors += data.responseJSON[datos] + '<br>';
                        }
                      $('#response').show().html(errors); //this is my div with messages
                    }
                    });
                });
        </script>
        @show

    </body>

</html>
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
    <link href="{{asset('css/palette.css')}}" rel="stylesheet">
    <!-- <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet"> -->
    <!-- <link href="{{asset('css/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/prettyPhoto.css')}}" rel="stylesheet">
    <link href="{{asset('css/main.css')}}" rel="stylesheet">
    <link href="{{asset('css/responsive.css')}}" rel="stylesheet">
    <link href="{{asset('css/parsley.css')}}" rel="stylesheet"> -->

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

            .navbar-inverse {
            background-color: #D32F2F;
            border-color: #080808;
            color: #FFFFFF;
} 
            .navbar {

            border-radius: 0px;
            margin-bottom: 0px;

                }

            .navbar-inverse .navbar-brand {
            color: #f5f5f5;
            }

            .navbar-inverse .navbar-nav>.active>a, .navbar-inverse .navbar-nav>.active>a:hover, .navbar-inverse .navbar-nav>.active>a:focus {
                background-color: #080808;
                color: #efe;
                font-weight: 700;
                background-color: rgba(8, 8, 8, 0.8);
            }
            .evDiv{
                border-left:black solid 2px;


            }
            .carousel-content{

                margin: 20px;
                margin-top: 150;
                background-color: #9E9E9E;
                min-height: 300px;
                padding: 5px;
                padding-left: 15px;
            }
            #recent-works{
                margin-top: 35px;
            }
            .carousel-control {
                width: 4%;
                text-shadow: 0 1px 2px rgba(0,0,0,0.6);
                opacity: .7;
                filter: alpha(opacity=70);
            }
            
            .navbar-inverse .navbar-nav>li>a {
                color: #222;
                font-weight: 700;
            }
            /* add media queries for each screen size for padding of featured container */
            .featured-container{
                padding-right: 30px;
                padding-left: 30px;
            } 
        </style>
        @show
        <header id="header">
        @yield('navBar')
        
    </header><!--/header-->

            @yield('eventSlider')
        
            @yield('content')
        
        <footer id="footer" class="midnight-blue">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    &copy; 2015 <a target="_blank" href="#" title="East of The Motherland HipHop Destination">Hip-hop Heavy Conglomerate</a>. All Rights Reserved.
                </div>
                <div class="col-sm-6">
                    <ul class="pull-right">
                        <li><a href="#">Home</a></li>
                        <li><a href="/about-us">About Us</a></li>
                        <li><a href="/faq">Faq</a></li>
                        <li><a href="/contacts">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer><!--/#footer-->

            <script src="{{asset('js/jquery.js')}}"></script>
        <script src="{{asset('js/bootstrap.min.js')}}"></script>
        <!--<script src="{{asset('js/jquery.prettyPhoto.js')}}"></script>
        <script src="{{asset('js/jquery.isotope.min.js')}}"></script>
        <script src="{{asset('js/main.js')}}"></script>
        <script src="{{asset('js/wow.min.js')}}"></script>
        <script src="{{asset('js/parsley.min.js')}}"></script>-->
        
        

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
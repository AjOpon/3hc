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
                <div class="collapse navbar-collapse navbar-left">
                    <ul class="nav navbar-nav">
                       @if (Auth::guest())
                                <li><a href="/auth/login">Login</a></li>
                                <li><a href="{{action('pages@home')}}/user/tengeneza">Register</a></li>
                        @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> My Membership <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="{{action('ProfileController@index')}}">Profile</a></li>
                                <li><a href="/mail">Messages</a></li>
                                <li><a href="/auth/logout">Log Out</a></li>
                            </ul>
                        </li>
                        @endif 
                    </ul>
                </div>
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="{{action('pages@home')}}">EVENTS</a></li>
                        <li><a href="{{action('pages@home')}}/about-us">NEWS</a></li>
                        <li><a href="{{action('pages@home')}}/services">MUSIC</a></li>                        
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
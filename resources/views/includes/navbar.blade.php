<nav class="navbar" data-spy="affix" data-offset-top="50">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle"
                    data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span> <span class="icon-bar"></span> <span
                            class="icon-bar"></span>
            </button>
            <a class="navbar-left navbar-brand" href="#">ABC <span>Jobs</span></a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                @if(Auth::check())
                <li><a href="{{ url('landing') }}"><span
                class="glyphicon glyphicon-home"></span>HOME</a></li>
                <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span
                    class="glyphicon glyphicon-user"></span>PROFILE <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="viewProfile.php">Profile View</a></li>
                    <li><a href="edit.php">Profile Edit</a></li>
                    <li><a href="passwordReset.php">Password Change</a></li>
                </ul>
                    </li>
                    <li><a href="{{ url('list') }}"><span
                        class="glyphicon glyphicon-search"></span>USER</a></li>
                    <li><a href="{{ url('contact') }}"><span
                        class="glyphicon glyphicon-map-marker"></span>CONTACT</a></li>                                
                    <li><a href="{{ url('auth/logout') }}"><span
                        class="glyphicon glyphicon-log-out"></span>LOGOUT</a></li>
                @else
                <li><a href="{{url('/')}}"><span
                                class="glyphicon glyphicon-home"></span>HOME</a></li>
                <li><a href="{{url('registration')}}"><span
                                class="glyphicon glyphicon-user"></span>REGISTRATION</a></li>
                <li><a href="{{url('auth/login')}}"><span
                                class="glyphicon glyphicon-log-in"></span>LOGIN</a></li>
                <li><a href="{{url('contact')}}"><span
                                class="glyphicon glyphicon-map-marker"></span>CONTACT</a></li>
                @endif
            </ul>
        </div>
    </div>
</nav>
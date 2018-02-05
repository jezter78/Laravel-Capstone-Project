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
                <li><a href="{{url('/')}}"><span
                                class="glyphicon glyphicon-home"></span>HOME</a></li>
                <li><a href="{{url('registration')}}"><span
                                class="glyphicon glyphicon-user"></span>REGISTRATION</a></li>
                <li><a href="{{url('auth/login')}}"><span
                                class="glyphicon glyphicon-log-in"></span>LOGIN</a></li>
                <li><a href="{{url('contact')}}"><span
                                class="glyphicon glyphicon-map-marker"></span>CONTACT</a></li>
            </ul>
        </div>
    </div>
</nav>
<nav class="navbar navbar-default container-fluid wrapper">
    <div class="navbar-header col-lg-3">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a href="/"><img src={{ URL::asset('images/logo.png') }} alt="" class="img-responsive"></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse col-lg-8 col-xs-12" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav text-uppercase text-center">
            <li><a href="/galeria.shtml">galeria</a></li>
            <li><a href="/kontakt.shtml">kontakt</a></li>
            @if (Auth::guest())
                <li><a href="/login">Zaloguj się</a></li>
            @else
                <li><a href="/dashboard.shtml">Panel użytkownika</a></li>
                <li><a href="/logout">Wyloguj się</a></li>
            @endif
        </ul>
    </div>
    <div class="social col-lg-2 pull-right">
        <a href="#"><i class="fa fa-facebook-official"></i></a>
    </div>
</nav>

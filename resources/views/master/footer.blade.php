<div class="footerBox">
    <div class="container-fluid wrapper">
        <div class="footer_main">
            <div class="row">
                <div class="logo_footer col-md-3 col-sm-3 col-xs-6">
                    <a href="#">
                        <img src="{{ URL::asset('images/logo.png') }}" class="img-responsive" alt="">
                    </a>
                    <p>Głównym celem systemu jest wsparcie jednostki oświaty w kontroli postępów nauczania, wglądu do
                        osiągnięć ucznia oraz komunikacji z rodzicami. Jednocześnie daje rodzicom możliwość uiszczania
                        opłat drogą elektroniczną. System ponadto umożliwia rodzicom wyrażanie opinii na temat miejsca w
                        którym na co dzień przebywa jego dziecko. Dodatkowo system umożliwia nauczycielom zarządzanie
                        własnym czasem pracy</p>
                </div>
                <div class="col-md-2 col-sm-3 col-xs-4">
                    <div class="menu_footer">
                        <h3>menu</h3>
                        <a href="/galeria.shtml">Galeria</a>
                        <a href="/kontakt.shtml">Kontakt</a>
                    </div>
                </div>
                <div class="col-md-2 col-sm-3 col-xs-4">
                    <div class="profile_footer">
                        @if (Auth::guest())
                            <h3>profil</h3>
                            <a href="/login">Zaloguj się</a>
                        @else
                            <h3>witaj,  {{ Auth::user()->name }}</h3>
                            <a href="/dashboard.shtml">Panel użytkownika</a>
                            <a href="/logout">Wyloguj się</a>
                        @endif
                    </div>
                </div>
                <div class="col-md-2 col-sm-3 col-xs-4">
                    <div class="contact_footer">
                        <h3>KONTAKT</h3>
                        <a href="/kontakt.shtml">Skontaktuj się</a>
                        <a href="https://www.facebook.com/bsmkolei/" target="_blank">Facebook</a>
                    </div>
                </div>
                <div class="col-md-3 col-xs-12 text-uppercase ">
                    <div class="lang_footer">
                        <a href="#" class="active">polski</a>
                        <a href="#">english</a>
                    </div>
                </div>

            </div>
            <div class="cookiesBox text-right">
                <a href="/cookies.shtml">
                    Cookies
                </a>
                <a href="/regulamin.shtml">
                    Regulamin serwisu
                </a>
                <a href="/">
                    ⓒ DziennikPol 2016-2017
                </a>
            </div>
        </div>
    </div>
</div>

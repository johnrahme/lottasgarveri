

<!-- Static navbar -->
<nav class="navbar navbar-default navbar-fixed-top" style = "border: 0px; background: rgba(255, 255, 255, 0.9);">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Lottas Garveri</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li id = "welcome"><a href="{{App::getLocale()}}">@lang('messages.welcome')</a></li>
                <li id = "tannery"><a href="{{App::getLocale()}}/tannery">@lang('messages.tannery')</a></li>
                @if(App::isLocale('se'))
                    <li>{{ Html::linkRoute(Route::currentRouteName(), 'English', 'en') }}</li>
                @elseif(App::isLocale('en'))
                    <li>{{ Html::linkRoute(Route::currentRouteName(), 'Svenska', 'se') }}</li>
                @endif
            </ul>
        </div><!--/.nav-collapse -->

    </div><!--/.container-fluid -->
</nav>
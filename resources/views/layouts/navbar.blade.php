

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
            <a class="navbar-brand" href="#">Lottas garveri</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-left">
                <li id = "welcome"><a href="{{route('welcome',App::getLocale())}}">@lang('menu.welcome')</a></li>
                <li id = "shop"><a href="{{route('shop',App::getLocale())}}">@lang('menu.shop')</a></li>
                <li id = "tannery"><a href="{{route('tannery',App::getLocale())}}">@lang('menu.tannery')</a></li>
                <li id = "courses"><a href="{{route('courses',App::getLocale())}}">@lang('menu.coursesLectures')</a></li>
                <li id = "exhibitions"><a href="{{route('exhibitions',App::getLocale())}}">@lang('menu.exhibitions')</a>

                </li>
                <li id = "books"><a href="{{route('books',App::getLocale())}}">@lang('menu.books')</a></li>


            @if(App::isLocale('se'))
                    <li><a style = "padding-bottom:0px; " href = "{{route(Route::currentRouteName(),'en')}}"><img class = "" style="height: auto; width: 23px;" src = "{{asset('/img/english.png')}}"></a></li>
                    {{--<li>{{ Html::linkRoute(Route::currentRouteName(), '<img class = "" style="height: auto; width: 23px;" src = "img/english.png">', 'en') }}</li>--}}
                @elseif(App::isLocale('en'))
                    <li><a style = "padding-bottom:0px; " href = "{{route(Route::currentRouteName(),'se')}}"><img class = "" style="height: auto; width: 23px;" src = "{{asset('img/swedish.png')}}"></a></li>
{{--                    <li>{{ Html::linkRoute(Route::currentRouteName(), 'Svenska', 'se') }}</li>--}}
                @endif

            </ul>
        </div><!--/.nav-collapse -->

    </div><!--/.container-fluid -->
</nav>
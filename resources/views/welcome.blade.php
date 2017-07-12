@extends('layouts.default_home')
@section('content')
    {{--@include('layouts.carousel')--}}
    @include('layouts.carousel')
    @if(App::isLocale('se'))
        @include('drafts.welcome')
    @else
        @include('drafts.welcome_en
        ')
    @endif
    {{--{!! $page['content'] !!}--}}
    @if(Auth::check())
        {{ Html::linkRoute('welcome.edit', 'Ändra innehåll', App::getLocale(),array('class' => 'btn btn-primary')) }}
    @endif
@endsection
@section('scripts')
    <script>
        //var body = $('body');
        var body = $('#storeBG');
        //body.attr('background','{{ asset('img/background.jpg') }}');
        body.css('background-image', 'url({{ asset('img/bakgrund_affarx.jpg') }})');
        body.css('background-repeat','no-repeat');
        body.css('background-size','auto 240%');
        body.css('background-position','center');
        //body.css('background-attachment','fixed');
        var course = $('#courseBG');
        //body.attr('background','{{ asset('img/background.jpg') }}');
        course.css('background-image', 'url({{ asset('img/bg3.jpg') }})');
        course.css('background-repeat','no-repeat');
        course.css('background-size','auto 240%');
        course.css('background-position','center');
        //course.css('background-attachment','fixed');

        var course = $('#exhibBG');
        //body.attr('background','{{ asset('img/background.jpg') }}');
        course.css('background-image', 'url({{ asset('img/bgUtsallningar_old_old.jpg') }})');
        course.css('background-repeat','no-repeat');
        course.css('background-size','auto 270%');
        course.css('background-position','center');
        //course.css('background-attachment','fixed');
    </script>
@endsection
{{--@section('content')--}}


    {{--@include('drafts.welcome')--}}
    {{--@lang('messages.welcome')--}}

    {{--{!! $page['content'] !!}--}}
    {{--{{ Html::linkRoute('welcome.edit', 'Ändra innehåll', App::getLocale(),array('class' => 'btn btn-primary')) }}--}}
{{--@endsection--}}

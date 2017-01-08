@extends('layouts.default_home')
@section('content')
    {{--@include('layouts.carousel')--}}
    @include('layouts.carousel')
{{--    @include('drafts.welcome')--}}
    {!! $page['content'] !!}
    @if(Auth::check())
        {{ Html::linkRoute('welcome.edit', 'Ändra innehåll', App::getLocale(),array('class' => 'btn btn-primary')) }}
    @endif
@endsection
@section('scripts')
    <script>
        //var body = $('body');
        var body = $('#storeBG');
        //body.attr('background','{{ asset('img/background.jpg') }}');
        body.css('background-image', 'url({{ asset('img/bg2.jpg') }})');
        body.css('background-repeat','no-repeat');
        body.css('background-size','100% 100%');
        body.css('background-attachment','fixed');
        var course = $('#courseBG');
        //body.attr('background','{{ asset('img/background.jpg') }}');
        course.css('background-image', 'url({{ asset('img/bg3.jpg') }})');
        course.css('background-repeat','no-repeat');
        course.css('background-size','100% 100%');
        course.css('background-attachment','fixed');
    </script>
@endsection
{{--@section('content')--}}


    {{--@include('drafts.welcome')--}}
    {{--@lang('messages.welcome')--}}

    {{--{!! $page['content'] !!}--}}
    {{--{{ Html::linkRoute('welcome.edit', 'Ändra innehåll', App::getLocale(),array('class' => 'btn btn-primary')) }}--}}
{{--@endsection--}}

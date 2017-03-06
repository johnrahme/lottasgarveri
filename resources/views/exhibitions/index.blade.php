@extends('layouts.default')
@section('content')
    {{--    @include('drafts.shop')--}}

        {{--@include('drafts.exhibitions')--}}
        {!! $page['content'] !!}
    <br>
        <a href="{{route('list','se')}}" class = "btn btn-default"> @if(App::getLocale() == 'se')Visa tidigare utsällningar och utmärkelser @else Show previous exhibitions @endif </a>

    @if(Auth::check())
        {{ Html::linkRoute('exhibitions.edit', 'Ändra innehåll', App::getLocale(),array('class' => 'btn btn-primary')) }}
        @endif


@endsection
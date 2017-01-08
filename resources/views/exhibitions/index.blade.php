@extends('layouts.default')
@section('content')
    {{--    @include('drafts.shop')--}}

        {{--@include('drafts.exhibitions')--}}
        {!! $page['content'] !!}
        <a href="{{route('list','se')}}" class = "btn btn-default"> Visa tidigare utsällningar och utmärkelser </a>

    @if(Auth::check())
        {{ Html::linkRoute('exhibitions.edit', 'Ändra innehåll', App::getLocale(),array('class' => 'btn btn-primary')) }}
        @endif


@endsection
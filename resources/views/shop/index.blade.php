@extends('layouts.default')
@section('content')


        {{--@include('drafts.shop')--}}
        {!! $page['content'] !!}
        @if(Auth::check())
        {{ Html::linkRoute('shop.edit', 'Ändra innehåll', App::getLocale(),array('class' => 'btn btn-primary')) }}
        @endif


@endsection
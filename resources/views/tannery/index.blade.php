@extends('layouts.default')
@section('content')
    {{--@include('drafts.welcome')--}}
    {{--@include('drafts.tannery')--}}
    {!! $page['content'] !!}
    @if(Auth::check())
        {{ Html::linkRoute('tannery.edit', 'Ändra innehåll', App::getLocale(),array('class' => 'btn btn-primary')) }}
    @endif

@endsection

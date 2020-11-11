@extends('layouts.default')
@section('content')

{!! $page['content'] !!}
@include('masterclass.masterclass')
    @if(Auth::check())
        {{ Html::linkRoute('masterclass.edit', 'Ändra innehåll', App::getLocale(),array('class' => 'btn btn-primary')) }}
        @endif


@endsection
@extends('layouts.default')
@section('content')
    {{--@include('drafts.welcome')--}}
    {!! $page['content'] !!}
    {{ Html::linkRoute('tannery.edit', 'Ändra innehåll', App::getLocale(),array('class' => 'btn btn-primary')) }}
@endsection

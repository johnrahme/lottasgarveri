@extends('layouts.default')
@section('content')
    {{--@include('drafts.welcome')--}}
    @lang('messages.welcome')
    {!! $page['content'] !!}
    {{ Html::linkRoute('welcome.edit', 'Ändra innehåll', App::getLocale(),array('class' => 'btn btn-primary')) }}
@endsection

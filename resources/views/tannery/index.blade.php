@extends('layouts.default')
@section('content')
    {{--@include('drafts.welcome')--}}
    <div class="container clear-top" >
    {{--@include('drafts.tannery')--}}
    {!! $page['content'] !!}
    @if(Auth::check())
        {{ Html::linkRoute('tannery.edit', 'Ändra innehåll', App::getLocale(),array('class' => 'btn btn-primary')) }}
    @endif
    </div>
@endsection

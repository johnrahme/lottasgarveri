@extends('layouts.default')
@section('content')
    {{--@include('drafts.welcome')--}}
    <div class="container clear-top" >
    @include('drafts.tannery')
    {!! $page['content'] !!}
    {{ Html::linkRoute('tannery.edit', 'Ändra innehåll', App::getLocale(),array('class' => 'btn btn-primary')) }}
    </div>
@endsection

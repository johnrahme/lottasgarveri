@extends('layouts.default')
@section('content')
    {{--    @include('drafts.shop')--}}

        {{--@include('drafts.exhibList')--}}
        {!! $page['content'] !!}
        @if(Auth::check())
        {{ Html::linkRoute('list.edit', 'Ändra innehåll', App::getLocale(),array('class' => 'btn btn-primary')) }}
        @endif

@endsection
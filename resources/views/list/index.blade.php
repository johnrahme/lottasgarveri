@extends('layouts.default')
@section('content')
    {{--    @include('drafts.shop')--}}
    <div class="container clear-top" >
        {{--@include('drafts.exhibList')--}}
        {!! $page['content'] !!}
        @if(Auth::check())
        {{ Html::linkRoute('list.edit', 'Ändra innehåll', App::getLocale(),array('class' => 'btn btn-primary')) }}
        @endif
    </div>
@endsection
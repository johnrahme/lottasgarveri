@extends('layouts.default')
@section('content')
    {{--    @include('drafts.shop')--}}



        @include('books.books')
        {!! $page['content'] !!}
        @if(Auth::check())
        {{ Html::linkRoute('books.edit', 'Ändra innehåll', App::getLocale(),array('class' => 'btn btn-primary')) }}
        @endif


@endsection
@extends('layouts.default')
@section('content')
    {{--    @include('drafts.shop')--}}
    {!! $page['content'] !!}

    {{ Html::linkRoute('books.edit', 'Ändra innehåll', App::getLocale(),array('class' => 'btn btn-primary')) }}

@endsection
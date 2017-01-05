@extends('layouts.default')
@section('content')
    {{--    @include('drafts.shop')--}}

    <div class="container clear-top" >

        @include('books.books')
        {!! $page['content'] !!}
        {{ Html::linkRoute('books.edit', 'Ändra innehåll', App::getLocale(),array('class' => 'btn btn-primary')) }}

    </div>

@endsection
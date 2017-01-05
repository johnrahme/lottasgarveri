@extends('layouts.default')
@section('content')
    {{--    @include('drafts.shop')--}}
    <div class="container clear-top" >
        @include('drafts.exhibList')
        {!! $page['content'] !!}

        {{ Html::linkRoute('list.edit', 'Ändra innehåll', App::getLocale(),array('class' => 'btn btn-primary')) }}
    </div>
@endsection
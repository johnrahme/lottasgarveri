@extends('layouts.default')
@section('content')

    <div class="container clear-top" >
        @include('drafts.shop')
        {!! $page['content'] !!}

        {{ Html::linkRoute('shop.edit', 'Ändra innehåll', App::getLocale(),array('class' => 'btn btn-primary')) }}

    </div>

@endsection
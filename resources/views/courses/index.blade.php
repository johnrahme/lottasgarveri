@extends('layouts.default')
@section('content')
    {{--    @include('drafts.shop')--}}

    Start current courses

    @foreach($courses as $course)
        name:
        {{$course->name}}
        <br>
        Eng name:
        {{$course->en_name}}
        <br>
        Content:
        {!! $course->content !!}
        <br>
        Eng Content:
        {!! $course->en_content !!}
        <br>
        Url:
        {{$course->pdf_url}}
        <br>
        Online:
        {{$course->online}}


            {{Form::open(array('url'=> route('course.delete',$course->id),'method'=>'delete', 'files'=>true))}}
            {{Form::submit('Delete',['class'=>'btn btn-danger'])}}
            {{Form::close()}}

    @endforeach

    <br>
    End current courses

    {!! $page['content'] !!}

    {{ Html::linkRoute('courses.edit', 'Ändra innehåll', App::getLocale(),array('class' => 'btn btn-primary')) }}

@endsection
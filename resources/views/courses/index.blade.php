@extends('layouts.default')
@section('content')
    {{--    @include('drafts.shop')--}}



{{--    @include('drafts.courses')--}}
    {!! $page['content'] !!}
    @if(Auth::check())
        {{ Html::linkRoute('courses.edit', 'Ändra innehåll', App::getLocale(),array('class' => 'btn btn-primary')) }}
    @endif
        @foreach($courses as $course)
            <div class="panel panel-default">
                <div class="panel-body" style="padding-top: 0">
                    <div class="page-header" style="margin-top:0px">
                        <h3>@if(App::isLocale('se')){{$course->name}} @else {{$course->en_name}} @endif<small>{{$course->start_time}}</small></h3>

                    </div>
                    @if(App::isLocale('se')){!!$course->content!!} @else {!!$course->en_content!!} @endif

                    <p aria-label="Left Align">
                        <span class="glyphicon glyphicon-time" style="font-size: 1.8em"></span>
                        {{$course->start_time}} - {{$course->end_time}}
                    </p>

                    <p>
                        <span class="glyphicon glyphicon-map-marker" style="font-size: 1.8em"></span>
                        {{$course->location}}
                    </p>

                    <p>
                        <span class="glyphicon glyphicon-info-sign" style="font-size: 1.8em"></span>
                        <a href="{{asset($course->pdf_url)}}" download>PDF</a>
                    </p>


                    @if(Auth::check())
                        <p>
                            <span class="glyphicon glyphicon-edit" style="font-size: 1.8em"></span>
                            <a href="{{route('course.edit',$course->id)}}">Ändra</a>
                        </p>
                        @if($course->online)
                            Online!
                        @else
                            Inte online!
                        @endif
                        {{Form::open(array('url'=> route('course.delete',$course->id),'method'=>'delete', 'files'=>true))}}
                        {{Form::submit('Ta bort',['class'=>'btn btn-danger'])}}
                        {{Form::close()}}
                    @endif

                </div>
            </div>
            <br>


        @endforeach

        <br>

@endsection
@extends('layouts.default')
@section('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/summernote/css/summernote.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/summernote/css/css/font-awesome.min.css') }}">
@endsection
@section('content')
    Ändra

    {{Form::open(array('url'=> route('tannery.update',App::getLocale()),'files'=>true, 'id'=>'form1'))}}

    <p>
        {{Form::label('content', 'Innehåll', array('class' => 'required'))}} <br/>

    <div class="summernote" id="col">{!! $page['content'] !!}</div>
    {{Form::hidden('content')}}
    <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">

    <p>
    <button id="save" class="btn btn-primary" onclick="save()" type="button">Ändra</button>
    {{Form::close()}}
        <div id = "test"></div>
@endsection
@section('scripts')
    <script type="text/javascript" src="{{ asset('plugins/summernote/js/summernote.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('plugins/summernote/custom/onImageUpload.js') }}"></script>

    <script>
        {{--When uploading an image save it in the folder event--}}

     onImageUpload("img/Tannery","{{url('/imgStore')}}");
    </script>

    <script>
		<!--$("img").removeClass('img-responsive');-->
        $("#save").click(function () {
			$("img").css('height','auto');
			$("img").addClass('img-responsive');
            $("#content").val($('#col').summernote('code'));
            $("#form1").submit();
        });

    </script>
@endsection
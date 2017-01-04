@extends('layouts.default')
@section('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/summernote/css/summernote.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/summernote/css/css/font-awesome.min.css') }}">
@endsection
@section('content')
    <div class="container clear-top" style="box-shadow: 0px 0px 5px 2px #888888; background-color: #fff; padding: 30px">
    Ändra

    {{Form::open(array('url'=> route('course.store'),'files'=>true, 'id'=>'form1'))}}

        <div class = "row">
            <div class = "col-md-6">
                <div class="form-group">
                    <label for="name">Svenskt namn</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Sv namn">
                </div>
                <div class="form-group">
                    <label for="en_name">Engelskt namn</label>
                    <input type="text" class="form-control" id="en_name" name="en_name" placeholder="En Namn">
                </div>
                <div class="form-group">
                    <label for="location">Plats</label>
                    <input type="text" class="form-control" id="location" name="location" placeholder="Plats">
                </div>

                <div class="form-group">
                    <label for="pdf">File input</label>
                    <input type="file" id="pdf" name = "pdf">
                    <p class="help-block">Ladda upp informations pdf här</p>
                </div>

            </div>
            <div class = "col-md-6">
                <div class="form-group">
                    <label for="start_time">Starttid</label>
                    <input type="text" class="form-control" id="start_time" name="start_time" placeholder="Starttid">
                </div>
                <div class="form-group">
                    <label for="end_time">Sluttid</label>
                    <input type="text" class="form-control" id="end_time" name="end_time" placeholder="Sluttid">
                </div>
                <div class="online">
                    <label>
                        <input type="checkbox" name="online" id = "online"> Online

                    </label>
                    <p class="help-block">Ska kursen visas eller inte?</p>
                </div>
            </div>
        </div>
        <div class = "form-group">
            {{Form::label('content', 'Svenskt Innehåll', array('class' => 'required'))}} <br/>

            <div class="summernote" id="col"></div>
            {{Form::hidden('content')}}
        </div>
        <div class = "form-group">
            {{Form::label('en_content', 'Engelskt Innehåll', array('class' => 'required'))}} <br/>

            <div class="summernote" id="en_col"></div>
            {{Form::hidden('en_content')}}
        </div>
     <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
     <button id="save" class="btn btn-primary" onclick="save()" type="button">Ändra</button>
    {{Form::close()}}
    <div id = "test"></div>

    </div>
@endsection
@section('scripts')
    <script type="text/javascript" src="{{ asset('plugins/summernote/js/summernote.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('plugins/summernote/custom/onImageUploadAdv.js') }}"></script>

    <script>
        {{--When uploading an image save it in the folder event--}}

     onImageUpload("img/Course","{{url('/imgStore')}}",'col');
     onImageUpload("img/Course","{{url('/imgStore')}}",'en_col');
    </script>

    <script>
        <!--$("img").removeClass('img-responsive');-->
        $("#save").click(function () {
            $("img").css('height','auto');
            $("img").addClass('img-responsive');
            $("#content").val($('#col').summernote('code'));
            $("#en_content").val($('#en_col').summernote('code'));
            $("#form1").submit();
        });

    </script>
@endsection
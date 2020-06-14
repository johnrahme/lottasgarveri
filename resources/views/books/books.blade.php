<div>


    <!-- Nav tabs -->
    <ul class="nav nav-tabs" role="tablist">
        <li role="presentation" class="{{App::isLocale('se') ? 'active':''}}"><a href="#swedish" aria-controls="swedish" role="tab" data-toggle="tab">@lang('messages.se_books')</a></li>
        <li role="presentation" class="{{App::isLocale('en') ? 'active':''}}"><a href="#english" aria-controls="english" role="tab" data-toggle="tab">@lang('messages.en_books')</a></li>
    </ul>

    <!-- Tab panes -->
    <div class="tab-content">
		<div role="tabpanel" class="tab-pane {{App::isLocale('se') ? 'active':''}}" id="swedish" >
            <div class = "row">
                <div class = "col-md-3">
                    <img class = "img-responsive center-block" src = "{{asset('/img/Books/Framsida garvbok 2014.jpg')}}">
                        <div align="center">
                            @include('books.paypal.se_skin')
                        </div>
                </div>
                <div class = "col-md-6" style="padding-left: 30px; padding-right: 30px;">
                    <div class = "row">
                        <div class = "col-xs-6">
                            <img class = "img-responsive center-block" src = "{{asset('/img/Books/Framsida garvbok 2014.jpg')}}">
                        </div>
                        <div class = "col-xs-6">
                            <img class = "img-responsive center-block" src = "{{asset('/img/Books/Fiskbok x.jpg')}}">
                        </div>
                    </div>
                    <div align="center">
                        @include('books.paypal.se_pack')
                    </div>

                 </div>
                <div class = "col-md-3">
                    <img class = "img-responsive center-block" src = "{{asset('/img/Books/Fiskbok x.jpg')}}">
                    <div align="center">
                    @include('books.paypal.se_fish')
                        </div>
                </div>
            </div>
        </div>

		
		<div role="tabpanel" class="tab-pane {{App::isLocale('en') ? 'active':''}}" id="english">
            <div class = "row">
                <div class = "col-md-3">
                    <img class = "img-responsive center-block" src = "{{asset('/img/Books/Framsida eng x.jpg')}}">
                    <div align="center">
                    @include('books.paypal.en_skin')
                        </div>
                </div>
                <div class = "col-md-6" style="padding-left: 30px; padding-right: 30px;">
                    <div class = "row">
                        <div class = "col-xs-6">
                            <img class = "img-responsive center-block" src = "{{asset('/img/Books/Framsida eng x.jpg')}}">
                        </div>
                        <div class = "col-xs-6">
                            <img class = "img-responsive center-block" src = "{{asset('/img/Books/Fish x.jpg')}}">
                        </div>
                    </div>
                    <div align="center">
                        @include('books.paypal.en_pack')

                        </div>

                </div>
                <div class = "col-md-3">
                    <img class = "img-responsive center-block" src = "{{asset('/img/Books/Fish x.jpg')}}">
                    <div align="center">
                    @include('books.paypal.en_fish')
                        </div>
                </div>
            </div>
        </div>
    </div>

</div>
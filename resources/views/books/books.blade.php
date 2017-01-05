<div>

    <!-- Nav tabs -->
    <ul class="nav nav-tabs" role="tablist">
        <li role="presentation" class="active"><a href="#swedish" aria-controls="swedish" role="tab" data-toggle="tab">@lang('messages.se_books')</a></li>
        <li role="presentation"><a href="#english" aria-controls="english" role="tab" data-toggle="tab">@lang('messages.en_books')</a></li>
    </ul>

    <!-- Tab panes -->
    <div class="tab-content">
        <div role="tabpanel" class="tab-pane active" id="swedish" >
            <div class = "row">
                <div class = "col-md-3">
                    <img class = "img-responsive center-block" src = "{{asset('/img/Books/fiskbok.jpg')}}">
                    @include('books.paypal.se_skin')
                </div>
                <div class = "col-md-6">
                    <div class = "row">
                        <div class = "col-xs-6">
                            <img class = "img-responsive center-block" src = "{{asset('/img/Books/fiskbok.jpg')}}">
                        </div>
                        <div class = "col-xs-6">
                            <img class = "img-responsive center-block" src = "{{asset('/img/Books/Framsidasv.jpg')}}">
                        </div>
                    </div>

                    @include('books.paypal.se_pack')
                 </div>
                <div class = "col-md-3">
                    <img class = "img-responsive center-block" src = "{{asset('/img/Books/Framsidasv.jpg')}}">
                    @include('books.paypal.se_fish')
                </div>
            </div>
        </div>

        <div role="tabpanel" class="tab-pane" id="english">
            <div class = "row">
                <div class = "col-md-3">
                    <img class = "img-responsive center-block" src = "{{asset('/img/Books/Fish_skin_book2.jpg')}}">
                    @include('books.paypal.en_skin')
                </div>
                <div class = "col-md-6">
                    <div class = "row">
                        <div class = "col-xs-6">
                            <img class = "img-responsive center-block" src = "{{asset('/img/Books/Fish_skin_book2.jpg')}}">
                        </div>
                        <div class = "col-xs-6">
                            <img class = "img-responsive center-block" src = "{{asset('/img/Books/Framsidaeng.jpg')}}">
                        </div>
                    </div>

                        @include('books.paypal.en_pack')

                </div>
                <div class = "col-md-3">
                    <img class = "img-responsive center-block" src = "{{asset('/img/Books/Framsidaeng.jpg')}}">
                    @include('books.paypal.en_fish')
                </div>
            </div>
        </div>
    </div>

</div>
<x-main>
    {{--   <div class='container'>
        <div class="row">
            <div class="col-md-12">
            <div class="body-submit">
    <div class="card-submit">
        <div class="content text-center">
            <h1>Vuoi unirti al nostro team?</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
            sed do eiusmod tempor incididunt ut labore et 
            dolore magna aliqua</p>
            <button class="btn btn-outline-danger" type="submit"><a href="{{ route('become.revisor') }}">clicca qui per lavorare con noi</a></button>
        </div>
    </div>
</div>
</div>
</div> --}}

    <div class="container-fluid">

        <div class="row">

            <div class="col-md-12">
                <h2 class="text-white text-center margTop">{{ __('messages.revTitle') }}</h2>
                <div class="body-submit">

                    <div class="card-submit">
                        <div class="card-info-submit text-center">

                            <p>{{ __('messages.revIndov1') }}

                                <br>
                                <br>

                                <a class="card-info-submit textNone card-info-submit2"
                                    href="{{ route('form.revisor') }}">{{ __('messages.revIndov2') }}</a>



                            </p>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>









    {{-- <div class='container-fluid'>

    <li><a href="{{ route('become.revisor') }}">clicca qui per lavorare con noi</a></li>
</div> --}}




</x-main>

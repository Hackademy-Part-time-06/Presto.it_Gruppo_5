<x-main>
    <div class="container bodyLogin mt-5 bodyRegister">

        <div class="w-50 m-auto mb-0">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>

        <div class="row">
            <div class="col-lg-10 col-xl-9 mx-auto">
                <div class="card flex-row my-5 border-0 shadow rounded-3 overflow-hidden">
                    <div class="card-img-left-register d-none d-md-flex">
                        <!-- Background image for card set in CSS! -->
                    </div>
                    <div class="card-body p-4 p-sm-5">
                        <h5 class="card-title text-center mb-5 fw-light fs-4">Inserisci i dati richiesti</h5>


                        <form action="{{ route('become.revisor') }}" method="POST">
                            @method('POST')
                            @csrf

                            <div class="form-floating mb-3">
                                <input type="name" class="form-control" id="floatingInputEmail" name="name"
                                    placeholder="Name">
                                <label for="floatingInputEmail">Nome</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInputEmail" name="surname"
                                    placeholder="Surname">
                                <label for="floatingInputEmail">Cognome</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="number" class="form-control" id="floatingInputEmail" name="number"
                                    placeholder="number">
                                <label for="floatingInputEmail">Cellulare</label>
                            </div>

                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="floatingInputEmail"
                                    placeholder="name@example.com" name="email">
                                <label for="floatingInputEmail">Email</label>
                            </div>


                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInputEmail" name="city"
                                    placeholder="Città">
                                <label for="floatingInputEmail">Città</label>
                            </div>

                            <div class="form-floating mb-3">
                                
                                
                                        <p class="mb-1 fs-5">Perchè vuoi lavorare con noi:</p> <textarea id="message" type="text" placeholder="Enter your message" name="description" class="form-control input-box rm-border"></textarea>
                                    
                               
                            </div>



                            <div class="d-grid mb-2">
                                <button type="submit" class=" btn btn-outline-primary  my-3"> <a class="text-dark "
                                        >Invio
                                    </a></button>

                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>


</x-main>

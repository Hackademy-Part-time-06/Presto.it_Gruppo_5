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
                        <h5 class="card-title text-center mb-5 fw-light fs-5">{{ __('messages.register') }}</h5>


                        <form action="{{ route('register') }}" method="POST" enctype="multipart/form-data">
                            @method('POST')
                            @csrf
                            <!-- Input name -->
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInputEmail" name="name"
                                    placeholder="Name">
                                <label for="floatingInputEmail">{{ __('messages.registerName') }}</label>
                            </div>

                            <!-- Input surname -->
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingSurname" placeholder="Surname"
                                    name="surname">
                                <label for="floatingSurname">Cognome</label>
                            </div>

                            <!-- Input email -->
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="floatingInputEmail"
                                    placeholder="name@example.com" name="email">
                                <label for="floatingInputEmail">{{ __('messages.emailAddress') }}</label>
                            </div>

                            <!-- Input password -->
                            <div class="form-floating mb-3">
                                <input type="password" class="form-control" id="floatingPassword" placeholder="Password"
                                    name="password">
                                <label for="floatingPassword">{{ __('messages.password') }}</label>
                            </div>

                            <!-- Password confirmation -->
                            <div class="form-floating mb-3">
                                <input type="password" class="form-control" id="floatingPassword" placeholder="Password"
                                    name="password_confirmation">
                                <label for="floatingPassword">{{ __('messages.confirmPassword') }}</label>
                            </div>

                            <!-- Input number -->
                            <div class="form-floating mb-3">
                                <input type="tel" class="form-control" id="floatingSurname" placeholder="Surname"
                                    name="number">
                                <label for="floatingSurname">Telefono</label>
                            </div>

                            <!-- Input city -->
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingCity" placeholder="city"
                                    name="city">
                                <label for="floatingDescription">Città</label>
                            </div>

                            <!-- Input description -->
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingDescription" placeholder="description"
                                    name="description">
                                <label for="floatingDescription">Informazioni aggiuntive</label>
                            </div>

                            <!-- Input Avatar -->
                            <div class="form-floating mb-3">
                                <input class="form-control form-control-sm" id="formFileSm" type="file" name="avatar">
                                <label for="formFileSm" class="form-label">Profile Picture</label>
                            </div>

                            <!-- Bottone submit -->
                            <div class="d-grid mb-2">
                                <button type="submit"
                                    class="btn btn-outline-success my-3">{{ __('messages.registerBtn') }}</button>
                                <a class="btn btn-outline-info"
                                    href="{{ route('login') }}">{{ __('messages.accountBtn?') }}</a>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>


</x-main>

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


                        <form action="{{ route('register') }}" method="POST">
                            @method('POST')
                            @csrf

                            <div class="form-floating mb-3">
                                <input type="name" class="form-control" id="floatingInputEmail" name="name"
                                    placeholder="Name">
                                <label for="floatingInputEmail">{{ __('messages.registerName') }}</label>
                            </div>

                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="floatingInputEmail"
                                    placeholder="name@example.com" name="email">
                                <label for="floatingInputEmail">{{ __('messages.emailAddress') }}</label>
                            </div>



                            <div class="form-floating mb-3">
                                <input type="password" class="form-control" id="floatingPassword" placeholder="Password"
                                    name="password">
                                <label for="floatingPassword">{{ __('messages.password') }}</label>
                            </div>

                            <div class="form-floating mb-3">
                                <input type="password" class="form-control" id="floatingPassword" placeholder="Password"
                                    name="password_confirmation">
                                <label for="floatingPassword">{{ __('messages.confirmPassword') }}</label>
                            </div>


                            <div class="d-grid mb-2">
                                <button type="submit"
                                    class="btn btn-outline-success my-3">{{ __('messages.registerBtn') }}</button>
                                <a class="btn btn-outline-info"
                                    href="{{ route('login') }}">{{ __('messages.accountBtn') }}</a>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>


</x-main>

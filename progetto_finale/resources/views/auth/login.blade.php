{{-- <x-main>
    <div class="margin-top">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="container">
            <form action="{{ route('login') }}" method="POST">
                @method('POST')
                @csrf
                <div class="input-group mb-3">
                    <span class="input-group-text">Email && Password</span>
                    <input type="email" aria-label="Emai" class="form-control" name="email">
                    <input type="password" aria-label="Password" class="form-control" name="password">
                </div>
                <button type="submit" class="btn btn-outline-success my-3">Accedi</button>
                <a href="{{ route('register') }}">Non sei ancora registrato?</a>
            </form>
        </div>
    </div>
</x-main> --}}



<x-main>
    <div class="container bodyLogin mt-5">
        <div class="row">
            <div class="col-lg-10 col-xl-9 mx-auto">
                <div class="card flex-row my-5 border-0 shadow rounded-3 overflow-hidden">
                    <div class="card-img-left d-none d-md-flex">
                        <!-- Background image for card set in CSS! -->
                    </div>
                    <div class="card-body p-4 p-sm-5">
                        <h5 class="card-title text-center mb-5 fw-light fs-5">Login</h5>


                        <form action="{{ route('login') }}" method="POST">
                            @method('POST')
                            @csrf


                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="floatingInputEmail"
                                    placeholder="name@example.com" name="email">
                                <label for="floatingInputEmail">Email address</label>
                            </div>

                            <hr>

                            <div class="form-floating mb-3">
                                <input type="password" class="form-control" id="floatingPassword" placeholder="Password"
                                    name="password">
                                <label for="floatingPassword">Password</label>
                            </div>


                            <div class="d-grid mb-2">
                                <button type="submit" class="btn btn-outline-success my-3">Accedi</button>
                                <a href="{{ route('register') }}">Non sei ancora registrato?</a>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>


</x-main>

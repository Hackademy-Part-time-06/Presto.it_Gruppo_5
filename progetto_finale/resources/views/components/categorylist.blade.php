<section class="mt-5">
    <div class="container">
        <div class="text-center p-5">
            <h2 class="section-heading">{{ __('messages.navCategory') }}</h2>
        </div>
        <div class=" row text-center">
            @foreach ($categories as $category)
                <div class="col-md-3 my-3">
                    <div class="mx-5">
                        <div class="circle mx-2 ">
                            <h1> <i class="icona bi bi-bag"></i></h1>
                        </div>
                    </div>
                    <div class="div-scritta">
                        <h5><a class="scritta"
                                href="{{ route('category.show', $category) }}">{{ __('messages.' . $category->name) }}</a>
                        </h5>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    </div>
</section>

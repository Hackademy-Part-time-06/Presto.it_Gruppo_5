<section>
    <div class="">
        <div class="text-center p-3">
            <h2 class="section-heading">Esplora le nostre categorie</h2>
        </div>
        <div class="text-center">
            <div class="container-fluid containerCat">
                <div class="row mx-5">

                    @foreach ($categories as $category)
                        <div class="col-md-3 wrapper">
                            <div class="cardCat mb-5"> <i class="icona bi bi-bag"></i>

                                <h5><a class="scritta"
                                        href="{{ route('category.show', $category) }}">{{ $category->name }}</a>
                                </h5>
                            </div>
                        </div>




                        {{-- <div class="col-md-3 my-3">
                    <div class="mx-5">
                        <div class="circle mx-2 ">
                            <h1> <i class="icona bi bi-bag"></i></h1>
                        </div>
                    </div>
                    <div class="div-scritta">
                        <h5><a class="scritta" href="{{ route('category.show', $category) }}">{{ $category->name }}</a>
                        </h5>
                    </div>
                    </div> --}}
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    
    

</section>

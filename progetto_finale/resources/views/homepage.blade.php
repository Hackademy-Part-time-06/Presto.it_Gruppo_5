<x-main>



    <x-header />

    <div class="container">

        <div class="row mt-4">
            <section class="card-section">
                <div class="container">
                    <div class="row">
                        <div class="text-center p-3">
                            <h2 class="section-heading text-uppercase">I nostri ultimi articoli</h2>
                            <h3 class="section-subheading">Non perderti le offerte.</h3>
                        </div>
                    </div>
                    <div class="row">
                        @foreach ($latestarticles as $latestarticle)
                            <div class="col-lg-4 col-sm-6 mb-4">
                                <x-homecard :latestarticle="$latestarticle" />
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="container-fluid mb-5">

                    <livewire:category-list />

                </div>

            </section>

</x-main>

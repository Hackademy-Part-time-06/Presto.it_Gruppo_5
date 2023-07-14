<x-main>
    <x-header />

    <div class="container-fluid">


        <section class="card-section">

            <div class="row mt-5 ">
                <div class="text-center p-3">
                    <h2 class="section-heading text-uppercase">{{ __('messages.allAnnouncements') }}</h2>
                    <h3 class="section-subheading">{{ __('messages.allOffers') }}</h3>
                </div>
            </div>
            <div class="row m-3">
                @foreach ($latestarticles as $latestarticle)
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <x-homecard :latestarticle="$latestarticle" />
                    </div>
                @endforeach
            </div>
    </div>
    

        <livewire:category-list />

    
    </section>

    </div>
    </div>

</x-main>

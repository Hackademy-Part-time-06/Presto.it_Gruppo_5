<x-main>
    <x-navbar/>
    <x-header/>
    <div class="container">
        <div class="row mt-4">
            <!-- Portfolio Grid-->
<section class="page-section bg-light" id="portfolio">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">I nostri ultimi articoli</h2>
            <h3 class="section-subheading text-muted">Non perderti le nostre offerte.</h3>
        </div>
        <div class="row">
            
            @foreach ($latestarticles as $latestarticle)
            <div class="col-lg-4 col-sm-6 mb-4">
                <x-homecard :latestarticle="$latestarticle" />
            </div>
            @endforeach
        
    </div>
</x-main>
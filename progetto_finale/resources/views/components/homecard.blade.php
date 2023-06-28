<!-- Portfolio Grid-->
<section class="page-section bg-light" id="portfolio">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">I nostri ultimi articoli</h2>
            <h3 class="section-subheading text-muted">Non perderti le nostre offerte.</h3>
        </div>
        <div class="row">
            <div class="col-lg-4 col-sm-6 mb-4">
                <!-- Portfolio item 1-->

                <div class="portfolio-item">
                    <a class="portfolio-link" data-bs-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="/media/lavandino.jpeg" alt="..." />
                    </a>
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading">{{ $latestarticle->title }}</div>
                        <div class="portfolio-caption-heading">{{ $latestarticle->price }}</div>
                        <div class="portfolio-caption-subheading text-muted">{{ $latestarticle->category->name }}</div>
                        <a href="{{ route('articles.show', $latestarticle) }}" class="btn btn-outline-secondary">See
                            details</a>

                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 mb-4">

            </div>
        </div>
    </div>
</section>

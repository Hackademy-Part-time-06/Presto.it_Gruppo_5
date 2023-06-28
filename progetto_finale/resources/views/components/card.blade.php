 <!-- Portfolio Grid-->
 <section class="page-section bg-light" id="portfolio">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">I nostri articoli</h2>
            <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
        </div>
        <div class="row">
            <div class="col-lg-4 col-sm-6 mb-4">
                <!-- Portfolio item 1-->
            
                <div class="portfolio-item">
                    <a class="portfolio-link" data-bs-toggle="modal" href={{route('articles.show',$article)}}>
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="/media/lavandino.jpeg" alt="..." />
                    </a>
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading">Threads</div>
                        <div class="portfolio-caption-subheading text-muted">Illustration</div>
                        <a type="button" class="btn" href={{route('articles.show',$article)}}>ciao</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 mb-4">
               
                
              
            </div>
        </div>
    </div>
</section>
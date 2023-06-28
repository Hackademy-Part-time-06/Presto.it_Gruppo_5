<div class="card m-3" style="width: 18rem;">
    <img src="..." class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">{{$latestarticle->title}}</h5>
      <h6 class="card-tile">${{$latestarticle->price}}</h6>
      <p class="card-text">{{$latestarticle->category->name}}</p>
      <a href="{{route('articles.show', $latestarticle)}}" class="btn btn-info">See details</a>
    </div>
</div>
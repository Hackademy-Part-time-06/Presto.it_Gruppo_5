<div class="card h-100 ">
    <a ><img class="card-img-top" src="@if($latestarticle->images->isEmpty()) https://via.placeholder.com/700x400 @else {{$latestarticle->images->first()->getUrl(300 , 300)}} @endif" alt=""></a>
    <div class="card-body">
        <h4 class="card-title">
            <h3>{{ $latestarticle->title }}</h3>
            <hr>
        </h4>
        <p class="card-text">{{ __('messages.price') }} {{ $latestarticle->price }}</p>
        <p class="card-text">{{ __('messages.category') }} {{ $latestarticle->category->name }}</p>
        <button class="custom-btn btn-6 ps-3 pe-3"><span><a href="{{ route('articles.show', $latestarticle) }}"
                    class="textDecA">{{ __('messages.detailsBtn') }}</a></span></button>
    </div>
</div>

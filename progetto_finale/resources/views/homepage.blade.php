<x-main>
    <div class="container">
        <div class="row">
            Homepage
        </div>
        <div class="row">
            <h3 class="text-center">Latest Articles</h3>
        </div>
        <div class="row">
            @foreach ($latestarticles as $latestarticle)
                <x-homecard :latestarticle="$latestarticle" />
            @endforeach
        </div>
    </div>
</x-main>
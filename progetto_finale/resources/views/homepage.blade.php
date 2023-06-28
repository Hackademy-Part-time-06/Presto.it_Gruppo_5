<x-main>
    <x-navbar/>
    <x-header/>
    <div class="container">
        <div class="row mt-4">
            @foreach ($latestarticles as $latestarticle)
                <x-homecard :latestarticle="$latestarticle" />
            @endforeach
        </div>
    </div>
</x-main>
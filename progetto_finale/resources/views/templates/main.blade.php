<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Presto.it</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>

<body id="vanta">

    <x-navbar />

    @if (session()->has('success'))
        <div class="alert alert-success text-center w-50 m-auto mt-5 mb-5">
            {{ session()->get('success') }}
        </div>
    @endif
    <main>
        {{ $slot }}
    </main>

    <x-footer />

    @livewireScripts

</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r121/three.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vanta@latest/dist/vanta.net.min.js"></script>
<script type="text/javascript">
    VANTA.NET({
        el: "#vanta",
        mouseControls: true,
        touchControls: true,
        gyroControls: false,
        minHeight: 200.00,
        minWidth: 200.00,
        scale: 1.00,
        scaleMobile: 1.00,
        color: 0x910004,
        backgroundColor: 0x0
    })
</script>

</html>

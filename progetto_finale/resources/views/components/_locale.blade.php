<form action="{{ route('set_language_locale', $lang) }}" method="POST">
    @csrf
    <button type="submit" style="background-color:transparent; border:none;">
        <span class="fi fi-{{ $nation }} ps-5"></span>
    </button>
</form>

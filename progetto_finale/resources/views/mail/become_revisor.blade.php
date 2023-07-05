<body>
    <div>

        <h1>Un utente ha chiesto di lavorare con noi </h1>
        <h2>Ecco i suoi dati:</h2>
        <p>
            Nome: {{ $user->name }}
        </p>
        <p>
            Email: {{ $user->email }}
        </p>
        <p>
            Clicca qui per renderlo revisore:
            <a href="{{ route('make.revisor', compact('user')) }}">Rendi revisore</a>
        </p>

    </div>
</body>

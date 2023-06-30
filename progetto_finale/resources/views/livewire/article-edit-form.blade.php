<div class="mt-5 p-4 container shadow">

    @if(session()->has('article'))
        <div class="alert alert-success text-center">
            {{session('article')}}
        </div>
    @endif

    <!-- Rispetto al form del create il metodo di riferimento sarà update e non store  -->
    <form wire:submit.prevent="update">
    @csrf

        <select class="form-select mb-3" aria-label="Default select example" wire:model.defer="category_id">
            <option>Tutte le categorie</option>
            @foreach ($categories as $category)
                <option value="{{$category->id}}">{{$category->name}}</option>
            @endforeach
        </select>

        <div class="mb-3">
            <label for="input-title" class="form-label">Title</label>
            <!-- wire.model.lazy fa si che la chiamata parta solo quando il focus viene spostato dall'input -->
            <input type="text" class="form-control @error('title') is-invalid @enderror" wire:model.lazy="title" id="input-title" value="{{old('title')}}" aria-describedby="emailHelp">
            @error('title')
                <span style="color: red">{{$message}}</span>
            @enderror
        </div>

        <div class="mb-3">
            <label for="input-price" class="form-label">price</label>
            <input type="number" step="0.1" class="form-control @error('price') is-invalid @enderror" wire:model.lazy="price" id="input-price" value="{{old('price')}}" >
            <!-- Messaggio di errore -->
            @error('price')
            <span style="color: red">{{$message}}</span>
            @enderror
        </div>

        <div class="mb-3">
            <!-- wire.model.debounce.Xms fa si che la chiamata parta in base al timing impostato in millisecondi -->
            <label for="input-description" class="form-label">description</label>
            <textarea class="form-control @error('description') is-invalid @enderror" wire:model.debounce.1000ms="description" id="input-description" value="{{old('description')}}" rows="3"></textarea>
            <!-- Messaggio di errore -->
            @error('description')
                <span style="color: red">{{$message}}</span>
            @enderror
            <div id="input-help" class="form-text">We'll never share your informations with anyone else.</div>
        </div>
        
        <button type="submit" class="btn btn-warning">Edit</button>

    </form>
</div>
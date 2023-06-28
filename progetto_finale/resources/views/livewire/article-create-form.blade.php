<div class="mt-5 p-4 container shadow">

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if(session()->has('article'))
        <div class="alert alert-success text-center">
            {{session('article')}}
        </div>
    @endif

    <!-- Form -->

    <form wire:submit.prevent="store">
        @csrf

        <select class="form-select mb-3" aria-label="Default select example" wire:model.lazy="category_id">
            @foreach ($categories as $category)
                <option value="{{$category->id}}">{{$category->name}}</option>
            @endforeach
        </select>
    
        <div class="mb-3">
                <label for="input-title" class="form-label">title</label>
                <!-- wire.model.lazy fa si che la chiamata parta solo quando il focus viene spostato dall'input -->
                <input type="text" class="form-control" wire:model.lazy="title" id="input-title" value="{{old('title')}}" aria-describedby="emailHelp">
        </div>
    
        <div class="mb-3">
            <label for="input-price" class="form-label">price</label>
            <input type="number" step="0.1" class="form-control" wire:model.lazy="price" id="input-price" value="{{old('price')}}" >
        </div>

        <div class="mb-3">
            <!-- wire.model.debounce.Xms fa si che la chiamata parta in base al timing impostato in millisecondi -->
            <label for="input-description" class="form-label">description</label>
            <textarea class="form-control" wire:model.debounce.1000ms="description" id="input-description" value="{{old('description')}}" rows="3"></textarea>
            <div id="input-help" class="form-text">We'll never share your informations with anyone else.</div>
        </div>
            
        <button type="submit" class="btn btn-primary">Save</button>
    
    </form>
</div>
<div class="section">
    <div class="container">
        <div class="row full-height justify-content-center">
            <div class="col-12 text-center align-self-center py-5 margin-bottom">
                <div class="section pb-5 pt-5 pt-sm-2 text-center">
                    <div class="card-3d-wrap mx-auto">
                        <div class="card-3d-wrapper">
                            <div class="card-front">
                                <div class="center-wrap">
                                    <div class="section text-center">
                                        <h4 class="mb-4 pb-3">Inserisci il tuo articolo qui!</h4>

                                        @if (session()->has('article'))
                                            <div class="alert alert-success text-center">
                                                {{ session('article') }}
                                            </div>
                                        @endif



                                        <form wire:submit.prevent="store">
                                            @csrf

                                            <div class="form-group">
                                                <label for="input-description" class="form-label">Categoria</label>
                                                <select class="form-select mb-3 form-style"
                                                    aria-label="Default select example" wire:model.defer="category_id">
                                                    <option selected>Tutte le categorie</option>
                                                    @foreach ($categories as $category)
                                                        <option value="{{ $category->id }}">{{ $category->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            <div class="mb-3 form-group">
                                                <label for="input-title" class="form-label">Nome prodotto</label>
                                                <!-- wire.model.lazy fa si che la chiamata parta solo quando il focus viene spostato dall'input -->
                                                <input type="text"
                                                    class="form-style @error('title') is-invalid @enderror"
                                                    wire:model.lazy="title" id="input-title"
                                                    value="{{ old('title') }}" aria-describedby="emailHelp">
                                                <!-- Messaggio di errore -->
                                                @error('title')
                                                    <span style="color: red">{{ $message }}</span>
                                                @enderror
                                            </div>

                                            <div class="mb-3 form-group">
                                                <label for="input-price"
                                                    class="form-label @error('price') is-invalid @enderror">Prezzo</label>
                                                <input type="number" step="0.1" class="form-style"
                                                    wire:model.lazy="price" id="input-price"
                                                    value="{{ old('price') }}">
                                                <!-- Messaggio di errore -->
                                                @error('price')
                                                    <span style="color: red">{{ $message }}</span>
                                                @enderror
                                            </div>

                                            <div class="mb-3 form-group">
                                                <!-- wire.model.debounce.Xms fa si che la chiamata parta in base al timing impostato in millisecondi -->
                                                <label for="input-description"
                                                    class="form-label @error('description') is-invalid @enderror">Descrizione</label>
                                                <textarea class="form-style" wire:model.debounce.1000ms="description" id="input-description"
                                                    value="{{ old('description') }}" rows="7"></textarea>
                                                <!-- Messaggio di errore -->
                                                @error('description')
                                                    <span style="color: red">{{ $message }}</span>
                                                @enderror

                                            </div>

                                            <button type="submit" class="button-create">Crea</button>

                                        </form>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

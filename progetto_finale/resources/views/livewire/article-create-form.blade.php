<div class="section">
    <div class="container-fluid">
        <div class="row full-height justify-content-center">
            <div class="col-12 text-center align-self-center py-5 margin-bottom">
                <div class="section pb-5 pt-5 pt-sm-2 text-center">
                    <div class="card-3d-wrap mx-auto">
                        <div class="card-3d-wrapper">
                            <div class="card-front">
                                <div class="center-wrap">
                                    <div class="section text-center">
                                        <h4 class="text-white">{{ __('messages.createTitle') }}</h4>

                                        @if (session()->has('article'))
                                            <div class="alert alert-success text-center">
                                                {{ session('article') }}
                                            </div>
                                        @endif

                                        <form wire:submit.prevent="store">
                                            @csrf
                                            <div class="form-group">
                                                <label for="input-description"
                                                    class="form-label text-white">{{ __('messages.category') }}</label>
                                                <select class="form-select mb-3 form-style"
                                                    aria-label="Default select example" wire:model.defer="category_id">
                                                    <option selected>{{ __('messages.allCategories') }}</option>
                                                    @foreach ($categories as $category)
                                                        <option value="{{ $category->id }}">
                                                            {{ __('messages.' . $category->name) }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            <div class="mb-3 form-group">
                                                <label for="input-title"
                                                    class="form-label text-white">{{ __('messages.prodName') }}</label>
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
                                                    class="form-label text-white @error('price') is-invalid @enderror">{{ __('messages.price') }}</label>
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
                                                    class="form-label text-white @error('description') is-invalid @enderror">{{ __('messages.description') }}</label>
                                                <textarea class="form-style" wire:model.debounce.1000ms="description" id="input-description"
                                                    value="{{ old('description') }}" rows="7"></textarea>
                                                <!-- Messaggio di errore -->
                                                @error('description')
                                                    <span style="color: red">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            {{-- IMMAGINI --}}
                                            <div class="mb-3 form-group  ">
                                                <label for="input-image"
                                                    class="form-label text-white">{{ __('messages.insertImg') }}</label>
                                                <input wire:model="temporary_images" name="images" class="form-style"
                                                    type="file" multiple />
                                                <!-- Messaggio di errore -->
                                                @error('temporary_images.*')
                                                    <span class="error">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <button type="submit"
                                                class="button-create">{{ __('messages.createBtn') }}</button>
                                            {{-- se l'immagine non è vuota --}}
                                        </form>


                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
        @if (!empty($images))
            <div class="box-img-form-article m-auto mb-5">
                <h2 class="text-white text-center mt-4 mb-3">Anteprima</h2>
                <div class="row m-3">


                    @foreach ($images as $key => $image)
                        <div class="col m-2">
                            <div class="mx-auto shadow rounded">
                                <img class="img-fluid" src="{{ $image->temporaryUrl() }}" alt="Immagine">
                            </div>
                            <button type="button" class="btn btn-danger shadow text-center mt-2 mx-auto"
                                wire:click="removeImage({{ $key }})">{{ __('messages.deleteBtn') }}</button>

                        </div>
                    @endforeach
                </div>
            </div>
        @endif
    </div>
</div>

</div>

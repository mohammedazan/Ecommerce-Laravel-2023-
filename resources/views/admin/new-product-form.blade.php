<x-layout>
    <x-layout-admin>
        <h1>Créer un nouveau produit</h1>
        <x-layout-admin.form-components.errors />
        <form action="{{ route('create-product') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-floating mb-3">
                <input class="form-control" type="text" name="name" id="name" placeholder="Nom du produit"
                    value="{{ old('name') }}">
                <label for="name">Nom du produit</label>
            </div>
            <div class="row mb-3">
                <!-- Colonne de gauche -->
                <div class="col-12 col-md-6">
    
                    <div class="form-floating mb-3 h-100">
                        <textarea class="form-control h-100" name="short_description" id="short_description" placeholder="Description courte">{{ old('short_description') }}</textarea>
                        <label for="short_description">Description courte</label>
                    </div>
    
                </div>
                <!-- Colonne de droite -->
                <div class="col-12 col-md-6">
    
                    <div class="mb-3">
                        <label for="picture" class="form-label">Image du produit</label>
                        <input class="form-control" name="picture" type="file" id="picture">
                    </div>
    
                    <div class="input-group mb-3">
                        <div class="form-floating ">
                            <input class="form-control" type="number" name="price" id="price" placeholder="0"
                                min="0" step="0.01" value="{{ old('price') }}">
                            <label for="price">Prix</label>
                        </div>
                        <span class="input-group-text">€</span>
                    </div>
    
                    <div class="input-group mb-3">
                        <div class="form-floating">
                            <input class="form-control" type="number" name="stock" id="stock" placeholder="0"
                                min="0" value="{{ old('stock') }}">
                            <label for="stock">Stock</label>
                        </div>
                        <span class="input-group-text">Unités</span>
                    </div>
    
                    <div class="input-group mb-3">
                        <span class="input-group-text">Catégorie</span>
                        <select name="category_id" id="category_id" class="form-select">
                            <option value="">-- Sélectionnez une catégorie --</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}"
                                    {{ $category->id == old('category_id') ? 'selected' : '' }}>
                                    {{ $category->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
    
                    <div class="mb-3">
                        <h6>Étiquettes</h6>
                        <div class="row">
                            @foreach ($tags as $tag)
                                <div class="col-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="tags[]"
                                            value="{{ $tag->id }}" id="tag-{{ $tag->id }}">
                                        <label class="form-check-label" for="tag-{{ $tag->id }}">
                                            {{ $tag->name }}
                                        </label>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
    
                </div>
            </div>
            <div class="form-floating mb-3">
                <textarea class="form-control" style="height: 40em" name="content" id="content" placeholder="Descripción Larga"></textarea>
                <label for="content">Descripción Larga</label>
            </div>

            <button type="submit" class="btn btn-primary">Crear producto</button>
        </form>
    </x-layout-admin>
</x-layout>
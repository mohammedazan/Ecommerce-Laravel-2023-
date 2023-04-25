<x-layout>
    <x-layout-admin>
        <h1>Modifier le produit</h1>

        <form action="{{ route('update-product') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Nom de produit:</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $product->name }}" required>
            </div>

            <div class="form-group">
                <label for="price">Prix:</label>
                <input type="number" step=".01" class="form-control" id="price" name="price" value="{{ $product->price }}" required>
            </div>

            <div class="form-group">
                <label for="description">Description:</label>
                <textarea class="form-control" id="description" name="description" rows="5">{{ $product->description }}</textarea>
            </div>

            <div class="form-group">
                <label for="stock">Stock:</label>
                <input type="number" class="form-control" id="stock" name="stock" value="{{ $product->stock }}" required>
            </div>

            <button type="submit" class="btn btn-primary">Modifier le produit</button>
        </form>
    </x-layout-admin>
</x-layout>

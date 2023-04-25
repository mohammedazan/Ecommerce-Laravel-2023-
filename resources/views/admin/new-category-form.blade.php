<x-layout>
    <x-layout-admin>
        <h1>Nouvelle Catégorie</h1>
        <x-layout-admin.form-components.errors />
        <form action="{{ route('create-category') }}" method="post">
            @csrf
            <div class="form-floating mb-3">
                <input class="form-control" type="text" name="name" id="name" placeholder="Nom de la catégorie"
                    value="{{ old('name') }}">
                <label for="name">Nom de la catégorie</label>
            </div>
            <button type="submit" class="btn btn-primary">Créer Catégorie</button>
        </form>
    </x-layout-admin>
    </x-layout>
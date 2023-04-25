<x-layout>
    <x-layout-admin>
        <h1>Nouvelle étiquette</h1>
        <x-layout-admin.form-components.errors />
        <form action="{{ route('create-tag') }}" method="post">
            @csrf
            <div class="form-floating mb-3">
                <input class="form-control" type="text" name="name" id="name" placeholder="Nom de l'étiquette"
                    value="{{ old('name') }}">
                <label for="name">Nom de l'étiquette</label>
            </div>
        <button type="submit" class="btn btn-primary">Créer une étiquette</button>
    </form>
</x-layout-admin>
</x-layout>
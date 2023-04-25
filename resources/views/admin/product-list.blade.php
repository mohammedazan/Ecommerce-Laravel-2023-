<style>
        /* تطبيق بعض الأساليب الجمالية لرابط الـ admin */
        .admin-link {
        font-size: 2rem;
        font-weight: bold;
        color: #3f3f3f;
        text-decoration: none;
        background-color: #d9d9d9;
        border: 2px solid #3f3f3f;
        padding: 2px;
        border-radius: 5px;
        transition: all 0.3s ease-in-out;
    }

    /* تطبيق بعض التأثيرات الجمالية عند تحريك الماوس فوق رابط الـ admin */
    .admin-link:hover {
        background-color: #3f3f3f;
        color: #ffffff;
        cursor: pointer;
    }
    </style>
<x-layout>
    <x-layout-admin>
        <h1>Liste de produits <a href="http://127.0.0.1:8000/admin/new-product"  class="admin-link"> create produits </a></h1>
        <a href="{{ route('excel.export') }}">تحميل جميع البيانات كملف Excel</a>
        <div class="mt-3 container">
            <div class="row mb-1">
                <div class="col-12 col-md-4 fs-3">
                    Nom de produits
                </div>
                <div class="col-12 col-md-2 fs-3">
                    Prix
                </div>
                <div class="col-12 col-md-2 fs-3">
                    Action
                </div>
                <div class="col-12 col-md-2 fs-3">
                    Ventes
                </div>
                <div class="col-12 col-md-2 fs-3">
                    contrôles
                </div>
            </div>
            <hr>
            @foreach ($products as $product)
                <div class="row mb-1">
                    <div class="col-12 col-md-4">
                        {{ $product->name }}
                    </div>
                    <div class="col-12 col-md-2">
                        {{ $product->price }} €
                    </div>
                    <div class="col-12 col-md-2">
                        {{ $product->stock }} Unités
                    </div>
                    <div class="col-12 col-md-2">
                        {{ $product->orders->count() }}
                    </div>
                    <div class="col-12 col-md-2">
                        <div class="col-12 col-md-2">
                            <a href="{{ route('edit-product', $product->id) }}" class="btn btn-primary">Modifier</a>
                            <form action="{{ route('delete-product', $product->id) }}" method="POST" onsubmit="return confirm('هل أنت متأكد من حذف هذا المنتج؟')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">supprimer</button>
                            </form>
                        </div>
                        
                        
                    </div>
                    
                </div>
            @endforeach
        </div>
    </x-layout-admin>
</x-layout>

<div class="d-flex flex-column flex-shrink-0 p-3 text-bg-dark vh-100 overflow-auto position-fixed">
    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
        <i class="bi bi-shop me-2 ms-4"></i>
        <span class="fs-4">dashboard</span>
    </a>
    <hr>
    @php
        $menu_elements = [
            'Home' => [
                'text' => 'gestion des clients  ',
                'icon' => 'bi bi-house',
                'url' => url('http://127.0.0.1:8000/users'),
            ],
            'element112' => [
                'text' => 'gestion des produits ',
                'icon' => 'bi bi-plus-square',
                'url' => url('http://127.0.0.1:8000/admin/products'),
            ],
            'Crear Categoría' => [
                'text' => 'gestion des catégories',
                'icon' => 'bi bi-union',
                'url' => url('http://127.0.0.1:8000/admin/categories'),
            ],
            'element10' => [
                'text' => ' emails au clients',
                'icon' => 'bi bi-plus-square',
                'url' => route('email-page'),
            ],
            'element88' => [
                'text' => 'gestion des commandes ',
                'icon' => 'bi bi-plus-square',
                'url' =>  url('http://127.0.0.1:8000/admin/orders'),
            ],
            'element13' => [
                'text' => ' gestion des Tage',
                'icon' => 'bi bi-plus-square',
                'url' => url('http://127.0.0.1:8000/admin/tage'),
            ],
            'Tienda' => [
                'text' => ' Home',
                'icon' => 'bi bi-shop',
                'url' => route('store'),
            ],
        ];
    @endphp
    <ul class="nav nav-pills flex-column mb-auto">
        @foreach ($menu_elements as $element)
            @php
                $text = $element['text'];
                $url = $element['url'];
                $icon = $element['icon'];
            @endphp

            <x-layout-admin.sidebar.menu-element :text="$text" :url="$url" :icon="$icon" />
        @endforeach

    </ul>

</div>

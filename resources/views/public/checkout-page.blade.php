@php
$cart = get_cart();
@endphp

<x-layout>
    <x-layout-public>
        <div class="row g-5">
            <div class="col-md-5 col-lg-4 order-md-last">
                <h4 class="d-flex justify-content-between align-items-center mb-3">
                    <span class="text-primary">Votre panier</span>
                    <span class="badge bg-primary rounded-pill">{{ $cart->products->count() }}</span>
                </h4>
                <ul class="list-group mb-3">
                    @foreach ($cart->products as $product)
                    <li class="list-group-item d-flex justify-content-between lh-sm">
                        <div>
                            <h6 class="my-0">{{ $product->name }}</h6>
                            <small class="text-muted">Description brève</small>
                        </div>
                        <span class="text-muted">{{ $product->price }}€</span>
                        <form id="delete-product-{{ $product->id }}" action="/products/{{ $product->id }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">Supprimer</button>
                        </form>
                    </li>
                @endforeach
                

                <!-- Prix total -->
                <li class="list-group-item d-flex justify-content-between">
                    <span>Total (EUR)</span>
                    <strong>{{ $cart->total_price }}€</strong>
                </li>
                <!-- Prix total terminé -->
            </ul>

        </div>
        <div class="col-md-7 col-lg-8">
            <h4 class="mb-3">Adresse</h4>
            <form class="needs-validation" novalidate="" action="{{route('process-checkout')}}" method="POST">
                @csrf
                <div class="row g-3">

                    <div class="col-12">
                        <label for="address" class="form-label">Ligne 1 de l'adresse</label>
                        <input type="text" name="address" class="form-control" id="address"
                            placeholder="Rue Fausse 123" required="">
                    </div>

                    <div class="col-12">
                        <label for="address2" class="form-label">Ligne 2 de l'adresse <span
                                class="text-muted">(Optionnel)</span></label>
                        <input type="text" name="address2" class="form-control" id="address2"
                            placeholder="Escalier, étage, porte">
                    </div>

                    <div class="col-md-5">
                        <label for="country" class="form-label">Pays</label>
                        <select name="country" class="form-select" id="country" required="">
                            <option value="">Choisissez...</option>
                            <option value="Espagne">Espagne</option>
                            <option value="Andorre">Andorre</option>
                            <option value="Nouvelle-Zélande">Nouvelle-Zélande</option>
                        </select>
                    </div>

                    <div class="col-md-4">
                        <label for="state" class="form-label">Province</label>
                        <select name="state" class="form-select" id="state" required="">
                            <option value="">Choisissez...</option>
                            <option value="Santa Cruz de Tenerife">Santa Cruz de Tenerife</option>
                            <option value="Las Palmas">Las Palmas</option>
                        </select>
                    </div>

                    <div class="col-md-3">
                        <label for="zip" class="form-label">Code Postal</label>
                        <input type="text" name="zip" class="form-control" id="zip" placeholder="" required="">
                    </div>
                </div>
                    <hr class="my-4">

                    <h4 class="mb-3">Pago</h4>

                    <h4 class="mb-3">Paiement</h4>

                    <div class="row gy-3">
                        <div class="col-md-6">
                            <label for="cc-name" class="form-label">Nom sur la carte</label>
                            <input type="text" class="form-control" id="cc-name" placeholder=""
                                required="">
                            <small class="text-muted">Nom complet tel qu'il apparaît sur la carte</small>
                        </div>
    
                        <div class="col-md-6">
                            <label for="cc-number" class="form-label">Numéro de la carte</label>
                            <input type="text" class="form-control" id="cc-number" placeholder=""
                                required="">
                        </div>
    
                        <div class="col-md-3">
                            <label for="cc-expiration" class="form-label">Expiration</label>
                            <input type="text" class="form-control" id="cc-expiration" placeholder=""
                                required="">
                        </div>
    
                        <div class="col-md-3">
                            <label for="cc-cvv" class="form-label">Cryptogramme visuel (CVV)</label>
                            <input type="text" class="form-control" id="cc-cvv" placeholder=""
                                required="">
                        </div>
                    </div>
    
                    <hr class="my-4">
    
                    <button class="w-100 btn btn-primary btn-lg" type="submit">Passer la commande</button>
                </form>
            </div>
        </div>
    </x-layout-public>    
</x-layout>

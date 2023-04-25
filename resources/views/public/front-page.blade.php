<x-layout>
    <x-layout-public>
        <!-- Hero -->
        <section id="hero" class="container-fluid">
            <div class="col-lg-6">
                <h1 class="display-5 fw-bold lh-1 mb-3"></p>
                <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                  <!--  <button type="button" class="btn btn-outline-secondary btn-lg px-4"></button> -->
                </div>
            </div>
            <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
                <h1  style="text-align: center ">
                    Welcome to our store</h1>
                <div class="col-10 col-sm-8 col-lg-6">
                   <!-- Hero   <img src="/images/marvin-meyer-SYTO3xs06fU-unsplash.jpg" class="d-block mx-lg-auto img-fluid"
                        alt="Bootstrap Themes" loading="lazy" width="700" height="500">-->  
                </div>
            </div>
        </section>

        @php
            $name = "todos-los-productos";
        @endphp
        <x-layout-public.product-grid
            :products="$products"
            :name="$name"/>

    </x-layout-public>
</x-layout>

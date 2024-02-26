<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>VUE PRODUCT CART</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</head>
  <body>
    <div id="app">
        <navbar-component :logo="`Tasnim`"></navbar-component>
        <banner-component></banner-component>
        {{-- <product-component :product="{
            name:'out of loop',
            price:22003,
            image:'default.png'
        }" ></product-component> --}}

        <section>
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">Product List</div>
                    <div class="col-lg-6">
                        <pagination :data="products" :method="get_product" ></pagination>
                    </div>
                    <div class="col-lg-3"></div>
                </div>
                <div class="row">
                    <div class="col-lg-7">
                        <div class="row">
                            <div class="col-md-4" v-for="product in products.data" :key="product.id">
                                <product-component
                                :product="product"
                                :add_product_to_pos_list="add_product_to_pos_list" >
                            </product-component>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="cart_item " v-for="pos_product in pos_product_list" :key="pos_product.id">
                            {{-- <p>@{{a}} + @{{b}} = @{{ a + b }}</p>
                            <p>@{{sum}}</p>
                            <p>@{{name}}</p>
                            <button @click = "sumation" >click</button>

                            <input type="text" v-model = "name"> --}}
                            <test-component
                                :pos_product="pos_product"
                                :update_product_qty="update_product_qty"
                                :delete_pos_product="delete_pos_product"></test-component>

                        </div>
                        <div>
                            <p class="text-end">total price:@{{get_total_price}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script> --}}

    @vite('resources/js/app.js')
  </body>
</html>

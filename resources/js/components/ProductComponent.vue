<template>
    <div class="card mb-3" >
        <!-- <img :src="`${Storage::url('product/')}${product.name}`" class="card-img-top" alt="...">  -->

        <img :src="'/storage/product/'+product.image" class="card-img-top p-4" :alt="product.name">
        <div class="card-body">
            <h5 class="card-title">{{product.name}}</h5>
            <p class="card-text">${{product.price}}</p>
            <a href="#" class="btn btn-primary btn-sm" @click="add_product_to_pos_list(product)">cart</a>
        </div>
    </div>
</template>

<script>
export default {
    props:[
        'product',
        'add_product_to_pos_list'
    ]
}
</script>

<style>

</style>

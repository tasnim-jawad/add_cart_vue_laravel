<template>
    <div class="product_carted  mt-3 p-2 border border-dark">
        <div class="product_description">
            <img class="product_img" :src="'/storage/product/'+pos_product.image" alt="">
            <p class="fw-bold m-0">{{pos_product.name}}</p>
        </div>
        <div class="quantity px-2 ">
            <input class="w-100 text-center" type="number"
            @change="update_product_qty(pos_product,$event.target.value)"
            @keyup="update_product_qty(pos_product,$event.target.value)"
            :value="pos_product.qty">
            <button @click="update_product_qty(pos_product,1)" class="btn btn-info btn-sm">reset</button>
            <button @click="delete_pos_product(pos_product)" class="btn btn-danger btn-sm">reset</button>
        </div>
        <div class="price text-end px-2">
            <p class="m-0">${{pos_product.price * pos_product.qty}}</p>
        </div>
    </div>
</template>

<script>
export default {
    props:[
        'pos_product',
        'update_product_qty',
        'delete_pos_product'
    ]
}
</script>

<style>
    .product_carted{
        display: grid;
        grid-template-columns: 2fr 1fr 1fr ;
        align-items: center;
    }
    .product_img{
        width: 40px;
        height: 40px;
    }
</style>

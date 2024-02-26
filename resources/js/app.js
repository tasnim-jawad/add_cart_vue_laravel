/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

import './bootstrap';
import { createApp } from 'vue';


/**
 * Next, we will create a fresh Vue application instance. You may then begin
 * registering components with the application instance so they are ready
 * to use in your application's views. An example is included for you.
 */

const app = createApp({
    data(){
        return {
            name: 'Tasnimul Hasan',
            a: 10,
            b: 20,
            sum: 0,
            products : {},
            pos_product_list : [],
            pos_total_price : 0
          }
    },
    methods: {
        get_product(url){
            if(url){
              $.get(url,(res)=>{
                this.products = res
            });
            }else{
                $.get(`/product/show`,(res)=>{
                    this.products = res
                });
            }

        },
        sumation() {
            this.sum = this.a + this.b;
            console.log(this.products);

        },
        add_product_to_pos_list(product) {
            console.log(product);
            console.log(product.id);


            let product_check = this.pos_product_list.find((item)=> item.id === product.id)
            if(product_check){
                // console.log(product_check);
                product_check.qty++;
                // this.get_total_price();
            }else{

                let pos_product ={
                    id : product.id,
                    name : product.name,
                    price : product.price,
                    image : product.image,
                    qty : 1
                }
                this.pos_product_list.unshift(pos_product);
                // console.log(this.pos_total_price);
                // this.get_total_price();
            }
        },
        update_product_qty(pos_product,new_qty){
            // console.log(pos_product,new_qty);
            if(new_qty > 0 ){
                let product_check_qty = this.pos_product_list.find((item)=> item.id === pos_product.id)
                product_check_qty.qty = new_qty;
                // this.get_total_price();
            }else{
                alert('please enter valid quantity');
            }
        },
        delete_pos_product(pos_product){
            console.log(pos_product);
            let new_pos_product_list = this.pos_product_list.filter((item)=> item.id !== pos_product.id)
            this.pos_product_list = new_pos_product_list;
            // console.log(new_pos_product_list);
        }
    },
    mounted() {
        // console.log('mounted');
        // alert('something mounted')
        this.get_product()
      },

    computed: {
        get_total_price(){
            this.pos_total_price =  this.pos_product_list.reduce((total,product)=>{
                return total + (parseInt(product.price) * parseInt(product.qty))
            },0)
            return this.pos_total_price;
        },
    }
});

import ExampleComponent from './components/ExampleComponent.vue';
import TestComponent from './components/TestComponent.vue';
import NavbarComponent from './components/NavbarComponent.vue';
import BannerComponent from './components/BannerComponent.vue';
import ProductComponent from './components/ProductComponent.vue';
import Pagination from './components/Pagination.vue';

app
    .component('example-component', ExampleComponent)
    .component('navbar-component', NavbarComponent)
    .component('banner-component', BannerComponent)
    .component('product-component', ProductComponent)
    .component('test-component', TestComponent)
    .component('pagination', Pagination)

app.mount('#app');

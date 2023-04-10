<template>
    <div class="col-xl-3 col-lg-3 col-md-12 col-12">
                <!-- categories-area start -->
                <!-- <div class="categories-area box-shadow bg-fff">
                    <div class="product-title home2-bg-1 text-uppercase home2-product-title">
                        <i class="fa fa-bookmark icon bg-4"></i>
                        <h3>categories</h3>
                    </div>
                    <div class="shop-categories-menu p-20">
                        <ul>
                            <li><a href="#">Accessories</a><span> (7)</span></li>
                            <li>
                                <a href="#">Clothing</a><span> (21)</span><span class="opener-1 fa fa-plus pull-right"></span>
                                <ul class="toggle-1">
                                    <li><a href="#">Hoodies</a><span> (20)</span></li>
                                    <li><a href="#">T-shirts</a><span> (3)</span></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Men's</a><span> (16)</span><span class="opener-2 fa fa-plus pull-right"></span>
                                <ul class="toggle-2">
                                    <li><a href="#">Hats</a><span> (9)</span></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Music</a><span> (11)</span><span class="opener-3 fa fa-plus pull-right"></span>
                                <ul class="toggle-3">
                                    <li><a href="#">Albums</a><span> (1)</span></li>
                                    <li><a href="#">Singles</a><span> (3)</span></li>
                                </ul>
                            </li>
                            <li><a href="#">Posters</a><span> (7)</span></li>
                            <li>
                                <a href="#">Women's</a><span> (14)</span><span class="opener-4 fa fa-plus pull-right"></span>
                                <ul class="toggle-4">
                                    <li><a href="#">Hats</a><span> (10)</span></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div> -->
                <!-- filter-by-price-area start -->
                <!-- <div class="filter-by-price-area mtb-30 bg-fff box-shadow">
                    <div class="product-title home2-bg-1 text-uppercase home2-product-title">
                        <i class="fa fa-bookmark icon bg-4"></i>
                        <h3>Filter by price</h3>
                    </div>
                    <div class="filter-by-price p-20-15">
                        <p>price: <input type="text" id="amount" /></p>
                        <div id="slider-range" class="ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content">
                            <div class="ui-slider-range ui-corner-all ui-widget-header" style="left: 0.4%; width: 99.6%;"></div>
                            <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default" style="left: 0.4%;"></span><span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default" style="left: 100%;"></span>
                        </div>
                        <div class="filter">
                            <button>filter</button>
                        </div>
                    </div>
                </div> -->
                <div class="categories-area box-shadow bg-fff">
                    <div class="product-title home2-bg-1 text-uppercase home2-product-title">
                        <i class="fa fa-bookmark icon bg-4"></i>
                        <h3>categories</h3>
                    </div>
                    <div class="shop-categories-menu p-20">
                        <ul>
                            <li v-for="main_category in categories" :key="main_category.id">
                                <a href="#" @click.prevent="load_product('/products/category/'+main_category.slug)">{{main_category.name}}</a>
                                <span> ({{main_category.related_products_count}})</span>
                                <span :class="'opener-'+main_category.id +' fa fa-plus pull-right toggle_category'"></span>
                                <ul>
                                    <li v-for="category in main_category.related_categories" :key="category.id">
                                        <a href="#"  @click.prevent="load_product('/products/category/'+main_category.slug+'/'+category.slug)">{{ category.name }}</a>
                                        <span> ({{category.related_products_count}})</span>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="filter-by-price-area mtb-30 bg-fff box-shadow">
                    <div class="product-title home2-bg-1 text-uppercase home2-product-title">
                        <i class="fa fa-bookmark icon bg-4"></i>
                        <h3>Filter by price</h3>
                    </div>
                    <div class="filter-by-price p-20-15">
                        <div id="slider-range" class="ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content">
                            <div class="ui-slider-range ui-corner-all ui-widget-header" style="left: 0.4%; width: 99.6%;"></div>
                            <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default" style="left: 0.4%;"></span>
                            <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default" style="left: 100%;"></span>
                        </div>
                        <div class="filter d-flex justify-content-between">
                            <button>filter</button>
                            <p style="position: unset; width:60%;">price: <input type="text" id="amount"  class="form-control w-100" /></p>
                        </div>
                    </div>
                </div>
                <!-- size-area start -->
                <div class="size-area bg-fff box-shadow">
                    <div class="product-title home2-bg-1 text-uppercase home2-product-title">
                        <i class="fa fa-bookmark icon bg-4"></i>
                        <h3>Size</h3>
                    </div>
                    <div class="size-menu shop-categories-menu p-20">
                        <ul>
                            <li><a href="#">L</a><span> (1)</span></li>
                            <li><a href="#">M</a><span> (1)</span></li>
                            <li><a href="#">S</a><span> (1)</span></li>
                            <li><a href="#">XS</a><span> (1)</span></li>
                        </ul>
                    </div>
                </div>
            </div>
    <div class="col-xl-9 col-lg-9 col-md-12 col-12">
        <div class="tab-area">
    <div class="row">
    <div class="col-md-3" v-for="product in products.data" :key="product.id">
                                    <div class="product-wrapper">
                                        <div class="product-img">
                                            <a href="#">
                                                <img :src="`/${product.thumb_image}`" alt="">
                                            </a>
                                            <div class="product-icon c-fff home3-hover-bg">
                                                <ul>
                                                    <li><a href="#" data-toggle="tooltip" title="" data-original-title="Add to cart"><i class="fa fa-shopping-cart"></i></a></li>
                                                    <li><a href="#" data-toggle="tooltip" title="" data-original-title="Wishlist"><i class="fa fa-heart-o"></i></a></li>
                                                    <li><a href="#" data-toggle="tooltip" title="" data-original-title="Compare"><i class="fa fa-comments"></i></a></li>
                                                    <li><a href="#" data-toggle="tooltip" @click.prevent="showModal(product)"  title="" data-original-title="view product details"><i class="fa fa-search"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-content home3-hover">
                                            <h3><a>{{product.name}}</a></h3>
                                            <ul>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                            <div class="d-flex justify-content-between">
                                                <span v-if="product.discount_price > 0">
                                                    <del>$ {{product.price}}</del>
                                                </span>
                                                <span v-else>{{product.price}}</span>
    
                                                <span v-if="product.discount_price>0" >$ {{product.discount_price}}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal fade"  id="productViewModal" style="z-index: 99999999999;" tabindex="-1" aria-labelledby="productViewModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-xl">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="productViewModalLabel">Details</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">X</button>
                                            </div>
                                            <div class="modal-body">
                                                <product-details></product-details>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
        </div>

        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-12" style="margin-bottom: 30px;">
                                <!-- <pagination :data="products" @pagination-change-page="get_product"></pagination> -->
                                <paginate
                                :page-count="3"
                                :click-handler="get_product"
                                :prev-text="'Prev'"
                                :next-text="'Next'"
                                >
                                </paginate>
                                
                            </div>
        </div>
        </div>
    </div>


</template>

<script>
import { mapGetters, mapActions, mapMutations } from 'vuex';
// import pagination from 'laravel-vue-pagination';
import Paginate from 'vuejs-paginate-next';
import productDetails from './productDetails.vue';
    export default {
        components: {
            paginate: Paginate,
            // pagination : pagination,
            productDetails: productDetails,
        },

        created: function(){
            // console.log(window.vue_store);
            this.get_product();
            this.init_jquery();
            this.get_categories();
        },
        
        data: function(){
            return {
                name: 'test',
                page: 'category',
                products: {},
                categories: [],
                data_load_url: '/json/latest-products-json?page=',
            }
        },

        methods: {
            ...mapActions([
                'fetch_product_list'
            ]),
            ...mapMutations([
                'set_product_details'
            ]),
            // get_product: function(page=1){
            //     axios.get('/json/latest-products-json?page=' + page)
            //     .then((res)=>{
            //         // console.log(res.data);
            //         // if(res.data.products){
            //         //     this.products = res.data.products;
            //         // }else{
            //         //     this.products = res.data;
            //         // }
            //         // $("html, body").animate({ scrollTop: 250 }, "slow");
            //         this.products = res.data;
            //         $("html, body").animate({ scrollTop: 280 }, "slow");
            //     })
            // },
            get_product: function(page=1){
                axios.get(this.data_load_url+page)
                .then((res)=>{
                    console.log(res.data);
                    if(res.data.products){
                        this.products = res.data.products;
                    }else{
                        this.products = res.data;
                    }
                    $("html, body").animate({ scrollTop: 280 }, "slow");
                })
            },
            get_categories: function(){
                axios.get('/json/get-all-category')
                    .then(res=>{
                        this.categories = res.data;
                        setTimeout(() => {
                            $('.toggle_category').on('click',function(){
                                // console.log('hi');
                                $(this).siblings('ul').toggleClass('toggle_display')
                                // console.log($(this).parent('li').children('ul').toggleClass('toggle_display'));
                            });
                        }, 2000);
                    });
            },
            get_category_wise_product: function(page=1){
                axios.get('/json/latest-products-json?page='+page)
                .then((res)=>{
                    this.products = res.data;
                    $("html, body").animate({ scrollTop: 250 }, "slow");
                })
            },
            showModal: function(product_details){
                this.set_product_details(product_details);
                $('#productViewModal').modal('show');
            },
            init_jquery: function(){
                // pricing slider//
                let min_price=0;
                let max_price = 0;
                $.get('/json/get-min-max-price',function(res){
                    min_price = res.min_price;
                    max_price = res.max_price;
                    min_price = 120;
                    max_price = 50000;

                    $("#slider-range").slider({
                        range: true,
                        min: min_price,
                        max: max_price,
                        values: [2, (max_price/2)],
                        slide: function (event, ui) {
                            $("#amount").val("$" + ui.values[0] + " - $" + ui.values[1]);
                        }
                    });

                    $("#amount").val("$" + $("#slider-range").slider("values", 0) +
                        " - $" + $("#slider-range").slider("values", 1));
                })
            },
            load_product: function(url){
                window.history.pushState("", "", url);
                // this.fetch_category_product_list_paginate(1);
                // console.log(url);
                this.data_load_url = window.location.href+"/all-product-json?page=";

                axios.get(window.location.href+'/all-product-json?page='+1)
                    .then((res)=>{
                        this.products = res.data.products;
                        // this.commit('set_related_colors',res.data.sizes);
                        // this.commit('set_related_colors',res.data.colors);
                        console.log(res.data);
                    })
            },
        },

        computed: {
            ...mapGetters([
                'get_product_list',
                'get_test_variable'
            ]),
        }
       
    }
</script>

<style scoped>
    .product-wrapper {
                background: white;
                margin-bottom: 30px;
                box-shadow: 0px 0px 5px #1077d140;
                height: 92%;
                box-sizing: border-box;
            }
            .toggle_display{
                display: block!important;
            }
</style>
<template>
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-12">
            <div class="cart-table mb-50 bg-fff">
                <form action="#">
                    <div class="table-content table-responsive">
                        <table>
                            <thead>
                                <tr>
                                    <th class="product-remove">Chức năng</th>
                                    <th class="product-thumbnail">Ảnh</th>
                                    <th class="product-name">Sản phẩm</th>
                                    <th class="product-price">Giá tiền</th>
                                    <th class="product-quantity">Số lượng</th>
                                    <th class="product-subtotal">Tổng tiền</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="cart-item" v-for="(cart,index) in get_carts" :key="index">
                                    <td class="product-remove" style="width:165px;">
                                        <a href="#" @click.prevent="remove_product_form_carts(cart)" class="btn btn-danger btn-sm my-1" title="Remove this item">
                                            <i class="fa fa-trash"></i> Xóa
                                        </a>
                                        <a href="#" @click.prevent="showModal(cart)" class="btn btn-warning btn-sm my-1" title="Remove this item">
                                            <i class="fa fa-pencil"></i> Sửa
                                        </a>
                                    </td>
                                    <td class="product-thumbnail">
                                        <a :href="'/product-details/'+cart.product.id">
                                            <img :src="'/'+cart.product.thumb_image" alt="" />
                                        </a>
                                    </td>
                                    <td class="product-name">
                                        <a :href="'/product-details/'+cart.product.id">{{cart.product.name}}</a>
                                    </td>
                                    <td class="product-price">
                                        <span class="amounte">${{ cart.product.discount_price || cart.product.price }}</span>
                                    </td>
                                    <td class="product-quantity">
                                        <input :value="cart.qty" @change="change_product_qty($event,cart.product.id)" min="1" :max="product.stock" type="number">
                                    </td>
                                    <td class="product-subtotal">
                                        <span class="sub-total">${{ cart.product_price * cart.qty }}</span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </form>

                <div class="modal fade"  id="cartEditModal" style="z-index: 999;" tabindex="-1" aria-labelledby="cartEditModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-xl">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="cartEditModalLabel">Cart Details</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">X</button>
                            </div>
                            <div class="modal-body">
                                <product-details></product-details>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-12 col-12">
                        <div class="cart_totals">
                            <div class="cart-total-taitle mb-30 text-uppercase">
                                <h3>Tổng Giỏ Hàng</h3>
                            </div>
                        </div>
                        <div class="table-content table-responsive mb-30">
                            <table>
                                <tbody>
                                <!-- <tr>
                                    <td><strong>Subtotal</strong></td>
                                    <td><b>$ {{get_sub_total}}</b></td>
                                </tr> -->
                                <tr>
                                    <td><strong>Tổng Tiền</strong></td>
                                    <td><b>$ {{get_sub_total}}</b></td>
                                </tr>
                            </tbody></table>
                        </div>
                        <div class="simple-product-form contuct-form mb-30">
                                <a class="btn btn-success btn-sm" href="/checkout">Proceed to Checkout</a>
                        </div>
                    </div>
                </div>

</template>

<script>
import { mapGetters, mapActions, mapMutations } from 'vuex';
import productDetails from './productDetails.vue';
    export default {
        components:{productDetails},
        data: function(){
            return {
                product: [],
            }
        },
        created: function(){
            this.$watch('get_product_details',(newVal, oldVal)=>{
                this.product = this.get_product_details;
                this.product_show_image = this.product.thumb_image;
            })
        },
        methods: {
            ...mapMutations([
                'remove_from_carts',
                'change_cart_qty',
                'set_product_details',
                'set_selected_cart',
            ]),

            remove_product_form_carts: function(cart){
                this.remove_from_carts(cart);
            },

            showModal: function(cart_details){
                // console.log(cart_details);
                this.set_selected_cart(cart_details);
                this.set_product_details(cart_details.product);
                $('#cartEditModal').modal('show');
            },

            change_product_qty: function(event,product_id){
                let product_info = {
                    qty: event.target.value,
                    product_id: product_id,
                };

                this.change_cart_qty(product_info);
            }
        },
        computed: {
            ...mapGetters([
                'get_carts',
                'get_sub_total'
            ]),
        }
    }
</script>

<style scoped>

</style>
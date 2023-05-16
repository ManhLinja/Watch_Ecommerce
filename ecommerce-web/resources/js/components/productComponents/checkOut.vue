<template>
    <div>
        <div class="row">
                <div class="col-12">
                    <div class="checkout-title text-center mtb-20">
                        <h1>Thanh Toán</h1>
                    </div>
                </div>
            </div>
            <div class="checkout-area">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 co-12">
                        <div class="coupon-code-area p-20 mb-20">
                            <div class="returning-customer mb-10">
                            <i class="fa fa-book"></i>
                            <span>Bạn có phiếu giảm giá?</span>
                            <span class="code">Click vào đây để nhập code</span>
                        </div>
                        <div class="code-form account-form p-20 clear box-shadow bg-fff" style="display: none;">
                            <form action="#">
                                <span class="form-row-first">
                                    <input type="text" placeholder="Coupon Code">
                                </span>
                                <span class="form-row-last login-button">
                                    <button>Apply Coupon</button>
                                </span>
                            </form>
                        </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="customer-details-area">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-12 col-12">
                        <div class="customer-details mb-50">
                            <div class="customer-details-title mb-10">
                                <h2>Chi tiết thanh toán</h2>
                            </div>
                            <div class="customer-details-form account-form p-20 clear">
                                <form action="#">
                                    <span class="form-row-first">
                                        <b>Tên <span class="required">*</span></b>
                                        <input v-model="billing_address.name" type="text">
                                    </span>
                                    <span class="form-row-first">
                                        <b>Email <span class="required">*</span></b>
                                        <input v-model="billing_address.email" type="email">
                                    </span>
                                    <span>
                                        <b>Address <span class="required">*</span></b>
                                        <input v-model="billing_address.address" type="text" placeholder="Địa chỉ nhà">
                                    </span>
                                    <span>
                                        <input v-model="billing_address.address2" type="text" placeholder="Nơi làm việc">
                                    </span>
                                    <span>
                                        <b>Thành Phố<span class="required">*</span></b>
                                        <input v-model="billing_address.town" type="text" placeholder="Thành phố">
                                    </span>
                                    <!-- <span>
                                        <b>State <span class="required">*</span></b>
                                        <input v-model="billing_address.state" type="text" placeholder="">
                                    </span> -->
                                    <span>
                                        <b> Điện Thoại di động <span class="required">*</span></b>
                                        <input v-model="billing_address.phone" type="text" placeholder="">
                                    </span>
                                    <!-- <strong class="show-password"><input type="checkbox"> Create an account?</strong>
                                    <div class="account-password">
                                        <p>Create an account by entering the information below. If you are a returning customer please login at the top of the page</p>
                                        <span>
                                            <b>Account password <span class="required">*</span></b>
                                            <input type="password" placeholder="password">
                                        </span>
                                    </div> -->
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-12 col-12">
                        <div class="additional-information mb-50">
                            <div class="customer-details-title mb-10">
                                <h2>Thông tin thêm</h2>
                            </div>
                            <b>Ghi chú đặt hàng</b>
                            <textarea name="#" id="#" cols="30" rows="10" placeholder="Ghi chú thêm về đơn hàng của bạn"></textarea>
                        </div>
                        <!-- <a class="btn btn-success btn-sm" href="/checkout_success" @click="start_checkout">Đặt hàng</a> -->
                        <a class="btn btn-success btn-sm" :href="abc" @click="start_checkout">Đặt hàng</a>
                        <!-- <button class="btn btn-success" @click.prevent="checout_confirm">Checkout</button> -->
                    </div>
                </div>
            </div>
            <div class="checkout-order-area mb-35">
                <div class="order-title pb-10 mb-20 text-uppercase">
                    <h3>Đơn hàng của bạn</h3>
                </div>
                <div class="order_review table-responsive">
                    <table>
                        <tbody><tr>
                            <th class="product-name"></th>
                            <th class="product-name">Sản phẩm</th>
                            <th class="product-total">Tổng Tiền</th>
                        </tr>
                        </tbody><tbody>
                            <tr class="cart_item" v-for="(cart,index) in get_carts" :key="index">
                            <td class="product-thumbnail">
                                <a :href="'/product-details/'+cart.product.id">
                                    <img style="width: 60px;" :src="'/'+cart.product.thumb_image" alt="" />
                                </a>
                            </td>
                            <td class="product-name">

                                {{ cart.product.name }}
                                <strong class="product-quantity">x {{ cart.qty }}</strong>
                            </td>
                            <td class="product-total">
                                <span>$ {{ cart.product.discount_price * cart.qty || cart.product.price * cart.qty }}</span>
                            </td>
                        </tr>
                        </tbody>
                        <tfoot>
                            <!-- <tr class="cart-subtotal">
                                <th colspan="2" class="text-right">Subtotal</th>
                                <td>
                                    <strong><span>$ {{ get_sub_total }}</span></strong>
                                </td>
                            </tr> -->
                            <tr class="order-total">
                                <th colspan="2"  class="text-right">Tổng tiền</th>
                                <td>
                                    <strong><span>$ {{ get_sub_total }}</span></strong>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
    </div>

    <div class="dialog" v-show="def">
      <div class="dialog__msg-box">
        <div class="msg-content">
          <div class="m__icon-question"></div>
          <div class="msg__content" style="margin: 0 20px;">
             <ul>
                <li v-for="item in error" v-bind:key="item">
                    {{ item }} Không xác định
                </li>
             </ul>
          </div>
        </div>
        <div class="dialog__footer">
          <div class="">
            <button
              class="button button1"
              style="min-width: 50px !important; margin-left: 6px"
              @click="handleSuccess"
            >
              Cancel
            </button>
          </div>
        </div>
      </div>
    </div>
</template>

<script>
import { mapGetters, mapActions, mapMutations } from 'vuex';
export default {
    data: function(){
        return {
            billing_address: {
                name: '',
                email: '',
                address: '',
                address2: '',
                town: '',
                // state: '',
                phone: '',
                // order_notes:'',
            },
            abc: '',
            def: 0,
            error: [],
        }
    },
    methods: {
        ...mapMutations([
            'set_billing_address',
        ]),

        start_checkout: function(){
            this.error = []
            for (const item in this.billing_address){
                if(this.billing_address[item] === "" || this.billing_address[item].length === 0){
                    this.error.push(item)
                }
            }
            if(this.error.length === 0) {
                    alert("perfect!")
                    this.set_billing_address(this.billing_address);
                    this.abc = "/checkout_success"
            }else{
                this.abc = "#"
                this.def = 1;
            }
            
        },
        handleSuccess() {
            this.def = 0;
        }

        

        // checout_confirm: function(){
        //     this.set_billing_address(this.billing_address);

        //     // var stripe = Stripe("pk_test_51ImMYLL8CFL5l5NjFUVCtEZrritkVCduYkv3iXK0RnfxjpSHmo6pu9wMdA7CgBLsy2FEndolqr6n0iCUx6Cy1smn000d51tPbc");

        //     axios.post("/checkout_success")
        //     .then(function (response) {
        //         return response.data;
        //     })
        //     // .then(function (session) {
        //     //     // console.log('hi');
        //     //     return stripe.redirectToCheckout({ sessionId: session.id });
        //     // })
        //     // .then(function (result) {
        //     //     // If redirectToCheckout fails due to a browser or network
        //     //     // error, you should display the localized error message to your
        //     //     // customer using error.message.

        //     //     if (result.error) {
        //     //         alert(result.error.message);
        //     //     }
        //     // })
        //     // .catch(function (error) {
        //     //     console.error("Error:", error);
        //     // });
        // }
    },
    computed: {
        ...mapGetters([
            'get_carts',
            'get_billing_address',
            'get_sub_total'
        ]),
    }
}
</script>

<style scoped>
    .dialog {
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: rgba(0, 0, 0, 0.24);
    z-index: 1000;
}

/* dialog ban co muon xoa hay khong */

.dialog__msg-box {
    /* display: flex; */
    position: absolute;
    /* flex-direction: column; */
    /* column-gap: 5px; */
    justify-content: space-between;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    border-radius: 4px;
    box-sizing: border-box;
    background-color: #fff;
    width: 444px;
    min-width: 400px;
    height: auto;
    padding : 20px;
}

.dialog__msg-box .msg-content {
    display: flex;
    align-items: center;
    flex-direction: column;
    justify-content: space-around;
    padding-bottom: 20px;
    /* border-bottom: 1px solid #ccc; */
}

.dialog__msg-box .dialog__footer {
    display: flex;
    align-items: center;
    justify-content: space-between;
}
.msg-content li {
    color: red;
}

</style>
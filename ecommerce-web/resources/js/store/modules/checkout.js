import axios from 'axios';

// state list
const state = {
    billing_address: {
        name: '',
        email: '',
        address: '',
        address2: '',
        town: '',
        state: '',
        phone: '',
        order_notes:'',
    },
    invoice_date: '',
    invoice_id: '',
    check_success: false,
}

// get state
const getters = {
    get_billing_address: state => state.billing_address,
}

// actions
const actions = {

}

// mutators
const mutations = {
    set_billing_address: function(state, billing_address){
        state.billing_address = billing_address;
    },
}

export default {
    state,
    getters,
    actions,
    mutations
}

import Vue from 'vue'

import VueRouter from 'vue-router'

Vue.use(VueRouter)

const router = new VueRouter({
    mode: 'history',
    routes: [{
            path: '/home',
            redirect: '/dashboard'
        },
        {
            path: '/dashboard',
            name: 'dashboard.index',
            component: require('../views/dashboard/index.vue').default
        },
        {
            path: '/pelanggan',
            name: 'customer.index',
            component: require('../views/customer/index.vue').default
        },
        {
            path: '/invoices',
            name: 'invoices.index',
            component: require('../views/invoices/index.vue').default
        },
        {
            path: '/invoices/create',
            name: 'invoices.create',
            component: require('../views/invoices/form.vue').default
        },
        {
            path: '/invoices/:id/edit',
            name: 'invoices.edit',
            meta: {
                mode: 'edit'
            },
            component: require('../views/invoices/edit.vue').default
        },
    ]
})

export default router

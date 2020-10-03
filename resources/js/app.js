require('./bootstrap');

window.Vue = require('vue');

import Antd from 'ant-design-vue';
import 'ant-design-vue/dist/antd.css';
import { Form, HasError, AlertError } from 'vform';
import VueRouter from 'vue-router';
import routes from './router';
import axios from 'axios'
import moment from 'moment'
import Swal from 'sweetalert2'

window.form = Form
window.swal = Swal

const toast = Swal.mixin({
	toast: true,
	position: 'top-end',
	showConfirmButton: false,
	timer: 2000
})

window.toast = toast

Vue.use(VueRouter)
Vue.use(Antd)
Vue.filter('myDate', function(created){
	return moment(created).format('L');
})

Vue.filter('capitalize', function (value) {
  if (!value) return ''
  value = value.toString()
  return value.charAt(0).toUpperCase() + value.slice(1)
})
const router = new VueRouter({
    mode: 'history',
    routes,
    linkActiveClass: 'active',
    linkExactActiveClass: "exact-active",
});

Vue.component(HasError.name, HasError);
Vue.component(AlertError.name, AlertError);
Vue.component('side-bar', require('./components/SideBar').default);
Vue.component('message-notification', require('./components/MessageNotification').default);
Vue.component('notification', require('./components/Notification').default);
Vue.component('account', require('./components/Account').default);
Vue.component('student-sidebar', require('./views/Student/StudentSideBar.vue').default);
Vue.component('header', require('./components/Header.vue').default);

const app = new Vue({
    el: '#app',
    router
});

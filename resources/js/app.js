
//require('./bootstrap.js');
import Antd from 'ant-design-vue';
import 'ant-design-vue/dist/antd.css';
import { FormModel } from 'ant-design-vue';
import { Form, HasError, AlertError } from 'vform';
import VueRouter from 'vue-router';
import AdminRoutes from './router/admin.js';
import StudentRoutes from './router/student.js';
import RPRoutes from './router/research-personnel.js';
import moment from 'moment';
import Swal from 'sweetalert2';
import VuePageTransition from 'vue-page-transition';
import VueProgressBar from 'vue-progressbar';
import NProgress from 'vue-nprogress';
import NProgressContainer from 'vue-nprogress/src/NprogressContainer';

window.Vue = require('vue');
window.axios = require('axios');
window.form = Form
window.swal = Swal

const toast = Swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 2000
})

const options = {
    router: true, // Show progressbar when navigating routes, default: true
    http: false,
}

window.toast = toast

Vue.use(VueRouter)
Vue.use(Antd)
Vue.use(VuePageTransition)
Vue.use(VueProgressBar, options)
Vue.use(NProgress, options);
Vue.use(FormModel);
Vue.config.productionTip = true;

const nprogress = new NProgress();
nprogress.configure({ easing: 'ease', speed: 500 });

Vue.filter('myDate', function(created) {
    return moment(created).format('L');
})

Vue.filter('capitalize', function(value) {
    if (!value) return ''
    value = value.toString()
    return value.charAt(0).toUpperCase() + value.slice(1)
})
var allRoutes = [];
allRoutes = allRoutes.concat(AdminRoutes, StudentRoutes, RPRoutes);

const routes = allRoutes;
const router = new VueRouter({
    mode: 'history',
    routes,
});

router.beforeResolve((to, from, next) => {
    // If this isn't an initial page load.
    if (to.name) {
        // Start the route progress bar.
        nprogress.start()
    }
    next()
})

router.afterEach((to, from) => {
    // Complete the animation of the route progress bar.
    nprogress.done()
})

Vue.component(HasError.name, HasError);
Vue.component(AlertError.name, AlertError);
Vue.component('side-bar', require('./components/SideBar').default);
Vue.component('message-notification', require('./components/MessageNotification').default);
Vue.component('notification', require('./components/Notification').default);
Vue.component('account', require('./components/Account').default);
Vue.component('student-navbar', require('./views/Student/StudentNavbar.vue').default);
Vue.component('header', require('./components/Header.vue').default);
Vue.component('avatar', require('./components/Avatar.vue').default);
Vue.component('nprogress-container', NProgressContainer);
Vue.component('pending-account', require('./components/PendingAccount.vue').default);
Vue.component('route', require('./components/Route.vue').default);
Vue.component('new-account', require('./components/NewAccount.vue').default);
Vue.component('personnel-navbar', require('./views/ResearchPersonnel/Navbar.vue').default);
Vue.component('flash', require('./components/Flash.vue').default);

const app = new Vue({
    nprogress,
    el: '#app',
    router
});

export default router

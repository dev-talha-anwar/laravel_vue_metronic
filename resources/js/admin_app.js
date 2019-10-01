require('./bootstrap');
window.Vue = require('vue');
import VueRouter from 'vue-router';
import VueHead from 'vue-head';
import LoadScript from 'vue-plugin-load-script';
import VueProgressBar from 'vue-progressbar';
import loading from 'vue-loading-overlay';
import 'vue-loading-overlay/dist/vue-loading.css';

// import Vuex from 'vuex'
Vue.use(VueHead)
Vue.use(VueRouter);
Vue.use(LoadScript);
const loadingoptions = {
    loader:'bars',
    color: '#8e44ad',
    is-full-page:false
}
Vue.use(loading,loadingoptions);
const progressbaroptions = {
  color: '#00ff00',
  failedColor: '#ff0000',
  thickness: '5px',  
}
Vue.use(VueProgressBar, progressbaroptions)
// Vue.use(Vuex)
// const store = new Vuex.Store({
//   state: {
//     pagecsslinks: [],
//     pagecss:"",
//     pagejslinks: [],
//     pagejs:""
//   },
//   mutations: {
//     pagecsslinkschange (state,links) {
//       state.pagecsslinkschange = links;
//     },
//     pagecsschange(state,css){
//         state.pagecss = css;
//     },
//     pagejslinkschange(state,links){
//         state.pagejslinkschange = links;
//     },
//     pagejschange(state,js){
//         state.pagejs = js;
//     }
//   }
// })
// Vue.component('headercontent', require('./admin_components/includes/headercontent.vue').default);
import adminindex from './admin_components/index'
import adminedit from './admin_components/admin/edit'
import generaledit from './admin_components/general/edit'
const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/admin',
            name: 'index',
            component: adminindex
        },
        {
            path: '/edit/:id',
            name: 'edit',
            component: adminedit,
            props:true
        },
        {
        	path: '/general/edit',
        	name: 'edit/general',
        	component: generaledit,
            props:true
        }
    ],
});
const app = new Vue({
    el: '#adminapp',
    router,
    // store
});
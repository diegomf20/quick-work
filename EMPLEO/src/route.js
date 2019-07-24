import Vue from 'vue';
import VueRouter from 'vue-router'  
Vue.use(VueRouter)

var routes =[
    { 
        path: '/', 
        component: require('./view/index.vue').default
    },
    {
        path: '/oferta/:id',
        component: require('./view/oferta.vue').default
    },
    {
        path: '/publicacion/crear',
        component: require('./view/publicacion/crear.vue').default
    },
    {
        path: '/publicacion/:id',
        component: require('./view/publicacion/ver.vue').default
    },
    {
        path: '/registrar/empresa',
        component: require('./view/registrar/empresa.vue').default
    },
    {
        path: '/registrar/postulante',
        component: require('./view/registrar/postulante.vue').default
    },
    {
        path: '/perfil',
        component: require('./view/perfil/index.vue').default
    },
    {
        path: '/login',
        component: require('./view/login.vue').default
    }
];
var router=new VueRouter({
    mode: 'history',
    routes,
    linkActiveClass: 'active'
});
export default router;
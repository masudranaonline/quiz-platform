const routes = [
    {
        path: '/admin',
        name: 'admin',
        component: () => import(/* webpackChunkName: "admin" */ '@/layouts/admin/Layout.vue')
        
    }
];

export  default routes;

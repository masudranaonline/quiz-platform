const routes = [
    {
        path: '/admin',
        name: 'admin',
        component: () => import(/* webpackChunkName: "admin" */ '@/layouts/admin/Layout.vue')
        
    },
    {
        path: '/admin/users',
        name: 'admin.users',
        component: () => import(/* webpackChunkName: "admin.users" */ '@/views/admin/Users.vue')
    }
];

export  default routes;

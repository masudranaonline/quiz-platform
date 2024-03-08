
const routes = [
    {
        path: '/admin',
        name: 'admin',
        // component: () => import(/* webpackChunkName: "admin" */ '@/layouts/admin/Layout.vue')
        component: () => import(/* webpackChunkName: "admin" */ '@/views/admin/Home.vue')
        
    },
    {
        path: '/admin/users',
        name: 'admin.users',
        component: () => import(/* webpackChunkName: "admin.users" */ '@/views/admin/Users.vue')
    },
    {
        path: '/admin/category',
        name: 'admin.category',
        component: () => import(/* webpackChunkName: "admin.users" */ '@/views/admin/Category.vue')
    }
];

export  default routes;

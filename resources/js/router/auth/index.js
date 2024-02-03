const routes = [
    {
        path: '/login',
        name: 'login',
        component: () => import(/* webpackChunkName: "login" */ '@/views/auth/Login.vue')
    },
    {
        path: '/register',
        name: 'register',
        component: () => import(/* webpackChunkName: "register" */ '@/views/auth/Register.vue')
    },
    {
        path: '/forgot-password',
        name: 'forgot-password',
        component: () => import(/* webpackChunkName: "register" */ '@/views/auth/ForgotPassword.vue')
    },
    {
        path: '/reset-password',
        name: 'reset-password',
        component: () => import(/* webpackChunkName: "register" */ '@/views/auth/ResetPassword.vue')
    }
];

export  default routes;

const routes = [
    {
        path: '/',
        name: '',
        component: () => import(/* webpackChunkName: "login" */ '@/layouts/home/Layout.vue'),
        children: [
           {
            path: '',
            name: 'home.index',
            component: () => import(/* webpackChunkName: "login" */ '@/views/home/Index.vue'),
           },
        ]
        
    }
];

export  default routes;

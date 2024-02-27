import { createRouter, createWebHistory } from "vue-router";



import authRoutes from './auth';
import homeRoutes from './home';
import adminRoutes from './admin';


const routes = [
    ...authRoutes,
    ...homeRoutes,
    ...adminRoutes,
]



const router = createRouter({
  history: createWebHistory(),
  routes,
})
export default router;

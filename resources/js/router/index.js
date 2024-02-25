import { createRouter, createWebHistory } from "vue-router";



import authRoutes from './auth';
import homeRoutes from './home';


const routes = [
    ...authRoutes,
    ...homeRoutes,
]



const router = createRouter({
  history: createWebHistory(),
  routes,
})
export default router;

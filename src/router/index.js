import { createRouter, createWebHistory } from 'vue-router'
import Login from '../views/Login.vue'
import Dashboard from '../views/Dashboard.vue'

const routes = [
  {
    path: '/',
    redirect: '/login' // Otomatis arahkan ke login saat pertama buka
  },
  {
    path: '/login',
    name: 'Login',
    component: Login
  },
  {
    path: '/dashboard',
    name: 'Dashboard',
    component: Dashboard,
    meta: { requiresAuth: true } // Proteksi halaman admin [cite: 43]
  }
]

const router = createRouter({
  history: createWebHistory(),
  routes
})

// Mencegah user tembus langsung ke dashboard tanpa login [cite: 44]
router.beforeEach((to, from, next) => {
  const token = localStorage.getItem('authToken')
  if (to.matched.some(record => record.meta.requiresAuth) && !token) {
    next('/login')
  } else {
    next()
  }
})

export default router
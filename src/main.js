import { createApp } from 'vue'
import App from './App.vue'
import router from './router'// Pakai index.js yang spesifik jika otomatisasi folder error
import './assets/main.css' // Pastikan file css tailwind kamu di-import di sini

const app = createApp(App)
app.use(router)
app.mount('#app')
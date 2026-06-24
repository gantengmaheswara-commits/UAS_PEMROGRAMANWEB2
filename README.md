# 📚 E-Library Management System

Sebuah aplikasi web *Single Page Application* (SPA) berbasis **Vue.js** untuk mengelola perpustakaan digital. Proyek ini menampilkan antarmuka modern yang responsif menggunakan **Tailwind CSS** dan sistem navigasi yang mulus menggunakan **Vue Router**.

## 📸 Screenshots
<img width="959" height="478" alt="Screenshot 2026-06-23 151146" src="https://github.com/user-attachments/assets/09f7b3cd-d8cf-4367-98a1-e138e13a408f" />

<img width="771" height="402" alt="image" src="https://github.com/user-attachments/assets/0713dcc8-b347-4a82-86ef-af862838f76f" />




### Halaman Login
![Halaman Login]
<img width="960" height="504" alt="image" src="https://github.com/user-attachments/assets/48a08e7e-bcfb-4128-aeb6-dda975edaa00" />



### Halaman Dashboard Dinamis
![Halaman Dashboard]  
<img width="960" height="504" alt="image" src="https://github.com/user-attachments/assets/0d0da485-5e9f-4754-a004-bc30989eefdf" />
<img width="960" height="504" alt="image" src="https://github.com/user-attachments/assets/fac9d267-d220-46b8-9abd-abf5202dd162" />  
<img width="960" height="504" alt="image" src="https://github.com/user-attachments/assets/1b63977e-686b-4cc9-a1a9-62c5b78f63b9" />  
<img width="960" height="504" alt="image" src="https://github.com/user-attachments/assets/1b00288a-0ea0-4dfc-b7fe-cbf486069d38" />


## ✨ Fitur Utama

*   **Sistem Otentikasi Sederhana:** Menggunakan *Route Guarding* (`beforeEach`) dan `localStorage` untuk memastikan hanya pengguna yang sudah *login* yang dapat mengakses halaman *Dashboard*.
*   **Navigasi SPA Tanpa Reload:** Berpindah antar halaman (Login ke Dashboard) secara instan tanpa memuat ulang *browser*.
*   **Dashboard Dinamis:** Render konten berbasis *State* menggunakan `v-if` untuk menampilkan menu *My Books*, *Bookmarks*, dan *Settings* dalam satu halaman terpusat.
*   **Desain UI Modern:** Dibangun sepenuhnya dengan kelas utilitas Tailwind CSS untuk tampilan yang rapi, *clean*, dan menarik (tema *Deep Navy Blue*).

## 🛠️ Teknologi yang Digunakan

*   **Framework:** [Vue 3](https://vuejs.org/) (Composition API, `<script setup>`)
*   **Build Tool:** [Vite](https://vitejs.dev/)
*   **Routing:** [Vue Router 4](https://router.vuejs.org/)
*   **Styling:** [Tailwind CSS v4](https://tailwindcss.com/) (terintegrasi via `@tailwindcss/postcss`)

## 📂 Struktur Proyek Utama

```text
src/
├── components/     # Komponen UI yang dapat digunakan ulang
├── router/
│   └── index.js    # Konfigurasi Vue Router dan Route Guards
├── views/
│   ├── Login.vue     # Halaman otentikasi pengguna
│   └── Dashboard.vue # Halaman utama (Navigasi Dinamis)
├── App.vue         # Komponen Root (berisi <router-view>)
├── main.js         # Entry point aplikasi
└── style.css       # File CSS global (konfigurasi Tailwind)

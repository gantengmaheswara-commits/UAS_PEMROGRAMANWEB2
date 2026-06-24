<template>
  <div class="min-h-screen flex items-center justify-center bg-[#F8FAFC] font-sans p-4">
    <!-- Split Card Container -->
    <div class="max-w-5xl w-full bg-white rounded-[2rem] shadow-2xl overflow-hidden flex flex-col md:flex-row border border-[#E2E8F0]">
      
      <!-- Left Side: Visual Branding (Premium Feel) -->
      <div class="md:w-1/2 bg-[#1E3A8A] relative hidden md:flex flex-col justify-between p-12 text-white overflow-hidden">
        <!-- Background Overlay -->
        <div class="absolute inset-0 bg-cover bg-center opacity-20 mix-blend-overlay" style="background-image: url('https://images.unsplash.com/photo-1507842217343-583bb7270b66?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80');"></div>
        
        <div class="relative z-10">
          <div class="flex items-center gap-3 mb-16">
            <div class="w-10 h-10 bg-white rounded-xl flex items-center justify-center shadow-lg">
              <span class="text-[#1E3A8A] text-xl font-bold">E</span>
            </div>
            <span class="text-2xl font-bold tracking-wider">E-Library</span>
          </div>
          
          <h2 class="text-4xl font-bold leading-tight mb-4">
            Buka Jendela<br>Dunia dari Sini.
          </h2>
          <p class="text-[#93C5FD] text-lg max-w-sm">
            Akses ribuan koleksi buku digital, kapan saja dan di mana saja.
          </p>
        </div>

        <!-- Aesthetic Accent -->
        <div class="relative z-10">
          <div class="flex -space-x-4">
            <div class="w-12 h-12 rounded-full border-2 border-[#1E3A8A] bg-[#3B82F6] opacity-80 shadow-lg"></div>
            <div class="w-12 h-12 rounded-full border-2 border-[#1E3A8A] bg-[#60A5FA] opacity-60 shadow-lg"></div>
            <div class="w-12 h-12 rounded-full border-2 border-[#1E3A8A] bg-[#93C5FD] opacity-40 shadow-lg"></div>
          </div>
        </div>
      </div>

      <!-- Right Side: Login Form -->
      <div class="md:w-1/2 w-full p-10 md:p-16 flex flex-col justify-center bg-white">
        
        <div class="mb-10 text-center md:text-left">
          <h3 class="text-3xl font-bold text-[#0F172A] mb-2">Selamat Datang 👋</h3>
          <p class="text-[#64748B]">Silakan masuk menggunakan akun Anda.</p>
        </div>

        <form @submit.prevent="handleLogin" class="space-y-6">
          <!-- Username -->
          <div class="space-y-1.5">
            <label for="username" class="block text-sm font-semibold text-[#334155]">Username</label>
            <div class="relative">
              <span class="absolute inset-y-0 left-0 flex items-center pl-4 text-[#94A3B8]">
                <!-- SVG Icon for User -->
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
              </span>
              <input 
                type="text" 
                id="username" 
                class="w-full pl-11 pr-4 py-3.5 rounded-xl border border-[#E2E8F0] bg-[#F8FAFC] focus:bg-white focus:ring-2 focus:ring-[#1E3A8A] focus:border-[#1E3A8A] outline-none transition-all text-[#0F172A] font-medium placeholder-[#94A3B8]"
                placeholder="Masukkan username"
                required
              >
            </div>
          </div>

          <!-- Password -->
          <div class="space-y-1.5">
            <label for="password" class="block text-sm font-semibold text-[#334155]">Kata Sandi</label>
            <div class="relative">
              <span class="absolute inset-y-0 left-0 flex items-center pl-4 text-[#94A3B8]">
                <!-- SVG Icon for Lock -->
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path></svg>
              </span>
              <input 
                type="password" 
                id="password" 
                class="w-full pl-11 pr-4 py-3.5 rounded-xl border border-[#E2E8F0] bg-[#F8FAFC] focus:bg-white focus:ring-2 focus:ring-[#1E3A8A] focus:border-[#1E3A8A] outline-none transition-all text-[#0F172A] font-medium placeholder-[#94A3B8]"
                placeholder="••••••••"
                required
              >
            </div>
          </div>

          <!-- Options -->
          <div class="flex items-center justify-between text-sm pt-2">
            <label class="flex items-center text-[#64748B] cursor-pointer font-medium hover:text-[#0F172A] transition-colors">
              <input type="checkbox" class="mr-2.5 rounded border-[#CBD5E1] text-[#1E3A8A] focus:ring-[#1E3A8A] w-4 h-4 transition-all">
              Ingat saya
            </label>
            <a href="#" class="font-semibold text-[#1E3A8A] hover:text-[#172554] transition-colors">Lupa sandi?</a>
          </div>

          <!-- Submit Button -->
          <button 
            type="submit" 
            class="w-full mt-6 bg-[#1E3A8A] hover:bg-[#172554] text-white font-bold text-lg py-4 px-4 rounded-xl transition-all duration-300 shadow-lg shadow-blue-900/30 transform hover:-translate-y-0.5"
          >
            Masuk
          </button>
        </form>

      </div>
    </div>
  </div>
</template>

<script setup>
import { useRouter } from 'vue-router'

const router = useRouter()

const handleLogin = () => {
  console.log('Proses login berjalan...')
  
  // 1. Buat 'tiket masuk' (token) palsu sementara dan simpan di browser
  localStorage.setItem('authToken', 'token-dummy-sementara-123')
  
  // 2. Setelah tiketnya dipegang, baru pindah ke dashboard
  router.push('/dashboard') 
}
</script>
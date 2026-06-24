<template>
  <div class="min-h-screen bg-[#F0F4F8] font-sans flex text-[#0F172A]">
    
    <!-- Sidebar -->
    <aside class="w-64 bg-[#1E3A8A] text-white flex flex-col shadow-xl z-10 transition-all">
      <!-- Logo -->
      <div class="p-8 border-b border-[#1E40AF]">
        <h1 class="text-3xl font-bold tracking-wider">E-Library</h1>
        <p class="text-[#93C5FD] text-sm mt-1">Read & Grow</p>
      </div>

      <!-- Navigation -->
      <nav class="flex-1 py-6 space-y-2">
        <!-- Menu Dashboard -->
        <a 
          href="#" 
          @click.prevent="activeTab = 'dashboard'"
          :class="['flex items-center px-8 py-3 font-medium transition-colors border-l-4', activeTab === 'dashboard' ? 'bg-[#172554] text-white border-[#60A5FA]' : 'text-[#93C5FD] border-transparent hover:bg-[#1E40AF] hover:text-white']"
        >
          <span class="mr-3">📚</span> Dashboard
        </a>
        
        <!-- Menu My Books -->
        <a 
          href="#" 
          @click.prevent="activeTab = 'myBooks'"
          :class="['flex items-center px-8 py-3 font-medium transition-colors border-l-4', activeTab === 'myBooks' ? 'bg-[#172554] text-white border-[#60A5FA]' : 'text-[#93C5FD] border-transparent hover:bg-[#1E40AF] hover:text-white']"
        >
          <span class="mr-3">📖</span> My Books
        </a>
        
        <!-- Menu Bookmarks -->
        <a 
          href="#" 
          @click.prevent="activeTab = 'bookmarks'"
          :class="['flex items-center px-8 py-3 font-medium transition-colors border-l-4', activeTab === 'bookmarks' ? 'bg-[#172554] text-white border-[#60A5FA]' : 'text-[#93C5FD] border-transparent hover:bg-[#1E40AF] hover:text-white']"
        >
          <span class="mr-3">🔖</span> Bookmarks
        </a>
        
        <!-- Menu Settings -->
        <a 
          href="#" 
          @click.prevent="activeTab = 'settings'"
          :class="['flex items-center px-8 py-3 font-medium transition-colors border-l-4', activeTab === 'settings' ? 'bg-[#172554] text-white border-[#60A5FA]' : 'text-[#93C5FD] border-transparent hover:bg-[#1E40AF] hover:text-white']"
        >
          <span class="mr-3">⚙️</span> Settings
        </a>
      </nav>

      <!-- Logout Button -->
      <div class="p-8 border-t border-[#1E40AF]">
        <button @click="handleLogout" class="w-full bg-[#172554] hover:bg-[#0F172A] py-2 px-4 rounded-lg transition-colors shadow-md text-sm font-semibold">
          Sign Out
        </button>
      </div>
    </aside>

    <!-- Main Content -->
    <main class="flex-1 flex flex-col h-screen overflow-hidden">
      
      <!-- Header Dinamis -->
      <header class="bg-white shadow-sm px-10 py-6 flex justify-between items-center border-b border-[#E2E8F0]">
        <div>
          <h2 class="text-2xl font-bold text-[#1E3A8A]">{{ pageTitle }}</h2>
          <p class="text-[#64748B] text-sm mt-1">{{ pageSubtitle }}</p>
        </div>
        
        <!-- Search Bar -->
        <div class="relative w-72">
          <input 
            type="text" 
            placeholder="Search books, authors..." 
            class="w-full bg-[#F0F4F8] border border-[#E2E8F0] rounded-full px-4 py-2 pl-10 focus:outline-none focus:ring-2 focus:ring-[#1E3A8A] text-sm transition-all"
          >
          <span class="absolute left-3 top-2.5 text-[#64748B]">🔍</span>
        </div>
      </header>

      <!-- Content Area -->
      <div class="p-10 flex-1 overflow-y-auto">
        
        <!-- KONTEN: DASHBOARD -->
        <div v-if="activeTab === 'dashboard'">
          <div class="grid grid-cols-3 gap-6 mb-10">
            <div class="bg-white p-6 rounded-2xl shadow-sm border border-[#E2E8F0] border-l-4 border-l-[#1E3A8A]">
              <p class="text-[#64748B] text-sm font-medium">Total Books Read</p>
              <h3 class="text-3xl font-bold text-[#0F172A] mt-2">12</h3>
            </div>
            <div class="bg-white p-6 rounded-2xl shadow-sm border border-[#E2E8F0] border-l-4 border-l-[#3B82F6]">
              <p class="text-[#64748B] text-sm font-medium">Currently Reading</p>
              <h3 class="text-3xl font-bold text-[#0F172A] mt-2">3</h3>
            </div>
            <div class="bg-white p-6 rounded-2xl shadow-sm border border-[#E2E8F0] border-l-4 border-l-[#60A5FA]">
              <p class="text-[#64748B] text-sm font-medium">Overdue Books</p>
              <h3 class="text-3xl font-bold text-[#0F172A] mt-2">0</h3>
            </div>
          </div>
          <h3 class="text-xl font-bold text-[#1E3A8A] mb-6">Recommended for You</h3>
          <div class="grid grid-cols-4 gap-6">
            <div class="bg-white rounded-xl shadow-sm border border-[#E2E8F0] overflow-hidden hover:shadow-md transition-shadow group cursor-pointer">
              <div class="h-48 bg-[#DBEAFE] flex items-center justify-center group-hover:bg-[#BFDBFE] transition-colors"><span class="text-4xl">📘</span></div>
              <div class="p-5">
                <h4 class="font-bold text-[#0F172A] truncate">The Great Gatsby</h4>
                <p class="text-[#64748B] text-sm mt-1">F. Scott Fitzgerald</p>
                <button class="mt-4 w-full bg-[#F0F4F8] hover:bg-[#1E3A8A] hover:text-white text-[#1E3A8A] font-medium py-2 rounded-lg transition-colors border border-[#1E3A8A]">Read Now</button>
              </div>
            </div>
            <div class="bg-white rounded-xl shadow-sm border border-[#E2E8F0] overflow-hidden hover:shadow-md transition-shadow group cursor-pointer">
              <div class="h-48 bg-[#DBEAFE] flex items-center justify-center group-hover:bg-[#BFDBFE] transition-colors"><span class="text-4xl">📙</span></div>
              <div class="p-5">
                <h4 class="font-bold text-[#0F172A] truncate">Design Patterns</h4>
                <p class="text-[#64748B] text-sm mt-1">Gang of Four</p>
                <button class="mt-4 w-full bg-[#F0F4F8] hover:bg-[#1E3A8A] hover:text-white text-[#1E3A8A] font-medium py-2 rounded-lg transition-colors border border-[#1E3A8A]">Read Now</button>
              </div>
            </div>
          </div>
        </div>

        <!-- KONTEN: MY BOOKS -->
        <div v-else-if="activeTab === 'myBooks'">
          <div class="bg-white p-8 rounded-2xl shadow-sm border border-[#E2E8F0]">
            <div class="flex justify-between items-center mb-6">
              <h3 class="text-xl font-bold text-[#0F172A]">Koleksi Buku Saya</h3>
              <button class="bg-[#1E3A8A] text-white px-4 py-2 rounded-lg text-sm font-medium hover:bg-[#172554] transition">Pinjam Buku Baru</button>
            </div>
            <p class="text-[#64748B]">Belum ada buku tambahan yang sedang dipinjam saat ini. Jelajahi katalog untuk menemukan buku menarik!</p>
          </div>
        </div>

        <!-- KONTEN: BOOKMARKS -->
        <div v-else-if="activeTab === 'bookmarks'">
          <div class="bg-white p-8 rounded-2xl shadow-sm border border-[#E2E8F0]">
            <h3 class="text-xl font-bold text-[#0F172A] mb-4">Daftar Keinginan / Ditandai</h3>
            <ul class="space-y-3">
              <li class="flex items-center p-4 bg-[#F8FAFC] rounded-lg border border-[#E2E8F0]">
                <span class="text-2xl mr-4">📕</span>
                <div>
                  <h4 class="font-bold text-[#0F172A]">Clean Code</h4>
                  <p class="text-[#64748B] text-sm">Disimpan 2 hari yang lalu</p>
                </div>
              </li>
            </ul>
          </div>
        </div>

        <!-- KONTEN: SETTINGS -->
        <div v-else-if="activeTab === 'settings'">
          <div class="bg-white p-8 rounded-2xl shadow-sm border border-[#E2E8F0] max-w-2xl">
            <h3 class="text-xl font-bold text-[#0F172A] mb-6">Pengaturan Akun</h3>
            <div class="space-y-4">
              <div>
                <label class="block text-sm font-medium text-[#64748B] mb-1">Nama Lengkap</label>
                <input type="text" value="Student UPB" class="w-full px-4 py-2 rounded-lg border border-[#CBD5E1] bg-[#F8FAFC] outline-none text-[#0F172A]">
              </div>
              <div>
                <label class="block text-sm font-medium text-[#64748B] mb-1">Ubah Kata Sandi</label>
                <input type="password" placeholder="••••••••" class="w-full px-4 py-2 rounded-lg border border-[#CBD5E1] outline-none focus:border-[#1E3A8A]">
              </div>
              <button class="bg-[#3B82F6] hover:bg-[#2563EB] text-white font-medium py-2 px-6 rounded-lg transition-colors mt-4">Simpan Perubahan</button>
            </div>
          </div>
        </div>

      </div>
    </main>

  </div>
</template>

<script setup>
import { ref, computed } from 'vue'
import { useRouter } from 'vue-router'

const router = useRouter()

// State untuk menyimpan menu yang sedang aktif
const activeTab = ref('dashboard')

// Text header yang berubah otomatis mengikuti menu
const pageTitle = computed(() => {
  switch (activeTab.value) {
    case 'dashboard': return 'Welcome, Student! 👋'
    case 'myBooks': return 'My Books 📖'
    case 'bookmarks': return 'Bookmarks 🔖'
    case 'settings': return 'Settings ⚙️'
    default: return 'Dashboard'
  }
})

const pageSubtitle = computed(() => {
  switch (activeTab.value) {
    case 'dashboard': return 'Find your next favorite book today.'
    case 'myBooks': return 'Buku yang sedang Anda pinjam dan baca.'
    case 'bookmarks': return 'Koleksi buku yang Anda simpan untuk dibaca nanti.'
    case 'settings': return 'Atur preferensi akun dan profil Anda.'
    default: return ''
  }
})

// Fungsi Logout
const handleLogout = () => {
  // Hapus token dari browser
  localStorage.removeItem('authToken')
  // Lempar kembali ke halaman Login
  router.push('/login')
}
</script>
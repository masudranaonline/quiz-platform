<template>
  <nav class="fixed top-0 left-0 z-20 h-full pb-10 overflow-x-hidden overflow-y-auto transition origin-left transform bg-gray-900 w-60 md:translate-x-0 -translate-x-full" :class="{ '-translate-x-full' : !sideBar, 'translate-x-0' : sideBar }" @click.away="sideBar = false">
    <a href="https://kutty.netlify.app/" class="flex items-center px-4 py-5 text-white">
        <!-- <img src="https://kutty.netlify.app/brand/kutty-logo-white.png" alt="Kutty Logo" class="w-20"> -->
        Quiz App
    </a>
    <nav class="text-sm font-medium text-gray-500" aria-label="Main Navigation">
        <router-link class="flex items-center px-4 py-3 transition cursor-pointer group hover:bg-gray-800 hover:text-gray-200" to="/admin">
            <svg class="shrink-0 w-5 h-5 mr-2 text-gray-400 transition group-hover:text-gray-300" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentcolor">
                <path d="M10.707 2.293a1 1 0 00-1.414.0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path>
            </svg>
            <span>Home</span>
        </router-link>
        <router-link class="flex items-center px-4 py-3 transition cursor-pointer group hover:bg-gray-800 hover:text-gray-200" to="/admin/users">
            <svg class="shrink-0 w-5 h-5 mr-2 text-gray-400 transition group-hover:text-gray-300" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentcolor">
                <path d="M5 3a1 1 0 000 2c5.523.0 10 4.477 10 10a1 1 0 102 0C17 8.373 11.627 3 5 3z"></path>
                <path d="M4 9a1 1 0 011-1 7 7 0 017 7 1 1 0 11-2 0 5 5 0 00-5-5A1 1 0 014 9zM3 15a2 2 0 114 0 2 2 0 01-4 0z"></path>
            </svg>
            <span>Users</span>
        </router-link>
        <router-link class="flex items-center px-4 py-3 transition cursor-pointer group hover:bg-gray-800 hover:text-gray-200" to="/admin/category">
            <svg class="shrink-0 w-5 h-5 mr-2 text-gray-400 transition group-hover:text-gray-300" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentcolor">
                <path d="M5 3a1 1 0 000 2c5.523.0 10 4.477 10 10a1 1 0 102 0C17 8.373 11.627 3 5 3z"></path>
                <path d="M4 9a1 1 0 011-1 7 7 0 017 7 1 1 0 11-2 0 5 5 0 00-5-5A1 1 0 014 9zM3 15a2 2 0 114 0 2 2 0 01-4 0z"></path>
            </svg>
            <span>Category</span>
            
        </router-link>
        <router-link class="flex items-center px-4 py-3 transition cursor-pointer group hover:bg-gray-800 hover:text-gray-200" to="/admin/quizzes">
            <svg class="shrink-0 w-5 h-5 mr-2 text-gray-400 transition group-hover:text-gray-300" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentcolor">
                <path d="M5 3a1 1 0 000 2c5.523.0 10 4.477 10 10a1 1 0 102 0C17 8.373 11.627 3 5 3z"></path>
                <path d="M4 9a1 1 0 011-1 7 7 0 017 7 1 1 0 11-2 0 5 5 0 00-5-5A1 1 0 014 9zM3 15a2 2 0 114 0 2 2 0 01-4 0z"></path>
            </svg>
            <span>Quizzes</span>
        </router-link>
        <router-link class="flex items-center px-4 py-3 transition cursor-pointer group hover:bg-gray-800 hover:text-gray-200" to="/admin/quiz">
            <svg class="shrink-0 w-5 h-5 mr-2 text-gray-400 transition group-hover:text-gray-300" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentcolor">
                <path d="M5 3a1 1 0 000 2c5.523.0 10 4.477 10 10a1 1 0 102 0C17 8.373 11.627 3 5 3z"></path>
                <path d="M4 9a1 1 0 011-1 7 7 0 017 7 1 1 0 11-2 0 5 5 0 00-5-5A1 1 0 014 9zM3 15a2 2 0 114 0 2 2 0 01-4 0z"></path>
            </svg>
            <span>Questions</span>
        </router-link>
        <a class="flex items-center px-4 py-3 text-gray-200 transition bg-gray-800 cursor-pointer group hover:bg-gray-800 hover:text-gray-200" href="#">
            <svg class="shrink-0 w-5 h-5 mr-2 text-gray-300 transition group-hover:text-gray-300" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentcolor">
                <path d="M7 3a1 1 0 000 2h6a1 1 0 100-2H7zM4 7a1 1 0 011-1h10a1 1 0 110 2H5A1 1 0 014 7zM2 11a2 2 0 012-2h12a2 2 0 012 2v4a2 2 0 01-2 2H4a2 2 0 01-2-2v-4z"></path>
            </svg>
            <span>Collections</span>
        </a>
        <a class="flex items-center px-4 py-3 transition cursor-pointer group hover:bg-gray-800 hover:text-gray-200" href="#">
            <svg class="shrink-0 w-5 h-5 mr-2 text-gray-400 transition group-hover:text-gray-300" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentcolor">
                <path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"></path>
                <path fill-rule="evenodd" d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm9.707 5.707a1 1 0 00-1.414-1.414L9 12.586l-1.293-1.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414.0l4-4z" clip-rule="evenodd"></path>
            </svg>
            <span>Checklists</span>
        </a>
        <div x-data="collapse()">
            <div class="flex items-center justify-between px-4 py-3 transition cursor-pointer group hover:bg-gray-800 hover:text-gray-200" role="button" x-spread="trigger">
                <div class="flex items-center">
                    <svg class="shrink-0 w-5 h-5 mr-2 text-gray-400 transition group-hover:text-gray-300" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentcolor">
                        <path fill-rule="evenodd" d="M12.316 3.051a1 1 0 01.633 1.265l-4 12a1 1 0 11-1.898-.632l4-12a1 1 0 011.265-.633zM5.707 6.293a1 1 0 010 1.414L3.414 10l2.293 2.293a1 1 0 11-1.414 1.414l-3-3a1 1 0 010-1.414l3-3a1 1 0 011.414.0zm8.586.0a1 1 0 011.414.0l3 3a1 1 0 010 1.414l-3 3a1 1 0 11-1.414-1.414L16.586 10l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                    <span>Integrations</span>
                </div>
                <svg :class="{ 'rotate-90': open }" class="shrink-0 w-4 h-4 ml-2 transition transform" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentcolor">
                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414.0z" clip-rule="evenodd"></path>
                </svg>
            </div>
            <div class="mb-4" x-spread="collapse" data-alpine-was-cloaked="" style="display: none;">
                <a class="flex items-center py-2 pl-12 pr-4 transition cursor-pointer hover:bg-gray-800 hover:text-gray-200" href="#">Shopify</a>
                <a class="flex items-center py-2 pl-12 pr-4 transition cursor-pointer hover:bg-gray-800 hover:text-gray-200" href="#">Slack</a>
                <a class="flex items-center py-2 pl-12 pr-4 transition cursor-pointer hover:bg-gray-800 hover:text-gray-200" href="#">Zapier</a>
            </div>
        </div>
        <a class="flex items-center px-4 py-3 transition cursor-pointer group hover:bg-gray-800 hover:text-gray-200" href="#">
            <svg class="shrink-0 w-5 h-5 mr-2 text-gray-400 transition group-hover:text-gray-300" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentcolor">
                <path fill-rule="evenodd" d="M5 5a3 3 0 015-2.236A3 3 0 0114.83 6H16a2 2 0 110 4h-5V9A1 1 0 109 9v1H4a2 2 0 110-4h1.17C5.06 5.687 5 5.35 5 5zm4 1V5A1 1 0 108 6h1zm3 0a1 1 0 10-1-1v1h1z" clip-rule="evenodd"></path>
                <path d="M9 11H3v5a2 2 0 002 2h4v-7zm2 7h4a2 2 0 002-2v-5h-6v7z"></path>
            </svg>
            <span>Changelog</span>
        </a>
        <a class="flex items-center px-4 py-3 transition cursor-pointer group hover:bg-gray-800 hover:text-gray-200" href="#">
            <svg class="shrink-0 w-5 h-5 mr-2 text-gray-400 transition group-hover:text-gray-300" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentcolor">
                <path fill-rule="evenodd" d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98.0a1.532 1.532.0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6.0 2.978a1.532 1.532.0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532.0 012.287.947c.379 1.561 2.6 1.561 2.978.0a1.533 1.533.0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533.0 01.947-2.287c1.561-.379 1.561-2.6.0-2.978a1.532 1.532.0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532.0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd"></path>
            </svg>
            <span>Settings</span>
        </a>
    </nav>
</nav>

    <!-- Sidebar Backdrop -->
    <div class="fixed inset-0 z-10 w-screen h-screen bg-black bg-opacity-25 md:hidden" @click="sideBar = false"></div>
  </template>
  
  <script setup>
  import { ref } from 'vue';
  
  const sideBar = ref(false);
  </script>
  
  <style scoped>
  /* Your styles here */
  </style>
  
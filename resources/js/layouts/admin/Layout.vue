<!-- MainLayout.vue -->
<template>
    <section class="min-h-screen bg-gray-50">
      <TopBar />
      <SideBar />
      <div class="ml-0 transition md:ml-60">
        <!-- Main content -->
        <slot></slot>
      </div>
      <Footer />
      <!-- Sidebar Backdrop -->
      <div class="fixed inset-0 z-10 w-screen h-screen bg-black bg-opacity-25 md:hidden" @click="sideBar = false"></div>
    </section>
  </template>
  
  <script setup>
  import TopBar from './TopBar.vue';
  import SideBar from './Sidebar.vue';
  import Footer from './Footer.vue';
  import { ref } from 'vue';
  
  const sideBar = ref(false);
  </script>
  
  <style scoped>
  /* Main layout styles */
  </style>
  
<!-- TopBar.vue -->
<template>
        <header class="flex items-center justify-between w-full px-4 h-14">
            <button class="block btn btn-light-secondary md:hidden" @click.stop="sideBar = true">
                <span class="sr-only">Menu</span>
                <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentcolor">
                    <path fill-rule="evenodd"
                        d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4A1 1 0 013 5zm0 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                        clip-rule="evenodd"></path>
                </svg>
            </button>
            <div class="hidden -ml-3 form-icon md:block w-96">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentcolor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M21 21l-6-6m2-5A7 7 0 113 10a7 7 0 0114 0z"></path>
                </svg>
                <input class="bg-transparent border-0 form-input" placeholder="Search for articles...">
            </div>
            <div class="flex items-center">
                <a href="#" class="flex text-gray-500">
                    <svg class="shrink-0 w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                        fill="currentcolor">
                        <path
                            d="M10 2A6 6 0 004 8v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zm0 16a3 3 0 01-3-3h6a3 3 0 01-3 3z">
                        </path>
                    </svg>
                </a>
                <a href="#" class="ml-4 avatar avatar-sm">
                    <img src="https://kutty.netlify.app/placeholder.jpg" class="w-8 h-8" alt="Photo of Praveen Juge">
                </a>
            </div>
        </header>
        
    


</template>

<script setup>
    // No script setup needed for this component
</script>

<style scoped>
    /* Top bar styles */
</style>

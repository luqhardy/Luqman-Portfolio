<template>
  <div class="flex items-center justify-center min-h-screen bg-gray-900 text-white">
    <div class="flex flex-col md:flex-row items-center p-8 max-w-4xl w-full">
      <div class="md:w-1/2 p-4 text-center md:text-left">
        <p class="text-gray-400 text-lg mb-2">ルクマン ハディ</p>
        <h1 class="text-6xl font-bold leading-tight">{{ profileData.name }}</h1>
        <div class="mt-8">
          <a :href="profileData.linkedinUrl" target="_blank" rel="noopener noreferrer" class="inline-flex items-center text-gray-400 hover:text-white">
            <svg class="w-8 h-8 mr-2" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
              <path fill-rule="evenodd" d="M19 0H5a5 5 0 00-5 5v14a5 5 0 005 5h14a5 5 0 005-5V5a5 5 0 00-5-5zM8 19H5v-9h3v9zM6.5 8.25A1.75 1.75 0 118.25 6.5 1.75 1.75 0 016.5 8.25zM19 19h-3v-4.72c0-1.12-.41-1.87-1.44-1.87-.76 0-1.2.53-1.4.93v5.66h-3V10h2.97l.15 1.35c.44-.72 1.3-1.35 2.51-1.35 1.73 0 3.03 1.13 3.03 3.52V19z" clip-rule="evenodd"></path>
            </svg>
            <span class="text-2xl font-bold">in</span>
          </a>
        </div>
      </div>

      <div class="md:w-1/2 p-4 flex justify-center md:justify-end mt-8 md:mt-0">
        <img :src="profileData.imageUrl" alt="Profile Picture" class="rounded-lg shadow-lg max-w-full h-auto object-cover">
      </div>
    </div>
  </div>
</template>

<script setup>
import { defineProps } from 'vue';

const props = defineProps({
  profileData: Object,
});
</script>
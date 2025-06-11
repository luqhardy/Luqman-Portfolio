<template>
    <div class="min-h-screen bg-gray-900 text-white">
        <!-- ナビゲーション -->
        <nav class="fixed top-0 left-0 right-0 z-50 bg-gray-900/95 backdrop-blur-sm border-b border-gray-800">
            <div class="max-w-7xl mx-auto px-6 py-4">
                <div class="flex justify-between items-center">
                    <Link :href="route('home')" class="text-xl font-bold">
                        Luqman Hadi
                    </Link>
                    <div class="hidden md:flex space-x-8">
                        <Link :href="route('home')" 
                              :class="{ 'text-blue-400': $page.component === 'Portfolio/Home' }"
                              class="hover:text-blue-400 transition-colors">
                            Home
                        </Link>
                        <Link :href="route('about')" 
                              :class="{ 'text-blue-400': $page.component === 'Portfolio/About' }"
                              class="hover:text-blue-400 transition-colors">
                            About
                        </Link>
                        <Link :href="route('projects')" 
                              :class="{ 'text-blue-400': $page.component === 'Portfolio/Projects' }"
                              class="hover:text-blue-400 transition-colors">
                            Projects
                        </Link>
                        <Link :href="route('contact')" 
                              :class="{ 'text-blue-400': $page.component === 'Portfolio/Contact' }"
                              class="hover:text-blue-400 transition-colors">
                            Contact
                        </Link>
                    </div>
                </div>
            </div>
        </nav>

        <!-- メインコンテンツ -->
        <main class="pt-20">
            <slot />
        </main>
    </div>
</template>

<script setup>
import { Link } from '@inertiajs/vue3'
</script>
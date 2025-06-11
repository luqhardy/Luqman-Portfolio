<template>
    <PortfolioLayout>
        <div class="relative min-h-screen flex items-center">
            <!-- 背景画像 -->
            <div class="absolute inset-0 bg-gradient-to-br from-gray-900 via-gray-800 to-gray-900">
                <div class="absolute inset-0 bg-black/20"></div>
            </div>
            
            <!-- メインコンテンツ -->
            <div class="relative z-10 max-w-7xl mx-auto px-6 py-20">
                <div class="grid lg:grid-cols-2 gap-12 items-center">
                    <!-- 左側：テキストコンテンツ -->
                    <div class="space-y-8">
                        <div class="space-y-4">
                            <h1 class="text-6xl lg:text-8xl font-bold tracking-tight">
                                Luqman
                                <br>
                                <span class="text-blue-400">Hadi</span>
                            </h1>
                            <p class="text-xl text-gray-300 max-w-lg">
                                Full Stack Developer passionate about creating 
                                beautiful and functional web applications
                            </p>
                        </div>
                        
                        <!-- ソーシャルリンク -->
                        <div class="flex space-x-6">
                            <a href="https://github.com" 
                               class="text-gray-400 hover:text-white transition-colors">
                                <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                                </svg>
                            </a>
                            <a href="https://linkedin.com" 
                               class="text-gray-400 hover:text-white transition-colors">
                                <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                                </svg>
                            </a>
                        </div>
                        
                        <!-- CTA ボタン -->
                        <div class="flex flex-col sm:flex-row gap-4">
                            <Link :href="route('projects')" 
                                  class="bg-blue-600 hover:bg-blue-700 text-white px-8 py-4 rounded-lg font-medium transition-colors text-center">
                                View My Work
                            </Link>
                            <Link :href="route('contact')" 
                                  class="border border-gray-600 hover:border-gray-400 text-white px-8 py-4 rounded-lg font-medium transition-colors text-center">
                                Get In Touch
                            </Link>
                        </div>
                    </div>
                    
                    <!-- 右側：プロフィール画像 -->
                    <div class="flex justify-center lg:justify-end">
                        <div class="relative">
                            <div class="w-80 h-80 lg:w-96 lg:h-96 rounded-full overflow-hidden border-4 border-blue-400/30">
                                <img src="/images/profile.jpg" 
                                     alt="Luqman Hadi" 
                                     class="w-full h-full object-cover">
                            </div>
                            <!-- 装飾的な要素 -->
                            <div class="absolute -top-4 -right-4 w-24 h-24 bg-blue-400/20 rounded-full blur-xl"></div>
                            <div class="absolute -bottom-4 -left-4 w-32 h-32 bg-purple-400/20 rounded-full blur-xl"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </PortfolioLayout>
</template>

<script setup>
import PortfolioLayout from '@/Layouts/PortfolioLayout.vue'
import { Link } from '@inertiajs/vue3'
</script>
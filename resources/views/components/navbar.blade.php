@php
    $path = [
        'features' => 'Features',
        'how-it-works' => 'How It Works',
        'pricing' => 'Pricing',
        'faq' => 'FAQ',
    ];
@endphp

<nav class="px-4 sm:px-8 lg:px-16 py-4 bg-white/80 backdrop-blur-md dark:bg-gray-900/80 dark:backdrop-blur-md border-b border-gray-200/80 dark:border-gray-700/80 sticky top-0 z-50 transition-all duration-300">
    <div class="max-w-7xl mx-auto flex items-center justify-between">
        <!-- Logo -->
        <div class="flex items-center gap-2 group">
            <a href="{{ route('welcome') }}" class="flex items-center gap-2.5 transition-all duration-300 hover:opacity-80">
                <div class="relative">
                    <div class="absolute inset-0 bg-blue-500/20 rounded-full blur-xl group-hover:blur-2xl transition-all duration-500"></div>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" 
                        stroke="currentColor" class="w-7 h-7 text-blue-600 dark:text-blue-400 relative z-10">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg>
                </div>
                <span class="font-bold text-2xl bg-gradient-to-r from-blue-600 to-blue-800 dark:from-blue-400 dark:to-blue-300 bg-clip-text text-transparent tracking-tight">
                    DailyAssist
                </span>
            </a>
        </div>

        <!-- Navigation Links - Desktop -->
        <ul class="hidden md:flex items-center gap-1">
            @foreach ($path as $key => $value)
                <li>
                    <a href="{{ route($key) }}"
                        class="relative px-4 py-2.5 text-sm font-medium text-gray-700 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 transition-all duration-300 rounded-lg group">
                        <span class="relative z-10">{{ $value }}</span>
                        <span class="absolute inset-0 bg-blue-50 dark:bg-blue-900/20 rounded-lg scale-0 group-hover:scale-100 transition-transform duration-300 origin-center"></span>
                        <span class="absolute bottom-0 left-1/2 w-0 h-0.5 bg-blue-600 dark:bg-blue-400 group-hover:w-1/2 group-hover:left-1/4 transition-all duration-300"></span>
                        <span class="absolute bottom-0 right-1/2 w-0 h-0.5 bg-blue-600 dark:bg-blue-400 group-hover:w-1/2 group-hover:right-1/4 transition-all duration-300"></span>
                    </a>
                </li>
            @endforeach
        </ul>

        <!-- Actions -->
        <div class="flex items-center gap-3">
            <!-- Login Button - Hidden on mobile, visible on tablet/desktop -->
            <button class="hidden sm:inline-flex items-center gap-2 px-5 py-2.5 text-sm font-medium text-gray-700 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 transition-all duration-300 rounded-full hover:bg-gray-100 dark:hover:bg-gray-800">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15m3 0l3-3m0 0l-3-3m3 3H9" />
                </svg>
                Login
            </button>
            
            <!-- Get Started Button - Hidden on mobile, visible on tablet/desktop -->
            <button class="hidden sm:inline-flex relative overflow-hidden group px-6 py-2.5 bg-gradient-to-r from-blue-600 to-blue-700 dark:from-blue-500 dark:to-blue-600 text-white text-sm font-medium rounded-full shadow-lg shadow-blue-600/25 hover:shadow-blue-600/40 hover:scale-105 active:scale-95 transition-all duration-300">
                <span class="relative z-10 flex items-center gap-2">
                    Get Started
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4 h-4 group-hover:translate-x-1 transition-transform duration-300">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                    </svg>
                </span>
                <span class="absolute inset-0 bg-gradient-to-r from-blue-500 to-blue-600 dark:from-blue-400 dark:to-blue-500 translate-y-full group-hover:translate-y-0 transition-transform duration-300"></span>
            </button>
            
            <!-- Mobile Menu Button -->
            <button class="md:hidden p-2 text-gray-700 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 transition-colors rounded-lg hover:bg-gray-100 dark:hover:bg-gray-800">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
            </button>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div class="md:hidden hidden mt-4 pt-4 border-t border-gray-200/80 dark:border-gray-700/80" id="mobileMenu">
        <ul class="flex flex-col space-y-1">
            @foreach ($path as $key => $value)
                <li>
                    <a href="{{ route($key) }}"
                        class="block px-4 py-3 text-sm font-medium text-gray-700 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 hover:bg-blue-50 dark:hover:bg-blue-900/20 rounded-lg transition-all duration-300">
                        {{ $value }}
                    </a>
                </li>
            @endforeach
            <li class="pt-2">
                <button class="w-full px-4 py-3 text-sm font-medium text-gray-700 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 hover:bg-gray-100 dark:hover:bg-gray-800 rounded-lg transition-all duration-300">
                    Login
                </button>
            </li>
            <!-- Get Started Button in Mobile Menu -->
            <li>
                <button class="relative overflow-hidden group w-full px-4 py-3 bg-gradient-to-r from-blue-600 to-blue-700 dark:from-blue-500 dark:to-blue-600 text-white text-sm font-medium rounded-lg shadow-lg shadow-blue-600/25 hover:shadow-blue-600/40 transition-all duration-300">
                    <span class="relative z-10 flex items-center justify-center gap-2">
                        Get Started
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4 h-4 group-hover:translate-x-1 transition-transform duration-300">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                        </svg>
                    </span>
                    <span class="absolute inset-0 bg-gradient-to-r from-blue-500 to-blue-600 dark:from-blue-400 dark:to-blue-500 translate-y-full group-hover:translate-y-0 transition-transform duration-300"></span>
                </button>
            </li>
        </ul>
    </div>
</nav>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const mobileMenuButton = document.querySelector('.md\\:hidden.p-2');
    const mobileMenu = document.getElementById('mobileMenu');
    
    if (mobileMenuButton && mobileMenu) {
        mobileMenuButton.addEventListener('click', function() {
            mobileMenu.classList.toggle('hidden');
            
            // Animate hamburger to X
            const icon = this.querySelector('svg');
            if (!mobileMenu.classList.contains('hidden')) {
                icon.innerHTML = `
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                `;
            } else {
                icon.innerHTML = `
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                `;
            }
        });
    }
    
    // Add scroll effect
    const nav = document.querySelector('nav');
    let lastScroll = 0;
    
    window.addEventListener('scroll', function() {
        const currentScroll = window.pageYOffset;
        
        if (currentScroll > 50) {
            nav.classList.add('shadow-lg', 'border-b-transparent');
            nav.classList.remove('border-b-gray-200/80', 'dark:border-b-gray-700/80');
        } else {
            nav.classList.remove('shadow-lg', 'border-b-transparent');
            nav.classList.add('border-b-gray-200/80', 'dark:border-b-gray-700/80');
        }
        
        lastScroll = currentScroll;
    });
});
</script>
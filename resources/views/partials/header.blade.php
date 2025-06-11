<header x-data="{ isMenuOpen: false, scrolled: false }" 
        x-init="window.addEventListener('scroll', () => scrolled = window.scrollY > 50)"
        :class="{ 'bg-white/90 dark:bg-gray-900/90 backdrop-blur-md shadow-lg': scrolled, 'bg-transparent': !scrolled }"
        class="fixed top-0 left-0 right-0 z-50 transition-all duration-300">
    <div class="container mx-auto px-6">
        <div class="flex items-center justify-between h-16">
            <div class="text-2xl font-bold text-gray-900 dark:text-white">
                {{ config('portfolio.domain') }}
            </div>

            <!-- Desktop Navigation -->
            <nav class="hidden md:flex items-center space-x-8">
                <button onclick="scrollToSection('#home')" class="text-gray-600 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 transition-colors duration-300">Home</button>
                <button onclick="scrollToSection('#about')" class="text-gray-600 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 transition-colors duration-300">About</button>
                <button onclick="scrollToSection('#skills')" class="text-gray-600 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 transition-colors duration-300">Skills</button>
                <button onclick="scrollToSection('#experience')" class="text-gray-600 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 transition-colors duration-300">Experience</button>
                <button onclick="scrollToSection('#projects')" class="text-gray-600 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 transition-colors duration-300">Projects</button>
                <button onclick="scrollToSection('#services')" class="text-gray-600 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 transition-colors duration-300">Services</button>
                <button onclick="scrollToSection('#contact')" class="text-gray-600 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 transition-colors duration-300">Contact</button>
                <button @click="darkMode = !darkMode" class="p-2 rounded-lg bg-gray-100 dark:bg-gray-800 text-gray-600 dark:text-gray-300 hover:bg-gray-200 dark:hover:bg-gray-700 transition-colors duration-300">
                    <i x-show="!darkMode" data-lucide="moon" class="w-5 h-5"></i>
                    <i x-show="darkMode" data-lucide="sun" class="w-5 h-5"></i>
                </button>
            </nav>

            <!-- Mobile Menu Button -->
            <div class="md:hidden flex items-center space-x-2">
                <button @click="darkMode = !darkMode" class="p-2 rounded-lg bg-gray-100 dark:bg-gray-800 text-gray-600 dark:text-gray-300">
                    <i x-show="!darkMode" data-lucide="moon" class="w-5 h-5"></i>
                    <i x-show="darkMode" data-lucide="sun" class="w-5 h-5"></i>
                </button>
                <button @click="isMenuOpen = !isMenuOpen" class="p-2 rounded-lg bg-gray-100 dark:bg-gray-800 text-gray-600 dark:text-gray-300">
                    <i x-show="!isMenuOpen" data-lucide="menu" class="w-6 h-6"></i>
                    <i x-show="isMenuOpen" data-lucide="x" class="w-6 h-6"></i>
                </button>
            </div>
        </div>

        <!-- Mobile Navigation -->
        <nav x-show="isMenuOpen" x-transition class="md:hidden bg-white dark:bg-gray-900 border-t dark:border-gray-800 py-4">
            <button onclick="scrollToSection('#home')" class="block w-full text-left px-4 py-2 text-gray-600 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 hover:bg-gray-50 dark:hover:bg-gray-800 transition-colors duration-300">Home</button>
            <button onclick="scrollToSection('#about')" class="block w-full text-left px-4 py-2 text-gray-600 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 hover:bg-gray-50 dark:hover:bg-gray-800 transition-colors duration-300">About</button>
            <button onclick="scrollToSection('#skills')" class="block w-full text-left px-4 py-2 text-gray-600 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 hover:bg-gray-50 dark:hover:bg-gray-800 transition-colors duration-300">Skills</button>
            <button onclick="scrollToSection('#experience')" class="block w-full text-left px-4 py-2 text-gray-600 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 hover:bg-gray-50 dark:hover:bg-gray-800 transition-colors duration-300">Experience</button>
            <button onclick="scrollToSection('#projects')" class="block w-full text-left px-4 py-2 text-gray-600 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 hover:bg-gray-50 dark:hover:bg-gray-800 transition-colors duration-300">Projects</button>
            <button onclick="scrollToSection('#services')" class="block w-full text-left px-4 py-2 text-gray-600 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 hover:bg-gray-50 dark:hover:bg-gray-800 transition-colors duration-300">Services</button>
            <button onclick="scrollToSection('#contact')" class="block w-full text-left px-4 py-2 text-gray-600 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 hover:bg-gray-50 dark:hover:bg-gray-800 transition-colors duration-300">Contact</button>
        </nav>
    </div>
</header>
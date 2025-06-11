<section id="home" class="min-h-screen flex items-center justify-center relative overflow-hidden">
    <!-- Background Gradient -->
    <div class="absolute inset-0 bg-gradient-to-br from-blue-50 via-white to-indigo-50 dark:from-gray-900 dark:via-gray-800 dark:to-indigo-900"></div>
    
    <!-- Animated Background Elements -->
    <div class="absolute inset-0 overflow-hidden">
        <div class="absolute -top-40 -right-40 w-80 h-80 bg-blue-500/10 dark:bg-blue-400/10 rounded-full blur-3xl animate-pulse"></div>
        <div class="absolute -bottom-40 -left-40 w-80 h-80 bg-indigo-500/10 dark:bg-indigo-400/10 rounded-full blur-3xl animate-pulse delay-2000"></div>
    </div>

    <div class="container mx-auto px-6 relative z-10">
        <div class="text-center max-w-4xl mx-auto">
            <!-- Profile Image -->
            <div class="mb-8 animate-fadeInUp">
                <div class="w-40 h-40 mx-auto rounded-full bg-gradient-to-r from-blue-500 to-indigo-600 p-1 shadow-2xl">
                    <div class="w-full h-full rounded-full bg-gray-200 dark:bg-gray-700 flex items-center justify-center text-4xl font-bold text-gray-700 dark:text-gray-300">
                        {{ substr($profile['name'], 0, 1) }}{{ substr(explode(' ', $profile['name'])[1] ?? '', 0, 1) }}
                    </div>
                </div>
            </div>

            <!-- Main Heading -->
            <h1 class="text-5xl md:text-7xl font-bold text-gray-900 dark:text-white mb-6 animate-fadeInUp delay-300">
                {{ $profile['name'] }}
            </h1>

            <!-- Subtitle -->
            <div class="text-xl md:text-2xl text-gray-600 dark:text-gray-300 mb-4 animate-fadeInUp delay-500">
                <span class="text-blue-600 dark:text-blue-400 font-semibold">DevOps Engineer</span> & 
                <span class="text-indigo-600 dark:text-indigo-400 font-semibold">Cloud Architect</span>
            </div>

            <!-- Description -->
            <p class="text-lg md:text-xl text-gray-600 dark:text-gray-400 mb-12 max-w-3xl mx-auto leading-relaxed animate-fadeInUp delay-700">
                {{ $profile['bio'] }}
            </p>

            <!-- CTA Buttons -->
            <div class="flex flex-col sm:flex-row gap-4 justify-center items-center mb-16 animate-fadeInUp delay-1000">
                <button onclick="scrollToSection('#contact')" class="flex items-center gap-2 bg-blue-600 hover:bg-blue-700 text-white px-8 py-4 rounded-lg font-semibold transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl">
                    <i data-lucide="mail" class="w-5 h-5"></i>
                    Get In Touch
                </button>
                <a href="{{ route('portfolio.download-cv') }}" class="flex items-center gap-2 border-2 border-gray-300 dark:border-gray-600 text-gray-700 dark:text-gray-300 hover:border-blue-600 dark:hover:border-blue-400 hover:text-blue-600 dark:hover:text-blue-400 px-8 py-4 rounded-lg font-semibold transition-all duration-300 transform hover:scale-105">
                    <i data-lucide="download" class="w-5 h-5"></i>
                    Download CV
                </a>
            </div>

            <!-- Scroll Indicator -->
            <button onclick="scrollToSection('#about')" class="animate-bounce hover:text-blue-600 dark:hover:text-blue-400 transition-colors duration-300">
                <i data-lucide="chevron-down" class="w-8 h-8 text-gray-400 dark:text-gray-500"></i>
            </button>
        </div>
    </div>
</section>
<footer class="bg-gray-900 text-white">
    <!-- Main Footer Content -->
    <div class="container mx-auto px-6 py-16">
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-12">
            <!-- Brand Section -->
            <div class="lg:col-span-2">
                <div class="text-2xl font-bold mb-4">{{ config('portfolio.domain') }}</div>
                <p class="text-gray-400 mb-6 max-w-md leading-relaxed">
                    Passionate DevOps Engineer specializing in cloud infrastructure, automation, and building scalable solutions that drive business success.
                </p>
                <div class="flex items-center gap-2 text-gray-400">
                    <span>Made with</span>
                    <i data-lucide="heart" class="w-4 h-4 text-red-500 fill-current"></i>
                    <span>and lots of coffee in {{ $profile['location'] }}</span>
                </div>
            </div>

            <!-- Quick Links -->
            <div>
                <h3 class="text-lg font-semibold mb-6">Quick Links</h3>
                <ul class="space-y-3">
                    <li><button onclick="scrollToSection('#home')" class="text-gray-400 hover:text-white transition-colors duration-300">Home</button></li>
                    <li><button onclick="scrollToSection('#about')" class="text-gray-400 hover:text-white transition-colors duration-300">About</button></li>
                    <li><button onclick="scrollToSection('#skills')" class="text-gray-400 hover:text-white transition-colors duration-300">Skills</button></li>
                    <li><button onclick="scrollToSection('#experience')" class="text-gray-400 hover:text-white transition-colors duration-300">Experience</button></li>
                    <li><button onclick="scrollToSection('#projects')" class="text-gray-400 hover:text-white transition-colors duration-300">Projects</button></li>
                    <li><button onclick="scrollToSection('#services')" class="text-gray-400 hover:text-white transition-colors duration-300">Services</button></li>
                    <li><button onclick="scrollToSection('#contact')" class="text-gray-400 hover:text-white transition-colors duration-300">Contact</button></li>
                </ul>
            </div>

            <!-- Services -->
            <div>
                <h3 class="text-lg font-semibold mb-6">Services</h3>
                <ul class="space-y-3">
                    <li><span class="text-gray-400 hover:text-white transition-colors duration-300 cursor-default">Cloud Migration</span></li>
                    <li><span class="text-gray-400 hover:text-white transition-colors duration-300 cursor-default">CI/CD Pipelines</span></li>
                    <li><span class="text-gray-400 hover:text-white transition-colors duration-300 cursor-default">DevSecOps</span></li>
                    <li><span class="text-gray-400 hover:text-white transition-colors duration-300 cursor-default">Infrastructure as Code</span></li>
                    <li><span class="text-gray-400 hover:text-white transition-colors duration-300 cursor-default">Monitoring Solutions</span></li>
                    <li><span class="text-gray-400 hover:text-white transition-colors duration-300 cursor-default">DevOps Consulting</span></li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Bottom Bar -->
    <div class="border-t border-gray-800">
        <div class="container mx-auto px-6 py-6">
            <div class="flex flex-col md:flex-row justify-between items-center gap-4">
                <div class="text-gray-400 text-sm">
                    © {{ date('Y') }} {{ config('portfolio.name') }}. All rights reserved.
                </div>
                
                <div class="flex items-center gap-6">
                    <span class="text-gray-400 text-sm">Available for new projects</span>
                    <button onclick="window.scrollTo({ top: 0, behavior: 'smooth' })" class="p-2 bg-blue-600 hover:bg-blue-700 rounded-lg transition-all duration-300 transform hover:scale-110" title="Back to top">
                        <i data-lucide="arrow-up" class="w-5 h-5"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</footer>
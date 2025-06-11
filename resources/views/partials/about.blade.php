<section id="about" class="py-20 bg-white dark:bg-gray-900">
    <div class="container mx-auto px-6">
        <div class="max-w-6xl mx-auto">
            <!-- Section Header -->
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 dark:text-white mb-4">About Me</h2>
                <div class="w-24 h-1 bg-gradient-to-r from-blue-600 to-indigo-600 mx-auto mb-6"></div>
                <p class="text-xl text-gray-600 dark:text-gray-400 max-w-3xl mx-auto">
                    A results-driven DevOps engineer with over 5 years of experience in designing, 
                    implementing, and maintaining scalable cloud infrastructure and automation solutions.
                </p>
            </div>

            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <!-- Personal Story -->
                <div class="space-y-6">
                    <h3 class="text-2xl font-bold text-gray-900 dark:text-white">My Journey in DevOps</h3>
                    <div class="space-y-4 text-gray-600 dark:text-gray-400 leading-relaxed">
                        <p>My passion for DevOps began during my software engineering studies, where I discovered the power of automation and continuous integration. What started as curiosity about deployment processes evolved into a deep expertise in cloud infrastructure and CI/CD pipelines.</p>
                        <p>Over the years, I've helped organizations reduce deployment times by up to 80%, implement zero-downtime deployments, and build resilient, auto-scaling infrastructure that handles millions of requests daily.</p>
                        <p>I believe in the philosophy of "automate everything" and have successfully led digital transformation initiatives that have improved developer productivity and system reliability across multiple industries.</p>
                    </div>

                    <!-- Stats -->
                    <div class="grid grid-cols-3 gap-6 pt-6">
                        <div class="text-center">
                            <div class="text-3xl font-bold text-blue-600 dark:text-blue-400">{{ $profile['stats']['projects'] }}</div>
                            <div class="text-sm text-gray-600 dark:text-gray-400">Projects</div>
                        </div>
                        <div class="text-center">
                            <div class="text-3xl font-bold text-indigo-600 dark:text-indigo-400">{{ $profile['stats']['experience'] }}</div>
                            <div class="text-sm text-gray-600 dark:text-gray-400">Years Experience</div>
                        </div>
                        <div class="text-center">
                            <div class="text-3xl font-bold text-green-600 dark:text-green-400">{{ $profile['stats']['uptime'] }}</div>
                            <div class="text-sm text-gray-600 dark:text-gray-400">Uptime</div>
                        </div>
                    </div>
                </div>

                <!-- Highlights -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="p-6 bg-gray-50 dark:bg-gray-800 rounded-xl hover:shadow-lg transition-all duration-300 transform hover:-translate-y-1">
                        <div class="text-blue-600 dark:text-blue-400 mb-4">
                            <i data-lucide="code" class="w-8 h-8"></i>
                        </div>
                        <h4 class="text-lg font-semibold text-gray-900 dark:text-white mb-2">Infrastructure as Code</h4>
                        <p class="text-gray-600 dark:text-gray-400 text-sm">Terraform, CloudFormation, and Ansible expertise for scalable infrastructure management.</p>
                    </div>
                    <div class="p-6 bg-gray-50 dark:bg-gray-800 rounded-xl hover:shadow-lg transition-all duration-300 transform hover:-translate-y-1">
                        <div class="text-blue-600 dark:text-blue-400 mb-4">
                            <i data-lucide="server" class="w-8 h-8"></i>
                        </div>
                        <h4 class="text-lg font-semibold text-gray-900 dark:text-white mb-2">CI/CD Pipeline Design</h4>
                        <p class="text-gray-600 dark:text-gray-400 text-sm">Building robust deployment pipelines with Jenkins, GitLab CI, and GitHub Actions.</p>
                    </div>
                    <div class="p-6 bg-gray-50 dark:bg-gray-800 rounded-xl hover:shadow-lg transition-all duration-300 transform hover:-translate-y-1">
                        <div class="text-blue-600 dark:text-blue-400 mb-4">
                            <i data-lucide="cloud" class="w-8 h-8"></i>
                        </div>
                        <h4 class="text-lg font-semibold text-gray-900 dark:text-white mb-2">Cloud Architecture</h4>
                        <p class="text-gray-600 dark:text-gray-400 text-sm">AWS, Azure, and GCP certified with extensive experience in multi-cloud environments.</p>
                    </div>
                    <div class="p-6 bg-gray-50 dark:bg-gray-800 rounded-xl hover:shadow-lg transition-all duration-300 transform hover:-translate-y-1">
                        <div class="text-blue-600 dark:text-blue-400 mb-4">
                            <i data-lucide="shield" class="w-8 h-8"></i>
                        </div>
                        <h4 class="text-lg font-semibold text-gray-900 dark:text-white mb-2">Security & Monitoring</h4>
                        <p class="text-gray-600 dark:text-gray-400 text-sm">Implementing DevSecOps practices with comprehensive monitoring and alerting systems.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
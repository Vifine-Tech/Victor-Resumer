<section id="skills" class="py-20 bg-gray-50 dark:bg-gray-800">
    <div class="container mx-auto px-6">
        <div class="max-w-6xl mx-auto">
            <!-- Section Header -->
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 dark:text-white mb-4">Skills & Expertise</h2>
                <div class="w-24 h-1 bg-gradient-to-r from-blue-600 to-indigo-600 mx-auto mb-6"></div>
                <p class="text-xl text-gray-600 dark:text-gray-400 max-w-3xl mx-auto">
                    Comprehensive expertise across the entire DevOps ecosystem, from cloud platforms to monitoring solutions.
                </p>
            </div>

            <!-- Skill Categories -->
            <div class="grid lg:grid-cols-2 gap-12 mb-16">
                @foreach($skills as $categoryName => $categorySkills)
                <div class="space-y-6">
                    <h3 class="text-2xl font-bold text-gray-900 dark:text-white">{{ $categoryName }}</h3>
                    <div class="space-y-4">
                        @foreach($categorySkills as $skill)
                        <div class="space-y-2">
                            <div class="flex justify-between items-center">
                                <span class="text-gray-700 dark:text-gray-300 font-medium">{{ $skill['name'] }}</span>
                                <span class="text-gray-500 dark:text-gray-400 text-sm">{{ $skill['level'] }}%</span>
                            </div>
                            <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                <div class="{{ $skill['color'] }} h-2 rounded-full transition-all duration-1000 ease-out" style="width: {{ $skill['level'] }}%"></div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                @endforeach
            </div>

            <!-- Technologies Cloud -->
            <div class="text-center">
                <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-8">Technologies & Tools</h3>
                <div class="flex flex-wrap justify-center gap-3">
                    @php
                    $technologies = ['AWS', 'Azure', 'GCP', 'Docker', 'Kubernetes', 'Terraform', 'Ansible', 'Jenkins', 'GitLab CI', 'GitHub Actions', 'Prometheus', 'Grafana', 'ELK Stack', 'Redis', 'PostgreSQL', 'MongoDB', 'NGINX', 'Apache', 'Linux', 'Python', 'Bash', 'Go', 'Node.js', 'Git'];
                    @endphp
                    @foreach($technologies as $tech)
                    <span class="px-4 py-2 bg-white dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-full border border-gray-200 dark:border-gray-600 hover:border-blue-500 dark:hover:border-blue-400 hover:text-blue-600 dark:hover:text-blue-400 transition-all duration-300 cursor-default">
                        {{ $tech }}
                    </span>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
<!DOCTYPE html>
<html lang="en" x-data="{ darkMode: localStorage.getItem('darkMode') === 'true' || (!localStorage.getItem('darkMode') && window.matchMedia('(prefers-color-scheme: dark)').matches) }" 
      x-init="$watch('darkMode', val => localStorage.setItem('darkMode', val))" 
      :class="{ 'dark': darkMode }">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="{{ config('portfolio.seo.description') }}">
    <meta name="keywords" content="{{ config('portfolio.seo.keywords') }}">
    <meta name="author" content="{{ config('portfolio.name') }}">
    
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url('/') }}">
    <meta property="og:title" content="{{ config('portfolio.name') }} - {{ config('portfolio.title') }}">
    <meta property="og:description" content="{{ config('portfolio.seo.description') }}">
    
    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ url('/') }}">
    <meta property="twitter:title" content="{{ config('portfolio.name') }} - {{ config('portfolio.title') }}">
    <meta property="twitter:description" content="{{ config('portfolio.seo.description') }}">
    
    <title>{{ config('portfolio.name') }} - {{ config('portfolio.title') }}</title>
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Alpine.js -->
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    
    <!-- Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest/dist/umd/lucide.js"></script>
    
    <style>
        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .animate-fadeInUp { animation: fadeInUp 0.8s ease-out forwards; }
        .delay-300 { animation-delay: 0.3s; }
        .delay-500 { animation-delay: 0.5s; }
        .delay-700 { animation-delay: 0.7s; }
        .delay-1000 { animation-delay: 1s; }
        .delay-2000 { animation-delay: 2s; }
        html { scroll-behavior: smooth; }
        body { font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif; }
    </style>
</head>
<body class="bg-white dark:bg-gray-900 text-gray-900 dark:text-white">
    @include('portfolio::partials.header')
    @include('portfolio::partials.hero')
    @include('portfolio::partials.about')
    @include('portfolio::partials.skills')
    @include('portfolio::partials.experience')
    @include('portfolio::partials.projects')
    @include('portfolio::partials.services')
    @include('portfolio::partials.contact')
    @include('portfolio::partials.footer')

    <script>
        // Initialize Lucide icons
        lucide.createIcons();
        
        // Smooth scroll for navigation
        function scrollToSection(sectionId) {
            document.querySelector(sectionId).scrollIntoView({ behavior: 'smooth' });
        }
        
        // Contact form handling
        async function submitContactForm(formData) {
            try {
                const response = await fetch('{{ route("portfolio.contact.store") }}', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    body: JSON.stringify(formData)
                });
                
                const result = await response.json();
                
                if (result.success) {
                    alert(result.message);
                    document.getElementById('contact-form').reset();
                } else {
                    alert(result.message);
                }
            } catch (error) {
                alert('Sorry, there was an error sending your message. Please try again.');
            }
        }
    </script>
</body>
</html>
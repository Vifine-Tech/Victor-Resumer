<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Portfolio Configuration
    |--------------------------------------------------------------------------
    |
    | Configuration options for the Victor Kipkoech Portfolio Module
    |
    */

    'name' => env('PORTFOLIO_NAME', 'Victor Kipkoech'),
    'title' => env('PORTFOLIO_TITLE', 'DevOps Engineer & Cloud Architect'),
    'email' => env('PORTFOLIO_EMAIL', 'victor@victor.co.ke'),
    'phone' => env('PORTFOLIO_PHONE', '+254 700 000 000'),
    'location' => env('PORTFOLIO_LOCATION', 'Nairobi, Kenya'),
    'domain' => env('PORTFOLIO_DOMAIN', 'victor.co.ke'),
    
    'social_links' => [
        'github' => env('PORTFOLIO_GITHUB', 'https://github.com/victorkipkoech'),
        'linkedin' => env('PORTFOLIO_LINKEDIN', 'https://linkedin.com/in/victorkipkoech'),
        'twitter' => env('PORTFOLIO_TWITTER', 'https://twitter.com/victorkipkoech'),
    ],
    
    'seo' => [
        'description' => 'Victor Kipkoech - DevOps Engineer & Cloud Architect specializing in CI/CD, Infrastructure as Code, and cloud migration services.',
        'keywords' => 'DevOps, Cloud Architecture, CI/CD, AWS, Azure, Kubernetes, Terraform, Infrastructure as Code',
    ],
    
    'features' => [
        'contact_form' => true,
        'dark_mode' => true,
        'analytics' => env('PORTFOLIO_ANALYTICS', false),
    ],
];
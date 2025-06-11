# Victor Kipkoech Portfolio Module

A modern, responsive Laravel portfolio module designed specifically for DevOps professionals. This package provides a complete portfolio solution with contact forms, project showcases, and service listings.

## Features

- 🎨 Modern, responsive design with dark/light mode
- 📱 Mobile-first approach with smooth animations
- 📧 Contact form with email notifications
- 🔧 Configurable via environment variables
- 🎯 SEO optimized with meta tags
- 📊 Skills showcase with progress bars
- 💼 Experience timeline with achievements
- 🚀 Project portfolio with case studies
- 💰 Service listings with pricing
- 🌙 Dark mode support
- ⚡ Alpine.js for interactive components

## Installation

1. Install the package via Composer:

```bash
composer require victorkipkoech/portfolio-module
```

2. Publish the configuration file:

```bash
php artisan vendor:publish --tag=portfolio-config
```

3. Publish the views (optional):

```bash
php artisan vendor:publish --tag=portfolio-views
```

4. Publish the assets:

```bash
php artisan vendor:publish --tag=portfolio-assets
```

5. Run the migrations:

```bash
php artisan migrate
```

## Configuration

Add the following environment variables to your `.env` file:

```env
PORTFOLIO_NAME="Victor Kipkoech"
PORTFOLIO_TITLE="DevOps Engineer & Cloud Architect"
PORTFOLIO_EMAIL="victor@victor.co.ke"
PORTFOLIO_PHONE="+254 700 000 000"
PORTFOLIO_LOCATION="Nairobi, Kenya"
PORTFOLIO_DOMAIN="victor.co.ke"
PORTFOLIO_GITHUB="https://github.com/victorkipkoech"
PORTFOLIO_LINKEDIN="https://linkedin.com/in/victorkipkoech"
PORTFOLIO_TWITTER="https://twitter.com/victorkipkoech"
```

## Usage

The portfolio will be available at your application's root URL (`/`). The module includes:

- **Home Page**: Complete portfolio with all sections
- **Contact Form**: Handles form submissions and sends email notifications
- **CV Download**: Downloadable CV functionality

### Routes

- `GET /` - Portfolio home page
- `POST /contact` - Contact form submission
- `GET /download-cv` - Download CV

### Customization

You can customize the portfolio data by modifying the `PortfolioService` class or by publishing the views and editing them directly.

### Email Configuration

Make sure your Laravel application is configured to send emails. The contact form will send notifications to the email specified in `PORTFOLIO_EMAIL`.

## Requirements

- PHP 8.1+
- Laravel 10.0+
- Alpine.js (included via CDN)
- Tailwind CSS (included via CDN)
- Lucide Icons (included via CDN)

## License

This package is open-sourced software licensed under the [MIT license](LICENSE).

## Support

For support, email victor@victor.co.ke or create an issue on GitHub.
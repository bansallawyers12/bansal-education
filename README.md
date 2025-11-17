 # Bansal Education Group Website

A modern, professional website for Bansal Education Group - an educational institution providing quality education and comprehensive learning programs.

## Features

- **Responsive Design**: Fully responsive website that works on all devices
- **Modern UI/UX**: Clean, professional design with smooth animations and transitions
- **Multiple Pages**: Home, About, Courses, and Contact pages
- **Interactive Elements**: Mobile menu, form validation, and smooth scrolling
- **SEO Optimized**: Proper meta tags and semantic HTML structure

## Pages

### Home Page
- Hero section with compelling call-to-action
- Features section highlighting key benefits
- Statistics section showing impact
- Course preview section
- Student testimonials
- Call-to-action section

### About Page
- Company story and mission
- Core values and principles
- Leadership team showcase
- Vision and mission statements

### Courses Page
- Course categories overview
- Featured courses with pricing
- Course features and benefits
- Enrollment call-to-action

### Contact Page
- Contact form with validation
- Contact information and office hours
- Interactive map placeholder
- FAQ section
- Social media links

## Laravel Framework

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework. You can also check out [Laravel Learn](https://laravel.com/learn), where you will be guided through building a modern Laravel application.

## Technology Stack

- **Backend**: Laravel 12
- **Frontend**: Blade templates with Tailwind CSS 4.0
- **JavaScript**: Vanilla JavaScript for interactivity
- **Fonts**: Inter (sans-serif) and Playfair Display (serif)
- **Icons**: Heroicons (SVG icons)

## Installation

1. Clone the repository
2. Install dependencies:
   ```bash
   composer install
   npm install
   ```
3. Set up environment variables:
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```
4. Build assets:
   ```bash
   npm run build
   ```
5. Start the development server:
   ```bash
   php artisan serve
   ```

## Development

To watch for changes during development:
```bash
npm run dev
```

## Customization

### Colors
The website uses a blue and purple gradient theme. You can customize colors by modifying the Tailwind classes in the Blade templates.

### Content
- Update company information in the respective Blade templates
- Modify course information in `resources/views/courses.blade.php`
- Update contact information in `resources/views/contact.blade.php`

### Styling
- Custom styles are defined in `resources/css/app.css`
- Component classes are available for consistent styling
- Responsive breakpoints follow Tailwind's default system

## Browser Support

- Chrome (latest)
- Firefox (latest)
- Safari (latest)
- Edge (latest)
- Mobile browsers (iOS Safari, Chrome Mobile)

## License

This project is proprietary software for Bansal Education Group.
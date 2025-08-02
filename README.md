# TALL Stack with WireUI Project

This is a Laravel application built with the TALL stack (Tailwind CSS, Alpine.js, Laravel, Livewire) and WireUI for enhanced UI components.

## Technologies Used

- **T** - [Tailwind CSS](https://tailwindcss.com/) - Utility-first CSS framework
- **A** - [Alpine.js](https://alpinejs.dev/) - Minimal JavaScript framework
- **L** - [Laravel](https://laravel.com/) - PHP web framework
- **L** - [Livewire](https://livewire.laravel.com/) - Full-stack framework for Laravel
- **[WireUI](https://wire-ui.com/)** - Blade components and interactions for Livewire

## Features

- Modern UI components from WireUI
- Interactive Livewire components
- Real-time notifications
- Responsive design with Tailwind CSS
- Alpine.js for client-side interactions

## Installation

1. Install PHP dependencies:
   ```bash
   composer install
   ```

2. Install Node.js dependencies:
   ```bash
   npm install
   ```

3. Copy environment file:
   ```bash
   cp .env.example .env
   ```

4. Generate application key:
   ```bash
   php artisan key:generate
   ```

5. Run database migrations:
   ```bash
   php artisan migrate
   ```

6. Build assets:
   ```bash
   npm run build
   ```

## Development

1. Start the development server:
   ```bash
   php artisan serve
   ```

2. For development with hot reloading, run Vite:
   ```bash
   npm run dev
   ```

3. Visit `http://localhost:8000` to see the welcome page
4. Visit `http://localhost:8000/dashboard` to see the WireUI components demo

## Components Included

### WireUI Components Demonstrated
- Buttons (Primary, Secondary, Success, Danger)
- Form inputs (Input, Textarea, Select)
- Cards
- Notifications
- Progress bars

### Livewire Components
- Interactive Counter with real-time updates
- Form validation and interactions
- Dynamic content updates

## Project Structure

```
├── app/
│   └── Livewire/
│       └── Counter.php          # Interactive counter component
├── resources/
│   ├── css/
│   │   └── app.css             # Tailwind CSS imports
│   ├── js/
│   │   └── app.js              # Alpine.js setup
│   └── views/
│       ├── layouts/
│       │   └── app.blade.php   # Main layout with WireUI
│       ├── livewire/
│       │   └── counter.blade.php # Counter component view
│       └── dashboard.blade.php  # Demo page
├── tailwind.config.js          # Tailwind configuration
└── postcss.config.js          # PostCSS configuration
```

## Key Configuration Files

- `tailwind.config.js` - Configured for WireUI with proper content paths
- `config/wireui.php` - WireUI configuration (published)
- `resources/js/app.js` - Alpine.js initialization
- `resources/css/app.css` - Tailwind CSS directives

## Usage Examples

### Basic WireUI Button
```blade
<x-button label="Click Me" positive />
```

### Livewire Component with WireUI
```blade
<livewire:counter />
```

### Notifications
```php
$this->notification()->success(
    title: 'Success!',
    description: 'Operation completed successfully.'
);
```

## Next Steps

- Add more Livewire components
- Implement authentication with Laravel Breeze
- Add database models and migrations
- Create CRUD operations with WireUI forms
- Add testing with Pest or PHPUnit

## Resources

- [TALL Stack Documentation](https://tallstack.dev/)
- [WireUI Documentation](https://wire-ui.com/)
- [Livewire Documentation](https://livewire.laravel.com/)
- [Tailwind CSS Documentation](https://tailwindcss.com/)
- [Alpine.js Documentation](https://alpinejs.dev/)

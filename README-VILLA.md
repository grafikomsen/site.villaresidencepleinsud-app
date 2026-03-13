# 🏰 Villa Luxe - Luxury Real Estate Landing Page

A modern, production-ready Laravel 12 application for a luxury villa real estate landing page with complete reservation management system, multi-language support, and admin dashboard.

![Laravel](https://img.shields.io/badge/Laravel-12-FF2D20)
![PHP](https://img.shields.io/badge/PHP-8%2B-777BB4)
![TailwindCSS](https://img.shields.io/badge/TailwindCSS-4-38B2AC)
![License](https://img.shields.io/badge/License-MIT-green)

## 🎯 Features

### 🏠 Landing Page
- ✨ Modern hero section with call-to-action
- 📸 Responsive photo gallery with lightbox viewer
- 🗺️ Google Maps integration for location
- ✅ Complete villa details and amenities
- 📱 Fully responsive design (mobile-first)
- 🌍 SEO optimized with meta tags

### 📋 Reservation System
- 📝 Professional booking form
- ✔️ Client-side & server-side validation
- 🔒 CSRF protection and input sanitization
- 💾 Database storage with admin notification
- ✉️ Success confirmation messages
- 📊 Real-time reservation tracking

### 👨‍💼 Admin Dashboard
- 🔐 Secure admin login
- 📊 Stats cards (total, pending, contacted)
- 📋 Reservation management table
- 👁️ Detailed reservation view modal
- ✓ Mark reservations as contacted
- 🗑️ Delete reservations
- 📄 Pagination support

### 🌍 Multi-Language Support
- 🇬🇧 English (en)
- 🇫🇷 Français (fr)
- 🔄 One-click language switcher
- 📦 Fully translated interface

### 🎨 Design
- 🎨 TailwindCSS for modern styling
- 📱 Mobile-responsive layout
- ✨ Smooth animations and transitions
- 🌓 Clean, professional aesthetic
- 💫 Gradient backgrounds and effects

## 🛠 Tech Stack

### Backend
- **Laravel 12** - PHP Web Framework
- **MySQL 8+** - Relational Database
- **PHP 8+** - Server Language
- **Eloquent ORM** - Database Abstraction

### Frontend
- **Blade Templates** - Server-side templating
- **TailwindCSS 4** - Utility-first CSS
- **AlpineJS 3** - Lightweight JavaScript framework
- **Vanilla JavaScript** - Interactive features

### Tools & Deployment
- **Vite** - Lightning-fast build tool
- **Composer** - PHP dependency manager
- **npm** - JavaScript package manager
- **XAMPP** - Local development server

## 📦 Installation

### Prerequisites
- PHP 8+ installed
- Composer installed
- Node.js & npm installed
- MySQL/MariaDB running
- XAMPP setup (recommended for Windows)

### Quick Start (Windows + XAMPP)

```powershell
# Navigate to project directory
cd d:\XAMPP\htdocs\site.villalanding-app

# Install dependencies
composer install
npm install

# Create environment file
cp .env.example .env

# Generate application key
php artisan key:generate

# Run migrations and seed data
php artisan migrate:fresh --seed
```

### Run Development Servers

**Terminal 1: Start Laravel Server**
```powershell
php artisan serve
# Access at http://localhost:8000
```

**Terminal 2: Start Vite Development Server**
```powershell
npm run dev
```

## 🚀 Usage

### Access the Application
- **Landing Page:** http://localhost:8000
- **Admin Panel:** http://localhost:8000/admin/login
- **Admin Credentials:** 
  - Email: `admin@villa.test`
  - Password: `admin123`

### Main Routes
```
GET  /                           # Landing page
GET  /admin/login               # Admin login
POST /admin/login               # Admin login submit
GET  /admin/dashboard           # Admin dashboard (protected)
POST /reservation/store         # Submit reservation form
GET  /locale/{locale}           # Switch language
```

### Development Workflow
1. Edit Blade templates in `resources/views/`
2. Modify CSS in `resources/css/app.css`
3. Add JavaScript in `resources/js/app.js`
4. Changes auto-reload with Vite dev server
5. Run `npm run build` for production build

## 📁 Project Structure

```
villa-landing/
├── app/
│   ├── Http/Controllers/
│   │   ├── PublicController.php
│   │   ├── ReservationController.php
│   │   └── AdminController.php
│   ├── Models/
│   │   └── Reservation.php
│   └── Middleware/
│       └── SetLocale.php
├── database/
│   ├── migrations/
│   ├── seeders/
│   └── factories/
├── resources/
│   ├── views/
│   │   ├── layouts/app.blade.php
│   │   ├── index.blade.php
│   │   └── admin/
│   ├── css/app.css
│   ├── js/app.js
│   └── lang/
│       ├── en/
│       └── fr/
├── routes/
│   └── web.php
├── config/
├── public/
├── storage/
└── vendor/
```

## 🔒 Security

- ✅ CSRF Protection on all forms
- ✅ Input validation (server & client-side)
- ✅ SQL Injection prevention via Eloquent ORM
- ✅ XSS protection with Blade escaping
- ✅ Secure authentication middleware
- ✅ Password hashing

## 📊 Database

### Reservations Table
| Column | Type | Notes |
|--------|------|-------|
| id | bigint | Primary key |
| name | string | Visitor name |
| email | string | Email address (indexed) |
| phone | string | Phone number |
| visit_date | datetime | Requested visit date (indexed) |
| message | longtext | Optional message |
| contacted_at | datetime | When contacted (nullable) |
| created_at | timestamp | Creation timestamp |
| updated_at | timestamp | Last update timestamp |

## 🌐 Multi-Language

All text is translatable. Language files are in `resources/lang/`:

**Adding a new language:**
1. Create folder `resources/lang/xx/` (where xx is language code)
2. Copy PHP files from `en/` folder
3. Translate all strings
4. Update language switcher in navigation

## 🚢 Production Deployment

### Build for Production
```powershell
npm run build
```

### Environment Setup (.env)
```
APP_ENV=production
APP_DEBUG=false
DB_HOST=your_db_host
DB_DATABASE=your_db_name
DB_USERNAME=your_db_user
DB_PASSWORD=your_db_password
```

### Server Configuration
- Ensure `public/` is web root
- Configure SSL/HTTPS
- Set proper file permissions
- Enable PHP opcache
- Set up automated backups
- Configure CDN for assets

## 📝 Configuration Files

- `config/app.php` - Application configuration
- `config/database.php` - Database settings
- `config/auth.php` - Authentication settings
- `config/session.php` - Session settings
- `.env` - Environment variables

## 🧪 Testing

Run feature tests:
```powershell
php artisan test
```

## 📊 Artisan Commands

```powershell
# Database
php artisan migrate                          # Run migrations
php artisan migrate:fresh --seed             # Reset & seed
php artisan tinker                           # Interactive shell

# Cache
php artisan cache:clear                      # Clear cache
php artisan view:clear                       # Clear views
php artisan config:cache                     # Cache config

# Development
php artisan serve                            # Start dev server
php artisan key:generate                     # Generate app key
```

## 🐛 Troubleshooting

**CSS/JS not loading?**
```powershell
npm run build
php artisan view:clear
```

**Database errors?**
```powershell
php artisan migrate:fresh --seed
```

**Class not found?**
```powershell
composer dump-autoload
```

See [INSTALLATION_GUIDE.md](./INSTALLATION_GUIDE.md) for detailed troubleshooting.

## 📚 Additional Resources

- [Laravel Documentation](https://laravel.com/docs)
- [TailwindCSS Documentation](https://tailwindcss.com/docs)
- [AlpineJS Documentation](https://alpinejs.dev)
- [Vite Guide](https://vitejs.dev/guide/)
- [Blade Templating](https://laravel.com/docs/11.x/blade)

## 📄 License

This project is provided open-source. Use for educational and commercial purposes.

## 👨‍💼 Support

For issues or questions:
1. Check [INSTALLATION_GUIDE.md](./INSTALLATION_GUIDE.md)
2. Review error logs in `storage/logs/`
3. Check `.env` configuration

## 🎉 Credits

Built with ❤️ using:
- Laravel 12
- TailwindCSS
- AlpineJS
- Vite

---

**Version:** 1.0.0  
**Status:** Production Ready  
**Last Updated:** March 9, 2026

Happy coding! 🚀

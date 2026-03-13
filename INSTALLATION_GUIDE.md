# 🏰 Villa Luxe - Luxury Real Estate Landing Page

## 📋 Table of Contents
- [Project Overview](#project-overview)
- [Tech Stack](#tech-stack)
- [Installation Guide](#installation-guide)
- [Database Setup](#database-setup)
- [Running the Project](#running-the-project)
- [Features Guide](#features-guide)
- [Admin Panel](#admin-panel)
- [Multi-Language Support](#multi-language-support)
- [Project Structure](#project-structure)
- [Troubleshooting](#troubleshooting)

---

## 🎯 Project Overview

**Villa Luxe** is a production-ready Laravel 12 application for a luxury real estate landing page featuring:
- Modern, responsive design with TailwindCSS
- Complete reservation management system
- Multi-language support (English & French)
- Admin dashboard for managing reservations
- Google Maps integration
- Image gallery with lightbox viewer
- SEO optimized

**Project Name:** villa-landing  
**Location:** `d:\XAMPP\htdocs\site.villalanding-app`

---

## 🛠 Tech Stack

### Backend
- **Laravel 12** - PHP Web Framework
- **MySQL 8+** - Database
- **PHP 8+** - Server Language

### Frontend
- **Blade Templates** - Templating Engine
- **TailwindCSS 4** - CSS Framework
- **AlpineJS 3** - Lightweight JavaScript Framework
- **Vanilla JavaScript** - Interactive features

### Tools
- **Vite** - Build Tool
- **Composer** - PHP Package Manager
- **Node.js** - JavaScript Runtime
- **npm** - Package Manager

---

## 📥 Installation Guide for Windows + XAMPP

### Prerequisites
Ensure you have installed:
- ✅ XAMPP (with PHP 8.0+, MySQL, Apache)
- ✅ Composer (https://getcomposer.org)
- ✅ Node.js & npm (https://nodejs.org)
- ✅ Git (recommended)

### Step 1: Navigate to Project Directory
```powershell
cd d:\XAMPP\htdocs\site.villalanding-app
```

### Step 2: Install PHP Dependencies
```powershell
composer install
```

### Step 3: Install Node Dependencies
```powershell
npm install
```

### Step 4: Create Environment Configuration
```powershell
cp .env.example .env
```

Edit `.env` file and configure:
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=villa_luxe
DB_USERNAME=root
DB_PASSWORD=

APP_LOCALE=en
APP_FALLBACK_LOCALE=en
```

### Step 5: Generate Application Key
```powershell
php artisan key:generate
```

---

## 🗄 Database Setup

### Step 1: Create Database
Open MySQL terminal in XAMPP and run:
```sql
CREATE DATABASE IF NOT EXISTS villa_luxe CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
```

Or using PHP Artisan:
```powershell
php artisan migrate:fresh --seed
```

This will:
- ✅ Create all tables (users, reservations, etc.)
- ✅ Seed demo data
- ✅ Create admin user

### Admin Credentials
```
Email: admin@villa.test
Password: admin123
```

### Demo Reservations
The seeder creates 4 demo reservations (2 contacted, 2 pending).

---

## 🚀 Running the Project

### Method 1: Full Development Setup (Recommended)

**Terminal 1 - Start PHP Development Server:**
```powershell
php artisan serve
```
This will start the application at: `http://localhost:8000`

**Terminal 2 - Start Vite Development Server:**
```powershell
npm run dev
```
This compiles CSS/JS and watches for changes.

**Terminal 3 - Start XAMPP (Optional but recommended)**
- Open XAMPP Control Panel
- Start MySQL and Apache
- Access via: `http://localhost/site.villalanding-app`

### Method 2: Using XAMPP Only

1. Start MySQL and Apache in XAMPP
2. In your browser, visit: `http://localhost/site.villalanding-app/public`
3. For production build, run:
   ```powershell
   npm run build
   ```

### Method 3: Quick Start Script

Create a file `start.bat` in your project root:
```batch
@echo off
echo Starting Villa Luxe Application...
start cmd /k "cd /d d:\XAMPP\htdocs\site.villalanding-app && php artisan serve"
start cmd /k "cd /d d:\XAMPP\htdocs\site.villalanding-app && npm run dev"
echo Application is starting...
echo Frontend: http://localhost:8000
echo API: http://localhost:8000/api
pause
```

Double-click to run!

---

## 🎨 Features Guide

### 1. Landing Page (`/`)
**Sections:**
- **Hero Section** - Eye-catching intro with CTA
- **About Villa** - Villa details (size, bedrooms, bathrooms, price)
- **Photo Gallery** - Responsive grid with lightbox viewer
- **Amenities** - 6 key features (pool, garden, parking, security, internet, climate)
- **Location** - Google Maps & proximity info
- **Reservation Form** - Booking form
- **Footer** - Contact info & social links

**Features:**
- Smooth scroll navigation
- Animated background elements
- Responsive design (mobile-first)
- SEO meta tags
- Fast loading

### 2. Reservation System (`/`)

**Form Fields:**
- Full Name (required)
- Email Address (required)
- Phone Number (required)
- Visit Date & Time (required, must be future date)
- Message (optional)

**Features:**
- Client-side & server-side validation
- CSRF Protection
- Success confirmation message
- Admin notification (via database)
- Database storage

---

## 👨‍💼 Admin Panel

### Access
- **URL:** `http://localhost:8000/admin/login`
- **Email:** `admin@villa.test`
- **Password:** `admin123`

### Dashboard Features
1. **Statistics Cards**
   - Total Reservations
   - Pending (not contacted)
   - Contacted

2. **Reservations Table**
   - View all reservations
   - Sort by visit date
   - Pagination (10 per page)

3. **Actions**
   - 👁️ **View Details** - See full reservation info in modal
   - ✓ **Mark Contacted** - Update status
   - 🗑️ **Delete** - Remove reservation

4. **Responsive Design**
   - Mobile-friendly table
   - Touch-optimized buttons

---

## 🌍 Multi-Language Support

### Current Languages
- 🇬🇧 **English** (en)
- 🇫🇷 **Français** (fr)

### Switch Language
Click the **EN | FR** toggle in the header

### Language Files Location
```
resources/lang/
├── en/
│   ├── nav.php
│   ├── footer.php
│   ├── hero.php
│   ├── about.php
│   ├── gallery.php
│   ├── amenities.php
│   ├── location.php
│   ├── reservation.php
│   ├── admin.php
│   └── pages.php
└── fr/
    └── [same files]
```

### Adding New Languages
1. Create folder: `resources/lang/new_language/`
2. Copy all PHP files from `en/`
3. Translate content
4. Update language switcher in `resources/views/layouts/app.blade.php`

---

## 📁 Project Structure

```
villa-landing/
├── app/
│   ├── Http/
│   │   ├── Controllers/
│   │   │   ├── PublicController.php      # Landing page
│   │   │   ├── ReservationController.php # Form handling
│   │   │   └── AdminController.php       # Admin dashboard
│   │   └── Middleware/
│   │       └── SetLocale.php             # Language switching
│   ├── Models/
│   │   └── Reservation.php               # Reservation modal
│   └── Providers/
├── bootstrap/
│   └── app.php                           # App configuration
├── config/
│   ├── app.php                           # App settings
│   ├── auth.php                          # Authentication
│   ├── database.php                      # DB config
│   └── session.php                       # Session config
├── database/
│   ├── migrations/
│   │   └── 2026_03_09_000003_create_reservations_table.php
│   ├── factories/
│   │   └── UserFactory.php
│   └── seeders/
│       ├── DatabaseSeeder.php
│       └── ReservationSeeder.php
├── public/
│   ├── index.php                         # Entry point
│   └── build/                            # Compiled assets
├── resources/
│   ├── css/
│   │   └── app.css                       # TailwindCSS
│   ├── js/
│   │   ├── app.js                        # Main JS
│   │   └── bootstrap.js                  # Bootstrap
│   ├── views/
│   │   ├── layouts/
│   │   │   └── app.blade.php             # Main layout
│   │   ├── index.blade.php               # Landing page
│   │   ├── admin/
│   │   │   ├── login.blade.php           # Admin login
│   │   │   └── dashboard.blade.php       # Admin dashboard
│   │   └── welcome.blade.php             # Default page
│   └── lang/
│       ├── en/                           # English translations
│       └── fr/                           # French translations
├── routes/
│   ├── web.php                           # Web routes
│   └── console.php                       # Console routes
├── storage/                              # App storage
├── tests/                                # Test files
├── vendor/                               # Dependencies (Composer)
├── .env                                  # Environment variables
├── .env.example                          # Example env
├── artisan                               # Artisan CLI
├── composer.json                         # PHP dependencies
├── package.json                          # NPM dependencies
├── vite.config.js                        # Vite configuration
├── phpunit.xml                           # Testing config
└── README.md                             # Project README
```

---

## 🔒 Security Features

✅ **CSRF Protection**
- All forms include `@csrf` tokens
- Automatic validation in middleware

✅ **Input Validation**
- Server-side validation on all forms
- Email validation
- Phone validation
- Date validation (future dates only)
- Message length validation

✅ **Authentication**
- Admin login with credentials
- Session-based auth
- Logout functionality

✅ **Data Sanitization**
- Input filtering
- SQL injection prevention (via Eloquent ORM)
- XSS protection

---

## 🗄 Database Schema

### Reservations Table
```
id (bigint, primary key)
name (string)
email (string, indexed)
phone (string)
visit_date (datetime, indexed)
message (longtext, nullable)
contacted_at (datetime, nullable)
created_at (timestamp)
updated_at (timestamp)
```

### Users Table (Pre-existing)
```
id (bigint, primary key)
name (string)
email (string, unique)
password (string)
created_at (timestamp)
updated_at (timestamp)
```

---

## 📊 Database Queries

### Get all pending reservations
```php
$pending = Reservation::whereNull('contacted_at')->get();
```

### Get contacted reservations
```php
$contacted = Reservation::whereNotNull('contacted_at')->get();
```

### Get reservations by date range
```php
$upcoming = Reservation::whereBetween('visit_date', [now(), now()->addDays(30)])->get();
```

---

## 🧪 Artisan Commands

### Database Commands
```powershell
# Run all migrations
php artisan migrate

# Rollback last migration
php artisan migrate:rollback

# Reset migrations and seed
php artisan migrate:fresh --seed

# Create database backup
php artisan tinker  # For manual queries
```

### Development Commands
```powershell
# Start dev server
php artisan serve

# Cache configuration
php artisan config:cache

# Clear all caches
php artisan cache:clear
php artisan view:clear
php artisan config:clear
```

### Queue Commands (if needed)
```powershell
php artisan queue:work
```

---

## 🐛 Troubleshooting

### Issue: "SQLSTATE[HY000]: General error"
**Solution:**
```powershell
php artisan migrate:fresh --seed
php artisan config:cache
```

### Issue: "Class not found" errors
**Solution:**
```powershell
composer dump-autoload
```

### Issue: CSS/JS not loading
**Solution:**
```powershell
npm run build
php artisan view:clear
```

### Issue: 404 on `http://localhost/site.villalanding-app`
**Solution:**
Use `http://localhost:8000` instead (Artisan server) or ensure Apache is configured correctly.

### Issue: Admin login failing
**Solution:**
```powershell
php artisan tinker
>>> Auth::attempt(['email' => 'admin@villa.test', 'password' => 'admin123'])
```

### Issue: Emails not sending (optional feature)
Set in `.env`:
```
MAIL_DRIVER=log
```
This logs emails to `storage/logs/` instead of sending.

---

## 📈 Performance Tips

1. **Enable Query Caching**
   ```php
   // In config/database.php
   'redis' => [
       'driver' => 'redis',
   ]
   ```

2. **Compress Images**
   - Gallery images are external (Unsplash)
   - Use WebP format for production

3. **Minify CSS/JS**
   ```powershell
   npm run build
   ```

4. **Enable Browser Caching**
   - Configure `.htaccess` for public folder

5. **Use CDN for Assets**
   - Move to Cloudflare or AWS CloudFront

---

## 🚢 Deployment Checklist

- [ ] Set `APP_DEBUG=false` in `.env`
- [ ] Set `APP_ENV=production` in `.env`
- [ ] Run `php artisan config:cache`
- [ ] Run `npm run build`
- [ ] Set proper file permissions
- [ ] Configure database backups
- [ ] Set up SSL certificate
- [ ] Configure email service
- [ ] Monitor logs in `storage/logs/`

---

## 📞 Contact & Support

- **Demo Admin:** admin@villa.test / admin123
- **Test Email:** Any email address works for testing
- **Phone Format:** Any format accepted (+33..., 06..., etc.)

---

## 📄 License

This project is provided as-is for educational and commercial use.

---

## ✅ Quick Verification Checklist

After installation, verify:

- [ ] `php artisan serve` starts without errors
- [ ] `npm run dev` compiles CSS/JS
- [ ] Homepage loads at `http://localhost:8000`
- [ ] All links work (hero, about, gallery, amenities, location)
- [ ] Reservation form submits successfully
- [ ] Admin login works with admin@villa.test / admin123
- [ ] Language switcher changes between EN and FR
- [ ] Gallery images display and lightbox works
- [ ] Google Maps displays
- [ ] Footer contains correct contact info

---

**Last Updated:** March 9, 2026  
**Version:** 1.0.0 - Production Ready

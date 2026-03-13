# 🚀 Villa Luxe - Quick Start Guide (Windows + XAMPP)

## ⚡ 5-Minute Quick Start

### Step 1: Open PowerShell/CMD
Navigate to the project directory:
```powershell
cd d:\XAMPP\htdocs\site.villalanding-app
```

### Step 2: Initial Setup (First Time Only)
```powershell
# Double-click this file or run from terminal:
setup.bat
```

This will:
- ✅ Install Composer dependencies
- ✅ Install npm packages
- ✅ Create .env file
- ✅ Generate app key
- ✅ Run database migrations
- ✅ Seed demo data

### Step 3: Start Development Servers

**Open Two Terminals (or use the batch files):**

**Terminal 1 - Laravel Server:**
```powershell
php artisan serve
# Or double-click: start-server.bat
```
This starts at `http://localhost:8000`

**Terminal 2 - Vite Dev Server:**
```powershell
npm run dev
# Or double-click: start-vite.bat
```

### Step 4: Access the Application
- **Landing Page:** http://localhost:8000
- **Admin Login:** http://localhost:8000/admin/login
- **Credentials:** admin@villa.test / admin123

---

## 📋 Batch Files Included

| File | Purpose |
|------|---------|
| `setup.bat` | Initial setup (run once) |
| `start-server.bat` | Start Laravel server |
| `start-vite.bat` | Start Vite dev server |

---

## 🎯 Common Tasks

### Reload Database
```powershell
php artisan migrate:fresh --seed
```

### Clear Cache
```powershell
php artisan cache:clear
php artisan view:clear
php artisan config:cache
```

### Build for Production
```powershell
npm run build
```

### Database Access
```powershell
php artisan tinker
# Then in tinker:
>>> Reservation::all()
>>> App\Models\User::find(1)
```

---

## 🔐 Admin Panel Quick Access

1. Go to: http://localhost:8000/admin/login
2. Email: `admin@villa.test`
3. Password: `admin123`
4. Click "Login"

**Features:**
- View all reservations
- Mark as contacted
- Delete reservations
- View reservation details

---

## 🌍 Language Switching

Click **EN | FR** in the top navigation to toggle between:
- 🇬🇧 English
- 🇫🇷 Français

---

## 📱 Test Features

### Reservation Form
1. Go to home page
2. Scroll to "Book Your Visit" section
3. Fill in the form:
   - Name: Any name
   - Email: Any email
   - Phone: Any phone (e.g., +33612345678)
   - Date: Select a future date
   - Message: Optional text
4. Click "Book Your Visit"
5. Check admin dashboard

### Gallery
- Click gallery images to enlarge
- Gallery has 6 demo images
- Lightbox viewer with close button

### Maps
- View location section
- Google Maps embedded

---

## 📊 Database Files

SQLite (Local Development):
- Located in: `database/` folder
- Auto-generated after first setup

MySQL (Production):
- Configure in `.env` file
- Default: `villa_luxe` database

**Seed Data Includes:**
- 1 Admin user (admin@villa.test)
- 4 Demo reservations (2 contacted, 2 pending)

---

## ⚠️ Common Issues & Fixes

### "Port 8000 already in use"
```powershell
php artisan serve --port=8001
```

### "npm not found"
- Install Node.js from https://nodejs.org

### "Composer not found"
- Install Composer from https://getcomposer.org

### "PHP not found"
- Ensure XAMPP PHP is in your system PATH
- Or use full path: `C:\xampp\php\php.exe`

### CSS/JS not loading
```powershell
npm run build
php artisan view:clear
```

### Database errors
```powershell
php artisan migrate:fresh --seed
```

---

## 📝 Environment Configuration

The `.env` file contains all configuration:

```ini
# Application
APP_NAME=Laravel
APP_ENV=local
APP_DEBUG=true
APP_KEY=base64:xxxxx

# Database (XAMPP Default)
DB_CONNECTION=sqlite
# Or MySQL:
# DB_HOST=127.0.0.1
# DB_DATABASE=villa_luxe
# DB_USERNAME=root
# DB_PASSWORD=

# Localization
APP_LOCALE=en
APP_FALLBACK_LOCALE=en
```

---

## 🎓 File Structure Quick Reference

```
📁 Project Root
├── 📄 README.md                 ← Overview
├── 📄 INSTALLATION_GUIDE.md     ← Detailed setup
├── 📄 setup.bat                 ← Run first!
├── 📄 start-server.bat          ← Terminal 1
├── 📄 start-vite.bat            ← Terminal 2
├── 📁 app/
│   ├── Controllers/             ← Business logic
│   ├── Models/                  ← Database models
│   └── Middleware/              ← Request handlers
├── 📁 resources/
│   ├── views/                   ← HTML templates
│   ├── css/app.css              ← Styles (TailwindCSS)
│   ├── js/app.js                ← JavaScript
│   └── lang/                    ← Translations
├── 📁 database/
│   ├── migrations/              ← Schema changes
│   └── seeders/                 ← Demo data
├── 📁 routes/
│   └── web.php                  ← URL routing
├── 📁 config/                   ← Configuration
├── 📁 public/                   ← Web root
├── 📄 .env                      ← Environment vars
└── 📄 composer.json             ← PHP packages
```

---

## 🔄 Development Workflow

1. **Edit files:**
   - Blade templates: `resources/views/`
   - Styles: `resources/css/app.css`
   - Scripts: `resources/js/app.js`

2. **Save changes** (Vite auto-compiles)

3. **Browser reload** (usually automatic)

4. **Test features** at http://localhost:8000

5. **Check admin** at http://localhost:8000/admin/dashboard

---

## 🚀 Next Steps

After quick start, read:
1. [INSTALLATION_GUIDE.md](./INSTALLATION_GUIDE.md) - Full documentation
2. [README-VILLA.md](./README-VILLA.md) - Complete features overview

---

## 💡 Tips & Tricks

**Clear browser cache:**
- Press `Ctrl+Shift+Del` in browser
- Or press `Ctrl+F5` to hard refresh

**Keep terminal windows organized:**
- Use separate terminals for Laravel and Vite
- Or use VS Code integrated terminal

**Monitor files in real-time:**
- Vite watches automatically
- Changes appear instantly in browser

**Database troubleshooting:**
```powershell
# View users
php artisan tinker
>>> App\Models\User::all()

# View reservations
>>> App\Models\Reservation::all()

# Create new admin
>>> App\Models\User::create(['name' => 'Name', 'email' => 'email@test.com', 'password' => bcrypt('password')])
```

---

## 📞 Quick Reference Commands

```powershell
# Project Setup
php artisan key:generate           # Generate app key
php artisan migrate                # Run migrations
php artisan migrate:fresh --seed   # Reset & seed
composer install                   # Install PHP deps
npm install                        # Install JS deps

# Development
php artisan serve                  # Start server
npm run dev                         # Start Vite
npm run build                       # Build production

# Maintenance
php artisan cache:clear            # Clear cache
php artisan view:clear             # Clear views
php artisan config:cache           # Cache config
composer dump-autoload             # Regenerate autoload

# Database
php artisan tinker                 # Interactive shell
php artisan make:model ModelName   # Create model
php artisan make:migration xyz     # Create migration
```

---

**You're all set! 🎉 Happy developing!**

For more help, see [INSTALLATION_GUIDE.md](./INSTALLATION_GUIDE.md)

**Last Updated:** March 9, 2026  
**Version:** 1.0.0

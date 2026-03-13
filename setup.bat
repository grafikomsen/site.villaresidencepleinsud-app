@echo off
REM ============================================
REM Villa Luxe - Development Server Startup
REM ============================================

echo.
echo ========================================
echo    Villa Luxe - Development Setup
echo ========================================
echo.

REM Check if we're in the right directory
if not exist "artisan" (
    echo ERROR: Please run this script from the project root directory!
    echo Expected location: d:\XAMPP\htdocs\site.villalanding-app
    pause
    exit /b 1
)

REM Step 1: Install/Update Dependencies
echo [1/3] Installing PHP dependencies...
call composer install
if errorlevel 1 (
    echo ERROR: Composer install failed!
    pause
    exit /b 1
)

echo.
echo [2/3] Installing Node dependencies...
call npm install
if errorlevel 1 (
    echo ERROR: npm install failed!
    pause
    exit /b 1
)

echo.
echo [3/3] Running database setup...
echo        Creating .env if not exists...
if not exist ".env" (
    copy .env.example .env
    echo        Generated .env file
)

echo        Generating app key...
call php artisan key:generate

echo        Running migrations...
call php artisan migrate:fresh --seed

echo.
echo ========================================
echo    Setup Complete!
echo ========================================
echo.
echo Admin Login Credentials:
echo   Email: admin@villa.test
echo   Password: admin123
echo.
echo Next Steps:
echo   1. Open two terminal windows
echo   2. In Terminal 1, run: php artisan serve
echo   3. In Terminal 2, run: npm run dev
echo   4. Visit http://localhost:8000
echo.
pause

# BurgerWeb 🍔

An online burger ordering and management system built with Laravel 11 and Livewire.

## Description

BurgerWeb is a full-stack web application that allows users to:
- Browse and search burger products
- Add products to cart and manage orders
- Register/Login with Two-Factor Authentication (2FA)
- Manage orders and payments
- Administrators can manage products, orders, and users

## Tech Stack

### Backend
- **Laravel 11.9** - PHP Framework
- **Laravel Jetstream 5.1** - Authentication scaffolding
- **Laravel Sanctum 4.0** - API authentication
- **Livewire 3.0** - Full-stack framework for dynamic interfaces
- **PHP 8.2+**

### Frontend
- **Tailwind CSS 3.4** - Utility-first CSS framework
- **Vite 5.0** - Frontend build tool
- **Axios** - HTTP client

### Database
- **MySQL 8.0** - Relational database

## Database Structure

- `users` - User management and authentication
- `products` - Burger product listings
- `orders` - Orders
- `order_items` - Order item details
- `payments` - Payment information
- `cache` - System cache
- `jobs` - Queue jobs
- `personal_access_tokens` - API tokens

## Installation

### System Requirements
- PHP >= 8.2
- Composer
- Node.js & NPM
- MySQL 8.0+

### Installation Steps

1. **Clone repository**
```bash
git clone <repository-url>
cd BurgerWeb
```

2. **Install dependencies**
```bash
cd Source
composer install
npm install
```

3. **Configure environment**
```bash
cp .env.example .env
php artisan key:generate
```

4. **Configure database**
- Create MySQL database named `burger_web`
- Update database information in `.env` file:
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=burger_web
DB_USERNAME=root
DB_PASSWORD=
```

5. **Import database**
```bash
mysql -u root -p burger_web < ../Database/burger_web.sql
```

Or run migrations:
```bash
php artisan migrate
```

6. **Build assets**
```bash
npm run dev
```

Or for production:
```bash
npm run build
```

7. **Start server**
```bash
php artisan serve
```

Application will run at: `http://localhost:8000`

## Admin Configuration

After registering an account, users will have the `user` role by default. To grant admin privileges, you can use one of the following methods:

### Method 1: Using MySQL/phpMyAdmin
```sql
UPDATE users SET role = 'admin' WHERE email = 'email@example.com';
```

### Method 2: Using Tinker (Laravel CLI)
```bash
php artisan tinker
```

Then run the command:
```php
$user = App\Models\User::where('email', 'email@example.com')->first();
$user->role = 'admin';
$user->save();
```

Or shorter version:
```php
App\Models\User::where('email', 'email@example.com')->update(['role' => 'admin']);
```

### Method 3: Create Seeder to automatically create admin (Recommended)

Create seeder file:
```bash
php artisan make:seeder AdminUserSeeder
```

Edit `database/seeders/AdminUserSeeder.php`:
```php
<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@burgerweb.com',
            'password' => Hash::make('password'),
            'role' => 'admin',
        ]);
    }
}
```

Run seeder:
```bash
php artisan db:seed --class=AdminUserSeeder
```

### User Roles
- `user` - Regular user (default)
- `admin` - Administrator (has access to admin dashboard)

## Key Features

### User Features
- ✅ View product list and product details
- ✅ Search and filter products by category
- ✅ Add products to cart
- ✅ Manage cart (update quantity, remove products)
- ✅ Place orders and checkout
- ✅ View order history
- ✅ Register/Login with 2FA
- ✅ Manage personal information

### Admin Features
- ✅ Manage products (CRUD)
- ✅ Manage orders
- ✅ View statistics
- ✅ Manage users

## Main Routes

### Public Routes
- `/` - Home page
- `/products` - Product list
- `/products/{category}` - Products by category
- `/single_product/{id}` - Product details
- `/about` - About page

### User Routes (authentication required)
- `/cart` - Shopping cart
- `/checkout` - Checkout
- `/user_orders` - My orders
- `/payment` - Payment processing

### Admin Routes (admin role required)
- `/list_products_admin` - Manage products
- `/add_products` - Add new product

## Testing

```bash
php artisan test
```

## Deployment

1. Build production assets:
```bash
npm run build
```

2. Optimize:
```bash
php artisan optimize
php artisan config:cache
php artisan route:cache
php artisan view:cache
```

3. Ensure `.env` is configured for production

## Contributing

1. Fork the repository
2. Create a feature branch
3. Make your changes
4. Test thoroughly
5. Submit a pull request

## License

This project is for educational purposes. Please check local laws regarding software licensing.
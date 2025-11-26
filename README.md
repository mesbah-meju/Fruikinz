# 🍎 Fruikinz - E-commerce Platform

A complete solution for E-commerce Business with exclusive features & super responsive layout. Fruikinz is a modern e-commerce platform built with Laravel, offering a seamless shopping experience for fresh fruits, vegetables, and natural products.

## 🌐 Live Website

**Live URL:** [https://fruikinzinternational.com/](https://fruikinzinternational.com/)

## ✨ Features

- 🛒 **Complete E-commerce Solution** - Full-featured online store with shopping cart, checkout, and order management
- 📱 **Responsive Design** - Super responsive layout that works perfectly on all devices
- 💳 **Multiple Payment Gateways** - Integrated with various payment providers (PayPal, Stripe, Razorpay, Paystack, and more)
- 🔐 **User Authentication** - Secure user registration, login, and profile management
- 📦 **Product Management** - Comprehensive product catalog with categories, variants, and inventory management
- 🛍️ **Shopping Cart & Wishlist** - Easy-to-use cart and wishlist functionality
- 📊 **Admin Dashboard** - Powerful admin panel for managing orders, products, and customers
- 🌍 **Multi-language Support** - Support for multiple languages
- 📧 **Email Notifications** - Automated email notifications for orders and updates
- 🔍 **Search & Filters** - Advanced search and filtering capabilities
- 📱 **Mobile App Ready** - API endpoints for mobile application integration

## 🛠️ Technology Stack

- **Backend:** Laravel 9.x
- **Frontend:** Blade Templates, Vue.js, Bootstrap 4
- **Database:** MySQL
- **PHP Version:** 8.0.2+
- **Package Manager:** Composer, NPM

## 📋 Requirements

- PHP >= 8.0.2
- Composer
- Node.js & NPM
- MySQL Database
- Web Server (Apache/Nginx)

## 🚀 Installation

1. **Clone the repository**
   ```bash
   git clone https://github.com/mesbah-meju/Fruikinz.git
   cd Fruikinz
   ```

2. **Install PHP dependencies**
   ```bash
   composer install
   ```

3. **Install Node dependencies**
   ```bash
   npm install
   ```

4. **Environment Setup**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

5. **Configure Database**
   - Update `.env` file with your database credentials
   - Run migrations:
   ```bash
   php artisan migrate
   ```

6. **Build Assets**
   ```bash
   npm run production
   # or for development
   npm run dev
   ```

7. **Start Development Server**
   ```bash
   php artisan serve
   ```

## 📦 Key Dependencies

### Backend Packages
- Laravel Framework 9.x
- Laravel Sanctum (API Authentication)
- Laravel Socialite (Social Authentication)
- Spatie Laravel Permission (Role & Permission Management)
- Intervention Image (Image Processing)
- mPDF (PDF Generation)
- Maatwebsite Excel (Excel Import/Export)

### Payment Gateways
- PayPal
- Stripe
- Razorpay
- Paystack
- Mercado Pago
- And many more...

## 📁 Project Structure

```
Fruikinz/
├── app/                 # Application core
│   ├── Http/           # Controllers, Middleware, Requests
│   ├── Models/         # Eloquent Models
│   ├── Services/       # Business Logic Services
│   └── Mail/           # Email Classes
├── config/             # Configuration files
├── database/           # Migrations, Seeds, Factories
├── public/             # Public assets
├── resources/          # Views, Assets, Languages
│   ├── views/         # Blade Templates
│   ├── js/            # JavaScript files
│   └── sass/          # Stylesheets
├── routes/             # Route definitions
└── storage/            # Storage for logs, cache, etc.
```

## 🔧 Configuration

### Environment Variables

Key environment variables to configure in `.env`:

- `APP_NAME` - Application name
- `APP_URL` - Application URL
- `DB_*` - Database configuration
- `MAIL_*` - Email configuration
- Payment gateway credentials

## 📝 License

This project is proprietary software. All rights reserved.

## 👨‍💻 Author

**Mesbah Uddin Meju**

- 📧 Email: [uddin.mesbaah@gmail.com](mailto:uddin.mesbaah@gmail.com)
- 🌐 Website: [mesbahuddin.info](https://mesbahuddin.info)
- 💼 LinkedIn: [mesbah-uddin-meju](https://www.linkedin.com/in/mesbah-uddin-meju)
- 🐙 GitHub: [mesbah-meju](https://github.com/mesbah-meju)

## 🤝 Contributing

This is a private project. For any inquiries or collaboration opportunities, please contact the author.

## 📞 Contact

For business inquiries or support:
- **Email:** frukinz@gmail.com
- **Address:** Aziz bhaban, 93/b motijheel, 11th floor, dhaka-1000
- **Phone:** +8801675789968

---

**Built with ❤️ by Mesbah Uddin Meju**

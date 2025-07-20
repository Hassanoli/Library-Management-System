# Library Management System

A web-based Library Management System built with the Laravel PHP framework. It includes features for managing books, categories, users, borrowing records, and admin/user interfaces. The presence of Jetstream and Fortify suggests modern authentication and user management.

---

## Key Features

1. **User Management**
   - User registration, login, password reset (Laravel Fortify & Jetstream)
   - Two-factor authentication support
   - User roles (admin and regular users)

2. **Book Management**
   - CRUD operations for books (add, edit, delete, view)
   - Book categories
   - Book borrowing and return tracking

3. **Admin Panel**
   - Admin-specific controllers and middleware
   - Admin dashboard and management pages

4. **Borrowing System**
   - Users can borrow books
   - Borrow records are tracked

5. **Frontend**
   - Public-facing pages for browsing books, categories, and details
   - User dashboard and profile management
   - Custom and vendor CSS/JS for UI (Bootstrap, jQuery, Chart.js, Font Awesome)

6. **Authentication & Security**
   - Laravel Fortify for authentication
   - Password validation and reset
   - Middleware for route protection

7. **API Support**
   - API endpoints and token manager

8. **Email & Notifications**
   - Email templates for team invitations and notifications

---

## Technologies Used

**Backend:**
- PHP (Laravel Framework)
- Laravel Jetstream
- Laravel Fortify
- Eloquent ORM
- Composer

**Frontend:**
- Blade (Laravel’s templating engine)
- Bootstrap
- jQuery
- Chart.js
- Font Awesome
- Custom CSS/JS

**Database:**
- MySQL or MariaDB (configurable)
- Migrations and seeders

**Other Tools:**
- PostCSS, Tailwind CSS
- Vite
- PHPUnit

---

## Directory Structure Highlights

- `app/Models/`: Eloquent models for Book, Borrow, Category, User
- `app/Http/Controllers/`: Controllers for admin, home, and general logic
- `app/Http/Middleware/`: Middleware for route protection
- `resources/views/`: Blade templates for all user/admin interfaces
- `public/`: Static assets (CSS, JS, images, admin panel HTML)
- `database/migrations/`: Database schema definitions
- `database/seeders/`: Seed data
- `routes/web.php`: Main web routes
- `routes/api.php`: API routes

---

## Notable Features/Files

- **Admin Panel:** `public/admin/`
- **User Authentication:** `app/Actions/Fortify/`, `app/Actions/Jetstream/`
- **Book & Author Images:** `public/photos/`
- **API Token Management:** `resources/views/api/api-token-manager.blade.php`
- **Testing:** `tests/`

---

## Summary

This is a full-featured library management system built with Laravel, supporting user authentication, book and category management, borrowing system, admin dashboard, and a modern frontend using Bootstrap and Blade. It leverages Laravel’s ecosystem for security, scalability, and maintainability.

---

*If you want a more detailed breakdown of any specific feature, technology, or file, let me know!*

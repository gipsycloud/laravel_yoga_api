# Yoga API Laravel Project

This is a **Yoga Classes Management API** built with **Laravel 10**.  
It manages **users, roles, lessons, subscriptions, appointments, trainers, and testimonials**.

---

## 🛠 Features

- Role-based user system (Admin, Trainer, Student)
- Lessons & Lesson Types
- Subscriptions
- Appointments with trainers
- Trainer profiles & details
- Testimonials
- Pivot tables for relationships (lesson_user, subscription_user, lesson_trainer)

---

## 📦 Requirements

- PHP >= 8.1
- Composer
- MySQL / MariaDB
- Git

---

## 🚀 One-Click Setup

Open a terminal and run the following commands step by step:

```bash
# 1. Clone repository
git clone <https://github.com/one-project-one-month/laravel_yoga_api>
cd <PROJECT_FOLDER>

# 2. Install PHP dependencies
composer install

# 3. Copy .env and configure database
cp .env.example .env
# Open .env and update DB settings if needed

# 4. Generate Laravel application key
php artisan key:generate

# 5. Migrate database and seed default data
php artisan migrate:fresh --seed

# 6. Start development server
php artisan serve

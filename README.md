# Eloquent School (Laravel)

A comprehensive school management system built with Laravel and Eloquent ORM. Supports role-based access for admins, teachers, students, and parents with class and subject management.

## Overview
- **Authentication & Roles** - Login system with support for Admin, Teacher, Student, and Parent roles
- **Admin Dashboard** - Manage admins, classes, and subjects
- **Admin Management** - Add, edit, and delete administrators
- **Class Management** - Create and manage school classes
- **Subject Management** - Manage subjects associated with classes
- **Teacher Dashboard** - View assigned subjects
- **Student & Parent Dashboards** - Access to relevant information

## Tech Stack
- Laravel (PHP)
- MySQL (via XAMPP)
- Composer
- Bootstrap (views)

## Prerequisites
- PHP 7.3+ (XAMPP recommended)
- MySQL running (XAMPP)
- Composer installed

## Setup
1. Clone the repository:

```bash
   git clone https://github.com/Stucom-Pelai/MP0613_RA6RA7RA8_Eloquent-School.git
```

2. Install Composer dependencies:

```bash
composer install
```

3. Copy the example enviroment file:

```bash
cp .env.example .env
```

4. Generate an application key

```bash
php artisan key:generate
```

5. Create a symbolic link from 'public/storage' to 'storage/app/public'

```bash
php artisan storage:link
```

6. Clear compiled view files

```bash
php artisan view:clear
```

9. Create mp0613_school database


10. Run migrations and seed the database

```bash
php artisan migrate:fresh --seed
```

11. Start the Laravel development server 

```bash
php artisan serve
```

12. You are all set



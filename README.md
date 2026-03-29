#  My First Laravel Project

A Laravel web application with Blade templating, Tailwind CSS, Vite, and full CRUD functionality for a Post resource.

---

## 📋 Table of Contents

- [Getting Started](#getting-started)
- [Database Setup](#database-setup)
- [Environment Configuration](#environment-configuration)
- [Running the Project](#running-the-project)
- [Frontend Build Tools](#frontend-build-tools)
- [MVC — Creating Models, Controllers & Migrations](#mvc--creating-models-controllers--migrations)
- [Artisan Migration Commands](#artisan-migration-commands)
- [What's Been Built](#whats-been-built)

---

## Getting Started

### Prerequisites

- [XAMPP](https://www.apachefriends.org/) installed and running
- [Composer](https://getcomposer.org/) installed
- [Node.js & npm](https://nodejs.org/) installed
- Laravel installer: `composer global require laravel/installer`

### Laravel Project Setup

- [ ] Start XAMPP and launch **MySQL**
- [ ] Create a new database in **phpMyAdmin**
- [ ] Navigate to your projects folder:
  ```bash
  cd ~/Projects
  ```
- [ ] Create a new Laravel project:
  ```bash
  laravel new projectname
  ```
- [ ] Enter the project folder:
  ```bash
  cd projectname
  ```
- [ ] Open in VS Code:
  ```bash
  code .
  ```
- [ ] Update `.env` with your database credentials *(see [Environment Configuration](#environment-configuration))*
- [ ] Run migrations:
  ```bash
  php artisan migrate
  ```
- [ ] Start the Laravel development server:
  ```bash
  php artisan serve
  ```
- [ ] Open your browser at **http://127.0.0.1:8000**

---

## Database Setup

1. Open **XAMPP** → click **Start** next to MySQL
2. Go to [http://localhost/phpmyadmin](http://localhost/phpmyadmin)
3. Create a new database for your project, e.g. `myapp_db`

---

## Environment Configuration

Open your Laravel project's `.env` file in VS Code and update the database connection block:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=myapp_db
DB_USERNAME=root
DB_PASSWORD=
```

> **Note:** Leave `DB_PASSWORD` blank if your local MySQL has no password set (default XAMPP setup).

---

## Running the Project

Start the development server:

```bash
php artisan serve
```

Visit: [http://127.0.0.1:8000](http://127.0.0.1:8000)

---

## Frontend Build Tools

This project uses **Vite** with **Tailwind CSS** for asset management.

| Command | Description |
|---|---|
| `npx vite` | Start the Vite development server |
| `npx vite build` | Build assets for production |
| `npm run dev` | Run the dev script defined in `package.json` |

---

## MVC — Creating Models, Controllers & Migrations

To scaffold a full MVC resource (Model + Migration + Controller with resource methods):

```bash
php artisan make:model Post -mcr
```

This generates:
- `app/Models/Post.php` — the Eloquent model
- `database/migrations/xxxx_create_posts_table.php` — the migration file
- `app/Http/Controllers/PostController.php` — a resource controller with index, create, store, show, edit, update, destroy methods

---

## Artisan Migration Commands

| Command | Description |
|---|---|
| `php artisan migrate` | Run all pending migrations |
| `php artisan migrate:rollback` | Roll back the last batch of migrations |
| `php artisan migrate:refresh` | Roll back all migrations and re-run them (fresh state) |

### Targeting a Specific Migration File

Roll back a specific migration:
```bash
php artisan migrate:rollback --path=database/migrations/2026_03_28_111448_create_posts_table.php
```

Run a specific migration:
```bash
php artisan migrate --path=database/migrations/2026_03_28_111448_create_posts_table.php
```

---

## What's Been Built

- Initialized Laravel project with Vite and Tailwind CSS
- Set up web routes for home and contact pages
- Built home and contact Blade views with a shared layout including header, footer, and sidebar
- Added portfolio, company, and organisation views with their routes
- Implemented form submission with validation
- Created a `Post` model with `title` and `body` fillable fields
- Built a posts table via migration
- Implemented full CRUD for posts — index, create, edit, and delete
- Added form validation and error handling on create and edit views
- Configured PHPUnit and Pest testing framework with example tests

---

## 📺 Tutorial

This project was built following the YouTube tutorial series:
[Laravel Tutorial for Beginners](https://www.youtube.com/watch?v=Rz6SMgKrSYE&list=PL0eyrZgxdwhy7Woo2VRRDMmTXXYT_iaYO)

---

## 👤 Author

**Mogamat Yaseen Kannemeyer**  

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

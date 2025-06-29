# 🛠️ Support Ticket System Software (Laravel)

A full-featured web-based ticket management system built with Laravel. Designed to streamline issue tracking, assignment, and resolution across Admin, User, and Staff/Employee panels.

---

## 🔐 Panels & Features

### 1. 👤 User Panel
- User Registration & Login
- Generate tickets regarding issues
- View ticket status (Pending, In Progress, Closed)
- Receive email notifications on ticket updates

### 2. 🧑‍💼 Staff / Employee Panel
- View tickets assigned by Admin
- Respond to tickets with comments or resolution
- Ticket update notifications via email

### 3. 🛠️ Admin Panel
- Create/manage staff or employees
- View and track all tickets
- Assign tickets to specific staff
- Update ticket status (Pending, In Progress, Closed)
- Add internal notes or admin responses
- Monitor system via dashboard
- Email notifications for key actions

---

## 📧 Email Notifications
- Sent automatically to Users and Staff when:
  - A ticket is created
  - A ticket is assigned or updated
  - A reply is posted

---

## 📦 Tech Stack

- **Backend**: Laravel ^8.54 (PHP ^8.0)
- **Frontend**: Bootstrap 5, Blade templates
- **Database**: MySQL
- **Authentication**: Laravel Breeze / UI / Sanctum
- **Notifications**: Laravel Mail

---

## 🛠️ Setup Instructions

```bash
git clone https://github.com/your-username/support-ticket-system.git
cd support-ticket-system
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
php artisan serve


🧑‍💻 Developed By
Akshay Pandya
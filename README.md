# EduManage – Learning Management System (LMS) Backend API

## 📌 Project Overview
EduManage is an online Learning Management System (LMS) designed to simplify teaching and learning through a digital platform.  

The backend provides **RESTful APIs** that can be consumed by both:
- 📱 Mobile App (Flutter)  
- 💻 Web Application  

The system supports **role-based access control**:
- **Admins** → Manage users, courses, and categories.  
- **Instructors** → Create courses, upload lessons, add assignments, and create quizzes.  
- **Students** → Enroll in courses, learn through lessons, attempt quizzes, and submit assignments.  

### 🎯 Core Modules
- Authentication & Role Management  
- Courses & Lessons  
- Enrollments & Progress Tracking  
- Assignments & Quizzes  
- Payments & Certificates  

---

## ⚙️ Tech Stack
- **Framework**: Laravel 11 (latest)  
- **Database**: MySQL  
- **Authentication**: JWT with Role-Based Access Control  
- **Payments**: Stripe / PayPal Integration  
- **Queues**: Redis for background jobs (emails, notifications)  
- **API Responses**: Laravel API Resources / Transformers  
- **Database Setup**: Migrations, Seeders, Factories  
- **Testing**: PHPUnit + Factories  

---

## 🚀 Installation & Setup

### 1️⃣ Clone the Repository
```bash
git clone https://github.com/your-username/edumanage-backend.git
cd edumanage-backend

```bash
composer install
cp .env.example .env

```bash
APP_NAME=EduManage
APP_ENV=local
APP_KEY=
APP_DEBUG=true
APP_URL=http://localhost:8000

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=edumanage
DB_USERNAME=root
DB_PASSWORD=

QUEUE_CONNECTION=redis

JWT_SECRET=your_jwt_secret
STRIPE_KEY=your_stripe_key
STRIPE_SECRET=your_stripe_secret
PAYPAL_CLIENT_ID=your_paypal_client_id
PAYPAL_SECRET=your_paypal_secret

```bash
php artisan key:generate
php artisan jwt:secret
php artisan migrate --seed
php artisan serve
API will be available at → http://127.0.0.1:8000/api

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
```
### 2️⃣ Install Dependencies
```bash
composer install
cp .env.example .env
```
#### Update .env file:
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
```
### 3️⃣ Generate Keys
```bash
php artisan key:generate
php artisan jwt:secret
php artisan migrate --seed
php artisan serve
API will be available at → http://127.0.0.1:8000/api
```

### 📚 API Endpoints
#### 🔐 Authentication

##### POST /api/register → User Registration
##### POST /api/verify-otp → Verify OTP
##### POST /api/login → Login
##### POST /api/forgot-password → Request OTP
##### POST /api/reset-password → Reset Password

#### 👤 User Profile

##### GET /api/profile → Get Profile
##### PUT /api/profile → Update Profile

#### 📂 Course & Category Management

##### POST /api/categories → Create Category (Admin only)
##### GET /api/categories → List Categories
##### POST /api/courses → Create Course (Instructor only)
##### GET /api/courses → List Courses (with filters)
##### GET /api/courses/{id} → Course Details
##### PUT /api/courses/{id} → Update Course
##### DELETE /api/courses/{id} → Delete Course

#### 🎥 Lessons

##### POST /api/courses/{id}/lessons → Add Lesson
##### GET /api/courses/{id}/lessons → List Lessons
##### PUT /api/lessons/{id} → Update Lesson
##### DELETE /api/lessons/{id} → Delete Lesson

#### 🎓 Enrollment & Progress

##### POST /api/courses/{id}/enroll → Enroll in Course
##### GET /api/my-enrollments → My Enrollments
##### POST /api/lessons/{id}/complete → Mark Lesson Complete
##### GET /api/courses/{id}/progress → Track Progress
##### POST /api/courses/{id}/reviews → Add Review

#### 📝 Assignments & Quizzes

##### POST /api/lessons/{id}/assignments → Create Assignment
##### POST /api/assignments/{id}/submit → Submit Assignment
##### PUT /api/submissions/{id}/grade → Grade Assignment
##### POST /api/lessons/{id}/quizzes → Create Quiz
##### POST /api/quizzes/{id}/questions → Add Questions to Quiz
##### POST /api/quizzes/{id}/attempt → Attempt Quiz
##### GET /api/quizzes/{id}/results → View Quiz Results

#### 💳 Payments & Certificates

##### POST /api/checkout → Checkout
##### POST /api/payment/webhook → Payment Webhook
##### GET /api/courses/{id}/certificate → Download Certificate

#### 🛠️ Admin APIs

##### Manage Users (list, update, block/unblock)
##### Manage Courses & Categories
##### View Platform Analytics (total users, revenue, top courses)

---
👉 This is a **ready-to-use README.md file** for your project.  
Do you also want me to **add sample API request/response examples (JSON format)** in the README for each module? That would make it recruiter/developer-friendly.

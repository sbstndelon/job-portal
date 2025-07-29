# Simple Job Application Portal

A lightweight Laravel-based web application where job seekers can apply to posted jobs and administrators can manage job postings and view applicants.

---

## 🔧 Setup Instructions

### Requirements:
- PHP >= 8.1
- Composer
- Node.js and npm
- MySQL or compatible database
- Mailtrap or Gmail SMTP (for email notifications)

### Steps:

1. **Clone the Repository**
   
   git clone https://github.com/your-username/job-application-portal.git
   cd job-application-portal

2. **Install PHP Dependencies**

   composer install

3. **Install Node and Compile Assets**

    npm install
    npm run build

4. **Copy .env file and configure**

    cp .env.example .env
    php artisan key:generate

5. **Run Migrations**

    php artisan migrate

6. **Run Laravel Development Server**

    php artisan serve

### Features

    - View Jobs list
    - View Applications list
    - Apply Selected Job
    - Receive job application email notification
    - Post and add new job

📦 Deployment

    Hosted on Railway.app

    Live URL: job-portal-production-1a80.up.railway.app

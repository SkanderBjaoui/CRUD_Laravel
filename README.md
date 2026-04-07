# Student Management System

A simple Laravel CRUD application for managing students and their class assignments.

## Features

- **Create** new students and assign them to classes
- **Read** view all students in a list or individual student details
- **Update** student information and class assignments
- **Delete** students from the system
- **Class Management** predefined school classes for student assignment

## Setup Instructions

1. **Install Dependencies**
   ```bash
   composer install
   npm install
   ```

2. **Environment Setup**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

3. **Database Setup**
   ```bash
   php artisan migrate
   php artisan db:seed --class=SchoolClassSeeder
   ```

4. **Start Development Server**
   ```bash
   php artisan serve
   ```

5. **Build Assets** (optional)
   ```bash
   npm run dev
   ```

## Usage

Visit `http://localhost:8000` in your browser to access the student management system.

## Available Routes

- `GET /` - Redirects to students list
- `GET /students` - List all students
- `GET /students/create` - Show form to create new student
- `POST /students` - Store new student
- `GET /students/{id}` - Show student details
- `GET /students/{id}/edit` - Show form to edit student
- `PUT/PATCH /students/{id}` - Update student
- `DELETE /students/{id}` - Delete student

## Database Schema

### Students Table
- `id` - Primary key
- `first_name` - Student's first name
- `last_name` - Student's last name
- `email` - Unique email address
- `date_of_birth` - Optional date of birth
- `school_class_id` - Foreign key to school_classes
- `created_at`, `updated_at` - Timestamps

### School Classes Table
- `id` - Primary key
- `name` - Unique class name
- `grade_level` - Grade level (e.g., "9th Grade")
- `description` - Optional class description
- `created_at`, `updated_at` - Timestamps

## Technologies Used

- **Laravel 12** - PHP Framework
- **Tailwind CSS** - CSS Framework (via CDN)
- **SQLite** - Database (default Laravel setup)

## License

This project is open-sourced software licensed under the MIT license.

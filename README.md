# Schneider Electric Logistics Platform

## Overview
The **Schneider Electric Logistics Platform** is a comprehensive, efficient, and robust web application designed to manage, streamline, and track logistics operations. Built on the powerful [Laravel](https://laravel.com/) framework, this platform ensures scalable and high-performance solutions tailored to handle modern logistics challenges.

## Key Features
- **Booking Management:** Easily create, track, and manage logistics bookings and schedules.
- **Scalable Data Handling:** Transitioned to **MongoDB** for flexible, highly scalable, and performant database management, allowing the system to handle large volumes of logistics data effortlessly.
- **Secure Authentication:** Robust user authentication and role-based access controls.
- **Document & File Handling:** Integrated features for processing, uploading, and managing logistics-related files.
- **Responsive Interface:** An intuitive, user-friendly interface designed with Laravel Blade.

## Technology Stack
- **Backend Framework:** Laravel (PHP)
- **Database:** MongoDB (using the `mongodb/laravel-mongodb` package)
- **Frontend:** Blade Templates, HTML5, CSS3
- **Environment:** Compatible with local development using XAMPP/WAMP or Docker, with custom PowerShell scripts for easy MongoDB setup.

## Getting Started

### Prerequisites
Ensure you have the following installed on your local machine:
- PHP (>= 8.2 recommended)
- Composer
- MongoDB Server
- Git

### Installation Guide

1. **Clone the repository**
   ```bash
   git clone https://github.com/HarshChauhan04/Schneider-electric-logistics.git
   cd Schneider-electric-logistics
   ```

2. **Install Dependencies**
   ```bash
   composer install
   ```

3. **Configure the Environment**
   Copy the example environment file to create your own `.env` file:
   ```bash
   cp .env.example .env
   ```
   *Note: Update your `.env` file to use MongoDB by setting `DB_CONNECTION=mongodb`, and configuring your `DB_DSN` and `DB_DATABASE` accordingly.*

4. **Generate Application Key**
   ```bash
   php artisan key:generate
   ```

5. **Start the Local Development Server**
   ```bash
   php artisan serve
   ```
   You can now access the application by visiting `http://localhost:8000` in your web browser.

## Contributing
Thank you for considering contributing to the Schneider Electric Logistics Platform! All active development and pull requests should be targeted at the `main` branch.

## License
This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

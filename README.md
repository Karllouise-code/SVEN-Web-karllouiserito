# Pet Appointment Booking System

A modern web application for booking pet grooming appointments, built with Laravel, GraphQL, and Vue.js. This application allows users to schedule grooming appointments for their pets with a clean, responsive interface following modern UX design principles.

## 🐾 Features

- **Responsive Design**: Desktop and mobile-optimized interface
- **Appointment Booking**: Complete form for scheduling pet grooming services
- **Real-time Validation**: Client and server-side validation
- **Smooth Navigation**: Scroll-to-section functionality
- **Modern UI**: Clean design with animations and transitions
- **Database Integration**: Secure data storage for appointments
- **GraphQL API**: Efficient data fetching with Rebing GraphQL

## 🛠️ Tech Stack

- **Backend**: Laravel (PHP Framework)
- **Frontend**: Vue.js with Vite
- **API**: GraphQL (Rebing GraphQL)
- **Database**: MySQL
- **HTTP Client**: Axios
- **Styling**: SCSS (Sass)
- **Version Control**: Git

## 📋 Requirements

Before setting up the application, ensure you have the following installed:

- PHP >= 8.1
- Composer
- Node.js >= 16.x
- NPM or Yarn
- MySQL/MariaDB
- XAMPP/WAMP/MAMP (recommended for local development)

## 🚀 Installation & Setup

Follow these steps to set up the application locally:

### 1. Clone the Repository
```bash
git clone https://github.com/yourusername/SVEN-Web-yourfirstnamelastname.git
cd SVEN-Web-yourfirstnamelastname
```

### 2. Install Dependencies
```bash
# Install PHP dependencies
composer install

# Install Node.js dependencies
npm install
```

### 3. Environment Configuration
```bash
# Copy environment file
cp .env.example .env

# Generate application key
php artisan key:generate
```

### 4. Database Setup
1. Start your local server (XAMPP/WAMP/MAMP)
2. Create a new MySQL database (e.g., `pet_booking`)
3. Update your `.env` file with database credentials:
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=pet_booking
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

### 5. Database Migration
```bash
# Run database migrations
php artisan migrate
```

### 6. Start Development Servers
```bash
# Start Laravel development server (in one terminal)
php artisan serve

# Start Vite development server (in another terminal)
npm run dev
```

### 7. Access the Application
Open your browser and navigate to: `http://localhost:8000` (or the port shown by `php artisan serve`)

## 🎯 User Story

**As a user, I want to set a grooming appointment for my pet so that I can include my pet's grooming into my personal schedule.**

## ✅ Functional Requirements Met

- ✅ Complete appointment form with validation
- ✅ Database storage for appointments
- ✅ Date validation (current/future dates only)
- ✅ Required field validation (all fields except Notes)
- ✅ Responsive design for desktop and mobile
- ✅ Smooth scroll navigation
- ✅ Error and success message handling
- ✅ Security measures implemented

## 🔒 Security Features

- CSRF Protection
- Input validation and sanitization
- SQL injection prevention through Eloquent ORM
- XSS protection
- Environment variable protection

## 📱 User Interface Features

### Hero Section
- Smooth scroll to "About Us" section on click
- "Schedule a Visit" button and text scroll to appointment form
- Responsive navigation

### About Us Section
- "Schedule a Visit" button scrolls to appointment form

### Appointment Form Section
- Logo click scrolls to top of page
- Real-time form validation
- Success/error message display
- Responsive form layout

## 🏗️ Project Structure

```
├── app/
│   ├── GraphQL/           # GraphQL resolvers and types
│   ├── Models/            # Eloquent models
│   └── Http/Controllers/  # Laravel controllers
├── database/
│   └── migrations/        # Database migrations
├── resources/
│   ├── js/               # Vue.js components and logic
│   ├── css/              # Stylesheets
│   └── views/            # Blade templates
├── routes/
│   └── web.php           # Web routes
└── public/               # Public assets
```

## 🚨 Troubleshooting

### Common Issues:

1. **Database Connection Error**
   - Ensure MySQL is running
   - Verify database credentials in `.env`
   - Check if database exists

2. **Composer/NPM Dependencies**
   - Run `composer install` if vendor folder is missing
   - Run `npm install` if node_modules folder is missing

3. **Application Key Missing**
   - Run `php artisan key:generate`

4. **Permission Issues**
   - Ensure proper file permissions for storage and bootstrap/cache directories

## 🔄 Development Workflow

1. Make changes to your code
2. Test functionality locally
3. Commit changes with descriptive messages
4. Push to your repository

## 📝 Notes

- The application uses GraphQL for efficient data fetching
- Vue.js components handle the frontend interactions
- Laravel handles backend logic and database operations
- Responsive design adapts to both desktop and mobile devices

## 🤝 Contributing

1. Fork the repository
2. Create a feature branch
3. Make your changes
4. Test thoroughly
5. Submit a pull request

## 📄 License

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

---

**Built with ❤️ for pet lovers everywhere** 🐕🐱
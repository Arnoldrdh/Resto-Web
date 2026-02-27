<img src="public/result/Result web.png">

## About NK FOOD

NK Food is a comprehensive restaurant management system built with Laravel, enabling customers to browse menus and make reservations while providing administrators with full operational control. The project was developed during an 8-hour live coding competition, where it secured 2nd place for its execution, structure, and functionality under tight time constraints.

## Features

### Customer Features
- **Menu Browsing**: View categorized food and drink menus with images and descriptions
- **Online Reservations**: Book tables with date, time, and party size
- **User Authentication**: Register and login system for customers
- **Responsive Design**: Mobile-friendly interface

### Admin Features
- **Menu Management**: Add, edit, and delete menu items with image uploads
- **Reservation Management**: View and manage customer reservations
- **User Role Management**: Admin and customer role separation
- **Dashboard**: Administrative interface for restaurant operations

## Tech Stack

- **Backend**: Laravel 12.0 (PHP 8.2+)
- **Frontend**: Blade Templates with Tailwind CSS 4.0
- **Database**: MySQL
- **Build Tools**: Vite 6.2.4
- **Development**: Laravel Debugbar, Laravel Sail

## Database Schema

### Tables
- **users**: Customer and admin accounts with role-based access
- **menus**: Restaurant menu items (food/drink categories)
- **reservations**: Customer table reservations linked to users

## Project Structure

```
├── app/
│   ├── Http/Controllers/
│   │   ├── AuthController.php      # User authentication
│   │   ├── MenuController.php      # Menu management
│   │   └── ReservationController.php # Reservation handling
│   └── Models/
│       ├── User.php               # User model with roles
│       ├── Menu.php               # Menu items model
│       └── Reservation.php        # Reservations model
├── database/
│   ├── migrations/               # Database schema
│   └── seeders/                 # Database seeders
├── resources/
│   ├── views/
│   │   ├── admin/               # Admin panel views
│   │   ├── layouts/             # Layout templates
│   │   └── *.blade.php          # Customer views
│   └── css/                     # Tailwind CSS
└── public/
    ├── images/                  # Uploaded menu images
    └── result/                  # Project screenshots
```

## Routes

### Public Routes
- `/` - Homepage
- `/login` - User login
- `/register` - User registration
- `/menus` - Browse menu items
- `/reservation` - Make reservations

### Admin Routes (Protected)
- `/admin/menus` - Manage menu items
- `/admin/menus/create` - Add new menu items
- `/admin/menus/edit/{id}` - Edit menu items
- `/admin/reservation` - View reservations

## Usage

### For Customers
1. Register or login to your account
2. Browse the menu to see available food and drinks
3. Make a reservation by selecting date, time, and party size
4. View your reservation confirmations

### For Administrators
1. Login with admin credentials
2. Access the admin panel to manage menus
3. Add new menu items with images and descriptions
4. View and manage customer reservations
5. Update or delete existing menu items


## Support

For support and questions, please contact the NK Food development team.

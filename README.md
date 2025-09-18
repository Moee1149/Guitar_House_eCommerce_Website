# 🎸 Guitar House - eCommerce Platform

A comprehensive web-based eCommerce platform designed specifically for guitar sales and music instrument retail. This full-stack application provides a complete online shopping experience with dedicated interfaces for both customers and administrators.

## 📖 About The Project

Guitar House is a specialized eCommerce website built for guitar retailers and music stores. The platform enables businesses to showcase their guitar inventory, manage customer orders, and provide a seamless online shopping experience for musicians and guitar enthusiasts.

### Core Functionality

**Customer Experience:**
- Browse and search guitar catalog with detailed product information
- User registration and authentication system
- Shopping cart functionality with quantity management
- Secure checkout process with multiple payment options
- Order tracking and purchase history
- User profile management and dashboard

**Administrative Features:**
- Comprehensive admin dashboard with sales analytics
- Complete product management system (CRUD operations)
- Customer account management and oversight
- Order processing and status updates
- User management with role-based access control
- Store profile and branding customization
- Sales reporting and business intelligence tools

**Payment Integration:**
- eSewa payment gateway integration for secure transactions
- Order confirmation and receipt generation
- Payment status tracking and management

## 🛠 Technology Stack

### Backend Technologies
- **PHP 8.2** - Server-side scripting and business logic
- **MySQL 9.4** - Relational database for data persistence
- **Apache Web Server** - HTTP server with mod_rewrite enabled
- **Custom MVC Architecture** - Organized code structure with separate controllers, models, and views

### Frontend Technologies
- **HTML5** - Modern markup structure
- **CSS3** - Styling and responsive design
- **JavaScript** - Client-side interactivity and dynamic content
- **Responsive Design** - Mobile-friendly user interface

### Development & Deployment
- **Docker & Docker Compose** - Containerized development and deployment
- **phpMyAdmin** - Database administration interface
- **Git** - Version control system

### Architecture Pattern
- **Model-View-Controller (MVC)** - Clean separation of concerns
- **Custom Routing System** - SEO-friendly URL structure
- **Session Management** - Secure user authentication and authorization
- **File Upload Handling** - Product image management system

## 🗂 Project Structure

```
Guitar_House_eCommerce_Website/
├── app/
│   ├── controllers/     # Business logic controllers
│   │   ├── PublicController.php
│   │   ├── AuthController.php
│   │   ├── CustomerController.php
│   │   └── AdminController.php
│   ├── models/         # Data models and database interactions
│   ├── views/          # HTML templates and user interfaces
│   └── core/           # Core application files
│       └── connection.php
├── public/             # Public assets
│   ├── css/           # Stylesheets
│   ├── js/            # JavaScript files
│   └── images/        # Static images and uploads
├── docker-compose.yml  # Docker container orchestration
├── Dockerfile         # Docker container configuration
├── guitar_house_db.sql # Database schema and sample data
└── index.php          # Application entry point and router
```

## 🎯 Key Features

### Security Features
- **Role-based Access Control** - Separate customer and admin interfaces
- **Session Management** - Secure user authentication
- **Input Validation** - Protection against common web vulnerabilities
- **Secure File Uploads** - Safe handling of product images

### Database Design
- **Normalized Schema** - Efficient data organization
- **Relational Integrity** - Foreign key constraints and data consistency
- **Optimized Queries** - Performance-focused database interactions

### User Experience
- **Intuitive Navigation** - Easy-to-use interface for all user types
- **Responsive Design** - Works seamlessly across devices
- **Fast Loading** - Optimized for performance
- **Error Handling** - Graceful error management and user feedback

## 🏪 Business Logic

### Customer Workflow
1. **Product Discovery** - Browse guitar catalog with filtering and search
2. **Account Management** - Registration and profile management
3. **Shopping Cart** - Add/remove items with quantity control
4. **Checkout Process** - Order review and shipping information
5. **Payment Processing** - Secure payment via eSewa gateway
6. **Order Tracking** - Post-purchase order status and history

### Admin Workflow
1. **Dashboard Overview** - Sales metrics and key performance indicators
2. **Inventory Management** - Add, edit, and remove guitar products
3. **Order Processing** - Review and update order statuses
4. **Customer Service** - Manage customer accounts and inquiries
5. **Business Analytics** - Generate reports and insights
6. **Store Management** - Update store information and settings

## 🔧 Technical Implementation

### Custom Routing System
The application uses a custom PHP router that handles URL patterns and directs requests to appropriate controllers, providing clean URLs and RESTful endpoints.

### Database Integration
Utilizes PDO (PHP Data Objects) for secure database connections with prepared statements to prevent SQL injection attacks.

### File Management
Implements secure file upload functionality for product images with proper validation and storage organization.

### Payment Gateway
Integrated eSewa payment processing for secure online transactions with proper error handling and confirmation workflows.

---

**Guitar House** - *Bringing Quality Guitars to Musicians Worldwide* 🎸

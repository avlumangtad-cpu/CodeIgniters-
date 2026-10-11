# CodeIgniter POS System

## IT0049 — Technical Formative Assessment 2
**From Arrays to a Real Database**

### Project Description

This project is a Point-of-Sale (POS) web application developed using CodeIgniter 4, PHP, and MySQL.

The application was initially developed using static PHP arrays during TFA1. For TFA2, the Customer Accounts and User Accounts pages were upgraded to retrieve records from a MySQL database using CodeIgniter Models and Query Builder methods.

### Technologies Used

- PHP
- CodeIgniter 4
- MySQL
- XAMPP
- phpMyAdmin
- HTML and CSS
- Git and GitHub

### Application Features

- Home page
- About page
- Customer Accounts page
- User Accounts page
- Database-backed customer records
- Database-backed user records
- Data retrieval using CodeIgniter Models and `findAll()`

### Database Structure

**Database Name:** `codeigniter_pos`

**Customers Table**

| Column | Data Type |
|---|---|
| id | INT, Primary Key, Auto Increment |
| full_name | VARCHAR(100), NOT NULL |
| email | VARCHAR(100), NOT NULL |
| phone | VARCHAR(20) |
| created_at | DATETIME, NOT NULL |

**Users Table**

| Column | Data Type |
|---|---|
| id | INT, Primary Key, Auto Increment |
| username | VARCHAR(50), NOT NULL, UNIQUE |
| full_name | VARCHAR(100), NOT NULL |
| created_at | DATETIME, NOT NULL |

Each table contains five sample records.

### Installation and Setup

1. Install XAMPP, Composer, and PHP dependencies.
2. Clone or download this repository.
3. Place the project inside the XAMPP `htdocs` directory.
4. Start Apache and MySQL from XAMPP.
5. Open phpMyAdmin at `http://localhost/phpmyadmin/`.
6. Create a database named `codeigniter_pos`.
7. Import `database_export/codeigniter_pos.sql`.
8. Open the project in Visual Studio Code.
9. Run `composer install` in the project directory.
10. Copy `env` to `.env` if a local `.env` file does not already exist.
11. Configure the `.env` file with the appropriate local database credentials.

Example local configuration:

```ini
CI_ENVIRONMENT = development

app.baseURL = 'http://localhost/CodeIgniters-/public/'

database.default.hostname = localhost
database.default.database = codeigniter_pos
database.default.username = root
database.default.password =
database.default.DBDriver = MySQLi
database.default.port = 3306
```

The example assumes the default XAMPP MySQL configuration with no root password.

### Running the Application

Start Apache and MySQL, then open:

**Home Page:**  
http://localhost/CodeIgniters-/public/

**Customer Accounts:**  
http://localhost/CodeIgniters-/public/customers

**User Accounts:**  
http://localhost/CodeIgniters-/public/users

### CodeIgniter MVC Structure

**Models**
- `app/Models/CustomerModel.php`
- `app/Models/UserModel.php`

**Controllers**
- `app/Controllers/Customers.php`
- `app/Controllers/Users.php`

**Views**
- `app/Views/customers/index.php`
- `app/Views/users/index.php`

The Models retrieve records from the database using `findAll()`. The Controllers pass these records to their respective Views, which display them in HTML tables.

### Database Export

The SQL database export is included at:

`database_export/codeigniter_pos.sql`

This file contains the database tables and sample records required to reproduce the application.

### Notes

This project was developed for IT0049 — Web System Technologies as part of Technical Formative Assessment 2.

The application demonstrates the transition from static PHP arrays to database-backed data retrieval using CodeIgniter 4 and MySQL.

#-------------------------
# TFA3 - Uploaded Avatars
#-------------------------
/public/uploads/avatars/*
!/public/uploads/avatars/.gitkeep

#-------------------------
# Local and Hosting Backup Files
#-------------------------
.htaccess.local-back.txt
hosting-htaccess.txt

#-------------------------
# Temporary Security Test Files
#-------------------------
/security-test/
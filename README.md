# MagiQ School – Smart Student Manager

MagiQ School is a lightweight, modern student registration and management system designed for schools, academies, and private institutions. It allows administrators to easily add, view, and manage student data through a clean, Bootstrap-based user interface.

It uses:
HTML/CSS/Bootstrap for the frontend

PHP and MySQL for the backend and database

JavaScript for form validation

🎯 Main Features:
📋 Student Registration Form – Enter student details like name, ID, date of birth, contact info, etc.

📑 Student List Page – See all registered students in a list

🔍 Student Profile Page – Click on a student to view their full profile

🧾 Form Validation – Live input checks for data quality

🗃️ Data Storage – All data saved to a local MySQL database

🛠️ Developer Contact & Footer Section – For easy feedback and support

🖥️ How to Run the Project Locally
🔧 Step 1: Install XAMPP
Go to https://www.apachefriends.org

Download XAMPP for Windows/Linux/Mac depending on your system

Install XAMPP

Open the XAMPP Control Panel

Start Apache (for PHP)

Start MySQL (for database)

 Using WAMP to Run Your Student Management System (MagiQ School)
💡 What is WAMP?
WAMP = Windows, Apache, MySQL, PHP
It is a local web development environment just like XAMPP, but built specifically for Windows.

🛠️ Step-by-Step Installation Guide for WAMP
✅ Step 1: Install WAMP
Download WAMP from the official website:
👉 https://www.wampserver.com/en/

Choose the correct version for your system (64-bit or 32-bit).

Run the installer and follow all prompts.

After installation:

Start WAMPServer

Wait for the green icon in the system tray (bottom right) — it means all services (Apache & MySQL) are running.

📁 Step 2: Project Setup
1.Place your project folder (e.g., magiq_school) inside this directory:

makefile
Copy
Edit
C:\xampp\htdocs\

Your structure should look like:

pgsql
Copy
Edit
C:\xampp\htdocs\magiq_school\
├── index.html
├── admin.php
├── info.php
├── submit.php
├── db.php
├── css.css
├── js.js
└── assets\

 Step 3: Create MySQL Database
Go to http://localhost/phpmyadmin

Click "New" and create a database named:

nginx
Copy
Edit
magiq_school
Inside the new database, run this SQL to create the student table:

sql : 

CREATE TABLE magiq_School (

  id INT AUTO_INCREMENT PRIMARY KEY,

  firstName VARCHAR(50),
  
  lastName VARCHAR(50),
  
  dob DATE,
  
  gender VARCHAR(10),
  
  email VARCHAR(100),
  
  phone VARCHAR(20),
  
  address VARCHAR(255),
  
  idcard VARCHAR(30),
  
  grade VARCHAR(20),
  
  startDate DATE,
  
  nationality VARCHAR(50)
  
);

🧷 Step 4: Configure db.php
submit.php file to match your local XAMPP MySQL credentials:

php
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "magiq_school";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
⚠️ XAMPP default: username = root, password = '' (empty string)

🚀 Step 5: Run the Project
Open your browser and visit:

arduino
http://localhost/magiq_school/index.html
Use the registration form to add students.

Visit:

arduino
http://localhost/magiq_school/admin.php
To view the student list and open any student profile.

📌 Extra: Deployment Tips
To make your system work online:

You’ll need to upload your files to a web server with PHP & MySQL support.

Use tools like cPanel, FileZilla, or Netlify (for frontend only).

Export your local DB (phpMyAdmin → Export) and import it on your host.





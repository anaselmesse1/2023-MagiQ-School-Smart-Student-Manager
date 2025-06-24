# 🎓 MagiQ School – Smart Student Manager

**MagiQ School** is a lightweight and modern student registration and management system designed for **schools, academies**, and **private institutions**. It allows administrators to easily register, view, and manage student data via a clean, Bootstrap-based interface.

---

## 💻 Built With

- 🌐 **HTML/CSS/Bootstrap** – For the responsive user interface
- ⚙️ **PHP & MySQL** – Backend processing and database integration
- 🧠 **JavaScript** – Real-time form validation

---

## 🎯 Features

- 📋 **Student Registration Form** – Input fields for full name, date of birth, contact info, ID, nationality, etc.
- 📑 **Student List Page** – Displays all registered students
- 🔍 **Student Profile View** – Click to view full details per student
- 🧾 **Live Form Validation** – Validates inputs for accuracy and completeness
- 🗃️ **MySQL Data Storage** – Persistent data handling using a local database
- 📬 **Footer with Contact Info** – Allows feedback or feature requests

---

## 🖥️ How to Run the Project Locally

### Option 1: Using XAMPP (Windows/Linux/Mac)

1. 🔧 **Install XAMPP**
   - Download from: [https://www.apachefriends.org](https://www.apachefriends.org)
   - Install and open the XAMPP Control Panel
   - Start **Apache** and **MySQL**

2. 📁 **Project Setup**
   - Place your project folder (e.g., `magiq_school`) inside:
     ```
     C:\xampp\htdocs\magiq_school\
     ```
     Your structure should look like:
     ```
     magiq_school/
     ├── index.html
     ├── admin.php
     ├── info.php
     ├── submit.php
     ├── db.php
     ├── css.css
     ├── js.js
     └── assets/
     ```

3. 🛠️ **Create the MySQL Database**
   - Go to: [http://localhost/phpmyadmin](http://localhost/phpmyadmin)
   - Create a new database called:
     ```
     magiq_school
     ```
   - Run the following SQL to create the student table:
     ```sql
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
     ```

4. ⚙️ **Configure the Database Connection** (`db.php`):
   ```php
   <?php
   $servername = "localhost";
   $username = "root";
   $password = "";
   $dbname = "magiq_school";

   $conn = new mysqli($servername, $username, $password, $dbname);

   if ($conn->connect_error) {
       die("Connection failed: " . $conn->connect_error);
   }
   ?>
   ```
   > 🔒 *Default XAMPP credentials: user = `root`, password = `''` (empty)*

5. 🚀 **Run the Application**
   - Open browser and go to:
     - [http://localhost/magiq_school/index.html](http://localhost/magiq_school/index.html)
     - [http://localhost/magiq_school/admin.php](http://localhost/magiq_school/admin.php)

---

### Option 2: Using WAMP (Windows only)

1. 🔧 **Install WAMP**
   - Download from: [https://www.wampserver.com/en/](https://www.wampserver.com/en/)
   - Choose the correct version (32/64-bit), run installer
   - Start WAMP → wait for **green icon** in system tray

2. 📁 **Place Project Folder**
   - Copy `magiq_school` to:
     ```
     C:\wamp64\www\
     ```

3. Proceed with steps 3–5 above (database + configuration)

---

## 🌐 Deployment Tips

Want to publish your project online?

- Upload files to a PHP-enabled web server using **FileZilla**, **cPanel**, or another FTP tool
- Export your local DB from phpMyAdmin → Import it online
- Update database credentials on the remote server

---

## 📩 Contact

For feedback, bugs, or collaboration:

- 📬 Email: [anaselmessoual@gmail.com](mailto:anaselmessoual@gmail.com)
- 📞 Phone: [+212 6374-21688](tel:+212637421688)

---

> 🔓 **This project is open source**. Feel free to explore, contribute, or modify!

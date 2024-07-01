School Attendance System
This is a web-based application for managing student attendance. The system allows administrators to add students, mark attendance, and view attendance records. The project is built using PHP, MySQL, HTML, CSS, and JavaScript.

Features
Manage Students: Add, view, and update student records.
Manage Attendance: Mark and view attendance records.
Responsive Design: The application is responsive and works on both desktop and mobile devices.
Image Slider: The homepage features an image slider showcasing educational themes.
Requirements
XAMPP: Ensure XAMPP is installed and running (Apache and MySQL).
Git: To clone the repository.
Installation
Clone the repository:

sh
Copy code
git clone https://github.com/Asad-Iqbal407/school-attendance-system.git
Move to the project directory:

sh
Copy code
cd school-attendance-system
Move the project to your XAMPP htdocs directory:

sh
Copy code
mv school-attendance-system /path-to-xampp/htdocs/
Start Apache and MySQL from the XAMPP Control Panel.

Create the Database:

Open phpMyAdmin by navigating to http://localhost/phpmyadmin.
Create a new database named school_attendance.
Import the sql/database.sql file to create the required tables.
Configuration
Ensure the database connection is correctly configured in config/db.php:

php
Copy code
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "school_attendance";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
Usage
Access the application:

Open your browser and navigate to http://localhost/school-attendance-system/public/index.php.
Add Students:

Navigate to Add Student and fill in the form to add new students.
Mark Attendance:

Navigate to Attendance and select a student to mark their attendance.
View Attendance:

Navigate to View Attendance to see all attendance records.
Project Structure
arduino
Copy code
school-attendance-system/
├── assets/
│   ├── css/
│   │   └── styles.css
│   ├── images/
│   │   ├── logo.jfif
│   │   ├── image.png
│   │   ├── image2.png
│   │   ├── image3.png
│   ├── js/
│   │   └── scripts.js
├── config/
│   └── db.php
├── public/
│   ├── index.php
│   ├── login.php
│   ├── attendance.php
│   ├── add_student.php
│   ├── view_attendance.php
│   ├── save_student.php
│   ├── mark_attendance.php
│   ├── register_user.php
│   ├── registration.php
│   ├── login_process.php
├── includes/
│   ├── header.php
│   ├── footer.php
├── sql/
│   └── database.sql
└── README.md
License
This project is licensed under the MIT License. See the LICENSE file for details.

# AWS PHP MySQL WebApp
This is a simple PHP web application hosted on AWS EC2 using Terraform for infrastructure setup and MySQL for data storage.

## Features
- Terraform to launch EC2 instance
- Apache + PHP hosted web app
- MySQL database connection
- Manual deployment on AWS Free Tier

## Project Structure
- `form.html` – Frontend form
- `index.php` – Backend logic
- `terraform/` – Terraform configuration files

## Deployment Steps
1. Launch EC2 using Terraform
2. Install Apache, PHP, and MySQL
3. Upload project files
4. Access the web app via EC2 public IP
# AWS-PHP-MySQL-WebApp
Simple PHP + MySQL form application hosted on AWS EC2 (Free Tier)


1. AWS EC2 Instance Setup

   Screenshot: EC2 Dashboard showing your running Ubuntu instance.
   Caption: “Launched Ubuntu EC2 instance on AWS for deploying a PHP-MySQL web application.”

2. Apache & PHP Installation

   Screenshot: Terminal showing successful Apache and PHP installation.
   Example output:

   sudo apt update
   sudo apt install apache2 php libapache2-mod-php -y


   Caption: “Installed Apache web server and PHP runtime on EC2.”

3. MySQL Installation and Database Setup

   Screenshot: Terminal after running:

   sudo apt install mysql-server -y
   sudo mysql -u root -p


   and

   CREATE DATABASE vinay;
   CREATE USER 'vinayuser'@'localhost' IDENTIFIED BY 'Vinay@123';
   GRANT ALL PRIVILEGES ON vinay.* TO 'vinayuser'@'localhost';
   FLUSH PRIVILEGES;


   Caption: “Configured MySQL database and user for web application.”

4. Table Creation

   Screenshot: MySQL terminal showing:

   USE vinay;
   SHOW TABLES;
   DESCRIBE candidates;


   Caption: “Created ‘candidates’ table in MySQL database.”

5. Uploading Project Files

   Screenshot: Command line showing index.php file placed in /var/www/html/.
   Example:

   sudo nano /var/www/html/index.php


   Caption: “Deployed PHP application into Apache web root directory.”

6. Web Application Home Page

   Screenshot: Browser showing the form (before entering data).
   Caption: “Candidate registration form hosted on AWS EC2 public IP.”

7. Filled Form Before Submission

   Screenshot: Same page after filling in all details.
   Caption: “Form filled with candidate details before submission.”

8. Submission Success Message

   Screenshot: Success message after submitting form (“Data submitted successfully”).
   Caption: “Form data successfully inserted into MySQL database.”

9. MySQL Data Verification

   Screenshot: MySQL terminal showing:

   SELECT * FROM candidates;


   Caption: “Verified that submitted data is stored in database.”

10. Security Group Configuration (Optional but Impressive)

    Screenshot: EC2 Security Group showing inbound rules for ports:

    22 (SSH)

    80 (HTTP)

    3306 (optional for MySQL remote access)

    Caption: “Configured security group to allow HTTP and SSH access.”

11. Apache Service Restart

    Screenshot: Terminal after running:

    sudo systemctl restart apache2
    sudo systemctl status apache2


    Caption: “Restarted Apache web server to apply changes.”

12. Git Repository (Local or Remote)

     Screenshot: GitHub repository showing README and project files.
     Caption: “Uploaded project and documentation to GitHub.”

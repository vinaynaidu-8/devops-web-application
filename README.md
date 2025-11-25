## 1. Requirements (Before Starting) ##  
- Ubuntu OS (local machine) → to run Terraform & connect via SSH

- AWS Free Tier Account → to host EC2 instance

- Terraform → to provision EC2 instance automatically

- GitHub Account → to store project code & documentation

- SSH Key Pair (.pem) → to connect securely to EC2

- Apache Web Server → to host the PHP web app

- PHP 8 → to run backend code

- MySQL Server → to store submitted form data

- Browser → to access the final hosted application
## 2. Project Architecture ##  
<img width="1536" height="630" alt="A simple rectangular" src="https://github.com/user-attachments/assets/d514792a-f03f-488f-a5c9-e578727c91a4" />

## 3. Step-by-Step Implementation ##  
- Step 1: Write Terraform Code to Launch EC2

  - Created the following files:  
main.tf  
variables.tf  
outputs.tf  


  - Terraform EC2 Setup includes:

- Step 2: Launch EC2 Instance Using Terraform
  
  <img width="1919" height="1016" alt="Screenshot 2025-10-22 130308" src="https://github.com/user-attachments/assets/f2b56a13-b6c6-4064-8f91-7a8e02b48c19" />

- Step 3: Connect to EC2 via SSH
  
  <img width="1919" height="922" alt="Screenshot 2025-10-22 130739" src="https://github.com/user-attachments/assets/854e77ef-287b-4782-9ff6-4fcaff529d15" />

- Step 4: Install Apache, PHP, MySQL on EC2 
  - sudo apt update
  - sudo apt install apache2 -y
  - sudo apt install php php-mysql libapache2-mod-php -y
  - sudo apt install mysql-server -y
  - sudo systemctl restart apache2


- Step 5: Create MySQL Database & Table


- Step 6: Deploy Web Application

- Step 7: Access Application in Browser  

  - Web Form before submitting  
    ![during](https://github.com/user-attachments/assets/2b4e0e68-eb24-431b-829d-83ba766e99f5)

  - Web Form After Submitting  
    ![submit](https://github.com/user-attachments/assets/0959bd69-d4c8-401e-9977-f1f51b09a884)

  - MySQL Table Output
    <img width="1911" height="958" alt="Screenshot 2025-10-22 131211" src="https://github.com/user-attachments/assets/5bdc6e59-1e23-4529-834c-acf58c19fefe" />



## 5. Conclusion ## 
  - This project successfully showcases a complete cloud deployment cycle—from launching infrastructure using Terraform to configuring an Apache–PHP–MySQL stack on     Ubuntu EC2 and deploying a real web application.

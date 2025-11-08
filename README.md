# 🩸 BloodConnect

**BloodConnect** is a web-based Blood Donation Management System built using **PHP** and **MySQL**.  
It allows users to register as donors, request blood, and manage donor data through a simple and efficient web interface.

---

## 🚀 Features

- 🧑‍🤝‍🧑 **Donor Registration:** Add new donors with their details like name, blood group, and contact info.  
- ❤️ **Request Blood:** Patients or hospitals can request blood by specifying type and quantity.  
- 🗂️ **Manage Data:** Store and retrieve donor/request data securely using MySQL.  
- ⚙️ **Dynamic Web Interface:** Built using PHP, HTML, CSS, and MySQL for seamless database interaction.  

---

## 🏗️ Project Structure
---

## 🧰 Technologies Used

| Technology | Description |
|-------------|-------------|
| **PHP** | Backend scripting |
| **MySQL** | Database management |
| **HTML/CSS** | Frontend UI |
| **XAMPP / MAMP** | Local development environment |

---

## ⚙️ Setup Instructions

Follow these steps to run the project locally:

1. **Install XAMPP or MAMP**
   - [Download XAMPP](https://www.apachefriends.org/download.html)
   - or [Download MAMP](https://www.mamp.info/en/downloads/)

2. **Move the project folder**
   - Copy the folder `blooddonation` into:
     - For XAMPP: `htdocs/`
     - For MAMP: `htdocs/`

3. **Start the servers**
   - Open the XAMPP/MAMP control panel.
   - Start **Apache** and **MySQL**.

4. **Create a database**
   - Go to [http://localhost/phpmyadmin](http://localhost/phpmyadmin)
   - Create a new database named:
     ```
     blood_donation
     ```
   - Import your SQL file (if available).

5. **Configure database connection**
   - Open `config.php`
   - Update credentials if needed:
     ```php
     $servername = "localhost";
     $username = "root";
     $password = "";
     $dbname = "blood_donation";
     ```

6. **Run the project**
   - Open your browser and go to:
     ```
     http://localhost/blooddonation/INDEX.php
     ```

---

## 📸 Screenshots (Optional)

You can add screenshots like this:
```markdown
![Home Page](screenshots/home.png)
![Register Donor](screenshots/register.png)
![Request Blood](screenshots/request.png)

---

Would you like me to **add screenshot placeholders** automatically in your GitHub README (so it looks more visual when viewed on GitHub)?  
I can format it perfectly for that too.

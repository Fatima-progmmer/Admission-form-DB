### 📌 **README.md**
```md
# 🎓 Admission Form Database System

This project is a **student admission form** system that collects user data via an HTML form and saves it to a **SQL Server (MSSQL) database**. It includes a frontend **HTML form**, **PHP backend**, and a **SQL script** for database setup.

---

## 📂 **Project Structure**
```
Admission-form-DB/
│── index.html         # Frontend Admission Form
│── Addmission form.css # Styling for the form
│── save_data.php      # PHP script to store form data in the database
│── admission_db.sql       # SQL script to create the database
│── README.md          # Project documentation
```

---

## 🚀 **Features**
✅ User-friendly admission form  
✅ Saves user data in a **MSSQL database**  
✅ Validations for required fields  
✅ Responsive design using CSS  
✅ Secure database operations  

---

## ⚙️ **Setup Instructions**

### 🛠 **1. Clone the Repository**
```sh
git clone https://github.com/Fatima-progmmer/Admission-form-DB.git
cd Admission-form-DB
```

### 📦 **2. Configure Database**
1. Open **SQL Server Management Studio (SSMS)**  
2. Run the `database.sql` script to create the database  

```sql
CREATE DATABASE admission_db;
USE admission_db;
CREATE TABLE admissions (
    id INT IDENTITY(1,1) PRIMARY KEY,
    name NVARCHAR(100) NOT NULL,
    father_name NVARCHAR(100) NOT NULL,
    cnic NVARCHAR(20) NOT NULL UNIQUE,
    age INT NOT NULL,
    address NVARCHAR(255) NOT NULL,
    email NVARCHAR(100) NOT NULL UNIQUE,
    phone NVARCHAR(20) NOT NULL,
    gender NVARCHAR(10) NOT NULL CHECK (gender IN ('Male', 'Female', 'Other')),
    dob DATE NOT NULL,
    matric_marks INT NOT NULL,
    inter_marks INT NOT NULL,
    inter_roll_no NVARCHAR(50) NOT NULL UNIQUE,
    college_name NVARCHAR(255) NOT NULL,
    subject NVARCHAR(100) NOT NULL,
    program NVARCHAR(10) NOT NULL CHECK (program IN ('IT', 'CS', 'DS', 'SE')),
    submission_date DATETIME DEFAULT GETDATE()
);
```

### 🖥 **3. Setup XAMPP & PHP**
1. Install **[XAMPP](https://www.apachefriends.org/download.html)**  
2. Start **Apache** and **MySQL**  
3. Place `save_data.php` in the `htdocs` folder  
4. Update **database credentials** in `save_data.php`  
   ```php
   $servername = "localhost";  
   $username = "root";  
   $password = "";  
   $database = "admission_db";  
   ```

### 🌐 **4. Run the Application**
- Open **`http://localhost/index.html`** in the browser  
- Fill out the form and click **Submit**  
- Check your SQL Server database for the stored data  

---

## 📝 **Usage**
1. **Fill out the form** with personal and academic details  
2. **Submit the form** to save the data in the database  
3. **Admin can retrieve and manage admissions** via SQL queries  

---

## 🛠 **Technologies Used**
- **Frontend**: HTML, CSS  
- **Backend**: PHP  
- **Database**: SQL Server (MSSQL)  

---

## 📌 **Contributing**
Feel free to contribute! Fork the repository, make changes, and create a pull request.

---

## 📧 **Contact**
👩‍💻 Developed by **Tanzeela Fatima**  
📬 Email: [codequeen765@gmail.com](mailto:codequeen765@gmail.com)  
🔗 LinkedIn: [Tanzeela Fatima](https://www.linkedin.com/in/tanzeela-fatima-47861b2b7/)  
🔗 GitHub: [Fatima-progmmer](https://github.com/Fatima-progmmer)  

---

## ⭐ **Support**
If you like this project, please ⭐ star the repository!
```

---

### ✅ **How to Add This to GitHub**
1. **Create the README file**  
   ```sh
   echo "# Admission Form Database System" > README.md
   ```
2. **Open and Paste the Above Content**  
3. **Commit & Push to GitHub**  
   ```sh
   git add README.md
   git commit -m "Added project documentation"
   git push origin main
   ```

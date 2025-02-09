-- Step 1: Create the database
CREATE DATABASE admission_db;
GO
USE admission_db;
GO

-- Step 2: Create the admissions table
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
GO



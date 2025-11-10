- EXP1
    - notes
        - Examples
            - Online Bookstore Management System
            - College Management System
            - Hospital Management System
            - Event Management System
            - Library Management System
        - Notes
            
            # 🧩 **1. Entity**
            
            An **entity** is any *real-world object, person, place, event, or concept* that can be identified and has data stored about it.
            
            ✅ **Example:**
            
            - Student, Teacher, Book, Department, Hospital.
            
            📘 **Representation in ER Diagram:**
            
            - **Rectangle** box.
            
            ---
            
            # 🧠 **2. Relationship**
            
            A **relationship** shows how two or more entities are **connected or associated** with each other.
            
            ✅ **Example:**
            
            - A *Student* **enrolls in** a *Course*.
            - A *Doctor* **treats* a *Patient*.
            
            📘 **Representation in ER Diagram:**
            
            - **Diamond** shape connecting entities.
            
            ---
            
            # 🏷️ **3. Attribute**
            
            An **attribute** is a property or characteristic of an entity or relationship.
            
            ✅ **Example (for Student entity):**
            
            - Name, Roll_No, Email, DOB.
            
            📘 **Representation in ER Diagram:**
            
            - **Oval (ellipse)** connected to the entity.
            
            ---
            
            # 📄 **4. Database Schema**
            
            A **database schema** is the **blueprint** or **logical structure** of the database.
            
            It defines:
            
            - Tables
            - Columns
            - Data types
            - Relationships
            - Constraints
            
            ✅ Example:
            
            ```sql
            CREATE TABLE Student (
              Student_ID INT PRIMARY KEY,
              Name VARCHAR(100),
              Email VARCHAR(100)
            );
            
            ```
            
            ---
            
            # 🔑 **5. Keys**
            
            Keys are attributes that help identify data **uniquely** or establish **relationships** between tables.
            
            ---
            
            ## 🔹 **Primary Key**
            
            A **primary key** uniquely identifies each record in a table.
            
            ✅ Example:
            
            - `Student_ID` in the `Student` table.
            
            🧠 Rules:
            
            - Cannot be NULL.
            - Must be unique.
            
            ---
            
            ## 🔹 **Foreign Key**
            
            A **foreign key** is a field in one table that **links to the primary key** of another table.
            
            ✅ Example:
            
            - `Dept_ID` in `Faculty` table refers to `Dept_ID` in `Department`.
            
            ---
            
            ## 🔹 **Composite Key**
            
            When **two or more attributes together** form a unique identifier.
            
            ✅ Example:
            
            - In *Enrollment(Student_ID, Course_ID)*, both form the composite key.
            
            ---
            
            ## 🔹 **Multivalued Attribute**
            
            An attribute that can have **multiple values** for a single entity.
            
            ✅ Example:
            
            - A person can have multiple phone numbers.
            
            📘 **Representation:** Double oval in ER diagram.
            
            ---
            
            ## 🔹 **Derived Attribute**
            
            An attribute whose value is **calculated** or **derived** from another attribute.
            
            ✅ Example:
            
            - *Age* derived from *Date_of_Birth*.
            
            📘 **Representation:** Dashed oval.
            
            ---
            
            ## 🔹 **Unique Key**
            
            A unique key ensures all values in a column are **different**, but unlike a primary key, it **can accept NULL** values.
            
            ✅ Example:
            
            - Email in Student table.
            
            ---
            
            # 🧱 **6. Weak Entity**
            
            A **weak entity** depends on another entity (called the **owner entity**) for its identification.
            
            It **cannot exist without** the parent entity.
            
            ✅ Example:
            
            - *Dependent* is a weak entity of *Employee* (Dependent exists only if Employee exists).
            
            📘 **Representation:** Double rectangle.
            
            ---
            
            # 🔗 **7. Associative Entity**
            
            An **associative entity** (or bridge entity) is used to represent a **many-to-many** relationship by converting it into two one-to-many relationships.
            
            ✅ Example:
            
            - `Enrollment` between `Student` and `Course`.
            
            📘 Representation: Rectangle with diamond inside.
            
            ---
            
            # 🧬 **8. Supertype / Subtype (Inheritance)**
            
            Used for **Specialization** and **Generalization** in ER modeling.
            
            - **Supertype:** The main/general entity (e.g., *Employee*).
            - **Subtype:** Specialized entities (e.g., *Manager*, *Engineer*).
            
            📘 **Representation:** Triangle (ISA hierarchy).
            
            ---
            
            # 🔁 **9. Unary Relationship (Recursive Relationship)**
            
            When an **entity is related to itself**.
            
            ✅ Example:
            
            - *Employee* supervises another *Employee*.
            
            📘 Representation: Entity connected to itself with a diamond.
            
            ---
            
            # 📘 **10. Identifying Relationship**
            
            A relationship that **connects a weak entity** to its **owning entity**.
            
            The primary key of the weak entity includes the primary key of the strong entity.
            
            ✅ Example:
            
            - *Dependent* identified by *(Employee_ID, Dependent_Name)*.
            
            📘 Representation: Double diamond.
            
            ---
            
            # ⚖️ **11. Constraints**
            
            Rules applied to maintain **data integrity**.
            
            ✅ Types:
            
            - **NOT NULL** – value cannot be null.
            - **UNIQUE** – no duplicate values.
            - **PRIMARY KEY** – unique + not null.
            - **FOREIGN KEY** – referential integrity.
            - **CHECK** – limits the value range.
            - **DEFAULT** – assigns default value.
            
            ---
            
            # 🔢 **12. Cardinality (Mapping Constraints)**
            
            It defines **how many instances** of one entity can be associated with another.
            
            | --- | --- | --- |
            
            📘 **Representation in ER Diagram:** Numbers or notations like (0,1), (1,N), etc.
            
            ### **Min & Max Cardinality**
            
            - **Minimum** → Optional participation (0 means optional, 1 means mandatory)
            - **Maximum** → Number of allowed instances (1, N)
            
            ✅ Example:
            
            - A student *(1, N)* enrolls in courses *(1, 1)* — each course must have at least one student.
            
            ---
            
            # 🔽 **13. Specialization**
            
            **Top-down** approach:
            
            - Divides an entity into **subclasses** based on some distinguishing characteristics.
            
            ✅ Example:
            
            - *Employee* specialized into *Full-Time* and *Part-Time* employees.
            
            ---
            
            # 🔼 **14. Generalization**
            
            **Bottom-up** approach:
            
            - Combines similar entities into one **superclass**.
            
            ✅ Example:
            
            - *Car* and *Truck* generalized as *Vehicle*.
            
            ---
            
            # 🧮 **15. Normalization**
            
            It is a **process of organizing data** to remove **redundancy** and **improve consistency**.
            
            | --- | --- | --- |
            
            ✅ Final goal: **3NF or BCNF** for efficient design.
            
            ---
            
            # 🔗 **16. Relationship Types Summary**
            
            | --- | --- | --- |
            
        - Some relationship
            
            ![image.png](attachment:baf12d81-deb1-490d-8cf6-904561e159ad:image.png)
            
            ![image.png](attachment:9fb71365-43ac-49a8-8dce-59ebb793f7c4:image.png)
            
            ![image.png](attachment:d3574372-4e57-4962-844c-868fc5fd6ac9:image.png)
            
        - Some terminology
            
            ## 🧩 1️⃣ What is a **Relationship Attribute**
            
            A **relationship attribute** is an **attribute that belongs to a relationship**, not to any single entity.
            
            👉 Example:
            
            In a college database:
            
            - Entities: **STUDENT** and **COURSE**
            - Relationship: **ENROLLS**
            
            If you store **“Date_of_Enrollment”** or **“Grade”**, those belong to the *relationship* (ENROLLS), not to STUDENT or COURSE alone — because they make sense only *together*.
            
            ```mermaid
            erDiagram
                STUDENT {
                    int student_id
                    string name
                }
                COURSE {
                    int course_id
                    string course_name
                }
                ENROLLS {
                    date date_of_enrollment
                    string grade
                }
                STUDENT ||--o{ ENROLLS : enrolls_in
                COURSE ||--o{ ENROLLS : includes
            
            ```
            
            🔹 `date_of_enrollment` and `grade` are **relationship attributes**.
            
            ---
            
            ## 🧱 2️⃣ What is a **Bridge Entity** (also called **Associative Entity** or **Bridge Table**)
            
            When you have a **many-to-many (M:N)** relationship (e.g., Students ↔ Courses), you can’t represent it directly in a relational database.
            
            So, you **break it** into two **1-to-M** relationships using a **bridge (associative) entity**.
            
            👉 Example:
            
            - STUDENT can take many COURSES.
            - COURSE can have many STUDENTS.
            
            ```mermaid
            erDiagram
                STUDENT ||--o{ ENROLLMENT : enrolls
                COURSE ||--o{ ENROLLMENT : offered_in
            
            ```
            
            🧩 The **bridge entity (ENROLLMENT)** holds:
            
            - Foreign keys from STUDENT and COURSE
            - Relationship attributes like `Grade`, `Date_of_Enrollment`
            
            That’s why it’s also called a **bridge** or **junction table** in SQL.
            
            ---
            
            ## 💠 3️⃣ What is a **Double-Edge Diamond**
            
            A **double-edged diamond** (double-border diamond) in an ERD represents a **strong identifying relationship** — usually linked to a **weak entity**.
            
            - **Weak Entity** cannot exist without a strong entity.
            - The **double-edged diamond** shows that the weak entity’s existence **depends** on the parent entity.
            
            👉 Example:
            
            - **Department** has **Courses**
            - **CourseSection** (weak entity) cannot exist without **Course**
            
            ```mermaid
            erDiagram
                COURSE ||--|| COURSE_SECTION : "Identifying Relationship"
            
            ```
            
            In standard ERD notation:
            
            - A **normal diamond** = regular relationship
            - A **double-edged diamond** = **identifying relationship** (used with weak entities)
            
            ---
            
            ## 🟦 4️⃣ What is a **Double-Edged Rectangle**
            
            A **double-border rectangle** represents a **weak entity**.
            
            👉 Example:
            
            If **Dependent** depends on **Employee**, then:
            
            - **Employee** = strong entity (single rectangle)
            - **Dependent** = weak entity (double rectangle)
            
            ```mermaid
            erDiagram
                EMPLOYEE ||--|| DEPENDENT : "has dependent"
            
            ```
            
            🧠 Key Idea:
            
            - Weak Entity → double rectangle
            - Identifying Relationship → double diamond
            
            They **always appear together**.
            
            ---
            
            ## Summary Table
            
            | --- | --- | --- | --- |
            
        - Notations to Remember
            
            ![1000291295.jpg](attachment:46987470-2461-4850-9399-dbfa3f67042b:1000291295.jpg)
            
- EXP2
    - Programs
        - Practical 2(MYSQL)
            - ORACLE ALTERNATIVE
            
            ```sql
            -- Create database
            CREATE DATABASE PRACTICAL2;
            USE PRACTICAL2;
            
            -- Create Students table
            CREATE TABLE students (
                student_id INT AUTO_INCREMENT PRIMARY KEY,
                first_name VARCHAR(100) NOT NULL,
                last_name VARCHAR(100),
                email_id VARCHAR(100) UNIQUE,
                birth_date DATE
            );
            
            -- Create Courses table
            CREATE TABLE courses (
                course_id INT AUTO_INCREMENT PRIMARY KEY,
                course_name VARCHAR(100) NOT NULL,
                credits INT CHECK (credits BETWEEN 1 AND 10)
            );
            
            -- Create Enrollments table
            CREATE TABLE enrollments (
                enrollment_id INT AUTO_INCREMENT PRIMARY KEY,
                student_id INT,
                course_id INT,
                enrollment_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
                grade CHAR(1) CHECK (grade IN ('A', 'B', 'C', 'D', 'E', 'F'))
            );
            
            -- Add Foreign Keys
            ALTER TABLE enrollments
                ADD CONSTRAINT fk_student
                    FOREIGN KEY (student_id) REFERENCES students(student_id)
                    ON DELETE CASCADE,
                ADD CONSTRAINT fk_course
                    FOREIGN KEY (course_id) REFERENCES courses(course_id)
                    ON DELETE CASCADE;
            
            -- Create Index on email_id for faster lookup
            CREATE INDEX idx_email ON students(email_id);
            
            -- Create a view combining student, enrollment, and course info
            CREATE VIEW student_enrollment AS
            SELECT s.first_name, s.last_name, c.course_id, e.grade
            FROM students s
            JOIN enrollments e ON s.student_id = e.student_id
            JOIN courses c ON c.course_id = e.course_id;
            
            -- Insert sample records
            INSERT INTO students (first_name, last_name, email_id, birth_date)
            VALUES 
            ('Alice', 'Walker', 'alice@example.com', '2001-05-21'),
            ('Bob', 'Smith', 'bobsmith@example.com', '2002-12-25');
            
            INSERT INTO courses (course_name, credits)
            VALUES 
            ('DBMS', 4),
            ('CNS', 5);
            
            INSERT INTO enrollments (student_id, course_id, grade)
            VALUES 
            (1, 1, 'A'),
            (2, 2, 'B');
            
            -- Display data
            SELECT * FROM students;
            SELECT * FROM courses;
            SELECT * FROM enrollments;
            SELECT * FROM student_enrollment;
            
            -- Update data
            UPDATE enrollments SET grade = 'A' WHERE enrollment_id = 2;
            
            -- Delete data (will cascade delete from enrollments too)
            DELETE FROM students WHERE student_id = 2;
            
            -- Aggregation and filtering examples
            SELECT course_id, COUNT(*) AS total_enrolled FROM enrollments GROUP BY course_id;
            SELECT * FROM students WHERE email_id LIKE '%@example.com';
            
            -- UNION example
            SELECT email_id FROM students
            UNION
            SELECT 'guest@example.com';
            
            ```
            
        - ACTIVITY 1
            
            ### **Problem Statement 1:**
            
            Write a SQL statement to create a table **`job_history`** including the columns:
            
            - `employee_id`
            - `start_date`
            - `end_date`
            - `job_id`
            - `department_id`
            
            **Constraints & Requirements:**
            
            - The `employee_id` column must not contain any duplicate values at the time of insertion.
            - The `job_id` column must be a foreign key referencing the `jobs` table, ensuring that only existing `job_id` values from the `jobs` table can be inserted.
            
            **Structure of the `jobs` table:**
            
            | --- | --- | --- | --- | --- | --- |
            
            ```sql
            -- Step 1: Create the parent table 'jobs'
            CREATE TABLE jobs (
                job_id VARCHAR(10) PRIMARY KEY,
                job_title VARCHAR(35) NOT NULL,
                min_salary DECIMAL(6,0),
                max_salary DECIMAL(6,0)
            );
            
            -- Step 2: Insert sample data into 'jobs'
            INSERT INTO jobs VALUES
            ('J101', 'Software Engineer', 30000, 80000),
            ('J102', 'Data Analyst', 25000, 60000),
            ('J103', 'HR Executive', 20000, 40000);
            
            -- Step 3: Create 'job_history' table
            CREATE TABLE job_history (
                employee_id INT PRIMARY KEY,
                start_date DATE,
                end_date DATE,
                job_id VARCHAR(10),
                department_id INT,
                FOREIGN KEY (job_id) REFERENCES jobs(job_id)
            );
            
            ```
            
            ---
            
        - activity 2
            
            ### **Problem Statement 2:**
            
            Write a SQL statement to create a table **`employees`** including the columns:
            
            - `employee_id`
            - `first_name`
            - `last_name`
            - `job_id`
            - `salary`
            
            **Constraints & Requirements:**
            
            - The `employee_id` column must not contain duplicate values (it should be unique or a primary key).
            - The `job_id` column must be a foreign key referencing the `job_id` column of the `jobs` table.
            - The foreign key must enforce **referential integrity** using:
            - The table must use the **InnoDB** storage engine.
            - solution
        - activity 3
            
            ### **Problem Statement 3:**
            
            Consider the following schema for a **Library Database**:
            
            ```
            BOOK (Book_id, Title, Publisher_Name, Pub_Year)
            BOOK_AUTHORS (Book_id, Author_Name)
            PUBLISHER (Name, Address, Phone)
            BOOK_COPIES (Book_id, Branch_id, No_of_Copies)
            BOOK_LENDING (Book_id, Branch_id, Card_No, Date_Out, Due_Date)
            LIBRARY_BRANCH (Branch_id, Branch_Name, Address)
            
            ```
            
            Write SQL queries to perform the following operations:
            
            1. **Retrieve details of all books in the library**, including:
            2. **Get the details of borrowers** who have borrowed **more than 3 books**, but only during the period **from January 2017 to June 2017**.
            3. **Delete a book** from the `BOOK` table and update all related tables (`BOOK_AUTHORS`, `BOOK_COPIES`, `BOOK_LENDING`, etc.) to reflect this change appropriately.
            4. **Partition the `BOOK` table** based on the **year of publication (`Pub_Year`)** and demonstrate the working of partitioning with a simple SQL query.
            5. **Create a view** showing all books along with the **number of copies currently available** in the library across all branches.
            - Solution
    - IMP LINKS
        1. [SQL QUERIES](https://drive.google.com/file/d/1OzxmxNH8UmIZupgkiRAaQcdJA65VB9gm/view)
        2. [Practical 2](https://drive.google.com/file/d/1mSVsdSw26Ilm7wm1rT9ncq7FA5O9ly7s/view)
        3. [SQL COMMANDS FULL EXAMPLES](https://drive.google.com/file/d/12xGE2aZASIek7j0Z0SFC--14T8SHWtkS/view)
        4. 
    - notes
        - 📘 **Table, View, Index, Sequence, Synonym, and Constraints.**
            
            # 🧩 SQL OBJECTS — DETAILED NOTES
            
            ---
            
            ## 1️⃣ **TABLE**
            
            ### 🔹 Definition:
            
            A **table** is the **basic storage structure** in a relational database.
            
            It organizes data in **rows (tuples)** and **columns (attributes)** — similar to a spreadsheet.
            
            Each table represents a specific entity (e.g., *STUDENT*, *COURSE*, *EMPLOYEE*, etc.), and each row in the table corresponds to one record of that entity.
            
            ---
            
            ### 🔹 Structure Example:
            
            | --- | --- | --- | --- |
            
            ---
            
            ### 🔹 SQL Syntax:
            
            ```sql
            CREATE TABLE employees (
              emp_id INT PRIMARY KEY,
              emp_name VARCHAR(50) NOT NULL,
              job_id VARCHAR(10),
              salary DECIMAL(8,2)
            );
            
            ```
            
            ---
            
            ### 🔹 Key Points:
            
            - Each column has a **datatype** (e.g., `INT`, `VARCHAR`, `DATE`).
            - Tables can have **constraints** to maintain data integrity.
            - Tables can be linked to other tables using **foreign keys**.
            - Use `DESCRIBE table_name;` to view structure.
            - Use `DROP TABLE table_name;` to delete the table.
            
            ---
            
            ### 🔹 Commands Related to Tables:
            
            | --- | --- |
            
            ---
            
            ## 2️⃣ **VIEW**
            
            ### 🔹 Definition:
            
            A **view** is a **virtual table** based on the result of a SQL query.
            
            It doesn’t store data physically; instead, it displays data from one or more tables dynamically.
            
            You can think of a **view as a saved SELECT query**.
            
            ---
            
            ### 🔹 Example:
            
            ```sql
            CREATE VIEW emp_view AS
            SELECT e.emp_id, e.emp_name, j.job_title, e.salary
            FROM employees e
            JOIN jobs j ON e.job_id = j.job_id;
            
            ```
            
            Now you can query:
            
            ```sql
            SELECT * FROM emp_view;
            
            ```
            
            ---
            
            ### 🔹 Types of Views:
            
            | --- | --- |
            
            ---
            
            ### 🔹 Advantages:
            
            - **Security:** Restrict access to sensitive columns.
            - **Simplification:** Hide complex joins.
            - **Consistency:** Ensure uniform presentation of data.
            - **Reusability:** Query reuse without re-writing joins.
            
            ---
            
            ### 🔹 Example Use Case:
            
            ```sql
            CREATE VIEW high_salary_emps AS
            SELECT emp_name, salary FROM employees WHERE salary > 70000;
            
            ```
            
            ---
            
            ## 3️⃣ **INDEX**
            
            ### 🔹 Definition:
            
            An **index** is a **database object** that improves the **speed of data retrieval** operations on a table.
            
            It acts like an **index in a book** — helping the database find data quickly without scanning the entire table.
            
            ---
            
            ### 🔹 Syntax:
            
            ```sql
            CREATE INDEX idx_emp_name ON employees(emp_name);
            
            ```
            
            ---
            
            ### 🔹 Types of Index:
            
            | --- | --- |
            
            ---
            
            ### 🔹 Example:
            
            ```sql
            CREATE UNIQUE INDEX idx_emp_id ON employees(emp_id);
            CREATE INDEX idx_job_salary ON employees(job_id, salary);
            
            ```
            
            ---
            
            ### 🔹 Advantages:
            
            - **Speeds up SELECT queries**
            - **Improves performance** on search/filter operations (`WHERE`, `JOIN`, `ORDER BY`)
            - Reduces CPU time during query execution.
            
            ---
            
            ### 🔹 Disadvantages:
            
            - Slows down `INSERT`, `UPDATE`, `DELETE` operations (because index must be updated)
            - Requires additional **disk space**
            
            ---
            
            ### 🔹 Commands:
            
            | --- | --- |
            
            ---
            
            ## 4️⃣ **SEQUENCE**
            
            ### 🔹 Definition:
            
            A **sequence** is an object that generates a **series of unique numbers**, often used for **auto-incrementing primary keys**.
            
            It is independent of any table and can be reused for multiple tables.
            
            ---
            
            ### 🔹 Syntax (MySQL 8+):
            
            ```sql
            CREATE SEQUENCE emp_seq
            START WITH 1
            INCREMENT BY 1
            MINVALUE 1
            MAXVALUE 9999
            CACHE 10;
            
            ```
            
            Then use it:
            
            ```sql
            INSERT INTO employees (emp_id, emp_name, job_id, salary)
            VALUES (NEXT VALUE FOR emp_seq, 'Alice', 'J102', 55000);
            
            ```
            
            ---
            
            ### 🔹 Key Features:
            
            - Automatically generates **unique numeric values**
            - You can set start, increment, min, and max values
            - **No duplicates**
            - Commonly used in Oracle, PostgreSQL, and MySQL 8+
            
            ---
            
            ### 🔹 Related Commands:
            
            | --- | --- |
            
            ---
            
            ### 🔹 Example Use Case:
            
            To generate employee IDs automatically:
            
            ```sql
            INSERT INTO employees VALUES (NEXT VALUE FOR emp_seq, 'Bob', 'J103', 60000);
            
            ```
            
            ---
            
            ## 5️⃣ **SYNONYM**
            
            ### 🔹 Definition:
            
            A **synonym** is an **alias** or **alternative name** for another database object (like a table, view, or sequence).
            
            It helps simplify access — especially when object names are long or located in another schema.
            
            ---
            
            ### 🔹 Syntax (Supported in Oracle; simulated in MySQL via views):
            
            ```sql
            CREATE SYNONYM emp FOR employees;
            
            ```
            
            Now you can write:
            
            ```sql
            SELECT * FROM emp;
            
            ```
            
            instead of
            
            ```sql
            SELECT * FROM employees;
            
            ```
            
            ---
            
            ### 🔹 In MySQL Alternative:
            
            MySQL doesn’t support `CREATE SYNONYM`, but you can use a **view** to achieve the same effect:
            
            ```sql
            CREATE VIEW emp AS SELECT * FROM employees;
            
            ```
            
            ---
            
            ### 🔹 Advantages:
            
            - **Simplifies queries** with shorter names
            - **Improves portability** if the base object changes location
            - **Provides abstraction layer** for database design
            
            ---
            
            ## 6️⃣ **CONSTRAINTS**
            
            ### 🔹 Definition:
            
            Constraints are **rules applied to table columns** to maintain the **accuracy, integrity, and reliability** of data in the database.
            
            They prevent invalid data entry and enforce business logic at the database level.
            
            ---
            
            ### 🔹 Types of Constraints:
            
            | --- | --- | --- |
            
            ---
            
            ### 🔹 Example:
            
            ```sql
            CREATE TABLE employees (
              emp_id INT PRIMARY KEY,
              emp_name VARCHAR(50) NOT NULL,
              job_id VARCHAR(10),
              salary DECIMAL(8,2) CHECK (salary > 0),
              department_id INT DEFAULT 10,
              FOREIGN KEY (job_id) REFERENCES jobs(job_id)
            );
            
            ```
            
            ---
            
            ### 🔹 Purpose of Constraints:
            
            - Maintain **data integrity**
            - Prevent **inconsistent or duplicate** entries
            - Enforce **relationships** between tables
            - Simplify **error checking**
            
            ---
            
            # 🧾 **Summary Table**
            
            | --- | --- | --- | --- |
            
        - **Database, DBMS, RDBMS, SQL, various RDBMS systems (CUBRID, Firebird, MariaDB, MySQL, PostgreSQL, SQLite)**, and then **key relational concepts** like rows, columns, redundancy, keys, referential integrity, and SQL commands.
            
            ## 🌐 1️⃣ DATABASE
            
            ### **Definition**
            
            A **Database** is an organized collection of data stored and accessed electronically.
            
            It stores data in a **structured format** to make it easy to **retrieve, insert, update, and delete** efficiently.
            
            ### **Example**
            
            - College database: Stores student, teacher, course, and result information.
            - Banking database: Customer accounts, transactions, etc.
            
            ### **Characteristics**
            
            - Data is **integrated** (all related info together).
            - Data is **shared** among multiple users.
            - **Reduced redundancy** (less repetition of data).
            - **Data consistency** is maintained.
            
            ---
            
            ## 💻 2️⃣ DBMS (Database Management System)
            
            ### **Definition**
            
            A **DBMS** is **software** used to create, store, organize, and manage databases.
            
            It acts as a **bridge between the user and the database**.
            
            ### **Functions of DBMS**
            
            1. Data storage, retrieval, and update.
            2. User access control (security).
            3. Backup and recovery.
            4. Data integrity and consistency.
            5. Concurrency control (multiple users access simultaneously).
            
            ### **Examples**
            
            - Microsoft Access
            - dBASE
            - FoxPro
            
            ### **Limitations**
            
            - Single-user systems.
            - Not highly secure or scalable for large data.
            - Redundancy and inconsistency may occur.
            
            ---
            
            ## 🧩 3️⃣ RDBMS (Relational Database Management System)
            
            ### **Definition**
            
            An **RDBMS** stores data in the form of **tables (relations)** consisting of **rows and columns**.
            
            Each table represents an entity (like Student, Course) and relations are established using **keys**.
            
            ### **Features**
            
            - Data is stored in **relations (tables)**.
            - Supports **SQL** for operations.
            - **Primary and Foreign keys** maintain **relationships**.
            - Enforces **Referential Integrity**.
            - **Eliminates redundancy** using normalization.
            
            ### **Examples**
            
            - **MySQL**
            - **PostgreSQL**
            - **MariaDB**
            - **Oracle Database**
            - **Microsoft SQL Server**
            - **SQLite**
            
            ---
            
            ## 🧠 4️⃣ SQL (Structured Query Language)
            
            ### **Definition**
            
            **SQL** is a **standard language** used to communicate with RDBMS for performing CRUD operations:
            
            - **C**reate
            - **R**ead
            - **U**pdate
            - **D**elete
            
            ### **Main Categories of SQL Commands**
            
            | --- | --- | --- |
            
            ---
            
            ## 🧱 5️⃣ VARIOUS RDBMS SYSTEMS
            
            ### **1. MySQL**
            
            - **Open-source**, most popular RDBMS.
            - Developed by **Oracle Corporation**.
            - Supports large-scale applications (e.g., YouTube, Facebook).
            - Uses **SQL**.
            - Platform independent, multi-user, supports triggers, views, indexing.
            
            ### 🔹 MySQL Commands Example
            
            ```sql
            CREATE DATABASE college;
            USE college;
            
            CREATE TABLE student (
              id INT AUTO_INCREMENT PRIMARY KEY,
              name VARCHAR(100),
              email VARCHAR(100)
            );
            
            INSERT INTO student (name, email) VALUES ('Amit', 'amit@gmail.com');
            SELECT * FROM student;
            
            ```
            
            ---
            
            ### **2. PostgreSQL**
            
            - **Advanced open-source RDBMS**.
            - Known for **ACID compliance** and **object-relational** features.
            - Supports **JSON, triggers, stored procedures**, and **concurrency control**.
            - Often used in **data analytics, enterprise, AI**.
            
            ---
            
            ### **3. MariaDB**
            
            - Fork of MySQL created by its original developers after Oracle acquired MySQL.
            - 100% **MySQL compatible**.
            - Better **security and performance**.
            - Open-source and community-driven.
            
            ---
            
            ### **4. SQLite**
            
            - **Serverless**, lightweight database stored in a **single file**.
            - Commonly used in **mobile apps**, browsers, and embedded systems.
            - Doesn’t need installation or server connection.
            - Ideal for small-scale projects.
            
            ---
            
            ### **5. Firebird**
            
            - **Lightweight, open-source** RDBMS.
            - Supports **stored procedures, triggers, transactions**.
            - Used in embedded and small enterprise systems.
            
            ---
            
            ### **6. CUBRID**
            
            - Open-source **object-relational DBMS**.
            - Supports **multi-threading** and **web applications**.
            - Ideal for large web-based projects.
            - High performance and scalability.
            
            ---
            
            ## 📊 6️⃣ CONCEPTS IN RDBMS
            
            ### **Row**
            
            - Also called a **record** or **tuple**.
            - Represents a **single entity instance**.
            
            ### **Column**
            
            - Represents an **attribute** of the entity.
            
            ---
            
            ### **Redundancy**
            
            - **Duplication of data** in a database.
            - Causes inconsistency and waste of storage.
            - Controlled using **Normalization**.
            
            ---
            
            ### **Primary Key**
            
            - A **unique identifier** for each record in a table.
            - **Cannot be NULL or duplicate**.
            
            ```sql
            CREATE TABLE student (
              student_id INT PRIMARY KEY,
              name VARCHAR(50)
            );
            
            ```
            
            ---
            
            ### **Foreign Key**
            
            - A **field in one table** that refers to the **primary key of another table**.
            - Maintains **relationship** between tables.
            
            ```sql
            CREATE TABLE course (
              course_id INT PRIMARY KEY,
              course_name VARCHAR(50)
            );
            
            CREATE TABLE enrollment (
              enroll_id INT PRIMARY KEY,
              student_id INT,
              course_id INT,
              FOREIGN KEY (student_id) REFERENCES student(student_id),
              FOREIGN KEY (course_id) REFERENCES course(course_id)
            );
            
            ```
            
            ---
            
            ### **Compound (Composite) Key**
            
            - Combination of **two or more columns** to uniquely identify a record.
            
            ```sql
            CREATE TABLE student_course (
              student_id INT,
              course_id INT,
              PRIMARY KEY (student_id, course_id)
            );
            
            ```
            
            ---
            
            ### **Referential Integrity**
            
            - Ensures that **foreign key values** in a child table must **match primary key values** in the parent table.
            - Prevents deletion or update of data that is referenced elsewhere.
            
            Example:
            
            - You can’t delete a course record if students are still enrolled in it.
            
            ---
            
            ## ⚙️ 7️⃣ COMMON SQL COMMANDS OVERVIEW
            
            | --- | --- | --- |
            
            ---
            
            ## 📚 SUMMARY CHART
            
            | --- | --- | --- |
            
        - DDL
            
            # 🧱 DDL (Data Definition Language)
            
            ## 🔹 What is DDL?
            
            **DDL (Data Definition Language)** is the part of SQL used to **define and modify the structure** of database objects like:
            
            - Databases
            - Tables
            - Views
            - Indexes
            - Sequences
            - Synonyms
            
            Unlike DML (which manipulates data), **DDL modifies schema**, not the actual records.
            
            ### ⚙️ Key Points
            
            - DDL commands are **auto-committed** — changes **cannot be rolled back**.
            - They affect the **structure** of tables or databases.
            - Syntax rules differ slightly in different RDBMS (MySQL, Oracle, PostgreSQL, etc.), but concepts remain the same.
            
            ---
            
            # 🏗️ 1️⃣ CREATE
            
            ### **Purpose**
            
            Used to **create a new database or database object** (like table, view, index, etc.).
            
            ---
            
            ### 🧩 **A. CREATE DATABASE**
            
            Creates a new database.
            
            ### Syntax:
            
            ```sql
            CREATE DATABASE database_name;
            
            ```
            
            ### Example:
            
            ```sql
            CREATE DATABASE college;
            
            ```
            
            ### Notes:
            
            - In MySQL, after creation, you use it by:
            
            ---
            
            ### 🧩 **B. CREATE TABLE**
            
            Creates a new table with specified columns, data types, and constraints.
            
            ### Syntax:
            
            ```sql
            CREATE TABLE table_name (
              column1 datatype [constraint],
              column2 datatype [constraint],
              ...
            );
            
            ```
            
            ### Example:
            
            ```sql
            CREATE TABLE students (
              student_id INT PRIMARY KEY,
              name VARCHAR(100) NOT NULL,
              age INT,
              email VARCHAR(100) UNIQUE
            );
            
            ```
            
            ### Notes:
            
            - `PRIMARY KEY` → ensures uniqueness.
            - `NOT NULL` → prevents missing data.
            - `UNIQUE` → no duplicate values allowed.
            - `DEFAULT` → sets a default value if none provided.
            
            ---
            
            # 🧩 2️⃣ ALTER
            
            ### **Purpose**
            
            Used to **modify an existing table’s structure** after it has been created.
            
            ---
            
            ### **Common Operations with ALTER:**
            
            ### 1️⃣ **Add a new column**
            
            ```sql
            ALTER TABLE students
            ADD address VARCHAR(200);
            
            ```
            
            ### 2️⃣ **Modify existing column**
            
            Change data type or size:
            
            ```sql
            ALTER TABLE students
            MODIFY name VARCHAR(150);
            
            ```
            
            > ⚠️ MySQL uses MODIFY, while Oracle and PostgreSQL use ALTER COLUMN.
            > 
            
            Example (PostgreSQL style):
            
            ```sql
            ALTER TABLE students
            ALTER COLUMN age TYPE SMALLINT;
            
            ```
            
            ### 3️⃣ **Rename a column**
            
            ```sql
            ALTER TABLE students
            RENAME COLUMN email TO email_id;
            
            ```
            
            ### 4️⃣ **Drop (delete) a column**
            
            ```sql
            ALTER TABLE students
            DROP COLUMN address;
            
            ```
            
            ### 5️⃣ **Add or drop a constraint**
            
            ```sql
            ALTER TABLE students
            ADD CONSTRAINT unique_email UNIQUE (email_id);
            
            ALTER TABLE students
            DROP CONSTRAINT unique_email;
            
            ```
            
            ---
            
            ### 🧠 Notes:
            
            - `ALTER` **does not delete data** — only changes structure.
            - Some RDBMS may require the table to be empty before changing certain columns.
            
            ---
            
            # 💣 3️⃣ DROP
            
            ### **Purpose**
            
            Used to **delete database objects completely** (table, database, view, etc.).
            
            ---
            
            ### **A. DROP DATABASE**
            
            Deletes the database and **all its tables permanently**.
            
            ```sql
            DROP DATABASE college;
            
            ```
            
            ---
            
            ### **B. DROP TABLE**
            
            Deletes a table’s structure **and its data**.
            
            ```sql
            DROP TABLE students;
            
            ```
            
            ### ⚠️ Important:
            
            - Once dropped, **you cannot recover** the table unless you restore from backup.
            - All relationships (foreign keys) must be dropped or disabled first.
            
            ---
            
            ### **C. DROP CONSTRAINT**
            
            Used to remove a constraint without removing the column.
            
            ```sql
            ALTER TABLE students
            DROP CONSTRAINT unique_email;
            
            ```
            
            ---
            
            # 🧹 4️⃣ TRUNCATE
            
            ### **Purpose**
            
            Used to **delete all rows from a table**, but keep its **structure intact**.
            
            ---
            
            ### **Syntax**
            
            ```sql
            TRUNCATE TABLE table_name;
            
            ```
            
            ### **Example**
            
            ```sql
            TRUNCATE TABLE students;
            
            ```
            
            ---
            
            ### **Behavior**
            
            | --- | --- | --- |
            
            ---
            
            ### **Use Case**
            
            When you want to quickly **reset a table** (e.g., test data, logs).
            
            ---
            
            # 🔁 5️⃣ RENAME
            
            ### **Purpose**
            
            Used to **rename database objects** (tables, columns, indexes, etc.).
            
            ---
            
            ### **Syntax**
            
            ```sql
            RENAME old_name TO new_name;
            
            ```
            
            ### **Example (Rename Table):**
            
            ```sql
            RENAME students TO student_details;
            
            ```
            
            ### **In MySQL / Oracle (Alternate Way):**
            
            ```sql
            ALTER TABLE students RENAME TO student_details;
            
            ```
            
            ---
            
            ### **Notes:**
            
            - Only changes the name — data and structure remain the same.
            - You must have permission to rename objects.
            - All dependent objects (views, triggers) must be updated manually.
            
            ---
            
            # ⚙️ DDL Command Summary Table
            
            | --- | --- | --- | --- | --- |
            
            ---
            
            # 🧠 QUICK VIVA QUESTIONS
            
            | --- | --- |
            
        - DML
            
            # 🧠 DML (DATA MANIPULATION LANGUAGE)
            
            ## 🔹 What is DML?
            
            **DML (Data Manipulation Language)** is used to **manipulate or handle data** stored inside database tables.
            
            It allows you to **retrieve, insert, modify, and delete** records.
            
            ---
            
            ### ⚙️ DML Commands List:
            
            | --- | --- |
            
            ---
            
            ## 📘 1️⃣ SELECT Command
            
            ### **Purpose**
            
            Used to **retrieve data** from one or more tables.
            
            ---
            
            ### **Syntax**
            
            ```sql
            SELECT column1, column2, ...
            FROM table_name
            [WHERE condition]
            [GROUP BY column]
            [HAVING condition]
            [ORDER BY column [ASC|DESC]];
            
            ```
            
            ---
            
            ### **Examples**
            
            ### A. Select all columns:
            
            ```sql
            SELECT * FROM students;
            
            ```
            
            ### B. Select specific columns:
            
            ```sql
            SELECT name, email FROM students;
            
            ```
            
            ### C. Use WHERE condition:
            
            ```sql
            SELECT * FROM students WHERE age > 18;
            
            ```
            
            ### D. Sort results:
            
            ```sql
            SELECT * FROM students ORDER BY name ASC;
            
            ```
            
            ### E. Aggregate functions:
            
            ```sql
            SELECT COUNT(*), AVG(age), MAX(age) FROM students;
            
            ```
            
            ### F. Group results:
            
            ```sql
            SELECT course_id, COUNT(*) FROM enrollment
            GROUP BY course_id;
            
            ```
            
            ### G. Using aliases:
            
            ```sql
            SELECT name AS StudentName, email AS Contact FROM students;
            
            ```
            
            ---
            
            ### 🧠 Notes:
            
            - → selects all columns.
            - `WHERE` filters rows.
            - `ORDER BY` sorts the result.
            - `GROUP BY` groups data for aggregation.
            - `HAVING` filters groups (used with aggregate functions).
            
            ---
            
            ## 📘 2️⃣ INSERT Command
            
            ### **Purpose**
            
            Used to **add new records** (rows) into a table.
            
            ---
            
            ### **Syntax**
            
            ```sql
            INSERT INTO table_name (column1, column2, ...)
            VALUES (value1, value2, ...);
            
            ```
            
            ---
            
            ### **Examples**
            
            ### A. Insert specific columns:
            
            ```sql
            INSERT INTO students (student_id, name, age, email)
            VALUES (1, 'Geet', 20, 'geet@mail.com');
            
            ```
            
            ### B. Insert all columns (must follow table order):
            
            ```sql
            INSERT INTO students VALUES (2, 'Amit', 19, 'amit@mail.com');
            
            ```
            
            ### C. Insert multiple rows at once (MySQL):
            
            ```sql
            INSERT INTO students (student_id, name, age, email)
            VALUES
            (3, 'Riya', 21, 'riya@mail.com'),
            (4, 'Vikram', 22, 'vikram@mail.com');
            
            ```
            
            ---
            
            ### 🧠 Notes:
            
            - String values must be in quotes `' '`.
            - Default values are inserted automatically if defined in schema.
            - You can insert data **from another table**:
            
            ```sql
            INSERT INTO new_table (id, name)
            SELECT id, name FROM old_table WHERE age > 20;
            
            ```
            
            ---
            
            ## 📘 3️⃣ UPDATE Command
            
            ### **Purpose**
            
            Used to **modify existing records** in a table.
            
            ---
            
            ### **Syntax**
            
            ```sql
            UPDATE table_name
            SET column1 = value1, column2 = value2, ...
            WHERE condition;
            
            ```
            
            ---
            
            ### **Examples**
            
            ### A. Update single column:
            
            ```sql
            UPDATE students
            SET age = 21
            WHERE student_id = 1;
            
            ```
            
            ### B. Update multiple columns:
            
            ```sql
            UPDATE students
            SET name = 'Geet V J', email = 'geetvj@mail.com'
            WHERE student_id = 1;
            
            ```
            
            ### C. Update all rows:
            
            ```sql
            UPDATE students
            SET age = age + 1;
            
            ```
            
            ---
            
            ### ⚠️ Important:
            
            - Always use `WHERE` to avoid updating every record accidentally.
            - Without `WHERE`, all rows will be modified.
            
            ---
            
            ## 📘 4️⃣ DELETE Command
            
            ### **Purpose**
            
            Used to **remove records** from a table.
            
            ---
            
            ### **Syntax**
            
            ```sql
            DELETE FROM table_name
            WHERE condition;
            
            ```
            
            ---
            
            ### **Examples**
            
            ### A. Delete specific record:
            
            ```sql
            DELETE FROM students WHERE student_id = 3;
            
            ```
            
            ### B. Delete all rows:
            
            ```sql
            DELETE FROM students;
            
            ```
            
            ---
            
            ### **Difference between DELETE and TRUNCATE**
            
            | --- | --- | --- |
            
            ---
            
            ### **Notes:**
            
            - Use `DELETE` with caution — without `WHERE`, all rows are gone.
            - Can be rolled back before committing.
            
            ---
            
            ## 📘 5️⃣ MERGE Command
            
            ### **Purpose**
            
            Used to **combine data** of two tables — performs **INSERT or UPDATE** in one command.
            
            Also known as **UPSERT** (update if exists, insert if not).
            
            ---
            
            ### **Syntax (Oracle / SQL standard)**
            
            ```sql
            MERGE INTO target_table t
            USING source_table s
            ON (t.id = s.id)
            WHEN MATCHED THEN
              UPDATE SET t.name = s.name
            WHEN NOT MATCHED THEN
              INSERT (id, name)
              VALUES (s.id, s.name);
            
            ```
            
            ---
            
            ### **Example**
            
            We have two tables:
            
            ```sql
            students_new (id, name)
            students_old (id, name)
            
            ```
            
            Now:
            
            ```sql
            MERGE INTO students_old old
            USING students_new new
            ON (old.id = new.id)
            WHEN MATCHED THEN
              UPDATE SET old.name = new.name
            WHEN NOT MATCHED THEN
              INSERT (id, name) VALUES (new.id, new.name);
            
            ```
            
            ---
            
            ### 🧠 Notes:
            
            - Combines multiple operations → cleaner and faster.
            - Useful in **data warehousing** or **syncing** two tables.
            - Available in **Oracle, SQL Server, PostgreSQL (from v15+), MySQL (via INSERT…ON DUPLICATE KEY UPDATE)**.
            
            ### MySQL equivalent:
            
            ```sql
            INSERT INTO students (id, name)
            VALUES (1, 'Geet')
            ON DUPLICATE KEY UPDATE name = VALUES(name);
            
            ```
            
            ---
            
            ## 📘 6️⃣ LOCK TABLE Command
            
            ### **Purpose**
            
            Used to **control concurrent access** — i.e., prevent multiple users from modifying the same table at once.
            
            ---
            
            ### **Syntax**
            
            ```sql
            LOCK TABLE table_name [IN lock_mode MODE];
            
            ```
            
            ---
            
            ### **Lock Modes:**
            
            | --- | --- |
            
            ---
            
            ### **Example**
            
            ```sql
            LOCK TABLE students IN EXCLUSIVE MODE;
            
            ```
            
            ➡️ Prevents others from performing **INSERT, UPDATE, DELETE** until the lock is released.
            
            ---
            
            ### **Unlock Table**
            
            ```sql
            COMMIT;  -- or
            ROLLBACK;
            
            ```
            
            Lock is released automatically after a transaction ends.
            
            ---
            
            ### 🧠 Notes:
            
            - Used in **multi-user environments** to maintain **data consistency**.
            - Prevents **lost updates** or **dirty reads**.
            - Common in Oracle and PostgreSQL; MySQL uses `SELECT ... FOR UPDATE` for similar behavior.
            
            ---
            
            # 🧾 Summary Table of DML Commands
            
            | --- | --- | --- | --- |
            
            ---
            
            # 🧠 VIVA & THEORY QUICK QUESTIONS
            
            | --- | --- |
            
        - DCL AND TCL
            
            ## 🧱 **1. DCL — Data Control Language**
            
            ### 🔹 **Definition**
            
            DCL commands are used to **control access** to data stored in a database.
            
            They help manage **user privileges, permissions, and security** of the database.
            
            ---
            
            ### 📘 **Main DCL Commands**
            
            | --- | --- | --- | --- |
            
            ---
            
            ### 🔒 **Privileges Types**
            
            | --- | --- | --- |
            
            ---
            
            ### 🧠 **Example in Real Use**
            
            ```sql
            CREATE USER 'geet' IDENTIFIED BY 'password123';
            GRANT SELECT, INSERT, UPDATE ON college_db.students TO 'geet';
            -- Later, revoke access
            REVOKE UPDATE ON college_db.students FROM 'geet';
            
            ```
            
            🔸 *Purpose:* This allows or removes permissions for specific actions on tables or databases.
            
            ---
            
            ## 💾 **2. TCL — Transaction Control Language**
            
            ### 🔹 **Definition**
            
            TCL commands manage **transactions** in a database.
            
            A **transaction** is a logical unit of work that contains one or more SQL statements.
            
            A transaction must follow **ACID properties**:
            
            - **A**tomicity → All or nothing
            - **C**onsistency → Maintains database integrity
            - **I**solation → Transactions are independent
            - **D**urability → Changes are permanent once committed
            
            ---
            
            ### 📘 **Main TCL Commands**
            
            | --- | --- | --- | --- |
            
            ---
            
            ### ⚙️ **Example Use Case**
            
            ```sql
            -- Start transaction
            INSERT INTO students VALUES (101, 'Amit', 'CS');
            SAVEPOINT first_save;
            
            UPDATE students SET name='Amit Sharma' WHERE id=101;
            SAVEPOINT after_update;
            
            -- If you realize the update was wrong:
            ROLLBACK TO first_save;   -- Undoes update but not the insert
            
            -- Finally confirm the transaction
            COMMIT;
            
            ```
            
            ✅ After `COMMIT`, all changes are **permanently saved**.
            
            ❌ After `ROLLBACK`, all uncommitted changes are **discarded**.
            
            ---
            
            ### 💡 **Key Notes**
            
            - TCL commands **only work with DML operations** (`INSERT`, `UPDATE`, `DELETE`).
            - DDL commands (`CREATE`, `DROP`) are **auto-committed** — they cannot be rolled back.
            - You can combine **TCL + DML** for safer database operations.
            
            ---
            
            ### 🧩 **DCL vs TCL — Summary Table**
            
            | --- | --- | --- |
            
        - **AS AND AUTO_INCREMENT logical operators**, to **CASCADE actions**, **aggregate functions**, and **constraints like DISTINCT & UNIQUE**.
            
            ## 🧱 **1. AS (Alias Operator)**
            
            ### 🔹 **Definition**
            
            `AS` is used to **rename** a table or a column temporarily **for readability** or when using functions.
            
            ### 🔹 **Syntax**
            
            ```sql
            SELECT column_name AS alias_name FROM table_name;
            
            ```
            
            ### 🔹 **Example**
            
            ```sql
            SELECT name AS StudentName, marks AS TotalMarks FROM students;
            
            ```
            
            👉 Output column headings will appear as **StudentName** and **TotalMarks**.
            
            You can also alias a table:
            
            ```sql
            SELECT s.name, c.course_name
            FROM students AS s, courses AS c
            WHERE s.course_id = c.id;
            
            ```
            
            ---
            
            ## ⚙️ **2. AUTO_INCREMENT (MySQL Specific)**
            
            ### 🔹 **Definition**
            
            Used to automatically **generate unique values** (usually for primary keys).
            
            Each time a new record is inserted, the value increases automatically.
            
            ### 🔹 **Syntax**
            
            ```sql
            CREATE TABLE students (
              id INT AUTO_INCREMENT,
              name VARCHAR(50),
              PRIMARY KEY(id)
            );
            
            ```
            
            ### 🔹 **Example**
            
            ```sql
            INSERT INTO students (name) VALUES ('Geet');
            INSERT INTO students (name) VALUES ('Aarav');
            
            ```
            
            ➡️ IDs will automatically be 1, 2, 3... without manually inserting them.
            
            ---
            
            ## ⚖️ **3. Logical Operators (Used in WHERE Clause)**
            
            | --- | --- | --- |
            
            ### 🔹 Combined Example
            
            ```sql
            SELECT * FROM students
            WHERE (marks > 80 AND dept='CS') OR (marks > 90 AND dept='IT');
            
            ```
            
            ---
            
            ## 🔁 **4. CASCADE, ON DELETE, ON UPDATE — Referential Actions**
            
            These are used with **foreign keys** to specify what happens when a **referenced record** in the parent table is **deleted or updated**.
            
            ---
            
            ### 🔹 **Syntax**
            
            ```sql
            CREATE TABLE orders (
              order_id INT PRIMARY KEY,
              customer_id INT,
              FOREIGN KEY (customer_id)
              REFERENCES customers(id)
              ON DELETE CASCADE
              ON UPDATE CASCADE
            );
            
            ```
            
            ---
            
            ### 🔹 **Options Explained**
            
            | --- | --- | --- |
            
            ---
            
            ## 📊 **5. Aggregate (Group) Functions**
            
            Used to perform **calculations on multiple rows** and return a single value.
            
            | --- | --- | --- | --- |
            
            ---
            
            ### 🔹 **Example**
            
            ```sql
            SELECT dept, AVG(marks) AS avg_marks, MAX(marks) AS topper
            FROM students
            GROUP BY dept;
            
            ```
            
            👉 Shows average and top marks department-wise.
            
            ---
            
            ## 🔸 **6. DISTINCT Keyword**
            
            ### 🔹 **Definition**
            
            Removes **duplicate values** from the result set.
            
            ### 🔹 **Syntax**
            
            ```sql
            SELECT DISTINCT dept FROM students;
            
            ```
            
            ➡️ Returns each department name **only once**, even if repeated in the table.
            
            ---
            
            ## 🧩 **7. UNIQUE Constraint**
            
            ### 🔹 **Definition**
            
            Ensures **all values in a column are different** — no duplicates allowed.
            
            ### 🔹 **Syntax**
            
            ```sql
            CREATE TABLE students (
              roll_no INT UNIQUE,
              name VARCHAR(50)
            );
            
            ```
            
            ✅ You can have **multiple UNIQUE columns**, but only **one PRIMARY KEY** per table.
            
            ---
            
            ### 🔹 **Difference: UNIQUE vs PRIMARY KEY**
            
            | --- | --- | --- |
            
            ---
            
            ## 🧠 **Quick Example Putting Everything Together**
            
            ```sql
            CREATE TABLE students (
              id INT AUTO_INCREMENT PRIMARY KEY,
              name VARCHAR(50) NOT NULL,
              email VARCHAR(100) UNIQUE,
              dept VARCHAR(30),
              marks INT,
              FOREIGN KEY (dept) REFERENCES departments(dept_name)
              ON DELETE CASCADE
              ON UPDATE CASCADE
            );
            
            -- Inserting values
            INSERT INTO students (name, email, dept, marks)
            VALUES ('Geet', 'geet@college.com', 'CS', 90);
            
            -- Aggregate and distinct usage
            SELECT DISTINCT dept, COUNT(*) AS total_students, AVG(marks) AS avg_marks
            FROM students
            GROUP BY dept;
            
            ```
            
            ---
            
            ### ⚡ **Summary Table**
            
            | --- | --- | --- |
            
        - SET OPERATORS
            
            ## 🧩 **1️⃣ What are Set Operators?**
            
            ### 🔹 Definition:
            
            Set operators are used to **combine the results of two or more SELECT queries** into a **single result set**.
            
            Each SELECT query must:
            
            - Return the **same number of columns**
            - Have **similar data types**
            - Columns must be in the **same order**
            
            ---
            
            ### ⚙️ **Common SQL Set Operators:**
            
            | --- | --- | --- |
            
            ---
            
            ## 🧠 **2️⃣ UNION Operator**
            
            ### 🔹 Definition:
            
            `UNION` merges the results of two queries but **removes duplicates**.
            
            ### 🔹 Syntax:
            
            ```sql
            SELECT column_list FROM table1
            UNION
            SELECT column_list FROM table2;
            
            ```
            
            ### 🔹 Example:
            
            ```sql
            SELECT name FROM students_cs
            UNION
            SELECT name FROM students_it;
            
            ```
            
            ✅ Output:
            
            - Combines names from both tables.
            - If “Geet” appears in both, it will show **only once**.
            
            ---
            
            ## 💡 **3️⃣ UNION ALL Operator**
            
            ### 🔹 Definition:
            
            `UNION ALL` combines the results of two queries **including duplicates**.
            
            ### 🔹 Syntax:
            
            ```sql
            SELECT column_list FROM table1
            UNION ALL
            SELECT column_list FROM table2;
            
            ```
            
            ### 🔹 Example:
            
            ```sql
            SELECT name FROM students_cs
            UNION ALL
            SELECT name FROM students_it;
            
            ```
            
            ✅ Output:
            
            - Combines names from both tables.
            - If “Geet” is present in both, it will appear **twice**.
            
            ---
            
            ### 🔹 **Difference Between UNION and UNION ALL**
            
            | --- | --- | --- |
            
            ---
            
            ## 🧠 **4️⃣ INTERSECT Operator**
            
            ### 🔹 Definition:
            
            `INTERSECT` returns **only those rows** that are **common** to both queries.
            
            ### ❌ Note:
            
            MySQL does **not directly support INTERSECT**, but you can simulate it using an `INNER JOIN`.
            
            ### 🔹 Equivalent MySQL Example:
            
            ```sql
            SELECT name FROM students_cs
            INNER JOIN students_it
            ON students_cs.name = students_it.name;
            
            ```
            
            ✅ Output:
            
            - Only students common to both CS and IT tables.
            
            ---
            
            ## 💣 **5️⃣ MINUS / EXCEPT Operator**
            
            ### 🔹 Definition:
            
            `MINUS` (in Oracle) or `EXCEPT` (in PostgreSQL) returns rows from the **first query** that are **not present** in the **second**.
            
            ### ❌ MySQL doesn’t have `MINUS` directly.
            
            We use a **LEFT JOIN with NULL check** or `NOT IN`.
            
            ### 🔹 Example using LEFT JOIN:
            
            ```sql
            SELECT name FROM students_cs
            LEFT JOIN students_it
            ON students_cs.name = students_it.name
            WHERE students_it.name IS NULL;
            
            ```
            
            ✅ Output:
            
            - Students who are in **CS** but **not** in **IT**.
            
            ---
            
            ## ⚙️ **6️⃣ Compound Queries**
            
            ### 🔹 Definition:
            
            A **compound query** is a combination of **multiple SELECT statements** using set operators like:
            
            `UNION`, `UNION ALL`, `INTERSECT`, and `MINUS`.
            
            They are used when you want to:
            
            - Fetch data from multiple tables.
            - Merge or compare datasets.
            - Get combined or filtered outputs in one query.
            
            ---
            
            ### 🔹 Example (Full Compound Query in MySQL):
            
            ```sql
            -- Combine student lists from 3 departments and remove duplicates
            SELECT name, dept FROM students_cs
            UNION
            SELECT name, dept FROM students_it
            UNION
            SELECT name, dept FROM students_ece;
            
            ```
            
            ✅ Output: Combined list of all unique students from CS, IT, and ECE.
            
            ---
            
            ## ⚡ **7️⃣ Practical Example in MySQL**
            
            Let’s assume:
            
            **Table 1: students_cs**
            
            | --- | --- |
            
            **Table 2: students_it**
            
            | --- | --- |
            
            ---
            
            ### ➤ **UNION**
            
            ```sql
            SELECT name FROM students_cs
            UNION
            SELECT name FROM students_it;
            
            ```
            
            ✅ Output:
            
            ```
            Geet
            Aarav
            Riya
            Neha
            
            ```
            
            ---
            
            ### ➤ **UNION ALL**
            
            ```sql
            SELECT name FROM students_cs
            UNION ALL
            SELECT name FROM students_it;
            
            ```
            
            ✅ Output:
            
            ```
            Geet
            Aarav
            Riya
            Geet
            Neha
            Riya
            
            ```
            
            → Keeps duplicates.
            
            ---
            
            ### ➤ **INTERSECT (Simulated)**
            
            ```sql
            SELECT name FROM students_cs
            WHERE name IN (SELECT name FROM students_it);
            
            ```
            
            ✅ Output:
            
            ```
            Geet
            Riya
            
            ```
            
            ---
            
            ### ➤ **MINUS (Simulated)**
            
            ```sql
            SELECT name FROM students_cs
            WHERE name NOT IN (SELECT name FROM students_it);
            
            ```
            
            ✅ Output:
            
            ```
            Aarav
            
            ```
            
            ---
            
            ## 📊 **8️⃣ Data Returned & When to Use**
            
            | --- | --- | --- | --- |
            
            ---
            
            ## 🧠 **9️⃣ Important Notes**
            
            - Columns used in set operations must:
            - The column names in the **final result** are taken from the **first SELECT query**.
            - Set operators work on **complete rows**, not individual columns.
            
            ---
            
            ## 🚀 **10️⃣ Summary (Quick Revision Table)**
            
            | --- | --- | --- | --- | --- |
            
        - SQL FUNCTIONS
            
            # 🧠 SQL FUNCTIONS — COMPLETE NOTES
            
            ---
            
            ## 🔹 **1️⃣ What are SQL Functions?**
            
            ### **Definition:**
            
            SQL functions are **predefined operations** that perform specific tasks on data, such as:
            
            - Formatting text or numbers
            - Performing calculations
            - Handling date/time
            - Returning specific results
            
            They take **input values (arguments)** and **return a single value** as output.
            
            ---
            
            ## ⚙️ **2️⃣ Types of SQL Functions**
            
            | --- | --- | --- |
            
            ---
            
            We’ll now focus on **Single Row Functions**, which are of five main types 👇
            
            ---
            
            # 🧩 **3️⃣ Single Row Functions (Detailed)**
            
            ### 🧮 Categories:
            
            | --- | --- |
            
            ---
            
            ## 🅰️ **A. CHARACTER FUNCTIONS**
            
            These functions manipulate **string or character data types (CHAR, VARCHAR, TEXT)**.
            
            ---
            
            ### 🔹 **1. UPPER()**
            
            Converts text to **uppercase**.
            
            ```sql
            SELECT UPPER('geet') AS UPPER_NAME;
            -- Output: GEET
            
            ```
            
            ---
            
            ### 🔹 **2. LOWER()**
            
            Converts text to **lowercase**.
            
            ```sql
            SELECT LOWER('HELLO WORLD');
            -- Output: hello world
            
            ```
            
            ---
            
            ### 🔹 **3. INITCAP()** *(Oracle only)*
            
            Capitalizes the **first letter of each word**.
            
            MySQL equivalent:
            
            ```sql
            SELECT CONCAT(UCASE(LEFT(name,1)), LCASE(SUBSTRING(name,2))) AS ProperName
            FROM students;
            
            ```
            
            ---
            
            ### 🔹 **4. LENGTH()**
            
            Returns the **number of characters** in a string.
            
            ```sql
            SELECT LENGTH('Geet Jamdal');
            -- Output: 11
            
            ```
            
            ---
            
            ### 🔹 **5. CONCAT()**
            
            Joins (concatenates) two or more strings together.
            
            ```sql
            SELECT CONCAT(first_name, ' ', last_name) AS FullName FROM students;
            
            ```
            
            ---
            
            ### 🔹 **6. SUBSTRING() / SUBSTR()**
            
            Extracts part of a string.
            
            ```sql
            SELECT SUBSTRING('DATABASE', 2, 4);
            -- Output: ATAB
            
            ```
            
            👉 Starts from position 2, takes 4 characters.
            
            ---
            
            ### 🔹 **7. INSTR()**
            
            Finds **position** of a substring within a string.
            
            ```sql
            SELECT INSTR('DATABASE', 'BASE');
            -- Output: 5
            
            ```
            
            ---
            
            ### 🔹 **8. LPAD() / RPAD()**
            
            Pads a string on the **left** or **right** with specified characters.
            
            ```sql
            SELECT LPAD('123', 5, '0');
            -- Output: 00123
            SELECT RPAD('SQL', 6, '*');
            -- Output: SQL***
            
            ```
            
            ---
            
            ### 🔹 **9. TRIM(), LTRIM(), RTRIM()**
            
            Removes unwanted spaces or characters.
            
            ```sql
            SELECT TRIM('   Geet   ');
            -- Output: Geet
            SELECT LTRIM('   Geet');
            -- Output: Geet
            SELECT RTRIM('Geet   ');
            -- Output: Geet
            
            ```
            
            ---
            
            ### 🔹 **10. REPLACE()**
            
            Replaces part of a string with another substring.
            
            ```sql
            SELECT REPLACE('SQL is hard', 'hard', 'easy');
            -- Output: SQL is easy
            
            ```
            
            ---
            
            ✅ **Summary: CHARACTER FUNCTIONS**
            
            | --- | --- | --- | --- |
            
            ---
            
            ## 🔢 **B. NUMBER FUNCTIONS**
            
            These operate on **numeric values** and return numeric results.
            
            ---
            
            ### 🔹 **1. ABS()**
            
            Returns **absolute (positive)** value of a number.
            
            ```sql
            SELECT ABS(-20);
            -- Output: 20
            
            ```
            
            ---
            
            ### 🔹 **2. ROUND()**
            
            Rounds a number to a specific decimal place.
            
            ```sql
            SELECT ROUND(15.678, 2);
            -- Output: 15.68
            
            ```
            
            ---
            
            ### 🔹 **3. TRUNCATE()**
            
            Cuts (truncates) decimals after a certain point.
            
            ```sql
            SELECT TRUNCATE(15.678, 1);
            -- Output: 15.6
            
            ```
            
            ---
            
            ### 🔹 **4. CEIL() / CEILING()**
            
            Rounds number **up** to the nearest integer.
            
            ```sql
            SELECT CEIL(15.3);
            -- Output: 16
            
            ```
            
            ---
            
            ### 🔹 **5. FLOOR()**
            
            Rounds number **down** to the nearest integer.
            
            ```sql
            SELECT FLOOR(15.9);
            -- Output: 15
            
            ```
            
            ---
            
            ### 🔹 **6. MOD()**
            
            Returns remainder after division.
            
            ```sql
            SELECT MOD(17, 5);
            -- Output: 2
            
            ```
            
            ---
            
            ✅ **Summary: NUMBER FUNCTIONS**
            
            | --- | --- | --- | --- |
            
            ---
            
            ## 🕒 **C. DATE & TIME FUNCTIONS**
            
            Work with **date, time, and timestamps**.
            
            ---
            
            ### 🔹 **1. NOW()**
            
            Returns current date and time.
            
            ```sql
            SELECT NOW();
            -- Output: 2025-11-09 21:45:30
            
            ```
            
            ---
            
            ### 🔹 **2. CURDATE() / CURRENT_DATE()**
            
            Returns current date only.
            
            ```sql
            SELECT CURDATE();
            -- Output: 2025-11-09
            
            ```
            
            ---
            
            ### 🔹 **3. CURTIME() / CURRENT_TIME()**
            
            Returns current time only.
            
            ```sql
            SELECT CURTIME();
            -- Output: 21:45:30
            
            ```
            
            ---
            
            ### 🔹 **4. DATE()**
            
            Extracts the date part from a datetime value.
            
            ```sql
            SELECT DATE('2025-11-09 15:35:00');
            -- Output: 2025-11-09
            
            ```
            
            ---
            
            ### 🔹 **5. YEAR(), MONTH(), DAY()**
            
            Extracts specific parts of date.
            
            ```sql
            SELECT YEAR('2025-11-09'), MONTH('2025-11-09'), DAY('2025-11-09');
            -- Output: 2025 | 11 | 09
            
            ```
            
            ---
            
            ### 🔹 **6. DAYNAME()**
            
            Returns the weekday name.
            
            ```sql
            SELECT DAYNAME('2025-11-09');
            -- Output: Sunday
            
            ```
            
            ---
            
            ### 🔹 **7. DATE_ADD() / DATE_SUB()**
            
            Adds or subtracts a time interval.
            
            ```sql
            SELECT DATE_ADD('2025-11-09', INTERVAL 10 DAY);
            -- Output: 2025-11-19
            SELECT DATE_SUB('2025-11-09', INTERVAL 1 MONTH);
            -- Output: 2025-10-09
            
            ```
            
            ---
            
            ### 🔹 **8. DATEDIFF()**
            
            Returns the number of days between two dates.
            
            ```sql
            SELECT DATEDIFF('2025-11-30', '2025-11-09');
            -- Output: 21
            
            ```
            
            ---
            
            ### 🔹 **9. TIMESTAMPDIFF()**
            
            Returns difference in years, months, days, etc.
            
            ```sql
            SELECT TIMESTAMPDIFF(YEAR, '2005-06-01', '2025-11-09');
            -- Output: 20
            
            ```
            
            ---
            
            ✅ **Summary: DATE & TIME FUNCTIONS**
            
            | --- | --- | --- | --- |
            
            ---
            
            ## 🔄 **D. CONVERSION FUNCTIONS**
            
            Used to **convert data types or formats**.
            
            ---
            
            ### 🔹 **1. CAST()**
            
            Converts value from one data type to another.
            
            ```sql
            SELECT CAST('2025-11-09' AS DATE);
            
            ```
            
            ---
            
            ### 🔹 **2. CONVERT()**
            
            Similar to CAST, but also used to change **character sets**.
            
            ```sql
            SELECT CONVERT('123', SIGNED);
            -- Output: 123 (as integer)
            
            ```
            
            ---
            
            ### 🔹 **3. DATE_FORMAT()**
            
            Formats a date into a specific style.
            
            ```sql
            SELECT DATE_FORMAT(NOW(), '%d-%M-%Y');
            -- Output: 09-November-2025
            
            ```
            
            ---
            
            ## ⚙️ **E. GENERAL FUNCTIONS**
            
            These return **special or conditional values**.
            
            ---
            
            ### 🔹 **1. IF()**
            
            Returns value based on condition.
            
            ```sql
            SELECT IF(marks >= 40, 'PASS', 'FAIL') FROM students;
            
            ```
            
            ---
            
            ### 🔹 **2. IFNULL()**
            
            Returns alternate value if the first one is NULL.
            
            ```sql
            SELECT IFNULL(email, 'Not Provided') FROM students;
            
            ```
            
            ---
            
            ### 🔹 **3. NULLIF()**
            
            Returns NULL if both arguments are equal.
            
            ```sql
            SELECT NULLIF(5,5);
            -- Output: NULL
            
            ```
            
            ---
            
            ### 🔹 **4. COALESCE()**
            
            Returns the first non-null value.
            
            ```sql
            SELECT COALESCE(NULL, NULL, 'Geet', 'Aarav');
            -- Output: Geet
            
            ```
            
            ---
            
            # 🧮 **FINAL SUMMARY TABLE**
            
            | --- | --- | --- |
            
        - DATA TYPES IN SQL
            
            # 🧱 **MySQL Data Types — Detailed Notes**
            
            In MySQL, **data types** define the **type of value** that can be stored in a column or variable — e.g., numeric, text, date, etc.
            
            Choosing the right data type is essential for **performance, accuracy, and storage efficiency.**
            
            ---
            
            ## 🔹 **1. Categories of MySQL Data Types**
            
            | --- | --- |
            
            ---
            
            ## 🧮 **2. Numeric Data Types**
            
            Numeric data types are used for **arithmetic operations** like addition, subtraction, etc.
            
            ### 📗 **A. Integer Types**
            
            | --- | --- | --- | --- | --- |
            
            ✅ **Example:**
            
            ```sql
            CREATE TABLE students (
              id INT AUTO_INCREMENT PRIMARY KEY,
              age TINYINT UNSIGNED
            );
            
            ```
            
            > Here, AUTO_INCREMENT automatically increases the id value for each new record.
            > 
            
            ---
            
            ### 📘 **B. Floating Point and Decimal Types**
            
            | --- | --- | --- | --- |
            
            ✅ **Example:**
            
            ```sql
            CREATE TABLE products (
              price DECIMAL(10,2),
              discount FLOAT(5,2)
            );
            
            ```
            
            ---
            
            ## 🔤 **3. String (Character) Data Types**
            
            Used to store text, characters, or binary data like images.
            
            | --- | --- | --- | --- |
            
            ✅ **Example:**
            
            ```sql
            CREATE TABLE books (
              title VARCHAR(100),
              description TEXT,
              cover_image LONGBLOB
            );
            
            ```
            
            ---
            
            ## ⏰ **4. Date and Time Data Types**
            
            Used for managing **temporal information** like dates, times, and timestamps.
            
            | --- | --- | --- | --- |
            
            ✅ **Example:**
            
            ```sql
            CREATE TABLE orders (
              order_id INT AUTO_INCREMENT PRIMARY KEY,
              order_date DATE,
              delivery_time TIME,
              created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
            );
            
            ```
            
            ---
            
            ## 🧩 **5. JSON Data Type**
            
            - MySQL (since version 5.7) supports the **JSON** data type.
            - Used to store and query **structured JSON documents**.
            
            ✅ **Example:**
            
            ```sql
            CREATE TABLE employees (
              id INT AUTO_INCREMENT PRIMARY KEY,
              details JSON
            );
            
            INSERT INTO employees (details)
            VALUES ('{"name": "Geet", "skills": ["SQL", "AI", "C++"]}');
            
            ```
            
            ---
            
            ## 🗺️ **6. Spatial Data Types (Advanced Use)**
            
            Used to store **geometrical or geographical data** (maps, coordinates).
            
            | --- | --- |
            
            ✅ **Example:**
            
            ```sql
            CREATE TABLE locations (
              id INT AUTO_INCREMENT PRIMARY KEY,
              city_name VARCHAR(50),
              coordinates POINT
            );
            
            ```
            
            ---
            
            ## ⚙️ **7. Choosing the Right Data Type**
            
            | --- | --- |
            
            ---
            
            ## 📊 **8. MySQL Example — All Data Types Together**
            
            ```sql
            CREATE TABLE employees (
              emp_id INT AUTO_INCREMENT PRIMARY KEY,
              emp_name VARCHAR(100) NOT NULL,
              emp_salary DECIMAL(10,2),
              emp_age TINYINT UNSIGNED,
              join_date DATE,
              last_login TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
              profile JSON,
              resume LONGBLOB
            );
            
            ```
            
            ---
            
            ## 🧠 **9. Important Notes**
            
            - Use **UNSIGNED** for columns that never need negative values (like salary, age).
            - **VARCHAR** is more flexible than **CHAR** (saves space).
            - **AUTO_INCREMENT** works only on **integer types** and **requires a PRIMARY KEY**.
            - **TIMESTAMP** auto-updates when a record changes (by default).
            - Use **DECIMAL** for financial data, not FLOAT (to avoid rounding errors).
        - other
            
            # 📝 **1️⃣ DESC / DESCRIBE**
            
            ### **Definition:**
            
            `DESC` (or `DESCRIBE`) is a **MySQL command** used to **view the structure of a table** — including column names, data types, nullability, keys, default values, and extra info (like auto-increment).
            
            ---
            
            ### **Syntax:**
            
            ```sql
            DESCRIBE table_name;
            -- or
            DESC table_name;
            
            ```
            
            ---
            
            ### **Output Columns of DESCRIBE**
            
            When you run `DESCRIBE table_name;` you get:
            
            | --- | --- |
            
            ---
            
            ### **Example:**
            
            ```sql
            CREATE TABLE students (
                id INT AUTO_INCREMENT PRIMARY KEY,
                name VARCHAR(50) NOT NULL,
                age TINYINT,
                email VARCHAR(100) UNIQUE
            );
            
            DESC students;
            
            ```
            
            **Output:**
            
            | --- | --- | --- | --- | --- | --- |
            
            ✅ **Notes:**
            
            - Useful for **checking table design** before querying.
            - Works for **any table** in MySQL.
            - Alternative command: `SHOW COLUMNS FROM table_name;`
            
            ---
            
            # 🧩 **2️⃣ PARTITION**
            
            Partitioning is an **advanced MySQL feature** that allows a table to be **divided into smaller, manageable pieces** called **partitions**.
            
            - Each partition **behaves like a separate table** but logically belongs to the same table.
            - Improves **query performance**, **maintenance**, and **storage management** for large tables.
            
            ---
            
            ### **Why Partition a Table?**
            
            1. Large tables become slow to query — partitions help **speed up SELECT queries**.
            2. Easier to **delete/archive old data** — just drop a partition.
            3. Optimize **indexing** and **storage efficiency**.
            
            ---
            
            ### **Partitioning Types in MySQL**
            
            | --- | --- | --- |
            
            ---
            
            ### **Syntax: RANGE Partitioning Example**
            
            ```sql
            CREATE TABLE sales (
                sale_id INT,
                sale_amount DECIMAL(10,2),
                sale_year YEAR
            )
            PARTITION BY RANGE(sale_year) (
                PARTITION p2019 VALUES LESS THAN (2020),
                PARTITION p2020 VALUES LESS THAN (2021),
                PARTITION p2021 VALUES LESS THAN (2022),
                PARTITION pmax VALUES LESS THAN MAXVALUE
            );
            
            ```
            
            ✅ **Explanation:**
            
            - Rows with `sale_year = 2019` → go to `p2019` partition
            - Rows with `sale_year = 2020` → go to `p2020`
            - `MAXVALUE` handles all remaining data
            
            ---
            
            ### **LIST Partitioning Example**
            
            ```sql
            CREATE TABLE employees (
                emp_id INT,
                emp_name VARCHAR(50),
                dept_id INT
            )
            PARTITION BY LIST(dept_id) (
                PARTITION p1 VALUES IN (1,2),
                PARTITION p2 VALUES IN (3,4),
                PARTITION p3 VALUES IN (5)
            );
            
            ```
            
            ---
            
            ### **HASH Partitioning Example**
            
            ```sql
            CREATE TABLE orders (
                order_id INT,
                customer_id INT,
                order_date DATE
            )
            PARTITION BY HASH(customer_id)
            PARTITIONS 4;
            
            ```
            
            - MySQL distributes rows into **4 partitions** using the hash of `customer_id`.
            
            ---
            
            ### **Key Notes on Partitioning:**
            
            1. You **cannot have foreign keys** referencing a partitioned table in MySQL.
            2. Only certain **storage engines support partitioning** — mainly **InnoDB** and **NDB**.
            3. Partitioning is mostly for **very large tables** — typically millions of rows.
            4. **Partition pruning**: MySQL automatically scans only relevant partitions for queries → improves performance.
            
            ---
            
            ### **Checking Partitions**
            
            ```sql
            SELECT table_name, partition_name, subpartition_name, partition_ordinal_position
            FROM information_schema.partitions
            WHERE table_name = 'sales';
            
            ```
            
            ---
            
            ### **Example Use Case: Combining DESC + PARTITION**
            
            ```sql
            DESC sales; -- Check structure
            SELECT * FROM information_schema.partitions WHERE table_name='sales'; -- Check partitions
            
            ```
            
            ---
            
            ### **Summary Table**
            
            | --- | --- | --- |
            
            ---
            
            💡 **Tips for Practicals:**
            
            - Use `DESC` before writing queries to **verify column names & types**.
            - Partition large tables when you have **historical data**, like logs, sales, or library transactions.
            - Always combine **RANGE/LIST with TIMESTAMP or ENUM** for easier maintenance.
    - Viva Questions
        
        ## **1️⃣ General SQL / Table / View / Index Questions**
        
        **Q1: What is a view? Can changes in a view affect the parent table?**
        
        **Answer:**
        
        - A **view** is a **virtual table** based on the result of a SQL `SELECT` query.
        - **It does not store data physically**, only the query definition.
        - **Changes in the view:**
            - If the view is **updatable**, changes in the view **do affect the underlying table**.
            - If the view is **non-updatable** (e.g., contains `GROUP BY`, `DISTINCT`, joins, aggregates), changes **cannot be made** through the view.
        
        ---
        
        **Q2: If a parent table changes, will all subtype tables entries change too?**
        
        **Answer:**
        
        - **Subtype tables** in a relational model are tables that inherit from a **parent table** (not native in MySQL, but achievable via design).
        - **Behavior:**
            - If a **primary key or unique key in parent table changes**, the **foreign keys in child tables** may be restricted depending on **ON UPDATE / ON DELETE rules**:
        - Example:
        
        ```sql
        CREATE TABLE parent (
            id INT PRIMARY KEY,
            name VARCHAR(50)
        );
        
        CREATE TABLE child (
            child_id INT PRIMARY KEY,
            parent_id INT,
            FOREIGN KEY (parent_id) REFERENCES parent(id) ON UPDATE CASCADE ON DELETE CASCADE
        );
        
        UPDATE parent SET id = 10 WHERE id = 1; -- parent_id in child table updated automatically
        DELETE FROM parent WHERE id = 10; -- child rows deleted automatically
        
        ```
        
        ---
        
        **Q3: How do primary key and foreign key influence another table?**
        
        **Answer:**
        
        - **Primary Key (PK):** Uniquely identifies each row in a table. No duplicate or NULL values allowed.
        - **Foreign Key (FK):** References a primary key in another table to maintain **referential integrity**.
        - **Effects:**
            1. Prevents inserting a value in child table that does not exist in parent.
            2. Controls deletion or updates in parent based on **ON DELETE / ON UPDATE rules**.
        - **Example:**
        
        ```sql
        CREATE TABLE jobs (
            job_id VARCHAR(10) PRIMARY KEY,
            job_title VARCHAR(50)
        );
        
        CREATE TABLE employees (
            emp_id INT PRIMARY KEY,
            job_id VARCHAR(10),
            FOREIGN KEY (job_id) REFERENCES jobs(job_id) ON DELETE NO ACTION ON UPDATE CASCADE
        );
        
        -- Trying to insert an employee with non-existing job_id will fail
        INSERT INTO employees VALUES (1, 'J999'); -- Error if 'J999' doesn't exist in jobs
        
        -- If job_id is updated in jobs table, child table updates automatically due to CASCADE
        
        ```
        
        ---
        
        **Q4: What is the difference between `DECIMAL()` and `FLOAT()` in MySQL?**
        
        **Answer:**
        
        - **DECIMAL(M,D)**
            - Fixed-point type. Stores exactly **M digits**, **D digits after decimal**.
            - Total digits = `M` (including integer and fractional part).
            - Example: `DECIMAL(6,2)` → max value = 9999.99, min = -9999.99
        - **FLOAT / DOUBLE**
            - Approximate floating-point type. May have rounding errors for fractional values.
            - Example: `FLOAT(6,2)` → total digits are approximate; exact precision not guaranteed for calculations.
        
        ✅ **Tip:** Use `DECIMAL` for money/precise calculations, `FLOAT/DOUBLE` for scientific/large-range data.
        
        ---
        
        ## **2️⃣ Practical 2 Table/Queries Viva**
        
        **Q5: What is AUTO_INCREMENT / GENERATED BY DEFAULT AS IDENTITY?**
        
        **Answer:**
        
        - **MySQL:** `AUTO_INCREMENT` generates a unique value for a column automatically on INSERT.
        - **Oracle:** `GENERATED BY DEFAULT AS IDENTITY` is similar.
        
        **Q6: What happens on `ON DELETE CASCADE`?**
        
        **Answer:**
        
        - When a **parent row is deleted**, all **child rows referencing it via FK** are deleted automatically.
        - Example:
        
        ```sql
        DELETE FROM students WHERE student_id = 1;
        -- All enrollments for student_id=1 are deleted automatically
        
        ```
        
        **Q7: Difference between `ON DELETE CASCADE` and `ON DELETE NO ACTION`**
        
        | Rule | Effect |
        | --- | --- |
        | CASCADE | Automatically deletes child rows when parent is deleted |
        | NO ACTION / RESTRICT | Prevents deletion of parent if child exists |
        
        **Q8: Explain `UNION` vs `UNION ALL` vs `INTERSECT` vs `MINUS`**
        
        | Operator | Description | Duplicate Rows |
        | --- | --- | --- |
        | UNION | Combines results of 2 queries, **removes duplicates** | No |
        | UNION ALL | Combines results of 2 queries, **keeps duplicates** | Yes |
        | INTERSECT | Returns rows **common to both queries** | N/A |
        | MINUS (EXCEPT in MySQL 8) | Returns rows in first query **not in second** | N/A |
        
        **Example:**
        
        ```sql
        SELECT email_id FROM students
        UNION
        SELECT 'guest@example.com';
        
        SELECT email_id FROM students
        INTERSECT
        SELECT email_id FROM enrollments;
        
        ```
        
        ---
        
        ## **3️⃣ Views & Updates**
        
        **Q9: Can I update a parent table if the view is updated?**
        
        - **Yes, if view is updatable.**
        - **No, if view contains:** joins, aggregates, group by, distinct.
        
        **Q10: What happens if parent table is updated?**
        
        - All child tables **respect FK rules**.
        - Example: `ON UPDATE CASCADE` → updates reflected in child table.
        
        ---
        
        ## **4️⃣ Partition Viva**
        
        **Q11: Why partition a table?**
        
        - Improve **query performance** on huge tables.
        - Easier **maintenance**: drop/archive a partition instead of entire table.
        
        **Q12: Partition types in MySQL**
        
        - **RANGE** → partition by numeric ranges (e.g., year)
        - **LIST** → partition by discrete values
        - **HASH** → distribute rows using hash function
        - **KEY** → uses MySQL internal hash function
        
        **Q13: Example RANGE Partition**
        
        ```sql
        ALTER TABLE BOOK
        PARTITION BY RANGE(Pub_Year) (
            PARTITION p1 VALUES LESS THAN (2015),
            PARTITION p2 VALUES LESS THAN (2018),
            PARTITION p3 VALUES LESS THAN MAXVALUE
        );
        
        ```
        
        ---
        
        ## **5️⃣ Aggregation / Functions / Filters**
        
        **Q14: Difference between COUNT, SUM, AVG, MAX, MIN**
        
        | Function | Purpose |
        | --- | --- |
        | COUNT(col) | Number of non-null rows |
        | SUM(col) | Sum of values |
        | AVG(col) | Average value |
        | MAX(col) | Maximum value |
        | MIN(col) | Minimum value |
        
        **Q15: Difference between DISTINCT and UNIQUE**
        
        - **DISTINCT** → used in SELECT to remove duplicates from query results
        - **UNIQUE** → used as **constraint on a column** to prevent duplicate values
        
        **Example:**
        
        ```sql
        SELECT DISTINCT email_id FROM students;
        
        ```
        
        ---
        
        ## **6️⃣ Extra Viva Notes**
        
        **Q16: What is an index and why use it?**
        
        - Index speeds up **searching** on a column.
        - Example:
        
        ```sql
        CREATE INDEX idx_email ON students(email_id);
        
        ```
        
        **Q17: Can I delete data from parent table if foreign key exists?**
        
        - Depends on **ON DELETE rule**:
            - CASCADE → yes, child deleted automatically
            - NO ACTION / RESTRICT → no, error
        
        **Q18: Difference between TRUNCATE and DELETE?**
        
        | Command | Behavior |
        | --- | --- |
        | DELETE | Deletes row(s), can use WHERE, slower |
        | TRUNCATE | Deletes all rows, resets auto_increment, cannot use WHERE, faster |
        
        ## **1️⃣ Table, Primary Key, Foreign Key, and Constraints**
        
        **Q1: What is a table in SQL?**
        
        **Answer:**
        
        - A table is a **collection of rows and columns** where data is stored.
        - **Columns** define the attributes and **rows** store the actual data.
        
        **Q2: What is a primary key (PK)?**
        
        **Answer:**
        
        - Uniquely identifies a row in a table.
        - Cannot have `NULL` values.
        - Example:
        
        ```sql
        student_id INT PRIMARY KEY
        
        ```
        
        **Q3: What is a foreign key (FK)?**
        
        **Answer:**
        
        - A column in a table that refers to the **primary key of another table** to maintain **referential integrity**.
        - Example:
        
        ```sql
        FOREIGN KEY (course_id) REFERENCES courses(course_id) ON DELETE CASCADE
        
        ```
        
        **Q4: What is referential integrity?**
        
        **Answer:**
        
        - Ensures that **relationships between tables remain consistent**.
        - No orphan records in child table are allowed.
        
        **Q5: Difference between UNIQUE and PRIMARY KEY**
        
        | Feature | PRIMARY KEY | UNIQUE |
        | --- | --- | --- |
        | Null Allowed | No | Yes (1 NULL in MySQL) |
        | Uniqueness | Yes | Yes |
        | One per Table | 1 | Multiple |
        
        **Q6: What are constraints?**
        
        - Rules applied to table columns to enforce **data integrity**.
        - Types:
            - **NOT NULL** → column cannot be empty
            - **UNIQUE** → column must have unique values
            - **PRIMARY KEY** → unique + not null
            - **FOREIGN KEY** → referential integrity
            - **CHECK** → condition must hold
        
        **Q7: What is a composite key?**
        
        - A **primary key with multiple columns**.
        - Example:
        
        ```sql
        PRIMARY KEY(student_id, course_id)
        
        ```
        
        ---
        
        ## **2️⃣ Views, Index, Synonyms, and Sequences**
        
        **Q8: What is a view?**
        
        - A virtual table created using a `SELECT` statement.
        - Types:
            - **Updatable view** → allows insert/update/delete
            - **Non-updatable view** → with joins, aggregates, group by
        
        **Q9: If you update a view, does parent table change?**
        
        - **Yes, only if view is updatable.**
        - Example:
        
        ```sql
        UPDATE student_enrollment SET grade='A+' WHERE student_id=1;
        -- updates 'enrollments' table automatically
        
        ```
        
        **Q10: What is an index?**
        
        - Speeds up data retrieval.
        - Example:
        
        ```sql
        CREATE INDEX idx_email ON students(email_id);
        
        ```
        
        **Q11: What is a sequence?**
        
        - Generates unique numbers, usually for **primary key values** (Oracle).
        - Example:
        
        ```sql
        CREATE SEQUENCE seq_student START WITH 1 INCREMENT BY 1;
        
        ```
        
        **Q12: What is a synonym in Oracle?**
        
        - An **alias** for a table, view, sequence, or other object to simplify naming.
        - Example:
        
        ```sql
        CREATE SYNONYM stu FOR students;
        
        ```
        
        ---
        
        ## **3️⃣ DDL, DML, DCL, and TCL Concepts**
        
        **Q13: DDL Commands** – Structure: CREATE, ALTER, DROP, TRUNCATE, RENAME
        
        - **CREATE** → create table, database, view
        - **ALTER** → modify table structure
        - **DROP** → delete table
        - **TRUNCATE** → remove all rows (faster than DELETE)
        - **RENAME** → rename table or column
        
        **Q14: DML Commands** – Data: SELECT, INSERT, UPDATE, DELETE, MERGE, LOCK TABLE
        
        - **SELECT** → retrieve data
        - **INSERT** → add rows
        - **UPDATE** → modify rows
        - **DELETE** → remove rows
        - **MERGE** → upsert (insert or update depending on condition)
        - **LOCK TABLE** → prevent concurrent modifications
        
        **Q15: DCL Commands** – Grant/Revoke
        
        - **GRANT** → give privileges
        - **REVOKE** → remove privileges
        
        **Q16: TCL Commands** – Commit, Rollback, Savepoint
        
        - **COMMIT** → save changes permanently
        - **ROLLBACK** → undo uncommitted changes
        - **SAVEPOINT** → set a point to rollback partially
        
        ---
        
        ## **4️⃣ SQL Functions**
        
        **Q17: Single Row Functions**
        
        - **Character Functions:** `UPPER()`, `LOWER()`, `CONCAT()`, `SUBSTR()`
        - **Numeric Functions:** `ROUND()`, `TRUNC()`, `MOD()`
        - **Date/Time Functions:** `SYSDATE()`, `NOW()`, `MONTH()`, `YEAR()`, `ADD_MONTHS()`
        
        **Example:**
        
        ```sql
        SELECT UPPER(first_name), ROUND(salary,0) FROM employees;
        
        ```
        
        **Q18: Aggregate Functions**
        
        - `COUNT()`, `SUM()`, `AVG()`, `MAX()`, `MIN()`
        
        ---
        
        ## **5️⃣ Logical Operators and Conditions**
        
        **Q19: Logical Operators**
        
        - `AND`, `OR`, `NOT`
        - Example:
        
        ```sql
        SELECT * FROM students WHERE birth_date> '2000-01-01' AND email_id LIKE '%@example.com';
        
        ```
        
        **Q20: Set Operators**
        
        - `UNION`, `UNION ALL`, `INTERSECT`, `MINUS`
        - Used to combine results of multiple queries.
        
        ---
        
        ## **6️⃣ AUTO_INCREMENT / IDENTITY / CASCADE / CHECK / UNIQUE**
        
        **Q21: AUTO_INCREMENT / GENERATED BY DEFAULT AS IDENTITY**
        
        - Automatically generates a unique value for primary key column.
        
        **Q22: ON DELETE / ON UPDATE CASCADE vs NO ACTION**
        
        | Rule | Effect |
        | --- | --- |
        | CASCADE | Delete/update child rows automatically |
        | NO ACTION / RESTRICT | Prevent delete/update if child exists |
        
        **Q23: CHECK constraint**
        
        ```sql
        credits INT CHECK (credits BETWEEN 1 AND 10)
        grade CHAR(1) CHECK (grade IN ('A','B','C','D','E','F'))
        
        ```
        
        **Q24: UNIQUE**
        
        - Ensures column values are unique, can be applied to multiple columns.
        
        ---
        
        ## **7️⃣ Partitioning**
        
        **Q25: What is partitioning?**
        
        - Divides table data into smaller, manageable pieces.
        - Types: `RANGE`, `LIST`, `HASH`, `KEY`
        - Example:
        
        ```sql
        ALTER TABLE BOOK PARTITION BY RANGE(Pub_Year) (
            PARTITION p1 VALUES LESS THAN (2015),
            PARTITION p2 VALUES LESS THAN (2018),
            PARTITION p3 VALUES LESS THAN MAXVALUE
        );
        
        ```
        
        ---
        
        ## **8️⃣ Decimal vs Float**
        
        **Q26: Difference**
        
        | Type | Description |
        | --- | --- |
        | DECIMAL(M,D) | Fixed-point, exact, M total digits, D decimal digits |
        | FLOAT/DOUBLE | Approximate, floating-point, may have rounding errors |
        
        **Example:**
        
        - `DECIMAL(6,2)` → max 9999.99
        - `FLOAT(6,2)` → may approximate values like 1234.57
        
        ---
        
        ## **9️⃣ Foreign Key / Parent-Child Behavior Examples**
        
        ```sql
        -- Parent table
        CREATE TABLE jobs (
            job_id VARCHAR(10) PRIMARY KEY
        );
        
        -- Child table
        CREATE TABLE employees (
            emp_id INT PRIMARY KEY,
            job_id VARCHAR(10),
            FOREIGN KEY (job_id) REFERENCES jobs(job_id)
                ON DELETE CASCADE
                ON UPDATE CASCADE
        );
        
        -- Insert into parent
        INSERT INTO jobs VALUES ('J101');
        INSERT INTO employees VALUES (1, 'J101');
        
        -- Update parent job_id
        UPDATE jobs SET job_id='J102' WHERE job_id='J101';
        -- Employee table job_id updates automatically (CASCADE)
        
        -- Delete parent
        DELETE FROM jobs WHERE job_id='J102';
        -- Employee record deleted automatically (CASCADE)
        
        ```
        
        ---
        
        ## **🔟 Additional Viva Tips**
        
        1. **Changing a parent table column** → affects child table based on FK rules.
        2. **Updating through a view** → allowed only if view is updatable.
        3. **Indexes** → speed up searches; primary keys automatically create indexes.
        4. **Truncate vs Delete** → truncate resets auto_increment, delete doesn’t.
        5. **Merge** → used to insert/update depending on whether row exists.
        6. **Union removes duplicates, Union All keeps duplicates**
        
        ---
        
    
- EXP3
    - PROGRAMS
        - Movie Database Queries
            1. Consider the schema for MovieDatabase:
            ACTOR (Act_id, Act_Name, Act_Gender) DIRECTOR (Dir_id, Dir_Name,
            Dir_Phone)
            MOVIES (Mov_id, Mov_Title, Mov_Year, Mov_Lang, Dir_id) MOVIE_CAST
            (Act_id, Mov_id, Role) RATING (Mov_id,
            Rev_Stars) Write SQL queries to
            2. List the titles of all movies directed by‘Hitchcock’.
            3. Find the movie names where one or more actors acted in two or moremovies.
            4. List all actors who acted in a movie before 2000 and also in a
            DBMS Lab ThirdYear Computer Engineering
            movieafter 2015 (use JOINoperation).
            5. Find the title of movies and number of stars for each movie that has at least one
            rating and find the highest number of stars that movie received. Sort the result by movie
            title.
            6. Update rating of all movies directed by ‘Steven Spielberg’ to5.
            - solution
        - self join on its own
            
            ## **2. Self Join on Student Table**
            
            ### **Step 1: Create Table**
            
            ```sql
            CREATE TABLE Student (
                Roll INT PRIMARY KEY,
                Name VARCHAR(100),
                Address VARCHAR(100),
                Branch VARCHAR(50),
                Class VARCHAR(20)
            );
            
            ```
            
            ### **Step 2: Insert Sample Data**
            
            ```sql
            INSERT INTO Student VALUES
            (1, 'Alice', 'CityA', 'CSE', 'TY'),
            (2, 'Bob', 'CityB', 'ECE', 'TY'),
            (3, 'Charlie', 'CityA', 'CSE', 'TY'),
            (4, 'David', 'CityC', 'ME', 'TY');
            
            ```
            
            ### **Step 3: Self Join Query Example**
            
            **Find students from the same city:**
            
            ```sql
            SELECT S1.Name AS Student1, S2.Name AS Student2, S1.Address
            FROM Student S1
            JOIN Student S2 ON S1.Address = S2.Address
            WHERE S1.Roll <> S2.Roll;
            
            ```
            
        - view of that cinema i think
            
            ## **3. View Creation for Salesman Table**
            
            ### **Step 1: Create Table**
            
            ```sql
            CREATE TABLE Salesman (
                SalesmanID INT PRIMARY KEY,
                Name VARCHAR(100),
                City VARCHAR(50)
            );
            
            ```
            
            ### **Step 2: Insert Sample Data**
            
            ```sql
            INSERT INTO Salesman VALUES
            (101, 'John', 'New York'),
            (102, 'Alice', 'Los Angeles'),
            (103, 'Bob', 'Chicago');
            
            ```
            
            ### **Step 3: Create View**
            
            ```sql
            CREATE VIEW SalespersonView AS
            SELECT SalesmanID, Name, City
            FROM Salesman;
            
            ```
            
            ### **Step 4: Query the View**
            
            ```sql
            SELECT * FROM SalespersonView;
            
            ```
            
            ---
            
            ✅ This is the **complete solution** including **table creation, sample insertion, queries, self join, and view** for all your problem statements.
            
        - members and committee and tables
            
            ## **Practical 3: Joins in MySQL**
            
            ### **Problem Statement:**
            
            You are required to work with two tables: `members` and `committees`.
            
            Your tasks are to:
            
            1. Create the database and tables.
            2. Insert sample data.
            3. Demonstrate various types of **joins** (`INNER JOIN`, `LEFT JOIN`, `RIGHT JOIN`, `CROSS JOIN`, and `FULL OUTER JOIN` using `UNION` in MySQL).
            4. Identify members who are or are not in the committee and vice versa.
            5. Explore the behavior of joins when data exists in one table but not the other.
            
            ---
            
            ### **Database Setup**
            
            ```sql
            -- Create database
            CREATE DATABASE pract3;
            USE pract3;
            
            -- Create members table
            CREATE TABLE members (
                member_id INT AUTO_INCREMENT,
                name VARCHAR(100),
                PRIMARY KEY (member_id)
            );
            
            -- Create committees table
            CREATE TABLE committees (
                committee_id INT AUTO_INCREMENT,
                name VARCHAR(100),
                PRIMARY KEY (committee_id)
            );
            
            -- Insert data into members
            INSERT INTO members(name) VALUES('John'),('Jane'),('Mary'),('David'),('Amelia');
            
            -- Insert data into committees
            INSERT INTO committees(name) VALUES('John'),('Mary'),('Amelia'),('Joe');
            
            ```
            
            **Members Table**
            
            | --- | --- |
            
            **Committees Table**
            
            | --- | --- |
            
            ---
            
            ## **1. INNER JOIN**
            
            **Definition:** Returns only the rows where there is a match in both tables.
            
            ```sql
            SELECT
                m.member_id,
                m.name AS member,
                c.committee_id,
                c.name AS committee
            FROM members m
            INNER JOIN committees c ON m.name = c.name;
            
            ```
            
            **Result:**
            
            | --- | --- | --- | --- |
            
            ---
            
            ## **2. LEFT JOIN (LEFT OUTER JOIN)**
            
            **Definition:** Returns all rows from the **left table** (`members`) and matched rows from the right table (`committees`).
            
            If there is no match, NULL is returned for the right table.
            
            ```sql
            SELECT
                m.member_id,
                m.name AS member,
                c.committee_id,
                c.name AS committee
            FROM members m
            LEFT JOIN committees c USING(name);
            
            ```
            
            **Result:**
            
            | --- | --- | --- | --- |
            
            **Find members who are NOT in any committee:**
            
            ```sql
            SELECT m.member_id, m.name
            FROM members m
            LEFT JOIN committees c USING(name)
            WHERE c.committee_id IS NULL;
            
            ```
            
            | --- | --- |
            
            ---
            
            ## **3. RIGHT JOIN (RIGHT OUTER JOIN)**
            
            **Definition:** Returns all rows from the **right table** (`committees`) and matched rows from the left table (`members`).
            
            If there is no match, NULL is returned for the left table.
            
            ```sql
            SELECT
                m.member_id,
                m.name AS member,
                c.committee_id,
                c.name AS committee
            FROM members m
            RIGHT JOIN committees c USING(name);
            
            ```
            
            **Result:**
            
            | --- | --- | --- | --- |
            
            **Find committees with members NOT in the member table:**
            
            ```sql
            SELECT c.committee_id, c.name
            FROM members m
            RIGHT JOIN committees c USING(name)
            WHERE m.member_id IS NULL;
            
            ```
            
            | --- | --- |
            
            ---
            
            ## **4. CROSS JOIN**
            
            **Definition:** Returns the **Cartesian product** of the two tables.
            
            All possible combinations of rows from both tables.
            
            ```sql
            SELECT m.member_id, m.name AS member, c.committee_id, c.name AS committee
            FROM members m
            CROSS JOIN committees c;
            
            ```
            
            **Result:** 5 members × 4 committees = 20 rows.
            
            ---
            
            ## **5. FULL OUTER JOIN (MySQL workaround)**
            
            **Definition:** Combines LEFT JOIN and RIGHT JOIN to get all rows from both tables.
            
            MySQL does not have a native `FULL OUTER JOIN`.
            
            ```sql
            SELECT *
            FROM members m
            LEFT JOIN committees c ON m.name = c.name
            UNION ALL
            SELECT *
            FROM members m
            RIGHT JOIN committees c ON m.name = c.name
            WHERE m.name IS NULL;
            
            ```
            
            **Result:**
            
            | --- | --- | --- | --- |
            
            ---
            
            ### **Summary Table of Joins**
            
            | --- | --- | --- |
            
    - notes
        
        # **SQL Notes: Views, Joins, and Subqueries**
        
        ---
        
        ## **1. Views in SQL**
        
        ### **Definition:**
        
        - A **view** is a **virtual table** that is based on the result of an SQL query.
        - It **does not store data physically**, but the query result can be accessed like a table.
        - Views are used to:
            - Simplify complex queries
            - Provide security by restricting columns/rows
            - Present data in a different way without altering the original tables
        
        ---
        
        ### **Syntax to Create a View:**
        
        ```sql
        CREATE VIEW view_name AS
        SELECT column1, column2, ...
        FROM table_name
        WHERE condition;
        
        ```
        
        ---
        
        ### **Example:**
        
        **Table: employees**
        
        | emp_id | emp_name | salary | dept_id |
        | --- | --- | --- | --- |
        | 1 | Alice | 50000 | 101 |
        | 2 | Bob | 60000 | 102 |
        | 3 | Charlie | 55000 | 101 |
        
        **Create a view of employees in dept 101:**
        
        ```sql
        CREATE VIEW dept101_employees AS
        SELECT emp_name, salary
        FROM employees
        WHERE dept_id = 101;
        
        ```
        
        **Query the view:**
        
        ```sql
        SELECT * FROM dept101_employees;
        
        ```
        
        **Result:**
        
        | emp_name | salary |
        | --- | --- |
        | Alice | 50000 |
        | Charlie | 55000 |
        
        ---
        
        ### **Types of Views:**
        
        1. **Simple View** – Based on a single table, cannot have aggregates or joins.
        2. **Complex View** – Based on multiple tables or includes joins, aggregates, or subqueries.
        3. **Materialized View (in some DBs)** – Stores data physically, refreshed periodically.
        
        ---
        
        ## **2. Joins in SQL**
        
        ### **Definition:**
        
        - A **join** combines rows from **two or more tables** based on a related column.
        - Types of joins determine which rows are included in the result.
        
        ---
        
        ### **2.1 Inner Join**
        
        - Returns only the rows where **matching values exist in both tables**.
        - Syntax:
        
        ```sql
        SELECT t1.column1, t2.column2
        FROM table1 t1
        INNER JOIN table2 t2
        ON t1.common_column = t2.common_column;
        
        ```
        
        **Example:**
        
        **Tables:**
        
        **employees**
        
        | emp_id | emp_name | dept_id |
        | --- | --- | --- |
        | 1 | Alice | 101 |
        | 2 | Bob | 102 |
        | 3 | Charlie | 101 |
        
        **departments**
        
        | dept_id | dept_name |
        | --- | --- |
        | 101 | HR |
        | 102 | IT |
        | 103 | Marketing |
        
        **Query:**
        
        ```sql
        SELECT e.emp_name, d.dept_name
        FROM employees e
        INNER JOIN departments d
        ON e.dept_id = d.dept_id;
        
        ```
        
        **Result:**
        
        | emp_name | dept_name |
        | --- | --- |
        | Alice | HR |
        | Bob | IT |
        | Charlie | HR |
        
        ---
        
        ### **2.2 Outer Join**
        
        - Returns all rows from **one or both tables** even if there is no match.
        - **Types:**
            1. **Left Outer Join** – All rows from the **left table** and matched rows from the right table.
        
        ```sql
        SELECT e.emp_name, d.dept_name
        FROM employees e
        LEFT JOIN departments d
        ON e.dept_id = d.dept_id;
        
        ```
        
        - **Right Outer Join** – All rows from the **right table** and matched rows from the left table.
        
        ```sql
        SELECT e.emp_name, d.dept_name
        FROM employees e
        RIGHT JOIN departments d
        ON e.dept_id = d.dept_id;
        
        ```
        
        - **Full Outer Join** – All rows from **both tables** (MariaDB/MySQL doesn't support directly; can simulate with UNION).
        
        ---
        
        ### **2.3 Cross Join**
        
        - Returns **Cartesian product** of two tables (every row of table1 with every row of table2).
        
        ```sql
        SELECT e.emp_name, d.dept_name
        FROM employees e
        CROSS JOIN departments d;
        
        ```
        
        **Result:** (3 employees × 3 departments = 9 rows)
        
        | emp_name | dept_name |
        | --- | --- |
        | Alice | HR |
        | Alice | IT |
        | Alice | Marketing |
        | Bob | HR |
        | Bob | IT |
        | Bob | Marketing |
        | Charlie | HR |
        | Charlie | IT |
        | Charlie | Marketing |
        
        ---
        
        ### **2.4 Natural Join**
        
        - Automatically joins **columns with the same name** in both tables.
        - Syntax:
        
        ```sql
        SELECT *
        FROM employees
        NATURAL JOIN departments;
        
        ```
        
        - Avoid using if column names are not clear, better to use **explicit join conditions**.
        
        ---
        
        ### **2.5 Self Join**
        
        - A table is joined with **itself** to compare rows within the same table.
        - Often uses **aliases** for differentiation.
        
        **Example: Employees and Managers**
        
        | emp_id | emp_name | manager_id |
        | --- | --- | --- |
        | 1 | Alice | 3 |
        | 2 | Bob | 3 |
        | 3 | Charlie | NULL |
        
        **Query to get employee and their manager:**
        
        ```sql
        SELECT e.emp_name AS Employee, m.emp_name AS Manager
        FROM employees e
        LEFT JOIN employees m
        ON e.manager_id = m.emp_id;
        
        ```
        
        **Result:**
        
        | Employee | Manager |
        | --- | --- |
        | Alice | Charlie |
        | Bob | Charlie |
        | Charlie | NULL |
        
        ---
        
        ## **3. Subqueries**
        
        ### **Definition:**
        
        - A query inside another query, used to compute a value for the outer query.
        - Types:
            1. **Single-row subquery** – returns **one row**.
            2. **Multiple-row subquery** – returns **multiple rows**.
            3. **Correlated subquery** – depends on the outer query.
        
        ---
        
        ### **Examples:**
        
        **1. Single-row subquery**
        
        ```sql
        SELECT emp_name, salary
        FROM employees
        WHERE salary = (SELECT MAX(salary) FROM employees);
        
        ```
        
        **2. Multiple-row subquery**
        
        ```sql
        SELECT emp_name, salary
        FROM employees
        WHERE dept_id IN (SELECT dept_id FROM departments WHERE dept_name = 'HR');
        
        ```
        
        **3. Correlated subquery**
        
        ```sql
        SELECT e1.emp_name, e1.salary
        FROM employees e1
        WHERE e1.salary > (SELECT AVG(e2.salary)
                           FROM employees e2
                           WHERE e1.dept_id = e2.dept_id);
        
        ```
        
        - This compares employee salary with the **average salary of their department**.
        
        ---
        
        ### ✅ **Summary Table of Joins**
        
        | Join Type | What it Returns | Syntax Example |
        | --- | --- | --- |
        | INNER JOIN | Only matching rows in both tables | `FROM t1 INNER JOIN t2 ON t1.id=t2.id` |
        | LEFT OUTER JOIN | All rows from left + matched right rows | `FROM t1 LEFT JOIN t2 ON t1.id=t2.id` |
        | RIGHT OUTER JOIN | All rows from right + matched left rows | `FROM t1 RIGHT JOIN t2 ON t1.id=t2.id` |
        | FULL OUTER JOIN | All rows from both tables (match where possible) | `t1 LEFT JOIN t2 ... UNION t1 RIGHT JOIN` |
        | CROSS JOIN | Cartesian product of both tables | `FROM t1 CROSS JOIN t2` |
        | NATURAL JOIN | Auto join on columns with same names | `FROM t1 NATURAL JOIN t2` |
        | SELF JOIN | Table joined with itself | `FROM t1 t1_alias JOIN t1 t2_alias` |
    - viva questions
        
        ## **Viva Questions & Answers: Movie Database Queries**
        
        ### **General Questions**
        
        1. **Q:** What is a database schema?
            
            **A:** A database schema is the structure of a database that defines how data is organized, including tables, columns, data types, relationships, and constraints.
            
        2. **Q:** What are the primary tables in the MovieDatabase practical?
            
            **A:** `ACTOR`, `DIRECTOR`, `MOVIES`, `MOVIE_CAST`, and `RATING`.
            
        3. **Q:** What is the purpose of the `MOVIE_CAST` table?
            
            **A:** It represents a many-to-many relationship between actors and movies, with an additional `Role` attribute.
            
        4. **Q:** What is a view in SQL?
            
            **A:** A view is a virtual table created from a query. It doesn’t store data physically but provides a way to simplify complex queries or restrict data access.
            
        
        ---
        
        ### **Join-Based Questions**
        
        1. **Q:** What is an INNER JOIN?
            
            **A:** Returns only rows where there is a match in both tables.
            
        2. **Q:** Write a query to list all movies directed by 'Alfred Hitchcock'.
            
            **A:**
            
            ```sql
            SELECT m.mov_title
            FROM movies m
            INNER JOIN director d ON m.dir_id = d.dir_id
            WHERE d.dir_name = 'Alfred Hitchcock';
            
            ```
            
            **Explanation:** Matches movies to director using `dir_id` and filters by director name.
            
        3. **Q:** What is a LEFT JOIN?
            
            **A:** Returns all rows from the **left table**, and matching rows from the right table. Non-matching rows have `NULL` for right table columns.
            
        4. **Q:** How can you find members who are not in any committee?
            
            **A:**
            
            ```sql
            SELECT m.member_id, m.name
            FROM members m
            LEFT JOIN committees c USING(name)
            WHERE c.committee_id IS NULL;
            
            ```
            
        5. **Q:** What is a RIGHT JOIN?
            
            **A:** Returns all rows from the **right table**, and matching rows from the left table. Non-matching left table columns are `NULL`.
            
        6. **Q:** How to find committee members not present in the members table?
            
            **A:**
            
            ```sql
            SELECT c.committee_id, c.name
            FROM members m
            RIGHT JOIN committees c USING(name)
            WHERE m.member_id IS NULL;
            
            ```
            
        7. **Q:** What is a CROSS JOIN?
            
            **A:** Returns the Cartesian product of two tables (all combinations of rows).
            
        8. **Q:** MySQL does not support FULL OUTER JOIN. How can you simulate it?
            
            **A:** By using `LEFT JOIN UNION ALL RIGHT JOIN`:
            
            ```sql
            SELECT *
            FROM members m
            LEFT JOIN committees c ON m.name = c.name
            UNION ALL
            SELECT *
            FROM members m
            RIGHT JOIN committees c ON m.name = c.name
            WHERE m.name IS NULL;
            
            ```
            
        
        ---
        
        ### **Self Join Questions**
        
        1. **Q:** What is a self join?
            
            **A:** A self join is when a table is joined with itself to compare rows within the same table. Aliases are used to differentiate instances.
            
        2. **Q:** Give an example of self join on the Student table.
            
            **A:**
            
            ```sql
            SELECT S1.Name AS Student1, S2.Name AS Student2, S1.Address
            FROM Student S1
            JOIN Student S2 ON S1.Address = S2.Address
            WHERE S1.Roll <> S2.Roll;
            
            ```
            
            **Explanation:** Finds students from the same city but different rolls.
            
        3. **Q:** Why do we use `S1.Roll <> S2.Roll` in self join?
            
            **A:** To avoid pairing a student with themselves.
            
        
        ---
        
        ### **Subquery & Correlated Subquery Questions**
        
        1. **Q:** What is a subquery?
            
            **A:** A query inside another query, used to return a value or set of values to the outer query.
            
        2. **Q:** Give an example of a subquery to find movies with Leonardo DiCaprio.
            
            **A:**
            
            ```sql
            SELECT mov_title
            FROM movies
            WHERE mov_id IN (
              SELECT mov_id
              FROM movie_cast
              WHERE act_id = (SELECT act_id FROM actor WHERE act_name='Leonardo DiCaprio')
            );
            
            ```
            
        3. **Q:** What is a correlated subquery?
            
            **A:** A subquery that depends on the outer query for its values.
            
        4. **Q:** Give an example of a correlated subquery to find movies with maximum rating.
            
            **A:**
            
            ```sql
            SELECT m.mov_title, r.rev_stars
            FROM movies m
            INNER JOIN rating r ON m.mov_id = r.mov_id
            WHERE r.rev_stars = (SELECT MAX(rev_stars) FROM rating WHERE mov_id = m.mov_id);
            
            ```
            
        
        ---
        
        ### **View-Based Questions**
        
        1. **Q:** What is the advantage of using a view?
            
            **A:** Simplifies complex queries, restricts access to sensitive data, and provides a reusable virtual table.
            
        2. **Q:** How do you create a view of movies and directors?
            
            **A:**
            
            ```sql
            CREATE OR REPLACE VIEW view_movies_director AS
            SELECT m.mov_title, m.mov_year, d.dir_name
            FROM movies m
            INNER JOIN director d ON m.dir_id = d.dir_id;
            
            ```
            
        3. **Q:** Can you update data using a view?
            
            **A:** Yes, **if the view is simple** (based on a single table without aggregations or joins).
            
        
        ---
        
        ### **Update & Aggregate Questions**
        
        1. **Q:** How to update ratings of all movies directed by Steven Spielberg to 5?
            
            **A:**
            
            ```sql
            UPDATE rating r
            INNER JOIN movies m ON r.mov_id = m.mov_id
            INNER JOIN director d ON m.dir_id = d.dir_id
            SET r.rev_stars = 5
            WHERE d.dir_name = 'Steven Spielberg';
            
            ```
            
        2. **Q:** How to find the number of ratings and maximum stars per movie?
            
            **A:**
            
            ```sql
            SELECT m.mov_title, COUNT(r.rev_stars) AS num_ratings, MAX(r.rev_stars) AS highest_star
            FROM movies m
            INNER JOIN rating r ON m.mov_id = r.mov_id
            GROUP BY m.mov_title
            ORDER BY m.mov_title;
            
            ```
            
        3. **Q:** What does `GROUP BY` and `HAVING` do?
            
            **A:** `GROUP BY` aggregates rows based on a column. `HAVING` filters groups after aggregation.
            
        4. **Q:** How to find actors who acted in 2 or more movies?
            
            **A:**
            
            ```sql
            SELECT a.act_name, COUNT(mc.mov_id) AS num_movies
            FROM movie_cast mc
            INNER JOIN actor a ON mc.act_id = a.act_id
            GROUP BY a.act_name
            HAVING COUNT(mc.mov_id) >= 2;
            
            ```
            
        
        ---
        
        ### **Miscellaneous / Conceptual Questions**
        
        1. **Q:** What is the difference between INNER JOIN and OUTER JOIN?
            
            **A:**
            
            - INNER JOIN: Only matching rows.
            - OUTER JOIN: Includes all rows from one or both tables, with `NULL` for unmatched columns.
        2. **Q:** What is the difference between CROSS JOIN and INNER JOIN?
            
            **A:**
            
            - CROSS JOIN: Cartesian product (all combinations).
            - INNER JOIN: Only matching rows based on a condition.
        3. **Q:** Why do we use aliases in SQL joins?
            
            **A:** To simplify table references and differentiate between tables, especially in self joins.
            
        4. **Q:** Explain the use of `USING(column_name)` in joins.
            
            **A:** `USING` is shorthand when the join column has the same name in both tables.
            
        5. **Q:** What happens if you don’t use `WHERE` in LEFT JOIN for filtering NULLs?
            
            **A:** You’ll get all rows from the left table, including matches and unmatched rows with NULLs.
            
        
        ---
        
        ✅ **Tip for viva:** Always mention **tables, join types, and conditions** when answering, and if possible, draw a small example on the board.
        
- EXP4
    - notes
        - Basic stuff
            
            # **PL/SQL Control Structures and Loops**
            
            PL/SQL (Procedural Language/SQL) is Oracle’s procedural extension to SQL. It allows you to write **blocks of code** with variables, loops, conditional statements, exception handling, and more.
            
            A typical PL/SQL block:
            
            ```
            DECLARE
                -- Variable declarations
                v_variable_name datatype [:= initial_value];
            BEGIN
                -- Procedural statements
            EXCEPTION
                -- Exception handling
            END;
            
            ```
            
            ---
            
            ## **1. Conditional Statements**
            
            Conditional statements allow you to control the flow based on logical conditions.
            
            ### **1.1 IF Statement**
            
            Syntax:
            
            ```
            IF condition THEN
                -- statements if condition is TRUE
            ELSIF another_condition THEN
                -- statements if another_condition is TRUE
            ELSE
                -- statements if none of the above conditions are TRUE
            END IF;
            
            ```
            
            **Example:**
            
            ```
            DECLARE
                v_salary NUMBER := 3000;
            BEGIN
                IF v_salary > 5000 THEN
                    DBMS_OUTPUT.PUT_LINE('High Salary');
                ELSIF v_salary BETWEEN 3000 AND 5000 THEN
                    DBMS_OUTPUT.PUT_LINE('Medium Salary');
                ELSE
                    DBMS_OUTPUT.PUT_LINE('Low Salary');
                END IF;
            END;
            
            ```
            
            **Notes:**
            
            - `ELSIF` is optional.
            - `ELSE` is optional.
            - Each `IF` must end with `END IF;`.
            
            ---
            
            ### **1.2 CASE Statement**
            
            Used as an alternative to multiple `IF-ELSIF` conditions.
            
            ### **Simple CASE**
            
            ```
            CASE expression
                WHEN value1 THEN statements;
                WHEN value2 THEN statements;
                ELSE statements;
            END CASE;
            
            ```
            
            **Example:**
            
            ```
            DECLARE
                v_grade CHAR := 'B';
            BEGIN
                CASE v_grade
                    WHEN 'A' THEN DBMS_OUTPUT.PUT_LINE('Excellent');
                    WHEN 'B' THEN DBMS_OUTPUT.PUT_LINE('Good');
                    WHEN 'C' THEN DBMS_OUTPUT.PUT_LINE('Average');
                    ELSE DBMS_OUTPUT.PUT_LINE('Poor');
                END CASE;
            END;
            
            ```
            
            ### **Searched CASE**
            
            ```
            CASE
                WHEN condition1 THEN statements;
                WHEN condition2 THEN statements;
                ELSE statements;
            END CASE;
            
            ```
            
            **Example:**
            
            ```
            DECLARE
                v_marks NUMBER := 75;
            BEGIN
                CASE
                    WHEN v_marks >= 90 THEN DBMS_OUTPUT.PUT_LINE('A+');
                    WHEN v_marks >= 75 THEN DBMS_OUTPUT.PUT_LINE('A');
                    WHEN v_marks >= 60 THEN DBMS_OUTPUT.PUT_LINE('B');
                    ELSE DBMS_OUTPUT.PUT_LINE('Fail');
                END CASE;
            END;
            
            ```
            
            ---
            
            ## **2. Loops**
            
            PL/SQL supports 3 types of loops:
            
            1. **Basic LOOP**
            2. **WHILE LOOP**
            3. **FOR LOOP**
            
            ---
            
            ### **2.1 Basic LOOP**
            
            Executes repeatedly until explicitly exited using `EXIT` or `EXIT WHEN`.
            
            **Syntax:**
            
            ```
            LOOP
                -- statements
                EXIT WHEN condition;
            END LOOP;
            
            ```
            
            **Example:**
            
            ```
            DECLARE
                v_counter NUMBER := 1;
            BEGIN
                LOOP
                    DBMS_OUTPUT.PUT_LINE('Counter: ' || v_counter);
                    v_counter := v_counter + 1;
                    EXIT WHEN v_counter > 5;
                END LOOP;
            END;
            
            ```
            
            ---
            
            ### **2.2 WHILE LOOP**
            
            Executes as long as the condition is TRUE.
            
            **Syntax:**
            
            ```
            WHILE condition LOOP
                -- statements
            END LOOP;
            
            ```
            
            **Example:**
            
            ```
            DECLARE
                v_counter NUMBER := 1;
            BEGIN
                WHILE v_counter <= 5 LOOP
                    DBMS_OUTPUT.PUT_LINE('Counter: ' || v_counter);
                    v_counter := v_counter + 1;
                END LOOP;
            END;
            
            ```
            
            ---
            
            ### **2.3 FOR LOOP**
            
            Executes a fixed number of times. Automatically increments the loop index.
            
            **Syntax:**
            
            ```
            FOR index IN [REVERSE] start_value..end_value LOOP
                -- statements
            END LOOP;
            
            ```
            
            **Example (Normal):**
            
            ```
            BEGIN
                FOR i IN 1..5 LOOP
                    DBMS_OUTPUT.PUT_LINE('Iteration: ' || i);
                END LOOP;
            END;
            
            ```
            
            **Example (Reverse):**
            
            ```
            BEGIN
                FOR i IN REVERSE 5..1 LOOP
                    DBMS_OUTPUT.PUT_LINE('Iteration: ' || i);
                END LOOP;
            END;
            
            ```
            
            **Notes:**
            
            - Index variable is **read-only**.
            - No need to declare it explicitly.
            
            ---
            
            ## **3. Nested Loops and Nested IFs**
            
            - Loops and conditional statements can be nested inside each other.
            - **Important:** Always close loops and IFs correctly with `END LOOP;` and `END IF;`.
            
            **Example: Nested FOR loops**
            
            ```
            BEGIN
                FOR i IN 1..3 LOOP
                    FOR j IN 1..2 LOOP
                        DBMS_OUTPUT.PUT_LINE('i=' || i || ' j=' || j);
                    END LOOP;
                END LOOP;
            END;
            
            ```
            
            **Example: Nested IF**
            
            ```
            DECLARE
                v_marks NUMBER := 85;
            BEGIN
                IF v_marks >= 50 THEN
                    IF v_marks >= 75 THEN
                        DBMS_OUTPUT.PUT_LINE('Distinction');
                    ELSE
                        DBMS_OUTPUT.PUT_LINE('Pass');
                    END IF;
                ELSE
                    DBMS_OUTPUT.PUT_LINE('Fail');
                END IF;
            END;
            
            ```
            
            ---
            
            ## **4. EXIT, CONTINUE Statements in Loops**
            
            ### **4.1 EXIT**
            
            - Exits the loop immediately when a condition is met.
            
            ```
            LOOP
                EXIT WHEN condition;
            END LOOP;
            
            ```
            
            ### **4.2 CONTINUE**
            
            - Skips the current iteration and moves to the next iteration.
            
            **Example:**
            
            ```
            BEGIN
                FOR i IN 1..5 LOOP
                    IF i = 3 THEN
                        CONTINUE;
                    END IF;
                    DBMS_OUTPUT.PUT_LINE('i=' || i);
                END LOOP;
            END;
            
            ```
            
            **Output:** 1, 2, 4, 5 (skips 3)
            
            ---
            
            ## **5. GOTO Statement (Optional)**
            
            - Used to jump to a labeled statement.
            - Not recommended for complex code, but allowed in PL/SQL.
            
            **Syntax:**
            
            ```
            <<label_name>>
                -- statement
            
            GOTO label_name;
            
            ```
            
            **Example:**
            
            ```
            BEGIN
                FOR i IN 1..5 LOOP
                    IF i = 3 THEN
                        GOTO skip;
                    END IF;
                    DBMS_OUTPUT.PUT_LINE('i=' || i);
                END LOOP;
            
                <<skip>>
                DBMS_OUTPUT.PUT_LINE('Skipped iteration 3');
            END;
            
            ```
            
            ---
            
            ## **6. Tips for Oracle Practical Exams**
            
            1. Always use `DBMS_OUTPUT.PUT_LINE()` for output.
            2. Always end blocks correctly: `END;`.
            3. Nested loops and IFs are common in exam questions.
            4. Use `EXIT WHEN` for conditional loop termination.
            5. FOR loops are preferred for counting iterations.
            6. CASE statements are often preferred over multiple IF-ELSIF for readability.
            
            ---
            
            ### ✅ **Quick Comparison Table**
            
            | --- | --- | --- |
            
        - EXCEPTION HANDLING
            
            # **PL/SQL Exception Handling**
            
            PL/SQL allows you to handle **runtime errors** gracefully using **exceptions**. Exceptions prevent abnormal termination of programs and allow you to take corrective actions.
            
            A PL/SQL block with exception handling:
            
            ```
            DECLARE
                -- variable declarations
            BEGIN
                -- executable statements
            EXCEPTION
                -- exception handling statements
            END;
            
            ```
            
            **Flow of a PL/SQL block with exceptions:**
            
            1. Declaration section (`DECLARE`) – optional.
            2. Execution section (`BEGIN`) – normal statements executed sequentially.
            3. Exception section (`EXCEPTION`) – handles errors when they occur.
            
            ---
            
            ## **1. Types of Exceptions**
            
            ### **1.1 Predefined Exceptions (Common Runtime Errors)**
            
            Oracle provides several **predefined exceptions**. These are automatically raised when certain errors occur.
            
            | --- | --- |
            
            **Example: ZERO_DIVIDE**
            
            ```
            DECLARE
                v_num NUMBER := 10;
                v_den NUMBER := 0;
                v_result NUMBER;
            BEGIN
                v_result := v_num / v_den;
            EXCEPTION
                WHEN ZERO_DIVIDE THEN
                    DBMS_OUTPUT.PUT_LINE('Error: Division by zero is not allowed.');
            END;
            
            ```
            
            ---
            
            ### **1.2 User-Defined Exceptions**
            
            - You can declare your own exception in the `DECLARE` section.
            - Typically raised using the `RAISE` statement.
            - Optional: Associate with an Oracle error number using `PRAGMA EXCEPTION_INIT`.
            
            **Example: Custom Exception**
            
            ```
            DECLARE
                v_age NUMBER := 15;
                age_exception EXCEPTION;
            BEGIN
                IF v_age < 18 THEN
                    RAISE age_exception;  -- manually raise exception
                END IF;
            EXCEPTION
                WHEN age_exception THEN
                    DBMS_OUTPUT.PUT_LINE('Error: Age must be 18 or above.');
            END;
            
            ```
            
            **Example with PRAGMA EXCEPTION_INIT**
            
            ```
            DECLARE
                dup_error EXCEPTION;
                PRAGMA EXCEPTION_INIT(dup_error, -00001); -- ORA-00001 is unique constraint
            BEGIN
                INSERT INTO students(student_id, name) VALUES(1, 'John');
            EXCEPTION
                WHEN dup_error THEN
                    DBMS_OUTPUT.PUT_LINE('Duplicate entry error.');
            END;
            
            ```
            
            ---
            
            ### **1.3 System-Defined Exceptions**
            
            - Oracle automatically maps **Oracle error numbers (ORA- errors)** to PL/SQL exceptions.
            - Some common ones:
            
            ---
            
            ## **2. Syntax of Exception Handling**
            
            ```
            DECLARE
                -- variable declarations
            BEGIN
                -- executable statements
            EXCEPTION
                WHEN exception_name1 THEN
                    -- statements to handle exception 1
                WHEN exception_name2 THEN
                    -- statements to handle exception 2
                WHEN OTHERS THEN
                    -- catch all other exceptions
            END;
            
            ```
            
            **Notes:**
            
            1. The `EXCEPTION` section comes **after the BEGIN block**.
            2. `WHEN OTHERS` catches **any exception not explicitly handled**. Must be last.
            3. You can nest exceptions inside **nested blocks**.
            
            ---
            
            ## **3. Common Oracle Exceptions**
            
            | --- | --- | --- |
            
            ---
            
            ## **4. Exception Propagation**
            
            - If an exception is **not handled** in the current block, it **propagates to the calling block**.
            - If uncaught anywhere, PL/SQL block terminates abnormally.
            
            **Example: Propagation**
            
            ```
            DECLARE
                v_num NUMBER := 10;
                v_den NUMBER := 0;
            BEGIN
                v_num := v_num / v_den;  -- raises ZERO_DIVIDE
            EXCEPTION
                WHEN VALUE_ERROR THEN
                    DBMS_OUTPUT.PUT_LINE('Value error handled.');
            END;
            
            ```
            
            - Here, `ZERO_DIVIDE` is **not caught**, so block terminates with error.
            
            ---
            
            ## **5. Nested Blocks and Local Exception Handling**
            
            - Each block can have its own exception handling.
            - Allows **handling specific exceptions locally** while others propagate.
            
            **Example:**
            
            ```
            BEGIN
                DECLARE
                    v_num NUMBER := 10;
                    v_den NUMBER := 0;
                    v_result NUMBER;
                BEGIN
                    v_result := v_num / v_den;  -- raises ZERO_DIVIDE
                EXCEPTION
                    WHEN ZERO_DIVIDE THEN
                        DBMS_OUTPUT.PUT_LINE('Division by zero handled locally.');
                END;
            
                DBMS_OUTPUT.PUT_LINE('Outer block continues...');
            END;
            
            ```
            
            ---
            
            ## **6. RAISE_APPLICATION_ERROR**
            
            - Used to **raise user-defined errors with custom ORA codes** (-20000 to -20999).
            - Useful in procedures/functions for **business logic validation**.
            
            **Syntax:**
            
            ```
            RAISE_APPLICATION_ERROR(error_number, 'error_message');
            
            ```
            
            **Example:**
            
            ```
            DECLARE
                v_age NUMBER := 15;
            BEGIN
                IF v_age < 18 THEN
                    RAISE_APPLICATION_ERROR(-20001, 'Age must be 18 or above');
                END IF;
            EXCEPTION
                WHEN OTHERS THEN
                    DBMS_OUTPUT.PUT_LINE(SQLERRM);  -- prints error message
            END;
            
            ```
            
            ---
            
            ## **7. Using SQLERRM and SQLCODE**
            
            - `SQLCODE` → returns the Oracle error number.
            - `SQLERRM` → returns the error message.
            
            **Example:**
            
            ```
            BEGIN
                NULL;  -- some code
            EXCEPTION
                WHEN OTHERS THEN
                    DBMS_OUTPUT.PUT_LINE('Error code: ' || SQLCODE);
                    DBMS_OUTPUT.PUT_LINE('Error message: ' || SQLERRM);
            END;
            
            ```
            
            - Helps in logging and debugging errors.
            
            ---
            
            ## **8. Tips for Exception Handling in Oracle**
            
            1. Always **handle common exceptions** like `NO_DATA_FOUND` and `DUP_VAL_ON_INDEX`.
            2. Use `WHEN OTHERS` **only at the end**.
            3. For **business rules**, prefer `RAISE_APPLICATION_ERROR`.
            4. For **nested blocks**, handle exceptions **locally** if possible.
            5. Use `SQLCODE` and `SQLERRM` for **dynamic error handling and logging**.
            6. Avoid overusing `WHEN OTHERS` without logging – it may **hide errors**.
            
            ---
            
            ### ✅ **Quick Summary Table**
            
            | --- | --- |
            
    - programs
        - pract1
            
            ## **1️⃣ Ensure Table Exists Before PL/SQL Block**
            
            Execute **table creation** first:
            
            ```sql
            CREATE TABLE Borrower (
                Roll_no NUMBER PRIMARY KEY,
                Name VARCHAR2(50) NOT NULL,
                Date_of_Issue DATE NOT NULL,
                Name_of_Book VARCHAR2(100) NOT NULL,
                Status CHAR(1) DEFAULT 'I' CHECK (Status IN ('I','R'))
            );
            
            CREATE TABLE Fine (
                Roll_no NUMBER,
                Date_of_Payment DATE,
                Amt NUMBER,
                CONSTRAINT fk_borrower FOREIGN KEY (Roll_no) REFERENCES Borrower(Roll_no)
            );
            
            ```
            
            Then insert **sample data** and `COMMIT`.
            
            ---
            
            ## **2️⃣ Alternative: Use Explicit Data Types Instead of %TYPE**
            
            If you want a **self-contained PL/SQL block**, just use standard types instead of `%TYPE`:
            
            ```
            DECLARE
                -- Hardcoded Roll_no and Book Name using explicit data types
                v_roll_no NUMBER := 101;
                v_book_name VARCHAR2(100) := 'Oracle Basics';
            
                -- Variables for computation
                v_date_of_issue DATE;
                v_status CHAR(1);
                v_days NUMBER;
                v_fine NUMBER := 0;
            
                -- Named exception for invalid input
                borrower_not_found EXCEPTION;
            
            BEGIN
                -- Retrieve book details
                BEGIN
                    SELECT Date_of_Issue, Status
                    INTO v_date_of_issue, v_status
                    FROM Borrower
                    WHERE Roll_no = v_roll_no
                      AND Name_of_Book = v_book_name;
                EXCEPTION
                    WHEN NO_DATA_FOUND THEN
                        RAISE borrower_not_found;
                END;
            
                -- Check if book is already returned
                IF v_status = 'R' THEN
                    DBMS_OUTPUT.PUT_LINE('Book already returned. No fine.');
                    RETURN;
                END IF;
            
                -- Calculate number of days from Date_of_Issue to today
                v_days := TRUNC(SYSDATE - v_date_of_issue);
            
                -- Compute fine
                IF v_days BETWEEN 15 AND 30 THEN
                    v_fine := (v_days - 15 + 1) * 5;
                ELSIF v_days > 30 THEN
                    v_fine := (30 - 15 + 1) * 5;
                    v_fine := v_fine + (v_days - 30) * 50;
                ELSE
                    v_fine := 0;
                END IF;
            
                -- Update Borrower status
                UPDATE Borrower
                SET Status = 'R'
                WHERE Roll_no = v_roll_no
                  AND Name_of_Book = v_book_name;
            
                -- Insert fine if applicable
                IF v_fine > 0 THEN
                    INSERT INTO Fine(Roll_no, Date_of_Payment, Amt)
                    VALUES(v_roll_no, SYSDATE, v_fine);
                    DBMS_OUTPUT.PUT_LINE('Fine of Rs ' || v_fine || ' added to Fine table.');
                ELSE
                    DBMS_OUTPUT.PUT_LINE('No fine applicable.');
                END IF;
            
            EXCEPTION
                WHEN borrower_not_found THEN
                    DBMS_OUTPUT.PUT_LINE('Error: Borrower record not found.');
                WHEN OTHERS THEN
                    DBMS_OUTPUT.PUT_LINE('Unexpected error: ' || SQLERRM);
            
            END;
            /
            
            ```
            
            ✅ **Key Notes:**
            
            1. Use `NUMBER`, `VARCHAR2`, `DATE`, `CHAR` directly in variable declarations.
            2. `%TYPE` is convenient **only when table/column exists**.
            3. Execute **`SET SERVEROUTPUT ON;`** before running the block to see `DBMS_OUTPUT` messages.
        - Prac2
            1. **Table creation**
            2. **PL/SQL block**
            3. **Step-by-step explanation**
            
            ---
            
            ## **1️⃣ Table Creation**
            
            ```sql
            -- Drop table if exists
            DROP TABLE areas;
            
            -- Create areas table
            CREATE TABLE areas (
                radius NUMBER PRIMARY KEY,
                area NUMBER
            );
            
            ```
            
            ---
            
            ## **2️⃣ PL/SQL Block (Hardcoded Radius Loop 5 to 9)**
            
            ```
            SET SERVEROUTPUT ON;
            
            DECLARE
                v_radius NUMBER;
                v_area NUMBER;
            BEGIN
                -- Loop radius from 5 to 9
                FOR v_radius IN 5..9 LOOP
                    -- Calculate area
                    v_area := 3.14159 * v_radius * v_radius;  -- π*r^2
            
                    -- Insert radius and area into table
                    INSERT INTO areas(radius, area)
                    VALUES(v_radius, v_area);
            
                    -- Optional: Display in output
                    DBMS_OUTPUT.PUT_LINE('Radius: ' || v_radius || ' Area: ' || ROUND(v_area,2));
                END LOOP;
            
                COMMIT;  -- Save changes
            END;
            /
            
            ```
            
            ---
            
            ## **3️⃣ Explanation**
            
            1. **Loop from 5 to 9** → `FOR v_radius IN 5..9 LOOP`
            2. **Area formula** → π × r², π approximated as `3.14159`
            3. **Insert into table** → `INSERT INTO areas(radius, area) VALUES(...)`
            4. **DBMS_OUTPUT** → optional, prints calculated values
            5. **COMMIT** → saves changes permanently in table
            
            ---
            
            ## **4️⃣ Sample Output in DBMS_OUTPUT**
            
            ```
            Radius: 5 Area: 78.54
            Radius: 6 Area: 113.10
            Radius: 7 Area: 153.94
            Radius: 8 Area: 201.06
            Radius: 9 Area: 254.47
            
            ```
            
            ---
            
            ✅ **Key Notes:**
            
            - Table `areas` must exist before PL/SQL block execution.
            - Use `SET SERVEROUTPUT ON;` to view DBMS_OUTPUT.
            - You can later query the table:
            
            ```sql
            SELECT * FROM areas;
            
            ```
            
        - pract3
            1. **Table creation** (Cleaner table)
            2. **Sample data insertion**
            3. **PL/SQL block with hardcoded cleaner number, salary update, and exception handling**
            
            ---
            
            ## **1️⃣ Table Creation**
            
            ```sql
            -- Drop table if exists
            DROP TABLE Cleaner;
            
            -- Create Cleaner table
            CREATE TABLE Cleaner (
                Cleaner_no NUMBER PRIMARY KEY,
                Cleaner_name VARCHAR2(50) NOT NULL,
                Salary NUMBER(10,2) NOT NULL
            );
            
            ```
            
            ---
            
            ## **2️⃣ Sample Data**
            
            ```sql
            INSERT INTO Cleaner VALUES (101, 'John', 20000);
            INSERT INTO Cleaner VALUES (102, 'Alice', 25000);
            INSERT INTO Cleaner VALUES (103, 'Bob', 18000);
            COMMIT;
            
            ```
            
            ---
            
            ## **3️⃣ PL/SQL Block (Hardcoded Cleaner Number)**
            
            ```
            SET SERVEROUTPUT ON;
            
            DECLARE
                -- Hardcoded cleaner number
                v_cleaner_no NUMBER := 101;
            
                -- Variables to hold cleaner details
                v_name Cleaner.Cleaner_name%TYPE;
                v_salary Cleaner.Salary%TYPE;
            
                -- Named exception for cleaner not found
                cleaner_not_found EXCEPTION;
            BEGIN
                -- Retrieve cleaner details
                BEGIN
                    SELECT Cleaner_name, Salary
                    INTO v_name, v_salary
                    FROM Cleaner
                    WHERE Cleaner_no = v_cleaner_no;
                EXCEPTION
                    WHEN NO_DATA_FOUND THEN
                        RAISE cleaner_not_found;
                END;
            
                -- Display current details
                DBMS_OUTPUT.PUT_LINE('Cleaner Name: ' || v_name);
                DBMS_OUTPUT.PUT_LINE('Current Salary: ' || v_salary);
            
                -- Update salary by 10%
                v_salary := v_salary * 1.10;
                UPDATE Cleaner
                SET Salary = v_salary
                WHERE Cleaner_no = v_cleaner_no;
            
                COMMIT;
            
                -- Display updated salary
                DBMS_OUTPUT.PUT_LINE('Updated Salary after 10% increment: ' || v_salary);
            
            EXCEPTION
                WHEN cleaner_not_found THEN
                    DBMS_OUTPUT.PUT_LINE('Error: Cleaner not found.');
                WHEN OTHERS THEN
                    DBMS_OUTPUT.PUT_LINE('Unexpected error: ' || SQLERRM);
            
            END;
            /
            
            ```
            
            ---
            
            ## **4️⃣ Explanation**
            
            1. **Retrieve Cleaner Details**
            2. **Display Current Salary**
            3. **Update Salary by 10%**
            4. **Display Updated Salary**
            5. **Exception Handling**
            
            ---
            
            ### **5️⃣ Sample Output in DBMS_OUTPUT**
            
            ```
            Cleaner Name: John
            Current Salary: 20000
            Updated Salary after 10% increment: 22000
            
            ```
            
            ---
            
            ✅ **Notes for Practical:**
            
            - `SET SERVEROUTPUT ON;` must be enabled to see outputs.
            - Hardcoded cleaner number can be changed to test other records.
            - Named exceptions improve readability in real scenarios.
        - prac4
            
            ## **1️⃣ PL/SQL Block (Hardcoded Values)**
            
            ```
            SET SERVEROUTPUT ON;
            
            DECLARE
                -- Hardcoded three numbers
                num1 NUMBER := 25;
                num2 NUMBER := 40;
                num3 NUMBER := 15;
            
                -- Variable to store largest number
                largest NUMBER;
            BEGIN
                -- Compare numbers
                IF num1 >= num2 AND num1 >= num3 THEN
                    largest := num1;
                ELSIF num2 >= num1 AND num2 >= num3 THEN
                    largest := num2;
                ELSE
                    largest := num3;
                END IF;
            
                -- Display the largest number
                DBMS_OUTPUT.PUT_LINE('The largest number is: ' || largest);
            
            END;
            /
            
            ```
            
            ---
            
            ## **2️⃣ Explanation**
            
            1. **Variable Declaration**
            2. **IF-ELSIF-ELSE Logic**
            3. **Output**
            
            ---
            
            ### **3️⃣ Sample Output**
            
            ```
            The largest number is: 40
            
            ```
            
    - viva questions
        
        # **PL/SQL Viva Questions & Answers**
        
        ---
        
        ## **A. Basic PL/SQL Concepts**
        
        1. **Q:** What is PL/SQL?
            
            **A:** PL/SQL is Oracle's procedural extension to SQL that allows writing blocks of code with variables, loops, conditional statements, exception handling, and other procedural constructs.
            
        2. **Q:** What is the structure of a PL/SQL block?
            
            **A:** A PL/SQL block has three sections:
            
            - `DECLARE` → optional, for variable declaration
            - `BEGIN` → executable statements
            - `EXCEPTION` → optional, for error handling
            - `END;` → closes the block
        3. **Q:** Difference between PL/SQL and SQL?
            
            **A:** SQL is declarative (used for queries/manipulating data), while PL/SQL is procedural and allows control structures, loops, variables, and exception handling.
            
        4. **Q:** How do you print output in PL/SQL?
            
            **A:** Using `DBMS_OUTPUT.PUT_LINE('message');`.
            
        5. **Q:** What is `%TYPE` in PL/SQL?
            
            **A:** `%TYPE` allows a variable to adopt the data type of a database column, ensuring consistency and reducing errors.
            
        
        ---
        
        ## **B. Conditional Statements**
        
        1. **Q:** What conditional statements are supported in PL/SQL?
            
            **A:** `IF-ELSIF-ELSE` and `CASE` (Simple and Searched).
            
        2. **Q:** Difference between IF and CASE?
            
            **A:** IF can evaluate complex boolean conditions. CASE is preferred for multi-way branching and improves readability.
            
        3. **Q:** Can `ELSIF` and `ELSE` be omitted?
            
            **A:** Yes, both are optional.
            
        4. **Q:** Difference between Simple CASE and Searched CASE?
            
            **A:** Simple CASE compares an expression with fixed values; Searched CASE evaluates boolean conditions.
            
        5. **Q:** What must always close an IF block?
            
            **A:** `END IF;`
            
        
        ---
        
        ## **C. Loops**
        
        1. **Q:** Types of loops in PL/SQL?
            
            **A:** Basic LOOP, WHILE LOOP, FOR LOOP.
            
        2. **Q:** Difference between LOOP, WHILE, and FOR?
            
            **A:**
            
            - LOOP → indefinite until `EXIT` is met
            - WHILE → executes while a condition is TRUE
            - FOR → executes fixed number of times
        3. **Q:** How do you exit a loop?
            
            **A:** Using `EXIT;` or `EXIT WHEN condition;`.
            
        4. **Q:** What is CONTINUE?
            
            **A:** Skips the current iteration and moves to the next iteration.
            
        5. **Q:** Can loops be nested?
            
            **A:** Yes, loops can be nested inside other loops or IFs.
            
        6. **Q:** Are FOR loop index variables writable?
            
            **A:** No, FOR loop index is read-only.
            
        7. **Q:** Difference between REVERSE FOR loop and normal FOR loop?
            
            **A:** REVERSE executes iterations in descending order, normal FOR loop executes ascending.
            
        
        ---
        
        ## **D. Nested Loops & IFs**
        
        1. **Q:** Can IF statements be nested inside loops?
            
            **A:** Yes, and vice versa. Always close with `END IF;` and `END LOOP;`.
            
        2. **Q:** Example of nested FOR loop?
            
            **A:**
            
            ```
            BEGIN
              FOR i IN 1..3 LOOP
                FOR j IN 1..2 LOOP
                  DBMS_OUTPUT.PUT_LINE('i=' || i || ' j=' || j);
                END LOOP;
              END LOOP;
            END;
            
            ```
            
        3. **Q:** Example of nested IF?
            
            **A:**
            
            ```
            DECLARE v_marks NUMBER := 85; BEGIN
              IF v_marks >= 50 THEN
                IF v_marks >= 75 THEN
                  DBMS_OUTPUT.PUT_LINE('Distinction');
                ELSE
                  DBMS_OUTPUT.PUT_LINE('Pass');
                END IF;
              ELSE
                DBMS_OUTPUT.PUT_LINE('Fail');
              END IF;
            END;
            
            ```
            
        
        ---
        
        ## **E. GOTO Statement**
        
        1. **Q:** What is GOTO?
            
            **A:** It jumps to a labeled statement. Not recommended for complex logic.
            
        2. **Q:** Syntax of GOTO?
            
            **A:**
            
            ```
            <<label>>
              statement;
            GOTO label;
            
            ```
            
        
        ---
        
        ## **F. Exception Handling**
        
        1. **Q:** What is an exception in PL/SQL?
            
            **A:** A runtime error that can be caught using the `EXCEPTION` section.
            
        2. **Q:** Types of exceptions?
            
            **A:**
            
            - Predefined exceptions (e.g., ZERO_DIVIDE, NO_DATA_FOUND)
            - User-defined exceptions
            - System-defined exceptions mapped to ORA errors
        3. **Q:** Common predefined exceptions?
            
            **A:**
            
            - `ZERO_DIVIDE` → division by zero
            - `NO_DATA_FOUND` → SELECT INTO returns no rows
            - `TOO_MANY_ROWS` → SELECT INTO returns multiple rows
            - `DUP_VAL_ON_INDEX` → violates unique constraint
        4. **Q:** How to declare a user-defined exception?
            
            **A:**
            
            ```
            DECLARE my_exception EXCEPTION;
            BEGIN
              RAISE my_exception;
            EXCEPTION
              WHEN my_exception THEN DBMS_OUTPUT.PUT_LINE('Handled.');
            END;
            
            ```
            
        5. **Q:** What is PRAGMA EXCEPTION_INIT?
            
            **A:** Associates a user-defined exception with an Oracle error number.
            
        6. **Q:** What is RAISE_APPLICATION_ERROR?
            
            **A:** Raises a user-defined error with custom ORA code (-20000 to -20999).
            
        7. **Q:** Difference between WHEN OTHERS and named exceptions?
            
            **A:** Named exceptions handle specific errors; WHEN OTHERS catches any unhandled error.
            
        8. **Q:** What are SQLCODE and SQLERRM?
            
            **A:** SQLCODE returns error number; SQLERRM returns error message.
            
        9. **Q:** What happens if exception is not handled?
            
            **A:** It propagates to the calling block. If uncaught, the block terminates abnormally.
            
        10. **Q:** Can exceptions be handled locally in nested blocks?
            
            **A:** Yes. Local handling can prevent propagation.
            
        
        ---
        
        ## **G. Program-Specific Questions**
        
        1. **Q:** How do you calculate fine based on days?
            
            **A:** Use `v_days := TRUNC(SYSDATE - Date_of_Issue)` and apply conditional logic.
            
        2. **Q:** How do you update a table and insert into another table in the same block?
            
            **A:** Use `UPDATE table SET ...;` and `INSERT INTO table(...) VALUES(...);`.
            
        3. **Q:** How to increase salary by 10%?
            
            **A:** Retrieve salary, multiply by 1.10, `UPDATE` the table, then `COMMIT`.
            
        4. **Q:** How to calculate area of a circle for multiple radii?
            
            **A:** Use a FOR loop and formula `area := 3.14159 * r * r;`.
            
        5. **Q:** How to find largest of three numbers in PL/SQL?
            
            **A:** Use IF-ELSIF-ELSE to compare three numbers and store the largest.
            
        6. **Q:** How to enable output in SQL*Plus?
            
            **A:** `SET SERVEROUTPUT ON;`
            
        7. **Q:** Why use explicit data types instead of %TYPE?
            
            **A:** %TYPE requires the column to exist; explicit types allow standalone blocks.
            
        8. **Q:** Why is COMMIT necessary?
            
            **A:** To save DML changes permanently in the database.
            
        9. **Q:** Difference between EXIT and CONTINUE?
            
            **A:** EXIT terminates the loop; CONTINUE skips the current iteration and continues.
            
        10. **Q:** How is exception handling useful in practicals?
            
            **A:** Prevents abnormal termination, allows business logic validation, and graceful error handling.
            
        11. **Q:** How do you handle a record not found in SELECT INTO?
            
            **A:** Use `EXCEPTION WHEN NO_DATA_FOUND THEN ...` or named exception.
            
        12. **Q:** How do you commit multiple inserts inside a loop?
            
            **A:** Use `COMMIT;` after the loop or inside loop as needed.
            
        13. **Q:** What happens if you forget to enable server output?
            
            **A:** `DBMS_OUTPUT.PUT_LINE` messages will not display in SQL*Plus.
            
- EXP9
    - Programs
        - act1
            
            ## **1️⃣ Insert Sample Documents**
            
            ```jsx
            db.orderinfo.insertMany([
              { cust_id: 101, cust_name: "Alice", status: "A", price: 500 },
              { cust_id: 102, cust_name: "Bob", status: "B", price: 200 },
              { cust_id: 103, cust_name: "Charlie", status: "A", price: 750 },
              { cust_id: 104, cust_name: "David", status: "C", price: 50 },
              { cust_id: 105, cust_name: "Eve", status: "A", price: 1200 },
              { cust_id: 106, cust_name: "Frank", status: "B", price: 800 },
              { cust_id: 107, cust_name: "Grace", status: "A", price: 300 },
              { cust_id: 108, cust_name: "Heidi", status: "C", price: 950 }
            ])
            
            ```
            
            ---
            
            ## **2️⃣ Benefits of Adding Multiple Documents**
            
            1. **Aggregation** – Average price per customer with status 'A' will now return **meaningful results**.
            2. **Range Queries** – Filtering by `price` between 100 and 1000 will show **multiple matching documents**, not just one.
            3. **Index Testing** – Index on `cust_id` or `status` will have **more effect** as the collection size grows.
            4. **Practical Demonstration** – Makes your queries **look professional** and realistic for practical submission.
            
            ---
            
            ## **3️⃣ Now Your Queries Will Be More Effective**
            
            - **Average Price for Status 'A'** will return several customers:
            
            ```jsx
            db.orderinfo.aggregate([
              { $match: { status: "A" } },
              { $group: { _id: "$cust_name", avgPrice: { $avg: "$price" } } }
            ])
            
            ```
            
            - **Status for price between 100–1000** will return multiple rows:
            
            ```jsx
            db.orderinfo.find(
              { price: { $gte: 100, $lte: 1000 } },
              { status: 1, _id: 0 }
            )
            
            ```
            
            - **Display customer info without `_id`** now shows a richer dataset.
        - act2
            
            # **Practical Statement: MongoDB – Collection `movies`**
            
            **Collection Name:** `movies`
            
            **Document Structure Example:**
            
            ```json
            {
              name: "Movie1",
              type: "action",
              budget: 1000000,
              producer: {
                name: "producer1",
                address: "PUNE"
              }
            }
            
            ```
            
            **Tasks:**
            
            1. Find the **name of the movie** having budget greater than 1,00,000.
            2. Find the **name of the producer** who lives in Pune.
            3. Update the **type of movie** `"action"` to `"horror"`.
            4. Find all the **documents produced by `producer1`** with their address.
            
            ---
            
            ## **Step 1: Insert Sample Documents**
            
            ```jsx
            db.movies.insertMany([
              { name: "Movie1", type: "action", budget: 1000000, producer: { name: "producer1", address: "PUNE" } },
              { name: "Movie2", type: "drama", budget: 50000, producer: { name: "producer2", address: "MUMBAI" } },
              { name: "Movie3", type: "action", budget: 200000, producer: { name: "producer3", address: "DELHI" } },
              { name: "Movie4", type: "comedy", budget: 300000, producer: { name: "producer1", address: "PUNE" } },
              { name: "Movie5", type: "action", budget: 1500000, producer: { name: "producer4", address: "BANGALORE" } }
            ])
            
            ```
            
            ✅ This gives enough documents to **demonstrate queries properly**.
            
            ---
            
            ## **Step 2: Queries and Answers**
            
            ### **i. Find the name of the movie having budget greater than 1,00,000**
            
            ```jsx
            db.movies.find(
              { budget: { $gt: 100000 } },
              { name: 1, _id: 0 }
            )
            
            ```
            
            **Output:**
            
            ```json
            { "name": "Movie1" }
            { "name": "Movie3" }
            { "name": "Movie4" }
            { "name": "Movie5" }
            
            ```
            
            ---
            
            ### **ii. Find the name of producer who lives in Pune**
            
            ```jsx
            db.movies.find(
              { "producer.address": "PUNE" },
              { "producer.name": 1, _id: 0 }
            )
            
            ```
            
            **Output:**
            
            ```json
            { "producer": { "name": "producer1" } }
            { "producer": { "name": "producer1" } }
            
            ```
            
            - Both **Movie1** and **Movie4** have producer1 in Pune.
            
            ---
            
            ### **iii. Update the type of movie `"action"` to `"horror"`**
            
            ```jsx
            db.movies.updateMany(
              { type: "action" },
              { $set: { type: "horror" } }
            )
            
            ```
            
            **Verify Update:**
            
            ```jsx
            db.movies.find({}, { name: 1, type: 1, _id: 0 })
            
            ```
            
            **Output:**
            
            ```json
            { "name": "Movie1", "type": "horror" }
            { "name": "Movie2", "type": "drama" }
            { "name": "Movie3", "type": "horror" }
            { "name": "Movie4", "type": "comedy" }
            { "name": "Movie5", "type": "horror" }
            
            ```
            
            ---
            
            ### **iv. Find all documents produced by `producer1` with their address**
            
            ```jsx
            db.movies.find(
              { "producer.name": "producer1" },
              { "producer.name": 1, "producer.address": 1, _id: 0 }
            )
            
            ```
            
            **Output:**
            
            ```json
            { "producer": { "name": "producer1", "address": "PUNE" } }
            { "producer": { "name": "producer1", "address": "PUNE" } }
            
            ```
            
            ---
            
            ## **Step 3: Summary of Commands**
            
            | --- | --- |
            
        - act 3
            
            # **Practical Statement: MongoDB – Collection `students`**
            
            **Collection Name:** `students`
            
            **Document Structure Example:**
            
            ```json
            {
              student_id: 101,
              name: "Alice",
              age: 21,
              gender: "F",
              course: "CS",
              marks: [75, 82, 90],
              status: "active"
            }
            
            ```
            
            **Tasks:**
            
            ---
            
            ## **Step 1: Insert Sample Documents (Create)**
            
            ```jsx
            db.students.insertMany([
              { student_id: 101, name: "Alice", age: 21, gender: "F", course: "CS", marks: [75,82,90], status: "active" },
              { student_id: 102, name: "Bob", age: 19, gender: "M", course: "Math", marks: [65,70,72], status: "inactive" },
              { student_id: 103, name: "Charlie", age: 22, gender: "M", course: "Physics", marks: [85,88,92], status: "active" },
              { student_id: 104, name: "David", age: 20, gender: "M", course: "CS", marks: [45,50,60], status: "active" },
              { student_id: 105, name: "Eve", age: 21, gender: "F", course: "Math", marks: [90,95,93], status: "inactive" }
            ])
            
            ```
            
            ---
            
            ## **Step 2: Read Queries (Using Comparison + Logical Operators)**
            
            ### **i. Find students aged between 20 and 22 and active**
            
            ```jsx
            db.students.find(
              { $and: [ { age: { $gte: 20, $lte: 22 } }, { status: "active" } ] },
              { student_id:1, name:1, age:1, status:1, _id:0 }
            )
            
            ```
            
            **Output Example:**
            
            ```json
            { "student_id": 101, "name": "Alice", "age": 21, "status": "active" }
            { "student_id": 103, "name": "Charlie", "age": 22, "status": "active" }
            { "student_id": 104, "name": "David", "age": 20, "status": "active" }
            
            ```
            
            ---
            
            ### **ii. Find students with marks greater than 80 in at least one subject**
            
            ```jsx
            db.students.find(
              { marks: { $elemMatch: { $gt: 80 } } },
              { name:1, marks:1, _id:0 }
            )
            
            ```
            
            **Output Example:**
            
            ```json
            { "name": "Alice", "marks": [75,82,90] }
            { "name": "Charlie", "marks": [85,88,92] }
            { "name": "Eve", "marks": [90,95,93] }
            
            ```
            
            ---
            
            ### **iii. Find male students who are either active or have marks > 80**
            
            ```jsx
            db.students.find(
              { $and: [ { gender: "M" }, { $or: [ { status: "active" }, { marks: { $elemMatch: { $gt: 80 } } } ] } ] },
              { name:1, gender:1, status:1, marks:1, _id:0 }
            )
            
            ```
            
            **Output Example:**
            
            ```json
            { "name": "Charlie", "gender": "M", "status": "active", "marks": [85,88,92] }
            { "name": "David", "gender": "M", "status": "active", "marks": [45,50,60] }
            
            ```
            
            ---
            
            ## **Step 3: Update Operations**
            
            ### **i. Increment age by 1 for all active students**
            
            ```jsx
            db.students.updateMany(
              { status: "active" },
              { $inc: { age: 1 } }
            )
            
            ```
            
            ### **ii. Add a new field `graduated: false` for all students**
            
            ```jsx
            db.students.updateMany(
              {},
              { $set: { graduated: false } }
            )
            
            ```
            
            ### **iii. Remove `inactive` students’ marks field**
            
            ```jsx
            db.students.updateMany(
              { status: "inactive" },
              { $unset: { marks: "" } }
            )
            
            ```
            
            ---
            
            ## **Step 4: Delete Operation**
            
            ### **i. Delete students who are male and age < 21**
            
            ```jsx
            db.students.deleteMany(
              { $and: [ { gender: "M" }, { age: { $lt: 21 } } ] }
            )
            
            ```
            
            **Output:** Removes Bob and David from collection.
            
            ---
            
            ## **Step 5: Projection Examples**
            
            - Find students’ names and courses **without `_id`**
            
            ```jsx
            db.students.find({}, { name:1, course:1, _id:0 })
            
            ```
            
            - Find only students with `graduated = false`
            
            ```jsx
            db.students.find({ graduated: false }, { name:1, graduated:1, _id:0 })
            
            ```
            
            ---
            
            ## **Step 6: Using Array Operators (`$push` and `$pull`)**
            
            - **Add a new subject “English” to Alice’s marks**
            
            ```jsx
            db.students.updateOne(
              { name: "Alice" },
              { $push: { marks: 88 } }
            )
            
            ```
            
            - **Remove marks less than 50 for David**
            
            ```jsx
            db.students.updateOne(
              { name: "David" },
              { $pull: { marks: { $lt: 50 } } }
            )
            
            ```
            
            ---
            
            ## **Step 7: Logical Operators Recap**
            
            | --- | --- | --- |
            
            ---
            
            This **practical covers**:
            
            ✅ **CRUD** – insert, read, update, delete
            
            ✅ **Comparison Operators** – `$gt`, `$lt`, `$gte`, `$lte`, `$eq`
            
            ✅ **Logical Operators** – `$and`, `$or`, `$not`, `$nor`
            
            ✅ **Array Operators** – `$elemMatch`, `$push`, `$pull`
            
            ✅ **Projection** – including/excluding `_id`
            
    - NOTES
        - SQL VS NOSQL
            
            ## 1️⃣ SQL vs NoSQL – The Core Difference
            
            | --- | --- | --- |
            
            ---
            
            ## 2️⃣ Tables vs Documents (Example)
            
            ### SQL Example (MySQL / PostgreSQL)
            
            **Table: students**
            
            | --- | --- | --- | --- |
            
            **SQL Insert Example:**
            
            ```sql
            INSERT INTO students (name, age, course)
            VALUES ('Geet', 20, 'Computer Sci');
            
            ```
            
            **SQL Query Example:**
            
            ```sql
            SELECT * FROM students WHERE age > 20;
            
            ```
            
            ---
            
            ### NoSQL Example (MongoDB Document)
            
            **Collection: students**
            
            ```json
            {
              "_id": 1,
              "name": "Geet",
              "age": 20,
              "course": "Computer Sci",
              "grades": {"math": 95, "english": 88}
            }
            
            ```
            
            **Insert in MongoDB (mongosh):**
            
            ```jsx
            db.students.insertOne({
              name: "Geet",
              age: 20,
              course: "Computer Sci",
              grades: {math: 95, english: 88}
            });
            
            ```
            
            **Query in MongoDB:**
            
            ```jsx
            db.students.find({age: {$gt: 20}})
            
            ```
            
            ✅ Notice how NoSQL allows **nested data** (grades inside the student document) without creating separate tables.
            
            ---
            
            ## 3️⃣ JSON vs BSON
            
            - **JSON (JavaScript Object Notation):**
            - **BSON (Binary JSON):**
            
            ---
            
            ## 4️⃣ SQL vs NoSQL Use Cases
            
            | --- | --- | --- |
            
            ---
            
            ### Key Points:
            
            1. **SQL** → structured, relational, strict, good for transactions.
            2. **NoSQL** → flexible, document/key-value based, good for huge scale & nested data.
            3. **JSON** → human-readable, good for API communication.
            4. **BSON** → binary, used internally in MongoDB for speed and extra data types.
        - USE,SHOW,db.dropDatabase(),db.createCollection,db.collection.drop()
            
            # **MongoDB Basics Notes**
            
            ---
            
            ## **1️⃣ Database in MongoDB**
            
            - A **database** is a container for **collections**.
            - You can have multiple databases in a single MongoDB server.
            - Each database has its own collections and permissions.
            
            **Check current database:**
            
            ```jsx
            db
            
            ```
            
            ---
            
            ## **2️⃣ Switching / Creating a Database: `use`**
            
            - `use <dbName>` switches to a database.
            - If the database doesn’t exist, MongoDB will create it **when you insert the first document**.
            
            **Example:**
            
            ```jsx
            use myDatabase
            
            ```
            
            - Output:
            
            ```
            switched to db myDatabase
            
            ```
            
            - Database is created only when you add a collection or document:
            
            ```jsx
            db.students.insertOne({name: "Geet", age: 20})
            
            ```
            
            ---
            
            ## **3️⃣ Show Databases: `show dbs`**
            
            - Lists all databases on your MongoDB server.
            - Only databases that **have data** will appear.
            
            **Example:**
            
            ```jsx
            show dbs
            
            ```
            
            Output:
            
            ```
            admin    0.000GB
            local    0.000GB
            myDatabase  0.001GB
            
            ```
            
            ---
            
            ## **4️⃣ Drop Database: `db.dropDatabase()`**
            
            - Deletes the **entire database** you are currently using.
            - **Warning:** All collections & documents in the database will be permanently deleted.
            
            **Example:**
            
            ```jsx
            use myDatabase
            db.dropDatabase()
            
            ```
            
            Output:
            
            ```
            { "dropped": "myDatabase", "ok": 1 }
            
            ```
            
            ---
            
            ## **5️⃣ Collections in MongoDB**
            
            - A **collection** is like a table in SQL.
            - Stores **documents** (records).
            - No strict schema is required; documents can have different fields.
            - Example of a **collection**: `students`
            
            **Documents in a collection:**
            
            ```json
            {
              "_id": ObjectId("650f9a8e6c9b1a1f1a3f8b2c"),
              "name": "Geet",
              "age": 20,
              "course": "Computer Sci"
            }
            
            ```
            
            ---
            
            ## **6️⃣ Create Collection: `db.createCollection()`**
            
            - You can explicitly create a collection.
            - Optional: You can set **validation rules** and options.
            
            **Example:**
            
            ```jsx
            db.createCollection("students")
            
            ```
            
            - Output:
            
            ```
            { "ok" : 1 }
            
            ```
            
            - Now `students` collection exists, even if it has **no documents yet**.
            
            ---
            
            ## **7️⃣ Show Collections: `show collections`**
            
            - Lists all collections in the current database.
            
            **Example:**
            
            ```jsx
            show collections
            
            ```
            
            Output:
            
            ```
            students
            courses
            
            ```
            
            ---
            
            ## **8️⃣ Drop Collection: `db.collection.drop()`**
            
            - Deletes a collection **and all documents in it**, but database remains.
            
            **Example:**
            
            ```jsx
            db.students.drop()
            
            ```
            
            Output:
            
            ```
            true
            
            ```
            
            - Now `students` collection is gone.
            
            ---
            
            ## **9️⃣ Insert Documents**
            
            - Add data to a collection using `insertOne` or `insertMany`.
            
            **Example:**
            
            ```jsx
            db.students.insertOne({name: "Sanika", age: 21, course: "Math"})
            db.students.insertMany([
              {name: "Rohan", age: 22, course: "Physics"},
              {name: "Maya", age: 20, course: "Chemistry"}
            ])
            
            ```
            
            ---
            
            ## **10️⃣ Query Documents**
            
            - Find all documents:
            
            ```jsx
            db.students.find()
            
            ```
            
            - Pretty-print:
            
            ```jsx
            db.students.find().pretty()
            
            ```
            
            - Find documents with a condition:
            
            ```jsx
            db.students.find({age: {$gt: 20}})
            
            ```
            
            ---
            
            ## **11️⃣ Summary Table of Commands**
            
            | --- | --- | --- |
            
            ---
            
            ### ✅ Key Concepts:
            
            - **Database** → Container of collections (like SQL database).
            - **Collection** → Container of documents (like SQL table).
            - **Document** → A record in JSON/BSON format (like a row in SQL).
        - insert
            
            # **MongoDB Insert Operations**
            
            MongoDB stores data as **documents** in **collections**.
            
            There are several ways to insert data:
            
            ---
            
            ## **1️⃣ `insertOne()` — Insert a single document**
            
            - Inserts **one document** into a collection.
            - Automatically generates `_id` if you don’t provide it.
            - Returns an acknowledgment with the `_id`.
            
            **Syntax:**
            
            ```jsx
            db.collection.insertOne(document)
            
            ```
            
            **Example:**
            
            ```jsx
            db.students.insertOne({
              name: "Geet",
              age: 20,
              course: "Computer Science"
            })
            
            ```
            
            **Output:**
            
            ```json
            {
              "acknowledged" : true,
              "insertedId" : ObjectId("650f9a8e6c9b1a1f1a3f8b2c")
            }
            
            ```
            
            ✅ Key Points:
            
            - Only inserts **one document**.
            - `_id` is unique for every document.
            - If `_id` already exists, insertion **fails**.
            
            ---
            
            ## **2️⃣ `insertMany()` — Insert multiple documents**
            
            - Inserts **multiple documents at once**.
            - Accepts an array of documents.
            - Returns the `_id`s of all inserted documents.
            
            **Syntax:**
            
            ```jsx
            db.collection.insertMany([doc1, doc2, doc3])
            
            ```
            
            **Example:**
            
            ```jsx
            db.students.insertMany([
              {name: "Sanika", age: 21, course: "Mathematics"},
              {name: "Rohan", age: 22, course: "Physics"},
              {name: "Maya", age: 20, course: "Chemistry"}
            ])
            
            ```
            
            **Output:**
            
            ```json
            {
              "acknowledged" : true,
              "insertedIds" : [
                ObjectId("650f9a8e6c9b1a1f1a3f8b2d"),
                ObjectId("650f9a8e6c9b1a1f1a3f8b2e"),
                ObjectId("650f9a8e6c9b1a1f1a3f8b2f")
              ]
            }
            
            ```
            
            ✅ Key Points:
            
            - Inserts **all documents** in one command.
            - Can fail if **any document has duplicate `_id`**, unless `ordered: false` is used.
            - Faster than multiple `insertOne()` calls for bulk insertion.
            
            ---
            
            ## **3️⃣ `insert()` — Legacy Insert Method**
            
            > ⚠️ insert() is deprecated in newer MongoDB versions, replaced by insertOne() and insertMany().
            > 
            - Could insert **one or multiple documents** depending on input.
            - Example (not recommended for new projects):
            
            ```jsx
            db.students.insert({name: "Aarav", age: 23})
            db.students.insert([
              {name: "Lina", age: 21},
              {name: "Nina", age: 22}
            ])
            
            ```
            
            ---
            
            ## **4️⃣ Important Notes on Inserts**
            
            1. **Automatic `_id`**
            2. **Custom `_id`**
            3. **Schema Flexibility**
            4. **Insert Options (`ordered` in insertMany)**
            
            ---
            
            ## **5️⃣ Quick Comparison Table**
            
            | --- | --- | --- | --- |
            
            ---
            
            ## **6️⃣ Visual Example**
            
            Collection: **students**
            
            ```json
            [
              { "_id": 1, "name": "Geet", "age": 20 },
              { "_id": 2, "name": "Sanika", "age": 21 },
              { "_id": 3, "name": "Rohan", "age": 22, "hobbies":["football","reading"] }
            ]
            
            ```
            
            - Notice how documents can have **different fields**.
            - MongoDB is **schema-less**, unlike SQL tables.
        - comparison operator
            
            # **MongoDB Comparison Operators**
            
            Comparison operators are used to **filter documents based on field values**. They are very similar in concept to **WHERE clauses in SQL**.
            
            ---
            
            ## **1️⃣ `$eq` — Equal To**
            
            - Matches documents where the field is equal to a specified value.
            - Equivalent to `=` in SQL.
            
            **Syntax:**
            
            ```jsx
            db.collection.find({field: {$eq: value}})
            
            ```
            
            **Example:**
            
            ```jsx
            db.students.find({age: {$eq: 20}})
            
            ```
            
            **Output:**
            
            ```json
            { "_id": 1, "name": "Geet", "age": 20, "course": "CS" }
            
            ```
            
            - **Shortcut:** If you just write `{age: 20}`, it does the same as `$eq`.
            
            ---
            
            ## **2️⃣ `$ne` — Not Equal To**
            
            - Matches documents where the field **does NOT equal** the specified value.
            - Equivalent to `!=` in SQL.
            
            **Syntax:**
            
            ```jsx
            db.collection.find({field: {$ne: value}})
            
            ```
            
            **Example:**
            
            ```jsx
            db.students.find({age: {$ne: 20}})
            
            ```
            
            **Output:**
            
            ```json
            { "_id": 2, "name": "Sanika", "age": 21 }
            { "_id": 3, "name": "Rohan", "age": 22 }
            
            ```
            
            ---
            
            ## **3️⃣ `$gt` — Greater Than**
            
            - Matches documents where the field is **greater than** the value.
            
            **Syntax:**
            
            ```jsx
            db.collection.find({field: {$gt: value}})
            
            ```
            
            **Example:**
            
            ```jsx
            db.students.find({age: {$gt: 20}})
            
            ```
            
            **Output:**
            
            ```json
            { "_id": 2, "name": "Sanika", "age": 21 }
            { "_id": 3, "name": "Rohan", "age": 22 }
            
            ```
            
            ---
            
            ## **4️⃣ `$gte` — Greater Than or Equal**
            
            - Matches documents where the field is **greater than or equal** to the value.
            
            **Syntax:**
            
            ```jsx
            db.collection.find({field: {$gte: value}})
            
            ```
            
            **Example:**
            
            ```jsx
            db.students.find({age: {$gte: 21}})
            
            ```
            
            **Output:**
            
            ```json
            { "_id": 2, "name": "Sanika", "age": 21 }
            { "_id": 3, "name": "Rohan", "age": 22 }
            
            ```
            
            ---
            
            ## **5️⃣ `$lt` — Less Than**
            
            - Matches documents where the field is **less than** the value.
            
            **Syntax:**
            
            ```jsx
            db.collection.find({field: {$lt: value}})
            
            ```
            
            **Example:**
            
            ```jsx
            db.students.find({age: {$lt: 22}})
            
            ```
            
            **Output:**
            
            ```json
            { "_id": 1, "name": "Geet", "age": 20 }
            { "_id": 2, "name": "Sanika", "age": 21 }
            
            ```
            
            ---
            
            ## **6️⃣ `$lte` — Less Than or Equal**
            
            - Matches documents where the field is **less than or equal** to the value.
            
            **Syntax:**
            
            ```jsx
            db.collection.find({field: {$lte: value}})
            
            ```
            
            **Example:**
            
            ```jsx
            db.students.find({age: {$lte: 21}})
            
            ```
            
            **Output:**
            
            ```json
            { "_id": 1, "name": "Geet", "age": 20 }
            { "_id": 2, "name": "Sanika", "age": 21 }
            
            ```
            
            ---
            
            ## **7️⃣ `$in` — In Array of Values**
            
            - Matches documents where the field **equals any value in the given array**.
            - Equivalent to SQL `IN`.
            
            **Syntax:**
            
            ```jsx
            db.collection.find({field: {$in: [value1, value2, ...]}})
            
            ```
            
            **Example:**
            
            ```jsx
            db.students.find({age: {$in: [20, 22]}})
            
            ```
            
            **Output:**
            
            ```json
            { "_id": 1, "name": "Geet", "age": 20 }
            { "_id": 3, "name": "Rohan", "age": 22 }
            
            ```
            
            ---
            
            ## **8️⃣ `$nin` — Not In Array of Values**
            
            - Matches documents where the field **does NOT match any value in the array**.
            - Equivalent to SQL `NOT IN`.
            
            **Syntax:**
            
            ```jsx
            db.collection.find({field: {$nin: [value1, value2, ...]}})
            
            ```
            
            **Example:**
            
            ```jsx
            db.students.find({age: {$nin: [20, 22]}})
            
            ```
            
            **Output:**
            
            ```json
            { "_id": 2, "name": "Sanika", "age": 21 }
            
            ```
            
            ---
            
            ## **9️⃣ `$exists` — Field Exists or Not**
            
            - Matches documents **that contain a field** (or not).
            - `true` → field exists
            - `false` → field does not exist
            
            **Example:**
            
            ```jsx
            db.students.find({grades: {$exists: true}})
            
            ```
            
            - Returns only documents that have a `grades` field.
            
            ```jsx
            db.students.find({hobbies: {$exists: false}})
            
            ```
            
            - Returns documents **without** `hobbies` field.
            
            ---
            
            ## **10️⃣ `$type` — Match Field Data Type**
            
            - Filters documents based on **BSON type** of a field.
            - Types: `"string"`, `"int"`, `"array"`, `"object"` etc.
            
            **Example:**
            
            ```jsx
            db.students.find({age: {$type: "int"}})
            
            ```
            
            - Returns only documents where `age` is an integer.
            
            ---
            
            ## **11️⃣ Combining Comparison Operators**
            
            - Use **multiple conditions** in a single query.
            - Example: Find students **age > 20 and < 22**
            
            ```jsx
            db.students.find({age: {$gt: 20, $lt: 22}})
            
            ```
            
            **Output:**
            
            ```json
            { "_id": 2, "name": "Sanika", "age": 21 }
            
            ```
            
            ---
            
            ## **12️⃣ Quick Comparison Table**
            
            | --- | --- | --- |
            
            ---
            
            ✅ **Important Notes:**
            
            1. All comparison operators are **used inside a query object `{}`**.
            2. They can be **combined** to create complex queries.
            3. Useful for **filtering documents dynamically**, similar to `WHERE` clauses in SQL.
        - logical operators
            
            # **MongoDB Logical Operators**
            
            Logical operators are used **to combine multiple query conditions**. They are always used **inside a query object** `{}`.
            
            ---
            
            ## **1️⃣ `$and` — Logical AND**
            
            - Matches documents that satisfy **all conditions**.
            - Equivalent to SQL `AND`.
            
            **Syntax:**
            
            ```jsx
            db.collection.find({
              $and: [ {condition1}, {condition2}, ... ]
            })
            
            ```
            
            **Example:**
            
            ```jsx
            db.students.find({
              $and: [
                {age: {$gte: 21}},
                {course: "Physics"}
              ]
            })
            
            ```
            
            **Output:**
            
            ```json
            { "_id": 3, "name": "Rohan", "age": 22, "course": "Physics" }
            
            ```
            
            ✅ Shortcut: `$and` is optional because multiple conditions in `{}` are treated as AND:
            
            ```jsx
            db.students.find({age: {$gte: 21}, course: "Physics"})
            
            ```
            
            ---
            
            ## **2️⃣ `$or` — Logical OR**
            
            - Matches documents that satisfy **any condition**.
            - Equivalent to SQL `OR`.
            
            **Syntax:**
            
            ```jsx
            db.collection.find({
              $or: [ {condition1}, {condition2}, ... ]
            })
            
            ```
            
            **Example:**
            
            ```jsx
            db.students.find({
              $or: [
                {age: 20},
                {course: "Physics"}
              ]
            })
            
            ```
            
            **Output:**
            
            ```json
            { "_id": 1, "name": "Geet", "age": 20, "course": "CS" }
            { "_id": 3, "name": "Rohan", "age": 22, "course": "Physics" }
            
            ```
            
            ---
            
            ## **3️⃣ `$not` — Logical NOT**
            
            - Matches documents that **do NOT satisfy** the condition.
            - Can be used with other operators like `$eq`, `$gt`, `$regex`.
            
            **Syntax:**
            
            ```jsx
            db.collection.find({field: {$not: {condition}}})
            
            ```
            
            **Example:**
            
            ```jsx
            db.students.find({age: {$not: {$gte: 22}}})
            
            ```
            
            - Returns students **with age < 22**
            
            **Output:**
            
            ```json
            { "_id": 1, "name": "Geet", "age": 20 }
            { "_id": 2, "name": "Sanika", "age": 21 }
            
            ```
            
            ---
            
            ## **4️⃣ `$nor` — Logical NOR**
            
            - Matches documents that **do NOT satisfy any of the conditions**.
            - Equivalent to `NOT (cond1 OR cond2)` in SQL.
            
            **Syntax:**
            
            ```jsx
            db.collection.find({
              $nor: [ {condition1}, {condition2}, ... ]
            })
            
            ```
            
            **Example:**
            
            ```jsx
            db.students.find({
              $nor: [
                {age: 20},
                {course: "Physics"}
              ]
            })
            
            ```
            
            - Returns students **not 20 years old AND not in Physics course**.
            
            **Output:**
            
            ```json
            { "_id": 2, "name": "Sanika", "age": 21, "course": "Mathematics" }
            
            ```
            
            ---
            
            ## **5️⃣ `$expr` — Use Expressions in Queries**
            
            - Allows you to use **aggregation expressions in a filter**, like comparing **fields to each other**.
            - Not exactly a logical operator, but often used with `$and`, `$or`.
            
            **Example:**
            
            ```jsx
            db.students.find({
              $expr: {$gt: ["$age", "$min_age"]}
            })
            
            ```
            
            - Finds students where `age > min_age` (field-to-field comparison).
            
            ---
            
            ## **6️⃣ Combining Logical and Comparison Operators**
            
            **Example: Find students with age > 20 AND course is either Physics or Chemistry**
            
            ```jsx
            db.students.find({
              $and: [
                {age: {$gt: 20}},
                {course: {$in: ["Physics","Chemistry"]}}
              ]
            })
            
            ```
            
            **Output:**
            
            ```json
            { "_id": 3, "name": "Rohan", "age": 22, "course": "Physics" }
            
            ```
            
            ---
            
            ## **7️⃣ Quick Comparison Table of Logical Operators**
            
            | --- | --- | --- |
            
            ✅ **Important Notes:**
            
            1. Logical operators **always take an array of conditions** (except `$not`, which takes a single condition).
            2. Can be **nested** for complex queries.
            3. `$and` is optional when combining multiple conditions in `{}` directly.
            
            ---
            
            ### **Example Collection: students**
            
            ```json
            [
              { "_id": 1, "name": "Geet", "age": 20, "course": "CS" },
              { "_id": 2, "name": "Sanika", "age": 21, "course": "Mathematics" },
              { "_id": 3, "name": "Rohan", "age": 22, "course": "Physics" },
              { "_id": 4, "name": "Maya", "age": 20, "course": "Chemistry" }
            ]
            
            ```
            
            **Example Queries and Output:**
            
            1. `$or` query:
            
            ```jsx
            db.students.find({$or:[{age:20},{course:"Physics"}]})
            
            ```
            
            Output:
            
            - Geet (age 20)
            - Rohan (Physics)
            - Maya (age 20)
            1. `$nor` query:
            
            ```jsx
            db.students.find({$nor:[{age:20},{course:"Physics"}]})
            
            ```
            
            Output:
            
            - Sanika (21, Mathematics)
        - crud + save
            
            # **MongoDB CRUD Operations**
            
            CRUD stands for **Create, Read, Update, Delete**. These are the **basic operations** you can perform on a MongoDB collection.
            
            ---
            
            ## **1️⃣ CREATE — Insert Documents**
            
            Used to **add documents** to a collection.
            
            ### **a) `insertOne()`**
            
            - Adds **one document**.
            
            ```jsx
            db.students.insertOne({
              name: "Geet",
              age: 20,
              course: "Computer Science"
            })
            
            ```
            
            ### **b) `insertMany()`**
            
            - Adds **multiple documents at once**.
            
            ```jsx
            db.students.insertMany([
              {name: "Sanika", age: 21, course: "Math"},
              {name: "Rohan", age: 22, course: "Physics"}
            ])
            
            ```
            
            ### **c) `save()`** (Legacy, works differently)
            
            - **`save()`** inserts a document if `_id` does **not exist**, or updates it if `_id` exists.
            - Essentially, it’s a **mix of insert and update**.
            - **Example Insert:**
            
            ```jsx
            db.students.save({name: "Maya", age: 20, course: "Chemistry"})
            
            ```
            
            - **Example Update (with existing `_id`):**
            
            ```jsx
            db.students.save({_id: ObjectId("650f9a8e6c9b1a1f1a3f8b2c"), name: "Geet", age: 21})
            
            ```
            
            ✅ Now Geet’s age is updated to 21.
            
            ⚠️ **Note:** `save()` is **deprecated in newer versions**. Use `insertOne()` for insert and `updateOne()` for update.
            
            ---
            
            ## **2️⃣ READ — Query Documents**
            
            Used to **retrieve documents** from a collection.
            
            ### **a) `find()`**
            
            - Returns **all matching documents**.
            
            ```jsx
            db.students.find({age: 20})
            
            ```
            
            ### **b) `findOne()`**
            
            - Returns **first matching document**.
            
            ```jsx
            db.students.findOne({name: "Geet"})
            
            ```
            
            ### **c) Query Examples**
            
            ```jsx
            db.students.find({age: {$gte: 21}})      // age >= 21
            db.students.find({course: {$in: ["Math","Physics"]}})  // course in array
            db.students.find({age: {$gt: 20, $lt: 23}}) // age > 20 AND age < 23
            
            ```
            
            ### **d) Projection**
            
            - Select only specific fields:
            
            ```jsx
            db.students.find({age: {$gte: 20}}, {name:1, course:1, _id:0})
            
            ```
            
            - Returns only `name` and `course`.
            
            ---
            
            ## **3️⃣ UPDATE — Modify Documents**
            
            Used to **change fields in existing documents**.
            
            ### **a) `updateOne()`**
            
            - Updates **first matching document**.
            
            ```jsx
            db.students.updateOne(
              {name: "Geet"},
              {$set: {age: 21}}
            )
            
            ```
            
            ### **b) `updateMany()`**
            
            - Updates **all matching documents**.
            
            ```jsx
            db.students.updateMany(
              {age: 20},
              {$set: {course: "Updated Course"}}
            )
            
            ```
            
            ### **c) `replaceOne()`**
            
            - Replaces **entire document**.
            
            ```jsx
            db.students.replaceOne(
              {name: "Geet"},
              {name: "Geet", age: 22, course: "CS"}  // entire document replaces old one
            )
            
            ```
            
            ✅ **Update operators**:
            
            - `$set` → set a new value
            - `$inc` → increment numeric field
            - `$unset` → remove a field
            
            **Example:**
            
            ```jsx
            db.students.updateOne({name:"Geet"}, {$inc:{age:1}})
            
            ```
            
            - Increments Geet’s age by 1.
            
            ---
            
            ## **4️⃣ DELETE — Remove Documents**
            
            Used to **remove documents** from a collection.
            
            ### **a) `deleteOne()`**
            
            - Deletes **first matching document**.
            
            ```jsx
            db.students.deleteOne({name: "Geet"})
            
            ```
            
            ### **b) `deleteMany()`**
            
            - Deletes **all matching documents**.
            
            ```jsx
            db.students.deleteMany({age: {$lt: 21}})
            
            ```
            
            ### **c) `drop()`**
            
            - Deletes the **entire collection**.
            
            ```jsx
            db.students.drop()
            
            ```
            
            ---
            
            ## **5️⃣ `save()` Method in Detail**
            
            | --- | --- |
            
            **Example Insert with `save()`:**
            
            ```jsx
            db.students.save({name: "Aarav", age: 23})
            
            ```
            
            **Example Update with `save()`:**
            
            ```jsx
            db.students.save({_id:ObjectId("650f9a8e6c9b1a1f1a3f8b2c"), name:"Geet", age:22})
            
            ```
            
            ---
            
            ## **6️⃣ Quick CRUD Summary Table**
            
            | --- | --- | --- |
            
            ---
            
            ### ✅ Key Points:
            
            1. **`save()`** is a combination of **insert + update**, but deprecated.
            2. **`insertOne`/`insertMany`** → only insert
            3. **`updateOne`/`updateMany`/`replaceOne`** → only update
            4. **`deleteOne`/`deleteMany`** → only delete
            5. CRUD operations use **documents** in **collections**, unlike SQL which uses **rows in tables**.
        - MongoDB Update Operators
            
            MongoDB update operators allow you to **modify documents without replacing the entire document**. They are used inside the update object (`{$set: ...}`) in commands like `updateOne()`, `updateMany()`, and `findOneAndUpdate()`.
            
            ---
            
            ## **1️⃣ `$set` — Set Field Value**
            
            - **Purpose:** Sets the value of a field.
            - **Behavior:**
            - **Equivalent to:** SQL `UPDATE ... SET ...`
            
            **Syntax:**
            
            ```jsx
            db.collection.updateOne(
              {filter},
              {$set: {field1: value1, field2: value2}}
            )
            
            ```
            
            **Example:**
            
            ```jsx
            db.students.updateOne(
              {name: "Geet"},
              {$set: {age: 21, course: "Data Science"}}
            )
            
            ```
            
            **Output:**
            
            - If Geet existed:
            
            ```json
            { "_id": ObjectId("..."), "name": "Geet", "age": 21, "course": "Data Science" }
            
            ```
            
            - If `course` didn’t exist, `$set` **creates it automatically**.
            
            ---
            
            ## **2️⃣ `$unset` — Remove a Field**
            
            - **Purpose:** Deletes a field from a document.
            - **Behavior:** Removes the specified field entirely.
            - **Equivalent to:** SQL `ALTER TABLE ... DROP COLUMN ...` (field-level)
            
            **Syntax:**
            
            ```jsx
            db.collection.updateOne(
              {filter},
              {$unset: {field1: "", field2: ""}}
            )
            
            ```
            
            > Note: The value is ignored; use an empty string.
            > 
            
            **Example:**
            
            ```jsx
            db.students.updateOne(
              {name: "Geet"},
              {$unset: {course: ""}}
            )
            
            ```
            
            **Output:**
            
            - The `course` field is removed from Geet’s document.
            
            ---
            
            ## **3️⃣ `$inc` — Increment a Numeric Field**
            
            - **Purpose:** Increase (or decrease) a numeric field by a specified value.
            - **Behavior:**
            - **Equivalent to:** SQL `SET age = age + 1`
            
            **Syntax:**
            
            ```jsx
            db.collection.updateOne(
              {filter},
              {$inc: {field: value}}
            )
            
            ```
            
            **Example:**
            
            ```jsx
            db.students.updateOne(
              {name: "Geet"},
              {$inc: {age: 1}}
            )
            
            ```
            
            **Output:**
            
            - Geet’s `age` increases by 1.
            - If `age` did not exist, MongoDB creates it with `age: 1`.
            
            **Decrement example:**
            
            ```jsx
            db.students.updateOne(
              {name: "Geet"},
              {$inc: {age: -2}}
            )
            
            ```
            
            - Reduces age by 2.
            
            ---
            
            ## **4️⃣ `$push` — Add to Array**
            
            - **Purpose:** Add an element to an array field in a document.
            - **Behavior:**
            
            **Syntax:**
            
            ```jsx
            db.collection.updateOne(
              {filter},
              {$push: {arrayField: value}}
            )
            
            ```
            
            **Example:**
            
            ```jsx
            db.students.updateOne(
              {name: "Geet"},
              {$push: {hobbies: "reading"}}
            )
            
            ```
            
            **Output:**
            
            ```json
            { "_id": 1, "name": "Geet", "age": 22, "hobbies": ["reading"] }
            
            ```
            
            **Push multiple elements (using `$each`):**
            
            ```jsx
            db.students.updateOne(
              {name: "Geet"},
              {$push: {hobbies: {$each: ["coding","football"]}}}
            )
            
            ```
            
            **Output:**
            
            ```json
            "hobbies": ["reading", "coding", "football"]
            
            ```
            
            ---
            
            ## **5️⃣ `$pull` — Remove from Array**
            
            - **Purpose:** Removes **all occurrences of a value** from an array field.
            - **Behavior:**
            
            **Syntax:**
            
            ```jsx
            db.collection.updateOne(
              {filter},
              {$pull: {arrayField: value}}
            )
            
            ```
            
            **Example:**
            
            ```jsx
            db.students.updateOne(
              {name: "Geet"},
              {$pull: {hobbies: "football"}}
            )
            
            ```
            
            **Output:**
            
            ```json
            "hobbies": ["reading", "coding"]
            
            ```
            
            **Advanced `$pull` with condition:**
            
            ```jsx
            db.students.updateOne(
              {name: "Geet"},
              {$pull: {grades: {$lt: 50}}} // removes all grades < 50
            )
            
            ```
            
            ---
            
            ## **6️⃣ Quick Summary Table**
            
            | --- | --- | --- | --- |
            
            ---
            
            ### **7️⃣ Combined Example**
            
            Suppose Geet’s document is:
            
            ```json
            {
              "_id": 1,
              "name": "Geet",
              "age": 22,
              "hobbies": ["reading", "football"]
            }
            
            ```
            
            **Update:**
            
            ```jsx
            db.students.updateOne(
              {name: "Geet"},
              {
                $set: {course: "Data Science"},
                $inc: {age: 1},
                $push: {hobbies: "coding"},
                $pull: {hobbies: "football"}
              }
            )
            
            ```
            
            **Resulting Document:**
            
            ```json
            {
              "_id": 1,
              "name": "Geet",
              "age": 23,
              "course": "Data Science",
              "hobbies": ["reading", "coding"]
            }
            
            ```
            
            ✅ Shows how multiple operators can be combined in a **single update**.
            
    - viva questions
        
        # **MongoDB Viva Questions & Answers**
        
        ---
        
        ## **1. Basic Concepts**
        
        **Q1. What is a collection in MongoDB?**
        
        **A:** A collection is a group of MongoDB documents, similar to a table in SQL. Collections do not enforce a schema.
        
        **Q2. What is a document in MongoDB?**
        
        **A:** A document is a JSON-like object stored in a collection. Example:
        
        ```json
        { "name": "Alice", "age": 21, "status": "active" }
        
        ```
        
        **Q3. What is a database schema?**
        
        **A:** In MongoDB, schema is flexible, but a schema defines the structure, fields, and types of documents in a collection.
        
        ---
        
        ## **2. CRUD Operations**
        
        **Q4. What are CRUD operations?**
        
        **A:** CRUD stands for Create, Read, Update, Delete—basic operations to manipulate data.
        
        **Q5. Which MongoDB commands are used for CRUD?**
        
        **A:**
        
        - **Create:** `insertOne()`, `insertMany()`
        - **Read:** `find()`, `findOne()`
        - **Update:** `updateOne()`, `updateMany()`, `replaceOne()`, `$set`, `$inc`, `$push`, `$pull`
        - **Delete:** `deleteOne()`, `deleteMany()`, `drop()`
        
        **Q6. Give an example of updating multiple fields in a single document.**
        
        ```jsx
        db.students.updateOne(
          { name: "Alice" },
          {
            $set: { status: "inactive", course: "Math" },
            $inc: { age: 1 },
            $push: { marks: 88 }
          }
        )
        
        ```
        
        - `$set` updates or creates fields
        - `$inc` increments numeric values
        - `$push` adds to an array
        
        ---
        
        ## **3. Comparison Operators**
        
        **Q7. Name all comparison operators in MongoDB.**
        
        **A:** `$eq`, `$ne`, `$gt`, `$gte`, `$lt`, `$lte`, `$in`, `$nin`
        
        **Q8. Give an example using `$gte` and `$lte`.**
        
        ```jsx
        db.students.find({ age: { $gte: 20, $lte: 22 } })
        
        ```
        
        - Finds students with age between 20 and 22.
        
        **Q9. What is `$in` and `$nin`?**
        
        - `$in` → selects documents where field value matches any value in an array.
        - `$nin` → selects documents where field value **does not match** any value in an array.
        
        ```jsx
        db.students.find({ course: { $in: ["CS", "Math"] } })
        
        ```
        
        ---
        
        ## **4. Logical Operators**
        
        **Q10. Name logical operators in MongoDB.**
        
        **A:** `$and`, `$or`, `$not`, `$nor`
        
        **Q11. Give an example of `$and`.**
        
        ```jsx
        db.students.find({ $and: [ { age: { $gte: 20 } }, { status: "active" } ] })
        
        ```
        
        **Q12. Give an example of combining `$or` and `$and`.**
        
        ```jsx
        db.students.find({
          $and: [
            { gender: "M" },
            { $or: [ { status: "active" }, { marks: { $elemMatch: { $gt: 80 } } } ] }
          ]
        })
        
        ```
        
        - Finds male students who are **either active or have marks > 80**.
        
        ---
        
        ## **5. Array Operators**
        
        **Q13. What does `$elemMatch` do?**
        
        **A:** Matches elements in an array satisfying certain conditions.
        
        ```jsx
        db.students.find({ marks: { $elemMatch: { $gt: 80 } } })
        
        ```
        
        **Q14. Explain `$push` and `$pull`.**
        
        - `$push` → adds an element to an array.
        - `$pull` → removes all occurrences of a value from an array.
        
        **Example:**
        
        ```jsx
        db.students.updateOne({ name: "Alice" }, { $push: { marks: 95 } })
        db.students.updateOne({ name: "Alice" }, { $pull: { marks: 75 } })
        
        ```
        
        ---
        
        ## **6. Update Operators**
        
        **Q15. Explain `$set`, `$unset`, `$inc`.**
        
        - `$set` → sets the value of a field, creates if missing.
        - `$unset` → removes a field.
        - `$inc` → increments/decrements a numeric field.
        
        **Q16. Show an example combining multiple update operators.**
        
        ```jsx
        db.students.updateOne(
          { name: "Alice" },
          {
            $set: { status: "inactive" },
            $inc: { age: 1 },
            $push: { marks: 88 },
            $pull: { marks: 70 }
          }
        )
        
        ```
        
        **Q17. What happens if the field in `$inc` does not exist?**
        
        - MongoDB creates the field and sets it to the increment value.
        
        ---
        
        ## **7. Projection**
        
        **Q18. How to exclude `_id` in query results?**
        
        ```jsx
        db.students.find({}, { _id: 0, name: 1, age: 1 })
        
        ```
        
        **Q19. How to include only `marks` array?**
        
        ```jsx
        db.students.find({}, { marks: 1, _id: 0 })
        
        ```
        
        ---
        
        ## **8. Indexing**
        
        **Q20. What is an index in MongoDB?**
        
        - A data structure to improve **query performance** by quickly locating documents.
        
        **Q21. How to create a simple index?**
        
        ```jsx
        db.students.createIndex({ student_id: 1 })
        
        ```
        
        **Q22. How to check existing indexes?**
        
        ```jsx
        db.students.getIndexes()
        
        ```
        
        ---
        
        ## **9. CRUD Specific Questions**
        
        **Q23. What is the difference between `updateOne()` and `updateMany()`?**
        
        - `updateOne()` → updates **first matching document**
        - `updateMany()` → updates **all matching documents**
        
        **Q24. How to delete a single document?**
        
        ```jsx
        db.students.deleteOne({ name: "Bob" })
        
        ```
        
        **Q25. How to delete multiple documents?**
        
        ```jsx
        db.students.deleteMany({ status: "inactive" })
        
        ```
        
        ---
        
        ## **10. Combination of Operators**
        
        **Q26. Give an example combining logical, comparison, and update operators in a single command.**
        
        ```jsx
        db.students.updateMany(
          { $and: [ { age: { $gte: 20 } }, { status: "active" } ] },
          { $set: { graduated: true }, $inc: { age: 1 }, $push: { marks: 100 } }
        )
        
        ```
        
        - Updates all active students aged ≥ 20:
            - Sets `graduated` = true
            - Increments age by 1
            - Adds 100 to marks array
        
        ---
        
        ## **11. Miscellaneous**
        
        **Q27. What is the difference between `insertOne()` and `save()`?**
        
        - `insertOne()` → inserts a new document.
        - `save()` → inserts if `_id` does not exist; otherwise, replaces the document with the same `_id`.
        
        **Q28. Can multiple operators be used in a single update?**
        
        - Yes, e.g., `$set`, `$inc`, `$push`, `$pull` can all be combined as shown above.
- EXP10
    - PROGRAM
        - PRACTICAL
            
            # **Practical Statement: MongoDB – Aggregation & Indexing**
            
            **Objective:** Perform **aggregation operations** and **indexing** on the `teacher` collection.
            
            **Database:** `department`
            
            **Collection:** `teacher`
            
            **Fields:**
            
            - `name` → String
            - `department` → String
            - `experience` → Number (years)
            - `salary` → Number
            
            **Tasks:**
            
            1. Create database `department`
            2. Create collection `teacher` and insert data
            3. Display **department-wise average salary**
            4. Display **number of employees in each department**
            5. Display **department-wise minimum salary**
            6. Apply **index** and drop index
            
            ---
            
            # **Step 1: Create Database**
            
            ```jsx
            use department
            
            ```
            
            ---
            
            # **Step 2: Create Collection and Insert Sample Data**
            
            ```jsx
            db.teacher.insertMany([
              { name: "Alice", department: "CS", experience: 5, salary: 50000 },
              { name: "Bob", department: "Math", experience: 7, salary: 45000 },
              { name: "Charlie", department: "Physics", experience: 10, salary: 70000 },
              { name: "David", department: "CS", experience: 3, salary: 40000 },
              { name: "Eve", department: "Math", experience: 4, salary: 42000 },
              { name: "Frank", department: "Physics", experience: 6, salary: 60000 },
              { name: "Grace", department: "CS", experience: 8, salary: 55000 }
            ])
            
            ```
            
            ---
            
            # **Step 3: Aggregation Queries**
            
            ### **i. Department-wise Average Salary**
            
            ```jsx
            db.teacher.aggregate([
              {
                $group: {
                  _id: "$department",
                  averageSalary: { $avg: "$salary" }
                }
              }
            ])
            
            ```
            
            **Output Example:**
            
            ```json
            { "_id": "CS", "averageSalary": 48333.33 }
            { "_id": "Math", "averageSalary": 43500 }
            { "_id": "Physics", "averageSalary": 65000 }
            
            ```
            
            ---
            
            ### **ii. Number of Employees in Each Department**
            
            ```jsx
            db.teacher.aggregate([
              {
                $group: {
                  _id: "$department",
                  count: { $sum: 1 }
                }
              }
            ])
            
            ```
            
            **Output Example:**
            
            ```json
            { "_id": "CS", "count": 3 }
            { "_id": "Math", "count": 2 }
            { "_id": "Physics", "count": 2 }
            
            ```
            
            ---
            
            ### **iii. Department-wise Minimum Salary**
            
            ```jsx
            db.teacher.aggregate([
              {
                $group: {
                  _id: "$department",
                  minSalary: { $min: "$salary" }
                }
              }
            ])
            
            ```
            
            **Output Example:**
            
            ```json
            { "_id": "CS", "minSalary": 40000 }
            { "_id": "Math", "minSalary": 42000 }
            { "_id": "Physics", "minSalary": 60000 }
            
            ```
            
            ---
            
            # **Step 4: Apply Index**
            
            - Create a simple index on `department` field to optimize queries:
            
            ```jsx
            db.teacher.createIndex({ department: 1 })
            
            ```
            
            - Verify Index:
            
            ```jsx
            db.teacher.getIndexes()
            
            ```
            
            ---
            
            # **Step 5: Drop Index**
            
            - Drop the index created above:
            
            ```jsx
            db.teacher.dropIndex("department_1")
            
            ```
            
            ---
            
            # **Step 6: Complete Script (Executable in mongosh)**
            
            ```jsx
            // 1. Create & use database
            use department
            
            // 2. Insert sample data
            db.teacher.insertMany([
              { name: "Alice", department: "CS", experience: 5, salary: 50000 },
              { name: "Bob", department: "Math", experience: 7, salary: 45000 },
              { name: "Charlie", department: "Physics", experience: 10, salary: 70000 },
              { name: "David", department: "CS", experience: 3, salary: 40000 },
              { name: "Eve", department: "Math", experience: 4, salary: 42000 },
              { name: "Frank", department: "Physics", experience: 6, salary: 60000 },
              { name: "Grace", department: "CS", experience: 8, salary: 55000 }
            ])
            
            // 3.i. Department-wise Average Salary
            db.teacher.aggregate([
              { $group: { _id: "$department", averageSalary: { $avg: "$salary" } } }
            ])
            
            // 3.ii. Number of employees in each department
            db.teacher.aggregate([
              { $group: { _id: "$department", count: { $sum: 1 } } }
            ])
            
            // 3.iii. Department-wise Minimum Salary
            db.teacher.aggregate([
              { $group: { _id: "$department", minSalary: { $min: "$salary" } } }
            ])
            
            // 4. Apply Index on department
            db.teacher.createIndex({ department: 1 })
            
            // Verify Index
            db.teacher.getIndexes()
            
            // 5. Drop Index
            db.teacher.dropIndex("department_1")
            
            ```
            
            ---
            
            ✅ **This script covers:**
            
            - **CRUD:** `insertMany`
            - **Aggregation:** `$group`, `$avg`, `$sum`, `$min`
            - **Indexing:** `createIndex`, `getIndexes`, `dropIndex`
        - OVERALL
            
            # **MongoDB Comprehensive Practical (All-in-One)**
            
            ### **Practical Statement:**
            
            You are required to perform the following on MongoDB using **aggregation, indexing, updates, and logical/comparison operators**:
            
            **Database:** `collegeDB`
            
            **Collections:**
            
            1. `teacher` – Contains teacher details
            2. `student` – Contains student details
            
            **Tasks:**
            
            1. **Create database and collections** (`teacher` and `student`) and populate with sample data.
            2. **Aggregation Queries:**
            3. **Update Queries:**
            4. **Projection and Sorting:**
            5. **Indexing:**
            6. **Student Queries (Logical + Comparison operators):**
            
            ---
            
            # **Step 1: Create Database and Collections with Sample Data**
            
            ```jsx
            // 1. Use database
            use collegeDB
            
            // 2. Insert sample data into teacher
            db.teacher.insertMany([
              { name: "Alice", department: "CS", experience: 5, salary: 50000, courses: ["Java", "Python"] },
              { name: "Bob", department: "Math", experience: 7, salary: 45000, courses: ["Algebra"] },
              { name: "Charlie", department: "Physics", experience: 10, salary: 70000, courses: ["Mechanics", "Optics"] },
              { name: "David", department: "CS", experience: 3, salary: 40000, courses: ["C++"] },
              { name: "Eve", department: "Math", experience: 4, salary: 42000, courses: ["Calculus"] },
              { name: "Frank", department: "Physics", experience: 6, salary: 60000, courses: ["Thermodynamics"] },
              { name: "Grace", department: "CS", experience: 8, salary: 55000, courses: ["Python", "JavaScript"] }
            ])
            
            // 3. Insert sample data into student
            db.student.insertMany([
              { name: "John", rollNo: 101, department: "CS", marks: 85 },
              { name: "Jane", rollNo: 102, department: "Math", marks: 78 },
              { name: "Mike", rollNo: 103, department: "CS", marks: 92 },
              { name: "Sara", rollNo: 104, department: "Physics", marks: 65 },
              { name: "Tom", rollNo: 105, department: "CS", marks: 48 },
              { name: "Lucy", rollNo: 106, department: "Math", marks: 88 }
            ])
            
            ```
            
            ---
            
            # **Step 2: Aggregation Queries**
            
            ### **i. Department-wise average salary**
            
            ```jsx
            db.teacher.aggregate([
              { $group: { _id: "$department", avgSalary: { $avg: "$salary" } } }
            ])
            
            ```
            
            ### **ii. Department-wise minimum salary**
            
            ```jsx
            db.teacher.aggregate([
              { $group: { _id: "$department", minSalary: { $min: "$salary" } } }
            ])
            
            ```
            
            ### **iii. Department-wise number of teachers**
            
            ```jsx
            db.teacher.aggregate([
              { $group: { _id: "$department", count: { $sum: 1 } } }
            ])
            
            ```
            
            ### **iv. Department-wise last teacher (highest experience)**
            
            ```jsx
            db.teacher.aggregate([
              { $sort: { experience: 1 } },
              { $group: { _id: "$department", lastTeacher: { $last: "$name" } } }
            ])
            
            ```
            
            ### **v. Department-wise unique courses**
            
            ```jsx
            db.teacher.aggregate([
              { $group: { _id: "$department", uniqueCourses: { $addToSet: "$courses" } } }
            ])
            
            ```
            
            ---
            
            # **Step 3: Update Queries**
            
            ### **i. Add a new course (if not exists)**
            
            ```jsx
            db.teacher.updateOne(
              { name: "Alice" },
              { $addToSet: { courses: "MongoDB" } }
            )
            
            ```
            
            ### **ii. Increment salary of teachers with experience > 5**
            
            ```jsx
            db.teacher.updateMany(
              { experience: { $gt: 5 } },
              { $inc: { salary: 5000 } }
            )
            
            ```
            
            ---
            
            # **Step 4: Projection, Sorting, and Limiting**
            
            ### **i. Display name and salary without `_id`, sorted by salary descending**
            
            ```jsx
            db.teacher.find(
              {},
              { name: 1, salary: 1, _id: 0 }
            ).sort({ salary: -1 })
            
            ```
            
            ### **ii. Top 3 highest-paid teachers**
            
            ```jsx
            db.teacher.find(
              {},
              { name: 1, salary: 1, _id: 0 }
            ).sort({ salary: -1 }).limit(3)
            
            ```
            
            ---
            
            # **Step 5: Indexing**
            
            ### **i. Create index on department**
            
            ```jsx
            db.teacher.createIndex({ department: 1 })
            
            ```
            
            ### **ii. View indexes**
            
            ```jsx
            db.teacher.getIndexes()
            
            ```
            
            ### **iii. Drop index**
            
            ```jsx
            db.teacher.dropIndex("department_1")
            
            ```
            
            ---
            
            # **Step 6: Student Queries (Logical + Comparison Operators)**
            
            ### **i. Marks between 50 and 100**
            
            ```jsx
            db.student.find({ marks: { $gte: 50, $lte: 100 } })
            
            ```
            
            ### **ii. Students in CS department with marks > 75**
            
            ```jsx
            db.student.find({ $and: [ { department: "CS" }, { marks: { $gt: 75 } } ] })
            
            ```
            
            ---
            
            # **Step 7: Combined Aggregation Example with Multiple Operators**
            
            ```jsx
            db.teacher.aggregate([
              { $match: { experience: { $gte: 3 } } },   // filter
              { $sort: { experience: 1 } },             // sort ascending
              { $group: {                                // group by department
                  _id: "$department",
                  lastTeacher: { $last: "$name" },
                  uniqueCourses: { $addToSet: "$courses" },
                  totalSalary: { $sum: "$salary" }
              } },
              { $project: { lastTeacher: 1, uniqueCourses: 1, totalSalary: 1, _id: 0 } },  // output shape
              { $sort: { totalSalary: -1 } },            // sort by totalSalary descending
              { $limit: 5 }                              // top 5 departments
            ])
            
            ```
            
            ---
            
            # **Expected Outputs (Sample)**
            
            ### **Department-wise Average Salary**
            
            ```json
            { "_id": "CS", "avgSalary": 48333.33 }
            { "_id": "Math", "avgSalary": 43500 }
            { "_id": "Physics", "avgSalary": 65000 }
            
            ```
            
            ### **Top 3 Highest Paid Teachers**
            
            ```json
            { "name": "Charlie", "salary": 70000 }
            { "name": "Grace", "salary": 55000 }
            { "name": "Alice", "salary": 50000 }
            
            ```
            
            ### **Students in CS with marks > 75**
            
            ```json
            { "name": "John", "rollNo": 101, "department": "CS", "marks": 85 }
            { "name": "Mike", "rollNo": 103, "department": "CS", "marks": 92 }
            
            ```
            
            ---
            
            ✅ **This PS Covers:**
            
            - CRUD operations (`insertMany`, `updateOne`, `updateMany`, `find`)
            - Aggregation operators: `$group`, `$avg`, `$min`, `$sum`, `$last`, `$addToSet`, `$match`, `$sort`, `$project`, `$limit`, `$skip`
            - Logical & comparison operators: `$and`, `$gte`, `$lte`, `$gt`
            - Indexing: `createIndex`, `getIndexes`, `dropIndex`
            - Array operations: `$addToSet`
            - Sorting & limiting results
    - NOTES
        - Aggregation and indexing
            
            # **1️⃣ Aggregation in MongoDB**
            
            ### **Definition**
            
            Aggregation is the process of **processing multiple documents** in a collection to **return computed results**.
            
            It’s like SQL’s `GROUP BY`, `SUM`, `AVG`, `COUNT`, etc.
            
            ---
            
            ### **Common Use-Cases**
            
            - Calculating **averages, totals, min, max**
            - Counting **documents per group**
            - Transforming documents
            - Filtering and projecting data for reports
            
            ---
            
            ### **Aggregation Methods**
            
            ### **i. Aggregation Pipeline (Recommended)**
            
            - Most commonly used method in modern MongoDB.
            - Works as **stages through a pipeline**, each stage transforms the documents.
            
            **Example: Department-wise average salary**
            
            ```jsx
            db.teacher.aggregate([
              { $group: { _id: "$department", avgSalary: { $avg: "$salary" } } }
            ])
            
            ```
            
            **Pipeline Stages:**
            
            1. `$match` → filter documents
            2. `$group` → group by a field, compute aggregations
            3. `$project` → include/exclude fields or compute new fields
            4. `$sort` → sort results
            5. `$limit` → limit number of results
            
            **Example: Active CS teachers sorted by experience**
            
            ```jsx
            db.teacher.aggregate([
              { $match: { department: "CS" } },
              { $sort: { experience: -1 } },
              { $project: { name: 1, experience: 1, _id: 0 } }
            ])
            
            ```
            
            ---
            
            ### **ii. Map-Reduce (Legacy)**
            
            - Map-Reduce uses **JavaScript functions** to map and reduce documents.
            - More flexible but **slower and less optimized** than aggregation pipeline.
            - Example use-case: very custom computations.
            
            **Map-Reduce Example (department-wise salary sum)**
            
            ```jsx
            db.teacher.mapReduce(
              function() { emit(this.department, this.salary); },
              function(key, values) { return Array.sum(values); },
              { out: "dept_salary_sum" }
            )
            
            ```
            
            **Comparison:**
            
            | --- | --- | --- |
            
            > Tip: Use aggregation pipeline unless Map-Reduce is absolutely needed.
            > 
            
            ---
            
            # **2️⃣ Indexing in MongoDB**
            
            ### **Definition**
            
            An **index** is a **data structure** that improves the speed of **querying documents** in a collection.
            
            Think of it as the **index of a book**—instead of scanning every page, you can directly find the page number.
            
            ---
            
            ### **Why Indexing is Used**
            
            1. **Faster Queries:**
            2. **Efficient Sorting:**
            3. **Supports Unique Constraints:**
            
            ---
            
            ### **Types of Indexes**
            
            - **Single Field Index** → index on one field
            
            ```jsx
            db.teacher.createIndex({ department: 1 })
            
            ```
            
            - **Compound Index** → index on multiple fields
            
            ```jsx
            db.teacher.createIndex({ department: 1, salary: -1 })
            
            ```
            
            - **Unique Index** → ensures no duplicate values
            
            ```jsx
            db.teacher.createIndex({ name: 1 }, { unique: true })
            
            ```
            
            ---
            
            ### **Commands**
            
            ### **Create Index**
            
            ```jsx
            db.collection.createIndex({ field: 1 })
            
            ```
            
            ### **Ensure Index**
            
            - In older MongoDB versions, `ensureIndex` was used.
            - **Now deprecated**, replaced by `createIndex`.
            - Example:
            
            ```jsx
            db.teacher.createIndex({ department: 1 })
            
            ```
            
            ### **View Indexes**
            
            ```jsx
            db.teacher.getIndexes()
            
            ```
            
            ### **Drop Index**
            
            - Remove an index when not needed:
            
            ```jsx
            db.teacher.dropIndex("department_1")
            
            ```
            
            > Note: Dropping unnecessary indexes saves disk space and improves write performance.
            > 
            
            ---
            
            ### **Example: Index Use**
            
            ```jsx
            // Without index: collection scan
            db.teacher.find({ department: "CS" })
            
            // With index: faster lookup
            db.teacher.createIndex({ department: 1 })
            db.teacher.find({ department: "CS" })
            
            ```
            
            ---
            
            ### **When to Use Index**
            
            - Fields used in **queries** frequently (`find()`)
            - Fields used for **sorting** (`sort()`)
            - Fields used in **join/lookups**
            - **Avoid** too many indexes: slows down insert/update operations.
            
            ---
            
            # **3️⃣ Aggregation vs Indexing**
            
            - **Aggregation** → computes summaries, statistics, or transformations of documents
            - **Indexing** → optimizes **query performance**, does not compute results
            
            > Think: Aggregation = “calculate something”, Index = “find it faster”
            > 
            
            ---
            
            # **4️⃣ Practical Notes for Students**
            
            - Always use **aggregation pipeline** for tasks like:
            - Use **indexes** when:
            - **Dropping unused indexes** improves write performance.
            
            ---
            
            # **5️⃣ Quick Example Combining Aggregation + Index**
            
            ```jsx
            // Create index on department
            db.teacher.createIndex({ department: 1 })
            
            // Aggregate: Average salary per department
            db.teacher.aggregate([
              { $group: { _id: "$department", avgSalary: { $avg: "$salary" } } }
            ])
            
            ```
            
            - Index improves **speed** if `teacher` collection has thousands of documents.
        - more para
            
            # **1️⃣ $addToSet**
            
            ### **Definition**
            
            - `$addToSet` is an **update or aggregation operator** that **adds a value to an array only if it does not already exist**.
            - Prevents duplicates in an array (unlike `$push`, which always adds).
            
            ---
            
            ### **Use Cases**
            
            - Maintain a **list of unique values** in an array.
            - Example: Track all **courses a student has enrolled in**.
    - VIVA QUESTIONS
        
        # **MongoDB Viva Questions and Answers**
        
        ---
        
        ## **1️⃣ General MongoDB Questions**
        
        **Q1:** What is MongoDB?
        
        **A1:** MongoDB is a **NoSQL document-oriented database** that stores data in **JSON-like documents (BSON)**. It is schema-less, horizontally scalable, and supports high performance.
        
        **Q2:** What is the difference between SQL and NoSQL?
        
        **A2:**
        
        | --- | --- | --- |
        
        **Q3:** What is BSON?
        
        **A3:** BSON is **Binary JSON**, the format MongoDB uses to store documents efficiently. Supports additional data types like `Date` and `Binary` that JSON does not.
        
        **Q4:** What is a document and collection?
        
        **A4:**
        
        - **Document:** A single record in MongoDB, stored in JSON-like format.
        - **Collection:** A group of documents, similar to a table in SQL.
        
        ---
        
        ## **2️⃣ CRUD Operations**
        
        **Q5:** How do you insert multiple documents?
        
        **A5:** Using `insertMany()`
        
        ```jsx
        db.teacher.insertMany([{ name: "Alice" }, { name: "Bob" }])
        
        ```
        
        **Q6:** How do you update a single document?
        
        **A6:** Using `updateOne()`
        
        ```jsx
        db.teacher.updateOne({ name: "Alice" }, { $set: { salary: 55000 } })
        
        ```
        
        **Q7:** How do you update multiple documents?
        
        **A7:** Using `updateMany()`
        
        ```jsx
        db.teacher.updateMany({ experience: { $gt: 5 } }, { $inc: { salary: 5000 } })
        
        ```
        
        **Q8:** What is the difference between `$set` and `$inc`?
        
        **A8:**
        
        - `$set` → sets a field to a specific value (creates field if missing)
        - `$inc` → increments/decrements a numeric field
        
        **Q9:** How do you delete a document?
        
        **A9:**
        
        ```jsx
        db.teacher.deleteOne({ name: "Alice" })
        db.teacher.deleteMany({ department: "CS" })
        
        ```
        
        ---
        
        ## **3️⃣ Logical & Comparison Operators**
        
        **Q10:** What is the difference between `$gte`, `$lte`, `$gt`, `$lt`, `$eq`, `$ne`?
        
        **A10:**
        
        | --- | --- |
        
        **Q11:** How do you combine conditions using logical operators?
        
        **A11:**
        
        ```jsx
        db.student.find({ $and: [{ department: "CS" }, { marks: { $gt: 75 } }] })
        
        ```
        
        Logical operators: `$and`, `$or`, `$not`, `$nor`.
        
        ---
        
        ## **4️⃣ Aggregation Pipeline**
        
        **Q12:** What is aggregation in MongoDB?
        
        **A12:** Aggregation is the process of **processing multiple documents to return computed results** (e.g., sum, average, min, max, counts).
        
        **Q13:** Name common aggregation operators.
        
        **A13:** `$group`, `$match`, `$project`, `$sort`, `$limit`, `$skip`, `$first`, `$last`, `$addToSet`, `$sum`, `$avg`, `$min`, `$max`.
        
        **Q14:** Explain `$match`.
        
        **A14:** Filters documents (like SQL `WHERE`). Example:
        
        ```jsx
        { $match: { department: "CS", experience: { $gte: 5 } } }
        
        ```
        
        **Q15:** Explain `$group`.
        
        **A15:** Groups documents by a key and performs aggregation:
        
        ```jsx
        { $group: { _id: "$department", totalSalary: { $sum: "$salary" } } }
        
        ```
        
        **Q16:** What does `$project` do?
        
        **A16:** Shapes the output document: include/exclude fields, compute new fields.
        
        ```jsx
        { $project: { name: 1, salary: 1, _id: 0 } }
        
        ```
        
        **Q17:** What is `$addToSet`?
        
        **A17:** Adds a value to an array **only if it does not already exist**. Used to avoid duplicates.
        
        **Q18:** Difference between `$addToSet` and `$push`?
        
        **A18:**
        
        - `$push` → adds value to array (duplicates allowed)
        - `$addToSet` → adds **unique** values only
        
        **Q19:** What is `$last` in aggregation?
        
        **A19:** Returns the **last value in a group** (order dependent, requires sorting first).
        
        **Q20:** How do you sort and limit results in aggregation?
        
        **A20:**
        
        ```jsx
        { $sort: { salary: -1 } }
        { $limit: 3 }
        
        ```
        
        - `1` → ascending, `1` → descending
        
        ---
        
        ## **5️⃣ Indexing**
        
        **Q21:** What is an index?
        
        **A21:** A data structure that **improves query speed**. Like a book index: avoids scanning all documents.
        
        **Q22:** How do you create an index?
        
        **A22:**
        
        ```jsx
        db.teacher.createIndex({ department: 1 })
        
        ```
        
        **Q23:** How do you view indexes?
        
        **A23:**
        
        ```jsx
        db.teacher.getIndexes()
        
        ```
        
        **Q24:** How do you drop an index?
        
        **A24:**
        
        ```jsx
        db.teacher.dropIndex("department_1")
        
        ```
        
        **Q25:** Why do we use indexes?
        
        **A25:**
        
        - Faster query execution
        - Efficient sorting
        - Enforce uniqueness (optional)
        
        **Q26:** Can too many indexes affect performance?
        
        **A26:** Yes, they **slow down insert/update** operations because indexes need updating.
        
        ---
        
        ## **6️⃣ Practical Scenario-Based Questions**
        
        **Q27:** How do you find top 3 highest-paid teachers?
        
        **A27:**
        
        ```jsx
        db.teacher.find({}, { name: 1, salary: 1, _id: 0 }).sort({ salary: -1 }).limit(3)
        
        ```
        
        **Q28:** How do you find students in CS department with marks > 75?
        
        **A28:**
        
        ```jsx
        db.student.find({ $and: [ { department: "CS" }, { marks: { $gt: 75 } } ] })
        
        ```
        
        **Q29:** How do you find department-wise average salary?
        
        **A29:**
        
        ```jsx
        db.teacher.aggregate([
          { $group: { _id: "$department", avgSalary: { $avg: "$salary" } } }
        ])
        
        ```
        
        **Q30:** How do you add a course to a teacher's courses only if it doesn't exist?
        
        **A30:**
        
        ```jsx
        db.teacher.updateOne({ name: "Alice" }, { $addToSet: { courses: "MongoDB" } })
        
        ```
        
        **Q31:** How do you get the last teacher (most experienced) in each department?
        
        **A31:**
        
        ```jsx
        db.teacher.aggregate([
          { $sort: { experience: 1 } },
          { $group: { _id: "$department", lastTeacher: { $last: "$name" } } }
        ])
        
        ```
        
        **Q32:** How do you combine multiple aggregation stages?
        
        **A32:**
        
        - Use **pipeline stages in order**: `$match` → `$sort` → `$group` → `$project` → `$limit` → `$skip`
        - Example: Department-wise last teacher with unique courses:
        
        ```jsx
        db.teacher.aggregate([
          { $match: { experience: { $gte: 3 } } },
          { $sort: { experience: 1 } },
          { $group: { _id: "$department", lastTeacher: { $last: "$name" }, uniqueCourses: { $addToSet: "$courses" } } },
          { $project: { lastTeacher: 1, uniqueCourses: 1, _id: 0 } },
          { $sort: { lastTeacher: 1 } },
          { $limit: 5 }
        ])
        
        ```
        
        **Q33:** What does `-1` mean in `$sort`?
        
        **A33:** Descending order. `1` means ascending order.
        
        ---
        
        ## **7️⃣ Tips for Practicals / Viva**
        
        1. Always **filter early** using `$match` for performance.
        2. `$last` and `$first` are **order-dependent**; sort **before grouping**.
        3. `$addToSet` ensures **unique array values**.
        4. `$project` can be used to **rename or compute fields**.
        5. Combine `$sort` + `$limit` for **top N queries**.
        6. Use indexes on fields frequently **queried or sorted**.
        7. Avoid unnecessary indexes to prevent **slow writes**.
        
        ---
        
        This set has **33+ viva questions with answers**, covering:
        
        - CRUD operations
        - Logical and comparison operators
        - Aggregation pipeline stages
        - `$addToSet`, `$last`, `$project`, `$sort`, `$limit`, `$skip`
        - Indexing commands
        - Practical scenario-based questions
- EXP11
    - Notes
        
        ### **Aggregation vs Map-Reduce in MongoDB**
        
        | --- | --- | --- |
        
        ✅ **Key Difference in Reality:** Aggregation is optimized and declarative. Map-Reduce is more like coding logic in JS for data transformation — flexible but slower and heavier. Aggregation should be preferred unless you need very complex operations impossible in aggregation.
        
        ---
        
        ### **Deep Notes on Map-Reduce**
        
        1. **Map Function (`map`)**
        2. **Reduce Function (`reduce`)**
        3. **Finalize Function (`finalize`)** *(optional)*
        4. **Query Parameter (`query`)**
        5. **Sort Parameter (`sort`)**
        6. **Limit Parameter (`limit`)**
        7. **Output (`out`)**
        8. **Other Notes**
    - Program
        - practical one
        - act1
    - viva questions
        
        # **MongoDB Map-Reduce & Aggregation Viva Questions & Answers**
        
        ---
        
        ## **1️⃣ Basic Concept Questions**
        
        **Q1. What is Map-Reduce in MongoDB?**
        
        **A1.** Map-Reduce is a data processing paradigm in MongoDB that allows you to **process large datasets by applying a JavaScript `map()` function to each document**, followed by a `reduce()` function to aggregate the emitted key-value pairs.
        
        **Q2. What is the purpose of the map function?**
        
        **A2.** The map function **emits key-value pairs** for each document in the collection. The key determines how documents are grouped for aggregation, and the value is the data to be processed.
        
        **Q3. What is the purpose of the reduce function?**
        
        **A3.** The reduce function **aggregates all the values emitted for the same key**. For example, it can sum, find the maximum, count, or average values for each key.
        
        **Q4. What is the finalize function?**
        
        **A4.** An optional function in Map-Reduce that further processes the results after `reduce()` has run, e.g., computing averages from sums and counts.
        
        **Q5. What is the difference between Aggregation and Map-Reduce?**
        
        **A5.**
        
        | --- | --- | --- |
        
        ---
        
        ## **2️⃣ Syntax & Practical Questions**
        
        **Q6. What is the syntax of map() in MongoDB?**
        
        **A6.**
        
        ```jsx
        var mapFunc = function() {
            emit(key, value);
        };
        
        ```
        
        - `key` → field by which you want to group data
        - `value` → field to aggregate
        
        ---
        
        **Q7. What is the syntax of reduce() in MongoDB?**
        
        **A7.**
        
        ```jsx
        var reduceFunc = function(key, values) {
            return aggregation_of_values;
        };
        
        ```
        
        - `key` → the emitted key
        - `values` → an array of values emitted for that key
        - Example: `Array.sum(values)`
        
        ---
        
        **Q8. How do you execute Map-Reduce in MongoDB?**
        
        **A8.**
        
        ```jsx
        db.collection.mapReduce(mapFunction, reduceFunction, {out: "outputCollection"});
        
        ```
        
        - `mapFunction` → your map function
        - `reduceFunction` → your reduce function
        - `out` → specifies where to store the results (`inline` or collection name)
        
        ---
        
        **Q9. How do you filter documents before Map-Reduce?**
        
        **A9.** Use the `query` option:
        
        ```jsx
        db.collection.mapReduce(mapFunction, reduceFunction, {query: {field: value}, out: "outputCollection"});
        
        ```
        
        ---
        
        **Q10. How do you limit or sort documents before Map-Reduce?**
        
        **A10.** Use the `limit` and `sort` options:
        
        ```jsx
        db.collection.mapReduce(mapFunction, reduceFunction, {sort: {field: 1}, limit: 100, out: "outputCollection"});
        
        ```
        
        ---
        
        ## **3️⃣ Scenario-Based Questions**
        
        **Q11. How do you find maximum marks per section in a collection?**
        
        **A11.**
        
        ```jsx
        var map = function() { emit(this.sec, this.marks); };
        var reduce = function(section, marks) { return Math.max.apply(null, marks); };
        db.user_collection.mapReduce(map, reduce, {out: "maxMarksPerSection"});
        
        ```
        
        ---
        
        **Q12. How do you calculate total salary per company?**
        
        **A12.**
        
        ```jsx
        var mapFunc = function() { emit(this.CompName, this.Sal); };
        var reduceFunc = function(company, salaries) { return Array.sum(salaries); };
        db.emoployee_data.mapReduce(mapFunc, reduceFunc, {out: "totalSalary"});
        
        ```
        
        ---
        
        **Q13. How do you calculate average salary for a city?**
        
        **A13.**
        
        ```jsx
        var mapFunc = function() { emit(this.city, this.Sal); };
        var reduceFunc = function(city, salaries) { return Array.avg(salaries); };
        db.collection.mapReduce(mapFunc, reduceFunc, {out: "avgSalaryByCity"});
        
        ```
        
        ---
        
        **Q14. How do you count number of employees in a city?**
        
        **A14.**
        
        ```jsx
        var mapFunc = function() { emit(this.city, 1); };
        var reduceFunc = function(city, counts) { return Array.sum(counts); };
        db.collection.mapReduce(mapFunc, reduceFunc, {out: "countByCity"});
        
        ```
        
        ---
        
        **Q15. Why use `{section: this.sec}` instead of just `this.sec` in emit?**
        
        **A15.**
        
        - Using an object `{section: this.sec}` makes the **key structured and descriptive**, allowing for **compound keys** in future.
        - Output `_id` becomes `{section: "A"}` instead of just `"A"`.
        - Useful when grouping by multiple fields: `{section: this.sec, year: this.year}`.
        
        ---
        
        ## **4️⃣ Output & Interpretation Questions**
        
        **Q16. What does the `_id` field in Map-Reduce output represent?**
        
        **A16.** `_id` contains the **key emitted by the map function**, representing the group for aggregation.
        
        **Q17. What does the `value` field in Map-Reduce output represent?**
        
        **A17.** `value` contains the **aggregated result** after reduce (and finalize, if any).
        
        **Q18. How do you view Map-Reduce results?**
        
        **A18.** Use:
        
        ```jsx
        db.outputCollection.find().pretty();
        
        ```
        
        ---
        
        ## **5️⃣ Advanced / Viva Tips**
        
        **Q19. Can Map-Reduce use indexes efficiently?**
        
        **A19.** Only for the **query/filter part** before Map-Reduce starts. Once data enters map(), JS execution does not use indexes.
        
        **Q20. When should you use Aggregation over Map-Reduce?**
        
        **A20.** Always prefer **Aggregation** for analytics unless you need **complex custom JS logic**. Aggregation is faster, optimized, and scales better.
        
        **Q21. Can Map-Reduce output be inline instead of a collection?**
        
        **A21.** Yes, use `{out: {inline: 1}}`. Example:
        
        ```jsx
        db.collection.mapReduce(mapFunc, reduceFunc, {out: {inline: 1}});
        
        ```
        
        **Q22. Can you perform multiple grouping fields in Map-Reduce?**
        
        **A22.** Yes, use **compound keys** in emit:
        
        ```jsx
        emit({section: this.sec, year: this.year}, this.marks);
        
        ```
        
        ---
        
        ## **6️⃣ Quick Practical Questions**
        
        - Find **statewise population** in `city` collection → Map by state, reduce sum of population.
        - Find **citywise population** → Map by city, reduce sum.
        - Find **typewise population (urban/rural)** → Map by type, reduce sum.
        - Count employees in **Pune city with age > 40** → Map emits 1 with conditional, reduce sums.
        - Average salary in **Pune** → Map emits salary, reduce averages.
- EXP 12
    - PROGRAMS
        - version 1
        - version 2
    - Viva questions
        
        # **Practical 12 Viva Questions & Answers: Python + MongoDB CRUD**
        
        ---
        
        ## **Section 1: Basic Concepts**
        
        **Q1. What is MongoDB?**
        
        **A:** MongoDB is a **NoSQL database** that stores data in **JSON-like documents**. It is schema-less, supports horizontal scaling, and is suitable for unstructured or semi-structured data.
        
        **Q2. What is PyMongo?**
        
        **A:** PyMongo is a **Python library** that allows Python programs to interact with MongoDB. It provides methods for CRUD operations, queries, and database management.
        
        **Q3. What is a collection in MongoDB?**
        
        **A:** A collection is like a **table in SQL**. It stores **documents** (records) and is schema-less.
        
        **Q4. What is a document in MongoDB?**
        
        **A:** A document is a **JSON-like object** stored in a collection. Example:
        
        ```json
        {"rollno": 1, "name": "geet"}
        
        ```
        
        **Q5. What is `_id` in MongoDB?**
        
        **A:** `_id` is a **unique identifier automatically generated** for every document. You can also assign a custom value.
        
        ---
        
        ## **Section 2: Python & PyMongo**
        
        **Q6. How do you connect Python to MongoDB?**
        
        **A:** Using `MongoClient` from PyMongo:
        
        ```python
        from pymongo import MongoClient
        client = MongoClient("localhost", 27017)
        
        ```
        
        **Q7. How do you select a database and collection in Python?**
        
        ```python
        db = client.gdb      # Select database
        table = db.a12       # Select collection
        
        ```
        
        **Q8. Difference between `insert_one()` and `insert_many()`?**
        
        - `insert_one()` → Inserts **one document** at a time.
        - `insert_many()` → Inserts **multiple documents** in one operation.
        
        **Q9. How do you retrieve all documents in a collection?**
        
        ```python
        for doc in table.find():
            print(doc)
        
        ```
        
        - `find()` fetches all documents.
        - Use `pprint()` for better formatting.
        
        **Q10. How do you update a document in Python?**
        
        ```python
        table.update_one({"rollno": 1}, {"$set": {"name": "prem"}})
        
        ```
        
        - `$set` updates only the specified field.
        - `update_one()` updates the **first matching document**.
        - `update_many()` updates **all matching documents**.
        
        **Q11. How do you delete a document?**
        
        ```python
        table.delete_one({"rollno": 1})
        
        ```
        
        - Deletes **the first matching document**.
        - `delete_many()` deletes all matching documents.
        
        ---
        
        ## **Section 3: CRUD Terminal Application**
        
        **Q12. What is the purpose of the `while True` loop in the program?**
        
        **A:** To **continuously show the menu** and allow multiple operations until the user chooses to exit.
        
        **Q13. What is the role of the `menu()` function?**
        
        **A:** It **displays CRUD options** to the user and **returns their choice**.
        
        **Q14. How is input from the user handled?**
        
        - `input()` is used to get **roll number, name, or choice** from the user.
        - Inputs are **converted to the correct type** if necessary, e.g., `int()` for roll numbers.
        
        **Q15. What happens if the user enters an invalid choice?**
        
        - The program prints `"Invalid choice. Please enter 1-5."`
        - The menu is shown again due to the `while True` loop.
        
        **Q16. Why use `pprint()` instead of `print()`?**
        
        - `pprint()` formats dictionaries nicely.
        - Makes **document output readable**, similar to `db.collection.find().pretty()` in MongoDB shell.
        
        ---
        
        ## **Section 4: Advanced / Conceptual**
        
        **Q17. Why is `_id` important in MongoDB?**
        
        - Ensures **uniqueness** for every document.
        - Can be used as a **primary key** for operations like update or delete.
        
        **Q18. Can MongoDB work without `_id`?**
        
        - No, `_id` is **mandatory**, but MongoDB generates it automatically if not provided.
        
        **Q19. What is the difference between MongoDB and SQL databases?**
        
        | --- | --- | --- |
        
        **Q20. What is the difference between `update_one` and `replace_one`?**
        
        - `update_one` → Updates only specified fields.
        - `replace_one` → Replaces the **entire document**.
        
        **Q21. What is `$set` operator?**
        
        - `$set` updates **specific fields** in a document without affecting others.
        
        **Q22. What is a terminal frontend in this context?**
        
        - Python script acts as a **user interface** to perform CRUD operations.
        - MongoDB is the **backend database** storing data.
        
        **Q23. Can we perform CRUD operations without PyMongo?**
        
        - Yes, using **Mongo shell (`mongosh`)**, but PyMongo allows **Python integration**.
        
        **Q24. How can you handle multiple inserts efficiently in Python?**
        
        - Use `insert_many()` with a **list of dictionaries**.
        
        **Q25. What is the difference between `find_one` and `find`?**
        
        - `find_one()` → Returns **first matching document**.
        - `find()` → Returns a **cursor with all matching documents**.
        
        ---
        
        ## **Section 5: Error Handling / Best Practices**
        
        **Q26. What happens if MongoDB server is not running?**
        
        - `MongoClient` will **fail to connect**.
        - Error like `ServerSelectionTimeoutError` may occur.
        
        **Q27. How can you avoid inserting duplicate `_id`?**
        
        - Do not provide `_id` manually, or check for existing documents before insert.
        
        **Q28. What is a Deprecation Warning in MongoDB?**
        
        - `insert()` is **deprecated**. Use `insert_one()` or `insert_many()` instead.
        
        **Q29. Can we update multiple fields at once?**
        
        ```python
        table.update_one({"rollno":1}, {"$set": {"name":"prem","age":21}})
        
        ```
        
        - Yes, include all fields in the `$set` dictionary.
        
        **Q30. How to delete all documents in a collection?**
        
        ```python
        table.delete_many({})
        
        ```
        
        - Deletes **all documents** but **not the collection itself**.
        
        ---
        
        ## **Section 6: Practical / Scenario-Based Questions**
        
        **Q31. User enters roll number that does not exist. What happens?**
        
        - `update_one()` or `delete_one()` will **not modify anything**.
        - `matched_count` or `deleted_count` will be 0, which can be checked.
        
        **Q32. How do you search for a document by name?**
        
        ```python
        table.find({"name":"geet"})
        
        ```
        
        **Q33. Can you insert documents with different fields in MongoDB?**
        
        - Yes, MongoDB is **schema-less**, so each document can have different fields.
        
        **Q34. How can you exit the terminal CRUD program safely?**
        
        - User chooses option `5`, which breaks the `while True` loop.
        
        **Q35. How to display documents sorted by roll number?**
        
        ```python
        for doc in table.find().sort("rollno", 1):
            pprint(doc)
        
        ```
        
        - `1` for ascending, `1` for descending.
        
        ---
        
        This list covers **35 viva questions**, ranging from **basic definitions to Python-MongoDB integration and practical scenarios**.
        

https://github.com/PREMO625/student_crud.git4

- others
    
    ## 🧮 **ASSIGNMENT 5 — Stored Procedure & Function**
    
    ### 🧱 **DDL (Table Creation)**
    
    ```sql
    -- Assignment 5 - Tables
    CREATE TABLE Stud_Marks (
        Roll NUMBER(5) PRIMARY KEY,
        Name VARCHAR2(50),
        Total_Marks NUMBER(6)
    );
    
    CREATE TABLE Result (
        Roll NUMBER(5),
        Name VARCHAR2(50),
        Class VARCHAR2(30)
    );
    
    ```
    
    ### 📥 **Sample Data**
    
    ```sql
    INSERT INTO Stud_Marks VALUES (101, 'Aarav', 1450);
    INSERT INTO Stud_Marks VALUES (102, 'Isha', 960);
    INSERT INTO Stud_Marks VALUES (103, 'Rehan', 880);
    INSERT INTO Stud_Marks VALUES (104, 'Meera', 830);
    INSERT INTO Stud_Marks VALUES (105, 'Tina', 700);
    COMMIT;
    
    ```
    
    ---
    
    ### ⚙️ **Stored Procedure — `proc_Grade`**
    
    ```sql
    -- Stored Procedure to categorize students
    CREATE OR REPLACE PROCEDURE proc_Grade(
        p_roll IN NUMBER,
        p_name IN VARCHAR2,
        p_marks IN NUMBER
    )
    IS
        v_class VARCHAR2(30);
    BEGIN
        IF p_marks BETWEEN 990 AND 1500 THEN
            v_class := 'Distinction';
        ELSIF p_marks BETWEEN 900 AND 989 THEN
            v_class := 'First Class';
        ELSIF p_marks BETWEEN 825 AND 899 THEN
            v_class := 'Higher Second Class';
        ELSE
            v_class := 'Pass/Fail Category';
        END IF;
    
        INSERT INTO Result (Roll, Name, Class)
        VALUES (p_roll, p_name, v_class);
    
        DBMS_OUTPUT.PUT_LINE('Inserted: ' || p_name || ' -> ' || v_class);
    END;
    /
    
    ```
    
    ---
    
    ### ▶️ **PL/SQL Block to Use Procedure**
    
    ```sql
    SET SERVEROUTPUT ON;
    
    BEGIN
        FOR rec IN (SELECT * FROM Stud_Marks) LOOP
            proc_Grade(rec.Roll, rec.Name, rec.Total_Marks);
        END LOOP;
    END;
    /
    
    SELECT * FROM Result;
    
    ```
    
    ---
    
    ### 🌙 **Extra Activity 1 — Leap Year Check (Procedure)**
    
    ```sql
    CREATE OR REPLACE PROCEDURE check_leap_year(p_year IN NUMBER)
    IS
    BEGIN
        IF ((MOD(p_year, 4) = 0 AND MOD(p_year, 100) <> 0)
            OR (MOD(p_year, 400) = 0)) THEN
            DBMS_OUTPUT.PUT_LINE(p_year || ' is a Leap Year');
        ELSE
            DBMS_OUTPUT.PUT_LINE(p_year || ' is NOT a Leap Year');
        END IF;
    END;
    /
    
    BEGIN
        check_leap_year(2024);
        check_leap_year(2100);
    END;
    /
    
    ```
    
    ---
    
    ### 🌙 **Extra Activity 2 — Number to Words (Function)**
    
    ```sql
    CREATE OR REPLACE FUNCTION num_to_words(p_num IN NUMBER)
    RETURN VARCHAR2
    IS
        v_num VARCHAR2(20) := TO_CHAR(p_num);
        v_result VARCHAR2(200);
    BEGIN
        FOR i IN 1 .. LENGTH(v_num) LOOP
            v_result := v_result || DECODE(SUBSTR(v_num, i, 1),
                '0', 'zero ',
                '1', 'one ',
                '2', 'two ',
                '3', 'three ',
                '4', 'four ',
                '5', 'five ',
                '6', 'six ',
                '7', 'seven ',
                '8', 'eight ',
                '9', 'nine '
            );
        END LOOP;
    
        RETURN RTRIM(v_result);
    END;
    /
    
    SET SERVEROUTPUT ON;
    BEGIN
        DBMS_OUTPUT.PUT_LINE(num_to_words(523));
    END;
    /
    
    ```
    
    ---
    
    ## 🧭 **ASSIGNMENT 6 — Cursors (All Types)**
    
    ### 🧱 **DDL**
    
    ```sql
    CREATE TABLE O_RollCall (
        RollNo NUMBER(5) PRIMARY KEY,
        Name VARCHAR2(50)
    );
    
    CREATE TABLE N_RollCall (
        RollNo NUMBER(5) PRIMARY KEY,
        Name VARCHAR2(50)
    );
    
    ```
    
    ### 📥 **Sample Data**
    
    ```sql
    INSERT INTO O_RollCall VALUES (1, 'Aarav');
    INSERT INTO O_RollCall VALUES (2, 'Isha');
    INSERT INTO O_RollCall VALUES (3, 'Rehan');
    
    INSERT INTO N_RollCall VALUES (2, 'Isha');
    INSERT INTO N_RollCall VALUES (3, 'Rehan');
    INSERT INTO N_RollCall VALUES (4, 'Meera');
    INSERT INTO N_RollCall VALUES (5, 'Tina');
    COMMIT;
    
    ```
    
    ---
    
    ### 🌀 **Parameterized Cursor to Merge**
    
    ```sql
    SET SERVEROUTPUT ON;
    
    DECLARE
        CURSOR c_new_rolls IS
            SELECT RollNo, Name FROM N_RollCall;
    
        v_exists NUMBER;
    BEGIN
        FOR rec IN c_new_rolls LOOP
            SELECT COUNT(*) INTO v_exists
            FROM O_RollCall WHERE RollNo = rec.RollNo;
    
            IF v_exists = 0 THEN
                INSERT INTO O_RollCall VALUES (rec.RollNo, rec.Name);
                DBMS_OUTPUT.PUT_LINE('Inserted: ' || rec.Name);
            ELSE
                DBMS_OUTPUT.PUT_LINE('Skipped: ' || rec.Name || ' (Already Exists)');
            END IF;
        END LOOP;
    END;
    /
    
    SELECT * FROM O_RollCall;
    
    ```
    
    ---
    
    ### 💡 **Extra Cursor Example — Explicit Cursor Display Employees**
    
    ```sql
    -- Sample Employee Table
    CREATE TABLE Emp (
        EmpNo NUMBER PRIMARY KEY,
        EmpName VARCHAR2(50),
        Salary NUMBER(10)
    );
    
    INSERT INTO Emp VALUES (101, 'Aarav', 50000);
    INSERT INTO Emp VALUES (102, 'Isha', 45000);
    INSERT INTO Emp VALUES (103, 'Rehan', 60000);
    COMMIT;
    
    -- Explicit Cursor to display employee name & salary
    SET SERVEROUTPUT ON;
    
    DECLARE
        CURSOR emp_cur IS
            SELECT EmpName, Salary FROM Emp;
        v_name Emp.EmpName%TYPE;
        v_salary Emp.Salary%TYPE;
    BEGIN
        OPEN emp_cur;
        LOOP
            FETCH emp_cur INTO v_name, v_salary;
            EXIT WHEN emp_cur%NOTFOUND;
            DBMS_OUTPUT.PUT_LINE('Employee: ' || v_name || ' | Salary: ' || v_salary);
        END LOOP;
        CLOSE emp_cur;
    END;
    /
    
    ```
    
    ---
    
    ## 🔥 **ASSIGNMENT 7 — Triggers**
    
    ### 🧱 **DDL**
    
    ```sql
    CREATE TABLE Library (
        BookID NUMBER PRIMARY KEY,
        BookName VARCHAR2(100),
        Author VARCHAR2(50),
        Price NUMBER(8,2)
    );
    
    CREATE TABLE Library_Audit (
        Audit_ID NUMBER GENERATED ALWAYS AS IDENTITY,
        BookID NUMBER,
        BookName VARCHAR2(100),
        Author VARCHAR2(50),
        Price NUMBER(8,2),
        Action_Type VARCHAR2(20),
        Action_Date DATE
    );
    
    ```
    
    ### 📥 **Sample Data**
    
    ```sql
    INSERT INTO Library VALUES (1, 'Oracle PL/SQL', 'Scott', 1200);
    INSERT INTO Library VALUES (2, 'Database Concepts', 'Martin', 900);
    COMMIT;
    
    ```
    
    ---
    
    ### ⚙️ **Trigger to Audit Updates & Deletes**
    
    ```sql
    CREATE OR REPLACE TRIGGER trg_Library_Audit
    BEFORE DELETE OR UPDATE ON Library
    FOR EACH ROW
    BEGIN
        INSERT INTO Library_Audit (BookID, BookName, Author, Price, Action_Type, Action_Date)
        VALUES (:OLD.BookID, :OLD.BookName, :OLD.Author, :OLD.Price,
            CASE
                WHEN UPDATING THEN 'UPDATE'
                WHEN DELETING THEN 'DELETE'
            END,
            SYSDATE);
    END;
    /
    
    ```
    
    ---
    
    ### ▶️ **Test the Trigger**
    
    ```sql
    UPDATE Library SET Price = 1500 WHERE BookID = 1;
    DELETE FROM Library WHERE BookID = 2;
    COMMIT;
    
    SELECT * FROM Library_Audit;
    
    ```
    
    ---
    
    ### ⚙️ **Extra Trigger 1 — Prevent Duplicate EmpNo**
    
    ```sql
    CREATE OR REPLACE TRIGGER trg_check_empno
    BEFORE INSERT ON Emp
    FOR EACH ROW
    DECLARE
        v_count NUMBER;
    BEGIN
        SELECT COUNT(*) INTO v_count FROM Emp WHERE EmpNo = :NEW.EmpNo;
        IF v_count > 0 THEN
            RAISE_APPLICATION_ERROR(-20001, 'Duplicate EmpNo not allowed!');
        END IF;
    END;
    /
    
    ```
    
    ---
    
    ### ⚙️ **Extra Trigger 2 — Salary Increase Logging**
    
    ```sql
    CREATE OR REPLACE TRIGGER trg_salary_check
    BEFORE UPDATE OF Salary ON Emp
    FOR EACH ROW
    BEGIN
        IF :NEW.Salary < :OLD.Salary THEN
            RAISE_APPLICATION_ERROR(-20002, 'New salary cannot be less than old salary!');
        ELSE
            DBMS_OUTPUT.PUT_LINE('Salary increased from ' || :OLD.Salary || ' to ' || :NEW.Salary);
        END IF;
    END;
    /
    
    ```
    
    ---
    
    ✅ **Now you can save each assignment as a `.sql` file and run:**
    
    ```bash
    SQL> @assignment5.sql
    SQL> @assignment6.sql
    SQL> @assignment7.sql
    
    ```
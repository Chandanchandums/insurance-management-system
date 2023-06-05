# insurance-management-system
It is the DBMS prooject done in mysql Database

A dashboard website for a Insurance Company.
Built using **PHP**, **MySQL**, **HTML**, **CSS**

Login, logout, session, multilevel access,purchasing policy,and adding policies by admin are implemented here.

## Features
- Admins are predefined
- New Clients can register and create account using Sign up
- Admins can create, update, delete all policies in the system
- Impleted triggers(for keeping the copy of customer in another table) ,procedure(used cursor inside it to print the table content one by one) and function(To classiy the age based on the range of the age)


## Deploy on localhost
Assuming **XAMPP** is already installed in your local machine

1. Clone into your **xampp/htdocs** folder
2. Edit the **connection.php** file with your database username and password
2. Go to http://localhost/phpmyadmin
3. Create a database named **Insurance**
3. import the **Insurance.sql** file provided in **Insurance** folder
4. Go to http://localhost if you see a login page, it is working

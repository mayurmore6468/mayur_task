
# Database Structure :
 * Folder Name: 'wp_task'
 * Name of the database:  'task_db'  
     This database contaoins three tables as follow:
	1. tbl_users
	2.tbl_account
	3.tbl_contact

1. Table 'tbl_users' 
- The purpose of an this table Manages user roles for admin and user logins.
- Fields: Id (Primary key) , Role (to manage admin and user access), username & password.
- For admin login :  use 'admin@gmail.com' as username and '12345678' for password
- For user login :  use 'more@gmail.com' as username and '12345678' for password

2. Table 'tbl_account'
- The pupose of an this Displays data in the frontend file account.php which stores data from account form.
- Fields: Id (primary key), Name, Image.

3. Table 'tbl_contact'
- The purpose of an this table is Stores data from the contact us form.
- Fields: Id (primary key), Name, address, city, message and image.

# API's :
- user_login.php file contains functions to interact with database

# Styles :
- This folder contains all the CSS files that has been apply to this assignment.

# Frontend files :
1. login.php
 This page contains two forms that is login form and sign up form

2.config.php
 This php file contains database connection
 
3.img
 This folder save all the images that has been uploaded on forms
 
4.index.php
 This contains home page, session is maintained in this file and slider appears over here.
 If user will be login then display all menus in this page otherwise only display on log in manu.  
 This file contains navigation bar to navigate to other files

5.logout.php
 This php file contain code to distory session.
 
6.edit_user & edit_contact
 This file contains code to edit data of that pages & in database also

7.delete_user & delete_contact
 This file contains code to delete data from pages & from databases also

8.account.php 
 This file contains Name & image 

9) contact.php
 This file contains data & fetched to admin_tasks file in table format

## Contact

Feel free to reach out with any questions or suggestions:

- **Email**: your-mayurmore6468@gmail.com
- **GitHub**: [mayurmore6468](https://github.com/mayurmore6468)

Thank you for checking out the web App!


# Note : 
 'database' file that has been exported is kept in databse folder of this same directory.

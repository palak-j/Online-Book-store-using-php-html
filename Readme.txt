Assignment 1
Link of the live website: https://in-info-web4.informatics.iupui.edu/~paljain/reg.html

Functionalities:
1) Registration of new user:
Email format: email should be in form abc@gmail.com
Password format: password should be of minimum 8 characters.
“Show password” checkbox.
Confirm password. (match “password” and “confirm password”)
Check if user already exist in database.

2) Login:
Check email in database and login if password entered matches password in database for that user.

3) Insert new book:
Logged in user can insert new book in the database.
Inputs from user: 
Book name
Author
Category (Dropdown available for comic/ motivational/ fiction/ drama)
Condition of book (Dropdown available for excellent/ good/ average/ poor) 
User name 
User email 
User contact number 
Trade form (Dropdown available for exchange/free)

4) Display books:
logged in user can see all the details of available books in the database.


4) Update Trade Type or Availability of book:
Take user email, book name and author as input. Check if the specific user has access to the input book or not.
Change availability status(Y/N) or trade type(Exchange/Free).

5) Logout
Databases created:
Contains three tables namely:
1) users: Containing details of all registered users.
 Columns: 
user_id – Primary key
name
email
phone
password
2) book: Contains details of all the books submitted by the registered users. 
Columns:
book_id – Primary key
author
book_name
category
book_condition
3) status: Shows the availability of  books containing book and user details.
Columns:
user_id – Composite Primary key / Foreign key
book_id – Composite Primary key / Foreign key
trade_status
availability

The code for creating the db is contained in the paljain_db sql file. 
All the code, ER digaram and source files are provided in the assignment1 zip folder which needed to run the program.


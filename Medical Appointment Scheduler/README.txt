
# MAS (Medical Appointment Scheduler)
MAS allows patients to log on and schedule appointments with their physician and nurse online.
Physicians and nurses can login as users as well. This gives physicians, nurses and patients the ability to
digitally keep track of and store medical appointment data.

## Installation

### Database creation
Create a database on MySql, then copy the whole content of debug_Clinic.sql file and paste it to input field under the
 SQL tab on phpMyAdmin for that database. Click 'Go'.

### Database configuration
Open up the 'dbConnection.php' file under 'controller' directory. Change this code based on your database settings:

```bash


$this->conn = new PDO("mysql:host=localhost;dbname=yourdatabasename;charset=utf8", "yourusername", "yourpassword");


```

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/css/main-content.css">
  <title>Register an Employee</title>
</head>
<body>
  <form action="/registered-as-employee" method="post">
    <h2>Register an Employee</h2>
    <p class="confirmation">{{ session('confirmation') }}</p>
    Employee Number: 
    <input type="number" name="ee_no" id="ee_no"><br><br>
    First Name:
    <input type="text" name="firstname" id="firstname"><br><br>
    Middle Name:
    <input type="text" name="middlename" id="middlename"><br><br>
    Last Name:
    <input type="text" name="lastname" id="lastname"><br><br>
    Email:
    <input type="email" name="email" id="email"><br><br>
    Password:
    <input type="password" name="password" id="password"><br><br>
    Position:
    <input type="text" name="position" id="position"><br><br>
    Department:
    <input type="text" name="dept" id="dept"><br><br>
    Section:
    <input type="text" name="sect" id="sect"><br><br>
    <button type="submit">Register</button>
  </form>
</body>
</html>
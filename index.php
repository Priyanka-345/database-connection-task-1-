<!DOCTYPE html>
<html>
<head>
    <style>
        .container{
            background-color:pink;
            height: 450px;
            width: 70%;
            align-items: center;
        }
    </style>
    <title>SignIn Form</title>
</head>
<body>
    <div class="container">
    <h1><center><font size="8" color="blue">SignIn Form</font></center></h1><hr><hr>
 <form action="function.php" method="POST">
  <table align="center">
   <tr>
    <td>Name :</td>
    <td><input type="text" name="username" required></td>
   </tr>
   <tr>
    <td>Password :</td>
    <td><input type="password" name="password" required></td>
   </tr>
   <tr>
    <td>Email :</td>
    <td><input type="email" name="email" required></td>
   </tr> 
   <tr>
    <td>Id :</td>
    <td><input type="id" name="id" required></td>
   </tr>
   <tr>
    <td>MSG :</td>
    <td><input type="msg" name="msg" required></td>
   </tr>
   <tr>
    <td><input type="submit" value="Submit" name="submit"></td>
   </tr>
  </table>
 </form>
 </div>
</body>
</html>
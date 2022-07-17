<html>
    <body>
    <form action ="../control/process.php" method="POST">
<table>
  <tr> <td>First Name: </td> 
  <td><input type="Text" name="fn"></td></tr>
  <tr> <td>Last Name: </td>  
  <td><input type="Text" name="ln"></td></tr>
  <td>Age: </td>  
  <td><input type="Text" name="age"></td></tr>
  <td>Designation: </td> 
  <td><input type="radio" name="des" value = "Junior Programmer">Junior Programmer</td>
  <td><input type="radio" name="des" value = "Senior Programmer">Senior Programmer</td>
  <td><input type="radio" name="des" value = "Project Leader">Project Lead</td></tr>
  <tr> <td>Preferred Language: </td>
  <td><input type="checkbox" name="prel[]" value = "JAVA">JAVA</td> 
  <td><input type="checkbox" name="prel[]" value = "PHP">PHP</td> 
  <td><input type="checkbox" name="prel[]" value = "C++">C++</td> </tr>
  <tr> <td>E-mail: </td>
  <td><input type="email" name="em"></td> </tr>
  <tr><td>Password: </td>
  <td><input type="password" name="pass"></td> </tr>
  <tr><td>Please choose a file: </td>
  <td><input type="file" name="fl"></td> </tr>
  <td><input type="submit" name="sm">
  <input type="reset" name="rs"></td> </tr>


    </body>
</html>
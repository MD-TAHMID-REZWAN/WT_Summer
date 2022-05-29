<html>
<body>
<center>

<h1> CALCULATOR </h1>


<form action="../control/process.php" method="post">
<table>

<tr>
<td> Number1: </td> <td> <input type="text" name="number1" placeholder="number1"> </td>
</tr>
<tr>
<td> Number2: </td> <td> <input type="text" name="number2" placeholder="number2"> </td>
</tr>
<tr>
<td> choose: </td> 

<td><input type="radio" name="button" value="+"> + </td>

<td><input type="radio" name="button" value="-"> - </td>

<td><input type="radio" name="button" value="*"> * </td>

<td><input type="radio" name="button" value="/"> / </td>
</tr>
<tr>
<td><input type="submit" name="Submit" value="Submit"></td>
<td><input type="reset" name="reset" value="Clear All"></td>
</tr>
</table>
</form>

</body>

</html>
</center>
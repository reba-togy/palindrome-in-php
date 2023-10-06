<html>
<body>
<form action="palindrome.php" method="post">
Enter the number:
<input type="number" name="n1"/><br><br>
<input type="submit" name="submit" value="Check ">
</form>
<?php
if(isset($_POST['submit']))
{
   $n1= $_POST['n1'];
   $temp=$n1;
   $rev=0;
   $n2=$n1;
   while($n1>1)
  {
       $rem= $n1%10;
       $rev= ($rev*10) +$rem;
       $n1= ($n1/10);
}
if($temp==$rev)
{
    echo"Number is a palindrome";
}
else
{
    echo"Number is not a palindrome";
}
}
?>
</body>
</html>

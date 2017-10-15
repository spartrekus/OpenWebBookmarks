<!DOCTYPE HTML>  
<html>
<head>
 <title>Tiny AddPad PHP</title>


 
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  

<a href="index.html">[Home]</a>
<a href="notepad.html">[View]</a>
<br
<hr/>

 
 <hr/> 
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Comment: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
// echo "<h2>Your Input:</h2>";
echo "<br>";
echo $comment;
?>



<?php    
/// do not forget to make the txt file, to make it work
$now = time();
$num = date("w");
if ($num == 0)
{ $sub = 6; }
else { $sub = ($num-1); }
$WeekMon  = mktime(0, 0, 0, date("m", $now)  , date("d", $now)-$sub, date("Y", $now));    //monday week begin calculation
$todayh = getdate($WeekMon); //monday week begin reconvert

$dd = $todayh[mday];
$mm = $todayh[mon];
$yy = $todayh[year];
$timenow = date("Ymd-His-w"); 

if(isset($_POST['submit'])){ 
$input = $_POST['comment']; //get input text
echo "|IM Sent!| You entered: ".$input . "<br>" ;
echo '<br><br>' ;
$txt = "";
$myfile = fopen("notepad.html", "ab+") or die("Unable to open file!");
//fwrite($myfile, $yy);
//fwrite($myfile, $mm);
//fwrite($myfile, $dd);
//fwrite($myfile, "-");
fwrite($myfile, $timenow );
fwrite($myfile, " ; ");
fwrite($myfile, $input);
fwrite($myfile, '<br>');
fwrite($myfile, "\n");
fclose($myfile);
}    
?>

 


<br/><br/>
<br>
<hr/>
<?php
//  This is a comment:
//  Tiny PHP code for a notepad for education purpose and students (*easily hackable, no warranty!*) 
include('notepad.html'); 
?>
<br>
<hr/>
 


</body>
</html>



<?
define("DEFAULT_FILE", "notepad.html"); // Default file that is used when ?file= is not defined.

if ($_GET[file] == "") 
    $file = DEFAULT_FILE;
else
    $file = $_GET[file];

if ($_POST[update] == "true") {
    $fh = fopen($file, 'w') or die("Can't open file.");
    fwrite($fh, stripslashes($_POST[body]));
    fclose($fh);
}


if ($_POST[bsubmit]=="Update")
{
echo ' <span style="font-weight: bold" > '  ;
echo ' ====>>>   Refreshed !   <<<==== ' ;
echo '</span> ' ;
echo '</div> ' ;
echo '<div style="text-align: left;"> '  ;
}






if ($_POST[bsubmit]=="Default")
{
echo ' <span style="font-weight: bold" > '  ;
echo ' ====>>>   Saved  !   <<<==== ' ;
echo '</span> ' ;
echo '</div> ' ;
define("DEFAULT_FILE", "notepad.html");
echo '<div style="text-align: left;"> '  ;
}





if ($_POST[bsubmit]=="Reset")
{
echo ' <span style="font-weight: bold" > '  ;
echo ' ====>>>   Reset !   <<<==== ' ;
echo '</span> ' ;
echo '</div> ' ;
echo '<div style="text-align: left;"> '  ;
$fh = fopen($file, 'w') or die("Can't open file.");
fwrite($fh, stripslashes("Reset performed"));
fclose($fh);
}




if ($_POST[bsubmit]=="Save")
{
    $fh = fopen($file, 'w') or die("Can't open file.");
    fwrite($fh, stripslashes($_POST[body]));
    fclose($fh);
echo ' <span style="font-weight: bold" > '  ;
echo ' ====>>>   Saved !   <<<==== ' ;
echo '</span> ' ;
echo '</div> ' ;
echo '<div style="text-align: left;"> '  ;
}
?>




<html><head><title>PHP Minimalist Web Notepad</title></head><body>

<a href="index.html">[Home]</a><br
<hr/>

<center><table width=400><tr><td style='border: 2px dashed #003b53; padding:10px; font-family:verdana; font-size:10px; color: #003b53;' align='center'>
You are editing: <i><?=$file?></i><br><br>

<a href="notepad.html">View Webpage</a><br>

<form action='<?=$PHP_SELF?>?file=<?=$file?>' method='post'>


<form action='<?=$PHP_SELF?>?file=<?=$file?>' method='post'>
<textarea name='body'  rows="25" cols="100"  style="font-family: Verdana; padding: 5px; background-color: LightYellow"   ><?
if (file_exists($file))
    readfile($file);
else
    $message = "The file ".$file." does not exist and will<br>be created when you click Save.<br><br>";
?></textarea><br><br>
<?=$message?> 


<FORM action="notepad.php" method="post">
    <INPUT type="submit" name="bsubmit" value="Update">
    <INPUT type="submit" name="bsubmit" value="Save">
</FORM>



</form>
</td></tr></table></center>
</body></html>



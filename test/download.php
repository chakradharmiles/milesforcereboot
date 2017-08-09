<?php
if(isset($_POST['filename']))
{
    $var_1 = $_POST['filename'];
    $file = $var_1;

if (file_exists($file))
    {
            file_put_contents(
            'folder/' . basename($file), // where to save file
            file_get_contents($file)
        );
         echo 'Your File Updated Successfully. ';
        exit;
    }
} //- the missing closing brace
?>
<!DOCTYPE html>
<html>
<head>
</head>
<body onLoad="loaded()">

</body>
</html>
<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
<script>
   function loaded()
{
    alert("Beep!");
    window.setTimeout(CloseMe, 500);
}
</script>
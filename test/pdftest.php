<?php
$filename = $_GET["name"];
$filename = $filename."."."pdf";
?>
<!DOCTYPE html>
<html>
<head>
   <title>Miles PDF</title>
</head>
<body ondragstart="return false" onselectstart="return false">
    <div id="Container">
   <center><iframe id="iframeID"  src="<?=$filename?>#toolbar=0&scrollbars=0" width="750px" height="750px"  onclick="oncontextmenu();" style="pointer-events:none;"></iframe></center>
  </div>
     <form name="updatepdf" method="post" action="download.php">
	<div>
 	     <input type="hidden" name="filename" value="<?=$filename?>">
	     <input type="submit" value="update" name="updatepdf" id="updatepdf">
	</div>
   </form>
</body>
</html>
<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
<script type="text/javascript" language="javascript">
 document.oncontextmenu = new Function("return false");
</script>
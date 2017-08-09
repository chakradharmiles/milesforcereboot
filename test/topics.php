<html>
<head>
<title>Miles PDF</title>
</head>
<body ondragstart="return false" onselectstart="return false">
    <FORM>
  <INPUT type="button" value="New Window!" id="clickwin" filename="testpdf">
</FORM>
</body>
</html>
<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
<script type="text/javascript" language="javascript">
 $("#clickwin").click(function(){
      var filename=$(this).attr("filename");
       window.open('pdftest.php?name='+filename,'mywindow','width=1000,height=1000');
});
</script>

<html>
    <head>
	  <title>Forma</title>
	  
	</head>
	<body>
	  <?php
	     $id=$_POST["element_1"];
		 $pass=$_POST["element_2"];
		 if(strcmp($id,"bvb@2017")==0 &&  strcmp($pass,"startelection")==0)
		 {
			 header("Location: form.php"); 
		 }
		 else
		 {
			 echo("error");
		 }
		 
		  ?>
		  
		  </script>
	 </body> 
</html>
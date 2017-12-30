<html>
    <head>
	  <title>Forma</title>
	  
	</head>
	<body>
	  <?php
	     $hb=$_POST["hb"];
		 $hg=$_POST["hg"];
		 $sp=$_POST["sp"];
		 $cs=$_POST["cs"];
		 $dhb=$_POST["dhb"];
		 $dhg=$_POST["dhg"];
		 $dsc=$_POST["dsc"];
         $dsp=$_POST["dsp"];
         $dcs=$_POST["dcs"];		 
		 $Class=$_POST["class"];
		  $Section=$_POST["section"];
		   
        $host = "localhost";
        $db="election";
       $user="root";
      $password="";
    
     $con = mysqli_connect($host,$user,$password,$db);
	 
	 
         $select="SELECT Votes FROM hb WHERE Name='$hb' &&  Class='total' && Section='total' ";
          $result=mysqli_query($con,$select);
  
        $row = mysqli_fetch_array($result, MYSQLI_NUM);
          $cnt=$row[0];
		  if($cnt>0)
		  {
		  $cnt++;
          $update="UPDATE hb SET Votes = '$cnt' WHERE Name='$hb' && Class='total' && Section='total' ";
          mysqli_query($con,$update);
          }
		  else
		  {
		  $insert="INSERT INTO hb SET Name='$hb',Class='total',Section='total',Votes='1'";
          mysqli_query($con,$insert);
		  }	 
	 
	     
	      $select="SELECT Votes FROM hb WHERE Name='$hb' &&  Class='$Class' && Section='$Section' ";
          $result=mysqli_query($con,$select);
  
        $row = mysqli_fetch_array($result, MYSQLI_NUM);
          $cnt=$row[0];
		  if($cnt>0)
		  {
		  $cnt++;
          $update="UPDATE hb SET Votes = '$cnt' WHERE Name='$hb' && Class='$Class' && Section='$Section' ";
          mysqli_query($con,$update);
          }
		  else
		  {
		  $insert="INSERT INTO hb SET Name='$hb',Class='$Class',Section='$Section',Votes='1'";
          mysqli_query($con,$insert);
		  }
		  
		  
		  $select="SELECT Votes FROM hg WHERE Name='$hg'&& Class='$Class' && Section='$Section' ";
          $result=mysqli_query($con,$select);
  
        $row = mysqli_fetch_array($result, MYSQLI_NUM);
          $cnt=$row[0];
		  if($cnt>0)
		  {
		  $cnt++;
          $update="UPDATE hg SET Votes = '$cnt' WHERE Name='$hg' && Class='$Class' && Section='$Section'";
          mysqli_query($con,$update);
          }
		  else
		  {
		  $insert="INSERT INTO hg SET Name='$hg',Class='$Class',Section='$Section',Votes='1'";
          mysqli_query($con,$insert);
		  }
		  
		   $select="SELECT Votes FROM hg WHERE Name='$hg'&& Class='total' && Section='total' ";
          $result=mysqli_query($con,$select);
  
        $row = mysqli_fetch_array($result, MYSQLI_NUM);
          $cnt=$row[0];
		  if($cnt>0)
		  {
		  $cnt++;
          $update="UPDATE hg SET Votes = '$cnt' WHERE Name='$hg' && Class='total' && Section='total'";
          mysqli_query($con,$update);
          }
		  else
		  {
		  $insert="INSERT INTO hg SET Name='$hg',Class='total',Section='total',Votes='1'";
          mysqli_query($con,$insert);
		  }
		  
		  
		  
		  $select="SELECT Votes FROM sp WHERE Name='$sp'&& Class='total' && Section='total' ";
          $result=mysqli_query($con,$select);
  
        $row = mysqli_fetch_array($result, MYSQLI_NUM);
          $cnt=$row[0];
		  if($cnt>0)
		  {
		  $cnt++;
          $update="UPDATE sp SET Votes = '$cnt' WHERE Name='$sp' && Class='total' && Section='total'";
          mysqli_query($con,$update);
          }
		  else
		  {
		  $insert="INSERT INTO sp SET Name='$sp',Class='total',Section='total',Votes='1'";
          mysqli_query($con,$insert);
		  }
		  
		  $select="SELECT Votes FROM sp WHERE Name='$sp'&& Class='$Class' && Section='$Section' ";
          $result=mysqli_query($con,$select);
  
        $row = mysqli_fetch_array($result, MYSQLI_NUM);
          $cnt=$row[0];
		  if($cnt>0)
		  {
		  $cnt++;
          $update="UPDATE sp SET Votes = '$cnt' WHERE Name='$sp' && Class='$Class' && Section='$Section'";
          mysqli_query($con,$update);
          }
		  else
		  {
		  $insert="INSERT INTO sp SET Name='$sp',Class='$Class',Section='$Section',Votes='1'";
          mysqli_query($con,$insert);
		  }
		  
		  
		  
		  $select="SELECT Votes FROM cs WHERE Name='$cs'&& Class='$Class' && Section='$Section' ";
          $result=mysqli_query($con,$select);
  
        $row = mysqli_fetch_array($result, MYSQLI_NUM);
          $cnt=$row[0];
		  if($cnt>0)
		  {
		  $cnt++;
          $update="UPDATE cs SET Votes = '$cnt' WHERE Name='$cs' && Class='$Class' && Section='$Section'";
          mysqli_query($con,$update);
          }
		  else
		  {
		  $insert="INSERT INTO cs SET Name='$cs',Class='$Class',Section='$Section',Votes='1'";
          mysqli_query($con,$insert);
		  }
		  
		  $select="SELECT Votes FROM cs WHERE Name='$cs'&& Class='total' && Section='total' ";
          $result=mysqli_query($con,$select);
  
        $row = mysqli_fetch_array($result, MYSQLI_NUM);
          $cnt=$row[0];
		  if($cnt>0)
		  {
		  $cnt++;
          $update="UPDATE cs SET Votes = '$cnt' WHERE Name='$cs' && Class='total' && Section='total'";
          mysqli_query($con,$update);
          }
		  else
		  {
		  $insert="INSERT INTO cs SET Name='$cs',Class='total',Section='total',Votes='1'";
          mysqli_query($con,$insert);
		  }
		  
		  $select="SELECT Votes FROM dhb WHERE Name='$dhb'&& Class='$Class' && Section='$Section' ";
          $result=mysqli_query($con,$select);
  
        $row = mysqli_fetch_array($result, MYSQLI_NUM);
          $cnt=$row[0];
		  if($cnt>0)
		  {
		  $cnt++;
          $update="UPDATE dhb SET Votes = '$cnt' WHERE Name='$dhb' && Class='$Class' && Section='$Section'";
          mysqli_query($con,$update);
          }
		  else
		  {
		  $insert="INSERT INTO dhb SET Name='$dhb',Class='$Class',Section='$Section',Votes='1'";
          mysqli_query($con,$insert);
		  }
		  
		  $select="SELECT Votes FROM dhb WHERE Name='$dhb'&& Class='total' && Section='total' ";
          $result=mysqli_query($con,$select);
  
        $row = mysqli_fetch_array($result, MYSQLI_NUM);
          $cnt=$row[0];
		  if($cnt>0)
		  {
		  $cnt++;
          $update="UPDATE dhb SET Votes = '$cnt' WHERE Name='$dhb' && Class='total' && Section='total'";
          mysqli_query($con,$update);
          }
		  else
		  {
		  $insert="INSERT INTO dhb SET Name='$dhb',Class='total',Section='total',Votes='1'";
          mysqli_query($con,$insert);
		  }
		  
		  $select="SELECT Votes FROM dhg WHERE Name='$dhg'&& Class='$Class' && Section='$Section' ";
          $result=mysqli_query($con,$select);
  
        $row = mysqli_fetch_array($result, MYSQLI_NUM);
          $cnt=$row[0];
		  if($cnt>0)
		  {
		  $cnt++;
          $update="UPDATE dhg SET Votes = '$cnt' WHERE Name='$dhg' && Class='$Class' && Section='$Section'";
          mysqli_query($con,$update);
          }
		  else
		  {
		  $insert="INSERT INTO dhg SET Name='$dhg',Class='$Class',Section='$Section',Votes='1'";
          mysqli_query($con,$insert);
		  }
		 
         $select="SELECT Votes FROM dhg WHERE Name='$dhg'&& Class='total' && Section='total' ";
          $result=mysqli_query($con,$select);
  
        $row = mysqli_fetch_array($result, MYSQLI_NUM);
          $cnt=$row[0];
		  if($cnt>0)
		  {
		  $cnt++;
          $update="UPDATE dhg SET Votes = '$cnt' WHERE Name='$dhg' && Class='total' && Section='total'";
          mysqli_query($con,$update);
          }
		  else
		  {
		  $insert="INSERT INTO dhg SET Name='$dhg',Class='total',Section='total',Votes='1'";
          mysqli_query($con,$insert);
		  }
		 		 
		  
		  
		    $select="SELECT Votes FROM dsc WHERE Name='$dsc'&& Class='$Class' && Section='$Section' ";
          $result=mysqli_query($con,$select);
  
        $row = mysqli_fetch_array($result, MYSQLI_NUM);
          $cnt=$row[0];
		  if($cnt>0)
		  {
		  $cnt++;
          $update="UPDATE dsc SET Votes = '$cnt' WHERE Name='$dsc' && Class='$Class' && Section='$Section'";
          mysqli_query($con,$update);
          }
		  else
		  {
		  $insert="INSERT INTO dsc SET Name='$dsc',Class='$Class', Section='$Section',Votes='1'";
          mysqli_query($con,$insert);
		  }
		  
        $select="SELECT Votes FROM dsc WHERE Name='$dsc'&& Class='total' && Section='total' ";
          $result=mysqli_query($con,$select);
  
        $row = mysqli_fetch_array($result, MYSQLI_NUM);
          $cnt=$row[0];
		  if($cnt>0)
		  {
		  $cnt++;
          $update="UPDATE dsc SET Votes = '$cnt' WHERE Name='$dsc' && Class='total' && Section='total'";
          mysqli_query($con,$update);
          }
		  else
		  {
		  $insert="INSERT INTO dsc SET Name='$dsc',Class='total',Section='total',Votes='1'";
          mysqli_query($con,$insert);
		  }
		  
		  $select="SELECT Votes FROM dsp WHERE Name='$dsp'&& Class='$Class' && Section='$Section' ";
          $result=mysqli_query($con,$select);
  
        $row = mysqli_fetch_array($result, MYSQLI_NUM);
          $cnt=$row[0];
		  if($cnt>0)
		  {
		  $cnt++;
          $update="UPDATE dsp SET Votes = '$cnt' WHERE Name='$dsp' && Class='$Class' && Section='$Section'";
          mysqli_query($con,$update);
          }
		  else
		  {
		  $insert="INSERT INTO dsp SET Name='$dsp',Class='$Class',Section='$Section',Votes='1'";
          mysqli_query($con,$insert);
		  }
		 
      $select="SELECT Votes FROM dsp WHERE Name='$dsp'&& Class='total' && Section='total' ";
          $result=mysqli_query($con,$select);
  
        $row = mysqli_fetch_array($result, MYSQLI_NUM);
          $cnt=$row[0];
		  if($cnt>0)
		  {
		  $cnt++;
          $update="UPDATE dsp SET Votes = '$cnt' WHERE Name='$dsp' && Class='total' && Section='total'";
          mysqli_query($con,$update);
          }
		  else
		  {
		  $insert="INSERT INTO dsp SET Name='$dsp',Class='total',Section='total',Votes='1'";
          mysqli_query($con,$insert);
		  }
		 		 
       $select="SELECT Votes FROM dcs WHERE Name='$dcs'&& Class='total' && Section='total' ";
          $result=mysqli_query($con,$select);
  
        $row = mysqli_fetch_array($result, MYSQLI_NUM);
          $cnt=$row[0];
		  if($cnt>0)
		  {
		  $cnt++;
          $update="UPDATE dcs SET Votes = '$cnt' WHERE Name='$dcs' && Class='total' && Section='total'";
          mysqli_query($con,$update);
          }
		  else
		  {
		  $insert="INSERT INTO dcs SET Name='$dcs',Class='total',Section='total',Votes='1'";
          mysqli_query($con,$insert);
		  }
		 	
          
          $select="SELECT Votes FROM dcs WHERE Name='$dcs'&& Class='$Class' && Section='$Section' ";
          $result=mysqli_query($con,$select);
  
        $row = mysqli_fetch_array($result, MYSQLI_NUM);
          $cnt=$row[0];
		  if($cnt>0)
		  {
		  $cnt++;
          $update="UPDATE dcs SET Votes = '$cnt' WHERE Name='$dcs' && Class='$Class' && Section='$Section'";
          mysqli_query($con,$update);
          }
		  else
		  {
		  $insert="INSERT INTO dcs SET Name='$dcs',Class='$Class' ,Section='$Section',Votes='1'";
          mysqli_query($con,$insert);
		  }		  
		 
		 
		  
		  
		  
		  
		  
		  
		  
            
	  
	  ?>
	  
	  <form action="/form.php" method="post">
  element_1: <input type="text" name="bvb@2017"><br>
  element_2: <input type="text" name="startelection"><br>
  <input type="submit" value="Submit">
      </form>
	     
		 <img src="https://support.formstack.com/customer/portal/attachments/643564" alt width="500" 
height="250" align="middle">
<script type="text/javascript">
var timer = 5; //seconds
 website = "http://localhost/form.php"
function delayer() {
 window.location = website;
}
setTimeout('delayer()', 500 * timer); 
</script>
	 </body> 
</html>
 <?php  
 //select.php  
 $connect = mysqli_connect("127.0.0.1:3306", "root", "", "angulardb");  
 $output = array();  

 $query = "SELECT * FROM contactlist";  
 
 
 $result = mysqli_query($connect, $query);  
 if(mysqli_num_rows($result) > 0)  
 {  
      while($row = mysqli_fetch_array($result))  
      {  
           $output[] = $row;  
      }  
      echo json_encode($output);  
 }  
 ?>  

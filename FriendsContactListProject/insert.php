 <?php  
 //insert.php  
 $connect = mysqli_connect("localhost", "root", "", "angulardb");  
 
 $data = json_decode(file_get_contents("php://input"));  
 
 if(count(array($data)) > 0)  
 
 {  
      $name_received = mysqli_real_escape_string($connect, $data->send_name);       
      $phone_received = mysqli_real_escape_string($connect, $data->send_phone);
      $btnname_received = mysqli_real_escape_string($connect, $data->send_btnname);
     

	  if($btnname_received == 'ADD'){
      $query = "INSERT INTO contactlist(name, phone) VALUES ('$name_received', '$phone_received')";  
      if(mysqli_query($connect, $query))  
      {  
           echo "Data Successfully Inserted...";  
      }  
      else  
      {  
           echo 'Invalid Data. Please try with valid data';  
      }  
     }
     if($btnname_received == 'Update'){
          $id_received = mysqli_real_escape_string($connect, $data->send_id);

          $query = "UPDATE contactlist SET name = '$name_received', phone = '$phone_received' WHERE id = '$id_received'";  

  
          if(mysqli_query($connect, $query))  
          {  
               echo "Data Updated Successfully...";  
          }  
          else  
          {  
               echo 'Error while Updating Data';  
          }  
     }

 }  
 ?>  

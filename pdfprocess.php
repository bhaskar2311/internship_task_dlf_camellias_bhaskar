<?php
session_start();
include 'database.php';
    $filename = $_FILES['fileupload']['name'];
    $extension = strtolower(substr($filename, strpos($filename, '.')+1));
    $type = $_FILES['fileupload']['type'];
    $size = $_FILES['fileupload']['size'];
    //echo "size of file: $size";
    $max_size = 2000000;
    $tmp_name = $_FILES['fileupload']['tmp_name'];
    if(isset($filename)){
        if(!empty($filename)){
            if(($extension=='pdf' && $size<=$max_size)){
                $Location = "documents/$filename";
                $directory1 = "http://localhost/internship_task/documents/$filename";
                $directory = "http://localhost/internship_task/documents/" ;
                if(move_uploaded_file($tmp_name,$Location)){
                    $sql = "INSERT INTO brochure_pdf (filename,directory,directory1) VALUES ('$filename','$directory','$directory1')";
                    
     if(!mysqli_query($conn,$sql))
     {
         echo'<script type="text/javascript">alert("File upload failed");</script>'; 
         
     }
     else{
         echo'<script type="text/javascript">alert("File uploaded successfully");</script>';
         
        }
                }
                else{
                    echo'<script type="text/javascript">alert("There was an error");</script>';
                    
                }
            }else{
                echo'<script type="text/javascript">alert("The file must be in .pdf format and the size should be less than or equal to 2MB");</script>';
               
                
            }
        }
    }
     
    
?>
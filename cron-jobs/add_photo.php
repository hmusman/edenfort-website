<?php
    $server   = "localhost";
    $username = "edenfort_web";
    $pass     = "4[zQev}L9#z)";
    $dbname   = "edenfort_web";

    $con = mysqli_connect($server,$username,$pass,$dbname);

    $xml = simplexml_load_file('https://edenfort.mycrm.com/feed/privatesite/3e9d4c952d93c6ed55548f161375ef61');
  $count = count($xml);
echo $count;
 foreach($xml as $fetch){
	
               $reference_number = $fetch->reference_number;    
			   echo '<h2><b>'.$reference_number.'</b></h2><br>';
			   
			   if($fetch->photo->url[0]){
              $photo1= $fetch->photo->url[0];
			   }else{
					$photo1="No Pic";
				}
                echo $photo1.'<br>';
			if($fetch->photo->url[1]){
                $photo2= $fetch->photo->url[1];
          }else{
	            $photo2= "No Pic";
             }
                echo $photo2.'<br>';
			if($fetch->photo->url[2]){	
                $photo3= $fetch->photo->url[2];
			}else{
				$photo3= "No Pic";
			}
                echo $photo3.'<br>';
				
			if($fetch->photo->url[3]){	
                $photo4= $fetch->photo->url[3];
			}else{
				$photo4= "No Pic";
			}
                echo $photo4.'<br>';
				
			if($fetch->photo->url[4]){		
                $photo5= $fetch->photo->url[4];
			}else{
				$photo5= "No Pic";
			}	
                echo $photo5.'<br>';
				
			if($fetch->photo->url[5]){		
                $photo6= $fetch->photo->url[5];
			}else{
				$photo6="No Pic";
			}
                echo $photo6.'<br>';
				
			if($fetch->photo->url[6]){		
                $photo7= $fetch->photo->url[6];
			}else{
				  $photo7="No Pic";
			}
                echo $photo7.'<br>';
				
			if($fetch->photo->url[7]){		
                $photo8= $fetch->photo->url[7];
			}else{
				$photo8= "No Pic";
			}
                echo $photo8.'<br>';
			if($fetch->photo->url[8]){	
                $photo9= $fetch->photo->url[8];
			}else{
				$photo9= "No Pic";
			}
                echo $photo9.'<br>';
			if($fetch->photo->url[9]){	
                $photo10= $fetch->photo->url[9];
			}else{
				$photo10= "No Pic";
			}	
                echo $photo10 .'<br>';
				
				if($fetch->photo->url[10]){
				$photo11= $fetch->photo->url[10];
               }else{
					$photo11="No Pic";
				}
				echo $photo11.'<br>';
				
				
				if($fetch->photo->url[11]){
				$photo12= $fetch->photo->url[11];
               }else{
					$photo12="No Pic";
				}
				echo $photo12.'<br>';
				
				
				if($fetch->photo->url[12]){
				$photo13= $fetch->photo->url[12];
                }else{
					$photo13="No Pic";
				}
				echo $photo13.'<br>';
				
				if($fetch->photo->url[13]){
				$photo14= $fetch->photo->url[13];
                }else{
					$photo14="No Pic";
				}
				 echo $photo14.'<br>';
				 
				if($fetch->photo->url[14]){
				$photo15= $fetch->photo->url[14];
               }else{
					$photo15="No Pic";
				}
                 echo $photo15.'<br>';
				 
				 if($fetch->photo->url[15]){
				$photo16= $fetch->photo->url[15];
               }else{
					$photo16="No Pic";
				}
				echo $photo16.'<br>';
				
				
				if($fetch->photo->url[16]){
				$photo17= $fetch->photo->url[16];
               }else{
					$photo17="No Pic";
				}
				echo $photo17.'<br>';
				
				
				if($fetch->photo->url[17]){
				$photo18= $fetch->photo->url[17];
                }else{
					$photo18="No Pic";
				}
				echo $photo18.'<br>';
				
				if($fetch->photo->url[18]){
				$photo19= $fetch->photo->url[18];
                }else{
					$photo19="No Pic";
				}
				 echo $photo19.'<br>';
				 
				if($fetch->photo->url[19]){
				$photo20= $fetch->photo->url[19];
               }else{
					$photo20="No Pic";
				}
                 echo $photo20.'<br>';
				
      echo '<br><br>';
//insertion
$exist = "SELECT * FROM photo WHERE  reference_number='$reference_number' ";
   $verified= mysqli_query($con, $exist);
   
if(mysqli_num_rows( $verified) == 1){
    echo ' Record already exist';
}else{	  
     $query = "INSERT INTO photo (reference_number, photo1,photo2,photo3,photo4,photo5,photo6,photo7,photo8,photo9,photo10,photo11,photo12,photo13,photo14,photo15,photo16,photo17,photo18,photo19,photo20) VALUES ('$reference_number','$photo1', '$photo2', '$photo3', '$photo4', '$photo5', '$photo6', '$photo7', '$photo8', '$photo9', '$photo10', '$photo11', '$photo12', '$photo13', '$photo14', '$photo15', '$photo16', '$photo17', '$photo18', '$photo19', '$photo20')";
       print_r($query);
                $result = mysqli_query($con,$query);
         
                if ($result) {

                    echo "not error";
                }
                else{
                    echo "<h2><b>error</b></h2>";

                }
}				
  }


   /*     for ($x = 0; $x <= $count; $x++) {
            
          for ($i = 0; $i <= $count; $i++) {  
                       
                       die($xml->property[$x]->reference_number);
                $reference_number = $xml->property[$x]->reference_number;
                $reference_number=$reference_number;

                $photo1= $xml->property[$x]->photo->url[0];
                echo $photo1;
                $photo2= $xml->property[$x]->photo->url[1];
                echo $photo2;
                $photo3= $xml->property[$x]->photo->url[2];
                echo $photo3;
                $photo4= $xml->property[$x]->photo->url[3];
                echo $photo4;
                $photo5= $xml->property[$x]->photo->url[4];
                echo $photo5;
                $photo6= $xml->property[$x]->photo->url[5];
                echo $photo6;
                $photo7= $xml->property[$x]->photo->url[6];
                echo $photo7;
                $photo8= $xml->property[$x]->photo->url[7];
                echo $photo8;
                $photo9= $xml->property[$x]->photo->url[8];
                echo $photo9;
                $photo10= $xml->property[$x]->photo->url[9];
                echo $photo10;

                $query = "INSERT INTO photo (reference_number, photo1, photo2,photo3,photo4,photo5,photo6,photo7,photo8,photo9,photo10) VALUES ('".$reference_number."','".$photo1."', '".$photo2."', '".$photo3."', '".$photo4."', '".$photo5."', '".$photo6."', '".$photo7."', '".$photo8."', '".$photo9."', '".$photo10."')";

                $result = mysqli_query($con,$query);

                if ($result) {

                    echo "not error";
                }
                else{
                    echo "error";

                }
                break;
          }      
        }
      */
            
        ?>
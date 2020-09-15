<?php
    $server   = "localhost";
    $username = "root";
    $pass     = "";
    $dbname   = "eden_web";

    $con = mysqli_connect($server,$username,$pass,$dbname);

    $del_query = "DELETE FROM `photo`";
    $run= mysqli_query($con, $del_query);
    if($run){
    	echo '<h1>Previous record deleted successfully.</h1>';
    }

    $xml = simplexml_load_file('https://app.airlist.com/v1.1/website.asmx/Generic?ac=20200226090618662&gc=12688');
 	$count = count($xml);
	echo $count;
 	foreach($xml as $fetch){
	
               $reference_number = $fetch->Property_Ref_No;    
			   echo '<h2><b>'.$reference_number.'</b></h2><br>';
			   
			   if($fetch->Images->image[0]){
              $photo1= $fetch->Images->image[0];
			   }else{
					$photo1="No Pic";
				}
                echo $photo1.'<br>';
			if($fetch->Images->image[1]){
                $photo2= $fetch->Images->image[1];
          }else{
	            $photo2= "No Pic";
             }
                echo $photo2.'<br>';
			if($fetch->Images->image[2]){	
                $photo3= $fetch->Images->image[2];
			}else{
				$photo3= "No Pic";
			}
                echo $photo3.'<br>';
				
			if($fetch->Images->image[3]){	
                $photo4= $fetch->Images->image[3];
			}else{
				$photo4= "No Pic";
			}
                echo $photo4.'<br>';
				
			if($fetch->Images->image[4]){		
                $photo5= $fetch->Images->image[4];
			}else{
				$photo5= "No Pic";
			}	
                echo $photo5.'<br>';
				
			if($fetch->Images->image[5]){		
                $photo6= $fetch->Images->image[5];
			}else{
				$photo6="No Pic";
			}
                echo $photo6.'<br>';
				
			if($fetch->Images->image[6]){		
                $photo7= $fetch->Images->image[6];
			}else{
				  $photo7="No Pic";
			}
                echo $photo7.'<br>';
				
			if($fetch->Images->image[7]){		
                $photo8= $fetch->Images->image[7];
			}else{
				$photo8= "No Pic";
			}
                echo $photo8.'<br>';
			if($fetch->Images->image[8]){	
                $photo9= $fetch->Images->image[8];
			}else{
				$photo9= "No Pic";
			}
                echo $photo9.'<br>';
			if($fetch->Images->image[9]){	
                $photo10= $fetch->Images->image[9];
			}else{
				$photo10= "No Pic";
			}	
                echo $photo10 .'<br>';
				
				if($fetch->Images->image[10]){
				$photo11= $fetch->Images->image[10];
               }else{
					$photo11="No Pic";
				}
				echo $photo11.'<br>';
				
				
				if($fetch->Images->image[11]){
				$photo12= $fetch->Images->image[11];
               }else{
					$photo12="No Pic";
				}
				echo $photo12.'<br>';
				
				
				if($fetch->Images->image[12]){
				$photo13= $fetch->Images->image[12];
                }else{
					$photo13="No Pic";
				}
				echo $photo13.'<br>';
				
				if($fetch->Images->image[13]){
				$photo14= $fetch->Images->image[13];
                }else{
					$photo14="No Pic";
				}
				 echo $photo14.'<br>';
				 
				if($fetch->Images->image[14]){
				$photo15= $fetch->Images->image[14];
               }else{
					$photo15="No Pic";
				}
                 echo $photo15.'<br>';
				 
				 if($fetch->Images->image[15]){
				$photo16= $fetch->Images->image[15];
               }else{
					$photo16="No Pic";
				}
				echo $photo16.'<br>';
				
				
				if($fetch->Images->image[16]){
				$photo17= $fetch->Images->image[16];
               }else{
					$photo17="No Pic";
				}
				echo $photo17.'<br>';
				
				
				if($fetch->Images->image[17]){
				$photo18= $fetch->Images->image[17];
                }else{
					$photo18="No Pic";
				}
				echo $photo18.'<br>';
				
				if($fetch->Images->image[18]){
				$photo19= $fetch->Images->image[18];
                }else{
					$photo19="No Pic";
				}
				 echo $photo19.'<br>';
				 
				if($fetch->Images->image[19]){
				$photo20= $fetch->Images->image[19];
               }else{
					$photo20="No Pic";
				}
                 echo $photo20.'<br>';
				
      echo '<br><br>';
//insertion
$exist = "SELECT * FROM photo WHERE  reference_number='$reference_number' ";
   $verified= mysqli_query($con, $exist);
   
if(mysqli_num_rows( $verified) == 1){
	$query = "UPDATE `photo` SET `photo1`='$photo1',`photo2`='$photo2',`photo3`='$photo3',`photo4`='$photo4',`photo5`='$photo5',`photo6`='$photo6',`photo7`='$photo7',`photo8`='$photo8',`photo9`='$photo9',`photo10`='$photo10',`photo11`='$photo11',`photo12`='$photo12',`photo13`='$photo13',`photo14`='$photo14',`photo15`='$photo15',`photo16`='$photo16',`photo17`='$photo17',`photo18`='$photo18',`photo19`='$photo19',`photo20`='$photo20' WHERE reference_number='$reference_number'";

		print_r($query);
        $result = mysqli_query($con,$query);
 
        if ($result) {

            echo "<h2><b>Record updated successfully!</b></h2>";
        }
        else{
            echo "<h2><b>Somethign wents wrong!</b></h2>";

        }
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
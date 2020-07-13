<?php
  	$server   = "localhost";
    $username = "edenfort_web";
    $pass     = "4[zQev}L9#z)";
    $dbname   = "edenfort_web";

    $con = mysqli_connect($server,$username,$pass,$dbname);
    
   
	$xml = simplexml_load_file('https://app.airlist.com/v1.1/website.asmx/Generic?ac=20200226090618662&gc=12688');
  //print_r($xml);
  $count = count($xml);
  echo $count;
  foreach($xml as $fetch){
	
               $referance_number = $fetch->Property_Ref_No;    
                $permit_number = $fetch->Permit_Number;
                $offering_type2 = $fetch->Ad_Type;
                $property_type = $fetch->Unit_Type;
                $price_on_application = $fetch->Price;
                $price_yearly = $fetch->Price;
                $city = $fetch->Emirate;
                $community = $fetch->Community;
                $sub_community = $fetch->sub_community;
                $property_name = $fetch->Property_Name;
                $location_id = $fetch->location_id;
                $title_en = $fetch->Property_Title;
                $description_en = $fetch->Web_Remarks;
                $private_amenities = $fetch->private_amenities;
                $size = $fetch->Unit_Builtup_Area;
                $bedroom = $fetch->Bedrooms;
                $bathroom = $fetch->No_of_Bathroom;
				$agentName=$fetch->Listing_Agent;
				$agentEmail=$fetch->Listing_Agent_Email;
				$agentPhone=$fetch->Listing_Agent_Phone;
				$parking=$fetch->Parking;
			    $furnished = $fetch->condition;
			    $geopointLongitude = $fetch->Longitude;
				$geopointLatitude = $fetch->Latitude;
                $cheques=$fetch->cheques;				 
			//location will be create by combining the PropertyName,SubComunity,Comunity and city
               if($property_name){		    
				$location=$property_name.','.$sub_community.','.$community.','.$city;
			   }else{
				   
				    if($sub_community){
				   $location=$sub_community.','.$community.','.$city;
			   }else{
				   
				   if($community){
				   $location=$community.','.$city;
			   }else{
				   if($city){
				   $location=$city;
				   }else{
					  $location=' '; 
				   }
			  }}}
			  if($property_type == 'Apartment'){
			  		$offering_type = 'Residential';
			  }
			  if($property_type == 'Office'){
			  		$offering_type = 'Commercial';
			  }
			  if($property_type == 'Townhouse'){
			  		$offering_type = 'Residential';
			  }
			  if($property_type == 'Villa'){
			  		$offering_type = 'Residential';
			  }
			//Dividing the offering type in two types, Residential and rent, etc
    //        if($offering_type=="CS"){
			 //   $offering_type1="Commercial";
			 //   $offering_type2="sale";
		  //  }elseif($offering_type=="CR"){
			 //   $offering_type1="Commercial";
			 //   $offering_type2="rent";
		  //  }elseif($offering_type=="RS"){
			 //   $offering_type1="Residential";
			 //   $offering_type2="sale";
		  //  }elseif($offering_type=="RR"){
			 //   $offering_type1="Residential";
			 //   $offering_type2="rent";
		  //  }else{
			 // $offering_type1="Not Found";
			 //   $offering_type2="Not found";  
		  //  }				
	  //converting Property type short name to full abbrivation, AP to Apartment,OF to office etc   
			// if($property_type=="AP"){
			//    $property_type="Apartment / Flat";
		 //   }elseif($property_type=="LP"){
			//    $property_type="Land / Plot";
		 //   }elseif($property_type=="LC"){
			//    $property_type="Labor camp";
		 //   }elseif($property_type=="BW"){
			//    $property_type="Bungalow";
		 //   }elseif($property_type=="PH"){
			//    $property_type="Penthouse";
		 //   }
		 //   elseif($property_type=="BU"){
			//    $property_type="Bulk units";
		 //   }
		 //   elseif($property_type=="SH"){
			//    $property_type="Shop";
		 //   }
		 //   elseif($property_type=="CD"){
			//    $property_type="Compound";
		 //   }
		 //   elseif($property_type=="TH"){
			//    $property_type="Townhouse";
		 //   }
		 //   elseif($property_type=="WH"){
			//    $property_type="Warehouse";
		 //   }
		 //   elseif($property_type=="SR"){
			//    $property_type="Show Room";
		 //   }
		 //   elseif($property_type=="DX"){
			//    $property_type="Duplex";
		 //   }
		 //   elseif($property_type=="VH"){
			//    $property_type="Villa / House";
		 //   }
		 //   elseif($property_type=="FA"){
			//    $property_type="Factory";
		 //   }
		 //   elseif($property_type=="SA"){
			//    $property_type="Staff Accommodation";
		 //   } elseif($property_type=="FF"){
			//    $property_type="Full Floor";
		 //   } elseif($property_type=="WB"){
			//    $property_type="Whole Building";
		 //   } elseif($property_type=="OF"){
			//    $property_type="Office space";
		 //   }
		 //   elseif($property_type=="HF"){
			//    $property_type="Half Floor";
		 //   }
		 //   elseif($property_type=="HA"){
			//    $property_type="Short Term / Hotel Apartment";
		 //   }
		 //   elseif($property_type=="RE"){
			//    $property_type="Retail";
		 //   }else{
			//    $property_type="Not Found";
		 //   }
		   
		   
		//end of converting proerty short name to full abbrivation   
				
 echo '<h2> Property# </h2>';
 echo 'Ref# '.$referance_number.'<br>';
 echo 'Permit# '.$permit_number.'<br>';
 echo 'offering_type# '.$offering_type.'<br>';
  // echo 'offering_type1# '.$offering_type1.'<br>';
   // echo 'offering_type2# '.$offering_type2.'<br>';
 echo 'property_type# '.$property_type.'<br>'; 
  echo 'price_on_application# '.$price_on_application.'<br>';
echo 'price_yearly# '.$price_yearly.'<br>';
echo 'city# '.$city.'<br>';
echo 'community# '.$community.'<br>';
echo 'sub_community# '.$sub_community.'<br>';
echo 'property_name# '.$property_name.'<br>';
echo 'location_id# '.$location_id.'<br>';
echo 'title_en# '.$title_en.'<br>';
echo 'description_en# '.$description_en.'<br>';
print_r($description_en);

echo 'private_amenities# '.$private_amenities.'<br>';
echo 'size# '.$size.'<br>';
echo 'bedroom# '.$bedroom.'<br>';
echo 'bathroom# '.$bathroom.'<br>';
echo 'agentName# '.$agentName.'<br>';
echo 'agentEmail# '.$agentEmail.'<br>';
echo 'agentPhone# '.$agentPhone.'<br>';

echo 'furnished# '.$furnished.'<br>';
echo 'geopoints# '.$geopointLongitude.','.$geopointLatitude.'<br>';

echo 'location#'.$location.'<br>';
echo 'cheques#'.$cheques.'<br>';
//map Points
	 // $mapPoints=explode(',',$geopoints);
		// 		// print_r($mapPoints);
	 // $geopointLongitude=$mapPoints[0];			
	 // $geopointLatitude=$mapPoints[1];			
  //    echo "Longitude:".$geopointLongitude.'<br>';
  //    echo "Latitude:".$geopointLatitude.'<br>';	
	 

	 //to allow the single quotes in description, otherwise those property will no inserted
       $description1= str_replace("'","\'",$description_en);
	   $description2= str_replace("▬","",$description1);
	   $description3= str_replace("★","*",$description2);
	   $description4= str_replace("☆","*",$description3);
	   $description5= str_replace("■","*",$description4);
	   $description6= str_replace("①","1 ",$description5);
	   $description7= str_replace("②","2",$description6);
	   $description8= str_replace("③","3 ",$description7);
	   $description9= str_replace("④","4 ",$description8);
	   $description10= str_replace("⑤","5 ",$description9);
	   
	// echo $description10;
//insertion
$exist = "SELECT * FROM property WHERE  reference_number='$referance_number' ";
   $verified= mysqli_query($con, $exist);
   
if(mysqli_num_rows($verified) == 1){

	$query = "UPDATE `property` SET `permit_number`='$permit_number',`offering_type`='$offering_type',`offering_type1`='',`offering_type2`='$offering_type2',`property_type`='$property_type',`price_on_application`= '$price_on_application',`price_yearly`='$price_yearly',`city`='$city',`community`='$community',`sub_community`='$sub_community',`property_name`='$property_name',`location_id`='$location_id',`title_en`='$title_en',`description_en`='$description10',`private_amenities`='$private_amenities',`size`='$size',`bedroom`='$bedroom',`bathroom`='$bathroom',`furnished`='$furnished',`agentName`='$agentName',`agentEmail`='$agentEmail',`agentPhone`='$agentPhone',`geopointLongitude`='$geopointLongitude',`geopointLatitude`='$geopointLatitude',`location`='$location',`cheques`='$cheques' WHERE reference_number = '$referance_number'";

		print_r($query);
        $result = mysqli_query($con,$query);

        if ($result) {

            echo "<br><br>record updated successfully!";
        }
        else{
            echo "<br><br>something went wrong!";

        }
}else{		
	
	 $query = "INSERT INTO property (reference_number, permit_number, offering_type,offering_type1,offering_type2,property_type,price_on_application,price_yearly, city, community,sub_community,property_name,location_id,title_en,description_en,private_amenities,size,bedroom,bathroom,agentName,agentEmail,agentPhone,furnished,geopointLongitude,geopointLatitude,location,cheques) VALUES ('$referance_number','$permit_number', '$offering_type', '', '$offering_type2', '$property_type', '$price_on_application','$price_yearly','$city','$community','$sub_community','$property_name','$location_id','$title_en','$description10','$private_amenities','$size','$bedroom','$bathroom','$agentName','$agentEmail','$agentPhone','$furnished', '$geopointLongitude','$geopointLatitude','$location','$cheques')";

     print_r($query);
                $result = mysqli_query($con,$query);

                if ($result) {

                    echo "<br><br>not error";
                }
                else{
                    echo "<br><br>error";

                }
  
  }
  } 
  
  
  
  
 //echo $xml->reference_number;
      /*  for ($x = 0; $x <= $count; $x++) {
            
          for ($i = 0; $i <= $count; $i++) {  
                
				
                $referance_number = $xml->property[$x]->reference_number;    
                $permit_number = $xml->property[$x]->permit_number;
                $offering_type = $xml->property[$x]->offering_type;
                $property_type = $xml->property[$x]->property_type;
                $price_on_application = $xml->property[$x]->price_on_application;
                $price_yearly = $xml->property[$x]->price->yearly;
                $city = $xml->property[$x]->city;
                $community = $xml->property[$x]->community;
                $sub_community = $xml->property[$x]->sub_community;
                $property_name = $xml->property[$x]->property_name;
                $location_id = $xml->property[$x]->location_id;
                $title_en = $xml->property[$x]->title_en;
                $description_en = $xml->property[$x]->description_en;
                $private_amenities = $xml->property[$x]->private_amenities;
                $size = $xml->property[$x]->size;
                $bedroom = $xml->property[$x]->bedroom;
                $bathroom = $xml->property[$x]->bathroom;
                $furnished = $xml->property[$x]->furnished;
                $geopoints = $xml->property[$x]->geopoints;
                

                $query = "INSERT INTO property (reference_number, permit_number, offering_type,property_type,price_on_application,price_yearly, city, community,sub_community,property_name,location_id,title_en,description_en,private_amenities,size,bedroom,bathroom,furnished,geopoints) VALUES ('".$referance_number."','".$permit_number."', '".$offering_type."', '".$property_type."', '".$price_on_application."','".$price_yearly."','".$city."', '".$community."', '".$sub_community."','".$property_name."', '".$location_id."', '".$title_en."', '".$description_en."', '".$private_amenities."', '".$size."', '".$bedroom."', '".$bathroom."', '".$furnished."', '".$geopoints."')";

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

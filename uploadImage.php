<?php
    $connect = mysqli_connect("localhost","id11477192_arsltech","12345678","id11477192_employee_management_system");

    if(isset($_POST['image']))
	{
	
	$target_dir = "Images/";
	$image = $_POST['image'];
	$imageStore = rand()."_".time().".jpeg";
	$target_dir = $target_dir."/".$imageStore;
	file_put_contents($target_dir, base64_decode($image));

	$select= "INSERT into imageData(image) VALUES ('$imageStore')";
	$responce = mysqli_query($connect,$select);
	
	if($responce)
			{
							
			    echo "Image Uploaded";
				mysqli_close($connect);
				
			}
	else{
	        echo "Failed";
			}
	}
?>
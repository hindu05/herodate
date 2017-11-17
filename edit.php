<?php 

require 'app/start.php';



if (!empty($_POST))  
{
	$username 		= $_POST['username'];
	$gender 		= $_POST['gender'];
	$born 			= $_POST['born'];
	$description 	= $_POST['description'];
	$powersource 	= $_POST['powersource'];
	$image 			= $_POST['image'];
	


	$updateProfile = $db->prepare('
		UPDATE users
		SET 
			username = :username,
			gender = :gender,
			born = :born,
			description = :description,
			powersource = :powersource,
			image = :image
		WHERE id = 1
		');

	$updateProfile->execute([
		'username'		=> $username,
		'gender' 		=> $gender,
		'born' 			=> $born,
		'description' 	=> $description,
		'powersource' 	=> $powersource,
		'image' 		=> $image,
		]);
	//$updateProfile = $updateProfile->fetchAll(PDO::FETCH_ASSOC);
	//var_dump($updateProfile);
	//var_dump($db);
	//echo "$username, $gender, $born, $powersource, $image, $description";
	header('Location: ' . BASE_URL . '/page.php?id=1');
}


	$users = $db->prepare("
	SELECT username, born, gender, description, powersource, image
	FROM users
	WHERE id = 1
		");

	$users->execute(['id' => 1]);

	$users = $users->fetch(PDO::FETCH_ASSOC);





require VIEW_ROOT . '/admin/edit.php';
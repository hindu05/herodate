<?php require VIEW_ROOT . '/templates/header.php'; ?>


<?php 
	if (isset($_POST['edit'])) 
	{ 

	$username 		= $_POST['username'];
	$description 	= $_POST['description'];
	$powersource 	= $_POST['powersource'];
	$image 			= $_POST['image'];
	$born 			= $_POST['born'];
	$gender 			= $_POST['gender'];

	$update = "
			UPDATE users
			SET Username = :username, description = :description, image = :image, powersource = :powersource, born = :born, gender = :gender
			WHERE id = 1";

	$query = $db->prepare( $update );
	$query->execute([
		'username'		=> $username,
		'description' 	=> $description,
		'powersource' 	=> $powersource,
		'image' 		=> $image,
		'born' 		=> $born
		]);
	$results = $query->fetchAll();
}
 ?>


<h2>Edit users</h2>
<form action="" method="POST">

	<input id="username" type="text" placeholder="username" name="username">Username</input>
	<input id="description" type="text" name="description">description</input>
	<input id="image" type="text" placeholder="placeholder.png" name="image">image</input>
	<input id="powersource" type="text" name="powersource">powersource</input>
	<input id="born" type="text" placeholder="2007" name="born">born</input>
	<select id="gender" name="gender">
		<option value="male">male</option>
		<option value="female">female</option>
		<option value="other">other</option>
	</select>

	


	<button type="submit" name="edit">update</button>


</form>






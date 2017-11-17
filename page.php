<?php 
require 'app/start.php';

if (empty($_GET['id'])) {
	$id = false;
} else {
	$id = ($_GET['id']);

	$page = $db->prepare("
	SELECT * 
	FROM users
	WHERE id = :id
	LIMIT 1
	");
	$page->execute(['id' => $id]);
	$page = $page->fetch(PDO::FETCH_ASSOC);

//count likes

			$id = ($_GET['id']);
			$countLikes = $db->prepare("	
			SELECT  Count(Distinct senderId) As nmb
			FROM likes 
			WHERE receiverID = :id
			");
			$countLikes->execute(['id' => $id]);
			$countLikes = $countLikes->fetch(PDO::FETCH_ASSOC);

//leave like
		if (isset($_POST['like'])) 
		{ 
			 $id = ($_GET['id']);
			 $from 		= '1';

			$likeUser = $db->query("
			INSERT INTO likes (senderID, receiverID, date) 
			VALUES ('$from', '$id', NOW())
			")->fetchAll(PDO::FETCH_ASSOC);

		};

//send pm
		if (isset($_POST['pm'])) 
		{
		    $id = ($_GET['id']);
			$msg 		= $_POST['message'];
			$from 		= '1';
	

			$sendComment = $db->query("
				INSERT INTO pms (message, from_id, to_id, date) 
				VALUES ('$msg', '$from', '$id', NOW())
				")->fetchAll(PDO::FETCH_ASSOC);

	    };
//send comment
	   	if (isset($_POST['send'])) 
		{
		    
			$msg 		= $_POST['message'];
			$from 		= '1';
	

			$sendComment = $db->query("
				INSERT INTO comments (message, senderId, receiverId, date) 
				VALUES ('$msg', '$from', '$id', NOW())
				")->fetchAll(PDO::FETCH_ASSOC);

	    };
//see comments
	    	

			$comments = $db->prepare("
			SELECT DISTINCT comments.message, comments.senderId, comments.receiverId, comments.date, comments.id, users.username, users.image
			FROM comments, users
			WHERE senderId = users.id 
			AND receiverId = :receiverId
			ORDER BY comments.date DESC
			
			");
			$comments->execute(['receiverId' => $id]);
			$comments = $comments->fetchAll(PDO::FETCH_ASSOC);


//delete comments
		if (isset($_POST['delete'])) 
		{
		   

		    //$delid = $comments['id'];
			//$update = "
			//	DELETE FROM comments
			//	WHERE comments.id = :id";
			//
			//$query = $db->prepare( $update );
			//$query->execute(['id' => $delid]);
			//$results = $query->fetchAll();
	
			//$deleteComment = $db->prepare("
			//	DELETE FROM comments
			//	WHERE comments.id = :id
			//	");
			//	$deleteComment->execute(['id' => $comment['id']]);
			//	$deleteComment = $deleteComment->fetchAll(PDO::FETCH_ASSOC);
			

	    };

//send gifts
	 	if (isset($_POST['gift'])) 
		{
		    
			$giftid 		= $_POST['giftid'];
			$from 		= '1';
	

			$sendComment = $db->query("
				INSERT INTO gifts (giftid, senderId, receiverId, date) 
				VALUES ('$giftid', '$from', '$id', NOW())
				")->fetchAll(PDO::FETCH_ASSOC);

	    };   
}







//if your profile, special mennu

if (($_GET['id']) == 1	)
			{
	?>
	<ul>
	    <li><a href="<?php echo BASE_URL; ?>/user/pms.php">Private Messages </a></li>
	    <li><a href="<?php echo BASE_URL; ?>/edit.php">Edit Profile </a></li>
	    <li><a href="<?php echo BASE_URL; ?>/user/gifts.php">Gifts </a></li>
	    <li><a href="<?php echo BASE_URL; ?>/user/comments.php">Comment history </a></li>

	</ul>
<?php


}
require VIEW_ROOT . '/page/show.php';
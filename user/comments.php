<?php 
require '../app/start.php';?>

<?php require VIEW_ROOT . '/templates/header.php'; ?>


<?php 
	$id = 1;
	$sentComments = $db->prepare("
			SELECT *
			FROM users		
            JOIN comments ON comments.senderId = users.id
            WHERE comments.receiverId = 1 
  

		");
	$sentComments->execute(['receiverId' => $id]);
	$sentComments = $sentComments->fetchAll(PDO::FETCH_ASSOC);

	$received = $db->prepare("
			SELECT *
			FROM users		
            JOIN comments ON comments.receiverId = users.id
            WHERE comments.senderId = 1 
  

		");
	$received->execute(['receiverId' => $id]);
	$received = $received->fetchAll(PDO::FETCH_ASSOC);
?>




		<?php if (empty($received)): ?>

		<p>no comments yet</p>
		<?php else: ?>
			<h2> Comments sent</h2>
			<ul>
			  <?php foreach ($received as $receive): ?>
			  	
			  		<li class="comment">
			  			<section class="comment-head">



			  				<img class="comment-thumb" src="../img/<?php echo $receive['image']; ?>" >
				  			
				  			<p><?php echo e($receive['username']); ?><span> 


				  			<?php echo $receive['date']; ?></span> </p>
				  		</section>
				  		<p><i><?php echo e($receive['message']); ?></i></p>
			  		</li>
			  	
			  <?php endforeach; ?>
			</ul>
		<?php endif; ?>







		<?php if (empty($sentComments)): ?>

		<p>no comments yet</p>
		<?php else: ?>
			<h2> Comments received</h2>
			<ul>
			  <?php foreach ($sentComments as $sentComment): ?>
			  	
			  		<li class="comment">
			  			<section class="comment-head">



			  				<img class="comment-thumb" src="../img/<?php echo $sentComment['image']; ?>" >
				  			
				  			<p><?php echo e($sentComment['username']); ?><span> 


				  			<?php echo $sentComment['date']; ?></span> </p>
				  		</section>
				  		<p><i><?php echo e($sentComment['message']); ?></i></p>
			  		</li>
			  	
			  <?php endforeach; ?>
			</ul>
		<?php endif; ?>

	</section>
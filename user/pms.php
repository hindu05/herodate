<?php 
require '../app/start.php';?>

<?php require VIEW_ROOT . '/templates/header.php'; ?>


<?php 
	$id = 1;
	$sentPms = $db->prepare("
			SELECT *
			FROM users		
            JOIN pms ON pms.from_id = users.id
            WHERE pms.to_id = 1 
  

		");
	$sentPms->execute(['to_id' => $id]);
	$sentPms = $sentPms->fetchAll(PDO::FETCH_ASSOC);

	$pmReceived = $db->prepare("
			SELECT *
			FROM users		
            JOIN pms ON pms.to_id = users.id
            WHERE pms.from_id = 1 
  

		");
	$pmReceived->execute(['to_id' => $id]);
	$pmReceived = $pmReceived->fetchAll(PDO::FETCH_ASSOC);
?>



		<h2>Messages sent</h2>
		<?php if (empty($pmReceived)): ?>

		<p>no messages yet</p>
		<?php else: ?>
			
			<ul>
			  <?php foreach ($pmReceived as $pmReceive): ?>
			  	
			  		<li class="comment">
			  			<section class="comment-head">



			  				<img class="comment-thumb" src="../img/<?php echo $pmReceive['image']; ?>" >
				  			
				  			<p><?php echo e($pmReceive['username']); ?><span> 


				  			<?php echo $pmReceive['date']; ?></span> </p>
				  		</section>
				  		<p><i><?php echo e($pmReceive['message']); ?></i></p>
			  		</li>
			  	
			  <?php endforeach; ?>
			</ul>
		<?php endif; ?>






		<h2> Messages received</h2>
		<?php if (empty($sentPms)): ?>

		<p>no messages yet</p>
		<?php else: ?>
			
			<ul>
			  <?php foreach ($sentPms as $sentPm): ?>
			  	
			  		<li class="comment">
			  			<section class="comment-head">



			  				<img class="comment-thumb" src="../img/<?php echo $sentPm['image']; ?>" >
				  			
				  			<p><?php echo e($sentPm['username']); ?><span> 


				  			<?php echo $sentPm['date']; ?></span> </p>
				  		</section>
				  		<p><i><?php echo e($sentPm['message']); ?></i></p>
			  		</li>
			  	
			  <?php endforeach; ?>
			</ul>
		<?php endif; ?>

	</section>
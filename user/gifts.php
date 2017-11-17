<?php 
require '../app/start.php';?>

<?php require VIEW_ROOT . '/templates/header.php'; ?>


<?php 
	$id = 1;
	$sentGifts = $db->prepare("
			SELECT *
			FROM users		
            JOIN gifts ON gifts.senderId = users.id
            WHERE gifts.receiverId = 1 
  

		");
	$sentGifts->execute(['receiverId' => $id]);
	$sentGifts = $sentGifts->fetchAll(PDO::FETCH_ASSOC);

	$received = $db->prepare("
			SELECT *
			FROM users		
            JOIN gifts ON gifts.receiverId = users.id
            WHERE gifts.senderId = 1 
  

		");
	$received->execute(['receiverId' => $id]);
	$received = $received->fetchAll(PDO::FETCH_ASSOC);

?>




		<h2> Gifts received</h2>
		<?php if (empty($received)): ?>

		<p>no gifts yet</p>
		<?php else: ?>
			
			<ul>
			  <?php foreach ($received as $receive): ?>
			  	
			  		<li class="comment">
			  			<section class="comment-head">



			  				<img class="comment-thumb" src="../img/<?php echo $receive['image']; ?>" >
				  			
				  			<p><?php echo e($receive['username']); ?><span> 


				  			<?php echo $receive['date']; ?></span> </p>
				  		</section>


				  		<p><i><?php echo $giftify['name']; ?></i></p>


			  		</li>
			  	
			  <?php endforeach; ?>
			</ul>
		<?php endif; ?>






		<h2> Gifts sent</h2>
		<?php if (empty($sentGifts)): ?>

		<p>no gifts yet</p>
		<?php else: ?>
			
			<ul>
			  <?php foreach ($sentGifts as $sentGift): ?>
			  	
			  		<li class="comment">
			  			<section class="comment-head">



			  				<img class="comment-thumb" src="../img/<?php echo $sentGift['image']; ?>" >
				  			
				  			<p><?php echo e($sentGift['username']); ?><span> 


				  			<?php echo $sentGift['date']; ?></span> </p>
				  		</section>
				  		<p><i><?php echo $sentGift['giftid']; ?></i></p>
			  		</li>
			  	
			  <?php endforeach; ?>
			</ul>
		<?php endif; ?>

	</section>
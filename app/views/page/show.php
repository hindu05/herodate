<?php require VIEW_ROOT . '/templates/header.php'; ?>

<?php if (!$page): ?>
	<p>no page</p>
<?php else: ?>
	
	<img class="profile-thumb" src="img/<?php echo $page['image']; ?>" alt="<?php echo $page['username']; ?>'s profile image">
	<section class="profile-text">
		<h2> <?php echo e($page['username']); ?> </h2>
		<p>Age: <?php echo (date("Y") - $page['born']); ?> </p>
		<p>Gender: <?php echo $page['gender']; ?> </p>
		<p>Powersource: <?php echo $page['powersource']; ?> </p>
		<p>Likes: <?php echo $countLikes['nmb']; ?> </p>
		<p>Coins: <?php echo  $page['coins']; ?> </p>
	</section>



	<p class="description"><i><?php echo  $page['description']; ?></i> </p>

<?php endif; ?>
	
	<section class="CTA-section">
<!-- leave like -->
	<form method="POST" action=''>
		<input type="submit" name="like"  value="Like">
	</form>

<!-- send gift -->
	<h3>send gift</h3>
	<form method="POST" action=''>
		<select name="giftid">
			<option value="1">quesadilla</option>
			<option value="2">buritto</option>
			<option value="3">flowers</option>
		</select>
		<input type="submit" name="gift"  value="Send gift">
	</form>

<!-- private messages -->
	<h2>PM</h2>
	<form method="POST" action="">
		<textarea name="message"></textarea>
		<button type="submit" name="pm">Send Private Message</button>
	</form>
		
	</section>

	<section class="comments">
	<h2>Comments</h2>
<!--send comment -->

			<form method="POST" action="" class="commentform">
				<textarea name="message"></textarea>
				<button type="submit" name="send">Submit comment</button>
			</form>



<!--see comment -->
		
		<?php if (empty($comments)): ?>

		<p>no comments yet</p>
		<?php else: ?>
			<ul>
			  <?php foreach ($comments as $comment): ?>
			  	
			  		<li class="comment">
			  			<section class="comment-head">
			  				<img class="comment-thumb" src="img/<?php echo $comment['image']; ?>" alt="<?php echo $comment['image']; ?> profile image">	<p>
			  				<?php echo $comment['username']; ?><span> <?php echo $comment['date']; ?></span> </p>

			  				<?php 
	
			  					$delid = $comment['id'];
			  					echo "$delid";
	

			  					if ( $comment['senderId'] == 1) { ?>
			  						<form method="POST" action="" class="deleteform">
			  							<button type="submit" name="delete">Delete</button>
			  						</form>
			  					<?php }
			  				 ?>

				  		</section>
				  		<p><i><?php echo e($comment['message']); ?></i></p>
			  		</li>
			  	
			  <?php endforeach; ?>
			</ul>
		<?php endif; ?>
	</section>





<!-- ?php require VIEW_ROOT . '/templates/footer.php'; ? -->
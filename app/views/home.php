<?php require VIEW_ROOT . '/templates/header.php'; ?>
Home
<?php if (empty($users)): ?>
	<p>no users</p>
<?php else: ?>
	<ul>
	  <?php foreach ($users as $user): ?>
	  	<a href="<?php echo BASE_URL; ?>/page.php?id=<?php echo $user['id']; ?>">
	  		<li class="users-thumb">
	  			<p><?php echo $user['username']; ?></p>
	  			<img class="profile-thumb--small" src="img/<?php echo $user['image']; ?>" alt="<?php echo $user['image']; ?> profile image">
	  		</li>
	  	</a>
	  <?php endforeach; ?>
	</ul>
<?php endif; ?>


<?php require VIEW_ROOT . '/templates/footer.php'; ?>
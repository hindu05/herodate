<?php
//
// Big credits to Codecourse at youtube ( https://www.youtube.com/channel/UCpOIUW62tnJTtpWFABxWZ8g?pbjreload=10 ) 
// for providing lots of useful information and code, used througout this dating site
// I have watched and learned from the video series Learn PHP: Basic CMS ( https://www.youtube.com/watch?v=UbsAdx58ch0 )
// Apart from this tut i've used w3cschools and codecademy to gather information regarding mysql and php
//
require 'app/start.php';

$users = $db->query("
	SELECT *
	FROM users
	WHERE id != 1
	")->fetchAll(PDO::FETCH_ASSOC);


require VIEW_ROOT . '/home.php';



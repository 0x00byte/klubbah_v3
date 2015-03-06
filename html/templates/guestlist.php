<?php

	if (isset($_GET['eid'])) {

	}

	$guestlist = new Xo_Guestlist($app);


?>

YOU'RE SIGNED UP TO <?php echo $guestlist->guestlistCount(); ?> GUESTLISTS<br>

<?php $guestlist->guestlistList(); ?>
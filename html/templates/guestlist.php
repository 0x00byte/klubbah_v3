YOU'RE NOT SIGNED UP TO ANY GUESTLISTS<br>

<?php

	if (isset($_GET['eid'])) {
		echo "Event ID: " . $_GET['eid'];
		$guestlist = new Xo_Guestlist();
		$guestlist->guestlistList($app);
	}

?>
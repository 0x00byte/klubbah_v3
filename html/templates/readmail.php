<?php

	if (isset($_GET['mid'])) {
		$message = $app->getMessage($_GET['mid']);
	} else {
		$url = BASE_URL . 'index.php?page=inbox';
		ob_end_clean();
		header("Location: $url");
		exit();
	}

?>


         <div class="row">
        <div class="col-sm-3 col-lg-2"> <a class="btn btn-danger btn-block btn-compose-email" href="compose.html">Compose Email</a>
          <ul class="nav nav-pills nav-stacked nav-email">
            <li class="active"> <a href="index.php?page=inbox"> <span class="badge pull-right">2</span> <i class="glyphicon glyphicon-inbox"></i> Inbox </a> </li>
            <li><a href="#"><i class="glyphicon glyphicon-star"></i> Starred</a></li>
            <li><a href="#"><i class="glyphicon glyphicon-send"></i> Sent Mail</a></li>
            <li> <a href="#"> <span class="badge pull-right">3</span> <i class="glyphicon glyphicon-pencil"></i> Draft </a> </li>
            <li><a href="#"><i class="glyphicon glyphicon-trash"></i> Trash</a></li>
          </ul>
          <div class="mb30"></div>
          <h5 class="subtitle">Folders</h5>
          <ul class="nav nav-pills nav-stacked nav-email mb20">
            <li> <a href="email.html"> <span class="badge pull-right">2</span> <i class="glyphicon glyphicon-folder-open"></i> Conference </a> </li>
            <li><a href="#"><i class="glyphicon glyphicon-folder-open"></i> Newsletter</a></li>
            <li><a href="#"><i class="glyphicon glyphicon-folder-open"></i> Invitations</a></li>
            <li> <a href="#"> <i class="glyphicon glyphicon-folder-open"></i> Promotions </a> </li>
          </ul>
        </div>
        <!-- col-sm-3 -->

        <div class="col-sm-9 col-lg-10">
          <div class="block-web">
			<div class="pull-right">
              <div class="btn-group">
                <button title="" data-toggle="tooltip" type="button" class="btn btn-white tooltips" data-original-title="Archive"><i class="glyphicon glyphicon-hdd"></i></button>
                <button title="" data-toggle="tooltip" type="button" class="btn btn-white tooltips" data-original-title="Report Spam"><i class="glyphicon glyphicon-exclamation-sign"></i></button>
                <button title="" data-toggle="tooltip" type="button" class="btn btn-white tooltips" data-original-title="Delete"><i class="glyphicon glyphicon-trash"></i></button>
              </div>
              <div class="btn-group">
                <div class="btn-group nomargin">
                  <button title="" type="button" class="btn btn-white dropdown-toggle tooltips inbox_btn" data-toggle="dropdown" data-original-title="Move to Folder"> <i class="glyphicon glyphicon-folder-close"></i> <span class="caret"></span> </button>
                  <ul class="dropdown-menu">
                    <li><a href="#"><i class="glyphicon glyphicon-folder-open"></i> Conference</a></li>
                    <li><a href="#"><i class="glyphicon glyphicon-folder-open"></i> Newsletter</a></li>
                    <li><a href="#"><i class="glyphicon glyphicon-folder-open"></i> Invitations</a></li>
                    <li><a href="#"><i class="glyphicon glyphicon-folder-open"></i> Promotions</a></li>
                  </ul>
                </div>
                <div class="btn-group nomargin">
                  <button title="" type="button" class="btn btn-white dropdown-toggle tooltips inbox_btn" data-toggle="dropdown" data-original-title="Label"> <i class="glyphicon glyphicon-tag"></i> <span class="caret"></span> </button>
                  <ul class="dropdown-menu">
                    <li><a href="#"><i class="glyphicon glyphicon-tag"></i> Web</a></li>
                    <li><a href="#"><i class="glyphicon glyphicon-tag"></i> Photo</a></li>
                    <li><a href="#"><i class="glyphicon glyphicon-tag"></i> Video</a></li>
                  </ul>
                </div>
              </div>

              <div class="btn-group">
      <button data-toggle="dropdown" class="btn btn-white dropdown-toggle" type="button"><i class="fa fa-reply"></i><span class="caret"></span></button>
      <ul role="menu" class="dropdown-menu" style="margin:5px auto auto -105px;">
        <li><a href="#">Reply to All</a></li>
                  <li><a href="#">Forward</a></li>
                  <li><a href="#">Print</a></li>
                  <li><a href="#">Delete Message</a></li>
                  <li><a href="#">Report Spam</a></li>
      </ul>
    </div>



            </div>
            <!-- pull-right -->

            <div class="btn-group">
              <button title="" data-toggle="tooltip" type="button" class="btn btn-white tooltips" data-original-title="Read Previous Email"><i class="glyphicon glyphicon-chevron-left"></i></button>
              <button title="" data-toggle="tooltip" type="button" class="btn btn-white tooltips" data-original-title="Read Next Email"><i class="glyphicon glyphicon-chevron-right"></i></button>
            </div>

            <div class="read-panel">
              <div class="media"> <a class="pull-left" href="#"> <img class="media-object" src="images/photos/user4.jpg" alt=""> </a>
                <div class="media-body"> <span class="media-meta pull-right">Yesterday at 1:30am</span>
                  <h4 class="text-primary">Raman Pradhan</h4>
                  <small class="text-muted">From: ramanip@riaxe.com</small> </div>
              </div>

              <h4 class="email-subject"><?php echo $message['message_subject']; ?></h4>
              <p><?php echo $message['message_content']; ?></p>
              <br>
              <div class="media"> <a class="pull-left" href="#"> <img class="media-object" src="images/photos/user5.jpg" alt=""> </a>
                <div class="media-body">
                  <textarea placeholder="Reply here..." class="form-control"></textarea>
                </div>
              </div><!-- /media -->

          </div><!--/ read-panel -->
         </div><!--/ block-web -->
        </div><!-- /col-sm-9 -->
      </div><!--/row-->





















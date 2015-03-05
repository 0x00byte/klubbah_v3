
        <div class="row">
        <div class="col-sm-3 col-lg-2"> <a class="btn btn-danger btn-block btn-compose-email" href="index.php?page=compose">Compose Email</a>
          <ul class="nav nav-pills nav-stacked nav-email">
            <li class="active"> <a href="index.php?page=inbox"> <span class="badge pull-right"><?php echo $_SESSION['msg_count']; ?></span> <i class="glyphicon glyphicon-inbox"></i> Inbox </a> </li>
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
            <div class="compose-mail">
              <form method="post" role="form-horizontal">
                <div class="form-group">
                  <label class="" for="to">To:</label>
                  <input type="text" class="form-control" id="to" tabindex="1">
                  <div class="compose-options"> <a href="compose-mail" onclick="$(this).hide(); $('#cc').parent().removeClass('hidden'); $('#cc').focus();">Cc</a> <a href="javascript:;" onclick="$(this).hide(); $('#bcc').parent().removeClass('hidden'); $('#bcc').focus();">Bcc</a> </div>
                </div>
                <div class="form-group hidden">
                  <label class="" for="cc">Cc:</label>
                  <input type="text" class="form-control" id="cc" tabindex="2">
                </div>
                <div class="form-group hidden">
                  <label class="" for="bcc">Bcc:</label>
                  <input type="text" class="form-control" id="bcc" tabindex="2">
                </div>
                <div class="form-group">
                  <label class="" for="subject">Subject:</label>
                  <input type="text" class="form-control" id="subject" tabindex="1">
                </div>
                <div class="compose-editor" style="margin-top:10px;">
                  <textarea id="text-editor" class="compose-editor2" placeholder="Enter text ..." class="col-xs-12" rows="25"></textarea>
                </div>
                <div class="compose-editor">
                  <input type="file" class="default">
                </div>
              </form>
            </div>
            <div class="bottom">
              <button class="btn btn-primary">Send</button>
              <button class="btn btn-success" type="button">Save</button>
            </div>
          </div><!--/ block-web -->
        </div><!-- /col-sm-9 -->
      </div><!--/row-->

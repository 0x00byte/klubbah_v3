<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <title>Klubbah || Powered by Osiris</title>
    <meta name="ROBOTS" content="NOINDEX, NOFOLLOW" />
    <link href="css/font-awesome.css" rel="stylesheet" type="text/css" />
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="css/animate.css" rel="stylesheet" type="text/css" />
    <link href="css/admin.css" rel="stylesheet" type="text/css" />
</head>

<body class="light_theme  fixed_header left_nav_fixed">
    <div class="wrapper">
        <!--\\\\\\\ wrapper Start \\\\\\-->

        <div class="login_page">
            <div class="login_content">
                <div class="panel-heading border login_heading">
                    sign in now
                </div>

                <!-- ERROR MESSAGE IF FAILED LOGIN -->
                <?php
	                $app->rootError();
					if(!isset($_SESSION['failed_login'])) { $_SESSION['failed_login'] = 0; }
				?>

                <form role="form" class="form-horizontal" method="post" action="index.php" <?php if ($_SESSION['failed_login'] >= 11) { echo 'style="display: none;"'; } ?>>
                    <div class="form-group">
                        <div class="col-sm-10">
                            <input type="text" placeholder="Email/Username" id="inputEmail3" class="form-control" name="email_username" />
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-10">
                            <input type="password" placeholder="Password" id="inputPassword3" class="form-control" name="pass" />
                        </div>
                    </div>

                    <div class="form-group">
                        <div class=" col-sm-10">
                            <div class="checkbox checkbox_margin">
                                <label class="lable_margin"><input type="checkbox" name="remember_me" /></label>

                                <p class="pull-left"><label class="lable_margin">Remember me</label></p><a href="index.php"><button class="btn btn-default pull-right" type="submit"><a href="index.php">Sign in</a></button></a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div><!--\\\\\\\ wrapper end\\\\\\-->
    <!-- Modal -->

    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

                    <h4 class="modal-title" id="myModalLabel">Compose New Task</h4>
                </div>

                <div class="modal-body">
                    content
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

                    <h4 class="modal-title" id="myModalLabel">Compose New Task</h4>
                </div>

                <div class="modal-body">
                    sgxdfgxfg
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div><!-- sidebar chats -->

    <nav class="atm-spmenu atm-spmenu-vertical atm-spmenu-right side-chat">
        <div class="header">
            <input type="text" class="form-control chat-search" placeholder=" Search" />
        </div>

        <div href="#" class="sub-header">
            <div class="icon"></div>

            <p>Online (4)</p>
        </div>

        <div class="content">
            <p class="title">Family</p>

            <ul class="nav nav-pills nav-stacked contacts">
                <li class="online"><a href="#">Steven Smith</a></li>

                <li class="online"><a href="#">John Doe</a></li>

                <li class="online"><a href="#">Michael Smith</a></li>

                <li class="busy"><a href="#">Chris Rogers</a></li>
            </ul>

            <p class="title">Friends</p>

            <ul class="nav nav-pills nav-stacked contacts">
                <li class="online"><a href="#">Vernon Philander</a></li>

                <li class="outside"><a href="#">Kyle Abbott</a></li>

                <li><a href="#">Dean Elgar</a></li>
            </ul>

            <p class="title">Work</p>

            <ul class="nav nav-pills nav-stacked contacts">
                <li><a href="#">Dale Steyn</a></li>

                <li><a href="#">Morne Morkel</a></li>
            </ul>
        </div>

        <div id="chat-box">
            <div class="header">
                <span>Richard Avedon</span> <a class="close"></a>
            </div>

            <div class="messages nano nscroller has-scrollbar">
                <div class="content" tabindex="0" style="right: -17px;">
                    <ul class="conversation">
                        <li class="odd">
                            <p>Hi John, how are you?</p>
                        </li>

                        <li class="text-right">
                            <p>Hello I am also fine</p>
                        </li>

                        <li class="odd">
                            <p>Tell me what about you?</p>
                        </li>

                        <li class="text-right">
                            <p>Sorry, I'm late... see you</p>
                        </li>

                        <li class="odd unread">
                            <p>OK, call me later...</p>
                        </li>
                    </ul>
                </div>

                <div class="pane" style="display: none;">
                    <div class="slider" style="height: 20px; top: 0px;"></div>
                </div>
            </div>

            <div class="chat-input">
                <div class="input-group">
                    <input type="text" placeholder="Enter a message..." class="form-control" /> <span class="input-group-btn"><button class="btn btn-danger" type="button"><span class="input-group-btn">Send</span></button></span>
                </div>
            </div>
        </div>
    </nav><!-- /sidebar chats -->
    <script src="js/jquery-2.1.0.js" type="text/javascript">
</script><script src="js/bootstrap.min.js" type="text/javascript">
</script><script src="js/common-script.js" type="text/javascript">
</script><script src="js/jquery.slimscroll.min.js" type="text/javascript">
</script>
</body>
</html>

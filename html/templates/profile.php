<?php if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['status_text'])) { $app->statusSave($_POST['status_text']); } ?>

<html>
<head>
    <title></title>
</head>

<body>
    <div class="page-content">
        <div class="row">
            <div class="col-md-4">
                <div class="profile_bg">
                    <div class="user-profile-sidebar">
                        <div class="row">
                            <div class="col-md-4"><img src="images/pro.png"></div>
                            <div class="col-md-8">
                                <div class="user-identity">
                                    <h4><strong><?php echo $app->userDisplayName(); ?></strong></h4>
                                    <p><a href="index.php?page=profile&uid=&lt;?php echo $_SESSION['user_id']; ?&gt;">@<?php echo $app->userUsername(); ?></a></p>
                                    <p><?php echo $app->userLocation(); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="account-status-data">
                        <div class="row">
                            <div class="col-md-4">
                                <h5><strong><?php echo $app->userPostCount(); ?></strong><br>
                                Posts</h5>
                            </div>

                            <div class="col-md-4">
                                <h5><strong><?php echo $app->userFollowingCount(); ?></strong><br>
                                Following</h5>
                            </div>

                            <div class="col-md-4">
                                <h5><strong><?php echo $app->userFollowerCount(); ?></strong><br>
                                Followers</h5>
                            </div>
                        </div>
                    </div>

                    <div class="user-button">
                        <div class="row">
                            <div class="col-sm-6">
                                <button type="button" class=" btn btn-primary btn-rounded">Send Message</button>
                            </div>

                            <div class="col-sm-6">
                                <button type="button" class="btn btn-default btn-rounded">Add as friend</button>
                            </div>
                        </div>
                    </div>

                    <div>
                        <small class="">About <?php echo $app->userFirstName(); ?></small>

                        <p><?php echo $app->userBio(); ?></p>

                        <div class="line"></div>

                        <p class="m-t-sm"></p>
                    </div>

                    <h6><strong>CONNECTION</strong></h6>

                    <div class="">
                        <ul class="social_icons ">
                            <li><a href="#"></a></li>

                            <li><a href="#"></a></li>

                            <li><a href="#"></a></li>

                            <li><a href="#"></a></li>

                            <li><a href="#"></a></li>
                        </ul>
                    </div>
                </div><!--/block-web-->

                <section class="panel panel-default ">
                    <form action="index.php?page=profile" method="post">
                        <textarea placeholder="What are you doing..." rows="3" class="form-control no-border profile_form" style="width:100%;" name="status_text">
</textarea> <button class="btn btn-info pull-right btn-sm">POST</button>
                    </form>

                    <footer class="profile_form">
                        <ul class="nav nav-pills nav-sm">
                            <li><a href="#"></a></li>

                            <li><a href="#"></a></li>
                        </ul>
                    </footer>
                </section>

                <section class="panel panel-default profile_bg">
                    <h4 class="font-thin padder">Latest Tweets</h4>

                    <ul class="profile_list">
                        <li class="profile_list-item">
                            <p>Wellcome <a class="text-info" href="#">@Drew Wllon</a> and play this web application template, have fun1</p><small class="tweets"> 2 minuts ago</small>
                        </li>

                        <li class="profile_list-item">
                            <p>Morbi nec <a class="text-info" href="#">@Jonathan George</a> nunc condimentum ipsum dolor sit amet, consectetur</p><small class="tweets"> 1 hour ago</small>
                        </li>

                        <li class="profile_list-item">
                            <p><a class="text-info" href="#">@Josh Long</a> Vestibulum ullamcorper sodales nisi nec adipiscing elit.</p><small class="tweets"> 2 hours ago</small>
                        </li>
                    </ul>
                </section>

                <section class="panel ">
                    <div class="panel-body">
                        <a class=" pull-left m-r" href="#"><img src="images/pro.png"></a> <a class="text-info" href="#">@Mike Mcalidek </a><br>
                        <small class="">2,415 followers / 225 tweets</small><br>
                        <a class="btn btn-xs btn-success m-t-xs pull-right" href="#">Follow</a>
                    </div>
                </section>
            </div><!--/col-md-4-->

            <div class="col-md-8">
                <div class="block-web full">
                    <ul class="nav nav-tabs nav-justified nav_bg">
                        <li class="active"><a href="#about" data-toggle="tab">About</a></li>

                        <li class=""><a href="#edit-profile" data-toggle="tab">Edit</a></li>

                        <li class=""><a href="#user-activities" data-toggle="tab">Activities</a></li>

                        <li class=""><a href="#mymessage" data-toggle="tab">Message</a></li>
                    </ul>

                    <div class="tab-content">
                        <div class="tab-pane animated fadeInRight active" id="about">
                            <div class="user-profile-content">
                                <h5><strong>ABOUT</strong> ME</h5>

                                <p><?php echo $app->userAbout(); ?></p>
                                <hr>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <h5><strong>CONTACT</strong> ME</h5>

                                        <address>
                                            <strong>Phone</strong><br>
                                            <abbr title="Phone"><?php echo $app->userTelephone(); ?></abbr>
                                        </address>

                                        <address>
                                            <strong>Email</strong><br>
                                            <a href="mailto:#"><?php echo $app->userEmail(); ?></a>
                                        </address>

                                        <address>
                                            <strong>Website</strong><br>
                                            <a href="<?php echo $app->userWebsite(); ?>"><?php echo $app->userWebsite(); ?></a>
                                        </address>
                                    </div>

                                    <div class="col-sm-6">
                                        <h5><strong>MY</strong> SKILLS</h5><?php echo $app->userSkills(); ?>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane animated fadeInRight" id="edit-profile">
                            <div class="user-profile-content">
                                <form role="form" action="index.php?page=profile" method="post">
                                    <div class="form-group">
                                        <label for="FullName">Full Name</label> <input type="text" class="form-control" id="FullName" value="<?php echo $app->userDisplayName(); ?>">
                                    </div>

                                    <div class="form-group">
                                        <label for="Email">Email</label> <input type="email" class="form-control" id="Email" value="<?php echo $app->userEmail(); ?>">
                                    </div>

                                    <div class="form-group">
                                        <label for="Username">Username</label> <input type="text" class="form-control" id="Username" value="<?php echo $app->userUsername(); ?>">
                                    </div>

                                    <div class="form-group">
                                        <label for="Password">Password</label> <input type="password" class="form-control" id="Password" placeholder="6 - 15 Characters">
                                    </div>

                                    <div class="form-group">
                                        <label for="RePassword">Re-Password</label> <input type="password" class="form-control" id="RePassword" placeholder="6 - 15 Characters">
                                    </div>

                                    <div class="form-group">
                                        <label for="AboutMe">About Me</label>
                                        <textarea class="form-control" id="AboutMe" style="height: 125px;">
<?php echo $app->userAbout(); ?>
</textarea>
                                    </div><button type="submit" class="btn btn-primary">Save</button>
                                </form>
                            </div>
                        </div>

                        <div class="tab-pane" id="user-activities">
                            <ul class="media-list">
                                <li class="media">
                                    <a href="#"></a>

                                    <p><strong><?php echo $app->userDisplayName(); ?></strong> Uploaded a photo <strong>"DSC000254.jpg"</strong><br>
                                    <i>2 minutes ago</i></p>
                                </li>

                                <li class="media">
                                    <a href="#"></a>

                                    <p><strong>Imran Tahir</strong> Created an photo album <strong>"Indonesia Tourism"</strong><br>
                                    <i>8 minutes ago</i></p>
                                </li>

                                <li class="media">
                                    <a href="#"></a>

                                    <p><strong>Colin Munro</strong> Posted an article <strong>"London never ending Asia"</strong><br>
                                    <i>an hour ago</i></p>
                                </li>

                                <li class="media">
                                    <a href="#"></a>

                                    <p><strong>Corey Anderson</strong> Added 3 products<br>
                                    <i>3 hours ago</i></p>
                                </li>

                                <li class="media">
                                    <a href="#"></a>

                                    <p><strong>Morne Morkel</strong> Send you a message <strong>"Lorem ipsum dolor..."</strong><br>
                                    <i>12 hours ago</i></p>
                                </li>

                                <li class="media">
                                    <a href="#"></a>

                                    <p><strong>Imran Tahir</strong> Updated his avatar<br>
                                    <i>Yesterday</i></p>
                                </li>
                            </ul>
                        </div>

                        <div class="tab-pane" id="mymessage">
                            <ul class="media-list">
                                <li class="media">
                                    <a class="pull-left" href="#"><img src="images/gg.png"></a>

                                    <div class="media-body">
                                        <h4 class="media-heading"><a href="#fakelink"><?php echo $app->userDisplayName(); ?></a> <small>Just now</small></h4>

                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                                    </div>
                                </li>

                                <li class="media">
                                    <a class="pull-left" href="#"><img src="images/gg.png"></a>

                                    <div class="media-body">
                                        <h4 class="media-heading"><a href="#fakelink">Tim Southee</a> <small>Yesterday at 04:00 AM</small></h4>

                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam rhoncus</p>
                                    </div>
                                </li>

                                <li class="media">
                                    <a class="pull-left" href="#"><img src="images/gg.png"></a>

                                    <div class="media-body">
                                        <h4 class="media-heading"><a href="#fakelink">Kane Williamson</a> <small>January 17, 2014 05:35 PM</small></h4>

                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                                    </div>
                                </li>

                                <li class="media">
                                    <a class="pull-left" href="#"><img src="images/gg.png"></a>

                                    <div class="media-body">
                                        <h4 class="media-heading"><a href="#fakelink">Lonwabo Tsotsobe</a> <small>January 17, 2014 05:35 PM</small></h4>

                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                                    </div>
                                </li>

                                <li class="media">
                                    <a class="pull-left" href="#"><img src="images/gg.png"></a>

                                    <div class="media-body">
                                        <h4 class="media-heading"><a href="#fakelink">Dale Steyn</a> <small>January 17, 2014 05:35 PM</small></h4>

                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                                    </div>
                                </li>

                                <li class="media">
                                    <a class="pull-left" href="#"><img src="images/gg.png"></a>

                                    <div class="media-body">
                                        <h4 class="media-heading"><a href="#fakelink"><?php echo $app->userDisplayName(); ?></a> <small>Just now</small></h4>

                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div><!--/tab-content-->
                </div><!--/block-web-->

                <h2 style="text-align:center">Timeline</h2>

                <div class="timeline">
                    <?php $app->statusGetFeed(); ?>
                </div>
            </div><!--/col-md-8-->
        </div><!--/row-->
    </div>
</body>
</html>

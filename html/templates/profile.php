        <div class="page-content">
          <div class="row">
            <div class="col-md-4">
              <div class="profile_bg">
                <div class="user-profile-sidebar">
                  <div class="row">
                    <div class="col-md-4"><img src="images/pro.png" /></div>
                    <div class="col-md-8">
                      <div class="user-identity">
                        <h4><strong><?php echo $app->userDisplayName(); ?></strong></h4>
                        <p><i class="fa fa-map-marker"></i> Riaxe Systems Pvt</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="account-status-data">
                  <div class="row">
                    <div class="col-md-4">
                      <h5><strong><?php echo $app->userPostCount(); ?></strong><br/>
                        Posts</h5>
                    </div>
                    <div class="col-md-4">
                      <h5><strong><?php echo $app->userFollowingCount(); ?></strong><br/>
                        Following</h5>
                    </div>
                    <div class="col-md-4">
                      <h5><strong><?php echo $app->userFollowerCount(); ?></strong><br/>
                        Followers</h5>
                    </div>
                  </div>
                </div>
                <div class="user-button">
                  <div class="row">
                    <div class="col-sm-6">
                      <button type="button" class=" btn btn-primary btn-rounded"><i class="fa fa-envelope"></i> Send Message</button>
                    </div>
                    <div class="col-sm-6">
                      <button type="button" class="btn btn-default btn-rounded"><i class="fa fa-user"></i> Add as friend</button>
                    </div>
                  </div>
                </div>
                <div> <small class="">About <?php echo $app->userFirstName(); ?></small>
                  <p><?php echo $app->userAbout(); ?></p>
                  <div class="line"></div>
                  <p class="m-t-sm"> </p>
                </div>
                <h6><strong >CONNECTION</strong></h6>
                <div class="">
                  <ul class="social_icons ">
                    <li><a href="#"><i class="fa fa-envelope-o"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-skype"></i></a></li>
                  </ul>
                </div>
              </div>
              <!--/block-web-->
              <section class="panel panel-default ">
                <form >
                  <textarea placeholder="What are you doing..." rows="3" class="form-control no-border profile_form" style="width:414px;"></textarea>
                </form>
                <footer class="profile_form">
                  <button class="btn btn-info pull-right btn-sm">POST</button>
                  <ul class="nav nav-pills nav-sm">
                    <li><a href="#"><i class="fa fa-camera text-muted"></i></a></li>
                    <li><a href="#"><i class="fa fa-video-camera text-muted"></i></a></li>
                  </ul>
                </footer>
              </section>
              <section class="panel panel-default profile_bg">
                <h4 class="font-thin padder">Latest Tweets</h4>
                <ul class="profile_list">
                  <li class="profile_list-item">
                    <p>Wellcome <a class="text-info" href="#">@Drew Wllon</a> and play this web application template, have fun1 </p>
                    <small class="tweets"><i class="fa fa-clock-o"></i> 2 minuts ago</small> </li>
                  <li class="profile_list-item">
                    <p>Morbi nec <a class="text-info" href="#">@Jonathan George</a> nunc condimentum ipsum dolor sit amet, consectetur</p>
                    <small class="tweets"><i class="fa fa-clock-o"></i> 1 hour ago</small> </li>
                  <li class="profile_list-item">
                    <p><a class="text-info" href="#">@Josh Long</a> Vestibulum ullamcorper sodales nisi nec adipiscing elit. </p>
                    <small class="tweets"><i class="fa fa-clock-o"></i> 2 hours ago</small> </li>
                </ul>
              </section>
              <section class="panel ">
                <div class="panel-body"> <a class=" pull-left m-r" href="#"><img src="images/pro.png" /></a> <a class="text-info" href="#">@Mike Mcalidek <i class="fa fa-twitter"></i></a> <br/>
                  <small class="">2,415 followers / 225 tweets</small> <br/>
                  <a class="btn btn-xs btn-success m-t-xs pull-right" href="#">Follow</a> </div>
              </section>
            </div>
            <!--/col-md-4-->
            <div class="col-md-8">
              <div class="block-web full">
                <ul class="nav nav-tabs nav-justified nav_bg">
                  <li class="active"><a href="#about" data-toggle="tab"><i class="fa fa-user"></i> About</a></li>
                  <li class=""><a href="#edit-profile" data-toggle="tab"><i class="fa fa-pencil"></i> Edit</a></li>
                  <li class=""><a href="#user-activities" data-toggle="tab"><i class="fa fa-laptop"></i> Activities</a></li>
                  <li class=""><a href="#mymessage" data-toggle="tab"><i class="fa fa-envelope"></i> Message</a></li>
                </ul>
                <div class="tab-content">
                  <div class="tab-pane animated fadeInRight active" id="about">
                    <div class="user-profile-content">
                      <h5><strong>ABOUT</strong> ME</h5>
                      <p> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. </p>
                      <hr>
                      <div class="row">
                        <div class="col-sm-6">
                          <h5><strong>CONTACT</strong> ME</h5>
                          <address>
                          <strong>Phone</strong><br>
                          <abbr title="Phone">+91 354 123 4567</abbr>
                          </address>
                          <address>
                          <strong>Email</strong><br>
                          <a href="mailto:#">first.last@example.com</a>
                          </address>
                          <address>
                          <strong>Website</strong><br>
                          <a href="http://riaxe.com">http://riaxe.com</a>
                          </address>
                        </div>
                        <div class="col-sm-6">
                          <h5><strong>MY</strong> SKILLS</h5>
                          <p>UI Design</p>
                          <p>Clean and Modern Web Design</p>
                          <p>PHP and MySQL Programming</p>
                          <p>Vector Design</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane animated fadeInRight" id="edit-profile">
                    <div class="user-profile-content">
                      <form role="form">
                        <div class="form-group">
                          <label for="FullName">Full Name</label>
                          <input type="text" class="form-control" id="FullName" value="<?php echo $app->userDisplayName(); ?>">
                        </div>
                        <div class="form-group">
                          <label for="Email">Email</label>
                          <input type="email" class="form-control" id="Email" value="first.last@example.com">
                        </div>
                        <div class="form-group">
                          <label for="Username">Username</label>
                          <input type="text" class="form-control" id="Username" value="john">
                        </div>
                        <div class="form-group">
                          <label for="Password">Password</label>
                          <input type="password" class="form-control" id="Password" placeholder="6 - 15 Characters">
                        </div>
                        <div class="form-group">
                          <label for="RePassword">Re-Password</label>
                          <input type="password" class="form-control" id="RePassword" placeholder="6 - 15 Characters">
                        </div>
                        <div class="form-group">
                          <label for="AboutMe">About Me</label>
                          <textarea class="form-control" id="AboutMe" style="height: 125px;">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Save</button>
                      </form>
                    </div>
                  </div>
                  <div class="tab-pane" id="user-activities">
                    <ul class="media-list">
                      <li class="media"> <a href="#">
                        <p><strong>John Doe</strong> Uploaded a photo <strong>"DSC000254.jpg"</strong> <br>
                          <i>2 minutes ago</i></p>
                        </a> </li>
                      <li class="media"> <a href="#">
                        <p><strong>Imran Tahir</strong> Created an photo album <strong>"Indonesia Tourism"</strong> <br>
                          <i>8 minutes ago</i></p>
                        </a> </li>
                      <li class="media"> <a href="#">
                        <p><strong>Colin Munro</strong> Posted an article <strong>"London never ending Asia"</strong> <br>
                          <i>an hour ago</i></p>
                        </a> </li>
                      <li class="media"> <a href="#">
                        <p><strong>Corey Anderson</strong> Added 3 products <br>
                          <i>3 hours ago</i></p>
                        </a> </li>
                      <li class="media"> <a href="#">
                        <p><strong>Morne Morkel</strong> Send you a message <strong>"Lorem ipsum dolor..."</strong> <br>
                          <i>12 hours ago</i></p>
                        </a> </li>
                      <li class="media"> <a href="#">
                        <p><strong>Imran Tahir</strong> Updated his avatar <br>
                          <i>Yesterday</i></p>
                        </a> </li>
                    </ul>
                  </div>
                  <div class="tab-pane" id="mymessage">
                    <ul class="media-list">
                      <li class="media"> <a class="pull-left" href="#"><img src="images/gg.png" /></a>
                        <div class="media-body">
                          <h4 class="media-heading"><a href="#fakelink">John Doe</a> <small>Just now</small></h4>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                        </div>
                      </li>
                      <li class="media"> <a class="pull-left" href="#"><img src="images/gg.png" /></a>
                        <div class="media-body">
                          <h4 class="media-heading"><a href="#fakelink">Tim Southee</a> <small>Yesterday at 04:00 AM</small></h4>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam rhoncus</p>
                        </div>
                      </li>
                      <li class="media"> <a class="pull-left" href="#"><img src="images/gg.png" /></a>
                        <div class="media-body">
                          <h4 class="media-heading"><a href="#fakelink">Kane Williamson</a> <small>January 17, 2014 05:35 PM</small></h4>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                        </div>
                      </li>
                      <li class="media"> <a class="pull-left" href="#"><img src="images/gg.png" /></a>
                        <div class="media-body">
                          <h4 class="media-heading"><a href="#fakelink">Lonwabo Tsotsobe</a> <small>January 17, 2014 05:35 PM</small></h4>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                        </div>
                      </li>
                      <li class="media"> <a class="pull-left" href="#"><img src="images/gg.png" /></a>
                        <div class="media-body">
                          <h4 class="media-heading"><a href="#fakelink">Dale Steyn</a> <small>January 17, 2014 05:35 PM</small></h4>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                        </div>
                      </li>
                      <li class="media"> <a class="pull-left" href="#"><img src="images/gg.png" /></a>
                        <div class="media-body">
                          <h4 class="media-heading"><a href="#fakelink">John Doe</a> <small>Just now</small></h4>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
                <!--/tab-content-->
              </div>
              <!--/block-web-->
            </div>
            <!--/col-md-8-->
          </div>
          <!--/row-->
        </div>
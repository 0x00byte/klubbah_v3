 	 <div class="row">
          <div class="col-md-12">
<h2 style="text-align:center">Events</h2>
<div class="timeline">
                  <div class="timeline-item alt">
                      <div class="text-right">
                          <div class="time-show first">
                              <a href="#" class="btn btn-primary">This week</a>                          </div>
                      </div>
                  </div>


                <?php $app->eventListing(); ?>
                <?php $app->eventRadioChecklist(); ?>

              </div>
          </div>
        </div>
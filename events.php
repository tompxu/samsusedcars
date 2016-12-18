            <div class="widget event-widget">
              <h3 class="widget-title">UPCOMING EVENTS</h3>
              <div class="widget-content">
                <div class="event-list">
                  		    
		    <?php
		    
		    $AttendanceDaoObject = new AttendanceDao();
		     
                    $gatherings = $AttendanceDaoObject->getUpcomingEvents($number);
                    
		    foreach ($gatherings as $gathering){
		    
		    echo '<div class="event clearfix">';
		    echo '<div class="calendar">';
		       
		    echo '<div class="date">';
		    echo $gathering->startDateTime("d");
		    echo '</div>';

		    echo '<div class="month">';
		    echo $gathering->startDateTime("m");
		    echo '</div>';
		    echo '</div>';

                    echo '<div class="content">';
                    echo '<h5 class="title"><a href="event-calendar-detail.php">';
		    echo $gathering->gathering_desc;
		    echo '</a></h5></div>';

                    echo '<div class="location">';
		    echo $gathering->location;
		    echo '</div>';
		    
		    echo '</div>';
		    echo '</div>';
		    }
		    
		    ?>

              </div>
	    <div class="text-right"><a class="more" href="event-calendar.php">More Events</a></div>
           </div>
         </div>

<div class="student_dashboard_body">
    <div class="mid-content">
        <div class="student_top_menu">
            <div class="student_menu_tabs">
                <div class="student_menu_tab">
                    <a href="#">
                        <div class="student_menu_tab_body">
                            <img src="<?php echo base_url();?>assets/images/galley.png"/>
                            <label>Ranks</label>
                        </div>  
                    </a>
                </div>
                <div class="student_menu_tab">
                    <a href="#video">
                        <div class="student_menu_tab_body">
                            <img src="<?php echo base_url();?>assets/images/video.png"/>
                            <label>Videos</label>
                        </div>
                    </a>
                </div>
                <div class="student_menu_tab">
                    <a href="<?php echo base_url();?>home/drills/">
                        <div class="student_menu_tab_body">
                            <img src="<?php echo base_url();?>assets/images/games.png"/>
                            <label>Games</label>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        
        <div class="mid_images_container">
            <div class="student_mid_image">
                <br/><br/>
                <img src="<?php echo base_url();?>assets/images/doggy.png"/>
            </div>
            <a href="<?php echo base_url();?>home/drills/">
                <div class="welcome_cloud">
                    <img src="<?php echo base_url();?>assets/images/cloud2.png"/>
                    <label>Let's Play Friend</label>
                </div>
            </a>
        </div>
        
        <br/><br/><br/><br/>
        
        <div class="student_dashboard_video" id="video">            
            <video width="640" height="360" controls>
                <source src="<?php echo base_url();?>/assets/videos/play.mp4" type="video/mp4">
                <source src="movie.ogg" type="video/ogg">
                    Your browser does not support the video tag.
            </video>
        </div>
        <br/><br/>
    </div>
</div>
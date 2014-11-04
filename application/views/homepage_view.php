<script>
    $(document).ready(function(){
      
    $('#team12').slideUp();
    $('#team22').slideUp();
    $('#team32').slideUp();
    $('#team42').slideUp();
 
 

//    $("#homepage-headers").onepage_scroll({
//   sectionContainer: "section",     // sectionContainer accepts any kind of selector in case you don't want to use section
//   easing: "ease",                  // Easing options accepts the CSS3 easing animation such "ease", "linear", "ease-in",
//                                    // "ease-out", "ease-in-out", or even cubic bezier value such as "cubic-bezier(0.175, 0.885, 0.420, 1.310)"
//   animationTime: 1000,             // AnimationTime let you define how long each section takes to animate
//   pagination: true,                // You can either show or hide the pagination. Toggle true for show, false for hide.
//   updateURL: false,                // Toggle this true if you want the URL to be updated automatically when the user scroll to each page.
//   beforeMove: function(index) {},  // This option accepts a callback function. The function will be called before the page moves.
//   afterMove: function(index) {},   // This option accepts a callback function. The function will be called after the page moves.
//   loop: false,                     // You can have the page loop back to the top/bottom when the user navigates at up/down on the first/last page.
//   keyboard: true,                  // You can activate the keyboard controls
//   responsiveFallback: false,        // You can fallback to normal page scroll by defining the width of the browser in which
//                                    // you want the responsive fallback to be triggered. For example, set this to 600 and whenever
//                                    // the browser's width is less than 600, the fallback will kick in.
//   direction: "vertical"            // You can now define the direction of the One Page Scroll animation. Options available are "vertical" and "horizontal". The default value is "vertical".  
//}); 
// 
    });
    
  
   
    </script>
<div class="student_dashboard_body center">  
    <div id="homepage-content" class='center text_center' >            
                    <!--INTRODUCTION AREA-->
        <section>
            <div id="intro" class=" fullwidth div_center" >
                <Br/><br/><br/><br/><br/><br/>
                <p class="homepage-headers left"><img  src='<?php echo base_url();?>assets/images/intro.png' class='gif-headers intro_thumbnail'> What is G-Learning ?</p>
                <div class="intro_text_container ">
                    <p class="intro_text">" G-learning is a modern project to cope up with the need of integrating computing with education 
                        and using the ultimate advantage of games pleasure to teach students their concepts.
                        This project is comprised of various interactive games which will help the student understand specific topics. Initially, the project will focus on Mathematics of grade 2.
                        Topics will be chosen from Oxford Countdown Mathematics for grade II. "
                    </p>
                </div>
            </div>
        </section>
              <br/>         
                    <!--FEATURES--> 
        <section>
             <div id="features" class="fullwidth div_center" >
             <Br/><br/><br/><br/><br/><br/>
            <p class="homepage-headers left"><img src='<?php echo base_url();?>assets/images/features_h.png' class='gif-headers features_thumbnail'> What Makes It Useful ?
            <div id="features_list">
                <ul>
                     <li>
                        <div>
                            <img width="100" height="100" src="<?php echo base_url(); ?>/assets/images/techf" alt="Picture">
                        </div>
                        <div>
                            <h3> Using the right technology</h3>
                            <p>Detail of the featureDetail of the featureDetail of the featureDetail of the featureDetail of the featureDetail of the featureDetail of the featureDetail of the featureatureDetail of the featureDetail of the featureDetail of the featureDetail of the featureDetail of the featureDetail of the featureDetail of the feature</p>
                        </div>
                    </li>
                     <li>
                        <div>
                            <img width="100" height="100" src="<?php echo base_url(); ?>/assets/images/wwwf.png" alt="Picture">
                        </div>
                        <div>
                            <h3> Worldwide access</h3>
                            <p>Detail of the feature</p>
                        </div>
                    </li>
                     <li>
                        <div>
                            <img width="100" height="100" src="<?php echo base_url(); ?>/assets/images/gamesf.png" alt="Picture">
                        </div>
                        <div>
                            <h3>Interactive Games</h3>
                            <p>Detail of the feature</p>
                        </div>
                    </li>
                     <li>
                        <div>
                            <img width="100" height="100" src="<?php echo base_url(); ?>/assets/images/testf.png" alt="Picture">
                        </div>
                        <div>
                            <h3>In game response to student </h3>
                            <p>Detail of the feature</p>
                        </div>
                    </li>
                    <li>
                        <div>
                            <img width="100" height="100" src="<?php echo base_url(); ?>/assets/images/reportsf.png" alt="Picture">
                        </div>
                        <div>
                            <h3>Detailed Progress reports and global standings</h3>
                            <p>Detail of the feature</p>
                        </div>
                    </li>
                </ul>
           </div>
        </div>           
        </section>          
                <!--  TEAM CONTAINER !-->
        <section>
             <div id="team-info" class='fullwidth div_center'>
            <Br/><br/><br/><br/><br/><br/>
            <p class='homepage-headers left'><img src='<?php echo base_url();?>assets/images/23.png' class='gif-headers team_thumbnail'> Our Team</p>
        <ul class='team center' id="team_thumbnails">
            
            <li>
                <h2>Zain Malik</h2>
              <a href="#">
                <img id="team21" src='<?php echo base_url();?>assets/images/zain1.png' class='portfolio_pic'/>
              
              </a>
            </li>
             <li>
                 <h2>Adil Sarwar</h2>
              <a href="#">
                <img id="team11" src='<?php echo base_url();?>assets/images/adi1.png' class='portfolio_pic'/>
              
              </a>
            </li>
            <li>
                <h2>Haider Rasool</h2>
              <a href="#">
                <img id="team31" src='<?php echo base_url();?>assets/images/haider1.png' class='portfolio_pic'/>
              
              </a>
            </li>
            <li>
                <h2>Talha Naveed</h2>
              <a href="#">
                <img id="team41" src='<?php echo base_url();?>assets/images/talha1.png' class='portfolio_pic'/>
              
              </a>
            </li>
        </ul>
            
        </div>
        </section>
                <!--CONTACT US FORM-->
        <section>
            <div id="contactus" class='fullwidth div_center'>
                <Br/><br/><br/><br/><br/><br/>
                <p class='homepage-headers left'><img src='<?php echo base_url();?>assets/images/contactus_thumb.png' class='gif-headers contactus_thumbnail'> Need Our help ?</p>
                <div class="container">
                    <div class="row">
                  <div class="col-md-12">
                    <div id="contact_feedback_success" class="alert alert-success "><strong><span class="glyphicon glyphicon-send"></span> Message sent Successfully.</strong></div>	  
                    <div id="contact_feedback_error" class="alert alert-danger"><span class="glyphicon glyphicon-alert"></span><strong> Error! Please check the inputs.</strong></div>
                  </div>
                  <form role="form" action="" method="post" >
                    <div class="col-lg-6 col-md-push-1">

                      <div class="form-group">
                        <label for="InputName">Your Name</label>
                        <div class="input-group">
                          <input type="text" class="form-control" name="InputName" id="InputName" placeholder="Enter Name" required>
                          <span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span></div>
                      </div>
                      <div class="form-group">
                        <label for="InputEmail">Your Email</label>
                        <div class="input-group">
                          <input type="email" class="form-control" id="InputEmail" name="InputEmail" placeholder="Enter Email" required  >
                          <span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span></div>
                      </div>
                      <div class="form-group">
                        <label for="InputMessage">Message</label>
                        <div class="input-group">
                          <textarea name="InputMessage" id="InputMessage" class="form-control" rows="5" required></textarea>
                          <span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span></div>
                      </div>

                      <input type="submit" name="submit" id="submit" value="Submit" class="btn btn-info pull-right">
                    </div>
                  </form>
                  <hr class="featurette-divider hidden-lg">
                  <div class="col-lg-5 col-md-push-1">
                    <address>
                    <h3 class="office_info_heading"> </h3>
                    <p class="lead"><a href="#">    <br>
                     Email : support@glearning.com</p>
                    </address>
                  </div>
                </div>
                </div>
                <br/><br/><br/><br/><br/><br/><br/><br/>
            </div>  
        </section>
    </div>
</div>
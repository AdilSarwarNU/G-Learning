<script>
    $(document).ready(function(){
    $('#team12').slideUp();
    $('#team22').slideUp();
    $('#team32').slideUp();
    $('#team42').slideUp();
    
    $('#team li').hover(function(){
        alert("HEHE");
    },function(){
        
    });
    });
    </script>
<div class="student_dashboard_body center">
    
    <div id="homepage-content" class='top-border center'>
                
                    <!--INTRODUCTION AREA-->
        <div id="intro" >
            <p class="homepage-headers left"><img  src='<?php echo base_url();?>assets/images/intro.png' class='gif-headers intro_thumbnail'> What is G-Learning ?
        </div>
                    
                    <!--FEATURES--> 
         <div id="features" >
            <p class="homepage-headers left"><img src='<?php echo base_url();?>assets/images/features_h.png' class='gif-headers features_thumbnail'> Features
        </div>           
                    
                    
        
                <!--  TEAM CONTAINER !-->
        <div id="team-info" class='top-border '>
            <p class='homepage-headers left'><img src='<?php echo base_url();?>assets/images/23.gif' class='gif-headers team_thumbnail'> Our Team</p>
        <ul class='team center' id="team_thumbnails">
            <li>
              <a href="#">
                <h2>Adil Sarwar</h2>
               
                <img id="team11" src='<?php echo base_url();?>assets/images/adi1.png' class='portfolio_pic'/>
                <img id="team12" src='<?php echo base_url();?>assets/images/adi2.png' class='portfolio_pic'/>
              </a>
            </li>
            <li>
              <a href="#">
                <h2>Zain Malik</h2>
                <img id="team21" src='<?php echo base_url();?>assets/images/zain1.png' class='portfolio_pic'/>
                <img id="team22" src='<?php echo base_url();?>assets/images/zain2.png' class='portfolio_pic'/>
              </a>
            </li>
            <li>
              <a href="#">
                <h2>Haider Rasool</h2>
               
                <img id="team31" src='<?php echo base_url();?>assets/images/haider1.png' class='portfolio_pic'/>
                <img id="team32" src='<?php echo base_url();?>assets/images/haider2.png' class='portfolio_pic'/>
              </a>
            </li>
            <li>
              <a href="#">
                <h2>Talha Naveed</h2>
               
                <img id="team41" src='<?php echo base_url();?>assets/images/talha1.png' class='portfolio_pic'/>
                <img id="team42" src='<?php echo base_url();?>assets/images/talha2.png' class='portfolio_pic'/>
              </a>
            </li>
    </ul>
        </div>

    </div>
</div>
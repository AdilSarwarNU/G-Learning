<script>
    function validatePassword()
    {
        var password = document.getElementById('password').value;
        if(password == "")
        {
            $('#js-error-block-message').text("Please Enter Password");
            $('#js-error-block').show();
            setTimeout(function(){
                $('#js-error-block').fadeTo("slow",1.0);
            }, 500);

            setTimeout(function(){
                $('#js-error-block').fadeTo("slow",0.0);
                $('#js-error-block').hide();
            }, 2500);
            return false;
        }
        else
            return true;
    }
</script>    

<div class="main_container_general">
    <div class="main_heading_general">
        <label>Admin Portal</label>
    </div>
    
    <div class="mid_content_general">
        <div class="right_nav_general">
            <div id="right_nav_general">
                <a href='<?php echo base_url();?>admin/student'>
                    <div class="nav_element_top nav_element_default">
                        <label>Student</label>
                    </div>
                </a>
                <a href='<?php echo base_url();?>admin/teacher'>
                    <div class="nav_element">
                        <label>Teacher</label>
                    </div>
                </a>
                <a href='#'>
                    <div class="nav_element_bottom">
                        <label>Password Requests</label>
                    </div>
                </a>
            </div>
            <div id="right_nav_general_anim">
                <div class="right_nav_anim">
                    <label>Menu</label>
                </div>
            </div>
        </div>
        
        <div class="error-div-failure" id="js-error-block">
            <div class="failure" id="js-error-block-message"></div>
        </div>
        
        <?php if(!$this->session->userdata('errorFlag') && $this->session->userdata('errorMessage'))
            {?>
        <div class="error-div-failure">
            <div class="failure"> 
                <?php echo $this->session->userdata('errorMessage');?> 
                <script>
                    setTimeout(function(){
                        $('.failure').fadeTo("slow",1.0);
                    }, 500);

                    setTimeout(function(){
                        $('.failure').fadeOut("slow");
                        $('.error-div-failure').hide();
                    }, 3000);
                </script>
            </div>
        </div>
        <?php }else if($this->session->userdata('errorFlag') && $this->session->userdata('errorMessage')){?>
        <div class="error-div-success">
            <div class="success"> 
                <?php echo $this->session->userdata('errorMessage');?> 
                <script>
                    setTimeout(function(){
                        $('.success').fadeTo("slow",1.0);
                    }, 500);

                    setTimeout(function(){
                        $('.success').fadeOut("slow");
                        $('.error-div-success').hide();
                    }, 3000);
                </script>
            </div>
        </div>
        <?php }?>
        
        <div class='password_request_container'>
            <div class='password_request_body'>
                <div class='password_request_heading'>
                    <label>Password Requests</label>
                </div>
                <?php if($result_count == 0){?>
                    <div class="password-note">
                        <label>No Requests</label>
                    </div>
                <?php } ?>
                <div class="scroll_content mCustomScrollbar">
                    <div class='password_request_row_container'>
                        <?php for($i= $result_count-1; $i >= 0; $i--){?>
                        <div class='password_request_row'>
                            <div class="password_request_date"><label><?php echo date('d-m-Y',strtotime($result['date'.$i])); ?></label></div>
                            <div class="password_request_note"><label><span><?php echo $result['username'.$i]; ?>:</span> Please update my password</label></div>
                            <form method="post" action="<?php echo base_url(); ?>admin/updatePassword" onsubmit="return validatePassword();">
                                <div class="password_request_input">
                                    <span>
                                        New Password: 
                                        <input type="password" name="password" placeholder="Enter New Password" id="password"/>
                                        <input type="hidden" name="username" value="<?php echo $result['username'.$i]; ?>"/>
                                    </span>
                                </div>
                                <div class="password_request_buttons">
                                    <input type="submit" value="Change Password"/>
                                    <br/>
                                    <a href="<?php echo base_url();?>admin/deleteRequest?requestID=<?php echo $result['request_id'.$i]; ?>" style="text-decoration: none;"><input type="button" value="Delete Request"/></a>
                                </div>
                            </form>
                        </div>
                        <?php }?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(function() {
        $("body").click(function(e) {
            if (e.target.id == "right_nav_general" || $(e.target).parents("#right_nav_general").size()) { 

            } 
            else if (e.target.id == "right_nav_general_anim" || $(e.target).parents("#right_nav_general_anim").size())
            {}
            else { 
                $('#right_nav_general_anim').show();
                $('#right_nav_general').hide();
            }
        });
    })
    $(document).ready(function() {
        $('#right_nav_general_anim').click(function(){
            $('#right_nav_general_anim').hide();
            $('#right_nav_general').show();
        }); 
    });   
</script>
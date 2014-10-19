<html>
<head>
    <title>G-Learning | Login</title>
     <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/login.css" type="text/css">
     <script src="<?php echo base_url();?>/assets/js/jquery.min.js"></script>
</head>
<body>
    <script>
    $( document ).ready(function() {
          $('.tool-tip-right-container').toggle();
    $('.tool-tip-right-bottom-container').toggle();
   
});
    </script>


<div class="login-page-container">

  
            <div class="tool-tip-right-container">

                <div class="tool-tip-right">
                    <img src="<?php echo base_url();?>/assets/images/tooltip.png" alt="Superman" />
                    <span>Enter the e-mail ID given to you by your teacher.</span>
                </div>


            </div>

            <div class="tool-tip-right-bottom-container">

                <div class="tool-tip-right-bottom">
                    <img src="<?php echo base_url();?>/assets/images/tooltip-green-r.png" alt="Superman" />
                    <span>Enter the password given to you by your teacher.</span>
                </div>


            </div>
      
            <div id="login-box-wrapper">
                <div class="logo"></div>

                
            <p class="welcome">Welcome. Please login.</p>

            
            <form method="post" action="<?php echo base_url();?>home/student_dashboard">

                <div class="form-field">
                    <div class="field">
                        <input type="email" name="username"  id="username" value="Email" onfocus="if (this.value == 'Email') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Email';}">
                    </div>
                </div>
                <div class="form-field">
                    <div class="field">
                        <input type="password" name="password"  id="password" placeholder="Password" onfocus="if (this.value == '') {this.placeholder = '';}" onblur="if (this.value == '') {this.placeholder = 'Password';}">
                    </div>
                </div>
                <div class="form-field">
                    <div class="field">
                        <button type="submit">SIGN IN</button>
                    </div>
                </div>
              
            
            </form>
            <div class="tip-button">
                <button onclick="showTips()">How?</button>
            </div>
              <div class="login-links">
                      <p><a href="#">Privacy Policy&nbsp</a> | <a href="#" >User Agreement &nbsp</a> | <a href="#">Contact Us</a></p>    
                    
                </div>
            </div>
    

</div>
<script>
function showTips()
{
    $('.tool-tip-right-container').toggle();
    $('.tool-tip-right-bottom-container').toggle();
}
</script>

</body>
</html>
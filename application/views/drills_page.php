<div class="student_dashboard_body">
    <div class="drills-content">
        <div class="leftpane">
            <label>Topics</label>
            <div class="topicsbox">
                <input type="radio" checked="checked" name="topic"/> Even / Odd<br/>
                <input type="radio" name="topic"/> Arithmatic<br/>
                <input type="radio" name="topic"/> Shapes<br/>
                <input type="radio" name="topic"/> Equations <br/>
                <input type="radio" name="topic"/> Multiplication <br/>
                <input type="radio" name="topic"/> Addition
            </div>
        </div>

        <div class="rightpane">
            <label>Games</label>
            <div class="gamebox">
                <div class="gamerow">
                    <div class="gamecontainer">
                        <a href="<?php echo base_url();?>home/playcatchy"><img src="<?php echo base_url();?>assets/images/catchy.png" /></a>
                        <div class="gamelabel">
                            <label>Hello</label>
                        </div>
                    </div>
                    <div class="gamecontainer">
                        <a href="#"><img class="gameImg2" src="<?php echo base_url();?>assets/images/superman.png" /></a>
                        <div class="gamelabel">
                            <label>Hello</label>
                        </div>
                    </div>
                </div>
                <div class="gamerow">
                    <div class="gamecontainer">
                        <a href="#"><img class="gameImg2" src="<?php echo base_url();?>assets/images/superman.png" /></a>
                        <div class="gamelabel">
                            <label>Hello</label>
                        </div>
                    </div>
                    <div class="gamecontainer">
                        <a href="#"><img class="gameImg2" src="<?php echo base_url();?>assets/images/superman.png" /></a>
                        <div class="gamelabel">
                            <label>Hello</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="goback_fixed_button">
            <a href="<?php echo base_url();?>home/student_dashboard">
                <div class="goback_fixed_button">
                    <img src="<?php echo base_url();?>/assets/images/back.png" alt="back" />
                </div>
            </a>
        </div>
    </div>
</div>
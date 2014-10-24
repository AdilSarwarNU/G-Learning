<div class="student_dashboard_body">
    <div class="drills-content">
        <div class="leftpane">
            <div class="topicsbox">
                <div class="topicsBoxLabel">
                    <label>Topics</label>
                </div>
                <div id="radioButtons">
                    <input type="radio" checked="checked" name="topic"/> <span>Even / Odd</span><br/>
                    <input type="radio" name="topic"/> <span>Arithmatic</span><br/>
                    <input type="radio" name="topic"/> <span>Shapes</span><br/>
                    <input type="radio" name="topic"/> <span>Equations</span> <br/>
                    <input type="radio" name="topic"/> <span>Multiplication</span> <br/>
                    <input type="radio" name="topic"/> <span>Addition</span>
                </div>
            </div>
        </div>

        <div class="rightpane">
            <div class="gamebox">
                <div class="game_row">
                    <img src="<?php echo base_url();?>assets/images/G-Learn.png"/>
                    <div class="game_row_labels">
                        <label>Catchy</label>
                        <label class="game_row_labels_description">It is a kind of catching apples game</label>
                    </div>
                </div>
                <div class="game_row">
                    <img src="<?php echo base_url();?>assets/images/G-Learn.png"/>
                    <div class="game_row_labels">
                        <label>Catchy</label>
                        <label class="game_row_labels_description">It is a kind of catching apples game</label>
                    </div>
                </div>
                <div class="game_row">
                    <img src="<?php echo base_url();?>assets/images/G-Learn.png"/>
                    <div class="game_row_labels">
                        <label>Catchy</label>
                        <label class="game_row_labels_description">It is a kind of catching apples game</label>
                    </div>
                </div>
            </div>
        </div>
        <div class="goback_fixed_button">
            <a href="<?php echo base_url();?>home/student_dashboard">
                <img src="<?php echo base_url();?>/assets/images/back.png" alt="back" />
            </a>
        </div>
    </div>
</div>
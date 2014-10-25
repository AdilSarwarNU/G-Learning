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
            <div class="goback_fixed_button">
                <a href="<?php echo base_url();?>home/student_dashboard">
                    <img src="<?php echo base_url();?>/assets/images/back.png" alt="back" />
                </a>
            </div>
        </div>

        <div class="rightpane">
            <div class="gamebox">
                <a href="<?php echo base_url();?>games/play_cachy_even_odd">
                    <div class="game_row">
                        <img src="<?php echo base_url();?>assets/images/catchy-tile.png"/>
                        <div class="game_row_labels">
                            <label>Catchy</label>
                            <label class="game_row_labels_description">Teaches the concept of Even / Odd numbers</label>
                        </div>
                    </div>
                </a>
                <a href="<?php echo base_url();?>games/balloon_party">
                    <div class="game_row">
                        <img src="<?php echo base_url();?>assets/images/BalloonParty_tile.png"/>
                        <div class="game_row_labels">
                            <label>Balloon Party</label>
                            <label class="game_row_labels_description">Teaches the concept of Highest / Lowest numbers</label>
                        </div>
                    </div>
                </a>
                <a href="<?php echo base_url();?>games/play_cachy_multiples_of_5">
                    <div class="game_row">
                        <img src="<?php echo base_url();?>assets/images/catchy-tile-2.png"/>
                        <div class="game_row_labels">
                            <label>Catchy</label>
                            <label class="game_row_labels_description">Teaches the concept of multiples of a number</label>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
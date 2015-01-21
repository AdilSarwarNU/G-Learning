

<div class="main_container_general">
 
    <div class="top_container_teacher" style="height:420px ;background-color: #9BBA1F;">
        <div class="left_heading_half">
          <span class="span_left_heading">
          <br>
          <h1> Welcome! </h1>
          <br><br>
          <h2> - Our Teachers are our treasure - </h2>
          <br><br>
          <text> Teachers are the ones who can change the mentality of a nation. Lets work together to make Pakistan a better place :) </text>
          </span>
        </div>
        <div class="right_heading_half">
             <img src="<?php echo base_url();?>assets/images/teacher_header.png"/>
        </div>
    </div>
    <div class="start_work_teacher">
<!--        href="#workstation"-->
        <button onclick="return start_work_click();" class="btn_teacher">Start Working</button>
    </div>
    <div class="mid_content_teacher" id="workstation" >
        <div class="teacher_mid_left">
            <div id="add_assessment" class="teacher_option_tab" onclick="return AddAssessment();">
                <Label>Add Assessment</Label>
            </div>
            <div id="edit_assessment" class="teacher_option_tab" onclick="return EditAssessment();">
                <Label>Edit Assessment</Label>
            </div>
            <div id="delete_assessment" class="teacher_option_tab" onclick="return DeleteAssessment();">
                <Label>Delete Assessment</Label>
            </div>
            <div id="view_students" class="teacher_option_tab" onclick="return ViewStudents();">
                <Label>View Students</Label>
            </div>
        </div>
        <div class="teacher_mid_right" id="teacher_mid_right">
            <div id="no_option_seleted" class="no_option_seleted">
                <label> Select an Option from the left in order to start work!</label>
            </div>
            <div  class="add_assessment_div" id="add_assessment_div">
                <div class="heading_teacher">
                    <h1>Add Assessment</h1>
                </div>
                <!--type="submit" enctype="multipart/form-data" -->
               <form id="add_assessment_form" name="add_assessment_form" method="POST" action= "<?php echo base_url();?>DataEntry/add_assessment">
                   
                   <!--hidden field-->
                   <input type="hidden" name="Add_hiddenfield" id="Add_hiddenfield" value="0" />
                   
                    <div class="labelandtextbox">
                        <label>Assessment Name:</label>
                        <input type="text" name="AddAssessment_name" value="" id="AddAssessment_name" maxlength="20" placeholder="Enter Assessment Name" required="required">
                    </div>
                    <div class="subheading_teacher">
                        <h1>Questions:</h1>
                    </div>
                   <div class="questions_wrapper">
<!--                       
                        <div class="add_question_teacher">
                            <div class="question_leftside">
                                <h1>    <?php //echo ++$question_number; ?>    :</h1>
                                <textarea draggable="false" name="question_1" id="question_1" rows="5" required="required" placeholder="Write your question here..."></textarea>
                            </div>
                            <div class="question_rightside">
                                <input type="text" name="CorrectOption1_1" value="" id="CorrectOption1_1" maxlength="20" placeholder="Correct Option" required="required" class="correctoption">
                                <input type="text" name="QuestionOption2_1" value="" id="QuestionOption2_1" maxlength="20" placeholder="Wrong Option" required="required">
                                <input type="text" name="QuestionOption3_1" value="" id="QuestionOption3_1" maxlength="20" placeholder="Wrong Option" required="required">
                                <input type="text" name="QuestionOption4_1" value="" id="QuestionOption4_1" maxlength="20" placeholder="Wrong Option" required="required">
                            </div>
                        </div>
                       -->
                       
                    </div>
                    <div class="Add_another_question_tab">
                        <button id="add_question_button" type="button" onclick=" return addassess_addquestion();">Add Another Question</button>
                        <label id="question_limit">Question Limit Reached</label>
                    </div>
                    <div id="submit_button" class="submit_button_teacher">
                        <input type="submit" value='Upload Assessment' >
                    </div>
                </form>
            </div>
            <div id="edit_assessment_div" class="edit_assessment_div">
                <div class="heading_teacher">
                    <h1>Edit Assessment</h1>
                </div>
                <form id="edit_assessment_form" name="edit_assessment_form" method="POST" action="<?php echo base_url();?>/G-Learning/DataEntry/add_assessment">
                    <div class="labelandtextbox">
                        <label>Search Assessment:</label>
                        <input type="text" name="EditAssessment_name" value="" id="EditAssessment_name" maxlength="20" placeholder="Enter Assessment Name" required="required">
                    </div>
                    <div class="submit_button_teacher">
                        <input type="submit" value='Search Assessment'>
                    </div>
                </form>
            </div>
            <div id="delete_assessment_div" class="delete_assessment_div">
                <div class="heading_teacher">
                    <h1>Delete Assessment</h1>
                </div>
                <form id="delete_assessment_form" name="delete_assessment_form" method="POST" action= "<?php echo base_url();?>DataEntry/delete_assessment">
                    <div class="labelandtextbox">
                        <label>Assessment Name:</label>
                        <input type="text" name="DeleteAssessment_name" value="" id="DeleteAssessment_name" maxlength="20" placeholder="Enter Assessment Name" required="required">
                    </div>
                    <div class="submit_button_teacher">
                        <input type="submit" value='Delete Assessment'>
                    </div>
                    
                </form>
            </div>
            
            <div id="view_students_div" class="view_students_div">
                <div class="heading_teacher">
                    <h1>Viewing Students</h1>
                </div>
                <form id="view_student_form" name="view_student_form" method="POST" action= "<?php echo base_url();?>DataEntry/view_student">
                
                    <div class="submit_button_teacher">
                        <input type="submit" value='Fetch Students'>
                    </div>
                </form>
                <div class="view_result_container">
                    <div class="student_view_tab">
                        <div class="student_block">
                            <h1>Ranking</h1>
                        </div>
                        <div class="student_block">
                            <h1>Name</h1>
                        </div>
                        <div class="student_block">
                            <h1>Contact #</h1>
                        </div>
                        <div class="student_block">
                            <h1>Score</h1>
                        </div>
                    </div>
                    <?php if(scroll_to_div== "view_student") 
                        for($i=0 ;$i<no_of_students;$i++)
                            { ?>
                            <div class="student_view_tab">
                                <div class="student_block">
                                    <label><?php Rank.$i ?><label>
                                </div>
                                <div class="student_block">
                                    <label><?php student_name.$i ?><label>
                                </div>
                                <div class="student_block">
                                    <label><?php student_contact.$i ?><label>
                                </div>
                                <div class="student_block">
                                    <label><?php score.$i ?><label>
                                </div>
                            </div>
                    
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
    
</div>

<script type="text/javascript">
    var question_number;    //teep track of no. of questions in add_assessment div
    var question_limit =5;  //limit on no. of questions in add_assessment div
    
    function codeAddress() //runs every time on page load
    {
        question_number=0;
        $("#add_assessment_div").hide();
        $("#edit_assessment_div").hide();
        $("#delete_assessment_div").hide();
        $("#view_students_div").hide();
        addassess_addquestion();
        <?php if($scroll_to_div != "start"){ ?>
                start_work_click();
        <?php }?>
        return true;
    }
    window.onload = codeAddress;    //runs on start
    
    function start_work_click()
    {
        $('html,body').animate({
        scrollTop: $(".mid_content_teacher").offset().top},
        'slow');
        return true;
    }
    
    function unselect_alltabs()
    {
        $("#add_assessment").removeClass().addClass("teacher_option_tab");
        $("#edit_assessment").removeClass().addClass("teacher_option_tab");
        $("#delete_assessment").removeClass().addClass("teacher_option_tab");
        $("#view_students").removeClass().addClass("teacher_option_tab");
        return true;
    }
    function hide_alldivs()
    {
        $("#no_option_seleted").hide();
        $("#add_assessment_div").hide();
        $("#edit_assessment_div").hide();
        $("#delete_assessment_div").hide();
        $("#view_students_div").hide();
        return true;
    }
    function AddAssessment()
    {
        unselect_alltabs();
        $("#add_assessment").addClass("teacher_option_tab_selected").removeClass("teacher_option_tab");
        hide_alldivs();
        $("#add_assessment_div").show();
        return true;
    }
    function EditAssessment()
    {
        unselect_alltabs();
        $("#edit_assessment").addClass("teacher_option_tab_selected").removeClass("teacher_option_tab");
        hide_alldivs();
        $("#edit_assessment_div").show();
        return true;
    }
    function DeleteAssessment()
    {
        unselect_alltabs();
        $("#delete_assessment").addClass("teacher_option_tab_selected").removeClass("teacher_option_tab");
        hide_alldivs();
        $("#delete_assessment_div").show();
        return true;
    }
    function ViewStudents()
    {
        unselect_alltabs();
        $("#view_students").addClass("teacher_option_tab_selected").removeClass("teacher_option_tab");
        hide_alldivs();
        $("#view_students_div").show();
        return true;
    }
    function addassess_addquestion()
    {
        if(question_number<question_limit)
        {
            if(question_number!==0)  //scroll inside
                submit_button_teacher();
        
            var i= ++question_number ;
            var element = document.getElementById("Add_hiddenfield");
            element.value = ""+i+"";
            var wrapper = $(".questions_wrapper");
            //to remove a row you can place a cross button with all questions
            $(wrapper).append('<div class="add_question_teacher"><div class="question_leftside"><h1>'+i+':</h1><textarea draggable="false" name="question_'+i+'" id="question_'+i+'" rows="5" required="required" placeholder="Write your question here..."></textarea></div><div class="question_rightside"><input type="text" name="CorrectOption1_'+i+'" value="" id="CorrectOption1_'+i+'" maxlength="20" placeholder="Correct Option" required="required" class="correctoption"><input type="text" name="QuestionOption2_'+i+'" value="" id="QuestionOption2_'+i+'" maxlength="20" placeholder="Wrong Option 1" required="required"><input type="text" name="QuestionOption3_'+i+'" value="" id="QuestionOption3_'+i+'" maxlength="20" placeholder="Wrong Option 2" required="required"><input type="text" name="QuestionOption4_'+i+'" value="" id="QuestionOption4_'+i+'" maxlength="20" placeholder="Wrong Option 3" required="required"></div></div>');
            if(question_number==question_limit)
            {
                var element = document.getElementById("question_limit");
                element.style.visibility="visible";
                var element = document.getElementById("add_question_button");
                element.style.visibility="hidden";
            }
            return true;   //to cancel submission of form
        }else{
            return false;
        }
    }
    function submit_button_teacher() //scroll inside add_assessment
    {
        $('#teacher_mid_right').animate({
            scrollTop: $("#submit_button").offset().top
        }, 'slow');
        return true;
    }
    
    
</script>


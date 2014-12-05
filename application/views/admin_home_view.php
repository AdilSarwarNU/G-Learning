<script>
    $(document).ready(function(){
        $('#searchStudentForm').on('submit',function(e) {
        var query = document.getElementById('Searchusername').value;
        var baseurl = "<?php print base_url(); ?>";
        $.ajax({
            url:  baseurl +"/admin/searchStudent",
            type:'POST',
            cache:false,
            dataType: 'html',
            data: { query : query },
            success:function(data){
                if(data === "success")
                {
                    $('#edit_main_form').show();
                    $('#delete_button').show();
                }
                else
                {
                    $('#edit_main_form').hide();
                    $('#js-error-block-message').text("Username Not Found");
                    $('#js-error-block').show();
                    setTimeout(function(){
                        $('#js-error-block').fadeTo("slow",1.0);
                    }, 500);
                    
                    setTimeout(function(){
                        $('#js-error-block').fadeTo("slow",0.0);
                        $('#js-error-block').hide();
                    }, 2500);
                }
            },
            error:function(x,e){
            }
        });
        e.preventDefault(); //=== To Avoid Page Refresh and Fire the Event "Click"===
        });
    });
</script>


<div class="main_container_general">
    <div class="main_heading_general">
        <label>Admin Portal</label>
    </div>
    
    <div class="mid_content_general">
        <div class="right_nav_general">
            <div id="right_nav_general">
                <a href='#'>
                    <div class="nav_element_top nav_element_default">
                        <label>Student</label>
                    </div>
                </a>
                <a href='<?php echo base_url();?>admin/teacher'>
                    <div class="nav_element">
                        <label>Teacher</label>
                    </div>
                </a>
                <a href='<?php echo base_url();?>admin/passwordRequests'>
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
        
        <div class="top_tabs_general">
            <div class="top_tabs_element_default" onclick="return AddStudent();" id="add_student_class">
                <div class="top_tabs_inside_default" id="add_student_inside_class">
                    <label>Add Student</label>
                </div>
            </div>
            <div class="top_tabs_element" onclick="return EditStudent();" id="edit_student_class">
                <div class="top_tabs_inside" id="edit_student_inside_class">
                    <label>Edit Student</label>
                </div>
            </div>
            <div class="top_tabs_element" onclick="return DeleteStudent();" id="delete_student_class">
                <div class="top_tabs_inside" id="delete_student_inside_class">
                    <label>Delete Student</label>
                </div>
            </div>
        </div>
        
        <div class="error-div-failure" id="js-error-block">
            <div class="failure" id="js-error-block-message"></div>
        </div>
        
        <?php if(!$this->session->userdata('errorFlag') && $this->session->userdata('errorMessage')){?>
        <div class="error-div-failure">
            <div class="failure"> <?php echo $this->session->userdata('errorMessage');?> </div>
            <script>
                setTimeout(function(){
                    $('.error-div').fadeTo("slow",1.0);
                }, 500);
                
                setTimeout(function(){
                    $('.error-div').fadeOut("slow");
                }, 4000);
            </script>
        </div>
        <?php }else if($this->session->userdata('errorFlag') && $this->session->userdata('errorMessage')){?>
        <div class="error-div-success">
            <div class="success"> <?php echo $this->session->userdata('errorMessage');?> </div>
            <script>
                setTimeout(function(){
                    $('.error-div').fadeTo("slow",1.0);
                }, 500);
                
                setTimeout(function(){
                    $('.error-div').fadeOut("slow");
                }, 4000);
            </script>
        </div>
        <?php }?>
        
        <div class="mid_forms_general">
            <div class="mid_forms_body">
                <div id="add_student">
                    <div class="forms_heading">
                        <label>Add Student</label>
                    </div>
                </div>
                <div id="edit_student">
                    <div class="forms_heading">
                        <label>Edit Student</label>
                    </div>
                </div>
                <div id="delete_student">
                    <div class="forms_heading">
                        <label>Delete Student</label>
                    </div>
                </div>
                
                <div class="search_general" id="search_general_edit">
                    <form id ="searchStudentForm" type="submit">
                        <table>
                            <tr>
                                <td  class="inputField" >Username:</td>
                                <td class="input">
                                      <div class="fieldgroup">
                                        <input type="text" name="Searchusername" value="" id="Searchusername" maxlength="20" placeholder="Enter Username">
                                      </div>
                                </td>
                            </tr>
                            <tr>
                                <td  class="inputField" ></td>
                                <td class="input">
                                      <div class="fieldgroup">
                                        <input type="submit" value='Search Student' onclick="searchStudent();"><br/><br/>
                                      </div>
                                </td>
                            </tr>
                        </table>
                    </form>
                </div>
                
                <div id="main_form">
                    <form type="submit" method="POST" action="<?php echo base_url()?>admin/addStudent">
                        <table>
                            <tr>
                                <td  class="inputField" >School:</td>
                                <td class="input">
                                    <div class="fieldgroup">
                                        <select name="school">
                                            <option value="Educators">Educators</option>
                                            <option value="BeaconHouse">BeaconHouse</option>
                                        </select>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td  class="inputField" >First Name:</td>
                                <td class="input">
                                      <div class="fieldgroup">
                                        <input type="text" name="firstName" value="" id="firstName" maxlength="20" placeholder="Enter First Name">
                                      </div>
                                </td>
                            </tr>
                            <tr>
                                <td  class="inputField" >Last Name:</td>
                                <td class="input">
                                      <div class="fieldgroup">
                                        <input type="text" name="lastName" value="" id="lastName" maxlength="40" placeholder="Enter Last Name">
                                      </div>
                                </td>
                            </tr>
                            <tr>
                                <td  class="inputField" >Home Address:</td>
                                <td class="input">
                                      <div class="fieldgroup">
                                        <input type="text" name="HomeAddress" id="HomeAddress" maxlength="128" placeholder="Enter Home Address">
                                      </div>
                                </td>
                            </tr>
                            <tr>
                                <td  class="inputField" >Email Address:</td>
                                <td class="input">
                                      <div class="fieldgroup">
                                        <input type="email" name="email" id="email" maxlength="128" placeholder="Enter Email Address">
                                      </div>
                                </td>
                            </tr>
                            <tr>
                                <td  class="inputField" >Username:</td>
                                <td class="input">
                                      <div class="fieldgroup">
                                        <input type="text" name="username" id="username" maxlength="120" placeholder="Enter Username">
                                      </div>
                                </td>
                            </tr>
                            <tr>
                                <td  class="inputField" >Password:</td>
                                <td class="input">
                                      <div class="fieldgroup">
                                        <input type="password" name="password" id="password" maxlength="128" placeholder="Enter Password">
                                      </div>
                                </td>
                            </tr>
                            <tr>
                                <td  class="inputField" >Parent Password:</td>
                                <td class="input">
                                      <div class="fieldgroup">
                                        <input type="password" name="Parentpassword" id="Parentpassword" maxlength="128" placeholder="Enter Parent Password">
                                      </div>
                                </td>
                            </tr>
                            <tr>
                                <td  class="inputField" ></td>
                                <td class="input">
                                      <div class="fieldgroup">
                                        <input type="submit" value='Submit'><br/><br/>
                                      </div>
                                </td>
                            </tr>
                        </table>
                    </form>
                </div>
                
                <div id="edit_main_form">
                    <form type="submit" method="POST" action="<?php echo base_url()?>admin/addStudent">
                        <table>
                            <tr>
                                <td  class="inputField" >School:</td>
                                <td class="input">
                                    <div class="fieldgroup">
                                        <select name="school">
                                            <option value="Educators">Educators</option>
                                            <option value="BeaconHouse">BeaconHouse</option>
                                        </select>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td  class="inputField" >First Name:</td>
                                <td class="input">
                                      <div class="fieldgroup">
                                        <input type="text" name="firstName" value="" id="firstName" maxlength="20" placeholder="Enter First Name">
                                      </div>
                                </td>
                            </tr>
                            <tr>
                                <td  class="inputField" >Last Name:</td>
                                <td class="input">
                                      <div class="fieldgroup">
                                        <input type="text" name="lastName" value="" id="lastName" maxlength="40" placeholder="Enter Last Name">
                                      </div>
                                </td>
                            </tr>
                            <tr>
                                <td  class="inputField" >Home Address:</td>
                                <td class="input">
                                      <div class="fieldgroup">
                                        <input type="text" name="HomeAddress" id="HomeAddress" maxlength="128" placeholder="Enter Home Address">
                                      </div>
                                </td>
                            </tr>
                            <tr>
                                <td  class="inputField" >Email Address:</td>
                                <td class="input">
                                      <div class="fieldgroup">
                                        <input type="email" name="email" id="email" maxlength="128" placeholder="Enter Email Address">
                                      </div>
                                </td>
                            </tr>
                            <tr>
                                <td  class="inputField" >Username:</td>
                                <td class="input">
                                      <div class="fieldgroup">
                                        <input type="text" name="username" id="username" maxlength="120" placeholder="Enter Username">
                                      </div>
                                </td>
                            </tr>
                            <tr>
                                <td  class="inputField" >Password:</td>
                                <td class="input">
                                      <div class="fieldgroup">
                                        <input type="password" name="password" id="password" maxlength="128" placeholder="Enter Password">
                                      </div>
                                </td>
                            </tr>
                            <tr>
                                <td  class="inputField" >Parent Password:</td>
                                <td class="input">
                                      <div class="fieldgroup">
                                        <input type="password" name="Parentpassword" id="Parentpassword" maxlength="128" placeholder="Enter Parent Password">
                                      </div>
                                </td>
                            </tr>
                            <tr>
                                <td  class="inputField" ></td>
                                <td class="input">
                                      <div class="fieldgroup">
                                        <input type="submit" value='Submit'>
                                        <input type="submit" value='Delete' id="delete_button"><br/><br/>
                                      </div>
                                </td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>    
        </div>
        <br/><br/>
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
    
    function AddStudent()
    {
        $("#add_student_class").addClass("top_tabs_element_default").removeClass("top_tabs_element");
        $("#add_student_inside_class").addClass("top_tabs_inside_default").removeClass("top_tabs_inside");
        
        $("#delete_student_class").addClass("top_tabs_element").removeClass('top_tabs_element_default');
        $("#delete_student_inside_class").addClass("top_tabs_inside").removeClass('top_tabs_inside_default');
        
        $("#edit_student_class").addClass("top_tabs_element").removeClass('top_tabs_element_default');
        $("#edit_student_inside_class").addClass("top_tabs_inside").removeClass('top_tabs_inside_default');
        $("#delete_student").hide();
        $("#edit_student").hide();
        $("#add_student").show();
        $("#search_general").hide();
        $("#main_form").show();
        $("#search_general_edit").hide();
        $("#edit_main_form").hide();
    }

    function EditStudent()
    {
        $("#edit_student_class").addClass("top_tabs_element_default").removeClass("top_tabs_element");
        $("#edit_student_inside_class").addClass("top_tabs_inside_default").removeClass("top_tabs_inside");
        
        $("#delete_student_class").addClass("top_tabs_element").removeClass('top_tabs_element_default');
        $("#delete_student_inside_class").addClass("top_tabs_inside").removeClass('top_tabs_inside_default');
        
        $("#add_student_class").addClass("top_tabs_element").removeClass('top_tabs_element_default');
        $("#add_student_inside_class").addClass("top_tabs_inside").removeClass('top_tabs_inside_default');
        $("#add_student").hide();
        $("#delete_student").hide();
        $("#edit_student").show();        
        $("#main_form").hide();
        $("#search_general_edit").show();
        $("#edit_main_form").hide();
    }

    function DeleteStudent()
    {
        $("#delete_student_class").addClass("top_tabs_element_default").removeClass("top_tabs_element");
        $("#delete_student_inside_class").addClass("top_tabs_inside_default").removeClass("top_tabs_inside");
        
        $("#edit_student_class").addClass("top_tabs_element").removeClass('top_tabs_element_default');
        $("#edit_student_inside_class").addClass("top_tabs_inside").removeClass('top_tabs_inside_default');
        
        $("#add_student_class").addClass("top_tabs_element").removeClass('top_tabs_element_default');
        $("#add_student_inside_class").addClass("top_tabs_inside").removeClass('top_tabs_inside_default');
        $("#add_student").hide();
        $("#edit_student").hide();
        $("#delete_student").show();
        $("#main_form").hide();
        $("#search_general_edit").show();
        $("#edit_main_form").hide();
    }
</script>
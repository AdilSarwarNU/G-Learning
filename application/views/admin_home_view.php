<script type="text/javascript">
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
        $("#search_general").show();
        $("#main_form").hide();
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
        $("#search_general").show();
        $("#main_form").hide();
    }
</script>

<div class="main_container_general">
    <div class="main_heading_general">
        <label>Admin Portal</label>
    </div>
    
    <div class="mid_content_general">
        <div class="right_nav_general">
            <div class="nav_element_default">
                <label>Student</label>
            </div>
            <div class="nav_element">
                <label>Teacher</label>
            </div>
            <div class="nav_element">
                <label>Password Requests</label>
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
                <div class="search_general" id="search_general">
                    <form type="submit" method="POST" action="#">
                        <table>
                            <tr>
                                <td  class="inputField" >Username:</td>
                                <td class="input">
                                      <div class="fieldgroup">
                                        <input type="text" name="Searchusername" value="" id="SearchfirstName" maxlength="20" placeholder="Enter Username">
                                      </div>
                                </td>
                            </tr>
                            <tr>
                                <td  class="inputField" ></td>
                                <td class="input">
                                      <div class="fieldgroup">
                                        <input type="submit" value='Search Student'>
                                      </div>
                                </td>
                            </tr>
                        </table>
                    </form>
                </div>            
                <div id="main_form">
                    <form type="submit" method="POST" action="#">
                        <table>
                            <tr>
                                <td  class="inputField" >School:</td>
                                <td class="input">
                                    <div class="fieldgroup">
                                        <select>
                                            <option>Educators</option>
                                            <option>Beaconhouse</option>
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
                                        <input type="text" name="Parentpassword" id="Parentpassword" maxlength="128" placeholder="Enter Parent Password">
                                      </div>
                                </td>
                            </tr>
                            <tr>
                                <td  class="inputField" ></td>
                                <td class="input">
                                      <div class="fieldgroup">
                                        <input type="submit" value='Submit'>
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
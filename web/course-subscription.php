<?php require_once "web/header.php"; ?>
    <form name="frmAdd" method="post" action="" id="frmAdd" onSubmit="return validate_subscription();">
        <div id="toys-grid">
            <table cellpadding="10" cellspacing="1" id="course_subscription_table">
                <thead>
                    <tr>
                        <th><strong>Student Name</strong></th>
                        <th><strong>Course Name</strong></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <select class="student_name" name="student_id[]">
                            <option value="">Select</option>
                            <?php
                            if (!empty($result_student)) {
                                foreach ($result_student as $k => $v) {
                            ?>
                                <option value="<?php echo $result_student[$k]["id"];  ?>"><?php echo $result_student[$k]["first_name"].' '.$result_student[$k]["last_name"]; ?></option>
                            <?php
                                }
                            }
                            ?>
                            </select>
                        </td>
                        <td>
                            <select class="course_name" name="course_id[]">
                            <option value="">Select</option>
                            <?php
                            if (!empty($result_course)) {
                                foreach ($result_course as $k => $v) {
                            ?>
                                <option value="<?php echo $result_course[$k]["id"];  ?>"><?php echo $result_course[$k]["course_name"]?></option>
                            <?php
                                }
                            }
                            ?>
                            </select>
                        </td>
                        <td><img class="add_row" style="cursor: pointer;height: 30px;" src="web/image/Add-Icon-PNG-715x657.png" /></td>
                    </tr>
                <tbody>
            
            </table>
            <br>
            <div id="error_text" style="color:red; text-align:center"></div>
            <div align="center">
                <input type="submit" name="add" id="btnSubmit" value="Save" />
            </div>
        </div>
    </form>
</body>
</html>

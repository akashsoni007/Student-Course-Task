<?php require_once "web/header.php"; ?>

<form name="frmAdd" method="post" action="" id="frmAdd"
    onSubmit="return validate_course();">
    <div id="mail-status"></div>
    <div>
        <label style="padding-top: 20px;">Course Name</label> <span
            id="course_name-info" class="info"></span><br /> <input type="text"
            name="course_name" id="course_name" class="demoInputBox"
            value="">
    </div>
    <div>
        <label>Course Details</label> <span id="course_detail-info"
            class="info"></span><br /> <input type="text"
            name="course_detail" id="course_detail" class="demoInputBox"
            value="">
    </div>
    <div>
        <input type="submit" name="add" id="btnSubmit" value="Save" />
    </div>
</div>
</body>
</html>
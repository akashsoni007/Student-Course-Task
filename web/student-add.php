<?php require_once "web/header.php"; ?>

<form name="frmAdd" method="post" action="" id="frmAdd"
    onSubmit="return validate_student();">
    <div id="mail-status"></div>
    <div>
        <label style="padding-top: 20px;">First Name</label> <span
            id="first_name-info" class="info"></span><br /> <input type="text"
            name="first_name" id="first_name" class="demoInputBox"
            value="">
    </div>
    <div>
        <label>Last Name</label> <span id="last_name-info"
            class="info"></span><br /> <input type="text"
            name="last_name" id="last_name" class="demoInputBox"
            value="">
    </div>
    <div>
        <label>DOB</label> <span id="dob-info" class="info"></span><br />
        <input type="date" name="dob" id="dob" class="demoInputBox"
            value="">
    </div>
    <div>
        <label>Contact No</label> <span id="contact_no-info" class="info"></span><br />
        <input type="text" name="contact_no" id="contact_no" class="demoInputBox"
            value="">
    </div>
    <div>
        <input type="submit" name="add" id="btnSubmit" value="Save" />
    </div>
    </div>
    </body>
    </html>
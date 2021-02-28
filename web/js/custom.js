$(document).ready(function(){
    validate_course = function(){
        var valid = true;   
        $(".demoInputBox").css('background-color','');
        $(".info").html('');
        
        if(!$("#course_name").val()) {
            $("#course_name-info").html("(required)");
            $("#course_name").css('background-color','#FFFFDF');
            valid = false;
        }
        if(!$("#course_detail").val()) {
            $("#course_detail-info").html("(required)");
            $("#course_detail").css('background-color','#FFFFDF');
            valid = false;
        }  
        return valid;
    }   

    validate_student= function(){
        var valid = true;   
        $(".demoInputBox").css('background-color','');
        $(".info").html('');
        
        if(!$("#first_name").val()) {
            $("#first_name-info").html("(required)");
            $("#first_name").css('background-color','#FFFFDF');
            valid = false;
        }
        if(!$("#last_name").val()) {
            $("#last_name-info").html("(required)");
            $("#last_name").css('background-color','#FFFFDF');
            valid = false;
        }
        if(!$("#dob").val()) {
            $("#dob-info").html("(required)");
            $("#dob").css('background-color','#FFFFDF');
            valid = false;
        }
        if(!$("#contact_no").val()) {
            $("#contact_no-info").html("(required)");
            $("#contact_no").css('background-color','#FFFFDF');
            valid = false;
        }   
        return valid;
    }

    validate_subscription = function(){
        var valid = true;
        $('#error_text').text('');
        $( "select" ).each(function() {
            if($(this).val() == '' || $(this).val() == undefined){
                valid = false;
                $('#error_text').text('All fields are mandatory');
            }
        });
        return valid;   
    }

    $( "#course_subscription_table tbody" ).on( "click", ".add_row", function() {
        var $tr    = $(this).closest('tr');
        var $clone = $tr.clone();
        $('.add_row').remove();
        $tr.after($clone);
    });
});
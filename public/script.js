function validationForm() {
    var name = document.registration.inputName;
    var address = document.registration.inputAddress;
    var email = document.registration.inputEmail;
    var pass = document.registration.inputPassword;
    var phone = document.registration.inputTelephon;
    var course = document.registration.courseSelect;
    var zip = document.registration.inputZipcode;

    
                        if (course_valid(course)) {
                            if (zip_valid(zip)) {
                                return true;
                            }
                        }
                    
    return false;
}


$(function() {
    
    $("#inputName").focusout(function(){
        check_name();
    });

    $("#inputPassword").focusout(function(){
        check_pass();
    });

    $("#inputTelephone").focusout(function(){
        check_telephone();
    });


    function check_name() {
        var pattern = /^[a-zA-Z]*$/;
        var name = $("#inputName").val();
        if (pattern.test(name) && name !== '') {
            $("#nameValidation").hide();
            $("#inputName").css("border-bottom", "2px solid #303030");
        } else {
            $("#nameValidation").html("Should contain only character");
            $("#nameValidation").show();
            $("#inputName").css("border-bottom", "2px solid #F90A0A");
        }
    }

    function check_pass() {
        var pass_length = $("#inputPassword").val().length;
        if (pass_length < 8) {
            $("#passwordValidation").html("At least more than 8 character and less than 16 character");
            $("#passwordValidation").show();
            $("#inputPassword").css("border-bottom", "2px solid #F90A0A");
        } else if (pass_length > 16) {
            $("#passwordValidation").html("At least more than 8 character and less than 16 character");
            $("#passwordValidation").show();
            $("#inputPassword").css("border-bottom", "2px solid #F90A0A"); 
        } else {
            $("#passwordValidation").hide();
            $("#inputPassword").css("border-bottom", "2px solid #303030");
        }
    }

    function check_telephone() {
        var pattern = /^[0-9-+]+$/;
        var telephone = $("#inputTelephone").val();
        if (pattern.test(telephone)) {
            $("#telephoneValidation").hide();
            $("#inputTelephone").css("border-bottom", "2px solid #303030");
        } else if (telephone.length < 7) {
            $("#telephoneValidation").html("At least more than 7 character");
            $("#telephoneValidation").show();
            $("#inputTelephone").css("border-bottom", "2px solid #F90A0A"); 
        } else {
            $("#telephoneValidation").html("Should contain only number");
            $("#telephoneValidation").show();
            $("#inputTelephone").css("border-bottom", "2px solid #F90A0A");
        }
    }

    jQuery('#reset').click(function(){
        $(':input','#form')
        .not(':button, :submit, :reset, :hidden')
        .val('')
        .removeAttr('checked')
        .removeAttr('selected');
    });

})
// validation script link starts here
$(document).ready(function(){
    $("#form").submit(function(e){
        e.preventDefault();
        var fname = $("#fname").val();
        var lname = $("#lname").val();
        var enroll = $("#enroll").val();
        var email = $("#email").val();
        var mobile = $("#mobile").val();
        var course = $("#course").val();
        var semester = $("#semester").val();
        var password = $("#password").val();
        var cpassword = $("#cpassword").val();
        var city = $("#city").val();
        var state = $("#state").val();
        var dob = $("#dob").val();
        var checkbox = $("#checkbox").val();

        $(".error").remove();
        if(fname. length < 3){
            $("#fname").after('<span class="error">First name must berequired.</span>')
        }
        if(lname. length < 3){
            $("#lname").after('<span class="error">Last name must be required.</span>')
        }
        if(enroll. length < 11){
            $("#enroll").after('<span class="error">Enrollmet must be at-least 11 digits.</span>')
        }
        if(email. length < 3){
            $("#email").after('<span class="error">Include at-least 1 special charactr.</span>')
        }
        if(mobile. length < 10){
            $("#mobile").after('<span class="error">Mobile-no must be at-least 10 digits.</span>')
        }
        if(course. length < 0){
            $("#course").after('<span class="error">Course must be select required</span>')
        }
        if(semester. length < 0){
            $("#semester").after('<span class="error">Semester must be select required.</span>')
        }
        if(password. length < 8){
            $("#password").after('<span class="error">Password must be at-least 8 digits.</span>')
        }
        if(cpassword. length < 8){
            $("#cpassword").after('<span class="error">Confirm password must be full fill.</span>')
        }
        if(city. length < 3){
            $("#city").after('<span class="error">City must be required fill.</span>')
        }
        if(state. length < 0){
            $("#state").after('<span class="error">State must be select required.</span>')
        }
        if(dob. length < 0){
            $("#dob").after('<span class="error">Date of birth must be fill required.</span>')
        }
        if(checkbox. length < 1){
            $("#checkbox").after('<span class="error">Please check us.</span>')
        }

    });
});
// validation script link ends here

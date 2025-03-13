<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <script src="jquery-3.7.1.js">
    </script>
    <script src="https://code.jquery.com/jquery-3.7.1.js" 
    integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
</head>
<style>
    fieldset{
        /* width: fit-content; */
        width: 30rem;
        height: fit-content;
        border-radius: 10px;
        box-sizing: border-box;
        border-color: aqua;
        background-color:whitesmoke;

    }
    body{
        padding:0 0 0 500px;
    }
    .container-box h2{
        text-align: center;
        font-size: 1.8rem;
        color: blue;
        text-decoration: underline;
    }
    .container .box-group label{
        font-size: 1.5rem;
        font-style: normal;
        color:black;
        line-height: 2.6rem;

        
    }
    .container .box-group input{
        line-height: 2.0rem;
        border-radius: 6px;
    }
    .container .box-group .input{
        width: 28rem;
        height: 3rem;
        font-size: 18px;
        border-color:cornflowerblue;
    }
    #submit{
        background-color: blue;
        color: beige;
        width: 7.3rem;
    }
    #reset{
        background-color: red;
        color: beige;
        width: 7.3rem;

    }
    #course{
        width: 15rem;
        height: 2.8rem;
        border-radius: 6px;
        border-color:cornflowerblue;


    }
    #semester{
        width: 15rem;
        height: 2.8rem;
        border-radius: 6px;
        border-color:cornflowerblue;
   
    }
    #dateofbirth{
        border-color: cornflowerblue;
        width: 15rem;
        height: 2.5rem;

    }

    .gender{
        width: 30px;
        height: 15px;

    }
    .checkbox{
        width: 30px;
        height: 15px;
    }
    #address{
        border-radius: 8px;
        border-color: blue;
    }
    .error{
        color: red;
        font-size: 18px;
    }

</style>
<body>
    <fieldset>
    <form action="Display.php" method="post">
    <div class="container-box">
    <h2>Registration Form</h2>
    <div class="container">
        <div class="row">
            <div class="box-group">
                <label>First name</label>
                <div>
                    <input type="text" name="firstname" class="input" id="fname">
                </div>
                    <label>Last name</label>
                    <div>
                        <input type="text" name="lastname" class="input" id="lname">
                    </div>
                <label>Enrollment</label>
                <div>
                    <input type="text" name="enrollment" maxlength="11" class="input" id="enroll">
                </div>
                <label>Email</label>
                <div>
                    <input type="email" name="Email" class="input" id="email">
                </div>
                <label>Password</label>
                <div>
                    <input type="password" name="password" maxlength="8" class="input" id="password">
                </div>
                <label>Mobile-no</label>
                <div>
                    <input type="mobileno" name="mobileno" maxlength="10" class="input" placeholder="+91" id="mobile">
                </div>
                <label id="course">Course</label>
                <div>
                    <select id="course" value="course" name="course">
                        <option value="Select Course" name="course">Select Course</option>
                        <option value="B.TECH" name="course">B.TECH</option>
                        <option value="BCA" name="course">BCA</option>
                        <option value="BBA" name="course">BBA</option>
                        <option value="M.TECH" name="course">M.TECH</option>
                        <option value="MBA" name="course">MBA</option>

                    </select>
                </div>
                <label id="semester">Semester</label>
                <div>
                    <select id="semester" value="semester" name="semester">
                        <option value="Select Semester" name="semester">Select Semester</option>
                        <option value="4CEA" name="semester">4CEA</option>
                        <option value="4CEB" name="semester">4CEB</option>
                        <option value="4CEC" name="semester">4CEC</option>
                        <option value="4CED" name="semester">4CED</option>
                        <option value="4ITA" name="semester">4ITA</option>
                        <option value="4ITB" name="semester">4ITB</option>
                        <option value="4ITC" name="semester">4ITC</option>
                        <option value="4ITD" name="semester">4ITD</option>
                        <option value="4ITE" name="semester">4ITE</option>
                    </select>
                </div>
                <Label id="birth">Date Of Birth</Label>
                <div>
                    <input type="date" name="dob" id="dateofbirth">
                </div>
                <label id="gender">Gender</label>
                <div>
                    <input type="radio" name="gender" value="Male" class="gender">Male
                    <input type="radio" name="gender" value="Female" class="gender">Female
                </div>
                <label id="hobbies" name="hobb[]">Hobbies</label>
                <div>

                    <input type="checkbox" class="checkbox"  value="Cricket" name="hobb[]">Cricket<br>
                    <input type="checkbox" class="checkbox" value="Bollyvall" name="hobb[]">Bollyvall<br>
                    <input type="checkbox" class="checkbox" value="Badmintan" name="hobb[]">Badmintan<br>
                    <input type="checkbox" class="checkbox" value="Tenise" name="hobb[]">Tenise<br>
                    <input type="checkbox" class="checkbox" value="Hocky" name="hobb[]">Hocky<br>
                </div>
                <label id="address">Address</label>
                <div>
                    <textarea name="address" cols="30" rows="5" id="address">
                    </textarea>
                </div>
                <div>
                    <input type="submit" name="submit" id="submit">
                    <input type="reset" name="reset" id="reset">
                </div>
            </div>
        </div>
    </div>
</div>
</form> 
</fieldset>
<script>
    $(document).ready(function(){
        $("#form").submit(function(e){
            e.preventDefault();
            var fname = $("#fname").val();
            var lname = $("#lname").val();
            var enroll = $("#enroll").val();
            var email = $("#email").val();
            var password = $("#password").val();
            var mobile = $("#mobile").val();
            var course = $("#course").val();
            var semester = $("#semester").val();
            var birth = $("#birth").val();
            var gender = $("#gender").val();
            var hobbies = $("#hobbies").val();
            var address = $("#address").val();
            $(".error").remove();
            if(fname.length < 3){
                $("#fname").after('<span class="error"><br>First name must be required.</span>');
            }
            if(lname.length < 3){
                $("#lname").after('<span class="error"><br>Last name must be required.</span>');
            }
            if(enroll.length < 11){
                $("#enroll").after('<span class="error"><br>Enrollment-No must be at-least 11 digits.</span>');
            }
            if(email.length < 12){
                $("#email").after('<span class="error"><br>Include must be at-least 1 special character.</span>');
            }
            if(password.length < 8){
                $("#password").after('<span class="error"><br>Password must be at-least 8 digits.</span>');
            }
            if(mobile.length < 10){
                $("#mobile").after('<span class="error"><br>Mobile-No must be at-least 10 digits.</span>');
            }

            if(course.length < 0){
                $("#course").after('<span class="error"><br>Course must be select required.</span>');
            }

            if(gender.length < 1){
                $("#gender").after('<span class="error"><br>Gender must be required.</span>');
            }

            if(hobbies.length < 0){
                $("#hobbies").after('<span class="error"><br>Hobbies must be reqired select at-least 1.</span>');
            }

            if(address.length < 0){
                $("#address").after('<span class="error"><br>Address must be required.</span>');
            }
            if(birth.length < 0){
                $("#birth").after('<span class="error"><br>Birth must be required.</span>');
            }

            if(semester.length < 0){
                $("#semester").after('<span class="error"><br>Semester must be select required.</span>');
            }

        });
    });
</script>
</body>
</html>
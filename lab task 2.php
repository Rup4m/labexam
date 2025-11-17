<!DOCTYPE html>
<html>
    <head>
        <title>Student regstration </title>

        <style>
            body{
                font-family:Arial,sans-serif;
                padding:20px;
                background-color: #b8d2ebff

            }

            form, .course{
                background-color: #ccc9c9ff;
                padding:20px;
                width: 320px;
                margin: 20px auto;
                border: 1px solid #59b3f0ff
                 border-radius: 5px;
            }

            input, button{
                width: 100%;
                padding:8px;
                margin-top: 8px;
                border: 1px solid #0e60ccff;
                border-radius: 4px;
            }

             button {
    background-color: #333;
    color: white;
    cursor: pointer;
  }  

  button:hover {
    background-color: black;
  }


   #error {
    color: red;
    text-align: center;
    margin-top: 10px;
  }        


    #successBox {
        color: green;
        background: #ffffffff;
        padding: 10px;
        margin: 10px auto;
         width: 320px;
         border: 1px solid green;
         border-radius: 5px;
         display: none;

    }


            

            </style>
            </head>



        <body>
            <form onsubmit="return handleStudentSubmit()">
                <h2>Stupent Registration</h2>



                Full Name:
                <input type="text" id="full name">

                Email:
                <input type="email" id="email">

                Password:
                <input type="password" id="password">

                Confirm Password:
                <input type="password" id="confirm password">

                <button type="submit">Register</button>
            </form>

            <div id="error"></div>
              <div id="successBox"></div>


            <div class="course">
                <h2>Course Rehistraion</h2>

                Course Name:
                <input type="text" id="course name">

                <button onclick="addCourse()">Add Course</button>
                <div id="course list"></div>
            </div>




            <script>

                function handleStudentSubmit(){
                    var name= document.getElementById("fullName").value.trim();
                    var email= document.getElementById("email").value.trim();
                    var password= document.getElementById("password").value;
                    var cpassword= document.getElementById("confirmPassword").value.trim;

                    var errorDiv= document.getElementById("error");
                    var successBox= document.getElementById("successBox");

                    errorDiv.innerHTML="";
                    successBox.style.display="none";

                    if (name== "" || email== "" || password== "" || cpassword== ""){
                        errorDiv.innerHTML="please fill all the fields.";
                        return false;
                    }

                    if(password !== cpassword){
                        errorDiv.innerHTML="passwords do not match.";
                        return false;
                    }

                    successBox.innerHTML=<b>Registration successful!</b>;
                    Name: ${name} <br>
                    Email: ${email}
                    ;
                    return false;

                }
                </script>
        </body>
</html>

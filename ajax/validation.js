$(document).ready(function(){

    $('form').submit(function(f){

        f.preventDefault();

    });

    $('uname').on('input',function(){checkuname();});

    $('upassword').on('input',function(){checkupassword();});

    $('#submitbtn').click(function(){

        if( !checkuname() && !checkupassword()){

            alert("Please fill all required fields");

        }

        else if(!checkuname()|| !checkupassword()){

            alert("Please fill all required fields");

        }

        // else{

        //     console.log("Success");

        //     const form = $('#form')[0];
        //     const formdata = new FormData(form);

        //     $.ajax({

        //         type:"POST",
        //         url:"controller.php",
        //         data:{formdata},
        //         success:function(res){

        //             alert(res);

        //             $('form').trigger("reset");

        //             $('#uname').val("");
        //             $('upassword').val("");

        //         }

        //     });

        // }

    });

    function checkuname(){

        const pattern = /^[A-Za-z0-9]+$/;

        const username = $('#uname').val();
        
        const validuname = pattern.test(username);

        if($('#uname').val().length < 4){

            alert("Username length is too short");

        }

        else if ($('#uname').val().length > 64){

            alert("Usernmae is too long");

        }

        else if (!validuname){

            alert("Username should be A-Z,a-z,0-9 only");

        }

        else {console.log("username is valid");}
        
    }

    function checkupassword(){

        const pattern = /^(?=.*\d)(?=.*[!@#$%^&*])(?=.*[a-z])(?=.*[A-Z]).{8,}$/;

        const password = $('upassword').val();

        const validupass = pattern.test(password);

        if(password.length == 8){

            alert("Password is too short");

        }

        else if(!validupass){

            alert("Password must be Minimum 5 and upto 15 characters, at least one uppercase letter, one lowercase letter, one number and one special character")

        }

        else{console.log("passoword is valid");}

    }

});
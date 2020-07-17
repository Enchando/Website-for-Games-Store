
// JavaScript and Ajax for the updating of the database for a new user to be added.

function addUser(){
    var username = $("#username").val();
    var password = $("#password").val();

    $.ajax({
        type:"POST",
        url:"utils/addNewUser.php", //Running PHP script to add the new user.
        data: {username:username, password:password},
        dataType:"JSON",
        success: function(data){
            alert("New User Added!");
        },
        error:function(err){
            alert(err.responseText);
        }
    })
}

// JavaScript and Ajax for the updating of the database when a user needs to be deleted.

function deleteUser(){
    var username = $("#username2").val();
    var password = $("#password2").val();

    $.ajax({
        type:"POST",
        url:"utils/deleteUser.php", //Running the PHP to delete the user.
        data: {username:username, password:password},
        dataType:"JSON",
        success: function(data){
            alert("User Removed!"); //Alert to confirm that the user has been removed.
        },
        error:function(err){
            alert(err.responseText); //Give error text if not successful.
        }
    })
}
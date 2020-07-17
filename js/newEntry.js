
//// JavaScript and Ajax for adding a completely new video game to the database.

function newEntry(){
    var VideoGameName = $("#VideoGameName").val();
    var Company = $("#Company").val();
    var Quantity = $("#Quantity").val();

    $.ajax({
        type:"POST",
        url:"utils/sendToDatabase.php", //Calling the relevant PHP script to add the new game.
        data: {VideoGameName:VideoGameName, Company:Company, Quantity:Quantity},
        dataType:"JSON",
        success: function(data){
            alert("Video Game Added!"); //Confirming to the user that it has been added.
        },
        error:function(err){
            alert(err.responseText);
        }
    })
}
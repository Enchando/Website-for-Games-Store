// JavaScript and Ajax for the updating of the database for stock.

function addData(){
    var VideoGameName = $("#VideoGameName").val();
    var Quantity = $("#Quantity").val();

    $.ajax({
        type:"POST",
        url:"utils/addstock.php", //Running the PHP Script that will add the data to the database.
        data: {VideoGameName:VideoGameName, Quantity:Quantity},
        dataType:"JSON",
        success: function(data){
            alert("Stock Updated!"); //Alert to let the user know that their query is successful.
        },
        error:function(err){
            alert(err.responseText);
        }
    })
}
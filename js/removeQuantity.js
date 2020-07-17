
// JavaScript and Ajax for the updating of the database when stock has been removed

function removeData(){
    var VideoGameName = $("#VideoGameName2").val();
    var Quantity = $("#Quantity2").val();

    $.ajax({
        type:"POST",
        url:"utils/removestock.php", //PHP for removing required amount of stock
        data: {VideoGameName:VideoGameName, Quantity:Quantity},
        dataType:"JSON",
        success: function(data){
            alert("Stock Updated!");
        },
        error:function(err){
            alert(err.responseText);
        }
    })
}
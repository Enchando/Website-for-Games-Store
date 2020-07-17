
//Refreshing the users table.

function refreshUserTable(){
$(document).ready(function() {
    $.ajaxSetup({ cache: false }); //Addressing an IE bug, without it, IE will only load the first number and will never refresh
    setInterval(function() {
    $('#results').load('utils/refreshusertable.php');
    }, 4000); // How long it takes to refresh. (milliseconds).
    });
}
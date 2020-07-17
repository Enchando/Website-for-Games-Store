
//Function of running the search bar, will be run every time a new key is pressed so that
//it will continually update.

function searchBar() { 
    var input, filter, table, tr, td, i;
    input = document.getElementById("searchBar");
    filter = input.value.toUpperCase();
    table = document.getElementById("users");
    tr = table.getElementsByTagName("tr");

    // Loop rows, hide those that don't match.
    for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[1]; //Checking against the name of the staff column.
        if (td) {
        if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
            tr[i].style.display = "";
        } else {
            tr[i].style.display = "none"; //If nothing found, don't display anything.
        }
        } 
    }
    }

//Javascript to check if the input in the form fields are populated.

function validateForm()
{
  var username = document.forms["loginForm"]["username"].value; //Retrieving the data from the input fields.
  var password = document.forms["loginForm"]["password"].value;

  if (username == "" && password == "")
  {
      alert("Please enter a username and password!"); //Alert if no user name or password given.
      return false; //Making sure that the page does not refresh after the alert is given.
  }
  else if(username == "" && password !== "")
  {
      alert("Please enter a username!");
      return false;
  }

  else if(username !== "" && password == "")
  {
      alert("Please enter a password!");
      return false;
  }
}

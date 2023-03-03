/*
	Upon submission of the form,
	collect the form data
	and send to PHP
*/
document.getElementById('submit-btn').addEventListener('click', function(){
    // Run the JavaScript and AJAX code here
});
// Create data object
var data = {
    firstName: firstName,
    lastName: lastName,
    email: email,
    psychology: psychology,
    business: business,
    physical: physical,
    relationships: relationships,
    finances: finances,
    growth: growth,
    contribution: contribution
};

// Create AJAX request
var xhr = new XMLHttpRequest();
xhr.open('POST', 'wheel-of-life.php');
xhr.setRequestHeader('Content-Type', 'application/json');
xhr.onload = function(){
    if(xhr.status === 200){
        alert('Data successfully sent to your server-side script');
    }
    else{
        alert('An error occurred');
    }
};
xhr.send(JSON.stringify(data));

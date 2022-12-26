
function validate(){
    if (confirm("Are you sure about submission?") == true){
        alert("Message sent.Thanks for contacting me. I'll answer shortly.")
    }
    else{
        alert("Cancelled the Submission.")
    }
}

window.onload = function(){
    alert("Welcome to contact section.")
    document.getElementById('centero').onsubmit = validate
 }
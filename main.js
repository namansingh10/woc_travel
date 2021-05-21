// Your web app's Firebase configuration
var config = {
    apiKey: "AIzaSyBghG7jOeIIPiJkQIX2qRk5_C1Z4Pbdfxk",
    authDomain: "contact-form-cdb97.firebaseapp.com",
    projectId: "contact-form-cdb97",
    storageBucket: "contact-form-cdb97.appspot.com",
    messagingSenderId: "446581529257",
    appId: "1:446581529257:web:69799dd6e18c77d08427b8"
  };
  // Initialize Firebase
  firebase.initializeApp(config);

//Reference messages collection
var messagesRef = firebase.database().ref('messages');


// Listen for form submit
document.getElementById('contact-form').addEventListener('submit',submitForm);


//Submit Form
function submitForm(e) {
    e.preventDefault();

    //Get values
    var name = getInputVal('name');
    var phone = getInputVal('phone');
    var email = getInputVal('email');
    var message = getInputVal('message');

    //Save message
    saveMessage(name, phone, email, message);


    //Show alert
    document.querySelector('.alert').style.display = 'block';

    //Hide alert after 2 seconds
    setTimeout(function(){
        document.querySelector('.alert').style.display = 'none';
    
    },2000);


    //Clear form
    document.getElementById('contact-form').reset();

}

// Function to get form values 
function getInputVal(id) {
    return document.getElementById(id).value;
}


// SAve message to firebase
function saveMessage(name, phone, email, message) {
    var newMessageRef = messagesRef.push();
    newMessageRef.set({
        name: name,
        phone: phone,
        email: email,
        message: message
    });
}
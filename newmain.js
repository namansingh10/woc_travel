// Your web app's Firebase configuration
var firebaseConfig = {
    apiKey: "AIzaSyDgcQvPGdTPIU6Brm462b1bp1TGX-RAs-Q",
    authDomain: "newguide-form.firebaseapp.com",
    databaseURL: "https://newguide-form-default-rtdb.firebaseio.com",
    projectId: "newguide-form",
    storageBucket: "newguide-form.appspot.com",
    messagingSenderId: "497889828442",
    appId: "1:497889828442:web:6e07e73e80246a2b488263"
  };
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);

//Reference messages collection
var messagesRef = firebase.database().ref('messages');


// Listen for form submit
document.getElementById('newguide-form').addEventListener('submit',submitForm);


//Submit Form
function submitForm(e) {
    e.preventDefault();

    //Get values
    var fname = getInputVal('fname');
    var lname = getInputVal('lname');
    var age = getInputVal('age');
    var gender = getInputVal('gender');
    var phone = getInputVal('phone');
    var email = getInputVal('email');
    var desc = getInputVal('desc');


    //Save message
    saveMessage(fname, lname, age, gender, phone, email, desc);


    //Show alert
    document.querySelector('.alert').style.display = 'block';

    //Hide alert after 2.5 seconds
    setTimeout(function(){
        document.querySelector('.alert').style.display = 'none';
    
    },2500);


    //Clear form
    document.getElementById('newguide-form').reset();

}

// Function to get form values 
function getInputVal(id) {
    return document.getElementById(id).value;
}


// SAve message to firebase
function saveMessage(fname, lname, age, gender, phone, email, desc) {
    var newMessageRef = messagesRef.push();
    newMessageRef.set({
        fname: fname,
        lname: lname,
        age: age,
        gender: gender,
        phone: phone,
        email: email,
        desc: desc
    });
}
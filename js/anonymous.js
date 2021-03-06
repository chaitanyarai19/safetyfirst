
  // Your web app's Firebase configuration
  const firebaseConfig = {
    apiKey: "AIzaSyD9odXw5dbWehoT5ay6M0SjogoiUVwuO8g",
    authDomain: "anonymous-7847e.firebaseapp.com",
    databaseURL: "https://anonymous-7847e-default-rtdb.firebaseio.com",
    projectId: "anonymous-7847e",
    storageBucket: "anonymous-7847e.appspot.com",
    messagingSenderId: "841692212491",
    appId: "1:841692212491:web:f817ea2dbfebaee963860e"
  };

  // initialize firebase
firebase.initializeApp(firebaseConfig);

// reference your database
var contactFormDB = firebase.database().ref("anonymous");

document.getElementById("anonymous").addEventListener("submit", submitForm);

function submitForm(e) {
  e.preventDefault();

  var category = getElementVal("category");
  var date = getElementVal("date");
  var state = getElementVal("state");
  var city = getElementVal("city");
  var police = getElementVal("police");
  var incident = getElementVal("incident");
  var comment = getElementVal("comment");
  

  saveMessages(category, date, state,city,police, incident, comment);

  //   enable alert
 // document.querySelector(".alert").style.display = "block";

  //   remove the alert
  //setTimeout(() => {
   // document.querySelector(".alert").style.display = "none";
  //}, 3000);

  //   reset the form
  document.getElementById("anonymous").reset();
}

const saveMessages = (category, date, state, city, police ,incident, comment) => {
  var newContactForm = contactFormDB.push();

  newContactForm.set({
    category: category,
    date: date,
    state: state,
	city: city,
	police: police,
	incident : incident,
	comment : comment,
  });
};

const getElementVal = (id) => {
  return document.getElementById(id).value;
};

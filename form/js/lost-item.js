  // Your web app's Firebase configuration
  const firebaseConfig = {
    apiKey: "AIzaSyC42OMXTrj3oGg1YYvIOYtb8VuJ7jVl5qY",
    authDomain: "lost-item-e3e86.firebaseapp.com",
    databaseURL: "https://lost-item-e3e86-default-rtdb.firebaseio.com",
    projectId: "lost-item-e3e86",
    storageBucket: "lost-item-e3e86.appspot.com",
    messagingSenderId: "1064669322262",
    appId: "1:1064669322262:web:7121c0b0d636f97cc22937"
  };
// initialize firebase
firebase.initializeApp(firebaseConfig);

// reference your database
var contactFormDB = firebase.database().ref("lostitem");

document.getElementById("lostitem").addEventListener("submit", submitForm);

function submitForm(e) {
  e.preventDefault();

  var pname = getElementVal("pname");
  var pcompany = getElementVal("pcompany");
  var pid = getElementVal("pid");
  var dof = getElementVal("dof");
var ename = getElementVal("ename");
var emobile = getElementVal("emobile");
var pucode = getElementVal("pucode");
var pcondition = getElementVal("pcondition");
  var state = getElementVal("state");
  var city = getElementVal("city");

  

  saveMessages(pname, pcompany, pid, dof, ename, emobile, pucode, pcondition, state, city);

  //   enable alert
  //document.querySelector(".alert").style.display = "block";

  //   remove the alert
  //setTimeout(() => {
  //  document.querySelector(".alert").style.display = "none";
 // }, 3000);

  //   reset the form
  document.getElementById("lostitem").reset();
}

const saveMessages = (pname, pcompany, pid, dof, ename, emobile, pucode, pcondition, state, city) => {
  var newContactForm = contactFormDB.push();

  newContactForm.set({
    poductname: pname,
    poductcompany: pcompany,
	poductid: pid,
	dateoffound: dof,
	PoliceEmpName:ename,
	PoliceEmpNumber:emobile,
	PoliceUniqueID:pucode,
	ProductCondition:pcondition,
    state: state,
	city: city,
  });
};

const getElementVal = (id) => {
  return document.getElementById(id).value;
};

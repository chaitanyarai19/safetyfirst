
  // Your web app's Firebase configuration
  // Your web app's Firebase configuration
  const firebaseConfig = {
    apiKey: "AIzaSyAK9Fyqi9-nKZYOcsat_v5yJhCVcHMH-GM",
    authDomain: "oraclecloud-74b49.firebaseapp.com",
    databaseURL: "https://oraclecloud-74b49-default-rtdb.firebaseio.com",
    projectId: "oraclecloud-74b49",
    storageBucket: "oraclecloud-74b49.appspot.com",
    messagingSenderId: "436672962406",
    appId: "1:436672962406:web:5e7f8e980319d8fbabb2a7"
  };
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);

  const auth =  firebase.auth();

  //signup function
  function signUp(){
    var email = document.getElementById("email");
    var password = document.getElementById("password");

    const promise = auth.createUserWithEmailAndPassword(email.value,password.value);
    //
    promise.catch(e=>alert(e.message));
    alert("SignUp Successfully");
  }

  //signIN function
  function  signIn(){
    var email = document.getElementById("email");
    var password  = document.getElementById("password");
    const promise = auth.signInWithEmailAndPassword(email.value,password.value);
    promise.catch(e=>alert(e.message));
	
	 firebase.auth().onAuthStateChanged(user => {
  if(user) {
    window.location = 'form/index.html'; //After successful login, user will be redirected to home.html
  }
});
  }


  //signOut

  function signOut(){
    auth.signOut();
    alert("SignOut Successfully from System");
	window.location = '../index.html';
  }

  //active user to homepage
  firebase.auth().onAuthStateChanged((user)=>{
    if(user){
      var email = user.email;
      alert("Active user "+email);

    }else{
      alert("No Active user Found")
    }
  })
const firebaseConfig = {
  apiKey: "AIzaSyDLo8XQgyIDExSZJRJuQzrlJ2i7IdnkUV8",
  authDomain: "table-login-fed33.firebaseapp.com",
  projectId: "table-login-fed33",
  storageBucket: "table-login-fed33.appspot.com",
  messagingSenderId: "1046830555689",
  appId: "1:1046830555689:web:60d848c2cd780136ab3238"
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
    window.location = 'table.html'; //After successful login, user will be redirected to home.html
  }
});
    
  }


  //signOut

  function signOut(){
    auth.signOut();
    alert("SignOut Successfully from System");
	window.location = 'index.html';
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
<html>
<head>
    <title>Google Authentication</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
 <center>

     <h1></h1>

     <!-- <button type="button" id="googlebtn" onclick="GoogleLogin();"></button> -->

 </center>
<script src="https://www.gstatic.com/firebasejs/6.0.1/firebase.js"></script>
<script>
    // Your web app's Firebase configuration
    var firebaseConfig = {
  apiKey: "AIzaSyD_p3Csc4iP5fs6MfoWAd0q79wuedfVbwE",
  authDomain: "project-6e01c.firebaseapp.com",
  databaseURL: "https://project-6e01c.firebaseio.com",
  projectId: "project-6e01c",
  storageBucket: "project-6e01c.appspot.com",
  messagingSenderId: "677066235751",
  appId: "1:677066235751:web:f197eb12a9a0f9b64919c2"
};
    // Initialize Firebase
    firebase.initializeApp(firebaseConfig);
</script>
<script>

    //first of all create google provider object

    var provider=new firebase.auth.GoogleAuthProvider();
    //Login with popup window
    firebase.auth().signInWithPopup(provider).then(function () {
        //code executes after successful login

        window.location="home.php";
    }).catch(function (error) {
        var errorMessage=error.message;
        alert(errorMessage);
    });
</script>
<script src="google.js" type="text/javascript"></script>

</body>
</html>


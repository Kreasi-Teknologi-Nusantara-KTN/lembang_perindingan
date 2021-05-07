<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link type="text/css" rel="stylesheet" href="https://www.gstatic.com/firebasejs/ui/4.8.0/firebase-ui-auth.css" />
  
  
  <script src="https://www.gstatic.com/firebasejs/8.4.0/firebase-app.js"></script>

  <!-- If you enabled Analytics in your project, add the Firebase SDK for Analytics -->
  <script src="https://www.gstatic.com/firebasejs/8.4.0/firebase-analytics.js"></script>

  <!-- Add Firebase products that you want to use -->
  <script src="https://www.gstatic.com/firebasejs/8.4.0/firebase-auth.js"></script>
  <script src="https://www.gstatic.com/firebasejs/8.4.0/firebase-firestore.js"></script>
  <script src="https://www.gstatic.com/firebasejs/ui/4.8.0/firebase-ui-auth.js"></script>

  <script>
    // Your web app's Firebase configuration
    // For Firebase JS SDK v7.20.0 and later, measurementId is optional
    var firebaseConfig = {
      apiKey: "AIzaSyBhKxRqTiw7Hh-mZUY0vgYaWp7CZwHFVuY",
      authDomain: "sistem-masyarakat.firebaseapp.com",
      projectId: "sistem-masyarakat",
      storageBucket: "sistem-masyarakat.appspot.com",
      messagingSenderId: "943285463148",
      appId: "1:943285463148:web:06a0341fdc7becad555049",
      measurementId: "G-4BPPQZ0FTV"
    };
    // Initialize Firebase
    firebase.initializeApp(firebaseConfig);
    firebase.analytics();
  
    // Initialize the FirebaseUI Widget using Firebase.
    firebase.auth().onAuthStateChanged(function(user) {
      if (!user) {
        var ui = new firebaseui.auth.AuthUI(firebase.auth());
        ui.start('#firebaseui-auth-container', {
          signInSuccessUrl: '<?= base_url(); ?>admin.html',
          signInOptions: [
            firebase.auth.EmailAuthProvider.PROVIDER_ID
          ],
          // Other config options...
        });
      } else {
        window.location.href = "<?= base_url(); ?>admin.html";
      }
    });
  </script>
</head>
<body>
  <!-- The surrounding HTML is left untouched by FirebaseUI.
  Your app may use that space for branding, controls and other customizations.-->
  <div id="firebaseui-auth-container"></div>
</body>
</html>
  // Your web app's Firebase configuration
  // For Firebase JS SDK v7.20.0 and later, measurementId is optional
  var firebaseConfig = {
    apiKey: "AIzaSyDx_btc5kXiZw8MBdTo1ZG4q3BLps42gek",
    authDomain: "blokzeroeow-55907.firebaseapp.com",
    databaseURL: "https://blokzeroeow-55907.firebaseio.com",
    projectId: "blokzeroeow-55907",
    storageBucket: "blokzeroeow-55907.appspot.com",
    messagingSenderId: "491776167366",
    appId: "1:491776167366:web:06f544439f8b88e3e936c7",
    measurementId: "G-5B6B5HW84D"
  };
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);
  firebase.analytics();

  const auditDB = firebase.firestore();  
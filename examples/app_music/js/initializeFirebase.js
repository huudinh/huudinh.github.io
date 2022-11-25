 // Your web app's Firebase configuration
 var config = {
    apiKey: "AIzaSyCLYhHKdqW5Ze_L5e9Lj9dF5UEn2PmE-Fs",
    authDomain: "scigroup.firebaseapp.com",
    databaseURL: "https://scigroup-default-rtdb.asia-southeast1.firebasedatabase.app",
    projectId: "scigroup",
    storageBucket: "scigroup.appspot.com",
    messagingSenderId: "65674629605",
    appId: "1:65674629605:web:461e33ac13e325d2b55f0c"
};

// Initialize Firebase
firebase.initializeApp(config);
var database = firebase.database();
var songs = firebase.database().ref('song');
var userMusic = firebase.database().ref('userMusic');
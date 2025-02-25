// Import the functions you need from the SDKs you need
import { initializeApp } from "firebase/app";
import { getAnalytics } from "firebase/analytics";
// TODO: Add SDKs for Firebase products that you want to use
// https://firebase.google.com/docs/web/setup#available-libraries

// Your web app's Firebase configuration
// For Firebase JS SDK v7.20.0 and later, measurementId is optional
const firebaseConfig = {
  apiKey: "AIzaSyD3CJ-_5vpOC1ze48tWA-r-9hjQe5hpFtM",
  authDomain: "edison-f0a86.firebaseapp.com",
  projectId: "edison-f0a86",
  storageBucket: "edison-f0a86.firebasestorage.app",
  messagingSenderId: "165431265698",
  appId: "1:165431265698:web:ed7de597b96f4f55214afb",
  measurementId: "G-22ZWX6XVNJ"
};

// Initialize Firebase
const app = initializeApp(firebaseConfig);
const analytics = getAnalytics(app);
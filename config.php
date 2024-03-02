<script type="module">
  // Import the functions you need from the SDKs you need
  import { initializeApp } from "https://www.gstatic.com/firebasejs/10.8.1/firebase-app.js";
  import { getDatabase } from "https://www.gstatic.com/firebasejs/10.8.1/firebase-database.js";
  import { getAuth, createUserWithEmailAndPassword } from "https://www.gstatic.com/firebasejs/10.8.1/firebase-auth.js";
  
    // Your web app's Firebase configuration
    const firebaseConfig = {
    apiKey: "AIzaSyCuU5Ez73upjqInnKGiyNyz9AP6azKB7VQ",
    authDomain: "ridesmnl-web.firebaseapp.com",
    projectId: "ridesmnl-web",
    storageBucket: "ridesmnl-web.appspot.com",
    messagingSenderId: "1047345129505",
    appId: "1:1047345129505:web:2a9289e36befcab20ddb60"
  };


  // Initialize Firebase
  const app = initializeApp(firebaseConfig);
  const database = getDatabase(app);
  const auth = getAuth();

  const signUp = document.querySelector('.auth-form-btn');

  signUp.addEventListener('click', (e) => {
    e.preventDefault(); // Prevent form submission
    
    var email = document.getElementById('exampleInputEmail1').value;
    var password = document.getElementById('exampleInputPassword1').value;

    createUserWithEmailAndPassword(auth, email, password)
    .then((userCredential) => { 
        //
        const user = userCredential.user;

        set(ref(database, 'users/' + user.uid)), {
            username: username, 
            email: email
        }
        alert('Login successful!');
    })
    .catch((error) => {
        const errorCode = error.code;
        const errorMessage = error.message;

        alert(errorMessage);
    });
  });
</script>

<<script type="module">
    import { initializeApp } from "https://www.gstatic.com/firebasejs/10.8.1/firebase-app.js";
    import { getDatabase, ref, update } from "https://www.gstatic.com/firebasejs/10.8.1/firebase-database.js";
    import { getAuth, createUserWithEmailAndPassword, signInWithEmailAndPassword } from "https://www.gstatic.com/firebasejs/10.8.1/firebase-auth.js";

    /// Your web app's Firebase configuration
    const firebaseConfig = {
    apiKey: "AIzaSyCuU5Ez73upjqInnKGiyNyz9AP6azKB7VQ",
    authDomain: "ridesmnl-web.firebaseapp.com",
    projectId: "ridesmnl-web",
    storageBucket: "ridesmnl-web.appspot.com",
    messagingSenderId: "1047345129505",
    appId: "1:1047345129505:web:2a9289e36befcab20ddb60"
  };


    // Initialize Firebase
    const app = initializeApp(firebaseConfig);
    const database = getDatabase(app);
    const auth = getAuth();

    const signUp = document.querySelector('.auth-form-btn');

    signUp.addEventListener('click', (e) => {
        e.preventDefault(); // Prevent form submission

        var email = document.getElementById('exampleInputEmail1').value;
        var password = document.getElementById('exampleInputPassword1').value;

        signInWithEmailAndPassword(auth, email, password)
            .then((userCredential) => {
                const user = userCredential.user;
                const dt = new Date();
                update(ref(database, 'users/' + user.uid), {
                    last_login: dt.getTime(), // using getTime to get milliseconds
                });
                alert('User logged in!');
            })
            .catch((error) => {
                const errorMessage = error.message;
                alert(errorMessage);
            });
    });
(function() {

    const config = {
        apiKey: "AIzaSyAba7Ope6qbexf5lAeFAXVNISpX3ftymz0",
        authDomain: "energym-f3107.firebaseapp.com",
        databaseURL: "https://energym-f3107.firebaseio.com",
        projectId: "energym-f3107",
        storageBucket: "energym-f3107.appspot.com",
        messagingSenderId: "991940411053"
    };
    firebase.initializeApp(config);

    const txtEmail = document.getElementById('txtEmail');
    const txtPassword = document.getElementById('txtPassword');
    const btnLogin = document.getElementById('btnLogin');
    const btnSignUp = document.getElementById('btnSignUp');
    const btnLogout = document.getElementById('btnLogout');


    //add login event
    btnLogin.addEventListener('click', e => {
        const email = txtEmail.value;
        const pass = txtPassword.value;
        const auth = firebase.auth();

        auth.signInWithEmailAndPassword(email, pass);
        promise.catch(e => console.log(e.message));
    });


});
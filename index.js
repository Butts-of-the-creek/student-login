document.addEventListener('DOMContentLoaded', function () {
    const signUpButton = document.getElementById("signUpButt");
    const signInButton = document.getElementById("signInButt");
    const signInForm = document.getElementById("signInForm");
    const signUpForm = document.getElementById("firstWrapper");

    signUpButton.addEventListener('click', function () {
        signInForm.style.display = "none";
        signUpForm.style.display = "block";
    });

    signInButton.addEventListener('click', function () {
        signInForm.style.display = "block";
        signUpForm.style.display = "none";
    });
});


function myFunction() {
    const name = document.getElementById("name").value.trim();
    const username = document.getElementById("username").value.trim();
    const password = document.getElementById("password").value;
    const confirmPassword = document.getElementById("confirmpassword").value;
    const email = document.getElementById("email").value.trim();
    const confirmEmail = document.getElementById("confirmemail").value.trim();
    const genderMale = document.getElementById("male").checked;
    const genderFemale = document.getElementById("female").checked;
    const terms = document.getElementById("terms").checked;
    const age = document.getElementById("age").checked;
 
    if (!name || !username || !password || !confirmPassword || !email || !confirmEmail) {
        alert("Please fill out all fields.");
        return;
    }
 
    if (password !== confirmPassword) {
        alert("Passwords do not match.");
        return;
    }
 
    if (email !== confirmEmail) {
        alert("Email addresses do not match.");
        return;
    }
 
    const emailPattern = (/\w+@gmail.com/)
    if (!emailPattern.test(email)) {
        alert("Please enter a valid email address.");
        return;
    }
 
    if (password.length < 6) {
        alert("Password must be at least 6 characters long.");
        return;
    }
 
    if (!genderMale && !genderFemale) {
        alert("Please select a gender.");
        return;
    }
 
    if (!terms) {
        alert("You must agree to the terms and conditions.");
        return;
    }
 
    if (!age) {
        alert("You must confirm you are at least 18 years old.");
        return;
    }
 
   
    alert("Form submitted successfully!");
 
    document.querySelector("form").submit();
}
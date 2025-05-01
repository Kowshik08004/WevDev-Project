const signUpButton=document.getElementById('signUpButton');
const signInButton=document.getElementById('signInButton');
const signInForm=document.getElementById('signIn');
const signUpForm=document.getElementById('signup');

signUpButton.addEventListener('click',function(){
    signInForm.style.display="none";
    signUpForm.style.display="block";
})
signInButton.addEventListener('click', function(){
    signInForm.style.display="block";
    signUpForm.style.display="none";
})

//login iframe
// Add this to your login page
function sendHeight() {
    const height = document.body.scrollHeight;
    window.parent.postMessage({
        type: 'resize',
        height: height
    }, '*'); // Replace '*' with the parent domain in production for security
}

// Run on load and whenever content changes
window.addEventListener('load', sendHeight);
window.addEventListener('resize', sendHeight);
// If your form changes dynamically, call sendHeight() after those changes
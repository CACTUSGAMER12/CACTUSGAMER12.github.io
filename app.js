function alertButton() {
    alert("helloWorld");
   }
function toggleContactMethod() {
    const preference = document.getElementById('communicationPreference').value;
    const emailDiv = document.getElementById('email');
    const phoneDiv = document.getElementById('phone'); 
    if (preference === 'email') {
      emailDiv.style.display = 'block';
      phoneDiv.style.display = 'none';
    } else if (preference === 'phone') {
      emailDiv.style.display = 'none';
      phoneDiv.style.display = 'block';
    }
  }


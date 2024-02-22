var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";

  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").style.display = "none";  
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }




  //... and run a function that will display the correct step indicator:
  fixStepIndicator(n) 
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form...
  if (currentTab >= x.length) {
    // ... the form gets submitted:
    document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}


function backPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab - n;
  // if you have reached the end of the form...
  if (currentTab >= x.length) {
    // ... the form gets submitted:
    document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}


function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false
      valid = false;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class on the current step:
  x[n].className += " active";

}

  
  function addCard(){

 const card = document.getElementById('card');



const clone = card.cloneNode(true);

clone.id = "card";

document.getElementById("orders").appendChild(clone);


document.getElementById('kindofgreeting').value = 'select'; 
document.getElementById('typeofcard').value = 'default'; 
document.getElementById('firstName').value = ''; 
document.getElementById('lastName').value = ''; 
document.getElementById('relationship').value = ''; 
document.getElementById('gender').value = 'default'; 
document.getElementById('date').value = 'default'; 



}


// Function to capture inputs from user and display them on the webpage
function catchinput() {
  // Retrieve the value entered into the input field with the ID 'firstName'
  let firstname = document.getElementById("firstName").value;

  // Set the innerHTML of the element with the ID 'name' to the value of 'firstname'
  // This displays the captured first name on the webpage
  document.getElementById("name").innerHTML = firstname;

  // Retrieve the value entered into the input field with the ID 'relationship'
  let relationship = document.getElementById("relationship").value;

  // Set the innerHTML of the element with the ID 'card-rel2' to the value of 'relationship'
  // This displays the captured relationship on the webpage
  document.getElementById("card-rel2").innerHTML = relationship;

  // Retrieve the value entered into the input field with the ID 'date'
  let date = document.getElementById("date").value;

  // Set the innerHTML of the element with the ID 'card-date2' to the value of 'date'
  // This displays the captured date on the webpage
  document.getElementById("card-date2").innerHTML = date;
}



function displaybutton(){

document.getElementById("nextBtn").style.display = "";

}

function selections(){

let selection = document.getElementById('kindofgreeting').value;

if( selection == 1) {

document.getElementById('r1').style.display = "none";  


}



}


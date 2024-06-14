<!DOCTYPE HTML>
<html>
	<?php include_once("includes/head.php")?>
    <style>


#regForm {
  background-color: #ffffff;
  margin: 35px auto;
  font-family: Raleway;
  padding: 40px;
  width: 70%;
  min-width: 300px;
}



/* input {
  padding: 10px;
  width: 100%;
  font-size: 17px;
  font-family: Raleway;
  border: 1px solid #aaaaaa;
} */

/* Mark input boxes that gets an error on validation: */
input.invalid {
  background-color: #ffdddd;
}

/* Hide all steps by default: */
.tab {
  display: none;
}

/* button {
  background-color: #04AA6D;
  color: #ffffff;
  border: none;
  padding: 10px 20px;
  font-size: 17px;
  font-family: Raleway;
  cursor: pointer;
}

button:hover {
  opacity: 0.8;
} */

/* #prevBtn {
  width: 100%;
    background: linear-gradient(271.05deg, #f9a230 2.65%, #f9a230 97.16%);
    border: 2px solid #2F2F2F;
    border-radius: 25px;
    font-family: 'Anek Tamil';
    font-style: normal;
    font-weight: 500;
    font-size: 20px;
    color: #FFFFFF;
    letter-spacing: 0;
    line-height: 30px;
    min-height: 69px;
    height: 0;
    transition: .9s;
} */

/* Make circles that indicate the steps of the form: */
.step {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbbbbb;
  border: none;  
  border-radius: 50%;
  display: inline-block;
  opacity: 0.5;
}

.step.active {
  opacity: 1;
}

/* Mark the steps that are finished and valid: */
.step.finish {
  background-color: #04AA6D;
}
/* .appointment h6{
 color: #aaaaaa;
}
.appointment ul li {
  color: #fff;
} */
#logo a img{
  width: 130px;
}
body {
    /* line-height: 1; */
    background-color: #ffffff !important;
}
.heading-text h3{
  color: #000;
}
.btns button{
  width: 30%;
    background: linear-gradient(271.05deg, #f9a230 2.65%, #f9a230 97.16%);
    border: 2px solid #2F2F2F;
    border-radius: 25px;
    font-family: 'Anek Tamil';
    font-style: normal;
    font-weight: 500;
    font-size: 20px;
    color: #FFFFFF;
    letter-spacing: 0;
    line-height: 30px;
    min-height: 69px;
    height: 0;
    transition: .9s;
}
</style>
<!-- Calendly badge widget begin -->
<link href="https://assets.calendly.com/assets/external/widget.css" rel="stylesheet">
<script src="https://assets.calendly.com/assets/external/widget.js" type="text/javascript" async></script>
<script type="text/javascript">window.onload = function() { Calendly.initBadgeWidget({ url: 'https://calendly.com/jennifer-cisternino2027/ecommonks', text: 'Schedule time with me', color: '#0069ff', textColor: '#ffffff', branding: undefined }); }</script>
<!-- Calendly badge widget end -->

      <section id="contact-us" style="padding: 60px 0px 90px 0px;">
      <div id="logo">
					<a href="/"> <img src="./images/logoo.png" alt=""></a>
				</div>
			 <div class="container">
			 <div class="custom-form-sec">
				<div class="heading-text" style="text-align: center;">
					<h3>Signup Ecommonks Appointment</h3>
					<p>Welcome to Our Scheduling Page. Please follow the instructions to add an event to my calendar. We look forward to meeting you soon.</p>
				</div>
				
				 <div class="container">  
					
                    <div class="appointment">
                        
                        <form id="regForm" method="POST" action="leads/">
                        <input type="hidden" name="route" value="form/">
                            <input type="hidden" name="brand" value="Ecommonks">
                            <input type="hidden" name="token" value="<?= $token; ?>">
                            <input type="hidden" name="tag" value="appointment">
                            <input type="hidden" name="price" value="null">
                            <input type="hidden" name="news" value="1">
                            <input type="text" class="jun" name="gender">
                        <h6>Appointment</h6>
                        <ul>
                          <li>Discovery Call with Ecommonks Ecommerce Services 15 minutes</li>
                        </ul>
  <!-- One "tab" for each step in the form: -->
  <div class="tab">Select Date & Time:
    <p><input class="form-control input-lg" id="party" type="datetime-local" name="appdate"
           pattern="[0-9]{4}-[0-9]{2}-[0-9]{2}T[0-9]{2}:[0-9]{2}" required>
  </p>
  <p class="form-group hidden-xs has-picker"></p></p>
  </div>
  <div class="tab">Contact Info:
    <div class="form-group mt-2">
      <input class="form-control" placeholder="Name" oninput="this.className = ''" name="name">
    </div>
    <div class="form-group mt-2">
      <input class="form-control" placeholder="Email" oninput="this.className = ''" name="email">
    </div>
    <div class="form-group mt-2 mb-3">
      <input class="form-control" placeholder="Phone..." oninput="this.className = ''" name="phone">
    </div>
    <h4>Which platform would you like to start with.</h4>
    <div class="form-check">
      <input type="checkbox" name="brief[]" value="Shopify" class="form-check-input" id="exampleCheck1">
      <label class="form-check-label" for="exampleCheck1">Shopify</label>
    </div>
    <div class="form-check">
      <input type="checkbox" name="brief[]" value="Amazon" class="form-check-input" id="exampleCheck1">
      <label class="form-check-label" for="exampleCheck1">Amazon</label>
    </div>
    <div class="form-check">
      <input type="checkbox" name="brief[]" value="TikTok" class="form-check-input" id="exampleCheck1">
      <label class="form-check-label" for="exampleCheck1">TikTok</label>
    </div>
  </div>
  
  <div style="overflow:auto;">
    <div class="btns mt-5" style="float:right;">
      <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
      <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
    </div>
  </div>
  <!-- Circles which indicates the steps of the form: -->
  <div style="text-align:center;margin-top:40px;">
    <span class="step"></span>
    <span class="step"></span>
  </div>
</form>
                    </div>
					
				   
					
				  </div> 
				</div>
			</div>
			</section>
				
			

			


			


			<!-- FOOTER START -->

			<?php include_once("includes/footer.php")?>
			<script>

var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Submit";
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
$(function () {
  $('#party-fallback')
  .datetimepicker({
    format: 'DD/MM/YYYY HH:mm',
    sideBySide: true,
  })
  .data("DateTimePicker").keyBinds({});
});

            </script>
	</body>
</html>
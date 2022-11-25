<?php	require('../../Virya_Project/header_footer/header.php');	?>






<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="header_footer/footer_style.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">	

		
	<link rel="stylesheet" href="header_footer/footer_style.css" type="text/css">
		  <link rel='stylesheet' href='https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css'>
		
		
	<style>
			

		@import url('https://fonts.googleapis.com/css?family=Hind:300,400');
		/*	*:before, *:after {
  -webkit-box-sizing: inherit;
		box-sizing: inherit;	}	*/

	/*		html {
	//	-webkit-box-sizing: border-box;
  box-sizing: border-box;
}		*/

.container {
  /* margin: 200px; */
  /* padding: 36rem; */
 /* width: 30rem;*/
  font-family:  sans-serif;
  background: #fff;
  color: #4d5974;
 /* // display: -webkit-box;
 // display: -webkit-flex;
 // display: -ms-flexbox; */
  display: flex;
  /* min-height: 100vh; */
  
}
h3 {
  font-size: 1.75rem;
  color: #373d51;
  padding: 1.3rem;
  margin: 0;
}
.accordion a {
  position: relative;
 display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
	/*			-webkit-box-orient: vertical;
				-webkit-box-direction: normal;
				-webkit-flex-direction: column;		
  -ms-flex-direction: column;   */
  flex-direction: column;
  width: 100%;
  padding: 1rem 3rem 1rem 1rem;
  color: #7288a2;
  font-size: 1.15rem;
  font-weight: 400;
  border-bottom: 1px solid #e5e5e5;
}
.accordion a:hover,
.accordion a:hover::after {
  cursor: pointer;
  text-decoration:	blink;
  color: #ff5353;
}
.accordion a:hover::after {
  border: 1px solid #ff5353;
}
.accordion a.active {
  color: #ff5353;
  border-bottom: 1px solid #ff5353;
}
.accordion a::after {
  font-family: 'Ionicons';
  content: '\f218';
  position: absolute;
  float: right;
  right: 1rem;
  font-size: 1rem;
  color: #7288a2;
  padding: 5px;
  width: 30px;
  height: 30px;
	/* //	-webkit-border-radius: 50%; */
  -moz-border-radius: 50%;
  border-radius: 50%;
  border: 1px solid #7288a2;
  text-align: center;
}
.accordion a.active::after {
  font-family: 'Ionicons';
  content: '\f209';
  color: #ff5353;
  border: 1px solid #ff5353;
}
.accordion .content {
  opacity: 0;
  padding: 0 1rem;
  max-height: 0;
  border-bottom: 1px solid #e5e5e5;
  overflow: hidden;
  clear: both;
	/* //	-webkit-transition: all 0.2s ease 0.15s; */
  -o-transition: all 0.2s ease 0.15s;
  transition: all 0.2s ease 0.15s;
}
.accordion .content p {
  font-size: 1rem;
  font-weight: 300;
}
.accordion .content.active {
  opacity: 1;
  padding: 1rem;
  max-height: 100%;
 /* // -webkit-transition: all 0.35s ease 0.15s; */
  -o-transition: all 0.35s ease 0.15s;
  transition: all 0.35s ease 0.15s;
}
	</style>
   
</head>

<body> 

<br><br><br>

<div class="container">
 
  <h2>Frequently Asked Questions</h2>
	
  <div class="accordion">
    <div class="accordion-item">
      <a>How to apply/enroll for a Course ?</a>
      <div class="content">
        <p>Open the Course information page by clicking on the course title.</br> Click on <b> Enroll </b> <br/> Click on <b>Pay</b>. </br> Read all instrcutions and follow the prompts you receive.</p>
      </div>
    </div>
    <div class="accordion-item">
      <a>How to create my acoount/profile on Virya ?</a>
      <div class="content">
        <p>Click on <b> Login </b> at the top right corner of the homepage.<br/> Click on <b> Sign up </b>.<br/>Fill the required details and click on <b> Register </b>. </br> After that provide your login credentials on the <b> login page </b>. <br/> Click on <b> LogIn </b>.  </p>
      </div>
    </div>
    <div class="accordion-item">
      <a>How to add a Course?</a>
      <div class="content">
        <p> Login to your Instructor profile.<br/>Next Click on <b> Add Course </b>. <br/>Fill the details regarding the Course .<br/>Click on <b> Confirm.</b> </p>
      </div>
    </div>
    <div class="accordion-item">
      <a>How can I pay for a Course? </a>
      <div class="content">
        <p>Virya supports multiple payment methods like G-Pay, Phonepe, Paytm and several other ways as well across the globe. </br> If mistakenly any payment is stucked, pending or failed the amount will be refunded back to the User with 48 hours. </p>
      </div>
    </div>
    <div class="accordion-item">
      <a>What is the criteria for getting a Certificate ?</a>
      <div class="content">
        <p>If the Learner scores above 90% in the testimonials of that particular course or subject. </br> A <b> Certificate Of Appreciation </b> will be granted to him/her within 2 hours after completing that course. </p>
      </div>
    </div>
  </div>
  
</div>	
<br><br><br>
 
	<script src='https://code.jquery.com/jquery-3.2.1.min.js'>	</script>
	<script>	
			// JS script for FAQ
const items = document.querySelectorAll(".accordion a");
 
function toggleAccordion(){
  this.classList.toggle('active');
  this.nextElementSibling.classList.toggle('active');
}
 
items.forEach(item => item.addEventListener('click', toggleAccordion));
	</script>



</body>

</html>


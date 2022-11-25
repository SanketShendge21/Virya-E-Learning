<?php	require('header.php');	?>



<!DOCTYPE html>

<!-------About-us-page-design----------->

<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
    
<style>
.body{
/*  font-family: Arial, Helvetica, sans-serif;*/
  margin: 0 auto;
    font-family: 'verdana';
   
}

/*html {*/
/*  box-sizing: border-box;*/
/*}*/
/*

*, *:before, *:after {
  box-sizing: inherit;
}
*/
    .row{
        --bs-gutter-x: -0.5rem;
    }
    
.column{
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
    
}

.card{
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
    border: 19px solid white;
    border-radius: 15px;
    font-family: 'verdana';
}

.about-section{
  padding: 60px;
  text-align: center;
  background-color: #474e5d;
  color: white;
    font-size: 20px;
}

/*
.container {
  padding: 0 16px;
}
*/

/*
.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}
*/
/*
.title {
  color: blue;
    }   
/*
}
@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
*/
</style>
</head>
<body>

<div class="about-section">
  <h1>About Us</h1>
  <p>Our sole purpose is to solve the issues of the learning process for students to provide what they are looking for at their fingertips as per thier needs.  With access to online learning resources and instructions, anyone anywhere, can gain skills an dtransform thier lives in meaningful ways! Our instructors are passionate about sahring thier knowledge and helping students. There are experts who stay active in the fields in order to deliver up-to-date content.</p>
</div>

<h2 style="text-align:center">OUR WORK</h2>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="whoweare.jpg" alt="..." style="width:100%">
      <div class="container">
          <center><h4>WHO ARE WE ?</h4></center>
        <p>Our community is designed with the purpose of learning online content based learning provides meaningful ways of interraction between the learner , thier instructors and studies. </p>
        
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="whatwedo.png" alt="..." style="width:100%">
      <div class="container">
         <center><h4>WHAT WE DO ?</h4></center>
        <p>We at Vīrya aim to reach students and thier learning experience with an ease. By connecting students all over the globe to the best instructors,Vīrya is helping individuals reach thier goals and pursue thier dreams
Talent is universal, but opportunities are not.</p>
      
       
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <img src="our_services.jpg" alt="..." style="width:100%">
      <div class="container">
        <center><h4>OUR SERVICES</h4></center>
		<p>Providing free access to our resources with just internet as the only requirement for instructors and students to communicate and learn freely and effectively.
No limitation on content based learning our learners will be able to search for any type of subjects from certified counselors and experienced professors across the globe for better clarity and vialability.
 </p>
      
      </div>
    </div>
  </div>
</div>

</body>
</html>



<?php	//require('footer.php');	?>
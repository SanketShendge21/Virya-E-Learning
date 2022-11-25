<?php
error_reporting(0);
require('header_footer/header.php');


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/all.css"> 
    <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <title>Virya</title>

    <style>
    
        
        /*===============bak to top button ==================*/
        
                        .arrow{
                          position: fixed;
                            width: 60px;
                            top: -9px;
                          bottom: -11px;
                          right: 50px;
                          z-index: 9;
                        }
                    .arrow a{
                          height: 47px;
                          width: 47px;
                          text-align: center;
                          background: #000000;
                          display: block;
                          border-radius: 7px;
                        }
                    .arrow a span{
                          color: #f3f3f3;
                          font-size: 30px;
                          line-height: 45px;
                          cursor: pointer;
                        }
                    .arrow a:hover{ 
                        transition: 1s;
                        transition-duration: 3s;
                        transform: scale(1.2);
                        }

        /*========================back to top button==============*/
        
        
        /*============== animation  declaration =======================*/
                        .banner{
                            animation: banned 1.5s;
                            font-family: 'verdana';
                            font-size:25px;
                             animation-timing-function: ease-in-out;
                            animation-direction:reverse;
                        }

                         .section2{
                            animation:header 1.5s;
                            animation-timing-function: ease-in-out;
                            animation-direction:reverse;
                        }
        
        /*==============learner + instructor=============================*/
        
                    #sec8_p, #sec8_p2{
                        animation: sector1 1s;
                        animation-duration:4s;
                        animation-timing-function:ease-in-out;
                        animation-direction: reverse;
                    }    
        
                    #sec9_p, #sec_p2{
                        animation: sector2 1s;
                        animation-duration: 4s;
                        animation-timing-function:ease-in-out;
                        animation-direction: reverse;
                    }
        /*================learner + instructor ===============================*/
        
         /*====================images hover animation===========================*/
        
                        .card img, .sec8 img, .sec9 img{
                            transition: transform all ease-in-out;
                            transition-duration: 1s;
                        }

                         .sec8:hover img{
                            transform: scale(0.8);
                        }

                         .sec9:hover img{
                            transform: scale(0.8);
                        }

                        .card:hover img{
                            transform: scale(1.1);
                        }
        
        /*=========================images hover animation=======================*/
        
                /*===============animation starts here=========================*/

                                @keyframes header{
                                    from{       
                                        margin-left:350px;

                                    }
                                    to{
                                        margin-left:-35000px;   
                                    }
                                }

                                @keyframes banned{
                                    0%{       
                                        margin-right: 350px;
                                    }
                                    50%{
                                        margin-right: 500px;
                                    }
                                    100%{
                                        margin-right:-35000px;
                                    }
                                }

                                @keyframes sector1{
                                    from{       
                                        margin-right:350px;
                                       
                                    }
                                    to{
                                        margin-right:-35000px;
                                    }
                                }
                                @keyframes sector2{
                                    from{       
                                        margin-left:350px;
                                       
                                    }
                                    to{
                                        margin-left:-35000px;
                                    }
                                }
                                

            /*=======================animation ends here===========================*/

        
    </style>

</head>

<body>

    <div id="carouselExampleControls" class="carousel slide corousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">  
                <img src="images/first.jpg" class="d-block w-100" alt="Error" width="500px" height="700px">
            </div>
            <div class="carousel-item">
                <img src="images/next.jpg" class="d-block w-100" alt="Error" width="500px" height="700px">
            </div>
            <div class="carousel-item">
                <img src="images/quiz.jpg" class="d-block w-100" alt="Error"  width="500px" height="700px">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="section2">
        <p id="sec2_p1">The world's largest selection of courses</p>
        <p id="sec2_p2">Choose from 100,000 online video courses with new additions published every month</p>
    </div>
    <div style="background-color:#F44336; width:60px; height:60px; border-radius:100%; background:#4f167c; border:none; outline:none; color:#FFF; font-size:20px; box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23); transition:.3s;  -webkit-tap-highlight-color: rgba(0,0,0,0); position: fixed;bottom: 24px;left: 95%; z-index: 1;">
    <div style="position:absolute; top: 50%;left: 50%;transform: translate(-50%, -50%);">
        <div class="arrow">
         <a href="#" title="Back to Top"><span class="fas fa-angle-up"></span></a>
      </div>
      <!-- Chat Bot Icon -->
            <div class="ChatB">
            <a href="../Virya_Project/chatbot/" target="_blank"><i style="font-size: 30px;" class="fa fa-comments chatbox" aria-hidden="true"></i>
                </a>    </div>
    </div>    
    <!-- Chatbot Ends -->
    </div>
        <!------------------------offer card------------------------------------------------------->
        <div class="banner">
            <hr>
            <center>
                        Hurry Up ! <br> Coupon code is available for a limited time <br>
                    Use <b> TRYNEW </b> to get 10% off on all newly added courses ! 
                    <br>    Use <b> VIRYA20 </b> to get 20% off on all existing courses !
            <hr> 
            </center>
        </div>
    
    <!------------------------------course card 1----------------------------------------------------->
    
    <div class="section3">  <center>
        <p class="sec3_title">Trending Courses</p>
                            </center>
        <div class="card-group ">
            <div class="card p-4 mb-3" style="border:2px solid #f3f3f3 ; border-radius:25px;">
                <img src="../Virya_Project/categories/images/cs/python.jpg" class="card-img-top" alt="..." width="245px" height="253px">
                <div class="card-body px-2">    
                    <h5 class="card-title">Python</h5>
                    <p class="card-text">Enroll And Start Learning Now</p>
                    <a href="http://localhost/Virya_Project/categories/courses.php?cid=86&course_code=COSCPY86" button type="button" class="btn btn-primary">Explore</a>
                </div>
            </div>
            <div class="card p-4 mb-3" style="border:2px solid #f3f3f3; border-radius:25px;">
                <img src="../Virya_Project/categories/images/cs/java.jpg" class="card-img-top" alt="..." width="245px" height="253px">
                <div class="card-body px-2">
                    <h5 class="card-title">Java</h5>
                    <p class="card-text">Enroll And Start Learning Now</p>
                    <a href="http://localhost/Virya_Project/categories/courses.php?cid=88&course_code=COSCJP88" button type="button" class="btn btn-primary">Explore</a>
                </div>
            </div>
            <div class="card p-4 mb-3" style="border:2px solid #f3f3f3; border-radius:25px;">
                <img src="../Virya_Project/categories/images/languages/english.jpg" class="card-img-top" alt="..." width="245px" height="253px">
                <div class="card-body px-2">
                    <h5 class="card-title">English</h5>
                    <p class="card-text">Enroll And Start Learning Now</p>
                    <a href="http://localhost/Virya_Project/categories/courses.php?cid=54&course_code=LANGEN54" button type="button" class="btn btn-primary">Explore</a>
                </div>
            </div>
        </div>
    </div>
    <!---------------------------course card 1 ends-------------------------------------------------->
    
    
    <!--------------------course card 2 here---------------------------------------------------------->
    
            <div class="section3">  <center>
        <p class="sec3_title">On Demand Courses</p>
                            </center>
        <div class="card-group ">
            <div class="card p-4 mb-3" style="border:2px solid #f3f3f3 ; border-radius:25px;">
                <img src="../Virya_Project/categories/images/science_and_tech/ai.jpg" class="card-img-top" alt="..." width="245px" height="253px">
                <div class="card-body px-2">
                    <h5 class="card-title">Artificial Intelligence</h5>
                    <p class="card-text">Enroll And Start Learning Now</p>
                    <a href="http://localhost/Virya_Project/categories/courses.php?cid=14&course_code=SCTCAI14" button type="button" class="btn btn-primary">Explore</a>
                </div>
            </div>
            <div class="card p-4 mb-3" style="border:2px solid #f3f3f3; border-radius:25px;">
                <img src="../Virya_Project/categories/images/science_and_tech/vr.jpg" class="card-img-top" alt="..." width="245px" height="253px">
                <div class="card-body px-2">
                    <h5 class="card-title">Virtual Reality</h5>
                    <p class="card-text">Enroll And Start Learning Now</p>
                    <a href="http://localhost/Virya_Project/categories/courses.php?cid=12&course_code=SCTCVR12" button type="button" class="btn btn-primary">Explore</a>
                </div>
            </div>
            <div class="card p-4 mb-3" style="border:2px solid #f3f3f3; border-radius:25px;">
                <img src="../Virya_Project/categories/images/cs/android_app.png" class="card-img-top" alt="..." width="245px" height="253px">
                <div class="card-body px-2">
                    <h5 class="card-title">Android App Development</h5>
                    <p class="card-text">Enroll And Start Learning Now</p>
                    <a href="http://localhost/Virya_Project/categories/courses.php?cid=92&course_code=COSCAD92" button type="button" class="btn btn-primary">Explore</a>
                </div>
            </div>
        </div>  
    </div>
    
        <!-------------------------------------course card 2 ends---------------------------------->

    <div class="section4">
        <div class="sec4_1">
            <svg class="svg-inline--fa fa-play-circle fa-w-16 fa_icon" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="play-circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="" width="32px" height="32px">
                <path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm115.7 272l-176 101c-15.8 8.8-35.7-2.5-35.7-21V152c0-18.4 19.8-29.8 35.7-21l176 107c16.4 9.2 16.4 32.9 0 42z"></path>
            </svg><!-- <i class="fa fa-play-circle fa_icon"></i> -->
            <div class="sec4_p">
                <p class="sec4_p1">Find video courses on almost any topic</p>
                <p class="sec4_p2">Learn any topic anywhere you want</p>
            </div>
        </div>
        <div class="sec4_1">
            <svg class="svg-inline--fa fa-clock fa-w-16 fa_icon" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="clock" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="" width="32px" height="32px">
                <path fill="currentColor" d="M256,8C119,8,8,119,8,256S119,504,256,504,504,393,504,256,393,8,256,8Zm92.49,313h0l-20,25a16,16,0,0,1-22.49,2.5h0l-67-49.72a40,40,0,0,1-15-31.23V112a16,16,0,0,1,16-16h32a16,16,0,0,1,16,16V256l58,42.5A16,16,0,0,1,348.49,321Z"></path>
            </svg><!-- <i class="fas fa-clock fa_icon"></i> -->
            <div class="sec4_p">
                <p class="sec4_p1">Learn Any Where Any Time</p>
                <p class="sec4_p2">Enjoy lifetime access to courses and learn any time</p>
            </div>
        </div>  
        
        <div class="sec4_1">
            <svg class="svg-inline--fa fa-chalkboard-teacher fa-w-20 fa_icon" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chalkboard-teacher" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" data-fa-i2svg="" width="32px" height="32px">
                <path fill="currentColor" d="M208 352c-2.39 0-4.78.35-7.06 1.09C187.98 357.3 174.35 360 160 360c-14.35 0-27.98-2.7-40.95-6.91-2.28-.74-4.66-1.09-7.05-1.09C49.94 352-.33 402.48 0 464.62.14 490.88 21.73 512 48 512h224c26.27 0 47.86-21.12 48-47.38.33-62.14-49.94-112.62-112-112.62zm-48-32c53.02 0 96-42.98 96-96s-42.98-96-96-96-96 42.98-96 96 42.98 96 96 96zM592 0H208c-26.47 0-48 22.25-48 49.59V96c23.42 0 45.1 6.78 64 17.8V64h352v288h-64v-64H384v64h-76.24c19.1 16.69 33.12 38.73 39.69 64H592c26.47 0 48-22.25 48-49.59V49.59C640 22.25 618.47 0 592 0z"></path>
            </svg><!-- <i class="fas fa-chalkboard-teacher fa_icon"></i> -->
            <div class="sec4_p">
                <p class="sec4_p1">Learn from industry experts</p>
                <p class="sec4_p2">Select from top instructors around the world</p>
            </div>
        </div>
    </div>

    <section class="work" id="work"><br>
        <h2 id="work-heading" class="text-center" style="font-weight:bold;">
            <a href="categories_home.php">Browse Categories </a></h2>
        <p class="text-center" style="font-size:25px;">Explore Many Choices</p>
        <div class="sec8">
        <div class="sec8_main">
            <img src="images/instructor.jpg" alt="instructor" class="sec8_img">
            <div class="sec8_pa2">
                <p id="sec8_p">Become an instructor</p>
                <p id="sec8_p2">Top instructors from around the world teach millions of students on Virya. We provide the tools and skills to teach what you love.</p>
                <a href="instructor/instructor_login.php" id="sec_8btn">Start Teaching Today</a>
            </div>
        </div>
        <div class="sec8_1"></div>
    </div>
    </section>
                    
    <div class="sec9">
        <div class="sec9_main">
            <div class="sec9_pa2 py-100">
                <p id="sec9_p">Learn Anywhere Any Time</p>
                <p id="sec9_p2">Top instructors from around the world teach millions of students on E-learn. We provide the tools and skills to teach what you love.</p>
                <a href="user_login_details/user_login.php" id="sec_9btn">Start Learning Today</a>
            </div>
            <img src="images/student.jpg" alt="student" class="sec9_img">
        </div>
        <div class="sec9_1"></div>
    </div>
</body>
<?php

require('header_footer/footer.php');

?>

</html>
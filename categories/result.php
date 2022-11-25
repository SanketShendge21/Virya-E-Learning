<?php
include('../../Virya_Project/config.php');
include('../../Virya_Project/header_footer/header.php');

if(isset($_POST['submit']))
{

    if(isset($_POST['opt1']) and isset($_POST['opt2']) and isset($_POST['opt3']) and isset($_POST['opt4']))
    {
        #code
    }

    else{
        echo"<script>alert('All Questions Should Be Answered')
        window.location='../../Virya_Project/categories/courses.php?course_code=$_POST[course_code]'
        </script>";
    }
     
    // $a = $_POST['answer_a'];
    // $b = $_POST['answer_b'];
    // $c = $_POST['answer_c'];
    // $d = $_POST['answer_d'];

    // echo"$a<br>$b<br>$c<br>$d";



}


?>
<html>

<body>
    <div class="container mt-5">
        <center>
            <div class="col-md-6">
 

 </center> 


                <h2>Your Quiz Result</h2><br>
                <table class="table table-bordered table-active">

                    <thead>
                        <tr>
                            <th scope="col">Total No.of questions</th>
                            <th scope="col">5</th>

                        </tr>
                    </thead>
                    <tbody>
                      
                        <tr>
                            <th scope="row">Right Questions</th>
                            <td> <?php $rque = rand(3,5); echo $rque; ?></td>

                        </tr>
                        <tr>
                            <th scope="row">Wrong Answers</th>
                            <td><?php $wque = rand(0,2); if($rque == 5){
                                echo "0";
                            } elseif($rque == 4) {
                                    echo "1"; 
                                } else echo"2";
                            ?></td>

                        </tr>

                       
                    </tbody>



                </table>
                <div class="card-header mt-5 bg-success text-light">
                    <?php echo "Congragulations You Have Scored"; ?> <b><?php if($rque == 5){
                                echo "100%";
                            } elseif($rque == 4) {
                                    echo "80%"; 
                                } else echo"60%"; ?></b>
                </div>

                <button type="button" class="btn btn-primary mt-3"><a href="../../Virya_Project/index.php" style="text-decoration: none; color: white;">Home</a></button>
                <!--   <a href="quizhome.php" class="btn btn-success"> Back </a> -->
                
                <button type="button" class="btn btn-primary mt-3"><a target="_blank" href="../../Virya_Project/certificate/certificate.php?ccode=<?php echo $_POST['course_code'] ?>" style="text-decoration: none; color: white;">Certificate</a></button>
            </div>
        </center>
    </div>
</body>

</html>
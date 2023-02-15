<?php
$con =mysqli_connect("localhost","root","","registeration-table");
if($con){
    echo "yes<br> <br>";
}else{
    echo "no";
}

?>

<html>
    <head>
        <title>Database</title>
    </head>
    <link rel="stylesheet" href="css/style.css">
    <style>
        td{
            width:70px;
        }
    </style>
    <body>
        <div class="wrapper">
        <section>
        
                    <div class="bio-name">
                        <p>Student Name</p>
                        <p>father name</p>
                        <p>Mother Name</p>
                        <p>Date of birth</p>
                        <p>E-mail</p>
                        <p>Gender</p>
                        <p>Level</p>
                        <p>Department</p>
                        <p>Telephone</p>
                        <p>Password</p>
                    </div>


                <div class="input-fields">
                <form action="" method="post">
                <input type="text" name="student-name"><br>
                <br>
                <input type="text" name="father-name"><br>
                <br>
                <input type="text" name="student-mother-name"><br>
                <br>
                <input type="text" name="gender"><br>
                <br>
                <input type="text" name="dob"><br>
                <br>
                <input type="text" name="email"><br>
                <br>
                <input type="text" name="level"><br>
                <br>
                <input type="text" name="department"><br>
                <br>
                <input type="text" name="tel"><br>
                <br>
                <input type="text" name="password"><br>
                <br>
                <input type="submit" value="Regisrter">
                </div>
                
            </form>
        </section>
        </div>
        <table border="2px">
            <tr>
                <th>Name.</th>
            </tr>
        </table>
        <?php
        if(isset($_POST['submit'])){
            $student_f_name = $_POST['student-f-name'];
            
            $connect = mysqli_query($con,"INSERT INTO children (name) VALUES ('$student_f_name')");

            if($connect){
                echo "correct   <br>";
            }else{
                echo "incorrect <br>";
            }
        }

        if(isset($_POST['submit'])){
        $check = mysqli_query($con, "SELECT * FROM children");

        
        }
        $recheck = mysqli_num_rows($check);

    
        while( $stud = mysqli_fetch_assoc($check)){
        ?>
        
            <table border="1px">
        <tr>
            <td><?php echo $stud['name'];?></td>
        </tr>
            </table>

        <?php
        }
        ?>

    </body>
</html>
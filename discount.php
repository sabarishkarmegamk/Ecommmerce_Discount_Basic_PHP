
        <?php

    // Connect to database
    $con = mysqli_connect("localhost","root","","test");

        if(isset($_POST['submit'])){
            $three=$_POST['three'];
            $discount = 10;
            $selling = $three- ($three * ($discount / 100));
            echo $selling;
            $sql = "INSERT INTO maths (mul) VALUES ($selling)";
            $test=mysqli_query($con,$sql);
            
            if($test){
                echo "success";
            }else{
                echo "denied";
            }


            }
      
             ?>

    <form method="post">
           <input type="text" name="three" id="three" class="form-control" placeholder="">
       <input type="submit" name="submit">
    </form>
      
      
      <br >
<?php include'header.php'; ?>
        <section class="main-body bg-dark text-white">
    <!-- html code hear -->
        
        <h2>Enter the number between 1 and 10</h2>
        <form action="<?php $_SERVER["PHP_SELF"]; ?>" method="post">
            <input type="number" name="number" placeholder="Enter your Number">
            <input type="submit" value="Submit">
        </form>

        <?php

            $a=array(1,2,3,4,5,6,7,8,9,10);
            $random_keys =array_rand($a);
            
            if(isset($_POST['number'])){

                if(empty($_POST['number'])){
                    echo  "Please Enter number";
                }else{
                    $number = $_POST['number'];
                    if($number == $a[$random_keys]){
                        echo "<p style='color: green;'>congratulations your Right Number guess</p>";
                    }else{
                        echo "<p style='color: red;'>Wrong Number</p>";
                    }
    
                    echo "Right Number = ". $a[$random_keys];
                }
            }

        ?>



        </section>
 <?php include'footer.php'; ?>
<?php 
 require('config.php');
 require('connection.php');
 
    $from = $_POST['from'];
    $to= $_POST['to'];
    $amount =$_POST['amount'];

    $sql = "SELECT * FROM transaction WHERE id='$from'";
    $query= mysqli_query($connection,$sql);
    $sql1 = mysqli_fetch_assoc($query);

    $sql = "SELECT * FROM transaction WHERE id=$to";
    $query = mysqli_query($connection,$sql);
    $sql2 = mysqli_fetch_assoc($query);

    if($amount<0){
        echo '<script type="text/javascript">';
        echo 'alert("Negative values")';
        echo '</script>';
    }
    else if($amount > $sql1['balance']) 
    {
        
        echo '<script type="text/javascript">';
        echo ' alert("Bad Luck! Insufficient Balance")';  // showing an alert box.
        echo '</script>';
    }
    


    // constraint to check zero values
    else if($amount == 0){

         echo "<script type='text/javascript'>";
         echo "alert('Oops! Zero value cannot be transferred')";
         echo "</script>";
     }

     else{
        echo "<script type='text/javascript'>";
        echo "alert('Successfully done')";
        echo "</script>";

        $newbalance = $sql1['balance'] - $amount;
        $sql = "UPDATE transaction SET balance=$newbalance where id=$from";
        mysqli_query($connection,$sql);

        $newbalance = $sql2['balance'] + $amount;
        $sql = "UPDATE transaction SET balance=$newbalance where id=$to";
        mysqli_query($connection,$sql);

        

        if($query){
            echo "<script> alert('Transaction Successful');
                      window.location='index.php';     
                </script>";
                 

                            
            
        }

        $newbalance= 0;
        $amount =0;



     }

      
  



?>
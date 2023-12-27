<?php

include ('../config/config.php');

$button=$_REQUEST['submit'];

if($button=="getalldata"){

    $query = " SELECT * FROM users ";

    $exc = mysqli_query($conn,$query);

    $norows = mysqli_num_rows($exc);

    if($norows>1){

        ?>

        <table> <tr> <th>username</th> <th>password</th> </tr>

        <?php 
        
        while($userinfo=mysqli_fetch_assoc($exc)){

            echo "<tr><td>".$userinfo['username']."</td>"."<td>".$userinfo['password']."</td></tr>";


        }

    }

    else{echo "No users were found...";}
        
        ?>
    
    </table>
    
    <?php

    }

?>
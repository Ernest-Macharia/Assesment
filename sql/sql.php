<?php

$connect = mysqli_connect("localhost","root","","students");
if(!$connect){
   echo "not connected";
}else{
   $select = "SELECT * FROM institution ";
   $que = mysqli_query($connect,$select);
   if(!$que){
   	echo "query not done";
   }else{
   	$count = mysqli_num_rows($que);
   	if(!$count){
   		echo "no rows to fetch";
   	}else{
   		$row = mysqli_fetch_row($que);
   		if(!$row){
   			echo "rows not fetched";
   		}else{?>
            <table>
                  <thead>
                     <tr>
                        <td>institution Name</td>
                        <td>course name</td>
                        <td>number of students</td>
                     </tr>       
                  </thead>
               

            <?php
   			while($row = mysqli_fetch_array($que)){?>
   					<tbody>
   						<tr>
   							<td><?php  echo $row[1];?></td>
                        <?php
                        $id = $row['id'];
                        $sql = "SELECT * FROM course WHERE institution_id = $id ";
                        $que = mysqli_query($connect,$sql);
                        if(!$que){
                           echo "fail";
                        }else{
                           $count = mysqli_num_rows($que);
                           if (!$count) {
                              echo "no data";
                              
                           }else{
                            
                               echo $count;

                           }

                           
                           $row = mysqli_fetch_assoc($que);

                           while($row = mysqli_fetch_assoc($que)){?>


                              <?php

                           }
                            
                        }
  
                        ;?>

   							<td>BBIT</td>
   							<td>3</td>
   						</tr>
   					</tbody>

   				<?php

   			}
            ?>

               </table>


            <?php



   		}
   	}

   }
}


?>
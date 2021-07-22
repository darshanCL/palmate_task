<?php
$result=file_get_contents('https://spreadsheets.google.com/feeds/list/1a2DJvWWoRnXBcw7vtpmO0fT-xJeT03q_rhJTbtgmPss/od6/public/basic?alt=json');
$arr=json_decode($result,true);
$data=$arr['feed']['entry'];

?>


<table>
    <tr>
        <td>S.NO </td>
        <td>Fname </td>
        <td>Lname</td>
        <td>Email </td>
        <td>Date</td>
    </tr>

    <?php
    
    foreach($data as $list){



$str=$list['content']['$t'];
$arr=explode(",",$str);
$fnameArr=explode(":",$arr[0]);
$lnameArr=explode(":",$arr[1]);
$emailArr=explode(":",$arr[2]);
$dateArr=explode(":",$arr[3]);

           echo "<tr>
           <td>".$list['title']['$t']." </td>
           <td>".$fnameArr[1]." </td>
           <td> ".$lnameArr[1]."</td>
           <td>".$emailArr[1]."</td>
           <td>".$dateArr[1]."</td>
       </tr>";
    

    }
    ?>

</table>
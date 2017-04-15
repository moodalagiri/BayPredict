<html>
<head>
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
 <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
 <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
 <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>


 </head>
 <body>

<?php
$conn = mysqli_connect("localhost", "root", "manasa", "baypredict") ;
  if (!$conn) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}
   // echo "Success: A proper connection to MySQL was made! The my_db database is great.";
$query = "SELECT year as y, value as v FROM donut";

$result = mysqli_query($conn,$query);
$json_data=array();  
foreach($result as $rec)  
{  
   // echo $rec['y'];
    $json_array['label']=$rec['y'];  
    $json_array['value']=$rec['v'];  
    array_push($json_data,$json_array);  
}  


mysqli_close($conn);

?>


<div id="donut-chart" style="height: 250px;">
<script>
    Morris.Donut({
  element: 'donut-chart',
  data: <?php echo json_encode($json_data)?>
  });
</script>

</body>
</html>


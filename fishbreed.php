<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SF BAY</title>
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
 <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
 <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
 <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>

    <!-- Bootstrap Core CSS -->
    <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="../dist/css/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../bower_components/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">SF Bay Marine Life Prediction System</a>
            </div>
            <!-- /.navbar-header -->

            
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="index.html"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Area Based Analysis<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="santacruz.php">Santacruz</a>
                                </li>
                                <li>
                                    <a href="livelihood.php">Monterey Bay</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="tables.html"><i class="fa fa-table fa-fw"></i> Tables</a>
                        </li>
                        <li>
                            <a href="forms.html"><i class="fa fa-edit fa-fw"></i> Profile</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-sitemap fa-fw"></i> Marine Life Monitoring<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#">Sensor Nodes <span class="fa arrow"></span></a>
									<ul class="nav nav-third-level">
                                        <li>
                                            <a href="#">Temperature Sensor</a>
                                        </li>
                                        <li>
                                            <a href="#">pH Sensor</a>
                                        </li>
                                        <li>
                                            <a href="#">Water Current</a>
                                        </li>
                                        <li>
                                            <a href="#">Oxygen Level</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Marine Data <span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li>
                                            <a href="#">Breeding Habits</a>
                                        </li>
                                        <li>
                                            <a href="#">Fishing Time</a>
                                        </li>
                                        <li>
                                            <a href="#">Species Livelihood</a>
                                        </li>
                                    </ul>
                                    <!-- /.nav-third-level -->
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Fish Breeding Habits Prediction</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-8">
				   <div class="panel panel-default" >
                        <div class="panel-heading">
                            <i class="fa fa-bar-chart-o fa-fw"></i> Breeding Patterns
                            <div class="pull-right">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                                        Actions
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu pull-right" role="menu">
                                        <li><a href="#">Action</a>
                                        </li>
                                        <li><a href="#">Another action</a>
                                        </li>
                                        <li><a href="#">Something else here</a>
                                        </li>
                                        <li class="divider"></li>
                                        <li><a href="#">Separated link</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- /.panel-heading -->

                        <div class="panel-body" >
                              <?php



// Create connection
$conn = mysqli_connect("127.0.0.1", "root", "root", "baypredict") ;
  if (!$conn) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

echo "Success: A proper connection to MySQL was made! The my_db database is great.";

$query = "SELECT * FROM monterey2015 ORDER BY time";
$result = $conn->query($query);

if($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    $currentdate = strtotime($row['time']);
    $dateArray[]=date('Y-m-d',$currentdate);
        $month[] =substr($row['time'], 0,1);
        $oxygen[]=$row['oxygen_in_sea_water'];
        $pressure[]=$row['sea_water_pressure'];
        $temperature[]=$row['sea_water_temperature'];
        $s="hello";
    }
} else {
    echo "0 results";
}

$pressure_factor=1;
$others_factor =1;
$count5=0;
$count6=0;
$count7=0;
$count8=0;
$count9=0;

for($i=0;$i<10000;$i++)
{

if($month[$i] == '5')
{
    $count5 = $count5+1;
    if($temperature[$i]>19.5 && $temperature[$i] <12.5)
    {
      $temperature_factor = 0.2;  
    }
    else if($temperature[$i] >18 && $temperature[$i] < 13)
    {
        $temperature_factor = 0.6;  
    }
    else if($temperature[$i] >17 && $temperature[$i] <14)
    {
        $temperature_factor = 0.8;
    }
    else
    {
        $temperature_factor = 1; 
    }

    if($oxygen[$i] > 0.005 && $oxygen[$i] < 0.0123)
    {
        $oxygen_factor = 0.2;
    }
    elseif ($oxygen[$i] > 0.045 && $oxygen[$i]<0.013) {
        $oxygen_factor = 0.6;
    }
    else
    {
        $oxygen_factor = 1;
    }
    
    $tuna5 += ((30*$oxygen_factor)+(25*$temperature_factor)+(25*$pressure_factor)+(20*0.8));
    $salmon5+= ((25*$oxygen_factor)+(20*$temperature_factor)+(25*$pressure_factor)+(20*0.7));
    $barracuda5+=((35*$oxygen_factor)+(20*$temperature_factor)+(25*$pressure_factor)+(20*0.9));
    $tuna_sum5 = $tuna5/$count5;
    $salmon_sum5 =$salmon5/$count5;
    $barracuda_sum5=$barracuda5/$count5;
    $result5 = array("mon"=>$dateArray[$i],"tuna"=>$tuna_sum5,"salmon"=>$salmon_sum5,"barracuda"=>$barracuda_sum5);
}


if($month[$i] == '6')
{
    $count6 = $count6+1;
if($temperature[$i]>19.5 && $temperature[$i] <12.5)
    {
      $temperature_factor = 0.2;  
    }
    else if($temperature[$i] >18 && $temperature[$i] < 13)
    {
        $temperature_factor = 0.6;  
    }
    else
    {
        $temperature_factor = 1; 
    }

    if($oxygen[$i] > 0.005 && $oxygen[$i] < 0.0123)
    {
        $oxygen_factor = 0.2;
    }
    elseif ($oxygen[$i] > 0.045 && $oxygen[$i]<0.013) {
        $oxygen_factor = 0.6;
    }
    else
    {
        $oxygen_factor = 1;
    }
    $tuna6 += ((30*$oxygen_factor)+(25*$temperature_factor)+(25*$pressure_factor)+(20*0.6));
    $salmon6+= ((25*$oxygen_factor)+(20*$temperature_factor)+(25*$pressure_factor)+(20*0.7));
    $barracuda6+=((35*$oxygen_factor)+(20*$temperature_factor)+(25*$pressure_factor)+(20*0.9));
    $tuna_sum6 = $tuna6/$count6;
    $salmon_sum6 =$salmon6/$count6;
    $barracuda_sum6=$barracuda6/$count6;
    $result6 = array("mon"=>$dateArray[$i],"tuna"=>$tuna_sum6,"salmon"=>$salmon_sum6,"barracuda"=>$barracuda_sum6);
}


if($month[$i] == '7')
{
$count7 = $count7+1;
    if($temperature[$i]>19.5 && $temperature[$i] <12.5)
    {
      $temperature_factor = 0.2;  
    }
    else if($temperature[$i] >18 && $temperature[$i] < 13)
    {
        $temperature_factor = 0.6;  
    }
    else
    {
        $temperature_factor = 1; 
    }

    if($oxygen[$i] > 0.005 && $oxygen[$i] < 0.0123)
    {
        $oxygen_factor = 0.2;
    }
    elseif ($oxygen[$i] > 0.045 && $oxygen[$i]<0.013) {
        $oxygen_factor = 0.6;
    }
    else
    {
        $oxygen_factor = 1;
    }
    $tuna7 += ((30*$oxygen_factor)+(25*$temperature_factor)+(25*$pressure_factor)+(20*$others_factor));
    $salmon7+= ((25*$oxygen_factor)+(20*$temperature_factor)+(25*$pressure_factor)+(20*0.7));
    $barracuda7+=((35*$oxygen_factor)+(20*$temperature_factor)+(25*$pressure_factor)+(20*0.9));
    $tuna_sum7 = $tuna7/$count7;        
    $salmon_sum7 =$salmon7/$count7;
    $barracuda_sum7=$barracuda7/$count7;
    $result7 = array("mon"=>$dateArray[$i],"tuna"=>$tuna_sum7,"salmon"=>$salmon_sum7,"barracuda"=>$barracuda_sum7);
}



if($month[$i] == '8')
{
$count8 = $count8+1;
    if($temperature[$i] >19.5 && $temperature[$i] <12.5)
    {
    $temperature_factor = 0.2;  
    }
    else if($temperature[$i] >18 && $temperature[$i] < 13)
    {
        $temperature_factor = 0.6;  
    }
    else
    {
        $temperature_factor = 1; 
    }

    if($oxygen[$i] > 0.005 && $oxygen[$i]< 0.0123)
    {
        $oxygen_factor = 0.2;
    }
    elseif ($oxygen[$i] > 0.045 && $oxygen[$i]<0.013) {
        $oxygen_factor = 0.6;
    }
    else
    {
        $oxygen_factor = 1;
    }
    $tuna8 += ((30*$oxygen_factor)+(25*$temperature_factor)+(25*$pressure_factor)+(20*$others_factor));
    $salmon8+= ((25*$oxygen_factor)+(20*$temperature_factor)+(25*$pressure_factor)+(20*0.7));
    $barracuda8+=((35*$oxygen_factor)+(20*$temperature_factor)+(25*$pressure_factor)+(20*0.9));
    $tuna_sum8 = $tuna8/$count8;        
    $salmon_sum8=$salmon8/$count8;
    $barracuda_sum8=$barracuda8/$count8;
    $result8 = array("mon"=>$dateArray[$i],"tuna"=>$tuna_sum8,"salmon"=>$salmon_sum8,"barracuda"=>$barracuda_sum8);
}

if($month[$i] == '9')
{
$count9 = $count9+1;
    if($temperature[$i]>19.5 && $temperature[$i] <12.5)
    {
      $temperature_factor = 0.2;  
    }
    else if($temperature[$i] >18 && $temperature[$i] < 13)
    {
        $temperature_factor = 0.6;  
    }
    else
    {
        $temperature_factor = 1; 
    }

    if($oxygen[$i] > 0.005 && $oxygen[$i] < 0.0123)
    {
        $oxygen_factor = 0.2;
    }
    elseif ($oxygen[$i] > 0.045 && $oxygen[$i]<0.013) {
        $oxygen_factor = 0.6;
    }
    else
    {
        $oxygen_factor = 1;
    }

    $tuna9 += ((30*$oxygen_factor)+(25*$temperature_factor)+(25*$pressure_factor)+(20*$others_factor));
    $salmon9+= ((25*$oxygen_factor)+(20*$temperature_factor)+(25*$pressure_factor)+(20*0.7));
    $barracuda9+=((35*$oxygen_factor)+(20*$temperature_factor)+(25*$pressure_factor)+(20*0.9));
    $tuna_sum9 = $tuna9/$count9;    
    $salmon_sum9=$salmon9/$count9;
    $barracuda_sum9=$barracuda9/$count9;    
    $result9 = array("mon"=>$dateArray[$i],"tuna"=>$tuna_sum9,"salmon"=>$salmon_sum9,"barracuda"=>$barracuda_sum9);
}

}
$result1=array($result5,$result6,$result7,$result8,$result9);

mysqli_close($conn);

?>
<div id="morris-area-chart">
<script>
 
Morris.Area({
    // ID of the element in which to draw the chart.
    element: 'morris-area-chart',
 
    // Chart data records -- each entry in this array corresponds to a point
    // on the chart.
    data: <?php echo json_encode($result1);?>,
 
    // The name of the data record attribute that contains x-values.
    xkey: 'mon',
 
    // A list of names of data record attributes that contain y-values.
    ykeys: ['tuna','salmon','barracuda'],
    
 
    // Labels for the ykeys -- will be displayed when you hover over the
    // chart.
    labels: ['tuna','salmon','barracuda'],
 
    lineColors: ['#0b62a4','#000000','#FF8000'],

    xLabels: 'mon',
xLabelFormat: function (x) {
                  var IndexToMonth = [ "Jan", "Feb", "Mär", "Apr", "Mai", "Jun", "Jul", "Aug", "Sep", "Okt", "Nov", "Dez" ];
                  var month = IndexToMonth[ x.getMonth() ];
                  var year = x.getFullYear();
                  return year + ' ' + month;
              },    
 
    // Disables line smoothing
    smooth: true,
    resize: true
});
</script>
</div>

						<p>&nbsp;&nbsp;&nbsp;&nbsp;X-axis: Time</p>
						<p>&nbsp;&nbsp;&nbsp;&nbsp;Y-axis: Breeding Population</p>                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                    <div class="panel panel-default" style="visibility:hidden;">
                        <div class="panel-heading">
                            <i class="fa fa-bar-chart-o fa-fw"></i> Bar Chart Example
                            <div class="pull-right">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                                        Actions
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu pull-right" role="menu">
                                        <li><a href="#">Action</a>
                                        </li>
                                        <li><a href="#">Another action</a>
                                        </li>
                                        <li><a href="#">Something else here</a>
                                        </li>
                                        <li class="divider"></li>
                                        <li><a href="#">Separated link</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="row">
                                
                                <!-- /.col-lg-4 (nested) -->
                                <div class="col-lg-8">
                                    <div id="morris-bar-chart">

                                    </div>
                                </div>
                                <!-- /.col-lg-8 (nested) -->
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.panel-body -->
                    </div> 
                    <!-- /.panel -->
                    
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-8 -->
                <div class="col-lg-4">
                    <div class="panel panel-default" >
                        <div class="panel-heading">
                            <i class="fa fa-bell fa-fw"></i> User Notifications Panel
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="list-group">
                                <a href="#" class="list-group-item">
                                    <i class="fa fa-comment fa-fw"></i> Marine Live Data
                                    <span class="pull-right text-muted small"><em>4 minutes ago</em>
                                    </span>
                                </a>
                                <a href="#" class="list-group-item">
                                    <i class="fa fa-envelope fa-fw"></i> New Messages 
                                    <span class="pull-right text-muted small"><em>27 minutes ago</em>
                                    </span>
                                </a>
                                <a href="#" class="list-group-item">
                                    <i class="fa fa-upload fa-fw"></i> Prediction Data Uploaded
                                    <span class="pull-right text-muted small"><em>11:32 AM</em>
                                    </span>
                                </a>
                                
                            </div>
                            <!-- /.list-group -->
                            <a href="#" class="btn btn-default btn-block">View All Alerts</a>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                    <div class="panel panel-default" style="visibility:hidden;">
                        
                        <div class="panel-body">
                            <div id="morris-donut-chart"></div>
                            
                        </div>
                    </div>
                        <!-- /.panel-body -->
                    <!-- /.panel -->
                    
                    <!-- /.panel .chat-panel -->
                </div>
                <!-- /.col-lg-4 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="../bower_components/raphael/raphael-min.js"></script>
    <script src="../bower_components/morrisjs/morris.min.js"></script>
    <script src="../js/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>

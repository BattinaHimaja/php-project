<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "userregistration";


$conn = mysqli_connect($servername,$username,$password,$dbname);

$query = "select jan,feb,march,april,may,june from  saleschart";
$result = mysqli_query($conn,$query);

if(mysqli_num_rows($result) >= 1) {
    while ($row = mysqli_fetch_assoc($result)) {

        $jan = $row['jan'];
        $feb = $row['feb'];
        $march = $row['march'];
        $april = $row['april'];
        $may = $row['may'];
        $june = $row['june'];
       
    }
}
    else
    {
    echo "somting went wrong";

    }
?>


<html>

<head>
<style>
	
</style>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.css" rel="stylesheet">

</head>
<body>



<canvas id="myChart" width="900" height="500"></canvas>
<?php

echo "<input type='hidden' id= 'jan' value = '$jan' >";
echo "<input type='hidden' id= 'feb' value = '$feb' >";
echo "<input type='hidden' id= 'march' value = '$march' >";
echo "<input type='hidden' id= 'april' value = '$april' >";
echo "<input type='hidden' id= 'may' value = '$may' >";
echo "<input type='hidden' id= 'june' value = '$june' >";


?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"></script>


<script>
    var jan = document.getElementById("jan").value;
    var feb = document.getElementById("feb").value;
    var march = document.getElementById("march").value;
    var april = document.getElementById("april").value;
    var may = document.getElementById("may").value;
    var june = document.getElementById("june").value;
   

    window.onload = function()
    {
        var randomScalingFactor = function() {
            return Math.round(Math.random() * 100);
        };
        var config = {
            type: 'bar',
            data: {
                borderColor : "#fffff",
                datasets: [{
                    data: [
                        jan,
                        feb,
                        march,
                        april,
                        may,
                        june,
                       
                    ],
                    borderColor : "#fff",
                    borderWidth : "3",
                    hoverBorderColor : "#000",

                    label: 'No Of Events Held per Month',

                    backgroundColor: [
                        "#0190ff",
                        "#56d798",
                        "#ff8397",
                        "#6970d5",
                        "#f312cb",
                        "#ff0060",
                        

                    ],
                    hoverBackgroundColor: [
                        "#f38b4a",
                        "#56d798",
                        "#ff8397",
                        "#6970d5",
                        "#ffe400"
                    ]
                }],

                labels: [
                    'Jan',
                    'Feb',
                    'March',
                    'April',
                    'May',
                    'June',
                    
                ]
            },

            options: {
                responsive: true

            }
        };
        var ctx = document.getElementById('myChart').getContext('2d');
        window.myPie = new Chart(ctx, config);


    };
</script>

</body>

</html>
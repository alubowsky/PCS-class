<?php
    $presidents = [
        [
            "George W. Bush",
            "2001-2009",
            70
        ],
        [
            "Barack Obama",
            "2009-2017",
            55
        ],
        [
            "Donald Trump",
            "2017-",
            71
        ]
    ];

    $presidents2 = [
        [
            "Name" => "George W. Bush",
            "Years" => "2001-2009",
            "Age" => 70,
        ],
        [
            "Name" => "Barack Obama",
            "Years" => "2009-2017",
            "Age" => 55
        ],
        [
            "Name" => "Donald Trump",
            "Years" => "2017-",
            "Age" => 71
        ]
    ];

    $length = count($presidents);
    $length2 = count($presidents2);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" 
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class = "container">
        <table class = "table table-striped table-bordered table-hover">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Year</th>
                    <th>Age</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    /* with a double for loop
                    for($i = 0; $i < $length; $i++){
                        echo "<tr> ";
                        for($j = 0; $j < count($presidents[$i]); $j++){
                            echo "<td>" . $presidents[$i][$j] . "</td>";
                        }
                            echo "</tr>";
                    }*/

                    #using a foreach
                    foreach($presidents as $president){
                        echo "<tr>";
                        foreach($president as $value){
                            echo "<td> " . $value . "</td>";
                        }
                        echo "</tr>";
                    }
                ?>
            </tbody>
        </table>

        <table class = "table table-striped table-bordered table-hover">
            <thead>
                    <?php
                        foreach($presidents2[0] as $key=>$value) {
                            echo "<th>". $key ."</th>";
                        }      
                    ?>
            </thead>
            <tbody>
                <?php
                    foreach($presidents2 as $president){
                        echo "<tr>";
                        foreach($president as $value){
                            echo "<td> " . $value . "</td>";
                        }
                        echo "</tr>";
                    }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
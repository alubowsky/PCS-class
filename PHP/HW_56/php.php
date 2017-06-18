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
    <table class = "table table-striped table-bordered table-hover">
        <thead>
            <tr>
                <th>Name</th>
                <th>Year</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <tr>
                <td>
                    <?php
                        $name = "George W. Bush";
                        echo $name;
                    ?>
                </td>
                <td>
                    <?php
                        $year = "2001-2009";
                        echo $year;
                    ?>
                </td>
            </tr>
                <td>
                    <?php
                        $name = "Barak Obama";
                        echo $name;
                    ?>
                </td>
                <td>
                    <?php
                        $year = "2009-2017";
                        echo $year;
                    ?>
                </td>
            </tr>
            <tr>
                <td>
                    <?php
                        $name = "Donald Trump";
                        echo $name;
                    ?>
                </td>
                <td>
                    <?php
                        $year = "2017 -";
                        echo $year;
                    ?>
                </td>
            </tr>
        </tbody>
    </table>
</body>
</html>

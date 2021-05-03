<?php 
    require "../functions.php";
    redirectingUnauthUsers("search");
?>

<html lang="en-us">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles.css">
    <link rel="icon" href="../images/logo.svg" sizes="any" type="image/svg+xml">
    <title>QSIM</title>
</head>

<body>
    <?php 
        $header = fopen("../headerFormat.php", "r") or die("Unable to open file!");
        echo fread($header,filesize("../headerFormat.php"));
        fclose($header);
    ?>

    <script>
        document.getElementById("searchTab").className = "activetab";
    </script>

    <maincontents>
        
        Filters: <span style="background-color:lightgrey; border-radius:5px; padding:5px;">1x DPCU SHIRT  <b>X</b></span> <br> <br> <input type="text" style="width:50%; padding:10px; border-radius:20px;"> <br> <br> <br>
        <a href="">Export List</a> 
        <span style="float:right"><a href="">Advanced Search</a></span> <br> <br>
        <table id="tableSearch" style="width: 85%; margin-left: 7.5%;"> <!-- THIS IS PADDING -->
            <tr>
                <th style="width:45%" colspan="2">Name</th>
                <th style="width:5%">PL</th>
                <th style="width:10%">Rank</th>
                <th style="width:10%">APPT</th>
                <th style="width:30%"></th>
            </tr>
            <tr>
                <td>SMITH</td>
                <td>John</td>
                <td>1</td>
                <td>CPL</td>
                <td>SECT 2IC</td>
                <td><button type="button">Issue</button> <button type="button">Return</button> <button type="button">Lost/Damaged</button></td>
            </tr>
            <tr>
                <td>SMITH</td>
                <td>John</td>
                <td>1</td>
                <td>CPL</td>
                <td>SECT 2IC</td>
                <td><button type="button">Issue</button> <button type="button">Return</button> <button type="button">Lost/Damaged</button></td>
            </tr>
            <tr>
                <td>SMITH</td>
                <td>John</td>
                <td>1</td>
                <td>CPL</td>
                <td>SECT 2IC</td>
                <td><button type="button">Issue</button> <button type="button">Return</button> <button type="button">Lost/Damaged</button></td>
            </tr>
            <tr>
                <td>SMITH</td>
                <td>John</td>
                <td>1</td>
                <td>CPL</td>
                <td>SECT 2IC</td>
                <td><button type="button">Issue</button> <button type="button">Return</button> <button type="button">Lost/Damaged</button></td>
            </tr>
        </table>
    </maincontents>

    <footer>
        Lachlan Muir ®2021
    </footer>
</body>
</html>
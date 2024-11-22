<?php
$full_name=$_POST['full_name'];
$email=$_POST['email'];
$date=$_POST['date'];
$country=$_POST['country'];
$grade=$_POST['grade'];
$Gender=$_POST['Gender'];
$reason=$_POST['reason'];
$issue=$_POST['issue'];
$school=$_POST['school'];
$marks=$_POST['marks'];
$file=$_POST['file'];
$range=$_POST['range'];
$color=$_POST['color'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data</title>
    <link rel="stylesheet" href="table.css">
</head>
<body >

    <h1>DETAILS ABOUT A PERSON</h1>
    <table border="1">
    <tr>
        <th>Full name</th>
        <th>Email</th>
        <th>Date of birth</th>
        <th>Country</th>
        <th>Grade</th>
        <th>Gender</th>
        <th>Reason</th>
    </tr>

    <tr>

    <td><?php echo htmlspecialchars($full_name); ?></td>
        <td><?php echo htmlspecialchars($email); ?></td>
        <td><?php echo htmlspecialchars($date); ?></td>
        <td><?php echo htmlspecialchars($country); ?></td>
        <td><?php echo htmlspecialchars($grade); ?></td>
        <td><?php echo htmlspecialchars($Gender); ?></td>
        <td><?php echo htmlspecialchars($reason); ?></td>
    </tr>
    </table>

    <table  border="1">
    <tr>
        
        <th>Issue</th>
        <th>School</th>
        <th>Marks</th>
        <th>Extra File</th>
        <th>Range of sickness</th>
        <th>Favourite color</th>

    </tr><br>
    
    <tr>
        
        <td><?php echo htmlspecialchars($issue); ?></td>
        <td><?php echo htmlspecialchars($school); ?></td>
        <td><?php echo htmlspecialchars($marks); ?></td>
        <td><?php echo htmlspecialchars($file); ?></td>
        <td><?php echo htmlspecialchars($range); ?></td>
        <td><?php echo htmlspecialchars($color); ?></td>
        
    </tr>
   
    </table>
</body>
</html>
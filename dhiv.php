<?php
if(isset($_POST['submit']))
{
    $name = $_POST['name'];
    $password = $_POST['password'];
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];
    $course = $_POST['course'];

    $hobbies = "";
    if(isset($_POST['hobby']))
    {
        $hobbies = implode(", ", $_POST['hobby']);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>PHP Form Example</title>
    <style>
        body{
            font-family: Arial, sans-serif;
            background:#f2f2f2;
        }
        .container{
            width:500px;
            margin:30px auto;
            background:white;
            padding:20px;
            border-radius:10px;
            box-shadow:0 0 10px gray;
        }
        table{
            width:100%;
            border-collapse:collapse;
            margin-top:20px;
        }
        table, th, td{
            border:1px solid black;
        }
        th{
            background:#4CAF50;
            color:white;
            padding:10px;
        }
        td{
            padding:10px;
        }
        input, select{
            width:100%;
            padding:8px;
            margin-top:5px;
            margin-bottom:10px;
        }
        input[type=radio],
        input[type=checkbox]{
            width:auto;
        }
        button{
            background:green;
            color:white;
            padding:10px 20px;
            border:none;
            cursor:pointer;
        }
    </style>
</head>
<body>

<div class="container">

<h2>Student Registration Form</h2>

<form method="post">

<label>Name</label>
<input type="text" name="name" required>

<label>Password</label>
<input type="password" name="password" required>

<label>Gender</label><br>
<input type="radio" name="gender" value="Male" required> Male
<input type="radio" name="gender" value="Female"> Female
<br><br>

<label>Hobbies</label><br>
<input type="checkbox" name="hobby[]" value="Reading"> Reading
<input type="checkbox" name="hobby[]" value="Sports"> Sports
<input type="checkbox" name="hobby[]" value="Music"> Music
<br><br>

<label>Date of Birth</label>
<input type="date" name="dob" required>

<label>Course</label>
<select name="course">
    <option>BCA</option>
    <option>B.Sc</option>
    <option>B.Com</option>
    <option>B.Tech</option>
</select>

<button type="submit" name="submit">Submit</button>

</form>

<?php
if(isset($_POST['submit']))
{
?>
<h2>Submitted Data</h2>

<table>
<tr>
    <th>Field</th>
    <th>Value</th>
</tr>

<tr>
    <td>Name</td>
    <td><?php echo $name; ?></td>
</tr>

<tr>
    <td>Password</td>
    <td><?php echo $password; ?></td>
</tr>

<tr>
    <td>Gender</td>
    <td><?php echo $gender; ?></td>
</tr>

<tr>
    <td>Hobbies</td>
    <td><?php echo $hobbies; ?></td>
</tr>

<tr>
    <td>Date of Birth</td>
    <td><?php echo $dob; ?></td>
</tr>

<tr>
    <td>Course</td>
    <td><?php echo $course; ?></td>
</tr>

</table>

<?php
}
?>

</div>

</body>
</html>
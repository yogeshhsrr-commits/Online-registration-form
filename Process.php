<?php
// Simple security: only handle POST requests
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: index.html');
    exit();
}

// Helper function to safely get values
function safe($field) {
    return isset($_POST[$field]) ? htmlspecialchars(trim($_POST[$field])) : '';
}

$fullname = safe('fullname');
$email    = safe('email');
$phone    = safe('phone');
$dob      = safe('dob');
$gender   = safe('gender');
$course   = safe('course');
$address  = safe('address');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration Submitted</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .result-container {
            width: 90%;
            max-width: 700px;
            margin: 40px auto;
            background: #ffffff;
            padding: 25px 30px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .result-container h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }
        th, td {
            padding: 8px 10px;
            border: 1px solid #ddd;
            text-align: left;
        }
        th {
            background: #f8f8f8;
        }
        .back-link {
            display: inline-block;
            margin-top: 20px;
            text-decoration: none;
            padding: 8px 15px;
            border-radius: 4px;
            background: #007bff;
            color: #fff;
        }
        .back-link:hover {
            background: #0056b3;
        }
    </style>
</head>
<body>
<div class="result-container">
    <h2>Application Submitted Successfully</h2>
    <p>Your details are as follows:</p>
    <table>
        <tr>
            <th>Full Name</th>
            <td><?php echo $fullname; ?></td>
        </tr>
        <tr>
            <th>Email</th>
            <td><?php echo $email; ?></td>
        </tr>
        <tr>
            <th>Phone</th>
            <td><?php echo $phone; ?></td>
        </tr>
        <tr>
            <th>Date of Birth</th>
            <td><?php echo $dob; ?></td>
        </tr>
        <tr>
            <th>Gender</th>
            <td><?php echo $gender; ?></td>
        </tr>
        <tr>
            <th>Course / Program</th>
            <td><?php echo $course; ?></td>
        </tr>
        <tr>
            <th>Address</th>
            <td><?php echo nl2br($address); ?></td>
        </tr>
    </table>

    <a href="index.html" class="back-link">Back to Form</a>
</div>
</body>
</html>

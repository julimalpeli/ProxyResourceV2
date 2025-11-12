<?php
$sessionKey = $_GET['SessionKey'] ?? 'N/A';
$name = $_GET['name'] ?? 'Unknown';
$email = $_GET['email'] ?? 'unknown@example.com';
$phone = $_GET['phone'] ?? 'Unspecified';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Agent View Placeholder</title>
    <link rel="stylesheet" href="/include/bootstrap/3.4.1/css/bootstrap.min.css" />
    <style>
        body {
            padding: 40px 20px;
            background-color: #f5f5f5;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Agent View Placeholder</h1>
        <p>This PHP project mirrors the original Glance cobrowse test pages. The agent view functionality is not implemented, but the request parameters are echoed below for testing purposes.</p>
        <ul class="list-group">
            <li class="list-group-item"><strong>Session Key:</strong> <?= htmlspecialchars($sessionKey, ENT_QUOTES, 'UTF-8') ?></li>
            <li class="list-group-item"><strong>Name:</strong> <?= htmlspecialchars($name, ENT_QUOTES, 'UTF-8') ?></li>
            <li class="list-group-item"><strong>Email:</strong> <?= htmlspecialchars($email, ENT_QUOTES, 'UTF-8') ?></li>
            <li class="list-group-item"><strong>Phone:</strong> <?= htmlspecialchars($phone, ENT_QUOTES, 'UTF-8') ?></li>
        </ul>
        <a class="btn btn-primary" href="/cobrowse/test/TestProxyResources.php">Back to Cobrowse Tests</a>
    </div>
</body>
</html>

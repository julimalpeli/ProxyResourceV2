<?php
$host = $_SERVER['HTTP_HOST'] ?? 'localhost';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Cobrowse Test Settings</title>
    <link rel="stylesheet" href="/include/bootstrap/3.4.1/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/site/wp/content/theme/css/style.css?v=6.53.0.2144784633" />
    <link rel="stylesheet" href="/include/font-awesome/4.7.0/css/font-awesome.css"/>
    <link rel="stylesheet" href="styles/CobrowseTestMaster.css" />
    <style>
        body {
            padding: 40px 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Cobrowse Test Page Settings</h1>
        <p>This PHP replica does not expose the original settings form, but you can adjust resources directly within the project files.</p>
        <p>Current host detected: <strong><?= htmlspecialchars($host, ENT_QUOTES, 'UTF-8') ?></strong></p>
        <p><a class="btn btn-primary" href="TestProxyResources.php">Return to TestProxyResources</a></p>
    </div>
</body>
</html>

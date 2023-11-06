<?php require_once 'app/data/site_info.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="<?php echo $site_info['author']; ?>">
    <title>Document</title>
</head>
<body>
    <h1><?php echo $site_info['title']; ?></h1>
    <p><?php echo $site_info['description']; ?></p>
</body>
</html>
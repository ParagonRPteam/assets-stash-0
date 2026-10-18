<?php $files = scandir('.'); ?>
<!DOCTYPE html>
<html>
<head>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; background-color: black; color: white;}
        a { display: block; margin: 8px 0; }
    </style>
</head>
<body>
    <h1>Files in this Directory</h1>
    <ul>
        <?php foreach ($files as $file): ?>
            <?php if ($file !== '.' && $file !== '..'): ?>
                <li><a href="<?php echo htmlspecialchars($file); ?>">
                    <?php echo htmlspecialchars($file); ?>
                </a></li>
            <?php endif; ?>
        <?php endforeach; ?>
    </ul>
</body>
</html>

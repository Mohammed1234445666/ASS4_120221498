<?php
require_once 'auth_logic.php'; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>URI Attack</title>
</head>
<body>
    <center>
    <h1>URI Attack</h1>
    
    <p>صلاحية المستخدم المُسجل دخوله حالياً : <?php echo htmlspecialchars($user_role); ?></p>
    <p>نوع التقرير المطلوب : <?php echo htmlspecialchars($requested_type); ?></p>
    
    <hr>

    <?php if ($allowed_access): ?>
        <div class="success">
            <h2>تم عرض التقرير بنجاح:</h2>
            <p><?php echo $report_content; ?></p>
        </div>
    <?php else: ?>
        <div class="error">
            <h2>خطأ في الوصول:</h2>
            <p><?php echo $report_content; ?></p>
        </div>
    <?php endif; ?>
    </center>
</body>
</html>
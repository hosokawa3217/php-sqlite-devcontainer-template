<?php
// SQLiteデータベースの自動作成・接続テスト
try {
    $dbPath = __DIR__ . '/../database.sqlite';
    $pdo = new PDO("sqlite:" . $dbPath);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $message = "SQLite への接続に成功しました！";
} catch (PDOException $e) {
    $message = "接続エラー: " . $e->getMessage();
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>Dev Container テスト</title>
</head>
<body>
    <h1>PHP & SQLite 開発環境</h1>
    <p><?php echo htmlspecialchars($message); ?></p>
</body>
</html>
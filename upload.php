<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>ファイルアップロード</title>
</head>
<body>
    <h1>ファイルアップロード</h1>
    <!-- ファイルアップロードフォーム -->
    <form enctype="multipart/form-data" action="upload.php" method="POST">
        <!-- ファイル選択 -->
        <label for="user_file_name">アップロードするファイル:</label>
        <input id="user_file_name" name="user_file_name" type="file" required />
        <br><br>

        <!-- ファイル名指定 -->
        <label for="custom_file_name">保存するファイル名 :</label>
        <input id="custom_file_name" name="custom_file_name" type="text"  required />
        <br><br>

        <!-- フォーム送信ボタン -->
        <input type="submit" value="ファイル送信" />
    </form>
</body>
</html>

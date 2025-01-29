<?php
if (empty($_POST["message"])) {
    die("留言内容不能为空");
}
// 下面填写违禁词
$banned_words = ['违禁词1','违禁词2'];
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["message"]))
{
    $message = htmlspecialchars($_POST["message"], ENT_QUOTES, 'UTF-8');
    foreach ($banned_words as $word)
    {
        if (stripos($message, $word) !== false)
        {
            die("留言内容发现违禁词");
        }
    }
}
$file = 'messages.html';
$lines = file($file, FILE_IGNORE_NEW_LINES);
$lineToInsertBefore = 25; // 插入位置
if (isset($lines[$lineToInsertBefore]))
{
    // 在指定行之前插入新内容
    array_splice($lines, $lineToInsertBefore, 0, $message);
}
if (file_put_contents($file, implode("\n", $lines))!==false)
{
    echo("留言成功！即将跳转。");
    sleep(3);
    echo "<script>
    location.replace('messages.html');
</script>";
   // header('Location: messages.html');
}
else
{
    die("留言内容写入失败");
}
?>
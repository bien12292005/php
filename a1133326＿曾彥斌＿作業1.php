<!DOCTYPE html>
<html lang="zh-TW">
<head>
  <meta charset="UTF-8" />
  <title>夏令營報名表</title>
</head>
<body>

  <h1>夏令營報名表</h1>

  <?php if ($success): ?>
    <p>報名成功！感謝您的報名！</p>
  <?php else: ?>

    <form method="POST">

      <p>學員姓名：<input type="text" name="name" /></p>
      <p>出生日期：<input type="date" name="birthday" /></p>
      <p>家長姓名：<input type="text" name="parent" /></p>
      <p>聯絡電話：<input type="tel" name="phone" /></p>
      <p>電子郵件：<input type="email" name="email" /></p>
      <p>備註：<textarea name="note"></textarea></p>

      <button type="submit">送出報名</button>

    </form>

  <?php endif; ?>

</body>
</html>
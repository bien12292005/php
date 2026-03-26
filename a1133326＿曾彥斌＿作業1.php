<!DOCTYPE html>
<html lang="zh-TW">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>夏令營報名表</title>
  
</head>
<body>

  <div class="container">
    <h1>夏令營報名表</h1>
    <p class="subtitle">請填寫以下資料，我們將盡快與您聯繫！</p>

    <form onsubmit="handleSubmit(event)">

      <div class="form-group">
        <label>學員姓名 <span class="required">*</span></label>
        <input type="text" placeholder="請輸入姓名" required />
      </div>

      <div class="form-group">
        <label>性別 <span class="required">*</span></label>
        <div class="radio-group">
          <label><input type="radio" name="gender" required /> 男</label>
          <label><input type="radio" name="gender" /> 女</label>
          <label><input type="radio" name="gender" /> 其他</label>
        </div>
      </div>

      <div class="form-group">
        <label>出生日期 <span class="required">*</span></label>
        <input type="date" required />
      </div>

      <hr />

      <div class="form-group">
        <label>家長姓名 <span class="required">*</span></label>
        <input type="text" placeholder="請輸入家長姓名" required />
      </div>

      <div class="form-group">
        <label>聯絡電話 <span class="required">*</span></label>
        <input type="tel" placeholder="例：0912-345-678" required />
      </div>

      <div class="form-group">
        <label>電子郵件 <span class="required">*</span></label>
        <input type="email" placeholder="例：example@mail.com" required />
      </div>

      <hr />

      <div class="form-group">
        <label>備註（過敏或特殊需求）</label>
        <textarea placeholder="無則免填"></textarea>
      </div>

      <button type="submit">送出報名</button>
      <p class="success" id="successMsg">報名成功！感謝您的報名！</p>

    </form>
  </div>

  <script>
    function handleSubmit(e) {
      e.preventDefault();
      document.getElementById("successMsg").style.display = "block";
      e.target.reset();
    }
  </script>

</body>
</html>
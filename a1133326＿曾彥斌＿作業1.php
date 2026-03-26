<!DOCTYPE html>
<html lang="zh-TW">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>夏令營報名表</title>
  <style>
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    body {
      font-family: "Microsoft JhengHei", sans-serif;
      background: #fff8f0;
      display: flex;
      justify-content: center;
      padding: 40px 20px;
    }

    .container {
      background: white;
      border: 1px solid #f0c080;
      border-radius: 12px;
      padding: 32px;
      width: 100%;
      max-width: 480px;
    }

    h1 {
      text-align: center;
      font-size: 22px;
      color: #e85d04;
      margin-bottom: 6px;
    }

    .subtitle {
      text-align: center;
      font-size: 13px;
      color: #aaa;
      margin-bottom: 28px;
    }

    .form-group {
      margin-bottom: 16px;
    }

    label {
      display: block;
      font-size: 14px;
      color: #555;
      margin-bottom: 6px;
    }

    .required {
      color: red;
    }

    input[type="text"],
    input[type="tel"],
    input[type="email"],
    input[type="date"],
    textarea {
      width: 100%;
      padding: 9px 12px;
      border: 1px solid #ddd;
      border-radius: 8px;
      font-size: 14px;
      font-family: "Microsoft JhengHei", sans-serif;
      outline: none;
    }

    input:focus,
    textarea:focus {
      border-color: #f77f00;
    }

    .radio-group {
      display: flex;
      gap: 16px;
      margin-top: 4px;
    }

    .radio-group label {
      display: flex;
      align-items: center;
      gap: 5px;
      font-size: 14px;
      cursor: pointer;
    }

    textarea {
      resize: vertical;
      min-height: 70px;
    }

    hr {
      border: none;
      border-top: 1px dashed #eee;
      margin: 20px 0;
    }

    button {
      width: 100%;
      padding: 12px;
      background: #f77f00;
      color: white;
      font-size: 15px;
      font-weight: bold;
      border: none;
      border-radius: 8px;
      cursor: pointer;
      margin-top: 8px;
    }

    button:hover {
      background: #e85d04;
    }

    .success {
      display: none;
      text-align: center;
      color: #2d9e6b;
      font-size: 15px;
      margin-top: 14px;
      font-weight: bold;
    }
  </style>
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
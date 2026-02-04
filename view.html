<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Giám sát chất lượng không khí</title>
  <style>
    body { font-family: Arial; margin: 0;
        height:100hv;
        background-image: url('shungyuang.png');
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
        background-attachment: fixed;
    }
    .status { font-size: 30px; font-weight: bold; }
    .good { color: green; }
    .bad { color: red; }
  </style>
</head>
<body align="center" >
  <font size="50">
    <h2>Trạng thái không khí hiện tại</h2>
    <div class="status" id="status" >Đang tải...</div>
    <div>Giá trị ADC:<span id="value">—</span></div>
    <div>Thời gian:<span id="time">—</span></div>
  </font>
  <script size="50">
    async function fetchData() {
      try {
        const res = await fetch('data.php');
        const data = await res.json();

        document.getElementById('value').textContent = data.value;
        document.getElementById('time').textContent = data.timestamp;

        const status = document.getElementById('status');
        status.textContent = "Air Quality: " + data.quality;
        status.className = "status " + (data.quality === "BAD" ? "bad" : "good");
      } catch (e) {
        document.getElementById('status').textContent = "Không thể lấy dữ liệu";
      }
    }
    setInterval(fetchData, 1000); // gọi mỗi giây
    fetchData(); // gọi lần đầu
  </script>

</body>
</html>

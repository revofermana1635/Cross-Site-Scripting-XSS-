<!DOCTYPE html>
<html>
<head>
  <title>Contoh XSS Aman</title>
</head>
<body>
  <h1>Formulir (Aman dari XSS)</h1>
  <form method="GET" action="">
    Masukkan nama: <input type="text" name="name">
    <button type="submit">Kirim</button>
  </form>

  <?php
  if (isset($_GET['name'])) {
      $name = htmlspecialchars($_GET['name'], ENT_QUOTES, 'UTF-8');
      echo "<p>Halo, $name!</p>"; // ✅ Sudah di-escape
  }
  ?>
</body>
</html>

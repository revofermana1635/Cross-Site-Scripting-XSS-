<!DOCTYPE html>
<html>
<head>
  <title>Contoh XSS Rentan</title>
</head>
<body>
  <h1>Formulir (Tidak Aman)</h1>
  <form method="GET" action="">
    Masukkan nama: <input type="text" name="name">
    <button type="submit">Kirim</button>
  </form>

  <?php
if (isset($_GET['name'])) {
    $name = $_GET['name'];
    echo "<p>Halo, $name!</p>"; // tidak aman
}
?>
</body>
</html>
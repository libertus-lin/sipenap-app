<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Hasil Tes Napza | Sipenap</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
  <link rel="stylesheet" href="admin/assets/css/bootsrap.min.css">
  <link rel="stylesheet" href="admin/assets/css/custom-css.css">
  <link rel="stylesheet" href="kuis.css">
</head>

<section id="hasil-kuis">
  <div class="container">
    <h1 class="mt-3">Hasil Kuis Anda</h1>
    <?php
    $pdo = include "koneksi.php";
    if (empty($_POST['jawaban']) === false) {
      $html = '<ol>';
      $totalSkor = 0;
      foreach ($_POST['jawaban'] as $idPertanyaan => $idJawaban) {
        // Query pertanyaan
        $query = $pdo->prepare("select * from pertanyaan where id = :id");
        $query->execute(array("id" => $idPertanyaan));
        $pertanyaan = $query->fetch();
        $html .= '<li>';
        $html .= htmlentities($pertanyaan['deskripsi']);
        // Query jawaban
        $query2 = $pdo->prepare("select * from jawaban where id = :id and id_pertanyaan = :id_pertanyaan");
        $query2->execute(array(
          'id' => $idJawaban,
          'id_pertanyaan' => $idPertanyaan
        ));
        $jawaban = $query2->fetch();
        if (!$jawaban) {
          $html .= '<p style="color:red">Salah</p>';
        } else {
          $html .= '<p>Jawaban: ' . $jawaban['deskripsi'] . '</p>';
          if ($jawaban['benar'] == 1) {
            $html .= '<p style="color:green">Benar</p>';
            $totalSkor += $pertanyaan['skor'];
          } else {
            $html .= '<p style="color:red">Salah</p>';
          }
        }
        $html .= '</li>';
      }
      $html .= '</ol>';

      // Tampilkan Skor
      echo '<h1>Selamat Skor Anda: ' . $totalSkor . '</h1>';

      // Tampilan Detail Jawaban
      echo '<h2 class="mt-5">Detail Hasil Anda</h2>';
      echo $html;
    }
    ?>
    <div class="p-5">
      <a class="btn btn-primary" href="index.php">Ulangi Kuis</a>
      <a class="btn btn-warning" href="../index.php">Kembali ke home</a>
    </div>
  </div>
</section>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</body>

</html>
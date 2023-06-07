<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Tes Soal Napza | Sipenap</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
  <link rel="stylesheet" href="admin/assets/css/bootsrap.min.css">
  <link rel="stylesheet" href="admin/assets/css/custom-css.css">
  <link rel="stylesheet" href="kuis.css">
</head>

<section id="kuis">
  <div class="container">
    <h1>Tes Kemampuan Anda Tentang Napza</h1>
    <p>Pilihlah salah satu jawaban dari masing-masing soal dibawah ini:</p>
    <form action="hasil.php" method="POST">
      <?php
      try {
        $pdo = include "koneksi.php";
        $query = $pdo->prepare("select * from pertanyaan order by rand() limit 50");
        $query->execute();
        echo '<ol>';
        while ($pertanyaan = $query->fetch()) {
          echo '<li>';
          echo htmlentities($pertanyaan['deskripsi']);
          $query2 = $pdo->prepare("select * from jawaban where id_pertanyaan = :id_pertanyaan order by rand()");
          $query2->execute(array("id_pertanyaan" => $pertanyaan['id']));
          echo '<ol type="A">';
          while ($jawaban = $query2->fetch()) {
            echo '<li>';
            echo '<input type="radio" name="jawaban[' . $pertanyaan['id'] . ']" value="' . $jawaban['id'] . '"/> ';
            echo htmlentities($jawaban['deskripsi']);
            echo '</li>';
          }
          echo '</ol>';
          echo '</li>';
        }
        echo '</ol>';
      } catch (Exception $e) {
        echo "Gagal menampilkan pertanyaan. ";
        echo "Error: " . $e->getMessage();
      }
      ?>
      <div class="form-group p-5">
        <button class="btn btn-primary" type="submit">Kirim Jawaban</button>
        <a class="btn btn-warning" href="../index.php">Kembali ke home</a>
      </div>
    </form>
  </div>
</section>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</body>

</html>
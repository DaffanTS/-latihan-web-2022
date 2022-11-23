<?php
      require_once "koneksi.php";
      $sql = "SELECT*FROM tb_dosen";
      $result = mysqli_query($con,$sql);
?>

<html>
<head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
            integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
      </script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
      </script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
      </script>
      
      
      <title>DATA DOSEN</title>

      <style>
            body{
                  padding: 48px;
            }

            h1{
                  margin-bottom : 24px;
                  font-weight: 800;
            }

            img{
                  margin-bottom : 24px;
            }
      </style>
</head>

<body>
      <div>
            <img src="R1.png" height="100" alt="Logo SMA INDOCEMENT">
      </div>

      <h1>Data Dosen Universitas Trilogi 2022</h1>
      <table class="table table-hover">
            <thead class="thead-dark">
                  <tr>
                        <th>Nomor Induk</th>
                        <th>Nama Dosen</th>
                        <th>Email</th>
                        <th>No Telepon</th>
                        <th>Mata Kuliah</th>
                        <th>Tahun Masuk</th>
                  </tr>
            </thead>

      <?php while ($data = mysqli_fetch_row($result)): ?>
            <tbody>
                  <tr>
                        <td><?php echo $data[0]; ?></td>
                        <td><?php echo $data[1]; ?></td>
                        <td><?php echo $data[2]; ?></td>
                        <td><?php echo $data[3]; ?></td>
                        <td><?php echo $data[4]; ?></td>
                        <td><?php echo $data[5]; ?></td>
                  </tr>
            </tbody>
            
      <?php endwhile; ?>
      </table>
</body>
</html>
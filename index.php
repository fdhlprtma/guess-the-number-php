<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    html,
    body {
      height: 100%;
    }

    body {
      display: flex;
      flex-direction: column;
      font-family: Arial, sans-serif;
      background-color: #fafafa;
      color: #333;
    }

    main {
      flex: 1;
      padding: 20px;
    }

    h2 {
      text-align: center;
      margin-bottom: 20px;
      margin-top: 20px;
    }
  </style>
</head>

<body>
  <?php include 'layout/header.php'; ?>

  <main style="text-align: center; padding: 40px;">
    <h2>Selamat Datang di Permainan Tebak Angka!</h2>
    <p>Tebak angka antara 1 hingga 10. Apakah kamu bisa menebaknya dengan benar?</p>
    <a href="pages/guess.php" style="display: inline-block; margin-top: 20px; padding: 10px 20px; background-color: #007bff; color: #fff; text-decoration: none; border-radius: 5px;">Mulai Bermain</a>
  </main>

  <?php include 'layout/footer.php'; ?>

</body>

</html>
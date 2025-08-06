<?php include 'src/game-logic.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tebak Angka</title>
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

    p.pesan {
      text-align: center;
      margin-bottom: 20px;
      margin-top: 20px;
      font-weight: bold;
    }

    form {
      display: flex;
      flex-direction: column;
      align-items: center;
      gap: 10px;
    }

    input[type="text"] {
      padding: 10px;
      font-size: 16px;
      width: 200px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }

    button {
      padding: 10px 20px;
      background-color: #007bff;
      color: white;
      border: none;
      font-size: 16px;
      border-radius: 5px;
      cursor: pointer;
    }

    button:hover {
      background-color: #0056b3;
    }
  </style>
</head>

<body>
  <?php include 'layout/header.php'; ?>

  <main>
    <h2>Tebak Angka</h2>
    <?php if (!empty($pesan)) : ?>
      <p class="pesan"><?= htmlspecialchars($pesan) ?></p>
    <?php endif; ?>

    <form method="POST">
      <input type="text" name="tebakan" placeholder="Masukkan angka tebak">
      <button type="submit">Kirim</button>
    </form>
  </main>

  <?php include 'layout/footer.php'; ?>
</body>

</html>
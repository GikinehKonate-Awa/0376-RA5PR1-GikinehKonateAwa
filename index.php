<?php
$numero = isset($_GET['numero']) ? (int)$_GET['numero'] : 5;
$error = $numero < 1 || $numero > 12;
?>
<!DOCTYPE html>
<html lang="ca">
<head>
  <meta charset="UTF-8">
  <title>Taula de multiplicar</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      max-width: 480px;
      margin: 40px auto;
      padding: 0 20px;
      background: #f5f5f5;
    }

    h1 {
      color: #333;
      margin-bottom: 20px;
    }

    .formulari {
      display: flex;
      gap: 10px;
      align-items: center;
      margin-bottom: 24px;
    }

    input[type="number"] {
      width: 80px;
      padding: 8px 12px;
      font-size: 1rem;
      border: 2px solid #ccc;
      border-radius: 6px;
      outline: none;
    }

    input[type="number"]:focus {
      border-color: #0077cc;
    }

    button {
      padding: 8px 18px;
      font-size: 1rem;
      background: #0077cc;
      color: white;
      border: none;
      border-radius: 6px;
      cursor: pointer;
    }

    button:hover {
      background: #005fa3;
    }

    .error {
      background: #ffe0e0;
      border: 1px solid #f00;
      color: #c00;
      padding: 10px 16px;
      border-radius: 6px;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      background: white;
      border-radius: 8px;
      overflow: hidden;
      box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    }

    td {
      padding: 10px 20px;
      font-size: 1rem;
    }

    td:last-child {
      text-align: right;
      font-weight: bold;
      color: #0077cc;
    }

    tr.parell {
      background: #e8f0fe;
    }

    tr.senar {
      background: white;
    }
  </style>
</head>
<body>

  <h1>Taula de multiplicar</h1>

  <form class="formulari" method="GET">
    <label for="numero">Número:</label>
    <input type="number" id="numero" name="numero" min="1" max="12" value="<?= $numero ?>">
    <button type="submit">Generar</button>
  </form>

  <?php if ($error): ?>
    <p class="error"> El número ha d'estar entre 1 i 12.</p>
  <?php else: ?>
    <table>
      <?php for ($i = 1; $i <= 10; $i++): ?>
        <tr class="<?= ($i % 2 === 0) ? 'parell' : 'senar' ?>">
          <td><?= $numero ?> × <?= $i ?></td>
          <td>= <?= $numero * $i ?></td>
        </tr>
      <?php endfor; ?>
    </table>
  <?php endif; ?>

</body>
</html>

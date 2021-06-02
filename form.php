<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style.css">
  <script src="index.js" defer></script>
</head>
<body>
  <div class="container">
    <h1>Review your information</h1>
    <div class="preview">
      <label>Name: </label>
      <p>
        <?php echo $_POST["name"] ?>
      </p>
      <label>Age: </label>
      <p>
        <?php echo $_POST["age"] ?>
      </p>
      <label>Date of Birth: </label>
      <p>
        <?php echo $_POST["dob"] ?>
      </p>
      <label>Place of Birth: </label>
      <p>
        <?php echo $_POST["pob"] ?>
      </p>
      <label>Email: </label>
      <p>
        <?php echo $_POST["email"] ?>
      </p>
      <label id="comment-lbl">Comment: </label>
      <p id="comment">
        <?php echo $_POST["comment"]?>
      </p>
      <button id="btn">Finish</button>
    </div>
  </div>
</body>
</html>
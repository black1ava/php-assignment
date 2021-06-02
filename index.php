<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
    <h1>Your information</h1>
    <form action="form.php" method="post">
      <label for="name">Name</label>
      <input type="text" name="name" id="name" required>
      <label for="age">Age</label>
      <input type="number" name="age" id="age" required>
      <label for="dob">Date of Birth</label>
      <input type="date" name="dob" id="dob" required>
      <label for="pob">Place of Birth</label>
      <input type="text" name="pob" id="pob" required>
      <label for="email">Email</label>
      <input type="email" name="email" id="email" required>
      <label for="comment" id="comment-lbl">Comment</label>
      <textarea name="comment" id="comment" cols="30" rows="10"></textarea>
      <button>Submit</button>
    </form>
  </div>
</body>
</html>
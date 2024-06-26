<?php
// deklarasi var spy not null
$name = $phone = $address = $gender = $email = $password = $confirmPassword = '';
// data = parameter. htmlspecialchars = jika ada tag html tdk akan terdetect sbg html
function check($data)
{
  $data = htmlspecialchars($data);
  return $data;
}
// isset = cek aksi tombol submit. post = menerima data dari method post
if (isset($_POST['submit'])) {
  $name = check($_POST['name']);
  $phone = check($_POST['phone']);
  $address = check($_POST['address']);
  $gender = check(isset($_POST['gender']) ? $_POST['gender'] : '');
  $email = check($_POST['email']);
  $password = check($_POST['password']);
  $confirmPassword = check($_POST['confirmPassword']);

  if (empty($name) || empty($phone) || empty($address) || empty($gender) || empty($email) || empty($password) || empty($confirmPassword)) {
    if(empty($name)) {
      echo"<script>
        alert('name is required')
      </script>";
    }
    if (empty($phone)) {
      echo"<script>
        alert('phone is required')
      </script>";
    }
    if (empty($address)) {
      echo"<script>
        alert('address is required')
      </script>";
    }
    if (empty($gender)) {
      echo"<script>
        alert('gender is required')
      </script>";
    }
    if (empty($email)) {
      echo"<script>
        alert('email is required')
      </script>";
    }
    if (empty($password)) {
      echo"<script>
        alert('password is required')
      </script>";
    }
    if (empty($confirmPassword)) {
      echo"<script>
        alert('confirm your password')
      </script>";
    }
  } else {
    // memaksa hal. diarahkan ke index dgn mngirimkn data nama mlalui url atau method get
    header("Location: index.php?name=$name");
    exit();
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign Up</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      font-family: "Antonio", sans-serif;
      text-decoration: none;
    }
  
    body {
      width: 100%;
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      background: linear-gradient(to left, #38adae, #cd295a);
    }
  
    .container {
      width: 95%;
      height: 90vh;
      display: flex;
      justify-content: center;
      align-items: center;
      background-color: white;
      border-radius: 5px;
    }
  
    main {
      display: flex;
      flex-direction: column;
      justify-content: start;
      align-items: start;
      margin-left: 50px;
    }
  
    main h1 {
      width: 42%;
    }
  
    main p {
      font-size: .7rem;
      margin: 10px 0 0 120px;
      font-weight: 200;
    }
  
    main a {
      color: #111;
      font-weight: 600;
    }
  
    form {
      display: flex;
      flex-direction: column;
      align-items: center;
      gap: 5px 0;
    }
  
    input,
    select {
      border: none;
      border-bottom: 1px solid rgba(5, 5, 5, .3);
      outline: none;
      width: 400px;
      height: 30px;
      margin-top: 10px;
    }
  
    form button {
      border: none;
      width: 400px;
      height: 35px;
      font-weight: 500;
      border-radius: 2px;
      color: #eee;
      background: linear-gradient(to left, #38adae, #cd295a);
    }

    nav {
      display: flex;
      justify-content: space-between;
    }

    nav  a {
      color: #999;
    }

    nav a:hover {
      color: #555;
    }
  
    aside {
      width: 50%;
      display: flex;
      justify-content: center;
      align-items: start;
    }
  
    aside img {
      border-radius: 3px;
    }
  </style>
</head>

<body>
  <div class="container">
    <main>
      <nav>
        <h1>Create Account Be Our New User</h1>
        <a href="index.php">Back</a>
      </nav>
      <!-- form -->
      <form action="signup.php" method="post">
        <input type="text" name="name" id="" placeholder="Name" value="<?= $name ?>">
        <input type="email" name="email" id="" placeholder="Email" value="<?= $email ?>">
        <input type="tel" name="phone" id="" oninput= "this.value= this.value.replace(/[^0-9]/g, '')" placeholder="Phone" value="<?= $phone ?>">
        <input type="text" name="address" id="" placeholder="Address" value="<?= $address ?>">
        <select name="gender" id="">
          <option selected disabled>Select Gender</option>
          <option value="male" <?= ($gender == 'male') ? 'selected' : '' ?>>Male</option>
          <option value="female" <?= ($gender == 'female') ? 'selected' : '' ?>>Female</option>
        </select>
        <input type="password" name="password" id="password" placeholder="Password">
        <input type="password" name="confirmPassword" id="confirmPassword" placeholder="Confirm Password" onkeyup="checkPassword()">
        <div id="passwordCheck"></div><br>
        <button type="submit" name="submit">Create Account</button>
      </form>

      <p>Already have an account? <a href="">Log In</a></p>
    </main>
    <aside>
      <img src="img/1.jpeg" alt="" width="550px">
    </aside>
  </div>
  <script>
    // const = isi var gbs diubah
    const password = document.getElementById("password")
    const confirmPassword = document.getElementById("confirmPassword")
    const passwordCheck = document.getElementById("passwordCheck")
    const checkPassword = () => {
      if (password.value === confirmPassword.value) {
        passwordCheck.innerHTML = "Password sesuai"
        passwordCheck.style.color = "green"
      } else {
        passwordCheck.innerHTML = "Password tidak sesuai"
        passwordCheck.style.color = "red"
      }
    }
  </script>
</body>

</html>
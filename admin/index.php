<?php
session_start();
include('../includes/config.php');

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $sql = "SELECT * FROM admin WHERE username=? AND password=?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "ss", $username, $password);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($result)) {
        $_SESSION['admin'] = $row['username'];
        header("Location: dashboard.php");
        exit;
    } else {
        $error = "Invalid login!";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="shortcut icon" href="./uploads/CPSU_logo.png" type="image/x-icon">
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body class="bg-[linear-gradient(0deg,green,#B4ECBE,green)] flex justify-center items-center h-screen font-['Poppins']">
  <div class="bg-white p-8 rounded-lg shadow-lg w-[500px]">
    <span class="flex justify-center items-center w-full h-auto p-2">
      <img src="./uploads/CPSU_logo.png" alt="cpsu_logo" class="w-[100px] h-[90px]">
    </span>
    <h2 class="text-[20px] text-green-800 font-bold mb-5 text-center tracking-widest">CENTRAL PHILIPPINES STATE UNIVERSITY <br>
      <span class="text-[15px] text-gray-500">MOISES PADILLA CAMPUS</span>
    </h2>
    <?php if (!empty($error)) echo "<p class='text-red-500'>$error</p>"; ?>
    <form method="POST" class="py-5 flex flex-col gap-3">
      <label for="username" class="font-bold text-gray-500 tracking-widest text-[12px]">ADMIN USERNAME</label>
      <input type="text" name="username" placeholder="Username" class="w-full mb-3 p-2 border rounded outline-none" required>
      <label for="password" class="font-bold text-gray-500 tracking-wide text-[12px]">ADMIN PASSWORD</label>
      <input type="password" name="password" placeholder="Password" class="w-full mb-3 p-2 border rounded outline-none" required>
      <button type="submit" name="login" class="w-full bg-green-700 text-white p-2 rounded">Login</button>
    </form>
  </div>
</body>
</html>

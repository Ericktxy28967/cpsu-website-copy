<?php
session_start();
include('../includes/config.php');
include('../includes/auth.php'); // restrict access

if (isset($_POST['submit'])) {
    $title = $_POST['title'];
    $desc = $_POST['description'];
    $img = $_FILES['image']['name'];
    $author = "Admin";

    if ($img) {
        $target = "uploads/" . basename($img);
        move_uploaded_file($_FILES['image']['tmp_name'], $target);
    }

    // ✅ insert without ID (auto_increment will handle it)
    $sql = "INSERT INTO news (title, content, image, author, created_at) VALUES (?,?,?,?,NOW())";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "ssss", $title, $desc, $img, $author);

    if (mysqli_stmt_execute($stmt)) {
        $success = "Update posted successfully!";
    } else {
        $success = "Error: " . mysqli_error($conn);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard | CPSU-MPC</title>
    <link rel="shortcut icon" href="./uploads/CPSU_logo.png" type="image/x-icon">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body class="bg-gray-100 text-gray-900 font-['Poppins']">
    
    <!-- Sidebar + Header -->
    <div class="flex h-screen">
        
        <!-- Sidebar -->
        <aside class="w-64 bg-green-900 text-white flex flex-col">
            <div class="p-5 text-center items-center flex flex-col font-bold text-lg border-b border-green-700 bg-greeen-900 gap-2">
                <img src="./uploads/CPSU_logo.png" alt="cpsu logo" class="w-[100px] h-[90px]">
                CPSU Web Admin
            </div>
            <nav class="flex-1 p-4 flex flex-col gap-3">
                <a href="dashboard.php" class="p-2 rounded hover:bg-green-700">🏠 Dashboard</a>
                <a href="manage_news.php" class="p-2 rounded hover:bg-green-700">📰 News</a>
                <a href="manage_announcements.php" class="p-2 rounded hover:bg-green-700">📢 Announcements</a>
            </nav>
            <div class="p-4 border-t border-green-700">
                <a href="./index.php" class="block text-center bg-red-600 hover:bg-red-700 rounded p-2">Logout</a>
            </div>
        </aside>

        <!-- Main Content -->
   <main class="flex-1 p-6 gap-4 overflow-y-auto h-screen">
    <h1 class="text-2xl font-bold mb-6">📊 Manage News</h1>
    
    <!-- Post New Update -->
    <h1 class="text-2xl font-bold mb-5">📰 Post New Update</h1>
    <?php if (!empty($success)) echo "<p class='text-green-600'>$success</p>"; ?>
    
    <form method="POST" enctype="multipart/form-data" class="space-y-3 pb-10">
        <input type="text" name="title" placeholder="Title" class="w-full p-2 border rounded" required>
        <textarea name="description" placeholder="Description" class="w-full p-2 border rounded" required></textarea>
        <input type="file" name="image" class="w-auto p-2 border rounded bg-green-900 text-white">
        <button type="submit" name="submit" class="bg-green-700 text-white px-4 py-3 rounded ml-4">Publish Now</button>
    </form>

    <!-- News Updates List -->
    <div class="bg-white shadow rounded-lg p-6">
        <h2 class="text-lg font-semibold mb-4">📰 Recent News Updates</h2>

        <?php
        include('../includes/config.php'); 

        // ✅ Handle Delete First
        if (isset($_POST['delete'])) {
            $id = intval($_POST['delete_id']);
            $delete_sql = "DELETE FROM news WHERE id=$id";
            if (mysqli_query($conn, $delete_sql)) {
                echo "<p class='text-green-600'>News deleted successfully.</p>";
            } else {
                echo "<p class='text-red-600'>Error deleting: " . mysqli_error($conn) . "</p>";
            }
        }

        // ✅ Now fetch news list
        $result = mysqli_query($conn, "SELECT * FROM news ORDER BY created_at DESC LIMIT 5");

        if (mysqli_num_rows($result) > 0) {
            echo '<ul class="space-y-4">';
            while ($row = mysqli_fetch_assoc($result)) {
                echo '
                <li class="border-b pb-3 flex flex-wrap justify-between items-center">
                    <div class="flex items-start gap-3">
                        <img src="uploads/' . $row['image'] . '" 
                             alt="news-img" 
                             class="w-16 h-16 object-cover rounded">
                        <div>
                            <h3 class="font-semibold text-gray-800">' . htmlspecialchars($row['title']) . '</h3>
                            <p class="text-sm text-gray-600">' . substr($row['content'], 0, 80) . '...</p>
                            <span class="text-xs text-gray-400">
                                📅 ' . date("M d, Y", strtotime($row['created_at'])) . ' | 👤 ' . $row['author'] . '
                            </span>
                        </div>
                    </div>

                    <!-- Delete Button -->
                    <form method="POST" action="" onsubmit="return confirm(\'Are you sure you want to delete this news?\');">
                        <input type="hidden" name="delete_id" value="' . $row['id'] . '">
                        <button type="submit" name="delete" 
                            class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded text-sm">
                            🗑️ Delete
                        </button>
                    </form>
                </li>';
            }
            echo '</ul>';
        } else {
            echo "<p class='text-gray-500'>No news updates yet.</p>";
        }
        ?>
    </div>
</main>


    </div>

</body>
</html>

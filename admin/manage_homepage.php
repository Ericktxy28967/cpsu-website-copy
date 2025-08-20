<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard | CPSU-MPC</title>
    <link rel="shortcut icon" href="./uploads/CPSU_logo.png" type="image/x-icon">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-900">
    
    <!-- Sidebar + Header -->
    <div class="flex h-screen">
        
        <!-- Sidebar -->
        <aside class="w-64 bg-green-900 text-white flex flex-col">
            <div class="p-5 text-center items-center flex flex-col font-bold text-lg border-b border-green-700 bg-greeen-900 gap-2">
                <img src="./uploads/CPSU_logo.png" alt="cpsu logo" class="w-[100px] h-[90px]">
                <span>CENTRAL PHILIPPINES STATE UNIVERSITY</span>
            </div>
            <nav class="flex-1 p-4 flex flex-col gap-3">
                <a href="dashboard.php" class="p-2 rounded hover:bg-green-700">🏠 Dashboard</a>
                <a href="manage_news.php" class="p-2 rounded hover:bg-green-700">📰 News</a>
                <a href="manage_announcements.php" class="p-2 rounded hover:bg-green-700">📢 Announcements</a>
            </nav>
            <div class="p-4 border-t border-green-700">
                <a href="./uploads/upload.php" class="block text-center bg-red-600 hover:bg-red-700 rounded p-2">Logout</a>
            </div>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 p-6">
            <h1 class="text-2xl font-bold mb-6">📊 Manage News</h1>
            
            <!-- Stats Cards -->
            <h1 class="text-2xl font-bold mb-5">Post New Update</h1>
            <?php if (!empty($success)) echo "<p class='text-green-600'>$success</p>"; ?>
            <form method="POST" enctype="multipart/form-data" class="space-y-3">
                <input type="text" name="title" placeholder="Title" class="w-full p-2 border rounded" required>
                <textarea name="description" placeholder="Description" class="w-full p-2 border rounded" required></textarea>
                <input type="file" name="image" class="w-full p-2 border rounded">
                <button type="submit" name="submit" class="bg-green-700 text-white px-4 py-2 rounded">Publish</button>
            </form>

            <!-- Recent Updates -->
            <div class="bg-white shadow rounded-lg p-6">
                <h2 class="text-lg font-semibold mb-4">📝 Recent Activity</h2>
                <ul class="list-disc list-inside text-sm text-gray-700">
                    <li>News management updated.</li>
                    <li>Homepage banner changed.</li>
                    <li>3 new announcements added.</li>
                </ul>
            </div>
        </main>
    </div>

</body>
</html>
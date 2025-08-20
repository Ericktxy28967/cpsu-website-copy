<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="./uploads/CPSU_logo.png" type="image/x-icon">
    <title>Admin Dashboard | CPSU-MPC</title>
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
        <main class="flex-1 p-6">
            <h1 class="text-2xl font-bold mb-6">📊 Announcements</h1>

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
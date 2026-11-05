<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>หน้าแรก - My Portfolio</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300;400;500;600&display=swap" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: { extend: { fontFamily: { sans: ['Kanit', 'sans-serif'], }, colors: { primary: '#4f46e5', secondary: '#64748b', } } }
        }
    </script>
</head>
<body class="bg-slate-50 text-slate-800 flex flex-col min-h-screen">

    <nav class="bg-white shadow-sm sticky top-0 z-50">
        <div class="max-w-6xl mx-auto px-4">
            <div class="flex justify-between items-center h-16">
                <a href="index.php" class="text-2xl font-bold text-primary tracking-wider">PORTFOLIO.</a>
                <div class="hidden md:flex space-x-8">
                    <!-- หน้าปัจจุบันจะมีเส้นใต้สีน้ำเงิน -->
                    <a href="index.php" class="text-primary font-medium border-b-2 border-primary pb-1">หน้าแรก (Home)</a>
                    <a href="bio.php" class="text-secondary hover:text-primary font-medium transition-colors">ประวัติ (Bio)</a>
                    <a href="assignment.php" class="text-secondary hover:text-primary font-medium transition-colors">รายการงาน (Assignment)</a>
                </div>
            </div>
        </div>
    </nav>

    <main class="flex-grow w-full max-w-6xl mx-auto px-4 py-8 sm:py-12">
        <div class="bg-white rounded-3xl p-8 sm:p-12 shadow-sm border border-slate-100 flex flex-col md:flex-row items-center gap-10">
            <div class="md:w-1/2 text-center md:text-left">
                <span class="inline-block py-1 px-3 rounded-full bg-indigo-50 text-primary text-sm font-semibold mb-4">Welcome</span>
                <h1 class="text-4xl sm:text-5xl font-bold text-slate-900 leading-tight mb-6">
                    นี่คือพื้นที่<br>รวบรวมผลงาน
                </h1>
                <p class="text-lg text-slate-600 mb-8">
                    เว็บไซต์นี้สร้างขึ้นเพื่อจัดเก็บข้อมูลประวัติส่วนตัว ทักษะความสามารถ และรวบรวมรายการงานที่ได้รับมอบหมายในรายวิชา
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center md:justify-start">
                    <a href="bio.php" class="px-6 py-3 bg-primary text-white rounded-lg font-medium hover:bg-indigo-700 transition shadow-md text-center">ทำความรู้จักฉัน</a>
                    <a href="assignment.php" class="px-6 py-3 bg-slate-100 text-slate-700 rounded-lg font-medium hover:bg-slate-200 transition text-center">ดูรายการงาน</a>
                </div>
            </div>
            <div class="md:w-1/2 flex justify-center">
                <img src="https://cdn.discordapp.com/attachments/885359774978420767/1567880860445974538/cat-typing-on-keyboard---im-cooking.gif?ex=6aedca56&is=6aec78d6&hm=9657da5f74033189b6bbee4a1e6e7f4852446b66f2da67187ad27a8304aba184&" alt="Workspace" class="rounded-2xl shadow-lg object-cover h-64 sm:h-80 w-full">
            </div>
        </div>
    </main>

    <footer class="bg-slate-900 text-slate-400 py-8 text-center mt-auto">
        <div class="max-w-6xl mx-auto px-4">
            <p class="mb-2">© 2026 My Portfolio. All rights reserved.</p>
        </div>
    </footer>

</body>
</html>
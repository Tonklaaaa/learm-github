<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ประวัติ - My Portfolio</title>
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
                    <a href="index.php" class="text-secondary hover:text-primary font-medium transition-colors">หน้าแรก (Home)</a>
                    <!-- หน้าปัจจุบันจะมีเส้นใต้สีน้ำเงิน -->
                    <a href="bio.php" class="text-primary font-medium border-b-2 border-primary pb-1">ประวัติ (Bio)</a>
                    <a href="assignment.php" class="text-secondary hover:text-primary font-medium transition-colors">รายการงาน (Assignment)</a>
                </div>
            </div>
        </div>
    </nav>

    <main class="flex-grow w-full max-w-6xl mx-auto px-4 py-8 sm:py-12">
        <div class="text-center mb-10">
            <h2 class="text-3xl font-bold text-slate-900">ประวัติส่วนตัว (Bio)</h2>
            <div class="w-16 h-1 bg-primary mx-auto mt-4 rounded-full"></div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-white rounded-2xl p-6 shadow-sm border border-slate-100 text-center md:col-span-1">
                <div class="w-32 h-32 mx-auto bg-slate-200 rounded-full mb-4 overflow-hidden border-4 border-white shadow-md">
                    <img src="https://cdn.discordapp.com/attachments/885359774978420767/1567876192130834482/nongkla.jpg?ex=6aedc5fd&is=6aec747d&hm=34d6d6e05871d6b265c18d39747dc3abebe5b91d2b1e05676adf21a1f9e971d0&" alt="Profile" class="w-full h-full object-cover">
                </div>
                <h3 class="text-xl font-bold text-slate-900">นายกิตติวินท์ นามวงษ์</h3>
                <p class="text-secondary mb-4">นักศึกษาชั้นปีที่ 2</p>
                <div class="space-y-2 text-sm text-left bg-slate-50 p-4 rounded-xl">
                    <p><span class="font-semibold">รหัสนักศึกษา:</span> 6814421010</p>
                    <p><span class="font-semibold">สาขา:</span> เทคโนโลยัสารสนเทศ</p>
                    <p><span class="font-semibold">อีเมล:</span> 6814421010@rbru.ac.th</p>
                </div>
            </div>

            <div class="md:col-span-2 space-y-6">
                <div class="bg-white rounded-2xl p-8 shadow-sm border border-slate-100">
                    <h4 class="text-lg font-bold text-slate-900 mb-4">เป้าหมายการศึกษา</h4>
                    <p class="text-slate-600 leading-relaxed">
                        มีความสนใจในการพัฒนาเว็บไซต์ทั้งฝั่ง Frontend และ Backend (Full-stack Development) ชอบเรียนรู้เทคโนโลยีใหม่ๆ เช่น React, Tailwind CSS และ PHP มุ่งมั่นที่จะสร้างสรรค์ผลงานที่ใช้งานได้จริง
                    </p>
                </div>

                <div class="bg-white rounded-2xl p-8 shadow-sm border border-slate-100">
                    <h4 class="text-lg font-bold text-slate-900 mb-4">ทักษะความสามารถ (Skills)</h4>
                    <div class="flex flex-wrap gap-2">
                        <span class="px-3 py-1 bg-blue-100 text-blue-700 rounded-lg text-sm font-medium">HTML/CSS</span>
                        <span class="px-3 py-1 bg-yellow-100 text-yellow-700 rounded-lg text-sm font-medium">photoshop</span>
                        <span class="px-3 py-1 bg-indigo-100 text-indigo-700 rounded-lg text-sm font-medium">Tailwind CSS</span>
                        <span class="px-3 py-1 bg-purple-100 text-purple-700 rounded-lg text-sm font-medium">PHP & MySQL</span>
                    </div>
                </div>
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
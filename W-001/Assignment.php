<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>รายการงาน - My Portfolio</title>
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
                    <a href="bio.php" class="text-secondary hover:text-primary font-medium transition-colors">ประวัติ (Bio)</a>
                    <a href="assignment.html" class="text-primary font-medium border-b-2 border-primary pb-1">รายการงาน (Assignment)</a>
                </div>
            </div>
        </div>
    </nav>

    <main class="flex-grow w-full max-w-6xl mx-auto px-4 py-8 sm:py-12">
        <div class="flex flex-col sm:flex-row justify-between items-center mb-10 gap-4">
            <div>
                <h2 class="text-3xl font-bold text-slate-900">รายการงาน (Assignments)</h2>
                <p class="text-secondary mt-2">รวบรวมชิ้นงานทั้งหมดในรายวิชา</p>
            </div>
            <div class="bg-white px-4 py-2 rounded-lg border border-slate-200 shadow-sm text-sm">
                <span class="font-semibold text-slate-900">สถานะ:</span> ส่งแล้ว 2 / 3 งาน
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- งานที่ 1 -->
            <div class="bg-white rounded-2xl p-6 shadow-sm border border-slate-100 hover:shadow-md transition-shadow group">
                <div class="flex justify-between items-start mb-4">
                    <span class="px-2.5 py-1 bg-green-100 text-green-700 text-xs font-bold rounded-md">ส่งแล้ว (Completed)</span>
                    <span class="text-xs text-slate-400 font-medium">งานชิ้นที่ 1</span>
                </div>
                <h3 class="text-xl font-bold text-slate-900 mb-2 group-hover:text-primary transition-colors">ออกแบบโครงสร้างเว็บ</h3>
                <p class="text-slate-600 text-sm mb-4">สร้างโครงสร้างเว็บไซต์ด้วย HTML และจัดหน้าด้วย Tailwind CSS</p>
                <a href="#" class="inline-flex items-center text-primary text-sm font-medium hover:underline">ดูผลงาน →</a>
            </div>

            <!-- งานที่ 2 -->
            <div class="bg-white rounded-2xl p-6 shadow-sm border border-slate-100 hover:shadow-md transition-shadow group">
                <div class="flex justify-between items-start mb-4">
                    <span class="px-2.5 py-1 bg-green-100 text-green-700 text-xs font-bold rounded-md">ส่งแล้ว (Completed)</span>
                    <span class="text-xs text-slate-400 font-medium">งานชิ้นที่ 2</span>
                </div>
                <h3 class="text-xl font-bold text-slate-900 mb-2 group-hover:text-primary transition-colors">ทำระบบหลายหน้า</h3>
                <p class="text-slate-600 text-sm mb-4">ปรับปรุงโครงสร้างเป็น 3 ไฟล์และเชื่อมโยงเข้าหากัน</p>
                <a href="#" class="inline-flex items-center text-primary text-sm font-medium hover:underline">ดูผลงาน →</a>
            </div>

            <!-- งานที่ 3 -->
            <div class="bg-white rounded-2xl p-6 shadow-sm border border-amber-100 hover:shadow-md transition-shadow relative overflow-hidden">
                <div class="flex justify-between items-start mb-4">
                    <span class="px-2.5 py-1 bg-amber-100 text-amber-700 text-xs font-bold rounded-md flex items-center">กำลังทำ (In Progress)</span>
                    <span class="text-xs text-slate-400 font-medium">งานชิ้นที่ 3</span>
                </div>
                <h3 class="text-xl font-bold text-slate-900 mb-2">เชื่อมต่อ PHP Backend</h3>
                <p class="text-slate-600 text-sm mb-4">เขียนสคริปต์ PHP รันผ่าน XAMPP เพื่อแสดงผลข้อมูล</p>
                <button disabled class="text-slate-400 text-sm font-medium cursor-not-allowed">รอการอัปเดตผลงาน</button>
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
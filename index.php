<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Muhammad Ulinnuha | Portfolio</title>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Poppins',sans-serif;
}

body{
    background:#0f172a;
    color:white;
    overflow-x:hidden;
}

.container{
    width:90%;
    max-width:1200px;
    margin:auto;
}

nav{
    display:flex;
    justify-content:space-between;
    align-items:center;
    padding:25px 0;
}

.logo{
    font-size:24px;
    font-weight:700;
    color:#60a5fa;
}

nav ul{
    display:flex;
    list-style:none;
    gap:30px;
}

nav a{
    text-decoration:none;
    color:white;
    transition:.3s;
}

nav a:hover{
    color:#60a5fa;
}

.hero{
    min-height:85vh;
    display:flex;
    align-items:center;
    justify-content:space-between;
    gap:50px;
}

.hero-text{
    flex:1;
}

.hero-text h1{
    font-size:60px;
    line-height:1.2;
}

.hero-text span{
    color:#60a5fa;
}

.hero-text p{
    margin-top:20px;
    color:#cbd5e1;
    line-height:1.8;
}

.btn{
    display:inline-block;
    margin-top:30px;
    padding:14px 30px;
    background:#60a5fa;
    color:white;
    border-radius:50px;
    text-decoration:none;
    transition:.3s;
}

.btn:hover{
    transform:translateY(-3px);
}

.hero-image{
    flex:1;
    display:flex;
    justify-content:center;
}

.circle{
    width:350px;
    height:350px;
    border-radius:50%;
    background:linear-gradient(135deg,#60a5fa,#2563eb);
    display:flex;
    align-items:center;
    justify-content:center;
    font-size:120px;
    font-weight:bold;
}

section{
    padding:80px 0;
}

.section-title{
    text-align:center;
    margin-bottom:50px;
}

.section-title h2{
    font-size:40px;
}

.cards{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(280px,1fr));
    gap:25px;
}

.card{
    background:#1e293b;
    padding:30px;
    border-radius:20px;
    transition:.3s;
}

.card:hover{
    transform:translateY(-10px);
}

.card h3{
    margin-bottom:10px;
}

.card p{
    color:#cbd5e1;
}

.skills{
    display:flex;
    flex-wrap:wrap;
    gap:15px;
    justify-content:center;
}

.skill{
    background:#1e293b;
    padding:12px 25px;
    border-radius:30px;
}

.contact{
    text-align:center;
}

.contact p{
    color:#cbd5e1;
    margin:20px 0;
}

footer{
    text-align:center;
    padding:30px;
    color:#94a3b8;
}

@media(max-width:768px){

.hero{
    flex-direction:column-reverse;
    text-align:center;
    padding-top:40px;
}

.hero-text h1{
    font-size:42px;
}

.circle{
    width:250px;
    height:250px;
    font-size:80px;
}

nav{
    flex-direction:column;
    gap:20px;
}
}
</style>
</head>
<body>

<div class="container">

<nav>
    <div class="logo">ULIN.</div>

    <ul>
        <li><a href="#about">Tentang</a></li>
        <li><a href="#project">Project</a></li>
        <li><a href="#skill">Skill</a></li>
        <li><a href="#contact">Kontak</a></li>
    </ul>
</nav>

<section class="hero">

    <div class="hero-text">
        <h1>Halo, Saya <span>Muhammad Ulinnuha</span></h1>

        <p>
            Software Developer, System Builder, dan Digital Problem Solver.
            Saya membantu membangun website, aplikasi, sistem administrasi,
            dan solusi digital yang efisien untuk bisnis maupun pendidikan.
        </p>

        <a href="#project" class="btn">
            Lihat Portfolio
        </a>
    </div>

    <div class="hero-image">
        <div class="circle">U</div>
    </div>

</section>

<section id="about">

    <div class="section-title">
        <h2>Tentang Saya</h2>
    </div>

    <div class="card">
        <p>
            Saya memiliki minat pada pengembangan website, software house,
            manajemen sistem sekolah, dan transformasi digital.
            Fokus saya adalah membuat solusi yang sederhana,
            cepat, dan mudah digunakan.
        </p>
    </div>

</section>

<section id="project">

    <div class="section-title">
        <h2>Project</h2>
    </div>

    <div class="cards">

        <div class="card">
            <h3>Sistem Administrasi Sekolah</h3>
            <p>
                Pengelolaan data siswa, pembayaran, mutasi,
                dan laporan akademik.
            </p>
        </div>

        <div class="card">
            <h3>Software House Project</h3>
            <p>
                Pembuatan website company profile,
                dashboard internal, dan sistem bisnis.
            </p>
        </div>

        <div class="card">
            <h3>Fleet Management</h3>
            <p>
                Sistem monitoring kendaraan,
                logbook operasional, dan penggunaan BBM.
            </p>
        </div>

    </div>

</section>

<section id="skill">

    <div class="section-title">
        <h2>Skills</h2>
    </div>

    <div class="skills">
        <div class="skill">HTML</div>
        <div class="skill">CSS</div>
        <div class="skill">JavaScript</div>
        <div class="skill">PHP</div>
        <div class="skill">Laravel</div>
        <div class="skill">MySQL</div>
        <div class="skill">UI/UX</div>
        <div class="skill">System Analysis</div>
    </div>

</section>

<section id="contact" class="contact">

    <div class="section-title">
        <h2>Kontak</h2>
    </div>

    <p>
        Tertarik bekerja sama? Hubungi saya.
    </p>

    <a href="mailto:emailanda@gmail.com" class="btn">
        Hubungi Saya
    </a>

</section>

<footer>
    © 2026 Muhammad Ulinnuha. All Rights Reserved.
</footer>

</div>

</body>
</html>
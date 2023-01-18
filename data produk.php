<!DOCTYPE html>
<html lang="en">
<head>
<title>CSS Website Layout</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
  body{background-color :rgb(64 224 208)} 
* {
  box-sizing: border-box;
}

body {
  margin: 0;
}

/* Style the header */
.header {
  background-color: #fa09aa;
  padding: 20px;
  text-align: center;
}

/* Style the top navigation bar */
.topnav {
  overflow: hidden;
  background-color: #333;
}

/* Style the topnav links */
.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

/* Change color on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}

/* Create three unequal columns that floats next to each other */
.column {
  float: left;
  padding: 10px;
}

/* Left and right column */
.column.side {
  width: 25%;
}

/* Middle column */
.column.middle {
  width: 50%;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - makes the three columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column.side, .column.middle {
    width: 100%;
  }
}

/* Style the footer */
.footer {
  background-color: #0c0a0b;
  padding: 10px;
  text-align: center;
}
</style>
</head>
<body>

<div class="header">
  <p><img src="photo1666090015.jpeg" alt="mobile legends">
	<h1>MOBILE LEGENDS</h1>
   Penjelasan Skill Hero & Guide Hero<br>
  </p>
</div>

<div class="topnav">
  <a href="#">Home</a>
  <a href="#">Nama Hero</a>
  <a href="#">Skill Hero</a>
  <a href="#">Galeri</a>
  <a href="#">Hubungi Kami</a>
  <a href="#">Tentang</a>
  
</div>
<div class="row">
  <div class="column side">
    <h2>New Update</h2>
    <img src="https://media.suara.com/pictures/653x366/2022/10/15/90560-tigreal-mobile-legends.webp" alt="Berita Update" style="width:300px;height:200px;">
    <p>10 Hero Pertama yang Dirilis di Mobile Legends, Pemain Wajib Tahu</p>
  </div>
  
  <div class="column middle">
    <h2>Arti ML atau Mobile Legends, Ketahui Juga Cara Main dan Istilah Lain dalam Game Online Ini</h2>
     <img src="889657_720.jpg" alt="Berita Update" style="width:600px;height:300px;">
    <p>Seperti yang telah disinggung sebelumnya, arti ML adalah singkatan dari Mobile Legends, sebuah game online. Selain disingkat ML, tak sedikit pula yang menyebut Mobile Legends dengan sebutan Moba. Di Indonesia, Mobile Legends mulai menyita perhatian gamers sejak tahun 2016. Hingga akhirnya, karena sangat diminati kemudian muncul berbagai turnamen ML dalam skala nasional.</p>
    <p>Bukan tanpa alasan mengapa game Mobile Legends bisa sedemikian populer. Pasalnya, Mobile Legends tak saja seru. Game online yang dirilis dan dikembangkan oleh Moontoon ini, bisa dimainkan dengan menggunakan hp android maupun iOS. Sehingga, terbilang praktis karena bisa dimainkan kapan saja dan di mana saja.</p>
  </div>
  
  <div class="column side">
    <h2>Tentang</h2>
    
    <img src="download.jpg" alt="Berita Update" style="width:300px;height:200px;">
    <p>Tanggal rilis awal: 14 Juli 2016 </p>
	<p>Pengembang: Moonton </p>
	<p>Mode: Permainan video multipemain </p>
	<p>Penerbit: Moonton </p>
	<p>Platform: iOS, Android </p>
	<p>Genre: Arena pertarungan daring multipemain, Permainan peran aksi</p>
  </div>
</div>

<div class="footer">
  <p>TERIMAKASIH BRO JANGAN LUPA MAKAN DAN MINUM KOPI</p>
</div>
  
</body>
</html>
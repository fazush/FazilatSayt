<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>About Us</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/main.css">

</head>
<body>
<?php
include 'Astyle.php';
?>
<div class="nav nav-justified" id="navbar">
    <a href="index.php" class="nav-item nav-link"><img src="images/AEntypo_2302(1)_32.png"><b>First Page</b></a>
    <a href="gallery.php" class="nav-item nav-link"><img src="images/AEntypo_d83c(0)_32.png"><b>Gallery</b></a>
    <a href="services.php" class="nav-item nav-link"><img src="images/AEntypo_d83d(2)_32.png"><b>Service</b></a>
    <a href="about.php" class="nav-item nav-link active"><img src="images/Ab.png"><b>About Us</b></a>
    <a href="contact.php" class="nav-item nav-link"><img src="images/AEntypo_d83d(3)_32.png"><b>Contact Us</b></a>
</div>

<div class="timeline">
  <div class="container left">
    <div class="content">
      <ul><h2>" Hotel Uzbekistan " mehmonxonasi quyidagi faoliyat/xizmatlarni taklif qiladi(narxlar tushishi mumkin ):</h2>
      		<li>Bassyen</li>
      		<li>Spa</li>
      		<li>Hot vanna/Jacuzi</li>
      		<li>Fitnes markazi</li>
      		<li>Sauna</li>
      		<li>Massaj</li>
      		<li>Turkish/Bug'li vanna</li>
      		<li>Velosipedni ijaraga olish(qo'shimcha haq)</li>
      		<li>Kutubxona</li>
      		<li>Karaoke</li>
      		<li>Solarium</li>
      		<li>Ko'ngil ochish havzasi(yil davomida)</li>
      		<li>Velosiped mavjud(bepul)</li>
      		<li>Ochiq hammom</li>
      		<li>Vanna xonasi</li>
      		<li>Spa imkoniyatlari</li>
      		<li>Spa xonalari</li>
      		<li>Fitnes mashg'ulotlari</li>
      		<li>Yoga mashg'ulotlari</li>
      		<li>Personal murabbiy</li>
      		<li>San'at galereyalari</li>
      		<li>Kino kechalari</li>
      		<li>Velosiped sayohatlari</li>
      		<li>Piyoda sayohatlar</li>
      		<li>Romantik kechki ovqat</li>
      		<li>Mahalliy madaniyat haqida sayohat</li>
      		<li>Pishiriqlar klassi</li>
      		<li>Jonli musiqa/Ijro</li>
      		<li>Aerobika</li>
      		<li>Bingo</li>
      </ul>
    </div>
  </div>
  <div class="container right">
    <div class="content">
      <ul><h2>" Hotel Uzbekistan " mehmonxonasining xonalari quyidagilardan iborat :</h2>
      <li>Ikki kishilik / Juft</li>
      <li>Oilaviy</li>
      <li>Bir kishilik</li>
  	  </ul>
    </div>
  </div>
  <div class="container left">
    <div class="content">
      <ul><h2>" Hotel Uzbekistan " mehmonxonasida istiqomat qiluvchi mehmonlar yuqori baholangan  nonushta qilishlari mumkin ( mehmonlar sharhi: 7.9).</h2>
      	<p><b><i>Nonushta optsiyalari quyidagilardan iborat:</i></b></p>
      <li>Kontinental</li>
      <li>Vegitarian</li>
      <li>Veganiya</li>
      <li>Osiyo</li>
      <li>Amerika taomlari</li>
  	  </ul>
    </div>
  </div>
  <div class="container right">
    <div class="content">
      <ul><h2>" Hotel Uzbekistan " mehmonxonasida istiqomat qiluvchi mehmonlar uchun quyidagi to'xtab turish joylari mabjud :</h2>
      	<li>Avtomobillarni to'xtab turish joyi.</li>
      	<li>Bepul avtoturargoh</li>
      	<li>Vaqtincha mashinalar</li>
      	<li>Xususiy mashinalar</li>
      	<li>Xavfsiz to'xtash joyi</li>
      	<li>Ko'chada to'xtash joyi</li>
      	<li>To'xtab turis joyidan foydalanish mumkin.</li>
  	  </ul>
    </div>
  </div>
  <div class="container left">
    <div class="content">
      <ul><h2>" Hotel Uzbekistan " mehmonxonasida qolish qancha turadi ?</h2>
      <p>" Hotel Uzbekistan " mehmonxonasidagi narxlar turar joyingizga qarab farq qilishi mumkin ( masalan , sanalar , mehmonlarning siyosati va boshqalar ) .</p>
  	  </ul>
    </div>
  </div>
  <div class="container right">
    <div class="content">
      <ul><h2>Eng yaqin aeroportdan " Hotel Uzbekistan " mehmonxonasiga qanday yetib boraman ?</h2>
      <p>Eng yaqin aeroportdan " Hotel Uzbekistan " mehmonxonasiga quyidagilar orqal kirish mumkin: Aeroport qatnovi ( mulk tomonidan tartibga solingan ) 5 daqiqa.</p>
  	  </ul>    
  	</div>
  </div>
   <div class="container left">
    <div class="content">
      <ul><h2>" Hotel Uzbekistan " mehmonxonasida basseyn bormi ?</h2>
      <p>Ha , bu mehmonxonada basseyn mavjud . Hovuz va boshqa turdagi dam olish maskanlari ham mavjud .</p>
  	  </ul>    
  	</div>
  </div>
</div>

</body>
<script src="js/jquery-3.4.1.slim.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript">
	var prevScrollpos = window.pageYOffset;
window.onscroll = function() {
var currentScrollPos = window.pageYOffset;
  if (prevScrollpos > currentScrollPos) {
    document.getElementById("navbar").style.top = "0";
  } else {
    document.getElementById("navbar").style.top = "-50px";
  }
  prevScrollpos = currentScrollPos;
}
</script>
</html>
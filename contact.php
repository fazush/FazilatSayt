<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact Us</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/main.css">

</head>
<body>
<?php 
  include 'Cstyle.php';
 ?>
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="index.php" id="first"><b>First Page</b><img src="images/CEntypo_2302(2)_48.png"></a>
  <a href="gallery.php" id="galer"><b>Gallery </b><img src="images/CEntypo_d83c(0)_48.png"></a>
  <a href="about.php" id="about"><b>About Us </b><img src="images/CEntypo_d83d(1)_48.png"></a>
  <a href="services.php" id="contact"><b>Service </b><img src="images/CEntypo_d83d(3)_48.png"></a>
</div>

<h1 class="glow">Contact Us</h1>

<div class="container">
<div id="btnContainer">
<button style="margin-right: 81%;" class="btn btn-success" onclick="listView()"><img src="images/CList.png"> List</button>
<button class="btn btn-danger active" onclick="gridView()"><img src="images/CGrid.png"> Grid</button>
</div>
<br>

<div class="row">

    <div class="column">
        <div class="flip-box">
            <div class="flip-box-inner">
                <div class="flip-box-front">
                    <h2 style="color: green; margin-top: 20px;"><img src="images/CCall.png"> Chaqiruv</h2>
                </div>
                <div class="flip-box-back">
                    <h2><img src="images/CCall2.png">8 62 226 00 77</h2>
                </div>
            </div>
        </div>
    </div>

    <div class="column">

        <button type="button" class="btn float-right" data-target="#exampleModalCenter" data-toggle="modal" title="Xabarlarni ko'rish uchun bosing">
            <img src="images/CSms2.png" alt="Xabarlar" >
        </button>

        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title text-danger" id="exampleModalCenterTitle">XABARLARNI KO'RISH</h3>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div id="myDIV" class="header">
                            <h4 class="text-info">Yuborilgan xabarlar</h4>
                        </div>

                        <ul id="myUL" class="text-dark">
                            <li>Hotel Uzbekiston xizmatlari juda ajoyib</li>
                            <li>Mehmonxonangiz ximatlari juda yoqdi</li>
                            <li>Qanday qilib xona bron qilsa bo'ladi?</li>
                            <li>Mehmonxona nihoyatda chiroyli ekan</li>
                            <li>Servis xizmatlari juda zo'r</li>
                            <li>All great thanks</li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>

        <div class="columnn">
            <button onclick="document.getElementById('id01').style.display='block'" style="width:80%;background-color: transparent; color: green; ">
                <h2 style="margin-left: 150px;"> <img src="images/CSms.png"> S M S </h2>
            </button>
            <div id="id01" class="modal">
            <form class="modal-content animate" action="#">
                <div class="imgcontainer">
                    <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                    <img src="images/img_avatar.png" alt="Avatar" class="avatar">
                </div>
            <h2 style="text-align: center;">Hotel Uzbekistan</h2>
            <div class="container">
                <label for="uname"><b>Xabar</b></label><br>
                <textarea placeholder="Xabaringizni kiriting" name="uname" id="myInput" required></textarea>
                <button  onclick="newElement()" class="addBtn" type="submit">Jo'natish</button>
            </div>
            <div class="container" style="background-color:#f1f1f1">
                <button style="background-color: red;" type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
            </div>
            </form>
            </div>
        </div>
    </div>

</div>


<div class="row">

    <div class="column">
        <button onclick="myCopy()" class="btn btn-transparent" style="color: green; width: 100%;"><img src="images/CTg.png">Telegram manzilimiz</button>
    </div>

    <div class="column">
        <button onclick="myCopy2()"class="btn btn-transparent" style="color: green; width: 100%;"><img src="images/insta.png" style="width:40px">Instagram manzilimiz</button>
    </div>

</div>

<div class="row">

    <div class="column">

        <a style="color: green; text-align: center;" target="demo1" data-toggle="collapse" data-target="#demo1" href="images/Uzbekistan hotel – Google Карты.html"><h2>Hotel Uzbekistanni kartadan ko'rish</h2></a>
        <iframe src="images/Uzbekistan hotel – Google Карты.html" height="400px" width="100%" id="demo1" class="collapse"></iframe>

    </div>

    <div class="column">
        <button class="collapsible text-center btn " style="width:100%;background-color: transparent; color: green;"><h2>Bizga xabar yuborish</h2></button>
        <div class="content">
            <div class="container" id="myForm">
                <form action="#" class="form-container">

                    <p>Elektron pochta orqali xabar yuboring va biz tez orada sizga javob beramiz.</p>

                    <label for="msg"><b>Ism : </b></label>
                    <input type="text" placeholder="Ismingizni yozing" name="msg" required><br>

                    <label for="msk"><b>E-mail :</b></label>
                    <input type="email" placeholder="E-mailingizni kiriting" name="msk" required><br>

                    <div>
                        <label><b>Jinsingiz</b></label>
                        <label for="er"><i>Erkak</i></label>
                        <input type="radio" tabindex="tabindex" required="required" name="jins" id="er">
                        <label for="ay"><i>Ayol</i></label>
                        <input type="radio" tabindex="tabindex" required="required" name="jins" id="ay">
                    </div>

                    <div>
                        <label><b>Tug'ilgan sanangizni kiriting</b></label>
                        <input type="date">
                    </div>

                    <label for="country"><b>Shahar nomi</b></label>
                        <select id="country" name="country">
                            <option value="Urganch">Urganch</option>
                            <option value="Toshkent">Toshkent</option>
                            <option value="Samarqand">Samarqand</option>
                            <option value="...">...</option>
                        </select><br>

                    <label for="msg"><b>Mavzu</b></label>
                    <input type="text" placeholder="Mavzu" name="msg" required><br>

                    <label for="msg"><b>Xabar</b></label><br>
                    <textarea placeholder="Xabar yoki savolingizni yozing .." name="msg" required></textarea>

                    <button type="submit" class="btn">Xabar yuborish</button>
  </form>
</div>
</div>
  </div>

</div>

</div>

</body>
<script src="js/jquery-3.4.1.slim.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript">
// ekran ranggi style
function myFunction(x) {
    if (x.matches) { 
        document.body.style.backgroundColor = "#00005e";
    } else {
        document.body.style.backgroundColor = "pink";
    }
}
var x = window.matchMedia("(max-width: 800px)")
myFunction(x) 
x.addListener(myFunction) 



var elements = document.getElementsByClassName("column");
var i;
function listView() {
  for (i = 0; i < elements.length; i++) {
    elements[i].style.width = "100%";
  }
}
function gridView() {
  for (i = 0; i < elements.length; i++) {
    elements[i].style.width = "50%";
  }
}


var container = document.getElementById("btnContainer");
var btns = container.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function(){
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}


var coll = document.getElementsByClassName("collapsible");
var i;
for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.display === "block") {
      content.style.display = "none";
    } else {
      content.style.display = "block";
    }
  });
}


function myCopy() {
  var copyText="t.me/hotelUzbekistanuz";
document.execCommand("copy");
  alert("Copied the text: " + copyText);
}
function myCopy2() {
  var copyText="HotelUzbekistanUz";
document.execCommand("copy");
  alert("Copied the text: " + copyText);
}

    function newElement() {
        var li = document.createElement("li");
        var inputValue = document.getElementById("myInput").value;
        var t = document.createTextNode(inputValue);
        li.appendChild(t);
        if (inputValue === '') {
            alert("You must write something! ( Xabar yuborish uchun kamida bir so'z yozish kerak! )");
        } else {
            document.getElementById("myUL").appendChild(li);
            alert("Xabaringiz jo'natildi.");
        }
        document.getElementById("myInput").value = "";
    }
</script>
</html>
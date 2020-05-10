<style>
* {
    box-sizing: border-box;
}
body {
   font-family: Lucida Calligraphy;
}

/* Sidenav style */

#mySidenav a {
    position: absolute;
    left: -175px;
    transition: 0.5s;
    padding: 15px;
    width: 200px;
    text-decoration: none;
    font-size: 20px;
    color: white;
    border-radius: 0 5px 5px 0;
}
.sidenav{
position: fixed;
}
#mySidenav a:hover {
    left: 0;
}

/* Btn style bo'limga o'tish */

#first {
    top: 20px;
    background-color: #4CAF50;
}
#galer {
    top: 100px;
    background-color: #2196F3;
}
#about {
    top: 180px;
    background-color: #f44336;
}
#contact {
    top: 260px;
    background-color: #555
}

/* Glow style */

.glow {
  font-size: 80px;
  color: #fff;
  text-align: center;
  -webkit-animation: glow 2s ease-in-out infinite alternate;
  -moz-animation: glow 2s ease-in-out infinite alternate;
  animation: glow 2s ease-in-out infinite alternate;
}
@-webkit-keyframes glow {
  from {
     text-shadow: 0 0 10px #fff, 0 0 20px #fff, 0 0 30px #e50000, 0 0 40px #e50000, 0 0 50px #e50000, 0 0 60px #e50000, 0 0 70px #e50000;
  }
  to {
    text-shadow: 0 0 20px #fff, 0 0 30px #ff4da6, 0 0 40px #ff4da6, 0 0 50px #ff4da6, 0 0 60px #ff4da6, 0 0 70px #ff4da6, 0 0 80px #ff4da6;
  }
}

/* Call style */

.flip-box {
    background-color: transparent;
    width: 100%;
    height: 100px;
    border: none;
    perspective: 1000px;
}
.flip-box-inner {
    position: relative;
    width: 100%;
    text-align: center;
    transition: transform 0.8s;
    transform-style: preserve-3d;
}
.flip-box:hover .flip-box-inner {
    transform: rotateY(180deg);
}
.flip-box-front, .flip-box-back {
    position: absolute;
    width: 100%;
    backface-visibility: hidden;
}

.flip-box-back {
    background-color: dodgerblue;
    color: white;
    transform: rotateY(180deg);
}


.column {
    width: 50%;
    padding: 10px;
    outline: double;
    background-color: white;
}
.row:after {
    content: "";
    display: table;
    clear: both;
}

.container {
    border-radius: 5px;
    padding: 20px;
}
.form-container {
  max-width: 100%;
  padding: 10px;
  background-color: white;

}
.form-container textarea {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
  resize: none;
  min-height: 200px;
}
.form-container textarea:focus {
  background-color: #ddd;
}
.form-container .btn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

.form-container .cancel {
  background-color: red;
}

.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}
.collapsible {
    background-color: transparent;
    color: black;
    cursor: pointer;
    padding: 18px;
    width: 100%;
    border: none;
    text-align: left;
    outline: none;
    font-size: 15px;
}

.active, .collapsible:hover {
    background-color: #d0d0d0;
}
.content {
    padding: 0 18px;
    display: none;
    overflow: hidden;
    background-color: #f1f1f1;
}




.columnn button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}
.columnn textarea {
  width: 100%;
  margin: 5px 0 22px 0;
  border: 1px solid ;
  background: #f1f1f1;
  resize: none;
  min-height: 70px;
}
.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}
.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
}
img.avatar {
    width: 40%;
    border-radius: 50%;
}
.columnn .container {
    padding: 16px;
}
span.psw {
    float: right;
    padding-top: 16px;
}
.columnn .modal {
    display: none; 
    position: fixed; 
    z-index: 1;
    left: 0;
    top: 0;
    width: 100%; 
    height: 100%;
    overflow: auto; 
    background-color: rgb(0,0,0); 
    background-color: rgba(0,0,0,0.4);
    padding-top: 60px;
}
.columnn .modal-content {
    background-color: #fefefe;
    margin: -30px auto 15% auto; 
    border: 1px solid #888;
    width: 45%;
}

.close {
    position: absolute;
    right: 25px;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
}
.close:hover,.close:focus {
    color: red;
    cursor: pointer;
}
.animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
}
@-webkit-keyframes animatezoom {
    from {-webkit-transform: scale(0)} 
    to {-webkit-transform: scale(1)}
}
@keyframes animatezoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
}
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
.cancelbtn {
       width: 100%;
    }
}
</style>
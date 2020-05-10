    <style>

* {
    box-sizing: border-box;
}
body {
 
    background-color: #474e5d;
    font-family: Helvetica, sans-serif;
}
#navbar {
  background-color: rgb(236,0,118);
  position: fixed;
  top: 0;
  width: 100%;
  /*display: block;*/
  transition: top 0.3s;
  z-index: 3;
}

#navbar a {
  /*float: left;*/
  /*position: center;*/
  /*display: block;*/
  color: #f2f2f2;
  /*text-align: center;*/
  /*padding: 15px;*/
  /*text-decoration: none;*/
  /*font-size: 17px;*/
}

#navbar a:hover {
  background-color: #ddd;
  color: black;
  opacity: 0.3;
}

#navbar a.active{
    background-color: rgb(236,0,118);
    opacity: 0.3;
}
.timeline {
    position: relative;
    max-width: 1200px;
    margin: 0 auto;
}

.timeline::after {
    content: '';
    position: absolute;
    width: 6px;
    background-color: white;
    top: 0;
    bottom: 0;
    left: 50%;
    margin-left: -3px;
}


.container {
    padding: 10px 40px;
    position: relative;
    background-color: inherit;
    width: 50%;
}


.container::after {
    content: '';
    position: absolute;
    width: 25px;
    height: 25px;
    right: -17px;
    background-color: white;
    border: 4px solid rgb(236,0,118);
    top: 15px;
    border-radius: 50%;
    z-index: 1;
}

.left {
	margin-top: 50px;
    left: -25.5%;
}

.right {
    left: 25.5%;
}

.left::before {
    content: " ";
    height: 0;
    position: absolute;
    top: 22px;
    width: 0;
    z-index: 1;
    right: 30px;
    border: medium solid white;
    border-width: 10px 0 10px 10px;
    border-color: transparent transparent transparent white;
}
.right::before {
    content: " ";
    height: 0;
    position: absolute;
    top: 22px;
    width: 0;
    z-index: 1;
    left: 30px;
    border: medium solid white;
    border-width: 10px 10px 10px 0;
    border-color: transparent white transparent transparent;
}


.right::after {
    left: -16px;
}

.content {
    padding: 20px 30px;
    background-color: white;
    position: relative;
    border-radius: 6px;
}


@media screen and (max-width: 600px) {

  .timeline::after {
    left: 31px;
  }
  

  .container {
    width: 100%;
    padding-left: 70px;
    padding-right: 25px;
  }
  

  .container::before {
    left: 60px;
    border: medium solid white;
    border-width: 10px 10px 10px 0;
    border-color: transparent white transparent transparent;
  }


  .left::after, .right::after {
    left: 15px;
  }
  

  .right {
    left: 0%;
  }
}

</style>
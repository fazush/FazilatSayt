    <style>
body {
    font-family: "Lato";
}

h1 {
    color:#85093f;
    text-shadow: 2px 2px #da80cb;
    margin-top:-10px;
    margin-left: 75px;
}

.sidebar {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 3;
    top: 0;
    left: 0;
    background-color: #85093f;
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 60px;
}

.sidebar a {
    padding: 8px 8px 8px 30px;
    text-decoration: none;
    font-size: 27px;
    color: gold;
    display: block;
    transition: 0.3s;
}

.sidebar a:hover {
    color: #f1f1f1;
}

.sidebar a.active {
    background-color: #dd0880;
    color: white;
}

.sidebar .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;
}

.openbtn {
    font-size: 20px;
    padding: 10px 15px;
    position: fixed;
    z-index: 3;
}

#main {
    transition: margin-left .5s;
    padding: 16px;
    margin-left: 10px;
}

.carousel-inner img{
    height:500px;
}

@media screen and (max-height: 450px) {
        .sidebar a {font-size: 18px;}
}

.card-body h5{
    text-align: center;
    color: green;
}
.card{
    display: inline-block;
    margin-top: 10px;
}

.sticky {
    position: fixed;
    top:0;
    width:87%;
    z-index: 1;
}

</style>
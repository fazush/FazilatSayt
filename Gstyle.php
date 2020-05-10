 <style>
* {
    box-sizing: border-box;
}

.carousel-item img{
    height:600px;
}
.sahifa1{
    background-color: gold;
    position: fixed;
    width:100%;
}

.sahifa1 a.active{
    background-color: #ffb90b;
}
.sahifa1 a{
    color:  #b31847;
    text-decoration: none;
    text-align: center;
}
.sahifa1 a:hover{
    color: #6e073b;
    background-color: rgba(255,185,11,0.99);
}
.header {
    color:#85093f;
    text-shadow: 2px 2px #da80cb;
    text-align:center;
    padding-top: 40px;
}
.header1 {
    text-align: center;
    padding: 32px;
}
.row {
    display: flex;
    flex-wrap: wrap;
    padding: 0 4px;
}
.column {

    flex: 50%;
    padding: 0 4px;
}
.column img {
    margin-top: 8px;
    width:100%;
    vertical-align: middle;
}

@media screen and (max-width: 800px) {
    .column {
        flex: 50%;
        max-width: 50%;
        padding: 0 4px;
    }
}

@media screen and (max-width: 600px) {
    .column {
        flex: 100%;
        max-width: 100%;
        padding: 0 4px;
    }
}
@media screen and (max-height: 450px) {
    .card-body h1 {font-size: 18px;}
}
.header1 button {
    border: none;
    /*outline: none;*/
    padding: 10px 16px;
    background-color: #ff624c;
    cursor: pointer;
    font-size: 18px;
}
.nav {
    z-index: 3;
}

.header1 button:hover {
    background-color: deeppink;
}

.header1 button.active {
    background-color: red;
    color: white;
}


    </style>
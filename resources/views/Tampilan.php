<!DOCTYPE html>
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   
</head>
<style>

.header { 
padding-left: 30px;
margin-bottom: 0px;
height: 100px;
background-color:#030303;
}

.Fnt1{
  font-family:Agency FB ; color:#ffffff;
  font-size: 60px;
   text-align: center;
}
.content { float: right;
padding: 1px 20px 1px 10px;
width: 85%;
margin: 0px;
height: 600px;
border: none;
background-color: #fff; }

.sidebar {
line-height:30px;
background-color:#7e87fc;
height:560px;
width:150px;
float:left;
padding:5px;
}

.button1 {
    background-color: #0712ab; /* blue */
    border: none;
    color: white;
    padding: 10px 45px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 4px;
    cursor: pointer;
    font-family: Tempus Sans ITC;
}

.buttonSdw {
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
}

.h3 {
  font-family: Agency FB; color:#ffffff;
  text-align: center;
}


.polaroid {  /*mengatur shadows gambar*/
  width: 250px;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  text-align: center;
}

.newspaper {
    -webkit-column-count: 3; /* Chrome, Safari, Opera */
    -moz-column-count: 3; /* Firefox */
    column-count: 3;
    -webkit-column-gap: 40px; /* Chrome, Safari, Opera */
    -moz-column-gap: 40px; /* Firefox */
    column-gap: 40px;
    -webkit-column-rule: 1px solid lightblue; /* Chrome, Safari, Opera */
    -moz-column-rule: 1px solid lightblue; /* Firefox */
    column-rule: 1px solid lightblue;
}


</style>

<div class="header buttonSdw"> 
<div class="Fnt1"> MANAJEMEN INFORMATIKA
</div>
</div>


<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Hima MI</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="#">Profil</a></li>
    
      </li>
      <li><a href="#">Proker</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>


<div class="content">
<div class="polaroid">
<img src="img/Mi.jpg" width="200px" height="200px" align=center> </div>
<br>
<div class="newspaper">
<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna 
aliquam erat volutpat.Ut wisi enim ad minim veniam,quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip
ex ea commodo consequat Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut 
laoreet dolore magna aliquam erat volutpat.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh 
euismod tincidunt ut laoreet dolore magna
</p>
</div>

<br>  
<div class="footer">
<div class="container">
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Instagram</a></li>
    <li><a data-toggle="tab" href="#menu1">Facebook</a></li>
    <li><a data-toggle="tab" href="#menu2">Twitter</a></li>
    <li><a data-toggle="tab" href="#menu3">Youtube</a></li>
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <h2>Instagram</h2>
      <p>Please, Follow and join ..</p>
    </div>
    <div id="menu1" class="tab-pane fade">
      <h2>Come In...! Facebook</h2>
      <p>I mean, sometimes I enjoy the show, but other times I enjoy other things.</p>
    </div>
    <div id="menu2" class="tab-pane fade">
      <h2>Follow me ! </h2>
      <p>Please Subscribe..</p>
    </div>
    <div id="menu3" class="tab-pane fade">
      <h2>Watch...! Youtube</h2>
      <p>Please Subscribe..</p>
    </div>
</div>
</div>

</style>
</head>
</html>

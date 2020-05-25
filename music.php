<?php 
if(isset($_POST["author"])){
$author=$_POST["author"];
$song=$_POST["song"];
$feel=$_POST["feel"];
$robot=$_POST["robot"];
$result = '';
$result .=  '<music>';
$result .=  '<author>' . $author .  '</author>';
$result .=  '<song>' . $song .  '</song>';
$result .=  '<mood>' . $feel .  '</mood>';
$result .=  '<robot>' . $robot .  '</robot>';
$result .=  '</music>';

file_put_contents('muzika.xml', $result);
die("uspjesno generirano");
}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  <title >MusicJams</title>

  </head>
  <body class="bg-dark">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">MusicJams</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="music.php">Music</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          MusicHits
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">80s</a>
          <a class="dropdown-item" href="#">90s</a>
          <a class="dropdown-item" href="#">00s</a>
          <a class="dropdown-item" href="#">10s</a>
        </div>
      </li>
      
        <a class="nav-link" href="#">The Crew</a>
        <a class="nav-link" href="#">Help</a>
      
    </ul>
    
  </div>
</nav>
  <div class="jumbotron text-center" style="background-image: url(https://cdn0.tnwcdn.com/wp-content/blogs.dir/1/files/2013/03/mixer-730x377.jpg); background-size: 100% 100%;">
  
  <h1 class="text-white">Welcome to Music Jams</h1>
  <p class="text-white"> We provide the content for you. Listen to any song you want.</p>
  <p class="text-white"><i>Let's get lost in a better world</i></p> 
  <ul class="list-group list-group-horizontal d-flex justify-content-center mt-5">
  <a class="link" href="#" > <li class="list-group-item  bg-transparent text-white">Dance </li></a>
  <a class="link" href="#"> <li class="list-group-item  bg-transparent text-white">Pop </li></a>
  <a class="link" href="#"> <li class="list-group-item  bg-transparent text-white">Indie </li></a>
  <a class="link" href="#"> <li class="list-group-item  bg-transparent text-white">Rock </li></a>
  <a class="link" href="#"> <li class="list-group-item  bg-transparent text-white">Rap+R&B </li></a>
  <a class="link" href="#"> <li class="list-group-item  bg-transparent text-white">Latino </li></a>
</ul>
  </div>
  
   <div class="container col-10">
      <form action="projekt1.php" method="POST">

      <div class="form-group" >
     <label for="author" class="text" ><p class="text-white">Author:</p>
     <input type="text" class="form-control" name="author"></input></label>
      </div>

      <div class="form-group">
     <label for="song" class="text"><p class="text-white">Song:</p>
     <input type="text" class="form-control" name="song"></input></label>
      </div>

      <div class="input-group mb-3">
      <label for="author" class="text" ><p class="text-white">How you feelin'...?</p>
  <select class="custom-select col-12" id="inputGroupSelect01" name="feel">
     
    <option selected>-</option>
    <option value="1">Leave me alone</option>
    <option value="2">Sun shines from my face</option>
    <option value="3">Cry me a river</option>
    <option value="4">I don't have feelings</option>
  </select>
</div>

<div class="input-group mb-3">
  <div class="input-group-prepend" name="check">
  <p class="d-block p-2 bg-dark text-white">Are you a robot?</p>
  <p class="d-block p-2 bg-dark text-white">No.</p> <input type="radio" value="yes" name="robot">

  <p class="d-block p-2 bg-dark text-white">Yes.</p><input type="radio" value="no" name="robot">
   
  </div>
  
</div>

      <button type="submit" class="btn btn-secondary">Play it!</button>
      
      </form>
   </div>
   <div class="jumbotron text-center bg-secondary mt-5 text-white" style="margin-bottom:0">
  <p>MuscJams, 2020</p>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>

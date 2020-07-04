<!--%-- 
    Document   : top
    Created on : Apr 6, 2020, 1:09:40 AM
    Author     : Tripti sharma
--%-->

<!--%@page contentType="text/html" pageEncoding="UTF-8"%-->
<!DOCTYPE html>
<html>
  <head>
    <link href="../style/page2.css" rel="stylesheet"> 
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="bk.png" rel="icon">
    <style>
      .checked {
        color: orange;
      }
    </style>
  </head>
  <body onload="checkCookie()">
    <div class="topnav">
      <div class="search-container">
        <form action="/action_page.php" class="formsubmit">
          <input type="text" placeholder="Search.." name="search">
          <button type="submit"><i class="fa fa-search"></i></button>
        </form>
      </div>
      
    </div>
    <!--button  class="button"onclick="myFunction()">Dark Mode</button--> 
    <!-- MAIN (Center website) -->

     
    <div class="sidenav">
    
      <img src="../img/bk.png" class="button5 logotop" alt="PT Media player" title="PT Media Player">  
      <p id="titlename" class="mobtitle" style="font-size: 20px; margin-bottom: 50px; align-items:center; padding-left:5%;">Songs</p>
      <div id="myBtnContainer">
        <a class="" onclick="filterSelection('all')"> Show all</a>
        <a class="" onclick="filterSelection('Romantic')"> Romantic</a>
        <a class="" onclick="filterSelection('Party')">Party</a>
        <a class="" onclick="filterSelection('Bhakti')">Bhakti</a>
        <!--img src="dp.png" alt="Avatar" class="avatar"-->
      </div>
    </div>
    <!-- Portfolio Gallery Grid -->
    <div class="main">
      <div class="row">
        <div class="column Romantic">
          <div class="content">
            <div class="container">
              <img src="../img/bhula-dunga.jpg" alt="Romantic" class="image2" style="width:100%">
              <div class="overlay">
                <a addr="../video/bhula-dunga.mp4" name="bd" class="icon" title="play" id="1">
                <i class="fa fa-play"></i>
                </a>
              </div>
            </div>
            <h4>Bhula Dunga</h4>
            <p>Star Rating</p>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star" style="color:white;"></span>
            <span class="fa fa-star" style="color:white;"></span>
          </div>  
        </div>
        <div class="column Romantic ">
          <div class="content">
            <div class="container">
              <img src="../img/dil-meri-na-sune.jpg" alt="Romantic" class="image2" style="width:100%">
              <div class="overlay">
                <a addr="../video/dil-meri-na-sune.mp4" class="icon" title="play" id="2"> 
                  <i class="fa fa-play"></i>
                </a>
              </div>
            </div>
            <h4>Dil Meri Na Sune </h4>
            <p>Star Rating</p>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star" style="color:white;"></span>
            <span class="fa fa-star" style="color:white;"></span>
            <span class="fa fa-star" style="color:white;"></span>
          </div>
        </div>
        <div class="column Romantic">
          <div class="content">
            <div class="container">
              <img src="../img/filhaal.jpg" alt="Romantic" class="image2" style="width:100%">
              <div class="overlay">
                <a addr="../video/filhaal.mp4" class="icon" title="play" id="3">
                  <i class="fa fa-play"></i>
                </a>
              </div>
            </div>
            <h4>Filhaal</h4>
            <p>Star Rating</p>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star" style="color:white;"></span>
            <span class="fa fa-star" style="color:white;"></span>
          </div>
        </div>
  
        <div class="column Romantic">
          <div class="content">
            <div class="container">
              <img src="../img/gale-lag-jaa.jpg" alt="Romantic" class="image2" style="width:100%">
              <div class="overlay">
                <a addr="../video/gale-lag-ja.mp4" class="icon" title="play" id="4">
                  <i class="fa fa-play"></i>
                </a>
              </div>
            </div>
            <h4>Gale Lag Jaa</h4>
            <p>Star Rating</p>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star" style="color:white;"></span>
            <span class="fa fa-star" style="color:white;"></span>
            <span class="fa fa-star" style="color:white;"></span>
          </div>
        </div>
  
        <div class="column Romantic">
          <div class="content">
            <div class="container">
              <img src="../img/hawa-banke.jpg" alt="Romantic" class="image2" style="width:100%">
              <div class="overlay">
                <a addr="../video/hawa-banke.mp4" class="icon" title="play" id="5">
                  <i class="fa fa-play"></i>
                </a>
              </div>
            </div>
            <h4>Hawa banke</h4>
            <!--p>Lorem ipsum dolor..</p-->
            <p>Star Rating</p>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star" style="color:white;"></span>
            <span class="fa fa-star" style="color:white;"></span>
            <span class="fa fa-star" style="color:white;"></span>
          </div>
        </div>

  
        <div class="column Romantic">
          <div class="content">
            <div class="container">
              <img src="../img/humsafar.jpg" alt="Romantic" class="image2" style="width:100%">
              <div class="overlay">
                <a addr="../video/humsafar.mp4" class="icon" title="play" id="6">
                  <i class="fa fa-play"></i>
                </a>
              </div>
            </div>
            <h4>Humsafar</h4>
            <p>Star Rating</p>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star" style="color:white;"></span>
            <span class="fa fa-star" style="color:white;"></span>
          </div>
        </div>
        <div class="column Romantic">
          <div class="content">
            <div class="container">
              <img src="../img/ik-mulaqaat.jpg" alt="Romantic" class="image2" style="width:100%">
              <div class="overlay">
                <a addr="../video/ik-mul.mp4" class="icon" title="play" id="7">
                  <i class="fa fa-play"></i>
                </a>
              </div>
            </div>
            <h4>Ek Mulaqaat</h4>
            <p>Star Rating</p>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star" style="color:white;"></span>
          </div>
        </div>
        <div class="column Romantic">
          <div class="content">
            <div class="container">
              <img src="../img/ik-vaari-aa.jpg" alt="Romantic" class="image2"style="width:100%">
              <div class="overlay">
                <a addr="../video/ik-vaari-aa.mp4" class="icon" title="play" id="8">
                  <i class="fa fa-play"></i>
                </a>
              </div>
            </div>
            <h4>Ek Vaari Aa</h4>
            <!--p>Lorem ipsum dolor..</p-->
            <p>Star Rating</p>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star" style="color:white;"></span>
            <span class="fa fa-star" style="color:white;"></span>
          </div>
        </div>
        <div class="column Romantic">
          <div class="content">
            <div class="container">
              <img src="../img/humnava-mere.jpg" alt="Romantic" class="image2" style="width:100%">
              <div class="overlay">
                <a addr="../video/humnava-mere.mp4" class="icon" title="play" id="9">
                  <i class="fa fa-play"></i>
                </a>
              </div>
            </div>
            <h4>Humnava Mere</h4>
            <p>Star Rating</p>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star" style="color:white;"></span>
            <span class="fa fa-star" style="color:white;"></span>
            <span class="fa fa-star" style="color:white;"></span>
          </div>
        </div>
        <div class="column Party">
          <div class="content">
            <div class="container">
              <img src="../img/aankh-mare.jpg" alt="Party" class="image2"  style="width:100%">
              <div class="overlay">
                <a addr="../video/aankh-mare.mp4" class="icon" title="play" id="10">
                  <i class="fa fa-play"></i>
                </a>
              </div>
            </div>
            <h4>Aankh Mare</h4>
            <p>Star Rating</p>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star" style="color:white;"></span>
          </div>
        </div>
        <div class="column Romantic">
          <div class="content">
            <div class="container">
              <img src="../img/main-rahoon-ya-na-rahoon.jpg" alt="Romantic" class="image2" style="width:100%">
              <div class="overlay">
                <a addr="../video/main-rahoon-ya-na-rahoon.mp4" class="icon" title="play" id="11">
                  <i class="fa fa-play"></i>
                </a>
              </div>
            </div>
            <h4>main Rahoon Ya Na Rahoon</h4>
            <!--p>Lorem ipsum dolor..</p-->
            <p>Star Rating</p>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star" style="color:white;"></span>
            <span class="fa fa-star" style="color:white;"></span>
          </div>
        </div>
        <div class="column Romantic">
          <div class="content">
            <div class="container">
              <img src="../img/genda-phool.jpg" alt="Romantic"class="image2" style="width:100%">
              <div class="overlay">
                <a addr="../video/genda-phool.mp4" class="icon" title="play" id="12"> 
                  <i class="fa fa-play"></i>
                </a>
              </div>
            </div>
            <h4>Genda Phool</h4>
            <p>Star Rating</p>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star" style="color:white;"></span>
            <span class="fa fa-star" style="color:white;"></span>
          </div>
        </div>
        <!-- END GRID -->
      </div>
    </div>
    <!-- END MAIN -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="../script/page2.js"></script>
  </body>
</html>
<!DOCTYPE html>

<html lang="fr">


<head>
    <meta charset="utf-8">
    
    <title>Navigation Bar</title>
    
    
    <link rel="stylesheet" href="style.css">
    <style>
    
    body {
    background-color: white;
    
    }
    #essai {
    margin: 15px;
    }
    .essai {
    padding: 15px;
    }
    .essai2 li{
    
    border:solid 1.5px;
      box-shadow:1px 1px 5px black;   
    
    }
    .box-cont {
    
    }
    </style>
</head>

<body>
    <div class="row"> 
    <div class="col-boxes"> <p></p> </div>
    <nav class="essai">
    <ul class="essai2">
        <li><a href="#"><strong>Reviews</strong></a>
            <ul>
                <li><a href="#"><strong>Nouveaux tests</strong></a></li>
                <li><a href="#"><strong>Tests populaires</strong></a></li>
            </ul>
        </li>
        
        <li><a href="#"><strong>News</strong></a>
            <ul>
                <li><a href="#"><strong>Par thème</strong></a></li>
                <li><a href="#"><strong>Chaud patate !</strong></a></li>
            
            </ul>        
        </li>
        <li><a href="#"><strong>Discussions</strong></a>
            <ul>
                <li><a href="#"><strong>Discussion épinglée</strong></a></li>
                <li><a href="#"><strong>Archives</strong></a></li>
            </ul>
        </li>
        
        <li><a href="#"> <strong>Forum</strong> </a></li>
        
        <li><a href="#"><strong>About Us</strong></a></li>
     </ul>
     </nav>
    
    </div>
    
    <div class="row">
    
        <div class="col-1">
        <br> <!-- pour aligner -->
        <nav>
    <ul id="essai">
    <!-- barre de recherche ?-->
        <li class="class1"><a href = "#">Autres Tests</a></li>
        <li class="class1"><a href = "#">Tests similaires</a></li>
        <li class="class1"><a href = "#"></a></li>
        <li class="class1"><a href = "#">En discuter sur le forum</a></li>
        <li class="class1"><a href = "#"></a></li>
        <li class="class1"><a href = "#"></a></li>
        <li class="class1"><a href = "#"></a></li>
        <li class="class1"><a href = "#"></a></li>
    </ul>
        </nav> 
       </div>
       
    </div>
<div class="row">
    <div class="col-3"> <p> </p> </div> 
    
    <?php 
    include("slideshow.html");
    ?>
    
</div>

<div class="row">
<div class="col-demi"> <p> </p> </div>
<div class="box-cont">
    <div class="news"> <p> blablalalalalalallala </p> </div>
</div>
</div>
</body>


</html>

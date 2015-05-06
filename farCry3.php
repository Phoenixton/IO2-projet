<!DOCTYPE html>

<html lang="fr">


<head>
    <meta charset="utf-8">
    
    <title>Navigation Bar</title>
    
    
    <link rel="stylesheet" href="style.css">
    <style>
    
    body {
    
    background-color: white;
    background-image: url(imgpages/farcry_background.png);
   
    }
    #essai {
    margin: 15px;
    /*width:200px;*/
    }
    .essai {
    padding: 15px;
    
    }
    .essai2 li{
    
    border:solid 1.5px;
      box-shadow:1px 1px 5px black;   
    
    }
    h1 {
    background-image: linear-gradient(#e74c3c, #000000);
    }
    h3 {
    background-image: linear-gradient(#e74c3c, #000000);
    }
    </style>
</head>


<body>
    <div class="row"> 
    <div class="col-1">
    <div class="content">
    
    <p>some text...</p>
    </div>
    </div>
    <?php
    include('menu.php'); ?>
    <br>
    <br>
    <?php
    include('barre_tests.php');
    include('fonctions.php');
    ?>
    
<?php titre('Far Cry 3');?> 

<div class="news">
                <p>
                    <h2> Blablabla </h2>
    
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur pharetra condimentum tortor a posuere. Nunc vel turpis elit. Quisque euismod orci sed orci varius, id molestie velit bibendum. Nunc ut ullamcorper est. Etiam sodales auctor enim, ac bibendum odio bibendum eu. Sed vitae purus et urna commodo tincidunt. Morbi vel justo rutrum, vulputate elit in, cursus nulla. Aenean varius et odio id condimentum. 
                </p>
            </div>
    
            <div class="news">
   <div class="row">
    <div class="col-3">
     
    <p>
     Aliquam mollis, libero imperdiet blandit convallis, enim nisi molestie massa, non finibus augue justo vitae erat. Aliquam vel sem eu nibh posuere commodo et varius magna. Lorem ipsum dolor sit amet, consectetur adipiscing elit. In malesuada nibh consectetur, pellentesque lorem maximus, vulputate arcu. Curabitur in purus est. Maecenas porttitor, sapien et condimentum sagittis, risus lectus ullamcorper enim, varius maximus nibh mi nec arcu. Vivamus tempor semper nunc ultrices rutrum. Suspendisse porttitor purus sit amet ante auctor auctor.
    </p>
    </div>
    <div class="col-3">
    <p>
     Aliquam mollis, libero imperdiet blandit convallis, enim nisi molestie massa, non finibus augue justo vitae erat. Aliquam vel sem eu nibh posuere commodo et varius magna. Lorem ipsum dolor sit amet, consectetur adipiscing elit. In malesuada nibh consectetur, pellentesque lorem maximus, vulputate arcu. Curabitur in purus est. Maecenas porttitor, sapien et condimentum sagittis, risus lectus ullamcorper enim, varius maximus nibh mi nec arcu. Vivamus tempor semper nunc ultrices rutrum. Suspendisse porttitor purus sit amet ante auctor auctor.
    </p>
    </div>
   </div>  
    </div>
    <div class="news">
    <div class="row">
    <h2> Blablabla </h2>
    <p>
Pellentesque lacinia semper ex, sed sodales eros commodo ut. Nullam lobortis augue lorem, non consequat sem egestas rhoncus. Nullam nulla est, ultricies non tempus congue, pretium vitae nibh. Maecenas tristique sed nulla vel pellentesque. Pellentesque vulputate congue nulla. Fusce a nisl ipsum. Aenean quis fringilla metus, et facilisis mi. Fusce eget elit sit amet lacus viverra tristique at eu nisl. In a sem placerat, sollicitudin risus in, porta nisl. Morbi hendrerit accumsan ligula eget hendrerit. Donec eu est viverra, ullamcorper dui vel, suscipit justo.
</p>
     </div>
     
     <div class="row">
    
     <div> <!-- used to be class=col-2 --> 
     <!--<p class="legende_cachee"> -->
        <img class="image-centre" src="imgpages/farcry3.jpg" title="imgpages/notice.gif"/> 
        <span class="legende_centre"> Essai Legende </span>
   <!--  </p> -->
     </div>
     </div>
        <p>
Nam lacinia laoreet urna at finibus. Fusce rhoncus odio quis quam ultrices malesuada. Integer eu dapibus ante. Vivamus feugiat purus congue iaculis convallis. Aliquam ut diam ornare mi rhoncus blandit. Quisque a felis neque. Ut ultrices, ipsum eu tempor suscipit, odio libero consequat dui, ut imperdiet sapien tortor sed nunc. Curabitur convallis eget ipsum accumsan suscipit. Pellentesque interdum erat sit amet lacus lobortis rhoncus. Suspendisse potenti. Etiam commodo venenatis dui vel suscipit. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Quisque quis ligula eu risus finibus semper. Vivamus sed massa non mauris dictum consectetur. Nam quis diam id nisi commodo consequat. Morbi lacinia faucibus sapien, id suscipit eros posuere euismod. 
    
        </p>
    </div>
    </div>
    </div>
        <?php 
        debut_comm();
        nouv_comm();
        ?>
Pellentesque lacinia semper ex, sed sodales eros commodo ut. Nullam lobortis augue lorem, non consequat sem egestas rhoncus. Nullam nulla est, ultricies non tempus congue, pretium vitae nibh. Maecenas tristique sed nulla vel pellentesque. Pellentesque vulputate congue nulla. Fusce a nisl ipsum. Aenean quis fringilla metus, et facilisis mi. Fusce eget elit sit amet lacus viverra tristique at eu nisl. In a sem placerat, sollicitudin risus in, porta nisl. Morbi hendrerit accumsan ligula eget hendrerit. Donec eu est viverra, ullamcorper dui vel, suscipit justo.
        <?php
        end_comm();
        nouv_comm();
        ?>
    
    <p> Pellentesque lacinia semper ex, sed sodales eros commodo ut. Nullam lobortis augue lorem, non consequat sem egestas rhoncus. Nullam nulla est, ultricies non tempus congue, pretium vitae nibh. Maecenas tristique sed nulla vel pellentesque. Pellentesque vulputate congue nulla. Fusce a nisl ipsum. Aenean quis fringilla metus, et facilisis mi. Fusce eget elit sit amet lacus viverra tristique at eu nisl. In a sem placerat, sollicitudin risus in, porta nisl. Morbi hendrerit accumsan ligula eget hendrerit. Donec eu est viverra, ullamcorper dui vel, suscipit justo. </p>
    </div>   
    </div>    
        <?php
        end_comm();
        nouv_comm();
        ?>
  Pellentesque lacinia semper ex, sed sodales eros commodo ut. Nullam lobortis augue lorem, non consequat sem egestas rhoncus. Nullam nulla est, ultricies non tempus congue, pretium vitae nibh. Maecenas tristique sed nulla vel pellentesque. Pellentesque vulputate congue nulla. Fusce a nisl ipsum. Aenean quis fringilla metus, et facilisis mi. Fusce eget elit sit amet lacus viverra tristique at eu nisl. In a sem placerat, sollicitudin risus in, porta nisl. Morbi hendrerit accumsan ligula eget hendrerit. Donec eu est viverra, ullamcorper dui vel, suscipit justo.
        <?php
        end_comm();
        
        ?>
  <div id="comment_form">
	
	<div>
		<textarea rows="10" name="comment" id="comment" placeholder="You are welcome to add any comment, just stay polite !"></textarea>
	</div>
	<div>
		<input type="submit" name="submit" value="Add comment">
	</div>
  </div>
	<?php
	end_comm();
	
	?>
	
</div>
  
</div>
 </body>
<!--remonter page-->
</html>

<?php

  require 'header.php'

?>
   

   <div id='mobilePad'>

        <button class='mobileBtn' onclick='jump()'>Jump</button>

        <button class='mobileBtn' onclick='longRangeShot()'>Lazer</button>
  
   </div>

   

   <div id='pivotDiv'>Please, pivot your screen :)</div>

  <div id='game'>

    <div id="gameDiv">
  
      <div id='hero'>
      
          <canvas id='heroCanvas'></canvas>
          
      </div>

      <div id='speedShield'></div>

      <div id='lazer'></div>

      <div id='opponent'><canvas id = 'opponent1Canvas'></canvas></div>

      <div id='opponent2'><canvas id = 'opponent2Canvas'></canvas></div>

      <div id='opponent2Bullet'></div>

      <div id="boss"></div>

      <div id="bossSoldier"></div>

    
    </div>

  </div>


  <div id='score' style='color:white'>0</div>



  <?php 


     require 'footer.php';


  ?>
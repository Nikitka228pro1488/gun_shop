<div class="footer-wrap">
   <div class="footer-block">
      <div class="footer_copy">
         <span><b><a href="index.php" title="Русская охота - Оружейный нтернет-магазин">Русская охота - Оружейный нтернет-магазин</a> © 2017</b></span>
      </div>
      <div class="footer_contacts float-right">
         <?php
            $handle = file_get_contents("files/counter.txt");
            $handle++;
            $fp = @fopen("files/counter.txt","w");
            fwrite($fp,$handle);
            fclose($fp);
            echo "<p><b>Посещений: $handle</b></p>";
            ?></span>
      </div>
   </div>
</div>
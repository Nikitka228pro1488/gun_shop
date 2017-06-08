<?require 'head.php';?>
   <body>
      <div class="main-block">
         <div class="container paper">
            <?require 'header.php';?>
            <div id="main">
               <div id="contacts">
                  <h2 class="post_ttl2">О НАС</h2>
         
		    <?php echo file_get_contents('files/about.txt'); ?>
		   
				</div>
               </div>
            </div>
            <div class="clear-both"></div>
         </div>
      </div>
      <?require 'footer.php';?>
   </body>
</html>

<header>
    <div>
          <div class="date">
          <?php
            $date = strftime('%A %d %B %Y');
            $heure = date("H:i:s");

            echo "<h2 class='date_style'>$date</h2>";
           ?>
           </div>


           <div class="clock">
              <h1 id="clock_style"></h1>
            <!--  <h2 id="clock_scdmini"></h2> !--->
           </div>

           <div id="controller" class="controller">
              <h1 id="controller_style"></h1>
           </div>

           <div id="nav" class="nav" onclick="showhide_controller()">

           </div>

           <script>
             function showhide_controller(){
               var x = document.getElementById("controller");
                if (x.style.display === "none") {
                  x.style.display = "block";
                } else {
                  x.style.display = "none";
                }
             }
           </script>

      </div>
</header>

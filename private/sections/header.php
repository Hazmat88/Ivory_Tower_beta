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
              <div id="twoscreen" class="twoscreen" onclick="showhide_cam02();switch_twoscreen()">

              </div>
           </div>

           <div id="nav" class="nav" onclick="openNav(); showhide_controller()">

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

             function showhide_cam02(){
               var x = document.getElementById("camera02");
               var y = document.getElementById("browser_video");
                if (x.style.display === "none") {
                  x.style.display = "block";
                  y.style.height = "40vw";
                } else {
                  x.style.display = "none";
                  y.style.height = "60vw";
                }
             }




           </script>

      </div>

    <?php include "private/sections/sidenav.php"; ?>
</header>

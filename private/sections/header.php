<header>
  <div>

    <div class="head">
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
    </div>
           <div id="controller" class="controller">
              <h1 id="controller_style"></h1>
      <!-- TODO Display FLEX + DIV CLASS container -->
              <div id="twoscreen" class="twoscreen" onclick="showhide_cam02();switch_twoscreen()"></div>

              <div id="" class="ctrl2" onclick="showhide_cam02();switch_twoscreen()"></div>

              <div id="" class="ctrl3" onclick="showhide_cam02();switch_twoscreen()"></div>

              <div id="" class="ctrl4" onclick="showhide_cam02();switch_twoscreen()"></div>

              </div>


           <div id="nav" class="nav" onclick="openNav()">

           </div>

           <div id="btncontroller" class="btncontroller" onclick=" showhide_controller()">

           </div>


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
                //  y.style.height = "40vw";
                } else {
                  x.style.display = "none";
              //    y.style.height = "60vw";
                }
             }
           </script>



    <?php include "private/sections/sidenav.php"; ?>
</header>

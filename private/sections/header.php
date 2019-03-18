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
           </div>

           <div class="controller">
              <h1 id="controller_style"></h1>
           </div>


      </div>
</header>

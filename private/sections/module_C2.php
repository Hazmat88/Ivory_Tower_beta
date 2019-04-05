

<div class="Cameras">
    <div class="camera01">

            <div id="huda" class="hudA">
            <!-- <div class="titleA"> -->


                <input type="text" id="dropdown_BD" placeholder="Data Base">

                <input type="text" id="name" placeholder="Device Name">

                <input type="text" id="ipadd" placeholder="Just Device Number IP" >
                <button id="subhda" onclick="hud_switch()">Try it</button>

                <h1 ><a id="name_titleA" href="http://192.168.1.27:8080" target="_blank" >Name + IP Adress</a></h1>
            </div>

            <div class="flux_A">
                <img id="browser_video" class="cam01" alt="video" src="http://192.168.1.27:8080/video">
            </div>
<!--
            <div class="control_A">
                <canvas class="flot-overlay" width="750" height="600" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 750px; height: 600px;"></canvas>
            </div>

            <div id="audio_pane" style="margin: auto; display: table;">
                  <audio id="html5_audio" controls=""><source id="audio" src="http://192.168.1.37:8080/audio.wav" type="audio/wav"></audio>
              </div>

-->
      </div>
  </div>
<script>

      function hud_switch() {
        ipadress();
        hud_link();
      }

      // Input Validation by Keyboard enter key
      var input = document.getElementById("ipadd");
      input.addEventListener("keyup", function(event) {
      if (event.keyCode === 13) {
      event.preventDefault();
      document.getElementById("subhda").click();
      }
      });

      function ipadress() {
      var adressip =  document.getElementById("ipadd").value;
      console.log(adressip);

      var fulladdressip = "http://192.168.1." + adressip + ":8080";
      console.log(fulladdressip);


      document.getElementById("browser_video").src="http://192.168.1." + adressip + ":8080/video";

      document.getElementById("name_titleA").href="http://192.168.1." + adressip + ":8080";








      //document.getElementById("audio").src="http://192.168.1." + adressip + ":8080/video";
      }

      function hud_link() {
        var hud = document.getElementById("huda");

        if ( hud.className === "hudA") {
          hud.setAttribute("class", "titleA");
        
        }else {
          hud.setAttribute("class", "hudA");
        }
      }

</script>
<!--
    <div class="camera02">
        <div class="hudb">
            <div class="">
              <input type="text" id="myText" value="Ip">
                <button onclick="ipadress()">Try it</button>
            </div>

        </div>



    </div>

-->

</div>

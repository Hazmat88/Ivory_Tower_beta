

<div class="cameras">

    <div id="camera01" class="camera01">

            <div id="huda" class="hudA">
<!--********** HUDA ELEMENTS INPUTS & BUTTONS *************-->
<div class="validationA" onclick="hud_switch('huda','hudA','titleA','link_titleA','ipaddA','nameA','cam01','frame-area_c1')"></div>

            <div class="input_">


                <input type="text" id="dropdown_BD" placeholder="Data Base">

                <input type="text" id="nameA" placeholder="Device Name">

                <input type="text" id="ipaddA" placeholder="Just Device Number IP" >

                <button id="subhda" onclick="hud_switch('huda','hudA','titleA','link_titleA','ipaddA','nameA','cam01','frame-area_c1')">DONE</button>
            </div>

<!--********** HUDA SWITCHED ELEMENTS DONE TITLEA *************-->
                <div class="frame_titleA">
                    <a id="link_titleA" href="http://192.168.1.36:8080" target="_blank" >Name + IP ADRESS</a>
                    <!-- BUTTON SWITCH Hud/title -
                    <div class="button_switch_hud" onclick="hud_link('huda','hudA','titleA')"></div>-->
                </div>

            </div>


<!--*******************************************************************
********************** FLUX A **************************************************************** -->
            <div id="fluxa" class="flux_A">

              <div class="close_frame_1" onclick="openNav2()">
              </div>

              <!--<div class="open_frame_1" onclick="closeNav2()">
              </div> -->

                <img id="browser_video" class="cam01" alt="video" src="http://192.168.1.32:8080/video" onclick="closeNav2()">


            </div>
            <?php include "frame_app.php";
            ?>
<!--*******************************************************************
********************** CONTROLLERS FLUX A **************************************************************** -->
<!--
bad
            <div class="control_A">
                <canvas class="flot-overlay" width="750" height="600" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 750px; height: 600px;"></canvas>
                 style="margin: auto; display: table;"
            </div>
Good
            <div id="audio_pane">
                  <audio id="html5_audio" controls=""><source id="audio" src="http://192.168.1.37:8080/audio.wav" type="audio/wav"></audio>
              </div>
-->
      </div>



<!-- ********************************************************
 ********************** CAM02 *******************************
***************************************************************
*********************************************************** -->

<div id="camera02" class="camera02">

        <div id="hudb" class="hudB">
<!--********** HUDA ELEMENTS INPUTS & BUTTONS *************-->
      <div class="input_">

            <input type="text" id="dropdown_BD" placeholder="Data Base">

            <input type="text" id="nameB" placeholder="Device Name">

            <input type="text" id='ipaddB' placeholder="Just Device Number IP" >

            <button id="subhdb" onclick="hud_switch('hudb','hudB','titleB','link_titleB','ipaddB','nameB','cam02','frame-area_c2')">DONE</button>
      </div>

<!--********** HUDA SWITCHED ELEMENTS DONE TITLEB *************-->
            <div class="frame_titleB">
                <a id="link_titleB" href="http://192.168.1.36:8080" target="_blank" >Name + IP ADRESS</a>

                <div class="button_switch_hud" onclick="hud_link('hudb','hudB','titleB')"></div>
            </div>

        </div>

<!--*******************************************************************
********************** FLUX B **************************************************************** -->
        <div class="flux_B">
            <img id="browser_video" class="cam02" alt="video" src="http://192.168.1.32:8080/video">
        </div>

<!--*******************************************************************
********************** CONTROLLERS FLUX A **************************************************************** -->
<!--
bad
        <div class="control_A">
            <canvas class="flot-overlay" width="750" height="600" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 750px; height: 600px;"></canvas>
             style="margin: auto; display: table;"
        </div>
good
        <div id="audio_pane">
              <audio id="html5_audio" controls=""><source id="audio" src="http://192.168.1.36:8080/audio.wav" type="audio/wav"></audio>
          </div>
-->
  </div>


</div>

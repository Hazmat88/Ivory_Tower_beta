

<div class="Cameras">

    <div id="camera01" class="camera01">

            <div id="huda" class="hudA">
<!--********** HUDA ELEMENTS INPUTS & BUTTONS *************-->

                <input type="text" id="dropdown_BD" placeholder="Data Base">

                <input type="text" id="name" placeholder="Device Name">

                <input type="text" id="ipadd" placeholder="Just Device Number IP" >

                <button id="subhda" onclick="hud_switch()">DONE</button>


<!--********** HUDA SWITCHED ELEMENTS DONE TITLEA *************-->
                <div class="frame_titleA">
                    <a id="link_titleA" href="http://192.168.1.27:8080" target="_blank" >Name + IP ADRESS</a>

                    <div class="button_switch_hud" onclick="hud_link()"></div>
                </div>

            </div>

<!--*******************************************************************
********************** FLUX A **************************************************************** -->
            <div id="fluxa" class="flux_A">
                <img id="browser_video" class="cam01" alt="video" src="http://192.168.1.27:8080/video">
            </div>

<!--*******************************************************************
********************** CONTROLLERS FLUX A **************************************************************** -->
<!--

            <div class="control_A">
                <canvas class="flot-overlay" width="750" height="600" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 750px; height: 600px;"></canvas>
                 style="margin: auto; display: table;"
            </div>
-->
            <div id="audio_pane">
                  <audio id="html5_audio" controls=""><source id="audio" src="http://192.168.1.37:8080/audio.wav" type="audio/wav"></audio>
              </div>

      </div>



<!-- ********************************************************
 ********************** CAM02 *******************************
***************************************************************
*********************************************************** -->

<div id="camera02" class="camera02">

        <div id="hudb" class="hudB">
<!--********** HUDA ELEMENTS INPUTS & BUTTONS *************

            <input type="text" id="dropdown_BD" placeholder="Data Base">

            <input type="text" id="name" placeholder="Device Name">

            <input type="text" id="ipadd" placeholder="Just Device Number IP" >

            <button id="subhda" onclick="hud_switch()">DONE</button>

-->
<!--********** HUDA SWITCHED ELEMENTS DONE TITLEA *************-->
            <div class="frame_titleB">
                <a id="link_titleB" href="http://192.168.1.37:8080" target="_blank" >Name + IP ADRESS</a>

                <div class="button_switch_hud" onclick="hud_link()"></div>
            </div>

        </div>

<!--*******************************************************************
********************** FLUX A **************************************************************** -->
        <div class="flux_B">
            <img id="browser_video" class="cam02" alt="video" src="http://192.168.1.31:8080/video">
        </div>

<!--*******************************************************************
********************** CONTROLLERS FLUX A **************************************************************** -->
<!--

        <div class="control_A">
            <canvas class="flot-overlay" width="750" height="600" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 750px; height: 600px;"></canvas>
             style="margin: auto; display: table;"
        </div>
-->
        <div id="audio_pane">
              <audio id="html5_audio" controls=""><source id="audio" src="http://192.168.1.37:8080/audio.wav" type="audio/wav"></audio>
          </div>

  </div>


</div>

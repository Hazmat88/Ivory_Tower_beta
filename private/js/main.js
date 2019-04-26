console.log("helloworld");

init ();
// CLOCK SYSTEM
function init(){
  clock();
  showhide_controller()
  input('ipaddA','subhda');
  input('ipaddB','subhdb');
  input('nameA','subhda');
  input('nameB','subhdb');
}

// FUNCTION INPUT VALIDATION BY KEYBOARD
function input(buttonid,buttonvalid) {
  var input = document.getElementById(buttonid);

  input.addEventListener("keyup", function(event) {

          if (event.keyCode === 13) {
              event.preventDefault();
              document.getElementById(buttonvalid).click();
          }
  });
}

// FUNCTION CLOCK TIMER FORMAT H:M:S
function clock() {

    function $(id){return document.getElementById(id)}

    function hms(){
        var today=new Date();
        var hrs=today.getHours(),mns=today.getMinutes(),scd=today.getSeconds();
        var str=(hrs<10?"0"+hrs:hrs)+":"+(mns<10?"0"+mns:mns)+":"+(scd<10?"0"+scd:scd);
        //var scdmini = ":"+(scd<10?"0"+scd:scd);// try custom Second
        $("clock_style").innerHTML=str;

        setTimeout(hms,1000);// réécriture toutes les 1000 millisecondes
    }

    hms();// lancement de la fonction
}


//FUNCTION IP ADRESS + HUD LINK TO DASHBOARD APP Into NEW TAB
function hud_switch(hudx,hudX,titleX,linktitleX,ipadX,nameX) {
  ipadress(ipadX,linktitleX,nameX);
  hud_link(hudx,hudX,titleX);
}

//FUNCTION IP ADRESS Abstration ex:paramater fot link titleA "link_titleA" Abstract in progress
function ipadress(ipaddi,linktitle,nameI) {
  //Variables
    var name = document.getElementById(nameI).value;

    var adressip =  document.getElementById(ipaddi).value;
    var fulladdressip = "192.168." + adressip + ":8080";
    var linktitleA = name +" "+fulladdressip ;
  //Verification console.log
    console.log(fulladdressip);
    console.log(adressip);

  //Changement/Effects of transformations
    document.getElementById("browser_video").src="http://192.168." + adressip + ":8080/video";
    //TRY Bypass ID Element browser_video commun to all Flux Video Cameras
    //document.getElementsByClassName("fluxA").src="http://192.168." + adressip + ":8080/video";
    //document.getElementsByClassName("cam01").setAttribute(src, "http://192.168." + adressip + ":8080/video");

  // Links Titles
    document.getElementById(linktitle).href="http://192.168." + adressip + ":8080";
    document.getElementById(linktitle).innerHTML = linktitleA;
    document.getElementById(linktitle).style.fontWeight = "900";

    //document.getElementById("audio").src="http://192.168.1." + adressip + ":8080/video";
}


// HUD_LINK Function ABSTRACT
function hud_link(hudi,hudI,titleI) {
  var hud = document.getElementById(hudi);

  if ( hud.className === hudI) {
    hud.setAttribute("class", titleI);

  }else {
    hud.setAttribute("class", hudI);
  }
}

// SIDENAV

/* Set the width of the side navigation to 250px */
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

/* Set the width of the side navigation to 0 */
function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}


//CONTROLLER BAR

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

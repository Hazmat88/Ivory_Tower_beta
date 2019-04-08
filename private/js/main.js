console.log("helloworld");

init ();
// CLOCK SYSTEM
function init(){
  clock();
  input();
}

// FUNCTION INPUT VALIDATION BY KEYBOARD
function input() {
  var input = document.getElementById("ipadd");

  input.addEventListener("keyup", function(event) {

          if (event.keyCode === 13) {
              event.preventDefault();
              document.getElementById("subhda").click();
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
function hud_switch() {
  ipadress();
  hud_link();
}


//FUNCTION IP ADRESS
function ipadress() {
      var adressip =  document.getElementById("ipadd").value;
      console.log(adressip);

      var fulladdressip = "192.168.1." + adressip + ":8080";
      console.log(fulladdressip);
      var name = document.getElementById("name").value;

      var linktitleA = name +" "+fulladdressip ;


      document.getElementById("browser_video").src="http://192.168.1." + adressip + ":8080/video";

      document.getElementById("link_titleA").href="http://192.168.1." + adressip + ":8080";

      document.getElementById("link_titleA").innerHTML = linktitleA;
      document.getElementById("link_titleA").style.fontWeight = "900";

      //document.getElementById("audio").src="http://192.168.1." + adressip + ":8080/video";
}

// FUNCTION SWITCH HUD INTO LINK NAME IN NEW TAB DASHBOARD
function hud_link() {
  var hud = document.getElementById("huda");

  if ( hud.className === "hudA") {
    hud.setAttribute("class", "titleA");

  }else {
    hud.setAttribute("class", "hudA");
  }
}

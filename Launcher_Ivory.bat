::@echo off

::Variables

::Initialize Paths
::Path Relative to access Project File    var=%Path_dev%
set Path_dev=
::PATH WAMP Server app                    var=%Path_wamp%
set Path_wamp=C:\ProgramData\Microsoft\Windows\Start Menu\Programs\Wampserver64

::Initialize Directories &/or Files
::Project file dev                        var=%dev_file%
set dev_file=Ivory_Tower\Ivory_tower_beta
::Local Adress of page dev project        var=%local_url%
set local_url=http://localhost/Web_dev_GD/Ivory_Tower/Ivory_tower_beta/index.php



::Launch Wamp Server
cd %Path_wamp% && start /b wampserver64


::Lancement du projet Version 1 si necessaire pour comparer et/ou récupérer du code
::cd C:\Users\%username%\Desktop\Porfolio_2K18\Portfolio_Web_General\Portfolio_Website_General && start /b Portfolio && start /b atom Portfolio
::cd C:\Users\%username%\Desktop\Porfolio_2K18\Portfolio_Web_General\Design\ && start /b Global


::Pour un project sur un autre ordi utiliser uliser la ligne avec le chemin relative ne pas oublier de definir la variable au début du script
cd C:\Users\%username%\Google Drive\Web_dev_GD\
:: cd C:\Users\%username%\Desktop\Web_Dev\Ivory_Tower_beta
:: cd %Path_dev%

::start /b %dev_file%
start /b atom %dev_file%
start /b hyper %dev_file%
cd %dev_file%


::start /b firefox %local_url% && start /b firefox %local_url%

start /b firefox -new-window %local_url% && start /b chrome %local_url%
::start /b firefox-new-window -inspector %local_url%

::--display=DISPLAY Définir l'affichage X à utilise


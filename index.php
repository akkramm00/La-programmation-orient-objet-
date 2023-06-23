<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <?php
class voiture 
  {
    public string $modele;//____
    public string $marque;//    |___ les attributs sont typés.
    public int $vitesse;  //____|
  }
$maVoiture = new voiture();
$maVoiture->vitesse = 100;
echo ($maVoiture->vitesse)."<br>";
$maVoiture->modele = "serie 6";
echo ($maVoiture->modele)."<br>";
$maVoiture->marque = "Audi";
echo ($maVoiture->marque)."<br><br>";

class maison 
  {
    public  $couleur;  //____
    public  $superficie;//   |___ les attributs ne sont pas typés.
    public  $chambre;  //____|
  }
$maMaison =new maison();
$maMaison->couleur ="rouge brique";
$maMaison->superficie ="200 m²";
$maMaison->chambre ="5 chambres";
echo ($maMaison->couleur)."<br>";
echo ($maMaison->superficie)."<br>";
echo ($maMaison->chambre)."<br>";


    ?> 

  
  <script src="https://replit.com/public/js/replit-badge-v2.js" theme="dark" position="bottom-right"></script>
  </body>
</html>
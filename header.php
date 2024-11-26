<?php ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>header</title>
</head>
<style>
    :root {
    --default-font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto,
      Ubuntu, "Helvetica Neue", Helvetica, Arial, "PingFang SC",
      "Hiragino Sans GB", "Microsoft Yahei UI", "Microsoft Yahei",
      "Source Han Sans CN", sans-serif;
    }

*{
    margin: 0;
    padding: 0;
}
.head1{
    position: fixed;
    width: 100%;
    height: 150px;
}
.h1 {
    width: 100%;
    height: 75px;
    background-color: #000000;
}

.h2{
    position: absolute;
    width: 100%;
    height: 60px;
}

.navbar {
    position: relative;
    display: flex;
    justify-content: flex-end;
    align-items: center;
    background-color: #1461d3;
    height: 60px;
    width: 100%;
}
.logo{
    width: 100%;
    height: 70px;
}

.logo .title{
    display: flex;
    align-items: center;
    justify-content: center;
    position: absolute;
    width: 370px;
    height: 50px;
    top: 10px;
    left: 494px;
    color: #ffffff;
    font-size: 40px;
    text-align: center;
}

.logo-right img{
    float: right;
    margin-right: 50px;
    margin-top: 10px;
}


/* Style pour les éléments de la liste dans la barre de navigation */
.navbar ul {
    list-style: none;
    display: flex;
    align-items: center;
}

/* Style pour chaque élément de la liste dans la barre de navigation */
.navbar ul li {
    display: inline-block;
    margin-right: 40px;
}

.navbar ul li .lien  {
    text-decoration: none;
    color: #251e1e; /* Couleur du texte */
    padding: 10px 15px; /* Espacement interne */
    border-radius: 25px; /* Coins arrondis */
    transition: transform 0.3s ease, background-color 0.3s ease; /* Animation fluide */
    display: inline-block; /* Pour permettre l'animation */
    font-size: 20px;
}

.navbar ul li .lien:hover {
    transform: translateY(-2px); /* Déplacement vers le haut */
    background-color: #0c4499; /* Couleur de fond au survol */
    color: white; /* Couleur du texte au survol */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Ombre au survol */
    
}
  
.navbar ul li .lien:hover {
    transform: scale(1.1); /* Zoom au survol */
}
  
  /* Style pour le lien actif et les liens survolés dans la barre de navigation */
.navbar ul li .lien.active,
.navbar ul li .lien:hover {
    background: rgb(50, 142, 192);
    border-radius: 20px;
}

nav ul li {
    position: relative;
}

nav ul li.has-submenu:hover .submenu  {
    display: block;
}

nav ul li .submenu {
    display: none;
    position: absolute;
    top: 100%;
    background-color: #5ecffc;
    padding: 15px;
    border-radius: 5px;
    width: 250%;
}
nav ul li .submenu li {
    display: contents;
}
nav ul li .submenu li .lien {
    display: block;
    padding: 5px;
    color: #333;
    text-decoration: none;
    font-size: 18px;
}

.btn1{
    display: flex;
    background: linear-gradient(90.63deg, #6be68a, #1dabc4);
    border: none;
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 4px 4px 0 rgba(0, 0, 0, 0.25);
    width: 110px;
    height: 35px;
    justify-content: center;
    align-items: center;
}

.navbar ul li .btn1.active,
.navbar ul li .btn1:hover {
    background: linear-gradient(90.63deg, #85f18a, #6be68a);
    transform: scale(1.1);
    transform: translateY(-2px); /* Déplacement vers le haut */
}

.btn1 .btnlien{
    padding: 10px 15px;
    text-decoration: none;
    color: #333; /* Couleur du texte */
    border-radius: 20px; /* Coins arrondis */
    transition: transform 0.3s ease, background-color 0.3s ease; /* Animation fluide */
    display: inline-block; /* Pour permettre l'animation */
    font-size: 18px;
}

.navbar .btn1 .btnlien:hover{
    transform: translateY(-2px); /* Déplacement vers le haut */
    color: white; /* Couleur du texte au survol */
}
  
.navbar .btn1 .btnlien:hover {
    transform: scale(1.1); /* Zoom au survol */
}

.navimg{
    display: fley;
    margin-right: 575px;
}

.img1{
    margin-top: 4px;
    width: 75px;
    height: 60px;
    filter: sepia(1) saturate(3) hue-rotate(180deg);
    opacity: 0.8;
}

</style>
<body>
    <header class="head1">
        <div class="h1">
          <div class="logo">
            <span class="title">Musculation&Fitness</span>
          </div>
        </div>
  
        <div class="h2">
          <nav class="navbar"> <!-- ceci est  la barre de navigation de notre site juste en haut   -->
            <nav class="navimg"><img class="img1" src="assets/muscu1.png" alt=""></nav>
            
            <ul> 
              <li><a class="lien" href="aceuille1.html">Acceuil</a></li> 
              <li><a class="lien" href="A propos.html">A propos</a></li> 
              <li><a class="lien" href="sercice.html">Service</a></li>
  
              <li class="has-submenu">
                <a class="lien" href="#">Plus</a>
                <ul class="submenu">
                    <li><a class="lien" href="Programme.html">Programme</a></li>
                    <li><a class="lien" href="food.html">Conseil alimentaire</a></li>
                </ul>
              </li>
              <li>
                <button class="btn1">
                  <a class="btnlien" href="Connection.html">Connection</a>
                </button>
              </li>
            </ul>
          </nav>
        </div>
      </header>
</body>
</html>

<?php ?>
<!DOCTYPE html>
<html lang="fr">
<head>

  <title> Tcheck</title>
<link href="style.css" rel="stylesheet">
<!-- On charge les dépendances pour angularjs-->
<script src="//ajax.googleapis.com/ajax/libs/angularjs/1.5.5/angular.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/angularjs/1.5.5/angular-animate.js"></script>
</head>


<!-- ng-app animate pour permettre l'animation avec angular-->
<body ng-app="ngAnimate">


<div class="container">

<!-- ici on mettras le logo-->
  <h2 style="title-marg"> Tcheck    </h2>


<!--- parti Inscription caché tant qu'on ne clique pas sur inscription-->
  <form  ng-show="showme" class="check-element animate-hide" >

    <div class="group">
      <input type="text" name="pseudo"required>
      <span class="highlight"></span>
      <span class="bar"></span>
      <label>Pseudo</label>
    </div>

    <div class="group">
      <input type="password" name="mdp" required>
      <span class="highlight"></span>
      <span class="bar"></span>
      <label>mot de passe</label>
    </div>
    <div class="group">
      <input type="password" name="mdp-confirm" required>
      <span class="highlight"></span>
      <span class="bar"></span>
      <label>Confirmez votre mot de passe </label>
    </div>

    <div class="group">
      <input type="text" name="mail" required>
      <span class="highlight"></span>
      <span class="bar"></span>
      <label>Email</label>
    </div>
  </form>


<!--- parti connexion caché tant qu'on ne clique pas sur connexion-->

  <form ng-show="showme2" class="check-element animate-hide" >

    <div class="group">
      <input type="text" required>
      <span class="highlight"></span>
      <span class="bar"></span>
      <label>Pseudo</label>
    </div>

    <div class="group">
      <input type="text" required>
      <span class="highlight"></span>
      <span class="bar"></span>
      <label>mot de passe</label>
    </div>
  </form>
<!-- Les deux boutons permettant de faire véritablement le liens vers la base de données-->
<button  ng-show="showme" class="btn-inscription" ng-model="focus" > s'inscrire</button> <br/>
<button  ng-show="showme2" class="btn-inscription" ng-model="focus" > se connecter</button> <br/>

<!-- Simple bouton permettant de faire apparaitre les champs du formulaire-->
 <button  ng-hide="showme" ng-hide="showme2" ng-click="showme=true"type="checkbox" class="btn-inscription" ng-model="focus" aria-label="Toggle ngShow">inscription</button> <br/>
 <button   ng-hide="showme2"  ng-click="showme2=true"type="checkbox" class="btn-connexion" ng-model="focus" aria-label="Toggle ngShow">connexion</button> <br/>

 </div> <!-- /div class container-->



</body>
</hhtml>

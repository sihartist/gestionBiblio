<?php
$fr = array (
    'MainTitle' => 'Que </br> L\'Aventure </br> Commence!',
    'join' => 'Je m\'inscris!',
    'apropos' => '<b>Qui Sommes Nous ?</b></br>Un paragraphe de présentation pour l\'association.Un paragraphe de présentation pour l\'association.
    Un paragraphe de présentation pour l\'association.Un paragraphe de présentation pour l\'association.Un paragraphe
    de présentation pour l\'association.Un paragraphe de présentation pour l\'association.Un paragraphe de présentation
    pour l\'association.Un paragraphe de présentation pour l\'association.
    Un paragraphe de présentation pour l\'association.Un paragraphe de présentation pour l\'association.
    Un paragraphe de présentation pour l\'association.Un paragraphe de présentation pour l\'association.
    Un paragraphe de présentation pour l\'association.Un paragraphe de présentation pour l\'association.Un paragraphe de
    présentation pour l\'association.',
    'accueil' => 'Accueil',
    'events' => 'Evènements',
    'signin' => 'Se Connecter',
    'signinup' => 'Inscription',
    'signup' => 'S\'inscrire',
    'prochainement' => 'Prochainement',
    'attente' => 'A Quoi Vous Attendre',
    'attente-text' => 'Découvrer la magie de Un paragraphe de présentation pour l\'association.
    Un paragraphe de présentation pour l\'association.
    Un paragraphe de présentation pour l\'association.',
    'search' => 'Recherche',
    'bienvenue' => 'Bienvenue',
    'sujet' => 'Sujet',
    'msg' => 'Votre Message',
    'nom' => 'Nom',
    'envoyer' => 'Envoyer',
    'contact-us' => 'Contactez-Nous',
    'contact-text' => 'Nous reviendrons vers vous dans la journée.',
    'bord' => 'Tableau de Bord',
    'compte' => 'Mon Compte',
    'dcnx' => 'Déconnexion',
    'chat' => 'Discuter avec les membres',
    'espace membre' => 'Espace Membre',
    'pass' => 'Mot de Passe',
    'ressaisir' => 'Ressaisir votre mot de passe',
    'partage' => 'Partage d\'expériences',
    'espace' => 'Espace de partage avec les membres de l\'Aventus.',
    'toforum' => 'Vers le Forum',
    'issues' => 'Problèmes Techniques',
    'issuestext' => 'Veuillez déposer votre demande ici pour tout problème technique sur le site.',
    'used' => 'Pseudo déjà utilisé.',
    'autoco' => 'Connexion automatique',
    'incorrectid' => 'Pseudo ou mot de passe incorrecte',
    'maintenance' => 'Page en cours de maintenance',
    'Catégories' => 'Catégories'
);
$en = array( 'MainTitle' => 'Let the </br> Adventure</br> Begin!',
'join' => 'Join Us!',
'apropos' => '<b>Who are Aventus ?</b></br>We are a Littering a dark and dreary road lay the past relics of browser-specific tags, incompatible DOMs,
     broken CSS support, and abandoned browsers.
     We must clear the mind of the past. Web enlightenment has been achieved thanks to the tireless efforts of folk like the W3C,
     WASP, and the major browser creators.
     The CSS Zen Garden invites you to relax and meditate on the important lessons of the masters. Begin to see with clarity. Learn
      to use the time-honored techniques in new and invigorating fashion. Become one with the web. Littering a dark and dreary road
      lay the past relics of browser-specific tags, incompatible DOMs, broken CSS support, and abandoned browsers.
     We must clear the mind of the past. Web enlightenment has been achieved thanks to the tireless efforts of folk like the W3C, WASP,
     and the major browser creators.',
     'accueil' => 'Home',
     'events' => 'Events',
     'signin' => 'Log In',
     'signinup' => 'Create Account',
     'signup' => 'Sign Up',
     'prochainement' => 'Coming Soon',
     'attente' => 'And much more ! ..',
     'attente-text' => 'We are a Littering a dark and dreary road lay the past relics of browser-specific tags,
     incompatible DOMs, broken CSS support, and abandoned browsers.',
     'search' => 'search',
     'bienvenue' => 'Welcome',
     'sujet' => 'Subject',
     'msg' => 'Your Message',
     'nom' => 'Name',
     'envoyer' => 'Send',
     'contact-us' => 'Contact Us',
     'contact-text' => 'You will hear from us shortly.',
     'bord' => 'Bord',
     'compte' => 'My Account',
     'dcnx' => 'Log Out',
     'chat' => 'Chat with members',
     'espace membre' => 'For Members Only',
     'pass' => 'Password',
     'ressaisir' => 'Retype your password',
     'maintenance' => 'Page under maintenance',
     'partage' => 'For Sharing',
     'espace' => 'Space for sharing experiences with other members of Aventus',
     'toforum'=>'To Forum',
     'issues'=>'Technical Issues',
     'issuestext' =>'Please leave your request in this forum regarding any technical issues with the website.',
     'used' => 'Pseudo already taken.',
     'autoco' => 'Auto Login',
     'incorrectid' => 'Incorrect Pseudo or Password',
     'Catégories' => 'Categories'
   );

function translate($cle){
  global $fr;
  global $en;
  if(!isset($_SESSION['langue'])){
    $_SESSION['langue']='fr';
    return $fr[$cle];
  }
  else if (isset($_GET['langue']) && $_SESSION['langue']!=$_GET['langue']){
    if($_GET['langue']=='en'){
      $_SESSION['langue']='en';
      return $en[$cle];
    }
    else {
      $_SESSION['langue']='fr';
      return $fr[$cle];
    }
  }
  else{
    if($_SESSION['langue']=='en')
      return $en[$cle];
    else
      return $fr[$cle];
  }

  }

 ?>

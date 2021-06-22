function send(){
  document.getElementById("contactform").submit();
}

function envoyer(){
  document.getElementById("labelButton").innerHTML = "";
  if(verifEmail()==false){
    document.getElementById("labelButton").style.color = "red";
    document.getElementById("labelButton").innerHTML = " Adresse email non valide";
  }
  if(verifName()==false){
    document.getElementById('name').placeholder="Ce champs est requis";
  }
  if(verifMessage()==false){
    document.getElementById('message').placeholder="Veuillez écrire un message";
  }
  if(verifEmail()==true && verifMessage()==true && verifName()==true){
    document.getElementById("send").style.backgroundColor = "green";
    document.getElementById("labelButton").style.color = "green";
    document.getElementById("labelButton").innerHTML = "Message envoyé avec succès";
    setTimeout(send,800);
  }
}

function verifEmail(){
var valide=false;
var email = document.getElementById("email").value;
var i=0;

while(i<email.length && email.charAt(i)!='@' && email.charAt(i)!=' ')
  i++;

if(email.charAt(i)=='@' && i<email.length){
  i++;
  while(i<email.length && email.charAt(i)!='.' && email.charAt(i)!=' ' && email.charAt(i)!='@')
    i++;

  if(email.charAt(i)=='.' && i<email.length){
    while(i<email.length)
      i++;
    if(i>=email.length)
      valide=true;
  }
  valide=true;
}



  return valide;
}

function verifMessage(){
  msg = document.getElementById('message');
  if(msg.value.length==0){

    return false;
  }
  return true;
}

function verifName(){

  msg = document.getElementById('name');
  if(msg.value.length==0){

    return false;
  }
  return true;
}

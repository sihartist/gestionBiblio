function envoyer(){
  document.getElementById('inscription').submit();
}

function verifEmail(){
var valide=false;
var email = document.getElementById("email").value;
var i=0;

while(i<email.length && email.charAt(i)!='@')
  i++;

if(email.charAt(i)=='@' && i<email.length){
  i++;
  while(i<email.length && email.charAt(i)!='.' && email.charAt(i)!='@')
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

function verif_pass(){
  pass1 = document.getElementById('pass1').value;
  pass2 = document.getElementById('pass2').value;
  if(pass1.length==0){
    document.getElementById('for-pass').innerHTML = 'Veuillez entrer un mot de passe';
    document.getElementById('for-pass').style.color = 'red';
    return false;
  }

  if(pass1.toString()==pass2.toString())
    return true;
  else{
    document.getElementById('for-pass').innerHTML = 'Mots de passe non identiques';
    document.getElementById('for-pass').style.color = 'red';
    return false;
  }

  }

function verifsignup(){
  document.getElementById('for-pass').innerHTML = '';
  if(verifEmail()==false){

    document.getElementById("for-pass").style.color = "red";
    document.getElementById("for-pass").innerHTML = " Adresse non valide";
  }
  else if(verif_pass()==false){

  }
  else
    envoyer();

}

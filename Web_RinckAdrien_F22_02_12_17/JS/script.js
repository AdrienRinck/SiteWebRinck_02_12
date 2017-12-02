var cpt=3;
function onChangeName(){
    var nom=document.formulaire.nom.value;
    var prenom=document.formulaire.prenom.value;
    alert('Bienvenue '+nom+' '+prenom);
}
function ValidMdp(){
    var MdpAttendu=document.formulaire.mdp.value;
    var Mdp=document.formulaire.Mdp.value;
    if (Mdp!=MdpAttendu){
        if (cpt==1){
            window.location='index.html';
        }
        cpt--;
        alert("Mot de passe eronné : "+cpt+" essais restants");
    }else{
        alert('Mot de passe correspondant')
        verifForm();
    }
}
function verifForm()
{
    var champ_obligatoire = [ 'nom', 'prenom', 'mail_inscription', 'mdp'];
    var champ_plein = true;
    var MdpAttendu=document.formulaire.mdp.value;
    var Mdp=document.formulaire.Mdp.value;
    for (var h=0; h<4; h++)
    {
        valeur = document.getElementById(champ_obligatoire[h]).value;
        if( (valeur.length == 0) || (valeur == "") || (valeur == "NULL")  || (Mdp!=MdpAttendu))
        {
            champ_plein = false;
        }
    }
 
    if (champ_plein)
    {
        document.getElementById('Validation').hidden = false;
        document.getElementById('Validation').disabled = false;
    }else{
        document.getElementById('Validation').hidden = true;
        document.getElementById('Validation').disabled = true;
    }
}

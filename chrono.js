
var centi = 0;
var sec = 0;
var min = 0;
var h = 0;
var loc;
var compt = 0;

function chrono()
{
    centi++;
    centi*10;//=======pour passer en dixièmes de sec
    //=== on remet à zéro quand on passe à 1seconde, 1min, 1heure, 1jour
    if (centi > 9) {
        centi = 0;
        sec++;
    }
                        
    if (sec > 59) {
        sec = 0;
        min++;
    }
                        
    if (min > 59) {
        min = 0;
        h++;
    }
                        
    //======
    
    //================ On ajoute un zero pour avoir 1h01:05sec
    
    if (sec < 10) {
        var sec_ = "0" + sec;
    }
    else {
        var sec_ = sec;
    }
        
    if (min < 10) {
        var min_ = "0" + min;
    }
    else {
        var min_ = min;
    }
    //===============
                        
    var loc = h + ":" + min_ + ":" + sec_ + ":" + centi;
    //================= Pour que cela s'affiche dans l'élément "time"
    document.getElementById("time").innerHTML = loc;
    //=================lancement du chrono
    reglage = window.setTimeout("chrono();",100);
} 


function debut()  //== Activation et désactivation des boutons
{
        document.parametre.lance.disabled = "disabled";
        document.parametre.pause.disabled = "";
        document.parametre.zero.disabled = "";
        document.parametre.interme.disabled = "";
}
function arret() 
{	
        window.clearTimeout(reglage); // arrêter le temps
        document.parametre.lance.disabled = "";
        document.parametre.pause.disabled = "disabled";
        document.parametre.zero.disabled = "";
        document.parametre.interme.disabled = "";
}
//=============
function raz() //====pour remettre à zéro
{ 
        document.parametre.zero.disabled = "disabled";
        document.parametre.interme.disabled = "disabled";
        centi =0;
        sec = 0;
        min = 0;
        h = 0; 
        loc = h + ":" + min+ "0:" + sec + "0:" + centi;	
        document.getElementById("time").innerHTML = loc;
        document.getElementById('presenter').style.visibility='hidden';
}

function inter() //====Pour afficher les temps intermédiaires
{
    centi;
    sec ;
    min ;
    h ;
    loc;
    //======on reprend la condition pour que ily ait 1h01 et 05 sec
    if (sec < 10) {
        var sec_ = "0" + sec;
    }
    else {
        var sec_ = sec;
    }
        
    if (min < 10) {
        var min_ = "0" + min;
    }
    else {
        var min_ = min;
    }
    
    ///=====================
        loc = h + ":" + min_ + ":" + sec_ + ":" + centi;
        //=====================
    document.getElementById('presenter').style.visibility='visible';
    // pour afficher les temps intermédiaire si on clique dessus
    if(compt == 0)
    document.getElementById("interm1").innerHTML = loc ;
    else if(compt == 1)
    document.getElementById("interm2").innerHTML = loc ;
    else if(compt == 2)
    document.getElementById("interm3").innerHTML = loc ;
    else if(compt == 3)
    document.getElementById("interm4").innerHTML = loc ;
    else if(compt == 4)
    document.getElementById("interm5").innerHTML = loc ;

    compt++;
    //=====================
}

function effacer()
{
    document.getElementById("interm1").innerHTML = "" ;
    document.getElementById("interm2").innerHTML = "" ;
    document.getElementById("interm3").innerHTML = "" ;
    document.getElementById("interm4").innerHTML = "" ;
    document.getElementById("interm5").innerHTML = "" ;
    compt= 0
}
    

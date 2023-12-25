function verifModifConfirm()
{
    let titre = document.getElementById("titre").value;
    let prix = document.getElementById("prix").value;
    let dev = document.getElementById("dev").value;
    let editeur = document.getElementById("editeur").value;
    let datsortie = document.getElementById("datesortie").value;
    let tags = document.getElementById("tags").value;

    let confirm = document.getElementById("submit");
    
    if(titre == "vérifier" || titre == "" || prix == "vérifier" || prix == "" || dev == "vérifier" || dev == "" || editeur == "vérifier" || editeur == "" || datsortie == "vérifier" || datsortie == "" || tags == "vérifier" || tags == "")
        confirm.disabled = true;
    else
        confirm.disabled = false;
    
}

function test()
{
    alert("ok");
}
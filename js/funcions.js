function confirmaRegistre(){
    alert("Registrant Estudiant");
    console.log("Registrant Estudiant");
    var formulari = document.getElementById("formDiv");
    formulari.innerHTML = "<p class='important'>T'has registrat amb èxit!</p>";
    return false; // to block the form submission
}

async function carregaMencions(){
    var tagGraus = document.getElementById("graus");
    var resposta = await fetch("mencions.php?grau="+tagGraus.value);
    var respostaTxt = await resposta.text();
    document.getElementById("mencions").innerHTML = respostaTxt;
}
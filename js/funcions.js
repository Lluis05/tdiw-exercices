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

//the same as the funcion above
$(document).ready(function(){  
    $("#graus").change(function(){
        let grau = $("#graus").val()
        
        //1st method but only if u want to change slope (codi html)
        //$("#mencions").load("./mencions.php?grau"+grau)

        //2nd with GET, only if query request
        /*$.get(("./mencions.php?grau"+grau), function (data, status) {
            if(status){
                $("mencions").html(data);
            }
        });*/ 

        //3rd with POST, only if http(s) post request
        /*$.post(("mencions.php"),
            {
                grau:grau
            },
            function (data, status){
                if(status){
                    $("mencions").html(data);
                }
            });*/
        
        //4th $.ajax
        $.ajax({
            url: "./mencions.php?grau"+grau, 
            success: function (data){
                $("mencions").html(data);
            }
        });    
    })
})


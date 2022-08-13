$(document).ready(function(){

    const result = function(){
        $.get("php/calc.php",
            {
                "zahl1": $('#zahl1').val(),
                "zahl2": $('#zahl1').val(),
                "rechenart": $('#rechenart').val()
            },
            function(data, success){
                if(data != "ungültig"){
                    $('#result').parent().append("<p>"+data+"</p>");
                }
                else{
                    alert("Ungültig");
                }
            }
        )
    }
    
    $('#result').click(result);
})
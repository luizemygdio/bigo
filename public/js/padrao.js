$(document).ready(function(){

    function numeros(){
        
        //var o_bingo = new Object();
        var array_numeros = [
            1,2,3,4,5,6,7,8,9,10,
            11,12,13,14,15,16,17,18,19,20,
            21,22,23,24,25,26,27,28,29,30,
            31,32,33,34,35,36,37,38,39,40,
            41,42,43,44,45,46,47,48,49,50,
            51,52,53,54,55,56,57,58,59,60,
            61,62,63,64,65,66,67,68,69,70,
            71,72,73,74,75,76,77,78,79,80,
            81,82,83,84,85,86,87,88,89,90
        ];
         
        return array_numeros;
        
    }
    
    
   
    function sleep(ms) {
        return new Promise(resolve => setTimeout(resolve, ms));
    }

    numeros_bingo = numeros();
    

    async function demo(tempo) {
      
        // Sleep in loop
        for (let i = 0; i < 90; i++) {

            sort = numeros_bingo[Math.floor(Math.random() * numeros_bingo.length)];
            await sleep(tempo);

            $("#numero_sorteado").html("");
            $("#numero_sorteado").append(sort);
            $("#numero_sorteado").append("<audio autoplay='autoplay' id='audio'> <source src='public/audio/"+sort+".mp3' type='audio/mp3' /> </audio>");

            $("#"+sort).css("background", "#ccc");
           
            // Removo o valor do vetor
            numeros_bingo.splice(numeros_bingo.indexOf(sort), 1);
            
            if(i == 89){

              $("#play").prop('disabled', true);  
              
              $("#pause").prop('disabled', true);

              $("#numero_sorteado").html("");
              
              var fim = "FIM";
              $("#numero_sorteado").append(fim); 
              
              return false;

            }
            
            tempo = 8000;
        }
    }

    $("#pause").on('click', function(){
        
        alert("Jogo Pausado, clique em ok para continuar");
        
    });
    
    $("#play").on('click', function(){
        
        tempo = 1000;
        
        $("#play").prop('disabled', true);
        
        demo(tempo);
       
    });
    
    $("#reiniciar").on('click', function(){
        
        document.location.reload(true);
        
    });
    
    

    
    
});



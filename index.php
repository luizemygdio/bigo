<!DOCTYPE html>
<html lang="pt-br">
<?php 
    session_start();
    require_once 'config/sistema.php';
    //require_once 'app/controller/jogoController.php';
    include_once 'componentes/layout/header.php'; 
    
     
   
?>
    
<body>

    <div style="width: 98%; margin: auto">
        
        <div class="row">

            <div class="col-lg-4 col-md-4 col-sm-12" style="height:589px; background: #ced4da">

                <div class="row">
                    
                    <div class="col-12 text-center pt-5" style="font-size: 15em; height: 500px">
                        
                        <strong id='numero_sorteado'>
                            
                            <p style="font-size: 20pt;">CLIQUE NO BOTÃO PLAY PARA COMEÇAR</p>
                   
                        </strong>
                       
                    </div>
                    
                </div>
                
                <div class="row">
                    
                    <div class="col-4 text-center">
                        
                        <button type="button" class="btn btn-lg btn-primary col-12" id="pause">Pause</button>
                        
                    </div>
                    
                    <div class="col-4 text-center">
                        
                        <button type="button" class="btn btn-lg btn-success col-12" id="play">Play</button>
                        
                    </div>
                    
                    <div class="col-4 text-center">
                        
                        <button class="btn btn-lg btn-warning col-12" id="reiniciar">Reiniciar</button>
                        
                    </div>
                    
                </div>    

            </div>

            <div class="col-lg-8 col-md-8 col-sm-12">
               
                <div class="row">
                    <?php for($i = 1; $i <= 10; $i++): ?>
                            
                    <div id='<?php echo $i;?>' class="col-1 ms-1 mt-2 me-1 mb-2 text-center pt-2" style="background: #cfe2ff; height: 50px; font-size: 1.3em"><?php echo $i; ?></div>
                    
                    <?php endfor; ?> 
                    
                </div>
                
                <div class="row">
                    <?php for($i = 11; $i <= 20; $i++): ?>
                            
                    <div id='<?php echo $i;?>' class="col-1 ms-1 mt-2 me-1 mb-2 text-center pt-2" style="background: #cfe2ff; height: 50px; font-size: 1.3em"><?php echo $i; ?></div>
                    
                    <?php endfor; ?> 
                    
                </div>
                
                <div class="row">
                    <?php for($i = 21; $i <= 30; $i++): ?>
                            
                    <div id='<?php echo $i;?>' class="col-1 ms-1 mt-2 me-1 mb-2 text-center pt-2" style="background: #cfe2ff; height: 50px; font-size: 1.3em"><?php echo $i; ?></div>
                    
                    <?php endfor; ?> 
                    
                </div>
                
                <div class="row">
                    <?php for($i = 31; $i <= 40; $i++): ?>
                            
                    <div id='<?php echo $i;?>' class="col-1 ms-1 mt-2 me-1 mb-2 text-center pt-2" style="background: #cfe2ff; height: 50px; font-size: 1.3em"><?php echo $i; ?></div>
                    
                    <?php endfor; ?> 
                    
                </div>
                
                <div class="row">
                    <?php for($i = 41; $i <= 50; $i++): ?>
                            
                    <div id='<?php echo $i;?>' class="col-1 ms-1 mt-2 me-1 mb-2 text-center pt-2" style="background: #cfe2ff; height: 50px; font-size: 1.3em"><?php echo $i; ?></div>
                    
                    <?php endfor; ?> 
                    
                </div>
                
                <div class="row">
                    <?php for($i = 51; $i <= 60; $i++): ?>
                            
                    <div id='<?php echo $i;?>' class="col-1 ms-1 mt-2 me-1 mb-2 text-center pt-2" style="background: #cfe2ff; height: 50px; font-size: 1.3em"><?php echo $i; ?></div>
                    
                    <?php endfor; ?> 
                    
                </div>
                
                <div class="row">
                    <?php for($i = 61; $i <= 70; $i++): ?>
                            
                    <div id='<?php echo $i;?>' class="col-1 ms-1 mt-2 me-1 mb-2 text-center pt-2" style="background: #cfe2ff; height: 50px; font-size: 1.3em"><?php echo $i; ?></div>
                    
                    <?php endfor; ?> 
                    
                </div>
                
                <div class="row">
                    <?php for($i = 71; $i <= 80; $i++): ?>
                            
                    <div id='<?php echo $i;?>' class="col-1 ms-1 mt-2 me-1 mb-2 text-center pt-2" style="background: #cfe2ff; height: 50px; font-size: 1.3em"><?php echo $i; ?></div>
                    
                    <?php endfor; ?> 
                    
                </div>
                
                <div class="row">
                    <?php for($i = 81; $i <= 90; $i++): ?>
                            
                    <div id='<?php echo $i;?>' class="col-1 ms-1 mt-2 me-1 mb-2 text-center pt-2" style="background: #cfe2ff; height: 50px; font-size: 1.3em"><?php echo $i; ?></div>
                    
                    <?php endfor; ?> 
                    
                </div>
                  
                
            </div>

        </div>
        
    </div>
    
    <!-- CARREGANDO BOOTSTRAP JS -->
    <script type="text/javascript" src="<?php echo 'public/plugins/bootstrap-5.0.0-beta3-dist/js/bootstrap.min.js' ?>"></script>

    <!-- CARREGANDO JQUERY JS -->
    <script type="text/javascript" src="<?php echo 'public/plugins/jquery/dist/jquery.min.js' ?>"></script>
    
    <!-- CARREGANDO BIBLIOTECA JS -->
    <script type="text/javascript" src="<?php echo 'public/plugins/biblioteca/biblioteca.js' ?>"></script>
    
    <!-- CARREGANDO JS PADRÃO -->
    <script type="text/javascript" src=" <?php echo 'public/js/padrao.js'; ?>"> </script> 
  
    <!-- CARREGANDO JS E PLUGINS DA PAGINA CORRENTE {OS JS SÃO IMPORTANDOS DENTREO DOS COMPONETES} -->
    <?php //echo $js_e_plugins_personalizados_pg; ?>
    
</body>

</html>




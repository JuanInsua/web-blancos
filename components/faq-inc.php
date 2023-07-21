<main>
    <section>
        <h2>Preguntas Frecuentes</h2>
        <?php 
        $pregunta1=array('cliente'=>'cliente','pregunta'=>'PREGUNTA','respuesta'=>'Some quick example text to build on the card title and make up the bulk of the cards content.');
        $pregunta2=array('cliente'=>'cliente','pregunta'=>'PREGUNTA','respuesta'=>'Some quick example text to build on the card title and make up the bulk of the cards content.');
        $pregunta3=array('cliente'=>'cliente','pregunta'=>'PREGUNTA','respuesta'=>'Some quick example text to build on the card title and make up the bulk of the cards content.');
        $pregunta4=array('cliente'=>'cliente','pregunta'=>'PREGUNTA','respuesta'=>'Some quick example text to build on the card title and make up the bulk of the cards content.');
        $pregunta5=array('cliente'=>'cliente','pregunta'=>'PREGUNTA','respuesta'=>'Some quick example text to build on the card title and make up the bulk of the cards content.');
        $pregunta6=array('cliente'=>'cliente','pregunta'=>'PREGUNTA','respuesta'=>'Some quick example text to build on the card title and make up the bulk of the cards content.');
        $pregunta7=array('cliente'=>'cliente','pregunta'=>'PREGUNTA','respuesta'=>'Some quick example text to build on the card title and make up the bulk of the cards content.');
        $pregunta8=array('cliente'=>'cliente','pregunta'=>'PREGUNTA','respuesta'=>'Some quick example text to build on the card title and make up the bulk of the cards content.');
        $pregunta9=array('cliente'=>'cliente','pregunta'=>'PREGUNTA','respuesta'=>'Some quick example text to build on the card title and make up the bulk of the cards content.');
        $pregunta10=array('cliente'=>'cliente','pregunta'=>'PREGUNTA','respuesta'=>'Some quick example text to build on the card title and make up the bulk of the cards content.');
        $pregunta11=array('cliente'=>'cliente','pregunta'=>'PREGUNTA','respuesta'=>'Some quick example text to build on the card title and make up the bulk of the cards content.');
        $pregunta12=array('cliente'=>'cliente','pregunta'=>'PREGUNTA','respuesta'=>'Some quick example text to build on the card title and make up the bulk of the cards content.');
        $preguntas=array($pregunta1,$pregunta2,$pregunta3,$pregunta4,$pregunta5,$pregunta6,$pregunta7,$pregunta8,$pregunta9,$pregunta10,$pregunta11,$pregunta12);
        ?>
        <div class="container">
            <div class="row row-cols-3 g-2">
                <?php for($i=0;$i<count($preguntas);$i++){?>
                    
                <div class="col">
                    <div class="card border-info mb-3" style="max-width: 18rem;">
                        <div class="card-header"><?php echo $preguntas[$i]['cliente'] ?></div>
                        <div class="card-body">
                        <p class="card-title"><?php echo $preguntas[$i]['pregunta'] ?></p>
                        <p class="card-text"><?php echo $preguntas[$i]['respuesta'] ?></p>
                        </div>
                    </div>
                </div>
                <?php
                } ?>
            </div>
        </div>
        
    </section>
</main>
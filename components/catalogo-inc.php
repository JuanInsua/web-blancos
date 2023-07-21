<main>
  <?php 
  $descripcion1=array('descr'=>'Some quick example text to build on the card title and make up the bulk of the cards .','nombre'=>'Card title','precio'=>'$------');
  $descripcion2=array('descr'=>'Some quick example text to build on the card title and make up the bulk of the cards .','nombre'=>'Card title','precio'=>'$------');
  $descripcion3=array('descr'=>'Some quick example text to build on the card title and make up the bulk of the cards .','nombre'=>'Card title','precio'=>'$------');
  $descripcion4=array('descr'=>'Some quick example text to build on the card title and make up the bulk of the cards .','nombre'=>'Card title','precio'=>'$------');
  $descripcion5=array('descr'=>'Some quick example text to build on the card title and make up the bulk of the cards .','nombre'=>'Card title','precio'=>'$------');
  $descripcion6=array('descr'=>'Some quick example text to build on the card title and make up the bulk of the cards .','nombre'=>'Card title','precio'=>'$------');
  $descripcion7=array('descr'=>'Some quick example text to build on the card title and make up the bulk of the cards .','nombre'=>'Card title','precio'=>'$------');
  $descripcion8=array('descr'=>'Some quick example text to build on the card title and make up the bulk of the cards .','nombre'=>'Card title','precio'=>'$------');
  $descripcion9=array('descr'=>'Some quick example text to build on the card title and make up the bulk of the cards .','nombre'=>'Card title','precio'=>'$------');
  $descripcion=array(
    $descripcion1,$descripcion2,$descripcion3,$descripcion4,$descripcion5,$descripcion6,$descripcion7,$descripcion8,$descripcion9); 
  ?>
    <section id="catalogo" class="product-section container ">
            <h2> Nuestros Productos </h2>
            <div class="row row-cols-4 g-4">
              <?php for($i=0;$i<count($descripcion);$i++){ ?>
                <div class="col col-12 col-md-6 col-lg-4 ">
                    <div class="card product-card">
                        <img src="img/prod1.png" class="card-img-top img-thumbnail " alt="...">
                        <div class="card-body">
                          <h5 class="card-title"></h5>
                          <p class="card-text"><?php echo $descripcion[$i]; ?></p>
                          <p class="card-text">Precio: $-----</p>
                        </div>
                    </div>
                </div>
                <?php
              } ?>
            </div>
        </section>
    </main>
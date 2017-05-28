<?php
/**
 * Created by PhpStorm.
 * User: jose
 * Date: 27/05/17
 * Time: 17:58
 */?>

<!-- ===========================
TESTIMONIAL SECTION START
=========================== -->
<div id="testimonials" class="container">
    <div class="sectionhead wow bounceInUp" data-wow-duration="2s">
        <span class="bigicon icon-bubbles"></span>
        <h3>Comentarios</h3>
        <h4>Nuestra gente, nuestra tierra, nuestras historias!</h4>
        <hr class="separetor">
    </div><!-- TESTIMONIAL SECTIONHEAD END -->

    <!-- TESTIMONIAL ITEMS START -->
    <div class="row">
        <!-- 1ST TESTIMONIAL ITEM -->

        <?php
        $comentarios = $consultas->getComentarios();
        foreach ($comentarios as $c){
            $img= rand (1,4);
            ?>
            <div class="col-md-6 wow bounceIn" data-wow-duration="3s">
                <div class="clientsphoto">
                    <img src="img/persona_<?php echo $img; ?>.jpg" alt="Eric">
                </div>

                <div class="quote">
                    <blockquote>
                        <p><?php echo $c->comentario; ?></p>
                    </blockquote>
                    <h5><?php echo $c->nombre_categoria." - ".$c->nombre_lugar; ?></h5>
                    <p><?php echo $c->nombre_persona; ?></p>
                </div>
            </div>
            <?php
        }
        ?>
        <!-- 4TH TESTIMONIAL ITEM END -->
    </div>
</div><!-- TESTIMONIAL SECTION END -->

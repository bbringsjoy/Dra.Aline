<main>
<div data-aos="fade-up" data-aos-anchor-placement="top-bottom">
      <section class="sobre" id="sobre">
        <h3 class="text-center">Sobre</h3>
        <div class="sobre-texto">
          <p class="text-center">
            A Dra. Aline Gonçalves é graduada em odontologia pela universidade Unicesumar, e especializada em odontopediatria na AMO - Associação Maringaense de Odontologia. Os atendimentos oferecidos no consultório são direcionados tanto para crianças quanto para adultos, sempre com foco em prevenção, cuidado e um ambiente acolhedor para todas as idades, respeitando as necessidades individuais de cada paciente.

          </p>
          <br>
          <p class="text-center">
            Na odontopediatria, os tratamentos têm como foco principal a prevenção da doença cárie, que se inicia desde bebês, passa pela primeira infância, adolescência e chega à fase adulta. Os tratamentos em destaque envolvem orientações de higiene, profilaxia (limpeza), aplicação de flúor, selantes e restaurações. O consultório oferece um ambiente lúdico e acolhedor, criado especialmente para encantar e tranquilizar as crianças.

          </p>
          <br>
          <p class="text-center">
            Já os tratamentos voltados para adultos se destacam por promover saúde bucal por meio de acompanhamento periódico e atendimento humanizado. Isso é especialmente importante para aqueles que sofrem de traumas relacionados ao dentista. Entre os procedimentos mais comuns estão a profilaxia e raspagem supragengival, restaurações estéticas e funcionais, além do clareamento dentário, que proporciona um sorriso mais branco e confiante.

          </p>
        </div>
        <div class="sobre-consulta">
          <p class="text-center">
            Agende uma consulta, e venha conferir o trabalho dela!
          </p>
        </div>
        </div>
      </div>
        </section>
        <section>
            <div class="row">
                <?php
                //print_r($clareamento);
                foreach($clareamentos as $id => $valor) {
                    echo "<div class='col-12 col-md-3'>
                    <div class='card'>
                        <img src='{$valor['foto']}' class='w-100'>
                    </div>
                    </div>";
                }
                ?>
</div>
</section>

</main>
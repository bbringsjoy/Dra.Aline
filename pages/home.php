
<main>
      <div data-aos="fade-up" data-aos-anchor-placement="top-bottom">
        <section class="container" id="home">
          <div class="row row-cols-2">
            <div class="col-12 col-md-7">
              <img src="imagens/Aline-1.jpg" alt="Foto Dr.Aline" class="img-fluid">
            </div>
            <div class="col-12 col-md-5">
              <h1 class="user-select-none"> Você precisa de dentista? </h1>
              <br>
              <p>
                A Dra. Aline Gonçalves possui um atendimento humanizado na Odontologia tanto 
                em crianças quanto adultos.
              </p>
              <p>
                Venha conhecer o trabalho dela!
              </p>
              <div class="contatos">
              <p>
                <a href="https://www.instagram.com/alinegd28?igsh=MTduOHV2cG1qNXNocg==">
                  <i class="fa-brands fa-instagram"></i>
                  </i>
                </a>
                <a href="https://www.facebook.com/share/16SygXo4Q2/">
                  <i class="fa-brands fa-facebook"></i>
                  </a>
                  <a href= "https://wa.link/cn062u">
                    <i class="fa-brands fa-whatsapp"></i>
                  </a>
              </p>
              </div>
              </div>
            </div>
            </div>
        </section>
        <section>
        <div data-aos="fade-up" data-aos-anchor-placement="top-bottom">
            <div class="row">
                <?php
                //print_r($clareamento);
                foreach($clareamentos as $id => $valor) {
                    echo "<div class='col-12 col-md-3'>
                    <div class='card' data-fslightbox='galeria'>
                        <img src='{$valor['foto']}' class='w-100'>
                    </div>
                    </div>";
                }
                ?>
</div>
              </div>
</section>
        
     
        <div data-aos="fade-up" data-aos-anchor-placement="top-bottom">
        <section class="endereco" id="endereco">
          <h3 class="text-center user-select-none"> Localização </h3>
          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7287.34014333792!2d-52.376371!3d-24.042697000000004!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ed75a5b2621059%3A0xeae8b2990f9f8c18!2sConsult%C3%B3rio%20Odontol%C3%B3gico%20Dra.%20Aline%20Gon%C3%A7alves!5e0!3m2!1spt-BR!2sus!4v1746473881334!5m2!1spt-BR!2sus" width="800" height="300" style="border:0;" 
          allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="maps"></iframe>
          <button type="button" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="bottom" data-bs-content="Edifício Centro Comercial Antares - Sala 401 - 4 Andar">
            <i class="fa-solid fa-caret-down"></i> Mais informações
          </button>          
        </section>
          </div>
    </main>
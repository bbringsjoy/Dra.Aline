
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
              <div>
              <p class="contatos">
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
        <br>
        <br>
        <section>
        <div data-aos="fade-up" data-aos-anchor-placement="top-bottom">
            <div class="row row-cols-2">
                 <br>
              <div class="col-12">
              <div class="importante">
              <h3 class="text-start user-select-none"> 
              Por que preciso clarear meus dentes?  </h3>
              <br>
<p class="text-md-start col-12">
Com o passar dos anos, fisiologicamente pode ocorrer um amarelamento dos dentes devido ao desgaste da dentina (camada interna do dente) e outros fatores podem contribuir com essa condição, entre eles: 

</p>
<p class="text-md-start">
                <ul>
                    <p><i class="fa-solid fa-mug-saucer"></i>  -  Consumo excessivo de bebidas escuras, dentre elas o café;</p>
                    <p><i class="fa-solid fa-smoking"></i>  -  Tabagismo;  </p>
                    <p><i class="fa-solid fa-tooth"></i>  -  Higiene bucal inadequada; </p>
                </ul>
                </p>
<p class="text-md-start">
O clareamento tem por objetivo restaurar a cor natural dos dentes, utilizando técnicas e agentes clareadores específicos.
Esse procedimento pode ser realizado tanto no consultório odontológico quanto em casa, o importante é que sempre seja feito com supervisão do dentista. 

</p>
</div>
<br>
<h3 class="text-start user-select-none">  E quais são os tipos de clareamento?  </h3>
<br>
<p class="text-md-start">
CLAREAMENTO CASEIRO SUPERVISIONADO - o dentista entrega uma moldeira específica e individualizada para boca e um determinado gel clareador para o paciente. Além disso, repassa orientações para ser realizado de forma correta em casa. 
</p>
<p class="text-md-start">
CLAREAMENTO DE CONSULTÓRIO - esse método como o próprio nome diz é realizado no consultório odontológico, e o dentista aplica um gel clareador com concentração maior do que o produto usado no procedimento caseiro.  
</p>
<p class="text-md-start">
ASSOCIAÇÃO DOS DOIS MÉTODOS - que consiste em realizar os dois métodos (caseiro e consultório) em conjunto para garantir um melhor resultado. 
</p>
<p class="text-md-start">
É importante relatar que seja qual for o tipo de clareamento escolhido, os efeitos não duram para sempre. E a indicação correta de qual método indicado é o dentista quem vai determinar. 
</p>
<br>
<p class="text-md-start">
Ficou com alguma dúvida? Tem vontade de clarear os seus dentes? Envie uma mensagem para a Dra. Aline!
</p>
</div>
</div>
<div class='clareamento container'>
  <div class="row">
  <!-- a div container tem q ser fora do looping para as imagens ficarem lado a lado -->
<?php
foreach($clareamentos as $id => $valor) {
    echo "<div class='col-6 col-md-3'>
              <a href='{$valor['foto']}' data-fslightbox='galeria'>
                <img src='{$valor['foto']}' class='card-img-top w-100' alt='Clareamento {$id}'>
              </a>
            </div>";
}
?>
</div>
</div>
<p class="text-center">
Clique para ampliar as imagens.
</p>
<br>
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
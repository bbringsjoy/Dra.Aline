<main>
<div data-aos="fade-up" data-aos-anchor-placement="top-bottom">
  <section class="formulario">
    <h1 class="text-center user-select-none"> Feedback</h1>
    <br>
    <div class="col-md-12">
        <p>
        Esse site foi desenvolvido pela aluna Beatriz Gomes Santana, do curso de Tecnologia, Análise e Desenvolvimento de Sistemas (TADS).
        Seu feedback é muito importante para aprimorar o trabalho dela e melhorar a experiência de todos os usuários em futuros projetos.
</p>
</div>
<br>
<form class="row g-3 needs-validation" novalidate>
  <div class="col-md-6">
    <label for="validationCustom01" class="form-label">Nome:</label>
    <input type="text" class="form-control" id="validationCustom01" value="" required>
    <div class="invalid-feedback">
        Por favor, digite o seu nome.
      </div>
  </div>
  <div class="col-md-4">
    <label for="validationCustom04" class="form-label">Gostou do site?</label>
    <select class="form-select" id="validationCustom04" required>
      <option selected disabled value="">Clique para selecionar as opções</option>
      <option value="Paciente">Sim</option>
      <option value="Responsável">Não</option>
    </select>
    <div class="invalid-feedback">
      Selecione uma das opções.
    </div>
  </div>
  <div class="col-md-12">
    <label for="validationCustom05" class="form-label">Mensagem:</label>
    <!-- <input type="text" class="form-control" id="" required> INPUT CASO O JAVA NAO FUNCIONE -->
    <textarea class="form-control" id="validationCustom05" required rows="3"></textarea>
    <div class="invalid-feedback">
      Digite a sua mensagem.
    </div>
  </div>
  <div class="col-md-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
      <label class="form-check-label" for="invalidCheck">
        Confirmar
      </label>
      <div class="invalid-feedback">
        Confirme antes de enviar.
      </div>
    </div>
  </div>
  <div class="col-12">
    <button class="btn btn-outline-primary" type="submit">Enviar <i class="fa-regular fa-paper-plane"></i></button>
  </div>
</form>

<script>
  // bootstrap validation
(() => {
  'use strict'

  // 
  const forms = document.querySelectorAll('.needs-validation')

  //
  Array.from(forms).forEach(form => {
    form.addEventListener('submit', event => {
      if (!form.checkValidity()) {
        event.preventDefault()
        event.stopPropagation()
      }

      form.classList.add('was-validated')
    }, false)
  })
})()
</script>

</section>
</div>
</main>
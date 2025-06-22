<?php
$mensagem_enviada = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  // Captura e filtra os dados do formulário
  $nome = htmlspecialchars(trim($_POST['nome']));
  $sobrenome = htmlspecialchars(trim($_POST['sobrenome']));
  $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
  $telefone = htmlspecialchars(trim($_POST['telefone']));
  $tipo_pessoa = htmlspecialchars(trim($_POST['tipo_pessoa']));
  $mensagem = htmlspecialchars(trim($_POST['mensagem']));

  // Verificação de campos obrigatórios e e-mail válido
  if (
    empty($nome) || empty($sobrenome) || empty($telefone) ||
    empty($tipo_pessoa) || empty($mensagem) ||
    !filter_var($email, FILTER_VALIDATE_EMAIL)
  ) {
    $mensagem_enviada = "Por favor, preencha todos os campos corretamente.";
  } else {
    $destino = "aline12334@hotmail.com";
    $assunto = "Nova mensagem do site";

    $corpo = "Você recebeu uma nova mensagem do site:\n\n";
    $corpo .= "Nome: $nome $sobrenome\n";
    $corpo .= "E-mail: $email\n";
    $corpo .= "Telefone: $telefone\n";
    $corpo .= "Quem está enviando: $tipo_pessoa\n";
    $corpo .= "Mensagem:\n$mensagem\n";

    $headers = "From: $nome <$email>\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    // Envio do e-mail
    if (mail($destino, $assunto, $corpo, $headers)) {
      $mensagem_enviada = "Mensagem enviada com sucesso!";
    } else {
      $mensagem_enviada = "Erro ao enviar a mensagem. Tente novamente mais tarde.";
    }
  }
}
?>


<main>
  <div data-aos="fade-up" data-aos-anchor-placement="top-bottom">
    <section class="formulario">
      <h1 class="text-center user-select-none">Agendar horário</h1>

      <?php if (!empty($mensagem_enviada)) : ?>
        <div class="alert alert-info mt-3 text-center"><?= $mensagem_enviada ?></div>
      <?php endif; ?>

      <form class="row g-3 needs-validation" novalidate method="post" action="">
        <div class="col-md-6">
          <label for="validationCustom01" class="form-label">Nome:</label>
          <input type="text" class="form-control" id="validationCustom01" name="nome" required>
          <div class="invalid-feedback">Por favor, digite o seu nome.</div>
        </div>

        <div class="col-md-6">
          <label for="validationCustom02" class="form-label">Sobrenome:</label>
          <input type="text" class="form-control" id="validationCustom02" name="sobrenome" required>
          <div class="invalid-feedback">Por favor, digite o seu sobrenome.</div>
        </div>

        <div class="col-md-4">
          <label for="validationCustom03" class="form-label">Email:</label>
          <input type="email" class="form-control" id="validationCustom03" name="email" placeholder="nome@exemplo.com" required>
          <div class="invalid-feedback">Digite um email válido.</div>
        </div>

        <div class="col-md-4">
          <label for="telefone" class="form-label">Telefone (WhatsApp):</label>
          <input type="text" class="form-control" id="telefone" name="telefone" placeholder="(44) 91234-5678" required>
          <div class="invalid-feedback">Digite um número de telefone válido.</div>
        </div>

        <div class="col-md-4">
          <label for="validationCustom04" class="form-label">Você é o paciente ou o responsável?</label>
          <select class="form-select" id="validationCustom04" name="tipo_pessoa" required>
            <option selected disabled value="">Clique para selecionar</option>
            <option value="Paciente">Paciente</option>
            <option value="Responsável">Responsável pelo paciente</option>
          </select>
          <div class="invalid-feedback">Selecione uma das opções.</div>
        </div>

        <div class="col-md-12">
          <label for="validationCustom05" class="form-label">Mensagem:</label>
          <textarea class="form-control" id="validationCustom05" name="mensagem" required rows="3"></textarea>
          <div class="invalid-feedback">Digite a sua mensagem.</div>
        </div>

        <div class="col-md-12">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
            <label class="form-check-label" for="invalidCheck">Confirmar informações</label>
            <div class="invalid-feedback">Confirme as informações antes de enviar.</div>
          </div>
        </div>

        <div class="col-12">
          <button class="btn btn-outline-primary" type="submit">Enviar <i class="fa-regular fa-paper-plane"></i></button>
        </div>
      </form>

      <!-- Scripts -->
      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
      <script>
        $(document).ready(function () {
          $('#telefone').mask('(00) 00000-0000');
        });

        // Validação Bootstrap
        (() => {
          'use strict';
          const forms = document.querySelectorAll('.needs-validation');
          Array.from(forms).forEach(form => {
            form.addEventListener('submit', event => {
              if (!form.checkValidity()) {
                event.preventDefault();
                event.stopPropagation();
              }
              form.classList.add('was-validated');
            }, false);
          });
        })();
      </script>
    </section>
  </div>
</main>
<!DOCTYPE html>
<html lang="en">
<head>
  <script src="/exercicios/phpPOO/assets/js/script2.js"></script>
  <link rel="stylesheet" href="/exercicios/phpPOO/assets/css/style2.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Área do Usuário</title>
</head>
<body>
  <nav class="menu-lateral">
    <div class="botao-expandir">
      <i class="bi bi-list-ul"></i>
    </div>
    <ul>
      <li class="item-menu">
        <a href="#" onclick="showInicioContent()">
          <span class="icon"><i class="bi bi-house"></i></span>
          <span class="text-link">Início</span>
        </a>
      </li>
      <li class="item-menu">
        <a href="#">
          <span class="icon"><i class="bi bi-file-earmark-text"></i></span>
          <span class="text-link">Extrato</span>
        </a>
      </li>
      <li class="item-menu">
        <a href="#" onclick="showContaContent()">
          <span class="icon"><i class="bi bi-person"></i></span>
          <span class="text-link">Conta</span>
        </a>
      </li>
      <li class="item-menu">
        <a href="/index.html">
          <span class="icon"><i class="bi bi-door-open"></i></span>
          <span class="text-link">Sair</span>
        </a>
      </li>
      <li class="item-menu">
        <a href="#">
          <span class="icon"></span>
          <span class="text-link"></span>
        </a>
      </li>
    </ul>
  </nav>

  <div class="Conteudo-popup">
      <div class="meio-inicio">
        <h2>Conteúdo Início</h2>
        <ul>
          <li>Saldo: <span id="saldoDisplay"></span></li>
          <li>
            <label for="valorAdicionar">Adicionar Dinheiro:</label>
            <input type="number" id="valorAdicionar" placeholder="Valor">
            <button onclick="adicionarDinheiro()">Adicionar</button>
          </li>
          <li>
            <label for="valorSacar">Sacar:</label>
            <input type="number" id="valorSacar" placeholder="Valor">
            <button onclick="sacar()">Sacar</button>
          </li>
          <li>
            <label for="valorDepositar">Depositar:</label>
            <input type="number" id="valorDepositar" placeholder="Valor">
            <button onclick="depositar()">Depositar</button>
          </li>
          <li>
            <label for="valorTransferir">Transferir:</label>
            <input type="number" id="valorTransferir" placeholder="Valor">
            <button onclick="transferir()">Transferir</button>
          </li>
          <li>Status</li>
        </ul>
      </div>          
    <div class="meio-conta">
      <h2>Informações da Conta</h2>
      <div class="meio-conta-content">
        <ul>
          <li>Nome Completo: <span id="nomeCompleto" contenteditable="true" onkeydown="return event.keyCode != 13;"></span></li>
          <li>CPF: <span id="cpf" contenteditable="true" onkeydown="return event.keyCode != 13;"></span></li>
          <li>Endereço: <span id="endereco" contenteditable="true" onkeydown="return event.keyCode != 13;"></span></li>
          <li>Email: <span id="email" contenteditable="true" onkeydown="return event.keyCode != 13;"></span></li>
          <li>Idade: <span id="idade" contenteditable="true" onkeydown="return event.keyCode != 13;"></span></li>
          <li>Senha: ********</li>
        </ul>
      </div>
      
      <button onclick="alterarDados()">Alterar</button>
      <button onclick="cancelarAlteracoes()">Cancelar</button>
    </div>
  </div>
</body>
</html>
<!-- PHP  -->
<?php
if (isset($_POST['BTEnviar']))
{
//Variaveis de POST, Alterar somente se necessário 
//====================================================
  $arquivos = $_FILES['arquivos'];
  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $telefone = $_POST['telefone'];
  $morada = $_POST['morada'];
  $mensagem_form = $_POST['mensagem'];
  $autorizo = $_POST['autorizo']; 
//====================================================
//REMETENTE --> ESTE EMAIL TEM QUE SER VALIDO DO DOMINIO
//==================================================== 
  $email_remetente = "femsoft@femsoftweb.com"; // deve ser uma conta de email do seu dominio 
//====================================================
//Configurações do email, ajustar conforme necessidade
//==================================================== 
  $email_destinatario = "femsoft.fdm@gmail.com"; // pode ser qualquer email que receberá as mensagens
  $email_reply = "$email"; 
  $email_assunto = "FEMSoft Solicitação de Orçamento"; // Este será o assunto da mensagem
//====================================================
/* Cabeçalho da mensagem INSERI DEPOIS  */
  $boundary = "XYZ-" . date("dmYis") . "-ZYX";
  $email_headers = "MIME-Version: 1.0\n";
  $email_headers.= "From: $email_remetente\n";
  $email_headers.= "Reply-To: $email\n";
  $email_headers.= "Content-type: multipart/mixed; boundary=\"$boundary\"\r\n";  
  $email_headers.= "$boundary\n"; 
//Monta o Corpo da Mensagem
//====================================================
  $email_conteudo = "
  <br>Solicitação de Orçamento via WebSite da FEMSoft 
  <br>_______________________________________________<br>
  <br><strong>Nome = </strong> $nome
  <br><strong>Email = </strong> $email
  <br><strong>Telefone = </strong> $telefone
  <br><strong>Morada = </strong> $morada
  <br><strong>Mensagem = </strong> $mensagem_form
  <br>";
  if ($autorizo == 'on') {
    $email_conteudo .= "AUTORIZO que usem os meus dados para entrar em contacto comigo. \n";
  } else {
    $email_conteudo .= "NÃO AUTORIZO que usem os meus dados para entrar em contacto comigo. \n";
  }
/* Função que codifica o anexo para poder ser enviado na mensagem  */
if(file_exists($arquivos["tmp_name"]) and !empty($arquivos))
{
  $fp = fopen($_FILES["arquivos"]["tmp_name"],"rb"); // Abri o arquivo enviado.
  $anexo = fread($fp,filesize($_FILES["arquivos"]["tmp_name"])); // Le o arquivo aberto na linha anterior
  $anexo = base64_encode($anexo); // Codifica os dados com MIME para o e-mail 
  fclose($fp); // Fecha o arquivo aberto anteriormente
    $anexo = chunk_split($anexo); // Divide a variável do arquivo em pequenos pedaços para poder enviar
    $mensagem = "--$boundary\n"; // Nas linhas abaixo possuem os parâmetros de formatação e codificação, juntamente com a inclusão do arquivo anexado no corpo da mensagem
    $mensagem.= "Content-Transfer-Encoding: 8bits\n"; 
    $mensagem.= "Content-Type: text/html; charset=\"utf-8\"\n\n";
    $mensagem.= "$email_conteudo\n"; 
    $mensagem.= "--$boundary\n"; 
    $mensagem.= "Content-Type: ".$arquivos["type"]."\n";  
    $mensagem.= "Content-Disposition: attachment; filename=\"".$arquivos["name"]."\"\n";  
    $mensagem.= "Content-Transfer-Encoding: base64\n\n";  
    $mensagem.= "$anexo\n";  
    $mensagem.= "--$boundary--\r\n"; 
}
else // Caso não tenha anexo
{
  $mensagem = "--$boundary\n"; 
  $mensagem.= "Content-Transfer-Encoding: 8bits\n"; 
  $mensagem.= "Content-Type: text/html; charset=\"utf-8\"\n\n";
  $mensagem.= "$email_conteudo\n";
}
//====================================================
  
 //Enviando o email 
 //==================================================== 
 if (mail ($email_destinatario, $email_assunto, $mensagem, $email_headers)){ 
  echo '<script language="javascript">';
  echo 'alert("E-MAIL ENVIADO COM SUCESSO!!!")'; 
  echo '</script>';
 } 
 else{ 
  echo '<script language="javascript">';
  echo 'alert("FALHA NO ENVIO DO E-MAIL!")';
  echo '</script>';
 } 
//====================================================
} 
?>
<!-- HTML -->
<main role="main">
<!-- BEGINNING THE CONTACT FORM  -->
  <div class="container contactos-contactos">
    <div class="row">
      <div class="col-md-12">
        <blockquote class="blockquote">
          <h1 class="tit2 font-weight-light text-uppercase">Enviar Pedido de Contato</h1>
        </blockquote>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <p class="lead">Pretende limpar ou impermeabilizar seu tapete, carpete? Preencha os campos abaixo e nos envie que entraremos em contato.</p>
      </div>
    </div>
    <form action="<? $PHP_SELF; ?>" method="POST" enctype="multipart/form-data">
      <fieldset>
      <div class="form-row">
        <div class="form-group col-md-12">
          <input  type="text" size="200" name="nome" class="form-control form-control-md" placeholder="Insira o seu nome aqui:" required>
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <input  type="telefone" size="48" name="telefone" class="form-control form-control-md" placeholder="Insira seu telefone aqui:" required>
        </div>
        <div class="form-group col-md-6">
          <input type="email" size="48" name="email" class="form-control form-control-md" placeholder="Insira seu e-mail aqui:" required>
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-12">
          <input  type="text" size="200" name="morada" class="form-control form-control-md" placeholder="Insira o sua morada aqui:" required>
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-12">
          <textarea id="mensagem" name="mensagem" class="form-control form-control-md" placeholder="Descreva o que precisa orçar aqui. Importante digitar a altura e largura, o tipo de tapete (comum, pele, Pele aberta animal), e o serviço a ser prestado (limpeza e lavagem, e/ou impermeabilização. E se necessita que façamos a recolha e devolução, ou se pretende marcar um horário e levar até Lavandaria BLU." rows="5" cols="173"  minlength="0" maxlength="1000" autocapitalize="sentences" required></textarea>
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-12">
          <input id="arquivos" name="arquivos" class="input-file" type="file">
          <span class="help-block">Tamanho máximo de 2MB por mensagem.</span>
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-12">
          <input type="checkbox" name="autorizo" class="form-group" checked> <label style="font-size:90%">Autorizo que usem os meus dados para entrar em contacto comigo.*</label>
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <input type="reset" name="BTapagar" value="APAGAR" class="btn btn-info btn-block"> 
        </div>
         <div class="form-group col-md-6">
          <input type="submit" name="BTEnviar" value="ENVIAR" class="btn btn-info btn-block">
        </div>
      </div>
    </form>
    <hr class="featurette-divider">
</div>
<!-- ENDING THE CONTACT FORM  -->
<?php
  header('Content-Type: application/json');
  // $data = array();  

  //mensagens
  $responseFieldsRequired = utf8_decode('Há campos obrigatórios que não foram preenchidos. Favor preenchê-los, e após isso, tente novamente!');
  $responseValid = utf8_decode('Por favor, insira um endereço de email válido!');
  $responseSendError = utf8_decode('Infelizmente houve um erro ao enviar a mensagem. Contate o administrador do site ou tente novamente mais tarde!');
  $responseSuccess = utf8_decode('Obrigado! Sua mensagem foi enviada com sucesso (:');

  if(empty($_POST['contactName']) || empty($_POST['contactPhone']) || empty($_POST['contactCity']))
    { 
      $data = ['response' => 'field_required', 'msg' => $responseFieldsRequired];
      echo json_encode($data);
      exit;
    } else {

      $nome       = utf8_decode (strip_tags(trim($_POST['contactName'])));
      $telefone      = utf8_decode (strip_tags(trim($_POST['contactPhone'])));
      $email   = utf8_decode (strip_tags(trim($_POST['contactEmail'])));
      $cidade    = utf8_decode (strip_tags(trim($_POST['contactCity'])));
      $produtos    = utf8_decode (strip_tags(trim($_POST['contactProduct'])));
      $mensagem   = utf8_decode (strip_tags(trim($_POST['contactMessage'])));
 
      require('phpMailer/PHPMailer/class.phpmailer.php');
      
      $Email = new PHPMailer();
      $Email->SetLanguage("br");
      $Email->IsSMTP(); // Habilita o SMTP 
      $Email->SMTPAuth = true; //Ativa e-mail autenticado
      $Email->Host = 'email-ssl.com.br'; // Servidor de envio # verificar qual o host correto com a hospedagem as vezes fica como smtp.
      $Email->Port = '587'; // Porta de envio
      $Email->Username = 'jverde@pedromarques.comercial.ws'; //e-mail que será autenticado
      $Email->Password = '@Jverde2019'; // senha do email
      $Email->IsHTML(true); // ativa o envio de e-mails em HTML, se false, desativa.
      $Email->From = 'jverde@pedromarques.comercial.ws'; // email do remetente da mensagem
      $Email->FromName = $nome; // nome do remetente do email
      // $Email->AddReplyTo($email, $nome); // Endereço de destino do emaail, ou seja, pra onde você quer que a mensagem do formulário vá?
      $Email->AddAddress("dg.pedromarques@gmail.com"); // para quem será enviada a mensagem
      $Email->Subject = "Contato via site - Jverde"; // informando no email, o assunto da mensagem

      // Define o texto da mensagem (aceita HTML)
      $Email->Body .= "
                <strong>Nome:</strong> $nome <br>
                              <strong>Telefone:</strong> $telefone <br>
                              <strong>Email:</strong> $email <br>
                              <strong>Cidade:</strong> $cidade <br>
                              <strong>Produtos de interesse:</strong> $produtos <br>
                <strong>Mensagem:</strong>$mensagem";	
      
      // verifica se está tudo ok com os parametros acima, se nao, avisa do erro. Se sim, envia.      
      if(!$Email->Send()){
        $data = ['response' => false, 'msg' => $responseSendError];
      } else {
        $data = ['response' => true, 'msg' => $responseSuccess];	
        }
            
      echo json_encode($data);
    }
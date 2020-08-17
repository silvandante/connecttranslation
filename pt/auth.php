<?php return array (
  'auth' => 'Autenticação',
  'failed' => 'Credenciais não correspondem aos nossos registros!',
  'lock' =>
  array (
    'lock' => 'Lock',
    'page_title' => 'Tela bloqueada!',
    'props' =>
    array (
      'password' => 'Sua senha',
    ),
    'invalid_code' => 'Código de dois fatores inválido!',
    'locking_screen' => 'Tela de Bloqueio!',
    'will_lock_in' => 'A tela será bloqueada' :attribute!',
  ),
  'login' =>
  array (
    'login' => 'Login',
    'page_title' => 'Faça login com sua conta',
    'props' =>
    array (
      'mobile' => 'Mobile',
      'otp' => 'senha temporária',
      'email' => 'Email',
      'email_username' => 'Email ou Nome de Usuário',
      'username' => 'Nome de Usuário',
      'email_or_username' => 'Email ou Nome de Usuário',
      'password' => 'Senha',
      'confirm_password' => 'Confirme a Senha',
    ),
    'request_otp' => 'Solicitação da senha temporária',
    'back_to_login' => 'Voltar para o Login',
    'login_using_mobile_otp' => 'Login usando senha temporária enviado por telefone',
    'login_using_email_otp' => 'Login usando senha senha temporária enviada por Email',
    'login_using_email' => 'Login usando Email / Nome de Usuário,
    'login_using_email_password' => 'Login using Email e Senha',
    'login_using_password' => 'Login usando Senha',
    'or_login_with' => 'Logar com',
    'login_with' => 'Logar com :attribute',
    'otp_generated' => 'Senha de acesso temporário foi gerada.',
    'failed' => 'Essas credenciais não correspondem aos nossos registros.',
    'invalid_mobile' => 'O número de telefone não consta em nossos registros.',
    'invalid_otp' => 'Senha de acesso temporário, tente novamente.',
    'logged_in' => 'Você foi logado com sucesso.',
    'logged_out' => 'Você foi desconectado.',
    'login_permission_disabled' => 'Você não tem permissão para fazer o login.',
    'otp_message' => 'Sua senha de acesso temporário é :attribute.',
    'status' =>
    array (
      'pending_activation' => 'Sua conta ainda não foi ativada.',
      'pending_approval' => 'Sua conta ainda não foi aprovada.',
      'disapproved' => 'Sua solicitação de conta foi reprovada.',
      'banned' => 'Sua conta foi banida.',
      'not_activated' => 'Sua conta ainda não foi ativada.',
    ),
  ),
  'login_throttle_limit_crossed' => 'Você não pode logar até :attribute.',
  'logout' => 'Logout',
  'password' =>
  array (
    'password_mismatch' => 'Senha antiga não confere. Por favor, tente novamente.',
    'props' =>
    array (
      'email' => 'Email',
      'code' => 'Código',
      'current_password' => 'Senha Atual',
      'new_password' => 'Nova Senha',
      'new_password_confirmation' => 'Confirmar Nova Senha',
    ),
    'request' => 'Solicitar redefinição',
    'forgot_password' => 'Esqueceu sua Senha?',
    'reset_password' => 'Resetar Senha',
    'change_password' => 'Mudar Senha',
    'validate_code' => 'Validar Código',
    'reset_here' => 'Reiniciar aqui',
    'user' => 'Não conseguimos encontrar um usuário com esse endereço de e-mail.',
    'password' => 'As senhas devem ter pelo menos seis caracteres e corresponder à confirmação.',
    'token' => 'Este token de redefinição de senha é inválido.',
    'account_not_activated' => 'Você não pode solicitar uma nova senha porque sua conta ainda não foi ativada.',
    'sent' => 'Enviamos por e-mail o link de redefinição da senha.',
    'changed' => 'Sua senha foi alterada.',
    'forgot' =>
    array (
      'page_title' => 'Esqueceu sua senha',
      'page_description' => '',
    ),
    'reset' =>
    array (
      'page_title' => 'Redefina sua senha',
      'page_description' => '',
    ),
    'change' =>
    array (
      'page_title' => 'Mude sua senha',
      'page_description' => '',
    ),
    'different' => 'Sua senha deve ser diferente da senha anterior.',
    'token_expired' => 'Seu token de redefinição de senha expirou. Solicite a redefinição de senha novamente.',
  ),
  'register' =>
  array (
    'new_user' => 'Novo Usuário?',
    'register' => 'Registro',
    'completed' => 'Registro Concluído',
    'pending_activation_message' => 'Ativação pendente. Verifique seu e-mail para obter o e-mail de ativação.',
    'register_here' => 'Clique para se registrar',
    'already_have_account' => 'Tem uma conta? Clique para fazer o login!',
    'page_title' => 'Crie sua conta',
    'page_description' => 'Cadastre-se como novo usuário',
    'props' =>
    array (
      'email' => 'Email',
      'username' => 'Nome de Usuário',
      'name' => 'Nome',
      'code' => 'Código de validação',
      'password' => 'Senha',
      'confirm_password' => 'Confirmar Senha',
    ),
    'user_verified' => 'Email verificado. Agora você pode fazer o login.',
    'invalid_activation_token' => 'Token de ativação inválido.',
    'pending_approval_message' => 'Sua conta está registrada e aguardando aprovação.',
    'activated_message' => 'Sua conta está registrada. Agora você pode fazer o login.',
    'verify' => array(
        'page_title' => 'Verifique seu Email',
        'page_description' => ''
    ),
  ),
  'security' =>
  array (
    'page_title' => 'Autenticação por dois fatores
',
    'props' =>
    array (
      'two_factor_code' => 'Senha temporária',
    ),
    'code_verified' => 'Autenticação de dois fatores bem-sucedida!',
    'invalid_code' => 'Código de dois fatores inválido!',
    'two_factor_security_pending' => 'Sua verificação de segurança de dois fatores está pendente.',
  ),
  'throttle' => 'Muitas tentativas de login. Por favor tente novamente em :seconds seconds.',
);

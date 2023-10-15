<?php

// Application Secret Key
$key = '123456789';

// Header
// O Header traz informações sobre o token, como o tipo (typ) e o algoritmo (alg) 
// utilizado para a assinatura. É importante destacar que a informação 'alg' deve 
// corresponder à forma como você pretende assinar e verificar o token.
$header = [
    'typ' => 'JWT',  // Tipo de token, geralmente "JWT"
    'alg' => 'HS256', // Algoritmo de assinatura, neste caso, HMAC-SHA256
];

// Payload - Content
// O payload é o corpo do token e contém informações específicas da sua aplicação. 
// Essas informações podem incluir dados como data de expiração (exp), um identificador 
// de usuário (uid), e outras informações não confidenciais.
$payload = [
    'exp' => (new DateTime('now'))->getTimestamp(), // Data de expiração do token
    'uid' => 1, // Identificador de usuário
    'email' => 'email@gmail.com', // Email do usuário
];

// JSON Encoding
// Os dados do cabeçalho e do payload são convertidos em JSON para posterior 
// codificação em Base64.
$header = json_encode($header);
$payload = json_encode($payload);

// Base64 Encoding
// Os dados do cabeçalho e do payload são codificados em Base64, o que é necessário
// para a construção do token.
$header = base64_encode($header);
$payload = base64_encode($payload);

// Assinatura (Signature)
// A assinatura é o que garante a autenticidade e integridade do token. É gerada
// aplicando-se um hash HMAC-SHA256 aos dados codificados do cabeçalho e payload, 
// usando a chave secreta (key) como chave.
$sign = hash_hmac('sha256', $header . '.' . $payload, $key, true);
$sign = base64_encode($sign);

// Construção do Token
// O token é criado pela concatenação do cabeçalho codificado em Base64, o payload
// codificado em Base64 e a assinatura. Eles são separados por pontos.
$token = $header . '.' . $payload . '.' . $sign;

// Exibição do Token
echo $token;

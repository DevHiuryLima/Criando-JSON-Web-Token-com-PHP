<div align="center" id="top">
    <h1>Criando JSON Web Token com PHP</h1>
    <br>
</div>

<p align="center">
  <img alt="Github top language" src="https://img.shields.io/github/languages/top/DevHiuryLima/Criando-JSON-Web-Token-com-PHP?color=777BB3">

  <img alt="Github language count" src="https://img.shields.io/github/languages/count/DevHiuryLima/Criando-JSON-Web-Token-com-PHP?color=777BB3">

  <img alt="Repository size" src="https://img.shields.io/github/repo-size/DevHiuryLima/Criando-JSON-Web-Token-com-PHP?color=777BB3">

  <img alt="License" src="https://img.shields.io/github/license/DevHiuryLima/Criando-JSON-Web-Token-com-PHP?color=777BB3">

  <img alt="Github issues" src="https://img.shields.io/github/issues/DevHiuryLima/Criando-JSON-Web-Token-com-PHP?color=777BB3" />

  <img alt="Github forks" src="https://img.shields.io/github/forks/DevHiuryLima/Criando-JSON-Web-Token-com-PHP?color=777BB3" />

  <img alt="Github stars" src="https://img.shields.io/github/stars/DevHiuryLima/Criando-JSON-Web-Token-com-PHP?color=777BB3" />
</p>

<br>

## 📖 Sobre

<p align="justify">Um exemplo simples de criação de JSON Web Token (JWT) em PHP. Este código PHP demonstra como criar um 
JWT com um cabeçalho (header), payload e assinatura (signature) válidos. Aqui está uma visão geral do que cada parte do 
JWT.</p>

<p align="justify"><b>Header: </b>O cabeçalho do JWT contém informações sobre o tipo do token (typ) e o algoritmo de 
assinatura (alg) usado. Neste exemplo, o tipo é "JWT" e o algoritmo é "HS256" (HMAC com SHA-256).

<p align="justify"><b>Payload (Conteúdo): </b>O payload do JWT contém informações específicas da aplicação. Pode incluir 
informações como data de expiração (exp), um identificador de usuário (uid), e outras informações não confidenciais. No 
entanto, nunca deve conter informações sensíveis, como senhas.</p>

<p align="justify"><b>Assinatura (Signature): </b>A assinatura é o que garante a autenticidade e integridade do token. 
É gerada aplicando um hash HMAC-SHA256 aos dados codificados do cabeçalho e payload, usando uma chave secreta. A chave 
secreta neste exemplo é "123456789".</p>

<p align="justify"><b>Exemplo de Saída: </b>O token gerado será exibido no console após a execução do código. Ele terá a 
seguinte estrutura:</p>

  ```
  eyJ0eXAiOiJKV1QiLCJhbGciOiAiSFMyNTYifQ.eyJleHAiOiIxNjMzMDUxMzA2IiwidWlkIjoiMSIsImVtYWlsIjoiZW1haWxAZ21haWwuY29tIn0=.H26bslmvMcr2TOF3lt3BrX9bwktxsU3XwA9TFqSkf0Y=
  ```

<p align="justify"><b>⚠️ Atenção: </b></p>

- Mantenha a chave secreta segura. Ela é fundamental para a segurança do token.
- Certifique-se de que o algoritmo de assinatura (`alg`) corresponde ao algoritmo usado para verificar o token em sua 
aplicação.

&#xa0;

## :dart: Objetivo

<p align="justify">O objetivo deste projeto é fornecer um exemplo prático de como criar um JSON Web Token (JWT) em PHP. 
A intenção é colaborar com a comunidade de desenvolvedores, disponibilizando um código simples e funcional para a geração 
de JWT. O JWT é amplamente utilizado em aplicações web para autenticação e autorização, e entender como criar um token é 
essencial para muitos desenvolvedores.</p>

<p align="justify">Este projeto visa simplificar esse processo e fornecer um ponto de partida para quem deseja usar JWT 
em suas próprias aplicações. Desta forma, os desenvolvedores podem economizar tempo e esforço ao criar e implementar 
tokens de autenticação seguros em suas aplicações.</p>

&#xa0;

## :computer: Tecnologias

#### **Web**

  - [PHP][php]

#### **Utilitários**

  - Editor: **[Visual Studio Code][vscode]**
  - Ícones: **[Markdown Emoji][markdown_emoji]**

&#xa0;

## 🚀 Como executar o projeto

1. Faça um clone :

  ```sh
    $ git clone https://github.com/DevHiuryLima/Criando-JSON-Web-Token-com-PHP.git
  ```

  **Pré-requisitos**
  - É **necessário** possuir o **[PHP][php]** instalado na máquina.
  - Ter um conhecimento básico de JWT.

  **Executando a Aplicação:**
  ```
    - Clone o repositório ou copie o código PHP para o seu projeto.
    - Personalize a chave secreta (`$key`) de acordo com suas necessidades.
    - Execute o código PHP.
    - O token gerado será exibido na saída.
  ```

&#xa0;

## :octocat: Como contribuir

  1. Faça um **fork** do projeto.
  1. Crie uma nova branch com as suas alterações: `git checkout -b my-feature`
  1. Salve as alterações e crie uma mensagem de commit contando o que você fez: `git commit -m "feature: My new feature"`
  1. Envie as suas alterações: `git push origin my-feature`
  > Caso tenha alguma dúvida confira este [guia de como contribuir no GitHub](https://github.com/firstcontributions/first-contributions)

&#xa0;

## :memo: Licença

Este projeto está sob licença do MIT. Para obter mais detalhes, consulte o arquivo [MIT LICENSE](LICENSE.md) contido nesse repositório.

Feito por <a href="https://github.com/DevHiuryLima" target="_blank">Hiury Lima</a>.

&#xa0;

[Voltar para o topo](https://github.com/DevHiuryLima/Criando-JSON-Web-Token-com-PHP#top)



<!-- Techs Web -->

[php]: https://www.php.net



<!-- Techs Utilitárias -->

[vscode]: https://code.visualstudio.com/

[markdown_emoji]: https://github.com/ikatyang/emoji-cheat-sheet
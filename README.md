# LandingPageFlipFlop

### Sobre
<p> Este repositório é destinado ao projeto de avaliação para a Flip Flop.</p>

### Funções

- [x] Validar e-mails
- [x] Cadastrar e-mails válidos no banco
- [x] Visualizar e-mails cadastrados
- [x] Tela de compra de televisão 

### Pré-requisitos

Antes de começar, você vai precisar ter instalado em sua máquina as seguintes ferramentas:

-> [Git for windows](https://git-scm.com) (Opcional)

-> [Xampp](https://www.apachefriends.org/) <b>(Instalação Mínima: Apache, PHP e Mysql)</b>.

- Execute o painel de controle do xampp e inicie o Mysql e o Apache.
- <b>Caso seja pedido permissão do firewall, permita o acesso!</b>

### 🎲 Instalando o projeto

```bash

# Com o Apache e o MySQL rodando pelo xampp, crie um banco de dados chamado "landingpage". 

# Através do terminal, navegue até a pasta C:\xampp\htdocs\ (Local de instalação do xampp no Windows)

# Baixe o projeto na pasta htdocs
$ git clone <https://github.com/PauloHenrique7010/LandingPageFlipFlop.git>

# Acesse a pasta do projeto/

# Navegue até a pasta ./server/bd

# Suba o arquivo banco_de_dados.sql para o banco de dados utilizando o comando
$ mysql -u root landingpage < banco_de_dados.sql

# Espere até o fim da operação.
```


### 🎲 Rodando o Back End (servidor)

```bash

# Acesse a página localhost pelo navegador e acesse a pasta LandingPageFlipFlop


### Referências
<p>[Como fazer um bom README](https://blog.rocketseat.com.br/como-fazer-um-bom-readme/)</p>
<p>[Exemplo ReadMe](https://github.com/tgmarinho/meetapp)</p>



### Descrição do teste

Enunciado

Elaborar uma landing page responsiva para anúncio de uma Smart TV LED Samsung com um

campo de texto para o visitante cadastrar o e-mail e receber promoções.

Utilizando AJAX, fazer a validação do e-mail. Caso não seja válido, exibir uma mensagem

pedindo pra entrar com um email válido. E caso seja válido, cadastrar num banco de dados

MySQL (também por AJAX).

Fazer também uma página onde os e-mails cadastrados possam ser visualizados.

Criar um arquivo de texto com os comandos SQL necessários pra criar o banco de dados.

Por fim, zipar a pasta enviar para a nuvem e enviar o link para download para

emanuel@flipfloplab.com.br

***Não envie diretamente no email pois ele rejeita o arquivo, deve enviar o link para eu

baixar

Referências

Para ajudá-lo, listamos alguns links para referência:

Modelos de Landing Pages : https://startbootstrap.com/template-categories/landing-pages/

Exemplo simples de Ajax utilizando Jquery: http://www.devfuria.com.br/javascript/ajax-phpjquery/

Competências avaliadas

Desenvolvimento Web Front-end (HTML, CSS, Javascript, jQuery)

Desenvolvimento Web Back-end (PHP)

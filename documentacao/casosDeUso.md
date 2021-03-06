# Especificação de Casos de Uso

## Sumário

- [CDU 01 - Cadastro de clientes](#cdu-01---cadastro-de-clientes)
- [CDU 02 - Login](#cdu-03---login)
- [CDU 03 - Locação](#cdu-03---locação)
- [CDU 04 - Gerenciamento de Locação](#cdu-04---Gerenciamento-de-Locação)
- [CDU 05 - Gerenciamento dos produtos](#cdu-05---Gerenciamento-dos-produtos)



## CDU 01 - Cadastro de clientes

**Atores:** Clientes

**Pré-Condições:** Possuir um E-mail válido 

**Fluxo Principal:**

  1. Usuário informa E-mail e Senha.
  2. Sistema verifica se o e-mail é válido
    - Se o e-mail já estiver cadastrado no sistema, ele retorna um erro.
    - Se o e-mail for válido o sistema cadastra o Usuário como cliente.
    - O usuário se cadastra pela internet, através da página de Login.
 

## CDU 02 - Login 

**Atores:** clientes e admnistrador

**Pré-Condições:** Ser cadastrado no sistema

**Fluxo Principal:**

  1. Usuário informa e-mail e senha.
    - Se os dados informados estiverem de acordo com os registrados no sistema, o usuário recebe permissão de acesso de acordo com o cadastro, indo para a tela inicial da respectiva permissão
      *  Administradores recebem as permissões de acesso de Administradores.
      * clientes recebem as permissões de acesso de clientes.
    - Se o e-mail não estiver cadastrado no sistema, ele retorna um erro.
    - Se a senha não for condizente com o e-mail informado, ele retorna um erro.
 

 ## CDU 03 - Locação 

**Atores:** Clientes

**Pré-Condições:** Ser cadastrado e estar logado

**Fluxo Principal:**

  1. O sistema exibe um calendário.  
  2. Caso o usuário selecione um dia, será exibida uma lista com os produtos disponiveis naquele dia.
  3. Caso o usuário selecione um ou mais produtos, será redirecionado para uma página de locação.

  ## CDU 04 - Gerenciamento das Locações

**Atores:** Admnistrador

**Pré-Condições:** Ser cadastrado no sistema como Admnistrador e estar logado.

**Fluxo Principal:**

   1. O admnistrador deverá ter acesso a informações referentes às locações e seus respectivos clientes(Equipamentos alugados, data da locação, preço).


 
## CDU 05 - Gerenciamento dos produtos

**Atores:** Administrador

**Pré-Condições:** Ser cadastrado no sistema como Administrador e estar logado.

**Fluxo Principal:**

  1. Administrador tem a possibilidade de adicionar novos equipamentos ao estoque:
    - O administrador escreverá uma descrição contendo as informações do equipamento a ser adicionados.
    - Sistema adcionará o novo equipamento ao estoque, com as informações dadas pelo administrador.

  2. Administrador tem a possibilidade de excluir equipamentos do estoque.




# Chocolateria 🍫

**Chocolateria** é uma aplicação web desenvolvida para gerenciar e visualizar produtos de chocolate. O sistema oferece uma interface onde os usuários podem explorar uma variedade de chocolates, enquanto administradores têm a capacidade de adicionar ou remover produtos conforme necessário.

[Play Video!](https://github.com/leticiaveigacs/Chocolateira/issues/1#issue-2505572170)

## Visão Geral

O projeto **Chocolateria** foi criado para proporcionar uma experiência simples e eficiente na administração e visualização de produtos relacionados a chocolates. A aplicação permite que os usuários visualizem informações detalhadas sobre os chocolates, realizem buscas por palavras-chave e acompanhem os últimos produtos adicionados. Para administradores, a plataforma oferece ferramentas de gerenciamento de produtos, como a capacidade de adicionar novos chocolates ao sistema e remover os existentes.

## Funcionalidades

- **Visualização de Chocolates**: Usuários podem navegar e visualizar uma lista de chocolates, com detalhes sobre tipo, recheio, calorias, validade, e mais.
- **Busca de Produtos**: Sistema de busca que permite aos usuários encontrar chocolates específicos usando palavras-chave.
- **Gerenciamento de Produtos**: Administradores autenticados podem adicionar novos chocolates, incluindo informações como tipo, recheio, calorias, e imagem, além de remover produtos existentes.
- **Listagem de Novidades**: Exibição dos últimos cinco chocolates adicionados na página inicial.

## Como Usar 🍬

### Para Usuários:

1. **Navegação**:
   - Acesse a página inicial para ver a lista de chocolates disponíveis.
   - Clique em qualquer chocolate para ver detalhes mais aprofundados.

2. **Buscar Chocolates**:
   - Utilize a barra de busca para encontrar chocolates específicos por tipo, outros critérios.

### Para Administradores:

1. **Autenticação**:
   - Faça login no sistema usando suas credenciais de administrador.

2. **Adicionar Produtos**:
   - Navegue até a seção de administração e preencha o formulário para adicionar novos chocolates ao sistema.

3. **Remover Produtos**:
   - Selecione qualquer chocolate da lista de administração e utilize a opção de remover para excluí-lo do sistema.

## Recursos Técnicos

- **Backend**: PHP para gerenciar a lógica do servidor, autenticação de usuários e interação com o banco de dados.
- **Banco de Dados**: MySQL, com tabelas para armazenar informações sobre chocolates (`tbchocolates`) e administradores (`tbutilizadores`).
- **Frontend**: HTML e CSS para a estruturação e estilização das páginas, e JavaScript para adicionar interatividade.

## Como Executar Localmente 💻

https://github.com/leticiaveigacs/Chocolateira/

1. **Clone este repositório para o seu ambiente local**:

   ```bash
   git clone https://github.com/leticiaveigacs/Chocolateira/.git
   ```

2. **Navegue até o diretório do projeto**:

   ```bash
   cd Chocolateira
   ```

3. **Configure o servidor PHP**:

   - Se estiver usando XAMPP, mova a pasta do projeto para o diretório `htdocs`.
   - Inicie o servidor Apache e MySQL através do painel de controle do XAMPP.

4. **Importe o banco de dados**:

   - Acesse o `phpMyAdmin` e importe o arquivo SQL fornecido para configurar as tabelas `tbchocolates` e `tbutilizadores`.

5. **Acesse a aplicação**:

   - Abra o navegador e acesse `http://localhost/Chocolateria` para visualizar a aplicação.

## Agradecimentos

Este projeto foi desenvolvido como uma oportunidade para praticar e aprimorar habilidades de programação front-end e back-end. Esperamos que a **Chocolateria** seja útil para aprender sobre o desenvolvimento web e inspire futuros projetos. Divirta-se explorando e gerenciando seus chocolates favoritos! 🍫🚀



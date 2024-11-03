# DesafioCRUD

#Desafio de CRUD em PHP

Objetivo:

Desenvolver um sistema simples de cadastro de clientes em PHP, com funcionalidades de criar, ler, atualizar e remover registros (soft delete). Cada cliente pode ter múltiplos endereços, sendo que um endereço deve ser marcado como principal. As tabelas no banco de dados devem ser estruturadas seguindo boas práticas e com uma tipagem coerente. Além disso, o código deve ser organizado, com as responsabilidades de cada função bem separadas e a indentação seguindo boas práticas de desenvolvimento.

<h3 Importância do Desafio: </h3>
Este desafio é uma etapa crucial para a integração do desenvolvedor na stack tecnológica da empresa. Ele visa avaliar sua habilidade em implementar um CRUD básico, o entendimento das relações entre entidades, e a capacidade de trabalhar com PHP e bancos de dados. Além disso, a criação deste CRUD ajudará o desenvolvedor a se familiarizar com a estrutura e práticas usadas no desenvolvimento de aplicações na empresa.
Estrutura das Entidades
Entidade Cliente
id: Identificador único do cliente (auto incremento)
nome: Nome do cliente (VARCHAR)
sobrenome: Sobrenome do cliente (VARCHAR)
data_nascimento: Data de nascimento do cliente (DATE)
sexo: Sexo do cliente (CHAR, exemplo: M/F)
escolaridade: Nível de escolaridade do cliente (VARCHAR)
profissao: Profissão do cliente (VARCHAR)
cpf: CPF do cliente (VARCHAR, único)
telefone: Telefone do cliente (VARCHAR)
email: E-mail do cliente (VARCHAR, único)
criado_em: Data e hora em que o cliente foi cadastrado (DATETIME)
alterado_em: Data e hora da última atualização (DATETIME)
status: Status do cliente (ENUM, valores: 'ativo', 'inativo', para soft delete)
Entidade Endereços
id: Identificador único do endereço (auto incremento)
cliente_id: Relaciona o endereço com um cliente (INT, chave estrangeira)
logradouro: Nome da rua, avenida, etc. (VARCHAR)
numero: Número do imóvel (VARCHAR)
bairro: Bairro (VARCHAR)
cidade: Cidade (VARCHAR)
estado: Estado (VARCHAR)
cep: Código Postal (VARCHAR)
principal: Indica se o endereço é o principal (BOOLEAN)
Regras
Relacionamento entre Cliente e Endereço:
Um cliente pode ter múltiplos endereços.
Deve haver um único endereço marcado como principal para cada cliente.
Operações CRUD:
Criar: Adicionar um novo cliente e seus endereços.
Ler: Listar clientes e seus endereços. Deve ser possível ver todos os endereços de um cliente específico.
Atualizar: Editar as informações de um cliente e atualizar endereços associados. Um cliente pode ter seus endereços atualizados, incluindo a marcação de um novo endereço como principal.
Remover (Soft Delete): Desativar um cliente sem removê-lo fisicamente do banco de dados. Isso deve ser feito alterando o campo status para inativo. A exclusão de endereços também deve seguir a lógica de soft delete.
Regras Específicas para Endereços:
Não é permitido apagar um endereço que esteja marcado como principal. Para remover um endereço principal, você deve primeiro transformar outro endereço vinculado ao cliente em principal.
Um cliente deve sempre ter pelo menos um endereço vinculado. Não é permitido remover todos os endereços de um cliente. Caso seja necessário remover um endereço, um novo endereço deve ser definido como principal antes da remoção.
Tabelas no Banco de Dados
Tabelas:
crud_{nome_do_desenvolvedor}_clientes
crud_{nome_do_desenvolvedor}_enderecos
Exemplo para desenvolvedor chamado "joao":
crud_joao_clientes
crud_joao_enderecos
Criação das Tabelas:
Use as especificações das entidades acima para criar as tabelas no banco de dados MySQL.
Se necessário, você pode criar tabelas adicionais para suportar a implementação do CRUD ou para melhorar o sistema.
Classe de Conexão com o Banco de Dados
Criação:
Crie uma classe PHP para gerenciar a conexão com o banco de dados. Essa classe deve:
Estabelecer a conexão com o banco de dados.
Gerenciar erros de conexão.
Fornecer métodos para executar consultas e retornar resultados.
Nota: Não fornecerei um exemplo de código para a conexão com o banco de dados. Pesquise e implemente uma solução adequada para gerenciar a conexão.
Documentação
Documentação: Elabore um documento explicativo detalhando o funcionamento do sistema. A documentação deve incluir:
Descrição geral do sistema e suas funcionalidades.
Explicação sobre as entidades e relacionamentos.
Instruções sobre como configurar e executar o sistema.
Exemplos de como utilizar cada funcionalidade (criar, ler, atualizar, remover).
Considerações sobre segurança e boas práticas aplicadas.
Instruções Adicionais
Validação: Inclua validação básica dos dados de entrada.
Segurança: Utilize práticas seguras de programação, como prepared statements, para evitar SQL injection.
Organização do Código: Separe as responsabilidades de cada função e mantenha o código organizado e indentado, seguindo boas práticas de desenvolvimento.
Passo a Passo Adicional
Menu de Navegação: Crie um link no menu lateral da aplicação para acessar o CRUD de clientes. Certifique-se de que este link esteja visível e acessível de forma intuitiva para facilitar a navegação.

Apresentação:
O desenvolvimento desse CRUD será apresentado à equipe. Prepare uma demonstração que mostre todas as funcionalidades implementadas e esteja pronto para discutir as decisões de design e qualquer desafio encontrado durante o desenvolvimento.


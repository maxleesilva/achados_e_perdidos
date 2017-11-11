# achados_e_perdidos
1. Introdução
	Este documento apresenta o projeto de criação de um site de achados e perdidos para a UDF. Essa iniciativa partiu de um grupo de alunos do curso de Análise e Desenvolvimento de Sistemas de Informação da UDF, que são integrantes da elaboração deste trabalho.
 
2. Plataforma de Implementação
	O sistema em questão trata-se de um Sistema de Informação e apresenta as seguintes características:
•	Envolve grande quantidade de dados e a sua gerência deve ser feita usando um banco de dados;
•	Usuários acessam e podem cadastrar dados. As funcionalidades estarão disponíveis apenas pela internet;
•	Existirão pelo menos três interfaces com o usuário;
•	O sistema pode ser integrado ao site da UDF.
Levando-se em consideração essas características, decidiu-se implementar o sistema para o Achados e perdidos online da UDF usando a linguagem de programação PHP, o banco de dados relacional MySQL e a interface web phpMyAdmin para gerenciar o banco de dados.

3. Arquitetura de Software
	Como é possível perceber pelas especificações de requisitos para sistema em questão, não há grandes restrições de desempenho e disponibilidade, ainda que algumas restrições tenham sido apontadas. Assim, levando-se em consideração os requisitos para o sistema proposto, foram considerados como os principais atributos de qualidade a serem incorporados ao site de Achados e Perdidos Online da UDF, apresentados juntamente com as táticas a serem aplicadas:
•	Usabilidade:
o	A interface de usuário deve ser responsiva em computadores e smartphones.
o	Prover ao usuário a capacidade de entrar com comandos que permitam operar o sistema de modo mais eficiente. Para tal, as interfaces do sistema devem permitir, sempre que possível a entrada por meio de seleção ao invés da digitação de campos.
o	O site deve ser de fácil navegação, com comandos bem explicados, objetos e campos bem dispostos e consistente (projeto único de interface com o usuário).
•	Segurança:
o	Fazer o cadastro de usuários que postam objetos perdidos;
o	Manter um trilha de auditoria sobre os dados postados pelos usuários, sempre registrando quem postou o objeto perdido e quem solicitou como sendo o dono.
o	Limitar a exposição dos dados do cliente, fazer uma intermediação para contato entre quem encontrou o objeto e quem é o dono do mesmo.
•	Desempenho:
o	Estabelecer uma versão do navegador requerida para conseguir acessar o site.
o	Hospedar o site em um servidor que suporte o acesso dos usuários sem travamentos.
•	Portabilidade: uso do PHP, HTML5, JavaScript e CSS3, que rodam nos principais navegadores atuais.
Tomando por base as características do sistema discutidas na seção 2 e os atributos de qualidade e táticas selecionadas para tratá-los apresentados anteriormente, decidiu-se usar o modelo de banco de dados conceitual para apresentar os principais requisitos para o sistema.
Inicialmente foram definidas três entidades principais, que receberam cada uma um atributo identificador e outros atributos relacionados com a entidade, como mostra na Figura 1.

	A entrada para objeto foi dividida em duas entidades, Objeto encontrado e Objeto perdido. O objetivo desta separação é que o usuário não dependa de que o objeto perdido esteja no sistema para retornar um resultado, e sim, que se ele não encontrar, que possa fazer um cadastro do objeto perdido, para que se alguém encontrar e fizer a entrada no sistema ela receba uma notificação por e-mail.
	A entidade usuário faz relação com as outras duas entidades, porque quando for cadastrado o objeto é necessário também colocar informações 

4. Controle do Subsistema
	Conforme discutido anteriormente, o controle do subsistema será feito em três camadas: Camada de Lógica de Negócio, Camada de Interface com o usuário e Camada de Gerência de Dados. 

4.1 Camada de Lógica de Negócio
	(aqui entra o modelo físico do banco de dados e o portugol)
4.2 Camada de Interface com o Usuário
	(aqui entra os prints do front-end)
4.3 Camada de Gerência de Dados
	(aqui entra descrição da utilização do phpMyAdmin)
5 Metas para implementação e Conclusão do projeto

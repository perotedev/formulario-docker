# formulario-docker
Projetinho com PHP, JavaScript, Bootstrap, Jquery, HTML5, CSS MySQL


# Sobre o Banco de Dados
1 - Ao executar o docker-compose, crie uma pasta chamada 'mysql' na raiz do repositório! Ela será responsável por armazenar o seu banco de dados! Sempre que encerrar o docker-compose, apague os dados desta pasta, pois se for rodar novamente a imagem dará erro porque haverá arquivos de cache dentro dela.

2 - A criação de tabelas é automatica! Você ainda pode usar o MySQL Workbench, PHP MyAdmin, Postgres ou um de sua preferência, para manipular manualmente o banco de dados caso seja necessário.

3 - Ao executar o docker-compose, inspecione o network da sua imagem MySQL para obter o IP do banco de dados, então coloque-o no arquivo 'conexão.php' na função 'conectarAoBanco()' para que a aplicação possa ter acesso. A porta é a padrão 3306.

# Sobre o Docker-Compose
1 - O docker-compose cria um container com uma imagem PHP personalizada e utiliza mais 2 imagens padrão (Mysql e PHPmyAdmin). A imagem PHP é alterada para que sejam instalados os plugins do Apache, Mysqli e PDO.

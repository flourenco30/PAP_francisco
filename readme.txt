Manual de Utilizador

Para visualizar o projeto
**Opcional**
	Criação de virtual host
	C: -> Windows -> System32 -> drivers -> etc -> hosts
	
	Dentro do ficheiro
		Copiar a linha "#	127.0.0.1       localhost" e colar por baixo e mudar a linha para "127.0.0.1       ferreira-auto.test"
	
	De seguida, dirigir-se à localização C: -> xampp -> apache -> conf -> extra -> httpd-vhosts.conf
 	
	Copiar - 
		"##<VirtualHost *:80>
    			##ServerAdmin webmaster@dummy-host2.example.com
    			##DocumentRoot "C:/xampp/htdocs/dummy-host2.example.com"
    			##ServerName dummy-host2.example.com
    			##ErrorLog "logs/dummy-host2.example.com-error.log"
    			##CustomLog "logs/dummy-host2.example.com-access.log" common
		 ##</VirtualHost>"
	Colar por baixo e fazer as seguintes alterações nas linhas-
		"<VirtualHost *:80>
    			ServerAdmin ferreira-auto.test
    			DocumentRoot "C:/xampp/htdocs/PAP_francisco/public"
    			ServerName ferreira-auto.test
    			ErrorLog "logs/ferreira-auto.test.log"
    			CustomLog "logs/ferreira-auto.test.log" common
		</VirtualHost>"
**Fim do opcional**

Importação de Base de Dados
	Dirigir-se ao link "127.0.0.1/phpmyadmin" se o passo anterior não foi completo, se sim dirigir-se ao link "ferreira-auto.test/phpmyadmin"
	Após deve-se criar uma base de dados à parte com o nome "ferreira_auto_bd" e de seguida importar o ficheiro .sql, que se encontra na pasta "Base de Dados" na pendrive;

Criação de utilizadores com direitos no PHPMYADMIN
	Na base de dados criar utilizador com nome "francisco" e password "francisco"
 
Credenciais do projeto:
	Utilizador normal:
		email: guest@ferreira-auto.pt
		password: Guest12345678

	Administrador:
		email: admin@ferreira-auto.pt
		password: Admin12345678
# Tada List

Esse aplicativo foi desenvolvido para fins de estudo.

## Instruções

### Instalação

Vá até a pasta raíz com os arquivos do projeto e utilize o [Composer](http://getcomposer.org) para instalar as depenências

    composer update

#### Inicializar o banco de dados

Crie um banco de dados MySQL com o nome 'tada_list' em seguida execute
o comando `artisan migrate`.

    php artisan migrate --seed

**Obs.:** Caso escolha não utilizar o ambiente Workstead, será necessário
editar os parametros de conexão no arquivo `app/config/database.php`

## Configurar o Workstead (não obrigatório)

Consulte instruções de instalação em [Workstead](https://github.com/lucasvscn/workstead).

Edite o arquivo de configuração do Workstead:

    $ workstead edit

ou

    $ vim ~/.workstead/Homestead.yml

Na sessão `sites` adicione um novo VirtualHost

    - map: tada-list.app
      to: /home/vagrant/Code/tada-list
      phperr: E_ALL

E na sessão `databases`, inclua uma nova entrada

    - tada_list

Depois das alterações, salve e inicie o ambiente

    $ workstead up --provision

ou

    $ cd /path-to-your-workstead-folder/ ; vagrant up --provision

Modifique o arquivo `hosts` incluindo o novo endereço local

    192.168.33.10    tada-list.app

**Windows:** C:\Windows\System32\drivers\etc\hosts

**Linux .:** /etc/hosts


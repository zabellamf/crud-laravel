# CRUD Laravel

Para o desenvolvimento deste projeto foi utilizado uma maquina Homestead https://laravel.com/docs/7.x/homestead. Entao o passo a passo a seguir será para utilização usando o Homestead.

## Passo 1  

Apos clonar o projeto precisamos criar nosso arquivo .env onde fica os parametros do projeto. Para isso tem um arquivo .env.example, copie este arquivo alterando o nome para apenas .env

Unica alteração necessaria sera inserir a senha do banco que por padrao Homestead é secret.

## Passo 2

Configurar o arquivo Homestead.yml, precisamos mapear o novo projeto para isso altere as seguintes linhas:

folders:
    - map: D:\crud-laravel
      to: /home/vagrant/crud-laravel

sites:
    - map: blog.test
      to: /home/vagrant/crud-laravel/blog/public

databases:
    - blog


Onde o map de folder seria onde esta localizado o projeto que deu o clone. 

## Passo 3 

Precisamos mapear o site no arquivo hosts para ter o acesso simplificado. 

Abra o bloco de notas como administrador, e depois abrir o arquivo hosts localizado no caminho C:\Windows\System32\drivers\etc e inserir na última linha:

192.168.10.10 blog.test

## Passo 4

Desligar sua maquina vagrant caso esteja ligada com o comando

vagrant halt

E subir ela novamente:

vagrant up --provision

Agora basta acessar blog.test em seu browser de preferencia
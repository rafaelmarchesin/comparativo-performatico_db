# Projeto Comparativo de Perfórmance entre Bancos de Dados

## Descrição:
Este projeto foi desenvolvido como atividade de mentoria dentro da empresa Yes Technology. O objetivo da aplicação é demonstrar diferenças de perfórmance entre os bancos de dados MySQL e MongoDB. Para isso, o programa realiza o armazenamento de uma sequência de dados em cada tecnologia e avalia o tempo de processamento. A mesma avaliação é realizada para verificar o tempo de processamento de leitura de dados. Ao final, é possível visualizar o comparativo de perfórmance entre as duas tecnologias.

***

## Dados da Aplicação:
### Nome do aplicativo:
Comparativo de Perfórmance entre Bancos de Dados

### Objetivo do aplicativo:
Identificar o tempo de processamento de gravação e leitura de dados nos bancos MySQL e MongoDB e comparar os valores resultantes.

### Versão:
v.1.0

### Autor:
Rafael Marchesin

### Licença:
MIT License

***

## Documentação:
### Primeiros passos:
Para ter acesso às funcionalidades da aplicação, basta executar o clone do repositório e cloná-lo em uma pasta específica do computador.

Comando usado para clonar o repositório:

```
$ git clone https://github.com/rafaelmarchesin/comparativo-performatico_db.git
```

A aplicação é executada via Docker e Docker Compose, por isso, é necessário ter ambas aplicações instaladas no computador.
Após instalá-las, basta executar o seguinte comando na pasta onde o repositório foi clonado:

```
$ docker-compose up --build
```

Esse comando é responsável por inicializar e configurar os containers responsáveis pelo funcionamento da aplicação.
Para encerrar a execussão da aplicação via Docker Compose, basta digitar no terminal o seguinte comando:

```
$ docker-compose down
```

### Rodando a aplicação:
Para rodar a aplicação, é necessário acessar a mesma pasta em que se encontra os documentos clonados em outra aba do terminal (caso o Docker Compose não tenha sido executado em modo daemon, o que é o caso, se você seguiu os comando apresentados acima) e executar o seguinte comando:

```
$ php index.php
```

Feito isso, a tela inicial da aplicação será carregada como demonstrado na imagem abaixo:

![Tela exibindo o menu](https://raw.githubusercontent.com/rafaelmarchesin/comparativo-performatico_db/master/imagens/001.png)

### Inserindo dados nos Bancos de Dados:
Para inserir dados nos Bancos de Dados, basta digitar o número correspondete à ação indicado no menu e pressionar "Enter".
Dígito "1": insere dados no Banco de Dados MySQL.
Dígito "2": insere dados no Banco de Dados MongoDB.

### Lendo os dados armazenados:
Para ler os dados, basta utilizar os seguintes dígitos:
Dígito "3": Lê dados armazenados no Banco de Dados MySQL.
Dígito "4": Lê dados armazenados no Banco de Dados MongoDB.

### Comparativo de Perfórmance:
Cada ação solicitada para a aplicação retornará um valor em segundos indicando o tempo que levou para o processamento ser executado. Após executar todas as ações, é possível exibir os resultados performáticos digitando o número "5".
Os valores de tempo serão exibidos como na tela abaixo:

![Tela que exibe o resultado performático](https://raw.githubusercontent.com/rafaelmarchesin/comparativo-performatico_db/master/imagens/002.png)

### Exibindo novamente o menu:
Em determinado momento da execussão da aplicação, pode ser necessário visualizar novamente o menu, para isso, bastas digitar o número "6" e pressionar "Enter" que o menu será exibido na tela.

### Encerrando a aplicação:
Para encerrar a aplicação, basta utilizar o dígito "7".
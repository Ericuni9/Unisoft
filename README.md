# Projeto - UniSoft | Segurança Cibernética

# Dados Da Equipe

**Curso: Análise e Desenvolvimento de Sistemas - Universidade Nove De Julho**

**Período**: Noturno


**PROJETO E MODELAGEM DE SISTEMAS DE SOFTWARE**

**Professor**: Prof. Daniel Ferreira de Barros Junior

(login: daniel@unisoft.com senha: 123456) -> Conta para acessar página com produtos e serviços contratados


## Integrantes

| Nome Completo  |  RA  |
| -------------- | ---- |
|  Athos Caleo Nogueira Mattos | 3020111960 |
|  Bruna Cunha de Sousa | 3021200830 |
|  Crysthian de Melo Pires | 3021102922 |
|  Diego da Silva Gustavo dos Santos | 3021105681 |
|  Eric Vinicius de Freitas Andrade | 3021200284 |
|  Felipe Firmino Silva Ferreira | 421201116 |
|  João Paulo Caldeira de Mello | 3022101591 |
|  Larissa Pina Pereira | 3021203696 |
|  Nathalia Marini Chiquitano | 3122101006 |
|  Ryan De Souza Tomaz | 3021106499 |



## Solicitação para o Desenvolvimento do Projeto

Nesse semestre teremos um novo desafio na construção do Projeto, onde vocês irão construir um Sistema WEB publicado em um provedor de Cloud, por exemplo na AWS, AZURE, Google Cloud, ou outro provedor de Cloud e versionando no Github.
O seu grupo deve criar um sistema WEB, que pode ser uma página institucional, um blog, uma API, um sistema online com cadastro de produtos e clientes, um jogo online, ou qualquer Sistema WEB e versionado no Github.
O grupo deve escolher a linguagem de programação ou framework necessária a execução do projeto proposto.

## Quem somos (Unisoft)?

- A Unisoft é uma agência de desenvolvimento de software crescente no Brasil fundada em janeiro de 2016 atuando em todo o território nacional, foi criada a partir da necessidade de segurança nas empresas com relação aos dados expostos na internet sem nenhum gerenciamento ou amparo adequado, em virtude disso, a UniSoft surgiu usando a mais alta tecnologia de proteção com profissionais especializados em segurança da informação, atualmente com demanda de 300 colaboradores. A sede da agência é localizada na capital de São Paulo tendo escritórios e filiais em outros estados, como Rio de Janeiro, Maranhão e Rio Grande do Sul.

- Temos um  foco inovador com a  segurança de dados,  nosso forte está empenhado no resguardo e proteção não somente de empresas, mas de pessoas autônomas desenvolvendo um sistema único e ao nível de suas necessidades, assim tendo total certeza que nossos clientes estarão praticando o uso adequado com os melhores preços podendo optar por pacotes e anos de garantia, evitando ataques de Ransomware, Backdoor, Spoofing ou sequestros de dados que são crescentes no mundo independente do cuidado que tomamos hoje.

- No processo de nossa trajetória, aproximadamente 20 grandes e renomadas empresas necessitadas de preservação utilizam nossos softwares e pacotes de segurança, entre elas empresas da área de contabilidade, tecnologia, saúde, comercial e financeiro. Nossos futuros projetos estão em desenvolvimento para prezar a segurança e proteção do mundo empresarial aumentando nossa equipe e filiais trazendo futuras possíveis soluções.

## Instruções

1. Clonar projeto

2. Renomeie o arquivo **.env.example** para **.env**

3. Instalação de dependências -->
   Abra um terminal, acesse a pasta do projeto e digite:

> composer install

(caso não tenha o composer, baixe-o aqui https://getcomposer.org/download/)

4. Ainda no terminal, e ainda dentro da pasta do projeto, digite:

> php artisan key:generate

5. Executar o arquivo Script-1.sql para criar as tabelas do banco

6. Também no terminal, executar o comando para popular as tabelas:

> php artisan db:seed

7. Ainda no terminal, rode o servidor com o comando:

> php artisan serve

8. Uma mensagem como esta deverá aparecer no seu terminal:

`Starting Laravel development server: http://127.0.0.1:8000 [Mon Oct 10 22:47:42 2021] PHP 7.4.14 Development Server (http://127.0.0.1:8000)`

Acesse o endereço (neste caso, http://127.0.0.1:8000) indicado através do seu navegador.

### **ATENÇÃO**:

Se você usa o anti-vírus Avast, é muito provável que ele vai achar que o arquivo server.php é uma ameaça e colocar ele em quarentena.

Caso isso ocorra, abra o Avast, acesse a aba Proteção e depois Quarentena. Selecione o server.php na lista, clique nos três pontinhos (Mais Opções) e escolha "Restaurar e adicionar exceção".
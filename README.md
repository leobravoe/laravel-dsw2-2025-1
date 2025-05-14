
1. Clone o repositório:
    ```bash
    git clone https://github.com/leobravoe/laravel-dsw2-2025-1.git
    ```

2. Entre na pasta:
    ```bash
    cd laravel-dsw2-2025-1
    ```

3. Utilize o comando para baixar os pacotes do composer.json:
    ```bash
    composer update
    ```

4. Crie o arquivo .env
    ```bash
    copy .env.example .env
    ```

5. Gere a chave
    ```bash
    php artisan key:generate
    ```

6. Atualize o nome do banco de dados
    ```bash
    Configurar o arquivo .env com o nome da base de dados "restaurantedb_2"
    ```

7. Crie o banco de dados
    ```bash
    php artisan migrate:fresh --seed
    ```

Com o projeto configurado, para atualizar:

1. Reseta para o commit mais atual
    ```bash
    git reset --hard
    ```

2. Baixe a atualização
    ```bash
    git pull
    ```
## API com Laravel 8

Criei uma api completa com Laravel 8 e Mysql com os seguintes itens:

- Criar o Produto por categoria
- Atualizar o produto
- Ver Todos os produtos com paginação
- Ver um produto Específico
- Deletar um produto Específico
- Atualizar a Categoria
- Ver todas as Categoria
- Ver uma Categoria específica
- Deleta uma Categoria

## Autenticação da API Laravel 8

Autenticação da API através de token usando JWT

É necessário criar o token na aplicação para acessar as informação dos produtos e categorias através sutenticados no Header:

- X-Requested-With : XMLHttpRequest

- Content-Type : application/json

- Authorization : token

Exemplo:

- Authorization : Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3Q6ODAwMFwvYXBpXC9hdXRoIiwiaWF0IjoxNjAzNDgxODA3LCJleHAiOjE2MDM0ODU0MDcsIm5iZiI6MTYwMzQ4MTgwNywianRpIjoiZ0F2V2lhTDdtRkRBNGpxZCIsInN1YiI6MSwicHJ2IjoiMjNiZDVjODk0OWY2MDBhZGIzOWU3MDFjNDAwODcyZGI3YTU5NzZmNyJ9.MW7sFBXJkhtJbJKvIPU-hIyApiI2FFvEDlsn2FvCXDQ
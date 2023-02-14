CREATE DATABASE banco_de_testes CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;





CREATE TABLE tbl_produto (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nome VARCHAR(100) NOT NULL,
  descricao TEXT NOT NULL,
  preco FLOAT NOT NULL,
  preco_promocional FLOAT,
  quantidade INT NOT NULL,
  imagem VARCHAR(255),
  tem_cores ENUM('Sim', 'Não') NOT NULL,
  tem_tamanhos ENUM('Sim', 'Não') NOT NULL,
  data_criacao DATETIME DEFAULT CURRENT_TIMESTAMP,
  data_atualizacao DATETIME ON UPDATE CURRENT_TIMESTAMP,
  id_categoria INT NOT NULL,
  FOREIGN KEY (id_categoria) REFERENCES tbl_categoria(id) ON DELETE CASCADE
);

/*
Se você precisa armazenar mais de uma imagem por produto, uma opção é criar uma tabela separada chamada tbl_produto_imagem e 
relacioná-la à tabela tbl_produto com uma chave estrangeira. A tabela tbl_produto_imagem armazenaria as imagens de cada produto 
como registros separados, permitindo que você armazene várias imagens para cada produto. Aqui está um exemplo de como fazer isso:
*/

CREATE TABLE tbl_produto_imagem (
  id INT AUTO_INCREMENT PRIMARY KEY,
  id_produto INT NOT NULL,
  caminho VARCHAR(255) NOT NULL,
  FOREIGN KEY (id_produto) REFERENCES tbl_produto(id) ON DELETE CASCADE
);


/*
A coluna id_produto na tabela tbl_produto_imagem é uma chave estrangeira que se refere à coluna id na tabela tbl_produto. 
A opção ON DELETE CASCADE significa que, se um produto for excluído da tabela tbl_produto, todas as imagens associadas a ele na 
tabela tbl_produto_imagem também serão excluídas. Isso garante a consistência dos dados na base de dados. A coluna caminho armazenará o caminho de cada imagem.
*/
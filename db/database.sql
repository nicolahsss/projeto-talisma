CREATE DATABASE banco_de_testes CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;


CREATE TABLE tbl_categoria (
  categoria_id INT AUTO_INCREMENT PRIMARY KEY,
  nome VARCHAR(100) NOT NULL,
  descricao TEXT,
  imagem VARCHAR(110)
)DEFAULT CHARSET=utf8mb4;


CREATE TABLE tbl_produto (
  produto_id INT AUTO_INCREMENT PRIMARY KEY,
  nome VARCHAR(100) NOT NULL,
  descricao TEXT NOT NULL,
  custo DECIMAL(10,2) NOT NULL,
  preco DECIMAL(10,2) NOT NULL,
  preco_promocional DECIMAL(10,2) NULL,
  quantidade INT NOT NULL,
  imagem VARCHAR(255),
  tem_cores ENUM('Sim', 'Não') NOT NULL,
  tem_tamanhos ENUM('Sim', 'Não') NOT NULL,
  data_criacao DATETIME DEFAULT CURRENT_TIMESTAMP,
  data_atualizacao DATETIME ON UPDATE CURRENT_TIMESTAMP,
  categoria_id INT NOT NULL,
  FOREIGN KEY (categoria_id) REFERENCES tbl_categoria(categoria_id) ON DELETE CASCADE
)DEFAULT CHARSET=utf8mb4;


CREATE TABLE tbl_produto_imagem (
  id INT AUTO_INCREMENT PRIMARY KEY,
  produto_id INT NOT NULL,
  imagem_prod VARCHAR(110) NOT NULL,
  FOREIGN KEY (produto_id) REFERENCES tbl_produto(produto_id) ON DELETE CASCADE
)DEFAULT CHARSET=utf8mb4;


CREATE TABLE tbl_cores (
  cor_id INT AUTO_INCREMENT PRIMARY KEY,
  nome_cor VARCHAR(50) NOT NULL,
  codigo_barras VARCHAR(20) NOT NULL,
  codigo_hex VARCHAR(7) NOT NULL,
  produto_id INT NOT NULL,
  FOREIGN KEY (produto_id) REFERENCES tbl_produtos (produto_id)
)DEFAULT CHARSET=utf8mb4;


CREATE TABLE tbl_tamanhos (
  tamanho_id INT AUTO_INCREMENT PRIMARY KEY,
  nome_tamanho VARCHAR(24) NOT NULL,
  codigo_barras VARCHAR(20) NOT NULL,
  produto_id INT NOT NULL,
  FOREIGN KEY (produto_id) REFERENCES tbl_produtos (produto_id)
)DEFAULT CHARSET=utf8mb4;



CREATE TABLE tbl_usuario (
  usuario_id INT AUTO_INCREMENT PRIMARY KEY,
  nome VARCHAR(100) NOT NULL,
  sobrenome VARCHAR(100) NOT NULL,
  tipo_cadastro ENUM ("Pessoa Fisica", "Pessoa Juridica") NOT NULL DEFAULT 'Pessoa Fisica',
  num_cpf VARCHAR(14) UNIQUE NOT NULL,
  email VARCHAR(100) NOT NULL UNIQUE,
  genero ENUM ("Homem", "Mulher", "Outros") NOT NULL,
  senha VARCHAR(8) NOT NULL,
  tipo ENUM ('ADMIN', 'COMUM') NOT NULL DEFAULT 'COMUM',
  telefone VARCHAR(15) NOT NULL,
  pais VARCHAR(80) NOT NULL,
  nome_rua VARCHAR(100) NOT NULL,
  num_casa VARCHAR(10) NOT NULL,
  nome_bairro VARCHAR(80) NOT NULL,
  cidade VARCHAR(100) NOT NULL,
  estado VARCHAR(100) NOT NULL,
  cep VARCHAR(10) NOT NULL,
  data_cadastro DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP
)DEFAULT CHARSET=utf8mb4;


CREATE TABLE tbl_carrinho (
  carrinho_id INT AUTO_INCREMENT PRIMARY KEY,
  usuario_id INT NOT NULL,
  produto_id INT NOT NULL,
  quantidade INT NOT NULL,
  subtotal DECIMAL(10,2) NOT NULL,
  data_adicao DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  FOREIGN KEY (usuario_id) REFERENCES tbl_usuario(usuario_id),
  FOREIGN KEY (produto_id) REFERENCES tbl_produto(produto_id)
)DEFAULT CHARSET=utf8mb4;


CREATE TABLE tbl_lista_desejos (
  lista_id INT AUTO_INCREMENT PRIMARY KEY,
  usuario_id INT NOT NULL,
  produto_id INT NOT NULL,
  data_adicao DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  FOREIGN KEY (usuario_id) REFERENCES tbl_usuario(usuario_id),
  FOREIGN KEY (produto_id) REFERENCES tbl_produto(produto_id)
)DEFAULT CHARSET=utf8mb4;


CREATE TABLE tbl_promocao (
  promocao_id INT AUTO_INCREMENT PRIMARY KEY,
  banner_url VARCHAR(110) NOT NULL,
  data_inicio DATETIME NOT NULL,
  data_fim DATETIME NOT NULL,
  descricao TEXT NOT NULL,
  ativo BOOLEAN NOT NULL DEFAULT true
)DEFAULT CHARSET=utf8mb4;


CREATE TABLE tbl_promocao_produto (
  promocao_id INT NOT NULL,
  produto_id INT NOT NULL,
  desconto INT NOT NULL,
  PRIMARY KEY (promocao_id, produto_id),
  FOREIGN KEY (promocao_id) REFERENCES tbl_promocao(promocao_id),
  FOREIGN KEY (produto_id) REFERENCES tbl_produto(produto_id)
)DEFAULT CHARSET=utf8mb4;


CREATE TABLE tbl_pedido (
  pedido_id INT AUTO_INCREMENT PRIMARY KEY,
  usuario_id INT NOT NULL,
  logradouro VARCHAR(80) NOT NULL,
  num_casa VARCHAR(10) NOT NULL,
  num_cep VARCHAR(8) NOT NULL,
  estado VARCHAR(80) NOT NULL,
  pais VARCHAR(80) NOT NULL,
  tipo_endereco ENUM ("Residencial", "Comercial") NOT NULL DEFAULT 'Residencial',
  valor_total DECIMAL(10, 2) NOT NULL,
  forma_pagamento ENUM('CARTAO', 'BOLETO', 'TRANSFERENCIA', 'NO LOCAL', 'CHEQUE', 'EM ESPECIE') NOT NULL,
  status_pagamento ENUM('PENDENTE','CONCLUIDO','CANCELADO') NOT NULL DEFAULT 'PENDENTE',
  data_pedido DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  codigo_rastreio VARCHAR(50),
  status_pedido ENUM('PENDENTE', 'DESPACHADO', 'A CAMINHO','ENTREGUE', 'CANCELADO') NOT NULL DEFAULT 'PENDENTE'
)DEFAULT CHARSET=utf8mb4;


CREATE TABLE tbl_pedido_item (
  pedido_id INT NOT NULL,
  produto_id INT NOT NULL,
  quantidade INT NOT NULL,
  preco_unitario DECIMAL(10, 2) NOT NULL,
  PRIMARY KEY (pedido_id, produto_id),
  FOREIGN KEY (pedido_id) REFERENCES tbl_pedido(pedido_id),
  FOREIGN KEY (produto_id) REFERENCES tbl_produto(produto_id)
)DEFAULT CHARSET=utf8mb4;


CREATE TABLE tbl_vendedor (
  vendedor_id INT AUTO_INCREMENT PRIMARY KEY,
  nome VARCHAR(100) NOT NULL,
  sobrenome VARCHAR(100) NOT NULL,
  email VARCHAR(100) NOT NULL UNIQUE,
  telefone VARCHAR(15) NOT NULL,
  cpf VARCHAR(11) NULL UNIQUE,
  avaliacoes INT NOT NULL DEFAULT 0,
  ativo BOOLEAN NOT NULL DEFAULT true,
  foto_perfil VARCHAR(255) DEFAULT 'default.jpg'
)DEFAULT CHARSET=utf8mb4;


CREATE TABLE tbl_avaliacao (
  avaliacao_id INT AUTO_INCREMENT PRIMARY KEY,
  produto_id INT NOT NULL,
  usuario_id INT NOT NULL,
  nota DECIMAL(2,1) NOT NULL,
  comentario TEXT,
  tem_imagem ENUM ("Sim", "Nao") NOT NULL DEFAULT 'Nao',
  data_avaliacao DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  FOREIGN KEY (produto_id) REFERENCES tbl_produto(produto_id),
  FOREIGN KEY (usuario_id) REFERENCES tbl_usuario(usuario_id)
)DEFAULT CHARSET=utf8mb4;


CREATE TABLE tbl_imagem_avaliacao (
  imagem_avaliacao_id INT AUTO_INCREMENT PRIMARY KEY,
  avaliacao_id INT NOT NULL,
  imagem VARCHAR(110) NOT NULL,
  FOREIGN KEY (avaliacao_id) REFERENCES tbl_avaliacao(avaliacao_id)
)DEFAULT CHARSET=utf8mb4;


CREATE TABLE tbl_beneficios (
  id_beneficio INT AUTO_INCREMENT PRIMARY KEY,
  usuario_id INT NOT NULL,
  tipo_beneficio VARCHAR(100) NOT NULL,
  data_inicio DATE NOT NULL,
  data_fim DATE NOT NULL,
  descricao TEXT,
  FOREIGN KEY (usuario_id) REFERENCES tbl_usuario(usuario_id)
) DEFAULT CHARSET=utf8mb4;
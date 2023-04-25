CREATE DATABASE banco_de_testes CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;


CREATE TABLE tbl_categoria (
  categoria_id INT AUTO_INCREMENT PRIMARY KEY,
  nome VARCHAR(100) NOT NULL,
  descricao TEXT,
  imagem VARCHAR(110)
)DEFAULT CHARSET=utf8mb4;

/* Categorias de teste */

INSERT INTO tbl_categoria (nome, descricao, imagem) VALUES ('categoria01','categoria para produtos 01','adesivo.png');
INSERT INTO tbl_categoria (nome, descricao, imagem) VALUES ('categoria02','categoria para produtos 02','adesivo.png');
INSERT INTO tbl_categoria (nome, descricao, imagem) VALUES ('categoria03','categoria para produtos 03','adesivo.png');
INSERT INTO tbl_categoria (nome, descricao, imagem) VALUES ('categoria04','categoria para produtos 04','adesivo.png');
INSERT INTO tbl_categoria (nome, descricao, imagem) VALUES ('categoria05','categoria para produtos 05','adesivo.png');
INSERT INTO tbl_categoria (nome, descricao, imagem) VALUES ('categoria06','categoria para produtos 06','adesivo.png');
INSERT INTO tbl_categoria (nome, descricao, imagem) VALUES ('categoria07','categoria para produtos 07','adesivo.png');

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

/* Produtos de teste */

INSERT INTO tbl_produto (nome, descricao, custo, preco, preco_promocional, quantidade, imagem, tem_cores, tem_tamanhos, categoria_id) 
VALUES ('Produto 01 teste','Introduzindo o SmartWatch 3000 - o relógio inteligente mais avançado do mercado! Com uma tela OLED de alta definição e sensível ao toque, este relógio não só exibe as horas, mas também monitora sua saúde e fitness, controla sua música, recebe notificações de mensagens e muito mais! Com seu design elegante e moderno, o SmartWatch 3000 é a escolha perfeita para os entusiastas da tecnologia que desejam adicionar um toque futurista ao seu estilo de vida diário.','80','189,99','165,99','15','balcao.jpg','Não','Não','2');
INSERT INTO tbl_produto (nome, descricao, custo, preco, preco_promocional, quantidade, imagem, tem_cores, tem_tamanhos, categoria_id)
VALUES ('Produto 01 teste','Introduzindo o SmartWatch 3000 - o relógio inteligente mais avançado do mercado! Com uma tela OLED de alta definição e sensível ao toque, este relógio não só exibe as horas, mas também monitora sua saúde e fitness, controla sua música, recebe notificações de mensagens e muito mais! Com seu design elegante e moderno, o SmartWatch 3000 é a escolha perfeita para os entusiastas da tecnologia que desejam adicionar um toque futurista ao seu estilo de vida diário.','39,99','110,99','99,99','8','adesivo.png','Não','Não','1');
INSERT INTO tbl_produto (nome, descricao, custo, preco, preco_promocional, quantidade, imagem, tem_cores, tem_tamanhos, categoria_id)
VALUES ('Produto 01 teste','Introduzindo o SmartWatch 3000 - o relógio inteligente mais avançado do mercado! Com uma tela OLED de alta definição e sensível ao toque, este relógio não só exibe as horas, mas também monitora sua saúde e fitness, controla sua música, recebe notificações de mensagens e muito mais! Com seu design elegante e moderno, o SmartWatch 3000 é a escolha perfeita para os entusiastas da tecnologia que desejam adicionar um toque futurista ao seu estilo de vida diário.','49,99','92,99','85','30','aplicador.jpg','Não','Não','3');
INSERT INTO tbl_produto (nome, descricao, custo, preco, preco_promocional, quantidade, imagem, tem_cores, tem_tamanhos, categoria_id)
VALUES ('Produto 01 teste','Introduzindo o SmartWatch 3000 - o relógio inteligente mais avançado do mercado! Com uma tela OLED de alta definição e sensível ao toque, este relógio não só exibe as horas, mas também monitora sua saúde e fitness, controla sua música, recebe notificações de mensagens e muito mais! Com seu design elegante e moderno, o SmartWatch 3000 é a escolha perfeita para os entusiastas da tecnologia que desejam adicionar um toque futurista ao seu estilo de vida diário.','99,99','179,99','165,99','15','cadeira.jpg','Não','Não','3');
INSERT INTO tbl_produto (nome, descricao, custo, preco, preco_promocional, quantidade, imagem, tem_cores, tem_tamanhos, categoria_id)
VALUES ('Produto 01 teste','Introduzindo o SmartWatch 3000 - o relógio inteligente mais avançado do mercado! Com uma tela OLED de alta definição e sensível ao toque, este relógio não só exibe as horas, mas também monitora sua saúde e fitness, controla sua música, recebe notificações de mensagens e muito mais! Com seu design elegante e moderno, o SmartWatch 3000 é a escolha perfeita para os entusiastas da tecnologia que desejam adicionar um toque futurista ao seu estilo de vida diário.','32,99','85','70','5','caixa.jpg','Não','Não','1');
INSERT INTO tbl_produto (nome, descricao, custo, preco, preco_promocional, quantidade, imagem, tem_cores, tem_tamanhos, categoria_id)
VALUES ('Produto 01 teste','Introduzindo o SmartWatch 3000 - o relógio inteligente mais avançado do mercado! Com uma tela OLED de alta definição e sensível ao toque, este relógio não só exibe as horas, mas também monitora sua saúde e fitness, controla sua música, recebe notificações de mensagens e muito mais! Com seu design elegante e moderno, o SmartWatch 3000 é a escolha perfeita para os entusiastas da tecnologia que desejam adicionar um toque futurista ao seu estilo de vida diário.','556,99','999,99','850','3','armario-aj-rorato.jpg','Não','Não','2');


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
  FOREIGN KEY (produto_id) REFERENCES tbl_produto(produto_id)
)DEFAULT CHARSET=utf8mb4;


CREATE TABLE tbl_tamanhos (
  tamanho_id INT AUTO_INCREMENT PRIMARY KEY,
  nome_tamanho VARCHAR(24) NOT NULL,
  codigo_barras VARCHAR(20) NOT NULL,
  produto_id INT NOT NULL,
  FOREIGN KEY (produto_id) REFERENCES tbl_produto(produto_id)
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

INSERT INTO tbl_usuario (nome, sobrenome, tipo_cadastro, num_cpf, email, genero, senha, tipo, telefone, pais, nome_rua, num_casa, nome_bairro, cidade, estado, cep) 
VALUES ('Matheus','Brandão','Pessoa Fisica','00000000000','mafe123silva@gmail.com','Homem','exagon10','ADMIN','993203891','Brasil','Rua 01','00','São Francisco','São Francisco','Rondonia','76935000');


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
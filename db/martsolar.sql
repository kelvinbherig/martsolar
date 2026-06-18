CREATE TABLE admintrar (    
    id INT AUTO_INCREMENT PRIMARY KEY,    
    nome VARCHAR(100),    
    email VARCHAR(150) UNIQUE,    
    senha VARCHAR(255),    
    criado_em TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE cliente (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(150),
    telefone VARCHAR(20),
    email VARCHAR(150),
    cidade VARCHAR(100),
    estado VARCHAR(50),
    criado_em TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE kits (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(150),
    descricao TEXT,
    potencia VARCHAR(50),
    preco DECIMAL(10,2),
    imagem VARCHAR(255),
    ativo TINYINT DEFAULT 1
);

CREATE TABLE pedidos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    cliente_id INT,
    kit_id INT,
    valor DECIMAL(10,2),
    status VARCHAR(50),
    pagamento_id VARCHAR(100),
    criado_em TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
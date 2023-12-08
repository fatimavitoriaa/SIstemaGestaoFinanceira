CREATE TABLE usuario (
  id INT NOT NULL AUTO_INCREMENT,
  nome VARCHAR(255) NOT NULL,
  email VARCHAR(255) NOT NULL,
  cpf VARCHAR(11) NOT NULL,
  senha VARCHAR(255) NOT NULL,
  PRIMARY KEY (id)
);


CREATE TABLE telefone (
id INTEGER NOT NULL AUTO_INCREMENT,
numero VARCHAR(11) NOT NULL,
usuario_id INT NOT NULL,
PRIMARY KEY (id),
FOREIGN KEY (usuario_id) REFERENCES usuario (id)
);

CREATE TABLE carteira (
  id INT NOT NULL AUTO_INCREMENT,
  nome VARCHAR(255) NOT NULL,
  descricao VARCHAR(255) NULL,
  usuario_id INT NOT NULL,
  PRIMARY KEY (id),
  FOREIGN KEY (usuario_id) REFERENCES usuario (id)
);

CREATE TABLE transacao (
  id INT NOT NULL AUTO_INCREMENT,
  tipo ENUM('Despesa', 'Receita') NOT NULL,
  categoria VARCHAR(255) NOT NULL,
  valor DECIMAL(10,2) NOT NULL,
  datat DATE NOT NULL,
  descricao VARCHAR(255) NULL,
  carteira_id INT NOT NULL,
  PRIMARY KEY (id),
  FOREIGN KEY (carteira_id) REFERENCES carteira (id)
);


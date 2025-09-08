CREATE DATABASE tarea4;

USE tarea4;
CREATE TABLE categorias (
    idcategoria INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL
);

INSERT INTO categorias (nombre) VALUES
('Matemáticas'),
('Comunicación'),
('Computación');

SELECT*FROM categorias;

CREATE TABLE subcategorias (
    idsubcategoria INT AUTO_INCREMENT PRIMARY KEY,
    idcategoria INT NOT NULL,
    nombre VARCHAR(150) NOT NULL,
    FOREIGN KEY (idcategoria) REFERENCES categorias(idcategoria)
);

INSERT INTO subcategorias (idcategoria, nombre) VALUES
-- Matemáticas
(1, 'Razonamiento Lógico Matemático'),
(1, 'Álgebra'),
(1, 'Trigonometría'),

-- Comunicación
(2, 'Razonamiento Verbal'),
(2, 'Composición'),
(2, 'Redacción'),

-- Computación
(3, 'Base de Datos'),
(3, 'Sistemas Operativos'),
(3, 'Lenguajes de Programación');


CREATE TABLE editoriales (
    ideditorial INT AUTO_INCREMENT PRIMARY KEY,
    empresa VARCHAR(150) NOT NULL,
    nacionalidad VARCHAR(100) NOT NULL
);

INSERT INTO editoriales (empresa, nacionalidad) VALUES
('Pearson', 'Inglés'),
('McGraw Hill', 'Estadounidense'),
('Santillana', 'Española');



CREATE TABLE recursos (
    idrecurso INT AUTO_INCREMENT PRIMARY KEY,
    idsubcategoria INT NOT NULL,
    ideditorial INT NOT NULL,
    tipo ENUM('FISICO','DIGITAL') NOT NULL,
    titulo VARCHAR(200) NOT NULL,
    apublicacion YEAR NOT NULL,
    isbn VARCHAR(30) UNIQUE,
    numpaginas INT,
    rutaportada VARCHAR(255),
    rutarecurso VARCHAR(255),
    estado ENUM('BUENO','REGULAR','MALO') NOT NULL,
    creado TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    modificado TIMESTAMP NULL DEFAULT NULL,
    FOREIGN KEY (idsubcategoria) REFERENCES subcategorias(idsubcategoria),
    FOREIGN KEY (ideditorial) REFERENCES editoriales(ideditorial)
);


CREATE VIEW vista_recursos AS
SELECT 
    r.idrecurso,
    r.titulo,
    r.tipo,
    r.apublicacion,
    r.isbn,
    r.numpaginas,
    r.rutaportada,
    r.rutarecurso,
    r.estado,
    r.creado,
    r.modificado,
    sc.nombre AS subcategoria,
    c.nombre AS categoria,
    e.empresa AS editorial,
    e.nacionalidad
FROM recursos r
INNER JOIN subcategorias sc ON r.idsubcategoria = sc.idsubcategoria
INNER JOIN categorias c ON sc.idcategoria = c.idcategoria
INNER JOIN editoriales e ON r.ideditorial = e.ideditorial;

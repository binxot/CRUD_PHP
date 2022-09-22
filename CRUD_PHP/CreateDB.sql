CREATE TABLE Departamentos (
	departamento INT(11) NOT NULL AUTO_INCREMENT,
	nombre varchar(30),
	edificio varchar(20),
	gasto DECIMAL(8,2) NULL,
	presupuesto DECIMAL(8,2) NULL,
	CONSTRAINT PRIMARY KEY (departamento)
);

CREATE TABLE Profesores (
	numPro INT(11) NOT NULL AUTO_INCREMENT, 
	nombre varchar(30),
	edad INT(2) NULL,
	departamento INT(11) NULL,
	CONSTRAINT PRIMARY KEY (numPro),
	CONSTRAINT FOREIGN KEY (departamento) REFERENCES Departamentos(departamento)
);


INSERT INTO Departamentos(nombre, edificio, gasto, presupuesto) VALUES 
  ('Biología','sur', 575, 600),
  ('Matemáticas','oeste', 800, 1200),
  ('Economía','este', 3500, 3680),
  ('Física y química','oeste', 725, 836),
  ('Lengua','norte', 108, 1860),
  ('Sociales','sur', 450, 450),
  ('Informática','sur', 2000, 15000),
  ('Dibujo','sur', 100, 200),
  ('Electrónica','este', 900, 900);
 
INSERT INTO Profesores(nombre, edad, departamento) VALUES 
  ('Antonio Viguer', 45, 1),
  ('Alvaro Aluminio', 48, 2),
  ('Francisco Frio', 29, 3),
  ('José González', 33, 3),
  ('Vicente Vino', 37, 4),
  ('Luis León', 52, 4),
  ('Jorge Gutiérrez', 49, 5),
  ('Ana Bustamante', 62, 5),
  ('María Melocotón', 31, null),
  ('Veronica Vic', 41, null);
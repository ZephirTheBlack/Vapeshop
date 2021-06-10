CREATE DATABASE vapeshop;  

USE vapeshop;

CREATE TABLE usuarios(
    id_usuario INT NOT NULL AUTO_INCREMENT,
    usuario VARCHAR(20) NOT NULL,
    contrasena VARCHAR(40) NOT NULL,
    permisos VARCHAR(20) NOT NULL,
    direccion VARCHAR(50),
    email VARCHAR(20),
    nombre VARCHAR(50),
    apellidos VARCHAR(50),
    imagen TEXT,
    PRIMARY KEY(id_usuario)
)ENGINE=innodb; 

CREATE TABLE categorias(
    id_categoria INT NOT NULL AUTO_INCREMENT,
    nombre VARCHAR(20) NOT NULL,
    descripcion VARCHAR(200),
    PRIMARY KEY(id_categoria)
)ENGINE=innodb; 

CREATE TABLE productos(
    id_producto INT NOT NULL AUTO_INCREMENT,
    nombre VARCHAR(20) NOT NULL,
    marca VARCHAR(20) NOT NULL,
    tipo VARCHAR (15) NOT NULL,
    descripcion VARCHAR(500),
    precio DECIMAL(6, 2),
    stock DECIMAL not NULL,
    id_categoria INT,
    imagen_producto TEXT,
    FOREIGN KEY(id_categoria) REFERENCES categorias(id_categoria),
    PRIMARY KEY(id_producto)
)ENGINE=innodb; 

create table comprar(
    id_compra INT NOT NULL AUTO_INCREMENT,
    total DECIMAL(6, 2) NOT NULL,
    factura VARCHAR(200),
    id_usuario INT,
    id_producto INT,
    PRIMARY KEY(id_compra),
    FOREIGN KEY(id_usuario) REFERENCES usuarios(id_usuario),
    FOREIGN KEY(id_producto) REFERENCES productos(id_producto)
)ENGINE=innodb;


/*usuarios*/
INSERT INTO `vapeshop`.`usuarios` (`id_usuario`,`usuario`,`contrasena`,`permisos`)VALUES (default,'antonio','81dc9bdb52d04dc20036dbd8313ed055','usuario'); /*1234*/
INSERT INTO `vapeshop`.`usuarios` (`id_usuario`,`usuario`,`contrasena`,`permisos`)VALUES (default,'juan','674f3c2c1a8a6f90461e8a66fb5550ba','usuario'); /*5678*/
INSERT INTO `vapeshop`.`usuarios` (`id_usuario`,`usuario`,`contrasena`,`permisos`)VALUES (default,'marcos','d93591bdf7860e1e4ee2fca799911215','administrador'); /*4321*/

/*productos*/
INSERT INTO `vapeshop`.`productos` (`id_producto`,`nombre`,`marca`,`tipo`,`descripcion`,`precio`,`imagen_producto`) VALUES (default,'Minikin Reborn 168W','asmodus','mecanico','Asmodus nos presenta el superventas Minikin pero con nuevas caracteristicas y mejores prestaciones.
Se ha aumentado el tamaño de la pantalla Oled e intriduce una tapa con cierre magnetico para las baterias.
Utiliza el Chip GX-168-HT los que nos ofrece na potencia de 168W.','73,99','./imgproductos/Minikin-reborn-2T_large.jpg');
INSERT INTO `vapeshop`.`productos` (`id_producto`,`nombre`,`marca`,`tipo`,`descripcion`,`precio`,`imagen_producto`) VALUES (default,'Alien baby Mod 85W','smok','electronico','Con un diseño deportivo que lo hace unico, Smok nos presenta el Alien Mod, con 85w de potencia
Muy compacto cabe en la palma de la mano
Funciona con 1 bateria de 18650, que no esta incluida, recordar siempre que sean de Alto Amperaje, como minimo 25A.','44,99','./imgproductos/al_85_single_1024x1024.jpg');
INSERT INTO `vapeshop`.`productos` (`id_producto`,`nombre`,`marca`,`tipo`,`descripcion`,`precio`,`imagen_producto`) VALUES (default,'Mod Captain PD270','ijoy','bottom feeder','Mod de Ijoy, el Captain PD1865 que alcanza una potencia de 234W y funciona con 2 baterias de 20700  o 2 18650 con adaptador.
Tamaño compacto y aun asi le valen hasta Atomizadores de 30mm.','65,90','./imgproductos/captain-pd270-ijoy.jpg');
INSERT INTO `vapeshop`.`productos` (`id_producto`,`nombre`,`marca`,`tipo`,`descripcion`,`precio`,`imagen_producto`) VALUES (default,'Revenger 220W','vaporesso','electronico','MOD Revenger 220W de Vaporesso. MOD de gran potencia, con una gran estabilidad y consistencia en la entrega de potencia. Incluye función ECA que ofrece una manera precisa conocer el tiempo de carga.','53,95','./imgproductos/revenger_mod_grande.jpg');
INSERT INTO `vapeshop`.`productos` (`id_producto`,`nombre`,`marca`,`tipo`,`descripcion`,`precio`,`imagen_producto`) VALUES (default,'Drag Mod 157W','voopoo','bottom feeder','Es uno de los mas rapidos en transmitir a potencia al atomizador.
El Drag 157W TC Box se puede utilizar con modo de vataje variable o en modo de control de temperatura (SS, NI, TI，NC, TCR, CCR).
El mod cuenta con una pantalla OLED y un puerto microUSB.','59,95','./imgproductos/Drag-Mod-Black-Red-Turquoise.jpg');
use inventario;

create table usuarios
(
    u_id int(10) not null auto_increment primary key,
    u_nombre varchar(40) not null,
    u_apellido varchar(40) not null,
    u_usuario varchar(20) not null,
    u_clave varchar(200) not null,
    u_email varchar(70) not null
);

create table categoria
(
    c_id int(7) not null auto_increment primary key,
    c_nombre varchar(50) not null,
    c_ubicacion varchar(150) not null
);

create table producto 
(
    p_id int(20) not null auto_increment primary key,
    p_codigo varchar(70) not null,
    p_nombre varchar(70) not null,
    p_precio decimal(30,2) not null,
    p_stock int(25) not null,
    p_foto varchar(500) not null,
    p_categoria_id int(7) not null,
    p_usuario_id int(10) not null
);

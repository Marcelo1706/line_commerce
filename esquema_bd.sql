CREATE DATABASE line_commerce; 
USE line_commerce;

CREATE TABLE administrador(
    usuario varchar(50) not null unique,
    clave varchar(250) not null,
    primary key pk_admin(usuario)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE vendedor(
    usuario varchar(50) not null unique,
    clave varchar(250) not null,
    nombre_negocio varchar(100) not null,
    descripcion varchar(500) not null,
    correo_electronico varchar(250) not null,
    direccion varchar(500) not null,
    telefono varchar(20) not null,
    foto_perfil varchar(255) not null,
    primary key pk_vendedor(usuario)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE cliente(
    usuario varchar(50) not null unique,
    clave varchar(250) not null,
    correo_electronico varchar(250) not null,
    nombre varchar(100) not null,
    apellido varchar(100) not null, 
    tipo_identificacion int(11) not null, 
    num_identificacion varchar(25) not null,
    telefono varchar(20) not null,
    verificacion tinyint not null,
    foto_perfil varchar(255) not null,
    foto_verificacion varchar(255) not null,
    primary key pk_cliente(usuario)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE categoria(
    id_categoria int(11) not null auto_increment, 
    nombre varchar(50) not null,
    descripcion varchar(100) not null, 
    icono_categoria varchar(255) not null,
    popularidad int(11) not null,
    primary key pk_categoria(id_categoria)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE sub_categoria(
    id_subcategoria int(11) not null auto_increment,
    nombre varchar(50) not null,
    descripcion varchar(100) not null,
    icono_sub varchar(255) not null, 
    id_categoria int(11) not null, 
    primary key pk_sub(id_subcategoria),
    foreign key fk_categoria(id_categoria) REFERENCES categoria(id_categoria)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE producto(
    id_producto int(11) not null auto_increment,
    nombre varchar(100) not null,
    descripcion varchar(500) not null,
    precio decimal(15,2) not null, 
    stock int(11) not null,
    imagen varchar(255) not null,
    vendedor int(11) not null,
    id_sub int(11) not null,
    creado datetime not null default NOW(),
    modificado datetime not null default NOW(),
    primary key pk_producto(id_producto),
    foreign key fk_vendedor(vendedor) references vendedor(usuario),
    foreign key fk_sub(id_sub) references sub_categoria(id_subcategoria)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE pedido (
    id_pedido int(11) not null auto_increment,
    comprador int(11) not null,
    fecha date not null,
    estado tinyint not null, 
    primary key pk_pedido(id_pedido),
    foreign key fk_cliente(comprador) references cliente(usuario)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE productosXpedido (
    id_prodXpedido int(11) not null,
    id_pedido int(11) not null,
    id_producto int(11) not null,
    cantidad int(11) not null,
    estado tinyint not null,
    primary key pk_prodXped(id_prodXpedido),
    foreign key fk_pedido(id_pedido) references pedido(id_pedido),
    foreign key fk_producto(id_producto) references producto(id_producto)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE mensajes (
    id_mensaje int(11) not null,
    emisor varchar(50) not null,
    receptor varchar(50) not null,
    contenido varchar(500) not null,
    estado tinyint not null,
    primary key pk_mensaje(id_mensaje)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;
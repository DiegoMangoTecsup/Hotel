create database crud1;
use crud1;
create table persona(
    id int auto_increment primary key,
    nombres varchar(100),
    apellido_paterno varchar(100),
    apellido_materno varchar(100),
    fecha_nacimiento date,
    celular varchar(12)
);

create table tiposhabitacion(
	id int auto_increment primary key,
    tipo varchar(20),
    descripcion varchar(100)
);

create table habitacion(
    id int auto_increment primary key,
    capacidad int not null,
    tipohabitacion_id int not null
);

CREATE TABLE reserva (
	id int not NULL auto_increment,
    diain varchar(200) default NULL,
    diafin varchar(200) default null,
    id_persona int not null,
    id_habitacion int not null,
    primary key (id),
    key fk_reserva_1_idx (id_persona),
    constraint fk_reserva_1 foreign key (id_persona) references persona(id),
    key fk_reserva_2_idx (id_habitacion),
    constraint fk_reserva_2 foreign key (id_habitacion) references habitacion(id)
);
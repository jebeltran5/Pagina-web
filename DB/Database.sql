CREATE DATABASE acme;

create TABLE  personas(
   numero_cedula int NOT NULL PRIMARY KEY,
   primer_nombre varchar(50) NOT NULL,
   segundo_nombre varchar(50),
   apellido varchar(150) NOT NULL,
   direccion varchar(100) NOT NULL,
   telefono int NOT NULL,
   ciudad varchar(50) NOT NULL
  )
create TABLE  vehiculos(
   placa int NOT NULL PRIMARY KEY,
   color(50) NOT NULL,
   marcar varchar(50),
   tipo_vehiculo (150) NOT NULL,
   id_conductor int NOT NULL,
   id_propietario int NOT NULL,
  )
create TABLE tipos(
  id int not null primary key,
  name varchar(50) not null
)

insert into tipos values (1, 'propietario');
insert into tipos values (2, 'conductor');


create table personas_tipos(
      id_persona int NOT NULL,
      id_tipo int NOT NULL
)

alter table personas_tipos
add foreign key (id_persona) references personas(numero_cedula);

alter table personas_tipos
add foreign key (id_tipo) references tipos(id);

alter table vehiculos 
add foreign key (id_conductor) references personas(numero_cedula);


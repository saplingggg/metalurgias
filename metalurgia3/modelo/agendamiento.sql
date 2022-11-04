create database agendamiento;
use agendamiento;



create table Rol(
idRol int primary key,
descripcionRol varchar(30),
estadoRol varchar(20)
);

insert into Rol values (5,'admin','activo');
insert into Rol values (4,'cliente','activo');


select*from Rol;

create table Usuario(
idUsuario int primary key,
correousuario varchar(50) not null,
contraseñausuario varchar(20) not null,
estadousuario int,
idRolFK int not null,
foreign key (idRolFK) references Rol (idROl)
);

---- CRUD INGRESAR , CONSULTAS ACTUALIZAR Y ELIMINA ---

insert into Usuario values (1,'m@gmail.com','123','activo',4);
insert into Usuario values (6,'luis@gmail.com','987','activo',4);
insert into Usuario values (7,'norma@gmail.com','123','activo',5); 
--- consulta general ---
select *from Usuario;

--- consulta especifica --

select descripcionUsuario from Usuario;

--- actualizacion ----
update Uauario set descripcionUsuario='Cliente' where idUsuario='12';


--- eliminar ---
DELETE FROM rol WHERE idrol = 12;


create table cliente(
idCliente int primary key,
numDOcCliente varchar (15),
tipoDocCliente varchar(20),
nombreCliente varchar(50),
apellidoCliente varchar(50),
direcciondeCliente varchar(50),
telefonoCliente varchar(20),
estadoCliente varchar(20),
idUsuarioFK int,
foreign key (idUsuarioFK) references usuario(idUsuario)
);


create table administradorempleado(
idempleado  int  primary key,
numDocEmpleado varchar(15),
tipoDocEmpleado varchar(20),
nombreEmpleado varchar (50),
apellidoEmpleado varchar(50),
direccionEmpleado varchar(50),
telefonoEmpleado varchar (20),
estadoEmpleado varchar (20),
idUsuarioFK int
);

create table Servicio(
idServicio int primary key,
descripcionServicio varchar(30),
estadoServicio varchar(20)
);
create table cita (
idCita int primary key,
fechaCita date,
horaCita time,
estadoCita varchar(20),
idEmpleadoFK int,
idClienteFK int,
idServicioFK int
);
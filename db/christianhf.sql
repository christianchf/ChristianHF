drop table if exists usuarios cascade;

create table usuarios (
    id       bigserial    constraint pk_usuarios primary key,
    nombre   varchar(15)  not null constraint uq_usuarios_nombre unique,
    password varchar(60)  not null,
    email    varchar(255) not null
);

drop table experiencias cascade;

create table experiencias (
    id           bigserial    constraint pk_experiencias primary key,
    titulo       varchar(150) not null,
    tipo         varchar(25)  not null,
    entidad      varchar(150),
    descripcion  text,
    fecha_inicio date         not null,
    fecha_fin    date         not null
);

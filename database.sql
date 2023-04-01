CREATE
DATABASE COLSTREAM;

USE
COLSTREAM;

create table usuarios
(
    id        int AUTO_INCREMENT primary key,
    nickname  varchar(40) not null,
    email     varchar(30) not null unique,
    passsword varchar(32) not null
);

create table estados
(
    id     int AUTO_INCREMENT primary key,
    nombre varchar(30) not null
);

create table peliculas
(
    id           int AUTO_INCREMENT primary key,
    titulo       varchar(150) not null,
    sinopsis     varchar(300) not null,
    release_date date         not null,
    cover        MEDIUMTEXT   not null,
    url_video    MEDIUMTEXT   not null
);

create table actores
(
    id     int AUTO_INCREMENT primary key,
    nombre varchar(50) not null
);

create table directores
(
    id     int AUTO_INCREMENT primary key,
    nombre varchar(50) not null
);

create table generos
(
    id     int AUTO_INCREMENT primary key,
    nombre varchar(50) not null unique
);

-- Establecer relaciones entre las entidades

create table visualizar
(
    id_usuario  int,
    id_pelicula int,
    PRIMARY KEY (id_usuario, id_pelicula),
    foreign key (id_usuario) references usuarios (id),
    foreign key (id_pelicula) references peliculas (id)
);

create table peliculas_actores
(
    id_actor    int,
    id_pelicula int,
    primary key (id_actor, id_pelicula),
    foreign key (id_actor) references actores (id),
    foreign key (id_pelicula) references peliculas (id)
);

create table peliculas_directores
(
    id_director int,
    id_pelicula int,
    primary key (id_director, id_pelicula),
    foreign key (id_director) references directores (id),
    foreign key (id_pelicula) references peliculas (id)
);

create table peliculas_generos
(
    id_genero   int,
    id_pelicula int,
    primary key (id_genero, id_pelicula),
    foreign key (id_genero) references generos (id),
    foreign key (id_pelicula) references peliculas (id)
);


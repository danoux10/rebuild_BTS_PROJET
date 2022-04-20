drop database rucher;
create database rucher;
use rucher;
create table status(
  status_id int auto_increment primary key not null ,
  status_name varchar(255) not null
);

create table users(
    user_id int auto_increment primary key not null ,
    firstname varchar(255) not null,
    lastname varchar(255) not null,
    mail varchar(255)not null ,
    password varchar(255) not null ,
    status_reference int(255)not null ,
    foreign key (status_reference) references status(status_id)
);

create table rucher_data(
    rucher_id int auto_increment primary key not null,
    rucher_name varchar(255) not null,
    rucher_location varchar(255) not null
);

create table ruche(
    ruche_id int auto_increment primary key not null,
    ruche_value varchar(255) not null,
    ruche_name varchar(255) not null,
    rucher_value int(255),
    rucher_affect boolean not null,
    foreign key (rucher_value) references rucher_data(rucher_id)
);

create table ruche_data(
    auto_data int auto_increment not null primary key,
    temperature_data float,
    humi_data float,
    poids_data float,
    date_data date not null ,
    time_data time not null ,
    data_id int(255)not null
);

INSERT INTO status (status_name) VALUES ('admin');
INSERT INTO status (status_name) VALUES ('user');
insert into users (firstname, lastname, mail, password, status_reference) values ('admin','admin','admin@gmail.com','$2y$10$YQOdVKqgRPLyXRuwnSIViuIRkstebCiJ5tEl9lz7KkhOS/hwv1pw2','1');
insert into users (firstname, lastname, mail, password, status_reference) values ('user','user','user@gmail.com','$2y$10$9maud1QAu3M/HNU4Q8iS7OjE42LOcC63a3bhPtzIb3zxvdxDvaC02','2');



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
    rucher_value int(255) not null,
    foreign key (rucher_value) references rucher_data(rucher_id)
);

create table ruche_data(
    auto_data int auto_increment not null primary key,
    temperature_data int(255) not null,
    humi_data int(255) not null,
    poids_data int(255) not null,
    date_data date not null,
    time_data time not null,
    data_id int(255) not null,
    foreign key (data_id) references ruche(ruche_id)
);

INSERT INTO status (status_name) VALUES ('admin')

drop database rucher
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
    foreign key (rucher_value) references rucher_data(rucher_id)
);

create table ruche_data(
    auto_data int auto_increment not null primary key,
    temperature_data int(255),
    humi_data int(255),
    poids_data int(255),
    date_data date ,
    time_data time ,
    data_id int(255)
);

INSERT INTO status (status_name) VALUES ('admin');
INSERT INTO rucher_data (rucher_name, rucher_location) VALUES ('1','paris')


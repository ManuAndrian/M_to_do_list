CREATE DATABASE to_do_list;
Use to_do_list;


CREATE TABLE Task(
    idTask INT AUTO_INCREMENT PRIMARY KEY,
    Nom VARCHAR(40),
    Desription_t TEXT,
    Priorite INT(40),
    activite VARCHAR(40)
);
CREATE TABLE List_d(
    idList INT AUTO_INCREMENT PRIMARY KEY,
    NomList VARCHAR(40)
);
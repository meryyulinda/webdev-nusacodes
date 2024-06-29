CREATE DATABASE nusacodes;
 
CREATE TABLE `nusacodes`.`user_regist` 
( `id` INT NOT NULL AUTO_INCREMENT ,  
`nama` VARCHAR(100) NOT NULL ,  
`alamat` VARCHAR(100) NOT NULL ,  
`usia` INT NOT NULL ,  
`email` VARCHAR(100) NOT NULL UNIQUE,    
PRIMARY KEY  (`id`)) ENGINE = InnoDB;

INSERT INTO `nusacodes`.`user_regist` (nama, alamat, usia, email) VALUES
('John Doe', 'Jalan Raya No. 123', 30, 'john.doe@example.com'),
('Jane Smith', 'Jalan Mawar No. 456', 25, 'jane.smith@example.com'),
('Michael Johnson', 'Jalan Kenanga No. 789', 35, 'michael.johnson@example.com'),
('Emily Brown', 'Jalan Anggrek No. 1011', 28, 'emily.brown@example.com'),
('David Lee', 'Jalan Melati No. 1213', 32, 'david.lee@example.com'),
('Sarah Garcia', 'Jalan Sakura No. 1415', 27, 'sarah.garcia@example.com'),
('Christopher Martinez', 'Jalan Dahlia No. 1617', 29, 'christopher.martinez@example.com'),
('Amanda Robinson', 'Jalan Tulip No. 1819', 31, 'amanda.robinson@example.com'),
('Matthew Wright', 'Jalan Lily No. 2021', 33, 'matthew.wright@example.com'),
('Jennifer Hill', 'Jalan Kamboja No. 2223', 26, 'jennifer.hill@example.com'),
('Daniel Scott', 'Jalan Anggrek No. 2425', 34, 'daniel.scott@example.com'),
('Jessica Green', 'Jalan Melati No. 2627', 29, 'jessica.green@example.com'),
('Kevin Adams', 'Jalan Sakura No. 2829', 31, 'kevin.adams@example.com'),
('Laura Baker', 'Jalan Tulip No. 3031', 28, 'laura.baker@example.com'),
('Andrew Ross', 'Jalan Mawar No. 3233', 30, 'andrew.ross@example.com'),
('Melissa Turner', 'Jalan Raya No. 3435', 32, 'melissa.turner@example.com'),
('Brian Hall', 'Jalan Kamboja No. 3637', 27, 'brian.hall@example.com'),
('Stephanie Cox', 'Jalan Kenanga No. 3839', 29, 'stephanie.cox@example.com'),
('Patrick Bailey', 'Jalan Melati No. 4041', 35, 'patrick.bailey@example.com'),
('Rachel Evans', 'Jalan Raya No. 4243', 26, 'rachel.evans@example.com');
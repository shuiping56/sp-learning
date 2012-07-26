CREATE TABLE tbl_project 
(
id INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
name VARCHAR(128),
description TEXT,
create_time DATETIME,
create_user_id INTEGER,
update_time DATETIME,
update_user_id INTEGER
)
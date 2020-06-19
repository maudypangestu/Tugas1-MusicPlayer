CREATE DATABASE db_musik9 ; 

CREATE TABLE tb_user (
    user_id SMALLINT (3) NOT NULL AUTO_INCREMENT,
    username varchar (125) NOT null,
    pass varchar (125) NOT null, 
    PRIMARY KEY (user_id),
    UNIQUE KEY (username)
    );
CREATE TABLE tb_artist(
artist_id SMALLINT (5) NOT NULL AUTO_INCREMENT,
artist_name  CHAR (128) DEFAULT NULL,
PRIMARY KEY (artist_id)
);

CREATE TABLE tb_album (
artist_id SMALLINT (5) NOT NULL,
album_id SMALLINT(5) NOT NULL AUTO_INCREMENT,
album_name CHAR(128) DEFAULT NULL,
PRIMARY KEY (album_id),
FOREIGN KEY(artist_id) REFERENCES tb_artist(artist_id)
);

CREATE TABLE tb_track (
track_id SMALLINT (3) NOT NULL AUTO_INCREMENT,
track_name CHAR (128) DEFAULT NULL,
artist_id SMALLINT(3) NOT NULL,
album_id SMALLINT(5) NOT NULL,
waktu DECIMAL(5,2),
PRIMARY KEY (track_id),
FOREIGN KEY (artist_id) REFERENCES tb_artist(artist_id),
FOREIGN KEY (album_id) REFERENCES tb_album(album_id)
);

CREATE TABLE tb_played (
played_id SMALLINT(3) NOT NULL AUTO_INCREMENT,
artist_id SMALLINT(5) NOT NULL,
album_id SMALLINT (5) NOT NULL,
track_id SMALLINT(3) NOT NULL,
played TIMESTAMP,
PRIMARY KEY (played_id),
FOREIGN KEY (artist_id) REFERENCES tb_artist(artist_id),
FOREIGN KEY (album_id) REFERENCES tb_album(album_id),
FOREIGN KEY (track_id) REFERENCES tb_track(track_id)
);


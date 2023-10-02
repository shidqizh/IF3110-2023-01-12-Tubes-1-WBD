<?php

class Table
{
    public const USER_TABLE =
    "CREATE TABLE IF NOT EXISTS user (
        id_user            INT             AUTO_INCREMENT      PRIMARY KEY,
        email               VARCHAR(256)    UNIQUE NOT NULL,
        username            VARCHAR(256)    UNIQUE NOT NULL,
        password            VARCHAR(256)    NOT NULL,
        is_admin            BOOLEAN         NOT NULL
    );";

    public const ALBUM_TABLE =
    "CREATE TABLE IF NOT EXISTS album (
        id_album            INT             AUTO_INCREMENT      PRIMARY KEY,
        nama_album               VARCHAR(64)     NOT NULL,
        artist            VARCHAR(128)    NOT NULL,
        durasi_album      INT             NOT NULL,
        image_path          VARCHAR(256)    NOT NULL,
        tanggal_terbit      DATE            NOT NULL,
        genre               VARCHAR(64)
    );";

    public const SONG_TABLE =
    "CREATE TABLE IF NOT EXISTS song (
        id_song             INT             AUTO_INCREMENT      PRIMARY KEY,
        nama_album               VARCHAR(64)     NOT NULL,
        artist            VARCHAR(128),
        tanggal_terbit      DATE            NOT NULL,
        genre               VARCHAR(64),
        durasi_lagu            INT             NOT NULL,
        audio_path          VARCHAR(256)    NOT NULL,
        image_path          VARCHAR(256),
        album_id            INT,
        FOREIGN KEY (album_id) REFERENCES album (album_id) ON UPDATE CASCADE ON DELETE SET NULL 
    );";
}
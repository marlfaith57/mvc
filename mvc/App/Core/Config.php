<?php
namespace App\Core;

abstract class Config
{
    const DB_TYPE = 'mysql';
    const DB_HOST = 'host.docker.internal';
    const DB_PORT = '3306';
    const DB_NAME = 'mvc_db';
    const DB_USER = 'root';
    const DB_PASS = 'root';
    const DB_CHARSET = 'utf8';
}

<?php
namespace src;

class Config {
    const BASE_DIR = '/padraoMVC/public';

    const DB_DRIVER = 'mysql';
    const DB_HOST = 'localhost';
    const DB_DATABASE = 'usuarios';
    CONST DB_USER = 'admin';
    const DB_PASS = 'admin';

    const ERROR_CONTROLLER = 'ErrorController';
    const DEFAULT_ACTION = 'index';
}
<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/pretest', 'Praktikum::pretest');
$routes->get('/profil', 'Praktikum::profil');
$routes->get('/tambah', 'Praktikum::tambahMahasiswa');
$routes->get('/tampil', 'Praktikum::tampilMahasiswa');

<?php

namespace RafliInsan\BelajarPhpMvc\Controller;

class HomeController
{
    function index(): void
    {
        include "../app/View/index.php";
    }
    function lndex(): void
    {
        include "../app/View/lndex.php";
    }
    function login(): void
    {
        include "../app/View/login.php";
    }
    function register(): void
    {
        include "../app/View/register.php";
    }
    function services(): void
    {
        include "../app/View/services.php";
    }
    function order(): void
    {
        include "../app/View/order.php";
    }
    function dokter(): void
    {
        include "../app/View/dokter.php";
    }
    function edit(): void
    {
        include "../app/View/edit.php";
    }
    function about(): void
    {
        include "../app/View/about.php";
    }
    function pelayanan(): void
    {
        include "../app/View/pelayanan.php";
    }
    function tentang(): void
    {
        include "../app/View/tentang.php";
    }
    function contact(): void
    {
        include "../app/View/contact.php";
    }
    function kontak(): void
    {
        include "../app/View/kontak.php";
    }

}
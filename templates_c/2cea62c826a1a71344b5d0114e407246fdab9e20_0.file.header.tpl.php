<?php
/* Smarty version 3.1.39, created on 2021-05-16 04:24:39
  from 'C:\xampp\htdocs\WEB2\web2-TPE1\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60a0826749c570_58106471',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2cea62c826a1a71344b5d0114e407246fdab9e20' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB2\\web2-TPE1\\templates\\header.tpl',
      1 => 1621131878,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60a0826749c570_58106471 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">

<head>
    <base href="<?php echo BASE_URL;?>
">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LGDK-Home</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
</head>

<body class="bg-light">

    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-dark">
            <img src="IMAGENES/logo.jpg" alt="" height="50px">
            <a class="navbar-brand" href="#"></a>
            <button class="navbar-toggler bg-light " type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon bg-light  "></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link text-warning font-weight-bolder border border-warning rounded border-left-0 border-top-0 mx-1 my-1 shadow-lg p-2 "
                            href="index">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-warning font-weight-bolder border border-warning rounded border-left-0 border-top-0 mx-1 my-1 shadow-lg p-2"
                            href="ventas">BOTINES</a>
                    </li>
                     <li class="nav-item">
                        <a class="nav-link text-warning font-weight-bolder border border-warning rounded border-left-0 border-top-0 mx-1 my-1 shadow-lg p-2 "
                            href="marcas">MARCAS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-warning font-weight-bolder border border-warning rounded border-left-0 border-top-0 mx-1 my-1 shadow-lg p-2"
                            href="usuarios">USUARIOS</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
<?php }
}

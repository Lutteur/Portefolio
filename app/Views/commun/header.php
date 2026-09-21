<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php echo base_url('assets/css/styleSideBar.css') ?>" rel="stylesheet" type="text/css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title> Portefolio </title>
</head>
<body>
    <nav>
        <div class="logo"> 
            <i class="bx bx-menu menu-icon"></i>
            <span class="logo-name"> Portefolio </span>
        </div>
        <div class="sidebar">
            <div class="logo"> 
            <i class="bx bx-menu menu-icon"></i>
            <span class="logo-name"> Portefolio </span>
        </div>

        <div class="sidebar-content">
            <ul class="lists">
                <li class="list">
                    <a href="<?php echo site_url('Presentation') ?>" class="nav-link">
                        <i class="bx bx-user icon"></i>
                        <span class="link"> Présentation </span>
                    </a>
                </li>
                <li class="list">
                    <a href="<?php echo site_url('Competence1') ?>" class="nav-link">
                        <i class="bx bx-medal icon"></i>
                        <span class="link"> Compétence 1 </span>
                    </a>
                </li>
                <li class="list">
                    <a href="<?php echo site_url('Competence2') ?>" class="nav-link">
                        <i class="bx bx-medal icon"></i>
                        <span class="link"> Compétence 2 </span>
                    </a>
                </li>
                <li class="list">
                    <a href="<?php echo site_url('Competence3') ?>" class="nav-link">
                        <i class="bx bx-medal icon"></i>
                        <span class="link"> Compétence 3 </span>
                    </a>
                </li>
            </ul>

            <div class="bottom-content">
                <li class="list">
                    <a href="#" class="nav-link">
                        <i class="bx bx-cog icon"></i>
                        <span class="link">Settings</span>
                    </a>
                </li>
                <li class="list">
                    <a href="#" class="nav-link">
                        <i class="bx bx-log-out icon"></i>
                        <span class="link">Logout</span>
                    </a>
                </li>
            </div>
        </div>
        </div>
    </nav>
    
    <section class="overlay"></section>
    <script src="<?= base_url('/assets/js/main.js') ?>"></script>
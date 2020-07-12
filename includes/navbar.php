<?php 
$ini = parse_ini_file('.gitignore/config.ini');
?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
    <div class="container">
        <a class="navbar-brand mx-2" href="/"><strong><?php echo $ini["admin_name"] ?></strong></a>
        <div class="d-flex flex-row order-2 order-lg-3">
            <ul class="navbar-nav flex-row ">
                <li class="nav-item"><a class="nav-link mx-2" target="_blank" href="<?php echo $ini["admin_linkedin"] ?>"><i class="fa fa-linkedin fa-lg align-middle" aria-hidden="true"></i>
                        <span class=" d-none d-sm-inline d-lg-none align-middle">LinkedIn</span></a></li>
                <li class="nav-item"><a class="nav-link mx-2" target="_blank" href="<?php echo $ini["admin_github"] ?>"><i class="fa fa-github fa-lg align-middle" aria-hidden="true"></i>
                        <span class=" d-none d-sm-inline d-lg-none align-middle">GitHub</span></a></li>
            </ul>
            <button class="navbar-toggler mx-2 custom-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse mr-auto order-3 order-lg-2" id="navbarNavDropdown">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item mx-2 <?php if ($currentSite == "Home") echo "active" ?>">
                    <a class="nav-link" href="/">Home</a>
                </li>
                <li class="nav-item mx-2 <?php if ($currentSite == "Skills") echo "active" ?>">
                    <a class="nav-link" href="skills">Skills</a>
                </li>
                <li class="nav-item dropdown mx-2 <?php if ($currentSite == "Portfolio" || $currentSite == "Schulplaner") echo "active" ?>">
                    <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Projekte
                    </a>
                    <div class="dropdown-menu " aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" target="_blank" href="https://github.com/JanHailfinger/Schulplaner">Schulplaner<i class=" ml-2 fa fa-github fa-lg align-right" aria-hidden="true"></i> </a>
                           
                        
                        <a class="dropdown-item" target="_blank" href="https://github.com/JanHailfinger/Portfolio">Portfolio <i class=" ml-2 fa fa-github fa-lg align-right" aria-hidden="true"></i></a>
                    </div>
                </li>
                <li class="nav-item mx-2<?php if ($currentSite == "Kontakt") echo "active" ?>">
                    <a class="nav-link" href="kontakt">Kontakt</a>
                </li>
            </ul>
        </div>

    </div>
</nav>
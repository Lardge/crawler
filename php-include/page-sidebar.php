<?php 
$directoryURI = $_SERVER['REQUEST_URI'];
$path = parse_url($directoryURI, PHP_URL_PATH);
$components = explode('/b-sure/theme/b-sure/', $path);
$first_part = $components[1];
?>

<!-- BEGIN SIDEBAR -->
<div class="page-sidebar-wrapper">
    <!-- BEGIN SIDEBAR -->
    <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
    <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
    <div class="page-sidebar navbar-collapse collapse">
        <!-- BEGIN SIDEBAR MENU -->
        <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
        <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
        <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
        <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
        <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
        <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
        <ul class="page-sidebar-menu" data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
            <li class="nav-item start <?php if ($first_part==" index.php ") {echo "active open "; } else  {echo "noactive ";}?>">
                <a href="index.php" class="nav-link nav-toggle">
                    <i class="icon-home"></i>
                    <span class="title">Hem</span>
                    <span class="selected"></span>
                </a>
            </li>
            <li class="nav-item start <?php if ($first_part==" customer-all.php " || $first_part=="customer-new.php ") {echo "active open "; } else  {echo "noactive ";}?>">
                <a href="customer-all.php" class="nav-link nav-toggle">
                    <i class="icon-user"></i>
                    <span class="title">Kunder</span>
                    <span class="selected"></span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item start  <?php if ($first_part==" customer-new.php ") {echo "active open "; } else  {echo "noactive ";}?>">
                        <a href="customer-new.php" class="nav-link ">
                            <span class="title">Lägg till ny kund</span>
                        </a>
                    </li>
                    <li class="nav-item start ">
                        <a href="customer-all.php" class="nav-link ">
                            <span class="title">Mina kunder</span>
                        </a>
                    </li>
                    <li class="nav-item start ">
                        <a href="customer-all.php" class="nav-link ">
                            <span class="title">Alla kunder</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item start <?php if ($first_part==" quote-all.php " || $first_part=="quote-new.php ") {echo "active open "; } else  {echo "noactive ";}?>">
                <a href="offerter.php" class="nav-link nav-toggle">
                    <i class="icon-layers"></i>
                    <span class="title">Offerter</span>
                    <span class="selected"></span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item start <?php if ($first_part==" quote-new.php ") {echo "active open "; } else  {echo "noactive ";}?>">
                        <a href="quote-new.php" class="nav-link ">
                            <span class="title">Lägg till ny offertförfrågan</span>
                        </a>
                    </li>
                    <li class="nav-item start ">
                        <a href="quote-user.php" class="nav-link ">
                            <span class="title">Mina offertförfrågor</span>
                        </a>
                    </li>
                    <li class="nav-item start <?php if ($first_part==" quote-all.php ") {echo "active open "; } else  {echo "noactive ";}?>">
                        <a href="quote-all.php" class="nav-link ">
                            <span class="title">Alla offertförfrågor</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item start <?php if ($first_part==" produkter.php ") {echo "active open "; } else  {echo "noactive ";}?>">
                <a href="produkter.php" class="nav-link nav-toggle">
                    <i class="icon-briefcase"></i>
                    <span class="title">Försäkringsprodukter</span>
                    <span class="selected"></span>
                </a>
            </li>
            <li class="nav-item start" style="margin: 20px 0px;"></li>
            <li class="nav-item start <?php if ($first_part==" om-oss.php ") {echo "active open "; } else  {echo "noactive ";}?>">
                <a href="om-oss.php" class="nav-link nav-toggle">
                    <i class="icon-info"></i>
                    <span class="title">Om B-Sure</span>
                    <span class="selected"></span>
                </a>
            </li>
        </ul>
        <!-- END SIDEBAR MENU -->
    </div>
    <!-- END SIDEBAR -->
</div>
<!-- END SIDEBAR -->

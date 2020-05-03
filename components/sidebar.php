<?php
function generateSidebar($sideItemsArray, $sideBarBg)
{
    return '
        <ul class="navbar-nav ' . $sideBarBg . ' sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <div class="sidebar-brand-text mx-3">Admin Panel</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item ' . checkActive('index.php') . '">
        <a class="nav-link" href="index.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Web Data
      </div>

      <!-- Nav Item - Charts -->      
        ' . navLinkCreator($sideItemsArray[0]) . '
        ' . navLinkCreator($sideItemsArray[1]) . '

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    ';
}
function navLinkCreator($item)
{
    $navLinks = '<li class="nav-item ' . checkActive($item . '.php') . '">
    <a class="nav-link text-capitalize" href="' . $item . '.php">
    <i class="fas fa-fw fa-table"></i>
    <span>' . $item . '</span>
    </a>
    </li>';
    return $navLinks;
}
// step-1 The Side bar links that we want to create we just put them here in side the array
// step-2 Then Go to the generateSidebar() and copy paste the navLinkCreator() and change the order according to your need 
$navLinksArr = ["contacts", "appointments"];
$sideBarBg = "bg-gradient-success";
echo generateSidebar($navLinksArr, $sideBarBg);

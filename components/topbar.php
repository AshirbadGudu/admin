<?php
function topBarGenerator($adminName, $adminLogoUrl, $websiteUrl, $totalRequests)
{
    return '
    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>          

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Alerts -->
            <li class="nav-item no-arrow mx-1">
              <a class="nav-link" href="#">
                <i class="fas fa-bell fa-fw"></i>
                <!-- Counter - Alerts -->
                <span class="badge badge-danger badge-counter">'.$totalRequests.'</span>
              </a>              
            </li>


            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">' . $adminName . '</span>
                <img class="img-profile rounded-circle" src="' . $adminLogoUrl . '">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">                
                <a class="dropdown-item" href="' . $websiteUrl . '">
                  <i class="fas fa-link fa-sm fa-fw mr-2 text-gray-400"></i>
                  Visit Website
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
    ';
}
// Simply add data to following variables to display in the top bar
$panelUser = "Panel User";
$panelLogoUrl = "https://picsum.photos/200";
$webUrl = "https://picsum.photos";
$totalWebsiteRequests = 5 . " +";
echo topBarGenerator($panelUser, $panelLogoUrl, $webUrl, $totalWebsiteRequests);

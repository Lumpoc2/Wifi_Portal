<!-- You need to get the logs in mikrotik to Display and call the data to display in dashboard -->

<?php
function getMacAddress() {
    $macAddress = '';
    
    $osType = strtoupper(substr(PHP_OS, 0, 3));
    
    if ($osType === 'WIN') {
        // Windows
        $command = 'ipconfig /all';
        ob_start();
        passthru($command);
        $output = ob_get_clean();
        
        $pattern = '/Physical\s+Address\s+:\s+([0-9A-Fa-f\-:]+)/';
        if (preg_match($pattern, $output, $matches)) {
            $macAddress = str_replace('-', ':', $matches[1]);
        }
    } elseif ($osType === 'LIN') {
        // Linux
        $command = '/sbin/ifconfig';
        ob_start();
        passthru($command);
        $output = ob_get_clean();
        
        $pattern = '/([0-9A-Fa-f\-:]{17})/';
        if (preg_match($pattern, $output, $matches)) {
            $macAddress = $matches[1];
        }
    } else {
        $macAddress = 'Unsupported OS';
    }
    
    return $macAddress;
}

function getPublicIpAddress() {
    $apiUrl = 'https://api.ipify.org?format=json';
    
    $response = file_get_contents($apiUrl);
    if ($response !== false) {
        $data = json_decode($response, true);
        if (isset($data['ip'])) {
            return $data['ip'];
        }
    }
    
    return 'Unknown';
}

$macAddress = getMacAddress();
$publicIpAddress = getPublicIpAddress();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Wifi portal</title>
  <link rel="stylesheet" href="../css/style.min.css" />
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
    <aside class="left-sidebar">
      <!-- Sidebar scroll-->
      <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
          <a href="./Admin.html" class="text-nowrap logo-img">
            <img src="" width="180" alt="" />
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
            <i class="fa-solid fa-align-justify"></i>
          </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
          <ul id="sidebarnav">
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">Home</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./Admin.html" aria-expanded="false">
                <span>
                  <i class="ti ti-layout-dashboard"></i>
                </span>
                <span class="hide-menu">Dashboard</span>
              </a>
            </li>
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">UI COMPONENTS</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./StudentView.html" aria-expanded="false">
                <span>
                  <i class="ti ti-article"></i>
                </span>
                <span class="hide-menu">Student View</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./ui-alerts.html" aria-expanded="false">
                <span>
                  <i class="ti ti-alert-circle"></i>
                </span>
                <span class="hide-menu">Controll</span>
              </a>
            </li>
          
           
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">AUTH</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./authentication-login.html" aria-expanded="false">
                <span>
                  <i class="ti ti-login"></i>
                </span>
                <span class="hide-menu">Login</span>
              </a>
            </li>

            </li>
        </nav>
        <!-- End Sidebar navigation -->
      </div>
      <!-- End Sidebar scroll-->
    </aside>
    <!--  Sidebar End -->
    <!--  Main wrapper -->
    <div class="body-wrapper">
      <!--  Header Start -->
      <header class="app-header">
        <nav class="navbar navbar-expand-lg navbar-light">
          <ul class="navbar-nav">
            <li class="nav-item d-block d-xl-none">
              <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse" >
                <i class="ti ti-menu-2"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-icon-hover">
                <i class="ti ti-bell-ringing"></i>
                <div class="notification bg-primary rounded-circle"></div>
              </a>
            </li>
          </ul>
          <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
            <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
              <li class="nav-item dropdown">
                <a class="nav-link nav-icon-hover"" id="drop2" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  <img src="../images/user-1.jpg" alt="" width="35" height="35" class="rounded-circle">
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                  <div class="message-body">
                    <a  class="d-flex align-items-center gap-2 dropdown-item">
                      <i class="ti ti-user fs-6"></i>
                      <p class="mb-0 fs-3">My Profile</p>
                    </a>
                    <a class="d-flex align-items-center gap-2 dropdown-item">
                      <i class="ti ti-mail fs-6"></i>
                      <p class="mb-0 fs-3">My Account</p>
                    </a>
                    <a  class="d-flex align-items-center gap-2 dropdown-item">
                      <i class="ti ti-list-check fs-6"></i>
                      <p class="mb-0 fs-3">My Task</p>
                    </a>
                    <a href="./authentication-login.html" class="btn btn-outline-primary mx-3 mt-2 d-block">Logout</a>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!--  Header End -->
      <div class="container-fluid">
        <!--  Row 1 -->
        <div class="row">
          <div class="col-lg-8 d-flex align-items-strech">
            <div class="card w-100">
              <div class="card-body">
                <div class="d-sm-flex d-block align-items-center justify-content-between mb-9">
                  <div class="mb-3 mb-sm-0">
                    <h5 class="card-title fw-semibold">Most visiting website</h5>
                  </div>
                  <div>
                    <select class="form-select">
                      <option value="1">March 2023</option>
                      <option value="2">April 2023</option>
                      <option value="3">May 2023</option>
                      <option value="4">June 2023</option>
                    </select>
                  </div>
                </div>
                <div><iframe class="Chart_link" src="../chart/bar.html" frameborder="0" scrolling="no"></iframe> </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="row">
              <div class="col-lg-12">
                <!-- Pending -->
                <div class="card overflow-hidden">
                  <div class="card-body p-4">
                    <h5 class="card-title mb-9 fw-semibold">Pending</h5>
                    <div class="row align-items-center">
                      <div class="col-8">
                        <h4 class="fw-semibold mb-3">1000</h4>
                        <div class="d-flex align-items-center mb-3">
                      </div>
                      <div class="col-4">
                        <div class="d-flex justify-content-center">
                          <div id="breakup"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-12">
                <!-- Online users -->
                <div class="card">
                  <div class="card-body">
                    <div class="row alig n-items-start">
                      <div class="col-8">
                        <h5 class="card-title mb-9 fw-semibold"> Online users </h5>
                        <h4 class="fw-semibold mb-3">1888</h4>
                      </div>
                    </div>
                  </div>
                  <div id="earning"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="container-fluid">
          <!--  Row 1 -->
          <div class="row">
            <div class="col-lg-8 d-flex align-items-strech">
              <div class="card w-100">
                <div class="card-body">
                  <div class="d-sm-flex d-block align-items-center justify-content-between mb-9">
                    <div class="mb-3 mb-sm-0">
                      <h5 class="card-title fw-semibold"> Most visiting mobile Application</h5>
                    </div>
                    <div>
                      <select class="form-select">
                        <option value="1">March 2023</option>
                        <option value="2">April 2023</option>
                        <option value="3">May 2023</option>
                        <option value="4">June 2023</option>
                      </select>
                    </div>
                  </div>
                  <div><iframe class="Chart_link" src="../chart/bar1.html" frameborder="0" scrolling="no"></iframe></div>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="row">
                <div class="col-lg-12">
                  <!-- Registered User -->
                  <div class="card overflow-hidden">
                    <div class="card-body p-4">
                      <h5 class="card-title mb-9 fw-semibold">Registered User</h5>
                      <div class="row align-items-center">
                        <div class="col-8">
                          <h4 class="fw-semibold mb-3">10000</h4>
                          <div class="d-flex align-items-center mb-3">
                        </div>
                        <div class="col-4">
                          <div class="d-flex justify-content-center">
                            <div id="breakup"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class = container>
            <div class="row">
              <div class="col-lg-4 d-flex">
                <div class="card w-100">
                  <div class="card-body">
                    <div class="d-sm-flex d-block align-items-center justify-content-between mb-2">
                      <div class="mb-3 mb-sm-0">
                        <h5 class="card-title fw-semibold"> Most visiting mobile Application</h5>
                      </div>
                     
                    </div>
                    <div><iframe class="Chart_link" src="../chart/piechart.html" frameborder="0" scrolling="no"></iframe></div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 d-flex ">
                <div class="card w-100">
                  <div class="card-body">
                    <div class="d-sm-flex d-block align-items-center justify-content-between mb-13">
                      <div class="mb-3 mb-sm-0">
                        <h5 class="card-title fw-semibold"> Most visiting mobile Application</h5>
                      </div>
                      
                    </div>
                    <div></div>
                  </div>
                </div>
              </div>
               <div class="col-lg-4 d-flex ">
                <div class="card w-100">
                  <div class="card-body">
                    <div class="d-sm-flex d-block align-items-center justify-content-between mb-13">
                      <div class="mb-3 mb-sm-0">
                        <h5 class="card-title fw-semibold"> Most visiting mobile Application</h5>
                      </div>
                      
                    </div>
                    <div id="chart">Lorem ipsum dolor sit amet consectetur adipisicing elit. A vel, itaque eius exercitationem adipisci voluptatum porro necessitatibus nobis voluptas autem. Numquam nesciunt quae totam labore aspernatur quisquam eius suscipit hic.</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <div class="row">
          <div class="col-lg-4 d-flex align-items-stretch">
            <div class="card w-100">
              <div class="card-body p-4">
                <div class="mb-4">
                  <h5 class="card-title fw-semibold">Online User</h5>
                </div>
                <ul class="timeline-widget mb-0 position-relative mb-n5">
                  
                  <li class="timeline-item d-flex position-relative overflow-hidden">
                    <div class="timeline-time text-dark flex-shrink-0 text-end">10:00 am</div>
                    <div class="timeline-badge-wrap d-flex flex-column align-items-center">
                      <span class="timeline-badge border-2 border border-info flex-shrink-0 my-8"></span>
                      <span class="timeline-badge-border d-block flex-shrink-0"></span>
                    </div>
                    <div class="timeline-desc fs-3 text-dark mt-n1"><?php echo "MAC : " . $macAddress; ?></div>
                    <div class="timeline-desc fs-3 text-dark mt-n1"><?php echo "IP : " . $publicIpAddress;?></div>
                  </li>
                  <li class="timeline-item d-flex position-relative overflow-hidden">
                    <div class="timeline-time text-dark flex-shrink-0 text-end">12:00 am</div>
                    <div class="timeline-badge-wrap d-flex flex-column align-items-center">
                      <span class="timeline-badge border-2 border border-success flex-shrink-0 my-8"></span>
                      <span class="timeline-badge-border d-block flex-shrink-0"></span>
                    </div>
                    <div class="timeline-desc fs-3 text-dark mt-n1"><?php echo "MAC : " . $macAddress; ?></div>
                    <div class="timeline-desc fs-3 text-dark mt-n1"><?php echo "IP : " . $publicIpAddress;?></div>
                    
                  </li>
                  <li class="timeline-item d-flex position-relative overflow-hidden">
                    <div class="timeline-time text-dark flex-shrink-0 text-end">12:00 am</div>
                    <div class="timeline-badge-wrap d-flex flex-column align-items-center">
                      <span class="timeline-badge border-2 border border-success flex-shrink-0 my-8"></span>
                    </div>
                    <div class="timeline-desc fs-3 text-dark mt-n1"><?php echo "MAC : " . $macAddress; ?></div>
                    <div class="timeline-desc fs-3 text-dark mt-n1"><?php echo "IP : " . $publicIpAddress;?></div>
                  </li>
                    
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-8 d-flex align-items-stretch">
            <div class="card w-100">
              <div class="card-body p-4">
                <h5 class="card-title fw-semibold mb-4">Registered User</h5>
                <div class="table-responsive">
                  <table class="table text-nowrap mb-0 align-middle">
                    <thead class="text-dark fs-4">
                      <tr>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Id Number</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Course</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Name</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Email</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Budget</h6>
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="border-bottom-0"><h6 class="fw-normal">pag-12313</h6></td>
                        <td class="border-bottom-0">
                            <h6 class="fw-normal">BSCS-1</h6>
                                                    
                        </td>
                        <td class="border-bottom-0">
                          <h6 class=" fw-normal">Elite Admin</h6>
                        </td>
                        <td class="border-bottom-0">
                          <div class="d-flex align-items-center gap-2">
                            <h6 class="fw-normal" >FalmarkLumpoc@gmail.com</h6>
                          </div>
                        </td>
                        <td class="border-bottom-0">
                          <h6 class="fw-semibold mb-0 fs-4">$3.9</h6>
                        </td>
                      </tr> 
                      <tr>
                        <td class="border-bottom-0"><h6 class="fw-semibold mb-0">2</h6></td>
                        <td class="border-bottom-0">
                            <h6 class="fw-semibold mb-1">Andrew McDownland</h6>
                            <span class="fw-normal">Project Manager</span>                          
                        </td>
                        <td class="border-bottom-0">
                          <p class="mb-0 fw-normal">Real Homes WP Theme</p>
                        </td>
                        <td class="border-bottom-0">
                          <div class="d-flex align-items-center gap-2">
                            <span class="badge bg-secondary rounded-3 fw-semibold">Medium</span>
                          </div>
                        </td>
                        <td class="border-bottom-0">
                          <h6 class="fw-semibold mb-0 fs-4">$24.5k</h6>
                        </td>
                      </tr> 
                      <tr>
                        <td class="border-bottom-0"><h6 class="fw-semibold mb-0">3</h6></td>
                        <td class="border-bottom-0">
                            <h6 class="fw-semibold mb-1">Christopher Jamil</h6>
                            <span class="fw-normal">Project Manager</span>                          
                        </td>
                        <td class="border-bottom-0">
                          <p class="mb-0 fw-normal">MedicalPro WP Theme</p>
                        </td>
                        <td class="border-bottom-0">
                          <div class="d-flex align-items-center gap-2">
                            <span class="badge bg-danger rounded-3 fw-semibold">High</span>
                          </div>
                        </td>
                        <td class="border-bottom-0">
                          <h6 class="fw-semibold mb-0 fs-4">$12.8k</h6>
                        </td>
                      </tr>      
                      <tr>
                        <td class="border-bottom-0"><h6 class="fw-semibold mb-0">4</h6></td>
                        <td class="border-bottom-0">
                            <h6 class="fw-semibold mb-1">Nirav Joshi</h6>
                            <span class="fw-normal">Frontend Engineer</span>                          
                        </td>
                        <td class="border-bottom-0">
                          <p class="mb-0 fw-normal">Hosting Press HTML</p>
                        </td>
                        <td class="border-bottom-0">
                          <div class="d-flex align-items-center gap-2">
                            <span class="badge bg-success rounded-3 fw-semibold">Critical</span>
                          </div>
                        </td>
                        <td class="border-bottom-0">
                          <h6 class="fw-semibold mb-0 fs-4">$2.4k</h6>
                        </td>
                      </tr>                       
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
        </div>
      </div>
    </div>
  </div>

</body>

</html>
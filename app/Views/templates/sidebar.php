<div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="index-2.html"> <img alt="image" src="../assets/img/logo.png" class="header-logo" /> <span
                class="logo-name">Aegis</span>
            </a>
          </div>
          <div class="sidebar-user">
            <div class="sidebar-user-picture">
              <img alt="image" src="../assets/img/userbig.png">
            </div>
            <div class="sidebar-user-details">
              <div class="user-name"><?= session('name') ?></div>
              <div class="user-role">Administrator</div>
            </div>
          </div>
          <ul class="sidebar-menu">
            
            <li class="active">
              <a href="#" class="nav-link "><i data-feather="monitor"></i><span>Start Here</span></a>
            </li>
			<li>
              <a href="#" class="nav-link "><i data-feather="monitor"></i><span>My Active Plan</span></a>
            </li>
			
            <li class="dropdown">
              <a href="#" class="nav-link has-dropdown"><i data-feather="briefcase"></i><span>My Account</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="widget-chart.html">Edit Profile</a></li>
                <li><a class="nav-link" href="widget-data.html">Set PIN</a></li>
				<li><a class="nav-link" href="widget-data.html">My Wallet</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="nav-link has-dropdown"><i data-feather="command"></i><span>My Product</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="chat.html">Startup Plan</a></li>
                <li><a class="nav-link" href="portfolio.html">Silver Plan</a></li>
                <li><a class="nav-link" href="blog.html">Gold PLan</a></li>
                <li><a class="nav-link" href="calendar.html">Platinum PLan</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="nav-link has-dropdown"><i data-feather="mail"></i><span>Marketing Tools</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="email-inbox.html">My Fannel Links</a></li>
                <li><a class="nav-link" href="email-compose.html">Stats</a></li>
                <li><a class="nav-link" href="email-read.html">My Leads</a></li>
				<li><a class="nav-link" href="email-read.html">Banner</a></li>
              </ul>
            </li>
            
            <li class="dropdown">
              <a href="#" class="nav-link has-dropdown"><i data-feather="copy"></i><span>My Team</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="<?php echo base_url() ; ?>/activeMember">Active Members</a></li>
                <li><a class="nav-link" href="<?php echo base_url() ; ?>/inactiveMember">Inactive Members</a></li>
              </ul>
            </li>
			
			<li class="dropdown">
              <a href="#" class="nav-link has-dropdown"><i data-feather="copy"></i><span>My Commission</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="alert.html">My Earning</a></li>
                <li><a class="nav-link" href="badge.html">My E-Wallet</a></li>
              </ul>
            </li>
            
          </ul>
        </aside>
      </div>
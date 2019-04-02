<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Portal</title>
  <link rel="stylesheet" type="text/css" href="https://lagom.rsstudio.net/demo-whmcs/assets/css/fontawesome-all.min.css">
  <link href="https://lagom.rsstudio.net/demo-whmcs/templates/lagom/core/styles/default/assets/css/theme.min.css?v=1.2.1" rel="stylesheet">
  <script src="https://lagom.rsstudio.net/demo-whmcs/templates/lagom/assets/js/scripts.min.js?v=1.2.1"></script>
  <script src="https://lagom.rsstudio.net/demo-whmcs/templates/lagom/assets/js/core.min.js?v=1.2.1"></script>
</head>

<body class="lagom lagom-layout-condensed  page-clientareahome page-user-logged">
  <div class="app-nav app-nav-condensed hidden-print">
    <section id="header">
      <div class="container">
        <button type="button" class="navbar-toggle">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a href="#" class="logo">NBS Portal</a>
        <ul class="top-nav">
          <li>
            <a href="/demo-whmcs/cart.php?a=view">
              <i class="lm lm-basket"></i>
            </a>
          </li>
          <li class="notify">
            <a href="#" data-toggle="dropdown">
              <i class="lm lm-bell">
                <span class="label label-info">NEW</span>
              </i>
            </a>

            <ul class="client-alerts dropdown-menu">
              <li>
                <a href="/demo-whmcs/index.php?rp=/cart/domain/renew">
                  <i class="ls ls-exclamation-circle text-danger"></i>
                  <div class="message">You have 1 domain(s) expiring within the next 7 days.</div>
                </a>
              </li>
              <li>
                <a href="/demo-whmcs/clientarea.php?action=masspay&amp;all=true">
                  <i class="ls ls-info-circle text-info "></i>
                  <div class="message">You have 4 unpaid invoice(s). Pay them early for peace of mind.</div>
                </a>
              </li>
              <li>
                <a href="/demo-whmcs/clientarea.php?action=masspay&amp;all=true">
                  <i class="ls ls-exclamation-circle text-warning"></i>
                  <div class="message">You have 3 overdue invoice(s) with a total balance due of $123.96. Pay them now to avoid any interruptions in service.</div>
                </a>
              </li>
            </ul>
          </li>

          <li menuitemname="Account" class="dropdown account account " id="Secondary_Navbar-Account">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
              <i class="fas fa-ticket lm lm-user"></i> <span class="item-text">Petey MacGibbon</span>
              <b class="ls ls-caret"></b> </a>
            <ul class="dropdown-menu dropdown-menu-right">

              <li class="dropdown-header">
                <div class="dropdown-header-title">
                  Petey MacGibbon
                </div>
                <div class="dropdown-header-desc">
                  demo@lagom.rsstudio.net
                </div>
              </li>
              <li class="nav-divider">
                -----
              </li>
              <li menuitemname="Edit Account Details" class=" " id="Secondary_Navbar-Account-Edit_Account_Details">
                <a href="/demo-whmcs/clientarea.php?action=details">
                  Edit Account Details
                </a>
              </li>
              <li menuitemname="Manage Credit Card" class=" " id="Secondary_Navbar-Account-Manage_Credit_Card">
                <a href="/demo-whmcs/clientarea.php?action=creditcard">
                  Manage Credit Card
                </a>
              </li>
              <li menuitemname="Contacts/Sub-Accounts" class=" " id="Secondary_Navbar-Account-Contacts_Sub-Accounts">
                <a href="/demo-whmcs/clientarea.php?action=contacts">
                  Contacts/Sub-Accounts
                </a>
              </li>
              <li menuitemname="Change Password" class=" " id="Secondary_Navbar-Account-Change_Password">
                <a href="/demo-whmcs/clientarea.php?action=changepw">
                  Change Password
                </a>
              </li>
              <li menuitemname="Security Settings" class=" " id="Secondary_Navbar-Account-Security_Settings">
                <a href="/demo-whmcs/clientarea.php?action=security">
                  Security Settings
                </a>
              </li>
              <li menuitemname="Email History" class=" " id="Secondary_Navbar-Account-Email_History">
                <a href="/demo-whmcs/clientarea.php?action=emails">
                  Email History
                </a>
              </li>
              <li menuitemname="Divider" class="nav-divider " id="Secondary_Navbar-Account-Divider">
                <a href="">
                  -----
                </a>
              </li>
              <li menuitemname="Logout" class=" " id="Secondary_Navbar-Account-Logout">
                <a href="/demo-whmcs/logout.php">
                  Logout
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </section>

    <section id="main-menu">
      <nav id="nav" class="navbar navbar-default navbar-main " role="navigation">
        <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            Menu
          </div>
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="navbar-collapse" id="primary-nav">
            <ul class="nav navbar-nav">

              <li menuitemname="Home" class="  home-item active" id="Primary_Navbar-Home">
                <a href="/demo-whmcs/clientarea.php">
                  <i class="fas fa-ticket lm lm-home"></i> <span>Home</span>
                </a>
              </li>
              <li menuitemname="Services" class="dropdown  " id="Primary_Navbar-Services">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                  <i class="fas fa-ticket lm lm-hosting"></i> <span>Services</span>
                  <b class="ls ls-caret"></b> </a>
                <ul class="dropdown-menu ">
                  <li menuitemname="My Services" class=" " id="Primary_Navbar-Services-My_Services">
                    <a href="/demo-whmcs/clientarea.php?action=services">
                      <i class="fas fa-ticket ls ls-hosting"></i> My Services
                    </a>
                  </li>
                  <li menuitemname="Services Divider" class="nav-divider " id="Primary_Navbar-Services-Services_Divider">
                    <a href="">
                      -----
                    </a>
                  </li>
                  <li menuitemname="Order New Services" class=" " id="Primary_Navbar-Services-Order_New_Services">
                    <a href="/demo-whmcs/cart.php">
                      <i class="fas fa-ticket ls ls-box"></i> Order New Services
                    </a>
                  </li>
                  <li menuitemname="View Available Addons" class=" " id="Primary_Navbar-Services-View_Available_Addons">
                    <a href="/demo-whmcs/cart.php?gid=addons">
                      <i class="fas fa-ticket ls ls-addon"></i> View Available Addons
                    </a>
                  </li>
                </ul>
              </li>
              <li menuitemname="Domains" class="dropdown  " id="Primary_Navbar-Domains">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                  <i class="fas fa-ticket lm lm-globe"></i> <span>Domains</span>
                  <b class="ls ls-caret"></b> </a>
                <ul class="dropdown-menu ">
                  <li menuitemname="My Domains" class=" " id="Primary_Navbar-Domains-My_Domains">
                    <a href="/demo-whmcs/clientarea.php?action=domains">
                      <i class="fas fa-ticket lm lm-globe"></i> My Domains
                    </a>
                  </li>
                  <li menuitemname="Domains Divider" class="nav-divider " id="Primary_Navbar-Domains-Domains_Divider">
                    <a href="">
                      -----
                    </a>
                  </li>
                  <li menuitemname="Renew Domains" class=" " id="Primary_Navbar-Domains-Renew_Domains">
                    <a href="/demo-whmcs/index.php?rp=/cart/domain/renew">
                      <i class="fas fa-ticket ls ls-refresh"></i> Renew Domains
                    </a>
                  </li>
                  <li menuitemname="Register a New Domain" class=" " id="Primary_Navbar-Domains-Register_a_New_Domain">
                    <a href="/demo-whmcs/cart.php?a=add&amp;domain=register">
                      <i class="fas fa-ticket ls ls-dns"></i> Register a New Domain
                    </a>
                  </li>
                  <li menuitemname="Transfer a Domain to Us" class=" " id="Primary_Navbar-Domains-Transfer_a_Domain_to_Us">
                    <a href="/demo-whmcs/cart.php?a=add&amp;domain=transfer">
                      <i class="fas fa-ticket ls ls-transfer"></i> Transfer Domains to Us
                    </a>
                  </li>
                </ul>
              </li>
              <li menuitemname="Website Security" class="dropdown  " id="Primary_Navbar-Website_Security">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                  <i class="fas fa-ticket lm lm-php-admin"></i> <span>Website &amp; Security</span>
                  <b class="ls ls-caret"></b> </a>
                <ul class="dropdown-menu ">
                  <li menuitemname="symantec" class=" " id="Primary_Navbar-Website_Security-symantec">
                    <a href="/demo-whmcs/index.php?rp=/store/ssl-certificates">
                      <i class="fas fa-ticket ls ls-shield"></i> SSL Certificates
                    </a>
                  </li>
                  <li menuitemname="weebly" class=" " id="Primary_Navbar-Website_Security-weebly">
                    <a href="/demo-whmcs/index.php?rp=/store/website-builder">
                      <i class="fas fa-ticket ls ls-dashboard"></i> Website Builder
                    </a>
                  </li>
                  <li menuitemname="sitelock" class=" " id="Primary_Navbar-Website_Security-sitelock">
                    <a href="/demo-whmcs/index.php?rp=/store/sitelock">
                      <i class="fas fa-ticket ls ls-padlock"></i> Website Security
                    </a>
                  </li>
                  <li menuitemname="spamexperts" class=" " id="Primary_Navbar-Website_Security-spamexperts">
                    <a href="/demo-whmcs/index.php?rp=/store/email-services">
                      <i class="fas fa-ticket ls ls-envelope"></i> E-mail Services
                    </a>
                  </li>
                  <li menuitemname="codeguard" class=" " id="Primary_Navbar-Website_Security-codeguard">
                    <a href="/demo-whmcs/index.php?rp=/store/codeguard">
                      <i class="fas fa-ticket ls ls-copy"></i> Website Backup
                    </a>
                  </li>
                  <li menuitemname="Website Security Divider" class="nav-divider " id="Primary_Navbar-Website_Security-Website_Security_Divider">
                    <a href="">
                      -----
                    </a>
                  </li>
                  <li menuitemname="Manage SSL Certificates" class=" " id="Primary_Navbar-Website_Security-Manage_SSL_Certificates">
                    <a href="/demo-whmcs/index.php?rp=/store/ssl-certificates/manage">
                      <i class="fas fa-ticket ls ls-security-code"></i> Manage SSL Certificates
                    </a>
                  </li>
                </ul>
              </li>
              <li menuitemname="Billing" class="dropdown  " id="Primary_Navbar-Billing">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                  <i class="fas fa-ticket lm lm-document"></i> <span>Billing</span>
                  <b class="ls ls-caret"></b> </a>
                <ul class="dropdown-menu ">
                  <li menuitemname="My Invoices" class=" " id="Primary_Navbar-Billing-My_Invoices">
                    <a href="/demo-whmcs/clientarea.php?action=invoices">
                      <i class="fas fa-ticket ls ls-document"></i> My Invoices
                    </a>
                  </li>
                  <li menuitemname="My Quotes" class=" " id="Primary_Navbar-Billing-My_Quotes">
                    <a href="/demo-whmcs/clientarea.php?action=quotes">
                      <i class="fas fa-ticket ls ls-text-cloud"></i> My Quotes
                    </a>
                  </li>
                  <li menuitemname="Billing Divider" class="nav-divider " id="Primary_Navbar-Billing-Billing_Divider">
                    <a href="">
                      -----
                    </a>
                  </li>
                  <li menuitemname="Mass Payment" class=" " id="Primary_Navbar-Billing-Mass_Payment">
                    <a href="/demo-whmcs/clientarea.php?action=masspay&amp;all=true">
                      <i class="fas fa-ticket ls ls-bank-note"></i> Mass Payment
                    </a>
                  </li>
                  <li menuitemname="Manage Credit Card" class=" " id="Primary_Navbar-Billing-Manage_Credit_Card">
                    <a href="/demo-whmcs/clientarea.php?action=creditcard">
                      <i class="fas fa-ticket ls ls-credit-card"></i> Manage Credit Card
                    </a>
                  </li>
                </ul>
              </li>
              <li menuitemname="Support" class="dropdown  " id="Primary_Navbar-Support">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                  <i class="fas fa-ticket lm lm-envelope"></i> <span>Support</span>
                  <b class="ls ls-caret"></b> </a>
                <ul class="dropdown-menu ">
                  <li menuitemname="Tickets" class=" " id="Primary_Navbar-Support-Tickets">
                    <a href="/demo-whmcs/supporttickets.php">
                      <i class="fas fa-ticket ls ls-envelope"></i> Tickets
                    </a>
                  </li>
                  <li menuitemname="Announcements" class=" " id="Primary_Navbar-Support-Announcements">
                    <a href="/demo-whmcs/index.php?rp=/announcements">
                      <i class="fas fa-ticket ls ls-text-cloud"></i> Announcements
                    </a>
                  </li>
                  <li menuitemname="Knowledgebase" class=" " id="Primary_Navbar-Support-Knowledgebase">
                    <a href="/demo-whmcs/index.php?rp=/knowledgebase">
                      <i class="fas fa-ticket ls ls-document-info"></i> Knowledgebase
                    </a>
                  </li>
                  <li menuitemname="Downloads" class=" " id="Primary_Navbar-Support-Downloads">
                    <a href="/demo-whmcs/index.php?rp=/download">
                      <i class="fas fa-ticket ls ls-download-square"></i> Downloads
                    </a>
                  </li>
                  <li menuitemname="Network Status" class=" " id="Primary_Navbar-Support-Network_Status">
                    <a href="/demo-whmcs/serverstatus.php">
                      <i class="fas fa-ticket ls ls-range"></i> Network Status
                    </a>
                  </li>
                  <li menuitemname="open-ticket" class="open-ticket-item " id="Primary_Navbar-Support-open-ticket">
                    <a href="/demo-whmcs/submitticket.php">
                      <i class="fas fa-ticket ls ls-new-window"></i> Open Ticket
                    </a>
                  </li>
                </ul>
              </li>

            </ul>
            <ul class="nav navbar-nav language-nav">
              <li class="dropdown language">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                  <span class="item-text">English</span>
                  <i class="ls ls-caret"></i>
                </a>
                <ul class="dropdown-menu dropdown-menu-right" id="languageChooserContent">
                  <li class="">
                    <a href="/demo-whmcs/clientarea.php?rsstyle=default&amp;rslayout=condensed&amp;language=arabic">العربية</a>
                  </li>
                  <li class="">
                    <a href="/demo-whmcs/clientarea.php?rsstyle=default&amp;rslayout=condensed&amp;language=azerbaijani">Azerbaijani</a>
                  </li>
                  <li class="">
                    <a href="/demo-whmcs/clientarea.php?rsstyle=default&amp;rslayout=condensed&amp;language=catalan">Català</a>
                  </li>
                  <li class="">
                    <a href="/demo-whmcs/clientarea.php?rsstyle=default&amp;rslayout=condensed&amp;language=chinese">中文</a>
                  </li>
                  <li class="">
                    <a href="/demo-whmcs/clientarea.php?rsstyle=default&amp;rslayout=condensed&amp;language=croatian">Hrvatski</a>
                  </li>
                  <li class="">
                    <a href="/demo-whmcs/clientarea.php?rsstyle=default&amp;rslayout=condensed&amp;language=czech">Čeština</a>
                  </li>
                  <li class="">
                    <a href="/demo-whmcs/clientarea.php?rsstyle=default&amp;rslayout=condensed&amp;language=danish">Dansk</a>
                  </li>
                  <li class="">
                    <a href="/demo-whmcs/clientarea.php?rsstyle=default&amp;rslayout=condensed&amp;language=dutch">Nederlands</a>
                  </li>
                  <li class="active">
                    <a href="/demo-whmcs/clientarea.php?rsstyle=default&amp;rslayout=condensed&amp;language=english">English</a>
                  </li>
                  <li class="">
                    <a href="/demo-whmcs/clientarea.php?rsstyle=default&amp;rslayout=condensed&amp;language=estonian">Estonian</a>
                  </li>
                  <li class="">
                    <a href="/demo-whmcs/clientarea.php?rsstyle=default&amp;rslayout=condensed&amp;language=farsi">Persian</a>
                  </li>
                  <li class="">
                    <a href="/demo-whmcs/clientarea.php?rsstyle=default&amp;rslayout=condensed&amp;language=french">Français</a>
                  </li>
                  <li class="">
                    <a href="/demo-whmcs/clientarea.php?rsstyle=default&amp;rslayout=condensed&amp;language=german">Deutsch</a>
                  </li>
                  <li class="">
                    <a href="/demo-whmcs/clientarea.php?rsstyle=default&amp;rslayout=condensed&amp;language=hebrew">עברית</a>
                  </li>
                  <li class="">
                    <a href="/demo-whmcs/clientarea.php?rsstyle=default&amp;rslayout=condensed&amp;language=hungarian">Magyar</a>
                  </li>
                  <li class="">
                    <a href="/demo-whmcs/clientarea.php?rsstyle=default&amp;rslayout=condensed&amp;language=italian">Italiano</a>
                  </li>
                  <li class="">
                    <a href="/demo-whmcs/clientarea.php?rsstyle=default&amp;rslayout=condensed&amp;language=macedonian">Macedonian</a>
                  </li>
                  <li class="">
                    <a href="/demo-whmcs/clientarea.php?rsstyle=default&amp;rslayout=condensed&amp;language=norwegian">Norwegian</a>
                  </li>
                  <li class="">
                    <a href="/demo-whmcs/clientarea.php?rsstyle=default&amp;rslayout=condensed&amp;language=portuguese-br">Português</a>
                  </li>
                  <li class="">
                    <a href="/demo-whmcs/clientarea.php?rsstyle=default&amp;rslayout=condensed&amp;language=portuguese-pt">Português</a>
                  </li>
                  <li class="">
                    <a href="/demo-whmcs/clientarea.php?rsstyle=default&amp;rslayout=condensed&amp;language=romanian">Română</a>
                  </li>
                  <li class="">
                    <a href="/demo-whmcs/clientarea.php?rsstyle=default&amp;rslayout=condensed&amp;language=russian">Русский</a>
                  </li>
                  <li class="">
                    <a href="/demo-whmcs/clientarea.php?rsstyle=default&amp;rslayout=condensed&amp;language=spanish">Español</a>
                  </li>
                  <li class="">
                    <a href="/demo-whmcs/clientarea.php?rsstyle=default&amp;rslayout=condensed&amp;language=swedish">Svenska</a>
                  </li>
                  <li class="">
                    <a href="/demo-whmcs/clientarea.php?rsstyle=default&amp;rslayout=condensed&amp;language=turkish">Türkçe</a>
                  </li>
                  <li class="">
                    <a href="/demo-whmcs/clientarea.php?rsstyle=default&amp;rslayout=condensed&amp;language=ukranian">Українська</a>
                  </li>
                </ul>
              </li>
            </ul>
          </div><!-- /.navbar-collapse -->
        </div>
      </nav>
    </section>
  </div>

  <div class="app-main">
    <div class="main-body ">
      <div class="container">
        <div class="main-grid row">
          <div class="main-header col-md-9 pull-md-right">
            <div class="header-lined ">

              <h1>
                My Dashboard
              </h1>
              <div class="d-flex space-between align-center">

                <ol class="breadcrumb">
                  <li>
                    <a href="/demo-whmcs/index.php"> Portal Home
                    </a> </li>
                  <li class="active">
                    Client Area
                  </li>
                </ol>
              </div>
            </div>
          </div>
          <div class="main-sidebar sidebar-primary col-md-3 pull-md-left sidebar">
            <div menuitemname="Client Details" class="panel panel-sidebar panel-client-details">
              <div class="panel-heading">
                <h3 class="panel-title">
                  <i class="fas fa-user"></i>&nbsp; Your Info
                  <i class="fa fa-chevron-up panel-minimise pull-right"></i>
                </h3>
              </div>
              <div class="panel-body">
                <strong>LockWorth</strong><br><em>Petey MacGibbon</em><br>Waubesa Center<br>Norfolk, Virginia, 54839<br>United States
              </div>
              <div class="panel-footer clearfix">
                <a href="clientarea.php?action=details" class="btn btn-success btn-sm btn-block">
                  <i class="fas fa-pencil-alt"></i> Update
                </a>
              </div>
            </div>






          </div>
          <div class="main-content col-md-9 pull-md-right">




            <div class="client-home-alerts alert-group">
              <div class="alert alert-warning alert-faded alert-dismissible" href="/demo-whmcs/clientarea.php?action=invoices">
                <span class="alert-icon ls ls-exclamation-circle"></span>
                <div class="alert-body">
                  <p>You have 3 overdue invoice(s) with a total balance due of $123.96. Pay them now to avoid any interruptions in service.</p>
                </div>
                <div class="alert-actions">
                  <a class="btn btn-sm btn-icon" href="/demo-whmcs/clientarea.php?action=invoices" data-toggle="tooltip" data-title="Pay Now" data-container="body"><span class="ls ls-wallet"></span></a>
                  <button class="btn btn-sm btn-icon" type="button" data-dismiss="alert" data-toggle="tooltip" data-title="Close" aria-label="Close" data-container="body" data-original-title="" title=""><span class="ls ls-close">
                    </span></button></div>
              </div>
              <div class="alert alert-warning alert-faded alert-dismissible" href="/demo-whmcs/index.php?rp=/cart/domain/renew">
                <span class="alert-icon ls ls-exclamation-circle"></span>
                <div class="alert-body">
                  <p>You have 1 domain(s) expiring within the next 45 days. Renew them today for peace of mind.</p>
                </div>
                <div class="alert-actions">
                  <a class="btn btn-sm btn-icon" href="/demo-whmcs/index.php?rp=/cart/domain/renew" data-toggle="tooltip" data-title="Renew Domain" data-container="body" data-original-title="" title=""><span class="ls ls-refresh"></span></a>
                  <button class="btn btn-sm btn-icon" type="button" data-dismiss="alert" data-toggle="tooltip" data-title="Close" aria-label="Close" data-container="body" data-original-title="" title=""><span class="ls ls-close">
                    </span></button></div>
              </div>
            </div>

            <div class="promo-slider swiper-container-horizontal swiper-container-wp8-horizontal" data-promo-slider="">
              <div class="promo-slider-header">
                <ul class="promo-slider-nav" data-promo-slider-pagination="">

                  <li class="">
                    <span class="short-name">
                      SSL
                    </span>
                    <span class="full-name">
                      SSL
                    </span>
                  </li>

                  <li class="">
                    <span class="short-name">
                      W
                    </span>
                    <span class="full-name">
                      Weebly
                    </span>
                  </li>

                  <li class="active">
                    <span class="short-name">
                      SL
                    </span>
                    <span class="full-name">
                      SiteLock
                    </span>
                  </li>

                  <li class="">
                    <span class="short-name">
                      ES
                    </span>
                    <span class="full-name">
                      Email Security
                    </span>
                  </li>

                  <li class="">
                    <span class="short-name">
                      CG
                    </span>
                    <span class="full-name">
                      CodeGuard
                    </span>
                  </li>
                </ul>
                <div class="promo-slider-close" data-promo-slide-close="" data-toggle="tooltip" data-title="Close" data-container="body">
                  <i class="ls ls-close"></i>
                </div>
              </div>
              <div class="promo-slider-wrapper swiper-wrapper" style="height: 292px; transition-duration: 400ms;">
                <a href="/demo-whmcs/index.php?rp=/store/ssl-certificates" class="promo-slider-slide" style="width: 840px; margin-right: 100px;">
                  <div class="promo-slider-body">
                    <div class="promo-slider-content">
                      <h2 class="promo-slider-title">
                        SSL Certificates -
                        Secure your site and add trust &amp; confidence for your visitors.
                      </h2>
                    </div>
                    <div class="promo-slider-more"><i class="ls ls-basket"></i>Order / Learn More</div>
                  </div>
                  <div class="promo-slider-icons">
                    <svg version="1.1" class="promo-slider-icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="376px" height="324px" viewBox="0 0 376 324" style="enable-background:new 0 0 376 324;"
                      xml:space="preserve">
                      <g>
                        <g>
                          <polygon class="st0" points="1.88,0 143.91,82 143.91,190 1.88,108 		"></polygon>
                        </g>
                        <g>
                          <path class="st3" d="M110.13,138.5c0.48,0.28,0.87,0.05,0.87-0.5s-0.39-1.22-0.87-1.5l-20.78-12c-0.48-0.28-0.87-0.05-0.87,0.5
			s0.39,1.22,0.87,1.5L110.13,138.5z"></path>
                          <path class="st3" d="M132.65,109.5c0.48,0.28,0.87,0.05,0.87-0.5s-0.39-1.22-0.87-1.5l-43.3-25c-0.48-0.28-0.87-0.05-0.87,0.5
			s0.39,1.22,0.87,1.5L132.65,109.5z"></path>
                          <path class="st3" d="M132.65,127.5c0.48,0.28,0.87,0.05,0.87-0.5s-0.39-1.22-0.87-1.5l-34.64-20c-0.48-0.28-0.87-0.05-0.87,0.5
			s0.39,1.22,0.87,1.5L132.65,127.5z"></path>
                          <path class="st3" d="M122.25,127.5c0.48,0.28,0.87,0.05,0.87-0.5s-0.39-1.22-0.87-1.5l-32.91-19c-0.48-0.28-0.87-0.05-0.87,0.5
			s0.39,1.22,0.87,1.5L122.25,127.5z"></path>
                          <path class="st3" d="M101.47,127.5c0.48,0.28,0.87,0.05,0.87-0.5s-0.39-1.22-0.87-1.5l-12.12-7c-0.48-0.28-0.87-0.05-0.87,0.5
			s0.39,1.22,0.87,1.5L101.47,127.5z"></path>
                          <path class="st3" d="M127.45,142.5c0.48,0.28,0.87,0.05,0.87-0.5s-0.39-1.22-0.87-1.5l-20.78-12c-0.48-0.28-0.87-0.05-0.87,0.5
			s0.39,1.22,0.87,1.5L127.45,142.5z"></path>
                          <path class="st3" d="M101.47,97.5c0.48,0.28,0.87,0.05,0.87-0.5s-0.39-1.22-0.87-1.5l-12.12-7c-0.48-0.28-0.87-0.05-0.87,0.5
			s0.39,1.22,0.87,1.5L101.47,97.5z"></path>
                          <path class="st3" d="M127.45,112.5c0.48,0.28,0.87,0.05,0.87-0.5s-0.39-1.22-0.87-1.5l-20.78-12c-0.48-0.28-0.87-0.05-0.87,0.5
			s0.39,1.22,0.87,1.5L127.45,112.5z"></path>
                          <path class="st3" d="M113.59,110.5c0.48,0.28,0.87,0.05,0.87-0.5s-0.39-1.22-0.87-1.5l-24.25-14c-0.48-0.28-0.87-0.05-0.87,0.5
			s0.39,1.22,0.87,1.5L113.59,110.5z"></path>
                          <path class="st3" d="M122.25,115.5c0.48,0.28,0.87,0.05,0.87-0.5s-0.39-1.22-0.87-1.5l-3.46-2c-0.48-0.28-0.87-0.05-0.87,0.5
			s0.39,1.22,0.87,1.5L122.25,115.5z"></path>
                          <path class="st3" d="M115.33,129.5c-0.48-0.28-0.87-0.95-0.87-1.5s0.39-0.78,0.87-0.5l12.12,7c0.48,0.28,0.87,0.95,0.87,1.5
			s-0.39,0.78-0.87,0.5L115.33,129.5z"></path>
                          <path class="st3" d="M89.35,102.5c-0.48-0.28-0.87-0.95-0.87-1.5s0.39-0.78,0.87-0.5l3.46,2c0.48,0.28,0.87,0.95,0.87,1.5
			s-0.39,0.78-0.87,0.5L89.35,102.5z"></path>
                          <path class="st3" d="M89.35,114.5c-0.48-0.28-0.87-0.95-0.87-1.5s0.39-0.78,0.87-0.5l20.78,12c0.48,0.28,0.87,0.95,0.87,1.5
			s-0.39,0.78-0.87,0.5L89.35,114.5z"></path>
                          <path class="st3" d="M132.65,168.5c0.48,0.28,0.87,0.05,0.87-0.5s-0.39-1.22-0.87-1.5l-12.12-7c-0.48-0.28-0.87-0.05-0.87,0.5
			s0.39,1.22,0.87,1.5L132.65,168.5z"></path>
                          <path class="st3" d="M101.47,74.5c0.48,0.28,0.87,0.05,0.87-0.5s-0.39-1.22-0.87-1.5l-12.12-7c-0.48-0.28-0.87-0.05-0.87,0.5
			s0.39,1.22,0.87,1.5L101.47,74.5z"></path>
                        </g>
                        <g>
                          <path class="st3" d="M33.92,94.5c0.48,0.28,0.87,0.05,0.87-0.5s-0.39-1.22-0.87-1.5l-20.78-12c-0.48-0.28-0.87-0.05-0.87,0.5
			s0.39,1.22,0.87,1.5L33.92,94.5z"></path>
                          <path class="st3" d="M56.44,65.5c0.48,0.28,0.87,0.05,0.87-0.5s-0.39-1.22-0.87-1.5l-43.3-25c-0.48-0.28-0.87-0.05-0.87,0.5
			s0.39,1.22,0.87,1.5L56.44,65.5z"></path>
                          <path class="st3" d="M56.44,83.5c0.48,0.28,0.87,0.05,0.87-0.5s-0.39-1.22-0.87-1.5l-34.64-20c-0.48-0.28-0.87-0.05-0.87,0.5
			s0.39,1.22,0.87,1.5L56.44,83.5z"></path>
                          <path class="st3" d="M46.04,83.5c0.48,0.28,0.87,0.05,0.87-0.5s-0.39-1.22-0.87-1.5l-32.91-19c-0.48-0.28-0.87-0.05-0.87,0.5
			s0.39,1.22,0.87,1.5L46.04,83.5z"></path>
                          <path class="st3" d="M25.26,83.5c0.48,0.28,0.87,0.05,0.87-0.5s-0.39-1.22-0.87-1.5l-12.12-7c-0.48-0.28-0.87-0.05-0.87,0.5
			s0.39,1.22,0.87,1.5L25.26,83.5z"></path>
                          <path class="st3" d="M51.24,98.5c0.48,0.28,0.87,0.05,0.87-0.5s-0.39-1.22-0.87-1.5l-20.78-12c-0.48-0.28-0.87-0.05-0.87,0.5
			s0.39,1.22,0.87,1.5L51.24,98.5z"></path>
                          <path class="st3" d="M25.26,53.5c0.48,0.28,0.87,0.05,0.87-0.5s-0.39-1.22-0.87-1.5l-12.12-7c-0.48-0.28-0.87-0.05-0.87,0.5
			s0.39,1.22,0.87,1.5L25.26,53.5z"></path>
                          <path class="st3" d="M51.24,68.5c0.48,0.28,0.87,0.05,0.87-0.5s-0.39-1.22-0.87-1.5l-20.78-12c-0.48-0.28-0.87-0.05-0.87,0.5
			s0.39,1.22,0.87,1.5L51.24,68.5z"></path>
                          <path class="st3" d="M37.38,66.5c0.48,0.28,0.87,0.05,0.87-0.5s-0.39-1.22-0.87-1.5l-24.25-14c-0.48-0.28-0.87-0.05-0.87,0.5
			s0.39,1.22,0.87,1.5L37.38,66.5z"></path>
                          <path class="st3" d="M46.04,71.5c0.48,0.28,0.87,0.05,0.87-0.5s-0.39-1.22-0.87-1.5l-3.46-2c-0.48-0.28-0.87-0.05-0.87,0.5
			s0.39,1.22,0.87,1.5L46.04,71.5z"></path>
                          <path class="st3" d="M39.12,85.5c-0.48-0.28-0.87-0.95-0.87-1.5s0.39-0.78,0.87-0.5l12.12,7c0.48,0.28,0.87,0.95,0.87,1.5
			s-0.39,0.78-0.87,0.5L39.12,85.5z"></path>
                          <path class="st3" d="M13.14,58.5c-0.48-0.28-0.87-0.95-0.87-1.5s0.39-0.78,0.87-0.5l3.46,2c0.48,0.28,0.87,0.95,0.87,1.5
			s-0.39,0.78-0.87,0.5L13.14,58.5z"></path>
                          <path class="st3" d="M13.14,70.5c-0.48-0.28-0.87-0.95-0.87-1.5s0.39-0.78,0.87-0.5l20.78,12c0.48,0.28,0.87,0.95,0.87,1.5
			s-0.39,0.78-0.87,0.5L13.14,70.5z"></path>
                          <path class="st3" d="M56.44,124.5c0.48,0.28,0.87,0.05,0.87-0.5s-0.39-1.22-0.87-1.5l-12.12-7c-0.48-0.28-0.87-0.05-0.87,0.5
			s0.39,1.22,0.87,1.5L56.44,124.5z"></path>
                          <path class="st3" d="M25.26,106.5c0.48,0.28,0.87,0.05,0.87-0.5s-0.39-1.22-0.87-1.5l-12.12-7c-0.48-0.28-0.87-0.05-0.87,0.5
			s0.39,1.22,0.87,1.5L25.26,106.5z"></path>
                          <path class="st3" d="M25.26,30.5c0.48,0.28,0.87,0.05,0.87-0.5s-0.39-1.22-0.87-1.5l-12.12-7c-0.48-0.28-0.87-0.05-0.87,0.5
			s0.39,1.22,0.87,1.5L25.26,30.5z"></path>
                        </g>
                      </g>
                      <g>
                        <path class="st2" d="M97.14,156c-1.86-1.07-3.72-2.92-5.2-5.31V172l5.2-3l5.2,9v-21.31C100.86,157.37,99,157.07,97.14,156z"></path>
                        <path class="st3" d="M100.58,156.96c0.58-0.34,1.04-0.83,1.38-1.44c-1.34,0.73-3.08,0.49-4.82-0.52c-1.77-1.02-3.55-2.83-4.9-5.17
		s-2.03-4.78-2.03-6.83c0-2.01,0.66-3.64,1.96-4.44c-0.7-0.01-1.36,0.14-1.94,0.48c-1.43,0.82-2.14,2.57-2.14,4.74
		c0,2.16,0.71,4.74,2.14,7.21s3.3,4.38,5.17,5.46C97.28,157.53,99.15,157.78,100.58,156.96z"></path>
                        <path class="st4" d="M100.58,156.96c0.58-0.34,1.04-0.83,1.38-1.44c-1.34,0.73-3.08,0.49-4.82-0.52c-1.77-1.02-3.55-2.83-4.9-5.17
		s-2.03-4.78-2.03-6.83c0-2.01,0.66-3.64,1.96-4.44c-0.7-0.01-1.36,0.14-1.94,0.48c-1.43,0.82-2.14,2.57-2.14,4.74
		c0,2.16,0.71,4.74,2.14,7.21s3.3,4.38,5.17,5.46C97.28,157.53,99.15,157.78,100.58,156.96z"></path>
                        <path class="st3" d="M101.17,155.99c-1.35,0.78-3.13,0.54-4.9-0.49c-1.77-1.02-3.55-2.83-4.9-5.17s-2.03-4.78-2.03-6.83
		s0.68-3.7,2.03-4.49c1.35-0.78,3.13-0.54,4.9,0.49c1.77,1.02,3.55,2.83,4.9,5.17s2.03,4.78,2.03,6.83S102.53,155.2,101.17,155.99z"></path>
                        <path class="st0" d="M95.41,150c0,0.55,0.39,1.22,0.87,1.5s0.87,0.05,0.87-0.5v-6c0-0.55-0.39-1.22-0.87-1.5s-0.87-0.05-0.87,0.5
		V150z"></path>
                        <path class="st9" d="M103.26,143.46c-1.69-2.93-3.91-5.18-6.12-6.46c-2.22-1.28-4.43-1.58-6.12-0.61l-1.73,1l0.28,2.16
		c0.2-0.19,0.42-0.37,0.67-0.51c1.43-0.82,3.3-0.57,5.17,0.51c1.87,1.08,3.74,2.99,5.17,5.46s2.14,5.05,2.14,7.21
		s-0.71,3.91-2.14,4.74c-0.68,0.39-1.45,0.53-2.28,0.46l3.23,1.18l1.73-1c1.69-0.98,2.54-3.05,2.54-5.61
		C105.8,149.44,104.95,146.39,103.26,143.46z"></path>
                        <path class="st3" d="M101.53,144.46c-1.69-2.93-3.91-5.18-6.12-6.46c-2.22-1.28-4.43-1.58-6.12-0.61
		c-1.69,0.98-2.54,3.05-2.54,5.61s0.85,5.61,2.54,8.54s3.91,5.19,6.12,6.46c2.22,1.28,4.43,1.58,6.12,0.61
		c1.69-0.98,2.54-3.05,2.54-5.61S103.22,147.39,101.53,144.46z M100.31,156.49c-1.35,0.78-3.13,0.54-4.9-0.49
		c-1.77-1.02-3.55-2.83-4.9-5.17s-2.03-4.78-2.03-6.83s0.68-3.7,2.03-4.49c1.35-0.78,3.13-0.54,4.9,0.49
		c1.77,1.02,3.55,2.83,4.9,5.17s2.03,4.78,2.03,6.83S101.66,155.7,100.31,156.49z"></path>
                      </g>
                    </svg>
                    <svg version="1.1" class="promo-slider-icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="376px" height="324px" viewBox="0 0 376 324" style="enable-background:new 0 0 376 324;"
                      xml:space="preserve">
                      <g>
                        <path class="st9" d="M249.56,141l-29.45,17l2.45,2.59v105.66c0,0,28.77-16.61,29.45-17s1.01-1.22,1.01-2.24v-14l-5.2-7.19
		l5.2-12.81v-6l-5.2-7.19l5.2-12.81v-6l-5.2-7.19l5.2-12.81v-14c0-1.02-0.34-2.24-1.01-3.41L249.56,141z"></path>
                        <g>
                          <path class="st9" d="M159.49,113.51c-3.59,0-6.84-0.84-9.19-2.2s-3.81-3.23-3.81-5.31c0-2.07,1.46-3.95,3.81-5.31
			c2.35-1.36,5.6-2.2,9.19-2.2s6.84,0.84,9.19,2.2s3.81,3.23,3.81,5.31c0,2.07-1.46,3.95-3.81,5.31
			C166.33,112.67,163.08,113.51,159.49,113.51z"></path>
                          <path class="st9" d="M220.12,148.51c-3.59,0-6.84-0.84-9.19-2.2s-3.81-3.23-3.81-5.31c0-2.07,1.46-3.95,3.81-5.31
			c2.35-1.36,5.6-2.2,9.19-2.2s6.84,0.84,9.19,2.2s3.81,3.23,3.81,5.31c0,2.07-1.46,3.95-3.81,5.31S223.71,148.51,220.12,148.51z"></path>
                        </g>
                        <g>
                          <path class="st0" d="M159.49,111.2c-2.49,0-4.74-0.58-6.36-1.52c-1.63-0.94-2.64-2.24-2.64-3.67c0-1.44,1.01-2.73,2.64-3.67
			c1.63-0.94,3.88-1.52,6.36-1.52s4.73,0.58,6.36,1.52c1.63,0.94,2.64,2.24,2.64,3.67s-1.01,2.73-2.64,3.67
			C164.23,110.62,161.98,111.2,159.49,111.2z"></path>
                          <path class="st0" d="M159.49,123.2c-2.49,0-4.74-0.58-6.36-1.52c-1.63-0.94-2.64-2.24-2.64-3.67c0-1.44,0-12,0-12h18
			c0,0,0,10.56,0,12c0,1.43-1.01,2.73-2.64,3.67C164.23,122.62,161.98,123.2,159.49,123.2z"></path>
                          <path class="st0" d="M220.12,146.2c-2.49,0-4.74-0.58-6.36-1.52c-1.63-0.94-2.64-2.24-2.64-3.67c0-1.44,1.01-2.73,2.64-3.67
			s3.88-1.52,6.36-1.52c2.49,0,4.74,0.58,6.36,1.52c1.63,0.94,2.64,2.24,2.64,3.67s-1.01,2.73-2.64,3.67
			C224.85,145.62,222.6,146.2,220.12,146.2z"></path>
                          <path class="st0" d="M220.12,158.2c-2.49,0-4.74-0.58-6.36-1.52c-1.63-0.94-2.64-2.24-2.64-3.67c0-1.44,0-12,0-12h18
			c0,0,0,10.56,0,12c0,1.43-1.01,2.73-2.64,3.67C224.85,157.62,222.6,158.2,220.12,158.2z"></path>
                        </g>
                        <path class="st2" d="M249.56,141l-90.07-52c-0.89-0.51-1.77-0.63-2.45-0.24s-29.44,17-29.44,17l94.96,54.83l29.45-17
		C251.33,142.41,250.45,141.51,249.56,141z M167.98,110.9c-2.17,1.25-5.17,2.03-8.48,2.03s-6.31-0.78-8.49-2.03
		c-2.17-1.25-3.51-2.99-3.51-4.9s1.34-3.65,3.51-4.9s5.17-2.03,8.49-2.03c3.31,0,6.31,0.78,8.48,2.03s3.52,2.99,3.52,4.9
		C171.49,107.91,170.15,109.65,167.98,110.9z M228.6,145.9c-2.17,1.25-5.17,2.03-8.49,2.03c-3.31,0-6.31-0.78-8.49-2.03
		c-2.17-1.25-3.51-2.99-3.51-4.9c0-1.91,1.34-3.65,3.51-4.9s5.17-2.03,8.49-2.03c3.31,0,6.31,0.78,8.49,2.03
		c2.17,1.25,3.51,2.99,3.51,4.9C232.12,142.91,230.77,144.65,228.6,145.9z"></path>
                        <g>
                          <path class="st0" d="M159.49,111.2c-2.49,0-4.74-0.58-6.36-1.52c-1.63-0.94-2.64-2.24-2.64-3.67c0-1.44,0-32,0-32h18
			c0,0,0,30.56,0,32c0,1.43-1.01,2.73-2.64,3.67C164.23,110.62,161.98,111.2,159.49,111.2z"></path>
                          <path class="st0" d="M159.49,79.2c-2.49,0-4.74-0.58-6.36-1.52c-1.63-0.94-2.64-2.24-2.64-3.67c0-1.44,1.01-2.73,2.64-3.67
			c1.63-0.94,3.88-1.52,6.36-1.52s4.73,0.58,6.36,1.52c1.63,0.94,2.64,2.24,2.64,3.67s-1.01,2.73-2.64,3.67
			C164.23,78.62,161.98,79.2,159.49,79.2z"></path>
                          <path class="st0" d="M220.12,146.2c-2.49,0-4.74-0.58-6.36-1.52c-1.63-0.94-2.64-2.24-2.64-3.67c0-1.44,0-32,0-32h18
			c0,0,0,30.56,0,32c0,1.43-1.01,2.73-2.64,3.67C224.85,145.62,222.6,146.2,220.12,146.2z"></path>
                          <path class="st0" d="M220.12,114.2c-2.49,0-4.74-0.58-6.36-1.52c-1.63-0.94-2.64-2.24-2.64-3.67c0-1.44,1.01-2.73,2.64-3.67
			c1.63-0.94,3.88-1.52,6.36-1.52c2.49,0,4.74,0.58,6.36,1.52c1.63,0.94,2.64,2.24,2.64,3.67s-1.01,2.73-2.64,3.67
			C224.85,113.62,222.6,114.2,220.12,114.2z"></path>
                        </g>
                        <path class="lock-st3" d="M220.12,109c0-19.33-13.57-42.83-30.31-52.5S159.5,54.67,159.5,74"></path>
                        <g>
                          <path class="st5" d="M176.63,206.47c-0.84,0-1.7-0.25-2.55-0.74c-2.54-1.47-4.46-4.79-4.46-7.73v-12.08
			c-0.89-1.04-1.69-2.17-2.39-3.38c-1.81-3.13-2.8-6.52-2.8-9.54c0-3.42,1.26-6.02,3.54-7.34c0.97-0.56,2.07-0.84,3.25-0.84
			c1.57,0,3.21,0.49,4.87,1.45c2.61,1.51,5.05,4.06,6.86,7.2c1.81,3.13,2.8,6.52,2.8,9.54c0,3.42-1.26,6.02-3.54,7.34
			c-0.52,0.3-1.07,0.52-1.66,0.66v11C180.55,204.63,178.94,206.47,176.63,206.47z"></path>
                          <path class="st5" d="M223.58,164c0-1.02-0.34-2.24-1.01-3.41c-0.68-1.17-1.56-2.07-2.45-2.59l-90.07-52
			c-0.89-0.51-1.77-0.63-2.45-0.24c-0.68,0.39-1.01,1.22-1.01,2.24v100c0,1.02,0.34,2.24,1.01,3.41c0.68,1.17,1.56,2.07,2.45,2.59
			l90.07,52c0.89,0.51,1.77,0.63,2.45,0.24s1.01-1.22,1.01-2.24L223.58,164z M181.21,188.61c-0.79,0.46-1.7,0.62-2.66,0.55V202
			c0,2.21-1.55,3.1-3.46,2s-3.46-3.79-3.46-6v-12.84c-0.96-1.04-1.87-2.26-2.66-3.62c-1.69-2.93-2.54-5.98-2.54-8.54
			s0.85-4.63,2.54-5.61c1.69-0.98,3.91-0.67,6.12,0.61c2.22,1.28,4.43,3.54,6.12,6.46c1.69,2.93,2.54,5.98,2.54,8.54
			C183.74,185.56,182.9,187.63,181.21,188.61z"></path>
                        </g>
                        <g>
                          <path class="st0" d="M175.08,168c2.22,1.28,4.43,3.54,6.12,6.46c1.69,2.93,2.54,5.98,2.54,8.54s-0.85,4.63-2.54,5.61
			c-0.79,0.46-1.7,0.62-2.66,0.55V202c0,2.21-1.55,3.1-3.46,2s-3.46-3.79-3.46-6v-12.84c-0.96-1.04-1.87-2.26-2.66-3.62
			c-1.69-2.93-2.54-5.98-2.54-8.54s0.85-4.63,2.54-5.61C170.65,166.42,172.87,166.72,175.08,168 M175.08,162
			c-3.7-2.14-7.18-2.48-9.8-0.97c-2.62,1.51-4.06,4.7-4.06,8.97s1.44,9.12,4.06,13.66c0.36,0.63,0.74,1.24,1.14,1.83V195
			c0,5.51,3.89,12.24,8.66,15c4.78,2.76,8.66,0.51,8.66-5v-9.51c0.4-0.14,0.78-0.31,1.14-0.52c2.62-1.51,4.06-4.7,4.06-8.97
			s-1.44-9.12-4.06-13.66C182.26,167.81,178.78,164.14,175.08,162L175.08,162z"></path>
                        </g>
                        <g>
                          <path class="st5" d="M242.63,238c0,0.26,0.08,0.46,0.25,0.56c0.17,0.1,0.39,0.07,0.61-0.06l9.53-5.5v-20l-9.53,5.5
			c-0.22,0.13-0.44,0.35-0.61,0.65c-0.17,0.29-0.25,0.6-0.25,0.85V238z"></path>
                          <path class="st5" d="M242.63,212c0,0.26,0.08,0.46,0.25,0.56c0.17,0.1,0.39,0.07,0.61-0.06l9.53-5.5v-20l-9.53,5.5
			c-0.22,0.13-0.44,0.35-0.61,0.65c-0.17,0.29-0.25,0.6-0.25,0.85V212z"></path>
                          <path class="st5" d="M242.63,186c0,0.26,0.08,0.46,0.25,0.56c0.17,0.1,0.39,0.07,0.61-0.06l9.53-5.5v-20l-9.53,5.5
			c-0.22,0.13-0.44,0.35-0.61,0.65c-0.17,0.29-0.25,0.6-0.25,0.85V186z"></path>
                        </g>
                      </g>
                      <g>
                        <path class="st9" d="M192.05,280c0-2.73,0-6,0-6s-6.94-6.21-10.04-8c-6.21-3.58-14.78-5.8-24.25-5.8c-6.81,0-13.15,1.15-18.49,3.13
		L55.15,219c0,0,0,4.83,0,6s0.82,2.23,2.15,3l71.58,41.33c-1.06,0.96-5.41,4.67-5.41,4.67s0,3.29,0,6c0,5.47,3.84,10.42,10.04,14
		c6.21,3.58,14.78,5.8,24.25,5.8s18.04-2.22,24.25-5.8C188.22,290.42,192.05,285.47,192.05,280z M157.76,291.31
		c-5.41,0-10.31-1.27-13.86-3.31c-3.55-2.05-5.74-4.88-5.74-8s2.19-5.95,5.74-8s8.45-3.31,13.86-3.31s10.31,1.27,13.86,3.31
		c3.55,2.05,5.74,4.88,5.74,8s-2.19,5.95-5.74,8C168.07,290.05,163.17,291.31,157.76,291.31z"></path>
                        <path class="st2" d="M192.05,274c0-5.47-3.84-10.42-10.04-14c-6.21-3.58-14.78-5.8-24.25-5.8c-6.81,0-13.15,1.15-18.49,3.13
		L67.7,216c-1.33-0.77-3.17-1.24-5.2-1.24c-2.03,0-3.87,0.47-5.2,1.24s-2.15,1.83-2.15,3s0.82,2.23,2.15,3l71.58,41.33
		c-3.42,3.08-5.41,6.74-5.41,10.67c0,5.47,3.84,10.42,10.04,14c6.21,3.58,14.78,5.8,24.25,5.8s18.04-2.22,24.25-5.8
		C188.22,284.42,192.05,279.47,192.05,274z M157.76,285.31c-5.41,0-10.31-1.27-13.86-3.31c-3.55-2.05-5.74-4.88-5.74-8
		s2.19-5.95,5.74-8s8.45-3.31,13.86-3.31s10.31,1.27,13.86,3.31c3.55,2.05,5.74,4.88,5.74,8s-2.19,5.95-5.74,8
		C168.07,284.05,163.17,285.31,157.76,285.31z"></path>
                        <path class="st9" d="M76.36,237h-26.7c0,0,0,1.61,0,2s0.27,0.74,0.72,1l10.39,6c0.44,0.26,1.06,0.41,1.73,0.41
		c0.68,0,1.29-0.16,1.73-0.41l12.12-7L76.36,237L76.36,237z"></path>
                        <polygon class="st1" points="62.5,229 57.3,232 68.41,241.59 76.36,237 	"></polygon>
                        <path class="st9" d="M68.41,242.5V239l-18.75-4v2l11.11,7.5c0.44,0.26,1.06,0.41,1.73,0.41c0.68,0,1.29-0.16,1.73-0.41L68.41,242.5
		z"></path>
                        <path class="st2" d="M68.41,239c0-0.39-0.27-0.74-0.72-1l-10.39-6c-0.44-0.26-1.06-0.41-1.73-0.41c-0.68,0-1.29,0.16-1.73,0.41
		l-3.46,2c-0.44,0.26-0.72,0.61-0.72,1s0.27,0.74,0.72,1l10.39,6c0.44,0.26,1.06,0.41,1.73,0.41c0.68,0,1.29-0.16,1.73-0.41l3.46-2
		C68.14,239.74,68.41,239.39,68.41,239z"></path>
                      </g>
                    </svg>
                    <svg version="1.1" class="promo-slider-icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="376px" height="324px" viewBox="0 0 376 324" style="enable-background:new 0 0 376 324;"
                      xml:space="preserve">
                      <g>
                        <g>
                          <path class="st0" d="M261.68,161v97L376,324v-97L261.68,161z"></path>
                          <g>
                            <polygon class="st5" points="376,228 261.68,162 261.68,150 376,216 			"></polygon>
                          </g>
                          <path class="st0" d="M268.61,160c0,1.1-0.78,1.55-1.73,1c-0.96-0.55-1.73-1.9-1.73-3s0.78-1.55,1.73-1
			C267.84,157.55,268.61,158.9,268.61,160z"></path>
                          <path class="st0" d="M275.54,164c0,1.1-0.78,1.55-1.73,1c-0.96-0.55-1.73-1.9-1.73-3s0.78-1.55,1.73-1
			C274.77,161.55,275.54,162.9,275.54,164z"></path>
                          <path class="st0" d="M282.47,168c0,1.1-0.78,1.55-1.73,1c-0.96-0.55-1.73-1.9-1.73-3s0.78-1.55,1.73-1S282.47,166.9,282.47,168z"></path>
                        </g>
                        <g>
                          <g>
                            <path class="st3" d="M280.74,199c0.48,0.28,0.87,0.05,0.87-0.5s-0.39-1.22-0.87-1.5l-7.79-4.5c-0.48-0.28-0.87-0.05-0.87,0.5
				s0.39,1.22,0.87,1.5L280.74,199z"></path>
                            <path class="st3" d="M280.74,229c0.48,0.28,0.87,0.05,0.87-0.5s-0.39-1.22-0.87-1.5l-7.79-4.5c-0.48-0.28-0.87-0.05-0.87,0.5
				s0.39,1.22,0.87,1.5L280.74,229z"></path>
                            <path class="st3" d="M280.74,257c0.48,0.28,0.87,0.05,0.87-0.5c0-0.55-0.39-1.22-0.87-1.5l-7.79-4.5
				c-0.48-0.28-0.87-0.05-0.87,0.5s0.39,1.22,0.87,1.5L280.74,257z"></path>
                            <path class="st3" d="M285.07,207.5c0.48,0.28,0.87,0.05,0.87-0.5s-0.39-1.22-0.87-1.5l-12.12-7c-0.48-0.28-0.87-0.05-0.87,0.5
				s0.39,1.22,0.87,1.5L285.07,207.5z"></path>
                            <path class="st3" d="M293.73,218.5c0.48,0.28,0.87,0.05,0.87-0.5s-0.39-1.22-0.87-1.5l-20.78-12c-0.48-0.28-0.87-0.05-0.87,0.5
				s0.39,1.22,0.87,1.5L293.73,218.5z"></path>
                            <path class="st3" d="M289.4,222c0.48,0.28,0.87,0.05,0.87-0.5s-0.39-1.22-0.87-1.5l-16.45-9.5c-0.48-0.28-0.87-0.05-0.87,0.5
				s0.39,1.22,0.87,1.5L289.4,222z"></path>
                            <path class="st3" d="M289.4,228c0.48,0.28,0.87,0.05,0.87-0.5s-0.39-1.22-0.87-1.5l-16.45-9.5c-0.48-0.28-0.87-0.05-0.87,0.5
				s0.39,1.22,0.87,1.5L289.4,228z"></path>
                            <path class="st3" d="M280.74,193c0.48,0.28,0.87,0.05,0.87-0.5s-0.39-1.22-0.87-1.5l-7.79-4.5c-0.48-0.28-0.87-0.05-0.87,0.5
				s0.39,1.22,0.87,1.5L280.74,193z"></path>
                            <path class="st3" d="M289.4,192c0.48,0.28,0.87,0.05,0.87-0.5s-0.39-1.22-0.87-1.5l-16.45-9.5c-0.48-0.28-0.87-0.05-0.87,0.5
				s0.39,1.22,0.87,1.5L289.4,192z"></path>
                            <path class="st3" d="M364.74,233.5l-25.98-15c-0.48-0.28-0.87-0.05-0.87,0.5v31c0,0.55,0.39,1.22,0.87,1.5l25.98,15
				c0.48,0.28,0.87,0.05,0.87-0.5v-31C365.61,234.45,365.22,233.78,364.74,233.5z"></path>
                            <path class="st3" d="M331.83,214.5l-25.98-15c-0.48-0.28-0.87-0.05-0.87,0.5v31c0,0.55,0.39,1.22,0.87,1.5l25.98,15
				c0.48,0.28,0.87,0.05,0.87-0.5v-31C332.7,215.45,332.31,214.78,331.83,214.5z"></path>
                            <path class="st3" d="M364.74,272.5l-25.98-15c-0.48-0.28-0.87-0.05-0.87,0.5v31c0,0.55,0.39,1.22,0.87,1.5l25.98,15
				c0.48,0.28,0.87,0.05,0.87-0.5v-31C365.61,273.45,365.22,272.78,364.74,272.5z"></path>
                            <path class="st3" d="M331.83,253.5l-25.98-15c-0.48-0.28-0.87-0.05-0.87,0.5v31c0,0.55,0.39,1.22,0.87,1.5l25.98,15
				c0.48,0.28,0.87,0.05,0.87-0.5v-31C332.7,254.45,332.31,253.78,331.83,253.5z"></path>
                          </g>
                        </g>
                      </g>
                    </svg>

                  </div>
                </a>
                <a href="/demo-whmcs/index.php?rp=/store/website-builder" class="promo-slider-slide swiper-slide-prev promo-slider-hide-animation" style="width: 840px; margin-right: 100px;">
                  <div class="promo-slider-body">
                    <div class="promo-slider-content">
                      <h2 class="promo-slider-title">
                        Building a Website Has Never Been Easier -
                        Create the perfect site with powerful drag and drop tools.
                      </h2>
                    </div>
                    <div class="promo-slider-more"><i class="ls ls-basket"></i>Order / Learn More</div>
                  </div>
                  <div class="promo-slider-icons">
                    <svg version="1.1" class="promo-slider-icon" id="Warstwa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="376px" height="324px" viewBox="0 0 376 324" style="enable-background:new 0 0 376 324;"
                      xml:space="preserve">
                      <g>
                        <g>
                          <path class="st0" d="M70.29,161.5c-0.48-0.28-0.87-0.95-0.87-1.5s0.39-0.78,0.87-0.5l3.46,2c0.48,0.28,0.87,0.95,0.87,1.5
                s-0.39,0.78-0.87,0.5L70.29,161.5z"></path>
                          <path class="st3" d="M78.95,166.5c-0.48-0.28-0.87-0.95-0.87-1.5s0.39-0.78,0.87-0.5l31.18,18c0.48,0.28,0.87,0.95,0.87,1.5
                s-0.39,0.78-0.87,0.5L78.95,166.5z"></path>
                          <path class="st0" d="M94.54,181.5c0.48,0.28,0.87,0.05,0.87-0.5s-0.39-1.22-0.87-1.5l-3.46-2c-0.48-0.28-0.87-0.05-0.87,0.5
                s0.39,1.22,0.87,1.5L94.54,181.5z"></path>
                          <path class="st3" d="M85.88,176.5c0.48,0.28,0.87,0.05,0.87-0.5s-0.39-1.22-0.87-1.5l-15.59-9c-0.48-0.28-0.87-0.05-0.87,0.5
                s0.39,1.22,0.87,1.5L85.88,176.5z"></path>
                        </g>
                        <g>
                          <polygon class="st3" points="116.19,174 64.23,144 64.23,96 116.19,126"></polygon>
                          <path class="st0" d="M64.23,144v-10.41l11.51-6.65c0.17-0.1,0.39-0.07,0.61,0.06s0.44,0.35,0.61,0.65l20.53,35.56L64.23,144z"></path>
                          <polygon class="st3" points="84.15,140.09 72.53,148.79 87.99,142.57"></polygon>
                          <path class="st0" d="M116.19,174v-22.41l-11.51-19.94c-0.17-0.29-0.39-0.52-0.61-0.65c-0.22-0.13-0.44-0.16-0.61-0.06
                l-30.92,17.85L116.19,174z"></path>
                        </g>
                        <g>
                          <polygon class="st3" points="116.19,114 64.23,84 64.23,36 116.19,66"></polygon>
                          <path class="st0" d="M110.13,102.5c0.48,0.28,0.87,0.05,0.87-0.5s-0.39-1.22-0.87-1.5l-29.44-17c-0.48-0.28-0.87-0.05-0.87,0.5
                s0.39,1.22,0.87,1.5L110.13,102.5z"></path>
                          <path class="st0" d="M73.76,81.5c0.48,0.28,0.87,0.05,0.87-0.5s-0.39-1.22-0.87-1.5l-3.46-2c-0.48-0.28-0.87-0.05-0.87,0.5
                s0.39,1.22,0.87,1.5L73.76,81.5z"></path>
                          <path class="st0" d="M92.81,91.5c0,1.66-1.16,2.33-2.6,1.5c-1.44-0.83-2.6-2.84-2.6-4.5s1.16-2.33,2.6-1.5
                C91.65,87.83,92.81,89.84,92.81,91.5z"></path>
                          <path class="st0" d="M86.75,75c0,0.55,0.39,1.22,0.87,1.5c0.17,0.1,0.33,0.13,0.46,0.11l6.93-1c0.24-0.04,0.41-0.26,0.41-0.61
                c0-0.36-0.16-0.77-0.41-1.08l-6.93-9c-0.13-0.17-0.29-0.32-0.46-0.42c-0.48-0.28-0.87-0.05-0.87,0.5V75z"></path>
                        </g>
                        <g>
                          <polygon class="st3" points="53.84,78 1.88,48 1.88,0 53.84,30"></polygon>
                          <g>
                            <path class="st0" d="M42.58,39.5c0.48,0.28,0.87,0.05,0.87-0.5s-0.39-1.22-0.87-1.5l-15.59-9c-0.48-0.28-0.87-0.05-0.87,0.5
                    s0.39,1.22,0.87,1.5L42.58,39.5z"></path>
                            <path class="st0" d="M32.19,39.5c0.48,0.28,0.87,0.05,0.87-0.5s-0.39-1.22-0.87-1.5l-19.05-11c-0.48-0.28-0.87-0.05-0.87,0.5
                    s0.39,1.22,0.87,1.5L32.19,39.5z"></path>
                            <path class="st0" d="M21.8,27.5c0.48,0.28,0.87,0.05,0.87-0.5s-0.39-1.22-0.87-1.5l-8.66-5c-0.48-0.28-0.87-0.05-0.87,0.5
                    s0.39,1.22,0.87,1.5L21.8,27.5z"></path>
                            <path class="st0" d="M13.14,34.5c-0.48-0.28-0.87-0.95-0.87-1.5s0.39-0.78,0.87-0.5l3.46,2c0.48,0.28,0.87,0.95,0.87,1.5
                    s-0.39,0.78-0.87,0.5L13.14,34.5z"></path>
                            <path class="st0" d="M21.8,39.5c-0.48-0.28-0.87-0.95-0.87-1.5s0.39-0.78,0.87-0.5l20.78,12c0.48,0.28,0.87,0.95,0.87,1.5
                    s-0.39,0.78-0.87,0.5L21.8,39.5z"></path>
                            <path class="st0" d="M42.58,57.5c0.48,0.28,0.87,0.05,0.87-0.5s-0.39-1.22-0.87-1.5l-3.46-2c-0.48-0.28-0.87-0.05-0.87,0.5
                    s0.39,1.22,0.87,1.5L42.58,57.5z"></path>
                            <path class="st0" d="M33.92,52.5c0.48,0.28,0.87,0.05,0.87-0.5s-0.39-1.22-0.87-1.5l-20.78-12c-0.48-0.28-0.87-0.05-0.87,0.5
                    s0.39,1.22,0.87,1.5L33.92,52.5z"></path>
                          </g>
                        </g>
                      </g>
                    </svg> <svg version="1.1" class="promo-slider-icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 376 324" style="enable-background:new 0 0 376 324;" xml:space="preserve">
                      <g>
                        <path class="st9" d="M227.6,249.5c0-0.8-0.6-1.5-1.4-2l-29.4-17c-0.9-0.5-2.1-0.8-3.5-0.8c-1.1,0-2.2,0.2-3,0.6l-21.8,9.9l-1.3,5.2
		c0,0-11.7,1.3-11.7,2.1c0,0.4,0,1.6,0,2c0,0.8,0.6,1.5,1.4,2l36.4,21c0.9,0.5,2.1,0.8,3.5,0.8s2.6-0.3,3.5-0.8
		c0.1-0.1,0.3-0.2,0.4-0.3l26-19c0.7-0.5,1.1-1.1,1.1-1.8C227.6,251.1,227.6,249.9,227.6,249.5z"></path>
                        <path class="st1" d="M200.6,270.3l8.8-6.4l-40.9-23.6l-11.2,5.1c-0.1,0.1-0.3,0.1-0.4,0.2c-0.9,0.5-1.4,1.2-1.4,2s0.6,1.5,1.4,2
		l36.4,21c0.9,0.5,2.1,0.8,3.5,0.8s2.6-0.3,3.5-0.8C200.3,270.4,200.5,270.3,200.6,270.3z"></path>
                      </g>
                      <g>
                        <path class="st9" d="M252,143.6c-0.7-1.2-1.6-2.1-2.4-2.6L131.8,73c-0.9-0.5-1.8-0.6-2.4-0.2s-1.7,1-1.7,1l122.7,200.5
		c0,0,1.1-0.6,1.7-1c0.7-0.4,1-1.2,1-2.2V147C253,146,252.7,144.8,252,143.6z"></path>
                        <g>
                          <polygon class="st2" points="126.6,204 251.3,276 251.3,251 126.6,179"></polygon>
                          <polygon class="st3" points="126.6,72 251.3,144 251.3,252 126.6,180"></polygon>
                        </g>
                        <path class="st4" d="M192.4,230c0,2.2-1.6,3.1-3.5,2s-3.5-3.8-3.5-6s1.6-3.1,3.5-2C190.9,225.1,192.4,227.8,192.4,230z"></path>
                        <g>
                          <polygon class="st5" points="246.1,243 131.8,177 131.8,81 246.1,147"></polygon>
                          <path class="st6" d="M171.6,133c1.4,0.8,2.8,2.7,3.3,4.6l5.4,21.7l5.4-15.5c0.5-1.4,1.8-1.7,3.3-0.8c1.5,0.9,2.8,2.7,3.3,4.6
			l5.4,21.7l5.4-15.5c0.5-1.4,1.8-1.7,3.3-0.8c0.4,0.2,0.7,0.5,1.1,0.8c1.8,1.8,2.8,4.6,2.2,6.3l-8.7,25c-0.5,1.4-1.8,1.7-3.3,0.8
			c-1.5-0.9-2.8-2.7-3.3-4.6l-5.4-21.7l-5.4,15.5c-0.5,1.4-1.8,1.7-3.3,0.8c-1.5-0.9-2.8-2.7-3.3-4.6l-8.7-35
			c-0.6-2.4,0.4-4.1,2.2-3.8C170.9,132.6,171.3,132.8,171.6,133 M171.6,127c-0.9-0.5-1.9-0.9-2.7-1.1c-4.5-0.9-7,3.4-5.5,9.5l8.7,35
			c1.2,4.8,4.5,9.4,8.2,11.6c3.7,2.1,7,1.3,8.2-2.1l0.4-1.3l0.4,1.8c1.2,4.8,4.5,9.4,8.2,11.6c3.7,2.1,7,1.3,8.2-2.1l8.7-25
			c1.5-4.4-0.9-11.4-5.5-15.8c-0.9-0.9-1.8-1.6-2.7-2.1c-3.7-2.2-7-1.3-8.2,2.1l-0.4,1.3l-0.4-1.8c-1.2-4.8-4.5-9.4-8.2-11.6
			c-3.7-2.1-7-1.3-8.2,2.1l-0.4,1.3l-0.4-1.8C178.6,133.8,175.4,129.2,171.6,127L171.6,127z"></path>
                        </g>
                      </g>
                      <g>
                        <path class="st9" d="M208.7,296c0-0.4,0-2,0-2L80.8,261c0,0,0,1.6,0,2s0.3,0.7,0.7,1l2.9,1.7l87.2,50.3c0.4,0.3,1.1,0.4,1.7,0.4
		c0.7,0,1.3-0.2,1.7-0.4l32.9-19C208.4,296.7,208.7,296.4,208.7,296z"></path>
                        <path class="st2" d="M208.7,294c0-0.4-0.3-0.7-0.7-1l-90.1-52c-0.4-0.3-1.1-0.4-1.7-0.4c-0.7,0-1.3,0.2-1.7,0.4l-32.9,19
		c-0.4,0.3-0.7,0.6-0.7,1s0.3,0.7,0.7,1l90.1,52c0.4,0.3,1.1,0.4,1.7,0.4c0.7,0,1.3-0.2,1.7-0.4l32.9-19
		C208.4,294.7,208.7,294.4,208.7,294z"></path>
                        <g class="st7">
                          <path class="st9" d="M113.2,273c0,0,0,0.8,0,1s0.1,0.4,0.4,0.5l38.1,22c0.2,0.1,0.5,0.2,0.9,0.2s0.6-0.1,0.9-0.2l3.5-2
			c0.2-0.1,0.4-0.3,0.4-0.5s0-1,0-1L113.2,273z"></path>
                          <path class="st9" d="M99.4,265c0,0,0,0.8,0,1s0.1,0.4,0.4,0.5l3.5,2c0.2,0.1,0.5,0.2,0.9,0.2c0.3,0,0.6-0.1,0.9-0.2l3.5-2
			c0.2-0.1,0.4-0.3,0.4-0.5s0-1,0-1H99.4z"></path>
                          <path class="st9" d="M106.3,261c0,0,0,0.8,0,1s0.1,0.4,0.4,0.5l3.5,2c0.2,0.1,0.5,0.2,0.9,0.2c0.3,0,0.6-0.1,0.9-0.2l3.5-2
			c0.2-0.1,0.4-0.3,0.4-0.5c0-0.2,0-1,0-1H106.3z"></path>
                          <path class="st9" d="M116.7,259c0,0,0,0.8,0,1c0,0.2,0.1,0.4,0.4,0.5l3.5,2c0.2,0.1,0.5,0.2,0.9,0.2c0.3,0,0.6-0.1,0.9-0.2l3.5-2
			c0.2-0.1,0.4-0.3,0.4-0.5c0-0.2,0-1,0-1H116.7z"></path>
                          <path class="st9" d="M120.2,253c0,0,0,0.8,0,1c0,0.2,0.1,0.4,0.4,0.5l3.5,2c0.2,0.1,0.5,0.2,0.9,0.2c0.3,0,0.6-0.1,0.9-0.2l3.5-2
			c0.2-0.1,0.4-0.3,0.4-0.5c0-0.2,0-1,0-1H120.2z"></path>
                          <path class="st9" d="M127.1,257c0,0,0,0.8,0,1c0,0.2,0.1,0.4,0.4,0.5l3.5,2c0.2,0.1,0.5,0.2,0.9,0.2s0.6-0.1,0.9-0.2l3.5-2
			c0.2-0.1,0.4-0.3,0.4-0.5c0-0.2,0-1,0-1H127.1z"></path>
                          <path class="st9" d="M134,261c0,0,0,0.8,0,1c0,0.2,0.1,0.4,0.4,0.5l3.5,2c0.2,0.1,0.5,0.2,0.9,0.2s0.6-0.1,0.9-0.2l3.5-2
			c0.2-0.1,0.4-0.3,0.4-0.5c0-0.2,0-1,0-1H134z"></path>
                          <path class="st9" d="M140.9,265c0,0,0,0.8,0,1c0,0.2,0.1,0.4,0.4,0.5l3.5,2c0.2,0.1,0.5,0.2,0.9,0.2s0.6-0.1,0.9-0.2l3.5-2
			c0.2-0.1,0.4-0.3,0.4-0.5c0-0.2,0-1,0-1H140.9z"></path>
                          <path class="st9" d="M137.5,271c0,0,0,0.8,0,1c0,0.2,0.1,0.4,0.4,0.5l3.5,2c0.2,0.1,0.5,0.2,0.9,0.2s0.6-0.1,0.9-0.2l3.5-2
			c0.2-0.1,0.4-0.3,0.4-0.5c0-0.2,0-1,0-1H137.5z"></path>
                          <path class="st9" d="M144.4,275c0,0,0,0.8,0,1c0,0.2,0.1,0.4,0.4,0.5l3.5,2c0.2,0.1,0.5,0.2,0.9,0.2s0.6-0.1,0.9-0.2l3.5-2
			c0.2-0.1,0.4-0.3,0.4-0.5c0-0.2,0-1,0-1H144.4z"></path>
                          <path class="st9" d="M147.9,269c0,0,0,0.8,0,1c0,0.2,0.1,0.4,0.4,0.5l3.5,2c0.2,0.1,0.5,0.2,0.9,0.2s0.6-0.1,0.9-0.2l3.5-2
			c0.2-0.1,0.4-0.3,0.4-0.5c0-0.2,0-1,0-1H147.9z"></path>
                          <path class="st9" d="M154.8,273c0,0,0,0.8,0,1c0,0.2,0.1,0.4,0.4,0.5l3.5,2c0.2,0.1,0.5,0.2,0.9,0.2s0.6-0.1,0.9-0.2l3.5-2
			c0.2-0.1,0.4-0.3,0.4-0.5c0-0.2,0-1,0-1H154.8z"></path>
                          <path class="st9" d="M140.9,281c0,0,0,0.8,0,1s0.1,0.4,0.4,0.5l3.5,2c0.2,0.1,0.5,0.2,0.9,0.2s0.6-0.1,0.9-0.2l3.5-2
			c0.2-0.1,0.4-0.3,0.4-0.5c0-0.2,0-1,0-1H140.9z"></path>
                          <path class="st9" d="M151.3,279c0,0,0,0.8,0,1c0,0.2,0.1,0.4,0.4,0.5l3.5,2c0.2,0.1,0.5,0.2,0.9,0.2s0.6-0.1,0.9-0.2l3.5-2
			c0.2-0.1,0.4-0.3,0.4-0.5c0-0.2,0-1,0-1H151.3z"></path>
                          <path class="st9" d="M147.9,285c0,0,0,0.8,0,1s0.1,0.4,0.4,0.5l3.5,2c0.2,0.1,0.5,0.2,0.9,0.2s0.6-0.1,0.9-0.2l3.5-2
			c0.2-0.1,0.4-0.3,0.4-0.5c0-0.2,0-1,0-1H147.9z"></path>
                          <path class="st9" d="M154.8,289c0,0,0,0.8,0,1s0.1,0.4,0.4,0.5l3.5,2c0.2,0.1,0.5,0.2,0.9,0.2s0.6-0.1,0.9-0.2l3.5-2
			c0.2-0.1,0.4-0.3,0.4-0.5c0-0.2,0-1,0-1H154.8z"></path>
                          <path class="st9" d="M158.3,283c0,0,0,0.8,0,1c0,0.2,0.1,0.4,0.4,0.5l3.5,2c0.2,0.1,0.5,0.2,0.9,0.2s0.6-0.1,0.9-0.2l3.5-2
			c0.2-0.1,0.4-0.3,0.4-0.5c0-0.2,0-1,0-1H158.3z"></path>
                          <path class="st9" d="M161.7,277c0,0,0,0.8,0,1c0,0.2,0.1,0.4,0.4,0.5l3.5,2c0.2,0.1,0.5,0.2,0.9,0.2s0.6-0.1,0.9-0.2l3.5-2
			c0.2-0.1,0.4-0.3,0.4-0.5c0-0.2,0-1,0-1H161.7z"></path>
                          <path class="st9" d="M168.7,281c0,0,0,0.8,0,1c0,0.2,0.1,0.4,0.4,0.5l3.5,2c0.2,0.1,0.5,0.2,0.9,0.2s0.6-0.1,0.9-0.2l3.5-2
			c0.2-0.1,0.4-0.3,0.4-0.5c0-0.2,0-1,0-1H168.7z"></path>
                          <path class="st9" d="M165.2,287c0,0,0,0.8,0,1c0,0.2,0.1,0.4,0.4,0.5l3.5,2c0.2,0.1,0.5,0.2,0.9,0.2s0.6-0.1,0.9-0.2l3.5-2
			c0.2-0.1,0.4-0.3,0.4-0.5c0-0.2,0-1,0-1H165.2z"></path>
                          <path class="st9" d="M175.6,285c0,0,0,0.8,0,1c0,0.2,0.1,0.4,0.4,0.5l3.5,2c0.2,0.1,0.5,0.2,0.9,0.2s0.6-0.1,0.9-0.2l3.5-2
			c0.2-0.1,0.4-0.3,0.4-0.5c0-0.2,0-1,0-1H175.6z"></path>
                          <path class="st9" d="M172.1,291c0,0,0,0.8,0,1c0,0.2,0.1,0.4,0.4,0.5l3.5,2c0.2,0.1,0.5,0.2,0.9,0.2s0.6-0.1,0.9-0.2l3.5-2
			c0.2-0.1,0.4-0.3,0.4-0.5c0-0.2,0-1,0-1H172.1z"></path>
                          <path class="st9" d="M182.5,289c0,0,0,0.8,0,1c0,0.2,0.1,0.4,0.4,0.5l3.5,2c0.2,0.1,0.5,0.2,0.9,0.2s0.6-0.1,0.9-0.2l3.5-2
			c0.2-0.1,0.4-0.3,0.4-0.5c0-0.2,0-1,0-1H182.5z"></path>
                          <path class="st9" d="M189.4,293c0,0,0,0.8,0,1c0,0.2,0.1,0.4,0.4,0.5l3.5,2c0.2,0.1,0.5,0.2,0.9,0.2s0.6-0.1,0.9-0.2l3.5-2
			c0.2-0.1,0.4-0.3,0.4-0.5c0-0.2,0-1,0-1H189.4z"></path>
                          <path class="st9" d="M168.7,297c0,0,0,0.8,0,1s0.1,0.4,0.4,0.5l3.5,2c0.2,0.1,0.5,0.2,0.9,0.2s0.6-0.1,0.9-0.2l3.5-2
			c0.2-0.1,0.4-0.3,0.4-0.5c0-0.2,0-1,0-1H168.7z"></path>
                          <path class="st9" d="M161.7,301c0,0,0,0.8,0,1s0.1,0.4,0.4,0.5l3.5,2c0.2,0.1,0.5,0.2,0.9,0.2s0.6-0.1,0.9-0.2l3.5-2
			c0.2-0.1,0.4-0.3,0.4-0.5s0-1,0-1H161.7z"></path>
                          <path class="st9" d="M168.7,305c0,0,0,0.8,0,1s0.1,0.4,0.4,0.5l3.5,2c0.2,0.1,0.5,0.2,0.9,0.2s0.6-0.1,0.9-0.2l3.5-2
			c0.2-0.1,0.4-0.3,0.4-0.5s0-1,0-1H168.7z"></path>
                          <path class="st9" d="M161.7,293c0,0,0,0.8,0,1s0.1,0.4,0.4,0.5l3.5,2c0.2,0.1,0.5,0.2,0.9,0.2s0.6-0.1,0.9-0.2l3.5-2
			c0.2-0.1,0.4-0.3,0.4-0.5c0-0.2,0-1,0-1H161.7z"></path>
                          <path class="st9" d="M154.8,297c0,0,0,0.8,0,1s0.1,0.4,0.4,0.5l3.5,2c0.2,0.1,0.5,0.2,0.9,0.2s0.6-0.1,0.9-0.2l3.5-2
			c0.2-0.1,0.4-0.3,0.4-0.5s0-1,0-1H154.8z"></path>
                          <path class="st9" d="M134,277c0,0,0,0.8,0,1s0.1,0.4,0.4,0.5l3.5,2c0.2,0.1,0.5,0.2,0.9,0.2s0.6-0.1,0.9-0.2l3.5-2
			c0.2-0.1,0.4-0.3,0.4-0.5c0-0.2,0-1,0-1H134z"></path>
                          <path class="st9" d="M130.6,267c0,0,0,0.8,0,1c0,0.2,0.1,0.4,0.4,0.5l3.5,2c0.2,0.1,0.5,0.2,0.9,0.2s0.6-0.1,0.9-0.2l3.5-2
			c0.2-0.1,0.4-0.3,0.4-0.5c0-0.2,0-1,0-1H130.6z"></path>
                          <path class="st9" d="M127.1,273c0,0,0,0.8,0,1s0.1,0.4,0.4,0.5l3.5,2c0.2,0.1,0.5,0.2,0.9,0.2s0.6-0.1,0.9-0.2l3.5-2
			c0.2-0.1,0.4-0.3,0.4-0.5c0-0.2,0-1,0-1H127.1z"></path>
                          <path class="st9" d="M123.6,263c0,0,0,0.8,0,1c0,0.2,0.1,0.4,0.4,0.5l3.5,2c0.2,0.1,0.5,0.2,0.9,0.2s0.6-0.1,0.9-0.2l3.5-2
			c0.2-0.1,0.4-0.3,0.4-0.5c0-0.2,0-1,0-1H123.6z"></path>
                          <path class="st9" d="M120.2,269c0,0,0,0.8,0,1s0.1,0.4,0.4,0.5l3.5,2c0.2,0.1,0.5,0.2,0.9,0.2c0.3,0,0.6-0.1,0.9-0.2l3.5-2
			c0.2-0.1,0.4-0.3,0.4-0.5c0-0.2,0-1,0-1H120.2z"></path>
                          <path class="st9" d="M113.2,265c0,0,0,0.8,0,1s0.1,0.4,0.4,0.5l3.5,2c0.2,0.1,0.5,0.2,0.9,0.2c0.3,0,0.6-0.1,0.9-0.2l3.5-2
			c0.2-0.1,0.4-0.3,0.4-0.5c0-0.2,0-1,0-1H113.2z"></path>
                          <path class="st9" d="M106.3,269c0,0,0,0.8,0,1s0.1,0.4,0.4,0.5l3.5,2c0.2,0.1,0.5,0.2,0.9,0.2c0.3,0,0.6-0.1,0.9-0.2l3.5-2
			c0.2-0.1,0.4-0.3,0.4-0.5s0-1,0-1H106.3z"></path>
                          <path class="st9" d="M90.7,260c0,0,0,0.8,0,1s0.1,0.4,0.4,0.5l5.2,3c0.2,0.1,0.5,0.2,0.9,0.2c0.3,0,0.6-0.1,0.9-0.2l3.5-2
			c0.2-0.1,0.4-0.3,0.4-0.5s0-1,0-1L90.7,260z"></path>
                          <path class="st9" d="M97.7,256c0,0,0,0.8,0,1s0.1,0.4,0.4,0.5l5.2,3c0.2,0.1,0.5,0.2,0.9,0.2c0.3,0,0.6-0.1,0.9-0.2l3.5-2
			c0.2-0.1,0.4-0.3,0.4-0.5c0-0.2,0-1,0-1L97.7,256z"></path>
                          <path class="st9" d="M191.9,298c0-0.2,0-1,0-1l-12.8-2c0,0,0,0.8,0,1c0,0.2,0.1,0.4,0.4,0.5l2.6,1.5l-6.4,3c0,0,0,0.8,0,1
			c0,0.2,0.1,0.4,0.4,0.5l3.5,2c0.2,0.1,0.5,0.2,0.9,0.2s0.6-0.1,0.9-0.2l10.4-6C191.8,298.4,191.9,298.2,191.9,298z"></path>
                          <path class="st9" d="M104.6,252c0,0,0,0.8,0,1c0,0.2,0.1,0.4,0.4,0.5l8.7,5c0.2,0.1,0.5,0.2,0.9,0.2c0.3,0,0.6-0.1,0.9-0.2l3.5-2
			c0.2-0.1,0.4-0.3,0.4-0.5c0-0.2,0-1,0-1L104.6,252z"></path>
                          <path class="st9" d="M111.5,248c0,0,0,0.8,0,1c0,0.2,0.1,0.4,0.4,0.5l5.2,3c0.2,0.1,0.5,0.2,0.9,0.2c0.3,0,0.6-0.1,0.9-0.2l3.5-2
			c0.2-0.1,0.4-0.3,0.4-0.5c0-0.2,0-1,0-1L111.5,248z"></path>
                        </g>
                        <g>
                          <path class="st8" d="M177.7,304.5l-3.5-2c-0.2-0.1-0.5-0.2-0.9-0.2c-0.3,0-0.6,0.1-0.9,0.2l-3.5,2c-0.2,0.1-0.4,0.3-0.4,0.5
			s0.1,0.4,0.4,0.5l3.5,2c0.2,0.1,0.5,0.2,0.9,0.2c0.3,0,0.6-0.1,0.9-0.2l3.5-2c0.2-0.1,0.4-0.3,0.4-0.5S177.9,304.6,177.7,304.5z"></path>
                          <path class="st8" d="M171.1,301c0-0.2-0.1-0.4-0.4-0.5l-3.5-2c-0.2-0.1-0.5-0.2-0.9-0.2c-0.3,0-0.6,0.1-0.9,0.2l-3.5,2
			c-0.2,0.1-0.4,0.3-0.4,0.5s0.1,0.4,0.4,0.5l3.5,2c0.2,0.1,0.5,0.2,0.9,0.2c0.3,0,0.6-0.1,0.9-0.2l3.5-2
			C171,301.4,171.1,301.2,171.1,301z"></path>
                          <path class="st8" d="M164.2,297c0-0.2-0.1-0.4-0.4-0.5l-3.5-2c-0.2-0.1-0.5-0.2-0.9-0.2c-0.3,0-0.6,0.1-0.9,0.2l-3.5,2
			c-0.2,0.1-0.4,0.3-0.4,0.5s0.1,0.4,0.4,0.5l3.5,2c0.2,0.1,0.5,0.2,0.9,0.2c0.3,0,0.6-0.1,0.9-0.2l3.5-2
			C164,297.4,164.2,297.2,164.2,297z"></path>
                          <path class="st8" d="M157.3,293c0-0.2-0.1-0.4-0.4-0.5l-38.1-22c-0.2-0.1-0.5-0.2-0.9-0.2c-0.3,0-0.6,0.1-0.9,0.2l-3.5,2
			c-0.2,0.1-0.4,0.3-0.4,0.5s0.1,0.4,0.4,0.5l38.1,22c0.2,0.1,0.5,0.2,0.9,0.2c0.3,0,0.6-0.1,0.9-0.2l3.5-2
			C157.1,293.4,157.3,293.2,157.3,293z"></path>
                          <path class="st8" d="M115.7,269c0-0.2-0.1-0.4-0.4-0.5l-3.5-2c-0.2-0.1-0.5-0.2-0.9-0.2c-0.3,0-0.6,0.1-0.9,0.2l-3.5,2
			c-0.2,0.1-0.4,0.3-0.4,0.5s0.1,0.4,0.4,0.5l3.5,2c0.2,0.1,0.5,0.2,0.9,0.2s0.6-0.1,0.9-0.2l3.5-2
			C115.5,269.4,115.7,269.2,115.7,269z"></path>
                          <path class="st8" d="M108.8,265c0-0.2-0.1-0.4-0.4-0.5l-3.5-2c-0.2-0.1-0.5-0.2-0.9-0.2s-0.6,0.1-0.9,0.2l-3.5,2
			c-0.2,0.1-0.4,0.3-0.4,0.5s0.1,0.4,0.4,0.5l3.5,2c0.2,0.1,0.5,0.2,0.9,0.2c0.3,0,0.6-0.1,0.9-0.2l3.5-2
			C108.6,265.4,108.8,265.2,108.8,265z"></path>
                          <path class="st8" d="M101.8,261c0-0.2-0.1-0.4-0.4-0.5l-5.2-3c-0.2-0.1-0.5-0.2-0.9-0.2c-0.3,0-0.6,0.1-0.9,0.2l-3.5,2
			c-0.2,0.1-0.4,0.3-0.4,0.5s0.1,0.4,0.4,0.5l5.2,3c0.2,0.1,0.5,0.2,0.9,0.2c0.3,0,0.6-0.1,0.9-0.2l3.5-2
			C101.7,261.4,101.8,261.2,101.8,261z"></path>
                          <path class="st8" d="M169,297.5l3.5,2c0.2,0.1,0.5,0.2,0.9,0.2c0.3,0,0.6-0.1,0.9-0.2l3.5-2c0.2-0.1,0.4-0.3,0.4-0.5
			c0-0.2-0.1-0.4-0.4-0.5l-3.5-2c-0.2-0.1-0.5-0.2-0.9-0.2c-0.3,0-0.6,0.1-0.9,0.2l-3.5,2c-0.2,0.1-0.4,0.3-0.4,0.5
			S168.8,297.4,169,297.5z"></path>
                          <path class="st8" d="M162.1,293.5l3.5,2c0.2,0.1,0.5,0.2,0.9,0.2c0.3,0,0.6-0.1,0.9-0.2l3.5-2c0.2-0.1,0.4-0.3,0.4-0.5
			c0-0.2-0.1-0.4-0.4-0.5l-3.5-2c-0.2-0.1-0.5-0.2-0.9-0.2c-0.3,0-0.6,0.1-0.9,0.2l-3.5,2c-0.2,0.1-0.4,0.3-0.4,0.5
			S161.9,293.4,162.1,293.5z"></path>
                          <path class="st8" d="M155.2,289.5l3.5,2c0.2,0.1,0.5,0.2,0.9,0.2c0.3,0,0.6-0.1,0.9-0.2l3.5-2c0.2-0.1,0.4-0.3,0.4-0.5
			c0-0.2-0.1-0.4-0.4-0.5l-3.5-2c-0.2-0.1-0.5-0.2-0.9-0.2c-0.3,0-0.6,0.1-0.9,0.2l-3.5,2c-0.2,0.1-0.4,0.3-0.4,0.5
			S154.9,289.4,155.2,289.5z"></path>
                          <path class="st8" d="M148.2,285.5l3.5,2c0.2,0.1,0.5,0.2,0.9,0.2c0.3,0,0.6-0.1,0.9-0.2l3.5-2c0.2-0.1,0.4-0.3,0.4-0.5
			c0-0.2-0.1-0.4-0.4-0.5l-3.5-2c-0.2-0.1-0.5-0.2-0.9-0.2c-0.3,0-0.6,0.1-0.9,0.2l-3.5,2c-0.2,0.1-0.4,0.3-0.4,0.5
			S148,285.4,148.2,285.5z"></path>
                          <path class="st8" d="M141.3,281.5l3.5,2c0.2,0.1,0.5,0.2,0.9,0.2c0.3,0,0.6-0.1,0.9-0.2l3.5-2c0.2-0.1,0.4-0.3,0.4-0.5
			c0-0.2-0.1-0.4-0.4-0.5l-3.5-2c-0.2-0.1-0.5-0.2-0.9-0.2c-0.3,0-0.6,0.1-0.9,0.2l-3.5,2c-0.2,0.1-0.4,0.3-0.4,0.5
			S141.1,281.4,141.3,281.5z"></path>
                          <path class="st8" d="M134.4,277.5l3.5,2c0.2,0.1,0.5,0.2,0.9,0.2c0.3,0,0.6-0.1,0.9-0.2l3.5-2c0.2-0.1,0.4-0.3,0.4-0.5
			c0-0.2-0.1-0.4-0.4-0.5l-3.5-2c-0.2-0.1-0.5-0.2-0.9-0.2c-0.3,0-0.6,0.1-0.9,0.2l-3.5,2c-0.2,0.1-0.4,0.3-0.4,0.5
			S134.2,277.4,134.4,277.5z"></path>
                          <path class="st8" d="M127.5,273.5l3.5,2c0.2,0.1,0.5,0.2,0.9,0.2c0.3,0,0.6-0.1,0.9-0.2l3.5-2c0.2-0.1,0.4-0.3,0.4-0.5
			c0-0.2-0.1-0.4-0.4-0.5l-3.5-2c-0.2-0.1-0.5-0.2-0.9-0.2c-0.3,0-0.6,0.1-0.9,0.2l-3.5,2c-0.2,0.1-0.4,0.3-0.4,0.5
			S127.2,273.4,127.5,273.5z"></path>
                          <path class="st8" d="M120.5,269.5l3.5,2c0.2,0.1,0.5,0.2,0.9,0.2c0.3,0,0.6-0.1,0.9-0.2l3.5-2c0.2-0.1,0.4-0.3,0.4-0.5
			c0-0.2-0.1-0.4-0.4-0.5l-3.5-2c-0.2-0.1-0.5-0.2-0.9-0.2c-0.3,0-0.6,0.1-0.9,0.2l-3.5,2c-0.2,0.1-0.4,0.3-0.4,0.5
			S120.3,269.4,120.5,269.5z"></path>
                          <path class="st8" d="M113.6,265.5l3.5,2c0.2,0.1,0.5,0.2,0.9,0.2c0.3,0,0.6-0.1,0.9-0.2l3.5-2c0.2-0.1,0.4-0.3,0.4-0.5
			c0-0.2-0.1-0.4-0.4-0.5l-3.5-2c-0.2-0.1-0.5-0.2-0.9-0.2c-0.3,0-0.6,0.1-0.9,0.2l-3.5,2c-0.2,0.1-0.4,0.3-0.4,0.5
			S113.4,265.4,113.6,265.5z"></path>
                          <path class="st8" d="M115.7,261c0-0.2-0.1-0.4-0.4-0.5l-3.5-2c-0.2-0.1-0.5-0.2-0.9-0.2c-0.3,0-0.6,0.1-0.9,0.2l-3.5,2
			c-0.2,0.1-0.4,0.3-0.4,0.5s0.1,0.4,0.4,0.5l3.5,2c0.2,0.1,0.5,0.2,0.9,0.2s0.6-0.1,0.9-0.2l3.5-2
			C115.5,261.4,115.7,261.2,115.7,261z"></path>
                          <path class="st8" d="M98,256.5l5.2,3c0.2,0.1,0.5,0.2,0.9,0.2c0.3,0,0.6-0.1,0.9-0.2l3.5-2c0.2-0.1,0.4-0.3,0.4-0.5
			c0-0.2-0.1-0.4-0.4-0.5l-5.2-3c-0.2-0.1-0.5-0.2-0.9-0.2c-0.3,0-0.6,0.1-0.9,0.2l-3.5,2c-0.2,0.1-0.4,0.3-0.4,0.5
			S97.8,256.4,98,256.5z"></path>
                          <path class="st8" d="M181.5,291c0-0.2-0.1-0.4-0.4-0.5l-3.5-2c-0.2-0.1-0.5-0.2-0.9-0.2c-0.3,0-0.6,0.1-0.9,0.2l-3.5,2
			c-0.2,0.1-0.4,0.3-0.4,0.5c0,0.2,0.1,0.4,0.4,0.5l3.5,2c0.2,0.1,0.5,0.2,0.9,0.2c0.3,0,0.6-0.1,0.9-0.2l3.5-2
			C181.4,291.4,181.5,291.2,181.5,291z"></path>
                          <path class="st8" d="M191.5,296.5l-6.9-4c-0.2-0.1-0.5-0.2-0.9-0.2c-0.3,0-0.6,0.1-0.9,0.2l-3.5,2c-0.2,0.1-0.4,0.3-0.4,0.5
			c0,0.2,0.1,0.4,0.4,0.5l2.6,1.5l-6.1,3.5c-0.2,0.1-0.4,0.3-0.4,0.5c0,0.2,0.1,0.4,0.4,0.5l3.5,2c0.2,0.1,0.5,0.2,0.9,0.2
			c0.3,0,0.6-0.1,0.9-0.2l10.4-6c0.2-0.1,0.4-0.3,0.4-0.5S191.8,296.6,191.5,296.5z"></path>
                          <path class="st8" d="M165.2,287c0,0.2,0.1,0.4,0.4,0.5l3.5,2c0.2,0.1,0.5,0.2,0.9,0.2c0.3,0,0.6-0.1,0.9-0.2l3.5-2
			c0.2-0.1,0.4-0.3,0.4-0.5c0-0.2-0.1-0.4-0.4-0.5l-3.5-2c-0.2-0.1-0.5-0.2-0.9-0.2c-0.3,0-0.6,0.1-0.9,0.2l-3.5,2
			C165.3,286.6,165.2,286.8,165.2,287z"></path>
                          <path class="st8" d="M167.3,282.5l-3.5-2c-0.2-0.1-0.5-0.2-0.9-0.2c-0.3,0-0.6,0.1-0.9,0.2l-3.5,2c-0.2,0.1-0.4,0.3-0.4,0.5
			c0,0.2,0.1,0.4,0.4,0.5l3.5,2c0.2,0.1,0.5,0.2,0.9,0.2c0.3,0,0.6-0.1,0.9-0.2l3.5-2c0.2-0.1,0.4-0.3,0.4-0.5
			C167.7,282.8,167.5,282.6,167.3,282.5z"></path>
                          <path class="st8" d="M160.4,278.5l-3.5-2c-0.2-0.1-0.5-0.2-0.9-0.2c-0.3,0-0.6,0.1-0.9,0.2l-3.5,2c-0.2,0.1-0.4,0.3-0.4,0.5
			c0,0.2,0.1,0.4,0.4,0.5l3.5,2c0.2,0.1,0.5,0.2,0.9,0.2c0.3,0,0.6-0.1,0.9-0.2l3.5-2c0.2-0.1,0.4-0.3,0.4-0.5
			C160.7,278.8,160.6,278.6,160.4,278.5z"></path>
                          <path class="st8" d="M153.4,274.5l-3.5-2c-0.2-0.1-0.5-0.2-0.9-0.2c-0.3,0-0.6,0.1-0.9,0.2l-3.5,2c-0.2,0.1-0.4,0.3-0.4,0.5
			c0,0.2,0.1,0.4,0.4,0.5l3.5,2c0.2,0.1,0.5,0.2,0.9,0.2c0.3,0,0.6-0.1,0.9-0.2l3.5-2c0.2-0.1,0.4-0.3,0.4-0.5
			C153.8,274.8,153.7,274.6,153.4,274.5z"></path>
                          <path class="st8" d="M146.5,270.5l-3.5-2c-0.2-0.1-0.5-0.2-0.9-0.2c-0.3,0-0.6,0.1-0.9,0.2l-3.5,2c-0.2,0.1-0.4,0.3-0.4,0.5
			c0,0.2,0.1,0.4,0.4,0.5l3.5,2c0.2,0.1,0.5,0.2,0.9,0.2c0.3,0,0.6-0.1,0.9-0.2l3.5-2c0.2-0.1,0.4-0.3,0.4-0.5
			C146.9,270.8,146.7,270.6,146.5,270.5z"></path>
                          <path class="st8" d="M139.6,266.5l-3.5-2c-0.2-0.1-0.5-0.2-0.9-0.2c-0.3,0-0.6,0.1-0.9,0.2l-3.5,2c-0.2,0.1-0.4,0.3-0.4,0.5
			c0,0.2,0.1,0.4,0.4,0.5l3.5,2c0.2,0.1,0.5,0.2,0.9,0.2c0.3,0,0.6-0.1,0.9-0.2l3.5-2c0.2-0.1,0.4-0.3,0.4-0.5
			C139.9,266.8,139.8,266.6,139.6,266.5z"></path>
                          <path class="st8" d="M132.7,262.5l-3.5-2c-0.2-0.1-0.5-0.2-0.9-0.2c-0.3,0-0.6,0.1-0.9,0.2l-3.5,2c-0.2,0.1-0.4,0.3-0.4,0.5
			c0,0.2,0.1,0.4,0.4,0.5l3.5,2c0.2,0.1,0.5,0.2,0.9,0.2c0.3,0,0.6-0.1,0.9-0.2l3.5-2c0.2-0.1,0.4-0.3,0.4-0.5
			C133,262.8,132.9,262.6,132.7,262.5z"></path>
                          <path class="st8" d="M125.7,258.5l-3.5-2c-0.2-0.1-0.5-0.2-0.9-0.2c-0.3,0-0.6,0.1-0.9,0.2l-3.5,2c-0.2,0.1-0.4,0.3-0.4,0.5
			c0,0.2,0.1,0.4,0.4,0.5l3.5,2c0.2,0.1,0.5,0.2,0.9,0.2c0.3,0,0.6-0.1,0.9-0.2l3.5-2c0.2-0.1,0.4-0.3,0.4-0.5
			C126.1,258.8,125.9,258.6,125.7,258.5z"></path>
                          <path class="st8" d="M104.9,252.5l8.7,5c0.2,0.1,0.5,0.2,0.9,0.2c0.3,0,0.6-0.1,0.9-0.2l3.5-2c0.2-0.1,0.4-0.3,0.4-0.5
			c0-0.2-0.1-0.4-0.4-0.5l-8.7-5c-0.2-0.1-0.5-0.2-0.9-0.2s-0.6,0.1-0.9,0.2l-3.5,2c-0.2,0.1-0.4,0.3-0.4,0.5
			C104.6,252.2,104.7,252.4,104.9,252.5z"></path>
                          <path class="st8" d="M198.5,292.5l-3.5-2c-0.2-0.1-0.5-0.2-0.9-0.2c-0.3,0-0.6,0.1-0.9,0.2l-3.5,2c-0.2,0.1-0.4,0.3-0.4,0.5
			c0,0.2,0.1,0.4,0.4,0.5l3.5,2c0.2,0.1,0.5,0.2,0.9,0.2c0.3,0,0.6-0.1,0.9-0.2l3.5-2c0.2-0.1,0.4-0.3,0.4-0.5
			C198.8,292.8,198.7,292.6,198.5,292.5z"></path>
                          <path class="st8" d="M182.5,289c0,0.2,0.1,0.4,0.4,0.5l3.5,2c0.2,0.1,0.5,0.2,0.9,0.2c0.3,0,0.6-0.1,0.9-0.2l3.5-2
			c0.2-0.1,0.4-0.3,0.4-0.5c0-0.2-0.1-0.4-0.4-0.5l-3.5-2c-0.2-0.1-0.5-0.2-0.9-0.2c-0.3,0-0.6,0.1-0.9,0.2l-3.5,2
			C182.7,288.6,182.5,288.8,182.5,289z"></path>
                          <path class="st8" d="M175.6,285c0,0.2,0.1,0.4,0.4,0.5l3.5,2c0.2,0.1,0.5,0.2,0.9,0.2c0.3,0,0.6-0.1,0.9-0.2l3.5-2
			c0.2-0.1,0.4-0.3,0.4-0.5c0-0.2-0.1-0.4-0.4-0.5l-3.5-2c-0.2-0.1-0.5-0.2-0.9-0.2c-0.3,0-0.6,0.1-0.9,0.2l-3.5,2
			C175.7,284.6,175.6,284.8,175.6,285z"></path>
                          <path class="st8" d="M168.7,281c0,0.2,0.1,0.4,0.4,0.5l3.5,2c0.2,0.1,0.5,0.2,0.9,0.2c0.3,0,0.6-0.1,0.9-0.2l3.5-2
			c0.2-0.1,0.4-0.3,0.4-0.5c0-0.2-0.1-0.4-0.4-0.5l-3.5-2c-0.2-0.1-0.5-0.2-0.9-0.2c-0.3,0-0.6,0.1-0.9,0.2l-3.5,2
			C168.8,280.6,168.7,280.8,168.7,281z"></path>
                          <path class="st8" d="M161.7,277c0,0.2,0.1,0.4,0.4,0.5l3.5,2c0.2,0.1,0.5,0.2,0.9,0.2c0.3,0,0.6-0.1,0.9-0.2l3.5-2
			c0.2-0.1,0.4-0.3,0.4-0.5c0-0.2-0.1-0.4-0.4-0.5l-3.5-2c-0.2-0.1-0.5-0.2-0.9-0.2c-0.3,0-0.6,0.1-0.9,0.2l-3.5,2
			C161.9,276.6,161.7,276.8,161.7,277z"></path>
                          <path class="st8" d="M154.8,273c0,0.2,0.1,0.4,0.4,0.5l3.5,2c0.2,0.1,0.5,0.2,0.9,0.2c0.3,0,0.6-0.1,0.9-0.2l3.5-2
			c0.2-0.1,0.4-0.3,0.4-0.5c0-0.2-0.1-0.4-0.4-0.5l-3.5-2c-0.2-0.1-0.5-0.2-0.9-0.2c-0.3,0-0.6,0.1-0.9,0.2l-3.5,2
			C154.9,272.6,154.8,272.8,154.8,273z"></path>
                          <path class="st8" d="M147.9,269c0,0.2,0.1,0.4,0.4,0.5l3.5,2c0.2,0.1,0.5,0.2,0.9,0.2c0.3,0,0.6-0.1,0.9-0.2l3.5-2
			c0.2-0.1,0.4-0.3,0.4-0.5c0-0.2-0.1-0.4-0.4-0.5l-3.5-2c-0.2-0.1-0.5-0.2-0.9-0.2c-0.3,0-0.6,0.1-0.9,0.2l-3.5,2
			C148,268.6,147.9,268.8,147.9,269z"></path>
                          <path class="st8" d="M141,265c0,0.2,0.1,0.4,0.4,0.5l3.5,2c0.2,0.1,0.5,0.2,0.9,0.2c0.3,0,0.6-0.1,0.9-0.2l3.5-2
			c0.2-0.1,0.4-0.3,0.4-0.5c0-0.2-0.1-0.4-0.4-0.5l-3.5-2c-0.2-0.1-0.5-0.2-0.9-0.2c-0.3,0-0.6,0.1-0.9,0.2l-3.5,2
			C141.1,264.6,141,264.8,141,265z"></path>
                          <path class="st8" d="M134,261c0,0.2,0.1,0.4,0.4,0.5l3.5,2c0.2,0.1,0.5,0.2,0.9,0.2c0.3,0,0.6-0.1,0.9-0.2l3.5-2
			c0.2-0.1,0.4-0.3,0.4-0.5c0-0.2-0.1-0.4-0.4-0.5l-3.5-2c-0.2-0.1-0.5-0.2-0.9-0.2c-0.3,0-0.6,0.1-0.9,0.2l-3.5,2
			C134.2,260.6,134,260.8,134,261z"></path>
                          <path class="st8" d="M127.1,257c0,0.2,0.1,0.4,0.4,0.5l3.5,2c0.2,0.1,0.5,0.2,0.9,0.2c0.3,0,0.6-0.1,0.9-0.2l3.5-2
			c0.2-0.1,0.4-0.3,0.4-0.5c0-0.2-0.1-0.4-0.4-0.5l-3.5-2c-0.2-0.1-0.5-0.2-0.9-0.2c-0.3,0-0.6,0.1-0.9,0.2l-3.5,2
			C127.2,256.6,127.1,256.8,127.1,257z"></path>
                          <path class="st8" d="M120.2,253c0,0.2,0.1,0.4,0.4,0.5l3.5,2c0.2,0.1,0.5,0.2,0.9,0.2c0.3,0,0.6-0.1,0.9-0.2l3.5-2
			c0.2-0.1,0.4-0.3,0.4-0.5c0-0.2-0.1-0.4-0.4-0.5l-3.5-2c-0.2-0.1-0.5-0.2-0.9-0.2c-0.3,0-0.6,0.1-0.9,0.2l-3.5,2
			C120.3,252.6,120.2,252.8,120.2,253z"></path>
                          <path class="st8" d="M111.9,248.5l5.2,3c0.2,0.1,0.5,0.2,0.9,0.2c0.3,0,0.6-0.1,0.9-0.2l3.5-2c0.2-0.1,0.4-0.3,0.4-0.5
			c0-0.2-0.1-0.4-0.4-0.5l-5.2-3c-0.2-0.1-0.5-0.2-0.9-0.2c-0.3,0-0.6,0.1-0.9,0.2l-3.5,2c-0.2,0.1-0.4,0.3-0.4,0.5
			C111.5,248.2,111.6,248.4,111.9,248.5z"></path>
                        </g>
                      </g>
                      <path class="st5" d="M106.3,232.4c0.1-0.4-0.1-0.8-0.5-1.1l-11.8-9c-0.4-0.3-0.9-0.5-1.6-0.6c-0.7-0.1-1.3,0.1-1.8,0.3l-39.1,17
	c-0.5,0.2-0.9,0.6-1,0.9c-0.1,0.4,0.1,0.8,0.5,1.1l11.8,9c0.4,0.3,1,0.5,1.6,0.6s1.3-0.1,1.8-0.3l39.1-17
	C105.8,233.1,106.2,232.7,106.3,232.4z"></path>
                      <g>
                        <path class="st8" d="M43.5,242c-0.4-0.3-0.7-0.6-0.7-1s0.3-0.7,0.7-1l34.6-20c0.4-0.3,1.1-0.4,1.7-0.4c0.7,0,1.3,0.2,1.7,0.4
		l13.9,8c0.4,0.3,0.7,0.6,0.7,1s-0.3,0.7-0.7,1l-34.6,20c-0.4,0.3-1.1,0.4-1.7,0.4c-0.7,0-1.3-0.2-1.7-0.4L43.5,242z"></path>
                        <path class="st6" d="M70.3,226.5c-0.2,0.1-0.4,0.3-0.4,0.5s0.1,0.4,0.4,0.5l12.1,7c0.2,0.1,0.5,0.2,0.9,0.2c0.3,0,0.6-0.1,0.9-0.2
		l8.7-5c0.2-0.1,0.4-0.3,0.4-0.5s-0.1-0.4-0.4-0.5l-12.1-7c-0.2-0.1-0.5-0.2-0.9-0.2c-0.3,0-0.6,0.1-0.9,0.2L70.3,226.5z"></path>
                        <path class="st1" d="M58.2,233.5c-0.2,0.1-0.4,0.3-0.4,0.5s0.1,0.4,0.4,0.5l12.1,7c0.2,0.1,0.5,0.2,0.9,0.2c0.3,0,0.6-0.1,0.9-0.2
		l8.7-5c0.2-0.1,0.4-0.3,0.4-0.5s-0.1-0.4-0.4-0.5l-12.1-7c-0.2-0.1-0.5-0.2-0.9-0.2c-0.3,0-0.6,0.1-0.9,0.2L58.2,233.5z"></path>
                        <path class="st5" d="M46,240.5c-0.2,0.1-0.4,0.3-0.4,0.5s0.1,0.4,0.4,0.5l12.1,7c0.2,0.1,0.5,0.2,0.9,0.2s0.6-0.1,0.9-0.2l8.7-5
		c0.2-0.1,0.4-0.3,0.4-0.5s-0.1-0.4-0.4-0.5l-12.1-7c-0.2-0.1-0.5-0.2-0.9-0.2s-0.6,0.1-0.9,0.2L46,240.5z"></path>
                      </g>
                    </svg>
                    <svg version="1.1" class="promo-slider-icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="376px" height="324px" viewBox="0 0 376 324" style="enable-background:new 0 0 376 324;"
                      xml:space="preserve">
                      <g>
                        <g>
                          <path class="st0" d="M261.68,161v97L376,324v-97L261.68,161z"></path>
                          <g>
                            <polygon class="st5" points="376,228 261.68,162 261.68,150 376,216 			"></polygon>
                          </g>
                          <path class="st0" d="M268.61,160c0,1.1-0.78,1.55-1.73,1c-0.96-0.55-1.73-1.9-1.73-3s0.78-1.55,1.73-1
			C267.84,157.55,268.61,158.9,268.61,160z"></path>
                          <path class="st0" d="M275.54,164c0,1.1-0.78,1.55-1.73,1c-0.96-0.55-1.73-1.9-1.73-3s0.78-1.55,1.73-1
			C274.77,161.55,275.54,162.9,275.54,164z"></path>
                          <path class="st0" d="M282.47,168c0,1.1-0.78,1.55-1.73,1c-0.96-0.55-1.73-1.9-1.73-3s0.78-1.55,1.73-1S282.47,166.9,282.47,168z"></path>
                        </g>
                        <g>
                          <g>
                            <path class="st3" d="M341.36,270c0.48,0.28,0.87,0.05,0.87-0.5s-0.39-1.22-0.87-1.5l-32.91-19c-0.48-0.28-0.87-0.05-0.87,0.5
				s0.39,1.22,0.87,1.5L341.36,270z"></path>
                            <path class="st3" d="M336.16,273c0.48,0.28,0.87,0.05,0.87-0.5s-0.39-1.22-0.87-1.5l-36.37-21c-0.48-0.28-0.87-0.05-0.87,0.5
				s0.39,1.22,0.87,1.5L336.16,273z"></path>
                            <path class="st3" d="M303.25,248c0.48,0.28,0.87,0.05,0.87-0.5s-0.39-1.22-0.87-1.5l-8.66-5c-0.48-0.28-0.87-0.05-0.87,0.5
				s0.39,1.22,0.87,1.5L303.25,248z"></path>
                            <path class="st3" d="M364.74,241.5l-91.8-53c-0.48-0.28-0.87-0.05-0.87,0.5v32c0,0.55,0.39,1.22,0.87,1.5l91.8,53
				c0.48,0.28,0.87,0.05,0.87-0.5v-32C365.61,242.45,365.22,241.78,364.74,241.5z"></path>
                            <g>
                              <path class="st3" d="M330.1,275.5l-22.52-13c-0.48-0.28-0.87-0.05-0.87,0.5v8c0,0.55,0.39,1.22,0.87,1.5l22.52,13
					c0.48,0.28,0.87,0.05,0.87-0.5v-8C330.97,276.45,330.58,275.78,330.1,275.5z"></path>
                            </g>
                            <path class="st3" d="M364.74,235.5c0.48,0.28,0.87,0.05,0.87-0.5s-0.39-1.22-0.87-1.5l-3.46-2c-0.48-0.28-0.87-0.05-0.87,0.5
				s0.39,1.22,0.87,1.5L364.74,235.5z"></path>
                            <path class="st3" d="M356.08,230.5c0.48,0.28,0.87,0.05,0.87-0.5s-0.39-1.22-0.87-1.5l-3.46-2c-0.48-0.28-0.87-0.05-0.87,0.5
				s0.39,1.22,0.87,1.5L356.08,230.5z"></path>
                            <path class="st3" d="M347.42,225.5c0.48,0.28,0.87,0.05,0.87-0.5s-0.39-1.22-0.87-1.5l-3.46-2c-0.48-0.28-0.87-0.05-0.87,0.5
				s0.39,1.22,0.87,1.5L347.42,225.5z"></path>
                            <path class="st3" d="M338.76,220.5c0.48,0.28,0.87,0.05,0.87-0.5s-0.39-1.22-0.87-1.5l-3.46-2c-0.48-0.28-0.87-0.05-0.87,0.5
				s0.39,1.22,0.87,1.5L338.76,220.5z"></path>
                            <path class="st3" d="M330.1,215.5c0.48,0.28,0.87,0.05,0.87-0.5s-0.39-1.22-0.87-1.5l-3.46-2c-0.48-0.28-0.87-0.05-0.87,0.5
				s0.39,1.22,0.87,1.5L330.1,215.5z"></path>
                            <path class="st3" d="M276.41,184.5c0.48,0.28,0.87,0.05,0.87-0.5s-0.39-1.22-0.87-1.5l-3.46-2c-0.48-0.28-0.87-0.05-0.87,0.5
				s0.39,1.22,0.87,1.5L276.41,184.5z"></path>
                          </g>
                        </g>
                      </g>
                    </svg>

                  </div>
                </a>
                <a href="/demo-whmcs/index.php?rp=/store/sitelock" class="promo-slider-slide swiper-slide-active promo-slider-show-animation" style="width: 840px; margin-right: 100px;">
                  <div class="promo-slider-body">
                    <div class="promo-slider-content">
                      <h2 class="promo-slider-title">
                        SiteLock Website Security -
                        Protects your website and your reputation.
                      </h2>
                    </div>
                    <div class="promo-slider-more"><i class="ls ls-basket"></i>Order / Learn More</div>
                  </div>
                  <div class="promo-slider-icons">
                    <svg version="1.1" class="promo-slider-icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="376px" height="324px" viewBox="0 0 376 324" style="enable-background:new 0 0 376 324;"
                      xml:space="preserve">
                      <g>
                        <polygon class="st0" points="143.91,190 1.88,108 1.88,0 143.91,82"></polygon>
                        <g>
                          <path class="st3" d="M52.97,43.5c0.48,0.28,0.87,0.05,0.87-0.5s-0.39-1.22-0.87-1.5l-25.98-15c-0.48-0.28-0.87-0.05-0.87,0.5
			s0.39,1.22,0.87,1.5L52.97,43.5z"></path>
                          <path class="st3" d="M39.12,41.5c0.48,0.28,0.87,0.05,0.87-0.5s-0.39-1.22-0.87-1.5l-25.98-15c-0.48-0.28-0.87-0.05-0.87,0.5
			s0.39,1.22,0.87,1.5L39.12,41.5z"></path>
                          <path class="st9" d="M77.22,63.5c0.48,0.28,0.87,0.05,0.87-0.5s-0.39-1.22-0.87-1.5l-32.91-19c-0.48-0.28-0.87-0.05-0.87,0.5
			s0.39,1.22,0.87,1.5L77.22,63.5z"></path>
                          <path class="st9" d="M21.8,25.5c0.48,0.28,0.87,0.05,0.87-0.5s-0.39-1.22-0.87-1.5l-8.66-5c-0.48-0.28-0.87-0.05-0.87,0.5
			s0.39,1.22,0.87,1.5L21.8,25.5z"></path>
                          <path class="st3" d="M132.65,89.5c0.48,0.28,0.87,0.05,0.87-0.5s-0.39-1.22-0.87-1.5l-74.48-43c-0.48-0.28-0.87-0.05-0.87,0.5
			s0.39,1.22,0.87,1.5L132.65,89.5z"></path>
                          <path class="st9" d="M13.14,32.5c-0.48-0.28-0.87-0.95-0.87-1.5s0.39-0.78,0.87-0.5l8.66,5c0.48,0.28,0.87,0.95,0.87,1.5
			s-0.39,0.78-0.87,0.5L13.14,32.5z"></path>
                          <path class="st3" d="M82.42,66.5c-0.48-0.28-0.87-0.95-0.87-1.5s0.39-0.78,0.87-0.5l8.66,5c0.48,0.28,0.87,0.95,0.87,1.5
			s-0.39,0.78-0.87,0.5L82.42,66.5z"></path>
                          <path class="st9" d="M120.52,94.5c-0.48-0.28-0.87-0.95-0.87-1.5s0.39-0.78,0.87-0.5l5.2,3c0.48,0.28,0.87,0.95,0.87,1.5
			s-0.39,0.78-0.87,0.5L120.52,94.5z"></path>
                          <path class="st9" d="M120.52,146.5c-0.48-0.28-0.87-0.95-0.87-1.5s0.39-0.78,0.87-0.5l5.2,3c0.48,0.28,0.87,0.95,0.87,1.5
			s-0.39,0.78-0.87,0.5L120.52,146.5z"></path>
                          <path class="st3" d="M110.13,140.5c-0.48-0.28-0.87-0.95-0.87-1.5s0.39-0.78,0.87-0.5l5.2,3c0.48,0.28,0.87,0.95,0.87,1.5
			s-0.39,0.78-0.87,0.5L110.13,140.5z"></path>
                          <path class="st3" d="M96.27,80.5c-0.48-0.28-0.87-0.95-0.87-1.5s0.39-0.78,0.87-0.5l19.05,11c0.48,0.28,0.87,0.95,0.87,1.5
			s-0.39,0.78-0.87,0.5L96.27,80.5z"></path>
                          <path class="st3" d="M23.53,56.5c-0.48-0.28-0.87-0.95-0.87-1.5s0.39-0.78,0.87-0.5l15.59,9c0.48,0.28,0.87,0.95,0.87,1.5
			s-0.39,0.78-0.87,0.5L23.53,56.5z"></path>
                          <path class="st3" d="M120.52,152.5c-0.48-0.28-0.87-0.95-0.87-1.5s0.39-0.78,0.87-0.5l12.12,7c0.48,0.28,0.87,0.95,0.87,1.5
			s-0.39,0.78-0.87,0.5L120.52,152.5z"></path>
                          <path class="st9" d="M33.92,90.5c-0.48-0.28-0.87-0.95-0.87-1.5s0.39-0.78,0.87-0.5l5.2,3c0.48,0.28,0.87,0.95,0.87,1.5
			s-0.39,0.78-0.87,0.5L33.92,90.5z"></path>
                          <path class="st3" d="M26.99,40.5c-0.48-0.28-0.87-0.95-0.87-1.5s0.39-0.78,0.87-0.5l64.09,37c0.48,0.28,0.87,0.95,0.87,1.5
			s-0.39,0.78-0.87,0.5L26.99,40.5z"></path>
                          <path class="st3" d="M44.31,108.5c-0.48-0.28-0.87-0.95-0.87-1.5s0.39-0.78,0.87-0.5l71.01,41c0.48,0.28,0.87,0.95,0.87,1.5
			s-0.39,0.78-0.87,0.5L44.31,108.5z"></path>
                          <path class="st3" d="M39.12,53.5c0.48,0.28,0.87,0.05,0.87-0.5s-0.39-1.22-0.87-1.5l-25.98-15c-0.48-0.28-0.87-0.05-0.87,0.5
			s0.39,1.22,0.87,1.5L39.12,53.5z"></path>
                          <path class="st3" d="M77.22,75.5c0.48,0.28,0.87,0.05,0.87-0.5s-0.39-1.22-0.87-1.5l-32.91-19c-0.48-0.28-0.87-0.05-0.87,0.5
			s0.39,1.22,0.87,1.5L77.22,75.5z"></path>
                          <path class="st3" d="M52.97,67.5c0.48,0.28,0.87,0.05,0.87-0.5s-0.39-1.22-0.87-1.5l-29.44-17c-0.48-0.28-0.87-0.05-0.87,0.5
			s0.39,1.22,0.87,1.5L52.97,67.5z"></path>
                          <path class="st3" d="M52.97,119.5c0.48,0.28,0.87,0.05,0.87-0.5s-0.39-1.22-0.87-1.5l-29.44-17c-0.48-0.28-0.87-0.05-0.87,0.5
			s0.39,1.22,0.87,1.5L52.97,119.5z"></path>
                          <path class="st9" d="M52.97,73.5c0.48,0.28,0.87,0.05,0.87-0.5s-0.39-1.22-0.87-1.5l-8.66-5c-0.48-0.28-0.87-0.05-0.87,0.5
			s0.39,1.22,0.87,1.5L52.97,73.5z"></path>
                          <path class="st3" d="M33.92,78.5c-0.48-0.28-0.87-0.95-0.87-1.5s0.39-0.78,0.87-0.5l19.05,11c0.48,0.28,0.87,0.95,0.87,1.5
			s-0.39,0.78-0.87,0.5L33.92,78.5z"></path>
                          <path class="st9" d="M13.14,96.5c-0.48-0.28-0.87-0.95-0.87-1.5s0.39-0.78,0.87-0.5l5.2,3c0.48,0.28,0.87,0.95,0.87,1.5
			s-0.39,0.78-0.87,0.5L13.14,96.5z"></path>
                          <path class="st3" d="M23.53,96.5c-0.48-0.28-0.87-0.95-0.87-1.5s0.39-0.78,0.87-0.5l15.59,9c0.48,0.28,0.87,0.95,0.87,1.5
			s-0.39,0.78-0.87,0.5L23.53,96.5z"></path>
                          <path class="st3" d="M77.22,109.5c0.48,0.28,0.87,0.05,0.87-0.5s-0.39-1.22-0.87-1.5l-32.91-19c-0.48-0.28-0.87-0.05-0.87,0.5
			s0.39,1.22,0.87,1.5L77.22,109.5z"></path>
                          <path class="st3" d="M104.93,137.5c0.48,0.28,0.87,0.05,0.87-0.5s-0.39-1.22-0.87-1.5l-22.52-13c-0.48-0.28-0.87-0.05-0.87,0.5
			s0.39,1.22,0.87,1.5L104.93,137.5z"></path>
                          <path class="st3" d="M77.22,121.5c0.48,0.28,0.87,0.05,0.87-0.5s-0.39-1.22-0.87-1.5l-43.3-25c-0.48-0.28-0.87-0.05-0.87,0.5
			s0.39,1.22,0.87,1.5L77.22,121.5z"></path>
                          <path class="st3" d="M52.97,101.5c0.48,0.28,0.87,0.05,0.87-0.5s-0.39-1.22-0.87-1.5l-8.66-5c-0.48-0.28-0.87-0.05-0.87,0.5
			s0.39,1.22,0.87,1.5L52.97,101.5z"></path>
                          <path class="st9" d="M77.22,139.5c0.48,0.28,0.87,0.05,0.87-0.5s-0.39-1.22-0.87-1.5l-32.91-19c-0.48-0.28-0.87-0.05-0.87,0.5
			s0.39,1.22,0.87,1.5L77.22,139.5z"></path>
                          <path class="st3" d="M39.12,117.5c0.48,0.28,0.87,0.05,0.87-0.5s-0.39-1.22-0.87-1.5l-25.98-15c-0.48-0.28-0.87-0.05-0.87,0.5
			s0.39,1.22,0.87,1.5L39.12,117.5z"></path>
                        </g>
                      </g>
                      <g>
                        <g>
                          <polygon class="st5" points="116.19,206 83.28,187 83.28,161 116.19,180"></polygon>
                        </g>
                        <g>
                          <path class="st0" d="M104.93,191.5c-0.22-0.13-0.44-0.35-0.61-0.65c-0.34-0.59-0.34-1.22,0-1.41l2.85-1.65l-2.85-4.94
			c-0.34-0.59-0.34-1.22,0-1.41c0.34-0.2,0.89,0.12,1.22,0.71l3.46,6c0.34,0.59,0.34,1.22,0,1.41l-3.46,2
			C105.38,191.66,105.16,191.63,104.93,191.5z"></path>
                          <path class="st0" d="M98.01,187.5c-0.13-0.07-0.26-0.19-0.39-0.33c-0.43-0.49-0.6-1.19-0.39-1.57l3.46-6
			c0.21-0.37,0.73-0.27,1.16,0.22s0.6,1.19,0.39,1.57l-3.46,6C98.63,187.66,98.32,187.68,98.01,187.5z"></path>
                          <path class="st0" d="M94.54,185.5c-0.22-0.13-0.44-0.35-0.61-0.65l-3.46-6c-0.34-0.59-0.34-1.22,0-1.41l3.46-2
			c0.34-0.2,0.89,0.12,1.22,0.71c0.34,0.59,0.34,1.22,0,1.41l-2.85,1.65l2.85,4.94c0.34,0.59,0.34,1.22,0,1.41
			C94.99,185.66,94.76,185.63,94.54,185.5z"></path>
                        </g>
                      </g>
                    </svg>
                    <svg version="1.1" class="promo-slider-icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="376px" height="324px" viewBox="0 0 376 324" style="enable-background:new 0 0 376 324;"
                      xml:space="preserve">
                      <g>
                        <path class="sl-st0" d="M202.63,255.25c0.54,0.73,1.2,1.34,1.9,1.75c0.7,0.4,1.35,0.54,1.9,0.44l45.03-8c0.2-0.04,0.39-0.1,0.55-0.2
		c0.63-0.36,1.01-1.14,1.01-2.24V147c0-1.1-0.39-2.33-1.01-3.42c-0.45-0.78-1.03-1.49-1.67-2.03l-45.03-38
		c-0.25-0.21-0.51-0.4-0.78-0.55c-0.27-0.16-0.53-0.27-0.78-0.35l-45.03-14c-0.64-0.2-1.22-0.16-1.67,0.11
		c-0.63,0.36-1.01,1.14-1.01,2.24v100c0,1.1,0.39,2.33,1.01,3.41c0.17,0.29,0.35,0.57,0.55,0.84L202.63,255.25z"></path>
                        <path class="sl-st1" d="M252.01,143.59c-0.45-0.78-1.03-1.49-1.67-2.03l-45.03-38c-0.25-0.21-0.51-0.4-0.78-0.55
		c-0.27-0.16-0.53-0.27-0.78-0.35l-45.03-14c-0.64-0.2-1.22-0.16-1.67,0.11c-0.63,0.36-22.07,12.74-22.52,13
		c-0.63,0.36-1.01,1.14-1.01,2.24v100c0,1.1,0.39,2.33,1.01,3.41c0.17,0.29,0.35,0.57,0.55,0.84l45.03,60
		c0.54,0.73,1.2,1.34,1.9,1.75c0.7,0.4,1.35,0.54,1.9,0.44l45.03-8c0.2-0.04,0.39-0.1,0.55-0.2c0.63-0.36,22.35-12.9,22.52-13
		c0.63-0.36,1.01-1.14,1.01-2.24V147C253.02,145.9,252.64,144.67,252.01,143.59z"></path>
                        <path class="st9" d="M229.49,156.59c0.63,1.09,1.01,2.31,1.01,3.42v100c0,1.1-0.39,1.88-1.01,2.24l-6.93,4V160.59l-1.67-2.03
		l6.93-4L229.49,156.59z"></path>
                        <path class="st2" d="M222.56,160.59l6.93-4c-0.45-0.78-1.03-1.49-1.67-2.03l-45.03-38c-0.25-0.21-0.51-0.4-0.78-0.55
		c-0.27-0.16-0.53-0.27-0.78-0.35l-45.03-14c-0.64-0.2-1.22-0.16-1.67,0.11c-0.63,0.36-6.93,4-6.93,4L222.56,160.59z"></path>
                        <path class="st5" d="M173.19,272.25c0.54,0.73,1.2,1.34,1.9,1.75s1.35,0.54,1.9,0.44l45.03-8c0.2-0.04,0.38-0.1,0.55-0.2
		c0.63-0.36,1.01-1.14,1.01-2.24V164c0-1.1-0.39-2.33-1.01-3.42c-0.45-0.78-1.03-1.49-1.67-2.03l-45.03-38
		c-0.25-0.21-0.51-0.4-0.78-0.55c-0.27-0.16-0.53-0.27-0.78-0.35l-45.03-14c-0.64-0.2-1.22-0.16-1.67,0.11
		c-0.63,0.36-1.01,1.14-1.01,2.24v100c0,1.1,0.39,2.33,1.01,3.41c0.17,0.29,0.35,0.57,0.55,0.84L173.19,272.25z"></path>
                        <path class="st0" d="M192.4,183l-2.6-1.5v-1c0-9.37-6.6-20.81-14.72-25.5s-14.72-0.87-14.72,8.5v1l-2.6-1.5
		c-1.44-0.83-2.6-0.16-2.6,1.5v38c0,1.66,1.16,3.67,2.6,4.5l34.64,20c1.44,0.83,2.6,0.16,2.6-1.5v-38
		C195,185.84,193.84,183.83,192.4,183z M165.56,166.5c0-6.07,4.27-8.53,9.53-5.5s9.53,10.43,9.53,16.5v1l-19.05-11L165.56,166.5
		L165.56,166.5z M160.36,202.5v-32l28.22,16.29l-13.5,7.79l-5.58-9.66c-0.17-0.29-0.44-0.45-0.61-0.35l-3.21,1.85
		c-0.17,0.1-0.17,0.41,0,0.71l8.91,15.44c0.08,0.14,0.19,0.26,0.31,0.32l0.36,0.21c0.12,0.07,0.22,0.08,0.31,0.03l14.24-8.22v24.59
		L160.36,202.5z"></path>
                      </g>
                    </svg>
                    <svg version="1.1" class="promo-slider-icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="376px" height="324px" viewBox="0 0 376 324" style="enable-background:new 0 0 376 324;"
                      xml:space="preserve">
                      <g>
                        <g>
                          <path class="st0" d="M261.68,161v97L376,324v-97L261.68,161z"></path>
                          <g>
                            <polygon class="st5" points="376,228 261.68,162 261.68,150 376,216 			"></polygon>
                          </g>
                          <path class="st0" d="M268.61,160c0,1.1-0.78,1.55-1.73,1c-0.96-0.55-1.73-1.9-1.73-3s0.78-1.55,1.73-1
			C267.84,157.55,268.61,158.9,268.61,160z"></path>
                          <path class="st0" d="M275.54,164c0,1.1-0.78,1.55-1.73,1c-0.96-0.55-1.73-1.9-1.73-3s0.78-1.55,1.73-1
			C274.77,161.55,275.54,162.9,275.54,164z"></path>
                          <path class="st0" d="M282.47,168c0,1.1-0.78,1.55-1.73,1c-0.96-0.55-1.73-1.9-1.73-3s0.78-1.55,1.73-1S282.47,166.9,282.47,168z"></path>
                        </g>
                        <g>
                          <path class="st3" d="M337.89,246c0.48,0.28,0.87,0.05,0.87-0.5s-0.39-1.22-0.87-1.5l-3.46-2c-0.48-0.28-0.87-0.05-0.87,0.5
			s0.39,1.22,0.87,1.5L337.89,246z"></path>
                          <path class="st3" d="M329.23,241c0.48,0.28,0.87,0.05,0.87-0.5s-0.39-1.22-0.87-1.5l-3.46-2c-0.48-0.28-0.87-0.05-0.87,0.5
			s0.39,1.22,0.87,1.5L329.23,241z"></path>
                          <path class="st3" d="M320.57,236c0.48,0.28,0.87,0.05,0.87-0.5s-0.39-1.22-0.87-1.5l-3.46-2c-0.48-0.28-0.87-0.05-0.87,0.5
			s0.39,1.22,0.87,1.5L320.57,236z"></path>
                          <path class="st3" d="M311.91,231c0.48,0.28,0.87,0.05,0.87-0.5s-0.39-1.22-0.87-1.5l-3.46-2c-0.48-0.28-0.87-0.05-0.87,0.5
			s0.39,1.22,0.87,1.5L311.91,231z"></path>
                          <path class="st3" d="M303.25,226c0.48,0.28,0.87,0.05,0.87-0.5s-0.39-1.22-0.87-1.5l-3.46-2c-0.48-0.28-0.87-0.05-0.87,0.5
			s0.39,1.22,0.87,1.5L303.25,226z"></path>
                          <path class="st3" d="M364.74,267.5l-25.98-15c-0.48-0.28-0.87-0.05-0.87,0.5v36c0,0.55,0.39,1.22,0.87,1.5l25.98,15
			c0.48,0.28,0.87,0.05,0.87-0.5v-36C365.61,268.45,365.22,267.78,364.74,267.5z"></path>
                          <path class="st3" d="M331.83,248.5l-58.89-34c-0.48-0.28-0.87-0.05-0.87,0.5v36c0,0.55,0.39,1.22,0.87,1.5l58.89,34
			c0.48,0.28,0.87,0.05,0.87-0.5v-36C332.7,249.45,332.31,248.78,331.83,248.5z"></path>
                          <g>
                            <path class="st3" d="M326.64,221.5c0,4.97-3.49,6.99-7.79,4.5c-4.3-2.49-7.79-8.53-7.79-13.5s3.49-6.99,7.79-4.5
				C323.15,210.49,326.64,216.53,326.64,221.5z"></path>
                            <path class="st0" d="M321.44,216.5c0,1.66-1.16,2.33-2.6,1.5c-1.43-0.83-2.6-2.84-2.6-4.5s1.16-2.33,2.6-1.5
				S321.44,214.84,321.44,216.5z"></path>
                            <path class="st0" d="M323.17,225.5c0-1.66-1.16-3.67-2.6-4.5l-3.46-2c-1.43-0.83-2.6-0.16-2.6,1.5v3l8.66,5V225.5z"></path>
                            <path class="st3" d="M318.84,207c-4.78-2.76-8.66-0.52-8.66,5s3.88,12.24,8.66,15s8.66,0.52,8.66-5S323.63,209.76,318.84,207z
				 M318.84,225c-3.83-2.21-6.93-7.58-6.93-12s3.1-6.21,6.93-4s6.93,7.58,6.93,12S322.67,227.21,318.84,225z"></path>
                          </g>
                        </g>
                      </g>
                      <g>
                        <g>
                          <polygon class="st5" points="275.54,298 233.97,274 233.97,240 275.54,264 		"></polygon>
                        </g>
                        <g>
                          <polygon class="st0" points="241.77,263.5 241.77,259.5 239.17,258 239.17,262 		"></polygon>
                          <path class="st0" d="M241.77,258.5v-2l-1.73-1c-0.48-0.28-0.87-0.05-0.87,0.5v1L241.77,258.5z"></path>
                          <path class="st0" d="M239.17,263v1c0,0.55,0.39,1.22,0.87,1.5l1.73,1v-2L239.17,263z"></path>
                          <path class="st0" d="M246.1,266l3.46,2v-6c0-0.55-0.39-1.22-0.87-1.5l-6.06-3.5v10l3.46,2L246.1,266L246.1,266z"></path>
                          <path class="st0" d="M246.96,267.5v2l1.73,1c0.48,0.28,0.87,0.05,0.87-0.5v-1L246.96,267.5z"></path>
                          <path class="st0" d="M257.35,271.5c0.48,0.28,0.87,0.05,0.87-0.5s-0.39-1.22-0.87-1.5l-3.46-2c-0.48-0.28-0.87-0.05-0.87,0.5
			s0.39,1.22,0.87,1.5L257.35,271.5z"></path>
                          <path class="st0" d="M263.42,275c0.48,0.28,0.87,0.05,0.87-0.5s-0.39-1.22-0.87-1.5l-3.46-2c-0.48-0.28-0.87-0.05-0.87,0.5
			s0.39,1.22,0.87,1.5L263.42,275z"></path>
                          <path class="st0" d="M269.48,278.5c0.48,0.28,0.87,0.05,0.87-0.5s-0.39-1.22-0.87-1.5l-3.46-2c-0.48-0.28-0.87-0.05-0.87,0.5
			s0.39,1.22,0.87,1.5L269.48,278.5z"></path>
                          <path class="st0" d="M269.48,268.5c0.48,0.28,0.87,0.05,0.87-0.5s-0.39-1.22-0.87-1.5l-5.2-3c-0.48-0.28-0.87-0.05-0.87,0.5
			s0.39,1.22,0.87,1.5L269.48,268.5z"></path>
                          <path class="st0" d="M269.48,288.5c0.48,0.28,0.87,0.05,0.87-0.5s-0.39-1.22-0.87-1.5l-5.2-3c-0.48-0.28-0.87-0.05-0.87,0.5
			s0.39,1.22,0.87,1.5L269.48,288.5z"></path>
                        </g>
                      </g>
                    </svg>

                  </div>
                </a>
                <a href="/demo-whmcs/index.php?rp=/store/email-services" class="promo-slider-slide swiper-slide-next" style="width: 840px; margin-right: 100px;">
                  <div class="promo-slider-body">
                    <div class="promo-slider-content">
                      <h2 class="promo-slider-title">
                        Email Anti-Spam, Built for You -
                        Take back control of your inbox.
                      </h2>
                    </div>
                    <div class="promo-slider-more"><i class="ls ls-basket"></i>Order / Learn More</div>
                  </div>
                  <div class="promo-slider-icons">
                    <svg version="1.1" class="promo-slider-icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 376 324" style="enable-background:new 0 0 376 324;" xml:space="preserve">
                      <g>
                        <g>
                          <path class="st0" d="M1.9,11v97l114.3,66V77L1.9,11z"></path>
                          <g>
                            <polygon class="st3" points="116.2,78 1.9,12 1.9,0 116.2,66"></polygon>
                          </g>
                          <path class="st0" d="M8.8,10c0,1.1-0.8,1.6-1.7,1c-1-0.6-1.7-1.9-1.7-3s0.8-1.6,1.7-1C8,7.6,8.8,8.9,8.8,10z"></path>
                          <path class="st0" d="M15.7,14c0,1.1-0.8,1.6-1.7,1c-1-0.6-1.7-1.9-1.7-3s0.8-1.6,1.7-1C15,11.6,15.7,12.9,15.7,14z"></path>
                          <path class="st0" d="M22.7,18c0,1.1-0.8,1.5-1.7,1c-1-0.5-1.7-1.9-1.7-3s0.8-1.6,1.7-1C21.9,15.6,22.7,16.9,22.7,18z"></path>
                        </g>
                        <g>
                          <g>
                            <path class="st3" d="M55.6,66c0,0.6-0.4,0.8-0.9,0.5l-8.7-5c-0.5-0.3-0.9-1-0.9-1.5V50c0-0.5,0.4-0.8,0.9-0.5l8.7,5
				c0.5,0.3,0.9,1,0.9,1.5V66z"></path>
                            <path class="st3" d="M105.8,155c0,0.6-0.4,0.8-0.9,0.5l-58.9-34c-0.5-0.3-0.9-0.9-0.9-1.5v-18c0-0.6,0.4-0.8,0.9-0.5l58.9,34
				c0.5,0.3,0.9,0.9,0.9,1.5V155z"></path>
                            <path class="st3" d="M40,57c0,0.5-0.4,0.8-0.9,0.5l-26-15c-0.5-0.3-0.9-1-0.9-1.5V31c0-0.5,0.4-0.8,0.9-0.5l26,15
				c0.5,0.3,0.9,1,0.9,1.5V57z"></path>
                            <path class="st3" d="M72,88.5c0.5,0.3,0.9,0.1,0.9-0.5s-0.4-1.2-0.9-1.5l-26-15c-0.5-0.3-0.9-0.1-0.9,0.5s0.4,1.2,0.9,1.5
				L72,88.5z"></path>
                            <path class="st3" d="M72,112.5c0.5,0.3,0.9,0.1,0.9-0.5s-0.4-1.2-0.9-1.5l-26-15c-0.5-0.3-0.9-0.1-0.9,0.5s0.4,1.2,0.9,1.5
				L72,112.5z"></path>
                            <path class="st3" d="M104.9,101.5c0.5,0.3,0.9,0.1,0.9-0.5s-0.4-1.2-0.9-1.5L46,65.5c-0.5-0.3-0.9-0.1-0.9,0.5s0.4,1.2,0.9,1.5
				L104.9,101.5z"></path>
                            <path class="st3" d="M20.9,65c0.5,0.3,0.9,0.1,0.9-0.5c0-0.5-0.4-1.2-0.9-1.5l-7.8-4.5c-0.5-0.3-0.9,0-0.9,0.5s0.4,1.2,0.9,1.5
				L20.9,65z"></path>
                            <path class="st3" d="M25.3,73.5c0.5,0.3,0.9,0.1,0.9-0.5s-0.4-1.2-0.9-1.5l-12.1-7c-0.5-0.3-0.9-0.1-0.9,0.5s0.4,1.2,0.9,1.5
				L25.3,73.5z"></path>
                            <path class="st3" d="M33.9,84.5c0.5,0.3,0.9,0.1,0.9-0.5s-0.4-1.2-0.9-1.5l-20.8-12c-0.5-0.3-0.9-0.1-0.9,0.5s0.4,1.2,0.9,1.5
				L33.9,84.5z"></path>
                            <path class="st3" d="M29.6,88c0.5,0.3,0.9,0.1,0.9-0.5s-0.4-1.2-0.9-1.5l-16.5-9.5c-0.5-0.3-0.9-0.1-0.9,0.5s0.4,1.2,0.9,1.5
				L29.6,88z"></path>
                            <path class="st3" d="M20.9,59c0.5,0.3,0.9,0,0.9-0.5s-0.4-1.2-0.9-1.5l-7.8-4.5c-0.5-0.3-0.9,0-0.9,0.5s0.4,1.2,0.9,1.5L20.9,59z
				"></path>
                            <path class="st3" d="M29.6,58c0.5,0.3,0.9,0,0.9-0.5s-0.4-1.2-0.9-1.5l-16.5-9.5c-0.5-0.3-0.9,0-0.9,0.5s0.4,1.2,0.9,1.5L29.6,58
				z"></path>
                          </g>
                          <path class="st0" d="M52.1,57c0,1.1-0.8,1.5-1.7,1c-1-0.5-1.7-1.9-1.7-3s0.8-1.5,1.7-1S52.1,55.9,52.1,57z"></path>
                          <path class="st0" d="M47.8,60.5c0-1.1,0.8-1.5,1.7-1c0.3,0.2,1.4,0.8,1.7,1c1,0.5,1.7,1.9,1.7,3v3l-5.2-3L47.8,60.5L47.8,60.5z"></path>
                        </g>
                      </g>
                    </svg>
                    <svg version="1.1" class="promo-slider-icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="376px" height="324px" viewBox="0 0 376 324" style="enable-background:new 0 0 376 324;"
                      xml:space="preserve">
                      <g>
                        <g>
                          <path class="st9" d="M35.08,234c0,0,0,1.22,0,2s0.55,1.49,1.43,2l117.78,68c0.89,0.51,2.11,0.83,3.46,0.83s2.58-0.32,3.46-0.83
			l90.07-52v-2L35.08,234z"></path>
                          <path class="st2" d="M36.52,232c-0.89,0.51-1.43,1.22-1.43,2s0.55,1.49,1.43,2l117.78,68c0.89,0.51,2.11,0.83,3.46,0.83
			s2.58-0.32,3.46-0.83l90.07-52l-5.2-9l-114.31-66l-5.2,3L36.52,232z"></path>
                        </g>
                        <g>
                          <path class="st4" d="M83.28,251c-0.44-0.26-0.72-0.61-0.72-1s0.27-0.74,0.72-1l31.18-18c0.44-0.26,1.06-0.41,1.73-0.41
			c0.68,0,1.29,0.16,1.73,0.41l46.77,27c0.44,0.26,0.72,0.61,0.72,1s-0.27,0.74-0.72,1l-31.18,18c-0.44,0.26-1.06,0.41-1.73,0.41
			c-0.68,0-1.29-0.16-1.73-0.41L83.28,251z"></path>
                          <path class="st1" d="M83.28,252c-0.44-0.26-0.72-0.61-0.72-1s0.27-0.74,0.72-1l31.18-18c0.44-0.26,1.06-0.41,1.73-0.41
			c0.68,0,1.29,0.16,1.73,0.41l46.77,27c0.44,0.26,0.72,0.61,0.72,1s-0.27,0.74-0.72,1l-31.18,18c-0.44,0.26-1.06,0.41-1.73,0.41
			c-0.68,0-1.29-0.16-1.73-0.41L83.28,252z"></path>
                        </g>
                        <g class="st7">
                          <path class="st9" d="M121.9,226c0,0,0,0.8,0,1s0.14,0.37,0.36,0.5l48.5,28c0.22,0.13,0.53,0.21,0.87,0.21s0.64-0.08,0.87-0.21
			l5.2-3c0.22-0.13,0.36-0.3,0.36-0.5s0-1,0-1L121.9,226z"></path>
                          <path class="st9" d="M104.58,216c0,0,0,0.8,0,1s0.14,0.37,0.36,0.5l5.2,3c0.22,0.13,0.53,0.21,0.87,0.21
			c0.34,0,0.64-0.08,0.87-0.21l5.2-3c0.22-0.13,0.36-0.3,0.36-0.5s0-1,0-1H104.58z"></path>
                          <path class="st9" d="M113.24,211c0,0,0,0.8,0,1s0.14,0.37,0.36,0.5l5.2,3c0.22,0.13,0.53,0.21,0.87,0.21
			c0.34,0,0.64-0.08,0.87-0.21l5.2-3c0.22-0.13,0.36-0.3,0.36-0.5s0-1,0-1H113.24z"></path>
                          <path class="st9" d="M121.9,216c0,0,0,0.8,0,1s0.14,0.37,0.36,0.5l5.2,3c0.22,0.13,0.53,0.21,0.87,0.21
			c0.34,0,0.64-0.08,0.87-0.21l5.2-3c0.22-0.13,0.36-0.3,0.36-0.5s0-1,0-1H121.9z"></path>
                          <path class="st9" d="M130.56,221c0,0,0,0.8,0,1s0.14,0.37,0.36,0.5l5.2,3c0.22,0.13,0.53,0.21,0.87,0.21s0.64-0.08,0.87-0.21
			l5.2-3c0.22-0.13,0.36-0.3,0.36-0.5s0-1,0-1H130.56z"></path>
                          <path class="st9" d="M142.68,218c0,0,0,0.8,0,1s0.14,0.37,0.36,0.5l5.2,3c0.22,0.13,0.53,0.21,0.87,0.21s0.64-0.08,0.87-0.21
			l5.2-3c0.22-0.13,0.36-0.3,0.36-0.5s0-1,0-1H142.68z"></path>
                          <path class="st9" d="M139.22,226c0,0,0,0.8,0,1s0.14,0.37,0.36,0.5l5.2,3c0.22,0.13,0.53,0.21,0.87,0.21s0.64-0.08,0.87-0.21
			l5.2-3c0.22-0.13,0.36-0.3,0.36-0.5s0-1,0-1H139.22z"></path>
                          <path class="st9" d="M147.88,231c0,0,0,0.8,0,1s0.14,0.37,0.36,0.5l5.2,3c0.22,0.13,0.53,0.21,0.87,0.21s0.64-0.08,0.87-0.21
			l5.2-3c0.22-0.13,0.36-0.3,0.36-0.5s0-1,0-1H147.88z"></path>
                          <path class="st9" d="M151.34,223c0,0,0,0.8,0,1s0.14,0.37,0.36,0.5l5.2,3c0.22,0.13,0.53,0.21,0.87,0.21s0.64-0.08,0.87-0.21
			l5.2-3c0.22-0.13,0.36-0.3,0.36-0.5s0-1,0-1H151.34z"></path>
                          <path class="st9" d="M160,228c0,0,0,0.8,0,1s0.14,0.37,0.36,0.5l5.2,3c0.22,0.13,0.53,0.21,0.87,0.21s0.64-0.08,0.87-0.21l5.2-3
			c0.22-0.13,0.36-0.3,0.36-0.5s0-1,0-1H160z"></path>
                          <path class="st9" d="M168.66,233c0,0,0,0.8,0,1s0.14,0.37,0.36,0.5l5.2,3c0.22,0.13,0.53,0.21,0.87,0.21s0.64-0.08,0.87-0.21
			l5.2-3c0.22-0.13,0.36-0.3,0.36-0.5s0-1,0-1H168.66z"></path>
                          <path class="st9" d="M173.86,226c0,0,0,0.8,0,1s0.14,0.37,0.36,0.5l5.2,3c0.22,0.13,0.53,0.21,0.87,0.21s0.64-0.08,0.87-0.21
			l5.2-3c0.22-0.13,0.36-0.3,0.36-0.5s0-1,0-1H173.86z"></path>
                          <path class="st9" d="M156.54,236c0,0,0,0.8,0,1s0.14,0.37,0.36,0.5l5.2,3c0.22,0.13,0.53,0.21,0.87,0.21s0.64-0.08,0.87-0.21
			l5.2-3c0.22-0.13,0.36-0.3,0.36-0.5s0-1,0-1H156.54z"></path>
                          <path class="st9" d="M165.2,241c0,0,0,0.8,0,1s0.14,0.37,0.36,0.5l5.2,3c0.22,0.13,0.53,0.21,0.87,0.21s0.64-0.08,0.87-0.21l5.2-3
			c0.22-0.13,0.36-0.3,0.36-0.5s0-1,0-1H165.2z"></path>
                          <path class="st9" d="M177.32,238c0,0,0,0.8,0,1s0.14,0.37,0.36,0.5l5.2,3c0.22,0.13,0.53,0.21,0.87,0.21s0.64-0.08,0.87-0.21
			l5.2-3c0.22-0.13,0.36-0.3,0.36-0.5s0-1,0-1H177.32z"></path>
                          <path class="st9" d="M182.52,231c0,0,0,0.8,0,1s0.14,0.37,0.36,0.5l5.2,3c0.22,0.13,0.53,0.21,0.87,0.21s0.64-0.08,0.87-0.21
			l5.2-3c0.22-0.13,0.36-0.3,0.36-0.5s0-1,0-1H182.52z"></path>
                          <path class="st9" d="M191.18,236c0,0,0,0.8,0,1s0.14,0.37,0.36,0.5l5.2,3c0.22,0.13,0.53,0.21,0.87,0.21s0.64-0.08,0.87-0.21
			l5.2-3c0.22-0.13,0.36-0.3,0.36-0.5s0-1,0-1H191.18z"></path>
                          <path class="st9" d="M185.98,243c0,0,0,0.8,0,1s0.14,0.37,0.36,0.5l5.2,3c0.22,0.13,0.53,0.21,0.87,0.21s0.64-0.08,0.87-0.21
			l5.2-3c0.22-0.13,0.36-0.3,0.36-0.5s0-1,0-1H185.98z"></path>
                          <path class="st9" d="M182.52,251c0,0,0,0.8,0,1s0.14,0.37,0.36,0.5l5.2,3c0.22,0.13,0.53,0.21,0.87,0.21s0.64-0.08,0.87-0.21
			l5.2-3c0.22-0.13,0.36-0.3,0.36-0.5s0-1,0-1H182.52z"></path>
                          <path class="st9" d="M194.64,248c0,0,0,0.8,0,1s0.14,0.37,0.36,0.5l5.2,3c0.22,0.13,0.53,0.21,0.87,0.21s0.64-0.08,0.87-0.21
			l5.2-3c0.22-0.13,0.36-0.3,0.36-0.5s0-1,0-1H194.64z"></path>
                          <path class="st9" d="M199.84,241c0,0,0,0.8,0,1s0.14,0.37,0.36,0.5l5.2,3c0.22,0.13,0.53,0.21,0.87,0.21s0.64-0.08,0.87-0.21
			l5.2-3c0.22-0.13,0.36-0.3,0.36-0.5s0-1,0-1H199.84z"></path>
                          <path class="st9" d="M208.5,246c0,0,0,0.8,0,1s0.14,0.37,0.36,0.5l5.2,3c0.22,0.13,0.53,0.21,0.87,0.21s0.64-0.08,0.87-0.21l5.2-3
			c0.22-0.13,0.36-0.3,0.36-0.5s0-1,0-1H208.5z"></path>
                          <path class="st9" d="M217.16,251c0,0,0,0.8,0,1s0.14,0.37,0.36,0.5l5.2,3c0.22,0.13,0.53,0.21,0.87,0.21s0.64-0.08,0.87-0.21
			l5.2-3c0.22-0.13,0.36-0.3,0.36-0.5s0-1,0-1H217.16z"></path>
                          <path class="st9" d="M191.18,256c0,0,0,0.8,0,1s0.14,0.37,0.36,0.5l5.2,3c0.22,0.13,0.53,0.21,0.87,0.21s0.64-0.08,0.87-0.21
			l5.2-3c0.22-0.13,0.36-0.3,0.36-0.5s0-1,0-1H191.18z"></path>
                          <path class="st9" d="M191.18,266c0,0,0,0.8,0,1s0.14,0.37,0.36,0.5l5.2,3c0.22,0.13,0.53,0.21,0.87,0.21s0.64-0.08,0.87-0.21
			l5.2-3c0.22-0.13,0.36-0.3,0.36-0.5s0-1,0-1H191.18z"></path>
                          <path class="st9" d="M173.86,256c0,0,0,0.8,0,1s0.14,0.37,0.36,0.5l5.2,3c0.22,0.13,0.53,0.21,0.87,0.21s0.64-0.08,0.87-0.21
			l5.2-3c0.22-0.13,0.36-0.3,0.36-0.5s0-1,0-1H173.86z"></path>
                          <path class="st9" d="M182.52,261c0,0,0,0.8,0,1s0.14,0.37,0.36,0.5l5.2,3c0.22,0.13,0.53,0.21,0.87,0.21s0.64-0.08,0.87-0.21
			l5.2-3c0.22-0.13,0.36-0.3,0.36-0.5s0-1,0-1H182.52z"></path>
                          <path class="st9" d="M173.86,246c0,0,0,0.8,0,1s0.14,0.37,0.36,0.5l5.2,3c0.22,0.13,0.53,0.21,0.87,0.21s0.64-0.08,0.87-0.21
			l5.2-3c0.22-0.13,0.36-0.3,0.36-0.5s0-1,0-1H173.86z"></path>
                          <path class="st9" d="M156.54,216c0,0,0,0.8,0,1s0.14,0.37,0.36,0.5l5.2,3c0.22,0.13,0.53,0.21,0.87,0.21s0.64-0.08,0.87-0.21
			l5.2-3c0.22-0.13,0.36-0.3,0.36-0.5s0-1,0-1H156.54z"></path>
                          <path class="st9" d="M165.2,221c0,0,0,0.8,0,1s0.14,0.37,0.36,0.5l5.2,3c0.22,0.13,0.53,0.21,0.87,0.21s0.64-0.08,0.87-0.21l5.2-3
			c0.22-0.13,0.36-0.3,0.36-0.5s0-1,0-1H165.2z"></path>
                          <path class="st9" d="M147.88,211c0,0,0,0.8,0,1s0.14,0.37,0.36,0.5l5.2,3c0.22,0.13,0.53,0.21,0.87,0.21s0.64-0.08,0.87-0.21
			l5.2-3c0.22-0.13,0.36-0.3,0.36-0.5s0-1,0-1H147.88z"></path>
                          <path class="st9" d="M113.24,221c0,0,0,0.8,0,1s0.14,0.37,0.36,0.5l5.2,3c0.22,0.13,0.53,0.21,0.87,0.21
			c0.34,0,0.64-0.08,0.87-0.21l5.2-3c0.22-0.13,0.36-0.3,0.36-0.5s0-1,0-1H113.24z"></path>
                          <path class="st9" d="M125.36,208c0,0,0,0.8,0,1s0.14,0.37,0.36,0.5l5.2,3c0.22,0.13,0.53,0.21,0.87,0.21s0.64-0.08,0.87-0.21
			l5.2-3c0.22-0.13,0.36-0.3,0.36-0.5s0-1,0-1H125.36z"></path>
                          <path class="st9" d="M130.56,201c0,0,0,0.8,0,1s0.14,0.37,0.36,0.5l5.2,3c0.22,0.13,0.53,0.21,0.87,0.21s0.64-0.08,0.87-0.21
			l5.2-3c0.22-0.13,0.36-0.3,0.36-0.5s0-1,0-1H130.56z"></path>
                          <path class="st9" d="M139.22,206c0,0,0,0.8,0,1s0.14,0.37,0.36,0.5l5.2,3c0.22,0.13,0.53,0.21,0.87,0.21s0.64-0.08,0.87-0.21
			l5.2-3c0.22-0.13,0.36-0.3,0.36-0.5s0-1,0-1H139.22z"></path>
                          <path class="st9" d="M134.02,213c0,0,0,0.8,0,1s0.14,0.37,0.36,0.5l5.2,3c0.22,0.13,0.53,0.21,0.87,0.21s0.64-0.08,0.87-0.21
			l5.2-3c0.22-0.13,0.36-0.3,0.36-0.5s0-1,0-1H134.02z"></path>
                          <path class="st9" d="M94.18,210c0,0,0,0.8,0,1s0.14,0.37,0.36,0.5l6.93,4c0.22,0.13,0.53,0.21,0.87,0.21
			c0.34,0,0.64-0.08,0.87-0.21l5.2-3c0.22-0.13,0.36-0.3,0.36-0.5s0-1,0-1L94.18,210z"></path>
                          <path class="st9" d="M102.84,205c0,0,0,0.8,0,1s0.14,0.37,0.36,0.5l6.93,4c0.22,0.13,0.53,0.21,0.87,0.21
			c0.34,0,0.64-0.08,0.87-0.21l5.2-3c0.22-0.13,0.36-0.3,0.36-0.5s0-1,0-1L102.84,205z"></path>
                          <path class="st9" d="M221.34,257c0-0.2,0-1,0-1l-18.04-3c0,0,0,0.8,0,1s0.14,0.37,0.36,0.5l4.33,2.5l-8.15,4c0,0,0,0.8,0,1
			s0.14,0.37,0.36,0.5l5.2,3c0.22,0.13,0.53,0.21,0.87,0.21s0.64-0.08,0.87-0.21l13.86-8C221.2,257.37,221.34,257.2,221.34,257z"></path>
                          <path class="st9" d="M111.5,200c0,0,0,0.8,0,1s0.14,0.37,0.36,0.5l10.39,6c0.22,0.13,0.53,0.21,0.87,0.21
			c0.34,0,0.64-0.08,0.87-0.21l5.2-3c0.22-0.13,0.36-0.3,0.36-0.5s0-1,0-1L111.5,200z"></path>
                          <path class="st9" d="M120.16,195c0,0,0,0.8,0,1s0.14,0.37,0.36,0.5l6.93,4c0.22,0.13,0.53,0.21,0.87,0.21
			c0.34,0,0.64-0.08,0.87-0.21l5.2-3c0.22-0.13,0.36-0.3,0.36-0.5s0-1,0-1L120.16,195z"></path>
                        </g>
                        <g>
                          <path class="st8" d="M191.54,265.5c-0.22,0.13-0.36,0.3-0.36,0.5s0.14,0.37,0.36,0.5l5.2,3c0.22,0.13,0.53,0.21,0.87,0.21
			s0.64-0.08,0.87-0.21l5.2-3c0.22-0.13,0.36-0.3,0.36-0.5s-0.14-0.37-0.36-0.5l-5.2-3c-0.22-0.13-0.53-0.21-0.87-0.21
			s-0.64,0.08-0.87,0.21L191.54,265.5z"></path>
                          <path class="st8" d="M182.88,260.5c-0.22,0.13-0.36,0.3-0.36,0.5s0.14,0.37,0.36,0.5l5.2,3c0.22,0.13,0.53,0.21,0.87,0.21
			s0.64-0.08,0.87-0.21l5.2-3c0.22-0.13,0.36-0.3,0.36-0.5s-0.14-0.37-0.36-0.5l-5.2-3c-0.22-0.13-0.53-0.21-0.87-0.21
			s-0.64,0.08-0.87,0.21L182.88,260.5z"></path>
                          <path class="st8" d="M174.22,255.5c-0.22,0.13-0.36,0.3-0.36,0.5c0,0.2,0.14,0.37,0.36,0.5l5.2,3c0.22,0.13,0.53,0.21,0.87,0.21
			s0.64-0.08,0.87-0.21l5.2-3c0.22-0.13,0.36-0.3,0.36-0.5c0-0.2-0.14-0.37-0.36-0.5l-5.2-3c-0.22-0.13-0.53-0.21-0.87-0.21
			s-0.64,0.08-0.87,0.21L174.22,255.5z"></path>
                          <path class="st8" d="M122.25,225.5c-0.22,0.13-0.36,0.3-0.36,0.5s0.14,0.37,0.36,0.5l48.5,28c0.22,0.13,0.53,0.21,0.87,0.21
			s0.64-0.08,0.87-0.21l5.2-3c0.22-0.13,0.36-0.3,0.36-0.5s-0.14-0.37-0.36-0.5l-48.5-28c-0.22-0.13-0.53-0.21-0.87-0.21
			s-0.64,0.08-0.87,0.21L122.25,225.5z"></path>
                          <path class="st8" d="M113.59,220.5c-0.22,0.13-0.36,0.3-0.36,0.5s0.14,0.37,0.36,0.5l5.2,3c0.22,0.13,0.53,0.21,0.87,0.21
			c0.34,0,0.64-0.08,0.87-0.21l5.2-3c0.22-0.13,0.36-0.3,0.36-0.5s-0.14-0.37-0.36-0.5l-5.2-3c-0.22-0.13-0.53-0.21-0.87-0.21
			c-0.34,0-0.64,0.08-0.87,0.21L113.59,220.5z"></path>
                          <path class="st8" d="M104.93,215.5c-0.22,0.13-0.36,0.3-0.36,0.5s0.14,0.37,0.36,0.5l5.2,3c0.22,0.13,0.53,0.21,0.87,0.21
			c0.34,0,0.64-0.08,0.87-0.21l5.2-3c0.22-0.13,0.36-0.3,0.36-0.5s-0.14-0.37-0.36-0.5l-5.2-3c-0.22-0.13-0.53-0.21-0.87-0.21
			c-0.34,0-0.64,0.08-0.87,0.21L104.93,215.5z"></path>
                          <path class="st8" d="M94.54,209.5c-0.22,0.13-0.36,0.3-0.36,0.5s0.14,0.37,0.36,0.5l6.93,4c0.22,0.13,0.53,0.21,0.87,0.21
			c0.34,0,0.64-0.08,0.87-0.21l5.2-3c0.22-0.13,0.36-0.3,0.36-0.5s-0.14-0.37-0.36-0.5l-6.93-4c-0.22-0.13-0.53-0.21-0.87-0.21
			c-0.34,0-0.64,0.08-0.87,0.21L94.54,209.5z"></path>
                          <path class="st8" d="M191.54,255.5c-0.22,0.13-0.36,0.3-0.36,0.5c0,0.2,0.14,0.37,0.36,0.5l5.2,3c0.22,0.13,0.53,0.21,0.87,0.21
			s0.64-0.08,0.87-0.21l5.2-3c0.22-0.13,0.36-0.3,0.36-0.5c0-0.2-0.14-0.37-0.36-0.5l-5.2-3c-0.22-0.13-0.53-0.21-0.87-0.21
			s-0.64,0.08-0.87,0.21L191.54,255.5z"></path>
                          <path class="st8" d="M182.88,250.5c-0.22,0.13-0.36,0.3-0.36,0.5s0.14,0.37,0.36,0.5l5.2,3c0.22,0.13,0.53,0.21,0.87,0.21
			s0.64-0.08,0.87-0.21l5.2-3c0.22-0.13,0.36-0.3,0.36-0.5s-0.14-0.37-0.36-0.5l-5.2-3c-0.22-0.13-0.53-0.21-0.87-0.21
			s-0.64,0.08-0.87,0.21L182.88,250.5z"></path>
                          <path class="st8" d="M174.22,245.5c-0.22,0.13-0.36,0.3-0.36,0.5s0.14,0.37,0.36,0.5l5.2,3c0.22,0.13,0.53,0.21,0.87,0.21
			s0.64-0.08,0.87-0.21l5.2-3c0.22-0.13,0.36-0.3,0.36-0.5s-0.14-0.37-0.36-0.5l-5.2-3c-0.22-0.13-0.53-0.21-0.87-0.21
			s-0.64,0.08-0.87,0.21L174.22,245.5z"></path>
                          <path class="st8" d="M165.56,240.5c-0.22,0.13-0.36,0.3-0.36,0.5s0.14,0.37,0.36,0.5l5.2,3c0.22,0.13,0.53,0.21,0.87,0.21
			s0.64-0.08,0.87-0.21l5.2-3c0.22-0.13,0.36-0.3,0.36-0.5s-0.14-0.37-0.36-0.5l-5.2-3c-0.22-0.13-0.53-0.21-0.87-0.21
			s-0.64,0.08-0.87,0.21L165.56,240.5z"></path>
                          <path class="st8" d="M156.9,235.5c-0.22,0.13-0.36,0.3-0.36,0.5s0.14,0.37,0.36,0.5l5.2,3c0.22,0.13,0.53,0.21,0.87,0.21
			s0.64-0.08,0.87-0.21l5.2-3c0.22-0.13,0.36-0.3,0.36-0.5s-0.14-0.37-0.36-0.5l-5.2-3c-0.22-0.13-0.53-0.21-0.87-0.21
			s-0.64,0.08-0.87,0.21L156.9,235.5z"></path>
                          <path class="st8" d="M148.24,230.5c-0.22,0.13-0.36,0.3-0.36,0.5s0.14,0.37,0.36,0.5l5.2,3c0.22,0.13,0.53,0.21,0.87,0.21
			s0.64-0.08,0.87-0.21l5.2-3c0.22-0.13,0.36-0.3,0.36-0.5s-0.14-0.37-0.36-0.5l-5.2-3c-0.22-0.13-0.53-0.21-0.87-0.21
			s-0.64,0.08-0.87,0.21L148.24,230.5z"></path>
                          <path class="st8" d="M139.58,225.5c-0.22,0.13-0.36,0.3-0.36,0.5s0.14,0.37,0.36,0.5l5.2,3c0.22,0.13,0.53,0.21,0.87,0.21
			s0.64-0.08,0.87-0.21l5.2-3c0.22-0.13,0.36-0.3,0.36-0.5s-0.14-0.37-0.36-0.5l-5.2-3c-0.22-0.13-0.53-0.21-0.87-0.21
			s-0.64,0.08-0.87,0.21L139.58,225.5z"></path>
                          <path class="st8" d="M130.91,220.5c-0.22,0.13-0.36,0.3-0.36,0.5s0.14,0.37,0.36,0.5l5.2,3c0.22,0.13,0.53,0.21,0.87,0.21
			s0.64-0.08,0.87-0.21l5.2-3c0.22-0.13,0.36-0.3,0.36-0.5s-0.14-0.37-0.36-0.5l-5.2-3c-0.22-0.13-0.53-0.21-0.87-0.21
			s-0.64,0.08-0.87,0.21L130.91,220.5z"></path>
                          <path class="st8" d="M122.25,215.5c-0.22,0.13-0.36,0.3-0.36,0.5s0.14,0.37,0.36,0.5l5.2,3c0.22,0.13,0.53,0.21,0.87,0.21
			s0.64-0.08,0.87-0.21l5.2-3c0.22-0.13,0.36-0.3,0.36-0.5s-0.14-0.37-0.36-0.5l-5.2-3c-0.22-0.13-0.53-0.21-0.87-0.21
			s-0.64,0.08-0.87,0.21L122.25,215.5z"></path>
                          <path class="st8" d="M113.59,210.5c-0.22,0.13-0.36,0.3-0.36,0.5s0.14,0.37,0.36,0.5l5.2,3c0.22,0.13,0.53,0.21,0.87,0.21
			c0.34,0,0.64-0.08,0.87-0.21l5.2-3c0.22-0.13,0.36-0.3,0.36-0.5s-0.14-0.37-0.36-0.5l-5.2-3c-0.22-0.13-0.53-0.21-0.87-0.21
			c-0.34,0-0.64,0.08-0.87,0.21L113.59,210.5z"></path>
                          <path class="st8" d="M103.2,204.5c-0.22,0.13-0.36,0.3-0.36,0.5s0.14,0.37,0.36,0.5l6.93,4c0.22,0.13,0.53,0.21,0.87,0.21
			c0.34,0,0.64-0.08,0.87-0.21l5.2-3c0.22-0.13,0.36-0.3,0.36-0.5s-0.14-0.37-0.36-0.5l-6.93-4c-0.22-0.13-0.53-0.21-0.87-0.21
			c-0.34,0-0.64,0.08-0.87,0.21L103.2,204.5z"></path>
                          <path class="st8" d="M195,247.5c-0.22,0.13-0.36,0.3-0.36,0.5s0.14,0.37,0.36,0.5l5.2,3c0.22,0.13,0.53,0.21,0.87,0.21
			s0.64-0.08,0.87-0.21l5.2-3c0.22-0.13,0.36-0.3,0.36-0.5s-0.14-0.37-0.36-0.5l-5.2-3c-0.22-0.13-0.53-0.21-0.87-0.21
			s-0.64,0.08-0.87,0.21L195,247.5z"></path>
                          <path class="st8" d="M221.34,256c0-0.2-0.14-0.37-0.36-0.5l-10.39-6c-0.22-0.13-0.53-0.21-0.87-0.21s-0.64,0.08-0.87,0.21l-5.2,3
			c-0.22,0.13-0.36,0.3-0.36,0.5s0.14,0.37,0.36,0.5l4.33,2.5l-7.79,4.5c-0.22,0.13-0.36,0.3-0.36,0.5s0.14,0.37,0.36,0.5l5.2,3
			c0.22,0.13,0.53,0.21,0.87,0.21s0.64-0.08,0.87-0.21l13.86-8C221.2,256.37,221.34,256.2,221.34,256z"></path>
                          <path class="st8" d="M186.34,242.5c-0.22,0.13-0.36,0.3-0.36,0.5s0.14,0.37,0.36,0.5l5.2,3c0.22,0.13,0.53,0.21,0.87,0.21
			s0.64-0.08,0.87-0.21l5.2-3c0.22-0.13,0.36-0.3,0.36-0.5s-0.14-0.37-0.36-0.5l-5.2-3c-0.22-0.13-0.53-0.21-0.87-0.21
			s-0.64,0.08-0.87,0.21L186.34,242.5z"></path>
                          <path class="st8" d="M177.68,237.5c-0.22,0.13-0.36,0.3-0.36,0.5s0.14,0.37,0.36,0.5l5.2,3c0.22,0.13,0.53,0.21,0.87,0.21
			s0.64-0.08,0.87-0.21l5.2-3c0.22-0.13,0.36-0.3,0.36-0.5s-0.14-0.37-0.36-0.5l-5.2-3c-0.22-0.13-0.53-0.21-0.87-0.21
			s-0.64,0.08-0.87,0.21L177.68,237.5z"></path>
                          <path class="st8" d="M169.02,232.5c-0.22,0.13-0.36,0.3-0.36,0.5s0.14,0.37,0.36,0.5l5.2,3c0.22,0.13,0.53,0.21,0.87,0.21
			s0.64-0.08,0.87-0.21l5.2-3c0.22-0.13,0.36-0.3,0.36-0.5s-0.14-0.37-0.36-0.5l-5.2-3c-0.22-0.13-0.53-0.21-0.87-0.21
			s-0.64,0.08-0.87,0.21L169.02,232.5z"></path>
                          <path class="st8" d="M160.36,227.5c-0.22,0.13-0.36,0.3-0.36,0.5s0.14,0.37,0.36,0.5l5.2,3c0.22,0.13,0.53,0.21,0.87,0.21
			s0.64-0.08,0.87-0.21l5.2-3c0.22-0.13,0.36-0.3,0.36-0.5s-0.14-0.37-0.36-0.5l-5.2-3c-0.22-0.13-0.53-0.21-0.87-0.21
			s-0.64,0.08-0.87,0.21L160.36,227.5z"></path>
                          <path class="st8" d="M151.7,222.5c-0.22,0.13-0.36,0.3-0.36,0.5s0.14,0.37,0.36,0.5l5.2,3c0.22,0.13,0.53,0.21,0.87,0.21
			s0.64-0.08,0.87-0.21l5.2-3c0.22-0.13,0.36-0.3,0.36-0.5s-0.14-0.37-0.36-0.5l-5.2-3c-0.22-0.13-0.53-0.21-0.87-0.21
			s-0.64,0.08-0.87,0.21L151.7,222.5z"></path>
                          <path class="st8" d="M143.04,217.5c-0.22,0.13-0.36,0.3-0.36,0.5s0.14,0.37,0.36,0.5l5.2,3c0.22,0.13,0.53,0.21,0.87,0.21
			s0.64-0.08,0.87-0.21l5.2-3c0.22-0.13,0.36-0.3,0.36-0.5s-0.14-0.37-0.36-0.5l-5.2-3c-0.22-0.13-0.53-0.21-0.87-0.21
			s-0.64,0.08-0.87,0.21L143.04,217.5z"></path>
                          <path class="st8" d="M134.38,212.5c-0.22,0.13-0.36,0.3-0.36,0.5s0.14,0.37,0.36,0.5l5.2,3c0.22,0.13,0.53,0.21,0.87,0.21
			s0.64-0.08,0.87-0.21l5.2-3c0.22-0.13,0.36-0.3,0.36-0.5s-0.14-0.37-0.36-0.5l-5.2-3c-0.22-0.13-0.53-0.21-0.87-0.21
			s-0.64,0.08-0.87,0.21L134.38,212.5z"></path>
                          <path class="st8" d="M125.72,207.5c-0.22,0.13-0.36,0.3-0.36,0.5s0.14,0.37,0.36,0.5l5.2,3c0.22,0.13,0.53,0.21,0.87,0.21
			s0.64-0.08,0.87-0.21l5.2-3c0.22-0.13,0.36-0.3,0.36-0.5s-0.14-0.37-0.36-0.5l-5.2-3c-0.22-0.13-0.53-0.21-0.87-0.21
			s-0.64,0.08-0.87,0.21L125.72,207.5z"></path>
                          <path class="st8" d="M111.86,199.5c-0.22,0.13-0.36,0.3-0.36,0.5s0.14,0.37,0.36,0.5l10.39,6c0.22,0.13,0.53,0.21,0.87,0.21
			c0.34,0,0.64-0.08,0.87-0.21l5.2-3c0.22-0.13,0.36-0.3,0.36-0.5s-0.14-0.37-0.36-0.5l-10.39-6c-0.22-0.13-0.53-0.21-0.87-0.21
			c-0.34,0-0.64,0.08-0.87,0.21L111.86,199.5z"></path>
                          <path class="st8" d="M217.52,250.5c-0.22,0.13-0.36,0.3-0.36,0.5s0.14,0.37,0.36,0.5l5.2,3c0.22,0.13,0.53,0.21,0.87,0.21
			s0.64-0.08,0.87-0.21l5.2-3c0.22-0.13,0.36-0.3,0.36-0.5s-0.14-0.37-0.36-0.5l-5.2-3c-0.22-0.13-0.53-0.21-0.87-0.21
			s-0.64,0.08-0.87,0.21L217.52,250.5z"></path>
                          <path class="st8" d="M208.86,245.5c-0.22,0.13-0.36,0.3-0.36,0.5s0.14,0.37,0.36,0.5l5.2,3c0.22,0.13,0.53,0.21,0.87,0.21
			s0.64-0.08,0.87-0.21l5.2-3c0.22-0.13,0.36-0.3,0.36-0.5s-0.14-0.37-0.36-0.5l-5.2-3c-0.22-0.13-0.53-0.21-0.87-0.21
			s-0.64,0.08-0.87,0.21L208.86,245.5z"></path>
                          <path class="st8" d="M200.2,240.5c-0.22,0.13-0.36,0.3-0.36,0.5s0.14,0.37,0.36,0.5l5.2,3c0.22,0.13,0.53,0.21,0.87,0.21
			s0.64-0.08,0.87-0.21l5.2-3c0.22-0.13,0.36-0.3,0.36-0.5s-0.14-0.37-0.36-0.5l-5.2-3c-0.22-0.13-0.53-0.21-0.87-0.21
			s-0.64,0.08-0.87,0.21L200.2,240.5z"></path>
                          <path class="st8" d="M191.54,235.5c-0.22,0.13-0.36,0.3-0.36,0.5s0.14,0.37,0.36,0.5l5.2,3c0.22,0.13,0.53,0.21,0.87,0.21
			s0.64-0.08,0.87-0.21l5.2-3c0.22-0.13,0.36-0.3,0.36-0.5s-0.14-0.37-0.36-0.5l-5.2-3c-0.22-0.13-0.53-0.21-0.87-0.21
			s-0.64,0.08-0.87,0.21L191.54,235.5z"></path>
                          <path class="st8" d="M182.88,230.5c-0.22,0.13-0.36,0.3-0.36,0.5s0.14,0.37,0.36,0.5l5.2,3c0.22,0.13,0.53,0.21,0.87,0.21
			s0.64-0.08,0.87-0.21l5.2-3c0.22-0.13,0.36-0.3,0.36-0.5s-0.14-0.37-0.36-0.5l-5.2-3c-0.22-0.13-0.53-0.21-0.87-0.21
			s-0.64,0.08-0.87,0.21L182.88,230.5z"></path>
                          <path class="st8" d="M174.22,225.5c-0.22,0.13-0.36,0.3-0.36,0.5s0.14,0.37,0.36,0.5l5.2,3c0.22,0.13,0.53,0.21,0.87,0.21
			s0.64-0.08,0.87-0.21l5.2-3c0.22-0.13,0.36-0.3,0.36-0.5s-0.14-0.37-0.36-0.5l-5.2-3c-0.22-0.13-0.53-0.21-0.87-0.21
			s-0.64,0.08-0.87,0.21L174.22,225.5z"></path>
                          <path class="st8" d="M165.56,220.5c-0.22,0.13-0.36,0.3-0.36,0.5s0.14,0.37,0.36,0.5l5.2,3c0.22,0.13,0.53,0.21,0.87,0.21
			s0.64-0.08,0.87-0.21l5.2-3c0.22-0.13,0.36-0.3,0.36-0.5s-0.14-0.37-0.36-0.5l-5.2-3c-0.22-0.13-0.53-0.21-0.87-0.21
			s-0.64,0.08-0.87,0.21L165.56,220.5z"></path>
                          <path class="st8" d="M156.9,215.5c-0.22,0.13-0.36,0.3-0.36,0.5s0.14,0.37,0.36,0.5l5.2,3c0.22,0.13,0.53,0.21,0.87,0.21
			s0.64-0.08,0.87-0.21l5.2-3c0.22-0.13,0.36-0.3,0.36-0.5s-0.14-0.37-0.36-0.5l-5.2-3c-0.22-0.13-0.53-0.21-0.87-0.21
			s-0.64,0.08-0.87,0.21L156.9,215.5z"></path>
                          <path class="st8" d="M148.24,210.5c-0.22,0.13-0.36,0.3-0.36,0.5s0.14,0.37,0.36,0.5l5.2,3c0.22,0.13,0.53,0.21,0.87,0.21
			s0.64-0.08,0.87-0.21l5.2-3c0.22-0.13,0.36-0.3,0.36-0.5s-0.14-0.37-0.36-0.5l-5.2-3c-0.22-0.13-0.53-0.21-0.87-0.21
			s-0.64,0.08-0.87,0.21L148.24,210.5z"></path>
                          <path class="st8" d="M139.58,205.5c-0.22,0.13-0.36,0.3-0.36,0.5s0.14,0.37,0.36,0.5l5.2,3c0.22,0.13,0.53,0.21,0.87,0.21
			s0.64-0.08,0.87-0.21l5.2-3c0.22-0.13,0.36-0.3,0.36-0.5s-0.14-0.37-0.36-0.5l-5.2-3c-0.22-0.13-0.53-0.21-0.87-0.21
			s-0.64,0.08-0.87,0.21L139.58,205.5z"></path>
                          <path class="st8" d="M130.91,200.5c-0.22,0.13-0.36,0.3-0.36,0.5s0.14,0.37,0.36,0.5l5.2,3c0.22,0.13,0.53,0.21,0.87,0.21
			s0.64-0.08,0.87-0.21l5.2-3c0.22-0.13,0.36-0.3,0.36-0.5s-0.14-0.37-0.36-0.5l-5.2-3c-0.22-0.13-0.53-0.21-0.87-0.21
			s-0.64,0.08-0.87,0.21L130.91,200.5z"></path>
                          <path class="st8" d="M120.52,194.5c-0.22,0.13-0.36,0.3-0.36,0.5s0.14,0.37,0.36,0.5l6.93,4c0.22,0.13,0.53,0.21,0.87,0.21
			s0.64-0.08,0.87-0.21l5.2-3c0.22-0.13,0.36-0.3,0.36-0.5s-0.14-0.37-0.36-0.5l-6.93-4c-0.22-0.13-0.53-0.21-0.87-0.21
			c-0.34,0-0.64,0.08-0.87,0.21L120.52,194.5z"></path>
                        </g>
                      </g>
                      <g>
                        <path class="st9" d="M127.6,73.76c0,0,1.06-0.61,1.73-1c0.68-0.39,1.56-0.27,2.45,0.24l117.78,68c0.89,0.51,1.77,1.41,2.45,2.59
		c0.68,1.17,1.01,2.39,1.01,3.41v104l-1.73,1L127.6,73.76z"></path>
                        <path class="st3" d="M126.58,76c0-1.02,0.34-1.85,1.01-2.24c0.68-0.39,1.56-0.27,2.45,0.24l117.78,68
		c0.89,0.51,1.77,1.41,2.45,2.59c0.68,1.17,1.01,2.39,1.01,3.41v104l-124.71-72V76H126.58z"></path>
                        <polygon class="st5" points="246.1,243 131.78,177 131.78,81 246.1,147 	"></polygon>
                        <path class="st0" d="M188.94,133c-13.85-8-25.11-1.49-25.11,14.5S175.1,183,188.94,191s25.11,1.49,25.11-14.5
		S202.79,141,188.94,133z M206.58,182.85l-7.8-15.76l7.46-6.46c1.66,4.32,2.61,8.75,2.61,12.88
		C208.86,177.35,208.03,180.5,206.58,182.85z M202.99,153.83L188.94,166l-14.05-28.4c3.6-2.07,8.57-1.77,14.05,1.4
		S199.39,147.6,202.99,153.83z M171.63,140.64l7.46,15.08l-7.8,6.76c-1.45-4.03-2.28-8.13-2.28-11.98
		C169.02,146.37,169.97,143.04,171.63,140.64z M188.94,185c-5.71-3.3-10.87-9.07-14.5-15.64l7.99-6.92l2.46,4.96
		c0.99,2,2.47,3.68,4.06,4.59s3.06,0.95,4.06,0.09l2.46-2.13l7.99,16.15C199.81,188.48,194.65,188.3,188.94,185z"></path>
                      </g>
                    </svg>
                    <svg version="1.1" class="promo-slider-icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="376px" height="324px" viewBox="0 0 376 324" style="enable-background:new 0 0 376 324;"
                      xml:space="preserve">
                      <g>
                        <path class="st5" d="M375.35,272.06c0.4,0.59,0.65,1.31,0.65,1.94c0,1.11,0,50,0,50l-51.96-30c0,0,0-48.89,0-50
		c0-0.63,0.25-1.05,0.65-1.19l24.25-8.4c0.3-0.1,0.67-0.05,1.08,0.19c0.41,0.24,0.79,0.62,1.08,1.06L375.35,272.06z"></path>
                        <path class="st0" d="M372.28,274.15c-0.17-0.29-0.39-0.52-0.61-0.65l-43.3-25c-0.22-0.13-0.44-0.16-0.61-0.06
		c-0.17,0.1-0.25,0.3-0.25,0.56v42c0,0.26,0.08,0.56,0.25,0.85s0.39,0.52,0.61,0.65l43.3,25c0.22,0.13,0.44,0.16,0.61,0.06
		c0.17-0.1,0.25-0.3,0.25-0.56v-42C372.54,274.74,372.45,274.44,372.28,274.15z"></path>
                        <polygon class="st1" points="324.04,294 376,324 376,276"></polygon>
                        <polygon class="st4" points="351.95,284.33 376,324 346.24,286.31"></polygon>
                        <polygon class="st2" points="376,324 324.04,294 324.04,246"></polygon>
                      </g>
                      <g>
                        <polygon class="st1" points="313.65,288 261.68,258 261.68,210 313.65,240"></polygon>
                        <polygon class="st4" points="289.6,248.33 313.65,288 283.89,250.31"></polygon>
                        <polygon class="st2" points="313.65,288 261.68,258 261.68,210"></polygon>
                        <path class="st3" d="M313,243.19c0.4-0.14,0.65-0.55,0.65-1.19c0-1.1,0-2,0-2l-51.96-30c0,0,0,0.9,0,2c0,0.63,0.25,1.34,0.65,1.94
		l24.25,36.4c0.3,0.45,0.67,0.83,1.08,1.06c0.41,0.24,0.79,0.29,1.08,0.19L313,243.19z"></path>
                      </g>
                      <g>
                        <polygon class="st1" points="313.65,228 261.68,198 261.68,150 313.65,180"></polygon>
                        <polygon class="st4" points="289.6,188.33 313.65,228 283.89,190.31 	"></polygon>
                        <polygon class="st2" points="313.65,228 261.68,198 261.68,150"></polygon>
                        <path class="st3" d="M313,183.19c0.4-0.14,0.65-0.55,0.65-1.19c0-1.1,0-2,0-2l-51.96-30c0,0,0,0.9,0,2c0,0.63,0.25,1.34,0.65,1.94
		l24.25,36.4c0.3,0.45,0.67,0.83,1.08,1.06c0.41,0.24,0.79,0.29,1.08,0.19L313,183.19z"></path>
                      </g>
                    </svg>

                  </div>
                </a>
                <a href="/demo-whmcs/index.php?rp=/store/codeguard" class="promo-slider-slide" style="width: 840px; margin-right: 100px;">
                  <div class="promo-slider-body">
                    <div class="promo-slider-content">
                      <h2 class="promo-slider-title">
                        CodeGuard Website Backup -
                        Get peace-of-mind that your website is backed up..
                      </h2>
                    </div>
                    <div class="promo-slider-more"><i class="ls ls-basket"></i>Order / Learn More</div>
                  </div>
                  <div class="promo-slider-icons">
                    <svg class="promo-slider-icon codeguard" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 375 324" style="enable-background:new 0 0 375 324;" xml:space="preserve">
                      <g id="metrics">
                        <path class="st0" d="M0,109l114,66V68L0,1V109z"></path>
                        <path class="st3" d="M11,71.3V32l91,53.5V124L11,71.3z M19,89.1c4.4,2.6,8,8.9,8,14.1s-3.6,7.3-8,4.7
		s-8-8.9-8-14.1S14.6,86.5,19,89.1z M19,105.1c3.1,1.8,5.6,0.3,5.6-3.3c-0.2-4-2.3-7.6-5.6-9.9c-3.1-1.8-5.6-0.3-5.6,3.3
		C13.6,99.2,15.7,102.8,19,105.1L19,105.1z M39.8,112l-10.6-6v-2l10.6,6V112z M53,107.1c4.4,2.6,8,8.9,8,14.1s-3.6,7.3-8,4.7
		s-8-8.9-8-14.1S48.6,104.5,53,107.1z M53,123.1c3.1,1.8,5.6,0.3,5.6-3.3c-0.2-4-2.3-7.6-5.6-9.9c-3.1-1.8-5.6-0.3-5.6,3.3
		C47.6,117.2,49.7,120.8,53,123.1L53,123.1z M73.8,130l-10.6-6v-2l10.6,6V130z M89,126.1c4.4,2.6,8,8.9,8,14.1s-3.6,7.3-8,4.7
		s-8-8.9-8-14.1S84.6,123.5,89,126.1z M89,142.1c3.1,1.8,5.6,0.3,5.6-3.3c-0.2-4-2.3-7.6-5.6-9.9c-3.1-1.8-5.6-0.3-5.6,3.3
		C83.6,136.2,85.7,139.8,89,142.1L89,142.1z"></path>
                        <path class="st5" d="M19.3,92.1C19.2,92,19.1,92,19,91.9c-3.1-1.8-5.6-0.3-5.6,3.3
		c0.2,4,2.3,7.6,5.6,9.9c0.9,0.6,2,0.9,3.1,0.7l1.2,3.1c-1.5,0.1-3-0.2-4.3-1c-4.4-2.6-8-8.9-8-14.1s3.6-7.3,8-4.7
		c0.1,0.1,0.2,0.1,0.3,0.2V92.1z M53.3,110.1c-0.1-0.1-0.2-0.1-0.3-0.2c-3.1-1.8-5.6-0.3-5.6,3.3c0.2,4,2.3,7.6,5.6,9.9
		c3.1,1.8,5.6,0.3,5.6-3.3c0-1.5-0.4-3-1-4.3l1.9-0.5c0.9,2,1.4,4.1,1.5,6.3c0,5.2-3.6,7.3-8,4.7s-8-8.9-8-14.1s3.6-7.3,8-4.7
		c0.1,0.1,0.2,0.1,0.3,0.2V110.1L53.3,110.1z M89.3,129.1c-0.1-0.1-0.2-0.1-0.3-0.2c-3.1-1.8-5.6-0.3-5.6,3.3c0.2,4,2.3,7.6,5.6,9.9
		c0.9,0.6,2,0.9,3.1,0.7l1.2,3.1c-1.5,0.1-3-0.2-4.3-1c-4.4-2.6-8-8.9-8-14.1s3.6-7.3,8-4.7c0.1,0.1,0.2,0.1,0.3,0.2V129.1z M0,14
		l114,66V67L0,0V14z"></path>
                      </g>
                    </svg>
                    <svg class="promo-slider-icon codeguard" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 375 324" style="enable-background:new 0 0 375 324;" xml:space="preserve">
                      <g id="photo">
                        <g id="_2">
                          <path class="st1" d="M242,226.5c0,0.2,0,0.4,0,0.6c0,12.6-8.7,27.9-19.5,34.2
			c-5.1,3-9.7,3.4-13.2,1.7l-0.1,0.1l-105.1-58.6c3.3,1.1,7.3,0.5,11.8-2.1c10.5-6.2,19-21.2,19-33.6c0-0.3,0-0.5,0-0.8l0,0V76
			l107,61.8L242,226.5L242,226.5z M144,89.8c-0.1-0.7-0.5-1.4-1.1-1.8l-2.8-1.8c-0.6-0.4-1.1-0.1-1.1,0.5v1.5
			c0.1,0.7,0.5,1.4,1.1,1.8l2.8,1.8c0.6,0.4,1.1,0.1,1.1-0.5V89.8z M144,97.8c-0.1-0.7-0.5-1.4-1.1-1.8l-2.8-1.8
			c-0.6-0.4-1.1-0.1-1.1,0.5v1.5c0.1,0.7,0.5,1.4,1.1,1.8l2.8,1.8c0.6,0.4,1.1,0.1,1.1-0.5V97.8z M144,105.8
			c-0.1-0.7-0.5-1.4-1.1-1.8l-2.8-1.8c-0.6-0.4-1.1-0.1-1.1,0.5v1.5c0.1,0.7,0.5,1.4,1.1,1.8l2.8,1.8c0.6,0.4,1.1,0.1,1.1-0.5V105.8
			z M144,113.8c-0.1-0.7-0.5-1.4-1.1-1.8l-2.8-1.8c-0.6-0.4-1.1-0.1-1.1,0.5v1.5c0.1,0.7,0.5,1.4,1.1,1.8l2.8,1.8
			c0.6,0.4,1.1,0.1,1.1-0.5V113.8z M144,121.8c-0.1-0.7-0.5-1.4-1.1-1.8l-2.8-1.8c-0.6-0.4-1.1-0.1-1.1,0.5v1.5
			c0.1,0.7,0.5,1.4,1.1,1.8l2.8,1.8c0.6,0.4,1.1,0.1,1.1-0.5V121.8z M144,129.8c-0.1-0.7-0.5-1.4-1.1-1.8l-2.8-1.8
			c-0.6-0.4-1.1-0.1-1.1,0.5v1.5c0.1,0.7,0.5,1.4,1.1,1.8l2.8,1.8c0.6,0.4,1.1,0.1,1.1-0.5V129.8z M144,137.8
			c-0.1-0.7-0.5-1.4-1.1-1.8l-2.8-1.8c-0.6-0.4-1.1-0.1-1.1,0.5v1.5c0.1,0.7,0.5,1.4,1.1,1.8l2.8,1.8c0.6,0.4,1.1,0.1,1.1-0.5V137.8
			z M144,145.8c-0.1-0.7-0.5-1.4-1.1-1.8l-2.8-1.8c-0.6-0.4-1.1-0.1-1.1,0.5v1.5c0.1,0.7,0.5,1.4,1.1,1.8l2.8,1.8
			c0.6,0.4,1.1,0.1,1.1-0.5V145.8z M144,153.8c-0.1-0.7-0.5-1.4-1.1-1.8l-2.8-1.8c-0.6-0.4-1.1-0.1-1.1,0.5v1.5
			c0.1,0.7,0.5,1.4,1.1,1.8l2.8,1.8c0.6,0.4,1.1,0.1,1.1-0.5V153.8z M144,161.8c-0.1-0.7-0.5-1.4-1.1-1.8l-2.8-1.8
			c-0.6-0.4-1.1-0.1-1.1,0.5v1.5c0.1,0.7,0.5,1.4,1.1,1.8l2.8,1.8c0.6,0.4,1.1,0.1,1.1-0.5V161.8z M144,169.8
			c-0.1-0.7-0.5-1.4-1.1-1.8l-2.8-1.8c-0.6-0.4-1.1-0.1-1.1,0.5v1.5c0.1,0.7,0.5,1.4,1.1,1.8l2.8,1.8c0.6,0.4,1.1,0.1,1.1-0.5V169.8
			z M144,177.8c-0.1-0.7-0.5-1.4-1.1-1.8l-2.8-1.8c-0.6-0.4-1.1-0.1-1.1,0.5v1.5c0.1,0.7,0.5,1.4,1.1,1.8l2.8,1.8
			c0.6,0.4,1.1,0.1,1.1-0.5V177.8z M238,142.8c-0.1-0.7-0.5-1.4-1.1-1.8l-2.8-1.8c-0.6-0.4-1.1-0.1-1.1,0.5v1.5
			c0.1,0.7,0.5,1.4,1.1,1.8l2.8,1.8c0.6,0.4,1.1,0.1,1.1-0.5V142.8z M238,150.8c-0.1-0.7-0.5-1.4-1.1-1.8l-2.8-1.8
			c-0.6-0.4-1.1-0.1-1.1,0.5v1.5c0.1,0.7,0.5,1.4,1.1,1.8l2.8,1.8c0.6,0.4,1.1,0.1,1.1-0.5V150.8z M238,158.8
			c-0.1-0.7-0.5-1.4-1.1-1.8l-2.8-1.8c-0.6-0.4-1.1-0.1-1.1,0.5v1.5c0.1,0.7,0.5,1.4,1.1,1.8l2.8,1.8c0.6,0.4,1.1,0.1,1.1-0.5V158.8
			z M238,166.8c-0.1-0.7-0.5-1.4-1.1-1.8l-2.8-1.8c-0.6-0.4-1.1-0.1-1.1,0.5v1.5c0.1,0.7,0.5,1.4,1.1,1.8l2.8,1.8
			c0.6,0.4,1.1,0.1,1.1-0.5V166.8z M238,174.8c-0.1-0.7-0.5-1.4-1.1-1.8l-2.8-1.8c-0.6-0.4-1.1-0.1-1.1,0.5v1.5
			c0.1,0.7,0.5,1.4,1.1,1.8l2.8,1.8c0.6,0.4,1.1,0.1,1.1-0.5V174.8z M238,182.8c-0.1-0.7-0.5-1.4-1.1-1.8l-2.8-1.8
			c-0.6-0.4-1.1-0.1-1.1,0.5v1.5c0.1,0.7,0.5,1.4,1.1,1.8l2.8,1.8c0.6,0.4,1.1,0.1,1.1-0.5V182.8z M238,190.8
			c-0.1-0.7-0.5-1.4-1.1-1.8l-2.8-1.8c-0.6-0.4-1.1-0.1-1.1,0.5v1.5c0.1,0.7,0.5,1.4,1.1,1.8l2.8,1.8c0.6,0.4,1.1,0.1,1.1-0.5V190.8
			z M238,198.8c-0.1-0.7-0.5-1.4-1.1-1.8l-2.8-1.8c-0.6-0.4-1.1-0.1-1.1,0.5v1.5c0.1,0.7,0.5,1.4,1.1,1.8l2.8,1.8
			c0.6,0.4,1.1,0.1,1.1-0.5V198.8z M238,206.8c-0.1-0.7-0.5-1.4-1.1-1.8l-2.8-1.8c-0.6-0.4-1.1-0.1-1.1,0.5v1.5
			c0.1,0.7,0.5,1.4,1.1,1.8l2.8,1.8c0.6,0.4,1.1,0.1,1.1-0.5V206.8z M238,214.8c-0.1-0.7-0.5-1.4-1.1-1.8l-2.8-1.8
			c-0.6-0.4-1.1-0.1-1.1,0.5v1.5c0.1,0.7,0.5,1.4,1.1,1.8l2.8,1.8c0.6,0.4,1.1,0.1,1.1-0.5V214.8z"></path>
                          <path class="st5" d="M150,174.4V97l76,43.6V218L150,174.4z M206.5,250.3c-5.1,3-9.7,3.4-13.2,1.7
			l-0.1,0.1l-73.9-40.4c3.2,1.1,7.3,0.5,11.7-2.1c8.6-5.1,15.9-16.1,18.2-26.8l75.2,43.2C221.5,235.8,214.6,245.6,206.5,250.3
			L206.5,250.3z"></path>
                          <path class="st0" d="M187.7,154.4v7.3c2.7,1.4,5.2,3.3,7.3,5.5c-1.7,2.7-4.1,4.3-7.3,4.2v8.2
			c7.1,1.1,12.6-3.4,15.1-12c-1.8-2.1-3.6-4-5.6-5.9C194.3,159,191.1,156.5,187.7,154.4L187.7,154.4L187.7,154.4z M187.7,145
			c3.8,2.5,7.3,5.3,10.4,8.6c0,1.3-0.1,2.5-0.2,3.7c2.1,1.9,4,3.9,5.9,6.1c0.6-3.3,0.8-6.7,0.6-10.1c-4.8-5.8-10.4-10.9-16.7-15.1
			L187.7,145L187.7,145L187.7,145z M168.1,132.3c-0.6,16.8,6.3,35.1,16.7,45.6v-8.4c-6.8-8.3-9.8-19.1-10.5-29.6
			c3.7,0.5,7.2,1.7,10.5,3.5v-6.9C179.6,133.8,173.9,132.4,168.1,132.3L168.1,132.3z M165.5,129.3c12.6-1.3,29.5,8,42,24.1
			c0.6,19.2-6.7,31.2-21.1,28.9C169.7,167.5,165.2,147.5,165.5,129.3L165.5,129.3z M163.1,126.2c-1.1,20.2,5.3,42.6,23.3,59.3
			c17.3,2.9,24.3-10.7,23.5-32.3c-14.4-18.5-32.1-28.8-46.5-27L163.1,126.2L163.1,126.2L163.1,126.2z"></path>
                          <path class="st9" d="M203,250v0.2c0,6.4,2.3,10.8,6,12.7l0,0.1L96.9,204.5L87,192.4V115l107.1,59.1
			c4.9,0.7,8.3,4.9,8.8,11.7l0.1,0.1v1.6c0,0.1,0,0.1,0,0.2s0,0.1,0,0.2V250z"></path>
                          <path class="st1" d="M184,176.6c-10.5,6.2-19,21.2-19,33.6c0,0.3,0,0.5,0,0.8l0,0v102L58,251.2v-98.7l0,0
			c0-0.2,0-0.4,0-0.6c0-12.6,8.7-27.9,19.5-34.2c5.1-3,9.7-3.4,13.2-1.7l0.1-0.1l105.1,58.5C192.6,173.4,188.5,174,184,176.6z
			 M67,159.8c-0.1-0.7-0.5-1.4-1.1-1.8l-2.8-1.8c-0.6-0.4-1.1-0.1-1.1,0.5v1.5c0.1,0.7,0.5,1.4,1.1,1.8l2.8,1.8
			c0.6,0.4,1.1,0.1,1.1-0.5V159.8z M67,167.8c-0.1-0.7-0.5-1.4-1.1-1.8l-2.8-1.8c-0.6-0.4-1.1-0.1-1.1,0.5v1.5
			c0.1,0.7,0.5,1.4,1.1,1.8l2.8,1.8c0.6,0.4,1.1,0.1,1.1-0.5V167.8z M67,175.8c-0.1-0.7-0.5-1.4-1.1-1.8l-2.8-1.8
			c-0.6-0.4-1.1-0.1-1.1,0.5v1.5c0.1,0.7,0.5,1.4,1.1,1.8l2.8,1.8c0.6,0.4,1.1,0.1,1.1-0.5V175.8z M67,183.8
			c-0.1-0.7-0.5-1.4-1.1-1.8l-2.8-1.8c-0.6-0.4-1.1-0.1-1.1,0.5v1.5c0.1,0.7,0.5,1.4,1.1,1.8l2.8,1.8c0.6,0.4,1.1,0.1,1.1-0.5V183.8
			z M67,191.8c-0.1-0.7-0.5-1.4-1.1-1.8l-2.8-1.8c-0.6-0.4-1.1-0.1-1.1,0.5v1.5c0.1,0.7,0.5,1.4,1.1,1.8l2.8,1.8
			c0.6,0.4,1.1,0.1,1.1-0.5V191.8z M67,199.8c-0.1-0.7-0.5-1.4-1.1-1.8l-2.8-1.8c-0.6-0.4-1.1-0.1-1.1,0.5v1.5
			c0.1,0.7,0.5,1.4,1.1,1.8l2.8,1.8c0.6,0.4,1.1,0.1,1.1-0.5V199.8z M67,207.8c-0.1-0.7-0.5-1.4-1.1-1.8l-2.8-1.8
			c-0.6-0.4-1.1-0.1-1.1,0.5v1.5c0.1,0.7,0.5,1.4,1.1,1.8l2.8,1.8c0.6,0.4,1.1,0.1,1.1-0.5V207.8z M67,215.8
			c-0.1-0.7-0.5-1.4-1.1-1.8l-2.8-1.8c-0.6-0.4-1.1-0.1-1.1,0.5v1.5c0.1,0.7,0.5,1.4,1.1,1.8l2.8,1.8c0.6,0.4,1.1,0.1,1.1-0.5V215.8
			z M67,223.8c-0.1-0.7-0.5-1.4-1.1-1.8l-2.8-1.8c-0.6-0.4-1.1-0.1-1.1,0.5v1.5c0.1,0.7,0.5,1.4,1.1,1.8l2.8,1.8
			c0.6,0.4,1.1,0.1,1.1-0.5V223.8z M67,231.8c-0.1-0.7-0.5-1.4-1.1-1.8l-2.8-1.8c-0.6-0.4-1.1-0.1-1.1,0.5v1.5
			c0.1,0.7,0.5,1.4,1.1,1.8l2.8,1.8c0.6,0.4,1.1,0.1,1.1-0.5V231.8z M67,239.8c-0.1-0.7-0.5-1.4-1.1-1.8l-2.8-1.8
			c-0.6-0.4-1.1-0.1-1.1,0.5v1.5c0.1,0.7,0.5,1.4,1.1,1.8l2.8,1.8c0.6,0.4,1.1,0.1,1.1-0.5V239.8z M67,247.8
			c-0.1-0.7-0.5-1.4-1.1-1.8l-2.8-1.8c-0.6-0.4-1.1-0.1-1.1,0.5v1.5c0.1,0.7,0.5,1.4,1.1,1.8l2.8,1.8c0.6,0.4,1.1,0.1,1.1-0.5V247.8
			z M161,214.8c-0.1-0.7-0.5-1.4-1.1-1.8l-2.8-1.8c-0.6-0.4-1.1-0.1-1.1,0.5v1.5c0.1,0.7,0.5,1.4,1.1,1.8l2.8,1.8
			c0.6,0.4,1.1,0.1,1.1-0.5V214.8z M161,222.8c-0.1-0.7-0.5-1.4-1.1-1.8l-2.8-1.8c-0.6-0.4-1.1-0.1-1.1,0.5v1.5
			c0.1,0.7,0.5,1.4,1.1,1.8l2.8,1.8c0.6,0.4,1.1,0.1,1.1-0.5V222.8z M161,230.8c-0.1-0.7-0.5-1.4-1.1-1.8l-2.8-1.8
			c-0.6-0.4-1.1-0.1-1.1,0.5v1.5c0.1,0.7,0.5,1.4,1.1,1.8l2.8,1.8c0.6,0.4,1.1,0.1,1.1-0.5V230.8z M161,238.8
			c-0.1-0.7-0.5-1.4-1.1-1.8l-2.8-1.8c-0.6-0.4-1.1-0.1-1.1,0.5v1.5c0.1,0.7,0.5,1.4,1.1,1.8l2.8,1.8c0.6,0.4,1.1,0.1,1.1-0.5V238.8
			z M161,246.8c-0.1-0.7-0.5-1.4-1.1-1.8l-2.8-1.8c-0.6-0.4-1.1-0.1-1.1,0.5v1.5c0.1,0.7,0.5,1.4,1.1,1.8l2.8,1.8
			c0.6,0.4,1.1,0.1,1.1-0.5V246.8z M161,254.8c-0.1-0.7-0.5-1.4-1.1-1.8l-2.8-1.8c-0.6-0.4-1.1-0.2-1.1,0.5v1.5
			c0.1,0.7,0.5,1.4,1.1,1.8l2.8,1.8c0.6,0.4,1.1,0.2,1.1-0.5V254.8z M161,262.8c-0.1-0.7-0.5-1.4-1.1-1.8l-2.8-1.8
			c-0.6-0.4-1.1-0.2-1.1,0.5v1.5c0.1,0.7,0.5,1.4,1.1,1.8l2.8,1.8c0.6,0.4,1.1,0.2,1.1-0.5V262.8z M161,270.8
			c-0.1-0.7-0.5-1.4-1.1-1.8l-2.8-1.8c-0.6-0.4-1.1-0.2-1.1,0.5v1.5c0.1,0.7,0.5,1.4,1.1,1.8l2.8,1.8c0.6,0.4,1.1,0.2,1.1-0.5V270.8
			z M161,278.8c-0.1-0.7-0.5-1.4-1.1-1.8l-2.8-1.8c-0.6-0.4-1.1-0.2-1.1,0.5v1.5c0.1,0.7,0.5,1.4,1.1,1.8l2.8,1.8
			c0.6,0.4,1.1,0.2,1.1-0.5V278.8z M161,286.8c-0.1-0.7-0.5-1.4-1.1-1.8l-2.8-1.8c-0.6-0.4-1.1-0.2-1.1,0.5v1.5
			c0.1,0.7,0.5,1.4,1.1,1.8l2.8,1.8c0.6,0.4,1.1,0.2,1.1-0.5V286.8z M161,294.8c-0.1-0.7-0.5-1.4-1.1-1.8l-2.8-1.8
			c-0.6-0.4-1.1-0.2-1.1,0.5v1.5c0.1,0.7,0.5,1.4,1.1,1.8l2.8,1.8c0.6,0.4,1.1,0.2,1.1-0.5V294.8z M161,302.8
			c-0.1-0.7-0.5-1.4-1.1-1.8l-2.8-1.8c-0.6-0.4-1.1-0.2-1.1,0.5v1.5c0.1,0.7,0.5,1.4,1.1,1.8l2.8,1.8c0.6,0.4,1.1,0.2,1.1-0.5V302.8
			z"></path>
                          <path class="st5" d="M169,167.6c-10.5,6.2-19,21.2-19,33.6c0,0.3,0,0.5,0,0.8l0,0v2l-55.8-32.1
			c0,0,0,0-0.1,0L74,160.3v-0.1l0,0c0.3-12.5,8.9-27.4,19.5-33.5c5.1-3,9.7-3.4,13.2-1.7l0.1-0.1l74,40.5
			C177.5,164.4,173.4,165,169,167.6z"></path>
                          <path class="st0" d="M73,170l76,43.6V293l-76-43.6V170z"></path>
                          <path class="st5" d="M73,170l76,43.6v8.4l-76-43.6V170L73,170z"></path>
                          <path class="st3" d="M77,206v-21l67,38.1v21L77,206z M93,230.1L77,221v-11l16,9.1V230.1z M93,256.1L77,247v-22
			l16,9.1V256.1L93,256.1z M142.8,251l-46.6-27v-2l46.6,27V251z M111.8,238l-15.6-9v-2l15.6,9V238z M123.8,253l-27.6-16v-2l27.6,16
			V253z M131.8,263l-35.6-21v-2l35.6,21V263z"></path>
                          <path class="st0" d="M78.3,176.2c0.8,0.5,1.3,1.3,1.3,2.3c0.1,0.4-0.2,0.8-0.6,0.9c-0.2,0-0.5,0-0.7-0.2
			c-0.8-0.5-1.3-1.3-1.3-2.2c-0.1-0.4,0.2-0.8,0.6-0.9C77.9,176,78.1,176,78.3,176.2z M82,178.4c0.8,0.5,1.3,1.3,1.3,2.3
			c0.1,0.4-0.2,0.8-0.6,0.9c-0.2,0-0.5,0-0.7-0.2c-0.8-0.5-1.3-1.3-1.3-2.2c-0.1-0.4,0.2-0.8,0.6-0.9
			C81.6,178.2,81.9,178.3,82,178.4z M85.8,180.7c0.8,0.5,1.3,1.3,1.3,2.3c0.1,0.4-0.2,0.8-0.6,0.9c-0.2,0-0.5,0-0.7-0.2
			c-0.8-0.5-1.3-1.3-1.3-2.2c-0.1-0.4,0.2-0.8,0.6-0.9C85.4,180.5,85.6,180.5,85.8,180.7z"></path>
                        </g>
                        <g id="scan_kopia">
                          <path class="st5" d="M128,310.9v-5.8l17,9.9v-17.2l4,2.3V323L128,310.9z M145,232.4l-17-10v-5l21,12.3
			V254l-4-2.3V232.4z M59,181.8L44,173v20l-4-2.3V166l19,11.1V181.8L59,181.8z M44,256.4l15,8.7v6.1l-19-10.9v-23.4l4,2.3V256.4
			L44,256.4z"></path>
                        </g>
                      </g>
                    </svg>
                    <svg version="1.1" class="promo-slider-icon codeguard" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 375 325" style="enable-background:new 0 0 375 325;" xml:space="preserve">
                      <g id="backups">
                        <path class="st0" d="M323,191l52,30v104l-52-30V191z"></path>
                        <path class="st3" d="M361,290.7v-2l5.8,3.3v2L361,290.7z M361,282.7l5.8,3.3v2l-5.8-3.3V282.7z
		 M361,276.7l5.8,3.3v2l-5.8-3.3V276.7z M361,270.7l5.8,3.3v2l-5.8-3.3V270.7z M361,264.7l5.8,3.3v2l-5.8-3.3V264.7z M361,258.7
		l5.8,3.3v2l-5.8-3.3V258.7z M361,252.7l5.8,3.3v2l-5.8-3.3V252.7z M361,246.7l5.8,3.3v2l-5.8-3.3V246.7L361,246.7z M361,240.7
		l5.8,3.3v2l-5.8-3.3V240.7z M361,234.7l5.8,3.3v2l-5.8-3.3V234.7z M361,228.7l5.8,3.3v2l-5.8-3.3V228.7z M352,283.7l6,3.4v2l-6-3.4
		V283.7z M352,277.7l6,3.4v2l-6-3.4V277.7z M352,271.7l6,3.4v2l-6-3.4V271.7z M352,265.7l6,3.4v2l-6-3.4V265.7z M352,259.7l6,3.4v2
		l-6-3.4V259.7z M352,253.7l6,3.4v2l-6-3.4V253.7z M352,247.7l6,3.4v2l-6-3.4V247.7z M352,241.7l6,3.4v2l-6-3.4V241.7z M352,235.7
		l6,3.4v2l-6-3.4V235.7z M352,229.7l6,3.4v2l-6-3.4V229.7z M352,223.7l6,3.4v2l-6-3.4V223.7z M349,224l-17.8-10v-2l17.8,10V224
		L349,224z M349,230l-17.8-10v-2l17.8,10V230L349,230z M349,236l-17.8-10v-2l17.8,10V236L349,236z M349,242l-17.8-10v-2l17.8,10V242
		L349,242z M349,248l-17.8-10v-2l17.8,10V248L349,248z M349,254l-17.8-10v-2l17.8,10V254z M349,260l-17.8-10v-2l17.8,10V260z
		 M349,266l-17.8-10v-2l17.8,10V266z M349,272l-17.8-10v-2l17.8,10V272z M349,278l-17.8-10v-2l17.8,10V278z M349,284l-17.8-10v-2
		l17.8,10V284z"></path>
                        <path class="st5" d="M340.5,287.2l15,8.8c0.9,0.5,1.4,1.4,1.5,2.4v4.7c0,0.9-0.7,1.1-1.5,0.7
		l-15-8.8c-0.9-0.5-1.4-1.4-1.5-2.4v-4.7C339,287,339.7,286.8,340.5,287.2z"></path>
                      </g>
                      <g id="malware">
                        <path class="st1" d="M311.7,240.1l-49.4-28.3c-0.3-0.3-0.8-0.3-1.1,0.1c-0.2,0.2-0.2,0.4-0.2,0.7v44.7
		c0.1,0.9,0.5,1.7,1.3,2.2l49.4,28.3c0.3,0.3,0.8,0.3,1.1-0.1c0.2-0.2,0.2-0.4,0.2-0.7v-44.7C313,241.5,312.5,240.6,311.7,240.1z"></path>
                        <path class="st0" d="M296.1,256.9c0.5,0.3,0.8,0.9,0.8,1.5c0.1,0.3-0.1,0.5-0.4,0.6c-0.2,0-0.3,0-0.4-0.1
		l-3.1-1.8c-0.1,0.5-0.2,1-0.4,1.5c1.7,1.6,3.9,4.5,3.9,7.8c0.1,0.3-0.1,0.5-0.4,0.6c-0.2,0-0.3,0-0.4-0.1c-0.5-0.3-0.8-0.9-0.8-1.5
		c0-2.6-2-4.7-2.9-5.4c-1.1,1.6-2.9,2.2-5.4,1.1l-0.1,0l-0.1-0.1c-2.5-1.9-4.4-4.5-5.4-7.4c-0.9-0.3-2.9-0.5-2.9,2.1
		c0.1,0.3-0.1,0.5-0.4,0.6c-0.2,0-0.3,0-0.4-0.1c-0.5-0.3-0.8-0.9-0.8-1.5c0-3.4,2.2-3.7,3.9-3.3c-0.2-0.6-0.3-1.3-0.4-2l-3.1-1.8
		c-0.5-0.3-0.8-0.9-0.8-1.5c-0.1-0.3,0.1-0.5,0.4-0.6c0.2,0,0.3,0,0.4,0.1l2.9,1.7c0-0.5,0-1,0-1.4c-0.6-0.6-1.2-1.2-1.6-2
		c-1.3-2.3-1.9-4.8-1.8-7.4c-0.1-0.3,0.1-0.5,0.4-0.6c0.2,0,0.3,0,0.4,0.1c0.5,0.3,0.8,0.9,0.8,1.5c-0.1,2,0.3,3.9,1.2,5.7
		c0.2,0.3,0.4,0.6,0.7,0.9c0.1-0.2,0.2-0.4,0.4-0.4c0.3-0.1,0.5,0,0.7,0.1c-0.1-0.5-0.2-1.1-0.2-1.7c-0.2-1.1,0.6-2.2,1.7-2.4
		c0.3-0.1,0.6,0,0.9,0.1c0.4-1.3,1.5-1.7,2.8-0.9c1.5,1,2.5,2.5,2.8,4.2c1.5,1.4,2.5,3.3,2.6,5.4c0,0.5-0.1,1.1-0.2,1.6
		c0.3,0.2,0.6,0.5,0.8,0.8c0.1,0.2,0.3,0.5,0.4,0.7c0.3,0.1,0.6,0,0.9-0.1c0.8-0.4,1.2-1.9,1.2-4.2c-0.1-0.3,0.1-0.5,0.4-0.6
		c0.2,0,0.3,0,0.4,0.1c0.5,0.3,0.8,0.9,0.8,1.5c0,3-0.6,4.8-1.8,5.4c-0.5,0.2-1.1,0.3-1.6,0.1c0,0.4,0,0.9,0,1.4L296.1,256.9z
		 M286.5,259.1c3.3,1.4,5-1.2,5-4.6c0-0.8,0-1.7-0.1-2.5c-0.3-0.1-0.6-0.2-0.9-0.3c-0.5-0.2-1.1-0.4-1.9-0.7
		c-0.7-0.3-1.5-0.7-2.1-1.1c-0.8-0.5-1.6-1-2.3-1.6c-0.8-0.6-1.5-1.2-2-1.7c-0.2-0.2-0.5-0.4-0.6-0.6c-0.1,0.8-0.1,1.7-0.1,2.6
		C281.5,252,283.2,256.7,286.5,259.1L286.5,259.1z M286.5,242.9c-1.5-0.9-3.8-1.5-3.8,0.2c-0.1,1.3,0.5,2.5,1.6,3.2
		c0.7,0.5,1.4,1,2.2,1.5c0.6,0.3,1.2,0.7,1.8,0.9c1.9,0.8,1.9-0.2,1.9-1.2C290.3,245.8,288,243.8,286.5,242.9L286.5,242.9z"></path>
                      </g>
                      <g id="folder">
                        <path class="st9" d="M311.1,186.8l-26.7-15.2l-5.2-8.9l-16.3-9.3c-0.5-0.4-1.3-0.4-1.7,0.1
		c-0.2,0.3-0.3,0.6-0.3,1V170l52,29.8v-9.7C312.9,188.8,312.2,187.5,311.1,186.8z"></path>
                        <path class="st5" d="M311.7,188.1l-49.4-28.3c-0.3-0.3-0.8-0.3-1.1,0.1c-0.2,0.2-0.2,0.4-0.2,0.7v-2
		c-0.1-0.4,0.2-0.8,0.6-0.9c0.2,0,0.5,0,0.7,0.2l21.2,12.1l0.9,1.5l26.7,15.2c1.1,0.7,1.9,2,2,3.4v0.2
		C313,189.5,312.5,188.6,311.7,188.1z"></path>
                        <path class="st1" d="M311.7,187.1l-49.4-28.3c-0.3-0.3-0.8-0.3-1.1,0.1c-0.2,0.2-0.2,0.4-0.2,0.7v38.7
		c0.1,0.9,0.5,1.7,1.3,2.2l49.4,28.3c0.3,0.3,0.8,0.3,1.1-0.1c0.2-0.2,0.2-0.4,0.2-0.7v-38.7C313,188.5,312.5,187.6,311.7,187.1z"></path>
                        <path class="st0" d="M287.5,206.7c-5.2-3-9.5-10.4-9.5-16.4c0-2.9,1-5.1,2.8-6.1l-1.3-0.8c-0.6-0.4-1-1-1-1.7
		c-0.1-0.3,0.2-0.7,0.5-0.7c0.2,0,0.4,0,0.5,0.1l4.6,2.7v5.3c0.1,0.3-0.2,0.7-0.5,0.7c-0.2,0-0.4,0-0.5-0.1c-0.6-0.4-1-1-1-1.7v-1.2
		c-1.3,0.8-2,2.5-2,4.7c0.3,5.2,3.1,10,7.5,12.9c4.1,2.4,7.5,0.4,7.5-4.3c-0.3-5.2-3.1-10-7.5-12.9c-0.6-0.4-1-1-1-1.7
		c-0.1-0.3,0.2-0.7,0.5-0.7c0.2,0,0.4,0,0.5,0.1c5.2,3,9.5,10.4,9.5,16.4S292.7,209.7,287.5,206.7z M290.2,197.7
		c0,1.8-1.2,2.5-2.7,1.6c-1.6-1.1-2.6-2.9-2.7-4.8c0-1.8,1.2-2.5,2.7-1.6C289.1,194,290.1,195.7,290.2,197.7z"></path>
                      </g>
                    </svg>

                  </div>
                </a>

              </div>
            </div>
            <div class="tiles clearfix swiper-container">
              <div class="row swiper-wrapper">
                <div class="col-sm-3 swiper-slide" onclick="window.location='clientarea.php?action=services'">
                  <a class="tile" href="clientarea.php?action=services">
                    <div class="icon"><i class="ls ls-hosting"></i></div>
                    <div class="stat">2</div>
                    <div class="title">Services</div>
                  </a>
                </div>
                <div class="col-sm-3 swiper-slide" onclick="window.location='clientarea.php?action=domains'">
                  <a class="tile" href="clientarea.php?action=domains">
                    <div class="icon"><i class="ls ls-dns"></i></div>
                    <div class="stat">2</div>
                    <div class="title"> Domains</div>
                  </a>
                </div>

                <div class="col-sm-3 swiper-slide" onclick="window.location='clientarea.php?action=invoices'">
                  <a class="tile" href="clientarea.php?action=invoices">
                    <div class="icon"><i class="ls ls-document"></i></div>
                    <div class="stat">4</div>
                    <div class="title">Unpaid Invoices</div>
                  </a>
                </div>
                <div class="col-sm-3 swiper-slide" onclick="window.location='supporttickets.php'">
                  <a class="tile" href="supporttickets.php">
                    <div class="icon"><i class="ls ls-ticket-tag"></i></div>
                    <div class="stat">1</div>
                    <div class="title">Tickets</div>
                  </a>
                </div>
              </div>
              <div class="swiper-pagination"></div>
            </div>




            <div class="client-home-panels row" data-panels-grid="" style="position: relative; height: 768px;">

              <div class="col-sm-6 col-xs-12" data-panels-grid-item="" style="position: absolute; left: 0px; top: 0px;">

                <div menuitemname="Active Products/Services" class="panel panel-default panel-accent-   ">
                  <div class="panel-heading">
                    <h3 class="panel-title">
                      <i class="ls ls-hosting"></i>
                      Your Active Products/Services
                    </h3>
                  </div>
                  <div class="list-group ps">
                    <a menuitemname="0" href="/demo-whmcs/clientarea.php?action=productdetails&amp;id=2" class="list-group-item" id="ClientAreaHomePagePanels-Active_Products_Services-0">
                      VPS Hosting - Economy<br><span class="text-domain">demo.com</span>
                    </a>
                    <a menuitemname="1" href="/demo-whmcs/clientarea.php?action=productdetails&amp;id=1" class="list-group-item" id="ClientAreaHomePagePanels-Active_Products_Services-1">
                      Web Hosting - Economy<br><span class="text-domain">test.net</span>
                    </a>
                    <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                      <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                    </div>
                    <div class="ps__rail-y" style="top: 0px; right: 0px;">
                      <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
                    </div>
                  </div>
                </div>


              </div>
              <div class="col-sm-6 col-xs-12" data-panels-grid-item="" style="position: absolute; left: 432px; top: 0px;">

                <div menuitemname="Recent Support Tickets" class="panel panel-default panel-accent- panel-support-tickets  ">
                  <div class="panel-heading">
                    <h3 class="panel-title">
                      <i class="ls ls-ticket-tag"></i>
                      Recent Support Tickets
                    </h3>
                  </div>
                  <div class="list-group ps">
                    <a menuitemname="0" href="/demo-whmcs/viewticket.php?tid=400761&amp;c=sc3ikoTg" class="list-group-item" id="ClientAreaHomePagePanels-Recent_Support_Tickets-0">
                      #400761 - Praesent sed metus eu orci porta imperdiet et ut sapien. <label class="status" style="--status-color: #ff6600">Customer-Reply</label><br><small>Last Updated: 04/09/2018 (14:41)</small>
                    </a>
                    <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                      <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                    </div>
                    <div class="ps__rail-y" style="top: 0px; right: 0px;">
                      <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
                    </div>
                  </div>
                </div>


              </div>
              <div class="col-sm-6 col-xs-12" data-panels-grid-item="" style="position: absolute; left: 432px; top: 188px;">

                <div menuitemname="Register a New Domain" class="panel panel-default panel-accent-emerald panel-domain-register  ">
                  <div class="panel-heading">
                    <h3 class="panel-title">
                      Register a New Domain
                    </h3>
                  </div>
                  <div class="panel-body">
                    <form method="post" action="domainchecker.php">
                      <input type="hidden" name="token" value="fb50a9008a489148c03c491474064fab4d73b0dd">
                      <div class="input-group margin-10">
                        <input type="text" name="domain" placeholder="Find your new domain name" class="form-control">
                        <div class="input-group-btn">
                          <input type="submit" value="Register" class="btn btn-success">
                          <input type="submit" name="transfer" value="Transfer" class="btn">
                        </div>
                      </div>
                    </form>
                    <p>Transfer now to extend your domain by 1 year!*</p>
                  </div>
                </div>


              </div>
              <div class="col-sm-6 col-xs-12" data-panels-grid-item="" style="position: absolute; left: 0px; top: 248px;">

                <div menuitemname="Affiliate Program" class="panel panel-default panel-accent- panel-affilaite-program panel-info  ">
                  <div class="panel-heading">
                    <h3 class="panel-title">
                      <i class="ls ls-text-cloud"></i>
                      Affiliate Program
                    </h3>
                  </div>
                  <div class="panel-body">
                    <p>Your current commission balance is $0.00. You only need another $25.00 before you can withdraw your earnings.</p>
                  </div>
                </div>


              </div>
              <div class="col-sm-6 col-xs-12" data-panels-grid-item="" style="position: absolute; left: 0px; top: 415px;">

                <div menuitemname="Recent News" class="panel panel-default panel-accent-   ">
                  <div class="panel-heading">
                    <h3 class="panel-title">
                      <i class="ls ls-text-cloud"></i>
                      Recent News
                    </h3>
                  </div>
                  <div class="list-group ps">
                    <a menuitemname="0" href="/demo-whmcs/index.php?rp=/announcements/11/Launches-Remarkable-New-Range-of-Premium-Dedicated-Servers.html" class="list-group-item" id="ClientAreaHomePagePanels-Recent_News-0">
                      Launches Remarkable New Range of Premium Dedicated Servers<br><span class="text-last-updated">04/09/2018</span>
                    </a>
                    <a menuitemname="1" href="/demo-whmcs/index.php?rp=/announcements/7/Internet-Launches-Dynamic-Cloud-Server.html" class="list-group-item" id="ClientAreaHomePagePanels-Recent_News-1">
                      Internet Launches Dynamic Cloud Server<br><span class="text-last-updated">19/06/2018</span>
                    </a>
                    <a menuitemname="2" href="/demo-whmcs/index.php?rp=/announcements/6/Virtual-Server-Cloud-virtual-server-on-a-new-platform.html" class="list-group-item" id="ClientAreaHomePagePanels-Recent_News-2">
                      Virtual Server Cloud: virtual server on a new platform<br><span class="text-last-updated">28/05/2018</span>
                    </a>
                    <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                      <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                    </div>
                    <div class="ps__rail-y" style="top: 0px; right: 0px;">
                      <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
                    </div>
                  </div>
                </div>


              </div>
            </div>



          </div><!-- /.main-content -->
          <div class="main-sidebar sidebar-secondary col-md-3 pull-md-left sidebar">
            <div menuitemname="Client Contacts" class="panel panel-sidebar panel-client-contacts">
              <div class="panel-heading">
                <h3 class="panel-title">
                  <i class="far fa-folder"></i>&nbsp; Contacts
                  <i class="fa fa-chevron-up panel-minimise pull-right"></i>
                </h3>
              </div>
              <div class="list-group">
                <div menuitemname="No Contacts" class="list-group-item" id="Secondary_Sidebar-Client_Contacts-No_Contacts">

                  No Contacts Found

                </div>
                <a menuitemname="more" href="/demo-whmcs/clientarea.php?action=contacts" class="list-group-item contact-more" id="Secondary_Sidebar-Client_Contacts-more">
                  <i class="fas fa-ticket ls ls-more"></i>
                  More

                </a>
              </div>
              <div class="panel-footer clearfix">
                <a href="clientarea.php?action=addcontact" class="btn btn-default btn-sm btn-block">
                  <i class="fas fa-plus"></i> New Contact...
                </a>
              </div>
            </div>
            <div menuitemname="Client Shortcuts" class="panel panel-sidebar panel-sidebar">
              <div class="panel-heading">
                <h3 class="panel-title">
                  <i class="fas fa-bookmark"></i>&nbsp; Shortcuts
                  <i class="fa fa-chevron-up panel-minimise pull-right"></i>
                </h3>
              </div>
              <div class="list-group">
                <a menuitemname="Order New Services" href="/demo-whmcs/cart.php" class="list-group-item" id="Secondary_Sidebar-Client_Shortcuts-Order_New_Services">
                  <i class="fas fa-ticket ls ls-basket"></i>
                  Order New Services

                </a>
                <a menuitemname="Register New Domain" href="/demo-whmcs/domainchecker.php" class="list-group-item" id="Secondary_Sidebar-Client_Shortcuts-Register_New_Domain">
                  <i class="fas fa-ticket ls ls-dns"></i>
                  Register a New Domain

                </a>
                <a menuitemname="Logout" href="/demo-whmcs/logout.php" class="list-group-item" id="Secondary_Sidebar-Client_Shortcuts-Logout">
                  <i class="fas fa-ticket ls ls-reply"></i>
                  Logout

                </a>
              </div>
            </div>
          </div>
          <div class="clearfix"></div>
        </div>
      </div>
    </div>
    <div class="main-footer">
      <div class="container">
        <div class="footer-content">
          <p>Copyright © 2019 Company Name. All Rights Reserved.</p>
          <ul class="footer-links">
            <li class="dropdown language">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                English
                <i class="ls ls-caret"></i>
              </a>
              <ul class="dropdown-menu dropdown-menu-right ps ps--active-y" id="languageChooserContent">
                <li>
                  <a href="/demo-whmcs/clientarea.php?rsstyle=default&amp;rslayout=condensed&amp;language=arabic">العربية</a>
                </li>
                <li>
                  <a href="/demo-whmcs/clientarea.php?rsstyle=default&amp;rslayout=condensed&amp;language=azerbaijani">Azerbaijani</a>
                </li>
                <li>
                  <a href="/demo-whmcs/clientarea.php?rsstyle=default&amp;rslayout=condensed&amp;language=catalan">Català</a>
                </li>
                <li>
                  <a href="/demo-whmcs/clientarea.php?rsstyle=default&amp;rslayout=condensed&amp;language=chinese">中文</a>
                </li>
                <li>
                  <a href="/demo-whmcs/clientarea.php?rsstyle=default&amp;rslayout=condensed&amp;language=croatian">Hrvatski</a>
                </li>
                <li>
                  <a href="/demo-whmcs/clientarea.php?rsstyle=default&amp;rslayout=condensed&amp;language=czech">Čeština</a>
                </li>
                <li>
                  <a href="/demo-whmcs/clientarea.php?rsstyle=default&amp;rslayout=condensed&amp;language=danish">Dansk</a>
                </li>
                <li>
                  <a href="/demo-whmcs/clientarea.php?rsstyle=default&amp;rslayout=condensed&amp;language=dutch">Nederlands</a>
                </li>
                <li>
                  <a href="/demo-whmcs/clientarea.php?rsstyle=default&amp;rslayout=condensed&amp;language=english">English</a>
                </li>
                <li>
                  <a href="/demo-whmcs/clientarea.php?rsstyle=default&amp;rslayout=condensed&amp;language=estonian">Estonian</a>
                </li>
                <li>
                  <a href="/demo-whmcs/clientarea.php?rsstyle=default&amp;rslayout=condensed&amp;language=farsi">Persian</a>
                </li>
                <li>
                  <a href="/demo-whmcs/clientarea.php?rsstyle=default&amp;rslayout=condensed&amp;language=french">Français</a>
                </li>
                <li>
                  <a href="/demo-whmcs/clientarea.php?rsstyle=default&amp;rslayout=condensed&amp;language=german">Deutsch</a>
                </li>
                <li>
                  <a href="/demo-whmcs/clientarea.php?rsstyle=default&amp;rslayout=condensed&amp;language=hebrew">עברית</a>
                </li>
                <li>
                  <a href="/demo-whmcs/clientarea.php?rsstyle=default&amp;rslayout=condensed&amp;language=hungarian">Magyar</a>
                </li>
                <li>
                  <a href="/demo-whmcs/clientarea.php?rsstyle=default&amp;rslayout=condensed&amp;language=italian">Italiano</a>
                </li>
                <li>
                  <a href="/demo-whmcs/clientarea.php?rsstyle=default&amp;rslayout=condensed&amp;language=macedonian">Macedonian</a>
                </li>
                <li>
                  <a href="/demo-whmcs/clientarea.php?rsstyle=default&amp;rslayout=condensed&amp;language=norwegian">Norwegian</a>
                </li>
                <li>
                  <a href="/demo-whmcs/clientarea.php?rsstyle=default&amp;rslayout=condensed&amp;language=portuguese-br">Português</a>
                </li>
                <li>
                  <a href="/demo-whmcs/clientarea.php?rsstyle=default&amp;rslayout=condensed&amp;language=portuguese-pt">Português</a>
                </li>
                <li>
                  <a href="/demo-whmcs/clientarea.php?rsstyle=default&amp;rslayout=condensed&amp;language=romanian">Română</a>
                </li>
                <li>
                  <a href="/demo-whmcs/clientarea.php?rsstyle=default&amp;rslayout=condensed&amp;language=russian">Русский</a>
                </li>
                <li>
                  <a href="/demo-whmcs/clientarea.php?rsstyle=default&amp;rslayout=condensed&amp;language=spanish">Español</a>
                </li>
                <li>
                  <a href="/demo-whmcs/clientarea.php?rsstyle=default&amp;rslayout=condensed&amp;language=swedish">Svenska</a>
                </li>
                <li>
                  <a href="/demo-whmcs/clientarea.php?rsstyle=default&amp;rslayout=condensed&amp;language=turkish">Türkçe</a>
                </li>
                <li>
                  <a href="/demo-whmcs/clientarea.php?rsstyle=default&amp;rslayout=condensed&amp;language=ukranian">Українська</a>
                </li>
                <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                  <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                </div>
                <div class="ps__rail-y" style="top: 0px; height: 318px; right: 0px;">
                  <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 106px;"></div>
                </div>
              </ul>
            </li>
          </ul>
        </div>
        <a href="#" class="back-to-top btn btn-sm btn-icon"><i class="lm lm-go-top"></i></a>
      </div>
    </div>

    <div class="modal system-modal fade" id="modalAjax" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="lm lm-close"></i></button>
            <h3 class="modal-title"></h3>
          </div>
          <div class="modal-body">
            <div class="loader">

              <div class="spinner ">
                <div class="rect1"></div>
                <div class="rect2"></div>
                <div class="rect3"></div>
                <div class="rect4"></div>
                <div class="rect5"></div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary modal-submit">
              Submit
            </button>
            <button type="button" class="btn btn-default" data-dismiss="modal">
              Cancel
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://lagom.rsstudio.net/demo-whmcs/templates/lagom/assets/js/core.min.js"></script>
  <script src="https://lagom.rsstudio.net/demo-whmcs/templates/lagom/assets/js/lagom-app.js"></script>
  <script src="https://lagom.rsstudio.net/demo-whmcs/templates/lagom/assets/js/whmcs-custom.min.js"></script>
</body>

</html>

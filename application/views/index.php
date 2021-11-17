<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=0">
  <meta name="description" content="Han Nim - Creative Portfolio HTML">
  <meta name="author" content="Paul, Logan Cee">
  <!--  Properties -->
  <meta property="og:locale" content="en_US" />
  <meta property="og:type" content="website" />
  <meta property="og:title" content="Han Nim Pacifique - Home Personal" />
  <meta property="og:description" content="I’m Han Nim Pacifique, Web Developper at Hewani & Software Engineer at Whale Cloud, The Alibaba Cloud. I develop both client and server software." />
  <meta property="og:url" content="/" />
  <meta property="og:site_name" content="Han Nim Pacifique - Home Personal" />
  <meta property="og:image" content="https://hannim.herokuapp.com/assets/img/Huawei%20HQ%20Kinshasa.jpg" />
  <meta property="og:image:width" content="259" />
  <meta property="og:image:height" content="378" />

  <title> <?php echo $this->lang->line('site_title'); ?></title>
  <!-- CSS -->
  <link href="<?php echo base_url("assets/css/bootstrap.min.css"); ?>" rel="stylesheet">
  <link href="<?php echo base_url("assets/css/owl.carousel.min.css"); ?>" rel="stylesheet">
  <link href="<?php echo base_url("assets/css/owl.theme.default.min.css"); ?>" rel="stylesheet">
  <link href="<?php echo base_url("assets/css/animate.min.css"); ?>" rel="stylesheet">
  <link href="<?php echo base_url("assets/css/jquery.pagepiling.css"); ?>" rel="stylesheet">
  <link href="<?php echo base_url("assets/css/jquery.fancybox.min.css"); ?>" rel="stylesheet">
  <link href="<?php echo base_url("assets/css/LineIcons.css"); ?>" rel="stylesheet">

  <!-- Main CSS -->
  <link href="<?php echo base_url("assets/css/style.css"); ?>" rel="stylesheet">

  <!-- Favicons -->
  <link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url("assets/img/favicons/apple-touch-icon.png"); ?>">
  <link rel="icon" type="image/jpg" sizes="32x32" href="<?php echo base_url("assets/img/icon.jpg"); ?>">
  <!-- <link rel="icon" type="image/jpg" sizes="16x16" href="<?php echo base_url("assets/img/icon.jpg"); ?>">
    <link rel="manifest" href="<?php echo base_url("assets/img/favicons/site.webmanifest"); ?>">
    <link rel="mask-icon" href="<?php echo base_url("assets/img/favicons/safari-pinned-tab.svg"); ?>" color="#222222">
    <link rel="shortcut icon" href="<?php echo base_url("assets/img/favicons/favicon.ico"); ?>"> -->
  <meta name="msapplication-TileColor" content="#222222">
  <meta name="msapplication-config" content="<?php echo base_url("assets/img/favicons/browserconfig.xml"); ?>">
  <meta name="theme-color" content="#ffffff">

  <script>
      var baseUrl = "<?php echo base_url();?>";
</script>
</head>

<body class="body-copyright-light">
  <div class="preloader">
    <div class="three-bounce">
      <div class="one"></div>
      <div class="two"></div>
      <div class="three"></div>
    </div>
  </div>
  <div class="wrapper">
    <header id="header" class="header header-fixed">
      <div class="header-bg"></div>
      <div class="container-fluid clearfix">
        <div class="brand">
          <a href="#Intro">
            <div class="brand-name font-custom">Han Nim Pacifique</div>
          </a>
        </div>

        <button class="nav-toggle-btn a-nav-toggle">
          <span class="nav-toggle">
            <span class="stick stick-1"></span>
            <span class="stick stick-2"></span>
          </span>
        </button>

        <div class="header-content d-none d-md-block">
          <div class="row">
            <div class="col-md-3">
              <div class="header-tagline"> <?php echo $this->lang->line('header_tagline'); ?> </div>
            </div>
            <div class="col-md-9">
              <div class="header-contacts">
                <div class="header-contact-item">  <?php echo $this->lang->line('header_call'); ?> <a href="tel:+243817718496" class="phone-link">(+243) 817 718 496</a></div>
                <div class="header-contact-divider">/</div>
                <div class="header-contact-item"><a href="mailto:han.nim@hewani.cloud" class="mail-link">han.nim@hewani.cloud</a></div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="hide-menu a-nav-toggle"></div>

      <div class="menu">
        <div class="menu-lang">
            <a href="<?php echo base_url("welcome/switchLang/english"); ?>" class="menu-lang-item active">Eng</a>
            <a href="<?php echo base_url("welcome/switchLang/french"); ?>" class="menu-lang-item active">Fra</a>
          </div>

        <nav class="menu-main" id="accordion">
          <ul id="menuMain">
            <li data-menuanchor="Intro" class="active"><a href="#Intro"><?php echo $this->lang->line('menu_intro'); ?></a></li>
            <li data-menuanchor="Services"><a href="#Services"><?php echo $this->lang->line('menu_services'); ?></a></li>
            <li data-menuanchor="Projects"><a href="#Projects"><?php echo $this->lang->line('menu_projects'); ?></a></li>
            <li data-menuanchor="Awards"><a href="#Awards"><?php echo $this->lang->line('menu_awards'); ?></a></li>
            <li data-menuanchor="Experience"><a href="#Experience"><?php echo $this->lang->line('menu_experience'); ?></a></li>
            <li data-menuanchor="Clients"><a href="#Clients"><?php echo $this->lang->line('menu_clients'); ?></a></li>
            <li data-menuanchor="Testimonials"><a href="#Testimonials"><?php echo $this->lang->line('menu_testimonials'); ?></a></li>
            <li data-menuanchor="Contact"><a href="#Contact"><?php echo $this->lang->line('menu_contact'); ?></a></li>
          </ul>
        </nav>

        <div class="menu-footer">
          <ul class="social social-rounded">
            <li><a target="_blank" href="https://web.facebook.com/han.nim.sikis"><i class="lni lni-facebook-original"></i></a></li>
            <li><a target="_blank" href="https://www.linkedin.com/in/han-nim-pacifique/"><i class="lni lni-linkedin-original"></i></a></li>
            <li><a target="_blank" href="http://twitter.com/hanpacifique/"><i class="lni lni-twitter-filled"></i></a></li>
          </ul>
          <div class="menu-copyright">&copy; Han Nim Pacifique <?php echo date('Y'); ?><br /> <?php echo $this->lang->line('menu_copyright'); ?></div>
        </div>
      </div>
    </header>


    <div id="content" class="content">
      <div class="homepage-personal a-pagepiling">
        <div class="section pp-scrollable slide-dark slide-dark-footer slide-personal-intro">
          <div class="slide-container">
            <div class="slide-bg">
              <div class="slide-photo circle-golden slide-intro-circle1 transformLeft"></div>
              <div class="slide-photo circle-brown slide-intro-circle2 transformRight"></div>
              <div class="slide-photo slide-intro-man"></div>
            </div>
            <div class="container">
              <div class="slide-num">1</div>
              <div class="row">
                <div class="col-sm-6 col-10">
                  <h1 class="slide-title animate-element delay5 fadeInDown">Han Nim Pacifique</h1>
                  <div class="animate-element delay5 fadeInUp">
                    <h3 class="slide-title-sub"><?php echo $this->lang->line('slide_title_sub'); ?> </h3>
                    <div class="slide-descr slide-descr-intro"><?php echo $this->lang->line('slide_descr_intro'); ?>
                    </div>
                    <div class="slide-btn">
                      <button class="btn btn-success" data-toggle="modal" data-target="#send-request"><?php echo $this->lang->line('slide_btn'); ?></button>
                    </div>
                  </div>
                </div>
                <!-- Photo -->
                <div class="col-sm-6 col-10">
                  <img src="<?php echo base_url("assets/img/Han Nim Pacifique-bgremoved.png"); ?>" alt="Han Nim" class="img-fluid">
                </div>
                <!-- END ROW -->
              </div>
            </div>
          </div>
        </div>

        <div class="section pp-scrollable slide-personal-services">
          <div class="slide-container">
            <div class="slide-bg">
              <div class="slide-photo circle-light slide-services-circle2 transformLeft"></div>
              <div class="slide-photo circle-brown slide-services-circle1 transformRight"></div>
            </div>
            <div class="container">
              <div class="slide-num">2</div>
              <div class="row">
                <div class="col-md-4">
                  <div class="animate-element delay5 fadeInDown">
                    <h2 class="slide-title slide-title-personal-services slide-title-lg">4</h2>
                    <div class="d-md-none">
                      <div class="slide-title-sub slide-title-sub-sm"><?php echo $this->lang->line('slide2_title_sub'); ?></div>
                      <div class="slide-descr slide-descr-personal-services font-italic">
                      <?php echo $this->lang->line('slide2_descr'); ?>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-8">
                  <h3 class="slide-title-info animate-element delay5 fadeInDown"><?php echo $this->lang->line('slide2_title_info'); ?>
                  </h3>
                </div>
              </div>

              <div class="row animate-element delay5 fadeInUp">
                <div class="col-md-4 d-none d-md-block">
                  <div class="slide-title-sub slide-title-sub-sm"><?php echo $this->lang->line('years_experience'); ?></div>
                  <div class="slide-descr slide-descr-personal-services font-italic">
                  <?php echo $this->lang->line('years_experienc_descr'); ?>
                  </div>
                </div>
                <div class="col-md-8">
                  <div class="service-list row">
                    <div class="col-md-6">
                      <div class="service-item">
                        <div class="service-item-title slide-title-sub"><?php echo $this->lang->line('web_dev'); ?></div>
                        <div class="service-item-descr slide-descr"><?php echo $this->lang->line('web_dev_desc'); ?></div>
                        <div class="service-item-more"><a href="https://hewani.co/" class="btn btn-sm btn-circle btn-success"><i class="lni lni-link"></i></a></div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="service-item">
                        <div class="service-item-title slide-title-sub"><?php echo $this->lang->line('sys_admin'); ?></div>
                        <div class="service-item-descr slide-descr"><?php echo $this->lang->line('sys_descr'); ?></div>
                        <div class="service-item-more"><a href="https://heconnected.com/" class="btn btn-sm btn-circle btn-success"><i class="lni lni-link"></i></a></div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="service-item">
                        <div class="service-item-title slide-title-sub"><?php echo $this->lang->line('trainer'); ?></div>
                        <div class="service-item-descr slide-descr"><?php echo $this->lang->line('trainer_descr'); ?></div>
                        <div class="service-item-more"><a href="https://cepadoc.herokuapp.com/" class="btn btn-sm btn-circle btn-success"><i class="lni lni-link"></i></a></div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="service-item">
                        <div class="service-item-title slide-title-sub"><?php echo $this->lang->line('entrepeneur'); ?></div>
                        <div class="service-item-descr slide-descr"><?php echo $this->lang->line('entrepeneur_desc'); ?> </div>
                        <div class="service-item-more"><a href="https://sappartout.com/" class="btn btn-sm btn-circle btn-success"><i class="lni lni-link"></i></a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="section pp-scrollable slide-dark slide-dark-bg text-white slide-personal-projects">
          <div class="carousel-project-personal a-carousel-projects owl-carousel owl-theme">
            <div class="carousel-project-item" style="background-image: url();">
              <div class="slide-container">
                <div class="container">
                  <div class="slide-num">3</div>
                  <div class="animate-element delay5 fadeInDown">
                    <div class="row">
                      <div class="col-md-7">
                        <div class="slide-title-sub slide-title-sub-md"><?php echo $this->lang->line('featured_works'); ?></div>
                      </div>
                      <div class="col-md-5 text-md-right">
                        <div class="project-date"><?php echo $this->lang->line('featured_work1_date'); ?></div>
                        <div class="slide-title-sub slide-title-sub-md mb-md-3">Web</div>
                      </div>
                    </div>  
                    <div class="row">
                      <div class="col-md-10">
                        <h3 class="slide-title text-white">Heconnect</h3>
                        <div class="row">
                          <div class="col-lg-5">
                            <div class="slide-descr slide-descr-projects">
                            <?php echo $this->lang->line('featured_work1_desc'); ?>
                            </div>
                          </div>
                          <div class="col-lg-7">
                          <img src="<?php echo base_url("assets/img/Heconnect Plateform.PNG"); ?>" alt="HEConnect" class="img-fluid rounded animate-element delay5 fadeInDown" >
                          </div>
                        </div>
                        <div class="slide-btn slide-btn-projects">
                          <a target="_blank" href="https://heconnected.com/" class="btn btn-success"><?php echo $this->lang->line('project_btn'); ?></a>
                          <!-- <a href="#" class="slide-projects-more mt-2 mb-2">see all projects</a> -->
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-project-item" style="background-image: url();">
              <div class="slide-container">
                <div class="container">
                  <div class="slide-num">3</div>
                  <div class="animate-element delay5 fadeInDown">
                    <div class="row">
                      <div class="col-md-7">
                        <div class="slide-title-sub slide-title-sub-md"><?php echo $this->lang->line('featured_works'); ?></div>
                      </div>
                      <div class="col-md-5 text-md-right">
                        <div class="project-date"><?php echo $this->lang->line('featured_work2_date'); ?></div>
                        <div class="slide-title-sub slide-title-sub-md mb-md-3">Web</div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-7">
                        <h3 class="slide-title text-white">Kibao Configuration</h3>
                        <div class="row">
                          <div class="col-lg-5">
                            <div class="slide-descr slide-descr-projects"><?php echo $this->lang->line('featured_work2_desc'); ?></div>
                          </div>
                          <div class="col-lg-7">
                          <img src="<?php echo base_url("assets/img/Kibao Template.PNG"); ?>" alt="Kibao" class="img-fluid rounded animate-element delay5 fadeInDown" >
                          </div>
                        </div>
                        <div class="slide-btn slide-btn-projects">
                          <a target="_blank" href="https://hewani.co/" class="btn btn-success"><?php echo $this->lang->line('project_btn'); ?></a>
                          <!-- <a href="#" class="slide-projects-more mt-2 mb-2">see all projects</a> -->
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-project-item" style="background-image: url();">
              <div class="slide-container">
                <div class="container">
                  <div class="slide-num">3</div>
                  <div class="animate-element delay5 fadeInDown">
                    <div class="row">
                      <div class="col-md-7">
                        <div class="slide-title-sub slide-title-sub-md"><?php echo $this->lang->line('featured_works'); ?></div>
                      </div>
                      <div class="col-md-5 text-md-right">
                        <div class="project-date"><?php echo $this->lang->line('featured_work3_date'); ?></div>
                        <div class="slide-title-sub slide-title-sub-md mb-md-3">Network</div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-7">
                        <h3 class="slide-title text-white">Medecine Library Network</h3>
                        <div class="row">
                          <div class="col-lg-5">
                            <div class="slide-descr slide-descr-projects"><?php echo $this->lang->line('featured_work3_desc'); ?></div>
                          </div>
                          <div class="col-lg-7">
                          <img src="<?php echo base_url("assets/img/Faculty network config.png"); ?>" alt="Network" class="img-fluid rounded animate-element delay5 fadeInDown" >
                          </div>
                        </div>
                        <div class="slide-btn slide-btn-projects">
                          <a target="_blank" href="#" class="btn btn-success"><?php echo $this->lang->line('project_btn'); ?></a>
                          <!-- <a href="#" class="slide-projects-more mt-2 mb-2">see all projects</a> -->
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="section pp-scrollable slide-dark-footer slide-personal-awards">
          <div class="slide-container">
            <div class="slide-bg">
              <div class="slide-photo circle-green slide-awards-circle1 transformLeft"></div>
              <div class="slide-photo circle-brown slide-awards-circle2 transformRight"></div>
            </div>
            <div class="container">
              <div class="slide-num">4</div>
              <div class="row align-items-center animate-element delay5 fadeInDown">
                <div class="col-md-7">
                  <h2 class="slide-title mb-5 mb-md-0"><?php echo $this->lang->line('slide4_title'); ?></h2>
                </div>
                <div class="col-md-5">
                  <h3 class="slide-title-info mb-5 mb-md-0"><?php echo $this->lang->line('slide4_descr'); ?></h3>
                </div>
              </div>
              <div class="row award-list animate-element delay5 fadeInUp">
                <div class="col-lg-4">
                  <div class="award-item">
                    <div class="award-item-date"><?php echo $this->lang->line('award1_date'); ?></div>
                    <div class="award-item-logo"><img src="<?php echo base_url("assets/img/Certificate of Honor.jpeg"); ?>" alt="Certificate" class="img-fluid rounded" /></div>
                    <div class="award-item-title slide-title-sub"><?php echo $this->lang->line('award1_title'); ?></div>
                    <div class="award-item-descr slide-descr"><?php echo $this->lang->line('award1_descr'); ?></div>
                    <div class="award-item-more"><a href="https://www.huawei.com/minisite/seeds-for-the-future/index.html" class="text-success"><?php echo $this->lang->line('award_project'); ?></a></div>
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="award-item">
                    <div class="award-item-date"><?php echo $this->lang->line('award2_date'); ?></div>
                    <div class="award-item-logo"><img src="<?php echo base_url("assets/img/chinese language and culture.jpg"); ?>" alt="Chinese Language Cert" class="img-fluid rounded" /></div>
                    <div class="award-item-title slide-title-sub"><?php echo $this->lang->line('award2_title'); ?></div>
                    <div class="award-item-descr slide-descr"><?php echo $this->lang->line('award2_descr'); ?></div>
                    <div class="award-item-more"><a href="https://www.huawei.com/minisite/seeds-for-the-future/index.html" class="text-success"><?php echo $this->lang->line('award_project'); ?></a></div>
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="award-item">
                    <div class="award-item-date"><?php echo $this->lang->line('award3_date'); ?></div>
                    <div class="award-item-logo"><img src="<?php echo base_url("assets/img/Alibaba Cloud Certification.png"); ?>" alt="Certificate of Attendance" class="img-fluid rounded" /></div>
                    <div class="award-item-title slide-title-sub"><?php echo $this->lang->line('award3_title'); ?> </div>
                    <div class="award-item-descr slide-descr"><?php echo $this->lang->line('award3_descr'); ?></div>
                    <div class="award-item-more"><a href="https://www.alibabacloud.com/fr" class="text-success"><?php echo $this->lang->line('award_project'); ?></a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="section pp-scrollable slide-dark slide-personal-experience">
          <div class="slide-container">
            <div class="slide-bg">
              <div class="slide-photo slide-experience-image1"></div>
              <div class="slide-photo slide-experience-image2"></div>
              <div class="slide-photo slide-experience-image3"></div>
            </div>
            <div class="container">
              <div class="slide-num">5</div>
              <div class="row align-items-center mb-4 animate-element delay5 fadeInDown">
                <div class="col-8">
                  <h2 class="slide-title mb-0">experience</h2>
                </div>
                <div class="col-4 text-right">
                  <div class="a-carousel-nav carousel-nav"></div>
                </div>
              </div>
              <div class="animate-element delay5 fadeInUp">
                <div class="carousel-experience a-carousel-experience owl-carousel owl-theme">
                  <div class="experience-list">
                    <div class="experience-item">
                      <div class="row">
                        <div class="col-md-4">
                          <div class="experience-item-date"><?php echo $this->lang->line('experience1_date'); ?></div>
                          <div class="experience-item-company slide-title-sub company-blue">Whale Cloud</div>
                        </div>
                        <div class="col-md-4">
                          <div class="experience-item-title slide-title-sub"><?php echo $this->lang->line('experience1_title'); ?></div>
                        </div>
                        <div class="col-md-4">
                          <div class="experience-item-descr slide-descr"><?php echo $this->lang->line('experience1_descr'); ?></div>
                        </div>
                      </div>
                    </div>
                    <div class="experience-item">
                      <div class="row">
                        <div class="col-md-4">
                          <div class="experience-item-date"><?php echo $this->lang->line('experience2_date'); ?></div>
                          <div class="experience-item-company slide-title-sub company-pink">Hewani</div>
                        </div>
                        <div class="col-md-4">
                          <div class="experience-item-title slide-title-sub"><?php echo $this->lang->line('experience2_title'); ?></div>
                        </div>
                        <div class="col-md-4">
                          <div class="experience-item-descr slide-descr"><?php echo $this->lang->line('experience2_descr'); ?></div>
                        </div>
                      </div>
                    </div>
                    <div class="experience-item">
                      <div class="row">
                        <div class="col-md-4">
                          <div class="experience-item-date"><?php echo $this->lang->line('experience3_date'); ?></div>
                          <div class="experience-item-company slide-title-sub company-green">HEConnect Foundation</div>
                        </div>
                        <div class="col-md-4">
                          <div class="experience-item-title slide-title-sub"><?php echo $this->lang->line('experience3_title'); ?></div>
                        </div>
                        <div class="col-md-4">
                          <div class="experience-item-descr slide-descr"><?php echo $this->lang->line('experience3_descr'); ?></div>
                        </div>
                      </div>
                    </div>
                  </div>

                </div>
                <div class="slide-btn">
                  <a href="https://cutt.ly/dhizFR4" class="btn btn-success"><i class="lni lni-download mr-3"></i><?php echo $this->lang->line('download_cv_btn'); ?></a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="section pp-scrollable slide-personal-clients">
          <div class="slide-container">
            <div class="slide-bg"></div>
            <div class="container">
              <div class="slide-num">6</div>
              <div class="row">
                <div class="col-lg-5">
                  <h3 class="slide-title-info mr-lg-5 pr-lg-3 animate-element delay5 fadeInDown"><?php echo $this->lang->line('slide6_title'); ?></h3>
                  <div class="client-list animate-element delay5 fadeInUp">
                    <div class="clients-title title-mini"><?php echo $this->lang->line('slide6_achivements'); ?></div>
                    <div class="client-item media">
                      <div class="client-icon"><i class="icon-partners"></i></div>
                      <div class="media-body">
                        <div class="client-item-title">21</div>
                        <div class="client-item-descr slide-descr"><?php echo $this->lang->line('slide6_partners'); ?></div>
                      </div>
                    </div>
                    <div class="client-item media">
                      <div class="client-icon"><i class="icon-project"></i></div>
                      <div class="media-body">
                        <div class="client-item-title">17</div>
                        <div class="client-item-descr slide-descr"><?php echo $this->lang->line('slide6_project_completed'); ?></div>
                      </div>
                    </div>
                    <div class="client-item media">
                      <div class="client-icon"><i class="icon-worldwide"></i></div>
                      <div class="media-body">
                        <div class="client-item-title">213</div>
                        <div class="client-item-descr slide-descr"><?php echo $this->lang->line('slide6_employees'); ?></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-1 d-none d-xl-block"></div>
                <div class="col-xl-6 col-lg-7">
                  <div class="clients-photo animate-element delay5 fadeZooming">
                    <div class="clients-photo-item clients-photo-item1">
                      <div class="inside"><img src="<?php echo base_url("assets/img/pic-client-1.png"); ?>" alt="" /></div>
                    </div>
                    <div class="clients-photo-item clients-photo-item2">
                      <div class="inside"><img src="<?php echo base_url("assets/img/pic-client-2.png"); ?>" alt="" /></div>
                    </div>
                    <div class="clients-photo-item clients-photo-item3">
                      <div class="inside"><img src="<?php echo base_url("assets/img/pic-client-3.png"); ?>" alt="" /></div>
                    </div>
                    <div class="clients-photo-item clients-photo-item4">
                      <div class="inside"><img src="<?php echo base_url("assets/img/pic-client-4.png"); ?>" alt="" /></div>
                    </div>
                    <div class="clients-photo-item clients-photo-item5">
                      <div class="inside"><img src="<?php echo base_url("assets/img/pic-client-5.png"); ?>" alt="" /></div>
                    </div>
                    <div class="clients-photo-item clients-photo-item6">
                      <div class="inside"><img src="<?php echo base_url("assets/img/pic-client-6.png"); ?>" alt="" /></div>
                    </div>
                    <div class="clients-photo-item clients-photo-item7">
                      <div class="inside"><img src="<?php echo base_url("assets/img/pic-client-7.png"); ?>" alt="" /></div>
                    </div>
                    <div class="clients-photo-item clients-photo-item8">
                      <div class="inside"><img src="<?php echo base_url("assets/img/pic-client-8.png"); ?>" alt="" /></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="section pp-scrollable slide-dark slide-personal-testimonials">
          <div class="slide-container">
            <div class="slide-bg">
              <div class="slide-photo circle-golden slide-testimonials-circle3 animate-element delay5 fadeInUp"></div>
            </div>
            <div class="container">
              <div class="slide-num">7</div>
              <div class="row">
                <div class="col-md-5 col-sm-10 mb-4">
                  <div class="video-link">
                    <a href="https://youtu.be/TGT2CzkUfdM" data-fancybox class="inside animate-element delay6 fadeIn" style="background-image: url(<?php echo base_url("assets/img/icon.jpg"); ?>);">
                      <div class="center-icon"><i class="lni lni-play"></i></div>
                    </a>
                    <div class="slide-photo circle-green slide-testimonials-circle1 transformLeft"></div>
                    <div class="slide-photo circle-brown slide-testimonials-circle2 transformRight"></div>
                  </div> 
                  <div class="video-link-descr slide-descr"><?php echo $this->lang->line('video_descr'); ?></div>
                </div>
                <div class="col-md-1 col-xl-2 d-none d-lg-block">
                </div>
                <div class="col-xl-5 col-lg-6 col-md-7">
                  <div class="carousel-testimonial a-carousel-testimonial owl-carousel owl-theme animate-element delay5 fadeInDown">
                    <div class="testimonials-item">
                      <div class="testimonials-item-avatar-container">
                        <div class="testimonial-item-avatar avatar">
                          <div class="inside" style="background-image: url(<?php echo base_url("assets/img/pic1.png"); ?>);"></div>
                        </div>
                        <div class="testimonial-item-company clients-photo-item">
                          <div class="inside"><img src="<?php echo base_url("assets/img/Bienfait Isamura.jpeg"); ?>" alt=""></div>
                        </div>
                      </div>
                      <div class="testimonials-item-text slide-title-info"><?php echo $this->lang->line('testimonial1_text'); ?></div>
                      <div class="testimonials-item-rating">
                        <i class="lni lni-star-filled"></i>
                        <i class="lni lni-star-filled"></i>
                        <i class="lni lni-star-filled"></i>
                        <i class="lni lni-star-filled"></i>
                        <i class="lni lni-star-filled"></i>
                      </div>
                      <div class="testimonials-item-author">Bienfait K. Isamura</div>
                      <div class="testimonials-item-author-status slide-descr"><?php echo $this->lang->line('testimonial1_author_status'); ?> <a href="https://cepadoc.herokuapp.com/" class="text-primary text-underline">@Cepadoc</a></div>
                    </div>
                    <div class="testimonials-item">
                      <div class="testimonials-item-avatar-container">
                        <div class="testimonial-item-avatar avatar">
                          <div class="inside" style="background-image: url(<?php echo base_url("assets/img/pic2.png"); ?>);"></div>
                        </div>
                        <div class="testimonial-item-company clients-photo-item">
                          <div class="inside"><img src="<?php echo base_url("assets/img/Landrique Ponyo.jpeg"); ?>" alt=""></div>
                        </div>
                      </div>
                      <div class="testimonials-item-text slide-title-info"><?php echo $this->lang->line('testimonial2_text'); ?></div>

                      <div class="testimonials-item-rating">
                        <i class="lni lni-star-filled"></i>
                        <i class="lni lni-star-filled"></i>
                        <i class="lni lni-star-filled"></i>
                        <i class="lni lni-star-filled"></i>
                        <i class="lni lni-star"></i>
                      </div>
                      <div class="testimonials-item-author">Landrique Ponyo</div>
                      <div class="testimonials-item-author-status slide-descr"><?php echo $this->lang->line('testimonial2_author_status'); ?> <a href="#" class="text-primary text-underline">@Cepadoc</a></div>
                    </div>
                    <div class="testimonials-item">
                      <div class="testimonials-item-avatar-container">
                        <div class="testimonial-item-avatar avatar">
                          <div class="inside" style="background-image: url(<?php echo base_url("assets/img/pic1.png"); ?>);"></div>
                        </div>
                        <div class="testimonial-item-company clients-photo-item">
                          <div class="inside"><img src="<?php echo base_url("assets/img/Jason Kilembe.jpeg"); ?>" alt=""></div>
                        </div>
                      </div>
                      <div class="testimonials-item-text slide-title-info"><?php echo $this->lang->line('testimonial3_text'); ?></div>

                      <div class="testimonials-item-rating">
                        <i class="lni lni-star-filled"></i>
                        <i class="lni lni-star-filled"></i>
                        <i class="lni lni-star-filled"></i>
                        <i class="lni lni-star"></i>
                        <i class="lni lni-star"></i>
                      </div>
                      <div class="testimonials-item-author">Jason Kilembe</div>
                      <div class="testimonials-item-author-status slide-descr"><?php echo $this->lang->line('testimonial3_author_status'); ?> <a href="#" class="text-primary text-underline">@Unikin</a></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="section pp-scrollable slide-personal-contacts">
          <div class="slide-container">
            <div class="slide-bg">
              <div class="slide-photo circle-light slide-contacts-circle1 transformLeft"></div>
              <div class="slide-photo circle-brown slide-contacts-circle2 transformRight"></div>
            </div>
            <div class="container">
              <div class="slide-num">8</div>
              <div class="row">
                <div class="col-lg-7 mb-5 mb-lg-0">
                  <div class="contact-personal-card">
                    <div class="contact-personal-card-title animate-element delay7 fadeInDown">
                      <h2 class="slide-title">contact</h2>
                    </div>
                    <div class="contact-personal-card-detail animate-element delay7 fadeInUp">
                      <div class="row">
                        <div class="col-xl-7 col-lg-10">
                          <div class="title-mini">contact info</div>
                          <div class="slide-title-sub">20Bis Air Congo, 1ère Rue Limete Kinshasa</div>
                          <div class="slide-title-sub"><a href="tel:+243817718496" class="phone-link">(+243) 817 718 496</a></div>
                          <div class="text-md text-uppercase"><a href="mailto:han.nim@hewani.cloud" class="text-primary"><strong>han.nim@hewani.cloud</strong></a></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-5 animate-element delay7 fadeInUp">
                  <div class="slide-title-info"><?php echo $this->lang->line('slide8_title_info'); ?></div>
                  <form class="contact-personal-form a-ajax-form">
                    <div class="form-group form-group-material a-form-group">
                      <label class="label"><?php echo $this->lang->line('form_name'); ?></label>
                      <input type="text" class="form-control" name="name" required />
                    </div>
                    <div class="form-group form-group-material a-form-group">
                      <label class="label"><?php echo $this->lang->line('form_mail'); ?></label>
                      <input type="email" class="form-control" name="email" required />
                    </div>
                    <div class="form-group form-group-material a-form-group">
                      <label class="label"><?php echo $this->lang->line('form_category'); ?></label>
                      <select class="form-control" name="category">
                        <option value="">&nbsp;</option>
                        <option value="sysadmin"><?php echo $this->lang->line('form_category_1'); ?></option>
                        <option value="webdev"><?php echo $this->lang->line('form_category_2'); ?></option>
                        <option value="training"><?php echo $this->lang->line('form_category_3'); ?></option>
                        <option value="talk"><?php echo $this->lang->line('form_category_4'); ?></option>
                      </select>
                    </div>
                    <div class="form-group form-group-material a-form-group">
                      <label class="label"><?php echo $this->lang->line('form_project_details'); ?></label>
                      <textarea class="form-control" name="message" cols="30" rows="3"></textarea>
                    </div>
                    <div class="form-group control-file a-file">
                      <input type="file" name="file_attach[]" multiple />
                      <div class="file-path-wrapper">
                        <i class="lni lni-paperclip text-primary"></i>
                        <input class="file-path form-control" placeholder="<?php echo $this->lang->line('form_project_btn'); ?>" />
                      </div>
                    </div>
                    <div class="message text-success success-message"><?php echo $this->lang->line('form_success'); ?></div>
                    <div class="message text-danger error-message"><?php echo $this->lang->line('form_error'); ?></div>
                    <div class="control-btn">
                      <button class="btn btn-success" type="submit"><?php echo $this->lang->line('form_btn_submit'); ?></button>
                    </div>
                    <!-- END FORM -->
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>


    <footer id="footer" class="footer">
      <ul class="social social-fixed">
        <li><a target="_blank" href="https://web.facebook.com/han.nim.sikis"><i class="lni lni-facebook-original"></i></a></li>
        <li><a target="_blank" href="https://www.linkedin.com/in/han-nim-pacifique/"><i class="lni lni-linkedin-original"></i></a></li>
        <li><a target="_blank" href="http://twitter.com/hanpacifique/"><i class="lni lni-twitter-filled"></i></a></li>
      </ul>

      <div class="copyright copyright-fixed d-none d-md-block">
        &copy; Han Nim Pacifique <?php echo date('Y'); ?> <br /> <?php echo $this->lang->line('menu_copyright'); ?>
      </div>
    </footer>
  </div>


  <!-- Modal -->
  <div class="modal fade" id="send-request">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h2 class="modal-title"><?php echo $this->lang->line('modal_title'); ?></h2>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <i class="lni lni-close"></i>
          </button>
        </div>
        <div class="modal-body">
          <p class="slide-descr"><?php echo $this->lang->line('modal_descr'); ?></p>
          <form class="form-request a-ajax-form">
            <div class="form-group form-group-material a-form-group">
              <input type="text" name="name" class="form-control" placeholder="Name">
            </div>
            <div class="form-group form-group-material a-form-group">
              <input type="email" name="email" class="form-control" required="" placeholder="Email *">
            </div>
            <div class="form-group form-group-material a-form-group">
              <textarea rows="3" name="message" class="form-control" placeholder="Message"></textarea>
            </div>
            <div class="message text-success success-message"><?php echo $this->lang->line('form_success'); ?></div>
            <div class="message text-danger error-message"><?php echo $this->lang->line('form_error'); ?></div>
            <div class="control-btn text-right">
              <button type="submit" class="btn btn-success"><?php echo $this->lang->line('modal_submit_btn'); ?></button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>


  <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
  <script src="<?php echo base_url("assets/js/jquery.min.js"); ?>"></script>
  <script src="<?php echo base_url("assets/js/bootstrap.bundle.min.js"); ?>"></script>
  <script src="<?php echo base_url("assets/js/owl.carousel.min.js"); ?>"></script>
  <script src="<?php echo base_url("assets/js/jquery.pagepiling.min.js"); ?>"></script>
  <script src="<?php echo base_url("assets/js/jquery.fancybox.min.js"); ?>"></script>
  <script src="<?php echo base_url("assets/js/jquery.validate.min.js"); ?>"></script>
  <script src="<?php echo base_url("assets/js/script.js"); ?>"></script>

</body>

</html>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset');?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>

<body <?php body_class() ?> >
              
              <nav class="navbar navbar-toggleable-md  navbar-light bg-light subnavfixed"  data-spy="affix" data-offset-top="140">
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nav-content" aria-controls="nav-content" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
              </button>
                    <div class="collapse navbar-collapse" id="nav-content"> 
                      <ul class="navbar-nav mr-auto ">
                      </ul>
                      <ul class="navbar-nav ml-auto">
                            <li class="nav-item mr-sm-4 m-auto <?php if(is_page()):
                            else:
                            echo 'active';
                                endif?>">
                              <a class="nav-link" href="/">หน้าแรก <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item mr-sm-4 m-auto <?php if(is_page(array('about'))):
                            echo 'active';
                                endif?>">
                              <a class="nav-link" href="/about/"> เกี่ยวกับเรา</a>
                            </li>
                            <li class="nav-item mr-sm-4 m-auto <?php if(is_page('port')):
                            echo 'active';
                                endif?>">
                              <a class="nav-link" href="/work/">ผลงานของเรา</a>
                            </li>
                                  <li class="nav-item mr-sm-4 m-auto <?php if(is_page('contact')):
                            echo 'active';
                                endif?>">
                                        <a class="nav-link" href="/contact/">ติดต่อ</a>
                                      </li>
                                      <li class="nav-item  m-auto">
                                        <div class="header-phone"><i class="fas fa-phone"></i> 098-423-7950</div>
                                      </li>
                                      <li class="nav-item m-auto">
                                        <a href="/news/how-to-travel/1/">
                                        <div class="header-use">ใช้บริการเรา!!</div></a>
                                      </li>
                                  
                          </ul>
                                  </div>
                  </nav>
                  <div style="padding-bottom: 20px"></div>


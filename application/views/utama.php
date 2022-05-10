<?php $url='base_url'().'assets/frontend/'?>
<!doctype html>

<html lang="en">
   
   
    <head>
       
       
        <!-- META -->
        <meta charset="utf-8">
        <meta name="robots" content="noodp">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
       
        <!-- PAGE TITLE -->
        <title> Alwi Nopriansa - My Portofolio</title>
       
        <!-- FAVICON -->
        <link rel="shortcut icon" href="<?=$url?>img/favicon.png">
       
        <!-- FONTS -->
        <link href="https://fonts.googleapis.com/css?family=Abril+Fatface%7CArapey&amp;subset=latin-ext" rel="stylesheet">
       
        <!-- STYLESHEETS -->
        <link rel="stylesheet" href="<?=$url?>css/main.css">
        <link rel="stylesheet" href="<?=$url?>css/plugin.css">
        
        
    </head>

   
    <body>
    
       
        <!-- PRELOADER -->
        <div class="preloader">
           
            <div class="spinner"></div>
            
        </div>
        <!-- /PRELOADER -->
    
        
        <!-- IMAGE CONTAINER -->
        <div class="image-container">
           
            <div class="background-img"></div>

        </div>
        <!-- /IMAGE CONTAINER -->


        <!-- CONTENT AREA -->
        <div class="content-area">


            <!-- CONTENT AREA INNER --> 
            <div class="content-area-inner">


                <!-- INTRO -->
                <section id="intro">


                    <!-- CONTAINER MID -->
                    <div class="container-mid">

                       
                        <!-- ANIMATION CONTAINER -->
                        <div class="animation-container animation-fade-down" data-animation-delay="0">
                        
                            <h1> <?=$data->nama?> </h1>
                        
                        </div>
                        <!-- /ANIMATION CONTAINER -->
                        
                        
                        <!-- ANIMATION CONTAINER -->
                        <div class="animation-container animation-fade-left" data-animation-delay="300" >
                           
                          

                            <p class="font-familly:Arial; font-size:18px;"><?=$data->deskripsi?></p>
                            
                        </div>
                        <!-- /ANIMATION CONTAINER -->
                        
                        
                        <!-- ANIMATION CONTAINER -->
                        <div class="animation-container animation-fade-up" data-animation-delay="600">
                           
                            <a href="#about" class="smooth-scroll">Learn More<i class="fa fa-angle-down" aria-hidden="true"></i></a>
                            
                        </div>
                        <!-- /ANIMATION CONTAINER -->


                    </div>
                    <!-- /CONTAINER MID -->


                </section>
                <!-- /INTRO -->


                <!-- ABOUT -->
                <section id="about">


                    <h3 class="headline scroll-animated-from-right"> Organisasi</h3>
                    
                   <p class="scroll-animated-from-right">
                       <?php foreach ($data2 as $key) : ?>
                        <ul>
                            <li> <b class="font-size:20px"> <?=$key->nama_organisasi;?></b> - <?=$key->periode;?></li>
                            <p><?=$key->jabatan;?> <br> <?= $key->deskripsi;?></p>
                        </ul>
                        <?php endforeach; ?>
                   </p>

                </section>
                <!-- /ABOUT -->
                
                
                <!-- SERVICE -->
                <section id="service">


                    <h3 class="headline scroll-animated-from-right">Keahlian</h3>
                    
                    
                    <!-- SERVICE LIST -->
                    <ul class="services-list">
                       
                      <?php foreach ($data3 as $key) : ?>
                        <li class="scroll-animated-from-right"> <li class="fa fa-pencil-square-o" 
                        aria-hidden="true" ></li> <?=$key->nama_skills;?></li>
                        <?php endforeach; ?>
                        
                    </ul>
                    <!-- /SERVICE LIST -->


                </section>
                <!-- /SERVICE -->
                
                
                <!-- WORK -->
                <section id="work">


                    <h3 class="headline scroll-animated-from-right">My latest Work.</h3>
                    
                    
                    <!-- SHOWCASE -->
                    <div class="showcase">
                       
                       
                        <!-- ITEM -->
                        <div class="item scroll-animated-from-right">
                          
                          
                            <!-- LIGHTBOX LINK -->
                            <a href="#" data-featherlight="#item-1-lightbox">
                            
                            
                                <!-- INFO -->
                                <div class="info">


                                    <!-- CONTAINER MID -->
                                    <div class="container-mid">

                                        <h5>Sistem Informasi Desa</h5>
                                        <p>Web Design</p>

                                    </div>
                                    <!-- /CONTAINER MID -->


                                </div>
                                <!-- /INFO -->


                                <div class="background-image" style="background-image: url(<?=$url?>img/work/item-1.jpg)"></div>

                           
                            </a>
                            <!-- /LIGHTBOX LINK -->
                            
                            
                            <!-- LIGHTBOX -->
                            <div id="item-1-lightbox" class="work-lightbox">
                               
                               
                                <img class="img-responsive" src="<?=$url?> img/work/item-1.jpg" alt="image">
                                
                                <h3>Sistem Informasi Desa</h3>
                                <p class="subline">Web Design</p>
                                
                                <p>Sistem Informasi desa ini di buat untuk mengembangkan sistem informasi desa yang dahulunya menggunakan sistem informasi secara manual,
                                Dengan menambahkan beberapa fitur agar pelayanan terhadap masyarakat lebih relevan dan responden. </p>
                                
                                
                            </div>
                            <!-- /LIGHTBOX -->
                            
                            
                        </div>
                        <!-- /ITEM -->
                        
                        
                        <!-- ITEM -->
                        <div class="item scroll-animated-from-right">
                          
                          
                            <!-- LIGHTBOX LINK -->
                            <a href="#" data-featherlight="#item-2-lightbox">
                            
                            
                                <!-- INFO -->
                                <div class="info">


                                    <!-- CONTAINER MID -->
                                    <div class="container-mid">

                                        <h5>Animasi Vaksin</h5>
                                        <p>Product Design</p>

                                    </div>
                                    <!-- /CONTAINER MID -->


                                </div>
                                <!-- /INFO -->


                                <div class="background-image" style="background-image: url(<?=$url?>img/work/item-2.jpg)"></div>

                           
                            </a>
                            <!-- /LIGHTBOX LINK -->
                            
                            
                            <!-- LIGHTBOX -->
                            <div id="item-2-lightbox" class="work-lightbox">
                               
                               
                                <img class="img-responsive" src="<?=$url?>img/work/item-2.jpg" alt="image">
                                
                                <h3> Animasi Vaksin</h3>
                                <p class="subline">Product Design</p>
                                
                                <p>Animasi ini di tujukan untuk memberikan wawasan dan juga gambaran terhadap masyarakat bagaimana cara untuk melakukan vaksin dimulai dari rumah hingga ke pulang ke rumah.</p>
                                
                            </div>
                            <!-- /LIGHTBOX -->
                            
                            
                        </div>
                        <!-- /ITEM -->
                        
                        <!-- ITEM -->
                        <div class="item scroll-animated-from-right">
                          
                          
                            <!-- LIGHTBOX LINK -->
                            <a href="#" data-featherlight="#item-4-lightbox">
                            
                            
                                <!-- INFO -->
                                <div class="info">


                                    <!-- CONTAINER MID -->
                                    <div class="container-mid">

                                        <h5>Name Card</h5>
                                        <p>Editing Image</p>

                                    </div>
                                    <!-- /CONTAINER MID -->


                                </div>
                                <!-- /INFO -->


                                <div class="background-image" style="background-image: url(<?=$url?>img/work/item-4.jpg)"></div>

                           
                            </a>
                            <!-- /LIGHTBOX LINK -->
                            
                            
                            <!-- LIGHTBOX -->
                            <div id="item-4-lightbox" class="work-lightbox">
                               
                               
                                <img class="img-responsive" src="<?=$url?>img/work/item-4.jpg" alt="image">
                                
                                <h3>Name Card</h3>
                                <p class="subline">Editing Image</p>
                                <p>Name Card ini adalah salah satu dari tugas mata kuliah desain grafis.</p>
                                
                            </div>
                            <!-- /LIGHTBOX -->
                            
                            
                        </div>
                        <!-- /ITEM -->
                        
                        
                    </div>
                    <!-- /SHOWCASE -->


                </section>
                <!-- /WORK -->
                
                
                <!-- CONTACT -->
                <section id="contact">


                    <h3 class="headline scroll-animated-from-right">Contact Me</h3>
                    
                    
                    <!-- CONTACT LIST -->
                    <ul class="contact-list">
                       
                        <li class="scroll-animated-from-right"><i class="fa fa-mobile" aria-hidden="true"></i>+62-82267332976</li>
                        <li class="scroll-animated-from-right"><i class="fa fa-envelope-o" aria-hidden="true"></i>akhyalwi@gmail.com</li>
                        <li class="scroll-animated-from-right"><i class="fa fa-instagram" aria-hidden="true"></i>wee-ansyah7</li>
                        <li class="scroll-animated-from-right"><i class="fa fa-github" aria-hidden="true"></i>Alwinopriansyah</li>

                    </ul>
                    <!-- /CONTACT LIST -->
                    
                    
                    <!-- CONTACT FORM --> 
                    <form id="contact-form" action="assets/php/contact.php" method="post">

                       
                        <input id="contact-form-name" type="text" name="name" class="form-control scroll-animated-from-right" placeholder="* Your Name">
                        
                        <input id="contact-form-email" type="text" name="email" class="form-control scroll-animated-from-right" placeholder="* Your Email">
                        
                        <!-- PHANTOM ELEMENT ( HONEYPOT CAPTCHA FOR SECURITY ) -->
                        <div class="fhp-input"><input id="contact-form-company" type="text" name="company" class="form-control"></div>
                        <!-- /PHANTOM ELEMENT ( HONEYPOT CAPTCHA FOR SECURITY ) -->
                        
                        <textarea id="contact-form-message" name="message" class="form-control scroll-animated-from-right" placeholder="* Your Message"></textarea>
                        
                        <button type="submit" class="form-control scroll-animated-from-right">Send Mail</button>
                        
                        <div class="success-message">* The Email was Sent Successfully!</div>

                   
                    </form>
                    <!-- /CONTACT FORM --> 


                </section>
                <!-- /CONTACT -->
                
                
                <!-- FOOTER -->
                <section id="footer">
                
                   
                    <!-- SOCIAL ICONS -->
                    <ul class="social-icons scroll-animated-from-right">
                       
                       
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                        
                        
                    </ul>
                    <!-- /SOCIAL ICONS -->
                    

                    <p class="scroll-animated-from-right">©2022 Alwi Product | Design by <a href="https://templatefoundation.com">Template Foundation</a></p>


                </section>
                <!-- /FOOTER -->


            </div>
            <!-- /CONTENT AREA INNER -->


        </div>
        <!-- /CONTENT AREA -->
        
        
        <!-- JAVASCRIPTS -->
        <script type="text/javascript" src="<?=$url?>js/plugins.js"></script>
        <script type="text/javascript" src="<?=$url?>js/main.js"></script>
   
   
    </body> 
    
    
</html>
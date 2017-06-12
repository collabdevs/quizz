<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Jobs board - Bootstrap Jobs board Theme</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- Google fonts - Roboto for copy, Montserrat for headings-->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
    <!-- owl carousel-->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="favicon.png">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
    <!-- navbar-->
    <header class="header">
      <div role="navigation" class="navbar navbar-default">
        <div class="container">
          <div class="navbar-header"><a href="index.html" class="navbar-brand"><img src="img/logo.png" alt="logo" class="hidden-xs hidden-sm"><img src="img/logo-small.png" alt="logo" class="visible-xs visible-sm"><span class="sr-only">Go to homepage</span></a>
            <div class="navbar-buttons">
              <button type="button" data-toggle="collapse" data-target=".navbar-collapse" class="navbar-toggle navbar-btn">Menu<i class="fa fa-align-justify"></i></button>
            </div>
          </div>
          <div id="navigation" class="collapse navbar-collapse navbar-right">
            <ul class="nav navbar-nav">
              <li class="active"><a href="category.html">Jobs</a></li>
              <li><a href="about.html">About us</a></li>
              <li class="dropdown"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Client zone <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="client-register.html">Login or Register</a></li>
                  <li><a href="client-dashboard.html">Dashboard</a></li>
                  <li><a href="client-applicants.html">Applicants</a></li>
                  <li><a href="client-job.html">Post a new job</a></li>
                </ul>
              </li>
              <li class="dropdown"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Pages <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="index.html">Home</a></li>
                  <li><a href="category.html">Jobs Listing</a></li>
                  <li><a href="detail.html">Job detail</a></li>
                  <li><a href="about.html">About</a></li>
                  <li><a href="contact.html">Contact</a></li>
                  <li><a href="blog.html">Blog listing</a></li>
                  <li><a href="post.html">Blog Post</a></li>
                  <li><a href="packages.html">Pricing packages</a></li>
                  <li><a href="testimonials.html">Testimonials</a></li>
                  <li><a href="text.html">Text page</a></li>
                  <li><a href="faq.html">FAQ</a></li>
                </ul>
              </li>
              <li><a href="contact.html">Contact</a></li>
            </ul><a href="#" data-toggle="modal" data-target="#login-modal" class="btn navbar-btn btn-white"><i class="fa fa-sign-in"></i>Log in</a>
          </div>
        </div>
      </div>
    </header>
    <!-- *** LOGIN MODAL ***_________________________________________________________
    -->
    <div id="login-modal" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true" class="modal fade">
      <div class="modal-dialog modal-sm">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" data-dismiss="modal" aria-hidden="true" class="close">×</button>
            <h4 id="Login" class="modal-title">Customer login</h4>
          </div>
          <div class="modal-body">
            <form action="customer-orders.html" method="post">
              <div class="form-group">
                <input id="email_modal" type="text" placeholder="email" class="form-control">
              </div>
              <div class="form-group">
                <input id="password_modal" type="password" placeholder="password" class="form-control">
              </div>
              <p class="text-center">
                <button type="button" class="btn btn-primary"><i class="fa fa-sign-in"></i> Log in</button>
              </p>
            </form>
            <p class="text-center text-muted">Not registered yet?</p>
            <p class="text-center text-muted"><a href="client-register.html"><strong>Register now</strong></a>! It is easy and done in 1 minute and gives you access to special discounts and much more!</p>
          </div>
        </div>
      </div>
    </div>
    <!-- *** LOGIN MODAL END ***-->
    <section class="job-form-section job-form-section--image">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-lg-offset-2">
            <div class="job-form-box">
              <h2 class="heading">Find a <span class="accent">job</span> you will <span class="accent">love</span>.</h2>
              <form id="job-main-form" method="get" action="#" class="job-main-form">
                <div class="controls">
                  <div class="row">
                    <div class="col-sm-5">
                      <div class="form-group">
                        <label for="profession">Profession</label>
                        <input type="text" id="profession" name="profession" placeholder="Profession you are looking for" class="form-control">
                      </div>
                    </div>
                    <div class="col-sm-5">
                      <div class="form-group">
                        <label for="location">Location</label>
                        <input type="text" id="location" name="location" placeholder="Any particular location?" class="form-control">
                      </div>
                    </div>
                    <div class="col-sm-2">
                      <button type="submit" name="submit" class="btn btn-primary job-main-form__button"><i class="fa fa-search"></i></button>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section style="background: #fafafa;">
      <div class="container">
        <h3 class="heading">Featured jobs</h3>
        <div class="row featured same-height-row">
          <div class="col-md-4">
            <div class="box-image-text bg-visible same-height"> 
              <div class="top"><a href="detail.html">
                  <div class="image"><img src="img/featured1.jpg" alt="" class="img-responsive"></div>
                  <div class="bg"></div>
                  <div class="logo"><img src="img/airbnb.png" alt="" style="max-width: 80px;"></div></a></div>
              <div class="content">
                <h5><a href="detail.html">Software Engineer</a></h5>
                <p class="featured__details">  <i class="fa fa-map-marker job__location"></i>San Francisco<span class="label featured__label label-success">Full Time</span></p>
                <p>Advantage old had otherwise sincerity dependent additions. It in adapted natural hastily is justice. Six draw you him full not mean evil. Prepare garrets it expense windows shewing do an.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="box-image-text bg-visible same-height"> 
              <div class="top"><a href="detail.html">
                  <div class="image"><img src="img/featured2.jpg" alt="" class="img-responsive"></div>
                  <div class="bg"></div>
                  <div class="logo"><img src="img/google.png" alt="" style="max-width: 80px;"></div></a></div>
              <div class="content">
                <h5><a href="detail.html">Customer support</a></h5>
                <p class="featured__details">  <i class="fa fa-map-marker job__location"></i>Palo Alto<span class="label featured__label label-success">Full Time</span></p>
                <p>Am terminated it excellence invitation projection as. She graceful shy believed distance use nay. Lively is people so basket ladies window expect. </p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="box-image-text bg-visible same-height"> 
              <div class="top"><a href="detail.html">
                  <div class="image"><img src="img/featured3.jpg" alt="" class="img-responsive"></div>
                  <div class="bg"></div>
                  <div class="logo"><img src="img/dropbox.png" alt="" style="max-width: 80px;"></div></a></div>
              <div class="content">
                <h5><a href="detail.html">Graphic designer</a></h5>
                <p class="featured__details">  <i class="fa fa-map-marker job__location"></i>San Francisco<span class="label featured__label label-default">Part Time</span></p>
                <p>Fifth abundantly made Give sixth hath. Cattle creature i be dont them behold green moved fowl Moved life us beast good yielding. Have bring.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="text-center margin-top"><a href="category.html" class="btn btn-ghost">See more jobs</a></div>
      </div>
    </section>
    <section>
      <div class="container">
        <h4 class="heading">Trending this month</h4>
        <div class="job-listing job-listing--featured ">
          <div class="row">
            <div class="col-sm-12 col-md-6">
              <div class="row">
                <div class="col-xs-2"><img src="img/airbnb.png" alt="AirBnb " class="img-responsive"></div>
                <div class="col-xs-10">
                  <h4 class="job__title"><a href="detail.html">Webdesigner</a></h4>
                  <p class="job__company">
                     
                    AirBnb                            
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xs-10 col-xs-offset-2 col-sm-4 col-sm-offset-2 col-md-2 col-md-offset-0"><i class="fa fa-map-marker job__location"></i>San Francisco</div>
            <div class="col-xs-10 col-xs-offset-2 col-sm-4 col-sm-offset-0 col-md-3">
              <p>Posted 5 days ago</p>
            </div>
            <div class="col-xs-10 col-xs-offset-2 col-sm-2 col-sm-offset-0 col-md-1">
              <div class="job__star"><a href="#" data-toggle="tooltip" data-placement="top" title="Save to favourites" class="job__star__link"><i class="fa fa-star"></i></a></div>
            </div>
          </div>
        </div>
        <div class="job-listing  ">
          <div class="row">
            <div class="col-sm-12 col-md-6">
              <div class="row">
                <div class="col-xs-2"><img src="img/google.png" alt="Google " class="img-responsive"></div>
                <div class="col-xs-10">
                  <h4 class="job__title"><a href="detail.html">Front End developer</a></h4>
                  <p class="job__company">
                     
                    Google                            
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xs-10 col-xs-offset-2 col-sm-4 col-sm-offset-2 col-md-2 col-md-offset-0"><i class="fa fa-map-marker job__location"></i>Palo Alto</div>
            <div class="col-xs-10 col-xs-offset-2 col-sm-4 col-sm-offset-0 col-md-3">
              <p>Posted 10 days ago</p>
            </div>
            <div class="col-xs-10 col-xs-offset-2 col-sm-2 col-sm-offset-0 col-md-1">
              <div class="job__star"><a href="#" data-toggle="tooltip" data-placement="top" title="Save to favourites" class="job__star__link"><i class="fa fa-star"></i></a></div>
            </div>
          </div>
        </div>
        <div class="job-listing  ">
          <div class="row">
            <div class="col-sm-12 col-md-6">
              <div class="row">
                <div class="col-xs-2"><img src="img/dropbox.png" alt="Dropbox " class="img-responsive"></div>
                <div class="col-xs-10">
                  <h4 class="job__title"><a href="detail.html">Webdesigner</a></h4>
                  <p class="job__company">
                     
                    Dropbox                            
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xs-10 col-xs-offset-2 col-sm-4 col-sm-offset-2 col-md-2 col-md-offset-0"><i class="fa fa-map-marker job__location"></i>San Francisco</div>
            <div class="col-xs-10 col-xs-offset-2 col-sm-4 col-sm-offset-0 col-md-3">
              <p>Posted 5 days ago</p>
            </div>
            <div class="col-xs-10 col-xs-offset-2 col-sm-2 col-sm-offset-0 col-md-1">
              <div class="job__star"><a href="#" data-toggle="tooltip" data-placement="top" title="Save to favourites" class="job__star__link"><i class="fa fa-star"></i></a></div>
            </div>
          </div>
        </div>
        <div class="job-listing  ">
          <div class="row">
            <div class="col-sm-12 col-md-6">
              <div class="row">
                <div class="col-xs-2"><img src="img/amazon.png" alt="Amazon " class="img-responsive"></div>
                <div class="col-xs-10">
                  <h4 class="job__title"><a href="detail.html">Team Leader</a></h4>
                  <p class="job__company">
                     
                    Amazon                            
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xs-10 col-xs-offset-2 col-sm-4 col-sm-offset-2 col-md-2 col-md-offset-0"><i class="fa fa-map-marker job__location"></i>Palo Alto</div>
            <div class="col-xs-10 col-xs-offset-2 col-sm-4 col-sm-offset-0 col-md-3">
              <p>Posted 10 days ago</p>
            </div>
            <div class="col-xs-10 col-xs-offset-2 col-sm-2 col-sm-offset-0 col-md-1">
              <div class="job__star"><a href="#" data-toggle="tooltip" data-placement="top" title="Save to favourites" class="job__star__link"><i class="fa fa-star"></i></a></div>
            </div>
          </div>
        </div>
        <div class="job-listing  ">
          <div class="row">
            <div class="col-sm-12 col-md-6">
              <div class="row">
                <div class="col-xs-2"><img src="img/amazon.png" alt="Amazon " class="img-responsive"></div>
                <div class="col-xs-10">
                  <h4 class="job__title"><a href="detail.html">Software Engineer</a></h4>
                  <p class="job__company">
                     
                    Amazon                            
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xs-10 col-xs-offset-2 col-sm-4 col-sm-offset-2 col-md-2 col-md-offset-0"><i class="fa fa-map-marker job__location"></i>Palo Alto</div>
            <div class="col-xs-10 col-xs-offset-2 col-sm-4 col-sm-offset-0 col-md-3">
              <p>Posted 14 days ago</p>
            </div>
            <div class="col-xs-10 col-xs-offset-2 col-sm-2 col-sm-offset-0 col-md-1">
              <div class="job__star"><a href="#" data-toggle="tooltip" data-placement="top" title="Save to favourites" class="job__star__link"><i class="fa fa-star"></i></a></div>
            </div>
          </div>
        </div>
        <div class="job-listing  ">
          <div class="row">
            <div class="col-sm-12 col-md-6">
              <div class="row">
                <div class="col-xs-2"><img src="img/google.png" alt="Google " class="img-responsive"></div>
                <div class="col-xs-10">
                  <h4 class="job__title"><a href="detail.html">Front End developer</a></h4>
                  <p class="job__company">
                     
                    Google                            
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xs-10 col-xs-offset-2 col-sm-4 col-sm-offset-2 col-md-2 col-md-offset-0"><i class="fa fa-map-marker job__location"></i>Palo Alto</div>
            <div class="col-xs-10 col-xs-offset-2 col-sm-4 col-sm-offset-0 col-md-3">
              <p>Posted 10 days ago</p>
            </div>
            <div class="col-xs-10 col-xs-offset-2 col-sm-2 col-sm-offset-0 col-md-1">
              <div class="job__star"><a href="#" data-toggle="tooltip" data-placement="top" title="Save to favourites" class="job__star__link"><i class="fa fa-star"></i></a></div>
            </div>
          </div>
        </div>
        <div class="job-listing  ">
          <div class="row">
            <div class="col-sm-12 col-md-6">
              <div class="row">
                <div class="col-xs-2"><img src="img/dropbox.png" alt="Dropbox " class="img-responsive"></div>
                <div class="col-xs-10">
                  <h4 class="job__title"><a href="detail.html">Webdesigner</a></h4>
                  <p class="job__company">
                     
                    Dropbox                            
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xs-10 col-xs-offset-2 col-sm-4 col-sm-offset-2 col-md-2 col-md-offset-0"><i class="fa fa-map-marker job__location"></i>San Francisco</div>
            <div class="col-xs-10 col-xs-offset-2 col-sm-4 col-sm-offset-0 col-md-3">
              <p>Posted 5 days ago</p>
            </div>
            <div class="col-xs-10 col-xs-offset-2 col-sm-2 col-sm-offset-0 col-md-1">
              <div class="job__star"><a href="#" data-toggle="tooltip" data-placement="top" title="Save to favourites" class="job__star__link"><i class="fa fa-star"></i></a></div>
            </div>
          </div>
        </div>
        <div class="job-listing  job-listing--last">
          <div class="row">
            <div class="col-sm-12 col-md-6">
              <div class="row">
                <div class="col-xs-2"><img src="img/amazon.png" alt="Amazon " class="img-responsive"></div>
                <div class="col-xs-10">
                  <h4 class="job__title"><a href="detail.html">Team Leader</a></h4>
                  <p class="job__company">
                     
                    Amazon                            
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xs-10 col-xs-offset-2 col-sm-4 col-sm-offset-2 col-md-2 col-md-offset-0"><i class="fa fa-map-marker job__location"></i>Palo Alto</div>
            <div class="col-xs-10 col-xs-offset-2 col-sm-4 col-sm-offset-0 col-md-3">
              <p>Posted 10 days ago</p>
            </div>
            <div class="col-xs-10 col-xs-offset-2 col-sm-2 col-sm-offset-0 col-md-1">
              <div class="job__star"><a href="#" data-toggle="tooltip" data-placement="top" title="Save to favourites" class="job__star__link"><i class="fa fa-star"></i></a></div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section style="background: #fafafa;" class="section testimonails">
      <div class="container">
        <h2 class="heading">What our customers say</h2>
        <p class="lead text-center">One morning, when Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin. He lay on his armour-like back, and if he lifted his head a little he could see his brown belly, slightly domed and divided by arches into stiff sections.  </p>
        <div class="row"> 
          <div class="col-md-12">
            <ul class="owl-carousel testimonials same-height-row">
              <li class="item">
                <div class="testimonial same-height-always">
                  <div class="text">
                    <p>One morning, when Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin. He lay on his armour-like back, and if he lifted his head a little he could see his brown belly, slightly domed and divided by arches into stiff sections.</p>
                  </div>
                  <div class="bottom">
                    <div class="icon"><i class="fa fa-quote-left"></i></div>
                    <div class="name-picture"><img alt="" src="img/person-1.jpg">
                      <h5>John McIntyre</h5>
                      <p>CEO, TransTech</p>
                    </div>
                  </div>
                </div>
              </li>
              <li class="item">
                <div class="testimonial same-height-always">
                  <div class="text">
                    <p>The bedding was hardly able to cover it and seemed ready to slide off any moment. His many legs, pitifully thin compared with the size of the rest of him, waved about helplessly as he looked. "What's happened to me? " he thought. It wasn't a dream.</p>
                  </div>
                  <div class="bottom">
                    <div class="icon"><i class="fa fa-quote-left"></i></div>
                    <div class="name-picture"><img alt="" src="img/person-2.jpg">
                      <h5>John McIntyre</h5>
                      <p>CEO, TransTech</p>
                    </div>
                  </div>
                </div>
              </li>
              <li class="item">
                <div class="testimonial same-height-always">
                  <div class="text">
                    <p>His room, a proper human room although a little too small, lay peacefully between its four familiar walls.</p>
                    <p>A collection of textile samples lay spread out on the table - Samsa was a travelling salesman - and above it there hung a picture that he had recently cut out of an illustrated magazine and housed in a nice, gilded frame.</p>
                  </div>
                  <div class="bottom">
                    <div class="icon"><i class="fa fa-quote-left"></i></div>
                    <div class="name-picture"><img alt="" src="img/person-3.png">
                      <h5>John McIntyre</h5>
                      <p>CEO, TransTech</p>
                    </div>
                  </div>
                </div>
              </li>
              <li class="item">
                <div class="testimonial same-height-always">
                  <div class="text">
                    <p>It showed a lady fitted out with a fur hat and fur boa who sat upright, raising a heavy fur muff that covered the whole of her lower arm towards the viewer. Gregor then turned to look out the window at the dull weather. Drops of rain could be heard hitting the pane, which made him feel quite sad.</p>
                  </div>
                  <div class="bottom">
                    <div class="icon"><i class="fa fa-quote-left"></i></div>
                    <div class="name-picture"><img alt="" src="img/person-4.jpg">
                      <h5>John McIntyre</h5>
                      <p>CEO, TransTech</p>
                    </div>
                  </div>
                </div>
              </li>
              <li class="item">
                <div class="testimonial same-height-always">
                  <div class="text">
                    <p>It showed a lady fitted out with a fur hat and fur boa who sat upright, raising a heavy fur muff that covered the whole of her lower arm towards the viewer. Gregor then turned to look out the window at the dull weather. Drops of rain could be heard hitting the pane, which made him feel quite sad. Gregor then turned to look out the window at the dull weather. Drops of rain could be heard hitting the pane, which made him feel quite sad.</p>
                  </div>
                  <div class="bottom">
                    <div class="icon"><i class="fa fa-quote-left"></i></div>
                    <div class="name-picture"><img alt="" src="img/person-4.jpg">
                      <h5>John McIntyre</h5>
                      <p>CEO, TransTech</p>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <section>
      <div class="container">
        <h3 class="heading">Our Packages</h3>
        <p class="lead text-center margin-bottom--big">
                    
          One morning, when Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin. He lay on his armour-like back, and if he lifted his head a little he could see his brown belly, slightly domed and divided by arches into stiff sections.  
        </p>
        <div class="row packages">
          <div class="col-md-3">
            <div class="package ">
              <div class="package-header">
                <h5>Basic</h5>
              </div>
              <div class="price">
                <div class="price-container">
                  <h4><span class="currency">$</span>7</h4><span class="period">/ month</span>
                </div>
              </div>
              <ul>
                <li><i class="fa fa-check"></i>100GB Storage</li>
                <li><i class="fa fa-times"></i>Own config file</li>
                <li><i class="fa fa-times"></i>Sharing Tools</li>
                <li><i class="fa fa-times"></i>Auto Backup</li>
                <li><i class="fa fa-times"></i>Extended Security</li>
              </ul><a href="#" class="btn btn-primary">Sign Up</a>
            </div>
          </div>
          <!-- end col-->
          <div class="col-md-3">
            <div class="package ">
              <div class="package-header">
                <h5>Standard</h5>
              </div>
              <div class="price">
                <div class="price-container">
                  <h4><span class="currency">$</span>21</h4><span class="period">/ month</span>
                </div>
              </div>
              <ul>
                <li><i class="fa fa-check"></i>100GB Storage</li>
                <li><i class="fa fa-check"></i>Own config file</li>
                <li><i class="fa fa-times"></i>Sharing Tools</li>
                <li><i class="fa fa-times"></i>Auto Backup</li>
                <li><i class="fa fa-times"></i>Extended Security</li>
              </ul><a href="#" class="btn btn-primary">Sign Up</a>
            </div>
          </div>
          <!-- end col-->
          <div class="col-md-3">
            <div class="package best-value">
              <div class="package-header">
                <h5>Premium</h5>
                <div class="meta-text">Best Value</div>
              </div>
              <div class="price">
                <div class="price-container">
                  <h4><span class="currency">$</span>53</h4><span class="period">/ month</span>
                </div>
              </div>
              <ul>
                <li><i class="fa fa-check"></i>100GB Storage</li>
                <li><i class="fa fa-check"></i>Own config file</li>
                <li><i class="fa fa-check"></i>Sharing Tools</li>
                <li><i class="fa fa-times"></i>Auto Backup</li>
                <li><i class="fa fa-times"></i>Extended Security</li>
              </ul><a href="#" class="btn btn-primary">Sign Up</a>
            </div>
          </div>
          <!-- end col-->
          <div class="col-md-3">
            <div class="package ">
              <div class="package-header">
                <h5>Standard</h5>
              </div>
              <div class="price">
                <div class="price-container">
                  <h4><span class="currency">$</span>99</h4><span class="period">/ month</span>
                </div>
              </div>
              <ul>
                <li><i class="fa fa-check"></i>100GB Storage</li>
                <li><i class="fa fa-check"></i>Own config file</li>
                <li><i class="fa fa-check"></i>Sharing Tools</li>
                <li><i class="fa fa-check"></i>Auto Backup</li>
                <li><i class="fa fa-check"></i>Extended Security</li>
              </ul><a href="#" class="btn btn-primary">Sign Up</a>
            </div>
          </div>
          <!-- end col-->
        </div>
      </div>
    </section>
    <section style="background-image: url('img/startup.jpg'); " class="section-divider">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <p>Start searching for your new job now! <a href="" class="btn btn-white">See our job offers</a></p>
          </div>
        </div>
      </div>
    </section>
    <section>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="heading">
              <h4>From our blog</h4>
            </div>
            <p class="text-center text-muted">What's new in the world of human resources? Check out our blog!</p>
          </div>
        </div>
        <div id="blog-homepage" class="row">
          <div class="col-sm-6">
            <div class="post">
              <div class="image"><a href="post.html"><img src="img/blog1.jpg" alt="" class="img-responsive"></a></div>
              <h4><a href="post.html">Education in the IT</a></h4>
              <p class="post__intro">ellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
              <p class="read-more"><a href="post.html" class="btn btn-primary">Continue reading</a></p>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="post">
              <div class="image"><a href="post.html"><img src="img/blog2.jpg" alt="" class="img-responsive"></a></div>
              <h4><a href="post.html">Best books for personal development</a></h4>
              <p class="post__intro">ellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
              <p class="read-more"><a href="post.html" class="btn btn-primary">Continue reading</a></p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <footer class="footer">
      <div class="footer__block">
        <div class="container">
          <div class="row">
            <div class="col-md-4 col-sm-12">
              <h4>About Jobs</h4>
              <p>Jobs is a <strong>Bootstrap 3 jobs board theme</strong> developed in the middle of Europe by <a href="http://ondrejsvestka.cz">Ondrej Svestka</a>.</p>
              <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus magna. Cras in mi at felis aliquet congue. </p>
            </div>
            <div class="col-md-4 col-sm-6">
              <h4>This Theme</h4>
              <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="category.html">Jobs Listing</a></li>
                <li><a href="detail.html">Job detail</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="contact.html">Contact</a></li>
                <li><a href="blog.html">Blog listing</a></li>
                <li><a href="post.html">Blog Post</a></li>
                <li><a href="packages.html">Pricing packages</a></li>
                <li><a href="testimonials.html">Testimonials</a></li>
                <li><a href="text.html">Text page</a></li>
                <li><a href="faq.html">FAQ</a></li>
              </ul>
            </div>
            <div class="col-md-4 col-sm-6">
              <h4>Our offices</h4>
              <h5>London</h5>
              <p> Donec eleifend<br />libero at sagittis<br />mollis + 44 2556 789 8799</p>
              <h5>Paris</h5>
              <p> Donec eleifend<br />libero at sagittis<br />mollis + 41 2556 789 8799</p>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4 col-sm-6">
              <h4>Client zone</h4>
              <ul>
                <li><a href="client-register.html">Login or Register</a></li>
                <li><a href="client-dashboard.html">Dashboard</a></li>
                <li><a href="client-applicants.html">Applicants</a></li>
                <li><a href="client-job.html">Post a new job</a></li>
              </ul>
            </div>
            <div class="col-md-4 col-sm-6">
              <h4>Let's be Friends</h4>
              <p class="social"><a href="#" data-animate-hover="pulse" class="external facebook"><i class="fa fa-facebook"></i></a><a href="#" data-animate-hover="pulse" class="external gplus"><i class="fa fa-google-plus"></i></a><a href="#" data-animate-hover="pulse" class="external twitter"><i class="fa fa-twitter"></i></a><a href="#" data-animate-hover="pulse" class="email"><i class="fa fa-envelope"></i></a></p>
            </div>
            <div class="col-md-4 col-sm-12">
              <h4>News and Updates</h4>
              <p>Sign up to get weekly portion of fresh jobs and news from us.</p>
              <form class="footer__newsletter">
                <div class="input-group">
                  <input type="text" placeholder="Enter your email address" class="form-control"><span class="input-group-btn">
                    <button type="button" class="btn btn-default"><i class="fa fa-send"></i></button></span>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <div class="footer__copyright">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <p>&copy;2017 Best company</p>
            </div>
            <div class="col-md-6">
              <p class="credit pull-right">Theme by <a href="https://ondrejsvestka.cz">Ondrej Svestka</a></p>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <button type="button" data-toggle="collapse" data-target="#style-switch" id="style-switch-button" class="btn btn-primary btn-sm hidden-xs hidden-sm"><i class="fa fa-cog fa-2x"></i></button>
    <div id="style-switch" class="collapse">
      <h4 class="text-uppercase">Select theme colour</h4>
      <form class="margin-bottom">
        <select name="colour" id="colour" class="form-control">
          <option value="">select colour variant</option>
          <option value="default">red</option>
          <option value="pink">pink</option>
          <option value="green">green</option>
          <option value="violet">violet</option>
          <option value="sea">sea</option>
          <option value="blue">blue</option>
        </select>
      </form>
      <p><img src="img/template-mac.png" alt="" class="img-responsive"></p>
      <p class="text-muted text-small">Stylesheet switching is done via JavaScript and can cause a blink while page loads. This will not happen in your production code.</p>
    </div>
    <!-- Javascript files-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery-1.11.0.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.cookie.js"> </script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/front.js"></script>
    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID.-->
    <!---->
    <script>
      (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
      function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
      e=o.createElement(i);r=o.getElementsByTagName(i)[0];
      e.src='//www.google-analytics.com/analytics.js';
      r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
      ga('create','UA-XXXXX-X');ga('send','pageview');
    </script>
  </body>
</html>
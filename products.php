<?php 
	$products = array(
		'0' => array(
			'price'=> 'Rp 30.000',
	        'photo_path'=> 'breakfast_item.jpg',
	        'name'=> 'Nugget Asam Manis',
	        'stock'=> 4,
	        'desc'=> 'Rasa asam manis nya bikin nyam nyam'
		),
		'1' =>  array(
            'price'=> 'Rp 50.000',
            'photo_path'=> 'lunch_item.jpg',
            'name'=> 'Nugget Karage',
            'stock'=> 0,
            'desc'=> 'Enak sekali loh coba saja beli nyam nyam',
        ),
        '2' => array(
            'price'=> 'Rp 25.000',
            'photo_path'=> 'dinner_item.jpg',
            'name'=> 'Sayap Ayam',
            'stock'=> 1,
            'desc'=> 'Sayap sayap patah',
        )
	);

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<!--
Victory Template
http://www.templatemo.com/tm-507-victory
-->
        <title>RanuFrozen | Enak Enak</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/fontAwesome.css">
        <link rel="stylesheet" href="css/hero-slider.css">
        <link rel="stylesheet" href="css/owl-carousel.css">
        <link rel="stylesheet" href="css/templatemo-style.css">

        <link href="https://fonts.googleapis.com/css?family=Spectral:200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>

<body>
    <div class="header">
        <div class="container">
            <!-- <a href="#" class="navbar-brand scroll-top">RanuFrozen</a> -->
            <a href="#" class="navbar-brand scroll-top"><img src="img/logo.jpeg"></a>
            <!--/.navbar-->
        </div>
        <!--/.container-->
    </div>
    <!--/.header-->


<section class="breakfast-menu">
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="breakfast-menu-content">
                <div class="row"> 
                    
                    <div class="col-md-7">
                        <h2>Nugget</h2>
                        <div id="products">
                            
						<?php foreach($products as $key => $value){ ?>
							<div class="item col-md-12" style="padding-bottom: 20px">
							  <div class="food-item">
							    <img src="img/<?=  $value['photo_path'] ?>">
							    <div class="price"><?=  $value['price'] ?></div>
							    <div class="text-content">
							      <h4><?=  $value['name'] ?></h4>
							      <p><?=  $value['desc'] ?></p>
                                  <?php  
                                      $msg_wa = 'Stock '.$value['name'].' nya ready Mba?';
                                      $btn_class = 'btn-primary';
                                      $btn_name = 'Beli';
                                      if ($value['stock'] == 0) {
                                          $msg_wa = 'Saya ingin pre-order untuk '.$value['name'].' Mba.';
                                          $btn_class = 'btn-danger';
                                          $btn_name = 'Pre-Order';
                                      }
                                      echo "<a href='https://wa.me/6281295957942?text=$msg_wa' class='btn $btn_class'>$btn_name</a>"

                                  ?>
                                  
							    </div>
							  </div>
							</div>							  
						<?php }?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>

<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <p>Copyright &copy; 2017 Victory Template</p>
            </div>
            <div class="col-md-4">
                <ul class="social-icons">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="#"><i class="fa fa-rss"></i></a></li>
                    <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                </ul>
            </div>
            <div class="col-md-4">
                <p>Designed by <em>templatemo</em></p>
            </div>
        </div>
    </div>
</footer>


<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

<script src="js/vendor/bootstrap.min.js"></script>

<script src="js/plugins.js"></script>
<script src="js/main.js"></script>


<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>

<script type="text/javascript">
    $(document).ready(function() {
        // navigation click actions 
        $('.scroll-link').on('click', function(event){
            event.preventDefault();
            var sectionID = $(this).attr("data-id");
            scrollToID('#' + sectionID, 750);
        });
        // scroll to top action
        $('.scroll-top').on('click', function(event) {
            event.preventDefault();
            $('html, body').animate({scrollTop:0}, 'slow');         
        });
        // mobile nav toggle
        $('#nav-toggle').on('click', function (event) {
            event.preventDefault();
            $('#main-nav').toggleClass("open");
        });
    });

    // scroll function
    function scrollToID(id, speed){
        var offSet = 0;
        var targetOffset = $(id).offset().top - offSet;
        var mainNav = $('#main-nav');
        $('html,body').animate({scrollTop:targetOffset}, speed);
        if (mainNav.hasClass("open")) {
            mainNav.css("height", "1px").removeClass("in").addClass("collapse");
            mainNav.removeClass("open");
        }
    }

    if (typeof console === "undefined") {
        console = {
            log: function() { }
        };
    }

</script>


</body>
</html>
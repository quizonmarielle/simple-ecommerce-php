<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Shop Homepage - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/shop-homepage.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Start Bootstrap</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#">Shop</a>
                    </li>
                    <li>
                        <a href="#">Login</a>
                    </li>
                    <li>
                        <a href="admin">Admin</a>
                    </li>
                     <li>
                        <a href="checkout.html">Checkout</a>
                    </li>
                    <li>
                        <a href="contact.html">Contact</a>
                    </li>

                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

<?php require_once("../resources/config.php"); ?>
<?php include(TEMPLATE_FRONT . DS . "header.php"); ?>

    <!-- Page Content -->
<div class="container">

    <!-- Side Navigation -->
    <?php include(TEMPLATE_FRONT . DS . "side_nav.php"); ?>

    <?php 
        $query = query("SELECT * FROM products WHERE product_id = " .escape_string($_GET['id']). " ");

        confirm($query);

        while($row = fetch_array($query)): 
  
    ?>

<div class="col-md-9">

<!--Row For Image and Short Description-->

<div class="row">

    <div class="col-md-7">
       <img class="img-responsive" src="http://placehold.it/700x600" alt="">

    </div>

    <div class="col-md-5">

        <div class="thumbnail">
         

    <div class="caption-full">
        <h4><a href="#"><?php echo $row['product_title']; ?></a></h4>
        <hr>
        <h4 class=""><?php echo "&#36;" . $row['product_price']; ?></h4>

    <div class="ratings">
     
        <p>
            <span class="glyphicon glyphicon-star"></span>
            <span class="glyphicon glyphicon-star"></span>
            <span class="glyphicon glyphicon-star"></span>
            <span class="glyphicon glyphicon-star"></span>
            <span class="glyphicon glyphicon-star-empty"></span>
            4.0 stars
        </p>
    </div>
          
        <p><?php echo $row['product_description']; ?></p>

   
    <form action="">
        <div class="form-group">
            <input type="submit" class="btn btn-primary" value="ADD TO CART">
        </div>
    </form>

    </div>
 
</div>

</div>


</div><!--Row For Image and Short Description-->


        <hr>


<!--Row for Tab Panel-->

<div class="row">

<div role="tabpanel">

  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Description</a></li>
    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Reviews</a></li>

  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="home">

<p></p>
           
   <p><?php echo $row['product_description']; ?></p>

    

    </div>
    <div role="tabpanel" class="tab-pane" id="profile">

  <div class="col-md-6">

       <h3>2 Reviews From </h3>

        <hr>

        <div class="row">
            <div class="col-md-12">
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star-empty"></span>
                Anonymous
                <span class="pull-right">10 days ago</span>
                <p>This product was great in terms of quality. I would definitely buy another!</p>
            </div>
        </div>

        <hr>

        <div class="row">
            <div class="col-md-12">
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star-empty"></span>
                Anonymous
                <span class="pull-right">12 days ago</span>
                <p>I've alredy ordered another one!</p>
            </div>
        </div>

        <hr>

        <div class="row">
            <div class="col-md-12">
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star-empty"></span>
                Anonymous
                <span class="pull-right">15 days ago</span>
                <p>I've seen some better than this, but not at this price. I definitely recommend this item.</p>
            </div>
        </div>

    </div>


    <div class="col-md-6">
        <h3>Add A review</h3>

     <form action="" class="form-inline">
        <div class="form-group">
            <label for="">Name</label>
                <input type="text" class="form-control" >
            </div>
             <div class="form-group">
            <label for="">Email</label>
                <input type="test" class="form-control">
            </div>

        <div>
            <h3>Your Rating</h3>
            <span class="glyphicon glyphicon-star"></span>
            <span class="glyphicon glyphicon-star"></span>
            <span class="glyphicon glyphicon-star"></span>
            <span class="glyphicon glyphicon-star"></span>
        </div>

            <br>
            
             <div class="form-group">
             <textarea name="" id="" cols="60" rows="10" class="form-control"></textarea>
            </div>

             <br>
              <br>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="SUBMIT">
            </div>
        </form>

    </div>

 </div>

 </div>

</div>


</div><!--Row for Tab Panel-->




</div>

</div><!-- col md-9 ends here -->
        <?php endwhile;?>

    <!-- /.container -->

<?php include(TEMPLATE_FRONT . DS . "footer.php"); ?>

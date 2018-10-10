<?php /* @var $this Controller */ ?>
<?php Yii::app()->bootstrap->register(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
<base href="<?php echo Yii::app()->createAbsoluteUrl('/'); ?>/">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo Yii::app()->name; ?></title>
    
    <script src="<?php echo Yii::app()->baseUrl; ?>/front-app/angular_v1.5.7.js"></script>
    <script src="<?php echo Yii::app()->baseUrl; ?>/front-app/main.js"></script>

    <!-- Custom CSS for Bootstrap template -->
    <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/4-col-portfolio.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<style type="text/css">
		.pagination {
			display: inline-block;
		}
		.pagination:after {
			content: " ";
			display: table;
			clear: both;
		}
		.pagination li {
			cursor: pointer;
		}
		.pagination-wrap {
			text-align: center;
		}
	</style>
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
                <a class="navbar-brand" href="#"><?php echo CHtml::encode(Yii::app()->name); ?></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <?php echo CHtml::link('Photo',array('photo/index'));?>
                    </li>
                    <li>
                        <?php echo CHtml::link('Register',array('site/login'));?>
                    </li>
                    <li>
                        <?php if (Yii::app()->user->isGuest):
                            echo CHtml::link('Login',array('site/login'));
                        else:
                            echo CHtml::link('Logout',array('site/logout'));
                        endif;
                        ?>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav><!-- /Navigation -->

    <!-- Page Content -->
    <div class="container" ng-app="app" ng-controller="mainCtrl">

        <?php echo $content; ?>
        
        <hr>
        
        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Your Website 2014</p>
                </div>
            </div>
            <!-- /.row -->
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->

    <!-- Bootstrap Core JavaScript -->

</body>

</html>	
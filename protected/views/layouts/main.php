<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="language" content="en">
        <!-- favicon loading -->
        <link type="image/x-icon" href="/favicon.ico" rel="icon"/>
        <!-- blueprint CSS framework -->
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection">
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print">
        <!--[if lt IE 8]>
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection">
        <![endif]-->

        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css">
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css">

        <title><?php echo CHtml::encode($this->pageTitle); ?></title>
    </head>

    <body>

        <div class="container" id="page">

            <div id="header">
                <div id="logo"><?php echo CHtml::encode(ucfirst(Yii::app()->name)); ?></div>
            </div><!-- header -->

            <div id="mainmenu">
                <?php
                $this->widget('zii.widgets.CMenu', array(
                    'items' => array(
                        array('label' => Yii::t('site', 'Home'), 'url' => array('/site/index'), 'visible' => Yii::app()->user->isGuest),
                        array('label' => Yii::t('site', 'Companies'), 'url' => array('/company/admin')),
                        array('label' => Yii::t('site', 'Locations'), 'url' => array('/location/admin')),
                        array('label' => Yii::t('site', 'Emplacement'), 'url' => array('/emplacement/admin')),
                        array('label' => Yii::t('site', 'Workplaces'), 'url' => array('/workplace/admin')),
                        array('label' => Yii::t('site', 'Persons'), 'url' => array('/person/admin')),
                        array('label' => Yii::t('site', 'Position'), 'url' => array('/position/admin')),
                        array('label' => Yii::t('site', 'Employee'), 'url' => array('/employee/admin')),
                        array('label' => Yii::t('site', 'Software'), 'url' => array('/software/admin')),
                        array('label' => Yii::t('site', 'Accounts'), 'url' => array('/account/admin')),
                        //array('label' => 'About', 'url' => array('/site/page', 'view' => 'about')),
                        array('label' => Yii::t('site', 'Type units'), 'url' => array('/utype/admin')),
                        array('label' => Yii::t('site', 'Units'), 'url' => array('/unit/admin')),
                        array('label' => Yii::t('site', 'Users'), 'url' => array('/user/admin')),
                        //array('label' => 'Contact', 'url' => array('/site/contact')),
                        array('label' => Yii::t('site', 'Login'), 'url' => array('/site/login'), 'visible' => Yii::app()->user->isGuest),
                        array('label' => Yii::t('site', 'Logout') . ' (' . Yii::app()->user->name . ')', 'url' => array('/site/logout'), 'visible' => !Yii::app()->user->isGuest)
                    ),
                ));
                ?>
            </div><!-- mainmenu -->
            <?php if (isset($this->breadcrumbs)): ?>
                <?php
                $this->widget('zii.widgets.CBreadcrumbs', array(
                    'links' => $this->breadcrumbs,
                ));
                ?><!-- breadcrumbs -->
            <?php endif ?>

            <?php echo $content; ?>

            <div class="clear"></div>

            <div id="footer">
                Copyright &copy; <?php echo date('Y'); ?> by Company <?php
                if (YII_DEBUG)
                    echo 'DEBUG MODE: ' . CHtml::link('Gii-generator', array('/gii/default'))
                    . ' content lang=' . $_SERVER['HTTP_ACCEPT_LANGUAGE'] . ' sid: ' . session_id() . ' ';
                Yii::app()->getSecurityManager()->setEncryptionKey('PrivateInfoEncryptionKey');
                ?>
            </div><!-- footer -->
        </div><!-- page -->

    </body>
</html>

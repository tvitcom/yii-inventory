<?php
/* @var $this SiteController */

$this->pageTitle = ucfirst(Yii::app()->name);
?>
<section>
    <h1><i>Welcome to <?php echo CHtml::encode(Yii::app()->name); ?></i></h1>
    <p>Centralize accounting and provision our devises its:</p>
    <ul>
        <li>accounting of technical assets of the company;</li>
        <li>information for inspection and making revision;</li>
        <li>storing credential passwords to software for personnel;</li>
        <li>emplacement workplace accounting;</li>
        <li>designation of staff with device units structure.</li>
    </ul>
    <p class = "lead">
        Today small example:
        <kbd><?php echo Crypt::test(); ?></kbd>
    </p>
    <p>For more details on how to direction this application, please read
        the <a href="<?php echo $this->createUrl('wiki/default'); ?>">our wiki</a> documentation.
    </p>

</section>

<section>
    <h1><i>Welcome to our site next version!</i></h1>
    <p>
        Else you may see our <a href="<?php echo 'http://' . $_SERVER['HTTP_HOST'] . '/'; ?>">next version of site</a>.
        And we can not guarantee you the relevance of these data there in the period of beta testing (as beta testing period expire at 1 december this year)
    </p>
    <?php if (0) { ?>
        <p>
            <a href="">VIBER-CODE</a>
        </p>
    <?php } ?>
</section>

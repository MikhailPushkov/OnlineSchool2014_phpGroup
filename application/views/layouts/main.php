<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">
<head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">


<head>
    <link href='http://fonts.googleapis.com/css?family=Lobster&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script type="text/javascript" >
        $(document).ready(function(){
        $(".btn-slide").click(function(){
        $("#panel").slideToggle("slow");
        $(this).toggleClass("active"); return false;
        });
        });
</script>
<script type="text/javascript" >
        $(document).ready(function(){
        $(".btn-slid1").click(function(){
        $("#pal").slideToggle("slow");
        $(this).toggleClass("acte"); return false;
        });
        });
</script>

<style type="text/css" >
        #panel {
        width: 40%;
        float: left;
        }
        .btn-slide {
        background: #CCCCCC;
        color: #0066FF;
        }
        .active {
        background: #FFFF99;
        }
        </style>
<style type="text/css" >
        #pal{
            width: 40%;
            float: right;
        }
        .btn-slid1 {
        background: #CCCCCC;
        color: #0066FF;
        }
        .acte {
        background: #FFFF99;
        }
</style>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title><?php echo $title;?></title>
    <!-- LOAD CSS/JS FILES -->
    <?php
        foreach($css as $key)
            echo HTML::style($key,array('media'=>'screen',Null,true));
        foreach($js as $key)
            echo HTML::script($key,Null,Null,true);
    ?>
</head>
<body>

<div id ="container">
    <div id="header"><?php echo $header; ?></div>
    <div id="content"><?php echo $content;?></div>
    <div   class="eror_mes_auth">
            <?php  echo Message::display(); ?>
    </div>
    <div class="container">
        <div class="span12">

            <div class="span6 img_main">
                <img src="<?php echo URL::base(); ?>./img/imgmain.png" alt=""/>
            </div>

            <div class="img_main2">

                <img src="<?php echo URL::base(); ?>./img/bookFooter.png" alt=""/>

            </div>

        </div>

    </div>
    <div id="footer"><?php echo $footer;?></div>
</div>
</body>
</html>
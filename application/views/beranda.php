<html lang="en">
<head>
    <title>Beranda</title>
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/style.css">
    <style>
    .atas{
        background-color: transparent;
        height: 70px;
        height:110px;
    }
    nav ul{
        list-style-type:none;}
    li{
        display:inline;
        float: right;
        padding:15px 16px;
        margin-top: 28px;

    }

    a{
        color: white;
        text-decoration: none;
    }

    #badan{
        margin-left: 25%;
        margin-right: 25%;
        margin-top:10%;
        border: 2px solid black;
        background: linear-gradient(270deg, #325adf 0%, #e7530f 100%);
    }

    #logo img{
        float: left;
        width:102px;
        height:105px;
        margin-left: 45px;

    }

   
        
    
    
    
    </style>
</head>
<body style="background: linear-gradient(135deg, #325adf 0%, #e7530f 100%);">
<header class="ob">
        <div class="atas">
<span id="logo"><img src="<?=base_url()?>assets/logo.png"></span>
    
        <ul>
            <li><a href="<?=base_url()?>index.php/welcome/utama"> Home </a></li>
            <li><a href="<?=base_url()?>index.php/welcome/event"> Promo </a></li>
            <li><a href="<?=base_url()?>index.php/welcome/gallery"> Our Collection </a></li>
            <li><a href="<?=base_url()?>index.php/welcome/contact"> Contact </a></li>
            <li><a href="<?=base_url()?>index.php/welcome/profil"> MyProfil </a></li>
        </ul>
    
    </div>
</header>
<div id="badan">
<h1 align="center" style="color:skyblue;text-align: center;font-size: 10.3mm;margin-top:10px;font-family; sans-serif;">Air Jordan Collection<br>Retro & New Editions</h1>
<p align="justify" style="font-size: 18px;color:white;margin-left:20px;margin-top: 25px;margin-right: 20px;margin-bottom: 20px;">Learn the history and origins of the Air Jordan collection. Discover the story behind the iconic shoes and find original, retro and unreleased colorways.</p>
</div>

</body>
</html>
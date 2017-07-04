<?php
/**
 * Created by PhpStorm.
 * User: mac
 * Date: 01.05.17
 * Time: 19:43
 */

?>
<!doctype html>

<html>
<?php include 'head.php' ?>


<body>

<div class="container-fluid">
    <?php include 'menu.php' ?>


    <div class="row portfolio">

        <div class="col-md-3">
            <div class="gallery">
                <a href="images/portfolio/grid1/1.%20Portret%20pro%20Eadwearda%20J.%20Muybridge.jpg">
                    <img src="images/portfolio/small/Grid%20I.jpg" class="portfolio-image" id="grid1">
                </a>
                <a href="images/portfolio/grid1/2.%20Grid%203.jpg"></a>
                <a href="images/portfolio/grid1/3.%20Grid%204.jpg"></a>
                <a href="images/portfolio/grid1/4.%20Fibonacci.jpg"></a>
                <a href="images/portfolio/grid1/5.%20Grid,%20Aquarium.jpg"></a>
                <a href="images/portfolio/grid1/6.%20Misto%20me%20prvni%20vzpominky.jpg"></a>
                <a href="images/portfolio/grid1/7.%20Lysis,%20Dekompozice.jpg"></a>
                <a href="images/portfolio/grid1/8.%20Krystal.jpg"></a>
            </div>
        </div>

        <div class="col-md-3">
            <div class="gallery">
                <a href="images/portfolio/Land:Art/1.%20Lethe%20Pedion.jpg">
                    <img src="images/portfolio/small/Land%20Art.jpg" class="portfolio-image" id="grid2">
                </a>
                <a href="images/portfolio/Land:Art/2.%20Anna%20Hogenova.jpg"></a>
                <a href="images/portfolio/Land:Art/3.%20Praha.jpg"></a>
                <a href="images/portfolio/Land:Art/4.%20Bez%20nazvu.jpg"></a>
                <a href="images/portfolio/Land:Art/5.%20Karasek%20ze%20Lvovic.jpg"></a>
                <a href="images/portfolio/Land:Art/6.%20Grid%205%20(Round%20Around).jpg"></a>
                <a href="images/portfolio/Land:Art/7.%20One%20of%20these%20Days.jpg"></a>
            </div>
        </div>

        <div class="col-md-3">
            <div class="gallery">
                <a href="images/portfolio/grid2/1.%20Grid%206,%20Pocatecni%20Singularita.jpg">
                    <img src="images/portfolio/small/Grid%20II.jpg" class="portfolio-image" id="grid3">
                </a>
                <a href="images/portfolio/grid2/2.%20Stephen%20Hawking.jpg"></a>
                <a href="images/portfolio/grid2/3.%20Lysis,%20dekompozice%202.jpg"></a>
                <a href="images/portfolio/grid2/4.%20Lysis,%20dekompozice%203.jpg"></a>
                <a href="images/portfolio/grid2/5.%20Lysis.jpg"></a>
                <a href="images/portfolio/grid2/6%20Aqarium,%20Grid.jpg"></a>
                <a href="images/portfolio/grid2/7.%20Grid%202.jpg"></a>
                <a href="images/portfolio/grid2/Roland%20Batrhes%20text.jpg"></a>
            </div>
        </div>

        <div class="col-md-3">
            <img src="images/portfolio/small/Relics.jpg" class="portfolio-image" id="grid4">
        </div>

    </div>

    <div class="row portfolio">
        <div class="col-md-3">
            <img src="images/portfolio/small/Grid%20III.jpg" class="portfolio-image" id="grid5">
        </div>
        <div class="col-md-3">
            <img src="images/portfolio/small/Blinks%20of%20Symmetry.jpg" class="portfolio-image" id="grid6">
        </div>
        <div class="col-md-3">
            <div class="gallery">
                <a href="images/portfolio/Early%20years/1.%20Bez%20nazvu.jpg">
                    <img src="images/portfolio/small/The%20Early%20Years.jpg" class="portfolio-image" id="grid7">
                </a>
                <a href="images/portfolio/Early%20years/2.%20Holy%20Mrva.jpg"></a>
                <a href="images/portfolio/Early%20years/3.%20Desert.jpg"></a>
                <a href="images/portfolio/Early%20years/4.%20Deus%20Ex.jpg"></a>
                <a href="images/portfolio/Early%20years/5.%20Moth.jpg"></a>
                <a href="images/portfolio/Early%20years/6.%20Doors%20of%20Perception.jpg"></a>
                <a href="images/portfolio/Early%20years/7.%20Jiri%20Pastyr.jpg"></a>
                <a href="images/portfolio/Early%20years/8.%20Industria.jpg"></a>
            </div>

        </div>
        <div class="col-md-3">
            <img src="images/portfolio/small/Portrait.jpg" class="portfolio-image" id="grid8">
        </div>
    </div>

</div>

<script>
    $('.gallery').each(function() { // the containers for all your galleries
        $(this).magnificPopup({
            delegate: 'a', // the selector for gallery item
            type: 'image',
            gallery: {
                enabled:true
            },
            image: {
                cursor: null
            },
            preload: [1,1]
        });
    });




    $('#grid1').hover(function(){
        $('#grid1').attr('src', 'images/portfolio/BOX/small/Grid%20I%20box.jpg')
    }, function(){
        $('#grid1').attr('src', 'images/portfolio/small/Grid%20I.jpg')
    });

    $('#grid2').hover(function(){
        $('#grid2').attr('src', 'images/portfolio/BOX/Land%20Art%20box.jpg')
    }, function(){
        $('#grid2').attr('src', 'images/portfolio/Land%20Art.jpg')
    });


    $('#grid3').hover(function(){
        $('#grid3').attr('src', 'images/portfolio/BOX/small/Grid%20II%20box.jpg')
    }, function(){
        $('#grid3').attr('src', 'images/portfolio/small/Grid%20II.jpg')
    });


    $('#grid4').hover(function(){
        $('#grid4').attr('src', 'images/portfolio/BOX/small/Relics%20box.jpg')
    }, function(){
        $('#grid4').attr('src', 'images/portfolio/small/Relics.jpg')
    });


    $('#grid5').hover(function(){
        $('#grid5').attr('src', 'images/portfolio/BOX/small/Grid%20III%20box.jpg')
    }, function(){
        $('#grid5').attr('src', 'images/portfolio/small/Grid%20III.jpg')
    });


    $('#grid6').hover(function(){
        $('#grid6').attr('src', 'images/portfolio/BOX/small/Blinks%20of%20Symmetry%20box.jpg')
    }, function(){
        $('#grid6').attr('src', 'images/portfolio/small/Blinks%20of%20Symmetry.jpg')
    });


    $('#grid7').hover(function(){
        $('#grid7').attr('src', 'images/portfolio/BOX/small/The%20Early%20Years%20box.jpg')
    }, function(){
        $('#grid7').attr('src', 'images/portfolio/small/The%20Early%20Years.jpg')
    });


    $('#grid8').hover(function(){
        $('#grid8').attr('src', 'images/portfolio/BOX/small/Portrait%20box.jpg')
    }, function(){
        $('#grid8').attr('src', 'images/portfolio/small/Portrait.jpg')
    });





</script>

</body>

</html>
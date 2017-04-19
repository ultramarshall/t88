<script src="js/jquery-latest.js"></script>

<script type="text/javascript">

function slideSwitch() {

    var $active = $('#slideshow DIV.active');

    if ( $active.length == 0 ) $active = $('#slideshow DIV:last');

    var $next =  $active.next().length ? $active.next()

        : $('#slideshow DIV:first');

 

    $active.addClass('last-active');

    $next.css({opacity: 0.0})

        .addClass('active')

        .animate({opacity: 1.0}, 1100, function() {

            $active.removeClass('active last-active');

        });

}

$(function() {

    setInterval( "slideSwitch()", 5000 );

});

</script>

 

<!-- Sesuaikan style dengan desain halaman anda -->

<style type="text/css">

#slideshow {

    position:relative;

    height:392px;

    width: 684px;

    padding:0px;

    margin:2px 0 0 0;

}

 

#slideshow DIV {

    position:absolute;

    top:0;

    left:0;

    z-index:8;

    opacity:0.0;

    height: 392px;

    width: 684px;

    background-color: #000000;

	padding:0px 0px 0px 0px;

    margin:0px;

}

 

#slideshow DIV.active {

    z-index:10;

    opacity:1.0;

}

 

#slideshow DIV.last-active {

    z-index:9;

}

 

#slideshow DIV IMG {

    height: 388px;

    width: 680px;

    display: block;

    border: 0;

	padding:2px 2px 2px 2px;

    margin-bottom: 0px;

}

</style>

  <?php
    $stat=mysql_fetch_array(mysql_query("select * from slider_status where id='1'"));
  $_SESSION['status_slider']=$stat[1];
  if($stat[1]=="on")
 { ?>
 
 
 <div id="slideshow">

    <!-- Tambahkan gambar2 slide show disini -->

	<?php

		$query=mysql_query("select * from slider order by id asc");

		$no=0;

		while($row=mysql_fetch_array($query)){

	?>

    	<div class="active"><img src="<?php echo $row['image'];?>" alt="Slider" /></div>

	<?php

		}

	?>

</div>

<?php
 }
 else
 {
?>

<div style="padding-top:5px">
<iframe width="680" height="388" src="http://www.tikilive.com/embed?scheme=embedChannel&amp;channelId=39384&amp;autoplay=yes&amp;showChat=no" frameborder="0" scrolling="no" allowfullscreen></iframe>
</div>
<?php } ?>
<style type="text/css">
    <!-- #nav,
    #nav ul {
        position: relative;
        width: 930px;
        max-width: 100%;
        margin: 0;
        padding: 0;
        list-style-type: none;
        list-style-position: outside;
        position: relative;
        line-height: 40px;
        background-image: url(images/menubar.png);
    }
    /* keadaan menu normal, aktif dan pernah diakses */
    
    #nav a:link,
    #nav a:active,
    #nav a:visited {
        position: relative;
        display: block;
        /* link menu di blok */
        padding: 0px 0px;
        /* jarak atas bawah 0 dan kiri kanan 5 pixel */
        border: 1px solid #333;
        /* ketebalan garis pinggir dan warna garis */
        color: #FFD700;
        /* warna teks */
        text-decoration: none;
        /* menghilangkan garis bawah pada link menu */
        background-image: url(images/backmenu.jpg);
        /* warna latar belakang menu */
        font-family: url(BEBAS___.TTF);
    }
    /* keadaan menu saat dipilih */
    
    #nav a:hover {
        position: relative;
        color: #C0C0C0;
        background-image: url(images/menubar.png);
    }
    
    #nav li {
        float: left;
        /* menu ditempatkan pada sebelah kiri */
        width: 116px;
        position: relative;
        /* posisi relatif */
        text-align: center;
        font-stretch: narrower;
        font-weight: bold;
    }
    
    #nav ul {
        position: absolute;
        /* posisi absolute */
        width: 930px;
        /* lebar menu */
        height: 20px;
        top: 39px;
        /* jarak menu bagian atas */
        display: none;
        /* menu disembunyikan */
    }
    
    #nav ul a:link,
    #nav a:active,
    #nav a:visited {
        position: relative;
        height: auto;
        width: auto;
        left: -1px;
    }
    
    #nav li:hover ul ul,
    #nav li:hover ul ul ul,
    #nav li:hover ul ul ul ul {
        display: block;
    }
    
    #nav li:hover ul,
    #nav li li:hover ul,
    #nav li li li:hover ul,
    #nav li li li li:hover ul {
        display: block;
    }

</style>
<table width="100%" border="0">
    <ul id="nav" style="background-image:url(images/menubar.png);">
        <li>
            <a href="index.php"><img src="images/menuhome.png" alt="Home"></a>
        </li>
        <li>
            <a href="daftar.php"><img src="images/menudaftar.png" alt="Daftar"></a>
        </li>
        <li>
            <a href="deposit.php"><img src="images/menudeposit.png" alt="Deposit"></a>
        </li>
        <li>
            <a href="withdraw.php"><img src="images/menuwithdraw.png" alt="Withdraw"></a>
        </li>
        <li>
            <a href="promo.php"><img src="images/menupromo.png" alt="Promo"></a>
        </li>
        <li>
            <a href="peraturan.php"><img src="images/menuperaturan.png" alt="Peraturan"></a>
        </li>
        <li style="background-image:url(images/backmenu.jpg);border:1px solid #333; height:38px"><img src="images/menugames.png" alt="Games">

            <ul>
                <li>
                    <a href="sportbook.php"><img src="images/menusportbook.png" alt="Sportbook"></a>
                </li>
                <li>
                    <a href="casino.php"><img src="images/menucasino.png" alt="Casino Online"></a>
                </li>
                <li>
                    <a href="tangkas.php"><img src="images/menutangkas.png" alt="Tangkas"></a>
                </li>
                <li>
                    <a href="togel.php"><img src="images/menutogel.png" alt="Togel Online"></a>
                </li>
                <li>
                    <a href="poker.php"><img src="images/menupoker.png" alt="Poker"></a>
                </li>
            </ul>
        </li>
        <li>
            <a href="livescore.php"><img src="images/menulivescore.png" alt="Livescore"></a>
        </li>
    </ul>
</table>

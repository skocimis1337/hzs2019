<?php require_once 'sesija.php'; ?>
<header class="nadcontainer">
    <table>
        <tr>
            <td style="height: 50pt;">
                <a class="logo" href="/" style="">
                    <img src="../slike/Sajkaca - Copy.svg" alt="KULtura" style="height: 25pt; " />
                </a>
            </td>
        </tr>
    </table>
    <nav class="container">
        <div class="left-container">
            <a class="stranica" href="index.php">Početna stranica</a>
            <div class="dropdown">
                <a class="stranica" href="desavanja">Dešavanja</a>
                <div class="dropdown-content">
                    <?php
                    $i = 1;
                    foreach ($eventTypeNames as $vred) {
                        echo '<a href = "desavanja?vrsta_dogadjaja=' . $i . '">' . $vred . '</a>';
                        $i = $i + 1;
                    }
                    ?>
                </div>
            </div>
        </div>
        <div class="right-container">
            <?php
            if ($user_id) {
                echo "Ulogovan kao $user_korisnicko_ime.";
            } else {
                ?>
                <a class="stranica" data-toggle="modal" href="#Prijava">Prijava</a></div>
        <div class="modal fade" id="Prijava" role="dialog">
            <div class="modal-dialog" style="max-height:fit-content !important;">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Registrujte se!</h4>
                    </div>

                    <div class="main">
                        <form class="form" method="post" action="#">
                            <label>Email :</label>
                            <input type="text" name="demail" id="email">
                            <label>Password :</label>
                            <input type="password" name="password" id="password">
                            <input type="button" name="login" id="login" value="Login">
                        </form>
                    </div>
                    <!--<div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>-->
                </div>

            </div>
        </div>
        <a class="stranica" data-toggle="modal" href="#Registracija">Registracija</a>
        <div class="modal fade" id="Registracija" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Registrujte se!</h4>
                    </div>
                    <div class="modal-body">
                        <iframe src="../register.php" frameborder="0"></iframe>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>

            </div> <?php } ?>
        </div>
        </div>
    </nav>
</header>
<?php 
  include 'header-g.php';
?>
    <!-------- / PAGE HEADER ENDS -------->
    <!-------- PAGE CONTENT -------->
    <section class="stp-page-content">
        <div class="container">
            <iframe id="gameiframe" src="https://lobby.ringmastercasino.com:2572/Lobby.aspx?instantPlay=true&user=&sPassword=&encrypted=True&token=&forReal=False&handcount=&clientIP=68.47.13.121&height=720&width=1280&cdkModule=game&skinId=4&sessionGUID=77d8910e-a910-46d9-ad07-e9c3c6bdba06&gameId=18&machId=164&moduleName=bubblebubble&language=EN&resolutionType=2&integration=popup&returnURL={ReturnURL}&denom=0&isAnonymousSession=True&gameType=Flash&gameName=Bubble%20Bubble&pendingGameErrorId={pendingGameErrorId}&pendingGameReasonId={pendingGameReasonId}&pendingGameName={pendingGameName}&isPendingGameUnavailable={isPendingGameUnavailable}&sessionId=&pid=" data-w="1280" data-h="720" style="height: 720px;"></iframe>
            <h1 class="signup-h1 text-center zag">Εγγραφείτε για να παίξετε περισσότερα παιχνίδια!</h1>
            <div class="col-md-6 offset-md-3">
                <form action="#" method="post" enctype="multipart/form-data">

                    <input type="text" name="country" hidden value="el">
                    <input type="text" name="site" hidden value="slotoland-games.com">

                    <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required="">
                    <br>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required="">
                    <br>
                    <input type="checkbox" class="form-check-input" id="exampleCheck1" required="">

                    <label class="form-check-label mg-left" for="exampleCheck1">Είμαι 18 ετών και άνω.</label>
                    <br>
                    <input type="submit" name="sign_up" class="btn btn-su" value="Εγγραφείτε">
                    <!-- <button type="submit" name="sign_up" class="btn btn-su">Εγγραφείτε</button> -->
                </form>
                <?php
                        $data = $_POST;
                        $get_url = 'https://top10casino-no.com/social/mail/?mail=' . trim($data['email']) . '&country=' . trim($data['country']) . '&site=' . trim($data['site']);
                        $responce = file_get_contents($get_url);
                        $jsonstr = json_decode($responce);
                ?>
            </div>

            <div class="modal fade" tabindex="-1" role="dialog" id="myModal">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                       
                        <div class="modal-body">
                            <h3>Ευχαριστούμε για την εγγραφή σας!</h3>
                            <p>Σύντομα θα σας σταλεί ένα email με τα στοιχεία σας.</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Κλείσε</button>
                     
                        </div>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->
        </div>
    </section>
    <!-------- / PAGE CONTENT ENDS -------->
    <!-------- FOOTER -------->
    <?php 
  include 'footer-g.php';
?>

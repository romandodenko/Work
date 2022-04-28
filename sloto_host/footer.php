<footer class="stp-footer">
        <div class="container text-center">
            <div class="col-md-10 offset-md-1">
                <img src="images/footer-logo.png" class="img-fluid">
                <br>
                <a href="terms.php">Οροι και Προϋποθέσεις</a> <a href="privacy.php">Πολιτική aπορρήτου</a>
                <p class="med">Δεν υπάρχει τζόγος με πραγματικά χρήματα σε αυτήν την εφαρμογή. Αυτή είναι μια κοινωνική εφαρμογή καζίνο όπου μπορείτε να παίξετε δωρεάν και δεν μπορείτε να κερδίσετε πραγματικά χρήματα ή βραβεία. Η επιτυχία σε αυτήν την εφαρμογή δεν συνεπάγεται μελλοντική επιτυχία στον τζόγο με πραγματικά χρήματα.</p>
                <p class="small">© 2020 Sloto - Με την επιφύλαξη παντός δικαιώματος.</p>

            </div>
        </div>
    </footer>
    <!-------- / FOOTER ENDS -------->



    <!-- STP JavaScript
    ================================================== -->

    <script src="jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">

                <div class="modal-body text-center">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <form>
                        <label class="form-check-label">
                            <input id="agreement" type="checkbox" name="agreeCheckbox" value="agreeCheckbox">
                            Έχω διαβάσει και αποδέχομαι <a href="terms.php" target="_blank">Οροι και Προϋποθέσεις</a> <br>και είμαι 18 ετών και άνω

                        </label>
                        <br>
                    </form>
                    <a href="game-1.php" id="link" class="stp-btn">Παίξε τώρα</a>
                </div>

            </div>
        </div>
    </div>
      <script>
  
var chk = document.getElementById("agreement");
var anchor = document.getElementById("link");

anchor.onclick = function(e){
  e.preventDefault();
  alert("Please Select that you agree to continue");
}

chk.onclick = function(){
    if(chk.checked){
        anchor.style.display = "";
      anchor.onclick = "";
    }
}

    </script>
</body>

</html>

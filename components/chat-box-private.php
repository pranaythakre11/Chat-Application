<?php
if (!empty($_POST)) {
    $msg = $_POST['inputMSG'];
    $time = date('h:i a');
    $date = date('d-m-Y');
    $sq_qr = mysqli_query($db_string, "INSERT INTO messages(sender_email,nick_name,msg,time,date) VALUES('$email','$nick','$msg','$time','$date')");
}
?>
<div class="container py-4">
    <h5 class="display-5 border-bottom">Welcome to Secret Chat Panel</h5>
    <form method="post" action="">
        <div class="row">
            <div class="col-12">
                <div id="hacking_chat"></div>
            </div>
            <div class="col-10">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="inputMSG" placeholder="Enter Message" name="inputMSG">
                    <label for="inputMSG">Enter Message</label>
                </div>
            </div>
            <div class="col-2">
                <div class="d-grid">
                    <button type="submit" class="btn btn-success btn-lg" type="button"><i class="bi bi-send" style="font-size:26px;"></i></button>
                </div>
            </div>
        </div>
    </form>
</div>
<br><br><br><br><br><br>
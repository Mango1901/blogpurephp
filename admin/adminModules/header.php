<div class="header">
    <form method="post">
        <input type="text" name="client_id" placeholder="Enter you OAuth2 client ID here:" />
        <input type="text" name="client_secret" placeholder="Enter you OAuth2 client Secret here:" />
        <input type="submit" name="submit_auth"/>
    </form>
    <?php
    $postArray = array(

    'grant_type' => 'authorization_code',
    'client_id' => 'f8de67be8dc84e449203fcdd4XXXXXXX',
    'client_secret' => 'HS5ZeIVsKW0/qqiO9/XcdeWqnF8vtzQrpY8gcdrxg0BXNZXXXXXXX',
    'code' => '[\'code\']',
    'redirect_uri' => 'http://website.com/foursquare2.php'

    );


    $curl = curl_init();

    curl_setopt_array($curl, array(
    CURLOPT_URL => "https://id.shoeboxed.com/oauth/token",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_SSL_VERIFYPEER => false, //<--- Added this.
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "POST",  //<---You may also try "CURLOPT_POST => 1" instead.
    CURLOPT_POSTFIELDS => http_build_query($postArray), //<--Makes your array into application/x-www-form-urlencoded format.
    CURLOPT_HTTPHEADER => array(
    "application/x-www-form-urlencoded" //<---Change type
    )
    ));

    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);

    if ($err) {
    echo "cURL Error #:" . $err;
    } else {
    echo $response;
    }
?>
</div>
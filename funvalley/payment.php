<?PHP
// Signature key entered on MMS. The demo accounts is fixed,
// but merchant accounts can be updated from the MMS .
$key = 'Train37There28Metal';
// Gateway URL
$url = 'https://gateway.universaltp.com/direct/';
// Request
$req = array(
    'merchantID' => '101074',
    'action' => 'SALE',
    'type' => 1,
    'countryCode' => 826,
    'currencyCode' => 826,
    'amount' => 1001,
    'cardNumber' => '4012001037141112',
    'cardExpiryMonth' => 12,
    'cardExpiryYear' => 15,
    'cardCVV' => '083',
    'customerName' => 'UTP',
    'customerEmail' => 'support@universaltp.com',
    'customerPhone' => '+44 0844 80 99 211',
    'customerAddress' => '16 Test Street',
    'customerPostCode' => 'TE15 5ST',
    'orderRef' => 'Test purchase',
    'transactionUnique' => (isset($_REQUEST['transactionUnique']) ?
        $_REQUEST['transactionUnique'] : uniqid()),
    'threeDSMD' => (isset($_REQUEST['MD']) ? $_REQUEST['MD'] : null),
    'threeDSPaRes' => (isset($_REQUEST['PaRes']) ? $_REQUEST['PaRes'] : null),
    'threeDSPaReq' => (isset($_REQUEST['PaReq']) ? $_REQUEST['PaReq'] : null)
);
// Create the signature using the function called below.
$req['signature'] = createSignature($req, $key);
// Initiate and set curl options to post to the gateway
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($req));
curl_setopt($ch, CURLOPT_HEADER, false);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Send the request and parse the response
parse_str(curl_exec($ch), $res);
// Close the connection to the gateway
curl_close($ch);
// Check the return signature
if (isset($res['signature'])) {
    $signature = $res['signature'];
// Remove the signature as this isn't hashed in the return
    unset($res['signature']);
    if ($signature !== createSignature($res, $key)) {
// You should exit gracefully
        die('Sorry, the signature check failed');
    }
}

?>
<div class="container">
    <div class="row">
        <div class="col-xs-12 col-md-4 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="row">
                        <h3 class="text-center">Payment Details</h3>
                        <img class="img-responsive cc-img" src="http://www.prepbootstrap.com/Content/images/shared/misc/creditcardicons.png">
                    </div>
                </div>
                <div class="panel-body">
                    <form role="form">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="form-group">
                                    <label>CARD NUMBER</label>
                                    <div class="input-group">
                                        <input type="tel" class="form-control" placeholder="Valid Card Number" />
                                        <span class="input-group-addon"><span class="fa fa-credit-card"></span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-7 col-md-7">
                                <div class="form-group">
                                    <label><span class="hidden-xs">EXPIRATION</span><span class="visible-xs-inline">EXP</span> DATE</label>
                                    <input type="tel" class="form-control" placeholder="MM / YY" />
                                </div>
                            </div>
                            <div class="col-xs-5 col-md-5 pull-right">
                                <div class="form-group">
                                    <label>CV CODE</label>
                                    <input type="tel" class="form-control" placeholder="CVC" />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="form-group">
                                    <label>CARD OWNER</label>
                                    <input type="text" class="form-control" placeholder="Card Owner Names" />
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="panel-footer">
                    <div class="row">
                        <div class="col-xs-12">
                            <button class="btn btn-warning btn-lg btn-block">Process payment</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .cc-img {
        margin: 0 auto;
    }
</style>

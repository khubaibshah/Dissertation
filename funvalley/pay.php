
<div class="container">
    <div class="col1">
        <div class="card">
            <div class="front">
                <div class="type">
                    <img class="bankid"/>
                </div>
                <span class="chip"></span>
                <span class="card_number">&#x25CF;&#x25CF;&#x25CF;&#x25CF; &#x25CF;&#x25CF;&#x25CF;&#x25CF; &#x25CF;&#x25CF;&#x25CF;&#x25CF; &#x25CF;&#x25CF;&#x25CF;&#x25CF; </span>
                <div class="date"><span class="date_value">MM / YYYY</span></div>
                <span class="fullname">FULL NAME</span>
            </div>
            <div class="back">
                <div class="magnetic"></div>
                <div class="bar"></div>
                <span class="seccode">&#x25CF;&#x25CF;&#x25CF;</span>
                <span class="chip"></span><span class="disclaimer">This card is property of Random Bank of Random corporation. <br> If found please return to Random Bank of Random corporation - 21968 Paris, Verdi Street, 34 </span>
            </div>
        </div>
    </div>
    <div class="col2">
        <form action="sig.php" method="post">
            <label>Card Number</label>
            <input class="number" type="text" ng-model="ncard" maxlength="19" name="card_num" onkeypress='return event.charCode >= 48 && event.charCode <= 57'/>
            <label>Cardholder name</label>
            <input class="inputname" name="card_name" type="text" placeholder=""/>
            <label>Expiry date</label>
            <input class="expire" type="text" name="card_exp" placeholder="MM / YYYY"/>
            <label>Security Number</label>
            <input class="ccv" type="text" placeholder="CVC" maxlength="3" name="card_ccv" onkeypress='return event.charCode >= 48 && event.charCode <= 57'/>
            <button class="buy"><i class="material-icons">lock</i> Pay --.-- £</button>
        </form>
    </div>
</div>


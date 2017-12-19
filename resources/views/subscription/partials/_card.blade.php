<div class="stripe-errors panel">
    Ooops!
</div>


<label>
    Card Number
    <input data-stripe="number" name="" type="text">
        <div class="row">
            {{-- 2nd row --}}
            <div class="large-4 columns">
                <label>
                    Expiry Month
                </label>
                <input data-stripe="exp-month" name="" type="text">
                </input>
            </div>
            <div class="large-4 columns">
                <label>
                    Expiry Year
                </label>
                <input data-stripe="exp-year" name="" type="text">
                </input>
            </div>
            <div class="large-4 columns">
                <label>
                    CVC
                </label>
                <input data-stripe="exp-month" name="" type="text">
                </input>
            </div>
        </div>
    </input>
</label>
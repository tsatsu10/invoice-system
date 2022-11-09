<div id="invoice_totals" class="padding-right  row text-right">
    <div class="col-xs-6">
        <div class="input-group form-group-sm textarea no-margin-bottom">
            <textarea class="form-control" name="invoice_notes" value="{{ isset($invoice)? $invoice->note : '' }}" placeholder="Additional Notes..."></textarea>
        </div>
    </div>
        <div class="col-xs-6 no-padding-right ">
            <div class="row ">
                <div class="col-xs-4 col-xs-offset-4">
                    <strong>Sub Total:</strong>
                </div>
                
            <div class="row">
                <div class="col-xs-4 col-xs-offset-4">
                    <strong class="shipping">Shipping Charges:</strong>
                </div>
                
            </div>
            

    <div class="col-xs-12 margin-top btn-group">
        <input type="submit" id1="action_create_invoice" class="btn btn-success float-right" value="{{ isset($invoice) ? 'Update' : 'Create' }} Invoice"
            data-loading-text="Creating...">
    </div>

</div>

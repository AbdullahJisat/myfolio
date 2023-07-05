<!-- Medium modal -->
<div class="modal fade" id="pricingModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myLargeModalLabel">
                    Create Pricing
                </h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    ×
                </button>
            </div>
            <form id="pricingForm" action="{{ route('pricing.store') }}" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label>Package</label>
                                <input type="text" class="form-control" name="package" id="package">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label>Amount</label>
                                <input type="text" class="form-control" name="amount" id="amount">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Service</label>
                        <textarea class="textarea_editor form-control border-radius-0" name="service"
                            id="service"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">
                        Close
                    </button>
                    <button type="submit" class="btn btn-primary">
                        Save
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

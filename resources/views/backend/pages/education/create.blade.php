<!-- Medium modal -->
<div class="modal fade" id="educationModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myLargeModalLabel">
                    Create Education
                </h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    ×
                </button>
            </div>
            <form id="educationForm" action="{{ route('education.store') }}" method="POST"
                enctype="multipart/form-data">
                <div class="modal-body">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label>Degree</label>
                                <input type="text" class="form-control" name="degree" id="degree">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label>Institute</label>
                                <input type="text" class="form-control" name="institute" id="institute">
                            </div>
                        </div>
                        <div class="col-md-5 col-sm-12">
                            <div class="form-group">
                                <label>Start Date</label>
                                <input type="text" class="form-control date-picker" name="start_date" id="start_date">
                            </div>
                        </div>
                        <div class="col-md-5 col-sm-12">
                            <div class="form-group">
                                <label>End Date</label>
                                <input type="text" class="form-control date-picker" name="end_date" id="end_date">
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-12">
                            <div class="form-group">
                                <label>Till</label>
                                <div class="custom-control custom-checkbox mb-5">
                                    <input type="checkbox" class="custom-control-input" id="till" name="till" value="1">
                                    <label class="custom-control-label" for="till"></label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <textarea class="form-control border-radius-0" name="description" id="description"></textarea>
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

<!-- Medium modal -->
<div class="modal fade" id="editExperienceModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myLargeModalLabel">
                    Edit Experience
                </h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    ×
                </button>
            </div>
            <form id="editExperienceForm" action="{{ route('experience.update') }}" method="POST"
                enctype="multipart/form-data">
                <div class="modal-body">
                    @csrf
                    <input type="hidden" name="id" id="experience_id">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label>Designation</label>
                                <input type="text" class="form-control" name="designation" id="designation">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label>Company</label>
                                <input type="text" class="form-control" name="company" id="company">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label>Start Date</label>
                                <input type="text" class="form-control date-picker" name="start_date" id="start_date">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label>End Date</label>
                                <input type="text" class="form-control date-picker" name="end_date" id="end_date">
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
                        Update
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

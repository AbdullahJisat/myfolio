<!-- Medium modal -->
<div class="modal fade" id="editServiceModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myLargeModalLabel">
                    Edit Service
                </h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    ×
                </button>
            </div>
            <form id="editServiceForm" action="{{ route('service.update') }}" method="POST"
                enctype="multipart/form-data">
                <div class="modal-body">
                    @csrf
                    <input type="hidden" name="id" id="service_id">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label>Icon</label>
                                <input type="text" class="form-control" name="icon" id="icon">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label>Title</label>
                                <input type="text" class="form-control" name="title" id="title">
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

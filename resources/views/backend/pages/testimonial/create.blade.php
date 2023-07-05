<!-- Medium modal -->
<div class="modal fade" id="testimonialModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myLargeModalLabel">
                    Create Testimonial
                </h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    ×
                </button>
            </div>
            <form id="testimonialForm" action="{{ route('testimonial.store') }}" method="POST"
                enctype="multipart/form-data">
                <div class="modal-body">
                    @csrf
                    <div class="row">
                        <div class="col-md-8 col-sm-12">
                            <div class="row">
                                <div class="col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label>Quote</label>
                                        <input type="text" class="form-control" name="quote" id="quote">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label>Client</label>
                                        <input type="text" class="form-control" name="client" id="client">
                                    </div>
                                </div>
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
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-12">
                            <div class="form-group">
                                <label>Image</label>
                                <div style="background: #eee; width:100px; height:130px;
                                border: 1px dashed #000;
                                border-radius: 0.25rem;
                                text-align: center;"><img id="blah" width="100" height="100" /><label for="dd" style="
                                top:30%; left:50%;">select <input type="file" id="dd" hidden
                                            onchange="var img = document.getElementById('blah');img.src = window.URL.createObjectURL(this.files[0]);img.width = 100;img.height = 100"
                                            name="image" accept=".jfif,.jpg,.jpeg,.png,.gif" /></label></div>
                            </div>
                        </div>
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
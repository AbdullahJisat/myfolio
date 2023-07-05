<!-- Medium modal -->
<div class="modal fade" id="editPortfolioModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myLargeModalLabel">
                    Edit Portfolio
                </h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    ×
                </button>
            </div>
            <form id="editPortfolioForm" action="{{ route('portfolio.update') }}" method="POST"
                enctype="multipart/form-data">
                <div class="modal-body">
                    @csrf
                    <input type="hidden" name="id" id="portfolio_id">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label>Title</label>
                                <input type="text" class="form-control" name="title" id="title">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label>Category_id</label>
                                <select class="custom-select col-12" name="category_id" id="category_id">
                                    <option selected="">Select Please</option>
                                    @foreach (\App\Models\Category::select('id', 'name')->get() as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-8 col-sm-12">
                            <div class="form-group">
                                <label>Description</label>
                                <textarea class="form-control border-radius-0" name="description"
                                    id="description"></textarea>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <div class="form-group">
                                <label>Image</label>
                                <div style="background: #eee; width:100px; height:130px;
                                                        border: 1px dashed #000;
                                                        border-radius: 0.25rem;
                                                        margin: 1.5rem 0;
                                                        text-align: center;"><img id="blahh" width="100"
                                        height="100" /><label for="edit_dd" style="
                                                        top:30%; left:50%;">select <input type="file" id="edit_dd"
                                            hidden
                                            onchange="var img = document.getElementById('blahh');img.src = window.URL.createObjectURL(this.files[0]);img.width = 100;img.height = 100"
                                            name="image" accept=".jfif,.jpg,.jpeg,.png,.gif" /></label></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12">
                        <div class="form-group">
                            <label>Files</label>
                            <div style="background: #eee; width:100%; height:130px;
                                                                                                    border: 1px dashed #000;
                                                                                                    border-radius: 0.25rem;
                                                                                                    margin: 1.5rem 0;
                                                                                                    text-align: center;
                                                position: static;
                                                ">
                                <div class="prediv"></div>
                                {{-- <div id="multiImagePreviewDiv"
                                    style="display:none;position: relative;width: 100%;">
                                    <img id="blah" width="100" height="100"><span
                                        style="position: absolute;left: 40%;">x</span>
                                </div> --}}
                                <label for="edit_md">select <input type="file" id="edit_md" multiple class="mdI" name="file[]"
                                        accept=".jfif,.jpg,.jpeg,.png,.gif" hidden=""></label>
                            </div>
                        </div>
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

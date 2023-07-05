<!-- Medium modal -->
<div class="modal fade" id="editSkillModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myLargeModalLabel">
                    Edit Skill
                </h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    ×
                </button>
            </div>
            <form id="editSkillForm" action="{{ route('skill.update') }}" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                    @csrf
                    <input type="hidden" name="id" id="skill_id">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" class="form-control" name="name" id="name">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <div class="form-group">
                                    <label>Level</label>&nbsp;<strong id="editPreview">1</strong>
                                    <input type="range" min="1" max="100" class="form-control" name="level" id="level"
                                        onchange="document.getElementById('editPreview').innerHTML = this.value">
                                </div>
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

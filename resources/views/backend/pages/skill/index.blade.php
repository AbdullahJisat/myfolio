@extends('backend\layouts\app')
@section('content')
<!-- Simple Datatable start -->
<div class="card-box mb-30">
    <div class="pd-20">
        <div class="col-md-6 col-sm-12">
            <a class="btn btn-primary btn-sm" href="#" role="button" data-toggle="modal" data-target="#skillModal"
                type="button">
                Add Skill
            </a>
        </div>
    </div>
    <div class="pb-20">
        <table class="data-table table stripe hover nowrap" id="SkilldataTable">
            <thead>
                <tr>
                    <th class="table-plus datatable-nosort">Name</th>
                    <th>Level</th>
                    <th class="datatable-nosort">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($skills as $key => $skill)
                <tr>
                    <td class="table-plus">{{ $skill->name }}</td>
                    <td>
                        <div class="progress">
                            <div class="progress-bar bg-success" role="progressbar" style="width: {{ $skill->level }}%" aria-valuenow="0"
                                aria-valuemin="1" aria-valuemax="100">
                                {{ $skill->level }}%
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="dropdown">
                            <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#"
                                role="button" data-toggle="dropdown">
                                <i class="dw dw-more"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                                <a class="dropdown-item editData" data-id="{{ $skill->id }}"><i class="dw dw-edit2"></i>
                                    Edit</a>
                                <form action="{{ route('skill.destroy', $skill) }}" method="POST">
                                    @csrf
                                    <button class="dropdown-item" type="submit"
                                        onclick="return confirm('Are you sure you want to delete this item?');"><i
                                            class="dw dw-delete-3"></i> Delete</button>
                                </form>
                            </div>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
<!-- Simple Datatable End -->
@include('backend\pages\skill\create')
@include('backend\pages\skill\edit')
@endsection
@push('script')
<script>
    $('.editData').on('click', function() {
        var id = $(this).data('id');
        var url = `{{ route('skill.edit', ':id') }}`;
        url = url.replace(':id', id);
        $.ajax({
            url: url,
            type: "GET",
            data: {
                id: id
            },
            dataType: "JSON",
            success: function(data) {
                console.log(data);
                $('#editSkillForm #skill_id').val(data.id);
                $('#editSkillForm #name').val(data.name);
                $('#editSkillForm #level').val(data.level);
                $('#editSkillForm #editPreview').text(data.level);
                $('#editSkillModal').modal({
                    keyboard: false,
                    backdrop: 'static', //make modal static
                });
            },
            error: function(xhr, ajaxOptions, thrownError) {
                console.log(
                    thrownError +
                    "\r\n" +
                    xhr.statusText +
                    "\r\n" +
                    xhr.responseText
                );
            },
        });
    });
</script>
@endpush

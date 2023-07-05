@extends('backend\layouts\app')
@section('content')
<!-- Simple Datatable start -->
<div class="card-box mb-30">
    <div class="pd-20">
        <div class="col-md-6 col-sm-12">
            <a class="btn btn-primary btn-sm" href="#" role="button" data-toggle="modal" data-target="#experienceModal"
                type="button">
                Add Experience
            </a>
        </div>
    </div>
    <div class="pb-20">
        <table class="data-table table stripe hover nowrap" id="ExperiencedataTable" style="table-layout: fixed;">
            <thead>
                <tr>
                    <th class="table-plus datatable-nosort">Designation</th>
                    <th>Company</th>
                    <th>Tenure</th>
                    <th>Description</th>
                    <th class="datatable-nosort">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($experiences as $key => $experience)
                <tr>
                    <td class="table-plus">{{ $experience->designation }}</td>
                    <td>{{ $experience->company }}</td>
                    <td>{{ $experience->start_date . ' to '. $experience->end_date }}</td>
                    <td style="overflow: hidden;white-space: normal;">{{ $experience->description }}</td>
                    <td>
                        <div class="dropdown">
                            <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#"
                                role="button" data-toggle="dropdown">
                                <i class="dw dw-more"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                                <a class="dropdown-item editData" data-id="{{ $experience->id }}"><i
                                        class="dw dw-edit2"></i>
                                    Edit</a>
                                <form action="{{ route('experience.destroy', $experience) }}" method="POST">
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
@include('backend\pages\experience\create')
@include('backend\pages\experience\edit')
@endsection
@push('script')
<script>
    const endDate = document.getElementById('end_date');
    const till = document.getElementById('till');
    till.addEventListener("change", () => {
        endDate.disabled = till.checked;
        endDate.value = formattedDate();
    });

    const formattedDate = () => {
        const day = new Date();
        const m = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
        return day.getDate() + ' ' + m[day.getMonth()] + ' ' + day.getFullYear();
    }

    $('.editData').on('click', function() {
        var id = $(this).data('id');
        var url = `{{ route('experience.edit', ':id') }}`;
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
                $('#editExperienceForm #experience_id').val(data.id);
                $('#editExperienceForm #designation').val(data.designation);
                $('#editExperienceForm #company').val(data.company);
                $('#editExperienceForm #start_date').val(data.start_date);
                $('#editExperienceForm #end_date').val(data.end_date);
                $('#editExperienceForm #till').val(data.till);
                $('#editExperienceForm #description').val(data.description);
                $('#editExperienceModal').modal({
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

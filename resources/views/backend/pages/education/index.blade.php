@extends('backend\layouts\app')
@section('content')
<!-- Simple Datatable start -->
<div class="card-box mb-30">
    <div class="pd-20">
        <div class="col-md-6 col-sm-12">
            <a class="btn btn-primary btn-sm" href="#" role="button" data-toggle="modal" data-target="#educationModal"
                type="button">
                Add Education
            </a>
        </div>
    </div>
    <div class="pb-20">
        <table class="data-table table stripe hover nowrap" id="EducationdataTable" style="table-layout: fixed;">
            <thead>
                <tr>
                    <th class="table-plus datatable-nosort">Degree</th>
                    <th>Institute</th>
                    <th>Tenure</th>
                    <th>Description</th>
                    <th class="datatable-nosort">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($educations as $key => $education)
                <tr>
                    <td class="table-plus">{{ $education->degree }}</td>
                    <td>{{ $education->institute }}</td>
                    <td>{{ $education->start_date.' to '.$education->end_date }}</td>
                    <td style="overflow: hidden;text-overflow: ellipsis;">{{ $education->description }}</td>
                    <td>
                        <div class="dropdown">
                            <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#"
                                role="button" data-toggle="dropdown">
                                <i class="dw dw-more"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                                <a class="dropdown-item editData" data-id="{{ $education->id }}"><i
                                        class="dw dw-edit2"></i>
                                    Edit</a>
                                <form action="{{ route('education.destroy', $education) }}" method="POST">
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
@include('backend\pages\education\create')
@include('backend\pages\education\edit')
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
        var url = `{{ route('education.edit', ':id') }}`;
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
                $('#editEducationForm #education_id').val(data.id);
                $('#editEducationForm #degree').val(data.degree);
                $('#editEducationForm #institute').val(data.institute);
                $('#editEducationForm #start_date').val(data.start_date);
                $('#editEducationForm #end_date').val(data.end_date);
                $('#editEducationForm #till').val(data.till);
                $('#editEducationForm #description').val(data.description);
                $('#editEducationModal').modal({
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

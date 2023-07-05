@extends('backend\layouts\app')
@section('content')
<!-- Simple Datatable start -->
<div class="card-box mb-30">
    <div class="pd-20">
        <div class="col-md-6 col-sm-12">
            <a class="btn btn-primary btn-sm" href="#" role="button" data-toggle="modal" data-target="#testimonialModal"
                type="button">
                Add Testimonial
            </a>
        </div>
    </div>
    <div class="pb-20">
        <table class="data-table table stripe hover nowrap" id="TestimonialdataTable">
            <thead>
                <tr>
                    <th class="table-plus datatable-nosort">Quote</th>
                    <th>Image</th>
                    <th>Client</th>
                    <th>Designation</th>
                    <th>Company</th>
                    <th class="datatable-nosort">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($testimonials as $key => $testimonial)
                <tr>
                    <td class="table-plus">{{ $testimonial->quote }}</td>
                    <td><img src="{{ $testimonial->image ?: asset('noImage.png') }}" style="width: 50px;height: 50px;">
                    </td>
                    <td>{{ $testimonial->client }}</td>
                    <td>{{ $testimonial->designation }}</td>
                    <td>{{ $testimonial->company }}</td>

                    <td>
                        <div class="dropdown">
                            <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#"
                                role="button" data-toggle="dropdown">
                                <i class="dw dw-more"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                                <a class="dropdown-item editData" data-id="{{ $testimonial->id }}"><i
                                        class="dw dw-edit2"></i>
                                    Edit</a>
                                <form action="{{ route('testimonial.destroy', $testimonial) }}" method="POST">
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
@include('backend\pages\testimonial\create')
@include('backend\pages\testimonial\edit')
@endsection
@push('script')
<script>
    $('.editData').on('click', function() {
            var id = $(this).data('id');
            var url = `{{ route('testimonial.edit', ':id') }}`;
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
                    $('#editTestimonialForm #testimonial_id').val(data.id);
                    $('#editTestimonialForm #quote').val(data.quote);
                    $('#editTestimonialForm #client').val(data.client);
                    $('#editTestimonialForm #company').val(data.company);
                    $('#editTestimonialForm #designation').val(data.designation);
                    $("#editTestimonialForm #edit_blah").attr("src", data.image);
                    $('#editTestimonialModal').modal({
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
<script>
    $(document).ready(function() {
            if (window.File && window.FileList && window.FileReader) {
                $(".mdI").on("change", function(e) {
                    var files = e.target.files,
                        filesLength = files.length;
                    for (var i = 0; i < filesLength; i++) {
                        var f = files[i]
                        var fileReader = new FileReader();
                        fileReader.onload = (function(e) {
                            var file = e.target;
                            $(`<span class="multiImagePreviewDiv" style="position: relative;width: 100%;padding:10px">
                    <img id="blah" src="${e.target.result}" width="100" height="100"><span class="remove"
                        style="position: absolute;left: 5%;color: white;
background: red;
border-radius: 5px;
padding: 5px;">x</span>
                </span>`).insertAfter("#prediv");
                            $(".remove").click(function() {
                                $(this).parent(".multiImagePreviewDiv").remove();
                            });

                        });
                        fileReader.readAsDataURL(f);
                    }
                });
            } else {
                alert("Your browser doesn't support to File API")
            }
        });
</script>
@endpush

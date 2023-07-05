@extends('backend\layouts\app')
@section('content')
<!-- Simple Datatable start -->
<div class="card-box mb-30">
    <div class="pd-20">
        <div class="col-md-6 col-sm-12">
            <a class="btn btn-primary btn-sm" href="#" role="button" data-toggle="modal" data-target="#pricingModal"
                type="button">
                Add Pricing
            </a>
        </div>
    </div>
    <div class="pr-20 pl-20">
        <div class="row clearfix">
            @foreach ($pricings as $pricing)
            <div class="col-sm-12 col-md-2 mb-30">
                <div class="card card-box text-center">
                    <div class="card-body">
                        <h5 class="card-title">{{ $pricing->package }}</h5>
                        <strong class="text-primary font-weight-800 m-b-20"><sup>$</sup> {{ $pricing->amount }}</strong>
                        <p class="card-text">
                        <ul style="display: table;margin: 0 auto;" class="list list-style-02 text-left font-primary">
                            {!! $pricing->service !!}</ul>
                        </p>
                        <div style="display: flex;justify-content: space-evenly;">
                            <button type="button" class="btn btn-outline-primary editData" data-id="{{ $pricing->id }}">
                                <i class="dw dw-edit2"></i>
                            </button>
                            <form action="{{ route('pricing.destroy', $pricing) }}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-outline-danger"
                                    onclick="return confirm('Are you sure you want to delete this item?');"><i
                                        class="dw dw-delete-3"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@include('backend\pages\pricing\create')
@include('backend\pages\pricing\edit')
@endsection
@push('script')
<script>
    $('.editData').on('click', function() {
            var id = $(this).data('id');
            var url = `{{ route('pricing.edit', ':id') }}`;
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
                    $('#editPricingForm #pricing_id').val(data.id);
                    $('#editPricingForm #package').val(data.package);
                    $('#editPricingForm #amount').val(data.amount);
                    $('#editPricingForm #service').val(data.service);
                    $('#editPricingModal').modal({
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
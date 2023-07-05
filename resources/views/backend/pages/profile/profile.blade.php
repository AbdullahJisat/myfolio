@extends('backend\layouts\app')
@push('css')
<style>
    p {
        max-height: 65px;
        overflow: hidden;
    }

    .open {
        overflow: unset;
        max-height: unset;
    }

    #more {
        cursor: pointer;
    }

    .remove-image {
        position: absolute;
        top: -9px;
        right: -9px;
        text-align: center;
        width: 55px;
        height: 55px;
        font-size: 24px;
        border-radius: 50%;
        background-color: #df1c1c;
        color: #fff;
    }

    .image-preview {
        width: 100%;
        height: 310px;
        display: block;
        border: 3px solid #f1f1f1;
        box-shadow: 0 0 5px 0 rgba(0, 0, 0, 0.25);
        border-radius: 10px;
        background-size: cover !important;
        background-position: top;
        background-repeat: no-repeat;
        position: relative;
        overflow: hidden;
        background-size: contain !important;
        background-position: center;
    }
</style>
@endpush
@section('content')
<div class="row">
    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 mb-30">
        <div class="pd-20 card-box height-100-p">
            <div class="profile-photo">
                <a href="modal" data-toggle="modal" data-target="#modal" class="edit-avatar"><i
                        class="fa fa-pencil"></i></a>
                <img src="{{ Auth::user()->image ?: asset('noImage.png') }}" alt="" class="avatar-photo" style="width: 100%;
                height: 100%;" />
                <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <form action="{{ route('update_image') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="modal-body pd-5">
                                    <label for="dd" class="img-container">
                                        <input type="file" id="dd" hidden
                                            onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])"
                                            name="image" accept=".jfif,.jpg,.jpeg,.png,.gif" />
                                        <img id="blah" src="{{ Auth::user()->image ?: asset('noImage.png') }}"
                                            alt="Picture" />
                                    </label>
                                </div>
                                <div class="modal-footer">
                                    <input type="submit" value="Update" class="btn btn-primary" />
                                    <button type="button" class="btn btn-default" data-dismiss="modal">
                                        Close
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <h5 class="text-center h5 mb-0">{{ Auth::user()->name }}</h5>
            <p class="text-center text-muted font-14">{{ Auth::user()->designation }}</p>
            <div class="profile-info">
                <h5 class="mb-20 h5 text-blue">Contact Information</h5>
                <ul>
                    <li>
                        <span>Email Address:</span>
                        {{ Auth::user()->email }}
                    </li>
                    <li>
                        <span>Phone Number:</span>
                        {{ Auth::user()->phone }}
                    </li>
                    <li>
                        <span>Address:</span>
                        {{ Auth::user()->address }}
                    </li>
                    <li>
                        <span>Bio:</span>
                        <p id="content">{{ Auth::user()->long_bio }}</p><span id="more">more..</span>
                    </li>
                </ul>
            </div>
            <div class="profile-social">
                <h5 class="mb-20 h5 text-blue">Social Links</h5>
                <ul class="clearfix">
                    <li>
                        <a href="#" class="btn" data-bgcolor="#3b5998" data-color="#ffffff"><i
                                class="fa fa-facebook"></i></a>
                    </li>
                    <li>
                        <a href="#" class="btn" data-bgcolor="#1da1f2" data-color="#ffffff"><i
                                class="fa fa-twitter"></i></a>
                    </li>
                    <li>
                        <a href="#" class="btn" data-bgcolor="#007bb5" data-color="#ffffff"><i
                                class="fa fa-linkedin"></i></a>
                    </li>
                    <li>
                        <a href="#" class="btn" data-bgcolor="#f46f30" data-color="#ffffff"><i
                                class="fa fa-instagram"></i></a>
                    </li>
                    <li>
                        <a href="#" class="btn" data-bgcolor="#c32361" data-color="#ffffff"><i
                                class="fa fa-dribbble"></i></a>
                    </li>
                    <li>
                        <a href="#" class="btn" data-bgcolor="#3d464d" data-color="#ffffff"><i
                                class="fa fa-dropbox"></i></a>
                    </li>
                    <li>
                        <a href="#" class="btn" data-bgcolor="#db4437" data-color="#ffffff"><i
                                class="fa fa-google-plus"></i></a>
                    </li>
                    <li>
                        <a href="#" class="btn" data-bgcolor="#bd081c" data-color="#ffffff"><i
                                class="fa fa-pinterest-p"></i></a>
                    </li>
                    <li>
                        <a href="#" class="btn" data-bgcolor="#00aff0" data-color="#ffffff"><i
                                class="fa fa-skype"></i></a>
                    </li>
                    <li>
                        <a href="#" class="btn" data-bgcolor="#00b489" data-color="#ffffff"><i
                                class="fa fa-vine"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 mb-30">
        <div class="card-box height-100-p overflow-hidden">
            <div class="profile-tab height-100-p">
                <div class="tab height-100-p">
                    <ul class="nav nav-tabs customtab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#profile" role="tab">Profile</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#setting" role="tab">Settings</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <!-- Profile Tab start -->
                        <div class="tab-pane fade show active" id="profile" role="tabpanel">
                            <div class="profile-setting">
                                <form action="{{ route('update_profile') }}" method="POST">
                                    @csrf
                                    <ul class="profile-edit-list row">
                                        <li class="weight-500 col-md-12">
                                            <div class="form-group">
                                                <label>Name</label>
                                                <input class="form-control form-control-lg" type="text" name="name"
                                                    value="{{ Auth::user()->name }}" />
                                            </div>
                                            <div class="form-group">
                                                <label>Designation</label>
                                                <input class="form-control form-control-lg" type="text"
                                                    name="designation" value="{{ Auth::user()->designation }}" />
                                            </div>
                                            <div class="form-group">
                                                <label>Email</label>
                                                <input class="form-control form-control-lg" type="email" name="email"
                                                    value="{{ Auth::user()->email }}" />
                                            </div>
                                            <div class="form-group">
                                                <label>Phone</label>
                                                <input class="form-control form-control-lg" type="text" name="phone"
                                                    value="{{ Auth::user()->phone }}" />
                                            </div>
                                            <div class="form-group">
                                                <label>Address</label>
                                                <input class="form-control form-control-lg" type="text" name="address"
                                                    value="{{ Auth::user()->address }}" />
                                            </div>
                                            <div class="form-group">
                                                <label>Short_bio</label>
                                                <input class="form-control form-control-lg" type="text" name="short_bio"
                                                    value="{{ Auth::user()->short_bio }}" />
                                            </div>
                                            <div class="form-group">
                                                <label>Long Bio</label>
                                                <textarea class="form-control"
                                                    name="long_bio">{{ Auth::user()->long_bio }}</textarea>
                                            </div>
                                            <div class="form-group mb-0">
                                                <input type="submit" class="btn btn-primary"
                                                    value="Update Information" />
                                            </div>
                                        </li>
                                        {{-- <li class="weight-500 col-md-6">
                                            <h4 class="text-blue h5 mb-20">
                                                Edit Social Media links
                                            </h4>
                                            <div class="form-group">
                                                <label>Facebook URL:</label>
                                                <input class="form-control form-control-lg" type="text"
                                                    placeholder="Paste your link here" />
                                            </div>
                                            <div class="form-group">
                                                <label>Twitter URL:</label>
                                                <input class="form-control form-control-lg" type="text"
                                                    placeholder="Paste your link here" />
                                            </div>
                                            <div class="form-group">
                                                <label>Linkedin URL:</label>
                                                <input class="form-control form-control-lg" type="text"
                                                    placeholder="Paste your link here" />
                                            </div>
                                            <div class="form-group">
                                                <label>Instagram URL:</label>
                                                <input class="form-control form-control-lg" type="text"
                                                    placeholder="Paste your link here" />
                                            </div>
                                            <div class="form-group">
                                                <label>Dribbble URL:</label>
                                                <input class="form-control form-control-lg" type="text"
                                                    placeholder="Paste your link here" />
                                            </div>
                                            <div class="form-group">
                                                <label>Dropbox URL:</label>
                                                <input class="form-control form-control-lg" type="text"
                                                    placeholder="Paste your link here" />
                                            </div>
                                            <div class="form-group">
                                                <label>Google-plus URL:</label>
                                                <input class="form-control form-control-lg" type="text"
                                                    placeholder="Paste your link here" />
                                            </div>
                                            <div class="form-group">
                                                <label>Pinterest URL:</label>
                                                <input class="form-control form-control-lg" type="text"
                                                    placeholder="Paste your link here" />
                                            </div>
                                            <div class="form-group">
                                                <label>Skype URL:</label>
                                                <input class="form-control form-control-lg" type="text"
                                                    placeholder="Paste your link here" />
                                            </div>
                                            <div class="form-group">
                                                <label>Vine URL:</label>
                                                <input class="form-control form-control-lg" type="text"
                                                    placeholder="Paste your link here" />
                                            </div>
                                            <div class="form-group mb-0">
                                                <input type="submit" class="btn btn-primary" value="Save & Update" />
                                            </div>
                                        </li> --}}
                                    </ul>
                                </form>
                            </div>
                        </div>
                        <!-- Profile Tab End -->
                        <!-- Setting Tab start -->
                        <div class="tab-pane fade height-100-p" id="setting" role="tabpanel">
                            <div class="profile-setting">
                                <div class="card-body">
                                    <form action="{{ route('update_setting') }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="row pr-5 pl-5">
                                            <div class="form-group col-xl-12">
                                                <label>Site Name</label>
                                                <input class="form-control form-control-lg" type="text" name="site_name"
                                                    value="{{ \File::get('settings/file.txt') }}" />
                                            </div>
                                            <div class="form-group col-xl-6">
                                                <div class="image-upload">
                                                    <div class="thumb">
                                                        <div class="avatar-preview">
                                                            <div class="row">
                                                                <div class="col-sm-12">
                                                                    <div class="image-preview"
                                                                        style="background-image: url(settings/logo.png);">
                                                                        <button type="button" class="remove-image"><i
                                                                                class="fa fa-times"></i></button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="avatar-edit">
                                                            <input type="file" class="profilePicUpload" id="logoUpload"
                                                                accept=".png, .jpg, .jpeg" name="logo" hidden>
                                                            <label for="logoUpload" class="mt-3 btn btn-primary">Select
                                                                Logo</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group col-xl-6">
                                                <div class="image-upload">
                                                    <div class="thumb">
                                                        <div class="avatar-preview">
                                                            <div class="row">
                                                                <div class="col-sm-12">
                                                                    <div class="image-preview logoPicPrev"
                                                                        style="background-image: url(settings/icon.ico)">
                                                                        <button type="button" class="remove-image"><i
                                                                                class="fa fa-times"></i></button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="avatar-edit">
                                                            <input type="file" class="profilePicUpload" id="icon"
                                                                accept=".png" name="icon" hidden>
                                                            <label for="icon" class="mt-3 btn btn-primary">Select
                                                                Favicon</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary w-100 h-45">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- Setting Tab End -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('script')
<script>
    var content = document.getElementById("content");
        var more = document.getElementById("more");

        more.onclick = function() {

            if (content.classList.contains("open")) {
                content.classList.remove("open");
                more.innerText = "more..";
            } else {
                content.classList.add("open");
                more.innerText = "less.";
            }
        };
</script>
<script>
    $(".remove-image").on('click', function() {
            $(this).parents(".image-preview").css('background-image', 'none');
            $(this).parents(".image-preview").removeClass('has-image');
            $(this).parents(".thumb").find('input[type=file]').val('');
        });
</script>

<script>
    function proPicURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    var preview = $(input).parents('.thumb').find('.image-preview');
                    $(preview).css('background-image', 'url(' + e.target.result + ')');
                    $(preview).addClass('has-image');
                    $(preview).hide();
                    $(preview).fadeIn(650);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
        $(".profilePicUpload").on('change', function() {
            proPicURL(this);
        });
</script>
@endpush
<!--about section start-->
<div id="about" class="section about-section">
    <div class="container">
        <div class="title-block row text-center">
            <div class="col col-md-6 col-md-push-3">
                <div class="section-title">
                    <em class="font-weight-600">Who am i</em>
                    <h2>About me</h2>
                    <span class="hexagon-icon"><i></i></span>
                </div>
            </div>
        </div>
        <!--/.title-block-->
        <div class="row">
            <div class="col col-sm-6 col-lg-4">
                <div class="profile-pic">
                    <svg class="picture-box-main" xmlns="http://www.w3.org/2000/svg" width="463" height="478"
                        viewBox="0 0 463 478">
                        <image xlink:href="{{ asset($user->image) }}" width="463" height="478" />
                    </svg>
                    <svg class="picture-box" xmlns="http://www.w3.org/2000/svg" width="463" height="478"
                        viewBox="0 0 463 478">
                        <clippath id="svgPath">
                            <path class="shape-01"
                                d="M446.453,315.122V162.8a81.583,81.583,0,0,0-41.008-70.71L272.936,15.927a82.323,82.323,0,0,0-82.014,0L58.413,92.088A81.582,81.582,0,0,0,17.4,162.8V315.122a81.582,81.582,0,0,0,41.008,70.709l132.509,76.162a82.337,82.337,0,0,0,82.014,0l132.509-76.162A81.582,81.582,0,0,0,446.453,315.122Z" />
                        </clippath>
                        <path id="Profile_pic_border" data-name="Profile pic border" class="shape-02"
                            d="M420.44,385.875l-134.269,76.17a84.339,84.339,0,0,1-54.674,9.913,84.337,84.337,0,0,1-54.673-9.913L42.555,385.875A81.406,81.406,0,0,1,1,315.157V162.815A81.409,81.409,0,0,1,42.555,92.1l134.269-76.17A84.333,84.333,0,0,1,231.5,6.014a84.336,84.336,0,0,1,54.674,9.913L420.44,92.1a81.412,81.412,0,0,1,41.553,70.718V315.157A81.409,81.409,0,0,1,420.44,385.875Zm26.013-70.753V162.8a81.583,81.583,0,0,0-41.008-70.71L272.936,15.927a82.323,82.323,0,0,0-82.014,0L58.413,92.088A81.582,81.582,0,0,0,17.4,162.8V315.122a81.582,81.582,0,0,0,41.008,70.709l132.509,76.162a82.337,82.337,0,0,0,82.014,0l132.509-76.162A81.582,81.582,0,0,0,446.453,315.122Z" />

                    </svg>
                </div>
                <!--/.profile-pic-->
            </div>
            <!--/.col-->
            <div class="col col-sm-6 col-lg-4">
                <div class="about-contentbox last-p-no-margin">
                    <h3 class="title-style">Proffesional Profile</h3>
                    <p class="font-secondary text-darkgray">{{ $user->long_bio }}</p>
                </div>
                <!--/.about-contentbox-->
            </div>
            <!--/.col-->
            <div class="col col-sm-12 col-lg-4">
                <ul class="list list-style-01 m-b-40">
                    <li><strong>Name:</strong> {{ $user->name }}</li>
                    <li><strong>Email:</strong> {{ $user->email }}</li>
                    <li><strong>Phone:</strong> {{ $user->phone }}</li>
                    <li><strong>Address:</strong> {{ $user->address }}</li>
                </ul>
                <!--/.list-style-01-->
                <div class="cta-row">
                    <a href="{{ asset($user->resume) }}" download>
                    <a href="{{ asset($user->resume) }}" class="btn btn-icon btn-outline" target="_blank"><i
                            class="glyphicon glyphicon-download-alt"></i>Download CV</a>
                    <a href="#" class="btn btn-icon"><i class="glyphicon glyphicon-user"></i>Hire
                        Me</a>
                </div>
                <!--/.cta-row-->
            </div>
            <!--/.col-->
        </div>
        <!--/.row-->
    </div>
    <!--/.container-->
</div>
<!--/.section-->
<!--about section end-->

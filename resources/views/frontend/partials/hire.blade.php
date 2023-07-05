<div class="modal fade" id="hireme" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header align-center">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Hire me</h4>
            </div>
            <div class="modal-body">
                <form action="{{ url('message') }}" id="hireform" method="post">
                    @csrf
                    <div class="row">
                        <div class="col col-sm-6">
                            <div class="input-field has-icon"> <i class="fa fa-user"></i>
                                <input type="text" required class="form-control" name="hirename" placeholder="Name">
                            </div>
                            <!--/.input-field-->
                        </div>
                        <!--/.col-->
                        <div class="col col-sm-6">
                            <div class="input-field has-icon"> <i class="fa fa-mobile"></i>
                                <input type="tel" required class="form-control" name="hirephone" placeholder="Phone">
                            </div>
                            <!--/.input-field-->
                        </div>
                        <!--/.col-->
                        <div class="col col-sm-12 col-xs-12">
                            <div class="input-field has-icon"> <i class="fa fa-envelope"></i>
                                <input type="email" required class="form-control" name="hireemail" placeholder="Email">
                            </div>
                            <!--/.input-field-->
                        </div>
                        <!--/.col-->
                        <div class="col col-xs-12">
                            <div class="input-field has-icon"> <i class="fa fa-file-text"></i>
                                <textarea class="form-control" required name="hiremessage"
                                    placeholder="Decribe your project"></textarea>
                            </div>
                            <!--/.input-field-->
                        </div>
                        <!--/.col-->
                        <div class="col col-xs-12 text-center">
                            <button type="submit" class="btn btn-dark btn-md btn-submit">Submit</button>
                        </div>
                        <!--/.col-->
                        <div class="col col-xs-12">
                            <div id="loading01"> Sending your message....</div>
                            <div id="successmsg01">Your message has been sent.</div>
                            <div id="errormsg01">Something went wrong, please try again.</div>
                        </div>
                        <!--/.col-->
                    </div>
                    <!--/.row-->
                </form>
            </div>
        </div>
    </div>
</div>

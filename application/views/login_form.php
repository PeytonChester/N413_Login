<div class="container-fluid">
    <div class="row">
        <div class="col-xs-12"> <!-- column for headline -->
            <h3 style="text-align:center;margin-bottom:2em;">Login</h3>
        </div> <!-- /col-xs-12 -->
    </div> <!-- /.row  -->
    <div class="row">
        <div class="col-xs-2"></div> <!-- spacer column /col-xs-2 -->
        <div class="col-xs-8" style="text-align:left;">

            <form id="login_form" name="login_form" class="form-horizontal" method="post" action="<?php echo base_url(); ?>login/auth" >
                <div class="row">
                    <div class="col-xs-12">
                        <div class="row" style="padding:2em;">

                            <div class="form-group">
                                <label for="email" class="col-xs-3 control-label">Email address</label>
                                <div class="col-xs-3">
                                    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="johnapples@yahoo.com">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="password" class="col-xs-3 control-label">Password</label>
                                <div class="col-xs-3">
                                    <input type="password" id="password" name="password" class="form-control" placeholder="Password">
                                </div> <!--  /.col-xs-3  -->
                            </div> <!--  /.form-group  -->
                        </div> <!-- /.row -->
                        <div class="row row-gap">
                            <div class="col-xs-9">
                                <button type="submit" class="btn btn-primary pull-right">Log In</button>
                            </div>  <!-- /.col-xs-9 (BUTTON) -->
                        </div> <!-- /.row row-gap  -->


                    </div> <!-- /col-xs-12 -->
                </div> <!-- /.row -->
            </form>

        </div> <!-- spacer column /col-xs-8 -->
    </div> <!-- /.row  -->
</div>  <!-- /.container-fluid -->

</body>
<script type="text/javascript">
    $(document).ready(function() {
        $("#login").css("display","none");
    });
</script>
</html>
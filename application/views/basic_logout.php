<div class="container-fluid">
    <div class="row">
        <div class="col-xs-12"> <!-- column for headline -->
            <h3 style="text-align:center;margin-bottom:2em;">N413 Simple LogOUT</h3>
        </div> <!-- /col-xs-12 -->
    </div> <!-- /.row  -->
    <div class="row">
        <div class="col-xs-2"></div> <!-- spacer column /col-xs-2 -->
        <div class="col-xs-8" style="text-align:center;">

            <h4>You are now LOGGED OUT.</h4>

        </div> <!-- spacer column /col-xs-8 -->
    </div> <!-- /.row  -->
</div>  <!-- /.container-fluid -->

</body>
<script type="text/javascript">
    $(document).ready(function() {
        $("#login").html('<a href="<?php echo base_url(); ?>/login">Login</a></li>');
        $("#login").addClass('active');
    });
</script>
</html>
<?php
if ( ! defined( 'ABSPATH' ) ) exit;

?>

<div class="modal fade" id="contact">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title">Contact Modal Form</h4>
      </div>
      <div class="modal-body">
        <h2>We’d love to hear from you and answer any questions you may have. Leave us a word and we will get back to you.</h2>
        <form role="form">

            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="name" class="sr-only">Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Your Name" />
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="phone" class="sr-only">Phone</label>
                            <input type="text" class="form-control" id="phone" placeholder="Your Phone" />
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-10">
                        <div class="form-group">
                            <label for="name" class="sr-only">Question</label>
                            <input type="text" class="form-control" id="name" placeholder="Got a question? Type it here..." />
                        </div>
                    </div>
                    <div class="col-sm-2 text-right">
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Send</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
      </div>
      <div class="modal-footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6 text-center">
                    <a href="tel:0041216248161">+XX XX XXX XX XX</a>
                </div>
                <div class="col-sm-6 text-center">
                    <a href="mailto:mail@domain.com">mail@domain.com</a>
                </div>
            </div>
        </div>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<footer id="footer">
	<p>&copy; 2014 - Made with passion</p>
</footer> <!-- End footer -->	
<?php wp_footer(); ?>
</body>
</html>
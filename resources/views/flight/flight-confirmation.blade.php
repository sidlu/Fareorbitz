@include('site.header')

<?php $order_id=$flightData->order_id; ?>

<div id="book_content"></div>

<div class="section-block"></div>
<section class="confirmation-section py-5 html-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
<tr class="light-blue-bg">
                            <td>
                                <h4 class="blue-title">MANAGE BOOKING</h4>
                            </td>
                        </tr>
<tr>
                            <td>
                                <p>To manage your booking like cancellation , date change etc., Access this booking online.</p>
                                <div class="d-flex py-3">
                                    <a href="#" class="btn btn-primary btn-sm">MODIFY</a>
                                    <span class="btn btn-primary btn-sm mx-2" onClick="CreatePDFfromHTML()">DOWNLOAD</span>
                                </div>
                            </td>
                        </tr>
                        </div>
            </div>
        </div>
    </section>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.min.js"></script>
<script type="text/javascript" src="https://html2canvas.hertzen.com/dist/html2canvas.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
                                <script type="text/javascript">  
								jQuery(".common_beard_comb").hide(); jQuery(".preloader").hide(); 
	  jQuery(document).ready(function(){
	  					 $.ajax({

								url:'<?php url('') ?>/ticket/flight/flight.php',
								type: "GET",
								data: {
									action: "on_confirmation",
									order_id: "<?php echo $order_id; ?>",
									rand: "<?php echo rand(); ?>",
									user_id: "",
								},
								dataType: "html",  
								success: function (data) {
									jQuery('#book_content').html(data);
										$.ajax({
										url:'<?php url('') ?>/ticket/flight/mail_send.php',
										type: "GET",
										data: {
											action: "mail_send",
											order_id: "<?php echo $order_id; ?>",
											subject: "Flight Booking",
											content: '',
											rand: "<?php echo rand(); ?>",
										},
										dataType: "html",  
										success: function (data) {
											
											}
										});
									}

								});								
			});
			
			
			
function CreatePDFfromHTML() {  
			//$(".html-content").show();
    var HTML_Width = $(".html-content").width();
    var HTML_Height = $(".html-content").height();
    var top_left_margin = 15;
    var PDF_Width = HTML_Width + (top_left_margin * 2);
    var PDF_Height = (PDF_Width * 1.5) + (top_left_margin * 2);
    var canvas_image_width = HTML_Width;
    var canvas_image_height = HTML_Height;

    var totalPDFPages = Math.ceil(HTML_Height / PDF_Height) - 1;

    html2canvas($(".html-content")[0]).then(function (canvas) {
        var imgData = canvas.toDataURL("image/jpeg", 1.0);
        var pdf = new jsPDF('p', 'pt', [PDF_Width, PDF_Height]);
        pdf.addImage(imgData, 'JPG', top_left_margin, top_left_margin, canvas_image_width, canvas_image_height);
        for (var i = 1; i <= totalPDFPages; i++) { 
            pdf.addPage(PDF_Width, PDF_Height);
            pdf.addImage(imgData, 'JPG', top_left_margin, -(PDF_Height*i)+(top_left_margin*4),canvas_image_width,canvas_image_height);
        }
        pdf.save("Eticket_<?php echo $order_id; ?>.pdf");
        //$(".html-content").hide();
		//history.back(1);
    });
}		



			
								 
      </script>
      @include('site.footer')





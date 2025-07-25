<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sharer.js@latest/sharer.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
<script src="{{ asset('assets/front-js/viewport.jquery.js') }}"></script>
<script src="{{ asset('assets/front-js/odometer.min.js') }}"></script>
<script src="{{ asset('assets/front-js/wow.js') }}"></script>
<script src="{{ asset('assets/front-js/script.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
     <script type="text/javascript">
    $(document).ready(function() {
        $('#contactForm').submit(function(event) {
            event.preventDefault();
            let form = event.target;
            let data = new FormData(form);
            data = Object.fromEntries(data.entries());

            $.ajax({
                url: '{{route("contact-us")}}',
                type: 'POST',
                dataType: 'json',
                data: data,
                success: function(response) {
                    grecaptcha.reset();
                    Swal.fire({
                        icon: 'success',
                        title: 'Enquiry Sent',
                        text: 'Thank you for reaching us. Our team member will contact you ASAP',
                        showConfirmButton: false,
                        timer: 3000
                    });

                    
                    $("#contactForm").get(0).reset();
                },
                error: function(xhr, status, error) {
                   
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Something went wrong. Please try again later.',
                    });
                }
            });
        });
    });
</script>
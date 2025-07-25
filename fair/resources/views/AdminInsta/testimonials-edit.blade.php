<!doctype html>
<html lang="en">
  <!-- [Head] start -->

  @include('AdminInsta.Backend.Layout.common-head')
 
  <!-- [Body] Start -->

  <body data-pc-preset="preset-1" data-pc-sidebar-theme="light" data-pc-sidebar-caption="true" data-pc-direction="ltr" data-pc-theme="light">
    
<!-- [ Sidebar Menu ] start -->
@include('AdminInsta.Backend.Layout.sidebar')
  <!-- [ Sidebar Menu ] end -->

<!-- [ Sidebar Menu ] end -->
 <!-- [ Header Topbar ] start -->
@include('AdminInsta.Backend.Layout.header')
<!-- [ Header ] end -->

    <!-- [ Main Content ] start -->
    <section class="pc-container">
      <div class="pc-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
          <div class="page-block">
            <div class="row align-items-center">
              <div class="col-md-12">
                <ul class="breadcrumb">
                  
                  <li class="breadcrumb-item" aria-current="page">Testimonial</li>
                </ul>
              </div>
              <div class="col-md-12">
                <div class="page-header-title">
                  <h2 class="mb-0">Testimonial</h2>
                </div>
              </div>
              
            </div>
          </div>
        </div>
        <!-- [ breadcrumb ] end -->

        <!-- [ Main Content ] start -->
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              
              <div class="card-body">
             
                  <form class="needs-validation" novalidate method="post" action="{{ route('AdminInsta.testimonial.update',$testimonial->testimonial_id) }}" enctype="multipart/form-data">
                    @csrf
                  <div class="row">
                    <div class="col-md-6 mb-3">
                      <label class="form-label" for="validationCustom01">Testimonial Name</label>
                      <input type="text" class="form-control" value="{{ $testimonial->client_name }}" id="client_name" name="client_name"/>
                    </div>
                   
                    
                    <div class="col-md-6 mb-3">
                      <label class="form-label" for="validationCustom03">Testimonial Image</label>
                      <input type="file" class="form-control" id="validationCustom03" name="image" />
                    </div>
                    <div class="col-md-12 mb-3">
                        <label class="form-label" for="validationCustom03">Short Description</label>
                        <textarea class="form-control" value="{{ $testimonial->short_discription }}" name="short_discription">
                           {{ $testimonial->short_discription }}
                            </textarea>
                         </div>
                        
                    <div class="row">
                    <div class="col-md-12">
                        <label class="form-label" for="validationCustom03">Description</label>
                    <textarea name="description" value="{{ $testimonial->description }}" id="ckeditor">
                       {{ $testimonial->description }}
                        </textarea>
                     </div>
                    
                     <div class="col-sm-2">
                     <button class="btn btn-primary mt-2 d-" type="submit">Submit form</button>
                    </div>
                     </div>
                </form>

                <script>
                  // Example starter JavaScript for disabling form submissions if there are invalid fields
                  (function () {
                    'use strict';
                    window.addEventListener(
                      'load',
                      function () {
                        // Fetch all the forms we want to apply custom Bootstrap validation styles to
                        var forms = document.getElementsByClassName('needs-validation');
                        // Loop over them and prevent submission
                        var validation = Array.prototype.filter.call(forms, function (form) {
                          form.addEventListener(
                            'submit',
                            function (event) {
                              if (form.checkValidity() === false) {
                                event.preventDefault();
                                event.stopPropagation();
                              }
                              form.classList.add('was-validated');
                            },
                            false
                          );
                        });
                      },
                      false
                    );
                  })();
                </script>
              </div>
            </div>
            
          <!-- [ form-element ] end -->
        </div>
      </div>
      <!-- [ Main Content ] end -->
    </section>
    <!-- [ Main Content ] end -->
    @include('AdminInsta.Backend.Layout.footer')
 <!-- Required Js -->
 @include('AdminInsta.Backend.Layout.common-end')

 

  </body>
  <!-- [Body] end -->

<!-- Mirrored from html.phoenixcoded.net/light-able/bootstrap/forms/form_elements.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 16 Dec 2024 06:51:41 GMT -->
</html>

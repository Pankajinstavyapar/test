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
                  
                  <li class="breadcrumb-item" aria-current="page">Banners</li>
                </ul>
              </div>
              <div class="col-md-12">
                <div class="page-header-title">
                  <h2 class="mb-0">Banners</h2>
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
             
                  <form class="needs-validation" novalidate method="post" action="{{ route('AdminInsta.banner.update',$banner->banner_id) }}" enctype="multipart/form-data">
                    @csrf 
                    @method('PUT')
                  <div class="row">
                    <div class="col-md-6 mb-3">
                      <label class="form-label" for="validationCustom01">Banner Title</label>
                      <input type="text" class="form-control" id="validationCustom01" value="{{ $banner->banner_title }}" name="banner_title" placeholder="Banner Title" />
                      <div class="valid-feedback"> Banner Title </div>
                    </div>
                    <div class="col-md-6 mb-3">
                      <label class="form-label" for="validationCustom02">Banner Second Title</label>
                      <input type="text" class="form-control" id="validationCustom02" value="{{ $banner->banner_second_title }}" name="banner_second_title" placeholder="Banner Second Title" />
                      <div class="valid-feedback"> Banner Second Title </div>
                    </div>
                    
                    <div class="col-md-6 mb-3">
                      <label class="form-label" for="validationCustom03">Banner Third Title</label>
                      <input type="text" class="form-control" id="validationCustom03" value="{{ $banner->banner_position }}" name="banner_position" placeholder="Banner Third Title" />
                      <div class="invalid-feedback"> Please Banner Third Title </div>
                    

                    </div>
                    <div class="col-md-6 mb-3">
                      <label class="form-label" for="validationCustom03">Image</label>
                      <input type="file" class="form-control" id="validationCustom03" name="banner_image"/>
                      <div class="invalid-feedback"> Please provide Image </div>
                    </div>

                    <div class="row">
                    <div class="col-md-12">
                    <textarea name="banner_discription" value="{{ $banner->banner_discription }}" id="ckeditor">{{ $banner->banner_discription }}
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

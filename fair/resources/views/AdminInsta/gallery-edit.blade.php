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
                  
                  <li class="breadcrumb-item" aria-current="page">Gallery</li>
                </ul>
              </div>
              <div class="col-md-12">
                <div class="page-header-title">
                  <h2 class="mb-0">Gallery</h2>
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
             
                  <form class="needs-validation" novalidate method="post" action="{{ route('AdminInsta.gallery.store') }}" enctype="multipart/form-data">
                    @csrf
                  <div class="row">
                      
                      
                    <div class="col-md-6 mb-3">
                      <label class="form-label" for="validationCustom01">Gallery Name</label>
                      <input type="text" class="form-control"  value="{{ $gallery->gallery_title }}" name="gallery_title" placeholder="Gallery Name" />
                    
                    </div>
                  
                    <div class="col-md-6 mb-3">
                      <label class="form-label" for="validationCustom03">Short Description</label>
                      <input type="text" class="form-control"  value="{{ $gallery->short_discription }}" name="short_discription" />
                    </div>

                    <div class="col-md-6 mb-3">
                      <label class="form-label" for="validationCustom03">Gallery Image</label>
                      <input type="file" class="form-control"  name="gallery_image"/>
                    </div>
                     @if ($gallery->gallery_image)
                  <div class="mt-2 img_bg">
                      <p>Current Image:</p>
                      <img src="{{ url('images/' . $gallery->gallery_image ) }}" alt="Current Image" width="100">
                  </div>
                  @endif
                  @php
                        $product = \App\Models\product::select('product_title','product_id')->get();
                              @endphp
                      <div class="col-md-6 mb-3">
                      <label class="form-label">Gallery Category</label>
                     <select class="form-control" name="gallery_category" id="gallery_category">
                           <option value="{{ $gallery->gallery_category }}">
                        {{ optional($gallery->product)->product_title }}</option>
                    
                            <option value="">Select Product</option>
                            @isset($product)
                                @foreach ($product as $gallery)
                                    <option value="{{ $gallery->product_id }}">{{ $gallery->product_title }}</option>
                                @endforeach
                            @endisset
                        </select>
                    
                    </div>
                    <div class="row">
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

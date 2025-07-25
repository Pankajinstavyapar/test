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
                  
                  <li class="breadcrumb-item" aria-current="page">Subdomain</li>
                </ul>
              </div>
              <div class="col-md-12">
                <div class="page-header-title">
                  <h2 class="mb-0">Subdomain</h2>
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
             
                  <form class="needs-validation" novalidate method="post" action="{{ route('AdminInsta.subdomain.update',$subdomain->subdomain_id) }}" enctype="multipart/form-data">
                    @csrf
                  <div class="row">
                    <div class="col-md-6 mb-3">
                      <label class="form-label" for="validationCustom01">Subdomain Name</label>
                      <input type="text" class="form-control" value="{{ $subdomain->subdomain_name }}" id="subdomain_name" name="subdomain_name"/>
                    </div>
                    <div class="col-md-6 mb-3">
                      <label class="form-label" for="validationCustom02">Subdomain Slug</label>
                      <input type="text" class="form-control" value="{{ $subdomain->subdomain_slug }}" id="subdomain_slug" name="subdomain_slug"/>
                    </div>
                  
                    <div class="col-md-6 mb-3">
                      <label class="form-label" for="validationCustom03">Meta Title</label>
                      <input type="text" class="form-control" value="{{ $subdomain->meta_title }}" id="meta_title" name="meta_title"  />
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label" for="validationCustom03">Meta Keywords</label>
                        <input type="text" class="form-control" value="{{ $subdomain->meta_keywords }}" id="meta_keywords" name="meta_keywords"/>
                      
                      </div>
                      <div class="col-md-6 mb-3">
                        <label class="form-label" for="validationCustom03">Meta Description</label>
                        <input type="text" class="form-control" value="{{ $subdomain->meta_description }}" id="meta_description" name="meta_description"  />
                       
                      </div>
                    <div class="col-md-6 mb-3">
                      <label class="form-label" for="validationCustom03">Image</label>
                      <input type="file" class="form-control" id="validationCustom03" name="subdomain_image" />
                    </div>
                    <div class="col-md-12 mb-3">
                        <label class="form-label" for="validationCustom03">Short Description</label>
                        <textarea class="form-control"  value="{{ $subdomain->short_discription }}" name="short_discription">
                           {{ $subdomain->short_discription }}
                            </textarea>
                         </div>
                         <div class="form-group">
                            <div class="col-sm-10">
                           [Product Name - keyword]  [Location Name - subdomain ]
                                   </div>
                                </div>
                    <div class="row">
                    <div class="col-md-12">
                        <label class="form-label" for="validationCustom03">Description</label>
                    <textarea name="description"  value="{{ $subdomain->description }}" id="ckeditor">
                        {{ $subdomain->description }}
                        </textarea>
                     </div>
                     <div class="form-group">
                        <div class="col-sm-10">
                       [Product Name - keyword]  [Location Name - subdomain ]
                               </div>
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

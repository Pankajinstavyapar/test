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
                  
                  <li class="breadcrumb-item" aria-current="page">Blogs</li>
                </ul>
              </div>
              <div class="col-md-12">
                <div class="page-header-title">
                  <h2 class="mb-0">Blogs</h2>
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
             
                  <form class="needs-validation" novalidate method="post" action="{{ route('AdminInsta.tbl_blog.update',$blogs->blog_id) }}" enctype="multipart/form-data">
                    @csrf
                     @method('PUT')
                  <div class="row">
                    <div class="col-md-6 mb-3">
                      <label class="form-label" for="validationCustom01">Blog Name</label>
                      <input type="text" class="form-control" value="{{ $blogs->blog_title }}" id="blog_title" name="blog_title"/>
                    </div>
                   
                   <div class="col-md-6 mb-3">
                      <label class="form-label" for="validationCustom01">Blog slug</label>
                      <input type="text" class="form-control" value="{{ $blogs->blog_slug }}" id="blog_slug" name="blog_slug"/>
                    </div>
                    
                    <div class="col-md-6 mb-3">
                      <label class="form-label" for="validationCustom01">Blog Date</label>
                      <input type="date" class="form-control" value="{{ $blogs->date_time }}" id="date_time" name="date_time"/>
                    </div>
                    
                    <div class="col-md-6 mb-3">
                      <label class="form-label" for="validationCustom01">Meta Title</label>
                      <input type="text" class="form-control" value="{{ $blogs->pg_meta_title }}" id="pg_meta_title" name="pg_meta_title"/>
                    </div>
                    <div class="col-md-6 mb-3">
                      <label class="form-label" for="validationCustom01">Meta Keyword</label>
                      <input type="text" class="form-control" value="{{ $blogs->pg_meta_keyword }}" id="pg_meta_keyword" name="pg_meta_keyword"/>
                    </div>
                    <div class="col-md-6 mb-3">
                      <label class="form-label" for="validationCustom01">Meta Description</label>
                      <textarea class="form-control" value="{{ $blogs->pg_meta_desc }}"  id="pg_meta_desc" name="pg_meta_desc"/> {{ $blogs->pg_meta_desc }}</textarea>
                    </div>
                    
                    <div class="col-md-6 mb-3">
                      <label class="form-label" for="validationCustom03">Blog Image</label>
                      <input type="file" class="form-control" value="{{ $blogs->image }}" id="validationCustom03" name="image" />
                    </div>
                 
                    <div class="col-md-12 mb-3">
                        <label class="form-label" for="validationCustom03">Short Description</label>
                        <textarea class="form-control" value="{{ $blogs->short_description }}" name="short_description">{{ $blogs->short_description }}
                            </textarea>
                         </div>
                        
                    <div class="row">
                    <div class="col-md-12">
                        <label class="form-label" for="validationCustom03">Description</label>
                    <textarea name="description" value="{{ $blogs->description }}" id="ckeditor">
                           {{ $blogs->description }}
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

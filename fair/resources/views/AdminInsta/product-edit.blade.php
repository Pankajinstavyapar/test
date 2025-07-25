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
                  
                  <li class="breadcrumb-item" aria-current="page">Products</li>
                </ul>
              </div>
              <div class="col-md-12">
                <div class="page-header-title">
                  <h2 class="mb-0">Products</h2>
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
             
                  <form class="needs-validation" novalidate method="post" action="{{ route('AdminInsta.product.update',$product->product_id) }}" enctype="multipart/form-data">
                    @csrf
                  <div class="row">
                    @php
                    $category = \App\Models\category::select('product_cat_id','product_category_title')->get();
                   @endphp
                    <div class="col-md-6 mb-3">
                        <label for="form-label">Product Category</label>
                        <select class="form-control" name="product_cat" id="product_cat">
                            <option value="{{ $product->product_cat }}">
                                {{ optional($product->category)->product_category_title }}</option>
                            <option value="">Select Category</option>
                            @isset($category)
                                @foreach ($category as $categorys)
                                <option value="{{ $categorys->product_cat_id }}">{{ $categorys->product_category_title }}</option>
                                @endforeach
                            @endisset
                        </select>
                    </div>

                    <div class="col-md-6 mb-3">
                      <label class="form-label" for="validationCustom01">Product Name</label>
                      <input type="text" class="form-control" value="{{ $product->product_title }}" id="product_title" name="product_title"/>
                    </div>
                    <div class="col-md-6 mb-3">
                      <label class="form-label" for="validationCustom02">Page Url</label>
                      <input type="text" class="form-control" value="{{ $product->product_url }}" id="product_url" name="product_url"/>
                    </div>
                  
                    <div class="col-md-6 mb-3">
                      <label class="form-label" for="validationCustom03">Meta Title</label>
                      <input type="text" class="form-control" value="{{ $product->pg_meta_title }}" id="pg_meta_title" name="pg_meta_title"  />
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label" for="validationCustom03">Meta Keywords</label>
                        <input type="text" class="form-control"  value="{{ $product->pg_meta_keyword }}" id="pg_meta_keyword" name="pg_meta_keyword"/>
                      
                      </div>
                      <div class="col-md-6 mb-3">
                        <label class="form-label" for="validationCustom03">Meta Description</label>
                        <input type="text" class="form-control" value="{{ $product->pg_meta_desc }}" id="pg_meta_desc" name="pg_meta_desc"  />
                       
                      </div>
                    <div class="col-md-6 mb-3">
                      <label class="form-label" for="validationCustom03">Image</label>
                      <input type="file" class="form-control"  id="validationCustom03" name="image" />
                    </div>
                    <div class="col-md-6 mb-3">
                      <label class="form-label" for="validationCustom03">Specification Image</label>
                      <input type="file" class="form-control"  id="image_one" name="image_one" />
                    </div>
                    
                    <div class="col-md-12 mb-3">
                        <label class="form-label" for="validationCustom03">Short Description</label>
                        <textarea class="form-control" value="{{ $product->sort_description }}" name="sort_description">
                            {{ $product->sort_description }}
                            </textarea>
                         </div>
                         
                    <div class="row">
                    <div class="col-md-12">
                        <label class="form-label" for="validationCustom03">Description</label>
                    <textarea name="description" value="{{ $product->description }}" id="ckeditor">
                        {{ $product->description }}
                        </textarea>
                     </div>
                     <div class="col-sm-2">
                     <button class="btn btn-primary mt-2 d-" type="submit">Submit form</button>
                    </div>
                     </div>
                </form>

                <script>
                  
                  (function () {
                    'use strict';
                    window.addEventListener(
                      'load',
                      function () {
                       
                        var forms = document.getElementsByClassName('needs-validation');
                      
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

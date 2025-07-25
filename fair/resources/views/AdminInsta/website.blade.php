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
                  
                  <li class="breadcrumb-item" aria-current="page">website</li>
                </ul>
              </div>
              <div class="col-md-12">
                <div class="page-header-title">
                  <h2 class="mb-0">website</h2>
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
             
                  <form class="needs-validation" novalidate method="POST" action="{{ route('AdminInsta.website.update',$website->website_id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('POST')
                  <div class="row">
                    <div class="col-md-6 mb-3">
                      <label class="form-label" for="validationCustom01">website Name</label>
                      <input type="text" class="form-control" value="{{ $website->website_title }}" id="website_title" name="website_title"/>
                    </div>
                    <div class="col-md-6 mb-3">
                      <label class="form-label" for="validationCustom02">Website Tagline</label>
                      <input type="text" class="form-control" value="{{ $website->website_tagline }}" id="website_tagline" name="website_tagline"/>
                    </div>
                  
                    <div class="col-md-6 mb-3">
                      <label class="form-label" for="validationCustom03">Email</label>
                      <input type="text" class="form-control" value="{{ $website->email }}" id="email" name="email"  />
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label" for="validationCustom03">Contact Email</label>
                        <input type="text" class="form-control" value="{{ $website->contact_email }}" id="contact_email" name="contact_email"/>
                      
                      </div>
                      <div class="col-md-6 mb-3">
                        <label class="form-label" for="validationCustom03">Phone Number</label>
                        <input type="text" class="form-control" value="{{ $website->phone }}" id="phone" name="phone"  />
                       
                      </div>
                      <div class="col-md-6 mb-3">
                        <label class="form-label" for="validationCustom03">Mobile Number</label>
                        <input type="text" class="form-control" value="{{ $website->mobile }}" id="mobile" name="mobile"  />
                      </div>
                      <div class="col-md-6 mb-3">
                        <label class="form-label" for="validationCustom03">Whatsapp Number</label>
                        <input type="text" class="form-control" value="{{ $website->whatsapp_number }}" id="whatsapp_number" name="whatsapp_number"  />
                       
                      </div>
                    
                    <div class="col-md-12 mb-3">
                        <label class="form-label" for="validationCustom03">Head Office Address</label>
                        <textarea class="form-control"  value="{{ $website->head_office_address }}" name="head_office_address">
                           {{ $website->head_office_address }}
                            </textarea>
                         </div>
                         <div class="col-md-12 mb-3">
                            <label class="form-label" for="validationCustom03">Office Address 1</label>
                            <textarea class="form-control"  value="{{ $website->branch_office_address }}" name="branch_office_address">
                               {{ $website->branch_office_address }}
                                </textarea>
                             </div>

                             <div class="col-md-12 mb-3">
                                <label class="form-label" for="validationCustom03">Office Address 2</label>
                                <textarea class="form-control"  value="{{ $website->office_address_three }}" name="office_address_three">
                                   {{ $website->office_address_three }}
                                    </textarea>
                                 </div>
                                 <div class="col-md-12 mb-3">
                                    <label class="form-label" for="validationCustom03">Office Address 3</label>
                                    <textarea class="form-control"  value="{{ $website->office_address_four }}" name="shrt_description">
                                       {{ $website->office_address_four }}
                                        </textarea>
                                     </div>
                                     <div class="col-md-6 mb-3">
                                        <label class="form-label" for="validationCustom03">Facebook</label>
                                        <input type="text" class="form-control" value="{{ $website->website_facebook }}" id="website_facebook" name="website_facebook"  />
                                      </div>
                                      <div class="col-md-6 mb-3">
                                        <label class="form-label" for="validationCustom03">Linkedin</label>
                                        <input type="text" class="form-control" value="{{ $website->website_linkedin }}" id="website_linkedin" name="website_linkedin"  />
                                      </div>
                                      <div class="col-md-6 mb-3">
                                        <label class="form-label" for="validationCustom03">Twitter</label>
                                        <input type="text" class="form-control" value="{{ $website->website_twitter }}" id="website_twitter" name="website_twitter"  />
                                      </div>
                                      <div class="col-md-6 mb-3">
                                        <label class="form-label" for="validationCustom03">Instagram</label>
                                        <input type="text" class="form-control" value="{{ $website->website_instagram }}" id="website_instagram" name="website_instagram"  />
                                      </div>
                                      <div class="col-md-6 mb-3">
                                        <label class="form-label" for="validationCustom03">Pinterest</label>
                                        <input type="text" class="form-control" value="{{ $website->pinterest }}" id="pinterest" name="pinterest"  />
                                      </div>
                                      <div class="col-md-6 mb-3">
                                        <label class="form-label" for="validationCustom03">Youtube</label>
                                        <input type="text" class="form-control" value="{{ $website->website_youtube }}" id="website_youtube" name="website_youtube"  />
                                      </div>
                    <div class="row">
                    <div class="col-md-12">
                        <label class="form-label" for="validationCustom03">Footer Text</label>
                    <textarea name="footer_text"  value="{{ $website->footer_text }}" id="ckeditor">
                        {{ $website->footer_text }}
                        </textarea>
                     </div>
                     <div class="row">
                     <div class="col-md-6 mb-3">
                        <label class="form-label" for="validationCustom03">Logo Image</label>
                        <input type="file" class="form-control" id="validationCustom03" name="website_logo" />

                        @if ($website->website_logo)
                        <div class="mt-2">
                            <p>Current Image:</p>
                            <img src="{{ url('images/' . $website->website_logo) }}" alt="Current Image" width="100">
                        </div>
                        @endif
                      </div>

                      <div class="col-md-6 mb-3">
                        <label class="form-label" for="validationCustom03">Logo Second</label>
                        <input type="file" class="form-control" id="validationCustom03" name="second_logo" />

                        @if ($website->second_logo)
                        <div class="mt-2">
                            <p>Current Image:</p>
                            <img src="{{ url('images/' . $website->second_logo) }}" alt="Current Image" width="100">
                        </div>
                        @endif
                      </div>
                     
                      <div class="col-md-6 mb-3">
                        <label class="form-label" for="validationCustom03">Logo Icon</label>
                        <input type="file" class="form-control" id="validationCustom03" name="website_icon" />
                        @if ($website->website_icon)
                        <div class="mt-2">
                            <p>Current Image:</p>
                            <img src="{{ url('images/' . $website->website_icon) }}" alt="Current Image" width="70">
                        </div>
                        @endif
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

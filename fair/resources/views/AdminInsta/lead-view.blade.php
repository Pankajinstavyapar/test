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
                  
                  <li class="breadcrumb-item" aria-current="page">Leads</li>
                </ul>
              </div>
              <div class="col-md-12">
                <div class="page-header-title">
                  <h2 class="mb-0">Leads</h2>
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
             
                 
                  <div class="row">
                    <div class="col-md-6 mb-3">
                      <label class="form-label">Lead Recieved On</label>
                      <input type="text" class="form-control" value="Date: {{ $contact->created_at }}"/>
                    
                    </div>
                  
                    <div class="col-md-6 mb-3">
                      <label class="form-label">Name</label>
                      <input type="text" class="form-control" value="{{ $contact->name }}"/>
                    </div>
                    <div class="col-md-6 mb-3">
                      <label class="form-label">Phone</label>
                      <input type="text" class="form-control" value="{{ $contact->phone }}"/>
                    </div>
                     <div class="col-md-6 mb-3">
                      <label class="form-label">Address</label>
                      <input type="text" class="form-control" value="{{ $contact->address }}"/>
                    </div>
                     <div class="col-md-6 mb-3">
                      <label class="form-label">Message</label>
                      <input type="text" class="form-control" value="{{ $contact->message }}"/>
                    </div>
                    <div class="col-md-6 mb-3">
                      <label class="form-label">Email</label>
                      <input type="text" class="form-control" value="{{ $contact->email }}"/>
                    </div>

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

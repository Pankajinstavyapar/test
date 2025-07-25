<!doctype html>
<html lang="en">

@include('AdminInsta.Backend.Layout.common-head')
<!-- [Head] end -->
<!-- [Body] Start -->

<body data-pc-preset="preset-1" data-pc-sidebar-theme="light" data-pc-sidebar-caption="true" data-pc-direction="ltr"
  data-pc-theme="light">
  <!-- [ Pre-loader ] start -->
  <div class="loader-bg">
    <div class="loader-track">
      <div class="loader-fill"></div>
    </div>
  </div>
  <!-- [ Pre-loader ] End -->

  <!-- [ Sidebar Menu ] start -->
  @include('AdminInsta.Backend.Layout.sidebar')
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
              <div class="col-md-6">
                <div class="page-header-title">
                  <h2 class="mb-0">Manage Leads</h2>
                </div>
              </div>
             
            </div>
          </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
          <!-- Column Rendering table start -->
          <div class="col-sm-12">
            <div class="card">
              <div class="card-body">
                <div class="table-responsive">
                  <table id="colum-render" class="table table-striped table-bordered nowrap">
                    <thead>
                      <tr>
                        <th>S.no</th>
                        <!--<th>Lead For</th>-->
                        <th>Name</th>
                        <th>Phone</th>
                       
                        <th>DateTime</th>
                        <th>Address</th>
                         <th>Action</th>
                      </tr>
                      </thead>
                      <tbody>
                      @php
                      $pi = ($contact->currentPage() - 1) * $contact->perPage() + 1;
                      @endphp
                      @foreach($contact as $data)
                      
                      <tr>
                        <td>{{ $pi}}</td>
                        <!--<td>{{ $data['query']}}</td>-->
                        <td>{{ $data['name']}}</td>
                        <td>{{ $data['phone']}}</td>
                        
                        <td>{{ \Carbon\Carbon::parse($data['created_at'])->format('d-m-Y H:i:s') }}</td>
                        <td>{{ $data['address']}}</td>
                       
                       <td class="text-center">
                    <a href="{{ route('AdminInsta.lead-view', $data->id) }}" class="btn btn-primary btn-sm">VIEW</a>
                  </td>
                        
                      </tr>
                      @php
                      $pi++;
                      @endphp
                      @endforeach
                      
                      </tbody>
                    
                  </table>
                  <div class="paginations">
                    {{ $contact->links('pagination::bootstrap-4') }}
                    </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Column Rendering table end -->
          
        </div>
        <!-- [ Main Content ] end -->
      </div>
    </section>

    
    <!-- [ Main Content ] end -->
    @include('AdminInsta.Backend.Layout.footer')
 <!-- Required Js -->
         
    <!-- [Page Specific JS] start -->
    <!-- datatable Js -->
    @include('AdminInsta.Backend.Layout.common-end')

    
    <!-- [Page Specific JS] end -->
  </body>
  <!-- [Body] end -->

</html>

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
                  <h2 class="mb-0">category</h2>
                </div>
              </div>

              <div class="col-md-6">
                <div class="text-end">
                <a href="{{ route('AdminInsta.category') }}" class="btn btn-primary">Add category</a>
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
                        <th>Category Title</th>
                        <th>Category Image</th>
                        <th>Status</th>
                        <th>Action</th>
                      </tr>
                      </thead>
                      <tbody>
                      @php
                      $pi = ($category->currentPage() - 1) * $category->perPage() + 1;
                      @endphp
                      @foreach($category as $data)
                      
                      <tr>
                        <td>{{ $pi}}</td>
                        <td>{{ $data['product_category_title']}}</td>
                        <td>
                        <img src="{{ url('images/' . $data['image']) }}" alt="Pages Image" width="100" height="100">
                       </td>
                       <td>
                        <div class="toggle-button">
                            <input type="checkbox" class="itemCheckbox visually-hidden" data-item-id="{{ $data->product_cat_id }}" data-initial-status="{{ $data->pg_status === 'active' ? 'active' : 'inactive' }}" {{ $data->pg_status === 'active' ? 'checked' : '' }}>
                            <label class="toggle-button-label" for="itemCheckbox"></label>
                        </div>
                    </td>
                        <td class="text-center">
                        <a href="{{ route('AdminInsta.category-edit', $data->product_cat_id) }}" class="btn btn-primary btn-sm">Edit</a>
    
                    <form action="{{ route('AdminInsta.manage-category.destroy', $data->product_cat_id) }}" method="post" style="display: inline-block">
                    @csrf
                    @method('DELETE')
                   <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                  </form>
                      </td>
                      </tr>
                      @php
                      $pi++;
                      @endphp
                      @endforeach
                      </tbody>
                  </table>
                   <div class="paginations">
                    {{ $category->links('pagination::bootstrap-4') }}
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

    <script>
        $(document).ready(function () {
            $('.toggle-button').on('click', function () {
                const checkbox = $(this).find('.itemCheckbox');
                const categoryId = checkbox.data('item-id');
                const isChecked = checkbox.prop('checked');
                const pgStatus = isChecked ? 'inactive' : 'active';
    
               $.ajax({
                    url: '{{ url("/AdminInsta/prdct-status/") }}' + '/' + categoryId + '/updateStatus',
                    method: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}',
                        pg_status: pgStatus,
                    },
                    success: function (response) {
                        console.log(response.message);
                       
                        checkbox.prop('checked', !isChecked);
                    },
                    error: function (xhr, status, error) {
                        console.error(error);
                    },
                });
            });
        });
    </script>
    <!-- [Page Specific JS] end -->
  </body>
  <!-- [Body] end -->

</html>

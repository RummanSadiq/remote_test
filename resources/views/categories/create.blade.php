<!-- @extends('layouts.app') -->

@section('content')
<div class="main-panel">
  <div class="module-heading">
    <div class="row">
      <div class="col-sm-7">
        <h2>Category</h2>
      </div>
      <div class="col-sm-5 text-right">
        <div class="breadcrumbs">
          <ul>
            <!-- <li><a href="{{url('/admin')}}"><i class="fa fa-home"></i> Dashboard</a></li> -->
            <li><a href="{{url('/categories')}}">Categories</a></li>
            <li>Add New</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!--Begin Content-->
  <div class="content dashboard_v1">
    <form action="{{url('categories')}}" method="post" class="setting-form">
      <div class="row">
        <div class=" col-md-12  p-t-30 ">
          <div class="pvr-wrapper">
            <div class="pvr-box">
              <div class="form-group">
                <label>Category</label>
                <input type="text" class="form-control" name="name" required value="{!!@$category['name']!!}" placeholder="Enter category name" />
              </div>
              <div class="form-group">
                <label>Parent Category</label>
                <select id="parent_id" name="parent_id" class="form-control  select2-me ">
                  <option value="0">Select Category</option>
                  @php
                  foreach($categories as $cat)
                  {
                  @endphp
                  <option @php if($cat->id == @$category->id){ echo 'selected'; }@endphp value="{{ $cat->id }}">{{ $cat->name }}</option>
                  @php
                  }
                  @endphp
                </select>
              </div>
              <div class="form-group">
                <label>Status</label>
                <div class="i_check_div">
                  <dd class="selected">
                    <div class="skin skin-square skin-section custom-skin">
                      <ul class="list inline-list">
                        <!-- <li>
                          <input @if(@$category['is_active']==1) checked @endif tabindex="11" type="radio" id="square-radio-1" name="is_active" value="1" />
                          <label for="square-radio-1"> Active</label>
                        </li> -->
                        <!-- <li>
                          <input @if(@$category['is_active']==0) checked @endif tabindex="12" type="radio" id="square-radio-2" name="is_active" value="0" />
                          <label for="square-radio-2">Inactive</label>
                        </li> -->
                      </ul>
                    </div>
                  </dd>
                </div>
              </div>
            </div>
          </div>
          <div class="form-group text-right">
            {{ csrf_field() }}
            <!-- <input type="hidden" name="action" value="action!!!!"/> -->
            <input type="hidden" name="id" value="{!!@$category['id']!!}">
            <button type="reset" class="btn btn-default" onclick="location.reload();"><i class="icons icon-refresh"></i> Reset</button>
            <button type="submit" class="btn btn-primary"><i class="icons icon-check"></i> Submit</button>

          </div>
        </div>

      </div>

    </form>
  </div>
</div>
@endsection

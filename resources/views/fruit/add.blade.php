@extends('layout.app')
@section('content')
<div class="main-content">
	<div class="container-fluid">
		<div class="product_content">
			<div class="card card-default" style="background-image:url(/images/green.jpg);">
					<div class="card"   style="margin:0 auto;width: 650px;">
						<div class="card-header" >
							<h3 class="text-center">Fruit Shops Order</h3>
						 </div>
					<div class="card card-body" >
						<div class="col-md-12">
							<div class="col-sm-12">
								<form action="{{route('fruit.store')}}" method="post"  enctype="multipart/form-data">
								  {{ csrf_field() }}
								  <input type="hidden" name="_token" value="{{ csrf_token() }}">
								  <div class="form-group">
								  	<div class="col-md-12 mb-3">
								      <label for="name">Fruit name</label>
								      <input name="name" type="text" class="form-control" placeholder="First name" required>
								    </div>
								  </div>
								  
								  <div class="form-group">
								  	<div class="col-md-12 mb-3">
								      <label for="short_name">Short name</label>
								      <input name="short_name" type="text" class="form-control"  placeholder="Short name" required>
								    </div>
								  </div>


								  <div class="form-group">
								  	<div class="col-md-12 mb-3">
								      <label for="image">Image file</label>
								      <input name="image" type="file" class="form-control-file"  placeholder="Choose Image file" required>
								    </div>
								  </div>


								  <div class="form-group">
								  	<div class="col-md-12 mb-3">
								      <label for="price">Price</label>
								      <input name="price" type="text" class="form-control" placeholder="Enter price amount" required>
								    </div>
								  </div>
								  <div class="form-group" role="group" aria-label="Basic example">
								  	<div class="form-row ml-3">
								  		<div class="col-md-3">
									  <button type="submit" class="btn btn-brand btn-primary pl-4 pr-4">
										  Save
									  </button>
									  </div>
									  <div class="col-md-3">
									  <button type="button" class="btn btn-brand btn-danger">
										  Cancel
									  </button>
									</div>
									</div>
								</div>
								</form>
							</div>
						</div>
					</div>
					<div class="card-footer">
				<div class="ml-auto">
				<span>Developed by</span>
				<a href="https://coreui.io">TMS</a>
				</div>
			</div>
				</div>	
			</div>
		<!-- </div> -->
	</div>
</div>
@endsection

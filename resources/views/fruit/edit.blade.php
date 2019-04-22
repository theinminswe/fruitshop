@extends('layout.app')
@section('content')
<div class="main-content">
	<div class="container-fluid">
		<div class="product_content" style="margin:0 auto;width: 650px;">
			<div class="card card-default">
					<div class="card ">
						<div class="card-header">
							<h3 class="text-center">Editing Fruit Shops Order</h3>
						 </div>
					<div class="card card-body">
						<div class="col-md-12">
							<div class="col-sm-12">
								<form action="{{ route('fruit.update',$fruit->id)}}" method="POST" enctype="multipart/form-data">
									{{ csrf_field() }}
									{{ method_field('PUT')}}

								  <div class="form-group">
								  	<div class="col-md-12 mb-3">
								      <label for="name">Fruit name***</label>
								      <input name="name" type="text" class="form-control"  placeholder="First name" value="{{ $fruit->name}} " required>
								    </div>
								  </div>

								  <div class="form-group">
								  	<div class="col-md-12 mb-3">
								      <label for="short_name">Short name***</label>
								      <input type="text" class="form-control" placeholder="Short name" value="{{$fruit->short_name}}" name="short_name" required>
								    </div>
								  </div>


								  <div class="form-group">
								  	<div class="col-md-12 mb-3">
								      <label for="image">Image file***</label>
								      <input type="file" name="image" class="form-control-file" placeholder="Choose Image file" value="" required>
								    </div>
								  </div>


								  <div class="form-group">
								  	<div class="col-md-12 mb-3">
								      <label for="price">Price***</label>
								      <input type="text" class="form-control" id="validationCustom04" placeholder="Choose Image file" value="{{$fruit->price}}" name="price" required>
								    </div>
								  </div>
								  <div class="btn-group" role="group" aria-label="Basic example">
								  	<div class="form-row ml-3">
								  		<div class="col-md-3">
									  <button type="submit" class="btn btn-brand btn-primary">
										  Save
									  </button>
									  </div>
									  <div class="col-md-3"></div>
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
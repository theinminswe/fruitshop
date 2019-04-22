@extends('layout.app')
@section('content')
<div class="main-content">
	<div class="container-fluid">
		<div class="product_content" style="margin:0 auto;">
			<div class="card card-default">
				<!-- card -->
				<div class="card ">

					<div class="card-header" style="background-image:url(images/green.jpg);">
						<h3 class="card-text text-center " style="color:white;">Fruit Shops Order</h3>
						<a href="/fruit/create" class="btn btn-white btn-outline-primary"><i class="fa fa-plus"></i>Create</a>
					</div>

					<div class="card card-body" style="background-image:url(images/green.jpg);">
						@include('partials.success')
						<div class="row">
							@foreach($fruits as $f) 
						        <div class="form-group col-md-3">
						          <div class="card mb-4 shadow-sm">
						            <img src="uploads/images/{{$f->image}}" class="img-fluid"/>
						            <div class="card-body">
						              <p class="card-text">{{$f->name}}</p>
						              <div class="d-flex justify-content-between align-items-center">
						                <div class="btn-group">
						                  <a  href="/fruit/{{$f->id}}" class="btn btn-sm btn-outline-secondary">View</a>
						                  <a  href="/fruit/{{$f->id}}/edit" class="btn btn-sm btn-outline-secondary">Edit</a>
						                </div>
						                <form action="{{ route('fruit.destroy',$f->id)}}" method="POST">
						                	 {{ csrf_field() }}
										   {{method_field('DELETE')}}
										     <input  type="submit" class="btn btn-sm btn-outline-danger" value="Delete"/>
										</form>
						               
						              </div>
						            </div>
						          </div>
						        </div>
						      @endforeach

						       

						</div>
					</div>
					<!-- end card-body -->

				</div>
				<!-- end card -->
			</div>
		</div>
	</div>	
</div>						
@endsection

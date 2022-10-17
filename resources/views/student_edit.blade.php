@extends('layout.layout')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-12 text-center pt-5">
			<h1 class="display-one mt-5">Student edit</h1>
			<div class="text-left"><a href="#" class="btn btn-outline-primary">Student list</a></div>

			<form id="edit-frm" method="POST" action="" class="border p-3 mt-2">
				<div class="control-group col-6 text-left">
					<label for="title">Full name</label>
					<div>
						<input type="text" id="title" class="form-control mb-4" name="fullname"
							placeholder="Enter Title" value="{!! $student->fullname !!}"
							required>
					</div>
				</div>
				<div class="control-group col-6 mt-2 text-left">
					<label for="body">Birthday</label>
					<div>
						<input type="date" id="title" class="form-control mb-4" name="birthday"
							value="{!! $student->birthday !!}"
							>
					</div>
				</div>

				<div class="control-group col-6 mt-2 text-left">
					<label for="body">Address</label>
					<div>
						<input type="text" id="price" class="form-control mb-4" name="address"
							placeholder="Enter Price" value="{!! $student->address !!}"
							>
					</div>
				</div>

				@csrf
				@method('PUT')
				<div class="control-group col-6 text-left mt-2"><button class="btn btn-primary">Save Update</button></div>
			</form>
		</div>
	</div>
</div>
@endsection
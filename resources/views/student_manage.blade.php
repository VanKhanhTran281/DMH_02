@extends('layout.layout')
@section('content')
    <div class="container text-center">
        <h1>List students</h1>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Handle</th>
                <th scope="col"></th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody>
                @forelse($students as $student)
                <tr>
                    <td>{!! $student->id !!}</td>
                    <td class="pr-5 text-right">{!! $student->fullname !!}</td>
                    <td>{!! $student->birthday !!}</td>
                    <td>{!! $student->address !!}</td>
                    <td><a href="edit/{!! $student->id !!}"
                        class="btn btn-outline-primary">Edit</a>
                        <button type="button" class="btn btn-outline-danger ml-1"
                            onClick='showModel({!! $student->id !!})'>Delete</button></td>
                </tr>
                @empty
                <tr>
                    <td colspan="3">No students found</td>
                </tr>
                @endforelse
            </tbody>
            <div class="modal fade" id="deleteConfirmationModel" tabindex="-1" role="dialog"
	aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-body">Are you sure to delete this record?</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" onClick="dismissModel()">Cancel</button>
				<form id="delete-frm" class="" action="" method="POST">
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-danger">Delete</button>
                </form>
			</div>
		</div>
	</div>
</div>

<script>
function showModel(id) {
	var frmDelete = document.getElementById("delete-frm");
	frmDelete.action = 'student/'+id;
	var confirmationModal = document.getElementById("deleteConfirmationModel");
	confirmationModal.style.display = 'block';
	confirmationModal.classList.remove('fade');
	confirmationModal.classList.add('show');
}

function dismissModel() {
	var confirmationModal = document.getElementById("deleteConfirmationModel");
	confirmationModal.style.display = 'none';
	confirmationModal.classList.remove('show');
	confirmationModal.classList.add('fade');
}
</script>

            
            {{-- @foreach ($result as $key => $id)


            <tbody><tr>
                <th>{{ $key+1 }}</th>
                <th>{{ $id->fullname }}</th>
                <th>{{ $id->birthday }}</th>
                <th>{{ $id->address }}</th>
                <th><button type="button" class="btn btn-success" >Edit</button></th>
                <th><button type="button" class="btn btn-dark" href="Route::get('student_edit',[studentController::class,'get_student_by_id']);">Delete</button></th>
              </tr>
            </tbody>
        @endforeach --}}
    </div>
@endsection
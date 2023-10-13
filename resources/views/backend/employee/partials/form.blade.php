<div class="modal fade text-left" id="employeeModal" tabindex="-1" role="dialog" aria-labelledby="employeeModal"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="employeeModal">Tambah Staff</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="employeeForm" action="{{ route('employees.store') }}" method="POST" data-request="ajax"
                data-success-callback="{{ route('employees') }}" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="">Nomor Identitas (NIK/NIP/NIDN) <span class="text-danger">*</span></label>
                        <input type="text" name="identity_number" id="identity_number" class="form-control"
                            placeholder="Nomor Identitas (NIK/NIP/NIDN)" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label for="">Nama Staff (Beserta gelar) <span class="text-danger">*</span></label>
                        <input type="text" name="name" id="name" class="form-control"
                            placeholder="Nama Staff" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label for="">Jenis Kelamin <span class="text-danger">*</span></label>
                        <select name="gender" class="form-control" id="gender">
                            <option value="">Pilih Jenis Kelamin</option>
                            <option value="male">Laki-Laki</option>
                            <option value="female">Perempuan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Jenis Staff <span class="text-danger">*</span></label>
                        <select name="employee_type" class="form-control" id="employee_type">
                            <option value="">Pilih Jenis Staff</option>
                            @foreach ($employeeTypes as $item)
                                <option value="{{ $item->hashid }}">{{ $item->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Foto Profil</label>
                        <input type="file" name="file" id="dropify" class="dropify">
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary waves-effect waves-light" type="submit"><i
                            class="feather icon-send"></i>
                        Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@section('_js')
    <script>
        $('#dropify').dropify()
    </script>
@endsection

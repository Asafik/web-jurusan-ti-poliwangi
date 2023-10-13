<div class="modal fade text-left" id="achievementModal" tabindex="-1" role="dialog" aria-labelledby="achievementModal"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="achievementModal">Tambah Prestasi Mahasiswa</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="achievementForm" action="{{ route('achievements.store') }}" method="POST" data-request="ajax"
                data-success-callback="{{ route('achievements') }}" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="">Nama Prestasi <span class="text-danger">*</span></label>
                        <input type="text" name="title" id="title" class="form-control"
                            placeholder="title" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label for="">Lokasi Kejuaraan <span class="text-danger">*</span></label>
                        <input type="text" name="location" id="location" class="form-control"
                            placeholder="location" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label for=""> Jenis Prestasi<span class="text-danger">*</span></label>
                        <select name="achievement_type_id" class="form-control" id="achievement_type_id">
                            <option value="">Pilih Jenis Prestasi</option>
                            @foreach ($achievementTypes as $item)
                                <option value="{{ $item->hashid }}">{{ $item->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Foto Penghargaan</label>
                        <input type="file" name="file" id="dropify" class="dropify">
                    </div>
                </div>
                <div class="form-group">
                    <label for="">Tanggal Kejuaraan <span class="text-danger">*</span></label>
                    <input type="text" name="date" id="date" class="form-control"
                        placeholder="date" autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="">Detail Penghargaan <span class="text-danger">*</span></label>
                    <input type="text" name="description" id="description" class="form-control"
                        placeholder="description" autocomplete="off">
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

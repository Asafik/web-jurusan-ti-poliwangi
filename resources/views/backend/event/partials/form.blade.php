<div class="modal fade text-left" id="eventModal" tabindex="-1" role="dialog" aria-labelledby="eventModal"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="eventModal">Tambah Event/Berita</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="eventForm" action="{{ route('events.store') }}" method="POST" data-request="ajax"
                data-success-callback="{{ route('events') }}" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="">Judul Berita <span class="text-danger">*</span></label>
                        <input type="text" name="title" id="title" class="form-control"
                            placeholder="title" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label for="">Ringkasan Berita <span class="text-danger">*</span></label>
                        <input type="text" name="summary" id="summary" class="form-control"
                            placeholder="summary" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label for="">Konten Berita <span class="text-danger">*</span></label>
                        <input type="text" name="content" id="content" class="form-control"
                            placeholder="content" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label for="">Tanggal Mulai Event/Berita <span class="text-danger">*</span></label>
                        <input type="text" name="date_start" id="date_start" class="form-control"
                            placeholder="date_start" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label for="">Tanggal Berakhir Event/Berita <span class="text-danger">*</span></label>
                        <input type="text" name="date_end" id="date_end" class="form-control"
                            placeholder="date_end" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label for="">Foto Event/Berita</label>
                        <input type="file" name="thumbnail" id="dropify" class="dropify">
                    </div>
                    <div class="form-group">
                        <label for="">Slug Berita <span class="text-danger">*</span></label>
                        <input type="text" name="slug" id="slug" class="form-control"
                            placeholder="slug" autocomplete="off">
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
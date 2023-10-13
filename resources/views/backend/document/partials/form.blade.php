<div class="modal fade text-left" id="documentModal" tabindex="-1" role="dialog" aria-labelledby="documentModal"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="documentModal">Tambah Dokumen</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="documentForm" action="{{ route('documents.store') }}" method="POST" data-request="ajax"
                data-success-callback="{{ route('documents') }}">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="">Judul Dokumen <span class="text-danger">*</span></label>
                        <input type="text" name="title" id="title" class="form-control"
                            placeholder="Judul Dokumen" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label for="">Jenis Dokumen <span class="text-danger">*</span></label>
                        <select name="document_type" id="document_type" class="form-control">
                            <option value="">Pilih Jenis Dokumen</option>
                            @foreach ($documentTypes as $item)
                                <option value="{{ $item->hashid }}">{{ $item->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Keterangan </label>
                        <input type="text" name="description" id="description" class="form-control"
                            placeholder="Keterangan" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label for="">Link </label>
                        <input type="text" name="link" id="link" class="form-control" placeholder="Link"
                            autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label for="">Dokumen <span class="text-danger">*</span></label>
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

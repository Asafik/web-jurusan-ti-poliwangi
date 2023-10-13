<div class="modal fade text-left" id="menuModal" tabindex="-1" role="dialog" aria-labelledby="menuModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="menuModal">Tambah Menu</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="menuForm" action="{{ route('menus.store') }}" method="POST" data-request="ajax"
                data-success-callback="{{ route('menus') }}">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="">Nama Menu <span class="text-danger">*</span></label>
                        <input type="text" name="name" id="name" class="form-control" placeholder="Nama Menu"
                            autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label for="">Link <span class="text-danger">*</span></label>
                        <input type="text" name="link" id="link" class="form-control" placeholder="Link"
                            autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label for="">Parent </label>
                        <select name="parent" id="parent" class="form-control">
                            <option value="">Pilih Parent</option>
                            @foreach ($menus as $item)
                                <option value="{{ $item->hashid }}">{{ $item->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Link Target </label>
                        <select name="parent" id="parent" class="form-control">
                            <option value="none">none</option>
                            <option value="_blank">_blank</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Order </label>
                        <select name="order" id="order" class="form-control">

                        </select>
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

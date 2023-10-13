if (typeof table == 'undefined') {
    let table
}

table = initTable('#dataTable', [{
        name: 'id',
        data: null,
        width: '1%',
        mRender: function (data, type, row, meta) {
            return meta.row + meta.settings._iDisplayStart + 1;
        }
    },
    {
        name: "title",
        data: "title",
    },
    {
        name: 'thumbnail',
        data: 'thumbnail',
        mRender: function (data) {
            return data == null ? '-' : data;
        }
    },
    {
        name: 'id',
        data: 'hashid',
        width: 150,
        sortable: false,
        mRender: function (data, type, row) {
            var render = ``
            
            // if (userPermissions.includes('events.update')) {
                render += `<button class="btn btn-outline-primary btn-sm" type="button" onclick="editEvent('${data}')"><i class="feather icon-edit"></i></button> `
            // }

            // if (userPermissions.includes('events.delete')) {
                render += `<button class="btn btn-outline-danger btn-sm" data-toggle="delete" data-id="${data}"><i class="feather icon-trash-2"></i></button> `
            // }
           
            return render
        }
    }
]);



$('.add').on('click', function () {
    resetInvalid();
    $("#eventForm")[0].reset()
    $('#eventModal .modal-title').html('Tambah Event/Berita');
    $('#eventModal form').attr('action', `${window.location.href}/store`);
});

function editEvent(id) {
    $('#eventModal form').attr('action', `${window.location.href}/${id}/update`);
    $("#eventForm")[0].reset()
    fetch(`${window.location.href}/${id}/show`)
        .then(res => res.json())
        .then(data => {
            resetInvalid();
            $('#eventModal .modal-title').html('Edit Event');
            $('#title').val(data.data.title);
            $('#thumbnail').val(data.data.thumbnail);
            $('#summary').val(data.data.summary);
            $('#content').val(data.data.content);
            $('#date_start').val(data.data.date_start);
            $('#date_end').val(data.data.date_end);
            $('#slug').val(data.data.slug);
            $('#attachment').val(data.data.attachment);
            $('#eventModal').modal('show');
        });
}

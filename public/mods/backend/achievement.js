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
        name: "location",
        data: "location",
        mRender: function (data) {
            return data == null ? '-' : data;
        }
    },
    {
        name: 'achievement_type',
        data: 'achievement_type',
    },
    {
        name: 'date',
        data: 'date',
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
                render += `<button class="btn btn-outline-primary btn-sm" type="button" onclick="editAchievement('${data}')"><i class="feather icon-edit"></i></button> `
                render += `<button class="btn btn-outline-danger btn-sm" data-toggle="delete" data-id="${data}"><i class="feather icon-trash-2"></i></button> `
            

            return render
        }
    }
]);



$('.add').on('click', function () {
    resetInvalid();
    $("#achievementForm")[0].reset()
    $('#achievementModal .modal-title').html('Tambah Prestasi');
    $('#achievementModal form').attr('action', `${window.location.href}/store`);
});

function editAchievement(id) {
    $('#achievementModal form').attr('action', `${window.location.href}/${id}/update`);
    $("#achievementForm")[0].reset()
    fetch(`${window.location.href}/${id}/show`)
        .then(res => res.json())
        .then(data => {
            resetInvalid();
            $('#achievementModal .modal-title').html('Edit Prestasi');
            $('#title').val(data.data.title);
            $('#location').val(data.data.location);
            $('#achievement_type_id').val(data.achievement_type_id);
            $('#date').val(data.data.date);
            $('#description').val(data.data.description);
            $('image').val(data.data.image);
            $('#achievementModal').modal('show');
        });
}

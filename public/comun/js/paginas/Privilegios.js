$(document).ready(function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    const root = new Privilegios();

    // document.querySelectorAll('button[status-pub]').forEach(el => {
    //     el.addEventListener('click', root.onClickStatus);
    // });
    document.querySelectorAll('button[edit-priv]').forEach(el => {
        el.addEventListener('click', function(e){
            root.onClickEdit(e);
        });
    });

    document.querySelector('button#save-priv').addEventListener('click',function(e){
        root.onClickSave(e);
    });

});

class Privilegios {


    onClickStatus(e) {

    }

    onClickEdit(e) {
        let data = e.currentTarget.dataset;
        document.querySelector('#modal-edit-priv input#priv-id').value = data.id;
        document.querySelector('#modal-edit-priv input#priv-cat').value = data.cat;
        document.querySelector('#modal-edit-priv input#priv-name').value = data.pname;
    }

    onClickSave(e){
        let id = document.querySelector('#modal-edit-priv input#priv-id').value
        let new_name = document.querySelector('#modal-edit-priv input#priv-name').value;
        let new_cat = document.querySelector('#modal-edit-priv input#priv-cat').value;

        $.ajax({
            url:'/admin/privilegio/update',
            type:'POST',
            dataType:'json',
            data:{
                id:id,
                name:new_name,
                categoria:new_cat
            },
            success:function(data){
                console.log(data);
            }
        });
    }
}

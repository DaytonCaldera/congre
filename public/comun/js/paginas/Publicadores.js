$(document).ready(function () {
    const root = new Publicadores();

    document.querySelectorAll('button[status-pub]').forEach(el => {
        el.addEventListener('click', root.onClickStatus);
    });
    document.querySelectorAll('button[edit-pub]').forEach(el => {
        el.addEventListener('click', function(e){
            root.onClickEdit(e);
        });
    });

});

class Publicadores {

    onClickStatus(e) {

    }

    onClickEdit(e) {
        let id = e.currentTarget.dataset.idpub;
        // console.log(Publicadores.getDetailData(id));
        this.getDetailData(id).then(function(data){
            console.log(data);
        });
    }

    getDetailData(id) {
        // console.log(id);
        return $.ajax({
            url: "/api/publicador/data",
            type:'GET',
            data:{id:id}
        });
    }
}


var add_user_btn = document.getElementById('add_btn');
var delete_btn = document.getElementById('view_delete');
var cancel_delete = document.getElementById('cancel_delete');


var add_view=document.getElementById('form_inscription');
var delete_view = document.getElementById('delete_alert');
var update_view = document.getElementById('form_update');

add_user_btn.classList.add('desactive');
delete_btn.classList.add('desactive');
cancel_delete.classList.add('desactive');

add_view.classList.add('hidden');
update_view.classList.add('show');
delete_view.classList.add('hidden');


function showAdd(){
    if (add_user_btn.classList.contains('desactive')){
        add_user_btn.classList.remove('desactive');
        add_user_btn.classList.add('active');
        add_view.classList.add('show');
        add_view.classList.remove('hidden');
        delete_btn.classList.remove('active');
        delete_btn.classList.add('desactive');
        delete_view.classList.remove('show');
        delete_view.classList.add('hidden');
        update_view.classList.add('hidden');
        update_view.classList.remove('show');
    }else{
        add_user_btn.classList.add('desactive');
        add_user_btn.classList.remove('active');
        add_view.classList.remove('show');
        add_view.classList.add('hidden');
        update_view.classList.remove('hidden');
        update_view.classList.add('show');
    }
}

function showDelete(){
    if (delete_btn.classList.contains('desactive')){
        delete_btn.classList.remove('desactive');
        delete_btn.classList.add('active');
        delete_view.classList.add('show');
        delete_view.classList.remove('hidden');
        add_user_btn.classList.remove('active');
        add_user_btn.classList.add('desactive');
        add_view.classList.remove('show');
        add_view.classList.add('hidden');
    }else{
        delete_btn.classList.add('desactive');
        delete_btn.classList.remove('active');
        delete_view.classList.remove('show');
        delete_view.classList.add('hidden');
    }
}

function cancel(){
    if(cancel_delete.classList.contains('desactive')){
        delete_view.classList.remove('show');
        delete_view.classList.add('hidden');
    }
}

add_user_btn.addEventListener('click',showAdd);
delete_btn.addEventListener('click',showDelete);
cancel_delete.addEventListener('click',cancel);
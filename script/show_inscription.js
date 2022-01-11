var addUser_btn = document.getElementById('view_addUser');
var addUser_view = document.getElementById('inscription_content');
var status_btn = document.getElementById('view_status');
var status_view = document.getElementById('status_content');
var cancel_btn_s = document.getElementById('status_cancel');
var cancel_btn_u = document.getElementById('cancel_addUser');
var delete_btn = document.getElementById('view_delete');
var delete_view = document.getElementById('delete_alert');

addUser_btn.classList.add('desactive');
addUser_view.classList.add('hidden');
status_btn.classList.add('desactive');
status_view.classList.add('hidden');
cancel_btn_s.classList.add('active');
delete_btn.classList.add('desactive');
delete_view.classList.add('hidden');
function toggleUserAdd(){
    if(addUser_btn.classList.contains('desactive')){
        addUser_btn.classList.remove('desactive');
        addUser_view.classList.remove('hidden');
        addUser_btn.classList.add('active');
        addUser_view.classList.add('show');
    }else{
        addUser_btn.classList.add('desactive');
        addUser_view.classList.add('hidden');
        addUser_btn.classList.remove('active');
        addUser_view.classList.remove('show');
    }
}

function toggleAlert(){
    if(delete_btn.classList.contains('desactive')){
        delete_btn.classList.remove('desactive');
        delete_view.classList.remove('hidden');
        delete_btn.classList.add('active');
        delete_view.classList.add('show');
    }else{
        delete_btn.classList.add('desactive');
        delete_view.classList.add('hidden');
        delete_btn.classList.remove('active');
        delete_view.classList.remove('show');
    }
}

function toggleStatusAdd(){
    if(status_btn.classList.contains('desactive')){
        status_btn.classList.remove('desactive');
        status_view.classList.remove('hidden');
        status_btn.classList.add('active');
        status_view.classList.add('show');
    }else{
        status_btn.classList.add('desactive');
        status_view.classList.add('hidden');
        status_btn.classList.remove('active');
        status_view.classList.remove('show');
    }
}

function cancelSatus(){
    if(cancel_btn_s.classList.contains('active')){
        status_view.classList.remove('show');
        status_btn.classList.remove('active');
        status_btn.classList.add('desactive');
        status_view.classList.add('hidden');
    }
}

function cancelUserA(){
    if(cancel_btn_u.classList.contains('active')){
        addUser_btn.classList.add('desactive');
        addUser_view.classList.add('hidden');
        addUser_btn.classList.remove('active');
        addUser_view.classList.remove('show');
    }
}

addUser_btn.addEventListener('click',toggleUserAdd);
delete_btn.addEventListener('click',toggleAlert);
status_btn.addEventListener('click',toggleStatusAdd);
cancel_btn_s.addEventListener('click',cancelSatus);
cancel_btn_u.addEventListener('click',cancelUserA);

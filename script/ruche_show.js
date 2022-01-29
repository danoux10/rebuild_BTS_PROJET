var view_content=document.getElementById('view_content');
var view_admin = document.getElementById('admin_view');
var admin_view=document.getElementById('admin_view');
var ruche_add = document.getElementById('add_ruche');
var rucher_add = document.getElementById('add_rucher');

//btn
var graph_btn = document.getElementById('graph_view');
var rucher_btn = document.getElementById('rucher_view');
var ruche_add_btn = document.getElementById('ajout_ruche');
var rucher_add_btn = document.getElementById('ajout_rucher')
var annul_ruche=document.getElementById('cancel_ruche');
var annul_rucher=document.getElementById('cancel_rucher');

graph_btn.classList.add('active');
rucher_btn.classList.add('desactive');
ruche_add_btn.classList.add('desactive');
rucher_add_btn.classList.add('desactive');
annul_ruche.classList.add('desactive');
annul_rucher.classList.add('desactive');

view_content.classList.add('show');
view_admin.classList.add('hidden');
admin_view.classList.add('show');
ruche_add.classList.add('invisible');
rucher_add.classList.add('invisible');



function toggleRucheAdd(){
    if(ruche_add_btn.classList.contains('desactive')){
        ruche_add.classList.remove('desactive');
        ruche_add.classList.remove('invisible');
        ruche_add_btn.classList.add('active');
        ruche_add.classList.add('show');
        rucher_add_btn.classList.remove('active');
        rucher_add.classList.remove('show');
        rucher_add.classList.add('desactive');
        rucher_add.classList.add('invisible');
    }else{
        ruche_add_btn.classList.remove('active');
        ruche_add.classList.remove('show');
        ruche_add.classList.add('desactive');
        ruche_add.classList.add('invisible');
        rucher_add_btn.classList.remove('active');
        rucher_add.classList.remove('show');
        rucher_add.classList.add('desactive');
        rucher_add.classList.add('invisible');
    }
}
function toggleRucherAdd(){
    if(rucher_add_btn.classList.contains('desactive')){
        rucher_add.classList.remove('desactive');
        rucher_add.classList.remove('invisible');
        rucher_add_btn.classList.add('active');
        rucher_add.classList.add('show');
        ruche_add_btn.classList.remove('active');
        ruche_add.classList.remove('show');
        ruche_add.classList.add('desactive');
        ruche_add.classList.add('invisible');

    }else{
        rucher_add_btn.classList.remove('active');
        rucher_add.classList.remove('show');
        rucher_add.classList.add('desactive');
        rucher_add.classList.add('invisible');
        ruche_add_btn.classList.remove('active');
        ruche_add.classList.remove('show');
        ruche_add.classList.add('desactive');
        ruche_add.classList.add('invisible');
    }
}

function invisibleRuche(){
    if(annul_ruche.classList.contains('desactive')){
        ruche_add.classList.add('invisible');
        ruche_add.classList.remove('show');
        ruche_add_btn.classList.add('desactive');
        ruche_add_btn.classList.remove('active');
    }
}

function invisibleRucher(){
    if(annul_rucher.classList.contains('desactive')){
        rucher_add.classList.add('invisible');
        rucher_add.classList.remove('show');
        rucher_add_btn.classList.add('desactive');
        rucher_add_btn.classList.remove('active');
    }
}

ruche_add_btn.addEventListener('click',toggleRucheAdd);
rucher_add_btn.addEventListener('click',toggleRucherAdd);
annul_ruche.addEventListener('click',invisibleRuche);
annul_rucher.addEventListener('click',invisibleRucher);

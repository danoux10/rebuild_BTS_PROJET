var view_content=document.getElementById('view_content');
var admin_view=document.getElementById('admin_view');
var ruche_add = document.getElementById('add_ruche');
var rucher_add = document.getElementById('add_rucher');

//btn
var ruche_add_btn = document.getElementById('ajout_ruche');
var rucher_add_btn = document.getElementById('ajout_rucher')
var annul_ruche=document.getElementById('cancel_ruche');
var annul_rucher=document.getElementById('cancel_rucher');


// view_content.classList.add('');
admin_view.classList.add('show');
ruche_add.classList.add('hidden');
rucher_add.classList.add('hidden');

ruche_add_btn.classList.add('desactive');
rucher_add_btn.classList.add('desactive');
annul_ruche.classList.add('desactive');
annul_rucher.classList.add('desactive');


function toggleRucheAdd(){
    if(ruche_add_btn.classList.contains('desactive')){
        ruche_add.classList.remove('desactive');
        ruche_add.classList.remove('hidden');
        ruche_add_btn.classList.add('active');
        ruche_add.classList.add('show');
        rucher_add_btn.classList.remove('active');
        rucher_add.classList.remove('show');
        rucher_add.classList.add('desactive');
        rucher_add.classList.add('hidden');
    }else{
        ruche_add_btn.classList.remove('active');
        ruche_add.classList.remove('show');
        ruche_add.classList.add('desactive');
        ruche_add.classList.add('hidden');
        rucher_add_btn.classList.remove('active');
        rucher_add.classList.remove('show');
        rucher_add.classList.add('desactive');
        rucher_add.classList.add('hidden');
    }
}
function toggleRucherAdd(){
    if(rucher_add_btn.classList.contains('desactive')){
        rucher_add.classList.remove('desactive');
        rucher_add.classList.remove('hidden');
        rucher_add_btn.classList.add('active');
        rucher_add.classList.add('show');
        ruche_add_btn.classList.remove('active');
        ruche_add.classList.remove('show');
        ruche_add.classList.add('desactive');
        ruche_add.classList.add('hidden');

    }else{
        rucher_add_btn.classList.remove('active');
        rucher_add.classList.remove('show');
        rucher_add.classList.add('desactive');
        rucher_add.classList.add('hidden');
        ruche_add_btn.classList.remove('active');
        ruche_add.classList.remove('show');
        ruche_add.classList.add('desactive');
        ruche_add.classList.add('hidden');
    }
}

function hiddenRuche(){
    if(annul_ruche.classList.contains('desactive')){
        ruche_add.classList.add('hidden');
        ruche_add.classList.remove('show');
        ruche_add_btn.classList.add('desactive');
        ruche_add_btn.classList.remove('active');
    }
}

function hiddenRucher(){
    if(annul_rucher.classList.contains('desactive')){
        rucher_add.classList.add('hidden');
        rucher_add.classList.remove('show');
        rucher_add_btn.classList.add('desactive');
        rucher_add_btn.classList.remove('active');
    }
}

ruche_add_btn.addEventListener('click',toggleRucheAdd);
rucher_add_btn.addEventListener('click',toggleRucherAdd);
annul_ruche.addEventListener('click',hiddenRuche);
annul_rucher.addEventListener('click',hiddenRucher);

var view_content=document.getElementById('view_content');
var view_admin = document.getElementById('rucher_admin');
var easter_egg = document.getElementById('easter');
var ruche_add = document.getElementById('add_ruche');
var rucher_add = document.getElementById('add_rucher');
var btn=document.getElementById('btn');
//btn
var graph_btn = document.getElementById('graph_view');
var rucher_btn = document.getElementById('rucher_view');
var ruche_add_btn = document.getElementById('ajout_ruche');
var rucher_add_btn = document.getElementById('ajout_rucher')
var annul_ruche=document.getElementById('cancel_ruche');
var annul_rucher=document.getElementById('cancel_rucher');

graph_btn.classList.add('desactive');
rucher_btn.classList.add('active');
ruche_add_btn.classList.add('desactive');
rucher_add_btn.classList.add('desactive');
annul_ruche.classList.add('desactive');
annul_rucher.classList.add('desactive');

view_content.classList.add('hidden');
view_admin.classList.add('show');
ruche_add.classList.add('invisible');
rucher_add.classList.add('invisible');

//hide easter if user
if(easter_egg.classList.contains('hidden')) {
    btn.classList.add('top');
}else{
    btn.classList.remove('top');
}

//show form
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

//hide form
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

function toggleGraph(){
    if(graph_btn.classList.contains('desactive')){
       graph_btn.classList.remove('desactive');
       view_content.classList.remove('hidden');
       rucher_btn.classList.remove('active');
       view_admin.classList.remove('show');
       graph_btn.classList.add('active');
       view_content.classList.add('show');
       rucher_btn.classList.add('desactive');
       view_admin.classList.add('hidden');
    }else{
        graph_btn.classList.add('desactive');
        view_content.classList.add('hidden');
        rucher_btn.classList.add('active');
        view_admin.classList.add('show');
        graph_btn.classList.remove('active');
        view_content.classList.remove('show');
        rucher_btn.classList.remove('desactive');
        view_admin.classList.remove('hidden');
    }
}
function toggleRucher(){
    if(rucher_btn.classList.contains('desactive')){
       graph_btn.classList.remove('active');
       view_content.classList.remove('show');
       rucher_btn.classList.remove('desactive');
       view_admin.classList.remove('hidden');
       graph_btn.classList.add('desactive');
       view_content.classList.add('hidden');
       rucher_btn.classList.add('active');
       view_admin.classList.add('show');
    }else{
        graph_btn.classList.add('desactive');
        view_content.classList.add('hidden');
        rucher_btn.classList.add('active');
        view_admin.classList.add('show');
        graph_btn.classList.remove('active');
        view_content.classList.remove('show');
        rucher_btn.classList.remove('desactive');
        view_admin.classList.remove('hidden');
    }
}

ruche_add_btn.addEventListener('click',toggleRucheAdd);
rucher_add_btn.addEventListener('click',toggleRucherAdd);
annul_ruche.addEventListener('click',invisibleRuche);
annul_rucher.addEventListener('click',invisibleRucher);
graph_btn.addEventListener('click',toggleGraph);
rucher_btn.addEventListener('click',toggleRucher);

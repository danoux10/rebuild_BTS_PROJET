//view form connexion
var connexion_btn = document.getElementById('connexion_view');
var connexion_form = document.getElementById('connexion_content');

connexion_form.classList.add('invisible');
connexion_btn.classList.add('desactive');

function toggleConnexionf() {
    if(connexion_btn.classList.contains('desactive')){
        connexion_btn.classList.add('active');
        connexion_btn.classList.remove('invisible');
        connexion_form.classList.add('show');
        connexion_form.classList.remove('invisible');
    }else{
        connexion_btn.classList.add('desactive');
        connexion_btn.classList.remove('active');
        connexion_form.classList.remove('show');
        connexion_form.classList.add('invisible');
    }
}

connexion_btn.addEventListener('click',toggleConnexionf)


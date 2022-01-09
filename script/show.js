var connexion_btn = document.getElementById('connexion_view');

var connexion_form = document.getElementById('connexion_content');

connexion_form.classList.add('hidden');
connexion_btn.classList.add('desactive');


function toggleConnexionf() {
    if(connexion_btn.classList.contains('desactive')){
        connexion_btn.classList.add('active');
        connexion_btn.classList.remove('desactive');
        connexion_form.classList.add('show');
        connexion_form.classList.remove('hidden');
    }else{
        connexion_btn.classList.add('desactive');
        connexion_btn.classList.remove('active');
        connexion_form.classList.remove('show');
        connexion_form.classList.add('hidden');
    }
}

connexion_btn.addEventListener('click',toggleConnexionf)


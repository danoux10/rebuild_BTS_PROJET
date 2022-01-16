//view graph & table
var graph_btn = document.getElementById('graph_btn');
var table_btn = document.getElementById('table_btn');
var graph_content = document.getElementById('graph_content');
var table_content = document.getElementById('table_content');

//view graph & table
graph_btn.classList.add('selected');
table_btn.classList.add('unselect');

graph_content.classList.add('visible');
table_content.classList.add('visible');

function toggleGraph(){
    if (graph_btn.classList.contains('selected')){
        graph_btn.classList.remove('selected');
        graph_btn.classList.add('unselect');
        graph_content.classList.remove('visible');
        graph_content.classList.add('hidden');
    }else{
        graph_btn.classList.add('selected');
        graph_btn.classList.remove('unselect');
        graph_content.classList.add('visible');
        graph_content.classList.remove('hidden');
    }
}

function toggleTable(){
    if (table_btn.classList.contains('selected')){
        table_btn.classList.remove('selected');
        table_btn.classList.add('unselect');
        table_content.classList.remove('visible');
        table_content.classList.add('hidden');
    }else{
        table_btn.classList.add('selected');
        table_btn.classList.remove('unselect');
        table_content.classList.add('visible');
        table_content.classList.remove('hidden');
    }
}

graph_btn.addEventListener('click',toggleGraph);
table_btn.addEventListener('click',toggleTable);
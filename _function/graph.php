<script>
    const ctx = document.getElementById('graph_content').getContext('2d');
    const myChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: <?php print_r(json_encode(@$dateRuche)) ?>,
            datasets: [{
                label:'temperature',
                data: <?php print_r(json_encode(@$temps)) ?>,
                backgroundColor: '#880000',
                borderColor: '#880000',
                borderWidth: 2,
            },{
                label: 'humiditer',
                data: <?php print_r(json_encode(@$humi)) ?>,
                backgroundColor: '#000088',
                borderColor: '#000088',
                borderWidth: 2,
            },{
                label: 'poids',
                data: <?php print_r(json_encode(@$poids)) ?>,
                backgroundColor: '#008800',
                borderColor: '#008800',
                borderWidth: 2,
            }]
        },
        options: {
            plugins:{
                title:{
                    display:true,
                    font:'bold',
                    text:<?php print_r(json_encode(@$ruche_name))?>
                }
            }
        }
    })
</script>
var rel1 = new Chart(document.getElementById('rel1'), {
    type:'line',
    data:{
        labels:['10/10', '11/10', '12/10', '13/10', '14/10', '15/10'],
        datasets:[{
                label:'Receita',
                data:[5, 4, 7, 20, 15,50],
                fill:false,
                backgoundColor:'#00ff00',
                borderColor:'#00ff00'
            },
            {
                label:'Receita',
                data:[10, 0, 2, 50, 20,10],
                fill:false,
                backgoundColor:'#ff0000',
                borderColor:'#ff0000'
            }
        ]
    }
});
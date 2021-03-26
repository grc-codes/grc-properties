require('./bootstrap');

$.get('/manager/estimated-total-revenue', function(info) {
    Morris.Area({
        element: 'morris_totalrevenue',
        behaveLikeLine: true,
        data: [
            { x: '2020-10-01', y: info[0] },
            { x: '2020-11-01', y: info[1] },
            { x: '2020-12-01', y: info[2] },
            { x: '2021-01-01', y: info[3] },
            { x: '2021-02-01', y: info[4] },
            { x: '2021-03-01', y: info[5] }
        ],
        xkey: 'x',
        ykeys: ['y'],
        labels: ['Y'],
        lineColors: ['#5969ff'],
        resize: true
    });
});

$.get('/manager/revenue-by-property', function(info) {
    let chart = c3.generate({
        bindto: "#c3chart_revenueByProperty",
        data: {
            columns: info,
            type: 'donut',
            onclick: function(d, i) { console.log("onclick", d, i); },
            onmouseover: function(d, i) { console.log("onmouseover", d, i); },
            onmouseout: function(d, i) { console.log("onmouseout", d, i); },
            colors: {
                Men: '#5969ff',
                Women: '#ff407b',
                Accessories: '#25d5f2',
                Children: '#ffc750',
                Apperal: '#2ec551',
            }
        },
        donut: {
            label: {
                show: true
            }
        }
    });
})
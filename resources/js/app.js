require('./bootstrap');

let chart = c3.generate({
    bindto: "#c3chart_revenueByProperty",
    data: {
        columns: [
            ['Knickerbocker', 20],
            ['Getty', 100],
            ['Main', 50],
            ['Genessee', 40],
            ['Crooks', 20],

        ],
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
            show: false
        }
    },
});

Morris.Area({
    element: 'morris_totalrevenue',
    behaveLikeLine: true,
    data: [
        { x: '2021-01-19', y: 0, },
        { x: '2021-01-20', y: 7500, },
        { x: '2021-01-21', y: 15000, },
        { x: '2021-01-22', y: 22500, },
        { x: '2021-01-23', y: 30000, },
        { x: '2021-01-24', y: 40000, }
    ],
    xkey: 'x',
    ykeys: ['y'],
    labels: ['Y'],
    lineColors: ['#5969ff'],
    resize: true

});
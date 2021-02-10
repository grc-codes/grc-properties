require('./bootstrap');

console.log('huh');
let chart = c3.generate({
    bindto: "#c3chart_revenueByProperty",
    data: {
        columns: [
            ['Knickerbocker', 100],
            ['Getty', 80],
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
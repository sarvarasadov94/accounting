$(function() {

    Morris.Area({
        element: 'morris-area-chart',
        data: [{
            period: '2016 Q1',
            conscript: 2666,
            soldier: null,
            officer: 2647
        }, {
            period: '2016 Q2',
            conscript: 2778,
            soldier: 2294,
            officer: 2441
        }, {
            period: '2016 Q3',
            conscript: 4912,
            soldier: 1969,
            officer: 2501
        }, {
            period: '2016 Q4',
            conscript: 3767,
            soldier: 3597,
            officer: 5689
        }, {
            period: '2017 Q1',
            conscript: 6810,
            soldier: 1914,
            officer: 2293
        }, {
            period: '2017 Q2',
            conscript: 5670,
            soldier: 4293,
            officer: 1881
        }, {
            period: '2017 Q3',
            conscript: 4820,
            soldier: 3795,
            officer: 1588
        }, {
            period: '2017 Q4',
            conscript: 15073,
            soldier: 5967,
            officer: 5175
        }, {
            period: '2018 Q1',
            conscript: 10687,
            soldier: 4460,
            officer: 2028
        }, {
            period: '2018 Q2',
            conscript: 8432,
            soldier: 5713,
            officer: 1791
        }],
        xkey: 'period',
        ykeys: ['conscript', 'soldier', 'officer'],
        labels: ['Призывники', 'Солдаты', 'Офицеры'],
        pointSize: 2,
        hideHover: 'auto',
        resize: true
    });

    Morris.Donut({
        element: 'morris-donut-chart',
        data: [{
            label: "Мирзо Улугбекский район",
            value: 1200
        }, {
            label: "Юнусабадский район",
            value: 300
        }, {
            label: "Шайхонтохурский район",
            value: 200
        }],
        resize: true
    });

    Morris.Bar({
        element: 'morris-bar-chart',
        data: [{
            y: '2013',
            a: 100,
            b: 90
        }, {
            y: '2014',
            a: 75,
            b: 65
        }, {
            y: '2015',
            a: 50,
            b: 40
        }, {
            y: '2016',
            a: 75,
            b: 65
        }, {
            y: '2017',
            a: 50,
            b: 40
        }, {
            y: '2018',
            a: 75,
            b: 65
        }],
        xkey: 'y',
        ykeys: ['a', 'b'],
        labels: ['Годен к военной службе', 'Негоден к военной службе'],
        hideHover: 'auto',
        resize: true
    });
    
});

$(document).ready(function () {
    $('#vmap').css(
        {
            'width': '700px',
            'height': '500px'
        }
    );

    $('.mapPoints a').click(function(e){
        e.preventDefault();
    });

    $('.mapPoints a').hover(function(){
        filterRegions($(this).attr('href'));
    }, function(){
        filterRegions('');
    });

    $(window).click(function(e){
        if(e.target.className.animVal != "jvectormap-region"){
            console.log(e.target.className);
            $('#mapLabels').html('');

        }
        if(e.target.className == "x_out"){
            $('#mapLabels').html('');
        }

    });
});

var regions = {
        to: 0,
        qo: 0,
        an: 0,
        bu: 0,
        qa: 0,
        no: 0,
        gu: 0,
        sa: 0,
        fa: 0,
        ji: 0,
        na: 0,
        te: 0,
        xo: 0
    };

function filterRegions(regionId) {
    var regionsList = {};
    $.each(regions, function (key, value) {
        var elementColor = '#4da9ec';
        regionsList[key] = elementColor;
    });
    if (regionId.length > 0){
        regionsList[regionId] = '#57bb64';
    }
    $('#vmap').vectorMap('set', 'colors', regionsList);
    return false;
}

function makeMap(messages, colors) {
    $('#vmap').html('');
    $('.jqvmap-label').remove();
    $('#vmap').vectorMap({
        map: 'uzbekistan',
        backgroundColor: '',
        color: 'transparent',
        hoverColor: '#00508d',
        enableZoom: false,
        showTooltip: true,
        borderColor: '#fff',
        borderWidth: 1,
        borderOpacity: 1,
        colors: {
            to: '#7acdf4',
            qo: '#01a9ea',
            an: '#42c0f0',
            bu: '#00aef0',
            qa: '#00b1f5',
            no: '#00b7fb',
            gu: '#42c0f0',
            sa: '#41bbe9',
            fa: '#00b5fa',
            ji: '#00b5fa',
            na: '#01a9ea',
            te: '#00b1f5',
            xo: '#42c0f0',
            tosh: '#00a6bc'
        },
        'stroke-width': 1,
        // onLabelShow: function (event, label, code) {
        //    $('#mapLabels').html(messages[code]);
        // },
        // onLabelShow: function (event, label, code) {
        //     $('.jqvmap-label').html(messages[code]);
        // }
        //onRegionOut: function(){
        //    $('#mapLabels').html('');
        //}
        onRegionClick: function (event, label, code) {
            $('#mapLabels').html(messages[label]);
            // console.log(messages[label]);
        },
    });
}
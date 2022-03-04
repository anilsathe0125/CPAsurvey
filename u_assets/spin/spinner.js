let innerWheel = new Winwheel({
    'numSegments': 4,
    'outerRadius': 110,
    'segments': [{
        'fillStyle': '#eae56f',
        'text': 'Prize 1'
    }, {
        'fillStyle': '#89f26e',
        'text': 'Prize 2'
    }, {
        'fillStyle': '#7de6ef',
        'text': 'prize 3'
    }, {
        'fillStyle': '#e7706f',
        'text': 'Prize 4'
    }]
});
let outerWheel = new Winwheel({
    'numSegments': 8,
    'textMargin': 0,
    'outerRadius': 210,
    'innerRadius': 110,
    'segments': [{
        'fillStyle': '#8C8A42',
        'text': '10'
    }, {
        'fillStyle': '#F2F0A8',
        'text': '20'
    }, {
        'fillStyle': '#519142',
        'text': '30'
    }, {
        'fillStyle': '#B7F7A8',
        'text': '40'
    }, {
        'fillStyle': '#4B898F',
        'text': '50'
    }, {
        'fillStyle': '#B1EFF5',
        'text': '60'
    }, {
        'fillStyle': '#8A4342',
        'text': '70'
    }, {
        'fillStyle': '#F0A9A8',
        'text': '100'
    }],
    'animation': {
        'type': 'spinToStop',
        'duration': 25,
        'spins': 15,
        'easing': 'Power3.easeOut',
        'callbackAfter': drawInnerWheel,
        'callbackFinished': alertPrize
    }
});
outerWheel.draw();
innerWheel.draw(false);

function drawInnerWheel() {
    innerWheel.rotationAngle = outerWheel.rotationAngle;
    innerWheel.draw(false);
}

function alertPrize() {
    let winningInnerSegment = innerWheel.getIndicatedSegment();
    let winningOuterSegment = outerWheel.getIndicatedSegment();
    var email = $('#user-info').data('email');
    if (typeof email != "undefined" && email != '') {
        $.ajax({
            url: "/manage-backend.php",
            type: "POST",
            data: {
                awardingEmail: email,
                awardedPoints: winningOuterSegment.text
            },
            success: function(response) {}
        });
        swal('Congratulations', 'You won ' + winningOuterSegment.text + ' Points', {
            icon: "success",
            buttons: {
                confirm: {
                    className: 'btn btn-success'
                }
            }
        }).then(function() {
            location.reload();
        });
    }
    wheelSpinning = false;
}
let wheelPower = 0;
let wheelSpinning = false;

function startSpin() {
    if (wheelSpinning == false) {
        outerWheel.stopAnimation(false);
        outerWheel.rotationAngle = 0;
        outerWheel.draw();
        innerWheel.rotationAngle = 0;
        innerWheel.draw(false);
        if (wheelPower == 1) {
            outerWheel.animation.spins = 3;
            outerWheel.animation.duration = 7;
        } else if (wheelPower == 2) {
            outerWheel.animation.spins = 8;
            outerWheel.animation.duration = 7;
        } else if (wheelPower == 3) {
            outerWheel.animation.spins = 15;
        }
        outerWheel.startAnimation();
        wheelSpinning = true;
    }
}
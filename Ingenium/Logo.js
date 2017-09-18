function draw() {
    var canvas = document.getElementById('canvas');
    if (canvas.getContext) {

        var ctx = canvas.getContext('2d');
        var j = 1.3;
        var i = 2;
        var x = 25 + j * 50; // x coordinate
        var y = 25 + i * 50; // y coordinate

        ctx.beginPath();
        ctx.lineWidth = 22;
        ctx.strokeStyle = "#66C4CD";
        var radius = 60; // Arc radius
        var startAngle = .4 * Math.PI; // Starting point on circle
        var endAngle = Math.PI + (Math.PI * j) / 2; // End point on circle

        ctx.arc(x, y, radius, startAngle, endAngle, false);
        ctx.stroke();
        ctx.closePath();


        ctx.lineWidth = 19;
        ctx.strokeStyle = "#F66F38";
        ctx.beginPath();
        radius = 40; // Arc radius
        startAngle = 0; // Starting point on circle
        endAngle = Math.PI + (Math.PI * j) / 2; // End point on circle

        ctx.arc(x, y, radius, startAngle, endAngle, false);
        ctx.stroke();
        ctx.closePath();

        ctx.beginPath()
        ctx.lineWidth = 13;
        ctx.strokeStyle = "#D1222F";
        radius = 56; // Arc radius
        startAngle = .3 * Math.PI; // Starting point on circle
        endAngle = Math.PI*.9; // End point on circle

        ctx.arc(x, y, radius, startAngle, endAngle, true);
        ctx.stroke();
        ctx.closePath();

    }

}

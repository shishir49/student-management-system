window.onload = function () {

    var options = {
        animationEnabled: true,  
        title:{
            text: "Student Admission by Year"
        },
        axisY: {
            title: "Number of Admitted Students",
            valueFormatString: "#0,.",
            suffix: "",
            prefix: ""
        },
        data: [{
            type: "area",
            markerSize: 5,
            xValueFormatString: "YYYY",
            yValueFormatString: "$#,##0.##",
            dataPoints: [
                { x: new Date(2000, 0), y: 2289000 },
                { x: new Date(2001, 0), y: 2830000 },
                { x: new Date(2002, 0), y: 1009000 },
                { x: new Date(2003, 0), y: 1840000 },
                { x: new Date(2004, 0), y: 1396000 },
                { x: new Date(2005, 0), y: 2613000 },
                { x: new Date(2006, 0), y: 1821000 },
                { x: new Date(2007, 0), y: 1000000 },
                { x: new Date(2008, 0), y: 1397000 },
                { x: new Date(2009, 0), y: 1506000 },
                { x: new Date(2010, 0), y: 1798000 },
                { x: new Date(2011, 0), y: 2386000 },
                { x: new Date(2012, 0), y: 4704000},
                { x: new Date(2013, 0), y: 4926000 },
                { x: new Date(2014, 0), y: 1394000 },
                { x: new Date(2015, 0), y: 972000 },
                { x: new Date(2016, 0), y: 1140000 }
            ]
        }]
    };
    $("#chartContainer").CanvasJSChart(options);
    
}
<!DOCTYPE>
<html>
<head>
<title>jspdf</title>
</head>
<script type="text/javascript" src="js/jspdf.min.js"></script>
<script type="text/javascript">
function genPDF() {
	
	var doc = new jsPDF();
	
    var specialElementHandlers = {
        '#hidediv' : function(element,render) {return true;}
    };
    
    doc.fromHTML($('#testdiv').get(0), 20,20,{
                 'width':500,
        		'elementHandlers': specialElementHandlers
    });
	
	doc.save('Test.pdf');
	
}
</script>
<body>
<div id="testdiv" style="display:none">
    <div>TEST</div>
    <div id="hidediv">TEST2</div>
</div>
<a href="javascript:genPDF()">Download PDF</a>
</body>
</html>
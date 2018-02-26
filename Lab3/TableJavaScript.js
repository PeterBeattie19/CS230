average = function(){

		
		var total = 0; 
    var table = document.getElementById('table');
    
    for (var r = 1; r < table.rows.length; r++) {
        for (var c = 2; c < table.rows[r].cells.length-1; c++) {
        
        		if(table.rows[r].cells[c].innerHTML == "-")
            	total += 0; 
        		else if(table.rows[r].cells[c].innerHTML != "")
            		total += parseInt(table.rows[r].cells[c].innerHTML);
                
            
            //if(table.rows[r].cells[c].innerHTML.matches("[0-9]{1,2}") == '1')
            if(parseInt(table.rows[r].cells[c].innerHTML) < 40)
            		table.rows[r].cells[c].style = "color:red"; 
            else
            	table.rows[r].cells[c].style = "color:black"; 
        }
        
        table.rows[r].cells[7].innerHTML = Math.round(total/5) +"%";
        
        if(table.rows[r].cells[7].innerHTML == "NaN%")
        		table.rows[r].cells[7].innerHTML = "0%"; 
            
        if(parseInt(table.rows[r].cells[7].innerHTML) < 40){
        		table.rows[r].cells[7].style = "background:red";
              //table.rows[r].cells[7].style = "font-color:red";
        }
            
            
        else
        		table.rows[r].cells[7].style= "color:black"; 
        total = 0;
    }
}

setInterval(function() {
  average();
}, 1); 

 addRow = function(){
	var table = document.getElementById('table');
  table.contentEditable = 'true';
  
  
  var row = table.insertRow(table.rows.lenth); 
 
	var cell1 = row.insertCell(0);
	var cell2 = row.insertCell(1);
	var cell3 = row.insertCell(2);
	var cell4 = row.insertCell(3);
  var cell5 = row.insertCell(4);
  var cell6 = row.insertCell(5);
  var cell7 = row.insertCell(6);
  var cell8 = row.insertCell(7);
  
  cell1.innerHTML = "-";
  cell2.innerHTML = "-";
  cell3.innerHTML = "-";
  cell4.innerHTML = "-";
  cell5.innerHTML = "-";
  cell6.innerHTML = "-";
  cell7.innerHTML = "-";
  cell8.innerHTML = "-";
  
 
  cell3.align = "right"; 
  cell4.align = "right"; 
  cell5.align = "right"; 
  cell6.align = "right"; 
  cell7.align = "right"; 
  cell8.align = "right"; 

	
}

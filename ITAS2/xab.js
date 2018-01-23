 function abc()
{

 var x=document.getElementById('Select1').value;
var newDiv=document.createElement('div');
var html = '<select id="d2">';
 for(i = x; i < 47; i++) {
   html += "<option value='"+i+"'>"+i+"          </option>";
   }
   html += '</select>';
  newDiv.innerHTML= html;
             document.getElementById('drop').appendChild(newDiv);
   }




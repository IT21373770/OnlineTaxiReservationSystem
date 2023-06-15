  var table =  document.getElementById('payment_table');
  var totrowcount = table.rows.length;

  var table_data = document.getElementById('payment_table').getElementsByTagName('td');
              var sum = 0;
              for(var i = 0; i < table_data.length; i ++) {
                  if(table_data[i].className == 'a_fee') {
                      sum += isNaN(table_data[i].innerHTML) ? 0 : parseInt(table_data[i].innerHTML);
                  }
              }
  document.getElementById('total_income_card').innerHTML = sum ;

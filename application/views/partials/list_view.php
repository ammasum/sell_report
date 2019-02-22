

Click here to <a href="javascript:genPdf()" class="btn btn-primary">Download PDF</a>
Click here to <a href="javascript:genExel()" class="btn btn-primary">Download Exel shit</a>

<table class="table" id="product_table">
  <thead>
    <tr>
      <th scope="col">Sell No</th>
      <th scope="col">Product Name</th>
      <th scope="col">Price per Head</th>
      <th scope="col">Quantity</th>
      <th scope="col">Total</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach ($table_data as $row){ ?>
    <tr>
      <th scope="row"><?php echo $row->sell_no ?></th>
      <td><?php echo $row->product_name ?></td>
      <td><?php echo $row->per_price ?></td>
      <td><?php echo $row->quantity ?></td>
      <td><?php echo $row->total_price ?></td>
    </tr>
  <?php } ?>
  </tbody>
</table>


<script>
    function genPdf(){
        var doc = new jsPDF();
        // You can use html:
        doc.autoTable({html: '#product_table'});

        // Or JavaScript:
        // doc.autoTable({
        //     head: [['Name', 'Email', 'Country']],
        //     body: [
        //         ['David', 'david@example.com', 'Sweden'],
        //         ['Castille', 'castille@example.com', 'Norway'],
        //         // ...
        //     ]
        // });

        doc.save('table.pdf');
    }
    var tab_text="<table border='2px'><tr bgcolor='#87AFC6'>";
    var textRange; var j=0;
    tab = document.getElementById('product_table'); // id of table


    for(j = 0 ; j < tab.rows.length ; j++)
    {
        tab_text=tab_text+tab.rows[j].innerHTML+"</tr>";
        //tab_text=tab_text+"</tr>";
    }

    tab_text=tab_text+"</table>";
    tab_text= tab_text.replace(/<A[^>]*>|<\/A>/g, "");//remove if u want links in your table
    tab_text= tab_text.replace(/<img[^>]*>/gi,""); // remove if u want images in your table
    tab_text= tab_text.replace(/<input[^>]*>|<\/input>/gi, ""); // reomves input params
    function genExel(){
        var element = document.createElement('a');
        let attri = 'data:application/vnd.ms-excel,' + encodeURIComponent(tab_text);
        console.log(`ATTRI is ${ encodeURIComponent(tab_text) }`);
        element.setAttribute('href', attri);
        element.setAttribute('download', "list.xls");
        element.style.display = 'none';
        document.body.appendChild(element);
        element.click();
        document.body.removeChild(element);
    }
</script>
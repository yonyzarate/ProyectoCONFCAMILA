<!-- / barra de abajo donde esta alojado el pie de la pagina  -->
<footer class="main-footer">
    <strong>Sistema de ventas &copy; 2020 <a href="<?php echo base_url( ). "assets/"; ?>http://adminlte.io">CONFCAMILA</a>.</strong>
    Todos los derechos reservados.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 1.0.0
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?php echo base_url( ). "assets/"; ?>plugins/jquery/jquery.min.js"></script>
<!-- jQuery-print  -->
<script src="<?php echo base_url( ). "assets/"; ?>jquery-print/jquery.print.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo base_url( ). "assets/"; ?>plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url( ). "assets/"; ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo base_url( ). "assets/"; ?>plugins/bootstrap-4.0.0-alpha.6-dist/js/bootstrap.min.js"></script>
<!-- bs-custom-file-input -->
<script src="<?php echo base_url( ). "assets/"; ?>plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- ChartJS -->
<script src="<?php echo base_url( ). "assets/"; ?>plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="<?php echo base_url( ). "assets/"; ?>plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="<?php echo base_url( ). "assets/"; ?>plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="<?php echo base_url( ). "assets/"; ?>plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo base_url( ). "assets/"; ?>plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- DataTables -->
<script src="<?php echo base_url( ). "assets/"; ?>plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url( ). "assets/"; ?>datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo base_url( ). "assets/"; ?>datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?php echo base_url( ). "assets/"; ?>datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<!-- daterangepicker -->
<script src="<?php echo base_url( ). "assets/"; ?>plugins/moment/moment.min.js"></script>
<script src="<?php echo base_url( ). "assets/"; ?>plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?php echo base_url( ). "assets/"; ?>plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="<?php echo base_url( ). "assets/"; ?>plugins/summernote/summernote-bs4.min.js"></script>
<!-- Highcharts  -->
<script src="<?php echo base_url( ). "assets/"; ?>plugins/Highcharts/highcharts.js"></script>
<script src="<?php echo base_url( ). "assets/"; ?>plugins/Highcharts/exporting.js"></script>
<!-- jquery-ui -->
<script src="<?php echo base_url( ). "assets/"; ?>jquery_ui/jquery-ui.js"></script>
<!-- overlayScrollbars -->
<script src="<?php echo base_url( ). "assets/"; ?>plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url( ). "assets/"; ?>dist/js/adminlte.js"></script>
<!-- dataTables-export -->
<script src="<?php echo base_url( ). "assets/"; ?>dataTables-export/js/buttons.flash.min.js"></script>
<script src="<?php echo base_url( ). "assets/"; ?>dataTables-export/js/buttons.html5.min.js"></script>
<script src="<?php echo base_url( ). "assets/"; ?>dataTables-export/js/buttons.print.min.js"></script>
<script src="<?php echo base_url( ). "assets/"; ?>dataTables-export/js/dataTables.buttons.min.js"></script>
<script src="<?php echo base_url( ). "assets/"; ?>dataTables-export/js/jszip.min.js"></script>
<script src="<?php echo base_url( ). "assets/"; ?>dataTables-export/js/pdfmake.min.js"></script>
<script src="<?php echo base_url( ). "assets/"; ?>dataTables-export/js/vfs_fonts.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url( ). "assets/"; ?>dist/js/demo.js"></script>
<!-- sweetalert -->
<script src="<?php echo base_url( ). "assets/"; ?>dist/sweetalert.min.js"></script>
<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script> -->
<script type="text/javascript">
var base_url= "<?php echo base_url();?>";
var year = (new Date).getFullYear();
$(document).ready(function(){
    function myFunction() {
    var d = new Date();
    var n = d.toLocaleString();
    document.write("demo").innerHTML = n;
    }
    $(".btn-view-personal").on("click",function(){

        var personal =$(this).val();
        var infopersonal = personal.split("*");
        html = "<p><strong>Nombre: </strong>"+infopersonal[1]+"</p>"
        html += "<p><strong>Dirección: </strong>"+infopersonal[2]+"</p>"
        html += "<p><strong>Telefono: </strong>"+infopersonal[3]+"</p>"
        html += "<p><strong>Gmail: </strong>"+infopersonal[4]+"</p>"
        html += "<p><strong>Cedula identidad: </strong>"+infopersonal[5]+"</p>"
        html += "<p><strong>Fecha de nacimiento: </strong>"+infopersonal[6]+"</p>"
        html += "<p><strong>Fecha de registro: </strong>"+infopersonal[7]+"</p>"
        html += "<p><strong>Sexo: </strong>"+infopersonal[8]+"</p>";
        html += "<p><strong>Profesion: </strong>"+infopersonal[9]+"</p>";
        html += "<p><strong>Rol: </strong>"+infopersonal[10]+"</p>";
        html += "<p><strong>Estado: </strong>"+infopersonal[11]+"</p>"; 
        $("#modal-default .modal-body").html(html);
    });
    $(".custom-file-input").on("change", function() {
          var fileName = $(this).val().split("\\").pop();
          $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
        });

        $("#categoria").change(function(){
          var IdCategoria = $("#categoria").val();
          // alert (IdCategoria);
          if(IdCategoria !=''){
            $.ajax({
              method: "POST",
              url: "<?php echo base_url();?>Mantenimiento/Producto1_controller/fetchSubcategoria",
              data: {IdCategoria:IdCategoria},
              success: function (data) {
                  $("#subcategoria").html(data);
                  $("#subcategoria").removeAttr('disabled');
                                  
              }
            });
          }
        });  
        // evento que me muestra en un modal la informacion de producto 
        $(".btn-view-producto1").click(function(){
            
            var producto =$(this).val();
            var infoproducto = producto.split("*");
            html = "<p><strong>Nombre: </strong>"+infoproducto[1]+"</p>"
            html += "<img src='"+base_url+"/uploads/imagenes/producto/"+infoproducto[2]+"' width='100px' height='100px'>"
            html += "<p><strong>Codigo: </strong>"+infoproducto[3]+"</p>"
            html += "<p><strong>Descripción: </strong>"+infoproducto[4]+"</p>"
            html += "<p><strong>Stock: </strong>"+infoproducto[5]+"</p>"
            html += "<p><strong>Precio de venta: </strong>"+infoproducto[6]+"</p>";
            html += "<p><strong>Precio de oferta: </strong>"+infoproducto[7]+"</p>";
            html += "<p><strong>Marca: </strong>"+infoproducto[8]+"</p>";
            html += "<p><strong>Color: </strong>"+infoproducto[9]+"</p>";
            html += "<p><strong>Talla: </strong>"+infoproducto[10]+"</p>";
            html += "<p><strong>Subcategoria: </strong>"+infoproducto[11]+"</p>";
            $("#modal-default .modal-body").html(html);
        });
        
    
    $('#example1').DataTable({
        "language": {
            "lengthMenu": "Mostrar _MENU_ registros por pagina",
            "zeroRecords": "No se encontraron resultados en su busqueda",
            "searchPlaceholder": "Buscar registros",
            "info": "Mostrando registros de _START_ al _END_ de un total de  _TOTAL_ registros",
            "infoEmpty": "No existen registros",
            "infoFiltered": "(filtrado de un total de _MAX_ registros)",
            "search": "Buscar:",
            "paginate": {
                "first": "Primero",
                "last": "Último",
                "next": "Siguiente",
                "previous": "Anterior"
            },
        }
    });
    $('.example1').DataTable({
        "language": {
            "lengthMenu": "Mostrar _MENU_ registros por pagina",
            "zeroRecords": "No se encontraron resultados en su busqueda",
            "searchPlaceholder": "Buscar registros",
            "info": "Mostrando registros de _START_ al _END_ de un total de  _TOTAL_ registros",
            "infoEmpty": "No existen registros",
            "infoFiltered": "(filtrado de un total de _MAX_ registros)",
            "search": "Buscar:",
            "paginate": {
                "first": "Primero",
                "last": "Último",
                "next": "Siguiente",
                "previous": "Anterior"
            },
        }
    });

     $('.sidebar-menu').tree();

  });

  $(document).ready(function(){
        graficar();

    $("#year1").change(function(){
      selectyear = $(this).val();
      datagrafico(base_url,selectyear);
    });
    $("#btnventas").click(function(){

        $(".modal-header").css("background","#ff0000");
        $(".modal-title").css("color","#ffffff");
        $("#my-modal").modal("show");
        datagrafico(base_url,year);
    });
  });

  // metodo para sacar reportes tanto en excel y pdf
  $("#example").DataTable( {
        dom: "Bfrtip",
        buttons: [
            {
                extend: "excelHtml5",
                title: "Listado de Ventas",
                exportOptions: {
                    columns: [ 0, 1,2, 3, 4, 5 ]
                },
            },
            {
                extend: "pdfHtml5",
                title: "Listado de Ventas",
                exportOptions: {
                    columns: [ 0, 1,2, 3, 4, 5 ]
                }
                
            }
        ],

        language: {
            "lengthMenu": "Mostrar _MENU_ registros por pagina",
            "zeroRecords": "No se encontraron resultados en su busqueda",
            "searchPlaceholder": "Buscar registros",
            "info": "Mostrando registros de _START_ al _END_ de un total de  _TOTAL_ registros",
            "infoEmpty": "No existen registros",
            "infoFiltered": "(filtrado de un total de _MAX_ registros)",
            "search": "Buscar:",
            "paginate": {
                "first": "Primero",
                "last": "Último",
                "next": "Siguiente",
                "previous": "Anterior"
            },
        }
    });
//metodo cuaando hacemos click en este boton nos lleve a un modal todo el detalle de la venta 
  $(document).on("click",".btn-view-venta",function(){
            valor_id = $(this).val();
            $.ajax({
                  url:base_url+ "Movimiento/Venta_controller/view",
                  type:"POST",
                  datetype:"html",
                  data:{id:valor_id}, 
                  success:function(data){
                    $("#modal-default .modal-body").html(data);  
                  }

            });
  });
  //metodo que hace que cuando demos click en el boton nos mande a imprimir la pagina que queremos 
  $(document).on("click",".btn-print",function(){
    $("#modal-default .modal-body").print();
  });
  

   //metodo que seleccionar un cliente nos mandara todos los datos del cliente 
  $(document).on("click",".btn-check",function(){
        cliente = $(this).val();
        infocliente = cliente.split("*");
        $("#idcliente").val(infocliente[0]);
        $("#cliente").val(infocliente[1]);
        $("#modal-default").modal("hide");
    });
// este metodo lo que hace es  que al seleccionar un comprovante obtendra los campos que quremos y lo mandara la respuesta a 
// los campos que queremos que se imprima en los campos que tienen el id de idcomprobante, iva, serie, nrocomprobante
  $("#comprobantes").on("change",function(){
       
       option = $(this).val();
     
       if (option != "") {
           infocomprobante = option.split("*");

           $("#idcomprobante").val(infocomprobante[0]);
           $("#iva").val(infocomprobante[2]);
           $("#serie").val(infocomprobante[3]);
           $("#nrocomprobante").val(generarnumero(infocomprobante[1]));
       }
       else{
           $("#idcomprobante").val(null);
           $("#iva").val(null);
           $("#serie").val(null);
           $("#nrocomprobante").val(null); 
       }
       sumar();
   }) 
   // funcion  de autocompletado   del producto que queremos vender una ves elegido mandarlo al boton agregar los campos que queremos 
   //del producto este este caso seria los campos id,codigo,nombre,precio y estock del producto  
   $("#producto").autocomplete({ 
        source: function(request, response){
            $.ajax({
              url:base_url+"Movimiento/Venta_controller/getproductos",
              type:"POST",
              dataType:"json",
              data:{valor:request.term},
              success:function(data){
                response(data);
              }
            });
        },
        minLength:2,
        select: function(event, ui){
              data=ui.item.id+"*"+ui.item.codigo+"*"+ui.item.label+"*"+ui.item.precio+"*"+ui.item.stock;
              $("#btn-agregar").val(data);
        },
   });
   //cuando ya esta cargado los datos del producto que quremos en este boton al precionarlo lo mandamos a la vista del detalle 
   // de la ventana de venta parader elegir que camtidad queremos de ese produto 
   $("#btn-agregar").on("click",function(){
        data = $(this).val();
        if (data !='') {
            infoproducto = data.split("*");
            html = "<tr>";
            html += "<td><input type='hidden' name='idproductos[]' value='"+infoproducto[0]+"'>"+infoproducto[1]+"</td>";
            html += "<td>"+infoproducto[2]+"</td>";
            html += "<td><input type='hidden' name='precios[]' value='"+infoproducto[3]+"'>"+infoproducto[3]+"</td>";
            html += "<td>"+infoproducto[4]+"</td>";
            html += "<td><input type='number' name='cantidades[]' min ='1'pattern='^[0-9]+' value='1' class='cantidades'></td>";
            html += "<td><input type='hidden' name='importes[]' value='"+infoproducto[3]+"'><p>"+infoproducto[3]+"</p></td>";
            html += "<td><button type='button' class='btn btn-danger btn-remove-producto'><span class='fa fa-trash-alt'></span></button></td>";
            html += "</tr>";
            $("#tbventas tbody").append(html);
            sumar();
            $("#btn-agregar").val(null);
            $("#producto").val(null);
        }else{
           // alert("seleccione un producto...");
            swal("seleccione un producto..."); 

        }
    });
    //motodo que me elimine un producto del detalle de la venta de la venta de ventas 
    $(document).on("click",".btn-remove-producto", function(){
        $(this).closest("tr").remove();
        sumar();
    });
    // metodo que multiplica la cantidad y el precio asi mandarlo a importe el resultado por ejemplo si quiereo comprar 
    // una mazana y tiene como precio 3bs pero quiero dos mazanas entoces sera 3(precio) *2(cantidad)=6 y ese sera el importe 
    $(document).on("keyup","#tbventas input.cantidades", function(){
        cantidad = $(this).val();
        precio = $(this).closest("tr").find("td:eq(2)").text();
        importe = cantidad * precio;
        $(this).closest("tr").find("td:eq(5)").children("p").text(importe.toFixed(2));
        $(this).closest("tr").find("td:eq(5)").children("input").val(importe.toFixed(2));
        sumar();
    });
//la funcion sumar lo utilizamos 
    function sumar(){
        subtotal = 0;
        $("#tbventas tbody tr").each(function(){
            subtotal = subtotal + Number($(this).find("td:eq(5)").text());
        });
        $("input[name=subtotal]").val(subtotal.toFixed(2));
          porcentaje = $("#iva").val();
          iva = subtotal * (porcentaje/100);
        $("input[name=iva]").val(iva.toFixed(2));
          descuento = $("input[name=descuento]").val();
          total = subtotal + iva - descuento;
        $("input[name=total]").val(total.toFixed(2));

}

//   function leftPad(value, length) {
//                 value++;
//                 return ('0'.repeat(length) + value).slice(-length); 
//  }

 $( function() {
    $( document ).tooltip();
  } );

 // funcion para generar numero automatico para cada venta o cotizacion  realizada 
 function generarnumero(numero){
    if (numero>= 99999 && numero< 999999) {
        return Number(numero)+1;
    }
    if (numero>= 9999 && numero< 99999) {
        return "0" + (Number(numero)+1);
    }
    if (numero>= 999 && numero< 9999) {
        return "00" + (Number(numero)+1);
    }
    if (numero>= 99 && numero< 999) {
        return "000" + (Number(numero)+1);
    }
    if (numero>= 9 && numero< 99) {
        return "0000" + (Number(numero)+1);
    }
    if (numero < 9 ){
        return "00000" + (Number(numero)+1);
    }
}
// metodo para dar opciones al elimanar un item mandando mensajes de que si se elimina ya no estara vigiente 
  $(".btn-remove").on("click",function(e){
      e.preventDefault();// cancela la accion de href
      var ruta = $(this).attr("href");
      swal ({ 
          title: "¿Está seguro?", 
          text: "¡No podrá recuperar este registro!", 
          type: "warning", 
          showCancelButton: true, 
          confirmButtonColor: '#d9534f',
          cancelButtonColor:'#d33',
          confirmButtonText: "¡Sí! ", 
          showLoaderOnConfirm: true,
          cancelButtonText:" ¡No! ", 
          closeOnConfirm: false, 
          closeOnCancel: false 
        }, 
        function (isConfirm) { 
          if (isConfirm) { 
            $.ajax({
              url:ruta,
              type:"POST",
              success: function(res){
                window.location.href=base_url+res;
              }
            });
           
          } else { 

            swal("Cancelar"); 
          } 
        }
        );
    });
    
    // funcion para graficar con highcharts
    function graficar(){
    Highcharts.chart('grafico', {
      chart: {
          type: 'column'
      },
      title: {
          text: 'Monto acumulado por las ventas de los meses'
      },
      subtitle: {
          text: '2020'
      },
      xAxis: {
          categories: [
              'Ene',
              'Feb',
              'Mar',
              'Apr',
              'May',
              'Jun',
              'Jul',
              'Ago',
              'Sep',
              'Oct',
              'Nov',
              'Dic'
          ],
          crosshair: true
      },
      yAxis: {
          min: 0,
          title: {
              text: 'Monto acumulado (bolivianos)'
          }
      },
      tooltip: {
          headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
          pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
              '<td style="padding:0"><b>{point.y:.1f} mm</b></td></tr>',
          footerFormat: '</table>',
          shared: true,
          useHTML: true
      },
      plotOptions: {
          column: {
              pointPadding: 0.2,
              borderWidth: 0
          }
      },
      series: [{
          name: 'CONFCAMILA',
          data: [49.9, 71.5, 106.4, 129.2, 144.0, 176.0, 135.6, 148.5, 216.4, 194.1, 95.6, 54.4]
      
      }]
  }); 
  }  

  // Funcion para traerme el monto para el grafico de las ventas 
  function datagrafico(base_url,year){
    namesMonth = ["Ene","Feb","Mar","Abr","May","Jun","Jul","Ago","Sep","Oct","Nov","Dic"];
    $.ajax({
      url: base_url + "dashboard/getData",
      type: "POST",
      data:{year:year},
      dataType:"json",
      success:function(data){
        var meses = new Array();
        var montos = new Array();
        $.each(data,function(key, value){
          meses.push(namesMonth[value.Mes -1]);
          valor = Number(value.Monto);
          montos.push(valor);
        });
        graficar1(meses,montos,year);
      }
    });
  }
  ///// GRAFICO MODAL
function graficar1(meses,montos,year){
    Highcharts.chart('container-modal', {
      chart: {
        type: 'column'
      },
      title: {
        text: 'Monto acumulado por las ventas de los meses'
      },
      subtitle: {
        text: 'Año '+year
      },
      xAxis: {
        categories: meses,
        crosshair: true
      },
      yAxis: {
        min: 0,
        title: {
            text: 'Monto acumulado (bolivianos)'
        }
      },
      tooltip: {
          headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
          pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
              '<td style="padding:0"><b>{point.y:.1f} Bs</b></td></tr>',
          footerFormat: '</table>',
          shared: true,
          useHTML: true
      },
      plotOptions: {
          column: {
              pointPadding: 0.2,
              borderWidth: 0
          }
      },
      series: [{
          name: 'Monto',
          data: montos
      
      }]
     });   
}
</script>
</body>
</html>

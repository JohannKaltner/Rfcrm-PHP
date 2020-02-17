<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> -->

<div class="container" style="margin-top:85px">
    <div class="table-data__tool">

       
		<form method="post" id="import_csv" enctype="multipart/form-data">
			<div class="form-group">
				<label>Select CSV File</label>
				<input type="file" name="csv_file" id="csv_file" required accept=".csv" />
			</div>
			<br />
			<button type="submit" name="import_csv" value="<?php echo base_url();?>uploads/master2.csv" class="btn btn-info" id="import_csv_btn">Import CSV</button>        
		</form>

        <form>
        <div class="form-group">
			<a href="<?php echo base_url();?>C_historico/truncarDb" type="submit" name="truncaHistorico"  class="btn btn-danger" id="truncarHistorico_btn">Limpar Historico</a>
        </div>
        </form>
        
        
        <!-- <button type="submit" name="import_csv" class="btn btn-info" id="import_csv_btn">
            Atualizar <i class="fas fa-sync-alt"></i>
            </button> -->
            <!-- <div class="rs-select2--dark rs-select2--sm rs-select2--dark2">
                                            <select class="js-select2" name="type">
                                                <option selected="selected">Export</option>
                                                <option value="">Option 1</option>
                                                <option value="">Option 2</option>
                                            </select>
                                            <div class="dropDownSelect2"></div>
                                        </div> -->
        <!-- </div> -->
    </div>
    <div class="table-responsive table-responsive-data2" id="imported_csv_data">
        <!-- <table class="table table-data2">
            <thead>
                <tr>

                    <th>Numero Ligado</th>
                    <th>Ramal que Atendeu</th>
                    <th>Nº de ID na Central Telefonica</th>
                    <th>Data</th>
                    <th>Hora Inicio</th>
                    <th>Hora Fim</th>
                    <th>Operações</th>
                </tr>
            </thead>
            <tbody>
                <tr class="tr-shadow">
                    <td>numero ligado </td>
                    <td>Ramal que atendeu</td>
                    <td class="desc">Nº de ID na Central Telefonica</td>
                    <td>Data</td>
                    <td>Hora Inicio</td>
                    <td>Hora Fim</td>
                    <td>
                        <div class="table-data-feature">
                            <button class="item" data-toggle="tooltip" data-placement="top"
                                title="Registrar como Chamado">
                                <i class="zmdi zmdi-mail-send"></i>
                            </button>
                            <button class="item" data-toggle="tooltip" data-placement="top" title="">
                                <i class="zmdi zmdi-edit"></i>
                            </button>
                            <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                <i class="zmdi zmdi-delete"></i>
                            </button>
                        </div>
                    </td>
                </tr>


            </tbody>
        </table> -->
    </div>
</div>



<script>
$(document).ready(function() {

    load_data();

    function load_data() {
        $.ajax({
            url: "<?php echo base_url(); ?>C_historico/load_data",
            method: "POST",
            success: function(data) {
                $('#imported_csv_data').html(data);
            }
        })
    }

    $('#import_csv').on('submit', function(event) {
        event.preventDefault();
        $.ajax({
            url: "<?php echo base_url(); ?>C_historico/import",
            method: "POST",
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            beforeSend: function() {
                $('#import_csv_btn').html('Importing...');
            },
            success: function(data) {
                $('#import_csv')[0].reset();
                $('#import_csv_btn').attr('disabled', false);
                $('#import_csv_btn').html('Import Done');
                load_data();
            }
            
        })
    });

});
</script>
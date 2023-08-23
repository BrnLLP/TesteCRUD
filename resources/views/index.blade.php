<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Veículos</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <style>
        body {
            color: #566787;
            background: #f5f5f5;
            font-family: 'Varela Round', sans-serif;
            font-size: 13px;
        }

        .table-responsive {
            margin: 30px 0;
        }

        .table-wrapper {
            background: #fff;
            padding: 20px 25px;
            border-radius: 3px;
            min-width: 1000px;
            box-shadow: 0 1px 1px rgba(0, 0, 0, .05);
        }

        .table-title {
            padding-bottom: 15px;
            background: #435d7d;
            color: #fff;
            padding: 16px 30px;
            min-width: 100%;
            margin: -20px -25px 10px;
            border-radius: 3px 3px 0 0;
        }

        .table-title h2 {
            margin: 5px 0 0;
            font-size: 24px;
        }

        .table-title .btn-group {
            float: right;
        }

        .table-title .btn {
            color: #fff;
            float: right;
            font-size: 13px;
            border: none;
            min-width: 50px;
            border-radius: 2px;
            border: none;
            outline: none !important;
            margin-left: 10px;
        }

        .table-title .btn i {
            float: left;
            font-size: 21px;
            margin-right: 5px;
        }

        .table-title .btn span {
            float: left;
            margin-top: 2px;
        }

        table.table tr th,
        table.table tr td {
            border-color: #e9e9e9;
            padding: 12px 15px;
            vertical-align: middle;
        }

        table.table tr th:first-child {
            width: 60px;
        }

        table.table tr th:last-child {
            width: 100px;
        }

        table.table-striped tbody tr:nth-of-type(odd) {
            background-color: #fcfcfc;
        }

        table.table-striped.table-hover tbody tr:hover {
            background: #f5f5f5;
        }

        table.table th i {
            font-size: 13px;
            margin: 0 5px;
            cursor: pointer;
        }

        table.table td:last-child i {
            opacity: 0.9;
            font-size: 22px;
            margin: 0 5px;
        }

        table.table td a {
            font-weight: bold;
            color: #566787;
            display: inline-block;
            text-decoration: none;
            outline: none !important;
        }

        table.table td a:hover {
            color: #2196F3;
        }

        table.table td a.edit {
            color: #FFC107;
        }

        table.table td a.delete {
            color: #F44336;
        }

        table.table td i {
            font-size: 19px;
        }

        table.table .avatar {
            border-radius: 50%;
            vertical-align: middle;
            margin-right: 10px;
        }

        /* Modal styles */
        .modal .modal-dialog {
            max-width: 400px;
        }

        .modal .modal-header,
        .modal .modal-body,
        .modal .modal-footer {
            padding: 20px 30px;
        }

        .modal .modal-content {
            border-radius: 3px;
            font-size: 14px;
        }

        .modal .modal-footer {
            background: #ecf0f1;
            border-radius: 0 0 3px 3px;
        }

        .modal .modal-title {
            display: inline-block;
        }

        .modal .form-control {
            border-radius: 2px;
            box-shadow: none;
            border-color: #dddddd;
        }

        .modal textarea.form-control {
            resize: vertical;
        }

        .modal .btn {
            border-radius: 2px;
            min-width: 100px;
        }

        .modal form label {
            font-weight: normal;
        }

        .loading {
            color: black;
            font: 300 2em/100% Impact;
            text-align: center;
        }

        /* loading dots */

        .loading:after {
            content: ' .';
            animation: dots 1s steps(5, end) infinite;
        }

        @keyframes dots {

            0%,
            20% {
                color: rgba(0, 0, 0, 0);
                text-shadow:
                    .25em 0 0 rgba(0, 0, 0, 0),
                    .5em 0 0 rgba(0, 0, 0, 0);
            }

            40% {
                color: black;
                text-shadow:
                    .25em 0 0 rgba(0, 0, 0, 0),
                    .5em 0 0 rgba(0, 0, 0, 0);
            }

            60% {
                text-shadow:
                    .25em 0 0 black,
                    .5em 0 0 rgba(0, 0, 0, 0);
            }

            80%,
            100% {
                text-shadow:
                    .25em 0 0 black,
                    .5em 0 0 black;
            }
        }
    </style>
</head>

<body>
    <div class="container-xl">
        <div class="table-responsive">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="bg-light p-2 m-2">
                        <h5 class="text-dark text-center">Veículos</h5>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <h2>Controle <b>Veículos</b></h2>
                        </div>
                        <div class="col-sm-6">
                            <a href="#criaVeiculoModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Novo Veículo</span></a>
                        </div>
                    </div>
                </div>
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Modelo</th>
                            <th>Data de Aquisição</th>
                            <th>Placa</th>
                            <th>Tipo de acessibilidade</th>
                        </tr>
                    </thead>
                    <tbody id="veiculo_data">
                    </tbody>
                </table>
                <p class="loading">Carregando</p>
            </div>
        </div>
    </div>
    <div id="criaVeiculoModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Cria Veículo</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body cria_veiculo">
                    <div class="form-group">
                        <label>Modelo</label>
                        <input type="text" id="modelo_input" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Data de aquisição</label>
                        <input type="date" id="data_input" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Placa</label>
                        <input type="text" id="placa_input" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Tipo de Acessibilidade</label>
                            <select name=veiculo id="acessibilidade_input_create" required>
                                @foreach ($tipos as $tipo)
                                <option id='valor_tipo' value='{{$tipo->id}}'>{{$tipo->tipo}}</option>
                                @endforeach
                            </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                    <input type="submit" class="btn btn-success" value="Add" onclick="criaVeiculo()">
                </div>
            </div>
        </div>
    </div>
    <div id="editaVeiculoModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Editar carro</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body edita_veiculo">
                    <div class="form-group">
                        <label>Modelo</label>
                        <input type="text" id="modelo_input" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Data de aquisição</label>
                        <input type="date" id="data_input" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Placa</label>
                        <input type="text" id="placa_input" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Tipo de Acessibilidade</label>
                        <select name=veiculo id="acessibilidade_input_create" required>
                                @foreach ($tipos as $tipo)
                                <option id='valor_tipo' value='{{$tipo->id}}'>{{$tipo->tipo}}</option>
                                @endforeach
                            </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                    <input type="submit" class="btn btn-info" onclick="editaVeiculo()" value="Save">
                </div>
            </div>
        </div>
    </div>

    <div id="verVeiculoModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Ver veiculo</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body ver_veiculo">
                <div class="form-group">
                        <label>Modelo</label>
                        <input type="text" id="modelo_input" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Data de aquisição</label>
                        <input type="date" id="data_input" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Placa</label>
                        <input type="text" id="placa_input" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Tipo de Acessibilidade</label>
                        <input type="text" id="acessibilidade_input" class="form-control" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Close">
                </div>
            </div>
        </div>
    </div>

    <div id="deletaVeiculoModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Excluir Veículo</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <p>Tem certeza que quer deletar este veículo?</p>
                </div>
                <input type="hidden" id="delete_id">
                <div class="modal-footer">
                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                    <input type="submit" class="btn btn-danger" onclick="excluirVeiculo()" value="Delete">
                </div>
            </div>
        </div>
    </div>

    <script>

    </script>
    <script>
        $(document).ready(function() {
           listaVeiculos();

           listaTipos();
        });
        function listaTipos(){
            $.ajax({
                type:'get',
                url:"{{url ('lista-tipos') }}",
                success:function(response){
                    console.log(response);
                    var option = '';
                    for(var i=0; i<response.lenght; i++){
                        var tipo = response[i].tipo;
                        option = '<option value='+tipo+'>' + tipo + '</option>';
                        $('#acessibilidade_input_create').html(option);
                    }
                   
                }
            });

        }

        function listaVeiculos() {
            $.ajax({
                type: 'get',
                url: "{{ url('lista-veiculos') }}",
                success: function(response) {
                    console.log(response);
                    var tr = '';
                    for (var i = 0; i < response.length; i++) {
                        var id  =   response[i].id;
                        var modelo = response[i].modelo;
                        var data = response[i].data_aquisicao;
                        var placa = response[i].placa;
                        var tipo = response[i].tipo_acessibilidade;
                        tr += '<tr>';
                        tr += '<td>' + id + '</td>';
                        tr += '<td>' + modelo + '</td>';
                        tr += '<td>' + data + '</td>';
                        tr += '<td>' + placa + '</td>';
                        tr += '<td>' + tipo + '</td>';
                        tr += '<td><div class="d-flex">';
                        tr +=
                            '<a href="#verVeiculoModal" class="m-1 view" data-toggle="modal" onclick=verVeiculo("' +
                            id + '")><i class="fa" data-toggle="tooltip" title="view">&#xf06e;</i></a>';
                        tr +=
                            '<a href="#editarVeiculoModal" class="m-1 edit" data-toggle="modal" onclick=verVeiculo("' +
                            id +
                            '")><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>';
                        tr +=
                            '<a href="#deletaVeiculoModal" class="m-1 delete" data-toggle="modal" onclick=$("#delete_id").val("' +
                            id +
                            '")><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>';
                        tr += '</div></td>';
                        tr += '</tr>';
                    }
                    $('.loading').hide();
                    $('#veiculo_data').html(tr);
                }
            });
        }

        function criaVeiculo() {

            var modelo = $('.cria_veiculo #modelo_input').val();
            var data_aquisicao = $('.cria_veiculo #data_input').val();
            var placa = $('.cria_veiculo #placa_input').val();
            var tipo_acessibilidade = $('.cria_veiculo #valor_tipo').val();

            $.ajax({
                headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                type: 'post',
                data: {
                    modelo: modelo,
                    data_aquisicao: data_aquisicao,
                    placa: placa,
                    tipo_acessibilidade: tipo_acessibilidade,
                },
                url: "{{ url('novo-veiculo') }}",
                success: function(response) {
                    $('#criaVeiculoModal').modal('hide');
                    listaVeiculos();
                    alert(response.message);
                }

            })
        }

        function editaVeiculo() {
            var modelo = $('.edita_veiculo #modelo_input').val();
            var data_aquisicao = $('.edita_veiculo #data_input').val();
            var placa = $('.edita_veiculo #phone_input').val();
            var tipo_acessibilidade = $('.edita_veiculo #acessibilidade_input').val();

            $.ajax({
                type: 'post',
                data: {
                    modelo: modelo,
                    data_aquisicao: data_aquisicao,
                    placa: placa,
                    tipo_acessibilidade: tipo_acessibilidade,
                },
                url: "{{ url('atualiza-veiculo') }}",
                success: function(response) {
                    $('#editaVeiculoModal').modal('hide');
                    listaVeiculos();
                    alert(response.message);
                }

            })
        }

        function verVeiculo(id = 2) {
            $.ajax({
                type: 'get',
                data: {
                    id: id,
                },
                url: "{{ url('ver-veiculo') }}",
                success: function(response) {
                    console.log(response);
                    var modelo = $('.edita_veiculo #modelo_input').val();
                    var data = $('.edita_veiculo #data_input').val();
                    var placa = $('.edita_veiculo #placa_input').val();
                    var acessibilidade = $('.edita_veiculo #acessibilidade_input').val();
                    var modelo = $('.edita_veiculo #modelo_input').val();
                    var data = $('.edita_veiculo #data_input').val();
                    var placa = $('.edita_veiculo #placa_input').val();
                    var acessibilidade = $('.edita_veiculo #acessibilidade_input').val();
                }
            })
        }
        function excluirVeiculo() {
            var id = $('#delete_id').val();
            $('#excluirVeiculoModal').modal('hide');
            $.ajax({
                type: 'get',
                data: {
                    id: id,
                },
                url:"{{ url('deleta-veiculo')}}",
                success: function(response) {
                    listaVeiculos();
                    alert(response.message);
                }
            })
        }
    </script>

</body>

</html>
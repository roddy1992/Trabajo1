<?php

$opcion = $_GET['opcion'];
switch ($opcion) {
    case "1":
        $codigof = $_GET['valor1'];
        $nombrerepre = $_GET['valor2'];
        $ci = $_GET['valor3'];
        $nombrefabrica = $_GET['valor4'];
        $direccionfab = $_GET['valor5'];
        $celularfab = $_GET['valor6'];
        $convencionalfab = $_GET['valor7'];
        $whatsappfab = $_GET['valor8'];
        $correofab = $_GET['valor9'];
        return ingresoFabrica($codigof, $nombrerepre, $ci, $nombrefabrica, $direccionfab, $celularfab, $convencionalfab, $whatsappfab, $correofab);
        break;
    case "2":
        $codigov = $_GET['codigo'];
        $codigoanf = $_GET['anfi'];
        $nombreven = $_GET['nombre'];
        $civen = $_GET['ci'];
        $pasven = $_GET['pasa'];
        $direccionven = $_GET['dire'];
        $celularven = $_GET['celular'];
        $convencionalven = $_GET['conven'];
        $whatsappven = $_GET['what'];
        $fabligven = $_GET['fabli'];
        $correoven = $_GET['correo'];
        return ingresoVendedor($codigov, $codigoanf, $nombreven, $civen, $pasven, $direccionven, $celularven, $convencionalven, $whatsappven, $fabligven, $correoven);
        break;
    case "3":
        $codvF = $_GET['codv'];
        $numeropF = $_GET['cantp'];
        $codfF = $_GET['codf'];
        $cateF = $_GET['catv'];
        $fechaF = date("m/d/Y");
        return comprasFabrica($codvF, $numeropF, $codfF, $cateF, $fechaF);
        break;
    case "4":
        $fabrica = $_GET['codFab'];
        $hoy = date("m/d/Y");
        consultadiariaFabrica($hoy, $fabrica);
        break;
    case "5":
        $fabrica = $_GET['codFab'];
        $fechainicioF = $_GET['inicioF'];
        $fechafinF = $_GET['finF'];
        consultasemanalFabrica($fabrica, $fechainicioF, $fechafinF);
        break;
    case "6":
        $fabrica = $_GET['codFab'];
        consultastockFabrica($fabrica);
        break;
    case "7":
        $fabrica = $_GET['codFab'];
        consultainfostockFabrica($fabrica);
        break;
    case "8":
        $nuevacanta = $_GET['nuevacant'];
        $fabrica = $_GET['codFab'];
        modificarcantidadproductoFabrica($nuevacanta, $fabrica);
        break;
    case "9":
        $cantidadcompra = $_GET['nuevacant'];
        $fabrica = $_GET['codFab'];
        modificarcantidadproductoconcompraFabrica($cantidadcompra, $fabrica);
        break;
    case "10":
        $codVendedor = $_GET['codVen'];
        $categoriaVen = $_GET['cate'];
        consultacolaboradoresVendedor($codVendedor, $categoriaVen);
        break;
    case "11":
        $codVendedor = $_GET['codVen'];
        consultarangoVendedor($codVendedor);
        break;
    case "12":
        consultafabricasconstockVendedor();
        break;
    case "13":
        $fabrica = $_GET['codFab'];
        consultastockdefabricasVendedor($fabrica);
        break;
    case "14":
        consultafabricasaliadadVendedor();
        break;
    case "15":
        $cantidad = $_GET['canticompra'];
        consultarangodelVendedorseguncompra($cantidad);
        break;
    case "16":
        $codven = $_GET['codven'];
        $ganancia = $_GET['ganancia'];
        $fecharegistro = date('m/d/Y');
        ingresogananciaVendedor($codven, $ganancia, $fecharegistro);
        break;
    case "17":
        $codven = $_GET['codven'];
        $fechainicioVen = $_GET['finicioVen'];
        $fechafinVen = $_GET['ffinVen'];
        consultaganaciansemanalVendedor($codven, $fechainicioVen, $fechafinVen);
        break;
    case "18":
        consultafabricasconstockengeneralVendedor();
        break;
    case "19":
        $fabrica = $_GET['codFab'];
        consultainfostockpedidoVendedor($fabrica);
        break;
    case "20":
        $codven = $_GET['codven'];
        $codfab = $_GET['codFab'];
        $cantipedido = $_GET['cantp'];
        $fecharegistrop = date('m/d/Y');
        ingresopedidodelVendedor($codven, $codfab, $cantipedido, $fecharegistrop);
        break;
    case "21":
        $cantidadpedida = $_GET['nuevacant'];
        $fabrica = $_GET['codFab'];
        modificarcantidadproductoconpedidoVendedor($cantidadpedida, $fabrica);
        break;
    case "22":
        $codven = $_GET['codVen'];
        consultavaloracobrarVendedor($codven);
        break;
    case "23":
        $fabrica = $_GET['codFab'];
        consultainformacionfabricaaliadaVendedor($fabrica);
        break;
    case "24":
        $codven = $_GET['codven'];
        $codfab = $_GET['codFab'];
        $valorapagar = $_GET['valor'];
        $fecharegistroPv = date('m/d/Y');
        ingresosolicituddepagoVendedor($codven, $codfab, $valorapagar, $fecharegistroPv);
        break;
    case "25":
        $codven = $_GET['codVen'];
        consultasolicitudesdepagoFabrica($codven);
        break;
    case "26":
        $fecharegistroPv = date('m/d/Y');
        consultaventasdiariasAdministrador($fecharegistroPv);
        break;
    case "27":
        $fechainicioAd = $_GET['Finicio'];
        $fechafinAd = $_GET['Ffin'];
        consultaventassemanalesAdministrador($fechainicioAd, $fechafinAd);
        break;
    case "28":
        $fechainicioAd = $_GET['Finicio'];
        $fechafinAd = $_GET['Ffin'];
        consultagananciassemanalesvendedorAdministrador($fechainicioAd, $fechafinAd);
        break;
    case "29":
        $fechainicioAd = $_GET['Finicio'];
        $fechafinAd = $_GET['Ffin'];
        consultagananciassemanalesfabricasAdministrador($fechainicioAd, $fechafinAd);
        break;
    case "30":
        $fecharegistroPv = date('m/d/Y');
        consultagananciasdiariasvendedorAdministrador($fecharegistroPv);
        break;
    case "31":
        $fecharegistroPv = date('m/d/Y');
        consultagananciasdiariasfabricasAdministrador($fecharegistroPv);
        break;
    case "32":
        $codfab = $_GET['codFab'];
        $fechainicioAd = $_GET['Finicio'];
        $fechafinAd = $_GET['Ffin'];
        consultaventasporfabricaenuntiempoAdministrador($codfab, $fechainicioAd, $fechafinAd);
        break;
    case "33":
        $codven = $_GET['codVen'];
        $fechainicioAd = $_GET['Finicio'];
        $fechafinAd = $_GET['Ffin'];
        consultaventasporvendedorenuntiempoAdministrador($codven, $fechainicioAd, $fechafinAd);
        break;
    case "34":
        consultavendedoresconfabricadesdeAdministrador();
        break;
    case "35":
        consultavendedoresactivosconfabricadesdeAdministrador();
        break;
    case "36":
        consultavendedoresinactivosconfabricadesdeAdministrador();
        break;
    case "37":
        consultafabircasactivosconfabricadesdeAdministrador();
        break;
    case "38":
        consultafabricasinactivosconfabricadesdeAdministrador();
        break;
    case "39":
        consultadevaloresdeconfiguracion();
        break;
    case "40":
        $codrango = $_GET['idR'];
        consultadatosdelrangoparacambiar($codrango);
        break;
    case "41":
        $codrango = $_GET['idR'];
        $vlamin = $_GET['vlamin'];
        $valmax = $_GET['valmax'];
        $cate = $_GET['cate'];
        $ganaven = $_GET['ganaven'];
        $ganafab = $_GET['ganafab'];
        $ganadue = $_GET['ganadue'];
        modificarvaloresdeconfiguracion($vlamin, $valmax, $cate, $ganaven, $ganafab, $ganadue, $codrango);
        break;
    case "42":
        consultavendedoressinUsuario();
        break;
    case "43":
        $coodven = $_GET['codven'];
        consultadatosvendedoreparanuevoUsuario($coodven);
        break;
    case "44":
        $cedulanuv = $_GET['cedu'];
        $nombrenuv = $_GET['nombre'];
        $usuarionuv = $_GET['usu'];
        $clavenuv = $_GET['clave'];
        $tiponuv = $_GET['tipo'];
        $codigonuv = $_GET['codven'];
        ingresarnuevoUsuario($cedulanuv, $nombrenuv, $usuarionuv, $clavenuv, $tiponuv, $codigonuv);
        break;
    case "45":
        consultafabricassinUsuario();
        break;
    case "46":
        $coodfab = $_GET['codfab'];
        consultadatosfabricaparanuevoUsuario($coodfab);
        break;
    case "47":
        $cedulanuv = $_GET['cedu'];
        $nombrenuv = $_GET['nombre'];
        $usuarionuv = $_GET['usu'];
        $clavenuv = $_GET['clave'];
        $tiponuv = $_GET['tipo'];
        $codigonuv = $_GET['codven'];
        ingresarnuevoUsuarioFab($cedulanuv, $nombrenuv, $usuarionuv, $clavenuv, $tiponuv, $codigonuv);
        break;
    case "48":
        $usuarionu = $_GET['usu'];
        $clavenu = $_GET['clave'];
        editarclaveusuarios($usuarionu, $clavenu);
        break;
    case "49":
        consultavendedoresyUsuarios();
        break;
    case "50":
        $codigoven = $_GET['codven'];
        $clavenu = $_GET['clave'];
        resetearclaveusuarios($codigoven, $clavenu);
        break;
    case "51":
        $fechainicioAd = $_GET['Finicio'];
        $fechafinAd = $_GET['Ffin'];
        consultagananciasemanaldeldueno($fechainicioAd, $fechafinAd);
        break;
    case "52":
        $fechainicioAd = date('m/d/Y');
        consultagananciadiariadeldueno($fechainicioAd);
        break;
    case "53":
        $fabrica = $_GET['cofFab'];
        $cantidad = $_GET['cant'];
        ingresarcantidadestockFabrica($fabrica, $cantidad);
        break;
    case "54":
        $codfabrica = $_GET['codFab'];
        consultapedidioenFabrica($codfabrica);
        break;
    case "55":
        $idPedido = $_GET['id'];
        eliminapedidoFabrica($idPedido);
        break;
    default:
        echo "opcion no valida";
}

//FUNCION INGRESO DE DATOS DE LA FABRICA
function ingresoFabrica($codigof, $nombrerepre, $ci, $nombrefabrica, $direccionfab, $celularfab, $convencionalfab, $whatsappfab, $correofab) {
    include 'database.php';
    $pdo = Database::connect();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO `fabricante`(`codigoFab`, `nombre_representante`, `cedula/pas/ruc`, `nombre_fabrica`, `direccion`, `telefono_celular`, `convencional`, `whatsapp`, `correoFab`) VALUES (?,?,?,?,?,?,?,?,?)";
    $q = $pdo->prepare($sql);
    $q->execute(array($codigof, $nombrerepre, $ci, $nombrefabrica, $direccionfab, $celularfab, $convencionalfab, $whatsappfab, $correofab));
    Database::disconnect();
}

//FUNCION INGRESO DE DATOS DEL VENDEDOR
function ingresoVendedor($codigov, $codigoanf, $nombreven, $civen, $pasven, $direccionven, $celularven, $convencionalven, $whatsappven, $fabligven, $correoven) {
    include 'database.php';
    $pdo = Database::connect();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO `vendedor`(`codigoVen`, `codigo anfitrion`, `nombre vendedor`, `cedula/ruc`, `pasaporte`, `direccion`, `telefono celular`, `telefono convencional`, `whatsapp`, `fabIngreso`, `correoVen`) VALUES (?,?,?,?,?,?,?,?,?,?,?)";
    $q = $pdo->prepare($sql);
    $q->execute(array($codigov, $codigoanf, $nombreven, $civen, $pasven, $direccionven, $celularven, $convencionalven, $whatsappven, $fabligven, $correoven));
    Database::disconnect();
}

//FUNCION INGRESO DE COMPRA DE FABRICA
function comprasFabrica($codvF, $numeropF, $codfF, $cateF, $fechaF) {
    include 'database.php';
    $pdo = Database::connect();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO `comprafab`(`codVenF`, `cantidadPF`, `codFabF`, `categoriaVenF`, `fechaCF`) VALUES (?,?,?,?,?)";
    $q = $pdo->prepare($sql);
    $q->execute(array($codvF, $numeropF, $codfF, $cateF, $fechaF));
    Database::disconnect();
}

//FUNCION PARA CONSULTA REPORTE DIARIO DE FABRICA
function consultadiariaFabrica($hoy, $fabrica) {
    include 'database.php';
    $pdo = Database::connect();
    $sql = 'SELECT co.fechaCF AS fechav,fa.nombre_fabrica AS nombreF,ve.codigoVen AS codigoV,co.cantidadPF AS cantidad,co.categoriaVenF AS categoriaV,(co.cantidadPF*ru.gananciaFab)AS ganancia FROM comprafab co,vendedor ve,fabricante fa,rango_vendedor ru WHERE co.codFabF = fa.codigoFab AND ve.codigoVen = co.codVenF AND ru.Categoria = co.categoriaVenF AND co.fechaCF = ? AND co.codFabF= ?';
    $statement = $pdo->prepare($sql);
    $statement->execute(array($hoy, $fabrica));
    $results = $statement->fetchAll(PDO::FETCH_ASSOC);
    $json = json_encode($results);
    Database::disconnect();
    echo $json;
}

//FUNCION PARA CONSULTA REPORTE SEMANAL DE FABRICA
function consultasemanalFabrica($fabrica, $fechainicioF, $fechafinF) {
    include 'database.php';
    $pdo = Database::connect();
    $sql = 'SELECT co.fechaCF AS fechav,fa.nombre_fabrica AS nombreF,ve.codigoVen AS codigoV,co.cantidadPF AS cantidad,co.categoriaVenF AS categoriaV,(co.cantidadPF*ru.gananciaFab)AS ganancia FROM comprafab co,vendedor ve,fabricante fa,rango_vendedor ru WHERE co.codFabF = fa.codigoFab AND ve.codigoVen = co.codVenF AND ru.Categoria = co.categoriaVenF AND co.codFabF= ? AND co.fechaCF >= ? AND co.fechaCF <= ? ';
    $statement = $pdo->prepare($sql);
    $statement->execute(array($fabrica, $fechainicioF, $fechafinF));
    $results = $statement->fetchAll(PDO::FETCH_ASSOC);
    $json = json_encode($results);
    Database::disconnect();
    echo $json;
}

//FUNCION PARA CONSULTA REPORTE STOCK DE FABRICA
function consultastockFabrica($fabrica) {
    include 'database.php';
    $pdo = Database::connect();
    $sql = 'SELECT sp.id_stock AS id ,fa.nombre_fabrica AS nombreF, sp.stock FROM stock_productos sp,fabricante fa WHERE fa.codigoFab = sp.codFabrica AND fa.codigoFab= ?';
    $statement = $pdo->prepare($sql);
    $statement->execute(array($fabrica));
    $results = $statement->fetchAll(PDO::FETCH_ASSOC);
    $json = json_encode($results);
    Database::disconnect();
    echo $json;
}

//FUNCION PARA CONSULTA CAPTURA DATOS STOCK DE FABRICA
function consultainfostockFabrica($fabrica) {
    include 'database.php';
    $pdo = Database::connect();
    $sql = 'SELECT `id_stock`, `codFabrica`, `stock` FROM `stock_productos` WHERE `id_stock` = ?';
    $statement = $pdo->prepare($sql);
    $statement->execute(array($fabrica));
    $results = $statement->fetchAll(PDO::FETCH_ASSOC);
    $json = json_encode($results);
    Database::disconnect();
    echo $json;
}

//FUNCION MODIFICAR CANTIDAD DE PRODUCTO DE FABRICA
function modificarcantidadproductoFabrica($nuevacanta, $fabrica) {
    include 'database.php';
    $pdo = Database::connect();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "UPDATE `stock_productos` SET `stock`=? WHERE `codFabrica` =?";
    $q = $pdo->prepare($sql);
    $q->execute(array($nuevacanta, $fabrica));
    Database::disconnect();
}

//FUNCION MODIFICAR CANTIDAD DE PRODUCTO DE FABRICA CON COMPRA
function modificarcantidadproductoconcompraFabrica($cantidadcompra, $fabrica) {
    include 'database.php';
    $pdo = Database::connect();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "UPDATE `stock_productos` SET `stock`= (`stock` - ?) WHERE `codFabrica` = ?";
    $q = $pdo->prepare($sql);
    $q->execute(array($cantidadcompra, $fabrica));
    Database::disconnect();
}

//FUNCION PARA CONSULTA COLABORADORES  VENDEDOR
function consultacolaboradoresVendedor($codVendedor, $categoriaVen) {
    include 'database.php';
    $pdo = Database::connect();
    $sql = 'SELECT `codVenF`,vendedor.`nombre vendedor`AS nombreVen,`cantidad`,(`cantidad`*rango_vendedor.gananciaVen)AS ganancia FROM `cantidaddeproductocompradoencadafabrica`,rango_vendedor,vendedor WHERE cantidaddeproductocompradoencadafabrica.`codigo anfitrion`=? AND rango_vendedor.Categoria=? AND cantidaddeproductocompradoencadafabrica.codVenF = vendedor.codigoVen ';
    $statement = $pdo->prepare($sql);
    $statement->execute(array($codVendedor, $categoriaVen));
    $results = $statement->fetchAll(PDO::FETCH_ASSOC);
    $json = json_encode($results);
    Database::disconnect();
    echo $json;
}

//FUNCION PARA CONSULTA RANGO DEL  VENDEDOR
function consultarangoVendedor($codVendedor) {
    include 'database.php';
    $pdo = Database::connect();
    $sql = 'SELECT `categoriaVenF` FROM `comprafab` WHERE codVenF = ? ORDER BY id_compraF DESC LIMIT 1 ';
    $statement = $pdo->prepare($sql);
    $statement->execute(array($codVendedor));
    $results = $statement->fetchAll(PDO::FETCH_ASSOC);
    $json = json_encode($results);
    Database::disconnect();
    echo $json;
}

//FUNCION PARA CONSULTA FABRICAS CON STOCK
function consultafabricasconstockVendedor() {
    include 'database.php';
    $pdo = Database::connect();
    $sql = 'SELECT fabricante.nombre_fabrica,`stock_productos`.`codFabrica`,`stock_productos`.`stock` FROM `stock_productos`,fabricante WHERE fabricante.codigoFab = `stock_productos`.`codFabrica` ';
    $statement = $pdo->prepare($sql);
    $statement->execute(array());
    $results = $statement->fetchAll(PDO::FETCH_ASSOC);
    $json = json_encode($results);
    Database::disconnect();
    echo $json;
}

//FUNCION PARA CONSULTA STOCK DE FABRICA VENDEDOR
function consultastockdefabricasVendedor($fabrica) {
    include 'database.php';
    $pdo = Database::connect();
    $sql = 'SELECT id_stock AS id,fabricante.nombre_fabrica,`stock_productos`.`codFabrica`,`stock_productos`.`stock` FROM `stock_productos`,fabricante WHERE fabricante.codigoFab = `stock_productos`.`codFabrica` AND codFabrica = ?';
    $statement = $pdo->prepare($sql);
    $statement->execute(array($fabrica));
    $results = $statement->fetchAll(PDO::FETCH_ASSOC);
    $json = json_encode($results);
    Database::disconnect();
    echo $json;
}

//FUNCION PARA CONSULTA FABRICAS ALIADAS
function consultafabricasaliadadVendedor() {
    include 'database.php';
    $pdo = Database::connect();
    $sql = 'SELECT `codigoFab`, `nombre_fabrica` AS nombreFab FROM `fabricante`';
    $statement = $pdo->prepare($sql);
    $statement->execute(array());
    $results = $statement->fetchAll(PDO::FETCH_ASSOC);
    $json = json_encode($results);
    Database::disconnect();
    echo $json;
}

//FUNCION PARA CONSULTA STOCK DE FABRICA VENDEDOR
function consultarangodelVendedorseguncompra($cantidad) {
    include 'database.php';
    $pdo = Database::connect();
    $sql = 'SELECT Categoria FROM `rango_vendedor` WHERE ? BETWEEN `valorMinimo` AND `valorMaximo` ';
    $statement = $pdo->prepare($sql);
    $statement->execute(array($cantidad));
    $results = $statement->fetchAll(PDO::FETCH_ASSOC);
    $json = json_encode($results);
    Database::disconnect();
    echo $json;
}

//FUNCION INGRESO DE GANANCIA DE VENDEDOR
function ingresogananciaVendedor($codven, $ganancia, $fecharegistro) {
    include 'database.php';
    $pdo = Database::connect();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO `ganancia_vendedor`(`codigoVende`, `ganancia`, `fecharegistro`) VALUES (?,?,?)";
    $q = $pdo->prepare($sql);
    $q->execute(array($codven, $ganancia, $fecharegistro));
    Database::disconnect();
}

//FUNCION PARA CONSULTA REPORTE SEMANAL DE FABRICA
function consultaganaciansemanalVendedor($codven, $fechainicioVen, $fechafinVen) {
    include 'database.php';
    $pdo = Database::connect();
    $sql = 'SELECT * FROM `ganancia_vendedor` WHERE codigoVende=? AND `fecharegistro` BETWEEN ? AND ? ';
    $statement = $pdo->prepare($sql);
    $statement->execute(array($codven, $fechainicioVen, $fechafinVen));
    $results = $statement->fetchAll(PDO::FETCH_ASSOC);
    $json = json_encode($results);
    Database::disconnect();
    echo $json;
}

//FUNCION PARA CONSULTA REPORTE STOCK DE FABRICA
function consultafabricasconstockengeneralVendedor() {
    include 'database.php';
    $pdo = Database::connect();
    $sql = 'SELECT id_stock AS id,fabricante.nombre_fabrica,`stock_productos`.`codFabrica`,`stock_productos`.`stock` FROM `stock_productos`,fabricante WHERE fabricante.codigoFab = `stock_productos`.`codFabrica` ';
    $statement = $pdo->prepare($sql);
    $statement->execute(array());
    $results = $statement->fetchAll(PDO::FETCH_ASSOC);
    $json = json_encode($results);
    Database::disconnect();
    echo $json;
}

//FUNCION PARA CONSULTA CAPTURA DATOS DE  PARA PEDIDO
function consultainfostockpedidoVendedor($fabrica) {
    include 'database.php';
    $pdo = Database::connect();
    $sql = 'SELECT id_stock AS id, fabricante.nombre_fabrica,`stock_productos`.`codFabrica`,`stock_productos`.`stock` FROM `stock_productos`,fabricante WHERE fabricante.codigoFab = `stock_productos`.`codFabrica` AND id_stock=? ';
    $statement = $pdo->prepare($sql);
    $statement->execute(array($fabrica));
    $results = $statement->fetchAll(PDO::FETCH_ASSOC);
    $json = json_encode($results);
    Database::disconnect();
    echo $json;
}

//FUNCION INGRESO DE PEDIDO DE VENDEDOR
function ingresopedidodelVendedor($codven, $codfab, $cantipedido, $fecharegistrop) {
    include 'database.php';
    $pdo = Database::connect();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO `pedidosven`(`codigovendedorP`, `codigofabricaP`, `cantidadP`, `fechaP`) VALUES (?,?,?,?)";
    $q = $pdo->prepare($sql);
    $q->execute(array($codven, $codfab, $cantipedido, $fecharegistrop));
    Database::disconnect();
}

//FUNCION MODIFICAR CANTIDAD DE PRODUCTO DE FABRICA CON PEDIDO
function modificarcantidadproductoconpedidoVendedor($cantidadpedida, $fabrica) {
    include 'database.php';
    $pdo = Database::connect();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "UPDATE `stock_productos` SET `stock`= (`stock` - ?) WHERE `codFabrica` = ?";
    $q = $pdo->prepare($sql);
    $q->execute(array($cantidadpedida, $fabrica));
    Database::disconnect();
}

//FUNCION PARA CONSULTA CONSULTAR  VALOR A COBRAR VENDEDOR
function consultavaloracobrarVendedor($codven) {
    include 'database.php';
    $pdo = Database::connect();
    $sql = 'SELECT ganancia FROM `ganancia_vendedor` WHERE codigoVende = ?';
    $statement = $pdo->prepare($sql);
    $statement->execute(array($codven));
    $results = $statement->fetchAll(PDO::FETCH_ASSOC);
    $json = json_encode($results);
    Database::disconnect();
    echo $json;
}

//FUNCION PARA CONSULTA CONSULTAR INFORMACION DE FABRICAS ALIADAS VENDEDOR
function consultainformacionfabricaaliadaVendedor($fabrica) {
    include 'database.php';
    $pdo = Database::connect();
    $sql = 'SELECT * FROM `fabricante` WHERE `codigoFab` = ?';
    $statement = $pdo->prepare($sql);
    $statement->execute(array($fabrica));
    $results = $statement->fetchAll(PDO::FETCH_ASSOC);
    $json = json_encode($results);
    Database::disconnect();
    echo $json;
}

//FUNCION INGRESO DDE SOLICITUD DE PAGO VENDEDOR
function ingresosolicituddepagoVendedor($codven, $codfab, $valorapagar, $fecharegistroPv) {
    include 'database.php';
    $pdo = Database::connect();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO `solicitapago`(`codVendedor`, `codFabrica`, `valordepago`, `fecha_solicitud`) VALUES (?,?,?,?)";
    $q = $pdo->prepare($sql);
    $q->execute(array($codven, $codfab, $valorapagar, $fecharegistroPv));
    Database::disconnect();
}

//FUNCION PARA CONSULTA PAGOS A VENDEDORES FABRICA
function consultasolicitudesdepagoFabrica($codven) {
    include 'database.php';
    $pdo = Database::connect();
    $sql = 'SELECT solicitapago.codVendedor AS codven, vendedor.`nombre vendedor` AS nombreven,solicitapago.codFabrica,solicitapago.fecha_solicitud,solicitapago.valordepago FROM `solicitapago`,vendedor WHERE solicitapago.codVendedor = vendedor.codigoVen AND vendedor.codigoVen = ?';
    $statement = $pdo->prepare($sql);
    $statement->execute(array($codven));
    $results = $statement->fetchAll(PDO::FETCH_ASSOC);
    $json = json_encode($results);
    Database::disconnect();
    echo $json;
}

//FUNCION PARA CONSULTA VENTAD DIARIAS  ADMINISTRADOR
function consultaventasdiariasAdministrador($fecharegistroPv) {
    include 'database.php';
    $pdo = Database::connect();
    $sql = 'SELECT * FROM `comprafab` WHERE `fechaCF` = ?';
    $statement = $pdo->prepare($sql);
    $statement->execute(array($fecharegistroPv));
    $results = $statement->fetchAll(PDO::FETCH_ASSOC);
    $json = json_encode($results);
    Database::disconnect();
    echo $json;
}

//FUNCION PARA CONSULTA VENTAD SEMANALES  ADMINISTRADOR
function consultaventassemanalesAdministrador($fechainicioAd, $fechafinAd) {
    include 'database.php';
    $pdo = Database::connect();
    $sql = 'SELECT * FROM `comprafab` WHERE `fechaCF` BETWEEN ? AND ?';
    $statement = $pdo->prepare($sql);
    $statement->execute(array($fechainicioAd, $fechafinAd));
    $results = $statement->fetchAll(PDO::FETCH_ASSOC);
    $json = json_encode($results);
    Database::disconnect();
    echo $json;
}

//FUNCION PARA CONSULTA GANANCIAS SEMANALES VENDEDORES  ADMINISTRADOR
function consultagananciassemanalesvendedorAdministrador($fechainicioAd, $fechafinAd) {
    include 'database.php';
    $pdo = Database::connect();
    $sql = 'SELECT `id_gananciaVen`, `codigoVende`, MAX(`ganancia`)AS ganancia, `fecharegistro` FROM `ganancia_vendedor` WHERE `fecharegistro` BETWEEN  ? AND ? GROUP BY codigoVende';
    $statement = $pdo->prepare($sql);
    $statement->execute(array($fechainicioAd, $fechafinAd));
    $results = $statement->fetchAll(PDO::FETCH_ASSOC);
    $json = json_encode($results);
    Database::disconnect();
    echo $json;
}

//FUNCION PARA CONSULTA GANANCIAS SEMANALES  DE FABRICAS   ADMINISTRADOR
function consultagananciassemanalesfabricasAdministrador($fechainicioAd, $fechafinAd) {
    include 'database.php';
    $pdo = Database::connect();
    $sql = 'SELECT co.fechaCF AS fechav,fa.codigoFab,SUM(co.cantidadPF) AS cantidad,SUM(co.cantidadPF*ru.gananciaFab)AS ganancia FROM comprafab co,vendedor ve,fabricante fa,rango_vendedor ru WHERE co.codFabF = fa.codigoFab AND ve.codigoVen = co.codVenF AND ru.Categoria = co.categoriaVenF AND co.fechaCF >= ? AND co.fechaCF <= ? GROUP BY fa.codigoFab ';
    $statement = $pdo->prepare($sql);
    $statement->execute(array($fechainicioAd, $fechafinAd));
    $results = $statement->fetchAll(PDO::FETCH_ASSOC);
    $json = json_encode($results);
    Database::disconnect();
    echo $json;
}

//FUNCION PARA CONSULTA GANANCIAS DIARIAS  VENDEDORES  ADMINISTRADOR
function consultagananciasdiariasvendedorAdministrador($fecharegistroPv) {
    include 'database.php';
    $pdo = Database::connect();
    $sql = 'SELECT `id_gananciaVen`, `codigoVende`, MAX(`ganancia`)AS ganancia, `fecharegistro` FROM `ganancia_vendedor` WHERE `fecharegistro` = ? GROUP BY fa.codigoFab';
    $statement = $pdo->prepare($sql);
    $statement->execute(array($fecharegistroPv));
    $results = $statement->fetchAll(PDO::FETCH_ASSOC);
    $json = json_encode($results);
    Database::disconnect();
    echo $json;
}

//FUNCION PARA CONSULTA GANANCIAS SEMANALES  DE FABRICAS   ADMINISTRADOR
function consultagananciasdiariasfabricasAdministrador($fecharegistroPv) {
    include 'database.php';
    $pdo = Database::connect();
    $sql = 'SELECT co.fechaCF AS fechav,fa.codigoFab,SUM(co.cantidadPF) AS cantidad,SUM(co.cantidadPF*ru.gananciaFab)AS ganancia FROM comprafab co,vendedor ve,fabricante fa,rango_vendedor ru WHERE co.codFabF = fa.codigoFab AND ve.codigoVen = co.codVenF AND ru.Categoria = co.categoriaVenF AND co.fechaCF = ? GROUP BY fa.codigoFab ';
    $statement = $pdo->prepare($sql);
    $statement->execute(array($fecharegistroPv));
    $results = $statement->fetchAll(PDO::FETCH_ASSOC);
    $json = json_encode($results);
    Database::disconnect();
    echo $json;
}

//FUNCION PARA CONSULTA VENTAS EN UNA FABRICA EN UN TIEMPO   ADMINISTRADOR
function consultaventasporfabricaenuntiempoAdministrador($codfab, $fechainicioAd, $fechafinAd) {
    include 'database.php';
    $pdo = Database::connect();
    $sql = 'SELECT comprafab.fechaCF AS fecha, fabricante.codigoFab,fabricante.nombre_fabrica AS nombreF,comprafab.codVenF AS codven,comprafab.cantidadPF FROM `comprafab`,fabricante WHERE comprafab.codFabF=fabricante.codigoFab and comprafab.codFabF = ? AND comprafab.fechaCF BETWEEN ? AND ? ';
    $statement = $pdo->prepare($sql);
    $statement->execute(array($codfab, $fechainicioAd, $fechafinAd));
    $results = $statement->fetchAll(PDO::FETCH_ASSOC);
    $json = json_encode($results);
    Database::disconnect();
    echo $json;
}

//FUNCION PARA CONSULTA VENTAS EN UN VENDEDOR EN UN TIEMPO   ADMINISTRADOR
function consultaventasporvendedorenuntiempoAdministrador($codven, $fechainicioAd, $fechafinAd) {
    include 'database.php';
    $pdo = Database::connect();
    $sql = 'SELECT comprafab.fechaCF AS fechacompra,comprafab.codVenF AS codven,vendedor.`nombre vendedor` AS nombreV,comprafab.codFabF,comprafab.cantidadPF FROM `comprafab`,vendedor WHERE vendedor.codigoVen = comprafab.codVenF and comprafab.codVenF = ? AND comprafab.fechaCF BETWEEN ? AND ? ';
    $statement = $pdo->prepare($sql);
    $statement->execute(array($codven, $fechainicioAd, $fechafinAd));
    $results = $statement->fetchAll(PDO::FETCH_ASSOC);
    $json = json_encode($results);
    Database::disconnect();
    echo $json;
}

//FUNCION PARA CONSULTA VENDEDORES CON SU FABRICA DE INSCRIPCION
function consultavendedoresconfabricadesdeAdministrador() {
    include 'database.php';
    $pdo = Database::connect();
    $sql = 'SELECT `codigoVen`,`fabIngreso` FROM `vendedor` ';
    $statement = $pdo->prepare($sql);
    $statement->execute(array());
    $results = $statement->fetchAll(PDO::FETCH_ASSOC);
    $json = json_encode($results);
    Database::disconnect();
    echo $json;
}

//FUNCION PARA CONSULTA VENDEDORES ACTIVOS CON SU FABRICA DE INSCRIPCION
function consultavendedoresactivosconfabricadesdeAdministrador() {
    include 'database.php';
    $pdo = Database::connect();
    $sql = 'SELECT comprafab.`codVenF`,vendedor.fabIngreso FROM `comprafab`, vendedor WHERE vendedor.codigoVen=comprafab.codVenF GROUP BY comprafab.codVenF ';
    $statement = $pdo->prepare($sql);
    $statement->execute(array());
    $results = $statement->fetchAll(PDO::FETCH_ASSOC);
    $json = json_encode($results);
    Database::disconnect();
    echo $json;
}

//FUNCION PARA CONSULTA VENDEDORES INACTIVOS CON SU FABRICA DE INSCRIPCION
function consultavendedoresinactivosconfabricadesdeAdministrador() {
    include 'database.php';
    $pdo = Database::connect();
    $sql = 'SELECT vendedor.`codigoVen`,vendedor.`fabIngreso` FROM vendedor WHERE vendedor.codigoVen NOT IN (SELECT comprafab.codVenF FROM comprafab)';
    $statement = $pdo->prepare($sql);
    $statement->execute(array());
    $results = $statement->fetchAll(PDO::FETCH_ASSOC);
    $json = json_encode($results);
    Database::disconnect();
    echo $json;
}

//FUNCION PARA CONSULTA FABRICAS ACTIVOS CON SUS VENDEDORES
function consultafabircasactivosconfabricadesdeAdministrador() {
    include 'database.php';
    $pdo = Database::connect();
    $sql = 'SELECT * FROM `vendedoresporfabrica`';
    $statement = $pdo->prepare($sql);
    $statement->execute(array());
    $results = $statement->fetchAll(PDO::FETCH_ASSOC);
    $json = json_encode($results);
    Database::disconnect();
    echo $json;
}

//FUNCION PARA CONSULTA FABRICAS INACTIVOS CON SUS VENDEDORES
function consultafabricasinactivosconfabricadesdeAdministrador() {
    include 'database.php';
    $pdo = Database::connect();
    $sql = 'SELECT * FROM `fabricasinvendedores` ';
    $statement = $pdo->prepare($sql);
    $statement->execute(array());
    $results = $statement->fetchAll(PDO::FETCH_ASSOC);
    $json = json_encode($results);
    Database::disconnect();
    echo $json;
}

//FUNCION PARA CONSULTA VALORES DE CONFIGURACION
function consultadevaloresdeconfiguracion() {
    include 'database.php';
    $pdo = Database::connect();
    $sql = 'SELECT `id_rango`, `valorMinimo`, `valorMaximo`, `Categoria`, `gananciaVen`, `gananciaFab`, `gananciaDue` FROM `rango_vendedor` ';
    $statement = $pdo->prepare($sql);
    $statement->execute(array());
    $results = $statement->fetchAll(PDO::FETCH_ASSOC);
    $json = json_encode($results);
    Database::disconnect();
    echo $json;
}

//FUNCION PARA CONSULTA VALORES DE CONFIGURACION  EDITAR
function consultadatosdelrangoparacambiar($codrango) {
    include 'database.php';
    $pdo = Database::connect();
    $sql = 'SELECT `id_rango`, `valorMinimo`, `valorMaximo`, `Categoria`, `gananciaVen`, `gananciaFab`, `gananciaDue` FROM `rango_vendedor` WHERE `id_rango` =  ?';
    $statement = $pdo->prepare($sql);
    $statement->execute(array($codrango));
    $results = $statement->fetchAll(PDO::FETCH_ASSOC);
    $json = json_encode($results);
    Database::disconnect();
    echo $json;
}

//FUNCION MODIFICAR VALORES DE CONFIGURACION
function modificarvaloresdeconfiguracion($vlamin, $valmax, $cate, $ganaven, $ganafab, $ganadue, $codrango) {
    include 'database.php';
    $pdo = Database::connect();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "UPDATE `rango_vendedor` SET `valorMinimo`=?,`valorMaximo`=?,`Categoria`=?,`gananciaVen`=?,`gananciaFab`=?,`gananciaDue`=? WHERE `id_rango` = ? ";
    $q = $pdo->prepare($sql);
    $q->execute(array($vlamin, $valmax, $cate, $ganaven, $ganafab, $ganadue, $codrango));
    Database::disconnect();
}

//FUNCION PARA CONSULTA VENDEDORES SIN USUARIO
function consultavendedoressinUsuario() {
    include 'database.php';
    $pdo = Database::connect();
    $sql = "SELECT vendedor.codigoVen FROM vendedor WHERE vendedor.codigoVen NOT IN (SELECT usuarios.codigoFoV FROM usuarios WHERE usuarios.codigoFoV LIKE 'V%')";
    $statement = $pdo->prepare($sql);
    $statement->execute(array());
    $results = $statement->fetchAll(PDO::FETCH_ASSOC);
    $json = json_encode($results);
    Database::disconnect();
    echo $json;
}

//FUNCION PARA CONSULTA DATOS DE VENDEDORES SIN USUARIO
function consultadatosvendedoreparanuevoUsuario($coodven) {
    include 'database.php';
    $pdo = Database::connect();
    $sql = "SELECT `nombre vendedor` AS nombrev, `cedula/ruc` AS ci FROM `vendedor` WHERE `codigoVen` = ?";
    $statement = $pdo->prepare($sql);
    $statement->execute(array($coodven));
    $results = $statement->fetchAll(PDO::FETCH_ASSOC);
    $json = json_encode($results);
    Database::disconnect();
    echo $json;
}

//FUNCION INGRESO DE NUEVO USUARIO
function ingresarnuevoUsuario($cedulanuv, $nombrenuv, $usuarionuv, $clavenuv, $tiponuv, $codigonuv) {
    include 'database.php';
    $pdo = Database::connect();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO `usuarios`(`cedula`, `nombrer`, `nombreu`, `clave`, `tipo`, `codigoFoV`) VALUES (?,?,?,?,?,?)";
    $q = $pdo->prepare($sql);
    $q->execute(array($cedulanuv, $nombrenuv, $usuarionuv, $clavenuv, $tiponuv, $codigonuv));
    Database::disconnect();
}

//FUNCION PARA CONSULTA  FABRICAS SIN USUARIO
function consultafabricassinUsuario() {
    include 'database.php';
    $pdo = Database::connect();
    $sql = "SELECT fabricante.codigoFab FROM fabricante WHERE fabricante.codigoFab NOT IN (SELECT usuarios.codigoFoV FROM usuarios WHERE usuarios.codigoFoV LIKE 'F%')";
    $statement = $pdo->prepare($sql);
    $statement->execute(array());
    $results = $statement->fetchAll(PDO::FETCH_ASSOC);
    $json = json_encode($results);
    Database::disconnect();
    echo $json;
}

//FUNCION PARA CONSULTA DATOS DE FABRICA SIN USUARIO
function consultadatosfabricaparanuevoUsuario($coodfab) {
    include 'database.php';
    $pdo = Database::connect();
    $sql = "SELECT  `nombre_representante` AS nombref, `cedula/pas/ruc` AS ci FROM `fabricante` WHERE `codigoFab` = ?";
    $statement = $pdo->prepare($sql);
    $statement->execute(array($coodfab));
    $results = $statement->fetchAll(PDO::FETCH_ASSOC);
    $json = json_encode($results);
    Database::disconnect();
    echo $json;
}

//FUNCION INGRESO DE NUEVO USUARIO
function ingresarnuevoUsuarioFab($cedulanuv, $nombrenuv, $usuarionuv, $clavenuv, $tiponuv, $codigonuv) {
    include 'database.php';
    $pdo = Database::connect();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO `usuarios`(`cedula`, `nombrer`, `nombreu`, `clave`, `tipo`, `codigoFoV`) VALUES (?,?,?,?,?,?)";
    $q = $pdo->prepare($sql);
    $q->execute(array($cedulanuv, $nombrenuv, $usuarionuv, $clavenuv, $tiponuv, $codigonuv));
    Database::disconnect();
}

//FUNCION CAMBIAR  LA CONTRSEÑA 
function editarclaveusuarios($usuarionu, $clavenu) {
    include 'database.php';
    $pdo = Database::connect();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "UPDATE `usuarios` SET clave = ? WHERE `nombreu` = ? ";
    $q = $pdo->prepare($sql);
    $q->execute(array($clavenu, $usuarionu));
    Database::disconnect();
}

//FUNCION PARA CONSULTA DATOS DE LOS USUAIOR VENDEDORES
function consultavendedoresyUsuarios() {
    include 'database.php';
    $pdo = Database::connect();
    $sql = "SELECT `id`,`codigoFoV` AS codigoV,`nombreu` FROM `usuarios` WHERE `codigoFoV` LIKE 'V%' ";
    $statement = $pdo->prepare($sql);
    $statement->execute(array());
    $results = $statement->fetchAll(PDO::FETCH_ASSOC);
    $json = json_encode($results);
    Database::disconnect();
    echo $json;
}

//FUNCION RESETEAR  LA CONTRSEÑA 
function resetearclaveusuarios($codigoven, $clavenu) {
    include 'database.php';
    $pdo = Database::connect();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "UPDATE `usuarios` SET clave = ? WHERE `id` = ? ";
    $q = $pdo->prepare($sql);
    $q->execute(array($clavenu, $codigoven));
    Database::disconnect();
}

//FUNCION PARA CONSULTA GANANCIA SEMAMAL DEL DUENO
function consultagananciasemanaldeldueno($fechainicioAd, $fechafinAd) {
    include 'database.php';
    $pdo = Database::connect();
    $sql = "SELECT `fechaCF`,`codVenF`, `cantidadPF`,categoriaVenF,(comprafab.cantidadPF * rango_vendedor.gananciaDue)AS ganancia FROM `comprafab`,rango_vendedor WHERE comprafab.categoriaVenF = rango_vendedor.Categoria AND fechaCF BETWEEN ? AND ?";
    $statement = $pdo->prepare($sql);
    $statement->execute(array($fechainicioAd, $fechafinAd));
    $results = $statement->fetchAll(PDO::FETCH_ASSOC);
    $json = json_encode($results);
    Database::disconnect();
    echo $json;
}

//FUNCION PARA CONSULTA GANANCIA DIARIA DEL DUENO
function consultagananciadiariadeldueno($fechainicioAd) {
    include 'database.php';
    $pdo = Database::connect();
    $sql = "SELECT `fechaCF`,`codVenF`, `cantidadPF`,categoriaVenF,(comprafab.cantidadPF * rango_vendedor.gananciaDue)AS ganancia FROM `comprafab`,rango_vendedor WHERE comprafab.categoriaVenF = rango_vendedor.Categoria AND fechaCF = ?";
    $statement = $pdo->prepare($sql);
    $statement->execute(array($fechainicioAd));
    $results = $statement->fetchAll(PDO::FETCH_ASSOC);
    $json = json_encode($results);
    Database::disconnect();
    echo $json;
}

//FUNCION INGRESAR  STOCK DE FABRICA
function ingresarcantidadestockFabrica($fabrica, $cantidad) {
    include 'database.php';
    $pdo = Database::connect();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO `stock_productos`(`codFabrica`, `stock`) VALUES ( ?,? ) ";
    $q = $pdo->prepare($sql);
    $q->execute(array($fabrica, $cantidad));
    Database::disconnect();
}

//FUNCION PARA CONSULTA GANANCIA DIARIA DEL DUENO
function consultapedidioenFabrica($codfabrica) {
    include 'database.php';
    $pdo = Database::connect();
    $sql = "SELECT `id_pedido` ,`fechaP`,`codigovendedorP`AS codven,`cantidadP` FROM `pedidosven` WHERE codigofabricaP = ?";
    $statement = $pdo->prepare($sql);
    $statement->execute(array($codfabrica));
    $results = $statement->fetchAll(PDO::FETCH_ASSOC);
    $json = json_encode($results);
    Database::disconnect();
    echo $json;
}

//FUNCION INGRESAR  STOCK DE FABRICA
function eliminapedidoFabrica($idPedido) {
    include 'database.php';
    $pdo = Database::connect();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "DELETE FROM `pedidosven` WHERE `id_pedido` = ?";
    $q = $pdo->prepare($sql);
    $q->execute(array($idPedido));
    Database::disconnect();
}
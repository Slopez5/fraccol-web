<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('adminlte/dist/css/adminlte.css') }}">
    <title>Vista Previa Contrato</title>
    <style>
        .sangria {
            text-indent: 20px;
            /* Aplica la sangría a la primera línea */
            margin-left: 0px;
            /* O utiliza padding-left si prefieres */
        }
    </style>

    <script src="https://cdn.tiny.cloud/1/fup3avm8gz99s15t89e0oex89jcdrays65cyb1v9pcei55fx/tinymce/6/tinymce.min.js"
        referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: '#mytextarea',
            plugins: 'lists advlist',
            advlist_bullet_styles: 'lower-alpha',
            setup: (editor) => {
                editor.on('keypress', function(e) {
                    var content = editor.getContent({
                        format: 'text'
                    });
                    var cursorIndex = editor.selection.getRng().startOffset;
                    var textBeforeCursor = content.substring(0, cursorIndex);
                    var words = textBeforeCursor.trim().split(/\s+/);
                    var lastWord = words.pop();
                    if (lastWord.startsWith('@')) {
                        if (e.code === 'Space' || e.key === ' ') {
                            console.log(lastWord);
                        }
                    }



                });
            }
        });
    </script>
</head>

<body>
    <h1 class="text-center">CONTRATO PRIVADO DE PROMESA DE COMPRAVENTA</h1>
    <p class="text-justify">EN VILLA DE ALVAREZ, COLIMA A 14 DE DICIEMBRE DE 2023, CELEBRAN POR UNA PARTE "DE LOA
        ASESORES INMOBILIARIOS, SOCIEDAD DE RESPONSABILIDAD LIMITADA DE CAPITAL VARIABLE" REPRESENTADA EN ESTE ACTO POR
        SU REPRESENTANTE LEGAL EL C. FRANCISCO DE LOA VERA REPRESENTADO EN ESTE ACTO POR SU REPRESENTANTE LEGAL EL C.
        SERGIO CONTRERAS CORTES, A QUIEN EN LO SUCESIVO SE LE DENOMINARÁ "PROMITENTE VENDEDOR": Y POR OTRA PARTE LA C.
        JOSE GERARDO CARDENAS RAMIREZ, A QUIEN EN LO SUCESIVO SE LE DENOMINARÁ "PROMITENTE COMPRADOR": Y QUIENES
        ACTUANDO DE FORMA CONJUNTA SE LES DENOMINARÁ COMO “LAS PARTES", MISMAS QUE SE OBLIGAN AL TENOR DE LAS
        SIGUIENTES:</p>
    <h2 class="text-center">DECLARACIONES</h2>
    <p class="sangria">1.- POR EL "PROMITENTE VENDEDOR":</p>
    <p>1.1.- DE LOA ASESORES INMOBILIARIOS, S. DE R.L. DE C.V., Es una persona moral, con capacidad y personalidad
        jurídica propia, con Registro Federal de Contribuyentes LAI220616K30 y domicilio Fiscal ubicado en la calle
        Paseo de los Nardos No. 265, colonia Real Bugambilias, CP. 28979 en Villa de Álvarez, Colima, constituida
        legalmente como Sociedad de Responsabilidad Limitada de Capital Variable, según lo acredita con la escritura
        pública número 24,944 veinticuatro mil novecientos cuarenta y cuatro, volumen centésimo décimo quinto, tomo Ill
        tercero, con fecha del 16 de Junio de año 2022, de la Notaria Publica No. 4 de la ciudad y puerto de Manzanillo,
        Colima, ante la fe del Titular, Lic. Rene Manuel Tortolero Santillana; debidamente registrada en el Registro
        Público de Comercio del Estado de Colima, bajo el número de incorporación FME N-2022045651 con fecha de 22 de
        junio el año 2022.
        Declara el C. FRANCISCO DE LOA VERA por conducto de su representante legal, bajo protestad de decir verdad, que
        su representante cuenta con las facultades necesarias para representarlo en este acto de conformidad con la
        escritura pública número 26,874 de fecha 21 de julio de 2023, otorgado ante la fe del Licenciado RENÉ MANUEL
        TORTOLERO SANTILLANA notario público número 4 de la cuidad de Manzanillo Colima, manifiesta que la personalidad
        que comparece que conserva integra su vigencia, ya que no ha sido revocada ni modificada en forma alguna.</p>
    <p>1.2.- Que el predio denominado “FRACCIONAMIENTO EL ENCANTO 2", ubicado en el Municipio de Cuauhtémoc, Colima, se
        encuentra libre de todo gravamen, Servidumbre de Paso sin Limitación de Dominio, cuenta con posesión física y
        jurídica de una fracción del predio identificado como parcela número 77 Z-2 P1/1 del Ejido “Felipe Chávez”, que
        se ampara con la escritura pública número 13,769 de fecha 27 veintisiete de noviembre de 2020 dos mil veinte,
        pasada ante la fe del Licenciado Héctor Michel Camarena, Titular de la Notaria Publica número 7 siete de la
        demarcación de la cuidad de Colima, Colima e inscrita en el Registro Público de la Propiedad y del Comercio bajo
        el Folio Real número 259741-1 e identificación con clave catastral 05-06-90-000-077-000.</p>
    <p>1.3.- Que celebró el contrato de asociación en participación de fecha 01 de septiembre de 2023, con la Sra. Ma
        Concepción Gaitán Maldonado o también conocida como Ma. Concepción Gaytán Maldonado, quien es único y legítimo
        propietario respecto del predio señalado en la declaración anterior y que fue aportado para los fines y en los
        términos que se describe en el mismo.</p>
    <p>1.4.- Señala como domicilio para efectos de este contrato, para oír y recibir toda clase de notificaciones el
        ubicado en la Paseo de los Nardos No. 265, colonia Real Bugambilias, de la ciudad de Villa de Álvarez, del
        estado de Colima, C.P. 28979.</p>
    <p class="sangria">2.- POR EL "PROMITENTE COMPRADOR":</p>
    <p>2.1.- Es una persona física, mayor de edad, con plena capacidad jurídica para celebrar el presente contrato.</p>
    <p>2.2.- Que cuenta con la capacidad jurídica y económica para adquirir el inmueble objeto del presente contrato.
    </p>
    <p>2.3.- Señala como domicilio para oír y recibir toda clase de notificaciones el ubicado en calle vista de la
        barianca #8482, coto rio verde interior 6 B, fracc albateria, Zapopan, Jalisco.</p>
    <p class="sangria">3.- POR "LAS PARTES":</p>
    <p>3.1.- Que es su deseo celebrar el presente contrato de promesa de compraventa y en su caso, obligarse al tenor de
        las siguientes:</p>
    <h2 class="text-center">CLÁUSULAS</h2>
    <p class="sangria">PRIMERA.- El "PROMITENTE VENDEDOR" promete vender al "PROMITENTE COMPRADOR", quien a su vez
        promete adquirir el que será el lote número 18 de la manzana 1, con una extensión superficial de 374.18 metros
        cuadrados, de lo cual servirá de base el plano georreferenciado anexo al presente instrumento, una vez que se
        constituya el “FRACCIONAMIENTO EL ENCANTO 2", conforme al uso de suelo que en su momento autorice el H.
        Ayuntamiento. Mismo lote que contará con las siguientes medidas y linderos:</p>
    <p>AL NORTE.- En 30.00 metros con lote 19 manzana 1. <br>
        AL SUR.- En 28.01 metros con calle sin nombre. <br>
        AL OESTE.- En 12.07 metros con lote 17 manzana 1. <br>
        AL ESTE.- En 2.78-11.00 metros con calle sin nombre.</p>
    <p>
        SEGUNDA.- "LAS PARTES" pactan que el precio del inmueble descrito en la cláusula anterior es por la cantidad de
        $325,536.60 (TRESCIENTOS VEINTICINCO MIL QUINIENTOS TREINTA Y SÍES PESOS 60/100 M.N.); cantidad que será pagada
        por el "PROMITENTE COMPRADOR" al "PROMITENTE VENDEDOR" de la siguiente manera:
        a) A la firma del presente contrato el "PROMITENTE COMPRADOR" entregara al “PROMITENTE VENDEDOR" la cantidad de
        $5,000.00 (CINCO MIL PESOS 00/100 M.N.) como anticipo o enganche, sirviendo el presente como el recibo más
        eficaz que en derecho proceda.
        b) La cantidad restante de $320,536.60 (TRESCIENTOS VEINTE MIL QUINIENTOS TREINTA Y SEIS PESOS 00/100 M.N.) el
        "PROMITENTE COMPRADOR" se obliga a pagar al "PROMITENTE VENDEDOR" en 72 mensualidades continuas y cada una de
        ellas por la cantidad de $4,451.89 (CUATRO MIL CUATROCIENTOS CINCUENTA Y UN PESOS 89100 M.N.) hasta que se cubra
        en su totalidad la cantidad restante, los días 14 de cada mes.
        Los atrasos en las mensualidades correspondientes generan un 3% tres por ciento de intereses moratorios, hasta
        su entera regularización.
        En caso de incumplimiento por parte del "PROMITENTE COMPRADOR" y a falta de pago de 4 o más mensualidades, "LAS
        PARTES" pactan que "EL PROMITENTE VENDEDOR" rescindirá el presente contrato de forma unilateral, y el
        "PROMITENTE COMPRADOR" perderá el derecho de reembolso de las cantidades que haya entregado, renunciando a
        cualquier acción y prestación que le corresponda con motivo de este contrato.
    </p>





    <h1>TinyMCE Quick Start Guide</h1>
    <form method="post">
        <textarea id="mytextarea">Hello, World!</textarea>
    </form>

</body>

</html>

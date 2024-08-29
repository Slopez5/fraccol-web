<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Clauses;
use App\Models\Contract;
use App\Models\ContractStatus;
use App\Models\Country;
use App\Models\Declarations;
use App\Models\Development;
use App\Models\Lead;
use App\Models\Metadata;
use App\Models\Parties;
use App\Models\State;
use Illuminate\Http\Request;

class ConfigurationsController extends Controller
{
    public function test()
    {
        return redirect()->route('developments');
    }


    //countries
    /**
     * Guarda un pais en la base de datos
     * @param Name Nombre del pais
     * @param Code Codigo del pais
     * @return JSON regresa el pais guardado
     */
    public function saveCountry(Request $request)
    {
        $country = new Country();
        $country->name = "México";
        $country->code = "MX";
        $country->save();
        return response()->success(["country" => $country, "message" => "Pais guardado exitosamente"], 200);
    }

    /**
     * Obtiene una lista de todos los paises registrados
     * @return JSON countries
     */
    public function getCountries()
    {
        return response()->success(["countries" => Country::all()], 200);
    }

    /**
     * Actualizar un pais
     */
    public function updateCountry()
    {
    }

    /**
     * Eliminar un pais
     */
    public function deleteCountry()
    {
    }

    //States
    /**
     * Guarda un estado y lo asocia a un pais
     * @param CountryId
     * @param name
     * @param abbreviation
     * @return JSON regresa el estado guardado
     */
    public function saveState()
    {
        $country = Country::find(1);
        $country->states()->save(new State(["name" => "Jalisco", "abbreviation" => "Jal"]));
        $country->save();
        return response()->success(["country" => $country, "message" => "Estado guardado exitosamente"], 200);
    }

    /**
     * Obtiene una lista de los estados registrados de un pais
     * @param CountryId
     * @return JSON regresa la lista de estados de un pais
     */
    public function getStatesByCountry($countryId)
    {
        return response()->success(["states" => Country::find($countryId)->states], 200);
    }

    /**
     * Actualizar un Estado
     */
    public function updateState()
    {
    }

    /**
     * Eliminar un Estado
     */
    public function deleteState()
    {
    }

    //Cities
    /**
     * Guarda una ciudad y la asocia a un estado
     * @param EstateId
     * @param name
     * @return JSON regresa la ciudad guardada
     */
    public function saveCity()
    {
        $state = State::find(2);
        $state->cities()->save(new City(["name" => "Guadalajara"]));
        $state->save();
        return response()->success(["state" => $state], 200);
    }

    /**
     * obtiene una lista de las ciudades pertenecientes a un estado
     * @param StateId
     * @return JSON regresa las ciudades que pertenecen a un estado
     */
    public function getCitiesByState($stateId)
    {
        return response()->success(["cities" => State::find($stateId)->cities], 200);
    }

    /**
     * Actualizar un Ciudad
     */
    public function updateCity()
    {
    }

    /**
     * Eliminar un Ciudad
     */
    public function deleteCity()
    {
    }

    //Contract status
    /**
     * Guarda un estatus para los contratos
     */
    public function saveContractStatus()
    {
        $contactStatus = new ContractStatus();
        $contactStatus->status_name = "No Firmado";
        $contactStatus->description = "Contrato no firmado";
        $contactStatus->save();

        $contactStatus = new ContractStatus();
        $contactStatus->status_name = "Firmado";
        $contactStatus->description = "Contrato firmado";
        $contactStatus->save();
    }

    /**
     * Obtiene una lista de los estatus disponibles para los contratos
     */
    public function getContractStatus()
    {
        return response()->success(["contractStatus" => ContractStatus::all()], 200);
    }

    /**
     * Actualizar un Estatus de contrato
     */
    public function updateContractStatus()
    {
    }

    /**
     * Eliminar un Estatus de contrato
     */
    public function deleteContractStatus()
    {
    }

    //Contracts
    /**
     * 
     */
    public function saveContractByDevelopment()
    {
        $development = Development::find(10);
        $contract = new Contract();
        $contract->name  = "Contrato El encanto 2";
        $contract->start_text = 'EN VILLA DE ALVAREZ, COLIMA A 14 DE DICIEMBRE DE 2023, CELEBRAN POR UNA PARTE "DE LOA ASESORES INMOBILIARIOS, SOCIEDAD DE RESPONSABILIDAD LIMITADA DE CAPITAL VARIABLE" REPRESENTADA EN ESTE ACTO POR SU REPRESENTANTE LEGAL EL C. FRANCISCO DE LOA VERA REPRESENTADO EN ESTE ACTO POR SU REPRESENTANTE LEGAL EL C. SERGIO CONTRERAS CORTES, A QUIEN EN LO SUCESIVO SE LE DENOMINARÁ "PROMITENTE VENDEDOR": Y POR OTRA PARTE LA C. @cliente, A QUIEN EN LO SUCESIVO SE LE DENOMINARÁ "PROMITENTE COMPRADOR": Y QUIENES ACTUANDO DE FORMA CONJUNTA SE LES DENOMINARÁ COMO “LAS PARTES", MISMAS QUE SE OBLIGAN AL TENOR DE LAS SIGUIENTES:';
        $contract->end_text = 'Leído que fue el presente contrato, sabedores de su alcance y valor legal, se manifestaron conformes en todas sus partes con sus contenidos y para constancia lo firman en unión de los testigos que la suscriben.';
        $development->contracts()->save($contract);
        $development->save();
    }

    /**
     * 
     */
    public function getContractsByDevelopment()
    {
     return response()->success(["contracts" => Development::find(10)->contracts],200);   
    }

    /**
     * Actualizar un Contrato
     */
    public function updateContract()
    {
    }

    /**
     * Eliminar un Contrato
     */
    public function deleteContract()
    {
    }

    //Parties

    /**
     * 
     * 
     */
    public function saveParty()
    {
        $party = new Parties();
        $party->name = "Promitente Vendedor";
        $party->description = "Vendedor";
        $party->save();

        $party = new Parties();
        $party->name = "Promitente Comprador";
        $party->description = "Comprador";
        $party->save();

        $party = new Parties();
        $party->name = "Las partes";
        $party->description = "comprador y vendedor";
        $party->save();
    }

    /**
     * 
     * 
     */
    public function asignPartyToContract()
    {
        $contract = Contract::find(1);
        $parties = Parties::all();
        $contract->parties()->attach($parties);
        $contract->save();
    }

    /**
     * 
     * 
     */
    public function getAllParties()
    {
    }

    /**
     * 
     * 
     */
    public function getPartiesByContract()
    {
    }

    /**
     * 
     * 
     */
    public function updateParty()
    {
    }

    /**
     * 
     * 
     */
    public function deleteParty()
    {
    }

    /**
     * 
     */

    public function unasignPartyOfContract()
    {
    }

    //Declarations
    /**
     * 
     */
    public function saveDeclarationByContract()
    {
        $contract = Contract::find(1);
        $contract->declarations()->saveMany([
            new Declarations(["part_id" => 1, "number" => "1", "description" => "DE LOA ASESORES INMOBILIARIOS, S. DE R.L. DE C.V., Es una persona moral, con capacidad y personalidad jurídica propia, con Registro Federal de Contribuyentes LAI220616K30 y domicilio Fiscal ubicado en la calle Paseo de los Nardos No. 265, colonia Real Bugambilias, CP. 28979 en Villa de Álvarez, Colima, constituida legalmente como Sociedad de Responsabilidad Limitada de Capital Variable, según lo acredita con la escritura pública número 24,944 veinticuatro mil novecientos cuarenta y cuatro, volumen centésimo décimo quinto, tomo Ill tercero, con fecha del 16 de Junio de año 2022, de la Notaria Publica No. 4 de la ciudad y puerto de Manzanillo, Colima, ante la fe del Titular, Lic. Rene Manuel Tortolero Santillana; debidamente registrada en el Registro Público de Comercio del Estado de Colima, bajo el número de incorporación FME N-2022045651 con fecha de 22 de junio el año 2022.
            Declara el C. FRANCISCO DE LOA VERA por conducto de su representante legal, bajo protestad de decir verdad, que su representante cuenta con las facultades necesarias para representarlo en este acto de conformidad con la escritura pública número 26,874 de fecha 21 de julio de 2023, otorgado ante la fe del Licenciado RENÉ MANUEL TORTOLERO SANTILLANA notario público número 4 de la cuidad de Manzanillo Colima, manifiesta que la personalidad que comparece que conserva integra su vigencia, ya que no ha sido revocada ni modificada en forma alguna.
            " ]),
            new Declarations(["part_id" => 1, "number" => "2", "description" => 'Que el predio denominado “FRACCIONAMIENTO EL ENCANTO 2", ubicado en el Municipio de Cuauhtémoc, Colima, se encuentra libre de todo gravamen, Servidumbre de Paso sin Limitación de Dominio, cuenta con posesión física y jurídica de una fracción del predio identificado como parcela número 77 Z-2 P1/1 del Ejido “Felipe Chávez”, que se ampara con la escritura pública número 13,769 de fecha 27 veintisiete de noviembre de 2020 dos mil veinte, pasada ante la fe del Licenciado Héctor Michel Camarena, Titular de la Notaria Publica número 7 siete de la demarcación de la cuidad de Colima, Colima e inscrita en el Registro Público de la Propiedad y del Comercio bajo el Folio Real número 259741-1 e identificación con clave catastral 05-06-90-000-077-000. ' ]),
            new Declarations(["part_id" => 1, "number" => "3", "description" => 'Que celebró el contrato de asociación en participación de fecha 01 de septiembre de 2023, con la Sra. Ma Concepción Gaitán Maldonado o también conocida como Ma. Concepción Gaytán Maldonado, quien es único y legítimo propietario respecto del predio señalado en la declaración anterior y que fue aportado para los fines y en los términos que se describe en el mismo. ' ]),
            new Declarations(["part_id" => 1, "number" => "4", "description" => 'Señala como domicilio para efectos de este contrato, para oír y recibir toda clase de notificaciones el ubicado en la Paseo de los Nardos No. 265, colonia Real Bugambilias, de la ciudad de Villa de Álvarez, del estado de Colima, C.P. 28979.' ]),
            new Declarations(["part_id" => 2, "number" => "1", "description" => "Es una persona física, mayor de edad, con plena capacidad jurídica para celebrar el presente contrato. " ]),
            new Declarations(["part_id" => 2, "number" => "2", "description" => "Que cuenta con la capacidad jurídica y económica para adquirir el inmueble objeto del presente contrato. " ]),
            new Declarations(["part_id" => 2, "number" => "3", "description" => "Señala como domicilio para oír y recibir toda clase de notificaciones el ubicado en @dirección " ]),
            new Declarations(["part_id" => 3, "number" => "1", "description" => "Que es su deseo celebrar el presente contrato de promesa de compraventa y en su caso, obligarse al tenor de las siguientes: " ]),
        ]);
        $contract->save();
    }

    /**
     * 
     */
    public function getDeclarationsByContract()
    {
    }

    /**
     * 
     * 
     */
    public function updateDeclaration()
    {
    }

    /**
     * 
     * 
     */
    public function deleteDeclaration()
    {
    }

    //Clauses

    /**
     * 
     * 
     */
    public function saveClauseByContract()
    {
        $contract = Contract::find(1);
        $contract->clauses()->saveMany([
            new Clauses(["part_id" => 1, "number" => "Primera", "description" => 'El "PROMITENTE VENDEDOR" promete vender al "PROMITENTE COMPRADOR", quien a su vez promete adquirir el que será el lote número @numero_lote de la manzana @numero_manzana, con una extensión superficial de @area_lote metros cuadrados, de lo cual servirá de base el plano georreferenciado anexo al presente instrumento, una vez que se constituya el “FRACCIONAMIENTO EL ENCANTO 2", conforme al uso de suelo que en su momento autorice el H. Ayuntamiento. Mismo lote que contará con las siguientes medidas y linderos:
                AL NORTE.- @medidas_linderos_norte.
                AL SUR.- @medidas_linderos_sur.
                AL OESTE.- @medias_linderos_oeste.
                AL ESTE.- @medidas_linderos_este.
                ' ]),
            new Clauses(["part_id" => 3, "number" => "Segunda", "description" => '"LAS PARTES" pactan que el precio del inmueble descrito en la cláusula anterior es por la cantidad de $@precio (@precio_letra M.N.); cantidad que será pagada por el "PROMITENTE COMPRADOR" al "PROMITENTE VENDEDOR" de la siguiente manera:
            a) A la firma del presente contrato el "PROMITENTE COMPRADOR" entregara al “PROMITENTE VENDEDOR" la cantidad de $@enganche (@enganche_letra M.N.) como anticipo o enganche, sirviendo el presente como el recibo más eficaz que en derecho proceda.
            b) La cantidad restante de $@resto (@resto_letra M.N.) el "PROMITENTE COMPRADOR" se obliga a pagar al "PROMITENTE VENDEDOR" en 72 mensualidades continuas y cada una de ellas por la cantidad de $@mensualidad (@mensualidad_letra M.N.) hasta que se cubra en su totalidad la cantidad restante, los días @dia_pago de cada mes.
            Los atrasos en las mensualidades correspondientes generan un 3% tres por ciento de intereses moratorios, hasta su entera regularización.
            En caso de incumplimiento por parte del "PROMITENTE COMPRADOR" y a falta de pago de 4 o más mensualidades, "LAS PARTES" pactan que "EL PROMITENTE VENDEDOR" rescindirá el presente contrato de forma unilateral, y el "PROMITENTE COMPRADOR" perderá el derecho de reembolso de las cantidades que haya entregado, renunciando a cualquier acción y prestación que le corresponda con motivo de este contrato.
            ' ]),
            new Clauses(["part_id" => 3, "number" => "Tercera", "description" => '"LAS PARTES" pactan que el inmueble descrito en la cláusula primera será entregado de manera formal a el "PROMITENTE COMPRADOR" a partir de quinto año de la firma del presente contrato, una vez que dicho inmueble cuente con los servicios de calles empedradas, electricidad, drenaje y toma de agua. Los contratos de agua y luz correrán por cuenta del "PROMITENTE COMPRADOR"
            Manifiesta el “PROMITENTE VENDEDOR” que el inmueble objeto del presente contrato, entregara la posesión física a la “PROMITENTE COMPRADOR”, después de los seis meses de firmado el presente contrato, manifestando las limitaciones de uso.' ]),
            new Clauses(["part_id" => 2, "number" => "Cuarta", "description" => 'El "PROMITENTE COMPRADOR" acepta que está estrictamente prohibido cualquier otro uso de suelo que no esté autorizado por el H. Ayuntamiento de la Ciudad. ' ]),
            new Clauses(["part_id" => 3, "number" => "Quinta", "description" => '"LAS PARTES" pactan que el presente contrato se formalizará mediante escritura pública, posterior al quinto año de la firma del presente instrumento y que se obtenga la autorización por el H. Ayuntamiento para esos fines.
            "LAS PARTES" pactan que el "PROMITENTE COMPRADOR" se obliga a cubrir por su cuenta los gastos de escrituración que en su momento se generen para la formalización mediante escritura pública a partir del quinto año de la firma del presente contrato.
            ' ]),
            new Clauses(["part_id" => 1, "number" => "Sexta", "description" => 'EI "PROMITENTE VENDEDOR" se compromete a entregar al "PROMITENTE COMPRADOR" al corriente de todos los impuestos, derechos y contribuciones posterior al quinto año de la firma del presente instrumento. ' ]),
            new Clauses(["part_id" => 2, "number" => "Septima", "description" => 'El "PROMITENTE COMPRADOR" se obliga a pagar las cantidades señaladas en la cláusula segunda de este contrato en el domicilio que el "PROMITENTE VENDEDOR" señale, sin que sea necesario que este último le requiera de pago, pues la sola llegada del plazo hará las veces de requerimiento. ' ]),
            new Clauses(["part_id" => 3, "number" => "Octava", "description" => 'El incumplimiento de cualquiera de “LAS PARTES" respecto de las obligaciones derivadas del presente contrato, dará lugar a la rescisión o al cumplimiento forzoso del presente contrato. La parte culpable del incumplimiento pagará a la parte inocente la cantidad correspondiente al 15% quince por ciento de la cantidad total señalada en la cláusula segunda, por concepto de daños y perjuicios, más los gastos judiciales y extrajudiciales que se originen por tal motivo. Se exceptúa de lo aquí pactado el caso fortuito o de fuerza mayor. ' ]),
            new Clauses(["part_id" => 3, "number" => "Novena", "description" => '"LAS PARTES" están de acuerdo que el precio pactado al inmueble es el justo, por lo que ninguna de las partes sufre empobrecimiento, ni se enriquece en detrimento de la otra, además que no existe error, dolo, violencia, mala fe, ni enriquecimiento ilegítimo; por lo que "LAS PARTES" renuncian a cualquier acción tendiente a la nulidad del presente contrato, por alguna de dichas causas, renunciando de igual forma a cualquier acción penal que se derive del presente contrato. ' ]),
            new Clauses(["part_id" => 3, "number" => "Decima", "description" => 'Para el caso de controversia con el presente contrato, desde este momento "LAS PARTES" se obligan a someterse en primera instancia a los Métodos Alternos de Solución de Controversias, con la finalidad de llegar a un acuerdo justo para "LAS PARTES" ' ]),
            new Clauses(["part_id" => 3, "number" => "Decima primera", "description" => 'De no conciliarse por medio de los Métodos Alternos de Solución de Controversias, "LAS PARTES" se someten a la jurisdicción de los tribunales de la ciudad de Colima, Colima, renunciando a cualquier fuero que por su domicilio futuro les pudiera corresponder. ' ]),
            new Clauses(["part_id" => 3, "number" => "Decima Segunda", "description" => '"LAS PARTES" convienen en dejar obligados a sus herederos a que den cumplimiento a lo estipulado en el presente contrato, por si alguno falleciere, y en caso de ser necesario se sujetan expresamente a los Tribunales de Colima, Colima, para su cumplimiento.
En virtud de lo anterior la "PROMITENTE COMPRADORA" deja como beneficiario o heredero tanto de sus derechos como de las obligaciones pactadas en este contrato a @beneficiario_cliente.' ]),
        ]);
        $contract->save();
    }

    /**
     * 
     * 
     */
    public function getClausesByContract()
    {
    }

    /**
     * 
     * 
     */
    public function updateClause()
    {
    }

    /**
     * 
     * 
     */
    public function deleteClause()
    {
    }

    /**
     * 
     * 
     */
    public function saveLead(){
        $lead = new Lead();
        $lead->first_name = "";
        $lead->last_name = "";
        $lead->birthDay = "";
        $lead->birthPlace = "";
        $lead->maritalStatus = "";
        $lead->occupation = "";
        $lead->unofficialManager = "";
        $lead->beneficiary = "";
        $lead->email = "";
        $lead->phone = "";
        $lead->address_id = "";

        $lead->save();
    }

    public function saveMetadata() {
        $development = Development::find(1);
        $development->metadata()->save(new Metadata(["key" => "ejemplo","value"=>"valor"]));
        $development->save();
        
    }

    public function showContract() {
        
    }

    //ExpanseCategories

    //InvoiceStatus

    //LoteStatus

    //

}

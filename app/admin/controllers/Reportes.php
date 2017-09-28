<?php
namespace App\admin\controllers;

class Reportes
{
    function __construct()
    {
        Role('admin');
    }

    public function index()
    {
        View();
    }

    public function create()
    {
        View();
    }

    public function store()
    {

    }

    public function show($id)
    {

    }

    public function edit($id)
    {
        View(compact('id'));
    }

    public function update($id)
    {

    }

    public function destroy($id)
    {

    }

    public function lista_pensionados()
    {
        $pensionados = Pensionado::all();
        $mpdf = new \mPDF('','Letter',11,'arial');
        ob_start();
        include('app/admin/views/reportes/encabezado.php');
        $mpdf->SetHTMLHeader(ob_get_clean());
        $mpdf->SetHTMLFooter('
        <table width="100%" style="vertical-align: bottom; font-family: serif; font-size: 8pt; color: #000000; font-weight: bold; font-style: italic;"><tr>
        <td width="80%"><span style="font-weight: bold; font-style: italic;">Nota: De uso Exclusivo para la Distribución de PDVAL.</span></td>
        <td width="20%" style="text-align: right; ">{PAGENO}/{nbpg}</td>
        </tr></table>

        ');
        $mpdf->AddPage('', // L - landscape, P - portrait 
        '', '', '', '',
        5, // margen izquierdo
        5, // margen derecho
        40, // margin arriba
        5, // margin abajo
        0, // margin encabezado
        0); // margin pie de pagina

        ob_start();
        include("app/admin/views/reportes/pensionados.php");
        $mpdf->WriteHTML(ob_get_clean(),2);
        $nombre = "Pensionados.pdf";
        $mpdf->Output($nombre,'D');
    }
}
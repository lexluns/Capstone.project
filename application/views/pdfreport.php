<?php 
tcpdf();
foreach($retdata as $data) :
 $data->arti_img1;
 $data->name_obj;
 $data->acc_number;
 $data->institution;
 $data->owner;
 $data->classify;
 $data->place_orig;
 $data->material;
 $data->acc_number;
 $data->name_obj;
$data->institution;
$data->owner;
$data->classify;
$data->place_orig;
$data->material;
$data->mode;
$data->description;
$data->conserv;
$data->hist;
$data->reference;
$data->date_acq;
$data->price;
$data->cultural;
$data->function;
$data->collector;
$data->chronology;
$data->style;
$data->Dimensions;
endforeach;
$obj_pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
$obj_pdf->SetCreator(PDF_CREATOR);
$title = "Item Report";
$obj_pdf->SetTitle($title);
$obj_pdf->SetHeaderData(false);
$obj_pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$obj_pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
$obj_pdf->SetDefaultMonospacedFont('helvetica');
$obj_pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$obj_pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
$obj_pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$obj_pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
$obj_pdf->SetFont('helvetica', '', 10);
$obj_pdf->setFontSubsetting(false);
$obj_pdf->AddPage();
$obj_pdf->setPrintHeader(false);
$obj_pdf->setPrintFooter(false);

ob_start();

$htmlcontent = '<html>
                        
				  <body>
					<table>
					  <tr>


						';		
$htmlcontent .= '<td width = "250"><img style = "height: 200px; " src="' .$data->arti_img1.'"/ ></td>';

$htmlcontent .= " <td>
                         <h4> &nbsp; Accession number or catalogue number</h4>
						 <p> &nbsp; ".$data->acc_number. "</p> ";
$htmlcontent .= "
                         <h4> &nbsp; Name of object or species</h4>
						 <p> &nbsp; ".$data->name_obj. "</p> 
                        <h4> &nbsp; Dimension</h4>
                         <p> &nbsp; ".$data->Dimensions. "</p>";



$htmlcontent .= "        <h4> &nbsp;  Material(s)</h4>
                         <p>  &nbsp;".$data->material."</p></td></tr>";

$htmlcontent .= "<tr>  
	<td> 
	<h4> &nbsp;  Institution</h4>
    <p>  &nbsp;".$data->institution."</p>
    </td>


    <td> 
	<h4> &nbsp;  Ownership</h4>
    <p>  &nbsp;".$data->owner."</p>
    </td>


</tr>";

$htmlcontent .= "<tr>  
	<td> 
	<h4> &nbsp;  Classification</h4>
    <p>  &nbsp;".$data->classify."</p>
    </td>


    <td> 
	<h4> &nbsp;  Place of origin</h4>
    <p>  &nbsp;".$data->place_orig."</p>
    </td>


</tr>";


$htmlcontent .= "<tr>  
	<td> 
	<h4> &nbsp;  Date of acquisition</h4>
    <p>  &nbsp;".$data->date_acq."</p>
    </td>


    <td> 
	<h4> &nbsp;  Price paid, Estimated value(dated)</h4>
    <p>  &nbsp;<span>P</span>&nbsp;".$data->price."</p>
    </td>


</tr>";


$htmlcontent .= "<tr>  
	<td> 
	<h4> &nbsp;  Cultural or Ethnic group</h4>
    <p>  &nbsp;".$data->cultural."</p>
    </td>


    <td> 
	<h4> &nbsp;  Function, Use, Utilisation</h4>
    <p>  &nbsp;".$data->function."</p>
    </td>


</tr>";

$htmlcontent .= "<tr>  
	<td> 
	<h4> &nbsp;  Collector, Expedition</h4>
    <p>  &nbsp;".$data->cultural."</p>
    </td>


    <td> 
	<h4> &nbsp;  Chronology, Doubtful attribution</h4>
    <p>  &nbsp;".$data->function."</p>
    </td>


</tr>";


$htmlcontent .= "<tr>  
	<td> 
	<h4> &nbsp;  Style, School, Influences</h4>
    <p>  &nbsp;".$data->style."</p>
    </td>

        <td> 
	<h4> &nbsp;  References</h4>
    <p align = 'justify'>  &nbsp;".$data->reference."</p>
    </td>
   




</tr>";


$htmlcontent .= "<tr>  

	<td> 
	<h4> &nbsp;  Name of artist, or Class, Order, Family, Genus </h4>
    <p align = 'justify'>   &nbsp;".$data->name_art."</p>
    </td>

      <td> 
    <h4>&nbsp;Location in Museum</h4>
    <p align = 'justify'>  &nbsp;".$data->locate."</p>
    </td>








</tr>";


$htmlcontent .= "<tr>  


      <td> 
    <h4>&nbsp;Mode, Source & Place of acquisition</h4>
    <p align = 'justify'>  &nbsp;".$data->mode."</p>
    </td>

    
  <td> 
    <h4> &nbsp;  History </h4>
    <p align = 'justify'>   &nbsp;".$data->hist."</p>
    </td>
   

</tr>";





$htmlcontent .= "<br><br><br>";

$htmlcontent .= "<tr>  


    	<td> 
	<h4>Description, Techniques, Possible Title, Signature, Measurement</h4>
    <p align = 'justify'>".$data->description."</p>
    </td>

    

    <td> 
	<h4> &nbsp;  Conservation, Restoration, Museugraphical notes</h4>
    <p align = 'justify'>  &nbsp;".$data->conserv."</p>
    </td>

   

</tr>";












       






$htmlcontent .=        "</table></body></html>";


ob_end_clean();
$obj_pdf->writeHTML($htmlcontent, true, false, true, false, '');
$obj_pdf->Output('Report.pdf', 'I');

?>

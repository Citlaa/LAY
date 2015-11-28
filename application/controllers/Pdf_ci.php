<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Pdf_ci extends CI_Controller 
{
 
    public function __construct()
    {
        parent::__construct();
        //cargamos la libreria html2pdf
        $this->load->library('html2pdf');
        //cargamos el modelo pdf_model
    }
 
    private function createFolder()
    {
        if(!is_dir("./files"))
        {
            mkdir("./files", 0777);
            mkdir("./files/pdfs", 0777);
        }
    }
 
    function _example_output($output = null)
 
    {
        $this->load->view('our_template.php',$output);
    }
    public function index()
    {
    
        //establecemos la carpeta en la que queremos guardar los pdfs,
        //si no existen las creamos y damos permisos
        $this->createFolder();
 
        //importante el slash del final o no funcionará correctamente
        $this->html2pdf->folder('./files/pdfs/');
        
        //establecemos el nombre del archivo
        $this->html2pdf->filename('test.pdf');
        
        //establecemos el tipo de papel
        $this->html2pdf->paper('a4', 'portrait');
        
        //datos que queremos enviar a la vista, lo mismo de siempre
        
        
        //hacemos que tome la vista como datos a imprimir
        //importante utf8_decode para mostrar bien las tildes, ñ y demás
        $this->html2pdf->html(utf8_decode($this->load->view('pdf', $data, true)));
        
        //si el pdf se guarda correctamente lo mostramos en pantalla
        if($this->html2pdf->create('save')) 
        {
            $this->show();
        }
    } 
 
    //funcion que ejecuta la descarga del pdf
    public function downloadPdf()
    {
        //si existe el directorio
        if(is_dir("./files/pdfs"))
        {
            //ruta completa al archivo
            $route = base_url("files/pdfs/test.pdf"); 
            //nombre del archivo
            $filename = "test.pdf"; 
            //si existe el archivo empezamos la descarga del pdf
            if(file_exists("./files/pdfs/".$filename))
            {
                header("Cache-Control: public"); 
                header("Content-Description: File Transfer"); 
                header('Content-disposition: attachment; filename='.basename($route)); 
                header("Content-Type: application/pdf"); 
                header("Content-Transfer-Encoding: binary"); 
                header('Content-Length: '. filesize($route)); 
                readfile($route);
            }
        }    
    }
 
 
    //esta función muestra el pdf en el navegador siempre que existan
    //tanto la carpeta como el archivo pdf
    public function show()
    {
        if(is_dir("./files/pdfs"))
        {
            $filename = "test.pdf"; 
            $route = base_url("files/pdfs/test.pdf"); 
            if(file_exists("./files/pdfs/".$filename))
            {
                header('Content-type: application/pdf'); 
                readfile($route);
            }
        }
    }
    public function mostrar_reportes2()
    {
        $grocery = new grocery_CRUD();

         $grocery->set_theme('bootstrap');
         $grocery->set_table('denuncias');
         $grocery->set_language('spanish');
        // $grocery->add_action('Periodo','','reportes/periodo');
         $grocery->set_relation('idEstatus','estatus','descripcion');
         $grocery->set_relation('idRecepcion','recepcion','descripcion');
         $grocery->set_relation('idDependencia','dependencias','dependencia');
         $grocery->set_relation('idCiudadano','ciudadanos','nombre');
         $grocery->set_relation('idDireccion','direcciones','colonia');
         $grocery->set_relation('idAsunto','asuntos','descripcion');
         $grocery->display_as('idDependencia','Dependencia');
         $grocery->display_as('idCiudadano','Ciudadano');
         $grocery->display_as('idDireccion','Direccion');
         $grocery->display_as('idAsunto','Asunto'); 
         $grocery->field_type('idDependencia', 'text');
         $grocery->field_type('idAsunto', 'text');
         $grocery->columns('idCiudadano','idDependencia','idDireccion','fecha','idEstatus');
         
         
         
         $grocery->unset_edit();
         $grocery->unset_add();
         $grocery->unset_read();
         $grocery->unset_delete();
         $grocery->unset_export();
         $grocery->unset_print();

         $grocery->fields('fecha','idDependencia','idEstatus','idRecepcion','idCiudadano','idDireccion','idAsunto');
         $output = $grocery->render();
         $this->_example_output($output);
    }

    //función para crear y enviar el pdf por email
    //ejemplo de la libreria sin modificar
    public function mail_pdf()
    {
        
        //establecemos la carpeta en la que queremos guardar los pdfs,
        //si no existen las creamos y damos permisos
        $this->createFolder();
 
        //importante el slash del final o no funcionará correctamente
        $this->html2pdf->folder('./files/pdfs/');
        
        //establecemos el nombre del archivo
        $this->html2pdf->filename('test.pdf');
        
        //establecemos el tipo de papel
        $this->html2pdf->paper('a4', 'portrait');
        
        //datos que queremos enviar a la vista, lo mismo de siempre
        
        //hacemos que coja la vista como datos a imprimir
        //importante utf8_decode para mostrar bien las tildes, ñ y demás
        $this->html2pdf->html(utf8_decode($this->load->view('pdf', $data, true)));
 
 
        //Check that the PDF was created before we send it
        if($path = $this->html2pdf->create('save')) 
        {
 
            $this->load->library('email');
 
            $this->email->from('your@example.com', 'Your Name');
            $this->email->to('israel965@yahoo.es'); 
            
            $this->email->subject('Email PDF Test');
            $this->email->message('Testing the email a freshly created PDF');    
 
            $this->email->attach($path);
 
            $this->email->send();
            
            echo "El email ha sido enviado correctamente";
                        
        }
        
    } 
}

<?php
class articles extends CI_Controller {
public function __construct()
{
parent::__construct();
$this->load->model('articles_modele');
}
public function index()
{
$data['articles'] = $this->articles_modele->get_articles();
$data['title'] = 'Liste des articles';
$this->load->view('templates/header', $data);
$this->load->view('articles/index', $data);
$this->load->view('templates/footer');

$this->load->library('unit_test');
$this->unit->run('azertyuiop', 'is_string');
echo $this->unit->report();

}

public function view($slug)
{
$data['articles'] = $this->articles_modele->get_articles($slug);
             if(empty($data['articles']))
             {
                 show_404();
             }
             $data['titre'] = $data['articles']['titre'];
             $this->load->view('templates/header', $data);
             $this->load->view('articles/news', $data);
             $this->load->view('templates/footer');        
}
public function create()
{
    $this->load->helper('form');
    $this->load->library('form_validation');

    $data['titre'] = 'Create a news item';

    $this->form_validation->set_rules('titre', 'titre', 'required');
    $this->form_validation->set_rules('texte', 'texte', 'required');

    if ($this->form_validation->run() === FALSE)
    {
        $this->load->view('templates/header', $data);
        $this->load->view('articles/create');
        $this->load->view('templates/footer');

    }
    else
    {
        $this->news_model->set_news();
        $this->load->view('articles/success');
    }
}
}

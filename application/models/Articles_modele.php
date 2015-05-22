<?php
class articles_modele extends CI_Model {
public function __construct()
{
$this->load->database();
}
public function get_articles($slug = FALSE)
{
if ($slug === FALSE)
{
//Pour récupérer tous les articles
$query = $this->db->get('articles');
return $query->result_array();
}
//Pour récupérer un article en fonction de son slug
$query = $this->db->get_where('articles', array('slug' => $slug));
return $query->row_array();
}
public function set_news()
{
    $this->load->helper('url');

    $slug = url_title($this->input->post('titre'), 'dash', TRUE);

    $data = array(
        'titre' => $this->input->post('titre'),
        'slug' => $slug,
        'texte' => $this->input->post('texte')
    );

    return $this->db->insert('articles', $data);
}
}
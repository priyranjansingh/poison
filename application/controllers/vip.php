<?php
	
	
	if (!defined('BASEPATH'))
    	exit('No direct script access allowed');

	class Vip extends CI_Controller {

		private $songs_in_cart = 0;
    	private $videos_in_cart = 0;
    
	    public function __construct() {
	        parent::__construct();
	        $this->load->helper(array('form', 'url'));
	//        $this->load->model('Song_model');
	        $this->load->model('Vip_model');
	//        $this->load->model('Download_model');
	        $this->load->helper('text');
	        $this->load->helper('download');
	        $this->load->library('session');
	    }

	    public function index() {
	        /*if ($this->myauth->getUserId() == 6) {
	            $data['isPaid'] = true;
	        } else {
	            $data['isPaid'] = Am_Lite::getInstance()->checkPaid();
	        }*/
	        $data['videos'] = $this->Vip_model->getVideoList(5,0);
	        $data['songs'] = $this->Vip_model->getSongsList(5,0);
	        $data['videoCount'] = $this->Vip_model->getCount(2);
	        $data['songCount'] = $this->Vip_model->getCount(1);
	        $data['videoGenres'] = $this->Vip_model->getAllVideosGenres();
	        $data['songGenres'] = $this->Vip_model->getAllSongsGenres();
	        
	        $this->load->view('index',$data);
	    }

	    public function subGenreFilter(){

	    	$genreSlug = $_POST['genre'];
	    	$subGenres = $this->Vip_model->getSubGenres($genreSlug);
	    	echo json_encode($subGenres,true);

	    }

	    public function filterSongByGenre(){
	    	$genreSlug = $_POST['genre'];
	    	$data['songsList'] = $this->Vip_model->getListByGenre($genreSlug);
	    	$data['count'] = ceil(sizeof($data['songsList'])/5);
	    	echo json_encode($data);
	    }

	    public function filterSongBySubGenre(){
	    	$genreSlug = $_POST['genre'];
	    	$songsList = $this->Vip_model->getSubGenres($genreSlug);
	    	echo json_encode($songsList);
	    }

	    public function pagination(){
	    	$genreSlug = $_POST['genre'];
	    	$subGenreSlug = $_POST['subGenre'];
	    	$offset = $_POST['page'];
	    	$type = $_POST['type'];
	    	if($genreSlug == "" && $subGenreSlug == ""){
	    		if($type == "music"){
		    		$data['songsList'] = $this->Vip_model->getSongsList(5,$offset);
		    	} else {
		    		$data['songsList'] = $this->Vip_model->getVideoList(5,$offset);
		    	}
	    	}
	    	echo json_encode($data);
	    }

	    public function videoGenreFilter(){
	    	
	    }

	    public function search(){

	    }

	    public function getSampleUrl(){
	    	$slug = $_POST['slug'];
	    	$filePath = $this->Vip_model->getSample($slug);
	    	$path = explode("../", $filePath[0]->filePath);
	    	$data['file'] = $path[1];
	    	$data['type'] = $filePath[0]->songType;
	    	$data['songName'] = $filePath[0]->songName;
	    	echo json_encode($data);
	    }

	    public function download(){

	    }

	    public function addToCrate(){

	    }

	    public function downloadCrate(){
	    	
	    }


	}

?>
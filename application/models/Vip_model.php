<?php

	if (!defined('BASEPATH'))
    	exit('No direct script access allowed');

	class Vip_model extends CI_Model {

		public function getAllSongsGenres(){
			$this->db->where('parent',0);
			$this->db->where('type',1);
			$query = $this->db->get('genre');
			return $query->result();

		}

		public function getAllVideosGenres(){
			$this->db->where('parent',0);
			$this->db->where('type',2);
			$query = $this->db->get('genre');
			return $query->result();
		}

		public function getGenreSlug($slug){
			$this->db->where('slug',$slug);
			$query = $this->db->get('genre');
			return $query->result();
		}

		public function getSubGenres($slug){
			$genre = $this->getGenreSlug($slug);
			$this->db->select('name,slug');
			$this->db->where('parent',$genre[0]->id);
			$this->db->where('type',$genre[0]->type);
			$query = $this->db->get('genre');
			return $query->result();	
		}

		public function getListByGenre($slug){
			$genre = $this->getGenreSlug($slug);
			$this->db->select('songName,slug,artistName,bpm,DATE(createdAt) AS createdAt');
			$this->db->where('genre',$genre[0]->id);
			$query = $this->db->get('song_lists');
			return $query->result();
		}

		public function getVideoSubgenres($id){
			$this->db->where('parent',$id);
			$this->db->where('type',2);
			$query = $this->db->get('genre');
			return $query->result();	
		}

		public function getSample($slug){
			$this->db->select('id,songName,filePath,total_play');
			$this->db->where('slug',$slug);
			$query = $this->db->get("song_lists");
			$file = $query->result();
			$total_play = $file[0]->total_play + 1;
			$song_id = $file[0]->id;
			$data=array('total_play' => $total_play);
			$this->db->where('id',$song_id);
			$this->db->update('song_lists',$data);
			return $file;
		}

		public function getParentGenre($id){

		}

		public function downloadUpdate($song){

			$user = $this->myauth->getUserId();
			$this->db->where('songs', $song);
			$this->db->where('user_id', $user);
	        $query = $this->db->get('downloads');
	        $checkSong = $query->num_rows();

	        if($checkSong == 0){
	        	$this->db->set('songs', $play->id);
		        $this->db->set('created_at', date('Y-m-d H:i:s'));
		        $this->db->set('updated_at', date('Y-m-d H:i:s'));
		        $this->db->set('user_id', $user);

		        $this->db->insert('downloads');	
	        } else {
	        	$songCount = $query->result();
	        }

	        
		}

		public function getAllDownloadByUser($user){
	        $this->db->where('user_id', $user);
	        $query = $this->db->get('downloads');
	    }

		public function getSongsList($limit = 5,$offset){
			$query = $this->db->query("SELECT songName,slug,artistName,bpm,DATE(createdAt) AS createdAt FROM `song_lists` WHERE `songType` = 1 ORDER BY id LIMIT $limit OFFSET $offset");
			return $query->result();
		}

		public function getCount($type){
			$this->db->where('songType', $type);
	        $query = $this->db->get('song_lists');
	        return ceil($query->num_rows()/5);
		}

		public function getVideoList($limit = 5,$offset){
			$query = $this->db->query("SELECT songName,slug,artistName,bpm,DATE(createdAt) AS createdAt FROM `song_lists` WHERE `songType` = 2 ORDER BY id LIMIT $limit OFFSET $offset");
			return $query->result();
		}

		public function searchVideo($query,$artistName,$songName){

		}

		public function searchSong($query,$artistName,$songName){

		}

		public function searchAll($query,$artistName,$songName){

		}

		public function searchByBpm($from,$to){

		}

	}

?>
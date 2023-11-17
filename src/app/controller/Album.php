<?php

class Album extends Controller{
    public function index($page=1){
        $page = $page < 1 ? 1 : $page;
        $albumModel = $this->model('AlbumModel');
        $countItems = $albumModel->countItems();
        $itemsPerPage = 1;
        $totalPages = ceil($countItems/$itemsPerPage);
        $offset = ($page - 1) * $itemsPerPage;
        
        $items = $albumModel->getItems($offset, $itemsPerPage);
        $data['items'] = $items;
        $data['totalPages'] = $totalPages;
        $data['page'] = $page;
        $this->view('Album', $data);
    }

    public function search() {
        $albumModel = $this->model('AlbumModel');
        $searchInput = $_GET['search']; // Get the search input from the query string

        // Modify the 'getItems' method in your model to accept a search input
        $items = $albumModel->getItemsBySearch($searchInput);

        // Return the search results as JSON
        echo json_encode($items);
    }

    public function pakeParams($artist="Default_Artist"){
        echo "This is $artist";
        $data['artist'] = $artist;
        $this->view('HomeView', $data);
    }

    public function add_album(){ //post[imagepath] diapus dulu
        if (!$_POST['nama_album'] || !$_POST['artist'] || !$_POST['durasi_album'] || !$_POST['tanggal_terbit'] || !$_POST['genre']) {
            header('Location:' . BASEURL . '/album/index');
        }
        else{
            $cekArtis = $this->model("AlbumModel")->cekArtisAda($_POST['artist']);
            if($cekArtis){
                $this->model("AlbumModel")->tambahDataAlbum($_POST);
                header('Location:' . BASEURL . '/album/index');
            }
            else{
                header('Location:' . BASEURL . '/album/index');
            }
            
        }
    }

    public function remove_album($id){
        if($this->model('AlbumModel')->hapusDataAlbum($id) > 0){
            header('Location:' . BASEURL . '/album/index');
        }
        else{
            header('Location:' . BASEURL . '/album/index');
        }
    }

}
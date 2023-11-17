<?php

class Artist extends Controller{
    public function index($page=1){
        $page = $page < 1 ? 1 : $page;
        $artistModel = $this->model('ArtistModel');
        $countItems = $artistModel->countItems();
        $itemsPerPage = 1;
        $totalPages = ceil($countItems/$itemsPerPage);
        $offset = ($page - 1) * $itemsPerPage;

        $items = $artistModel->getItems($offset, $itemsPerPage);

        $data['items'] = $items;
        $data['totalPages'] = $totalPages;
        $data['page'] = $page;
        $this->view('Artist', $data);
    }

    public function pakeParams($artist="Default_Artist"){
        echo "This is $artist";
        $data['artist'] = $artist;
        $this->view('HomeView', $data);
    }

    public function add_artist(){
        if (!$_POST['artist'] || !$_POST['country'] || !$_POST['tipe']) {
            header('Location:' . BASEURL . '/artist/index');
        }
        else{
            $this->model("ArtistModel")->tambahDataArtist($_POST);
            header('Location:' . BASEURL . '/artist/index');
        }
    }

    public function remove_artist($id){
        if($this->model('ArtistModel')->hapusDataArtist($id) > 0){
            header('Location:' . BASEURL . '/artist/index');
        }
        else{
            header('Location:' . BASEURL . '/artist/index');
        }
    }

}